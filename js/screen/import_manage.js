/**
 * ボタン毎のアクション処理
 * @param action_name
 */
function form_action(action_name, id) {
    if (action_name == 'register') {
        // 登録ボタン押下時
        location.href="/bill/import_manage/register/?id=" + id;
    }
    else if(action_name == 'cooperation')
    {
        // 連携ボタン押下時
        location.href="/bill/import_manage/cooperation/?id=" + id;
    }
    else if(action_name == 'discard')
    {
        // 破棄ボタン押下時
        location.href="/bill/import_manage/discard/?id=" + id;
    }
    else
    {
        // それ以外は無効
        return;
    }
}