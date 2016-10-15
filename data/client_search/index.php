<?php
// ライブラリ読込
require_once(BASE_DIR."NK_Page.php");
require_once(BASE_DIR."NK_Database.php");
require_once(BASE_DIR."NK_Util.php");
require_once(BASE_DIR."NK_Login.php");
require_once(BASE_DIR."NK_PasswordCompact.php");


class Client_search_Index extends NK_Page {

	var $xml;

	function init() {

		parent::init();

		$this->xmlInit();

		// ページモード
		$this->imode1 = true;

		// タイトル・パーツテンプレート設定
		$this->header_title = "取引先 検索結果";
		$this->header_tpl = "common_header.tpl";
		$this->footer_tpl = "common_footer.tpl";
		$this->body_id = "";

		// メインテンプレート
		// $this->contents_tpl = "contents_index.tpl";

		// ログインチェック
		if (!$_SESSION['LOGIN_STATUS']) {
			if (!empty($_COOKIE['guys_auto_login'])) {
				$auto_login_key = $_COOKIE['guys_auto_login'];

				$sql = $this->xml->getSql("common", "check_loginsession");
				$queryArr = array();
				$queryArr[] = $auto_login_key;
				$select = $this->selectTable2($sql, $queryArr);

				if (count($select) > 0) {
					// セッション投入
					session_regenerate_id();
					$_SESSION['LOGIN_STATUS'] = true;
					$_SESSION['staffID'] = $select[0]['staffID'];
					$_SESSION['systemID'] = $select[0]['systemID'];
				} else {
					// ログインページへリダイレクト
					header("Location: ".SITE_URL."index.php");

					exit();
				}
			} else {
				// ログインページへリダイレクト
				header("Location: ".SITE_URL."index.php");

				exit();
			}
		}

		// 権限チェック
		$sql = $this->xml->getSql("common", "status_clientSearchEdit");
		$queryArr = array();
		$queryArr[] = $_SESSION['staffID'];
		$selectStatus = $this->selectTable2($sql, $queryArr);
		$view_flg1 = 0;
		if ($selectStatus[0]['cnt'] == 1) {
			$view_flg1 = 1;
		}
		$this->smarty->assign("view_flg1", $view_flg1);

	}

	function init_param($page, $form = array()) {
	}

