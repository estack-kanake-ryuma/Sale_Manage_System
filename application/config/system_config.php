<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| 各種ファイルまでのパス
|--------------------------------------------------------------------------
*/
define('IMG_PATH', "/images/");
define('CSS_PATH', "/css/");
define('JS_PATH', "/js/");
define('BILL_PATH', APPPATH . "download/");
define('TEMP_PATH', APPPATH . "temp/");

/*
|--------------------------------------------------------------------------
| 一覧の１ページあたりの表示件数
|--------------------------------------------------------------------------
*/
define('PER_PAGE_CNT', 10);
define('PER_DOWNLOAD_PAGE_CNT', 20);
define('PER_CREDIT_PAGE_CNT', 5);

/*
|--------------------------------------------------------------------------
| アクセス制御ファイルの名前
|--------------------------------------------------------------------------
*/
define('HTACCESS', '.htaccess');

/*
|--------------------------------------------------------------------------
| テーブル定義
|--------------------------------------------------------------------------
*/
//マスタ
define('M_SYS_GENERAL_NAME', 'm_sys_general_name');
define('M_SYS_PAGE_INFO', 'm_sys_page_info');
define('M_SYS_PAGE_AUTH', 'm_sys_page_auth');
define('M_SYS_MENU_MNG', 'm_sys_menu_mng');
define('M_SYS_MENU_DATA', 'm_sys_menu_data');
define('M_PROC_MONTH', 'm_proc_month');
define('M_SYS_BILL_TAX_GROUP', 'm_sys_bill_tax_group');
define('M_CUSTOMER', 'm_customer');
define('M_SALES_MARK', 'm_sales_mark');
define('M_GOODS', 'm_goods');
define('M_DEPART', 'm_depart');
define('M_DEPART_DATA', 'm_depart_data');
define('M_INSTITUTE', 'm_institute');
define('M_ABSTRACT', 'm_abstract');
define('M_BANK', 'm_bank');
define('M_USER', 'm_user');
define('M_HANDLER', 'm_handler');
define('M_TAX_MNG', 'm_tax_mng');
define('M_FIX_MEMO', 'm_fix_memo');


//売上・請求
define('T_SALES_MNG', 't_sales_mng');
define('T_SALES_DETAIL', 't_sales_detail');
define('T_SALES_BEFORE', 't_sales_before');
define('T_SALES_DEPART', 't_sales_depart');
define('T_BILL_MNG', 't_bill_mng');
define('T_BILL_DATA', 't_bill_data');
define('T_BILL_CUTOFF_MNG', 't_bill_cutoff_mng');
define('T_BILL_CUTOFF_DETAIL', 't_bill_cutoff_detail');
define('T_CREDIT_RECIEVED', 't_credit_received');
define('T_CREDIT_RECIEVED_ADJUST', 't_credit_received_adjust');
define('T_CREDIT_MNG', 't_credit_mng');
define('T_CREDIT_DATA', 't_credit_data');
define('T_BALANCE_MNG', 't_balance_mng');
define('T_RECEIVABLE_MNG', 't_receivable_mng');
define('T_RECEIVABLE_DATA', 't_receivable_data');
define('T_CUTOFF_CORRECT', 't_cutoff_correct');
define('T_FIRST_MONEY_MNG', 't_first_money_mng');
define('T_FIRST_MONEY_DATA', 't_first_money_data');

// 受注システム連携用
define('T_OUTSIDE_RECEIVE_MNG', 't_outside_receive_mng');
define('T_OUTSIDE_RECEIVE_DATA', 't_outside_receive_data');
define('T_OUTSIDE_SEND_MNG', 't_outside_send_mng');
define('T_OUTSIDE_SEND_DATA', 't_outside_send_data');
define('T_OUTSIDE_RELATION', 't_outside_relation');
define('T_SEND_TARGET', 't_send_target');

//ビュー
define('V_SALES_INFO', 'v_sales_info');
define('V_ALL_CUSTOMER', 'v_all_customer');
define('V_CUSTOMER_INFO', 'v_customer_info');
define('V_BEFORE_SUM_MONEY', 'v_before_sum_money');
define('V_CREDIT_TRANSFER_DATA', 'v_credit_transfer_data');
define('V_CREDIT_CHARGE_DATA', 'v_credit_charge_data');
define('V_CREDIT_ALL', 'v_credit_all');
define('V_RECONCILE_DATA', 'v_reconcile_data');

