<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*※ バッチに関する設定内容はapplication/config/system_config.phpのバッチ用定義に定義されている ※*/

/**
 * Receive batch Controller
 *
 * 受注システムからの売上データを取り込むのコントローラー
 *
 * @link     http://www.datalyze.co.jp
 * @property Receive_batch_mdl $receive_batch_mdl
 * @property Sales_mdl $sales_mdl
 * @property MY_Form_validation $form_validation
 * @property MY_Ftp $ftp
 */
class Receive_batch extends MY_Controller
{
    /**
     * コンストラクタ
     *
     * @package    application
     * @subpackage controllers
     * @link    http://www.datalyze.co.jp
     */
    public function __construct()
    {
        parent::__construct();
        // cli処理か判定 ブラウザからのアクセスは404エラー
        if (!$this->input->is_cli_request()) {
            show_404();
        }
        $this->load->model('batch/receive_batch_mdl');
        $this->load->model('batch/outside_receive_bean');
        $this->load->model('bill/sales_mdl');
        $this->load->helper('file');
        $this->load->library('ftp');
    }

    /*
     * ---------------------------------------------------------------------------
     *
     * action
     *
     * ---------------------------------------------------------------------------
     */

    /**
     * バッチ メイン処理
     * [1]ファイル展開
     * [2]データチェック
     * [3]DB登録用データ作成
     *     項目数不備or必須項目がない場合スキップ
     *     マスタがない場合は売上データのみ作成
     * [4]DB登録
     * [5]外部システム処理結果待ちファイル更新(FTP通信)
     *
     * @access public
     * @return void
     * @throws Exception
     */
    public function index()
    {
        //------------------------------------------------------------------------
        // check file
        //------------------------------------------------------------------------
        $handle = null;
        if (!is_dir(FTP_TEMP_PATH)) {
            log_message('error', 'FTP folder is not directory');
            return;
        }
        $handle = opendir(FTP_TEMP_PATH);
        if ($handle === false) {
            log_message('error', 'FTP folder can not read');
            return;
        }
        if (!file_exists(FTP_TEMP_PATH . RECEIVE_FILE_NAME)) {
            log_message('info', RECEIVE_FILE_NAME . ' can not find. process skip.');
            return;
        }

        //------------------------------------------------------------------------
        // import start
        //------------------------------------------------------------------------
        $file_contents = $this->_read_file(FTP_TEMP_PATH, RECEIVE_FILE_NAME);
        $file_contents = $this->_change_character_code($file_contents);
        $lines = explode(RELATION_FILE_LINE_FEED, $file_contents);

        $bean = new Outside_receive_bean();
        $this->_extract_header_footer($lines, $bean);
        if (count($lines) < 3) {
            $this->_process_end_error(E_NOT_ENOUGH_LINE_ERROR);
            return;
        } else if ($bean->outside_receive_header === null) {
            $this->_process_end_error(E_NO_HEADER_ERROR);
            return;
        } else if ($bean->outside_receive_footer === null) {
            $this->_process_end_error(E_NO_FOOTER_ERROR);
            return;
        }

        // フッターのデータ定義数と実データスの整合性チェック
        if ($bean->outside_receive_footer->record_count !== (count($lines) - 2)) {
            $this->_process_end_error(E_RECORD_COUNT_NOT_MATCH);
            return;
        }

        try {
            $this->db->trans_start();

            // outside_receive_mngへのインサート
            $outside_receive_mng_data
                = $this->receive_batch_mdl->generate_outside_receive_mng_insert_data($bean);
            $outside_receive_mng_id = $this->receive_batch_mdl->insert_outside_receive_mng($outside_receive_mng_data);

            // 受信データのbody部分の取り込み
            $import_count = $this->import_receive_data($lines, $outside_receive_mng_id);
            if ($import_count > 0) {
                $this->receive_batch_mdl->update_outside_receive_mng($outside_receive_mng_id, array('result' => RECEIVE_RESULT_OK));
            } else {
                $this->receive_batch_mdl->update_outside_receive_mng($outside_receive_mng_id,
                    array('result' => RECEIVE_RESULT_ERROR, 'error_messages' => E_ALL_DATA_ERROR));
            }

            // 処理結果待ちファイルの更新処理
            $ftp_result = $this->_ftp_set_end_status();

            // FTPサーバーへのアップロード失敗
            if ($ftp_result === false) {
                throw new Exception(E_FTP_FILE_UPLOAD);
            }

            // 終了ファイルをリネーム
            $this->_rename_file($bean->outside_receive_header->process_datetime);

            $this->db->trans_complete();
        } catch (Exception $e) {
            log_message('error', print_r($e->getTrace(), true));
            throw $e;
        }
    }

    /*
     * ---------------------------------------------------------------------------
     *
     * process
     *
     * ---------------------------------------------------------------------------
     */

    /**
     * 受信したファイルを読み込む
     *
     * @param $file_path string
     * @param $file_name string
     * @return null|string
     */
    private function _read_file($file_path, $file_name)
    {
        $file_contents = file_get_contents($file_path . $file_name);
        if ($file_contents === FALSE) {
            log_message('info', E_CANNOT_READ_FILE);
            return null;
        }
        return $file_contents;
    }

    /**
     * ファイルの中身の文字コードを変換
     * @param $file_contents string
     * @return string
     */
    private function _change_character_code($file_contents)
    {
        return mb_convert_encoding($file_contents, mb_internal_encoding(), mb_detect_encoding($file_contents, 'UTF-8, EUC-JP, JIS, eucjp-win, sjis-win'));
    }

