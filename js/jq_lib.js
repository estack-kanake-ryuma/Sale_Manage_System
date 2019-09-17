jQuery(function () {
    /* カレンダー表示 */
    $('.date').datepicker({
        showOn: 'button',
        buttonImage: '/js/jquery_ui/smoothness/images/calendar.gif',
        buttonImageOnly: true
    });

    $('.yearmonth').ympicker({
        showOn: 'button',
        buttonImage: '/js/jquery_ui/smoothness/images/calendar.gif',
        buttonImageOnly: true
    });

    /* 日付の入力桁自動設定 */
    $('.date').each(function () {
        $(this).attr('maxlength', '10');
    });

    /* 日付の入力桁自動設定 */
    $('.yearmonth').each(function () {
        $(this).attr('maxlength', '7');
    });

    /* 日付入力欄のFocusイベント */
    $(".date, .yearmonth").live("focus", function () {
        if ($(this).val() !== '') {
            $(this).val($(this).val().replace(/[/]/g, ""));
        }
    });

    /* 日付入力欄のBlurイベント */
    $(".date").live("blur", function () {
        $(this).val(chgCode($(this).val()));
        if ($(this).val() !== '' && $(this).val().length === 8 && ($(this).val().match(/[0-9]+/g) == $(this).val())) {
            $(this).val($(this).val().substring(0, 4) + "/" + $(this).val().substring(4, 6) + "/" + $(this).val().substring(6, 8));
        }
    });

    /* 日付入力欄のBlurイベント */
    $(".yearmonth").live("blur", function () {
        $(this).val(chgCode($(this).val()));
        if ($(this).val() !== '' && $(this).val().length === 6 && ($(this).val().match(/[0-9]+/g) == $(this).val())) {
            $(this).val($(this).val().substring(0, 4) + "/" + $(this).val().substring(4, 6));
        }
    });

    /* 日付の入力桁自動設定 */
    $('.time').each(function () {
        $(this).attr('maxlength', '5');
    });

    /* 日付入力欄のFocusイベント */
    $(".time").live("focus", function () {
        if ($(this).val() !== '') {
            $(this).val($(this).val().replace(/[:]/g, ""));
        }
    });

    /* 日付入力欄のBlurイベント */
    $(".time").live("blur", function () {
        $(this).val(chgCode($(this).val()));
        if ($(this).val() !== '' && $(this).val().length === 4 && ($(this).val().match(/[0-9]+/g) == $(this).val())) {
            $(this).val($(this).val().substring(0, 2) + ":" + $(this).val().substring(2, 4));
        }
    });

    /* 半角文字入力欄のBlurイベント */
    $(".half_str,.post_num,.tel_num").live("blur", function () {
        $(this).val(chgCode($(this).val()));
    });

    /* 自動エラー背景設定処理 */
    $('p.error').each(function () {
        var tdId = $(this).attr('errid');
        if (tdId === undefined) return;
        if (tdId !== '' && $('#' + tdId).hasClass('err_back') == false) {
            var list = tdId.split(" ");
            var i;
            for (i = 0; i < list.length; i++) {
                $('#' + list[i]).addClass('err_back');
            }
        }


    });

    /* 吹き出し表示 */
    $('.tooltip').tinyTips('light', 'title');

    /* 金額のカンマ区切り表示 */
    $('input.money').live("focus", function () {
        if ($(this).val() !== '') {
            $(this).val($(this).val().replace(/,/g, ""));
        }
    });

    /* 金額のカンマ区切り表示 */
    $('input.money').live("blur", function () {
        $(this).val(chgCode($(this).val()));
        if ($(this).val() !== '') {
            $(this).val(sep_money($(this).val()));
        }
    });

    /* ベーシックテーブルの偶数行に色をつける */
    $("table.basic_tbl tr:nth-child(odd)").css("background-color", "#FBF7EE");

    // disabledに背景色設定
    $("input").each(function () {
        if ($(this).attr("type") == "text") {
            if ($(this).attr("disabled") == "disabled") {
                $(this).addClass('disabled');
            } else {
                $(this).removeClass('disabled');
            }
        }
        this._oldValue = $(this).val();
    });
    $("select").each(function () {
        if ($(this).attr("disabled") == "disabled") {
            $(this).css('disabled');
        } else {
            $(this).removeClass('disabled');
        }
        this._oldValue = $(this).val();
    });
    $('input').live("blur", function () {
        rtrim = /^[\s\u00A0\u3000]+|[\s\u00A0\u3000]+$/g;
        $(this).val($(this).val().replace(rtrim, ""));
    });


});