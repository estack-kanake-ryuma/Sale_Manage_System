/***********************************************************
 *
 * チェックボックス全チェック
 *
 ***********************************************************/
function chk_all(obj) {
  
    var chk = $(obj).attr('checked');
    if(chk == 'checked') {
        $("[name='print_chk[]']").each(function(){
            
            if(!$(this).is(':disabled')) {
                $(this).attr('checked', 'checked');
                set_chk_value($(this));
            }
        });
    } else {
        $("[name='print_chk[]']").each(function(){ $(this).removeAttr("checked");set_chk_value($(this)) });
    }
    
}

function set_chk_value($obj) {
    
    var $jObj = ($obj instanceof jQuery ) ? $obj : $($obj);
    var val = $jObj.closest("td").find("[name='sales_mng_id[]']").val();
    
    ($jObj.attr('checked') == 'checked') ? $jObj.val(val) : $jObj.val("");
    
}

// 売上情報確認画面表示
function open_confirm(id) {
    
    var win = window.open('/other/sales_confirm_other?id=' +id, 'detail', 'width=900, height=600, menubar=no, toolbar=no, scrollbars=yes, resizable=yes');

    if (win !== undefined) {
        win.focus()
    }
}

/***********************************************************
 *
 * 情報を絞り込む
 *
 ***********************************************************/
function select_download_data() {
    
    document.regist_form.submit();
    
}
