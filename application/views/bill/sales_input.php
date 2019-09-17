<form method="post" name="regist_form" action="" onsubmit="return confirm('登録してよろしいですか？')">

<? echo form_error_c('chk_data_status'); ?>
<? echo form_error_c('is_exist_sales'); ?>
<? echo form_error_c('chk_bill_status'); ?>
<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■得意先情報</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <table class="sales_tbl">
                    <tr>
                        <th class="item">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border:0">得意先<span class="required">※</span></td>
                                    <td style="border:0;text-align: right;padding-right: 7px;">
                                        <a onclick="open_customer();"><img src="/images/master.gif" alt="得意先マスタ" style="cursor: pointer;" /></a>
                                    </td>
                                </tr>
                            </table>
                        </th>
                        <th class="item">入金種別<span class="required">※</span></th>
                        <th class="item">得意先区分<span class="required">※</span></th>
                    </tr>
                    <tr>
                        <td id="customer_disp_name_td">
                            <input id="customer_disp_name" name="customer_disp_name" type="text" class="custom" value="<?php echo set_value_c('customer_disp_name', $sales['mng']); ?>" style="width:200px;" onblur="dispCustomerInfo(this);" maxlength="50" />
                            <?php echo form_error_c('customer_disp_name', 'customer_disp_name_td'); ?>
                            <input id="customer_id" name="customer_id" type="hidden" value="<?php echo set_value_c('customer_id', $sales['mng']); ?>" />
                            <input id="cutoff_date" name="cutoff_date" type="hidden" value="<?php echo set_value_c('cutoff_date', $sales['mng']); ?>" />
                        </td>
                        <td id="credit_type_td">
                            <select id="credit_type" name="credit_type"  style="width:100px;" onblur="dispSepMonth(this)" onchange="set_book_date_ctrl();">
                                <option value=""></option>
                                <?php foreach($mst['credit_type'] as $data): ?>
                                <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('credit_type', $data->item_cd, $sales['mng']); ?>><?php echo $data->item_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error_c('credit_type', 'credit_type_td'); ?>
                        </td>
                        <td id="customer_type_td">
                            <select id="customer_type" name="customer_type" style="width: 100px">
                                <option value=""></option>
                                <?php foreach($mst['customer_type'] as $data): ?>
                                <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_c('customer_type', $data->item_cd, $sales['mng']); ?>><?php echo $data->item_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error_c('customer_type', 'customer_type_td'); ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table id="new_customer_tbl" style="<?PHP if(count($screen['customer_info']) > 0) echo "display: none";?>">
                    <tr>
                        <td>
                            <div class="caption_msg">得意先インフォメーション</div>
                            <?PHP if(empty($_POST['customer_disp_name'])): ?>
                                <span>得意先を入力してください。</span>
                            <?PHP else: ?>
                                <span>新しい得意先が入力されました。</span>
                            <?PHP endif; ?>
                            
                        </td>
                    </tr>
                </table>
                <table id="exist_customer_tbl" style="<?PHP if(count($screen['customer_info']) == 0) echo "display: none";?>">
                    <tr>
                        <td>
                            <div class="caption_msg">得意先インフォメーション</div>
                            <table class="inner">
                                <tr>
                                    <th style="width: 100px;">締日</th>
                                    <td style="width: 110px;">
                                        <span id="cutoff_date_lbl">
                                            <?PHP echo array_val($screen['customer_info'], 'cutoff_date'); ?>
                                        </span>
                                    </td>
                                    <th style="width: 100px;">納品書印字</th>
                                    <td style="width: 110px;">
                                        <span id="print_type_lbl">
                                            <?PHP echo array_val($screen['customer_info'], 'print_type'); ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 100px;">得意先区分</th>
                                    <td style="width: 110px;">
                                        <span id="customer_type_lbl">
                                            <?PHP echo array_val($screen['customer_info'], 'mst_customer_type_name'); ?>
                                        </span> 
                                    </td>
                                    <th style="width: 100px;">入金種別</th>
                                    <td style="width: 110px;">
                                        <span id="credit_type_lbl">
                                            <?PHP echo array_val($screen['customer_info'], 'mst_credit_type_name'); ?>
                                        </span> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<div class="contents_blk">
        <table class="caption_tbl">
        <tr>
            <td>■基本情報</td>
        </tr>
        </table>
        <label for="chk_bill_sep">
            <input id="chk_bill_sep" name="chk_bill_sep" type="checkbox" style="margin-bottom: 7px;" value="<?PHP echo FLG_ON; ?>" onclick="dispSepDepart();" <?php echo set_checkbox_c('chk_bill_sep', FLG_ON, $sales['mng']); ?> <?PHP echo $screen['book_ctrl']; ?> />&nbsp;部門別に売上を振り分ける
        </label>
        <table class="sales_tbl">
        <tr>
            <th class="item" style="width: 125px;">請求日<span id="bill_date_required_lbl" class="required">※</span></th>
            <th class="item" style="width: 125px;">売上計上日<span id="book_date_required_lbl" class="required">※</span></th>
            <th class="item">担当者<span class="required">※</span></th>
            <th class="item">研究所<span id="spn_require_institute" class="required">※</span></th>
            <th class="item">部門<span id="spn_require_depart" class="required">※</span></th>
            <th class="item">摘要<span class="required">※</span></th>
        </tr>
        <tr>
            <td id="bill_date_td" style="width: 105px;">
                <input id="bill_date" name="bill_date" type="text" class="date size_date" value="<?php echo set_value_c('bill_date', $sales['mng']); ?>" />
                <?php echo form_error_c('bill_date', 'bill_date_td'); ?>
            </td>
            <td id="book_date_td" style="width: 105px;">
                <input id="book_date" name="book_date" type="text" class="date size_date" value="<?php echo set_value_c('book_date', $sales['mng']); ?>" <?PHP echo $screen['book_ctrl']; ?> />
                <?php echo form_error_c('book_date', 'book_date_td'); ?>
            </td>
            <td id="handler_name_td">
                <input id="handler_name" name="handler_name" type="text" class="" value="<?php echo set_value_c('handler_name', $sales['mng']); ?>" onblur="set_handler_info(this);" style="width: 95px;" maxlength="25" />
                <input id="handler_id" name="handler_id" type="hidden" value="<?php echo set_value_c('handler_id', $sales['mng']); ?>" />
                <?php echo form_error_c('handler_name', 'handler_name_td'); ?>
            </td>
            <td id="institute_id_td">
                <select id="institute_id" name="institute_id" style="width: 100px;"">
                    <option value=""></option>
                    <?php foreach($mst['institute_list'] as $data): ?>
                    <option value="<?php echo $data->institute_id; ?>,<?php echo $data->institute_name; ?>" <?php echo set_select_c('institute_id', $data->institute_id.",".$data->institute_name, $sales['mng']); ?>><?php echo $data->institute_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('institute_id', 'institute_id_td'); ?>
            </td>
            <td id="depart_id_td">
                <select id="depart_id" name="depart_id" style="width: 100px;">
                    <option value=""></option>
                    <?php foreach($mst['depart_list'] as $data): ?>
                    <option value="<?php echo $data->depart_id; ?>,<?php echo $data->depart_name; ?>" <?php echo set_select_c('depart_id', $data->depart_id.",".$data->depart_name, $sales['mng']); ?>><?php echo $data->depart_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('depart_id', 'depart_id_td'); ?>
            </td>
            <td id="abstract_id_td" style="width: 165px;">
                <select name="abstract_id" style="width: 155px;">
                    <option value=""></option>
                    <?php foreach($mst['abstract_list'] as $data): ?>
                    <option value="<?php echo $data->abstract_id; ?>,<?php echo $data->abstract_name; ?>" <?php echo set_select_c('abstract_id', $data->abstract_id.",".$data->abstract_name, $sales['mng']); ?>><?php echo $data->abstract_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('abstract_id', 'abstract_id_td'); ?>
            </td>
        </tr>
    </table>
