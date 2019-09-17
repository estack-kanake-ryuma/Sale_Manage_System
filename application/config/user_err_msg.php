<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| 固定警告メッセージ
|--------------------------------------------------------------------------
*/
define('WARN_NO_LIST_MSG', '表示可能なデータは１件もありません。');
define('WARN_SET_CONDITION', '表示条件を設定してください。');

/*
|--------------------------------------------------------------------------
| 固定メッセージ
|--------------------------------------------------------------------------
*/
define('NOT_SELECT_MSG', '#NAME#を選択してください。');
define('NO_OUTSIDE_SEND_DATA', '受注システムに送信するデータはありませんでした。');


/*
|--------------------------------------------------------------------------
| 個別エラーメッセージ管理
|--------------------------------------------------------------------------
*/
define('ERR_LOGIN_ID_EXIST', 'ログインIDをご確認ください。');
define('ERR_LOGIN_COMMON', 'ログインIDとパスワードをご確認ください。');
define('ERR_EXIST_HANDLER', '担当者マスタに存在しません。');
define('ERR_EXIST_CUSTOMER', '得意先マスタにも売上情報にもない得意先です。');
define('ERR_EXIST_INSTITUTE', '研究所にない部門が設定されています。');
define('ERR_UNIQUE_DEPART', '同じ研究所と部門が設定されています。');
define('ERR_UNIQUE_REPORT_NO', '同じ報告書NOが設定されています。');
define('ERR_EXIST_SALES', '同じ売上情報が存在します。');
define('ERR_COMPARE_SEP_MONEY', '【税込金額合計】と【分割金額合計】が等しくありません。');
define('ERR_COMPARE_DEPART_MONEY', '【売上情報の金額合計】と【部門別売上情報の税込金額合計】が等しくありません。');
define('ERR_BOOK_DATE_REQUIRED', '売上計上日 欄は必須です。');
define('ERR_COMP_BILL_DATE', '請求日 欄は、得意先の締日の最終日を設定してください。');
define('ERR_NO_CHECK_BOX', 'チェックボックスが一つも選択されていません。');
define('ERR_SEP_MONEY', '入金種別が前受の場合、売上分割金額は必須です。');
define('ERR_ALL_CHECK', 'チェックボックスが１件も選択されていません。');
define('ERR_EXIST_NAME', '同一の#NAME#が登録されています。');
define('ERR_EXIST_LOGIN_ID', '同一のログインIDが登録されています。');
define('ERR_EXIST_REPORT_NO', '同一の報告書NOが登録されています。');
define('ERR_TAX_EQ', '【前受】が選択されている場合、【税区分】は同一でなくてはなりません。');
define('ERR_CUSTOMER_REQUIRED', '入金額が入力されている場合、得意先は必須です。');
define('ERR_CREDIT_MONEY_REQUIRED', '得意先が入力されている場合、入金額は必須です。');
define('ERR_CUSTOMER_EXIST', '得意先マスタに存在しません。');
define('ERR_ALL_EXIST', '1件も入力がありません。');
define('ERR_RECONCILE_MONEY_CHK', 'チェックボックスが入力された場合、消込額は必須です。');
define('ERR_RECONCILE_DATE_CHK', 'チェックボックスが入力された場合、消込日は必須です。');
define('ERR_RECONCILE_MONEY_GREATER', '残額より大きい金額は入力できません。');
define('ERR_CREDIT_MAX_ROW', '入金情報のNoを指定してください。');
define('ERR_CREDIT_REQUIRE_ID', '行番号が不正です。');
define('ERR_CREDIT_CUSTOMER_NAME', '違う得意先の入金が選択されています。');
define('ERR_CREDIT_GREATER_MONEY', '入金残額より大きい値が入力されています。');
define('ERR_BILL_GREATER_MONEY', '合計消込額が請求金額より大きいです。');
define('ERR_FIRST_GREATER_MONEY', '合計消込額が残額より大きいです。');
define('ERR_CHK_BILL_PUBLISH', '請求書を発行していない、売上情報があります。');
define('ERR_CHK_PROC_DATE', '処理月と同じ月を入力してください。');
define('ERR_COMP_CREDIT_MONEY', '消込金額より#GREATER#金額は登録できません。');
define('ERR_COMP_BILL_MONEY', '請求金額より#GREATER#金額は登録できません。');
define('ERR_COMP_CORRECT_ZERO', '訂正金額が0円は登録できません。');
define('ERR_PROC_DATE', '処理年月より古い日付は登録できません。');
define('ERR_PROC_DELETE', '締め処理が既に実行されているため、削除できません。');
define('ERR_CHK_CREDIT', '既に消込が行われているため、登録できません。');
define('ERR_LIMIT_SPAN', '1年以上の期間は入力できません。');
define('ERR_BILL_NO_EXIST', '存在しない請求書が含まれています。再度やり直してください。');
define('ERR_RECEIVED_NO_EXIST', '存在しない入金情報が含まれています。再度やり直してください。');
define('ALL_REQUIRED', '全て未入力です。');

