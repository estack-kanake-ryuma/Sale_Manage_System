<form method="post" name="regist_form" action="" onsubmit="return submit_before();">

<input id="credit_type_hf" name="credit_type_hf" type="hidden" value="<?PHP echo $sales['mng']['credit_type']; ?>" />
<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■得意先情報変更</td>
        </tr>
    </table>
    <table class="sales_tbl">
        <tr>
            <th class="item" style="width:250px;">得意先名</th>
            <th class="item" style="width:100px;">入金種別</th>
            <th class="item" style="width:100px;">得意先区分</th>
            <th class="item" style="width: 165px;">摘要</th>
        </tr>
        <tr>
            <td><span><?PHP echo $sales['mng']['customer_disp_name']; ?></span></td>
            <td id="credit_type_td">
                <?php if($sales['mng']['credit_type'] == CREDIT_TYPE_BEFORE OR $credit > 0): ?>
                    <span><?PHP echo $sales['mng']['credit_type_name'] ?></span>
                <?php else: ?>
                    <select id="credit_type" name="credit_type" style="width: 80px;">
                        <option value=""></option>
                        <?php foreach($mst['credit_type'] as $data): ?>
                        <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('credit_type', $data->item_cd, $sales['mng']); ?>><?php echo $data->item_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                <?php endif; ?>
            </td>
            <td id="customer_type_td">
                <select id="customer_type" name="customer_type">
                    <option value=""></option>
                    <?php foreach($mst['customer_type'] as $data): ?>
                    <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('customer_type', $data->item_cd, $sales['mng']); ?>><?php echo $data->item_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td id="abstract_id_td">
                <select name="abstract_id" style="width: 155px;">
                    <?php foreach($mst['abstract_list'] as $data): ?>
                    <option value="<?php echo $data->abstract_id; ?>,<?php echo $data->abstract_name; ?>" <?php echo set_select_c('abstract_id', $data->abstract_id.",".$data->abstract_name, $sales['mng']); ?>><?php echo $data->abstract_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
    </table>
    
    <?php if($sales['mng']['credit_type'] == CREDIT_TYPE_BEFORE): ?>
        <table class="caption_tbl">
            <tr>
                <td>■売上分割設定</td>
            </tr>
        </table>
        <table id="sep_month_p_tbl">
            <tr>
                <td style="width: 320px;vertical-align: top;">
                    <table id="set_sep_money_tbl">
                        <tr>
                            <td colspan="2">【売上分割の設定】</td>
                        </tr>
                        <tr>
                            <td id="sep_month_td" style="vertical-align: top">
                                <input id="sep_month_from" name="sep_month_from" type="text" class="size_date" value="<?PHP echo set_value_c("sep_month_from", $sales['mng']); ?>" onblur="disp_sep_month_inp();" <?PHP echo get_proc_month_ctrl($sales['mng']['sep_month_from']); ?>  />&nbsp;&nbsp;～&nbsp;&nbsp;
                                <input id="sep_month_to" name="sep_month_to" type="text" class="size_date yearmonth" value="<?PHP echo set_value_c("sep_month_to", $sales['mng']); ?>" onblur="disp_sep_month_inp();" <?PHP echo get_proc_month_ctrl($sales['mng']['sep_month_to']); ?> />&nbsp;で分割
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="disp_info_tbl">
                                    <tr>
                                        <th style="width: 100px;">税込金額合計</th>
                                        <th style="width: 100px;">分割金額計</th>
                                    </tr>
                                    <tr>
                                        <td id="sep_money_hd_td" class="data_right">
                                            <span id="sep_money_lbl"><?PHP echo $sales['mng']['disp_sum_money']; ?></span>
                                            <input id="sep_money_hd" name="sep_money_hd" type="hidden" value="<?PHP echo $sales['mng']['sum_money']; ?>" />
                                            <input type="hidden" name="sum_tax" id="sum_tax" value="<?PHP echo $sales['mng']['sum_tax']; ?>" />
                                        </td>
                                        <td id="sep_inp_money_hd_td" class="data_right">
                                            <span id="sep_inp_money_lbl"></span>
                                            <input id="sep_inp_money_hd" name="sep_inp_money_hd" type="hidden" value="<?PHP echo set_value_c("sep_inp_money_hd", $sales['before']); ?>" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <div id="sep_err_blk" style="margin-top: 10px;">
                        <?php echo form_error_c('sep_inp_money_hd', 'sep_inp_money_hd_td sep_money_hd_td'); ?>
                        <?php echo form_error_c('sep_month_from', 'sep_month_td'); ?>
                        <?php echo form_error_c('sep_month_to', 'sep_month_td'); ?>
                        <ul></ul>
                    </div>
                </td>
                <td style="vertical-align: top;">
                    <table id="input_sep_money_tbl" style="display:none;">
                        <tr>
                            <td>【分割金額の入力】</td>
                            <td style="text-align: right;">
                                <input type="button" value="クリア" style="width: 80px;height: 30px;" onclick="init_sep_month();"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="inp_sep_money_c_tbl">
                                    <tr>
                                        <th style="width: 90px;"></th>
                                        <?php for($i=1;$i<=6;$i++): ?>
                                        <th id="month_<?= $i; ?>_th"><span id="month_<?= $i; ?>_lbl"></span></th>
                                        <?PHP endfor; ?>
                                    </tr>
                                    <tr>
                                        <th>分割金額</th>
                                        <?php for($i=1;$i<=6;$i++): ?>
                                        <td id="sep_money_td<?= $i; ?>">
                                            <input class="money" type="text" name="sep_money[]" value="<?PHP echo set_value_c("sep_money[]", $sales['before'], ($i-1)); ?>" style="width: 75px;" maxlength="8" <?PHP echo get_proc_month_ctrl(set_value_c("sep_year_month[]", $sales['before'], ($i-1))); ?> />
                                            <input id="sep_disp_flg<?= $i; ?>" type="hidden" name="sep_disp_flg[]" value="" />
                                            <input type="hidden" name="sep_year_month[]" value="<?PHP echo set_value_c("sep_year_month[]", $sales['before'], ($i-1)); ?>" />
                                        </td>
                                        <?PHP endfor; ?>
                                    <tr>
                                        <th>消費税率</th>
                                        <?php for($i=1;$i<=6;$i++): ?>
                                        <td id="sep_tax_td<?= $i; ?>">
                                            <select name="sep_tax_type[]" style="width: 50px;" onblur="set_sep_tax_type(<?= $i; ?>);" <?PHP echo get_proc_month_ctrl(set_value_c("sep_year_month[]", $sales['before'], ($i-1))); ?>>
                                                <?php foreach($mst['tax_type_before'] as $data): ?>
                                                <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_num('sep_tax_type[]', $data->item_cd, $sales['before'], ($i-1)); ?>><?php echo $data->item_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?PHP endfor; ?>
                                    </tr>
                                    <tr class="row_sep">
                                        <td colspan="7" style="border: 0;height: 25px;"></td>
                                    </tr>
                                    <tr class="row_2_title">
                                        <th style="width: 90px;"></th>
                                        <?php for($i=7;$i<=12;$i++): ?>
                                            <th id="month_<?= $i; ?>_th"><span id="month_<?= $i; ?>_lbl"></span></th>
                                         <?PHP endfor; ?>
                                    </tr>
                                    <tr class="row_2_item">
                                        <th>分割金額</th>
                                        <?php for($i=7;$i<=12;$i++): ?>
                                            <td id="sep_money_td<?= $i; ?>">
                                                <input class="money" type="text" name="sep_money[]" value="<?PHP echo set_value_c("sep_money[]", $sales['before'], ($i-1)); ?>" style="width: 75px;" />
                                                <input id="sep_disp_flg<?= $i; ?>" type="hidden" name="sep_disp_flg[]" value="" />
                                                <input type="hidden" name="sep_year_month[]" value="<?PHP echo set_value_c("sep_year_month[]", $sales['before'], ($i-1)); ?>" />
                                            </td>
                                        <?PHP endfor; ?>
                                    </tr>
                                    <tr  class="row_2_item">
                                        <th>消費税率</th>
                                        <?php for($i=7;$i<=12;$i++): ?>
                                        <td id="sep_tax_td<?= $i; ?>">
                                            <select name="sep_tax_type[]" style="width: 50px;" onblur="set_sep_tax_type(<?= $i; ?>);">
                                                <?php foreach($mst['tax_type_before'] as $data): ?>
                                                <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_num('sep_tax_type[]', $data->item_cd, $sales['before'], ($i-1)); ?>><?php echo $data->item_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <?PHP endfor; ?>
                                    </tr>
                                </table>
                                <div style="margin-top: 10px;">
                                    <?php echo form_error_disp_ary(array('sep_money')); ?>
                                <div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    <?php endif; ?>
</div>
<div class="contents_blk">
        <table>
        <tr>
                <td class="bottom_button" style="width:970px;">
                <input type="submit" class="size_L" value="登録" />
            </td>
        </tr>
    </table>
</div>
</form>