	function process() {

		$this->getManage();

		// ページモード
		$mode = "index";
		if ($_REQUEST['mode']) {
			$mode = $_REQUEST['mode'];
		}

		// パラメータのセット
		$searchClient = $_REQUEST['searchClient'];
		$searchState = $_REQUEST['searchState'];
		$searchType = $_REQUEST['searchType'];

//print_r("@searchClient：${searchClient}<br />");
//print_r("@searchState：${searchState}<br />");
//print_r("@searchType：${searchType}<br />");

		// ページモードで処理を切り替え
		switch ($mode) {

			case "index":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client_search", "index");

				break;

			case "filter":

				// メインテンプレート
				$this->contents_tpl = $this->xml->getTemplate("client_search", "index");

				break;

			case "csv":

				// メインテンプレート
				// $this->contents_tpl = $this->xml->getTemplate("client_search", "index");
				$this->imode0 = true;

				// パラメータのセット
				foreach ($_POST as $key => $value) {
					$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
				}

				// 取引先一覧取得
				$sql = $this->xml->getSql("client_search", "select_client");
				
				if ($searchState != "" || $searchType != "") {
					$sql .= " INNER JOIN GUTclientBase AS A003 ON A001.codeNumber = A003.codeNumber AND A001.officeCode = A003.officeCode AND A003.status = '1' ";
					if ($searchState != "") {
						$sql .= " AND A003.clientState = '".$searchState."' ";
					}
					if ($searchType != "") {
						$sql .= " AND A003.dealInfo = '".$searchType."' ";
					}
				}
				else {
					$sql .= " LEFT OUTER JOIN GUTclientBase AS A003 ON A001.codeNumber = A003.codeNumber AND A001.officeCode = A003.officeCode AND A003.status = '1' ";
				}
				
				$sql .= " LEFT OUTER JOIN GUMstaff AS A004 ON A003.representative = A004.staffID AND A004.status = '1' ";
				$sql .= " WHERE A001.status = '1' AND A002.status = '1'  ";
				if ($searchClient != "") {
					$sql .= " AND (CONCAT(A002.officialName, A001.codeNumber, A001.officeCode, A001.office, A001.searchBox) LIKE '%".$searchClient."%')   ";
				}
				
				$select = $this->selectTable2($sql, array());

				// 配列
				$dealStateArr[0] = "";
				$dealStateArr[1] = "継続中";
				$dealStateArr[2] = "停止";

				// 配列
				$dealTypeArr[0] = "";
				$dealTypeArr[1] = "継続取引";
				$dealTypeArr[2] = "単発取引";
				$dealTypeArr[3] = "外注先";

				// 配列
				$onOffArr[0] = "";
				$onOffArr[1] = "○";

				// CSVファイル名の設定
				$csv_file = "client-".date("YmdHis").".csv";

				// CSVデータの初期化
				$csv_data = "";

				// CSV作成
				foreach ($select as $key => $value) {
					$csv_data .= '"'.$value['clientNameInSystem'].'",';
					$csv_data .= '"'.$value['office'].'",';
					$csv_data .= '"'.$dealStateArr[$value['clientState']].'",';
					$csv_data .= '"'.$dealTypeArr[$value['dealInfo']].'",';
					$csv_data .= '"'.$value['name'].'",';
					$csv_data .= '"'.$onOffArr[$value['takeConstructionOrder']].'",';
					$csv_data .= '"'.$onOffArr[$value['sellingMaterials']].'",';
					$csv_data .= '"'.$onOffArr[$value['orderMaterials']].'",';
					$csv_data .= '"'.$onOffArr[$value['orderConstruction']].'"';
					if (count($select) !== intval($key) + 1) {
						$csv_data .= "\n";
					}
				}

				// MIMEタイプの設定
				header("Content-Type: application/octet-stream");

				// ファイル名の表示
				header("Content-Disposition: attachment; filename=$csv_file");

				// データの出力
				echo mb_convert_encoding($csv_data, "SJIS", "UTF-8");

				break;

			default:

				break;

		}
		
		// パラメータのセット
		foreach ($_POST as $key => $value) {
			$arrForm[$key] = htmlspecialchars($value, ENT_QUOTES, "UTF-8");
		}

		// 現在のページ数
		$pageNo = 1;
		if ($_GET['page'] && $_GET['page'] > 1) {
			$pageNo = $this->params->sanitize($_GET['page']);
		}
		$startLimit = ($pageNo - 1) * PAGING_NO;

		// 取引先一覧取得（count）
		$sql = $this->xml->getSql("client_search", "count_client");
		
		if ($searchState != "" || $searchType != "") {
			$sql .= " INNER JOIN GUTclientBase AS A003 ON A001.codeNumber = A003.codeNumber AND A001.officeCode = A003.officeCode AND A003.status = '1' ";
			if ($searchState != "") {
				$sql .= " AND A003.clientState = '".$searchState."' ";
			}
			if ($searchType != "") {
				$sql .= " AND A003.dealInfo = '".$searchType."' ";
			}
		}
		else {
			$sql .= " LEFT OUTER JOIN GUTclientBase AS A003 ON A001.codeNumber = A003.codeNumber AND A001.officeCode = A003.officeCode AND A003.status = '1' ";
		}
		
		$sql .= " LEFT OUTER JOIN GUMstaff AS A004 ON A003.representative = A004.staffID AND A004.status = '1' ";
		$sql .= " WHERE A001.status = '1' AND A002.status = '1'  ";
		if ($searchClient != "") {
			$sql .= " AND (CONCAT(A002.officialName, A001.codeNumber, A001.officeCode, A001.office, A001.searchBox) LIKE '%".$searchClient."%')   ";
		}
		
		$selectQuery = $this->selectTable2($sql, array());
		$countSelectQuery = $selectQuery[0]['cnt'];

		// 取引先一覧取得
		$sql = $this->xml->getSql("client_search", "select_client");

		if ($searchState != "" || $searchType != "") {
			$sql .= " INNER JOIN GUTclientBase AS A003 ON A001.codeNumber = A003.codeNumber AND A001.officeCode = A003.officeCode AND A003.status = '1' ";
			if ($searchState != "") {
				$sql .= " AND A003.clientState = '".$searchState."' ";
			}
			if ($searchType != "") {
				$sql .= " AND A003.dealInfo = '".$searchType."' ";
			}
		}
		else {
			$sql .= " LEFT OUTER JOIN GUTclientBase AS A003 ON A001.codeNumber = A003.codeNumber AND A001.officeCode = A003.officeCode AND A003.status = '1' ";
		}

		$sql .= " LEFT OUTER JOIN GUMstaff AS A004 ON A003.representative = A004.staffID AND A004.status = '1' ";
		$sql .= " WHERE A001.status = '1' AND A002.status = '1'  ";
		if ($searchClient != "") {
			$sql .= " AND (CONCAT(A002.officialName, A001.codeNumber, A001.officeCode, A001.office, A001.searchBox) LIKE '%".$searchClient."%')   ";
		}

		$sql .= "LIMIT ".$startLimit.",".PAGING_NO;

//print_r("@sql：${sql}");
		
		$select = $this->selectTable2($sql, array());
		$countSelect = count($select);

		// ページング
		$pagingArr = NK_Util::paging($countSelectQuery, PAGING_NO, $pageNo);
		if ($pageNo == 1) {
			$pagingArr['start_view'] = 1;
		} else {
			$pagingArr['start_view'] = $pageNo * PAGING_NO - 1;
		}
		$pagingArr['end_view'] = $pagingArr['start_view'] + $countSelect - 1;

		// テンプレートへ投入
		$this->smarty->assign("mode", $mode);
		$this->smarty->assign("editMode", $editMode);
		$this->smarty->assign("arrForm", $arrForm);
		$this->smarty->assign("select", $select);
		$this->smarty->assign("pageNo", $pageNo);
		$this->smarty->assign("countSelectQuery", $countSelectQuery);
		$this->smarty->assign("pagingArr", $pagingArr);
		$this->smarty->assign("searchClient", $searchClient);
		$this->smarty->assign("searchState", $_REQUEST['searchState']);
		$this->smarty->assign("searchType", $_REQUEST['searchType']);

		parent::process();

	}

