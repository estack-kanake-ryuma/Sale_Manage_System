var _init = false;
/***********************************************************
 *
 * 得意先情報の初期化
 *
 ***********************************************************/
function initCustomerInfo() {
    var oNewTbl = document.getElementById('new_customer_tbl');
    var oExistTbl = document.getElementById('exist_customer_tbl');
    
    oNewTbl.style.display = "none";
    oExistTbl.style.display = "none";
    
}
/***********************************************************
 *
 * 得意先情報取得後、表示
 *
 ***********************************************************/
function dispCustomerInfo(obj) {

    if (obj._oldValue == undefined) return;
    if(obj.value == obj._oldValue) return;
    obj._oldValue = obj.value;

    $("#customer_id").val("");
    
    if(obj.value == "") {
       $("#new_customer_tbl span").text("得意先を入力してください。");
       return;
    } 

    $.ajax(get_param_customer(obj.value));
    
}
function set_customer(res) {
    
    if(res.length == 0) {
        $("#exist_customer_tbl").css('display', 'none');
        
        $("#new_customer_tbl").css('display', '');
        $("#new_customer_tbl span").text("新しい得意先が入力されました。");
        
        //set_bill_date_ctrl("");

    } else {
        $("#customer_id").val(res[0].id);
        $("#credit_type").val(res[0].credit_type);
        $("#customer_type").val(res[0].customer_type);
        $("#cutoff_date").val(res[0].cutoff_date);
        
        $("#cutoff_date_lbl").text(res[0].cutoff_date_str);
        $("#customer_type_lbl").text(res[0].customer_type_name);
        $("#print_type_lbl").text(res[0].card_print_type);
        $("#credit_type_lbl").text(res[0].credit_type_name);
        
        $("#exist_customer_tbl").css('display', '');
        $("#new_customer_tbl").css('display', 'none');
    }
    
    set_bill_date_ctrl();
    set_book_date_ctrl();
    dispSepMonth($("#credit_type")[0]);
    
}

function set_handler(res) {
    
    if(res.length != 0) {
        
        $("#handler_id").val(res[0].handler_id);
        
        $("#institute_id").val(res[0].institute_id + "," + res[0].institute_name);
        $("#depart_id").val(res[0].depart_id + "," + res[0].depart_name);
        
    }
    
}

function set_goods(res, $obj) {
    
    if(res == null) return;
    
    if(res.length != 0) {
        
        $tr = $obj.parent().parent();
        
        $unit = $tr.find("[name='unit[]']");
        $tax_type = $tr.find("[name='tax_type[]']");
        
        var $tax = $tr.find("[name='tax[]']");
        if(res[0].tax_type == "2") {

            $tax.addClass("disabled");
            $tax.val("");
            $tax.attr("disabled", "disabled");
            
        } else {
            $tax.removeClass("disabled");
            $tax.removeAttr("disabled");
            
        }
        
        $unit.val(res[0].unit);
        $tax_type.val(res[0].tax_type);
        
    }
    
}

/***********************************************************
 *
 * 売上情報入力のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    $( "#customer_disp_name" ).autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/customer_list", req, resp));
                    },
                    minLength:1

    });
    $( ".goods_ap" ).autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/goods_list", req, resp));
                    },
                    minLength:1
    });
    $( ".unit_memo_ap" ).autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/memo_list", req, resp));
                    },
                    minLength:1
    });
    $( "#sales_memo" ).autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/memo_list", req, resp));
                    },
                    minLength:1
    });
    $("#handler_name").autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/handler_list", req, resp));
                    },
                    minLength:1
    });
    
    $(function(){ 
        _init = true;
        $("#sales_detail_tbl").find("td.basic_no").each(function()
            {
              ctrl_tax_type($(this));
        });
        $("#sep_depart_tbl").find("td.basic_no").each(function()
            {
              ctrl_depart_tax_type($(this));
        });
        
        sales_tbl_money(); 
        depart_sales_tbl_money();
        dispSepMonth($("#credit_type")[0]);
        disp_sep_month_inp();
        cumpute_sep_money();
        dispSepDepart();
        //dispCustomerInfo($("#customer_disp_name")[0]);
        _init = false;
    })
    
    /* 分割金額合計計算処理設定 */
    $("[name='sep_money[]']").live("blur", function() { cumpute_sep_money(); });
    $("[name='goods_name[]']").live("blur", function() { set_goods_info(this); });
    
});

