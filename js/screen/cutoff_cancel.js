/***********************************************************
 *
 * 振込消込入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
      
    /* ベーシックテーブルの偶数行に色をつける */
    $("#list_tbl tr.list_tr:nth-child(odd)").css("background-color", "#FBF7EE");
      
});

/***********************************************************
 *
 * 詳細確認表示
 *
 ***********************************************************/
function open_confirm(id) {
    
    var win = window.open('/other/receivable_confirm_other?win_type=win&id=' +id, 'detail', 'width=900, height=600, menubar=no, toolbar=no, scrollbars=yes, resizable=yes');

    if (win !== undefined) {
        win.focus()
    }
}

/***********************************************************
 *
 * 追加ボタン押下処理
 *
 ***********************************************************/
function add_row(obj) {
    
    $tr = $(obj).parent().parent().clone(false);
    
    // 追加する行からボタンを消す
    $tr.find(".add_row").remove();
    $tr.find("p").remove();
    
    // 追加する行の値を初期化
    $tr.find("input:text, select").each(function() { $(this).val(""); });
    $tr.find("span").each(function() { $(this).text(""); });
    $tr.find("td").each(function() { $(this).attr("id", ""); $(this).removeClass("err_back"); });

    // 要素を追加
    $($tr.children()[3]).append('<input type="button" name="del_row[]" value="削除" style="margin: 0" onclick="del_row(this);" />');
    
    $(obj).parent().parent().parent().append($tr);
    
    
}
/***********************************************************
 *
 * 行削除ボタン押下時
 *
 ***********************************************************/
function del_row(obj) {
    $tr = $(obj).parent().parent().remove();
}

/***********************************************************
 *
 * 消込ボタンsubmit処理
 *
 ***********************************************************/
function exec_regist(form_num) {

    if(confirm('消込訂正を行います。よろしいですか？')) {
    
        var month = $("[name='target_month']").val();

        $("[name='target_month_search']").val(month);
        $("[name='exec_name']").val('regist');

        if($("[name='regist_form']").length == 1) {
            document.regist_form.submit();
        } else {
            document.regist_form[form_num].submit();
        }
    }
    
}

/***********************************************************
 *
 * 削除ボタンsubmit処理
 *
 ***********************************************************/
function exec_cancel(form_num) {
    
    if(confirm('取消を行います。よろしいですか？')) {
    
        var month = $("[name='target_month']").val();

        $("[name='target_month_search']").val(month);
        $("[name='exec_name']").val('cancel');

        if($("[name='regist_form']").length == 1) {
            document.regist_form.submit();
        } else {
            document.regist_form[form_num].submit();
        }
    }
    
    
}