	function destroy() {

		parent::destroy();

	}


	/*** User Function ***/

	function getManage() {

		$xml = new NK_Xml();
		$xml->init("manage", true);
		$managelist = $xml->getManageList();
		foreach ($managelist as $list) {
			foreach ($list->attributes() as $key => $value) {
			}
		}

	}

	function xmlInit() {

		$this->xml = new NK_Xml();
		$this->xml->init("index", false);
//		$this->xml->init("index_temp1", false);

		$this->header_title = $this->xml->getTitle();
		$navi1 = $this->xml->createNavi();
		$this->smarty->assign("navi1", $navi1);
		$navi2 = $this->xml->createNavi();
		$this->smarty->assign("navi2", $navi2);

	}

	function selectTable($sql, $data = array(), $order="") {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		if (count($data) > 0) {
			foreach ($data as $key => $val) {
				if (strcmp($key, "mode") != 0) {
					$sql .= " AND ".$key."='".$val."' ";
				}
			}
		}
		$arrRet = $db->query($sql . $order);
		$db->disconnect();
		return $arrRet;

	}

	function selectTable2($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$arrRet = $db->query($sql, $data);
		$db->disconnect();
		return $arrRet;

	}

	function execTable($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->sqlexec($sql, $data);
		$db->disconnect();
		return $ret;

	}

	function execTableNull($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->sqlexec_null($sql, $data);
		$db->disconnect();
		return $ret;

	}

	function insertTable($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->insert($sql, $data);
		$db->disconnect();
		return $ret;

	}

	function insertTableNull($sql, $data) {

		$db = new NK_Database();
		$db->init();
		$db->connect();
		$ret = $db->insert_null($sql, $data);
		$db->disconnect();
		return $ret;

	}

}
?>
