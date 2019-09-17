<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Transfer del single
 *
 * 振込消込(個別)画面のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property transfer_del_single_mdl $transfer_del_single_mdl
 * @property transfer_del_all_mdl $transfer_del_all_mdl
 */
class Transfer_del_single extends MY_Controller {

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

            $this->load->model("credit/transfer_del_single_mdl");
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
            
            // 振込消込一覧用のセッションを設定
            $this->transfer_del_single_mdl->set_list_session();
            
            // 請求書管理idがあった場合、得意先名で絞り込む
            $id = $this->input->get('id');
            $customer = "";
            if(!empty($id)) {
                $customer = $this->transfer_del_single_mdl->get_customer_name($id);
            }
            
            if(isset($_POST['regist'])) {
                if($_POST['regist'] == "regist") {
                    // 登録処理
                    $this->_exec();
                } else if($_POST['regist'] == "cancel") {
                    // 削除処理
                    $this->_cancel();
                }
            }
            
            // 一覧の絞込条件を取得する
            $condition = $this->transfer_del_single_mdl->create_bill_search_condition($customer);
            
            // 一覧
            $data['list_data']['credit_list'] = $this->transfer_del_single_mdl->get_credit_list_data($customer);
            
            // 請求情報＆消込情報の取得
            $data['list_data']['bill_list'] = $this->transfer_del_single_mdl->get_bill_info_data($condition);
            
            // データ件数を取得する
            $total = $this->transfer_del_single_mdl->get_bill_list_data($condition, 0, true);

