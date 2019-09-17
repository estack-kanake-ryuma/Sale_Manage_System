/***********************************************************
 * 複製ボタン押下時の処理
 ***********************************************************/
function copy_data(id) {

    var url = "/bill/sales_input/copy/?id=" + id;
    document.location = url;
}

/***********************************************************
 * 削除ボタン押下時の処理
 ***********************************************************/
function sales_del_data(id, data_type, date) {

    var url = "/bill/sales_list/delete/?id=" + id + "&date=" + date;

    if (data_type == '2') {
        if (confirm('請求書も削除します。よろしいですか？')) {
            document.location = url;
        }
    } else {
        if (confirm('削除します。よろしいですか？')) {
            document.location = url;
        }
    }
}

/***********************************************************
 * 変更ボタン押下時の処理
 ***********************************************************/
function before_upd_data(id) {

    var win = window.open('/other/before_input_other?id=' + id, 'detail', 'width=1000, height=500, menubar=no, toolbar=no, scrollbars=yes, resizable=yes');
    if (win !== undefined) {
        win.focus()
    }
}

// ToolTipの表示
var detail_window = function () {
    var id = 'tt';
    var top = 3;
    var left = 3;
    var maxw = 900;
    var speed = 10;
    var timer = 5;
    var endalpha = 95;
    var alpha = 0;
    var tt, t, c, b, h;
    var ie = document.all ? true : false;
    return {
        show: function (v, w) {
            if (tt == null) {
                tt = document.createElement('div');
                tt.setAttribute('id', id);
                t = document.createElement('div');
                t.setAttribute('id', id + 'top');
                c = document.createElement('div');
                c.setAttribute('id', id + 'cont');
                b = document.createElement('div');
                b.setAttribute('id', id + 'bot');
                tt.appendChild(t);
                tt.appendChild(c);
                tt.appendChild(b);
                document.body.appendChild(tt);
                tt.style.opacity = 0;
                tt.style.filter = 'alpha(opacity=0)';
                document.onmousemove = this.pos;
            }
            tt.style.display = 'block';
            c.innerHTML = v;
            tt.style.width = w ? w + 'px' : 'auto';
            if (!w && ie) {
                t.style.display = 'none';
                b.style.display = 'none';
                tt.style.width = tt.offsetWidth;
                t.style.display = 'block';
                b.style.display = 'block';
            }
            if (tt.offsetWidth > maxw) {
                tt.style.width = maxw + 'px'
            }
            h = parseInt(tt.offsetHeight) + top;
            clearInterval(tt.timer);
            tt.timer = setInterval(function () {
                detail_window.fade(1)
            }, timer);
        },
        pos: function (e) {
            var u = ie ? event.clientY + document.documentElement.scrollTop : e.pageY;
            var l = ie ? event.clientX + document.documentElement.scrollLeft : e.pageX;
            tt.style.top = (u - h) + 'px';
            tt.style.left = (l + left) + 'px';
        },
        fade: function (d) {
            var a = alpha;
            if ((a != endalpha && d == 1) || (a != 0 && d == -1)) {
                var iCnt = speed;
                if (endalpha - a < speed && d == 1) {
                    iCnt = endalpha - a;
                } else if (alpha < speed && d == -1) {
                    iCnt = a;
                }
                alpha = a + (iCnt * d);
                tt.style.opacity = alpha * .01;
                tt.style.filter = 'alpha(opacity=' + alpha + ')';
            } else {
                clearInterval(tt.timer);
                if (d == -1) {
                    tt.style.display = 'none'
                }
            }
        },
        hide: function () {
            if (tt !== undefined) {
//                clearInterval(tt.timer);
//                tt.timer = setInterval(function() { tooltip.fade(-1) }, timer);
                tt.style.display = 'none';
            }
        }
    };
}();

