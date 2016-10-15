<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>特定月内 表示：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../js/function.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<h1 id="logo"><a href="../../top.php"><img src="../../img/common/logo_header.png" height="39" width="166" alt="GUY’S COMPANY Oparation Management System"></a></h1>
				<div class="boxRight">
					<a href="../../index.php">ログアウト</a>
					<a href="#" id="menuBtn"><img src="../../img/common/btn_menu.png" alt="メニューボタン"></a>
				</div>
			</div>
			<nav id="gNav">
				<ul>
					<li><a href="../../top.php">ホーム</a></li>
					<li><a href="../../keiri/index.php">経理処理Top</a></li>
					<li><a href="../../in-house_order/index.php">自社発注</a></li>
					<li><a href="../../preceding_order/index.php">先行発注</a></li>
					<li><a href="../../hinban/index.php">品番登録・編集</a></li>
					<li><a href="../../staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="../../company/index.php">企業一覧/登録・編集</a></li>
					<li><a href="../../client/index.php">取引先ページ新規作成</a></li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<nav id="subNavTop">
						<ul>
							<li class="leftEnd"><a href="../../keiri/seikyusho/index.php">請求書発行</a></li>
							<li><a href="../../keiri/nyukin-shori/index.php">入金処理</a></li>
							<li class="currentLink"><a href="index.php">入金予定表</a></li>
							<li><a href="../../keiri/urikake/index.php">売掛情報</a></li>
							<li><a href="../../keiri/uke-seikyu/index.php">受請求書処理</a></li>
							<li><a href="../../keiri/shiharai-shori/index.php">支払処理</a></li>
							<li><a href="../../keiri/shiharai-yotei/index.php">支払予定表</a></li>
							<li><a href="../../keiri/kaikake/index.php">買掛情報</a></li>
							<li><a href="../../keiri/shikakekin/index.php">仕掛金一覧</a></li>
							<li><a href="../../keiri/nyushukkin/index.php">入出金一覧</a></li>
							<li class="rightEnd"><a href="../../keiri/jisha-keihi/index.php">自社経費登録</a></li>
						</ul>
					</nav>
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft mr20">
							<h2>入金予定表／特定月内表示</h2>
						</div>
					</div>
					<table class="tableA w594">
						<tbody>
							<tr>
								<th class="w40">対象</th>
								<td class="w184">0000年 00月度</td>
								<th class="w87">入金予定科目</th>
								<td class="w145">
									<select name="accountTitle" class="w145">
										<option value="すべて">すべて</option>
									</select>
								</td>
								<td class="bdl txtCenter">
									<button class="buttonA">絞込み</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="container tableStripe">
				<table class="tableB">
					<thead>
						<tr>
							<th class="w120">入金元</th>
							<th class="w75">請求日<br>請求書No</th>
							<th>請求金額<br>入金済額</th>
							<th class="bdr_black w75">入金予定日<br>実入金見込額</th>
							<th>1～5日</th>
							<th>6～10日</th>
							<th>11～15日</th>
							<th>16～20日</th>
							<th>21～25日</th>
							<th>26～31日</th>
							<th>予定日OVER</th>
						</tr>
					</thead>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120" rowspan="2">○○○○○不動産</td>
						<td class="txtCenter w75" rowspan="2">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight" rowspan="2">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>手形</td>
						<td class="txtCenter"></td>
					</tr>
					<tr>
						<td class="bdr_black">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">○○不動産</td>
						<td class="txtCenter w75">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120" rowspan="2">○○○○○○○不動産</td>
						<td class="txtCenter w75" rowspan="2">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight" rowspan="2">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75" rowspan="2">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>現金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
					<tr>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>手形</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">○○○○○不動産</td>
						<td class="txtCenter w75">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120" rowspan="2">○○不動産</td>
						<td class="txtCenter w75" rowspan="2">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight" rowspan="2">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75" rowspan="2">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>現金</td>
					</tr>
					<tr>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>手形</td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">○○○○○不動産</td>
						<td class="txtCenter w75">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">○○○○○不動産</td>
						<td class="txtCenter w75">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">○○○○○不動産</td>
						<td class="txtCenter w75">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight">00,000,000<br>0</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
						<td class="txtCenter"></td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w120">○○○○○不動産</td>
						<td class="txtCenter w75">0000/00/00<br><a href="#" class="blue">0000000</a></td>
						<td class="txtRight">00,000,000<br>0,000,000</td>
						<td class="txtCenter bdr_black w75">0000/00/00<br>00,000,000</td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter"></td>
						<td class="txtCenter">00,000,000<br>普通預金</td>
					</tr>
				</table>
				<table class="tableB">
					<tr>
						<td class="w376 bdr_black" colspan="4"></td>
						<td class="txtRight">0</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
						<td class="txtRight">00,000,000</td>
					</tr>
				</table>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>