<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>請求書発行：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../../js/function.js"></script>
<!-- jquery-ui -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	$(function() {
		$(".sortable").sortable().disableSelection();
		$("#submit").click(function() {
			var result = $("#sortable").sortable("toArray");
			$("#result").val(result);
			$("form").submit();
		});
	});
</script>
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
							<li class="leftEnd currentLink"><a href="index.php">請求書発行</a></li>
							<li><a href="../../keiri/nyukin-shori/index.php">入金処理</a></li>
							<li><a href="../../keiri/nyukin-yotei/index.php">入金予定表</a></li>
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
							<h2>請求書発行</h2>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w75">取引先選択</th>
							<td class="w363">
								<select name="clientSelect" class="w426">
									<option>選択</option>
									<option value="すべて">すべて</option>
									<option value="AAA">AAA</option>
									<option value="BBB">BBB</option>
									<option value="CCC">CCC</option>
								</select>
							</td>
							<th class="w75">取引先選択</th>
							<td colspan="3">
								<select name="clientSelect" class="w159">
									<option value="">事業所単位</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
						</tr>
					</table>
					<table class="tableA">
						<tr>
							<td class="txtCenter">
								<button class="buttonA">表示を絞り込む </button>
							</td>
						</tr>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="headingB">
					<ul class="horizontal">
						<li>
							<h3>工事の部</h3>
						</li>
						<li>
							<p class="textAnchor buildReport"><a href="kobetsu-hakko.php">チェックした請求書を発行する</a></p>
						</li>
					</ul>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w14">
								<div class="checkBox">
									<input type="checkbox" name="order1_1" class="checkAll" id="order1_1">
									<label for="order1_1"></label>
								</div>
							</th>
							<th class="w145">請求先<br>工事番号</th>
							<th class="w337">現場名<br>工事名</th>
							<th class="w108">工事ステータス<br>入金摘要</th>
							<th class="w70">請求額</th>
							<th class="w70">消費税</th>
							<th class="w70">請求合計</th>
							<th class="w75">工事完了日<br>請求日</th>
						</tr>
					</thead>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_2" class="checkOrder" id="order1_2">
									<label for="order1_2"></label>
								</div>
							</td>
							<td class="w145">○○○□○不動産<br><a href="../../koji_search/index02_025.php" class="blue">0000D00-00</a></td>
							<td class="w337">□□□□□□□□□□□□□□様邸<br>○○○○○○○○○工事</td>
							<td class="w108 txtCenter">納品済み／請求OK <br>材料販売費</td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w75">0000/00/00<br>0000/00/00</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_3" class="checkOrder" id="order1_3">
									<label for="order1_3"></label>
								</div>
							</td>
							<td class="w145">□□○□□不動産<br><a href="../../koji_search/index02_025.php" class="blue">0000D00-00</a></td>
							<td class="w337">□□□□□□□□□□□□□□様邸<br>○○○○○○○○○工事</td>
							<td class="w108 txtCenter">施工中／一部請求可 <br>３分割／１回目請求</td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w75">0000/00/00<br>0000/00/00</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_4" class="checkOrder" id="order1_4">
									<label for="order1_4"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_5" class="checkOrder" id="order1_5">
									<label for="order1_5"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_6" class="checkOrder" id="order1_6">
									<label for="order1_6"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_7" class="checkOrder" id="order1_7">
									<label for="order1_7"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_8" class="checkOrder" id="order1_8">
									<label for="order1_8"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_9" class="checkOrder" id="order1_9">
									<label for="order1_9"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_10" class="checkOrder" id="order1_10">
									<label for="order1_10"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order1_11" class="checkOrder" id="order1_11">
									<label for="order1_11"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="container">
				<div class="headingB">
					<ul class="horizontal">
						<li>
							<h3>材料販売の部</h3>
						</li>
						<li>
							<p class="textAnchor buildReport"><a href="kobetsu-hakko.php">チェックした請求書を発行する</a></p>
						</li>
					</ul>
				</div>
				<table class="tableB">
					<thead>
						<tr>
							<th class="w14">
								<div class="checkBox">
									<input type="checkbox" name="order2_1" class="checkAll" id="order2_1">
									<label for="order2_1"></label>
								</div>
							</th>
							<th class="w145">請求先<br>工事販売番号</th>
							<th class="w337">販売材料名</th>
							<th class="w108">材料販売ステータス<br>入金摘要</th>
							<th class="w70">請求額</th>
							<th class="w70">消費税</th>
							<th class="w70">請求合計</th>
							<th class="w75">納品日<br>請求日</th>
						</tr>
					</thead>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_2" class="checkOrder" id="order2_2">
									<label for="order2_2"></label>
								</div>
							</td>
							<td class="w145">✕✕○✕✕工務店<br><a href="../../koji_search/index02_025.php" class="blue">0000D00-00</a></td>
							<td class="w337">○○○○（材料名）</td>
							<td class="w108 txtCenter">納品済み／請求OK <br>材料販売費</td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w75">0000/00/00<br>0000/00/00</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_3" class="checkOrder" id="order2_3">
									<label for="order2_3"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108 txtCenter"></td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w70">00,000,000</td>
							<td class="w75">0000/00/00<br>0000/00/00</td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_4" class="checkOrder" id="order2_4">
									<label for="order2_4"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_5" class="checkOrder" id="order2_5">
									<label for="order2_5"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_6" class="checkOrder" id="order2_6">
									<label for="order2_6"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_7" class="checkOrder" id="order2_7">
									<label for="order2_7"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_8" class="checkOrder" id="order2_8">
									<label for="order2_8"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_9" class="checkOrder" id="order2_9">
									<label for="order2_9"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_10" class="checkOrder" id="order2_10">
									<label for="order2_10"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
				<table class="tableB">
					<tbody>
						<tr>
							<td class="w14 txtCenter">
								<div class="checkBox">
									<input type="checkbox" name="order2_11" class="checkOrder" id="order2_11">
									<label for="order2_11"></label>
								</div>
							</td>
							<td class="w145"></td>
							<td class="w337"></td>
							<td class="w108"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w70"></td>
							<td class="w75"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>