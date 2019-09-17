<div class="contents_blk">
        
    <form name="search_form" method="post" action="/bill/bill_download">
        <table  class="search_tbl">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td class="item">得意先名称</td>
                            <td>
                                <input name="customer_name_s" type="text" class="normal" value="<?php echo set_value_c('customer_name_s', $search); ?>" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <td class="item">請求日</td>
                            <td>
                                <input name="bill_date_from" value="<?php echo set_value_c('bill_date_from', $search); ?>" class="size_date date" />&nbsp;～
                                <input name="bill_date_to" value="<?php echo set_value_c('bill_date_to', $search); ?>" class="size_date date" />
                            </td>
                        </tr>
                        <tr>
                            <td class="item">締日</td>
                            <td>
                                <select name="cutoff_date" class="" style="width:100px;">
                                    <option value=""></option>
                                    <?php foreach($mst['cutoff_date'] as $data): ?>
                                    <option value="<?php echo $data['key']; ?>" <?php echo set_select_c('cutoff_date', $data['key'], $search); ?>><?php echo $data['val']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="item">請求書番号</td>
                            <td>
                                <input name="bill_no" type="text" value="<?php echo set_value_c('bill_no', $search); ?>" />&nbsp;を含む
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
    <form name="regist_form" method="post" action="/bill/bill_download/output<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
        <table class="basic_tbl">
        <tr>
            <th class="basic_no">No</th>
            <th style="width: 222px;">得意先名称</th>
            <th style="width: 100px;">請求書番号</th>
            <th style="width: 100px;">請求日</th>
            <th style="width: 80px;">締日管理</th>
            <th style="width: 80px;">締日</th>
            <th style="width: 90px;">入金種別</th>
            <th style="width: 110px;">請求金額</th>
            <th style="width: 90px;"></th>
        </tr>
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="no_list" colspan="9"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php else: ?>
            <?php foreach($list_data as $val): ?>
                <tr>
                    <td class="basic_no">
                        <?PHP echo $val->no; ?>
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->customer_disp_name; ?>
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->disp_bill_no; ?>
                        <input type="hidden" name="bill_no[]" value="<?PHP echo $val->bill_no; ?>" />
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->disp_bill_date ?>
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->bill_type_name; ?>
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->disp_cutoff_date; ?>
                    </td>
                    <td style="">
                        <?PHP echo $val->credit_type_name ?>
                    </td>
                    <td class="data_right" style="">
                        <?PHP echo $val->disp_bill_money; ?>
                    </td>
                    <td class="btn_td" >
                        <input type="button" value="売上確認" style="width: 70px;" onclick="open_confirm(<?PHP echo "'".$val->sales_mng_id."'"; ?>);"  />
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr>
                    <td colspan="10" class="bottom_button">
                        <input type="submit" name="print" class="size_L" value="ダウンロード" onclick="return confirm('発行します。よろしいですか？');" />
                    </td>
                </tr>
        <?php endif; ?>
        </table>
    </form>
</div>