function get_param_customer(val) {
    
    return {
            url: "/util/ajax/customer_info"
            , scriptCharset: 'utf-8'
            , type: "POST"
            , cache: false
            , dataType: "json"
            , data: {name: val}
            , success: function(res){
                set_customer(res);
            } 
        };
}
function get_param_handler(val) {

    return {
            url: "/util/ajax/handler_info"
            , scriptCharset: 'utf-8'
            , type: "POST"
            , cache: false
            , dataType: "json"
            , data: {name: val}
            , success: function(res){
                set_handler(res);
            } 
        };
}

function get_param_goods($obj) {
    
    return {
            url: "/util/ajax/goods_info"
            , scriptCharset: 'utf-8'
            , type: "POST"
            , cache: false
            , dataType: "json"
            , data: {name: $obj.val()}
            , success: function(res){
                set_goods(res, $obj);
            } 
        };
    
    

}
function addSepDepart() {

    $tbl = $("#sep_depart_tbl");
    
    $tr = $tbl.find("tr:last").prev().clone(false);
    
    // 追加する行の値を初期化
    $tr.find("input:text, select").each(function() { $(this).val(""); $(this).removeAttr("disabled"); $(this).removeClass("disabled"); });
    $tr.find("td").each(function() { $(this).attr("id", ""); $(this).removeClass("err_back"); });

    $tr.find("[name='depart_no_tax_money[]']")[0]._oldValue = "";
    $tr.find("[name='depart_in_tax_money[]']")[0]._oldValue = "";

    // 行追加
    $tbl.find("tbody tr:last").before($tr);
    
    $tbl.find("tr:last").prev()[0].cells[0].innerHTML = parseInt($tbl.find("tr:last").prev()[0].cells[0].innerHTML) + 1;
    
    // ボタン名変更
    $tbl.find("input:button").each(function(index) { 
        
            if(index != 0) {
                $(this)[0].value="削除"; 
            }
            
        });


}
function delSepDepart(obj) {
    
    tbl = document.getElementById('sep_depart_tbl');
    tr = obj.parentNode.parentNode;
    
    if (tbl.rows.length == 4) {
        // 対象の行の値をクリアする
        $(tr).find("input:text, select").each(function() { $(this).val("");$(this).removeAttr("disabled"); $(this).removeClass("disabled"); });
    } else {
        // 対象の行を削除
        tbl.deleteRow(tr.rowIndex);
        
        // Noを再設定
        $td_no = $(tbl).find("td.basic_no");
        $td_no.each(function(index) { $(this).html((index +1)); });
        
        if($td_no.length == 2) {
            $(tbl).find("input:button").each(function(index) { if(index != 0) { $(this)[0].value="クリア"; } });
        }
        
    }
    
    depart_sales_tbl_money();
    
}
/***********************************************************
 *
 * 明細追加ボタンクリック時
 *
 ***********************************************************/
