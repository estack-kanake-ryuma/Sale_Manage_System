<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form name="search_form" method="post" action="/credit/first_del">
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
                                <label for="credit_status_1"><input id="credit_status_1" type="radio" name="credit_status" value="" checked="checked" />全て</label>
                                <?php $i=2; foreach($mst['credit_status'] as $data): ?>
                                <label for="credit_status_<?PHP echo $i; ?>"><input id="credit_status_<?PHP echo $i; ?>" type="radio" name="credit_status" value="<?= $data->item_cd ?>" <?php echo set_radio_c('credit_status', $data->item_cd, $search); ?>  /><?= $data->item_name ?></label>
                                <?php $i++; endforeach; ?>
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
                                <input type="button" class="size_L" value="クリア" onclick="clear_search_item('1');" />
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
            <td>■初期残高消込</td>
        </tr>
    </table>
    <div class="other" style="width: 940px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="transfer_del_tbl">
       <tr>
           <th class="basic_no title">No.</th>
           <th class="title" style="width: 250px;">得意先</th>
           <th class="title" style="width: 100px;">初期残高</th>
           <th class="title" style="width: 110px;">消込日</th>
           <th class="title" style="width: 110px;">入金種別</th>
           <th class="title" style="width: 110px;">消込額</th>
           <th class="title" style="width: 60px;"></th>
           <th class="title" style="width: 100px;">残額</th>
       </tr>
       <?php if(count($list_data) == 0): ?>
       <tr>
           <td class="no_list" colspan="8"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
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
                 <td class="data_right">
                     <span><?PHP echo $val['disp_first_money']; ?></span>
                 </td>
                 <td colspan="4" class="inner_td">
                     <form name="regist_form" method="post" action="/credit/first_del/index<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
                         <input type="hidden" name="credit_status" value="<?PHP echo isset($search['credit_status']) ? $search['credit_status'] : ""; ?>" />
                         <input type="hidden" name="first_mng_id[]" value="<?php echo $val['first_mng_id']; ?>" />
                         <input type="hidden" name="first_money" value="<?php echo $val['first_money']; ?>" />
                         <input type="hidden" name="sum_balance_money" value="<?php echo $val['sum_balance_money']; ?>" />
                         <input type="hidden" name="regist_type" value="" />
                         <input type="hidden" name="first_data_id" value="" />
                         <input type="hidden" name="can_reconcile_money" value="" />
                         <input type="hidden" name="can_reconcile_date" value="" />
                         <input type="hidden" name="can_customer_id" value="" />
                         <?php $id = $val['first_mng_id']; ?>
                         <table class="inner" style="height: 60px;">
                             <?php $j=0; foreach($val['reconcile_data'] as $data): ?>
                             <?PHP if(empty($data['disp_reconcile_date'])): ?>
                                <tr>
                                    <td id="reconcile_date_td<?=$row_cnt;?>" style="width: 110px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <input type="text" name="reconcile_date[<?php echo $id ?>][]" value="<?php echo set_value_c('reconcile_date['.$id.'][]', $data['disp_reconcile_date']); ?>" class="date size_date" />
                                        <?php echo form_error_c_ary('reconcile_date['.$id.'][]', $j, 'reconcile_date_td'.$row_cnt); ?>
                                    </td>
                                    <td id="reconcile_type_td<?=$row_cnt;?>" style="width: 110px;border-right: 1px solid #C0C0C0;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <select name="reconcile_type[<?php echo $id ?>][]" style="width: 100px;">
                                            <option></option>
                                            <?php foreach($mst['reconcile_type'] as $data): ?>
                                            <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('reconcile_type['.$id.'][]', $data->item_cd); ?>><?php echo $data->item_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?php echo form_error_c_ary('reconcile_type['.$id.'][]', $j, 'reconcile_type_td'.$row_cnt); ?>
                                    </td>
                                    <td id="reconcile_money_td<?=$row_cnt;?>" class="" style="text-align: right;width: 110px;border-right: 1px solid #C0C0C0;padding-right: 4px;">
                                        <input type="text" name="reconcile_money[<?php echo $id ?>][]" value="<?php echo set_value_c('reconcile_money['.$id.'][]'); ?>" class="money size_money" maxlength="8" />
                                        <?php echo form_error_c_ary('reconcile_money['.$id.'][]', $j, 'reconcile_money_td'.$row_cnt); ?>
                                    </td>
                                   <td style="text-align: center;">
                                       <input type="button" value="消込" style="margin: 0;width: 45px;" onclick="del_submit(this);" />
                                   </td>
                                </tr>
                                <?PHP $j++; ?>
                             <?PHP else: ?>
                                <tr>
                                    <td id="reconcile_date_td<?=$row_cnt;?>" style="width: 110px;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <?PHP echo $data['disp_reconcile_date']; ?>
                                    </td>
                                    <td id="reconcile_type_td<?=$row_cnt;?>" style="width: 110px;border-right: 1px solid #C0C0C0;border-right: 1px solid #C0C0C0;padding-left: 4px;">
                                        <?PHP echo $data['reconcile_type_name']; ?>
                                    </td>
                                    <td id="reconcile_money_td<?=$row_cnt;?>" class="data_right" style="width: 110px;border-right: 1px solid #C0C0C0;padding-right: 4px;">
                                        <?PHP echo $data['disp_reconcile_money']; ?>
                                    </td>
                                   <td style="text-align: center;">
                                       <input type="button" value="取消" style="margin: 0;width: 45px;" <?PHP if($data['reconcile_type'] == RECONCILE_TYPE_FURI || $data['reconcile_type'] == RECONCILE_TYPE_FURI_TESU) echo "disabled=true"; ?> onclick="cancel_submit(this, <?PHP echo $data['first_data_id'];?>, <?PHP echo $data['reconcile_money'];?>, '<?PHP echo $data['disp_reconcile_date'];?>', '<?PHP echo $val['customer_id'];?>');" />
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
</div>