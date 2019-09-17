<?php

// form_validationgが呼ばれた場合に$config配列を作成する
//$ci =& get_instance();
//$ci->load->library('check_rule');
//$config = $ci->check_rule->set_rule($ci->router->class);

$config = array(
    'login/index' => array(
        array('field' => 'login_id', 'label' => 'ログインID', 'rules' => 'alpha_dash|callback_check_login_id'),
        array('field' => 'password', 'label' => 'パスワード', 'rules' => 'alpha_dash|callback_check_login_right')
    ),
    'customer' => array(
        array('field' => 'customer_name', 'label' => '得意先名', 'rules' => 'trim|required|max_length[50]'),
        array('field' => 'customer_furi', 'label' => 'ふりがな', 'rules' => 'trim|required|hiragana|max_length[75]'),
        array('field' => 'customer_disp_name', 'label' => '呼称', 'rules' => 'trim|required|max_length[50]|callback_exist_name'),
        array('field' => 'handler_name', 'label' => '担当者', 'rules' => 'trim|max_length[25]'),
        array('field' => 'prefix_cd', 'label' => '敬称', 'rules' => ''),
        array('field' => 'depart_name', 'label' => '得意先部署', 'rules' => 'trim|max_length[25]'),
        array('field' => 'post_no_1', 'label' => '郵便番号３桁', 'rules' => 'trim|numeric|exact_length[3]|post_no[post_no]'),
        array('field' => 'post_no_2', 'label' => '郵便番号４桁', 'rules' => 'trim|numeric|exact_length[4]|post_no[post_no]'),
        array('field' => 'address', 'label' => '番地まで', 'rules' => 'trim'),
        array('field' => 'buil_name', 'label' => '建物名', 'rules' => 'trim|max_length[50]'),
        array('field' => 'tel_no_1', 'label' => '市外局番', 'rules' => 'trim|numeric|tel_no[tel_no]'),
        array('field' => 'tel_no_2', 'label' => '市内局番', 'rules' => 'trim|numeric|tel_no[tel_no]'),
        array('field' => 'tel_no_3', 'label' => '局番', 'rules' => 'trim|numeric|tel_no[tel_no]'),
        array('field' => 'fax_no_1', 'label' => '市外局番', 'rules' => 'trim|numeric|tel_no[fax_no]'),
        array('field' => 'fax_no_2', 'label' => '市内局番', 'rules' => 'trim|numeric|tel_no[fax_no]'),
        array('field' => 'fax_no_3', 'label' => '局番', 'rules' => 'trim|numeric|tel_no[fax_no]'),
        array('field' => 'cutoff_date', 'label' => '締日管理', 'rules' => ''),
        array('field' => 'card_print_type', 'label' => '納品書印刷区分', 'rules' => ''),
        array('field' => 'customer_type', 'label' => '得意先区分', 'rules' => ''),
        array('field' => 'credit_type', 'label' => '入金種別', 'rules' => ''),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),
    'goods' => array(
        array('field' => 'goods_name', 'label' => '品名', 'rules' => 'trim|required|max_length[125]|callback_exist_name'),
        array('field' => 'goods_furi', 'label' => 'ふりがな', 'rules' => 'trim|required|hiragana|max_length[200]'),
        array('field' => 'unit', 'label' => '単位', 'rules' => 'trim|max_length[5]'),
        array('field' => 'tax_type', 'label' => '税区分', 'rules' => ''),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),
    'depart' => array(
        array('field' => 'depart_name', 'label' => '部門名称', 'rules' => 'trim|required|max_length[25]|callback_exist_name'),
        array('field' => 'depart_furi', 'label' => 'ふりがな', 'rules' => 'trim|required|hiragana|max_length[50]'),
        array('field' => 'institute_id[]', 'label' => '研究所', 'rules' => 'trim|required'),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),
    'bank' => array(
        array('field' => 'bank_name', 'label' => '銀行名称', 'rules' => 'trim|required|max_length[25]'),
        array('field' => 'branch_name', 'label' => '支店名称', 'rules' => 'trim|required|max_length[25]'),
        array('field' => 'account_type', 'label' => '口座種別', 'rules' => 'required'),
        array('field' => 'account_no', 'label' => '口座番号', 'rules' => 'trim|required|numeric|exact_length[7]'),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),

    'abstract' => array(
        array('field' => 'abstract_name', 'label' => '摘要名称', 'rules' => 'trim|required|max_length[50]|callback_exist_name'),
        array('field' => 'abstract_furi', 'label' => 'ふりがな', 'rules' => 'trim|required|hiragana|max_length[100]'),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),
    'handler' => array(
        array('field' => 'handler_name', 'label' => '担当者名称', 'rules' => 'trim|required|max_length[25]|callback_exist_name'),
        array('field' => 'handler_furi', 'label' => 'ふりがな', 'rules' => 'trim|required|hiragana|max_length[50]'),
        array('field' => 'institute_id', 'label' => '所属研究所', 'rules' => ''),
        array('field' => 'depart_id', 'label' => '所属部門', 'rules' => ''),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),
    'user' => array(
        array('field' => 'user_name', 'label' => 'ユーザー名', 'rules' => 'trim|required|max_length[25]'),
        array('field' => 'user_furi', 'label' => 'ふりがな', 'rules' => 'trim|required|hiragana|max_length[50]'),
        array('field' => 'login_id', 'label' => 'ログインID', 'rules' => 'trim|required|alpha_numeric|max_length[10]|callback_exist_id'),
        array('field' => 'password', 'label' => 'パスワード', 'rules' => 'trim|required|alpha_numeric|max_length[10]'),
        array('field' => 'auth_cd', 'label' => 'システム権限', 'rules' => 'trim|required'),
        array('field' => 'institute_id', 'label' => '研究所', 'rules' => 'trim|required'),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),
    'fix_memo' => array(
        array('field' => 'fix_memo', 'label' => '固定メモ', 'rules' => 'trim|required'),
    ),

    'institute' => array(
        array('field' => 'institute_name', 'label' => '研究所名称', 'rules' => 'trim|required|max_length[25]|callback_exist_name'),
        array('field' => 'institute_furi', 'label' => 'ふりがな', 'rules' => 'trim|required|hiragana|max_length[50]'),
        array('field' => 'post_no_1', 'label' => '郵便番号３桁', 'rules' => 'trim|numeric|exact_length[3]|post_no[post_no]'),
        array('field' => 'post_no_2', 'label' => '郵便番号４桁', 'rules' => 'trim|numeric|exact_length[4]|post_no[post_no]'),
        array('field' => 'address', 'label' => '番地まで', 'rules' => 'trim'),
        array('field' => 'buil_name', 'label' => '建物名', 'rules' => 'trim|max_length[50]'),
        array('field' => 'tel_no_1', 'label' => '市外局番', 'rules' => 'trim|numeric|tel_no[tel_no]'),
        array('field' => 'tel_no_2', 'label' => '市内局番', 'rules' => 'trim|numeric|tel_no[tel_no]'),
        array('field' => 'tel_no_3', 'label' => '局番', 'rules' => 'trim|numeric|tel_no[tel_no]'),
        array('field' => 'fax_no_1', 'label' => '市外局番', 'rules' => 'trim|numeric|tel_no[fax_no]'),
        array('field' => 'fax_no_2', 'label' => '市内局番', 'rules' => 'trim|numeric|tel_no[fax_no]'),
        array('field' => 'fax_no_3', 'label' => '局番', 'rules' => 'trim|numeric|tel_no[fax_no]'),
        array('field' => 'memo', 'label' => 'メモ', 'rules' => 'trim')
    ),

    'sales_spec_print' => array(
        array('field' => 'book_date_from', 'label' => '売上計上日の開始日', 'rules' => 'trim|date|required'),
        array('field' => 'book_date_to', 'label' => '売上計上日の終了日', 'rules' => 'trim|date|required'),
        array('field' => 'institute_id', 'label' => '研究所', 'rules' => 'trim'),
        array('field' => 'depart_id', 'label' => '部門', 'rules' => 'trim'),
        array('field' => 'handler_id', 'label' => '担当者', 'rules' => 'trim'),
        array('field' => 'abstract_id', 'label' => '摘要', 'rules' => 'trim'),
        array('field' => 'customer_name', 'label' => '得意先名称', 'rules' => 'trim'),
        array('field' => 'customer_type', 'label' => '得意先区分', 'rules' => 'trim'),
        array('field' => 'seq_item', 'label' => '表示順序', 'rules' => 'trim|required'),
        array('field' => 'chk_span', 'label' => '', 'rules' => 'callback_chk_span')
    ),
    'sales_sum_print' => array(
        array('field' => 'book_date_from', 'label' => '売上計上日の開始日', 'rules' => 'trim|date|required'),
        array('field' => 'book_date_to', 'label' => '売上計上日の終了日', 'rules' => 'trim|date|required'),
        array('field' => 'institute_id', 'label' => '研究所', 'rules' => 'trim'),
        array('field' => 'depart_id', 'label' => '部門', 'rules' => 'trim'),
        array('field' => 'abstract_id', 'label' => '摘要', 'rules' => 'trim'),
        array('field' => 'handler_id', 'label' => '担当者', 'rules' => 'trim'),
        array('field' => 'customer_name', 'label' => '得意先名称', 'rules' => 'trim'),
        array('field' => 'customer_type', 'label' => '得意先区分', 'rules' => 'trim'),
        array('field' => 'seq_item', 'label' => '表示順', 'rules' => 'trim|callback_custom_required'),
        array('field' => 'segment', 'label' => 'セグメント', 'rules' => 'trim|required'),
        array('field' => 'disp_abstract', 'label' => '摘要表示', 'rules' => 'trim'),
        array('field' => 'chk_span', 'label' => '', 'rules' => 'callback_chk_span')
    ),

    'sales' => array(
        array('field' => 'customer_disp_name', 'label' => '得意先名', 'rules' => 'trim|required|max_length[50]'),
        array('field' => 'customer_id', 'label' => '', 'rules' => 'trim'),
        array('field' => 'cutoff_date', 'label' => '', 'rules' => 'trim'),
        array('field' => 'credit_type_hd', 'label' => '', 'rules' => 'trim'),
        array('field' => 'customer_type_hd', 'label' => '', 'rules' => 'trim'),
        array('field' => 'credit_type', 'label' => '入金種別', 'rules' => 'trim|required'),
        array('field' => 'customer_type', 'label' => '得意先区分', 'rules' => 'trim|required'),
        array('field' => 'bill_date', 'label' => '請求日', 'rules' => 'trim|date|required|callback_comp_bill_date|callback_proc_date'),
        array('field' => 'book_date', 'label' => '売上計上日', 'rules' => 'trim|date|callback_book_required|callback_proc_date'),
        array('field' => 'handler_name', 'label' => '担当者', 'rules' => 'trim|required|max_length[25]|callback_exist_handler'),
        array('field' => 'institute_id', 'label' => '研究所', 'rules' => 'trim|callback_basic_item_required'),
        array('field' => 'depart_id', 'label' => '部門', 'rules' => 'trim|callback_basic_item_required|callback_exist_institute'),
        array('field' => 'abstract_id', 'label' => '摘要', 'rules' => 'trim|required'),
        array('field' => 'report_no[]', 'label' => '報告書No', 'rules' => 'trim|report_no|callback_exist_report_no|callback_unique_report_no'),
        array('field' => 'goods_name[]', 'label' => '品名', 'rules' => 'trim|required|max_length[125]'),
        array('field' => 'cnt[]', 'label' => '数量', 'rules' => 'trim|numeric'),
        array('field' => 'unit[]', 'label' => '単位', 'rules' => 'trim|max_length[5]'),
        array('field' => 'unit_price[]', 'label' => '単価', 'rules' => 'trim|money'),
        array('field' => 'tax_type[]', 'label' => '税区分', 'rules' => 'trim|required'),
        array('field' => 'no_tax_money[]', 'label' => '税抜金額', 'rules' => 'trim|required|money|max_length[10]'),
        array('field' => 'in_tax_money[]', 'label' => '税込金額', 'rules' => 'trim|required|money|max_length[10]'),
        array('field' => 'tax[]', 'label' => '消費税', 'rules' => 'trim|money'),
        array('field' => 'unit_memo[]', 'label' => 'メモ', 'rules' => 'trim'),
        array('field' => 'sep_month_from', 'label' => '分割開始月', 'rules' => 'trim|yearmonth|callback_proc_month_from'),
        array('field' => 'sep_month_to', 'label' => '分割終了月', 'rules' => 'trim|yearmonth'),
        array('field' => 'sales_memo', 'label' => '売上情報入力のメモ', 'rules' => 'trim'),
        array('field' => 'sep_inp_money_hd', 'label' => '分割金額計', 'rules' => 'trim|callback_compare_sep_money'),
        array('field' => 'sep_money_hd', 'label' => '売上合計金額', 'rules' => 'trim'),
        array('field' => 'sep_money[]', 'label' => '分割金額', 'rules' => 'trim|money|callback_sep_money_required'),
        array('field' => 'sep_year_month[]', 'label' => '分割金額', 'rules' => 'trim'),
        array('field' => 'sep_tax_type[]', 'label' => '消費税率', 'rules' => 'trim'),
        array('field' => 'chk_bill_status', 'label' => '売上情報データ', 'rules' => 'callback_chk_bill_status'),
        array('field' => 'chk_bill_sep', 'label' => '', 'rules' => ''),
        array('field' => 'sep_institute[]', 'label' => '研究所', 'rules' => 'trim|callback_depart_item_required'),
        array('field' => 'sep_depart[]', 'label' => '部門', 'rules' => 'trim|callback_depart_item_required|callback_exist_institute'),
        array('field' => 'depart_tax_type[]', 'label' => '税区分', 'rules' => 'trim|callback_depart_item_required'),
        array('field' => 'depart_no_tax_money[]', 'label' => '税抜金額', 'rules' => 'trim|callback_depart_item_required|money|max_length[10]'),
        array('field' => 'depart_in_tax_money[]', 'label' => '税込金額', 'rules' => 'trim|callback_depart_item_required|money|max_length[10]'),
        array('field' => 'depart_tax[]', 'label' => '消費税', 'rules' => 'trim|money'),
        array('field' => 'hf_depart_in_tax_total', 'label' => '金額計', 'rules' => 'trim|callback_compare_depart_money'),
        array('field' => 'unique_depart', 'label' => '', 'rules' => 'trim|callback_unique_depart'),
        array('field' => 'chk_data_status', 'label' => '', 'rules' => 'trim|callback_chk_data_status'),
        array('field' => 'ticket', 'label' => '', 'rules' => ''),
    ),

    'bill_print' => array(
        array('field' => 'bill_status_type', 'label' => '請求書発行状況', 'rules' => ''),
        array('field' => 'is_check', 'label' => 'チェックボックス', 'rules' => 'callback_is_check')
    ),

    'bill_cutoff_print' => array(
        array('field' => 'is_check', 'label' => 'チェックボックス', 'rules' => 'callback_is_check'),
        array('field' => 'cutoff_date', 'label' => '締日', 'rules' => ''),
        array('field' => 'bill_status_type', 'label' => '請求書発行状況', 'rules' => '')
    ),

    'credit_search' => array(
        array('field' => 'credit_date', 'label' => '入金日', 'rules' => 'required|date'),
        array('field' => 'bank_id', 'label' => '口座情報', 'rules' => 'required'),
    ),

    'credit_regist' => array(
        array('field' => 'credit_date', 'label' => '入金日', 'rules' => 'required|date|callback_proc_date'),
        array('field' => 'bank_id', 'label' => '口座情報', 'rules' => 'required'),
        array('field' => 'customer_id[]', 'label' => '得意先ID', 'rules' => 'trim'),
        array('field' => 'customer_name[]', 'label' => '得意先名', 'rules' => 'trim|callback_is_exist_customer'),
        array('field' => 'credit_money[]', 'label' => '入金額', 'rules' => 'trim|rec_money|max_length[10]|callback_credit_money_required'),
        array('field' => 'credit_received_id[]', 'label' => '', 'rules' => ''),
        array('field' => 'reconcile_money[]', 'label' => '', 'rules' => ''),
        array('field' => 'adjust_money[]', 'label' => '', 'rules' => ''),
        array('field' => 'first_money[]', 'label' => '', 'rules' => ''),
        array('field' => 'all_required', 'label' => '', 'rules' => 'trim|callback_all_required'),
    ),
    'setoff_del' => array(
        array('field' => 'reconcile_date', 'label' => '消込日', 'rules' => 'trim|required|date|callback_proc_date'),
        array('field' => 'reconcile_money[]', 'label' => '消込額', 'rules' => 'trim|rec_money|callback_reconcile_required|callback_greater_money'),
        array('field' => 'print_chk[]', 'label' => 'チェックボックス', 'rules' => ''),
        array('field' => 'credit_status', 'label' => '', 'rules' => ''),
        array('field' => 'is_check', 'label' => '', 'rules' => 'callback_is_check'),
    ),

    'transfer_del_all' => array(
        array('field' => 'bill_date_from', 'label' => '請求日(開始日)', 'rules' => 'trim'),
        array('field' => 'bill_date_to', 'label' => '請求日(終了日)', 'rules' => 'trim'),
        array('field' => 'credit_status', 'label' => '消込状態', 'rules' => 'trim'),
        array('field' => 'other_rb', 'label' => 'その他条件', 'rules' => 'trim'),
        array('field' => 'del_date[]', 'label' => '消込日', 'rules' => 'trim|date|callback_reconcile_required|callback_proc_date'),
        array('field' => 'set_target_chk[]', 'label' => 'チェックボックス', 'rules' => ''),
        array('field' => 'set_diff_chk[]', 'label' => 'チェックボックス', 'rules' => ''),
        array('field' => 'charge_money[]', 'label' => '振込手数料', 'rules' => ''),
        array('field' => 'is_check', 'label' => '', 'rules' => 'callback_is_check'),
        array('field' => 'check_process_data', 'label' => '', 'rules' => 'callback_check_process_data'),
    ),

    'transfer_del_all_can' => array(
        array('field' => 'bill_date_from', 'label' => '請求日(開始日)', 'rules' => 'trim'),
        array('field' => 'bill_date_to', 'label' => '請求日(終了日)', 'rules' => 'trim'),
        array('field' => 'credit_status', 'label' => '消込状態', 'rules' => 'trim'),
        array('field' => 'other_rb', 'label' => 'その他条件', 'rules' => 'trim'),
        array('field' => 'is_check', 'label' => '', 'rules' => 'callback_is_check'),
    ),
    'outside_receive' => array(
        array('field' => 'manage_no', 'label' => '管理No', 'rules' => 'required|numeric|max_length[10]'),
        array('field' => 'customer_name', 'label' => '得意先名', 'rules' => 'required|max_length[50]'),
        array('field' => 'report_no', 'label' => '報告書No', 'rules' => 'required|alpha_numeric|max_length[10]'),
        array('field' => 'handler_name', 'label' => '試験担当者', 'rules' => 'max_length[25]'),
        array('field' => 'goods_name', 'label' => '品名', 'rules' => 'max_length[125]|callback_exist_name'),
        array('field' => 'no_tax_money', 'label' => '売上金額', 'rules' => 'required|numeric|max_length[10]'),
        array('field' => 'test_pattern', 'label' => '試験パターン区分', 'rules' => 'required|regex_match[/^[1-3]$/]'),
    ),

);


?>