function addSalesDetail() {

    $tbl = $("#sales_detail_tbl");
    
    // trの最終行を取得
    $tr = $tbl.find("tr:last").prev().clone(false);
    $tr_memo = $tbl.find("tr:last").clone(false);
    
    // 追加する行の値を初期化
    $tr.find("input:text, select").each(function() { $(this).val(""); $(this).removeAttr("disabled"); $(this).removeClass("disabled"); });
    $tr.find("span").each(function() { $(this).text(""); });
    $tr.find("td").each(function() { $(this).attr("id", ""); $(this).removeClass("err_back"); });
    
    // 商品オートコンプリート再設定
    $tr.find("input.goods_ap").remove();
    $($tr.children()[2]).append('<input name="goods_name[]" type="text" value="" style="width: 230px;" class="goods_ap" />');
    $tr.find("input.goods_ap").autocomplete({source: function(req, resp) {$.ajax(get_param_ap("/util/ajax/goods_list", req, resp));},minLength:1});
    $tr.find("[name='no_tax_money[]']")[0]._oldValue = "";
    $tr.find("[name='in_tax_money[]']")[0]._oldValue = "";
    $tr.find("[name='cnt[]']")[0]._oldValue = "";
    $tr.find("[name='unit_price[]']")[0]._oldValue = "";

    
    // メモオートコンプリート再設定
    $tr_memo.find("textarea.unit_memo_ap").remove();
    $($tr_memo.children()[0]).append('<textarea name="unit_memo[]" rows="2" class="unit_memo_ap"></textarea>');
    $tr_memo.find("textarea.unit_memo_ap").autocomplete({source: function(req, resp) {$.ajax(get_param_ap("/util/ajax/memo_list", req, resp));},minLength:1});
    
    // 行追加
    $tbl.find("tbody").append($tr);
    $tbl.find("tbody").append($tr_memo);
    
    $tbl.find("tr:last").prev()[0].cells[0].innerHTML = parseInt($tbl.find("tr:last").prev()[0].cells[0].innerHTML) + 1;
    
    // ボタン名変更
    $tbl.find("input:button").each(function() { $(this)[0].value="削除"; });
    
}
/***********************************************************
 *
 * 明細削除ボタンクリック時
 *
 ***********************************************************/
function delSalesDetail(obj) {
    
    tbl = document.getElementById('sales_detail_tbl');
    tr = obj.parentNode.parentNode;
    
    if (tbl.rows.length == 3) {
        // 対象の行の値をクリアする
        $(tr).find("input:text, select").each(function() { $(this).val("");$(this).removeAttr("disabled"); $(this).removeClass("disabled"); });
        $(tr).find("span").each(function() { $(this).text(""); });
        $(tbl.rows[tr.rowIndex + 1]).find("textarea").each(function() { $(this).val(""); });
    } else {
        // 対象の行を削除
        tbl.deleteRow(tr.rowIndex + 1);
        tbl.deleteRow(tr.rowIndex);
        
        // Noを再設定
        $td_no = $(tbl).find("td.basic_no");
        $td_no.each(function(index) { $(this).html((index +1)); });
        
        if($td_no.length == 1) {
            $(tbl).find("input:button")[0].value = "クリア";
        }
    }
    
    sales_tbl_money();
    
}
/***********************************************************
 * 売上分割設定枠の表示、非表示の制御
 ***********************************************************/
function dispSepMonth(obj) {
    
    tbl1 = document.getElementById('sep_month_p_tbl');
    tbl2 = document.getElementById('sep_month_warn_tbl');
    
    if(obj.value == "3") {
        tbl1.style.display = "";
        tbl2.style.display = "none";
    } else {
        tbl1.style.display = "none";
        $(tbl1).find("input:text").each(function() { $(this).val(""); });
        tbl2.style.display = "";
    }
    
}
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
    $tbl.find("[name='sep_money[]']").each(function() { $(this).removeAttr("disabled") });
    $tbl.find("[name='sep_tax_type[]']").each(function() { $(this).removeAttr("disabled") });
    $tbl.find("[name='sep_money[]']").each(function() { $(this).removeClass("disabled") });
    $tbl.find("[name='sep_tax_type[]']").each(function() { $(this).removeClass("disabled") });
    
    // 必要な分だけTHとTDの表示を切り替える
    if(distance <= 6) {
        // 2行目の以降のTRを非表示
        $tbl.find("tr.row_sep,tr.row_2_title,tr.row_2_item").each(function() { $(this).css("display", "none") });
    }
    
    var auto_sep = replaceAll($("#sep_money_hd").val(), ",", "");
    
    if(auto_sep != "") {
        auto_sep = parseInt(auto_sep) / parseInt(distance);
        auto_sep = Math.round(auto_sep);
    }
    
    // 1行目のTH,TD分Loop
    // month_1_th
    flg = true;
    for(var i=1; i<=12 ;i++) {
        
        dt = computeMonth(parseInt(year, 10), parseInt(month, 10), (i-1));
        
        
        dispmonth = "0" + (dt.getMonth() + 1);
        dispmonth = dispmonth.substr(dispmonth.length - 2);
        
        $tbl.find("#month_" + i + "_lbl").text(dt.getFullYear() + "/" + dispmonth);
        $tbl.find("#sep_money_td" + i + " input[type=hidden]").val(dt.getFullYear() + dispmonth);
        
        if($tbl.find("#sep_money_td" + i).find("[name='sep_money[]']").val() != "") {
            flg = false;
        }
        
        if(i > distance) {
            $tbl.find("#month_" + i + "_th").css("display", "none");
            $tbl.find("#sep_money_td" + i).css("display", "none");
            $tbl.find("#sep_tax_td" + i).css("display", "none");
            $tbl.find("#sep_money_td" + i).find("[name='sep_money[]']").each(function() { $(this).val("");$(this).attr("disabled", "disabled"); });
            $tbl.find("#sep_tax_td" + i).find("[name='sep_tax_type[]']").each(function() { $(this).val(0);$(this).attr("disabled", "disabled"); });
        }
    }
    
    if(_init == false) {
        var sum_auto_sep = 0;
        var $obj;
        if(flg == true) {
            $("[name='sep_money[]']").each(function() {
                if($(this).attr("disabled") != "disabled") {
                    $(this).val(sep_money(auto_sep));
                    sum_auto_sep += auto_sep;
                    $obj = $(this);
                }
            });
        }
        
        if(sum_auto_sep > 0) {
            sum_money = replaceAll($("#sep_money_hd").val(), ",", "");
            diff = sum_money - sum_auto_sep;
            last_money = auto_sep + diff;
            $obj.val(sep_money(last_money));
        }
        
    }
    
//        if(_init == false) {
//            
//            if($tbl.find("#sep_money_td" + i).find("[name='sep_money[]']").val() == "") {
//                $tbl.find("#sep_money_td" + i).find("[name='sep_money[]']").val(auto_sep);
//            }
//            
//        }

    
    
    
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
    
    $tbl.find("[name='sep_money[]']").each(function() { $(this).val("") });
    $tbl.find("[name='sep_tax_type[]']").each(function() { this.selectedIndex= 0; });
    
    $("#sep_inp_money_lbl").text("");
    $("#sep_inp_money_hd").val("");
}
/***********************************************************
 * 請求日欄のコントロール
 ***********************************************************/
function set_bill_date_ctrl() {
    
    $cutoff_date = $("#cutoff_date");
    $bill = $("#bill_date");
    
    if($cutoff_date.val() == "") {
        $bill.val("");
    } else {
        kyou = new Date();
        yy = kyou.getFullYear();
        mm = kyou.getMonth() + 1;
        dd = $cutoff_date.val();
        if(dd.toString() == "31") {
            dd = new Date(yy.toString(), mm.toString(), 0).getDate();
        }
        
        ddKyou = kyou.getDate();
        if(ddKyou.toString().length == 1) {
            ddKyou = "0" + ddKyou;
        }
        
        if(mm.toString().length == 1) {
            mm = "0" + mm;
        }
        
        if(dd.toString().length == 1) {
            dd = "0" + dd;
        }
        
        sKyou = yy + "/" + mm + "/" + ddKyou;
        cutoff  = yy + "/" + mm + "/" + dd;
        if(sKyou > cutoff) {
            kyou.setDate(dd);
            kyou.setMonth(kyou.getMonth() + 1 );
            yy = kyou.getFullYear();
            mm = kyou.getMonth() + 1;
            dd = $cutoff_date.val();
            if(mm.toString().length == 1) mm = "0" + mm;
            if(dd.length == 1) dd = "0" + dd;
            
        }
        
        $bill.val(yy + "/" + mm + "/" + dd);
        
    }

}

/***********************************************************
 * 売上計上日欄のコントロール
 ***********************************************************/
