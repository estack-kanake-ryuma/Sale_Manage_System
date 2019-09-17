<div class="contents_blk" style="<?PHP echo $disp_cutoff['disp_ctrl']; ?>">
    <form name="cutoff_form" method="post" action="/top">
        <div class="top_left">
            <table class="top_caption_tbl">
                <tr>
                    <td class="title" colspan="2">締め処理</td>
                </tr>
                <tr>
                    <td class="" style="width: 220px; padding-left: 4px; border-right: 0;">
                        <span>前月の締め処理を行います。</span>
                    </td>
                    <td style="width: 180px;text-align: center;height: 50px;vertical-align: middle;  border-left: 0;">
                        <?PHP if ($disp_cutoff['cancel_flg']): ?>
                            <input type="submit" name="cancel" value="締め処理取消" style="height: 40px;width: 150px;"
                                   onclick="return confirm('締め処理を取消します。よろしいですか？');"/>
                        <?PHP else: ?>
                            <input type="submit" name="regist" value="締め処理実行" style="height: 40px;width: 150px;"
                                   onclick="return confirm('締め処理を実行します。よろしいですか？');"/>
                        <?PHP endif; ?>
                    </td>
                </tr>
            </table>
            <?PHP echo form_error_c('chk_bill_publish'); ?>
        </div>
        <div class="clear"></div>
    </form>
</div>

