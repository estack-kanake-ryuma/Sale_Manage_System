/***********************************************************
 *
 * セグメントによって、摘要の表示を切り替える
 *
 ***********************************************************/
function set_disp_abstract() {
    
    var seg = $("#segment").val();
    
    $("#disp_abstract_1").attr("checked", "checked")
    if(seg == "1") {
        $("#disp_abstract_1").removeAttr("disabled");
        $("#disp_abstract_2").removeAttr("disabled");
        $("#customer_name").removeAttr("disabled");
        $("#customer_name").removeClass("disabled");
    } else if(seg == "2") {
        $("#customer_name").addClass("disabled");
        $("#customer_name").val("");
        $("#customer_name").attr('disabled', 'disabled');
        $("#disp_abstract_1").attr('disabled', 'disabled');
        $("#disp_abstract_2").attr('disabled', 'disabled');
    } else {
        $("#disp_abstract_1").attr('disabled', 'disabled');
        $("#disp_abstract_2").attr('disabled', 'disabled');
        $("#customer_name").removeAttr("disabled");
        $("#customer_name").removeClass("disabled");
    }
    
}
/***********************************************************
 *
 * セグメントによって、表示順のoptionを作成する
 *
 ***********************************************************/
function set_disp_order(obj) {
    
    if (obj._oldValue == undefined) return;
    if(obj.value == obj._oldValue) return;
    obj._oldValue = obj.value;
    
    $("#seq_item_require").css("display", "");
    $("#seq_item").attr("disabled", false);
    $("#seq_item").removeClass("disabled");
    $("#seq_item").val("");
    $("#seq_item_td").removeClass("err_back");
    $("#seq_item_td").find(".error").remove();
    if(obj.value == "2") {
        $("#seq_item").attr("disabled", true);
        $("#seq_item").addClass("disabled");
        $("#seq_item_require").css("display", "none");
    } else {
        $.ajax(get_param_order(obj.value));
    }
    
}
function get_param_order(val) {
    
    return {
            url: "/util/ajax/sum_print_order"
            , scriptCharset: 'utf-8'
            , type: "POST"
            , cache: false
            , dataType: "json"
            , data: {name: val}
            , success: function(res){
                set_order(res);
            } 
        };
}
function set_order(res) {

    $('#seq_item > option').remove();
    
    $('#seq_item').append($('<option>').html("").val(""));
    for(var i=0;i<res.length;i++) {
        $('#seq_item').append($('<option>').html(res[i].name).val(res[i].item));
    }
}
/***********************************************************
 *
 * セグメントによって、摘要の表示を切り替える
 *
 ***********************************************************/
function change_disp_abstract() {

    var seg = $("#segment").val();
    if(seg == "1") {
        var seq = $("#seq_item").val();
        if(seq == "3") {
            $("#disp_abstract_2").attr("checked", "checked")
            $("#disp_abstract_1").attr('disabled', 'disabled');
            $("#disp_abstract_2").attr('disabled', 'disabled');
        } else {
            $("#disp_abstract_1").attr("checked", "checked")
            $("#disp_abstract_1").removeAttr("disabled");
            $("#disp_abstract_2").removeAttr("disabled");
        }
        
    }
    
    
}

/***********************************************************
 *
 * 売上情報入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    change_disp_abstract();
});