</div>
<div class="contents_blk"> 
        <table class="caption_tbl">
        <tr>
            <td>■売上情報</td>
        </tr>
        </table>
        <table class="sales_tbl">
            <tr>
                <th style="width: 100px;">税抜金額合計</th>
                <td style="width: 120px;">
                    <span id="no_tax_total_lbl"></span>
                    <input type="hidden" name="sum_no_tax" id="sum_no_tax" value="" />
                </td>    
                <th style="width: 100px;">消費税合計</th>
                <td style="width: 120px;">
                    <span id="tax_total_lbl"></span>
                    <input type="hidden" name="sum_tax" id="sum_tax" value="" />
                </td>    
                <th style="width: 100px;">税込金額合計</th>
                <td style="width: 120px;">
                     <span id="all_total_money_lbl"></span>
                     <input type="hidden" name="sum_money" id="sum_money" value="" />
                </td>    
                <td class="add_button" style="width: 250px;">
                    <input type="button" value="明細追加" onclick="addSalesDetail();" style="width: 120px;height: 35px" />
                </td>
            </tr>
        </table>
    
        <table id="sales_detail_tbl" class="sales_tbl" style="margin-top: 20px;">
        <tr>
            <th class="basic_no">No</th>
            <th>報告書No</th>
            <th>品名<span class="required">※</span></th>
            <th>数量</th>
            <th>単位</th>
            <th>単価</th>
            <th>税区分<span class="required">※</span></th>
            <th>税抜金額<span class="required">※</span></th>
            <th>消費税</th>
            <th>税込金額<span class="required">※</span></th>
            <th></th>
        </tr>
        <?php for($i=1;$i<=$screen['sales_row'];$i++):?>
        <tr>
            <td rowspan="2" class="basic_no" style="height: 55px;"><?PHP echo $i; ?></td>
            <td id="report_no_td<?php echo $i; ?>" class="report_no_cell">
                <p><input name="report_no[]" type="text" class="report_no half_str" value="<?php echo set_value_c('report_no[]', $sales['detail'], ($i-1)); ?>" maxlength="10" style="width: 70px;" /></p>
            </td>
            <td id="goods_name_td<?php echo $i; ?>" style="width: 240px;">
                <input name="goods_name[]" type="text" value="<?php echo set_value_c('goods_name[]', $sales['detail'], ($i-1)); ?>" style="width: 230px;" class="goods_ap" maxlength="125" onblur="set_goods_info(this);" />
            </td>
            <td id="cnt_td<?php echo $i; ?>" style="width: 80px;">
                <input name="cnt[]" type="text" value="<?php echo set_value_c('cnt[]', $sales['detail'], ($i-1)); ?>" style="width: 70px" class="half_str" maxlength="8" onblur="ctrl_tax_type(this);change_sales_money(this);" />
            </td>
            <td id="unit_td<?php echo $i; ?>" style="width: 60px;">
                <input name="unit[]" type="text"  value="<?php echo set_value_c('unit[]', $sales['detail'], ($i-1)); ?>" style="width: 50px" maxlength="5" />
            </td>
            <td id="unit_price_td<?php echo $i; ?>" style="width: 80px;">
                <input name="unit_price[]" type="text" class="money" value="<?php echo set_value_c('unit_price[]', $sales['detail'], ($i-1)); ?>" style="width: 70px" class="half_str" maxlength="8" onblur="ctrl_tax_type(this);change_sales_money(this);" />
            </td>
            <td id="tax_type_td<?php echo $i; ?>" style="width: 100px;">
                <select name="tax_type[]" style="width: 90px;" onchange="ctrl_tax_type(this);calc_sales_money(this);">
                    <option value=""></option>
                    <?php foreach($mst['tax_type'] as $data): ?>
                    <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_num('tax_type[]', $data->item_cd, $sales['detail'], ($i-1)); ?>><?php echo $data->item_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td id="no_tax_money_td<?php echo $i; ?>" style="width: 80px;">
                <input name="no_tax_money[]" type="text" class="money" value="<?php echo set_value_c('no_tax_money[]', $sales['detail'], ($i-1)); ?>"  style="width: 70px" onblur="change_sales_money(this);" class="half_str"  maxlength="10" />
            </td>
            <td style="width: 80px;">
                <input name="tax[]" type="text" class="money" value="<?php echo set_value_c('tax[]', $sales['detail'], ($i-1)); ?>"  style="width: 70px" class="half_str"  maxlength="10" onblur="calc_sales_tax(this);" />
            </td>
            <td style="width: 80px" class="data_right">
                <input name="in_tax_money[]" type="text" class="money" value="<?php echo set_value_c('in_tax_money[]', $sales['detail'], ($i-1)); ?>"  style="width: 70px" onblur="change_sales_money(this);" class="half_str"  maxlength="10" />
            </td>
            <td rowspan="2" style="width: 30px;">
                <input type="button" value="<?php echo get_row_btn_name($screen['sales_row'], $i); ?>" style="width: 50px;" onclick="delSalesDetail(this);" /><br/>
            </td>
        </tr>
        <tr>
            <td class="unit_memo_cell" colspan="9">
                <textarea name="unit_memo[]" rows="2" class="unit_memo_ap"><?php echo set_value_c('unit_memo[]', $sales['detail'], ($i-1)); ?></textarea>
            </td>
        </tr>
        <?php endfor;?>
    </table>
    <?php echo form_error_disp_ary(array('report_no', 'goods_name', 'cnt','unit','unit_price', 'tax_type', 'tax', 'no_tax_money', 'in_tax_money')); ?>
