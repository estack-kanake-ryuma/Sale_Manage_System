/***********************************************************
 *
 * 得意先元帳のみのjQuery関数
 *
 ***********************************************************/
jQuery( function() {
    $( "#customer_disp_name" ).autocomplete({
                    source: function(req, resp) {
                        $.ajax(get_param_ap("/util/ajax/customer_tran_list", req, resp));
                    },
                    minLength:1
    });
    
    $('#master_file_print_tbl').tablefix({width: 800, height: 400, fixRows: 1});
    
});
