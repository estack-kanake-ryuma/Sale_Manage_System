<div class="contents_blk">
	
    <div class="other" style="width: 920px;">
        <div class="list_cnt"><?PHP echo $cnt_info; ?></div>
        <?PHP echo $page_link; ?>
    </div>
    <table class="basic_tbl">
    <tr>
            <th class="basic_no">No</th>
            <th style="width:150px;">研究所名称</th>
            <th style="width:350px;">住所</th>
            <th style="width:100px;">TEL</th>
            <th style="width:100px;">FAX</th>
            <th class="basic_memo">メモ</th>
            <th class="btn_th"></th>
    </tr>
    <?php if(count($list_data) == 0): ?>
    <tr>
        <td class="no_list" colspan="9"><span class="red"><?= WARN_NO_LIST_MSG ?></span></td>
    </tr>
    <?php else: ?>
        <?php foreach($list_data as $val): ?>
            <tr>
                <td class="basic_no">
                    <?PHP echo $val->no; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->institute_name; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->disp_addr; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->disp_tel_no;; ?>
                </td>
                <td class="" style="">
                    <?PHP echo $val->disp_fax_no; ?>
                </td>
                <td class="basic_memo">
                    <?PHP echo $val->disp_memo; ?>
                </td>
                <td class="btn_td">
                    <input type="button" class="list_btn" value="変更" onclick="upd_data('<?php echo $val->institute_id; ?>');" />
            </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
</div>
