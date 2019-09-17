<div class="contents_blk">
    
    
<table class="sales_tbl">
    <tbody>
    <tr>
        <th style="width: 100px;">税抜金額合計</th>
        <td style="width: 120px;" class="data_right">
            <span id="no_tax_total_lbl"><?PHP echo $sales['mng'][0]->sum_no_tax; ?></span>
        </td>    
        <th style="width: 100px;">消費税合計</th>
        <td style="width: 120px;" class="data_right">
            <span id="tax_total_lbl"><?PHP echo $sales['mng'][0]->sum_tax; ?></span>
        </td>    
        <th style="width: 100px;">金額合計</th>
        <td style="width: 120px;" class="data_right">
             <span id="all_total_money_lbl"><?PHP echo $sales['mng'][0]->sum_money; ?></span>
        </td>    
    </tr>
    </tbody>
</table>
    
<table id="sales_detail_tbl" class="sales_tbl" style="margin-top: 20px;">
<tr>
    <th class="basic_no">No</th>
    <th style="width: 90px;">売上計上日</th>
    <th>報告書No</th>
    <th>品名</th>
    <th>数量</th>
    <th>単位</th>
    <th>単価</th>
    <th>税区分</th>
    <th>税抜き金額</th>
    <th>消費税</th>
</tr>

<?php $i=1; foreach($sales['detail'] as $val): ?>
<tr>
    <td rowspan="<?PHP echo $val->row_span; ?>" class="basic_no">
        <span><?PHP echo $i; ?></span>
    </td>
    <td>
        <a href="sales_confirm_other/move_list?id=<?PHP echo $val->sales_mng_id; ?>">
            <?PHP echo $val->disp_book_date; ?>
        </a>
    </td>
    <td style="width: 90px;">
        <span>
            <?PHP echo $val->report_no; ?>
        </span>
    </td>
    <td style="width: 180px;">
        <span>
            <?PHP echo $val->goods_name; ?>
        </span>
    </td>
    <td style="width: 70px">
        <span>
            <?PHP echo $val->cnt; ?>
        </span>
    </td>
    <td style="width: 60px">
        <span>
            <?PHP echo $val->unit; ?>
        </span>
    </td>
    <td style="width: 80px" class="data_right">
        <span>
            <?PHP echo $val->unit_price; ?>
        </span>
    </td>
    <td style="width: 80px">
        <span>
            <?PHP echo $val->tax_type_name; ?>
        </span>
    </td>
    <td style="width: 80px" class="data_right">
        <span>
            <?PHP echo $val->no_tax_money; ?>
        </span>
    </td>
    <td style="width: 80px" class="data_right">
        <span>
            <?PHP echo $val->tax; ?>
        </span>
    </td>
</tr>
<?php if($val->row_span == 2): ?>
<tr>
    <td colspan="9">
        <span>
            <?PHP echo $val->disp_unit_memo; ?>
        </span>
    </td>
</tr>
<?php endif; ?>
<?php $i++; endforeach; ?>

</table>

    
</div>