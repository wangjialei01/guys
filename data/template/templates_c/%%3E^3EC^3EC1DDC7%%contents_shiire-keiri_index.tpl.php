<?php /* Smarty version 2.6.26, created on 2016-10-14 18:17:45
         compiled from client/contents_shiire-keiri_index.tpl */ ?>
<?php if ($this->_tpl_vars['view_flg1'] == 0): ?>
	<div class="errorBox">
		<p class="error">権限がありません。</p>
	</div>
<?php else: ?>
	<?php if (is_array ( $this->_tpl_vars['arrForm']['err_msg'] )): ?>
		<div class="errorBox">
			<?php $_from = $this->_tpl_vars['arrForm']['err_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
				<p class="error"><?php echo $this->_tpl_vars['value']; ?>
</p>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	<?php else: ?>
		<?php if (is_array ( $this->_tpl_vars['arrForm']['err_msg2'] )): ?>
			<div class="errorBox">
				<?php $_from = $this->_tpl_vars['arrForm']['err_msg2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
					<p class="error"><?php echo $this->_tpl_vars['value']; ?>
</p>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
		<form name="form1" action="?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
" method="POST">
			<input type="hidden" name="mode" id="mode" value="<?php echo $this->_tpl_vars['editMode']; ?>
">
			<input type="hidden" name="FN_codeNumberDel" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
			<input type="hidden" name="FN_officeCodeDel" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
			<section class="pageTop">
				<div class="container">
					<div class="pageTitle clearfix">
						<div class="boxLeft mr8">
                            <div class="btnBack"><a href="../client_search/index.php">戻る</a></div>
						</div>
						<div class="boxLeft">
							<h2>取引先 会社情報（新規登録／編集）</h2>
						</div>
                    					</div>
                    <table class="tableA">
                        <tr>
                            <th class="w87">企業名</th>
                            <td>
                                <select name="codeNumber" class="w363">
                                    <?php $_from = $this->_tpl_vars['selectCompany']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['select']['codeNumber'] == $this->_tpl_vars['value']['codeNumber']): ?>
                                        <option value="<?php echo $this->_tpl_vars['value']['codeNumber']; ?>
"><?php echo $this->_tpl_vars['value']['clientNameInSystem']; ?>
</option>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                            <th class="w63">事業所名</th>
                            <td colspan="3">
                                <ul class="horizontal">
                                    <li class="mr7">
                                        <input class="w326" name="office" type="text" value="<?php echo $this->_tpl_vars['select']['office']; ?>
" Readonly>
                                    </li>
                                    <li>
                                    <div class="radioBtn">
                                        <input type="hidden" name="noOffice" value="<?php echo $this->_tpl_vars['select']['noOffice']; ?>
">
                                        <input type="radio" name="noOffice" id="noOffice" value="1"<?php if ($this->_tpl_vars['select']['noOffice'] == 1): ?> checked<?php endif; ?> disabled>
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
                                <input type="text" class="w135" name="officeCode" placeholder="000A00-00" value="<?php echo $this->_tpl_vars['select']['officeCode']; ?>
" Readonly>
                            </td>
                            <th>取引タイプ</th>
                            <td>
                                <input type="hidden" name="takeConstructionOrder" value="<?php echo $this->_tpl_vars['select']['takeConstructionOrder']; ?>
">
                                <input type="hidden" name="sellingMaterials" value="<?php echo $this->_tpl_vars['select']['sellingMaterials']; ?>
">
                                <input type="hidden" name="orderMaterials" value="<?php echo $this->_tpl_vars['select']['orderMaterials']; ?>
">
                                <input type="hidden" name="orderConstruction" value="<?php echo $this->_tpl_vars['select']['orderConstruction']; ?>
">
                                <ul class="horizontal">
                                    <li class="mr10">
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType01" name="takeConstructionOrder" value="1"<?php if ($this->_tpl_vars['select']['takeConstructionOrder'] == 1): ?> checked<?php endif; ?> disabled>
                                            <label for="dealType01">工事受注</label>
                                        </div>
                                    </li>
                                    <li class="mr10">
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType02" name="sellingMaterials" value="1"<?php if ($this->_tpl_vars['select']['sellingMaterials'] == 1): ?> checked<?php endif; ?> disabled>
                                            <label for="dealType02">材料販売</label>
                                        </div>
                                    </li>
                                    <li class="mr10">
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType03" name="orderMaterials" value="1"<?php if ($this->_tpl_vars['select']['orderMaterials'] == 1): ?> checked<?php endif; ?> disabled>
                                            <label for="dealType03">材料発注</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkBox">
                                            <input type="checkbox" id="dealType04" name="orderConstruction" value="1"<?php if ($this->_tpl_vars['select']['orderConstruction'] == 1): ?> checked<?php endif; ?> disabled>
                                            <label for="dealType04">工事発注</label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <th>検索用テキスト</th>
                            <td><input type="text" name="searchBox" class="w216" value="<?php echo $this->_tpl_vars['select']['searchBox']; ?>
" Readonly></td>
                        </tr>
                    </table>
                    <div class="clearfix">
                        <div class="boxRight">
                            <br /><br />
                        </div>
                    </div>
				</div>
			</section>
		</form>

		<form name="form2" action="?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
" method="POST">
			<input type="hidden" name="mode" id="mode2" value="<?php echo $this->_tpl_vars['editModeBase']; ?>
">
			<input type="hidden" name="codeNumber" value="<?php echo $this->_tpl_vars['codeNumber']; ?>
">
			<input type="hidden" name="officeCode" value="<?php echo $this->_tpl_vars['officeCode']; ?>
">
			<div class="container">
				<nav id="subNav">
					<ul>
						<li class="leftEnd"><a href="index.php?mode=detail&codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">基本情報</a></li>
						<li><a href="hanbai-keiri.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">販売系経理情報</a></li>
						<li class="currentLink"><a href="shiire-keiri.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">仕入系経理情報</a></li>
						<li><a href="hacchu/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">発注書設定</a></li>
						<li><a href="worker/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">作業員情報</a></li>
						<li class="rightEnd"><a href="tatekae/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">立替金情報</a></li>
						<li class="leftEnd"><a href="request/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">依頼／受注履歴</a></li>
						<li><a href="seikyusho/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">請求書一覧</a></li>
						<li><a href="urikake/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">売掛金情報</a></li>
						<li><a href="minyukin/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">未入金・不足工事一覧</a></li>
						<li><a href="shiire-rireki/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">仕入／発注履歴</a></li>
						<li class="rightEnd"><a href="kaikake/index.php?codeNumber=<?php echo $this->_tpl_vars['codeNumber']; ?>
&officeCode=<?php echo $this->_tpl_vars['officeCode']; ?>
">買掛金情報</a></li>
					</ul>
				</nav>
			</div>
			<?php if ($this->_tpl_vars['view_flg2'] == 1): ?>
				<div class="container">
					<div class="clearfix mb30">
						<div class="boxLeft w470">
							<table class="tableA noTtl">
								<tr>
									<th class="w130">システム<br>買掛繰越金額 初期値</th>
									<td>
										<input type="text" class="w210 mr7" name="broughtForwardAccountsReceivable" value="<?php echo $this->_tpl_vars['selectBase']['broughtForwardAccountsReceivable']; ?>
">円
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
										<textarea name="remarks" rows="3" class="w100p"><?php echo $this->_tpl_vars['selectBase']['remarks']; ?>
</textarea>
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
													<input type="checkbox" id="sameAddress" name="sameAddress" value="1"<?php if ($this->_tpl_vars['selectBase']['sameAddress'] == 1): ?> checked<?php endif; ?>>
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
									<input type="text" class="w53" id="postcodeFirstHalf" name="postcodeFirstHalf" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['postcodeFirstHalf']; ?>
">
									ー
									<input type="text" class="w53" id="postcodeLastHalf" name="postcodeLastHalf" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['postcodeLastHalf']; ?>
">
								</td>
								</tr>
								<tr>
									<th>所在地</th>
									<td>
										<input type="text" class="w100p" id="address" name="address" value="<?php echo $this->_tpl_vars['selectBase']['address']; ?>
">
									</td>
								</tr>
								<tr>
									<th>ビル・建物名等</th>
									<td>
										<input type="text" class="w100p" name="buildingName" value="<?php echo $this->_tpl_vars['selectBase']['buildingName']; ?>
">
									</td>
								</tr>
								<tr>
									<th>電話番号</th>
									<td>
										<input type="text" class="w53" name="phoneNumberAreaCode1" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['phoneNumberAreaCode1']; ?>
">
										ー
										<input type="text" class="w53" name="phoneNumberFirstHalf1" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['phoneNumberFirstHalf1']; ?>
">
										ー
										<input type="text" class="w53" name="phoneNumberLastHalf1" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['phoneNumberLastHalf1']; ?>
">
									</td>
								</tr>
								<tr>
									<th>ファックス番号</th>
									<td>
										<input type="text" class="w53" name="faxNumberAreaCode1" placeholder="000" value="<?php echo $this->_tpl_vars['selectBase']['faxNumberAreaCode1']; ?>
">
										ー
										<input type="text" class="w53" name="faxNumberFirstHalf1" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['faxNumberFirstHalf1']; ?>
">
										ー
										<input type="text" class="w53" name="faxNumberLastHalf1" placeholder="0000" value="<?php echo $this->_tpl_vars['selectBase']['faxNumberLastHalf1']; ?>
">
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
									<?php $_from = $this->_tpl_vars['selectMaster']['numberOfPayment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
										<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['numberOfPayment'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
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
											<option value="1"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 1): ?> selected<?php endif; ?>>1日</option>
											<option value="2"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 2): ?> selected<?php endif; ?>>2日</option>
											<option value="3"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 3): ?> selected<?php endif; ?>>3日</option>
											<option value="4"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 4): ?> selected<?php endif; ?>>4日</option>
											<option value="5"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 5): ?> selected<?php endif; ?>>5日</option>
											<option value="6"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 6): ?> selected<?php endif; ?>>6日</option>
											<option value="7"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 7): ?> selected<?php endif; ?>>7日</option>
											<option value="8"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 8): ?> selected<?php endif; ?>>8日</option>
											<option value="9"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 9): ?> selected<?php endif; ?>>9日</option>
											<option value="10"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 10): ?> selected<?php endif; ?>>10日</option>
											<option value="11"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 11): ?> selected<?php endif; ?>>11日</option>
											<option value="12"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 12): ?> selected<?php endif; ?>>12日</option>
											<option value="13"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 13): ?> selected<?php endif; ?>>13日</option>
											<option value="14"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 14): ?> selected<?php endif; ?>>14日</option>
											<option value="15"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 15): ?> selected<?php endif; ?>>15日</option>
											<option value="16"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 16): ?> selected<?php endif; ?>>16日</option>
											<option value="17"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 17): ?> selected<?php endif; ?>>17日</option>
											<option value="18"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 18): ?> selected<?php endif; ?>>18日</option>
											<option value="19"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 19): ?> selected<?php endif; ?>>19日</option>
											<option value="20"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 20): ?> selected<?php endif; ?>>20日</option>
											<option value="21"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 21): ?> selected<?php endif; ?>>21日</option>
											<option value="22"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 22): ?> selected<?php endif; ?>>22日</option>
											<option value="23"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 23): ?> selected<?php endif; ?>>23日</option>
											<option value="24"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 24): ?> selected<?php endif; ?>>24日</option>
											<option value="25"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 25): ?> selected<?php endif; ?>>25日</option>
											<option value="26"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 26): ?> selected<?php endif; ?>>26日</option>
											<option value="27"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 27): ?> selected<?php endif; ?>>27日</option>
											<option value="28"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 28): ?> selected<?php endif; ?>>28日</option>
											<option value="29"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 29): ?> selected<?php endif; ?>>29日</option>
											<option value="30"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 30): ?> selected<?php endif; ?>>30日</option>
											<option value="31"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 31): ?> selected<?php endif; ?>>31日</option>
											<option value="99"<?php if ($this->_tpl_vars['selectBase']['cutoffDate01'] == 99): ?> selected<?php endif; ?>>都度</option>
										</select>締め
									</div>
									<div class="boxLeft mr7">
										<select name="paymentMonth01" class="w63 mr7">
											<option value="">選択</option>
											<option value="1"<?php if ($this->_tpl_vars['selectBase']['paymentMonth01'] == 1): ?> selected<?php endif; ?>>当月</option>
											<option value="2"<?php if ($this->_tpl_vars['selectBase']['paymentMonth01'] == 2): ?> selected<?php endif; ?>>翌月</option>
											<option value="3"<?php if ($this->_tpl_vars['selectBase']['paymentMonth01'] == 3): ?> selected<?php endif; ?>>翌々月</option>
										</select>
										<select name="payDay01" class="w63">
											<option value="">選択</option>
											<option value="1"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 1): ?> selected<?php endif; ?>>1日</option>
											<option value="2"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 2): ?> selected<?php endif; ?>>2日</option>
											<option value="3"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 3): ?> selected<?php endif; ?>>3日</option>
											<option value="4"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 4): ?> selected<?php endif; ?>>4日</option>
											<option value="5"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 5): ?> selected<?php endif; ?>>5日</option>
											<option value="6"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 6): ?> selected<?php endif; ?>>6日</option>
											<option value="7"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 7): ?> selected<?php endif; ?>>7日</option>
											<option value="8"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 8): ?> selected<?php endif; ?>>8日</option>
											<option value="9"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 9): ?> selected<?php endif; ?>>9日</option>
											<option value="10"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 10): ?> selected<?php endif; ?>>10日</option>
											<option value="11"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 11): ?> selected<?php endif; ?>>11日</option>
											<option value="12"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 12): ?> selected<?php endif; ?>>12日</option>
											<option value="13"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 13): ?> selected<?php endif; ?>>13日</option>
											<option value="14"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 14): ?> selected<?php endif; ?>>14日</option>
											<option value="15"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 15): ?> selected<?php endif; ?>>15日</option>
											<option value="16"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 16): ?> selected<?php endif; ?>>16日</option>
											<option value="17"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 17): ?> selected<?php endif; ?>>17日</option>
											<option value="18"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 18): ?> selected<?php endif; ?>>18日</option>
											<option value="19"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 19): ?> selected<?php endif; ?>>19日</option>
											<option value="20"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 20): ?> selected<?php endif; ?>>20日</option>
											<option value="21"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 21): ?> selected<?php endif; ?>>21日</option>
											<option value="22"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 22): ?> selected<?php endif; ?>>22日</option>
											<option value="23"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 23): ?> selected<?php endif; ?>>23日</option>
											<option value="24"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 24): ?> selected<?php endif; ?>>24日</option>
											<option value="25"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 25): ?> selected<?php endif; ?>>25日</option>
											<option value="26"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 26): ?> selected<?php endif; ?>>26日</option>
											<option value="27"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 27): ?> selected<?php endif; ?>>27日</option>
											<option value="28"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 28): ?> selected<?php endif; ?>>28日</option>
											<option value="29"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 29): ?> selected<?php endif; ?>>29日</option>
											<option value="30"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 30): ?> selected<?php endif; ?>>30日</option>
											<option value="31"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 31): ?> selected<?php endif; ?>>31日</option>
											<option value="99"<?php if ($this->_tpl_vars['selectBase']['payDay01'] == 99): ?> selected<?php endif; ?>>都度</option>
										</select>
										払い
									</div>
									<div class="boxLeft">
										<ul class="horizontal">
											<li class="mr7">
												<div class="checkBox">
													<input type="hidden" name="other01" value="0">
													<input type="checkbox" id="other01" name="other01" value="1"<?php if ($this->_tpl_vars['selectBase']['other01'] == 1): ?> checked<?php endif; ?>>
													<label for="other01">その他</label>
												</div>
											</li>
											<li>
												<input type="text" class="w350" name="otherInput01" value="<?php echo $this->_tpl_vars['selectBase']['otherInput01']; ?>
