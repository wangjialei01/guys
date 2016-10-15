<!--{if $view_flg1 == 0}-->
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<!--{else}-->
	<!--{if is_array($arrForm.err_msg)}-->
		<div class="errorBox">
			<!--{foreach from=$arrForm.err_msg key=key item=value name=cnt}-->
				<p class="error"><!--{$value}--></p>
			<!--{/foreach}-->
		</div>
	<!--{else}-->
		<!--{if is_array($arrForm.err_msg2)}-->
			<div class="errorBox">
				<!--{foreach from=$arrForm.err_msg2 key=key item=value name=cnt}-->
					<p class="error"><!--{$value}--></p>
				<!--{/foreach}-->
			</div>
		<!--{/if}-->
		<form name="form1" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->" method="POST">
			<input type="hidden" name="mode" id="mode" value="<!--{$editMode}-->">
			<input type="hidden" name="FN_codeNumberDel" value="<!--{$codeNumber}-->">
			<input type="hidden" name="FN_officeCodeDel" value="<!--{$officeCode}-->">
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
                            <div class="btnBack"><a href="../client_search/index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先 会社情報（新規登録／編集）</h2>
						</div>
                    <!--{*
						<div class="boxRight" id="client_del_single">
							<p class="textAnchor resetClientData"><a href="#" onclick="client_del_single();">この取引先を削除する</a></p>
						</div>
                    *}-->
					</div>
                    <table class="tableA">
                        <tr>
                            <th class="w87">企業名</th>
                            <td>
                                <select name="codeNumber" class="w363">
                                    <!--{foreach from=$selectCompany key=key item=value name=cnt}-->
                                        <!--{if $select.codeNumber == $value.codeNumber}-->
                                        <option value="<!--{$value.codeNumber}-->"><!--{$value.clientNameInSystem}--></option>
                                        <!--{/if}-->
                                    <!--{/foreach}-->
                                </select>
                            </td>
                            <th class="w63">事業所名</th>
                            <td colspan="3">
                                <ul class="horizontal">
                                    <li class="mr7">
                                        <input class="w326" name="office" type="text" value="<!--{$select.office}-->" Readonly>
                                    </li>
                                    <li>
                                    <div class="radioBtn">
                                        <input type="hidden" name="noOffice" value="<!--{$select.noOffice}-->">
                                        <input type="radio" name="noOffice" id="noOffice" value="1"<!--{if $select.noOffice == 1}--> checked<!--{/if}--> disabled>
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
                            <td>
                                <input type="text" class="w135" name="officeCode" placeholder="000A00-00" value="<!--{$select.officeCode}-->" Readonly>
                            </td>
                            <th>取引タイプ</th>
                            <td>
                                <input type="hidden" name="takeConstructionOrder" value="<!--{$select.takeConstructionOrder}-->">
                                <input type="hidden" name="sellingMaterials" value="<!--{$select.sellingMaterials}-->">
                                <input type="hidden" name="orderMaterials" value="<!--{$select.orderMaterials}-->">
                                <input type="hidden" name="orderConstruction" value="<!--{$select.orderConstruction}-->">
                                <ul class="horizontal">
                                    <li class="mr10">
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType01" name="takeConstructionOrder" value="1"<!--{if $select.takeConstructionOrder == 1}--> checked<!--{/if}--> disabled>
                                            <label for="dealType01">工事受注</label>
                                        </div>
                                    </li>
                                    <li class="mr10">
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType02" name="sellingMaterials" value="1"<!--{if $select.sellingMaterials == 1}--> checked<!--{/if}--> disabled>
                                            <label for="dealType02">材料販売</label>
                                        </div>
                                    </li>
                                    <li class="mr10">
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType03" name="orderMaterials" value="1"<!--{if $select.orderMaterials == 1}--> checked<!--{/if}--> disabled>
                                            <label for="dealType03">材料発注</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType04" name="orderConstruction" value="1"<!--{if $select.orderConstruction == 1}--> checked<!--{/if}--> disabled>
                                            <label for="dealType04">工事発注</label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <th>検索用テキスト</th>
                            <td><input type="text" name="searchBox" class="w216" value="<!--{$select.searchBox}-->" Readonly></td>
                        </tr>
                    </table>
                    <div class="clearfix">
                        <div class="boxRight">
