<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form name="search_form" method="post" action="/credit/setoff_del">
        <table class="search_tbl" style="background: none;">
            <tr>
                <td style="">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 150px;">得意先</th>
                            <td style="width: 320px;">
                                <input type="text" name="customer_name" value="<?php echo set_value_c('customer_name', $search); ?>" style="width: 240px;" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <th>状態</th>
                            <td>
                                <?php $i=2; foreach($mst['credit_status'] as $data): ?>
                                <label for="credit_status_<?PHP echo $i; ?>"><input id="credit_status_<?PHP echo $i; ?>" type="radio" name="credit_status" value="<?= $data->item_cd ?>" <?php echo set_radio_c('credit_status', $data->item_cd, $search); ?> onclick="ctrl_search_date();"  /><?= $data->item_name ?></label>
                                <?php $i++; endforeach; ?>
                                <label for="credit_status_1"><input id="credit_status_1" type="radio" name="credit_status" value="3" <?php echo set_radio_c('credit_status', "3", $search); ?> onclick="ctrl_search_date();" />全て</label>
                            </td>
                        </tr>
                        <tr>
                            <th>請求日</th>
                            <td>
                                <input type="text" name="bill_date_from" class="date size_date" value="<?php echo set_value_c('bill_date_from', $search); ?>" />&nbsp;～&nbsp;
                                <input type="text" name="bill_date_to" class="date size_date" value="<?php echo set_value_c('bill_date_to', $search); ?>" />
                            </td>
                        </tr>
                        <tr>
                            <th>消込日</th>
                            <td>
                                <input type="text" name="reconcile_date_from" class="date size_date" value="<?php echo set_value_c('reconcile_date_from', $search); ?>" />&nbsp;～&nbsp;
                                <input type="text" name="reconcile_date_to" class="date size_date" value="<?php echo set_value_c('reconcile_date_to', $search); ?>" />
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="text-align: center;width: 400px;">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <input type="submit" name="search" class="size_L" value="表示" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">
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
    <table class="caption_tbl">
        <tr>
            <td>■相殺消込</td>
        </tr>
    </table>
    <form name="regist_form" method="post" action="/credit/setoff_del/index<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
        <input type="hidden" name="credit_status" value="<?PHP echo isset($search['credit_status']) ? $search['credit_status'] : ""; ?>" />
        <table class="credit_tbl">
            <tr>
                <th style="width: 150px;">消込日</th>
                <td id="reconcile_date_td" style="width: 120px">
                    <input type="text" class="date size_date" name="reconcile_date" value="<?php echo set_value_c('reconcile_date', $setoff); ?>" />
                </td>
            </tr>
        </table>
        <?php echo form_error_c('reconcile_date', 'reconcile_date_td'); ?>
        <?php echo form_error_disp_ary(array('reconcile_money')); ?>
        <?PHP echo form_error_c('is_check'); ?>
        <div class="other" style="width: 950px;margin-bottom: 5px;margin-top: 10px;">
            <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
            <?PHP echo $page_link; ?>
        </div>
       <table class="basic_tbl" style="">
          <tr>
              <th class="basic_no">No.</th>
              <th style="width: 80px;">請求書No.</th>
              <th style="width: 85px;">請求日</th>
              <th style="width: 90px;">請求額</th>
              <th style="width: 180px">得意先名</th>
              <th style="width: 100px;">消込額</th>
              <th class="chk_row">
                  <input type="checkbox" onclick="chk_all(this);" />
              </th>
              <th style="width: 70px;">消込状況</th>
              <th style="width: 85px;">消込日</th>
              <th style="width: 90px;">残額</th>
              <th style="width: 75px"></th>
          </tr>
          <?php if(count($list_data) == 0): ?>
          <tr>
              <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
          </tr>
          <?php else: ?>
            <?php $i=1; foreach($list_data as $val): ?>
                <tr>
                    <td class="basic_no">
                        <?PHP echo $val->no; ?>
                    </td>
                    <td>
                        <?PHP echo $val->disp_bill_no; ?>
                        <input type="hidden" name="bill_no[]" value="<?PHP echo $val->bill_no; ?>" />
                    </td>
                    <td class="" style="">
                        <?PHP echo $val->disp_bill_date; ?>
                    </td>
                    <td class="data_right" style="">
                        <span class="bill_money_lbl"><?PHP echo $val->disp_bill_money; ?></span>
                        <input type="hidden" name="bill_money[]" value="<?PHP echo $val->bill_money; ?>" />
                        <input type="hidden" name="bill_mng_id[]" value="<?PHP echo $val->bill_mng_id; ?>" />
                    </td>
                    <td>
                        <?PHP echo $val->customer_disp_name; ?>
                    </td>
                    <td id="reconcile_money_td<?=$i;?>" class="data_right" style="">
                        <input type="text" name="reconcile_money[]" class="money" value="<?php echo money_sep(set_value_c('reconcile_money[]', (array)$list_data[($i-1)], ($i-1))); ?>" style="width: 95px;" maxlength="8"  />
                        <input type="hidden" name="bef_reconcile_money[]" class="money" value="<?PHP echo $val->reconcile_money; ?>"  />
                    </td>
                    <td class="chk_row" style="">
                        <input type="checkbox" name="print_chk[<?=$i-1;?>]" value="<?=$i-1;?>" onclick="set_chk_value(this);" <?php echo set_checkbox('print_chk[]', ($i-1)); ?> class="chk_print"/>
                        <input type="hidden" name="credit_mng_id[]" value="<?PHP echo $val->credit_mng_id; ?>" />
                        <input type="hidden" name="credit_data_id[]" value="<?PHP echo $val->credit_data_id; ?>" />
                    </td>
                    <td class="" style="text-align: center">
                        <?php echo $val->credit_stauts_name; ?>
                    </td>
                    <td class="" style="">
                        <?php echo $val->disp_reconcile_date; ?>
                    </td>
                    <td class="data_right" style="">
                        <span class="red">
                            <?php echo $val->disp_balance_money; ?>
                            <input type="hidden" name="balance_money[]" value="<?php echo $val->disp_balance_money; ?>" />
                        </span>
                    </td>
                    <td class="btn_td" style="width: 80px;">
                        <?php if(!empty($val->credit_data_id)): ?>
                        <input type="button" name="btn_can[]" value="取消" style="width: 70px;height: 35px;" onclick="setoff_del_data('<?php echo $val->bill_mng_id.",".$val->credit_data_id; ?>');" <?PHP echo get_proc_ctrl($val->disp_reconcile_date); ?> />
                        <?php endif; ?>
                    </td>
                </tr>
            <?php $i++; endforeach; ?>
                <tr>
                    <td colspan="10" class="bottom_button" style="border: 0;height: 80px;">
                        <input name="regist" type="submit" class="size_L" value="消込登録" onclick="return confirm('消込登録を行います。よろしいですか？');" />
                    </td>
                </tr>
        <?php endif; ?>
        </table>
    </form>
</div>