/***********************************************************
 *
 * 売上情報入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    $( "#customer_name" ).autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/customer_official_list", req, resp));
                    },
                    minLength:1
    });
    
    // メッセージがある場合は非活性にする
    if($(".up_msg").size() > 0) {
        $('#customer_name').attr('disabled', 'disabled');
        $('#customer_disp_name').attr('disabled', 'disabled');
        $("[name='cutoff_date']").attr('disabled', 'disabled');
        $('#customer_name').addClass('disabled');
        $('#customer_disp_name').addClass('disabled');
        $("[name='cutoff_date']").addClass('disabled');
    }
    
});

/***********************************************************
 *
 * 名称を呼称にコピー
 *
 ***********************************************************/
function copyTxt(cpObj) {
    
    $txtObj = $("#customer_disp_name");
    
    if ($txtObj.val() == '') {
        $txtObj.val(cpObj.value);
    }
}
/***********************************************************
 *
 * フィールドの非活性解除
 *
 ***********************************************************/
function init_disabled() {
    
   $("[name='customer_name'],[name='customer_disp_name'],[name='cutoff_date']").attr("disabled", false);
}
/***********************************************************
 *
 * 請求書での名称確認画面の表示
 *
 ***********************************************************/
function confirm_name_bill() {
    var name = document.getElementById('customer_name').value;

    window.open('/mainte/customer_input/output/?name='+ name);

    return;
}
