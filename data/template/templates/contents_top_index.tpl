<section class="topSearchArea">
	<dl>
		<!--{if $view_flg1 == 1}-->
			<dt class="w72">工事検索</dt>
			<dd>
				<input type="text" name="searchConstruction" class="inputType01 w313" placeholder="工事番号（半角英数字）入力">
				<a href="/koji_search/index.php" class="btnSearch">検索</a>
				<p>工事番号以外での工事検索は<a href="#" class="blue">こちら</a></p>
			</dd>
		<!--{/if}-->
		<!--{if $view_flg2 == 1}-->
			<form name="form1" action="/client_search/?" method="GET">
				<dt class="w72">取引先検索</dt>
				<dd><input type="text" name="searchClient" class="inputType01 w313" placeholder="社名／コード入力"><button class="btnSearch" type="submit">検索</button></dd>
			</form>
		<!--{/if}-->
	</dl>
	<!--{if $view_flg3 == 1}-->
		<div class="txtRight"><a href="/total/index.php" class="buttonA lh27">各種集計</a></div>
	<!--{/if}-->
</section>
<div class="topBtnLinks">
	<ul>
		<li><a href="new_koji/index.php">新規工事登録</a></li>
		<li><a href="koji_search/index.php">工事情報</a></li>
		<li><a href="romu-shinsei/index.php">労務申請・承認</a></li>
		<li><a href="material-hanbai/index.php">材料販売登録</a></li>
		<li><a href="stock/index.php">在庫一覧/登録</a></li>
		<li><a href="material-nohinsho/index.php">材料納品書照合</a></li>
	</ul>
</div>