            // ページ情報を取得
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']['bill_list']));
            
            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total, PER_CREDIT_PAGE_CNT);
            
            // POSTデータを返却する
            $data['post_data'] = $this->transfer_del_single_mdl->get_post_data();
                
            // view読み込み
            $this->load->view('credit/transfer_del_single', $data);
            
		}

	/*
	 * ---------------------------------------------------------------------------
	 * 個別処理
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 登録処理
	 *
	 * @access private
	 * @return boolean
	 * @author Kita Yasuhiro
	 */
        private function _exec()
        {
            
            $index = $_POST['bill_mng_id'];
            
            $this->form_validation->set_rules('reconcile_date['.$index[0].'][]', '消込日', 'trim|required|date|callback_proc_date');
            $this->form_validation->set_rules('reconcile_money['.$index[0].'][]', '消込額', 'trim|required|rec_money');
            $this->form_validation->set_rules('charge_money['.$index[0].'][]', '振込手数料', 'trim|money');
            $this->form_validation->set_rules('credit_no['.$index[0].'][]', '行番号', 'trim|required|numeric|callback_max_row');
            $this->form_validation->set_rules('credit_received_id[]', '入金ID', 'trim|callback_comp_credit_info');
            $this->form_validation->set_rules('max_money', '', 'callback_max_money');
	        $this->form_validation->set_rules('check_process_data', '', 'callback_check_process_data');

            if($this->form_validation->run()) {
               
                // 登録処理 
                $this->transfer_del_single_mdl->regist_data();
                
                // セッション削除
                //$this->session->unset_userdata($this->router->class);
                
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
	 * @access private
	 * @return boolean
	 * @author Kita Yasuhiro
	 */
        private function _cancel() 
        {
               
            $row = $_POST['target_row'];
            $child_id = $_POST['credit_data_id'][$row];
            
            if($this->transfer_del_single_mdl->get_child_id_cnt($child_id) == 0) {
                $this->body = 'onload="'.alert_href('既に削除されています。', $this->get_back_url()).'"';
                
            } else {
                // 消込取消処理 
                $this->transfer_del_single_mdl->cancel_data();
                
                // 画面再表示
                $this->body = 'onload="'.alert_href('消込を取消しました。', $this->get_back_url()).'"';
            }
            
            return TRUE;
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 独自チェック
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 入金テーブルの行番号が存在しない場合エラー
	 *
	 * @access public
	 * @param  string $value
	 * @param  boolean $flg
	 * @param  int $cycle
	 * @return bollean
	 * @author Kita Yasuhiro
	 */
        public function max_row($value, $flg, $cycle)
        {
         
            if($value == "0") {
                $this->form_validation->set_message("max_row", ERR_CREDIT_MAX_ROW);
                return false;
            }
            
            
            if($value > $_POST['max_row']) {
                $this->form_validation->set_message("max_row", ERR_CREDIT_MAX_ROW);
                return false;
            }
            
            return true;
        }

	/**
	 * 入金テーブルの情報の総合チェックを行う。
	 *
	 * @access public
	 * @param  string $value
	 * @param  boolean $flg
	 * @param  int $cycle
	 * @return boolean
	 * @author Kita Yasuhiro
	 */
        public function comp_credit_info($value, $flg, $cycle)
        {
            
            // 入金IDが入っているか？
            if(empty($value)) {
                $this->form_validation->set_message("comp_credit_info", ERR_CREDIT_REQUIRE_ID);
                return false;
            }
            
            // 得意先が合っているか？
            $this->db->from(T_CREDIT_RECIEVED);
            $this->db->where('credit_received_id', $value);
            $this->db->where('customer_disp_name', $_POST['customer_disp_name']);
            $cnt = $this->transfer_del_single_mdl->get_total_cnt();
            
            if($cnt == 0) {
                $this->form_validation->set_message("comp_credit_info", ERR_CREDIT_CUSTOMER_NAME);
                return false;
            }
            
            // 入金残高より大きい値が入力されていないか？
            $target = $_POST['bill_mng_id'][0];
            $money = erase_money_sep($_POST['reconcile_money'][$target][$cycle]);
            
            $this->db->from(T_CREDIT_RECIEVED);
            $this->db->where('credit_received_id', $value);
            $this->db->where('balance_money >=', (int)$money);
            $cnt = $this->transfer_del_single_mdl->get_total_cnt();
            
            if($cnt == 0) {
                $this->form_validation->set_message("comp_credit_info", ERR_CREDIT_GREATER_MONEY);
                return false;
            }
            
            return true;
            
        }
        
	/**
	 * 請求額より大きい金額が入力されていないか？
	 *
	 * @access public
	 * @return boolean
	 * @author Kita Yasuhiro
	 */
        public function max_money()
        {
            $target = $_POST['bill_mng_id'][0];
            
            $money = 0;
            foreach ($_POST['reconcile_money'][$target] as $value) {
                $money += erase_money_sep($value);
            }
            
            foreach ($_POST['charge_money'][$target] as $value) {
                $money += erase_money_sep($value);
            }
            
            if($money > (int)$_POST['bill_money']) {
                $this->form_validation->set_message("max_money", ERR_BILL_GREATER_MONEY);
                return false;
            }
            
            return true;
            
        }
        
	/**
	 * 処理年月より古い日付が指定された場合エラー
	 *
	 * @access public
	 * @param  string $value
	 * @return boolean
	 * @author Kita Yasuhiro
	 */
        public function proc_date($value)
        {
            
            $proc = $this->get_db_proc_month();
            $target = date("Ym", strtotime($value));
            
            if($proc > $target){
                $this->form_validation->set_message("proc_date", ERR_PROC_DATE);
                return false;
            } 
            
            return true;
            
        }

	/**
	 * 表示されている請求書情報を元に処理を行ってよいかチェックを行う
	 *
	 * @access public
	 * @return boolean
	 */
		public function check_process_data()
		{
			$bill_mng_id_ary = $_POST['bill_mng_id'];

			if(count($bill_mng_id_ary) > 0)
			{
				// 指定された請求書が存在するかチェックを行う
				$res_ary = $this->transfer_del_all_mdl->get_bill_count( $bill_mng_id_ary );
				if(count($res_ary) != 1)
				{
					$this->form_validation->set_message( 'check_process_data', ERR_BILL_NO_EXIST );
					return FALSE;
				}

			}

			return TRUE;
		}
}

/* End of file transfer_del_single.php */
/* Location: ./application/controllers/credit/transfer_del_single.php */