/*
|--------------------------------------------------------------------------
| DBの定数定義
|--------------------------------------------------------------------------
*/
define('FLG_ON', 1);                                // フラグカラムのON
define('FLG_OFF', 0);                                // フラグカラムのOFF
define('MIN_DATE', '1000-01-01');                            // 日付の最小値
define('MAX_DATE', '9999-12-31');                            // 日付の最大値
define('DATE_NULL', '0000-00-00');                            // 日付型のデフォルト値
define('DATE_TIME_NULL', '0000-00-00 00:00:00');                                // 日時型のデフォルト値
define('BILL_TYPE_C', "C");                                // 請求書単位締日
define('BILL_TYPE_S', "S");                                // 請求書単位売上
define('RECEIVE_RESULT_OK', 'ok');                                                    // バッチ処理取り込み正常完了
define('RECEIVE_RESULT_WARNING', 'warn');                                                    // バッチ処理取り込み時不足or相違データあり
define('RECEIVE_RESULT_ERROR', 'error');                                                    // バッチ処理取り込み全失敗
define('RECEIVE_RESULT_FATAL', 9);                                                    // バッチ処理取り込み致命的エラー
define('RELATION_STATUS_UNSENT', 'unsent');                    // 未送信
define('RELATION_STATUS_BILLED', 'billed');                      // 請求の送信済
define('RELATION_STATUS_CREDITING', 'crediting');                      // 入金中の送信済
define('RELATION_STATUS_CREDITED', 'credited');                      // 入金完了の送信済
define('PROCESS_METHOD_SALES_REGISTERED', 'sales_registered');   // 売上登録済
define('PROCESS_METHOD_COOPERATION', 'cooperation');              //  連携済
define('PROCESS_METHOD_DISCARD', 'discard');                       //  破棄済

/*
|--------------------------------------------------------------------------
| 汎用名称マスタのグループコード定義
|--------------------------------------------------------------------------
*/
define('GRP_CUSTOMER_TYPE', 'TCO01');                       // 得意先区分
define('GRP_CORRECT_TYPE', 'CCO01');                       // 訂正区分
define('GRP_PREFIX', 'LPF01');                       // 敬称
define('GRP_CREDIT_TYPE', 'TCR01');                       // 入金種別
define('GRP_CREDIT_TYPE_2', 'TCR02');                       // 入金種別
define('GRP_TAX_TYPE', 'TTX01');                       // 課税区分
define('GRP_TAX_TYPE_BILL', 'TTX02');                       // 課税区分(請求書印字用)
define('GRP_TAX_TYPE_BEFORE', 'TTX03');                       // 税区分(前受用)
define('GRP_ACCOUNT_TYPE', 'ATP01');                       // 口座種別
define('GRP_AUTH_CD', 'ATH01');                       // 権限グループ
define('GRP_SALES_DATA_TYPE', 'SDT01');                       // 売上データ状態
define('GRP_PRINT_SEQ', 'SSP01');                       // 各種帳票の出力順序
define('GRP_SALES_SPEC_SEQ', 'SSP02');                       // 売上明細表の出力順序
define('GRP_PRINT_THAN', 'PTN01');                       // 各種帳票の比較リスト
define('GRP_BILL_STATUS_TYPE', 'BLP01');                       // 請求書発行区分
define('GRP_SEGMENT', 'SGM01');                       // 各種帳票のセグメント
define('GRP_TAX_5_PER', 'A01');                         // 消費税のグループ
define('GRP_TAX_NO_TAX', 'A02');                         // 消費税のグループ
define('GRP_TAX_OTHER', 'A03');                         // 消費税のグループ
define('GRP_CREDIT_STATUS', 'CST01');                       // 入金種別
define('GRP_RECONCILE_TYPE_BILL', 'RTB01');                       // 消込種別(請求額)
define('GRP_RECONCILE_TYPE_BILL_C', 'RTE01');                       // 消込種別(請求額)
define('GRP_RECONCILE_TYPE_CREDIT', 'RTC01');                       // 消込種別(入金額)
define('GRP_RECONCILE_TYPE_ALL', 'RTD01');                       // 消込種別(入金額)
define('GRP_RETENTION', 'TRW01');                       // 滞留条件
define('GRP_RELATION_STATUS', 'RS001');                       // 受注連携状態

