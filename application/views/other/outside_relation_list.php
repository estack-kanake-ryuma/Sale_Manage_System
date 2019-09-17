<div class="contents_blk">

    <table id="sales_detail_tbl" class="sales_tbl" style="margin-top: 20px;">
        <tr>
            <th class="basic_no">No</th>
            <th style="width: 90px;">報告書No</th>
            <th>データ送信</th>
        </tr>
        <?php if (count($list_data) == 0): ?>
            <tr>
                <td class="no_list" colspan="10"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
            </tr>
        <?php else: ?>
            <?php foreach ($list_data as $key => $val): ?>
                <tr>
                    <td class="basic_no">
                        <?PHP echo($key + 1); ?>
                    </td>
                    <td>
                        <?PHP echo $val->report_no; ?>
                    </td>
                    <td style="width: 180px;">
                        <?PHP echo $val->relation_status_name; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

</div>
