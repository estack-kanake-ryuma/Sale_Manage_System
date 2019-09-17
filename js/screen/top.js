/***********************************************************
 *
 * 売上情報入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    
    $("#datepicker").datepicker({
        // 日付が選択された時、日付をテキストフィールドへセット
        onSelect: function(dateText, inst) {
            $.ajax(get_param_ap("/util/ajax/daily_cnt_info", dateText));
            $("#now_date").text(dateText);
        }
    });    
    
    $(function(){ 
        
        var date = get_now_date();
        $.ajax(get_param_ap("/util/ajax/daily_cnt_info", date));
        $("#now_date").text(date);
    })
    
    
});
/***********************************************************
 *
 * Ajax用関数のパラメータを返却する。
 *
 ***********************************************************/
function get_param_ap(sUrl, val) {
    return {
            url: sUrl, scriptCharset: 'utf-8'
            , type: "POST"
            , cache: false
            , dataType: "json"
            , data: {date: val}
            , success: function(result){
                        $("#salse_cnt").text(result[0].salse_cnt + "件");
                        $("#bill_cnt").text(result[0].bill_cnt + "件");
                    } 
            };
}