<!--{*
                            <button class="btnReload" type="submit">登録・更新する</button>
*}-->
                            <br /><br />
                        </div>
                    </div>
				</div>
			</section>
		</form>

		<form name="form2" action="?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->" method="POST">
			<input type="hidden" name="mode" id="mode2" value="<!--{$editModeBase}-->">
			<input type="hidden" name="codeNumber" value="<!--{$codeNumber}-->">
			<input type="hidden" name="officeCode" value="<!--{$officeCode}-->">
			<div class="container">
				<nav id="subNav">
					<ul>
						<li class="leftEnd"><a href="index.php?mode=detail&codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">基本情報</a></li>
						<li><a href="hanbai-keiri.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">販売系経理情報</a></li>
						<li class="currentLink"><a href="shiire-keiri.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">仕入系経理情報</a></li>
						<li><a href="hacchu/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">発注書設定</a></li>
						<li><a href="worker/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">作業員情報</a></li>
						<li class="rightEnd"><a href="tatekae/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">立替金情報</a></li>
						<li class="leftEnd"><a href="request/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">依頼／受注履歴</a></li>
						<li><a href="seikyusho/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">請求書一覧</a></li>
						<li><a href="urikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">売掛金情報</a></li>
						<li><a href="minyukin/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">未入金・不足工事一覧</a></li>
						<li><a href="shiire-rireki/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">仕入／発注履歴</a></li>
						<li class="rightEnd"><a href="kaikake/index.php?codeNumber=<!--{$codeNumber}-->&officeCode=<!--{$officeCode}-->">買掛金情報</a></li>
					</ul>
				</nav>
			</div>
			<!--{if $view_flg2 == 1}-->
				<div class="container">
					<div class="clearfix mb30">
						<div class="boxLeft w470">
							<table class="tableA noTtl">
								<tr>
									<th class="w130">システム<br>買掛繰越金額 初期値</th>
									<td>
										<input type="text" class="w210 mr7" name="broughtForwardAccountsReceivable" value="<!--{$selectBase.broughtForwardAccountsReceivable}-->">円
									</td>
								</tr>
							</table>
							<div class="headingB">
								<h3>備考</h3>
							</div>
							<table class="tableA">
								<tr>
									<th class="w130">備考</th>
									<td>
										<textarea name="remarks" rows="3" class="w100p"><!--{$selectBase.remarks}--></textarea>
									</td>
								</tr>
							</table>
						</div>
						<div class="boxRight w470">
							<div class="headingB">
								<div class="clearfix">
									<div class="boxLeft mr7">
										<h3>郵便物送付先情報</h3>
									</div>
									<div class="boxLeft">
										<ul class="horizontal">
											<li>
												<div class="checkBox">
													<input type="hidden" name="sameAddress" value="0">
													<input type="checkbox" id="sameAddress" name="sameAddress" value="1"<!--{if $selectBase.sameAddress == 1}--> checked<!--{/if}-->>
													<label for="sameAddress">所在地に同じ</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<table class="tableA">
								<tr>
									<th class="w102">郵便番号</th>
									<td>
									<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000" value="<!--{$selectBase.postcodeFirstHalf}-->">
									ー
									<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000" value="<!--{$selectBase.postcodeLastHalf}-->">
								</td>
								</tr>
								<tr>
									<th>所在地</th>
									<td>
										<input type="text" class="w100p" id="address" name="address" value="<!--{$selectBase.address}-->">
									</td>
								</tr>
								<tr>
									<th>ビル・建物名等</th>
									<td>
										<input type="text" class="w100p" name="buildingName" value="<!--{$selectBase.buildingName}-->">
									</td>
								</tr>
								<tr>
									<th>電話番号</th>
									<td>
										<input type="text" class="w53" name="phoneNumberAreaCode1" placeholder="000" value="<!--{$selectBase.phoneNumberAreaCode1}-->">
										ー
										<input type="text" class="w53" name="phoneNumberFirstHalf1" placeholder="0000" value="<!--{$selectBase.phoneNumberFirstHalf1}-->">
										ー
										<input type="text" class="w53" name="phoneNumberLastHalf1" placeholder="0000" value="<!--{$selectBase.phoneNumberLastHalf1}-->">
									</td>
								</tr>
								<tr>
									<th>ファックス番号</th>
									<td>
										<input type="text" class="w53" name="faxNumberAreaCode1" placeholder="000" value="<!--{$selectBase.faxNumberAreaCode1}-->">
										ー
										<input type="text" class="w53" name="faxNumberFirstHalf1" placeholder="0000" value="<!--{$selectBase.faxNumberFirstHalf1}-->">
										ー
										<input type="text" class="w53" name="faxNumberLastHalf1" placeholder="0000" value="<!--{$selectBase.faxNumberLastHalf1}-->">
									</td>
								</tr>
							</table>
						</div>
					</div>
					<hr>
					<div class="headingB">
						<h3>受請求書情報</h3>
					</div>
					<table class="tableA mb30">
						<tr>
							<th class="w101">支払方法</th>
							<td>
								<select name="numberOfPayment" class="w63">
									<option value="">選択</option>
									<!--{foreach from=$selectMaster.numberOfPayment key=key item=value name=cnt}-->
										<option value="<!--{$value.masterId}-->"<!--{if $selectBase.numberOfPayment == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
									<!--{/foreach}-->
								</select>
							</td>
						</tr>
						<tr>
							<th>締め日／支払日</th>
							<td>
								<div class="clearfix">
									<div class="boxLeft mr7">
										<select name="cutoffDate01" class="w63 mr7">
											<option value="">選択</option>
											<option value="1"<!--{if $selectBase.cutoffDate01 == 1}--> selected<!--{/if}-->>1日</option>
											<option value="2"<!--{if $selectBase.cutoffDate01 == 2}--> selected<!--{/if}-->>2日</option>
											<option value="3"<!--{if $selectBase.cutoffDate01 == 3}--> selected<!--{/if}-->>3日</option>
											<option value="4"<!--{if $selectBase.cutoffDate01 == 4}--> selected<!--{/if}-->>4日</option>
											<option value="5"<!--{if $selectBase.cutoffDate01 == 5}--> selected<!--{/if}-->>5日</option>
											<option value="6"<!--{if $selectBase.cutoffDate01 == 6}--> selected<!--{/if}-->>6日</option>
											<option value="7"<!--{if $selectBase.cutoffDate01 == 7}--> selected<!--{/if}-->>7日</option>
											<option value="8"<!--{if $selectBase.cutoffDate01 == 8}--> selected<!--{/if}-->>8日</option>
											<option value="9"<!--{if $selectBase.cutoffDate01 == 9}--> selected<!--{/if}-->>9日</option>
											<option value="10"<!--{if $selectBase.cutoffDate01 == 10}--> selected<!--{/if}-->>10日</option>
											<option value="11"<!--{if $selectBase.cutoffDate01 == 11}--> selected<!--{/if}-->>11日</option>
											<option value="12"<!--{if $selectBase.cutoffDate01 == 12}--> selected<!--{/if}-->>12日</option>
											<option value="13"<!--{if $selectBase.cutoffDate01 == 13}--> selected<!--{/if}-->>13日</option>
											<option value="14"<!--{if $selectBase.cutoffDate01 == 14}--> selected<!--{/if}-->>14日</option>
											<option value="15"<!--{if $selectBase.cutoffDate01 == 15}--> selected<!--{/if}-->>15日</option>
											<option value="16"<!--{if $selectBase.cutoffDate01 == 16}--> selected<!--{/if}-->>16日</option>
											<option value="17"<!--{if $selectBase.cutoffDate01 == 17}--> selected<!--{/if}-->>17日</option>
											<option value="18"<!--{if $selectBase.cutoffDate01 == 18}--> selected<!--{/if}-->>18日</option>
											<option value="19"<!--{if $selectBase.cutoffDate01 == 19}--> selected<!--{/if}-->>19日</option>
											<option value="20"<!--{if $selectBase.cutoffDate01 == 20}--> selected<!--{/if}-->>20日</option>
											<option value="21"<!--{if $selectBase.cutoffDate01 == 21}--> selected<!--{/if}-->>21日</option>
											<option value="22"<!--{if $selectBase.cutoffDate01 == 22}--> selected<!--{/if}-->>22日</option>
											<option value="23"<!--{if $selectBase.cutoffDate01 == 23}--> selected<!--{/if}-->>23日</option>
											<option value="24"<!--{if $selectBase.cutoffDate01 == 24}--> selected<!--{/if}-->>24日</option>
											<option value="25"<!--{if $selectBase.cutoffDate01 == 25}--> selected<!--{/if}-->>25日</option>
											<option value="26"<!--{if $selectBase.cutoffDate01 == 26}--> selected<!--{/if}-->>26日</option>
											<option value="27"<!--{if $selectBase.cutoffDate01 == 27}--> selected<!--{/if}-->>27日</option>
											<option value="28"<!--{if $selectBase.cutoffDate01 == 28}--> selected<!--{/if}-->>28日</option>
											<option value="29"<!--{if $selectBase.cutoffDate01 == 29}--> selected<!--{/if}-->>29日</option>
											<option value="30"<!--{if $selectBase.cutoffDate01 == 30}--> selected<!--{/if}-->>30日</option>
											<option value="31"<!--{if $selectBase.cutoffDate01 == 31}--> selected<!--{/if}-->>31日</option>
											<option value="99"<!--{if $selectBase.cutoffDate01 == 99}--> selected<!--{/if}-->>都度</option>
										</select>締め
									</div>
									<div class="boxLeft mr7">
										<select name="paymentMonth01" class="w63 mr7">
											<option value="">選択</option>
											<option value="1"<!--{if $selectBase.paymentMonth01 == 1}--> selected<!--{/if}-->>当月</option>
											<option value="2"<!--{if $selectBase.paymentMonth01 == 2}--> selected<!--{/if}-->>翌月</option>
											<option value="3"<!--{if $selectBase.paymentMonth01 == 3}--> selected<!--{/if}-->>翌々月</option>
										</select>
										<select name="payDay01" class="w63">
											<option value="">選択</option>
											<option value="1"<!--{if $selectBase.payDay01 == 1}--> selected<!--{/if}-->>1日</option>
											<option value="2"<!--{if $selectBase.payDay01 == 2}--> selected<!--{/if}-->>2日</option>
											<option value="3"<!--{if $selectBase.payDay01 == 3}--> selected<!--{/if}-->>3日</option>
											<option value="4"<!--{if $selectBase.payDay01 == 4}--> selected<!--{/if}-->>4日</option>
											<option value="5"<!--{if $selectBase.payDay01 == 5}--> selected<!--{/if}-->>5日</option>
											<option value="6"<!--{if $selectBase.payDay01 == 6}--> selected<!--{/if}-->>6日</option>
											<option value="7"<!--{if $selectBase.payDay01 == 7}--> selected<!--{/if}-->>7日</option>
											<option value="8"<!--{if $selectBase.payDay01 == 8}--> selected<!--{/if}-->>8日</option>
											<option value="9"<!--{if $selectBase.payDay01 == 9}--> selected<!--{/if}-->>9日</option>
											<option value="10"<!--{if $selectBase.payDay01 == 10}--> selected<!--{/if}-->>10日</option>
											<option value="11"<!--{if $selectBase.payDay01 == 11}--> selected<!--{/if}-->>11日</option>
											<option value="12"<!--{if $selectBase.payDay01 == 12}--> selected<!--{/if}-->>12日</option>
											<option value="13"<!--{if $selectBase.payDay01 == 13}--> selected<!--{/if}-->>13日</option>
											<option value="14"<!--{if $selectBase.payDay01 == 14}--> selected<!--{/if}-->>14日</option>
											<option value="15"<!--{if $selectBase.payDay01 == 15}--> selected<!--{/if}-->>15日</option>
											<option value="16"<!--{if $selectBase.payDay01 == 16}--> selected<!--{/if}-->>16日</option>
											<option value="17"<!--{if $selectBase.payDay01 == 17}--> selected<!--{/if}-->>17日</option>
											<option value="18"<!--{if $selectBase.payDay01 == 18}--> selected<!--{/if}-->>18日</option>
											<option value="19"<!--{if $selectBase.payDay01 == 19}--> selected<!--{/if}-->>19日</option>
											<option value="20"<!--{if $selectBase.payDay01 == 20}--> selected<!--{/if}-->>20日</option>
											<option value="21"<!--{if $selectBase.payDay01 == 21}--> selected<!--{/if}-->>21日</option>
											<option value="22"<!--{if $selectBase.payDay01 == 22}--> selected<!--{/if}-->>22日</option>
											<option value="23"<!--{if $selectBase.payDay01 == 23}--> selected<!--{/if}-->>23日</option>
											<option value="24"<!--{if $selectBase.payDay01 == 24}--> selected<!--{/if}-->>24日</option>
											<option value="25"<!--{if $selectBase.payDay01 == 25}--> selected<!--{/if}-->>25日</option>
											<option value="26"<!--{if $selectBase.payDay01 == 26}--> selected<!--{/if}-->>26日</option>
											<option value="27"<!--{if $selectBase.payDay01 == 27}--> selected<!--{/if}-->>27日</option>
											<option value="28"<!--{if $selectBase.payDay01 == 28}--> selected<!--{/if}-->>28日</option>
											<option value="29"<!--{if $selectBase.payDay01 == 29}--> selected<!--{/if}-->>29日</option>
											<option value="30"<!--{if $selectBase.payDay01 == 30}--> selected<!--{/if}-->>30日</option>
											<option value="31"<!--{if $selectBase.payDay01 == 31}--> selected<!--{/if}-->>31日</option>
											<option value="99"<!--{if $selectBase.payDay01 == 99}--> selected<!--{/if}-->>都度</option>
										</select>
										払い
									</div>
									<div class="boxLeft">
										<ul class="horizontal">
											<li class="mr7">
												<div class="checkBox">
													<input type="hidden" name="other01" value="0">
													<input type="checkbox" id="other01" name="other01" value="1"<!--{if $selectBase.other01 == 1}--> checked<!--{/if}-->>
													<label for="other01">その他</label>
												</div>
											</li>
											<li>
												<input type="text" class="w350" name="otherInput01" value="<!--{$selectBase.otherInput01}-->">
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
					</table>
					<div class="clearfix">
						<div class="boxLeft w470">
							<div class="headingB">
								<h3>振込先 金融機関</h3>
							</div>
							<table class="tableA">
								<tr>
									<th class="w101">金融機関名</th>
									<td>
										<input type="text" class="w100p" name="financialInstitution" value="<!--{$selectBase.financialInstitution}-->">
									</td>
								</tr>
								<tr>
									<th>支店名</th>
									<td>
										<input type="text" class="w100p" name="branchName" value="<!--{$selectBase.branchName}-->">
									</td>
								</tr>
								<tr>
									<th>口座種類</th>
									<td>
										<select name="typeOfAccount" class="w105">
											<option value="">選択</option>
											<!--{foreach from=$selectMaster.typeOfAccount key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.typeOfAccount == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
									</td>
								</tr>
								<tr>
									<th>口座番号</th>
									<td>
										<input type="text" class="w100p" name="accountNumber" value="<!--{$selectBase.accountNumber}-->">
									</td>
								</tr>
								<tr>
									<th>口座名義</th>
									<td>
										<input type="text" class="w100p" name="accountHolder" value="<!--{$selectBase.accountHolder}-->">
									</td>
								</tr>
							</table>
						</div>
						<div class="boxRight w470">
							<div class="headingB">
								<h3>備考</h3>
							</div>
							<table class="tableA">
								<tbody>
									<tr>
										<th class="w125">備考</th>
										<td>
											<textarea name="accountRemarks" rows="9" class="w100p"><!--{$selectBase.accountRemarks}--></textarea>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<table class="tableA noTtl	">
						<tbody>
							<tr>
								<th class="w140">共済金（協力費）有無</th>
								<td class="w63">
									<select name="havingOrNotMutualAid" class="w63">
										<option value="">選択</option>
										<option value="1"<!--{if $selectBase.havingOrNotMutualAid == 1}--> selected<!--{/if}-->>有</option>
										<option value="2"<!--{if $selectBase.havingOrNotMutualAid == 2}--> selected<!--{/if}-->>無</option>
									</select>
								</td>
								<th class="w115">共済金（協力費）</th>
								<td class="w80">
									<input type="text" class="w53 mr7" name="mutualAidMoney" value="<!--{$selectBase.mutualAidMoney}-->">％
								</td>
								<th class="w115">領収書デフォルト</th>
								<td>
									<select name="defaultBill" class="w125 mr7">
										<option value="">選択</option>
										<option value="1"<!--{if $selectBase.defaultBill == 1}--> selected<!--{/if}-->>保険料一部負担金</option>
										<option value="2"<!--{if $selectBase.defaultBill == 2}--> selected<!--{/if}-->>相殺金一式</option>
									</select>※工事発注取引がある時のみ選択
								</td>
							</tr>
						</tbody>
					</table>
					<!--
					<div class="clearfix">
						<div class="boxRight">
							<button class="btnReload" type="submit">登録・更新する</button>
						</div>
					</div>
					-->
					<div class="clearfix">
						<div class="boxLeft w470">
							<div class="headingB">
								<h3>相殺金 デフォルト設定（共済金除く）</h3>
							</div>
							<table class="tableA">
								<tr>
									<th class="w73">相殺（1）</th>
									<td>
										<select name="offset01" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset01 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price1" value="<!--{$selectBase.price1}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（2）</th>
									<td>
										<select name="offset02" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset02 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price2" value="<!--{$selectBase.price2}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（3）</th>
									<td>
										<select name="offset03" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset03 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price3" value="<!--{$selectBase.price3}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（4）</th>
									<td>
										<select name="offset04" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset04 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price4" value="<!--{$selectBase.price4}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（5）</th>
									<td>
										<select name="offset05" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset05 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price5" value="<!--{$selectBase.price5}-->">円
									</td>
								</tr>
							</table>
						</div>
						<div class="boxRight w470">
							<table class="tableA noTtl">
								<tr>
									<th class="w80">相殺（6）</th>
									<td>
										<select name="offset06" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset06 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price6" value="<!--{$selectBase.price6}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（7）</th>
									<td>
										<select name="offset07" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset07 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price7" value="<!--{$selectBase.price7}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（8）</th>
									<td>
										<select name="offset08" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset08 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price8" value="<!--{$selectBase.price8}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（9）</th>
									<td>
										<select name="offset09" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset09 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price9" value="<!--{$selectBase.price9}-->">円
									</td>
								</tr>
								<tr>
									<th>相殺（10）</th>
									<td>
										<select name="offset10" class="w105 mr7">
											<option value="">※相殺項目</option>
											<!--{foreach from=$selectMaster.offsetItem key=key item=value name=cnt}-->
												<option value="<!--{$value.masterId}-->"<!--{if $selectBase.offset10 == $value.masterId}--> selected<!--{/if}-->><!--{$value.name}--></option>
											<!--{/foreach}-->
										</select>
										<input type="text" class="w210 mr7" name="price10" value="<!--{$selectBase.price10}-->">円
									</td>
								</tr>
							</table>
						</div>
					</div>
					<!--{if $view_flg3 == 1}-->
						<div class="clearfix">
							<div class="boxRight">
								<button class="btnReload" type="submit">登録・更新する</button>
							</div>
						</div>
					<!--{/if}-->
				</div>
			<!--{/if}-->
		</form>
	<!--{/if}-->
<!--{/if}-->
