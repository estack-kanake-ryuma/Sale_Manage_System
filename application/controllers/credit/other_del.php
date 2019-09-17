<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property other_del_mdl $other_del_mdl
 */
class Other_del extends MY_Controller {
    
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
                
                $this->load->model("credit/other_del_mdl");

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
            
            if(isset($_POST['regist'])) {
                // 登録処理
                $this->_exec();
                
            }
            
            $condition = $this->other_del_mdl->create_search_condition();
            
            // 検索条件の設定
            $data['search'] = $this->other_del_mdl->get_input_condition();
            
            // 一覧
            $data['list_data'] = $this->other_del_mdl->get_disp_list_data($condition);
            
            // 合計
            $total = 0;
            if($this->other_del_mdl->get_disp_type() == "bill") {
                $total = $this->other_del_mdl->get_total_list_cnt($condition);
            } else {
                $total = $this->other_del_mdl->get_credit_list_cnt($condition);
            }
                    
            // マスタデータの取得
            $data['mst'] = $this->other_del_mdl->get_mst_data();
            
            // ラジオボタンの初期値を設定
            $this->_get_radio_init($data);
            
            // ページ情報を取得
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
            
            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total);

            // 得意先一覧用のセッションを設定
            $this->other_del_mdl->set_list_session();
            
            // view読み込み
            $this->load->view('credit/other_del', $data);
	}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        private function _exec() 
        {
            if($_POST['regist'] == "bill_regist") {
                return $this->_bill_pool_exec();
            } else {
                return $this->_credit_pool_exec();
            }
            
        }
        
        /**
	 * 請求書消込処理
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _bill_pool_exec() 
        {
            $index = $_POST['bill_mng_id'];
            
            if($_POST['regist_type'] == "regist") {
                $this->form_validation->set_rules('reconcile_date['.$index[0].'][]', '消込日', 'trim|required|date|callback_proc_date');
                $this->form_validation->set_rules('reconcile_type['.$index[0].'][]', '入金種別', 'trim|required');
                $this->form_validation->set_rules('reconcile_money['.$index[0].'][]', '消込額', 'trim|required|money');
                $this->form_validation->set_rules('disp_type', '', '');
                $this->form_validation->set_rules('credit_status', '', '');

                if($this->form_validation->run()) {

                    // 登録処理 
                    $this->other_del_mdl->bill_regist_data();

                    // 画面再表示
                    $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';

                } else {
                    return false;
                }
                
            } else {
                if($this->other_del_mdl->get_child_id_cnt($_POST['credit_data_id']) == 0) {
                    // 既に削除されている場合
                    $this->body = 'onload="'.alert_href('既に削除されています。', '/credit/other_del').'"';
                } else {
                    // 取消処理 
                    $this->other_del_mdl->bill_cancel_data();
                    // 画面再表示
                    $this->body = 'onload="'.alert_href('取消しました。', $this->get_back_url()).'"';
                }
                
                
            }
            
            return true;
            
        }
        
         /**
	 * 入金額消込処理
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
       private function _credit_pool_exec() 
        {

            $index = $_POST['credit_received_id'];
            
            if($_POST['regist_type'] == "regist") {
            
                $this->form_validation->set_rules('adjust_date['.$index[0].'][]', '入金調整日', 'trim|required|date|callback_proc_date');
                $this->form_validation->set_rules('adjust_type['.$index[0].'][]', '調整種別', 'trim|required');
                $this->form_validation->set_rules('adjust_money['.$index[0].'][]', '調整額', 'trim|required|rec_money|callback_max_credit_money');
                $this->form_validation->set_rules('disp_type', '', '');
                $this->form_validation->set_rules('credit_status', '', '');
                //$this->form_validation->set_rules('max_money', '', 'callback_max_money');

                if($this->form_validation->run()) {

                    // 登録処理 
                    $this->other_del_mdl->credit_regist_data();

                    // 画面再表示
                    $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';

                } else {
                    return false;
                }
                
            } else {
                
                // 取消処理 
                $this->other_del_mdl->credit_cancel_data();

                // 画面再表示
                $this->body = 'onload="'.alert_href('取消しました。', $this->get_back_url()).'"';
                
            }
            
            return true;
           
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
            if($this->input->post("print_chk") == "") {
                
                $this->form_validation->set_message("is_check", ERR_ALL_CHECK);
                return false;
            }
            
            return true;
            
        }

        /**
	 * チェックボックスが入っている場合、消込額が必須
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function reconcile_required($reconcile_money, $flg, $cycle)
        {
            
            $input = $_POST;
            
            if(isset($input['print_chk'][$cycle])) {

                if(!$this->form_validation->required($reconcile_money)) {

                    $this->form_validation->set_message("reconcile_required", ERR_RECONCILE_MONEY_CHK);

                    return false;
                }

            }
            
            return true;
            
        }
        
        /**
	 * チェックボックスが入っている場合、消込額が必須
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        public function greater_money($reconcile_money, $flg, $cycle) {
            
            $input = $_POST;
            
            if(isset($input['print_chk'][$cycle])) {
                
                $money = str_replace(",", "", $reconcile_money);
                
                if($money > $input["bill_money"][$input['print_chk'][$cycle]]) {
                    $this->form_validation->set_message("greater_money", ERR_RECONCILE_MONEY_GREATER);
                    return false;
                }
                
            }
            
            return true;
        }
        
	/**
	 * 入金残額より大きい値が入力されていないか？
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function max_credit_money()
        {
            
            $target = $_POST['credit_received_id'][0];
            
            $balance_money = $_POST['balance_money'];
            
            $money = 0;
            foreach ($_POST['adjust_money'][$target] as $value) {
                $money += erase_money_sep($value);
            }
            
            if($money > $balance_money) {
                
                $this->form_validation->set_message("max_credit_money", ERR_CREDIT_GREATER_MONEY);
                return false;
            }
            
            return true;
            
        }
        
	/**
	 * ラジオボタンの初期値
	 *
	 * @access private
     * @param  $data array
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_radio_init(&$data) {
            
            if(count($data['search']) == 0) {
                $data['search']['disp_type'] = "1";
                $data['search']['credit_status'] = "1";
            } else {
                if($this->other_del_mdl->get_disp_type() == "bill") {
                    // ラジオボタンの初期値を設定
                    $data['search']['disp_type'] = "1";
                } else {
                    $data['search']['disp_type'] = "2";
                }
                
            }
            
        }
        
	/**
	 * 処理年月より古い日付が指定された場合エラー
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function proc_date($value)
        {
            
            $proc = $proc = $this->get_db_proc_month();
            $target = date("Ym", strtotime($value));
            
            if($proc > $target){
                $this->form_validation->set_message("proc_date", ERR_PROC_DATE);
                return false;
            } 
            
            return true;
            
        }
        
        
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */