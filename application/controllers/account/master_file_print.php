<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Master file print
 *
 * 得意先元帳のコントローラー
 *
 * @link		http://www.datalyze.co.jp
 * 
 * @property master_file_print_mdl $master_file_print_mdl
 */
class Master_file_print extends MY_Controller {

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
                
                $this->load->model('account/master_file_print_mdl');

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
            $data['list_data'] = array();
            $data['customer_info'] = array();

            // 検索条件を取得
            $search = $this->master_file_print_mdl->create_search_condition();
            
            $data['search'] = $this->master_file_print_mdl->get_input_condition();
            
            if($this->_exec_chk()) {
                
                // 得意先の情報を設定
                if(count($_POST) > 0) {
                    $this->load->model('db/m_customer_mdl');
                    $customer = $this->m_customer_mdl->get_customer_info($_POST['customer_disp_name']);;
                    $customer[0]->disp_cutoff_date = cutoff_date_str($customer[0]->cutoff_date);
                    $data['customer_info'] = $customer[0];
                }
                
                // データを取得
                $data['list_data'] = $this->master_file_print_mdl->get_disp_data($search, $data['customer_info']);
                
                if(count($_POST) > 0) {
                    if(isset($_POST['print'])) {
                        // 元帳出力処理
                        $this->master_file_print_mdl->exec_print($data['list_data'], $data['customer_info']);
                    }

                }
                
            }
            
            if(count($_POST) == 0) {
                $data['msg'] = WARN_SET_CONDITION;
            } else {
                $data['msg'] = WARN_NO_LIST_MSG;
            }

            // view読み込み
            $this->load->view('account/master_file_print', $data);
	}
        
	/**
	 * dispページ処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function disp()
	{
                
            $data = array();
            $data['list_data'] = array();
            $data['customer_info'] = array();
            
            // GET情報を取得
            $id = $this->input->get("id");
            $name = $this->input->get("name");
            $target = $this->input->get("target");
            $to = date("Y")."/".date("m")."/".get_month_endday(date("Y"), date("m"));
            $from = date("Y/m/d", strtotime($target."01"."-1 month"));
            
            // IDか名称から得意先の情報を取得
            $this->load->model('db/m_customer_mdl');
            $customer = $this->m_customer_mdl->get_customer_info($name, $id);;
            $customer[0]->disp_cutoff_date = cutoff_date_str($customer[0]->cutoff_date);
            $data['customer_info'] = $customer[0];

            $data['search']['customer_disp_name'] = $customer[0]->customer_disp_name;
            $data['search']['target_date_from'] = $from;
            $data['search']['target_date_to'] = $to;

            // 検索条件を取得
            $search = $this->master_file_print_mdl->create_search_condition($data['search']);

            // データを取得
            $data['list_data'] = $this->master_file_print_mdl->get_disp_data($search, $data['customer_info'], $from);

            // view読み込み
            $this->load->view('account/master_file_print', $data);
	}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * チェックを実行
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _exec_chk() 
        {
            
            if(count($_POST) > 0) {
                
                $this->form_validation->set_rules('target_date_from', '期間(開始日)', 'trim|required|date');
                $this->form_validation->set_rules('target_date_to', '期間(終了日)', 'trim|required|date');
                $this->form_validation->set_rules('customer_disp_name', '得意先名', 'trim|required|callback_exist_customer');
                $this->form_validation->set_rules('chk_span', '', 'callback_chk_span');

                if(!$this->form_validation->run()) {
                    return false;
                }
            }
            
            return true;
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別入力チェックメソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 得意先が存在するかチェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function exist_customer()
        {

            // 担当者の存在チェック
            if ($this->master_file_print_mdl->get_customer_cnt($_POST['customer_disp_name']) == 0) {
                $this->form_validation->set_message('exist_customer', ERR_EXIST_CUSTOMER);
                return false;
            }
            
            return true;
            
        }
        
	/**
	 * 期間が1年以上を選択していないかチェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function chk_span()
        {
         
            $from = $_POST['target_date_from'];
            $to = $_POST['target_date_to'];
            
            if(empty($from)) return true;
            if(empty($to)) return true;
            
            $limit_date = date("Y/m/d", strtotime($from." 1 year"));
            
            if(strtotime($to) > strtotime($limit_date)) {
                $this->form_validation->set_message('chk_span', ERR_LIMIT_SPAN);
                return false;
            }
            
            return true;
            
        }
        
}

/* End of file master_file_print.php */
/* Location: ./application/controllers/master_file_print.php */