/*
|--------------------------------------------------------------------------
| 汎用名称マスタのアイテム定義
|--------------------------------------------------------------------------
*/
define('CUSTOMER_TYPE_IPPAN', '1');                       // 得意先区分(一般外部)
define('CUSTOMER_TYPE_DAIMRU', '2');                       // 得意先区分(大丸グループ)
define('CREDIT_TYPE_OTHER', '1');                       // 得意先区分(その他)
define('CREDIT_TYPE_SETOFF', '2');                       // 得意先区分(相殺)
define('CREDIT_TYPE_BEFORE', '3');                       // 得意先区分(前受)
define('CREDIT_STATUS_ON', '2');                       // 入金状態(消し込み済)
define('CREDIT_STATUS_OFF', '1');                       // 入金状態(未消込)
define('AUTH_CD_ALL', '001');                     // 全権限
define('AUTH_CD_INPUT', '002');                     // 入力権限
define('AUTH_CD_DISP', '003');                     // 閲覧権限
define('DATA_TYPE_SALES', '1');                      // 売上入力済み
define('DATA_TYPE_BILL', '2');                      // 請求書発行済み
define('DATA_TYPE_CREDIT', '3');                      // 入金消込済み
define('DATA_TYPE_CLOSE', '4');                      // 締め処理済み
define('DATA_TYPE_IMPORT', '9');                      // 自動取込済み
define('SEGMENT_DEPART', '1');                      // 部門別
define('SEGMENT_ABSTRACT', '2');                      // 摘要別
define('SEGMENT_HANDLER', '3');                      // 担当者別
define('SEGMENT_CUSTOMER', '4');                      // 得意先別
define('TAX_TYPE_IN_TAX', '5');                      // 税区分(税込み)
define('TAX_TYPE_NO_TAX', '2');                      // 税区分(税込み)
define('RECONCILE_TYPE_FURI', 'F');                      // 入金種別(振込)
define('RECONCILE_TYPE_FURI_TESU', 'T');                      // 入金種別(振込手数料)
define('RECONCILE_TYPE_SETOFF', 'S');                      // 入金種別(相殺)
define('RECONCILE_TYPE_GENKIN', 'G');                      // 入金種別(現金)
define('RECONCILE_TYPE_KOGITE', 'K');                      // 入金種別(小切手)
define('RECONCILE_TYPE_TEGATA', 'A');                      // 入金種別(手形)
define('RECONCILE_TYPE_ZSITU', 'Z');                      // 入金種別(雑損失)
define('RECONCILE_TYPE_ZEKI', 'E');                      // 入金種別(雑収益)
define('RECONCILE_TYPE_HENKIN', 'H');                      // 入金種別(返金)
define('RECONCILE_TYPE_OTHER', 'O');                      // 入金種別(その他)
define('RECONCILE_TYPE_URIAGE', 'U');                      // 消込種別(売上額調整)
define('RECONCILE_TYPE_KESHIKOMI', 'R');                      // 消込種別(消込額調整)
define('RETENTION_1', '1');                      // 滞留条件(1ヶ月以上)
define('RETENTION_2', '2');                      // 滞留条件(2ヶ月以上)
define('RETENTION_3', '3');                      // 滞留条件(3ヶ月以上)


/*
|--------------------------------------------------------------------------
| バッチ処理の定数定義
|--------------------------------------------------------------------------
*/
define('CONDUCT_PATTERN_AUTONOMY', '1');                       // 自主
define('CONDUCT_PATTERN_CLAIM', '2');                      // クレーム
define('CONDUCT_PATTERN_IPPAN', '3');                      // 一般外部


/*
|--------------------------------------------------------------------------
| メニューマスタのグループコード定義
|--------------------------------------------------------------------------
*/
define('GRP_HOME', 'g0000');                // マスタグループ
define('GRP_BILL', 'g0001');                // 請求業務グループ
define('GRP_CREDIT', 'g0002');                // 入金業務グループ
define('GRP_ACCOUNT', 'g0003');                // 会計業務グループ
define('GRP_MST', 'g0004');                // マスタグループ
define('GRP_LOGIN', 'g9999');                // ログイングループ
define('GRP_OTHER', 'g8888');                // 子Windowグループ
define('GRP_ADMIN', 'g7777');                // 管理グループ

/*
|--------------------------------------------------------------------------
| セッションキーの定義
|--------------------------------------------------------------------------
*/
define('SS_KEY_TAB_MENU', 'tab_menu');
define('SS_KEY_LOCAL_MENU', 'local_menu');
define('SS_KEY_PAGE_INFO', 'page_info');
define('SS_KEY_MENU_HOME', 'menu_home');
define('SS_KEY_MENU_MST', 'menu_mst');
define('SS_KEY_MENU_BILL', 'menu_bill');
define('SS_KEY_MENU_CREDIT', 'menu_credit');
define('SS_KEY_MENU_FINANCE', 'menu_finance');
define('SS_KEY_MENU', 'menu_key');
define('SS_KEY_LOGIN', 'login_info');
define('SS_KEY_USER_NAME', 'user_name');
define('SS_KEY_INSTITUTE_NAME', 'institute_name');
define('SS_KEY_AUTH_CD', 'auth_cd');
define('SS_KEY_USER_ID', 'user_id');
define('SS_KEY_LOGIN_FLG', 'login_flg');
define('SS_KEY_PROC_MONTH', 'proc_month');
define('SS_KEY_PROC_REGIST_DATE', 'proc_regist_date');
define('SS_KEY_ORDER_TYPE', 'order_type');