// import_manage error_message
define('ERR_IMPORT_DELETED', '処理対象のデータが存在しないため処理できません。画面の再更新を行いデータをご確認ください。');
define('ERR_IMPORT_TREATED', '既に処理済みのデータのため処理できません。画面の再更新を行い状態をご確認ください。');
define('ERR_SALES_EXIST', '同一の報告書Noを持つ売上が存在するため処理できません。画面の再更新を行いデータをご確認ください。');

/*
|--------------------------------------------------------------------------
| バッチ用エラー文言
|--------------------------------------------------------------------------
*/
define('E_CANNOT_READ_FILE', '取込対象ファイルが存在しないため、処理を行いませんでした。');
define('E_COLMN_NUM', '項目数が正しくありません。');
define('E_DATA_STATUS', '更新対象の売上情報が入金済、もしくは締め処理済のため更新できません。');
define('E_PROC_MONTH', '売上計上日が処理年月より古い日付のため登録できません。');
define('E_CREDIT_INPUT', '既に入金済の請求書が存在するため登録できません。');
define('E_DATA_COMPLIANCE', '取込処理を実施しましたが、正しくデータが登録されていない恐れがあります。<br/>システム管理者へ連絡してください。');
define('E_ALL_DATA_ERROR', '全データが項目値などのエラーのため登録されませんでした。');
define('E_NOT_ENOUGH_LINE_ERROR', 'データ行が必要行数(3)に達していないため中断しました。');
define('E_NO_HEADER_ERROR', 'ヘッダー情報が存在しないため中断しました。');
define('E_NO_FOOTER_ERROR', 'フッター情報が存在しないため中断しました。');
define('E_RECORD_COUNT_NOT_MATCH', 'フッターのレコード数と実際のデータ数が一致していません。');
define('E_FTP_FILE_UPLOAD', 'FTPへのファイルアップロードに失敗しました。');
define('W_CUSTOMER_NAME', 'マスタに存在しない得意先名のデータを取り込みました。');
define('W_HANDLER_ID', 'マスタに存在しない担当者名のため値をクリアします。');
define('W_CREDIT_TYPE', '既存の売上データと異なる入金種別のため値をクリアします。');
define('W_CUSTOMER_TYPE', '既存の売上データと異なる得意先区分のため値をクリアします。');
define('W_BOOK_DATE', '既存の売上データと異なる売上計上日のため値をクリアします。');
define('W_INSTITUTE_ID', 'マスタに存在しない研究所のため値をクリアします。');
define('W_DEPART_ID', 'マスタに存在しない部門のため値をクリアします。');
define('W_ABSTRACT_ID', 'マスタに存在しない摘要のため値をクリアします。');
define('W_CREDIT_TYPE_MST', '入金種別が得意先情報と一致しません。');
define('W_CUSTOMER_TYPE_MST', '得意先区分が得意先情報と一致しません。');
define('W_CREDIT_TYPE_NO_INPUT', '入金種別が存在しないためマスタの値を補完しました。');
define('W_CUSTOMER_TYPE_NO_INPUT', '得意先区分が存在しないためマスタの値を補完しました。');
define('W_NO_TAX_INPUT', '税区分が非課税で消費税が入力されています。税区分を値をクリアします。');
define('W_REPORT_NO_FORMAT', '報告書Noのフォーマットが正しくありません。');