</div>
<div id="depart_blk" class="contents_blk"> 
    <table class="caption_tbl">
        <tr>
            <td>■部門別売上情報</td>
        </tr>
    </table>
    <table id="sep_depart_warn_tbl" style="width: 100%;display: none;">
        <tr>
            <td style="height: 150px;">
                <div class="caption_msg" style="margin-left: 10px;">部門別売上情報のインフォメーション</div>
                <ul style="margin-left: 40px;color:#22408F;">
                    <li style="padding-bottom: 10px;list-style-type: square;font-weight: bold;">『部門別に売上を振り分ける』にチェックを入れてください。</li>
                </ul>
            </td>
        </tr>
    </table>
    <table id="sep_depart_tbl" class="sales_tbl" style="">
        <tr>
            <th class="basic_no">No.</th>
            <th style="width: 110px;">研究所<span class="required">※</span></th>
            <th style="width: 110px;">部門<span class="required">※</span></th>
            <th style="width: 100px;">税区分<span class="required">※</span></th>
            <th style="width: 80px;">税抜金額<span class="required">※</span></th>
            <th style="width: 80px;">消費税</th>
            <th style="width: 80px;">税込金額<span class="required">※</span></th>
            <th style="width: 60px;padding: 0;text-align: center;"><input type="button" value="追加" style="width: 50px;margin: 0" onclick="addSepDepart();" /></th>
        </tr>
        <?php for($i=1;$i<=$screen['depart_row'];$i++):?>
        <tr>
            <td class="basic_no" style="height: 40px;"><?PHP echo $i;?></td>
            <td id="sep_institute_td<?php echo $i; ?>">
                <select name="sep_institute[]" style="width: 100px;">
                    <option value=""></option>
                    <?php foreach($mst['institute_list'] as $data): ?>
                    <option value="<?php echo $data->institute_id; ?>,<?php echo $data->institute_name; ?>" <?php echo set_select_num('sep_institute[]', $data->institute_id.",".$data->institute_name, $sales['depart'], ($i-1)); ?> ><?php echo $data->institute_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td id="sep_depart_td<?php echo $i; ?>">
                <select name="sep_depart[]" style="width: 100px;">
                    <option value=""></option>
                    <?php foreach($mst['depart_list'] as $data): ?>
                    <option value="<?php echo $data->depart_id; ?>,<?php echo $data->depart_name; ?>" <?php echo set_select_num('sep_depart[]', $data->depart_id.",".$data->depart_name, $sales['depart'], ($i-1)); ?> ><?php echo $data->depart_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td id="depart_tax_type_td<?php echo $i; ?>">
                <select name="depart_tax_type[]" style="width: 90px;" onchange="ctrl_depart_tax_type(this);change_depart_money(this);">
                    <option value=""></option>
                    <?php foreach($mst['tax_type'] as $data): ?>
                    <option value="<?php echo $data->item_cd; ?>" <?php echo set_select_num('depart_tax_type[]', $data->item_cd, $sales['depart'], ($i-1)); ?>><?php echo $data->item_name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td id="depart_no_tax_money_td<?php echo $i; ?>">
                <input name="depart_no_tax_money[]" type="text" class="money" value="<?php echo set_value_c('depart_no_tax_money[]', $sales['depart'], ($i-1)); ?>" style="width: 70px" class="half_str"  maxlength="10" onblur="change_depart_money(this);" />
            </td>
            <td id="depart_tax_td<?php echo $i; ?>">
                <input name="depart_tax[]" type="text" class="money" value="<?php echo set_value_c('depart_tax[]', $sales['depart'], ($i-1)); ?>" style="width: 70px" class="half_str"  maxlength="10" onblur="calc_depart_tax(this);" />
            </td>
            <td id="depart_in_tax_money_td<?php echo $i; ?>">
                <input name="depart_in_tax_money[]" type="text" class="money" value="<?php echo set_value_c('depart_in_tax_money[]', $sales['depart'], ($i-1)); ?>" style="width: 70px" class="half_str"  maxlength="10" onblur="change_depart_money(this);" />
            </td>
            <td style="text-align: center;">
                <input type="button" value="<?php echo get_row_btn_name($screen['depart_row'], $i, 2); ?>" style="width: 50px;" onclick="delSepDepart(this);" />
            </td>
        </tr>
        <?php endfor;?>
        <tr>
            <th colspan="4" style="text-align: center;">合計</th>
            <td class="data_right">
                <span id="depart_no_tax_total"></span>
            </td>
            <td class="data_right">
                <span id="depart_tax_total"></span>
            </td>
            <td id="hf_depart_in_tax_total_td" class="data_right">
                <span id="depart_in_tax_total"></span>
                <input type="hidden" id="hf_depart_in_tax_total" name="hf_depart_in_tax_total" value="" />
            </td>
            <td></td>
        </tr>
    </table>
    <?php echo form_error_disp_ary(array('sep_institute', 'sep_depart','depart_tax_type','depart_no_tax_money', 'depart_tax', 'depart_in_tax_money')); ?>
    <?php echo form_error_c('hf_depart_in_tax_total', 'hf_depart_in_tax_total_td'); ?>
    <?php echo form_error_c('unique_depart'); ?>
</div>
<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■売上分割設定</td>
        </tr>
    </table>
    <table id="sep_month_warn_tbl" style="width: 100%">
        <tr>
            <td style="height: 150px;">
                <div class="caption_msg" style="margin-left: 10px;">売上分割設定のインフォメーション</div>
                <ul style="margin-left: 40px;color:#22408F;">
                    <li style="padding-bottom: 10px;list-style-type: square;font-weight: bold;">入金種別が前受の時のみ入力ができます。</li>
                </ul>
            </td>
        </tr>
    </table>
    <table id="sep_month_p_tbl">
        <tr>
            <td style="width: 350px;vertical-align: top;">
                <table id="set_sep_money_tbl">
                    <tr>
                        <td colspan="2">【売上分割の設定】</td>
                    </tr>
                    <tr>
                        <td id="sep_month_td" style="vertical-align: top">
                            <input id="sep_month_from" name="sep_month_from" type="text" class="size_date yearmonth" value="<?PHP echo set_value_c("sep_month_from", $sales['mng']); ?>" onblur="disp_sep_month_inp();"  />&nbsp;&nbsp;～&nbsp;&nbsp;
                            <input id="sep_month_to" name="sep_month_to" type="text" class="size_date yearmonth" value="<?PHP echo set_value_c("sep_month_to", $sales['mng']); ?>" onblur="disp_sep_month_inp();" />&nbsp;で分割
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
                                        <span id="sep_money_lbl"></span>
                                        <input id="sep_money_hd" name="sep_money_hd" type="hidden" value="<?PHP echo set_value_c("sep_money_hd", $sales['before']); ?>" />
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
                                        <input type="hidden" name="sep_year_month[]" value="<?PHP echo set_value_c("sep_year_month[]", $sales['before'], ($i-1)); ?>" />
                                    </td>
                                    <?PHP endfor; ?>
                                <tr>
                                    <th>消費税率</th>
                                    <?php for($i=1;$i<=6;$i++): ?>
                                    <td id="sep_tax_td<?= $i; ?>">
                                        <select name="sep_tax_type[]" style="width: 50px;" onchange="set_sep_tax_type(<?= $i; ?>);">
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
</div>
<div class="contents_blk">
        <table>
        <tr>
            <td class="bottom_button" style="width:970px;">
                <p>
                <input id="bill_ok" type="hidden" name="bill_ok" value="" />
                <input type="submit" class="size_L" value="登録" onclick="init_disabled();" />
                </p>
            </td>
        </tr>
    </table>
</div>
</form>
