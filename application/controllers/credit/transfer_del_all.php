<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Transfer del all
 *
 * 振込一括(消込)のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * 
 * @property transfer_del_all_mdl $transfer_del_all_mdl
 * @property CI_Form_validation $form_validation
 */
class Transfer_del_all extends MY_Controller {

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
		public function __construct()
		{
	        parent::__construct();

            $this->load->model("credit/transfer_del_all_mdl");

		}

	/*
	 * ---------------------------------------------------------------------------
	 * イベント
	 * ---------------------------------------------------------------------------
	 */
	/**
	 * Indexページ処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
		public function index()
		{

            $data = array();
            $data['search'] = array();
            
            // 振込消込一覧用のセッションを設定
            $this->transfer_del_all_mdl->set_list_session();
            
            // マスタデータの取得
            $data['mst'] = $this->transfer_del_all_mdl->get_mst_data();
            
            if(isset($_POST['regist'])) {
                // 登録処理
                $this->_exec();
            } else if(isset($_POST['cancel'])) {
                // 消込取消処理
                $this->_cancel();
            }
            
            // 検索条件の設定
            $data['search'] = $this->transfer_del_all_mdl->get_input_condition();
            
            // ラジオボタンの初期値を設定
            $this->_get_radio_init($data);
            
            // 一覧
            $total = 0;
            $data['list_data'] = $this->transfer_del_all_mdl->get_disp_list_data($total);
            
            // ページ情報を取得
            $data['page_link'] = $this->pagination->create_page_link($total, PER_PAGE_CNT);
            
            // view読み込み
            $this->load->view('credit/transfer_del_all', $data);
		}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 登録処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _exec()
        {
            
            if($this->form_validation->run("transfer_del_all")) {
               
                // 登録処理 
                $this->transfer_del_all_mdl->regist_data();
                
                // 画面再表示
                $this->body = 'onload="'.alert_href('消込登録しました。', $this->get_back_url()).'"';
                
            } else {
                return FALSE;
            }
            
            return TRUE;
        }
        
	/**
	 * 消込取消処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _cancel() 
        {
            
            if($this->form_validation->run("transfer_del_all_can")) {
               
                // 消込取消処理 
                $this->transfer_del_all_mdl->cancel_data();
                
                // 画面再表示
                $this->body = 'onload="'.alert_href('消込を取消しました。', $this->get_back_url()).'"';
                
            } else {
                return false;
            }
            
            return TRUE;
            
        }
        
	/**
	 * ラジオボタンの初期値
	 *
	 * @access public
     * @param   $data array
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_radio_init(&$data) {
            
            if(count($data['search']) == 0) {
                // ラジオボタンの初期値を設定
                $data['search']['credit_status'] = "1";
                $data['search']['other_rb'] = "1";
            }
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 入力チェックメソッド
	 * ---------------------------------------------------------------------------
	 */

    /**
	 * チェックボックスが1件もない場合エラー
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function is_check()
        {
            
            // 入力チェックを行う
            if($this->input->post("set_target_chk") == "") {
                
                $this->form_validation->set_message("is_check", ERR_ALL_CHECK);
                return false;
            }
            
            return true;
            
        }

    /**
	 * チェックボックスが入っている場合、消込日が必須
	 *
	 * @access private
     * @param  string $del_date
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function reconcile_required($del_date, $flg, $cycle)
        {
            
            $input = $_POST;
            
            $target = $input['credit_received_id'][$cycle];
            
            if(isset($input['set_target_chk'][$target])) {

                if(!$this->form_validation->required($del_date)) {

                    $this->form_validation->set_message("reconcile_required", ERR_RECONCILE_DATE_CHK);

                    return false;
                }

            }
            
            return true;
            
        }
        
    /**
	 * 処理年月より前の日付の場合エラー
	 *
	 * @access private
     * @param  string $del_date
     * @param  boolean $flg
     * @param  int $cycle
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function proc_date($del_date, $flg, $cycle)
        {
            
            $proc = $this->session->userdata(SS_KEY_PROC_MONTH);
            $target = date("Ym", strtotime($del_date));
            
            if($proc > $target){
                $this->form_validation->set_message("proc_date", ERR_PROC_DATE);
                return false;
            } 
            
            return true;
            
        }

	/**
	 * 表示されている請求書情報、入金情報を元に処理を行ってよいかチェックを行う
	 *
	 * @access public
	 * @return boolean
	 */
		public function check_process_data()
		{
			$input = $_POST;

			$bill_ary = array();
			$received_ary = array();

			// チェックボックスが選択されている場合のみチェックを行う
			if(array_key_exists('set_target_chk', $input)) {
				foreach ( $input['set_target_chk'] as $index ) {

					$target = array_keys( $input['credit_received_id'], $index );

					// 請求書IDを格納
					$bill_ary[] = $input['bill_mng_id'][ $target[0] ];

					// 入金IDを格納
					$received_ary[] = $input['credit_received_id'][ $target[0] ];
				}

				// 対象の請求書を取得する
				$res_ary = $this->transfer_del_all_mdl->get_bill_count( $bill_ary );
				if ( count( $res_ary ) != count( $bill_ary ) ) {
					// 取得件数が異なる場合はエラーとし処理を行わない
					$this->form_validation->set_message( 'check_process_data', ERR_BILL_NO_EXIST );

					return FALSE;
				}

				// 対象の入金情報を取得する
				$res_ary = $this->transfer_del_all_mdl->get_received_count( $received_ary );
				if ( count( $res_ary ) != count( $received_ary ) ) {
					// 取得件数が異なる場合はエラーとし処理を行わない
					$this->form_validation->set_message( 'check_process_data', ERR_RECEIVED_NO_EXIST );

					return FALSE;
				}
			}

			return TRUE;
		}
}

/* End of file transfer_del_all.php */
/* Location: ./application/controllers/credit/transfer_del_all.php */