function set_book_date_ctrl() {
    
    $credit = $("#credit_type");
    $book = $("#book_date");
    
    if($credit.val() == "3") {
        $book.val("");
        $book.attr("disabled", "disabled");
        $book.addClass('disabled');
        $("#book_date_required_lbl").css("display", "none");
        
        $("#chk_bill_sep").attr("checked", false);
        $("#chk_bill_sep").attr("disabled", true);
        $("#sep_depart_warn_tbl").css("display", "");
        $("#sep_depart_tbl").css("display", "none");
        
    } else {
        $book.removeAttr("disabled");
        $book.removeClass('disabled');
        $("#book_date_required_lbl").css("display", "");
        $("#chk_bill_sep").attr("disabled", false);
    }
    
}

/***********************************************************
 * 税区分制御処理
 **********************************************************/
function ctrl_tax_type(obj) {

    var $tr;
    (obj instanceof jQuery ) ? $tr = obj.closest("tr") : $tr = $(obj.parentNode.parentNode);

    var $tax = $tr.find("[name='tax[]']");
    var $tax_type = $tr.find("[name='tax_type[]']");
    var $no_tax = $tr.find("[name='no_tax_money[]']");
    var $in_tax = $tr.find("[name='in_tax_money[]']");
    var $cnt = $tr.find("[name='cnt[]']");
    var $unit_price = $tr.find("[name='unit_price[]']");
    
    // 初期化
    $no_tax.removeAttr("disabled");
    $no_tax.removeClass('disabled');
    $in_tax.removeAttr("disabled");
    $in_tax.removeClass('disabled');
    $tax.removeAttr("disabled");
    $tax.removeClass('disabled');
    
    if($cnt.val() != "" && $unit_price.val() != "") {
        $no_tax.addClass('disabled');
        $no_tax.attr("disabled", true);
        $in_tax.addClass('disabled');
        $in_tax.attr("disabled", true);
        
    }
    
    if($tax_type.children(':selected').text().indexOf("非課税") > -1) {
        
        $tax.val("");
        $tax.addClass('disabled');
        $tax.attr("disabled", true);
        
    } else if($tax_type.children(':selected').text().indexOf("税込") > -1) {

        $no_tax.addClass('disabled');
        $no_tax.attr("disabled", true);
        
    } else if($tax_type.children(':selected').text().indexOf("課税") > -1) {

        $in_tax.addClass('disabled');
        $in_tax.attr("disabled", true);
        
    }
    
}

/***********************************************************
 * 税区分制御処理
 **********************************************************/
function ctrl_depart_tax_type(obj) {

    var $tr;
    (obj instanceof jQuery ) ? $tr = obj.closest("tr") : $tr = $(obj.parentNode.parentNode);

    var $tax = $tr.find("[name='depart_tax[]']");
    var $tax_type = $tr.find("[name='depart_tax_type[]']");
    var $no_tax = $tr.find("[name='depart_no_tax_money[]']");
    var $in_tax = $tr.find("[name='depart_in_tax_money[]']");
    
    // 初期化
    $no_tax.removeAttr("disabled");
    $no_tax.removeClass('disabled');
    $in_tax.removeAttr("disabled");
    $in_tax.removeClass('disabled');
    $tax.removeAttr("disabled");
    $tax.removeClass('disabled');
    
    if($tax_type.children(':selected').text().indexOf("非課税") > -1) {
        
        $tax.val("");
        $tax.addClass('disabled');
        $tax.attr("disabled", true);
        
    } else if($tax_type.children(':selected').text().indexOf("税込") > -1) {

        $no_tax.addClass('disabled');
        $no_tax.attr("disabled", true);
        
    } else if($tax_type.children(':selected').text().indexOf("課税") > -1) {

        $in_tax.addClass('disabled');
        $in_tax.attr("disabled", true);
        
    }
    
}

function change_sales_money(obj) {
    
    if (obj._oldValue == undefined) return;
    
    if(obj.value == obj._oldValue) return;
    
    obj._oldValue = obj.value;
    
    calc_sales_money(obj);
}

