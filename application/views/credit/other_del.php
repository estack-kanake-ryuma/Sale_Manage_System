<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form name="search_form" method="post" action="/credit/other_del">
        <table class="search_tbl" style="background: none;">
            <tr>
                <td style="">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 150px;">得意先</th>
                            <td style="width: 300px;">
                                <input id="customer_disp_name" type="text" name="customer_disp_name" value="<?php echo set_value_c('customer_disp_name', $search); ?>" style="width: 240px;" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <th>状態</th>
                            <td>
                                <?php $i=2; foreach($mst['credit_status'] as $data): ?>
                                <label for="credit_status_<?PHP echo $i; ?>"><input id="credit_status_<?PHP echo $i; ?>" type="radio" name="credit_status" value="<?= $data->item_cd ?>" <?php echo set_radio_c('credit_status', $data->item_cd, $search); ?> onclick="ctrl_search_date();"  /><?= $data->item_name ?></label>
                                <?php $i++; endforeach; ?>
                                <label for="credit_status_1"><input id="credit_status_1" type="radio" name="credit_status" value="" <?php echo set_radio_c('credit_status', "", $search); ?> onclick="ctrl_search_date();" />全て</label>
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
                        <tr>
                            <th>種別</th>
                            <td>
                                <label for="disp_type_1">
                                    <input id="disp_type_1" type="radio" name="disp_type" value="1" <?php echo set_radio_c('disp_type', "1", $search); ?> onclick="ctrl_search_date();" />請求書の消込を行う
                                </label>
                                <label for="disp_type_2">
                                    <input id="disp_type_2" type="radio" name="disp_type" value="2" <?php echo set_radio_c('disp_type', "2", $search); ?> onclick="ctrl_search_date();" />入金額の調整を行う
                                </label>
                                
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="text-align: center;width: 400px;">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <input type="submit" class="size_L" value="表示" />
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
    
    <?php if($search['disp_type'] == "1"): ?>
    <table class="caption_tbl">
        <tr>
            <td>■入金消込</td>
        </tr>
    </table>
    <div class="other" style="width: 970px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="transfer_del_tbl">
       <tr>
           <th class="basic_no title">No.</th>
           <th class="title" style="width: 225px;">得意先</th>
           <th class="title" style="width: 80px;">請求書No.</th>
           <th class="title" style="width: 75px;">請求日</th>
           <th class="title" style="width: 85px;">請求額</th>
           <th class="title" style="width: 106px;">消込日</th>
           <th class="title" style="width: 90px;">入金種別</th>
           <th class="title" style="width: 90px;">消込額</th>
           <th class="title" style="width: 50px;"></th>
           <th class="title" style="width: 85px;">残額</th>
       </tr>
       <?php if(count($list_data) == 0): ?>
       <tr>
           <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
       </tr>
       <?php else: ?>
         <?php $row_cnt = 0; ?>
         <?php $i=1; foreach($list_data as $val): ?>
             <tr>
                 <td class="basic_no">
                     <?PHP echo $val['no']; ?>
                 </td>
                 <td style="padding-left: 4px;">
                     <?PHP echo $val['customer_disp_name']; ?>
                 </td>
                 <td>
                     <span><?PHP echo $val['disp_bill_no']; ?></span>
                 </td>
                 <td class="" style="">
                     <span><?PHP echo $val['disp_bill_date']; ?></span>
                 </td>
                 <td class="data_right" style="padding-right: 4px;">
                     <?PHP echo $val['disp_bill_money']; ?>
                 </td>
                 <td colspan="4" class="inner_td">
                     <form name="regist_form" method="post" action="/credit/other_del/index<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
                         <?php $id = $val['bill_mng_id']; ?>
                         <input type="hidden" name="bill_mng_id[]" value="<?php echo $val['bill_mng_id']; ?>" />
                         <input type="hidden" name="bill_money[]" value="<?php echo $val['bill_money']; ?>" />
                         <input type="hidden" name="sum_balance_money[]" value="<?php echo $val['sum_balance_money']; ?>" />
                         <input type="hidden" name="bill_no[]" value="<?php echo $val['bill_no']; ?>" />
                         <input type="hidden" name="setoff_money[]" value="<?php echo $val['setoff_money']; ?>" />
                         <input type="hidden" name="transfer_money[]" value="<?php echo $val['transfer_money']; ?>" />
                         <input type="hidden" name="regist" value="bill_regist" />
                         <input type="hidden" name="regist_type" value="" />
                         <input type="hidden" name="customer_disp_name" value="" />
                         <input type="hidden" name="disp_type" value="" />
                         <input type="hidden" name="credit_data_id" value="" />
                         <input type="hidden" name="credit_status" value="<?PHP echo isset($search['credit_status']) ? $search['credit_status'] : ""; ?>" />
                         <table class="inner" style="height: 60px;">
                             <?php $j=0; foreach($val['reconcile_data'] as $data): ?>
                             <?PHP if(empty($data['disp_reconcile_date'])): ?>
                                <tr>
                                    <td id="reconcile_date_td<?=$row_cnt;?>" class="data_right" style="width: 106px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <input type="text" name="reconcile_date[<?php echo $id ?>][]" value="<?php echo set_value_c('reconcile_date['.$id.'][]', $data['disp_reconcile_date']); ?>" class="date size_date" />
                                        <?php echo form_error_c_ary('reconcile_date['.$val['bill_mng_id'].'][]', $j, 'reconcile_date_td'.$row_cnt); ?>
                                    </td>
                                    <td id="reconcile_type_td<?=$row_cnt;?>" style="width: 90px;border-right: 1px solid #C0C0C0;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <select name="reconcile_type[<?php echo $id ?>][]" style="width: 80px;">
                                            <option></option>
                                            <?php foreach($mst['reconcile_type'] as $data): ?>
                                            <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('reconcile_type['.$id.'][]', $data->item_cd); ?>><?php echo $data->item_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error_c_ary('reconcile_type['.$val['bill_mng_id'].'][]', $j, 'reconcile_type_td'.$row_cnt); ?>
                                    </td>
                                    <td id="reconcile_money_td<?=$row_cnt;?>" class="" style="text-align: center;width: 90px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <input type="text" name="reconcile_money[<?php echo $id ?>][]" value="<?php echo set_value_c('reconcile_money['.$id.'][]'); ?>" class="money size_money" maxlength="8" />
                                        <?php echo form_error_c_ary('reconcile_money['.$val['bill_mng_id'].'][]', $j, 'reconcile_money_td'.$row_cnt); ?>
                                    </td>
                                   <td style="text-align: center;">
                                       <input type="button" value="消込" style="margin: 0;width: 45px;" onclick="del_submit(this);" />
                                   </td>
                                </tr>
                                <?PHP $j++; ?>
                             <?PHP else: ?>
                                <tr>
                                    <td id="reconcile_date_td<?=$row_cnt;?>" style="width: 106px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <?PHP echo $data['disp_reconcile_date']; ?>
                                    </td>
                                    <td id="reconcile_type_td<?=$row_cnt;?>" style="width: 90px;border-right: 1px solid #C0C0C0;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <?PHP echo $data['reconcile_type_name']; ?>
                                    </td>
                                    <td id="reconcile_money_td<?=$row_cnt;?>" class="data_right" style="width: 90px;border-right: 1px solid #C0C0C0;padding-right: 4px;">
                                        <?PHP echo $data['disp_reconcile_money']; ?>
                                    </td>
                                   <td style="text-align: center;">
                                       <input type="button" value="取消" style="margin: 0;width: 45px;" onclick="cancel_submit(this, <?PHP echo $data['credit_data_id'];?>);" <?PHP if($data['reconcile_type'] != 'R') { echo get_proc_ctrl($data['disp_reconcile_date']); } else { echo 'disabled=true'; } ?> />
                                   </td>
                                </tr>
                             <?PHP endif; ?>
                             <?php $row_cnt++; endforeach; ?>
                         </table>
                     </form>
                 </td>
                 <td class="data_right">
                     <?PHP echo $val['disp_sum_balance_money']; ?>
                 </td>
             </tr>
         <?php $i++; endforeach; ?>
     <?php endif; ?>
     </table>
    <?php else: ?>
    <table class="caption_tbl">
        <tr>
            <td>■入金額の調整</td>
        </tr>
    </table>
    <div class="other" style="width: 970px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="transfer_del_tbl">
       <tr>
           <th class="basic_no title">No.</th>
           <th class="title" style="width: 265px;">得意先名称</th>
           <th class="title" style="width: 90px;">入金日</th>
           <th class="title" style="width: 90px;">入金額</th>
           <th class="title" style="width: 110px;">入金調整日</th>
           <th class="title" style="width: 95px;">調整種別</th>
           <th class="title" style="width: 90px;">調整額</th>
           <th class="title" style="width: 60px;"></th>
           <th class="title" style="width: 90px;">残額</th>
       </tr>
       <?php if(count($list_data) == 0): ?>
       <tr>
           <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
       </tr>
       <?php else: ?>
         <?php $row_cnt = 0; ?>
         <?php $i=1; foreach($list_data as $val): ?>
             <tr>
                 <td class="basic_no">
                     <?PHP echo $val['no']; ?>
                 </td>
                 <td>
                     <span><?PHP echo $val['customer_disp_name']; ?></span>
                 </td>
                 <td>
                     <span><?PHP echo $val['disp_credit_date']; ?></span>
                 </td>
                 <td class="data_right">
                     <span><?PHP echo $val['disp_credit_money']; ?></span>
                 </td>
                 <td colspan="4" class="inner_td">
                     <form name="regist_form" method="post" action="/credit/other_del">
                         <input type="hidden" name="credit_received_id[]" value="<?php echo $val['credit_received_id']; ?>" />
                         <input type="hidden" name="credit_money[]" value="<?php echo $val['credit_money']; ?>" />
                         <input type="hidden" name="balance_money" value="<?php echo $val['balance_money']; ?>" />
                         <input type="hidden" name="regist" value="credit_regist" />
                         <input type="hidden" name="regist_type" value="" />
                         <input type="hidden" name="customer_disp_name" value="" />
                         <input type="hidden" name="disp_type" value="" />
                        <input type="hidden" name="adjust_id" value="" />
                        <input type="hidden" name="can_adjust_money" value="" />
                        <input type="hidden" name="credit_status" value="<?PHP echo isset($search['credit_status']) ? $search['credit_status'] : ""; ?>" />
                         <?php $id = $val['credit_received_id']; ?>
                         <table class="inner" style="height: 60px;">
                             <?php $j=0; foreach($val['adjust_info'] as $data): ?>
                             <?PHP if(empty($data['disp_adjust_date'])): ?>
                             <tr>
                                 <td id="adjust_date_td<?=$row_cnt;?>" class="data_right" style="width: 110px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                     <input type="text" name="adjust_date[<?php echo $id ?>][]" value="<?php echo set_value_c('adjust_date['.$id.'][]', $data['disp_adjust_date']); ?>" class="date size_date" />
                                     <?php echo form_error_c_ary('adjust_date['.$id.'][]', $j, 'adjust_date_td'.$row_cnt); ?>
                                 </td>
                                 <td id="adjust_type_td<?=$row_cnt;?>" style="width: 95px;border-right: 1px solid #C0C0C0;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                     <select name="adjust_type[<?php echo $id ?>][]" style="width: 80px;">
                                         <option></option>
                                         <?php foreach($mst['reconcile_type'] as $data): ?>
                                         <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('adjust_type['.$id.'][]', $data->item_cd); ?>><?php echo $data->item_name; ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                     <?php echo form_error_c_ary('adjust_type['.$id.'][]', $j, 'adjust_type_td'.$row_cnt); ?>
                                 </td>
                                 <td id="adjust_money_td<?=$row_cnt;?>" class="" style="text-align: center;width: 90px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                     <input type="text" name="adjust_money[<?php echo $id ?>][]" value="<?php echo set_value_c('adjust_money['.$id.'][]'); ?>" class="money size_money"  maxlength="8" />
                                     <?php echo form_error_c_ary('adjust_money['.$id.'][]', $j, 'adjust_money_td'.$row_cnt); ?>
                                 </td>
                                <td style="text-align: center;">
                                     <input type="button" value="消込" style="margin: 0;width: 50px;" onclick="del_submit(this);" />
                                </td>
                             </tr>
                             <?PHP $j++; ?>
                             <?PHP else: ?>
                             <tr>
                                <td class="data_right" style="width: 110px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                    <?PHP echo $data['disp_adjust_date']; ?>
                                </td>
                                <td style="width: 95px;border-right: 1px solid #C0C0C0;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                    <?PHP echo $data['adjust_type_name']; ?>
                                </td>
                                <td class="" style="text-align: right;width: 90px;border-right: 1px solid #C0C0C0;padding-right: 4px;">
                                    <?PHP echo $data['disp_adjust_money']; ?>
                                </td>
                                <td style="text-align: center;">
                                     <input type="button" value="取消" style="margin: 0;width: 50px;" onclick="cancel_submit(this, <?PHP echo $data['adjust_id'];?>, <?PHP echo $data['adjust_money'];?>);" <?PHP echo get_proc_ctrl($data['disp_adjust_date']); ?> />
                                </td>
                             </tr>
                             <?PHP endif;?>
                             <?php $row_cnt++; endforeach; ?>
                         </table>
                     </form>
                 </td>
                 <td class="data_right">
                    <?php echo $val['disp_balance_money']; ?>
                 </td>
             </tr>
         <?php endforeach; ?>
       <?php endif; ?>
    </table>
    <?php endif; ?>
</div>