/***********************************************************
 *
 * 振込消込入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {

    $('#transfer_del_single_tbl').tablefix({width: 850, height: 250, fixRows: 2});
      
    /* ベーシックテーブルの偶数行に色をつける */
    $("table.credit_tbl tr:nth-child(odd)").css("background-color", "#FAF6F7");
      
});
/***********************************************************
 *
 * 行追加ボタン押下時
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
    
    // bill_mng_id取得
    var id = $(obj).parent().parent().parent().parent().parent().find("[name='bill_mng_id[]']").val();
    
    
    // datepicker再作成
    $tr.find(".ui-datepicker-trigger, .date").remove();
    $($tr.children()[0]).append('<input name="reconcile_date[' + id + '][]" type="text" value="" class="date size_date" />');
    $($tr.children()[0]).find(".date")
                    .datepicker({
                        showOn: 'button',
                        buttonImage: '/js/jquery_ui/smoothness/images/calendar.gif',
                        buttonImageOnly: true
                    });

    // 要素を追加
    $($tr.children()[4]).append('<input type="button" name="del_row[]" value="削除" style="margin: 0" onclick="del_row(this);" />');
    
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
 * 情報を絞り込む
 *
 ***********************************************************/
function select_data(obj) {
    
    var $tr = $(obj).parent();
    var name = $tr.find("[name='customer_disp_name']").val();
    //var id = $tr.find("[name='credit_received_id[]']").val();
    
    $("#post_name").val(name);
    //$("#post_id").val(id);
    
    document.search_form.submit();

}
/***********************************************************
 *
 * 情報を絞り込む
 *
 ***********************************************************/
function select_del_data(obj) {
    
    var chk = $(obj).attr('checked');
    
    if(chk == 'checked') {
        $("#post_sel_del").val("2");
    } else {
        $("#post_sel_del").val("");
    }
    
    document.search_form.submit();
    
}
/***********************************************************
 *
 * 全件表示
 *
 ***********************************************************/
function all_data() {
    
    $("#post_sel_del").val("");
    $("#post_name").val("");
    
    document.search_form.submit();
    
}
/***********************************************************
 *
 * 消込ボタンsubmit処理
 *
 ***********************************************************/
function del_submit(obj) {
    
    if(confirm('消込を行います。よろしいですか？')) {
    
        var $tbl = $("#transfer_del_single_tbl");
        var max_row = $tbl.find("tr:last").find("td.basic_no").text();
        max_row = jQuery.trim(max_row);

        var $td = $(obj).parent();
        var form_num = $td.parent().parent().parent().parent().parent().parent().index() - 2;
        $td.parent().find(".credit_no").
                    each(function() {
                        var row = $(this).val() - 1;
                        var id = $tbl.find("tbody tr:eq(" + row + ")").find("[name='credit_received_id[]']").val();
                        $(this).parent().find("[name='credit_received_id[]']").val(id);
                    });

        $td.parent().parent().parent().parent().find("[name='max_row']").val(max_row);

        if($("[name='regist_form']").length == 1) {
            document.regist_form.submit();
        } else {
            document.regist_form[form_num].submit();
        }
    }
    
    
}
/***********************************************************
 *
 * 取消ボタンsubmit処理
 *
 ***********************************************************/
function cancel_submit(obj) {

    if(confirm('取消を行います。よろしいですか？')) {
        $("[name='regist']").val("cancel");
        
        var $td = $(obj).parent();
        $td.parent().parent().parent().parent().find("[name='target_row']").val($td.parent().index());

        var $td = $(obj).parent();
        var form_num = $td.parent().parent().parent().parent().parent().parent().index() - 2;

       if($("[name='regist_form']").length == 1) {
           document.regist_form.submit();
       } else {
           document.regist_form[form_num].submit();
       }
    }
    
}