/* 各ページのセッションキー  */
define('SS_KEY_CUSTOMER_LIST', 'customer_list');
define('SS_KEY_CUSTOMER_INPUT', 'customer_input');
define('SS_KEY_GOODS_LIST', 'goods_list');
define('SS_KEY_GOODS_INPUT', 'goods_input');
define('SS_KEY_DEPART_LIST', 'depart_list');
define('SS_KEY_DEPART_INPUT', 'depart_input');
define('SS_KEY_INSTITUTE_LIST', 'institute_list');
define('SS_KEY_INSTITUTE_INPUT', 'institute_input');
define('SS_KEY_HANDLER_LIST', 'handler_list');
define('SS_KEY_HANDLER_INPUT', 'handler_input');
define('SS_KEY_ABSTRACT_LIST', 'abstract_list');
define('SS_KEY_ABSTRACT_INPUT', 'abstract_input');
define('SS_KEY_BANK_LIST', 'bank_list');
define('SS_KEY_BANK_INPUT', 'bank_input');
define('SS_KEY_FIXMEMO_LIST', 'fix_memo_list');
define('SS_KEY_FIXMEMO_INPUT', 'fix_memo_input');
define('SS_KEY_USER_LIST', 'user_list');
define('SS_KEY_USER_INPUT', 'user_input');
define('SS_KEY_TAXMNG_LIST', 'tax_mng_list');
define('SS_KEY_TAXMNG_INPUT', 'tax_mng_input');
define('SS_KEY_TICKET', 'ticket');

/* 各ページで残しておく情報のセッションKEY  */
define('SS_KEY_BACK_URL', 'back_url');
define('SS_KEY_SEARCH', 'search');
define('SS_KEY_START', 'start');
define('SS_KEY_BEF_KEY', 'bef_key');

/*
|--------------------------------------------------------------------------
| 残しておくセッションキーの定義
|--------------------------------------------------------------------------
*/
define('KEEP_SESSION_1', 'session_id');
define('KEEP_SESSION_2', 'ip_address');
define('KEEP_SESSION_3', 'user_agent');
define('KEEP_SESSION_4', 'last_activity');
define('KEEP_SESSION_5', SS_KEY_LOGIN);
define('KEEP_SESSION_6', SS_KEY_TAB_MENU);
define('KEEP_SESSION_7', SS_KEY_LOCAL_MENU);
define('KEEP_SESSION_8', SS_KEY_PAGE_INFO);
define('KEEP_SESSION_9', SS_KEY_PROC_MONTH);
define('KEEP_SESSION_10', SS_KEY_PROC_REGIST_DATE);
define('KEEP_SESSION_11', SS_KEY_ORDER_TYPE);
define('KEEP_SESSION_12', SS_KEY_TICKET);

/*
|--------------------------------------------------------------------------
| バッチ用　定義
|--------------------------------------------------------------------------
 */
define('RECEIVE_FILE_NAME', 'SEND_SALES_DATA.TSV');   // 売上データファイル名
define('SEND_FILE_NAME', 'RCV_ACCOUNT_AND_RECEIPT_DATA.TSV');   // 請求回収データのファイル名
define('RELATION_FILE_DELIMITER', "\t");               // 連携ファイルの区切り文字
define('RELATION_FILE_LINE_FEED', "\r\n");               // 連携ファイルの改行コード
define('TARGET_EXTENSION', 'tsv');   // 対象ファイルの拡張子
define('EXEC_RESULT_FILE_NAME', 'processing');      // 処理結果ファイル名
define('EXEC_RESULT_STAT', '0');                    // 処理結果ファイル更新内容
// 環境依存する内容はconfig.phpへ定義されている

/*
|--------------------------------------------------------------------------
| 報告書Noの桁数
|--------------------------------------------------------------------------
*/
define('REPORT_NO_START_INDEX', 0);
define('REPORT_NO_LENGTH_8', 8);
define('REPORT_NO_LENGTH_10', 10);