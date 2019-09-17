<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
        <tr>
            <td colspan="4" class="title">基本情報</td>
        </tr>
        <tr>
            <td class="item">固定メモ<span class="required">※</span></td>
            <td id="fix_memo_td" colspan="3">
                <textarea name="fix_memo" class="memo"><?PHP echo set_value_c('fix_memo', $memo); ?></textarea>
                <?PHP echo form_error_c('fix_memo', 'fix_memo_td'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="bottom_button">
                <input type="submit" class="size_L" value="登録" />
            </td>
        </tr>
        </table>
    </form>

</div>
