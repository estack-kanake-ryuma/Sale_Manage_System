<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form id="search_form" name="search_form" method="post" action="/credit/age_month_print">
        <table class="search_tbl" style="background: none;">
            <tr>
                <td style="">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 150px;">対象月</th>
                            <td id="date_td" style="width: 400px;">
                                <input name="target_month" type="text" class="size_date yearmonth" value="<?php echo set_value_c('target_month', $search); ?>"  />
                            </td>
                        </tr>
                        <tr>
                            <th>得意先</th>
                            <td>
                                <input type="text" name="customer_disp_name" value="<?php echo set_value_c('customer_disp_name', $search); ?>" style="width: 220px;" />&nbsp;を含む
                            </td>
                        </tr>
                        <tr>
                            <th>研究所</th>
                            <td>
                                <select id="institute_id" name="institute_id" style="width: 160px;">
                                    <option value=""></option>
                                    <?php foreach($mst['institute_list'] as $data): ?>
                                    <option value="<?php echo $data->institute_id; ?>" <?php echo set_select_c('institute_id', $data->institute_id, $search); ?>><?php echo $data->institute_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>部門</th>
                            <td>
                                <select name="depart_id" style="width: 160px;">
                                    <option value=""></option>
                                    <?php foreach($mst['depart_list'] as $data): ?>
                                    <option value="<?php echo $data->depart_id; ?>" <?php echo set_select_c('depart_id', $data->depart_id, $search); ?>><?php echo $data->depart_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>滞留条件</th>
                            <td>
                                <?php $i=1; foreach($mst['retention'] as $data): ?>
                                <label for="retention_<?PHP echo $i; ?>">
                                    <input id="retention_<?PHP echo $i; ?>" type="radio" name="retention" value="<?php echo $data->item_cd; ?>" <?php echo set_radio_c('retention', $data->item_cd, $search); ?> /><?php echo $data->item_name; ?>
                               </label>
                                <?php $i++;endforeach; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="text-align: center;width: 300px;">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <input type="submit" name="search" class="size_L" value="表示" />
                                <input type="hidden" id="hf_disp_depart" name="hf_disp_depart" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">
                                <input type="button" class="size_L" value="クリア" onclick="clear_mine_search_item();" />
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
            <td>■一覧表示</td>
        </tr>
    </table>
    <label for="disp_depart">
        <input id="disp_depart" name="disp_depart" type="checkbox" <?php echo set_checkbox_c('disp_depart', FLG_ON, $search); ?> onclick="disp_depart_ctrl(this);"/>&nbsp;部門別で表示
    </label>
    <div class="other" style="width: 970px;margin-bottom: 5px;margin-top: 10px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="credit_tbl">
        <tr>
            <th rowspan="2" class="basic_no">No.</th>
            <th rowspan="2" style="width: 200px;">得意先名</th>
            <th rowspan="2" style="width: 80px;">合計</th>
            <th rowspan="2" style="width: 80px;">３か月<br>以上計</th>
            <th colspan="7">売掛金月齢表</th>
        </tr>
        <tr>
            <th style="width: 80px;">対象月請求</th>
            <th style="width: 80px;">１ヶ月</th>
            <th style="width: 80px;">２ヶ月</th>
            <th style="width: 80px;">３ヶ月</th>
            <th style="width: 80px;">４ヶ月</th>
            <th style="width: 80px;">５ヶ月</th>
            <th style="width: 80px;">６ヶ月以上</th>
        </tr>
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="no_list" colspan="11"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php else: ?>
        <?php $i=1; foreach($list_data as $val): ?>
        <?php if($i != 1): ?>
        <tr class="separater">
            <td colspan="11" style="border-top: 3px double rgb(0, 0, 0);height: 0px"></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="basic_no"><?=$i?></td>
            <td>
                <?php echo $val['customer_link']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['total_money']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['three_total']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['target_sales']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['first_rec']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['second_rec']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['third_rec']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['fourth_rec']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['fifth_rec']; ?>
            </td>
            <td class="data_right">
                <?php echo $val['other_rec']; ?>
            </td>
        </tr>
        <?php foreach($val['depart_info'] as $depart): ?>
        <tr class="depart_info">
            <td colspan="2" class="data_right" style="color:#22408F;">
                <?PHP echo $depart['disp_depart_name']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['total_money']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['three_total']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['target_sales']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['first_rec']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['second_rec']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['third_rec']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['fourth_rec']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['fifth_rec']; ?>
            </td>
            <td class="data_right" style="color:#22408F">
                <?php echo $depart['other_rec']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php $i++; endforeach; ?>
        <tr>
            <td colspan="11"  style="border: 0;height: 30px;text-align: right;"><span class="red">※&nbsp;&nbsp;各月に発行した請求書の金額です。</span></td>
        </tr>
        <tr>
            <td colspan="11" style="border: 0;height: 60px;text-align: center">
                <form name="print_form" method="post" action="/credit/age_month_print/output<?PHP echo ($this->uri->segment(4) == false) ?  "" : "/".$this->uri->segment(4); ?>">
                    <input type="submit" name="receivable" class="size_L" value="売掛金月齢表出力" onclick="return confirm('売掛金月齢表を出力します。よろしいですか？');" />
                </form>
            </td>
<!--            <td colspan="6" style="border: 0;height: 80px;text-align: center">
                <form name="print_form" method="post" action="/credit/age_month_print/output">
                    <input type="submit" name="detail" class="size_L" value="売掛金月齢明細表出力" />
                </form>
            </td>-->
        </tr>
        <?php endif; ?>
    </table>
</div>
