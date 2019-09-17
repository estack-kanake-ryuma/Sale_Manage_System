<div class="contents_blk">
    
    <table class="caption_tbl">
        <tr>
            <td>■年度設定</td>
        </tr>
    </table>
    <table class="setup_tbl">
        <tr>
            <th style="width: 100px;">年度</th>
            <td id="year_td" style="width: 150px;">
                <input id="year" name="year" type="text" value="<?php echo set_value_c('regist_year') ?>" style="width: 80px;" maxlength="4" class="half_str" />
            </td>
            <td style="border:0;text-align:center;width:300px;">
                <input type="button" class="size_M" value="表示" onclick="disp_exec();" />
                <?php echo form_error_c('regist_year'); ?>
            </td>
        </tr>
    </table>
</div>

<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■目標額設定</td>
        </tr>
    </table>
    <form name="regist_form" method="post" action="/mainte/sales_mark">
        <input id="regist_year" type="hidden" name="regist_year" value="" />
        <input id="disp_type" type="hidden" name="disp_type" value="" />
        <?php echo form_error_c('chk_all_required'); ?>
        <table class="mark_tbl_c">
            <tr>
                <th rowspan="2"></th>
                <?php foreach($mst['depart'] as $val): ?>
                    <th colspan="<?PHP echo count($val['id']) ?>"><?PHP echo $val['institute_name'] ?></th>
                <?php endforeach; ?>
                    <th colspan="2">合計</th>
            </tr>
            <tr>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['name'] as $name): ?>
                        <th style="width: 110px;"><?PHP echo $name; ?></th>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <th>計</th>
                <th>累計</th>
            </tr>
            <tr>
                <th style="width: 80px;">
                    3月
                </th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_3_<?=$key?>_td">
                            <input name="money_3[<?=$key?>]" type="text" value="<?php echo set_value_c('money_3['.$key.']', isset($data[3][$key])?$data[3][$key] : "" ); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_first_q();" />
                            <?php echo form_error_c('money_3['.$key.']', 'money_3_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">4月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_4_<?=$key?>_td">
                            <input name="money_4[<?=$key?>]" type="text" value="<?php echo set_value_c('money_4['.$key.']', isset($data[4][$key])?$data[4][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_first_q();" />
                            <?php echo form_error_c('money_4['.$key.']', 'money_4_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">5月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_5_<?=$key?>_td">
                            <input name="money_5[<?=$key?>]" type="text" value="<?php echo set_value_c('money_5['.$key.']', isset($data[5][$key])?$data[5][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_first_q();" />
                            <?php echo form_error_c('money_5['.$key.']', 'money_5_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">第1四半期</th>
                <?php $i=0; foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                        <td class="total data_right">
                            <span class="first_q_<?=$i?>"></span>
                        </td>
                    <?php $i++; endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="first_q_1_total"></span></td>
                <td style="width: 100px;text-align: center;" class="total"><img src="/images/line_wide.gif" /></td>
            </tr>
            <tr>
                <td style="border: 0;height: 10px;"></td>
            </tr>
            <tr>
                <th style="width: 80px;">6月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_6_<?=$key?>_td">
                            <input name="money_6[<?=$key?>]" type="text" value="<?php echo set_value_c('money_6['.$key.']', isset($data[6][$key])?$data[6][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_second_q();" />
                            <?php echo form_error_c('money_6['.$key.']', 'money_6_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="data_right total"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">7月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_7_<?=$key?>_td">
                            <input name="money_7[<?=$key?>]" type="text" value="<?php echo set_value_c('money_7['.$key.']', isset($data[7][$key])?$data[7][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_second_q();" />
                            <?php echo form_error_c('money_7['.$key.']', 'money_7_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">8月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_8_<?=$key?>_td">
                            <input name="money_8[<?=$key?>]" type="text" value="<?php echo set_value_c('money_8['.$key.']', isset($data[8][$key])?$data[8][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_second_q();" />
                            <?php echo form_error_c('money_8['.$key.']', 'money_8_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>

            <tr>
                <th style="width: 80px;">第2四半期</th>
                <?php $i=0; foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                        <td class="total data_right">
                            <span class="second_q_<?=$i?>"></span>
                        </td>
                    <?php $i++; endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="first_q_2_total"></span></td>
                <td style="width: 100px;text-align: center;" class="total"><img src="/images/line_wide.gif" /></td>
            </tr>
            <tr>
                <td style="border: 0;height: 10px;"></td>
            </tr>
            <tr>
                <th style="width: 80px;">9月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_9_<?=$key?>_td">
                            <input name="money_9[<?=$key?>]" type="text" value="<?php echo set_value_c('money_9['.$key.']', isset($data[9][$key])?$data[9][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_third_q();" />
                            <?php echo form_error_c('money_9['.$key.']', 'money_9_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">10月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_10_<?=$key?>_td">
                            <input name="money_10[<?=$key?>]" type="text" value="<?php echo set_value_c('money_10['.$key.']', isset($data[10][$key])?$data[10][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_third_q();" />
                            <?php echo form_error_c('money_10['.$key.']', 'money_10_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">11月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_11_<?=$key?>_td">
                            <input name="money_11[<?=$key?>]" type="text" value="<?php echo set_value_c('money_11['.$key.']', isset($data[11][$key])?$data[11][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_third_q();" />
                            <?php echo form_error_c('money_11['.$key.']', 'money_11_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>

            <tr>
                <th style="width: 80px;">第3四半期</th>
                <?php $i=0; foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                        <td class="total data_right">
                            <span class="third_q_<?=$i?>"></span>
                        </td>
                    <?php $i++; endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="first_q_3_total"></span></td>
                <td style="width: 100px;text-align: center;" class="total"><img src="/images/line_wide.gif" /></td>
            </tr>
            <tr>
                <td style="border: 0;height: 10px;"></td>
            </tr>
            <tr>
                <th style="width: 80px;">12月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_12_<?=$key?>_td">
                            <input name="money_12[<?=$key?>]" type="text" value="<?php echo set_value_c('money_12['.$key.']', isset($data[12][$key])?$data[12][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_fourth_q();" />
                            <?php echo form_error_c('money_12['.$key.']', 'money_12_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">1月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_1_<?=$key?>_td">
                            <input name="money_1[<?=$key?>]" type="text" value="<?php echo set_value_c('money_1['.$key.']', isset($data[1][$key])?$data[1][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_fourth_q();" />
                            <?php echo form_error_c('money_1['.$key.']', 'money_1_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>
            <tr>
                <th style="width: 80px;">2月</th>
                <?php foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                    <?php $key = $val['institute_id']."-".$id;  ?>
                        <td id="money_2_<?=$key?>_td">
                            <input name="money_2[<?=$key?>]" type="text" value="<?php echo set_value_c('money_2['.$key.']', isset($data[2][$key])?$data[2][$key] : ""); ?>" class="money" style="width: 80px;" maxlength="8" onblur="compute_total_all();compute_fourth_q();" />
                            <?php echo form_error_c('money_2['.$key.']', 'money_2_'.$key.'_td'); ?>
                        </td>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="row_total"></span></td>
                <td style="width: 100px;" class="total data_right"><span class="sum_total"></span></td>
            </tr>

            <tr>
                <th style="width: 80px;">第4四半期</th>
                <?php $i=0; foreach($mst['depart'] as $val): ?>
                    <?php foreach($val['id'] as $id): ?>
                        <td class="total data_right">
                            <span class="fourth_q_<?=$i?>"></span>
                        </td>
                    <?php $i++; endforeach; ?>
                <?php endforeach; ?>
                <td style="width: 100px;" class="total data_right"><span class="first_q_4_total"></span></td>
                <td style="width: 100px;text-align: center;" class="total"><img src="/images/line_wide.gif" /></td>
            </tr>
            <tr>
                <td colspan="8" class="bottom_button" style="border: 0;height: 80px;">
                    <input type="button" class="size_L" value="登録" onclick="regist_exec('regist');" />
                </td>
            </tr>
        </table>
        
        
    </form>
</div>
