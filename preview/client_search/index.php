<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>取引先 検索結果：Guy's System</title>
<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/page.css">
<link rel="stylesheet" href="../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="	../js/function.js"></script>
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
			<section class="pageTop mb30">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先／検索結果</h2>
						</div>
					</div>
					<table class="tableA3">
						<tr>
							<th class="w95 pr0">取引ステータス</th>
							<td class="w210">
								<select name="dealState" class="w210">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
							<th class="w70 pr0">取引タイプ</th>
							<td>
								<select name="dealType" class="w220">
									<option value="選択しない">選択しない</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="txtCenter">
								<button class="buttonA">上記で表示を絞り込む </button>
							</td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload">CSV出力</button>
						</div>
					</div>
				</div>
			</section>
		</form>
		<div class="container">
			<div class="clearfix">
				<div class="boxRight">
					<div class="pagination">
						<p class="resultStates">000件中1〜20件</p>
						<ul>
							<li class="toFirstPage"><a href="#">最初へ</a></li>
							<li><a href="#">&lt;&lt;</a></li>
							<li class="current">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;&gt;</a></li>
							<li class="toLastPage"><a href="#">最後へ</a></li>
						</ul>
					</div>
				</div>
			</div>
			<table class="tableB">
				<thead>
					<tr>
						<th class="w140">企業名</th>
						<th class="w140">事業所名</th>
						<th class="w93">取引ステータス</th>
						<th class="w80">取引種類</th>
						<th class="w80">ガイズ担当者</th>
						<th class="w72">工事受注</th>
						<th class="w72">材料販売</th>
						<th class="w72">材料発注</th>
						<th class="w72">工事発注</th>
						<th class="w25">詳細</th>
					</tr>
				</thead>
			</table>
			<ul class="sortable">
				<li id="1">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w93 txtCenter">継続中</td>
								<td class="w80 txtCenter">継続取引</td>
								<td class="w80 txtCenter">小林太郎</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="../client/index.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="2">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft"></td>
								<td class="w93 txtCenter">停止</td>
								<td class="w80 txtCenter">外注先</td>
								<td class="w80 txtCenter">佐藤花子</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter"></td>
							</tr>
						</table>
				</li>
				<li id="3">
						<table class="tableB">
							<tr>
								<td class="w140 txtLeft"></td>
								<td class="w140 txtLeft"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80 txtCenter"></td>
								<td class="w80 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="4">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft"></td>
								<td class="w140 txtLeft"></td>
								<td class="w93 txtCenter"></td>
								<td class="w80 txtCenter"></td>
								<td class="w80 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter">○</td>
								<td class="w25 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="5">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w93 txtCenter">継続中</td>
								<td class="w80 txtCenter">継続取引</td>
								<td class="w80 txtCenter">小林太郎</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="../client/index.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="6">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft"></td>
								<td class="w93 txtCenter">停止</td>
								<td class="w80 txtCenter">外注先</td>
								<td class="w80 txtCenter">佐藤花子</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="7">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w93 txtCenter">継続中</td>
								<td class="w80 txtCenter">継続取引</td>
								<td class="w80 txtCenter">小林太郎</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="../client/index.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="8">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft"></td>
								<td class="w93 txtCenter">停止</td>
								<td class="w80 txtCenter">外注先</td>
								<td class="w80 txtCenter">佐藤花子</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="9">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w93 txtCenter">継続中</td>
								<td class="w80 txtCenter">継続取引</td>
								<td class="w80 txtCenter">小林太郎</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter">
									<p class="iconLink"><a href="../client/index.php"><img src="../img/common/icon_detail.png" height="26" width="26" alt="詳細"></a></p>
								</td>
							</tr>
						</tbody>
					</table>
				</li>
				<li id="10">
					<table class="tableB">
						<tbody>
							<tr>
								<td class="w140 txtLeft">□□□□□□□□□□</td>
								<td class="w140 txtLeft"></td>
								<td class="w93 txtCenter">停止</td>
								<td class="w80 txtCenter">外注先</td>
								<td class="w80 txtCenter">佐藤花子</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter">○</td>
								<td class="w72 txtCenter"></td>
								<td class="w72 txtCenter"></td>
								<td class="w25 txtCenter"></td>
							</tr>
						</tbody>
					</table>
				</li>
			</ul>
			<div class="clearfix pt10">
				<div class="boxRight">
					<div class="pagination">
						<p class="resultStates">000件中1〜20件</p>
						<ul>
							<li class="toFirstPage"><a href="#">最初へ</a></li>
							<li><a href="#">&lt;&lt;</a></li>
							<li class="current">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;&gt;</a></li>
							<li class="toLastPage"><a href="#">最後へ</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>