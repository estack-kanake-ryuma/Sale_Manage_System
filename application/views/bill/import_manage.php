<div class="contents_blk">

	<form name="search_form" method="post" action="/bill/import_data_output">
		<table  class="search_tbl">
			<tr>
				<td>
					<table>
						<tr>
							<td class="item">得意先名</td>
							<td>
								<input type="text" class="normal"  />
							</td>
						</tr>
						<tr>
							<td class="item">報告書No</td>
							<td>
								<input type="text" name="import_conduct_date_from"  />を含む
							</td>
						</tr>
						<tr>
							<td class="item">取込日</td>
							<td>
								<input name="import_conduct_date_from" value="<?php echo set_value_c('import_conduct_date_from', $search); ?>" class="size_date date" />&nbsp;～
								<input name="import_conduct_date_to" value="<?php echo set_value_c('import_conduct_date_to', $search); ?>" class="size_date date" />
							</td>
						</tr>
						<tr>
							<td class="item">売上データ</td>
							<td>
								<select name="sales_data_status">
									<option value="">全て</option>
									<option value="have" <?php echo set_select_c('sales_data_status', 'have', ''); ?>>データ有り</option>
									<option value="no_have" <?php echo set_select_c('sales_data_status', 'no_have', ''); ?>>データ無し</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="item">連携の有無</td>
							<td>
								<select name="send_target">
									<option value="">全て</option>
									<option value="targeted" <?php echo set_select_c('send_target', 'targeted', ''); ?>>連携有り</option>
									<option value="no_target" <?php echo set_select_c('send_target', 'no_target', ''); ?>>連携無し</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="item">データ操作</td>
							<td>
								<select name="data_status">
									<option value="">全て</option>
									<option value="cooperation">処理済(連携)</option>
									<option value="discard">処理済(破棄)</option>
								</select>
							</td>
						</tr>
					</table>
				</td>
				<td class="disp_btn">
					<table>
						<tr>
							<td>
								<input type="submit" name="search" class="size_L" value="検索" />
							</td>
						</tr>
						<tr>
							<td style="padding-top: 10px;">
								<input type="button" class="size_L" value="クリア" onclick="clear_search_item();" />
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="contents_blk">

	<?PHP echo form_error_c('is_check'); ?>
	<div class="other" style="width: 950px;">
		<div class="list_cnt"><?PHP echo $cnt_info; ?></div>
		<?PHP echo $page_link; ?>
	</div>
	<form name="lump_form" method="post" action="/bill/import_manage/lump">
		<table class="basic_tbl" style="width: 100%;">
			<tr>
				<th class="basic_no" rowspan="2">No.</th>
				<th class="basic_memo" rowspan="2"><input type="checkbox" /></th>
				<th style="width: 80px;" rowspan="2">取込日時</th>
				<th style="width: 70px;" rowspan="2">報告書No</th>
				<th style="width: 200px;" rowspan="2">得意先名</th>
				<th style="width: 80px;" rowspan="2">売上計上日</th>
				<th style="width: 80px;" rowspan="2">担当者</th>
				<th style="width: 80px;" rowspan="2">売上金額</th>
				<th style="width: 45px;" rowspan="2">取込<br/>データ</th>
				<th style="width: 120px; text-align: center; padding: 0;" colspan="2">データ状態</th>
				<th colspan="3" rowspan="2">操作</th>
			</tr>
			<tr>
				<th class="basic_memo">売上</th>
				<th class="basic_memo">連携</th>
			</tr>
			<?php foreach($list_data as $data): ?>
			<tr>
				<td class="basic_no"><?php echo $data->number; ?></td>
				<td class="basic_memo"><input type="checkbox" value="<?php echo $data->outside_receive_data_id; ?>" /></td>
				<td class="" style=""><?php echo $data->ins_datetime; ?></td>
				<td class="" style=""><?php echo $data->report_no; ?></td>
				<td class="" style=""><?php echo $data->customer_name; ?></td>
				<td class="" style=""><?php echo $data->book_date; ?></td>
				<td class="" style=""><?php echo $data->handler; ?></td>
				<td class="data_right" style=""><?php echo $data->sum_money; ?></td>
				<td class="basic_memo" style=""><a href="">確認</a></td>
				<td style="text-align: center; padding: 0;"><?php echo $data->sales_data_status; ?></td>
				<td style="text-align: center; padding: 0;"><?php echo $data->send_target; ?></td>
				<td class="btn_td"><input type="button" class="list_btn" value="連携" <?php echo $data->cooperation_button; ?> onclick="if(confirm('連携対象として登録を行います。よろしいですか？') form_action('cooperation', <?php echo $data->outside_receive_data_id; ?>);" /></td>
				<td class="btn_td"><input type="button" class="list_btn" value="破棄" <?php echo $data->discard_button; ?> onclick="if(confirm('データの破棄を行います。よろしいですか？') form_action('discard', <?php echo $data->outside_receive_data_id; ?>);" /></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<div style="margin-top: 1em;">
			<select name="action_type">
				<option value="">一括操作</option>
				<option value="register">関連付を行う</option>
				<option value="discard">破棄する</option>
			</select>
			<input type="submit" value="実行" style="width: 80px;" />
		</div>
	</form>
</div>
 