<div class="contents_blk">
	<table class="credit_tbl">
		<tr>
			<th style="padding:0 15px;">得意先名</th>
			<td style="padding-right: 30px;"><?php echo $customer_name; ?></td>
			<?php if($handle_name !== ''): ?>
			<th style="padding:0 15px;">担当</th>
			<td style="padding-right: 30px;"><?php echo $handle_name; ?></td>
			<?php endif; ?>
			<th style="padding:0 15px;">滞留条件</th>
			<td style="padding-right: 30px;"><?php echo $month; ?></td>
			<th style="padding:0 15px;">残合計</th>
			<td style="padding: 0 5px 0 20px;text-align: right;"><?php echo $money; ?></td>
		</tr>
	</table>
</div>
<div class="contents_blk">
    
    <table class="credit_tbl">
        <tr>
            <th class="basic_no">No.</th>
            <th style="width: 100px;">請求日</th>
            <th style="width: 90px;">請求書番号</th>
            <th style="width: 150px;">請求金額(売上金額)</th>
			<th style="width: 150px;">消込金額</th>
			<th style="width: 150px;">消込残高</th>
        </tr>
        <?php if(count($list) == 0): ?>
        <tr>
            <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php else: ?>
        <?php $no = 1; foreach($list as $val): ?>
        <tr>
            <td class="basic_no"><?php echo $no; ?></td>
            <td>
                <?php echo $val->bill_date; ?>
            </td>
            <td>
                <?php echo $val->bill_no; ?>
            </td>
            <td class="data_right">
                <?php echo $val->bill_money; ?>
            </td>
            <td class="data_right">
                <?php echo $val->credit_money; ?>
            </td>
            <td class="data_right">
                <?php echo $val->balance_money; ?>
            </td>
        </tr>
		<?php $no++; endforeach; ?>
        <?php endif; ?>
    </table>
</div>
