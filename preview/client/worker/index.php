<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>作業員情報：Guy's System</title>
<link rel="stylesheet" href="../../css/common.css">
<link rel="stylesheet" href="../../css/base.css">
<link rel="stylesheet" href="../../css/page.css">
<link rel="stylesheet" href="../../css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://jpostal.googlecode.com/svn/trunk/jquery.jpostal.js"></script>
<script src="../../js/function.js"></script>
<script>
	$(function() {
		$('#postcodeFirstHalf').jpostal({
				postcode : [
						'#postcodeFirstHalf',
						'#postcodeLastHalf'
				],
				address : {
						'#address'  : '%3%4%5'
				}
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
					<li class="current">取引先ページ新規作成</li>
					<li><a href="../../master-edit/index.php">各種マスタ編集</a></li>
				</ul>
			</nav>
		</header>
		<form action="index.php" method="POST">
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
							<div class="btnBack"><a href="../index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先 会社情報（新規登録／編集）</h2>
						</div>
						<div class="boxRight">
							<p class="textAnchor resetClientData"><a href="#">この取引先を削除する</a></p>
						</div>
					</div>
					<table class="tableA">
						<tr>
							<th class="w87">企業名</th>
							<td>
								<select name="company" class="w363">
									<option>選択</option>
									<option value=""></option>
									<option value=""></option>
								</select>
							</td>
							<th class="w63">事業所名</th>
							<td colspan="3">
								<ul class="horizontal">
									<li class="mr7">
										<input class="w326" name="office" type="text">
									</li>
									<li>
									<div class="radioBtn">
										<input type="radio" name="office" id="noOffice">
										<label for="noOffice">事業所名なし</label>
									</div>
									</li>
								</ul>
							</td>
						</tr>
					</table>
					<table class="tableA">
						<tr>
							<th class="w87">事業所コード</th>
							<td><input type="text" class="w135" name="officeCode" placeholder="000A00-00"></td>
							<th>取引タイプ</th>
							<td>
								<ul class="horizontal">
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType01" name="takeConstructionOrder">
											<label for="dealType01">工事受注</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType02" name="sellingMaterials">
											<label for="dealType02">材料販売</label>
										</div>
									</li>
									<li class="mr10">
										<div class="checkBox">
											<input type="checkbox" id="dealType03" name="orderMaterials">
											<label for="dealType03">材料発注</label>
										</div>
									</li>
									<li>
										<div class="checkBox">
											<input type="checkbox" id="dealType04" name="orderConstruction">
											<label for="dealType04">工事発注</label>
										</div>
									</li>
								</ul>
							</td>
							<th>検索用テキスト</th>
							<td><input type="text" name="searchBox" class="w216"></td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="button">登録・更新する</button>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
				<nav id="subNav">
					<ul>
						<li class="leftEnd"><a href="../index.php">基本情報</a></li>
						<li><a href="../hanbai-keiri.php">販売系経理情報</a></li>
						<li><a href="../shiire-keiri.php">仕入系経理情報</a></li>
						<li><a href="../hacchu/index.php">発注書設定</a></li>
						<li class="currentLink"><a href="index.php">作業員情報</a></li>
						<li class="rightEnd"><a href="../tatekae/index.php">立替金情報</a></li>
						<li class="leftEnd"><a href="../request/index.php">依頼／受注履歴</a></li>
						<li><a href="../seikyusho/index.php">請求書一覧</a></li>
						<li><a href="../urikake/index.php">売掛金情報</a></li>
						<li><a href="../minyukin/index.php">未入金・不足工事一覧</a></li>
						<li><a href="../shiire-rireki/index.php">仕入／発注履歴</a></li>
						<li class="rightEnd"><a href="../kaikake/index.php">買掛金情報</a></li>
					</ul>
				</nav>
			</div>
			<div class="container">
				<div class="txtRight mb10">
					<button class="buttonA">CSV出力</button>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<a href="#" class="btnIncrease">+</a>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft w470">
						<div class="clearfix pt10 mb10">
							<div class="boxLeft	">
								<div class="headingB m0">
									<h3>作業員（1）：代表者</h3>
								</div>
							</div>
							<div class="boxRight">
								<button class="buttonA">登録更新カード（代表者用）</button>
							</div>
						</div>
						<table class="tableA ">
							<tr>
								<th class="w125">登録 No</th>
								<td>
									<input type="text" name="registrationNumber" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">氏名（漢字）</th>
								<td>
									<input type="text" name="name-Kanji" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">氏名（カナ）</th>
								<td>
									<input type="text" name="name-Kana" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">住所／郵便番号</th>
								<td>
									<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000">
									ー
									<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000">
								</td>
							</tr>
							<tr>
								<th class="w125">住所</th>
								<td>
									<input type="text" class="w100p" name="address">
								</td>
							</tr>
							<tr>
								<th class="w125">建物名 等</th>
								<td>
									<input type="text" name="buildingName" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">電話番号</th>
								<td>
									<input type="text" class="w53" name="phoneNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="phoneNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="phoneNumberLastHalf" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w125">ファックス番号</th>
								<td>
									<input type="text" class="w53" name="faxNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="faxNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="faxNumberLastHalf" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w125">メールアドレス</th>
								<td>
									<input type="text" class="w100p" name="eMail">
								</td>
							</tr>
							<tr>
								<th class="w125">生年月日</th>
								<td>
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="dateOfBirthYear" class="w105">
												<option>年選択</option>
												<option value="2016年">2016年</option>
												<option value="2015年">2015年</option>
												<option value="2014年">2014年</option>
												<option value="2013年">2013年</option>
												<option value="2012年">2012年</option>
												<option value="2011年">2011年</option>
												<option value="2010年">2010年</option>
												<option value="2009年">2009年</option>
												<option value="2008年">2008年</option>
												<option value="2007年">2007年</option>
												<option value="2006年">2006年</option>
												<option value="2005年">2005年</option>
												<option value="2004年">2004年</option>
												<option value="2003年">2003年</option>
												<option value="2002年">2002年</option>
												<option value="2001年">2001年</option>
												<option value="2000年">2000年</option>
												<option value="1999年">1999年</option>
												<option value="1998年">1998年</option>
												<option value="1997年">1997年</option>
												<option value="1996年">1996年</option>
												<option value="1995年">1995年</option>
												<option value="1994年">1994年</option>
												<option value="1993年">1993年</option>
												<option value="1992年">1992年</option>
												<option value="1991年">1991年</option>
												<option value="1990年">1990年</option>
												<option value="1989年">1989年</option>
												<option value="1988年">1988年</option>
												<option value="1987年">1987年</option>
												<option value="1986年">1986年</option>
												<option value="1985年">1985年</option>
												<option value="1984年">1984年</option>
												<option value="1983年">1983年</option>
												<option value="1982年">1982年</option>
												<option value="1981年">1981年</option>
												<option value="1980年">1980年</option>
												<option value="1979年">1979年</option>
												<option value="1978年">1978年</option>
												<option value="1977年">1977年</option>
												<option value="1976年">1976年</option>
												<option value="1975年">1975年</option>
												<option value="1974年">1974年</option>
												<option value="1973年">1973年</option>
												<option value="1972年">1972年</option>
												<option value="1971年">1971年</option>
												<option value="1970年">1970年</option>
												<option value="1969年">1969年</option>
												<option value="1968年">1968年</option>
												<option value="1967年">1967年</option>
												<option value="1966年">1966年</option>
												<option value="1965年">1965年</option>
												<option value="1964年">1964年</option>
												<option value="1963年">1963年</option>
												<option value="1962年">1962年</option>
												<option value="1961年">1961年</option>
												<option value="1960年">1960年</option>
												<option value="1959年">1959年</option>
												<option value="1958年">1958年</option>
												<option value="1957年">1957年</option>
												<option value="1956年">1956年</option>
												<option value="1955年">1955年</option>
												<option value="1954年">1954年</option>
												<option value="1953年">1953年</option>
												<option value="1952年">1952年</option>
												<option value="1951年">1951年</option>
												<option value="1950年">1950年</option>
												<option value="1949年">1949年</option>
												<option value="1948年">1948年</option>
												<option value="1947年">1947年</option>
												<option value="1946年">1946年</option>
												<option value="1945年">1945年</option>
												<option value="1944年">1944年</option>
												<option value="1943年">1943年</option>
												<option value="1942年">1942年</option>
												<option value="1941年">1941年</option>
												<option value="1940年">1940年</option>
												<option value="1939年">1939年</option>
												<option value="1938年">1938年</option>
												<option value="1937年">1937年</option>
												<option value="1936年">1936年</option>
												<option value="1935年">1935年</option>
												<option value="1934年">1934年</option>
												<option value="1933年">1933年</option>
												<option value="1932年">1932年</option>
												<option value="1931年">1931年</option>
												<option value="1931年">1931年</option>
												<option value="1930年">1930年</option>
												<option value="1929年">1929年</option>
												<option value="1928年">1928年</option>
												<option value="1927年">1927年</option>
												<option value="1926年">1926年</option>
												<option value="1925年">1925年</option>
												<option value="1924年">1924年</option>
												<option value="1923年">1923年</option>
												<option value="1922年">1922年</option>
												<option value="1921年">1921年</option>
												<option value="1920年">1920年</option>
												<option value="1919年">1919年</option>
												<option value="1918年">1918年</option>
												<option value="1917年">1917年</option>
												<option value="1916年">1916年</option>
											</select>
											<select name="dateOfBirthMonth" class="w72">
												<option>月選択</option>
												<option value="1月">1月</option>
												<option value="2月">2月</option>
												<option value="3月">3月</option>
												<option value="4月">4月</option>
												<option value="5月">5月</option>
												<option value="6月">6月</option>
												<option value="7月">7月</option>
												<option value="8月">8月</option>
												<option value="9月">9月</option>
												<option value="10月">10月</option>
												<option value="11月">11月</option>
												<option value="12月">12月</option>
											</select>
											<select name="dateOfBirthDay" class="w72">
												<option>日選択</option>
												<option value="1日">1日</option>
												<option value="2日">2日</option>
												<option value="3日">3日</option>
												<option value="4日">4日</option>
												<option value="5日">5日</option>
												<option value="6日">6日</option>
												<option value="7日">7日</option>
												<option value="8日">8日</option>
												<option value="9日">9日</option>
												<option value="10日">10日</option>
												<option value="11日">11日</option>
												<option value="12日">12日</option>
												<option value="13日">13日</option>
												<option value="14日">14日</option>
												<option value="15日">15日</option>
												<option value="16日">16日</option>
												<option value="17日">17日</option>
												<option value="18日">18日</option>
												<option value="19日">19日</option>
												<option value="20日">20日</option>
												<option value="21日">21日</option>
												<option value="22日">22日</option>
												<option value="23日">23日</option>
												<option value="24日">24日</option>
												<option value="25日">25日</option>
												<option value="26日">26日</option>
												<option value="27日">27日</option>
												<option value="28日">28日</option>
												<option value="29日">29日</option>
												<option value="30日">30日</option>
												<option value="31日">31日</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th class="w125">年齢</th>
								<td>
									<select name="age" class="w63">
										<option>選択</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w125">血液型</th>
								<td>
									<select name="bloodType" class="w63">
										<option>選択</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="O">O</option>
										<option value="AB">AB</option>
									</select>
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>緊急連絡先</h3>
						</div>
						<table class="tableA">
							<tr>
								<th class="w125">氏名（漢字）</th>
								<td>
									<input type="text" name="emergencyName-Kanji" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">氏名（カナ）</th>
								<td>
									<input type="text" name="emergencyName-Kana" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">続柄</th>
								<td>
									<select name="relationship" class="w63">
										<option>選択</option>
										<option value="妻">妻</option>
										<option value="夫">夫</option>
										<option value="子">子</option>
										<option value="孫">孫</option>
										<option value="実兄">実兄</option>
										<option value="実弟">実弟</option>
										<option value="実姉">実姉</option>
										<option value="実妹">実妹</option>
										<option value="祖父">祖父</option>
										<option value="祖母">祖母</option>
										<option value="曽祖父">曽祖父</option>
										<option value="曾祖母">曾祖母</option>
										<option value="従兄弟">従兄弟</option>
										<option value="叔父">叔父</option>
										<option value="叔母">叔母</option>
										<option value="義父">義父</option>
										<option value="義母">義母</option>
										<option value="義兄">義兄</option>
										<option value="義弟">義弟</option>
										<option value="義姉">義姉</option>
										<option value="義妹">義妹</option>
										<option value="義祖父">義祖父</option>
										<option value="義祖母">義祖母</option>
										<option value="義叔父">義叔父</option>
										<option value="義叔母">義叔母</option>
										<option value="義従兄弟">義従兄弟</option>
										<option value="知人／友人">知人／友人</option>
										<option value="同居人">同居人</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w125">電話番号</th>
								<td>
									<input type="text" class="w53" name="emergencyPhoneNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="emergencyPhoneNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="emergencyPhoneNumberLastHalf" placeholder="0000">
								</td>
							</tr>
						</table>
						<table class="tableA noTtl">
							<tr>
								<th class="w125">備考</th>
								<td class="bdt">
									<textarea name="remarks" rows="8" class="w100p"></textarea>
								</td>
							</tr>
						</table>
					</div>
					<div class="boxRight w470">
						<table class="tableA noTtl">
							<tr>
								<th class="w105">登録年月日</th>
								<td>
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="registrationYear" class="w105">
												<option>年選択</option>
												<option value="2016年">2016年</option>
												<option value="2017年">2017年</option>
												<option value="2018年">2018年</option>
												<option value="2019年">2019年</option>
												<option value="2020年">2020年</option>
												<option value="2021年">2021年</option>
												<option value="2022年">2022年</option>
												<option value="2023年">2023年</option>
												<option value="2024年">2024年</option>
												<option value="2025年">2025年</option>
											</select>
											<select name="registrationMonth" class="w72">
												<option>月選択</option>
												<option value="1月">1月</option>
												<option value="2月">2月</option>
												<option value="3月">3月</option>
												<option value="4月">4月</option>
												<option value="5月">5月</option>
												<option value="6月">6月</option>
												<option value="7月">7月</option>
												<option value="8月">8月</option>
												<option value="9月">9月</option>
												<option value="10月">10月</option>
												<option value="11月">11月</option>
												<option value="12月">12月</option>
											</select>
											<select name="registrationDay" class="w72">
												<option>日選択</option>
												<option value="1日">1日</option>
												<option value="2日">2日</option>
												<option value="3日">3日</option>
												<option value="4日">4日</option>
												<option value="5日">5日</option>
												<option value="6日">6日</option>
												<option value="7日">7日</option>
												<option value="8日">8日</option>
												<option value="9日">9日</option>
												<option value="10日">10日</option>
												<option value="11日">11日</option>
												<option value="12日">12日</option>
												<option value="13日">13日</option>
												<option value="14日">14日</option>
												<option value="15日">15日</option>
												<option value="16日">16日</option>
												<option value="17日">17日</option>
												<option value="18日">18日</option>
												<option value="19日">19日</option>
												<option value="20日">20日</option>
												<option value="21日">21日</option>
												<option value="22日">22日</option>
												<option value="23日">23日</option>
												<option value="24日">24日</option>
												<option value="25日">25日</option>
												<option value="26日">26日</option>
												<option value="27日">27日</option>
												<option value="28日">28日</option>
												<option value="29日">29日</option>
												<option value="30日">30日</option>
												<option value="31日">31日</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th class="w105">ガイズ担当者 <br>（受付担当）</th>
								<td>
									<select class="w105" name="representative">
										<option>選択</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w105">労災組合名</th>
								<td>
									<input type="text" class="w100p" name="workersUnion">
								</td>
							</tr>
							<tr>
								<th class="w105">労災番号</th>
								<td>
									<input type="text" class="w100p" name="compensationInsuranceNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">健康保険名</th>
								<td>
									<input type="text" class="w100p" name="nationalHealthInsurance">
								</td>
							</tr>
							<tr>
								<th class="w105">健康保険番号</th>
								<td>
									<input type="text" class="w100p" name="nationalHealthInsuranceNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">年金保険種類</th>
								<td>
									<input type="text" class="w100p" name="pensionInsurance">
								</td>
							</tr>
							<tr>
								<th class="w105">年金番号</th>
								<td>
									<input type="text" class="w100p" name="pensionNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">雇用保険番号</th>
								<td>
									<input type="text" class="w100p" name="unemploymentInsuranceNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">足場作業者番号</th>
								<td>
									<input type="text" class="w100p" name="scaffoldWorkersNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">その他 1</th>
								<td>
									<input type="text" class="w100p" name="other1">
								</td>
							</tr>
							<tr>
								<th class="w105">その他 2</th>
								<td>
									<input type="text" class="w100p" name="other2">
								</td>
							</tr>
						</table>
						<table class="tableA noTtl">
							<tr>
								<th class="w105">健康診断 <br>最新診断日</th>
								<td colspan="3" class="bdt">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="latestCheckupYear" class="w105">
												<option>年選択</option>
												<option value="2016年">2016年</option>
												<option value="2017年">2017年</option>
												<option value="2018年">2018年</option>
												<option value="2019年">2019年</option>
												<option value="2020年">2020年</option>
												<option value="2021年">2021年</option>
												<option value="2022年">2022年</option>
												<option value="2023年">2023年</option>
												<option value="2024年">2024年</option>
												<option value="2025年">2025年</option>
											</select>
											<select name="latestCheckupMonth" class="w72">
												<option>月選択</option>
												<option value="1月">1月</option>
												<option value="2月">2月</option>
												<option value="3月">3月</option>
												<option value="4月">4月</option>
												<option value="5月">5月</option>
												<option value="6月">6月</option>
												<option value="7月">7月</option>
												<option value="8月">8月</option>
												<option value="9月">9月</option>
												<option value="10月">10月</option>
												<option value="11月">11月</option>
												<option value="12月">12月</option>
											</select>
											<select name="latestCheckupDay" class="w72">
												<option>日選択</option>
												<option value="1日">1日</option>
												<option value="2日">2日</option>
												<option value="3日">3日</option>
												<option value="4日">4日</option>
												<option value="5日">5日</option>
												<option value="6日">6日</option>
												<option value="7日">7日</option>
												<option value="8日">8日</option>
												<option value="9日">9日</option>
												<option value="10日">10日</option>
												<option value="11日">11日</option>
												<option value="12日">12日</option>
												<option value="13日">13日</option>
												<option value="14日">14日</option>
												<option value="15日">15日</option>
												<option value="16日">16日</option>
												<option value="17日">17日</option>
												<option value="18日">18日</option>
												<option value="19日">19日</option>
												<option value="20日">20日</option>
												<option value="21日">21日</option>
												<option value="22日">22日</option>
												<option value="23日">23日</option>
												<option value="24日">24日</option>
												<option value="25日">25日</option>
												<option value="26日">26日</option>
												<option value="27日">27日</option>
												<option value="28日">28日</option>
												<option value="29日">29日</option>
												<option value="30日">30日</option>
												<option value="31日">31日</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th>血圧（上）</th>
								<td>
									<input type="text" name="bloodPressureHigher" class="w100p">
								</td>
								<th class="w80">血圧（下）</th>
								<td>
									<input type="text" name="bloodPressureLower" class="w100p">
								</td>
							</tr>
							<tr>
								<th>その他</th>
								<td colspan="3">
									<input type="text" name="other" >
								</td>
							</tr>
						</table>
						<div class="headingB">
							<h3>キャリア／スキル</h3>
						</div>
						<table class="tableB">
							<tr>
								<th>工事種 1</th>
								<th>工事種 2</th>
								<th>登録時経験年数</th>
							</tr>
							<tr>
								<td><input type="text" name="constructionType1-1" class="w100p"></td>
								<td><input type="text" name="constructionType1-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience1" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType2-1" class="w100p"></td>
								<td><input type="text" name="constructionType2-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience2" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType3-1" class="w100p"></td>
								<td><input type="text" name="constructionType3-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience3" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType4-1" class="w100p"></td>
								<td><input type="text" name="constructionType4-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience4" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType5-1" class="w100p"></td>
								<td><input type="text" name="constructionType5-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience5" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType6-1" class="w100p"></td>
								<td><input type="text" name="constructionType6-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience6" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType7-1" class="w100p"></td>
								<td><input type="text" name="constructionType7-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience7" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType8-1" class="w100p"></td>
								<td><input type="text" name="constructionType8-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience8" class="mr5 w120">年</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
				<hr class="mb30">
			</div>
			<div class="container">
				<div class="txtRight mb10">
					<button class="buttonA">CSV出力</button>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<a href="#" class="btnIncrease mr7">+</a>
						<a href="#" class="btnDecrease">+</a>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxLeft w470">
						<div class="clearfix pt10 mb10">
							<div class="boxLeft	">
								<div class="headingB m0">
									<h3>作業員（2）：社員</h3>
								</div>
							</div>
							<div class="boxRight">
								<button class="buttonA">登録更新カード（その他作業員用）</button>
							</div>
						</div>
						<table class="tableA ">
							<tbody><tr>
								<th class="w125">登録 No</th>
								<td>
									<input type="text" name="registrationNumber" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">氏名（漢字）</th>
								<td>
									<input type="text" name="name-Kanji" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">氏名（カナ）</th>
								<td>
									<input type="text" name="name-Kana" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">住所／郵便番号</th>
								<td>
									<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000">
									ー
									<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000">
								</td>
							</tr>
							<tr>
								<th class="w125">住所</th>
								<td>
									<input type="text" class="w100p" name="address">
								</td>
							</tr>
							<tr>
								<th class="w125">建物名 等</th>
								<td>
									<input type="text" name="buildingName" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">電話番号</th>
								<td>
									<input type="text" class="w53" name="phoneNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="phoneNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="phoneNumberLastHalf" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w125">ファックス番号</th>
								<td>
									<input type="text" class="w53" name="faxNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="faxNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="faxNumberLastHalf" placeholder="0000">
								</td>
							</tr>
							<tr>
								<th class="w125">メールアドレス</th>
								<td>
									<input type="text" class="w100p" name="eMail">
								</td>
							</tr>
							<tr>
								<th class="w125">生年月日</th>
								<td>
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="dateOfBirthYear" class="w105">
												<option>年選択</option>
												<option value="2016年">2016年</option>
												<option value="2015年">2015年</option>
												<option value="2014年">2014年</option>
												<option value="2013年">2013年</option>
												<option value="2012年">2012年</option>
												<option value="2011年">2011年</option>
												<option value="2010年">2010年</option>
												<option value="2009年">2009年</option>
												<option value="2008年">2008年</option>
												<option value="2007年">2007年</option>
												<option value="2006年">2006年</option>
												<option value="2005年">2005年</option>
												<option value="2004年">2004年</option>
												<option value="2003年">2003年</option>
												<option value="2002年">2002年</option>
												<option value="2001年">2001年</option>
												<option value="2000年">2000年</option>
												<option value="1999年">1999年</option>
												<option value="1998年">1998年</option>
												<option value="1997年">1997年</option>
												<option value="1996年">1996年</option>
												<option value="1995年">1995年</option>
												<option value="1994年">1994年</option>
												<option value="1993年">1993年</option>
												<option value="1992年">1992年</option>
												<option value="1991年">1991年</option>
												<option value="1990年">1990年</option>
												<option value="1989年">1989年</option>
												<option value="1988年">1988年</option>
												<option value="1987年">1987年</option>
												<option value="1986年">1986年</option>
												<option value="1985年">1985年</option>
												<option value="1984年">1984年</option>
												<option value="1983年">1983年</option>
												<option value="1982年">1982年</option>
												<option value="1981年">1981年</option>
												<option value="1980年">1980年</option>
												<option value="1979年">1979年</option>
												<option value="1978年">1978年</option>
												<option value="1977年">1977年</option>
												<option value="1976年">1976年</option>
												<option value="1975年">1975年</option>
												<option value="1974年">1974年</option>
												<option value="1973年">1973年</option>
												<option value="1972年">1972年</option>
												<option value="1971年">1971年</option>
												<option value="1970年">1970年</option>
												<option value="1969年">1969年</option>
												<option value="1968年">1968年</option>
												<option value="1967年">1967年</option>
												<option value="1966年">1966年</option>
												<option value="1965年">1965年</option>
												<option value="1964年">1964年</option>
												<option value="1963年">1963年</option>
												<option value="1962年">1962年</option>
												<option value="1961年">1961年</option>
												<option value="1960年">1960年</option>
												<option value="1959年">1959年</option>
												<option value="1958年">1958年</option>
												<option value="1957年">1957年</option>
												<option value="1956年">1956年</option>
												<option value="1955年">1955年</option>
												<option value="1954年">1954年</option>
												<option value="1953年">1953年</option>
												<option value="1952年">1952年</option>
												<option value="1951年">1951年</option>
												<option value="1950年">1950年</option>
												<option value="1949年">1949年</option>
												<option value="1948年">1948年</option>
												<option value="1947年">1947年</option>
												<option value="1946年">1946年</option>
												<option value="1945年">1945年</option>
												<option value="1944年">1944年</option>
												<option value="1943年">1943年</option>
												<option value="1942年">1942年</option>
												<option value="1941年">1941年</option>
												<option value="1940年">1940年</option>
												<option value="1939年">1939年</option>
												<option value="1938年">1938年</option>
												<option value="1937年">1937年</option>
												<option value="1936年">1936年</option>
												<option value="1935年">1935年</option>
												<option value="1934年">1934年</option>
												<option value="1933年">1933年</option>
												<option value="1932年">1932年</option>
												<option value="1931年">1931年</option>
												<option value="1931年">1931年</option>
												<option value="1930年">1930年</option>
												<option value="1929年">1929年</option>
												<option value="1928年">1928年</option>
												<option value="1927年">1927年</option>
												<option value="1926年">1926年</option>
												<option value="1925年">1925年</option>
												<option value="1924年">1924年</option>
												<option value="1923年">1923年</option>
												<option value="1922年">1922年</option>
												<option value="1921年">1921年</option>
												<option value="1920年">1920年</option>
												<option value="1919年">1919年</option>
												<option value="1918年">1918年</option>
												<option value="1917年">1917年</option>
												<option value="1916年">1916年</option>
											</select>
											<select name="dateOfBirthMonth" class="w72">
												<option>月選択</option>
												<option value="1月">1月</option>
												<option value="2月">2月</option>
												<option value="3月">3月</option>
												<option value="4月">4月</option>
												<option value="5月">5月</option>
												<option value="6月">6月</option>
												<option value="7月">7月</option>
												<option value="8月">8月</option>
												<option value="9月">9月</option>
												<option value="10月">10月</option>
												<option value="11月">11月</option>
												<option value="12月">12月</option>
											</select>
											<select name="dateOfBirthDay" class="w72">
												<option>日選択</option>
												<option value="1日">1日</option>
												<option value="2日">2日</option>
												<option value="3日">3日</option>
												<option value="4日">4日</option>
												<option value="5日">5日</option>
												<option value="6日">6日</option>
												<option value="7日">7日</option>
												<option value="8日">8日</option>
												<option value="9日">9日</option>
												<option value="10日">10日</option>
												<option value="11日">11日</option>
												<option value="12日">12日</option>
												<option value="13日">13日</option>
												<option value="14日">14日</option>
												<option value="15日">15日</option>
												<option value="16日">16日</option>
												<option value="17日">17日</option>
												<option value="18日">18日</option>
												<option value="19日">19日</option>
												<option value="20日">20日</option>
												<option value="21日">21日</option>
												<option value="22日">22日</option>
												<option value="23日">23日</option>
												<option value="24日">24日</option>
												<option value="25日">25日</option>
												<option value="26日">26日</option>
												<option value="27日">27日</option>
												<option value="28日">28日</option>
												<option value="29日">29日</option>
												<option value="30日">30日</option>
												<option value="31日">31日</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th class="w125">年齢</th>
								<td>
									<select name="age" class="w63">
										<option>選択</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w125">血液型</th>
								<td>
									<select name="bloodType" class="w63">
										<option>選択</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="O">O</option>
										<option value="AB">AB</option>
									</select>
								</td>
							</tr>
						</tbody></table>
						<div class="headingB">
							<h3>緊急連絡先</h3>
						</div>
						<table class="tableA">
							<tbody><tr>
								<th class="w125">氏名（漢字）</th>
								<td>
									<input type="text" name="emergencyName-Kanji" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">氏名（カナ）</th>
								<td>
									<input type="text" name="emergencyName-Kana" class="w100p">
								</td>
							</tr>
							<tr>
								<th class="w125">続柄</th>
								<td>
									<select name="relationship" class="w63">
										<option>選択</option>
										<option value="妻">妻</option>
										<option value="夫">夫</option>
										<option value="子">子</option>
										<option value="孫">孫</option>
										<option value="実兄">実兄</option>
										<option value="実弟">実弟</option>
										<option value="実姉">実姉</option>
										<option value="実妹">実妹</option>
										<option value="祖父">祖父</option>
										<option value="祖母">祖母</option>
										<option value="曽祖父">曽祖父</option>
										<option value="曾祖母">曾祖母</option>
										<option value="従兄弟">従兄弟</option>
										<option value="叔父">叔父</option>
										<option value="叔母">叔母</option>
										<option value="義父">義父</option>
										<option value="義母">義母</option>
										<option value="義兄">義兄</option>
										<option value="義弟">義弟</option>
										<option value="義姉">義姉</option>
										<option value="義妹">義妹</option>
										<option value="義祖父">義祖父</option>
										<option value="義祖母">義祖母</option>
										<option value="義叔父">義叔父</option>
										<option value="義叔母">義叔母</option>
										<option value="義従兄弟">義従兄弟</option>
										<option value="知人／友人">知人／友人</option>
										<option value="同居人">同居人</option>
										<option value="その他">その他</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w125">電話番号</th>
								<td>
									<input type="text" class="w53" name="emergencyPhoneNumberAreaCode" placeholder="000">
									ー
									<input type="text" class="w53" name="emergencyPhoneNumberFirstHalf" placeholder="0000">
									ー
									<input type="text" class="w53" name="emergencyPhoneNumberLastHalf" placeholder="0000">
								</td>
							</tr>
						</tbody></table>
						<table class="tableA noTtl">
							<tbody><tr>
								<th class="w125">備考</th>
								<td class="bdt">
									<textarea name="remarks" rows="8" class="w100p"></textarea>
								</td>
							</tr>
						</tbody></table>
					</div>
					<div class="boxRight w470">
						<table class="tableA noTtl">
							<tbody><tr>
								<th class="w105">登録年月日</th>
								<td>
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="registrationYear" class="w105">
												<option>年選択</option>
												<option value="2016年">2016年</option>
												<option value="2017年">2017年</option>
												<option value="2018年">2018年</option>
												<option value="2019年">2019年</option>
												<option value="2020年">2020年</option>
												<option value="2021年">2021年</option>
												<option value="2022年">2022年</option>
												<option value="2023年">2023年</option>
												<option value="2024年">2024年</option>
												<option value="2025年">2025年</option>
											</select>
											<select name="registrationMonth" class="w72">
												<option>月選択</option>
												<option value="1月">1月</option>
												<option value="2月">2月</option>
												<option value="3月">3月</option>
												<option value="4月">4月</option>
												<option value="5月">5月</option>
												<option value="6月">6月</option>
												<option value="7月">7月</option>
												<option value="8月">8月</option>
												<option value="9月">9月</option>
												<option value="10月">10月</option>
												<option value="11月">11月</option>
												<option value="12月">12月</option>
											</select>
											<select name="registrationDay" class="w72">
												<option>日選択</option>
												<option value="1日">1日</option>
												<option value="2日">2日</option>
												<option value="3日">3日</option>
												<option value="4日">4日</option>
												<option value="5日">5日</option>
												<option value="6日">6日</option>
												<option value="7日">7日</option>
												<option value="8日">8日</option>
												<option value="9日">9日</option>
												<option value="10日">10日</option>
												<option value="11日">11日</option>
												<option value="12日">12日</option>
												<option value="13日">13日</option>
												<option value="14日">14日</option>
												<option value="15日">15日</option>
												<option value="16日">16日</option>
												<option value="17日">17日</option>
												<option value="18日">18日</option>
												<option value="19日">19日</option>
												<option value="20日">20日</option>
												<option value="21日">21日</option>
												<option value="22日">22日</option>
												<option value="23日">23日</option>
												<option value="24日">24日</option>
												<option value="25日">25日</option>
												<option value="26日">26日</option>
												<option value="27日">27日</option>
												<option value="28日">28日</option>
												<option value="29日">29日</option>
												<option value="30日">30日</option>
												<option value="31日">31日</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th class="w105">ガイズ担当者 <br>（受付担当）</th>
								<td>
									<select class="w105" name="representative">
										<option>選択</option>
									</select>
								</td>
							</tr>
							<tr>
								<th class="w105">労災組合名</th>
								<td>
									<input type="text" class="w100p" name="workersUnion">
								</td>
							</tr>
							<tr>
								<th class="w105">労災番号</th>
								<td>
									<input type="text" class="w100p" name="compensationInsuranceNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">健康保険名</th>
								<td>
									<input type="text" class="w100p" name="nationalHealthInsurance">
								</td>
							</tr>
							<tr>
								<th class="w105">健康保険番号</th>
								<td>
									<input type="text" class="w100p" name="nationalHealthInsuranceNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">年金保険種類</th>
								<td>
									<input type="text" class="w100p" name="pensionInsurance">
								</td>
							</tr>
							<tr>
								<th class="w105">年金番号</th>
								<td>
									<input type="text" class="w100p" name="pensionNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">雇用保険番号</th>
								<td>
									<input type="text" class="w100p" name="unemploymentInsuranceNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">足場作業者番号</th>
								<td>
									<input type="text" class="w100p" name="scaffoldWorkersNumber">
								</td>
							</tr>
							<tr>
								<th class="w105">その他 1</th>
								<td>
									<input type="text" class="w100p" name="other1">
								</td>
							</tr>
							<tr>
								<th class="w105">その他 2</th>
								<td>
									<input type="text" class="w100p" name="other2">
								</td>
							</tr>
						</tbody></table>
						<table class="tableA noTtl">
							<tbody><tr>
								<th class="w105">健康診断 <br>最新診断日</th>
								<td colspan="3" class="bdt">
									<ul class="dateSortingArea horizontal">
										<li>
											<select name="latestCheckupYear" class="w105">
												<option>年選択</option>
												<option value="2016年">2016年</option>
												<option value="2017年">2017年</option>
												<option value="2018年">2018年</option>
												<option value="2019年">2019年</option>
												<option value="2020年">2020年</option>
												<option value="2021年">2021年</option>
												<option value="2022年">2022年</option>
												<option value="2023年">2023年</option>
												<option value="2024年">2024年</option>
												<option value="2025年">2025年</option>
											</select>
											<select name="latestCheckupMonth" class="w72">
												<option>月選択</option>
												<option value="1月">1月</option>
												<option value="2月">2月</option>
												<option value="3月">3月</option>
												<option value="4月">4月</option>
												<option value="5月">5月</option>
												<option value="6月">6月</option>
												<option value="7月">7月</option>
												<option value="8月">8月</option>
												<option value="9月">9月</option>
												<option value="10月">10月</option>
												<option value="11月">11月</option>
												<option value="12月">12月</option>
											</select>
											<select name="latestCheckupDay" class="w72">
												<option>日選択</option>
												<option value="1日">1日</option>
												<option value="2日">2日</option>
												<option value="3日">3日</option>
												<option value="4日">4日</option>
												<option value="5日">5日</option>
												<option value="6日">6日</option>
												<option value="7日">7日</option>
												<option value="8日">8日</option>
												<option value="9日">9日</option>
												<option value="10日">10日</option>
												<option value="11日">11日</option>
												<option value="12日">12日</option>
												<option value="13日">13日</option>
												<option value="14日">14日</option>
												<option value="15日">15日</option>
												<option value="16日">16日</option>
												<option value="17日">17日</option>
												<option value="18日">18日</option>
												<option value="19日">19日</option>
												<option value="20日">20日</option>
												<option value="21日">21日</option>
												<option value="22日">22日</option>
												<option value="23日">23日</option>
												<option value="24日">24日</option>
												<option value="25日">25日</option>
												<option value="26日">26日</option>
												<option value="27日">27日</option>
												<option value="28日">28日</option>
												<option value="29日">29日</option>
												<option value="30日">30日</option>
												<option value="31日">31日</option>
											</select>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th>血圧（上）</th>
								<td>
									<input type="text" name="bloodPressureHigher" class="w100p">
								</td>
								<th class="w80">血圧（下）</th>
								<td>
									<input type="text" name="bloodPressureLower" class="w100p">
								</td>
							</tr>
							<tr>
								<th>その他</th>
								<td colspan="3">
									<input type="text" name="other">
								</td>
							</tr>
						</tbody></table>
						<div class="headingB">
							<h3>キャリア／スキル</h3>
						</div>
						<table class="tableB">
							<tbody><tr>
								<th>工事種 1</th>
								<th>工事種 2</th>
								<th>登録時経験年数</th>
							</tr>
							<tr>
								<td><input type="text" name="constructionType1-1" class="w100p"></td>
								<td><input type="text" name="constructionType1-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience1" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType2-1" class="w100p"></td>
								<td><input type="text" name="constructionType2-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience2" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType3-1" class="w100p"></td>
								<td><input type="text" name="constructionType3-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience3" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType4-1" class="w100p"></td>
								<td><input type="text" name="constructionType4-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience4" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType5-1" class="w100p"></td>
								<td><input type="text" name="constructionType5-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience5" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType6-1" class="w100p"></td>
								<td><input type="text" name="constructionType6-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience6" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType7-1" class="w100p"></td>
								<td><input type="text" name="constructionType7-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience7" class="mr5 w120">年</td>
							</tr>
							<tr>
								<td><input type="text" name="constructionType8-1" class="w100p"></td>
								<td><input type="text" name="constructionType8-2" class="w100p"></td>
								<td><input type="text" name="yearsOfExperience8" class="mr5 w120">年</td>
							</tr>
						</tbody></table>
					</div>
				</div>
				<div class="clearfix">
					<div class="boxRight">
						<button class="btnReload" type="button">登録・更新する</button>
					</div>
				</div>
			</div>
		</form>
		<footer>© GUY’S COMPANY All Rights Reserved</footer>
	</div>
</body>
</html>