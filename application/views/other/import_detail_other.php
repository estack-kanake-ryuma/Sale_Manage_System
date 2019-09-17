<div class="contents_blk">

<table id="sales_detail_tbl" class="sales_tbl" style="margin-top: 20px;">
<tr>
    <th class="basic_no">No</th>
    <th style="width: 85px;">報告書No</th>
    <th>得意先名</th>
    <th class="date_style" style="width: 80px;">売上計上日</th>
    <th style="width: 80px;">担当者</th>
	<th style="width: 250px;">品名</th>
	<th style="width: 60px;">売上金額</th>
	<th style="width: 50px;">消費税</th>
	<th class="basic_memo">結果</th>
	<th class="basic_memo" style="width: 70px">処理結果<br/>メッセージ</th>
</tr>

<?php $i=1; foreach($import_list as $val): ?>
<tr>
    <td class="basic_no">
        <span><?PHP echo $i; ?></span>
    </td>
    <td>
	    <?php if(!empty($val['sales_mng_id'])): ?>
        <a href="sales_confirm_other/move_list?id=<?PHP echo $val['sales_mng_id']; ?>">
            <?PHP echo $val['report_no']; ?>
        </a>
		<?php else: ?>
		    <?PHP echo $val['report_no']; ?>
		<?php endif; ?>
    </td>
    <td style="padding-right: 5px;">
        <span>
	        <?PHP echo $val['customer_name']; ?>
        </span>
    </td>
    <td class="date_style">
        <span>
            <?PHP echo $val['disp_book_date']; ?>
        </span>
    </td>
    <td>
        <span>
            <?PHP echo $val['handler_name']; ?>
        </span>
    </td>
	<td style="padding-right: 5px;">
        <span>
            <?PHP echo $val['goods_name']; ?>
        </span>
	</td>
	<td class="data_right">
        <span>
            <?PHP echo $val['sum_money']; ?>
        </span>
	</td>
	<td class="data_right">
        <span>
            <?PHP echo $val['sum_tax']; ?>
        </span>
	</td>
	<td class="basic_memo">
        <?PHP echo $val['disp_result']; ?>
	</td>
	<td class="basic_memo">
        <?PHP echo $val['error_messages']; ?>
	</td>
</tr>
<?php $i++; endforeach; ?>

</table>

    
</div>