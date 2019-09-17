<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td>■表示条件設定</td>
        </tr>
    </table>
    <form name="reconcile_search_form" method="post" action="/credit/reconcile_list">
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
                            </td>
                        </tr>
                        <tr>
                            <th>得意先名称</th>
                            <td>
                                <input name="customer_disp_name" type="text" value="<?php echo set_value_c('customer_disp_name', $search); ?>" style="width: 220px;" />&nbsp;を含む
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
            <td>■消込状況一覧</td>
        </tr>
    </table>
    <div class="other" style="width: 940px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="credit_tbl">
        <tr>
            <th class="basic_no">No.</th>
            <th style="width: 275px;">得意先名称</th>
            <th style="width: 100px;">振込<br />振込手数料</th>
            <th style="width: 100px;">相殺</th>
            <th style="width: 100px;">現金</th>
            <th style="width: 100px;">小切手<br />手形</th>
            <th style="width: 100px;">雑損失<br />その他</th>
            <th style="width: 100px;">合計消込額</th>
        </tr>
        <?php if(count($list_data) == 0): ?>
        <tr>
            <td class="no_list" colspan="8"><span class="red"><?= $msg; ?></span></td>
        </tr>
        <?php else: ?>
            <?php $i = 1; foreach($list_data as $val): ?>
            <tr class="parent">
                <td class="basic_no"><?= $i ?></td>
                <td class=""  style="width: 275px;">
                    <?PHP echo $val['customer_disp_name']; ?>
                </td>
                <td style="padding: 0;width: 100px;">
                    <table style="width: 100%">
                        <tr>
                            <td class="data_right" style="border-left: 0;border-right: 0;border-top: 0;height: 30px;">
                                <?PHP echo $val['furikomi']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="data_right" style="border: 0;height: 30px;">
                                <?PHP echo $val['furikomi_tesu']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="data_right" style="width: 100px;">
                    <?PHP echo $val['sosai']; ?>
                </td>
                <td class="data_right" style="width: 100px;">
                    <?PHP echo $val['genkin']; ?>
                </td>
                <td style="padding: 0;width: 100px;">
                    <table style="width: 100%">
                        <tr>
                            <td class="data_right" style="border-left: 0;border-right: 0;border-top: 0;height: 30px;">
                                <?PHP echo $val['kogite']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="data_right" style="border: 0;height: 30px;">
                                <?PHP echo $val['tegata']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;width: 100px;">
                    <table style="width: 100%">
                        <tr>
                            <td class="data_right" style="border-left: 0;border-right: 0;border-top: 0;height: 30px;">
                                <?PHP echo $val['zsonsitu']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="data_right" style="border: 0;height: 30px;">
                                <?PHP echo $val['sonota']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td class="data_right" style="width: 100px;">
                    <?PHP echo $val['total']; ?>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        <?php endif; ?>
    </table>
    <?php if(count($list_data) > 0): ?>
    <table class="credit_tbl" style="margin-top:15px;">
        <tr>
            <td style="width: 306px;text-align: center;background-color:#D9D9D9;height: 45px;" colspan="2">
                全得意先合計
            </td>
            <td style="padding: 0;width: 104px">
                <table style="width: 100%">
                    <tr>
                        <td class="data_right" style="border-left: 0;border-right: 0;border-top: 0;height: 30px;">
                            <?PHP echo $list_total['furikomi']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="data_right" style="border: 0;height: 30px;">
                            <?PHP echo $list_total['furikomi_tesu']; ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="data_right" style="width: 100px;">
                <?PHP echo $list_total['sosai']; ?>
            </td>
            <td class="data_right" style="width: 100px;">
                <?PHP echo $list_total['genkin']; ?>
            </td>
            <td style="padding: 0;width: 104px;">
                <table style="width: 100%">
                    <tr>
                        <td class="data_right" style="border-left: 0;border-right: 0;border-top: 0;height: 30px;">
                            <?PHP echo $list_total['kogite']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="data_right" style="border: 0;height: 30px;">
                            <?PHP echo $list_total['tegata']; ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="padding: 0;width: 104px;">
                <table style="width: 100%">
                    <tr>
                        <td class="data_right" style="border-left: 0;border-right: 0;border-top: 0;height: 30px;">
                            <?PHP echo $list_total['zsonsitu']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="data_right" style="border: 0;height: 30px;">
                            <?PHP echo $list_total['sonota']; ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="data_right" style="width: 100px;">
                <?PHP echo money_sep($list_total['total']); ?>
            </td>
        </tr>
    </table>
    <? endif; ?>
    
</div>
