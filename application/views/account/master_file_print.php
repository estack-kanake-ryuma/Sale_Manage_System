<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form name="search_form" method="post" action="/account/master_file_print" onsubmit="return confirmPrint('得意先元帳');">
        <table class="search_tbl" style="background: none;">
            <tr>
                <td style="width: 450px;">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 150px;">期間</th>
                            <td id="date_td" style="width: 300px;">
                                <input name="target_date_from" type="text" class="size_date date" value="<?php echo set_value_c('target_date_from', $search); ?>"  />&nbsp;～&nbsp;
                                <input name="target_date_to" type="text" class="size_date date" value="<?php echo set_value_c('target_date_to', $search); ?>"  />
                                <?php echo form_error_c('target_date_from', 'date_td'); ?>
                                <?php echo form_error_c('target_date_to', 'date_td'); ?>
                                <?PHP echo form_error_c('chk_span', 'date_td'); ?>
                            </td>
                        </tr>
                        <tr>
                            <th >得意先</th>
                            <td id="customer_disp_name_td">
                                <input id="customer_disp_name" type="text" name="customer_disp_name" value="<?php echo set_value_c('customer_disp_name', $search); ?>" style="width: 220px;" />
                                <?php echo form_error_c('customer_disp_name', 'customer_disp_name_td'); ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="text-align: center;width: 300px;">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <input type="submit" name="search" class="size_L" value="表示" onclick="btn_name='search'" />
                            </td>
                            <td>
                                <input type="submit" name="print" class="size_L" value="得意先元帳出力"  onclick="btn_name='print'" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;">
                                <input type="button" class="size_L" value="クリア" onclick="clear_search_item();" />
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="contents_blk">
    
    <table class="caption_tbl">
        <tr>
            <td>■得意先元帳</td>
        </tr>
    </table>
    <table class="credit_tbl">
        <tr>
            <th style="width: 100px;">得意先区分</th>
            <td style="width: 100px;"><?PHP echo isset($customer_info->customer_type_name) ? $customer_info->customer_type_name : "" ; ?></td>
            <th style="width: 100px;">締日</th>
            <td style="width: 100px;"><?PHP echo isset($customer_info->disp_cutoff_date) ? $customer_info->disp_cutoff_date : "" ; ?></td>
        </tr>
    </table>
    <table id="master_file_print_tbl" class="credit_tbl" style="margin-top: 10px;">
        <tr>
            <th style="width: 100px;">年月日</th>
            <th style="width: 100px;">請求書No</th>
            <th style="width: 250px;">摘要</th>
            <th style="width: 110px;">売上(税込)</th>
            <th style="width: 110px;">入金</th>
            <th style="width: 110px;">残高</th>
        </tr>
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="no_list" colspan="6"><span class="red"><?= $msg; ?></span></td>
        </tr>
        <?php else: ?>
        <?PHP $i=0; foreach ($list_data as $key=>$value): ?>
        <?php if($value->month_flg): ?>
            <tr>
                <td colspan="3" class="data_right" style="background-color: #EDF9EB;">
                    <?PHP echo get_range_str($list_data[$key-1]->target_month, $customer_info->cutoff_date, $search[target_date_from], $search[target_date_to]); ?>
                </td>
                <td class="data_right" style="background-color: #EDF9EB;">
                    <?PHP echo $value->disp_sales_total; ?>
                </td>
                <td class="data_right" style="background-color: #EDF9EB;">
                    <?PHP echo $value->disp_credit_total; ?>
                </td>
                <td class="data_right" style="background-color: #EDF9EB;">
                </td>
            </tr>
        <?php endif; ?>
        <?php if(count($list_data) - 1 != $key): ?>
        <tr>
            <td>
                <?PHP echo $value->disp_target_date; ?>
            </td>
            <td>
                <?PHP echo $value->disp_bill_no; ?>
            </td>
            <td>
                <?PHP echo $value->disp_abstract_name; ?>
            </td>
            <td class="data_right">
                <?PHP echo $value->disp_sales_money; ?>
            </td>
            <td class="data_right">
                <?PHP echo $value->disp_credit_money; ?>
            </td>
            <td class="data_right">
                <?PHP echo $value->disp_receivable_money; ?>
            </td>
        </tr>
        <?php endif; ?>
        <?PHP $i++; endforeach; ?>
        <?php endif; ?>
    </table>
</div>