function change_depart_money(obj) {

    if (obj._oldValue == undefined) return;
    
    if(obj.value == obj._oldValue) return;
    
    obj._oldValue = obj.value;
    
    calc_depart_money(obj);

}

/***********************************************************
 * 金額自動計算処理
 **********************************************************/
function calc_depart_money(obj) {
    
    var $tr;
    (obj instanceof jQuery ) ? $tr = obj.closest("tr") : $tr = $(obj.parentNode.parentNode);
    
    var $tax_type = $tr.find("[name='depart_tax_type[]']");
    var $tax = $tr.find("[name='depart_tax[]']");
    var $no_tax = $tr.find("[name='depart_no_tax_money[]']");
    var $in_tax = $tr.find("[name='depart_in_tax_money[]']");
    
    if($tax_type.val() == "") {
        depart_sales_tbl_money();
        return;
    } 

    calc_add_sub($tax_type, $tax, $no_tax, $in_tax);
    
    depart_sales_tbl_money();
}

/***********************************************************
 * 金額自動計算処理
 **********************************************************/
function calc_sales_money(obj) {

    var $tr;
    (obj instanceof jQuery ) ? $tr = obj.closest("tr") : $tr = $(obj.parentNode.parentNode);

    var $tax_type = $tr.find("[name='tax_type[]']");
    var $tax = $tr.find("[name='tax[]']");
    var $no_tax = $tr.find("[name='no_tax_money[]']");
    var $in_tax = $tr.find("[name='in_tax_money[]']");
    var $cnt = $tr.find("[name='cnt[]']");
    var $unit_price = $tr.find("[name='unit_price[]']");

    if($tax_type.val() == "") return;

    // 数量、単価、税区分が全て入っていた場合、金額を上書きする
    if($cnt.val() != "" && $unit_price.val() != "") {
        calc_multi($tax_type, $cnt, $unit_price, $tax, $no_tax, $in_tax);
    } else {
        calc_add_sub($tax_type, $tax, $no_tax, $in_tax);
    }
    
    sales_tbl_money();


}
/***********************************************************
 * 数量、単価、税区分全て入っていた時の計算
 * ※ 計算結果は四捨五入
 ***********************************************************/
function calc_multi($tax_type, $cnt, $unit_price, $tax, $no_tax, $in_tax) {
    
    var res = calc_multiple($cnt, $unit_price);
    res = sep_money(res);
    
    if($tax_type.children(':selected').text().indexOf("課税") > -1) {
        $no_tax.val(res);
        set_tax($tax_type, $no_tax, $tax);
        calc_in_tax($no_tax, $tax, $in_tax);
        
    } else if($tax_type.children(':selected').text().indexOf("税込") > -1) {
        $in_tax.val(res);
        set_tax($tax_type, $in_tax, $tax);
        calc_no_tax($no_tax, $tax, $in_tax);
        
    }

}

function calc_add_sub($tax_type, $tax, $no_tax, $in_tax) {
    
    if($tax_type.children(':selected').text().indexOf("課税") > -1) {
        
        if($no_tax.val() == "") {
            $in_tax.val("");
            $tax.val("");
            return;
        } 
        set_tax($tax_type, $no_tax, $tax);
        calc_in_tax($no_tax, $tax, $in_tax);

    } else if($tax_type.children(':selected').text().indexOf("税込") > -1) {

        if($in_tax.val() == "") {
            $no_tax.val("");
            $tax.val("");
            return;
        } 
        set_tax($tax_type, $in_tax, $tax);
        calc_no_tax($no_tax, $tax, $in_tax);
        
    }
    
}

function calc_sales_tax(obj) {
    
    var $tr;
    (obj instanceof jQuery ) ? $tr = obj.closest("tr") : $tr = $(obj.parentNode.parentNode);
    
    var $tax = $tr.find("[name='tax[]']");
    var $no_tax = $tr.find("[name='no_tax_money[]']");
    var $in_tax = $tr.find("[name='in_tax_money[]']");
    
    calc_input_tax($no_tax, $tax, $in_tax);
    
    sales_tbl_money();
}