">
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
										<input type="text" class="w100p" name="financialInstitution" value="<?php echo $this->_tpl_vars['selectBase']['financialInstitution']; ?>
">
									</td>
								</tr>
								<tr>
									<th>支店名</th>
									<td>
										<input type="text" class="w100p" name="branchName" value="<?php echo $this->_tpl_vars['selectBase']['branchName']; ?>
">
									</td>
								</tr>
								<tr>
									<th>口座種類</th>
									<td>
										<select name="typeOfAccount" class="w105">
											<option value="">選択</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['typeOfAccount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['typeOfAccount'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
									</td>
								</tr>
								<tr>
									<th>口座番号</th>
									<td>
										<input type="text" class="w100p" name="accountNumber" value="<?php echo $this->_tpl_vars['selectBase']['accountNumber']; ?>
">
									</td>
								</tr>
								<tr>
									<th>口座名義</th>
									<td>
										<input type="text" class="w100p" name="accountHolder" value="<?php echo $this->_tpl_vars['selectBase']['accountHolder']; ?>
">
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
											<textarea name="accountRemarks" rows="9" class="w100p"><?php echo $this->_tpl_vars['selectBase']['accountRemarks']; ?>
</textarea>
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
										<option value="1"<?php if ($this->_tpl_vars['selectBase']['havingOrNotMutualAid'] == 1): ?> selected<?php endif; ?>>有</option>
										<option value="2"<?php if ($this->_tpl_vars['selectBase']['havingOrNotMutualAid'] == 2): ?> selected<?php endif; ?>>無</option>
									</select>
								</td>
								<th class="w115">共済金（協力費）</th>
								<td class="w80">
									<input type="text" class="w53 mr7" name="mutualAidMoney" value="<?php echo $this->_tpl_vars['selectBase']['mutualAidMoney']; ?>
">％
								</td>
								<th class="w115">領収書デフォルト</th>
								<td>
									<select name="defaultBill" class="w125 mr7">
										<option value="">選択</option>
										<option value="1"<?php if ($this->_tpl_vars['selectBase']['defaultBill'] == 1): ?> selected<?php endif; ?>>保険料一部負担金</option>
										<option value="2"<?php if ($this->_tpl_vars['selectBase']['defaultBill'] == 2): ?> selected<?php endif; ?>>相殺金一式</option>
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
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset01'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price1" value="<?php echo $this->_tpl_vars['selectBase']['price1']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（2）</th>
									<td>
										<select name="offset02" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset02'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price2" value="<?php echo $this->_tpl_vars['selectBase']['price2']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（3）</th>
									<td>
										<select name="offset03" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset03'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price3" value="<?php echo $this->_tpl_vars['selectBase']['price3']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（4）</th>
									<td>
										<select name="offset04" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset04'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price4" value="<?php echo $this->_tpl_vars['selectBase']['price4']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（5）</th>
									<td>
										<select name="offset05" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset05'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price5" value="<?php echo $this->_tpl_vars['selectBase']['price5']; ?>
">円
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
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset06'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price6" value="<?php echo $this->_tpl_vars['selectBase']['price6']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（7）</th>
									<td>
										<select name="offset07" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset07'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price7" value="<?php echo $this->_tpl_vars['selectBase']['price7']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（8）</th>
									<td>
										<select name="offset08" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset08'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price8" value="<?php echo $this->_tpl_vars['selectBase']['price8']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（9）</th>
									<td>
										<select name="offset09" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset09'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price9" value="<?php echo $this->_tpl_vars['selectBase']['price9']; ?>
">円
									</td>
								</tr>
								<tr>
									<th>相殺（10）</th>
									<td>
										<select name="offset10" class="w105 mr7">
											<option value="">※相殺項目</option>
											<?php $_from = $this->_tpl_vars['selectMaster']['offsetItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cnt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cnt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['cnt']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['value']['masterId']; ?>
"<?php if ($this->_tpl_vars['selectBase']['offset10'] == $this->_tpl_vars['value']['masterId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
											<?php endforeach; endif; unset($_from); ?>
										</select>
										<input type="text" class="w210 mr7" name="price10" value="<?php echo $this->_tpl_vars['selectBase']['price10']; ?>
">円
									</td>
								</tr>
							</table>
						</div>
					</div>
					<?php if ($this->_tpl_vars['view_flg3'] == 1): ?>
						<div class="clearfix">
							<div class="boxRight">
								<button class="btnReload" type="submit">登録・更新する</button>
							</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</form>
	<?php endif; ?>
<?php endif; ?>