    /**
     * validation(入力チェック)
     *
     * @param $body Outside_receive_body
     * @param $error_detail array
     * @return boolean  登録不可のエラーの場合はfalse
     */
    private function _sales_batch_validation($body, &$error_detail)
    {
        $_POST = (array)$body;
        $critical = FLG_OFF;
        $this->form_validation->_error_array = array();
        $this->form_validation->_field_data = array();

        // 共通の入力チェック処理
        if (!$this->form_validation->run('outside_receive')) {
            $critical = FLG_ON;
            foreach ($this->form_validation->_field_data as $field => $values) {
                if (array_key_exists('error', $values) && $values['error'] != '') {
                    $error_detail[] = $values['error'];
                }
            }
        }

        // 報告書Noのチェック処理
        if (!$this->form_validation->report_no($body->report_no)) {
            $critical = FLG_ON;
            $error_detail[] = W_REPORT_NO_FORMAT;
        }

        if ($critical == FLG_ON) {
            return false;
        }
        return true;
    }

    /**
     * ヘッダー、フッターの抽出
     * @param $lines array
     * @param $bean Outside_receive_bean
     * @return Outside_receive_bean
     */
    private function _extract_header_footer($lines, $bean)
    {
        if (preg_match('/^\d{12}$/', $lines[0])) {
            $bean->outside_receive_header->process_datetime = $lines[0];
        }
        $last_index = count($lines) - 1;
        if (preg_match("/^[0-9]+$/", $lines[$last_index])) {
            $bean->outside_receive_footer->record_count = intval($lines[$last_index]);
        }
        return $bean;
    }

    /**
     * エラー終了処理
     *
     * @access private
     * @param string $message
     * @return void
     * @throws Exception
     */
    private function _process_end_error($message)
    {
        $header = date("YmdHi");

        // トランザクション開始
        $this->db->trans_start();

        // 登録データ
        $insert_data['process_datetime'] = $header;
        $insert_data['result'] = RECEIVE_RESULT_ERROR;
        $insert_data['error_messages'] = $message;

        // エラー情報の管理テーブルデータを登録
        $this->receive_batch_mdl->insert_outside_receive_mng($insert_data);

        // トランザクションの完了
        $this->db->trans_complete();

        // 物理ファイルリネーム
        $this->_rename_file($header);

        // 処理結果待ちファイル更新
        $this->_ftp_set_end_status();

        log_message('info', $message);
    }

    /**
     * 処理結果待ちファイル更新
     *
     * @access private
     * @return boolean
     */
    private function _ftp_set_end_status()
    {
        // FTPの接続情報
        $ftp_config['hostname'] = FTP_HOST;
        $ftp_config['username'] = FTP_USER;
        $ftp_config['password'] = FTP_PWD;
        $ftp_config['debug'] = FTP_DEBUG;
        $ftp_config['passive'] = FTP_PASSIVE;

        // FTPの接続
        $this->ftp->connect($ftp_config);

        // 処理結果待ちファイルを0で作成し受注システムにアップロードする
        $ftp_result = $this->ftp->write_file(FTP_FILE_DIR . EXEC_RESULT_FILE_NAME, EXEC_RESULT_STAT, 'wb');

        return $ftp_result;
    }

    /**
     * 処理完了ファイルをリネームする
     * @param $process_datetime string
     */
    private function _rename_file($process_datetime)
    {
        // 処理が完了したら取り込みファイルリネーム
        rename(FTP_TEMP_PATH . RECEIVE_FILE_NAME, COMPLETE_PATH . date('YmdHis') . '_' . $process_datetime . '_' . RECEIVE_FILE_NAME);
    }

    /**
     * 受信データの取込み
     *
     * @param $lines array
     * @param $outside_receive_mng_id int
     * @return int
     * @throws Exception
     */
    public function import_receive_data($lines, $outside_receive_mng_id)
    {
        $import_count = 0;
        $line_count = count($lines);
        for ($i = 1; $i < $line_count - 1; $i++) {
            $errors = array();

            // 取り込み項目に分けた連想配列セット
            $body = $this->receive_batch_mdl->convert_body($lines[$i]);

            // ただしく項目分けができなかった場合はエラーデータとする
            if ($body === null) {
                $insert_data = $this->receive_batch_mdl->create_outside_receive_data_error_pattern($outside_receive_mng_id, $lines[$i], array(E_COLMN_NUM));
                $this->receive_batch_mdl->insert_outside_receive_data($insert_data);
                continue;
            }

            // データの入力チェック
            if ($this->_sales_batch_validation($body, $errors) === false) {
                $insert_data = $this->receive_batch_mdl->create_outside_receive_data_error_pattern($outside_receive_mng_id, $lines[$i], $errors);
                $this->receive_batch_mdl->insert_outside_receive_data($insert_data);
                continue;
            }

            // データ整合チェックでエラーが有った場合は警告として登録する
            if (count($errors) > 0) {
                $result_status = RECEIVE_RESULT_WARNING;
            } else {
                $result_status = RECEIVE_RESULT_OK;
            }

            // outside_relationへのインサート
            if ($this->receive_batch_mdl->exist_relation_by_report_no($body->report_no) === false) {
                $sales_key = $this->receive_batch_mdl->select_sales_key_from_report_no($body->report_no);
                $this->receive_batch_mdl->insert_outside_relation($sales_key, $body);
            }

            // outside_receive_dataへのインサート
            $insert_receive_data = $this->receive_batch_mdl->generate_outside_receive_data($outside_receive_mng_id, $body, $result_status, implode("\r\n", $errors));
            $this->receive_batch_mdl->insert_outside_receive_data($insert_receive_data);

            $import_count++;
        }
        return $import_count;
    }
}

/* End of file receive_batch.php */
/* Location: ./application/controllers/batch/receive_batch.php */