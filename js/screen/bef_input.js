/***********************************************************
 *
 * 売上情報入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    
    if($('#credit_type_hf').val() == '3') {
        $(function(){ 
            disp_sep_month_inp();
        })

        /* 分割金額合計計算処理設定 */
        $("[name='sep_money[]']").live("blur", function() { cumpute_sep_money(); });
    }
   
});

/***********************************************************
 * 売上分割入力枠の表示、非表示の制御
 ***********************************************************/
function disp_sep_month_inp() {
    
    // エラー情報初期化
    $("#sep_err_blk ul li").each(function(){ $(this).remove();}  );
    
    from = $("#sep_month_from").val();
    to = $("#sep_month_to").val();
    
    from = chg_yearmonth(from);
    to = chg_yearmonth(to);
    
    err_msg = [];
    var err_flg = false;
    
    if(from == "") return;
    if(to == "") return;
    
    // 年月のチェック
    if(!checkYearMonth(from)) {
        err_flg = true;
    }
    // 年月のチェック
    if(!checkYearMonth(to)) {
        err_flg = true;
    }
    
    var sYear1 = from.split("/")[0];
    var sMonth1 = from.split("/")[1];
    
    var sYear2 = to.split("/")[0];
    var sMonth2 = to.split("/")[1];
    
    // 範囲のチェック
    diffDay = compareMonth(sYear2, sMonth2, sYear1, sMonth1) + 1;
    
    if(diffDay > 12) {
        err_msg[err_msg.length] = "期間が12ヶ月以上の分割はできません。";
        err_flg = true;
    }

    if(diffDay == 1) {
        err_msg[err_msg.length] = "期間が1ヶ月での分割はできません。";
        err_flg = true;
    }
    
    if((sYear1 + sMonth1) > (sYear2 + sMonth2) && err_msg.length == 0) {
        err_msg[err_msg.length] = "開始日欄より終了日欄の方が大きい日付を入力してください。";
        err_flg = true;
    }

    if(err_flg == false) {
        set_sep_money_item(diffDay, sYear1, sMonth1);
        $("#input_sep_money_tbl").css("display", "");
    } else {
        for(var i=0;i<err_msg.length;i++) {
           $("#sep_err_blk ul").append("<li class='red'>" + err_msg[i] + "</li>"); 
        }
        init_sep_month();
        $("#input_sep_money_tbl").css("display", "none");
    }
    

}

function set_sep_money_item(distance, year, month) {
    
    // テーブル取得
    $tbl = $("#input_sep_money_tbl table.inp_sep_money_c_tbl");
    
    // 初期化
    $tbl.find("tr,th,td").each(function() { $(this).css("display", "") });
    
    // 必要な分だけTHとTDの表示を切り替える
    if(distance <= 6) {
        // 2行目の以降のTRを非表示
        $tbl.find("tr.row_sep,tr.row_2_title,tr.row_2_item").each(function() { $(this).css("display", "none") });
    }
    
    // 1行目のTH,TD分Loop
    for(var i=1; i<=12 ;i++) {
        
        dt = computeMonth(parseInt(year), parseInt(month), (i-1));
        dispmonth = "0" + (dt.getMonth() + 1);
        dispmonth = dispmonth.substr(dispmonth.length - 2);
        
        $tbl.find("#month_" + i + "_lbl").text(dt.getFullYear() + "/" + dispmonth);
        $tbl.find("#sep_money_td" + i + " input[type=hidden]").val(dt.getFullYear() + dispmonth);
        $tbl.find("#sep_disp_flg" + i).val("1");
        
        if(i > distance) {
            $tbl.find("#month_" + i + "_th").css("display", "none");
            $tbl.find("#sep_money_td" + i).css("display", "none");
            $tbl.find("#sep_tax_td" + i).css("display", "none");
            $tbl.find("#sep_disp_flg" + i).val("");
        }
    }
    cumpute_sep_money();
}
/***********************************************************
 * 分割金額入力後の合計金額計算
 ***********************************************************/
function cumpute_sep_money() {

    var money = 0;
    $tbl = $("#input_sep_money_tbl table.inp_sep_money_c_tbl");
    
    $tbl.find("[name='sep_money[]']").each(function() { money = calc_sum_money($(this).val(), money);  });
    $("#sep_inp_money_lbl").text((money == 0) ? "" : sep_money(money));
    $("#sep_inp_money_hd").val((money == 0) ? "" : sep_money(money));
}
/***********************************************************
 * 分割金額の初期化
 ***********************************************************/
function init_sep_month() {
    
    $tbl = $("#input_sep_money_tbl table.inp_sep_money_c_tbl");
    
    $tbl.find("[name='sep_money[]']").each(function() { if( $(this).is(':disabled') == false ) {$(this).val("")} });
    $tbl.find("[name='sep_tax_type[]']").each(function() { if( $(this).is(':disabled') == false ) {this.selectedIndex= 0;} });
    
    $("#sep_inp_money_lbl").text("");
    $("#sep_inp_money_hd").val("");
}

/***********************************************************
 * 前受税率の自動設定
 ***********************************************************/
function set_sep_tax_type(iMonth) {

    $tbl = $("#input_sep_money_tbl table.inp_sep_money_c_tbl");
    
    var iCnt = 1;
    $tbl.find("[name='sep_tax_type[]']").each(
                function() { 
                    if(iMonth == iCnt) {
                        value = $(this).val();
                    } 
                    
                    if(iMonth <= iCnt) {
                        $(this).val(value);
                    }
                    iCnt ++;
              });
}
function submit_before() {
    
    if(confirm('登録してよろしいですか？')  == true) {
        
        // disabled解除
        $('input,select').attr("disabled", false);
        
        return true;
    } else {
        return false;
    }
    
}