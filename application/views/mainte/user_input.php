<div class="contents_blk">
        
    <form method="post" action="" onsubmit="return confirm('登録してよろしいですか？')">
        <table class="mst_input_tbl">
        <tr>
            <td colspan="4" class="title">ユーザー情報</td>
        </tr>
        <tr>
            <td class="item">ユーザー名称<span class="required">※</span></td>
            <td id="user_name_td" colspan="3">
                <input name="user_name" type="text" class="normal" value="<?php echo set_value_c('user_name', $user); ?>" maxlength="25" />
                <?php echo form_error_c('user_name', 'user_name_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">ふりがな<span class="required">※</span></td>
            <td id="user_furi_td" colspan="3">
                <input name="user_furi" type="text" class="normal" value="<?php echo set_value_c('user_furi', $user); ?>" maxlength="50" />
                <?php echo form_error_c('user_furi', 'user_furi_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">ログインID<span class="required">※</span></td>
            <td id="login_id_td" colspan="3">
                <input name="login_id" type="text" class="normal half_str" value="<?php echo set_value_c('login_id', $user); ?>" maxlength="10" />
                <?php echo form_error_c('login_id', 'login_id_td'); ?>
            </td>
        </tr>
        <tr>
            <td class="item">パスワード<span class="required">※</span></td>
            <td id="password_td" colspan="3">
                <input name="password" type="text" class="size_name half_str" value="<?php echo set_value_c('password', $user); ?>" maxlength="10" />
                <?php echo form_error_c('password', 'password_td'); ?>
            </td>
            
        </tr>
        <tr>
            <td class="item">システム権限<span class="required">※</span></td>
            <td id="auth_cd_td" colspan="3">
                <?php $i=1; foreach($mst['auth_cd'] as $data): ?>
                <label for="auth_cd_<?=$i;?>">
                    <input id="auth_cd_<?=$i;?>" type="radio" name="auth_cd" value="<?= $data->item_cd ?>" <?php echo set_radio_c('auth_cd', $data->item_cd, $user); ?>  /><?echo $data->item_name ?>
                </label>
                <?php $i++; endforeach; ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="title">所属情報</td>
        </tr>
        <tr>
            <td class="item">研究所<span class="required">※</span></td>
            <td id="institute_id_td" colspan="3">
                <select name="institute_id" class="" style="width:100px;">
                    <option value=""></option>
                    <?php foreach($mst['institute_list'] as $data): ?>
                    <option value="<?php echo $data->institute_id; ?>" <?php echo set_select_c('institute_id', $data->institute_id, $user); ?>><?php echo $data->institute_name; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error_c('institute_id', 'institute_id_td'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="title">メモ</td>
        </tr>
        <tr>
             <td class="item">
                メモ
            </td>
            <td colspan="3">
                <textarea name="memo" class="memo"><?PHP echo set_value_c('memo', $user); ?></textarea>
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