<div class="contents_blk">

    <div class="top_left">
        <table class="top_caption_tbl">
            <tr>
                <td class="title">部門別実績</td>
            </tr>
        </table>
        <h3 class="caption">
            <table style="width: 100%;">
                <tr>
                    <td>
                        売上目標達成度
                    </td>
                    <td style="text-align: right;padding-right: 4px;">
                        <span style="font-size: 0.9em"><?PHP echo $proc_month ?></span>
                    </td>
                </tr>
            </table>
        </h3>
        <table class="depart_tbl">
            <tr>
                <th colspan="2"></th>
                <th style="width: 75px;">評価</th>
                <th style="width: 85px;">当月実績</th>
                <th style="width: 85px;">当月目標</th>
            </tr>
            <?php foreach ($depart as $value): ?>
                <tr>
                    <th rowspan="<?php echo count($value['depart']); ?>" style="width: 80px;text-align: left;">
                        <?php echo $value['institute_name']; ?>
                    </th>
                    <th style="width: 110px;text-align: left;"><?php echo $value['depart'][0]['depart_name']; ?></th>
                    <?PHP if (isset($depart_mark[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']])): ?>
                        <td class="data_right"><?PHP echo $depart_mark[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']]['rate'] ?></td>
                        <td class="data_right"><?PHP echo $depart_mark[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']]['disp_now_money'] ?></td>
                        <td class="data_right"><?PHP echo $depart_mark[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']]['disp_mark_money'] ?></td>
                    <?PHP else: ?>
                        <td></td>
                        <td class="data_right"></td>
                        <td class="data_right"></td>
                    <?PHP endif; ?>
                </tr>
                <?php for ($i = 1; $i < count($value['depart']); $i++): ?>
                    <tr>
                        <th style="text-align: left;"><?php echo $value['depart'][$i]['depart_name']; ?></th>
                        <?PHP if (isset($depart_mark[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']])): ?>
                            <td class="data_right"><?PHP echo $depart_mark[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']]['rate'] ?></td>
                            <td class="data_right"><?PHP echo $depart_mark[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']]['disp_now_money'] ?></td>
                            <td class="data_right"><?PHP echo $depart_mark[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']]['disp_mark_money'] ?></td>
                        <?PHP else: ?>
                            <td></td>
                            <td class="data_right"></td>
                            <td class="data_right"></td>
                        <?PHP endif; ?>

                    </tr>
                <?php endfor; ?>
            <?php endforeach; ?>
        </table>
        <h3 class="caption">
            <table style="width: 100%;">
                <tr>
                    <td>
                        売上前年同月比較
                    </td>
                    <td style="text-align: right;padding-right: 4px;">
                        <span style="font-size: 0.9em"><?PHP echo $proc_month ?></span>
                    </td>
                </tr>
            </table>
        </h3>
        <table class="depart_tbl">
            <tr>
                <th colspan="2"></th>
                <th style="width: 75px;">評価</th>
                <th style="width: 85px;">当月実績</th>
                <th style="width: 85px;">前年同月実績</th>
            </tr>
            <?php foreach ($depart as $value): ?>
                <tr>
                    <th rowspan="<?php echo count($value['depart']); ?>" style="width: 80px;text-align: left;">
                        <?php echo $value['institute_name']; ?>
                    </th>
                    <th style="width: 110px;text-align: left;"><?php echo $value['depart'][0]['depart_name']; ?></th>
                    <?PHP if (isset($depart_result[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']])): ?>
                        <td class="data_right"><?PHP echo $depart_result[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']]['rate'] ?></td>
                        <td class="data_right"><?PHP echo $depart_result[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']]['disp_now_money'] ?></td>
                        <td class="data_right"><?PHP echo $depart_result[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']]['disp_bef_money'] ?></td>
                    <?PHP else: ?>
                        <td></td>
                        <td class="data_right">0</td>
                        <td class="data_right">0</td>
                    <?PHP endif; ?>
                </tr>
                <?php for ($i = 1; $i < count($value['depart']); $i++): ?>
                    <tr>
                        <th style="text-align: left;"><?php echo $value['depart'][$i]['depart_name']; ?></th>
                        <?PHP if (isset($depart_result[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']])): ?>
                            <td class="data_right"><?PHP echo $depart_result[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']]['rate'] ?>
                            </td>
                            <td class="data_right"><?PHP echo $depart_result[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']]['disp_now_money'] ?></td>
                            <td class="data_right"><?PHP echo $depart_result[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']]['disp_bef_money'] ?></td>
                        <?PHP else: ?>
                            <td></td>
                            <td class="data_right">0</td>
                            <td class="data_right">0</td>
                        <?PHP endif; ?>
                    </tr>
                <?php endfor; ?>
            <?php endforeach; ?>
        </table>
        <h3 class="caption">
            <table style="width: 100%;">
                <tr>
                    <td>
                        3か月以上滞留債権
                    </td>
                    <td style="text-align: right;padding-right: 4px;">
                        <span style="font-size: 0.9em"><?PHP echo $proc_month ?></span>
                    </td>
                </tr>
            </table>
        </h3>
        <table class="depart_tbl">
            <?php foreach ($depart as $value): ?>
                <tr>
                    <th rowspan="<?php echo count($value['depart']); ?>" style="width: 80px;text-align: left;">
                        <?php echo $value['institute_name']; ?>
                    </th>
                    <th style="width: 110px;text-align: left;"><?php echo $value['depart'][0]['depart_name']; ?></th>
                    <?PHP if (isset($receivable[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']])): ?>
                        <td class="data_right" style="width: 150px;">
                            <?PHP echo $receivable[$value['institute_id']]['depart_info'][$value['depart'][0]['depart_id']]['disp_balance_money'] ?>
                        </td>
                    <?php else: ?>
                        <td class="data_right" style="width: 150px;">0</td>
                    <?php endif; ?>
                </tr>
                <?php for ($i = 1; $i < count($value['depart']); $i++): ?>
                    <tr>
                        <th style="text-align: left;"><?php echo $value['depart'][$i]['depart_name']; ?></th>
                        <?PHP if (isset($receivable[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']])): ?>
                            <td class="data_right" style="width: 150px;">
                                <?PHP echo $receivable[$value['institute_id']]['depart_info'][$value['depart'][$i]['depart_id']]['disp_balance_money'] ?>
                            </td>
                        <?php else: ?>
                            <td class="data_right" style="width: 150px;">0</td>
                        <?php endif; ?>
                    </tr>
                <?php endfor; ?>
            <?php endforeach; ?>
            <tr>
                <th colspan="2">諸口</th>
                <td class="data_right">
                    <?PHP echo isset($receivable['']['depart_info']['']['disp_balance_money']) ? $receivable['']['depart_info']['']['disp_balance_money'] : "0"; ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="top_right">

        <div style="border: 1px solid #C0C0C0;margin-bottom: 15px;">
            <table class="top_caption_tbl">
                <tr>
                    <td class="title">カレンダー</td>
                </tr>
            </table>
            <div style="float: left;width: 270px;">
                <div id="datepicker" style="margin: 10px;"></div>
            </div>
            <div style="float: right;width: 175px;">

                <table class="daily_tbl" style="margin-top: 10px;">
                    <tr>
                        <th style="width: 115px;"></th>
                        <th style="width: 40px;">件数</th>
                    </tr>
                    <tr>
                        <td>売上入力件数</td>
                        <td style="text-align: right">
                            <span id="salse_cnt"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>請求書発行件数</td>
                        <td style="text-align: right;">
                            <span id="bill_cnt"></span>
                        </td>
                    </tr>
                </table>
                <div style="margin-top: 5px;text-align: right;">
                    <span id="now_date"></span>
                </div>
            </div>

            <div class="clear"></div>
        </div>

        <div style="border: 1px solid #C0C0C0;height: 300px;">
            <table class="top_caption_tbl">
                <tr>
                    <td class="title">インフォメーション</td>
                </tr>
            </table>
            <table style="margin-left: 10px;margin-right: 10px;">
                <?PHP foreach ($information['customer'] as $value): ?>
                    <tr>
                        <td style="border-bottom: 1px dotted #C0C0C0;width: 60px;height: 30px;text-align: center">
                            <img src="/images/customer_pic.gif" alt="得意先"/>
                        </td>
                        <td style="border-bottom: 1px dotted #C0C0C0;width: 400px;">
                            <?PHP echo $value; ?>
                        </td>
                    </tr>
                <?PHP endforeach; ?>
                <?PHP foreach ($information['print'] as $value): ?>
                    <tr>
                        <td style="border-bottom: 1px dotted #C0C0C0;width: 60px;height: 30px;text-align: center">
                            <img src="/images/bill_pic.gif" alt="請求書"/>
                        </td>
                        <td style="border-bottom: 1px dotted #C0C0C0;width: 400px;">
                            <?PHP echo $value; ?>
                        </td>
                    </tr>
                <?PHP endforeach; ?>
            </table>
        </div>

    </div>

    <div class="clear"></div>
</div>
