<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td style="width: 800px;">■請求書情報</td>
        </tr>
    </table>
    <table class="credit_tbl">
        <tr>
            <th style="width: 190px;">得意先名</th>
            <th style="width: 100px;">請求書No</th>
            <th style="width: 100px;">請求日</th>
            <th style="width: 100px;">請求金額</th>
            <th style="width: 100px;">請求残額</th>
        </tr>
        <tr>
            <td>
                <?PHP echo $list_data['customer_disp_name']; ?>
            </td>
            <td>
                <?PHP echo $list_data['bill_no']; ?>
            </td>
            <td>
                <?PHP echo $list_data['bill_date']; ?>
            </td>
            <td class="data_right">
                <?PHP echo $list_data['bill_money']; ?>
            </td>
            <td class="data_right">
                <span class="red"><?PHP echo $list_data['balance_money']; ?></span>
            </td>
        </tr>
    </table>
</div>
<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td style="width: 800px;">■売上情報</td>
        </tr>
    </table>
    <table class="credit_tbl">
        <tr>
            <th style="width: 80px;">売上計上日</th>
            <th style="width: 160px;">研究所</th>
            <th style="width: 160px;">部門</th>
            <th style="width: 80px;">担当者</th>
            <th style="width: 100px;">摘要</th>
            <th style="width: 90px;">消費税</th>
            <th style="width: 90px;">売上金額</th>
        </tr>
    <?php foreach($list_data['sales_info'] as $val): ?>
        <tr>
            <td>
                <?PHP echo $val['book_date']; ?>
            </td>
            <td>
                <?PHP echo $val['institute_name']; ?>
            </td>
            <td>
                <?PHP echo $val['depart_name']; ?>
            </td>
            <td>
                <?PHP echo $val['handler_name']; ?>
            </td>
            <td>
                <?PHP echo $val['abstract_name']; ?>
            </td>
            <td class="data_right">
                <?PHP echo $val['sum_tax']; ?>
            </td>
            <td class="data_right">
                <?PHP echo $val['sum_money']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>

<div class="contents_blk">
    <table class="caption_tbl">
        <tr>
            <td style="width: 800px;">■消込情報</td>
        </tr>
    </table>
    <table class="credit_tbl">
        <tr>
            <th style="width: 100px;">消込日</th>
            <th style="width: 100px;">消込種別</th>
            <th style="width: 100px;">消込金額</th>
        </tr>
        <?php if(count($list_data['reconcile_info']) == 0): ?>
        <tr>
            <td class="no_list" colspan="3"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
        </tr>
        <?php else: ?>
        <?php foreach($list_data['reconcile_info'] as $val): ?>
            <tr>
                <td>
                    <?PHP echo $val['reconcile_date']; ?>
                </td>
                <td>
                    <?PHP echo $val['reconcile_type_name']; ?>
                </td>
                <td class="data_right">
                    <?PHP echo $val['reconcile_money']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
    
</div>