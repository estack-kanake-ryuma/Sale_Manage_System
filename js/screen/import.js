/***********************************************************
 *
 * 取込情報詳細画面の別ウィンドウ表示処理
 *
 ***********************************************************/
function open_confirm(id) {
    
    var win = window.open('/other/import_detail_other?id=' +id, 'detail', 'width=900, height=600, menubar=no, toolbar=no, scrollbars=yes, resizable=yes');

    if (win !== undefined) {
        win.focus()
    }
}
