<div class="contents_blk">
    
    <form method="post" action="">
        <div id="login_blk">
            <div id="login_title_blk">
                <span>ログイン</span>
            </div>
            <div id="login_contents">
                <table>
                    <tr>
                        <th class="title">
                            ログインID
                        </th>
                        <td class="data">
                            <input name="login_id" type="text" value="<?php echo set_value('login_id'); ?>" style="width: 250px;height: 20px" />
                        </td>   
                    </tr>
                    <tr>
                        <th class="title">
                            パスワード
                        </th>
                        <td class="data">
                            <input name="password" type="password" value="<?php echo set_value('password'); ?>" style="width: 250px;height: 20px" />
                        </td>   
                    </tr>
                </table>
                <?php echo validation_errors('<p class="error">', '</p>'); ?>
                <table>
                    <tr>
                        <td class="login_btn">
                            <input type="image" src="/images/login_button.gif" onclick="void(this.form.submit());return false;" />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    
</div>
