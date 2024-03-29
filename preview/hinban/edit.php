<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>新規登録・編集：Guy's System</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/page.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/function.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<h1 id="logo"><a href="../top.php"><img src="../img/common/logo_header.png" height="39" width="166" alt="GUY’S COMPANY Oparation Management System"></a></h1>
				<div class="boxRight">
					<a href="../index.php">ログアウト</a>
					<a href="#" id="menuBtn"><img src="../img/common/btn_menu.png" alt="メニューボタン"></a>
				</div>
			</div>
			<nav id="gNav">
				<ul>
					<li><a href="../top.php">ホーム</a></li>
					<li><a href="../keiri/index.php">経理処理Top</a></li>
					<li><a href="../in-house_order/index.php">自社発注</a></li>
					<li><a href="../preceding_order/index.php">先行発注</a></li>
					<li><a href="../hinban/index.php">品番登録・編集</a></li>
					<li><a href="../staff/index.php">社員一覧/登録・編集</a></li>
					<li><a href="../company/index.php">企業一覧/登録・編集</a></li>
					<li class="current">取引先ページ新規作成</li>
					<li><a href="../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop pb20">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>品番登録／編集</h2>
						</div>
					</div>
					<div class="headingB">
						<h3>品番 新規登録</h3>
					</div>
					<table class="tableA">
						<tbody>
							<tr>
								<th class="w100">工事カテゴリー</th>
								<td>
									<select name="constructionCategory" class="w100p">
										<option value="選択しない">選択しない</option>
										<option value="サイディング">サイディング</option>
										<option value="屋根・樋">屋根・樋</option>
										<option value="外構">外構</option>
									</select>
								</td>
								<th class="w100">品番</th>
								<td>
									<input type="text" class="w100p" name="productNumber">
								</td>
								<th class="w87">連動品目数</th>
								<td>
									<select name="relativePartsNumber" class="w100p">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w100">タイプ</th>
								<td>
									<input type="text" class="w100p" name="productNumber">
								</td>
								</td>
								<th class="w100">名称</th>
								<td>
									<input type="text" class="w100p" name="productNumber">
								</td>
								<th class="w87">色名</th>
								<td>
									<input type="text" name="color" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w100">単価</th>
								<td>
									<input type="text" name="color" class="w100p">
								</td>
								<th class="w100">特色単価</th>
								<td colspan="3">
									<input type="text" class="w100" name="specialUnitPrice" value="2700">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<div class="container">
				<div class="headingB">
					<h3>連動品目</h3>
				</div>
				<table class="tableA w401">
					<tbody>
						<tr>
							<th class="w40">品名</th>
							<td>
								<input type="text" class="w100p" name="productName1">
							</td>
							<th class="w40">品番</th>
							<td>
								<input type="text" class="w100p" name="productNumber1">
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableA w260 mb10">
					<tbody>
						<tr>
							<th class="w100">デフォルト単価</th>
							<td class="">
								<input type="text" class="w100p" name="defaultUnitPrice1">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="w150 boxLeft txtCenter">
						┗発注先 連動単価
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th>発注先</th>
								<td>
									<select name="supplier1-1" class="w111">
										<option>選択</option>
									</select>
								</td>
								<th>単価</th>
								<td><input type="text" name="unitPrice1-1"></td>
								<td class="bdl">
									<a href="#" class="btnDecrease mr7">+</a>
								</td>
							</tr>
							<tr>
								<th>発注先</th>
								<td>
									<select name="supplier1-2" class="w111">
										<option>選択</option>
									</select>
								</td>
								<th>単価</th>
								<td><input type="text" name="unitPrice1-2"></td>
								<td class="bdl">
									<a href="#" class="btnDecrease mr7">+</a>
								</td>
							</tr>
							<tr>
								<th>発注先</th>
								<td>
									<select name="supplier1-3" class="w111">
										<option>選択</option>
									</select>
								</td>
								<th>単価</th>
								<td><input type="text" name="unitPrice1-3"></td>
								<td class="bdl">
									<a href="#" class="btnDecrease mr7">+</a>
									<a href="#" class="btnIncrease">+</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr class="pt20 mb20">
				<table class="tableA w401">
					<tbody>
						<tr>
							<th class="w40">品名</th>
							<td>
								<input type="text" class="w100p" name="productName2">
							</td>
							<th class="w40">品番</th>
							<td>
								<input type="text" class="w100p" name="productNumber2">
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableA w260 mb10">
					<tbody>
						<tr>
							<th class="w100">デフォルト単価</th>
							<td class="">
								<input type="text" class="w100p" name="defaultUnitPrice2">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="w150 boxLeft txtCenter">
						┗発注先 連動単価
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th>発注先</th>
								<td>
									<select name="supplier2-1" class="w111">
										<option>選択</option>
									</select>
								</td>
								<th>単価</th>
								<td><input type="text" name="unitPrice2-1"></td>
								<td class="bdl">
									<a href="#" class="btnDecrease mr7">+</a>
									<a href="#" class="btnIncrease">+</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr class="pt20 mb20">
				<table class="tableA w401">
					<tbody>
						<tr>
							<th class="w40">品名</th>
							<td>
								<input type="text" class="w100p" name="productName3">
							</td>
							<th class="w40">品番</th>
							<td>
								<input type="text" class="w100p" name="productNumber3">
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableA w260 mb10">
					<tbody>
						<tr>
							<th class="w100">デフォルト単価</th>
							<td class="">
								<input type="text" class="w100p" name="defaultUnitPrice3">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="w150 boxLeft txtCenter">
						┗発注先 連動単価
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th>発注先</th>
								<td>
									<select name="supplier3-1" class="w111">
										<option>選択</option>
									</select>
								</td>
								<th>単価</th>
								<td><input type="text" name="unitPrice3-1"></td>
								<td class="bdl">
									<a href="#" class="btnDecrease mr7">+</a>
									<a href="#" class="btnIncrease">+</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr class="pt20 mb20">
				<table class="tableA w401">
					<tbody>
						<tr>
							<th class="w40">品名</th>
							<td>
								<input type="text" class="w100p" name="productName4">
							</td>
							<th class="w40">品番</th>
							<td>
								<input type="text" class="w100p" name="productNumber4">
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableA w260 mb10">
					<tbody>
						<tr>
							<th class="w100">デフォルト単価</th>
							<td class="">
								<input type="text" class="w100p" name="defaultUnitPrice4">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="w150 boxLeft txtCenter">
						┗発注先 連動単価
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th>発注先</th>
								<td>
									<select name="supplier4-1" class="w111">
										<option>選択</option>
									</select>
								</td>
								<th>単価</th>
								<td><input type="text" name="unitPrice4-1"></td>
								<td class="bdl">
									<a href="#" class="btnDecrease mr7">+</a>
									<a href="#" class="btnIncrease">+</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr class="pt20 mb20">
				<table class="tableA w401">
					<tbody>
						<tr>
							<th class="w40">品名</th>
							<td>
								<input type="text" class="w100p" name="productName5">
							</td>
							<th class="w40">品番</th>
							<td>
								<input type="text" class="w100p" name="productNumber5">
							</td>
						</tr>
					</tbody>
				</table>
				<table class="tableA w260 mb10">
					<tbody>
						<tr>
							<th class="w100">デフォルト単価</th>
							<td class="">
								<input type="text" class="w100p" name="defaultUnitPrice5">
							</td>
						</tr>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="w150 boxLeft txtCenter">
						┗発注先 連動単価
					</div>
					<div class="boxLeft">
						<table class="tableA">
							<tr>
								<th>発注先</th>
								<td>
									<select name="supplier5-1" class="w111">
										<option>選択</option>
									</select>
								</td>
								<th>単価</th>
								<td><input type="text" name="unitPrice5-1"></td>
								<td class="bdl">
									<a href="#" class="btnDecrease mr7">+</a>
									<a href="#" class="btnIncrease">+</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="txtCenter noTtl">
					<button class="buttonA">上記で登録（修正）する</button>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>