function calc_depart_tax(obj) {
    
    var $tr;
    (obj instanceof jQuery ) ? $tr = obj.closest("tr") : $tr = $(obj.parentNode.parentNode);
    
    var $tax = $tr.find("[name='depart_tax[]']");
    var $no_tax = $tr.find("[name='depart_no_tax_money[]']");
    var $in_tax = $tr.find("[name='depart_in_tax_money[]']");
    
    calc_input_tax($no_tax, $tax, $in_tax);
    
    depart_sales_tbl_money();
    
}

/***********************************************************
 * 消費税の計算
 ***********************************************************/
/* 消費税を手で入れた時の計算処理 */
function calc_input_tax($no_tax, $tax, $in_tax) {

    var no_tax =  replaceAll($no_tax.val(), ",", "");
    var tax =  replaceAll($tax.val(), ",", "");
    
    if(!check_num(no_tax)) no_tax = "";
    if(!check_num(tax)) tax = "";
    
    if(no_tax == "") no_tax = 0;
    if(tax == "") tax = 0;
    
    var res = parseInt(no_tax) + parseInt(tax);
    res = sep_money(res);
    (res == 0) ? $in_tax.val("") : $in_tax.val(res);

}

function set_tax($tax_type, $money, $tax) {
    
    var res = calc_tax($money.val(), $tax_type);
    
    if(res == "") res = 0;
    res = sep_money(res);
    (res == 0) ? $tax.val("") : $tax.val(res);
    
}

function calc_in_tax($no_tax, $tax, $in_tax) {
    
    var no_tax =  replaceAll($no_tax.val(), ",", "");
    var tax =  replaceAll($tax.val(), ",", "");
    
    if(!check_num(no_tax)) no_tax = "";
    if(!check_num(tax)) tax = "";
    
    if(no_tax == "") no_tax = 0;
    if(tax == "") tax = 0;
    
    var res = parseInt(no_tax) + parseInt(tax);
    res = sep_money(res);
    (res == 0) ? $in_tax.val("") : $in_tax.val(res);
    
}

function calc_no_tax($no_tax, $tax, $in_tax) {
    
    var in_tax =  replaceAll($in_tax.val(), ",", "");
    var tax =  replaceAll($tax.val(), ",", "");
    
    if(!check_num(in_tax)) in_tax = "";
    if(!check_num(tax)) tax = "";
    
    if(in_tax == "") in_tax = 0;
    if(tax == "") tax = 0;
    
    var res = parseInt(in_tax) - parseInt(tax);
    res = sep_money(res);
    (res == 0) ? $no_tax.val("") : $no_tax.val(res);
    
}

/***********************************************************
 * 部門別売上情報テーブル合計金額の計算
 ***********************************************************/
function depart_sales_tbl_money() {
 
    if(!$('#chk_bill_sep').is(':checked')) return;
 
    $tbl = $("#sep_depart_tbl");
    
    var money = 0;
    var tax = 0;
    var in_tax = 0;
    $tbl.find("[name='depart_no_tax_money[]']").each(function() { money = calc_sum_money($(this).val(), money);  });
    $tbl.find("[name='depart_tax[]']").each(function() { tax = calc_sum_money($(this).val(), tax);  });
    $tbl.find("[name='depart_in_tax_money[]']").each(function() { in_tax = calc_sum_money($(this).val(), in_tax);  });
    
    $("#depart_no_tax_total").text((money == 0) ? "" : sep_money(money));
    $("#depart_tax_total").text((tax == 0) ? "" : sep_money(tax));
    $("#depart_in_tax_total").text((in_tax == 0) ? "" : sep_money(in_tax));
 
    $("#hf_depart_in_tax_total").val(in_tax);
 
}
/***********************************************************
 * 売上情報テーブル合計金額の計算
 ***********************************************************/
