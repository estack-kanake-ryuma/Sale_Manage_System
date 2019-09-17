<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form name="transfer_del_form" method="post" action="/credit/receivable_list">
        <table class="search_tbl" style="background: none;">
            <tr>
                <td style="">
                    <table class="credit_tbl">
                        <tr>
                            <th style="width: 150px;">期間</th>
                            <td id="date_td" style="width: 400px;">
                                <input type="text" name="date_from" class="size_date date" value="<?PHP echo set_value_c('date_from', $search); ?>" />&nbsp;～&nbsp;<input type="text" name="date_to" class="size_date date" value="<?PHP echo set_value_c('date_to', $search); ?>" />
                                <?php echo form_error_c('date_from', 'date_td'); ?>
                                <?php echo form_error_c('date_to', 'date_td'); ?>
                                <?php echo form_error_c('chk_span', 'date_td'); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>得意先区分</th>
                            <td>
                                <label for="customer_type_1"><input id="customer_type_1" type="radio" name="customer_type" value="" checked="checked" />全て</label>
                                <?php $i=2; foreach($mst['customer_type'] as $data): ?>
                                <label for="customer_type_<?PHP echo $i; ?>"><input id="customer_type_<?PHP echo $i; ?>" type="radio" name="customer_type" value="<?= $data->item_cd ?>" <?php echo set_radio_c('customer_type', $data->item_cd, $search); ?>  /><?= $data->item_name ?></label>
                                <?php $i++; endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="5">その他条件</th>
                            <td>
                                <label for="other_rb_1">
                                    <input id="other_rb_1" type="radio" name="other_rb" value="1" <?php echo set_radio_c('other_rb', "1", $search); ?> />全てを表示
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="other_rb_2">
                                    <input id="other_rb_2" type="radio" name="other_rb" value="2" <?php echo set_radio_c('other_rb', "2", $search); ?> />繰越残高がある得意先を表示
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="other_rb_3">
                                    <input id="other_rb_3" type="radio" name="other_rb" value="3" <?php echo set_radio_c('other_rb', "3", $search); ?> />指定期間に売掛金が発生した得意先を表示
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="other_rb_4">
                                    <input id="other_rb_4" type="radio" name="other_rb" value="4" <?php echo set_radio_c('other_rb', "4", $search); ?> />指定期間に消込を行った得意先を表示
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="other_rb_5">
                                    <input id="other_rb_5" type="radio" name="other_rb" value="5" <?php echo set_radio_c('other_rb', "5", $search); ?> />残高が残っている得意先を表示
                                </label>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="text-align: center;width: 300px;">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <input type="submit" name="search" class="size_L" value="表示" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">
                                <input type="submit" name="csv" class="size_L" value="CSV出力" />
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
            <td>■売掛金集計表</td>
        </tr>
    </table>
    <div class="other" style="width: 940px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
        <tr>
            <th class="basic_no">No.</th>
            <th style="width: 220px;">得意先名称</th>
            <th style="width: 130px;">繰越残高</th>
            <th style="width: 130px;">増加</th>
            <th style="width: 130px;">減少</th>
            <th style="width: 130px;">残高</th>
            <th style="width: 130px;">繰越残高&nbsp-&nbsp;減少</th>
        </tr>
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="no_list" colspan="7"><span class="red"><?= $msg; ?></span></td>
        </tr>
        <?php else: ?>
            <?php $i = 1; foreach($list_data as $val): ?>
            <tr>
                <td class="basic_no"><?= $i ?></td>
                <td style="width: 220px;">
                    <?php echo $val['customer_disp_name'] ?>
                </td>
                <td class="data_right"  style="width: 130px;">
                    <?php echo $val['disp_balance_money'] ?>
                </td>
                <td class="data_right" style="width: 130px;">
                    <?php echo $val['disp_sales_money'] ?>
                </td>
                <td class="data_right" style="width: 130px;">
                    <?php echo $val['disp_credit_money'] ?>
                </td>
                <td class="data_right" style="width: 130px;">
                    <?php echo $val['disp_now_balance_money'] ?>
                </td>
                <td class="data_right" style="width: 130px;">
                    <?php echo $val['disp_balance_credit'] ?>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        <?php endif; ?>
    </table>
    <?php if(count($list_data) > 0): ?>
    <table class="credit_tbl" style="margin-top:15px;">
        <tr>
            <td style="width: 251px;text-align: center;background-color:#D9D9D9;height: 45px;" colspan="2">
                全得意先合計
            </td>
            <td style="width: 130px;background-color: #FAF6F7;" class="data_right">
                <?PHP echo money_sep($list_total['balance_money']); ?>
            </td>
            <td style="width: 130px;background-color: #FAF6F7;" class="data_right">
                <?PHP echo money_sep($list_total['sales_money']); ?>
            </td>
            <td style="width: 130px;background-color: #FAF6F7;" class="data_right">
                <?PHP echo money_sep($list_total['credit_money']); ?>
            </td>
            <td style="width: 130px;background-color: #FAF6F7;" class="data_right">
                <?PHP echo money_sep($list_total['now_balance_money']); ?>
            </td>
            <td style="width: 129px;background-color: #FAF6F7;" class="data_right">
                <?PHP echo money_sep($list_total['balance_credit']); ?>
            </td>
        </tr>
    </table>
    <? endif; ?>
</div>
