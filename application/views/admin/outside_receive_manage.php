<div class="contents_blk">
    
    <form method="post" action="" onsubmit="return confirm('処理済にします。よろしいですか？')">
        <table class="basic_tbl">
            <tr>
                <th class="basic_no">No</th>
                <th style="width: 200px;">取込日時</th>
                <th>エラー内容</th>
                <th>管理No</th>
                <th>得意先名</th>
                <th>報告書No</th>
                <th>試験担当者</th>
                <th>品名</th>
                <th>売上金額</th>
                <th>試験パターン区分</th>
            </tr>
            <?php $i = 1; foreach($display_list as $receive): ?>
            <tr>
                <td class="basic_no"><?php echo $i; ?></td>
                <td><?php echo $receive['ins_datetime']; ?></td>
                <td><?php echo $receive['message']; ?></td>
                <td><?php echo $receive['manage_no']; ?></td>
                <td><?php echo $receive['customer_name']; ?></td>
                <td><?php echo $receive['report_no']; ?></td>
                <td><?php echo $receive['handler_name']; ?></td>
                <td><?php echo $receive['goods_name']; ?></td>
                <td><?php echo $receive['no_tax_money']; ?></td>
                <td><?php echo $receive['test_pattern']; ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </table>
    </form>
</div>