function sales_tbl_money() {
    
    $tbl = $("#sales_detail_tbl");
    
    var money = 0;
    var tax = 0;
    $tbl.find("[name='no_tax_money[]']").each(function() { money = calc_sum_money($(this).val(), money);  });
    $tbl.find("[name='tax[]']").each(function() { tax = calc_sum_money($(this).val(), tax);  });
    
    $("#no_tax_total_lbl").text((money == 0) ? "" : sep_money(money));
    $("#tax_total_lbl").text((tax == 0) ? "" : sep_money(tax));
    $("#all_total_money_lbl").text((money + tax == 0) ? "" : sep_money(money + tax));

    $("#sum_no_tax").val(money);
    $("#sum_tax").val(tax);
    $("#sum_money").val(money + tax);
    
    $("#sep_money_lbl").text($("#all_total_money_lbl").text())
    $("#sep_money_hd").val($("#all_total_money_lbl").text())

}

/***********************************************************
 * 担当者情報の設定
 ***********************************************************/
function set_handler_info(obj) {
    
    if($('#chk_bill_sep').is(':checked')) return;
    
    if (obj._oldValue == undefined) return;
    if(obj.value == obj._oldValue) return;
    obj._oldValue = obj.value;
    
    $("#handler_id").val("");

    $.ajax(get_param_handler(obj.value));
    
}
/***********************************************************
 * 商品情報の設定
 ***********************************************************/
function set_goods_info(obj) {

    if (obj._oldValue == undefined) return;
    if(obj.value == obj._oldValue) return;
    obj._oldValue = obj.value;

    $.ajax(get_param_goods($(obj)));
    
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

/***********************************************************
 * 得意先マスタwindow表示
 ***********************************************************/
function open_customer() {
    
    var win = window.open('/mainte/customer_input?win_type=win', 'win_customer', 'width=920, height=880, menubar=no, toolbar=no, scrollbars=yes, resizable=yes');

    if (win !== undefined) {
        win.focus()
    }
}

/***********************************************************
 * 請求書チェック処理
 ***********************************************************/
function chk_bill() {
    
    if(confirm('既に請求書が存在します。削除してもよろしいですか？')) {
        $("#bill_ok").val("1");
        init_disabled();
        document.regist_form.submit();
    }
}

function init_disabled() {
    
   $("[name='tax[]'],[name='no_tax_money[]'],[name='in_tax_money[]'],[name='depart_tax[]'],[name='depart_no_tax_money[]'],[name='depart_in_tax_money[]']").attr("disabled", false);
}

/***********************************************************
 * 部門売上分割設定枠の表示、非表示の制御
 ***********************************************************/
function dispSepDepart() {
    
    tbl1 = document.getElementById('sep_depart_tbl');
    tbl2 = document.getElementById('sep_depart_warn_tbl');
    
     if($('#chk_bill_sep').is(':checked')) {
        $("#institute_id").attr("disabled", true);
        $("#depart_id").attr("disabled", true);
        $("#spn_require_institute").css("display", "none");
        $("#spn_require_depart").css("display", "none");
        
        $("#institute_id").val("");
        $("#depart_id").val("");
        $("#institute_id").addClass('disabled');
        $("#depart_id").addClass('disabled');
        
        $("#institute_id_td p").remove();
        $("#depart_id_td p").remove();
        $("#institute_id_td").removeClass("err_back");
        $("#depart_id_td").removeClass("err_back");
        
        tbl1.style.display = "";
        tbl2.style.display = "none";
    } else {
        $("#institute_id").removeAttr("disabled");
        $("#depart_id").removeAttr("disabled");
        $("#institute_id").removeClass('disabled');
        $("#depart_id").removeClass('disabled');        
        $("#spn_require_institute").css("display", "");
        $("#spn_require_depart").css("display", "");
        
        $("#depart_blk p").remove();
        $("#depart_blk td").removeClass("err_back");
        
        tbl1.style.display = "none";
        $(tbl1).find("input:text, select").each(function() { $(this).val(""); $(this).removeAttr("disabled"); $(this).removeClass("disabled"); });
        $(tbl1).find("span").each(function() { $(this).text(""); });
        tbl2.style.display = "";
    }
    
}



