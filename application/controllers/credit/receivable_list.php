<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * 
 * @property receivable_mdl $receivable_mdl
 */
class Receivable_list extends MY_Controller {

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
                
                $this->load->model("credit/receivable_mdl");

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
                $data['list_total'] = array();
                
                $data['mst'] = $this->receivable_mdl->get_mst_data();
                
                $total = 0;
                $csv = "";
                if($this->_exec_chk()) {
                    
                    $input = $this->receivable_mdl->get_input_condition();
                    if(isset($input['csv'])) {
                        $csv = $this->receivable_mdl->get_csv_data();
                        
                        $this->load->helper('download');
                        $colum = '"得意先名称","繰越残高","増加","減少","残高","繰越金額 - 減少"';
                        $csv = $colum.$csv;
                        $csv = mb_convert_encoding($csv,'Shift-JIS','UTF-8');
                        
                        $from = $_POST['date_from'];
                        $to = $_POST['date_to'];
                        $fname = 'urikakinsyukei_'.str_replace("/", "", $from).'_'.str_replace("/", "", $to).'.csv';
                        
                        force_download($fname , $csv);
                        
                    } else {
                        $data['list_data'] = $this->receivable_mdl->get_list_data($total, $data['list_total']);
                    }
                    
                }
                
                // ページ情報を取得
                $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

                // ページリンク
                $data['page_link'] = $this->pagination->create_page_link($total);
                
                if(count($_POST) == 0) {
                    $data['msg'] = WARN_SET_CONDITION;
                } else {
                    $data['msg'] = WARN_NO_LIST_MSG;
                }
                
                $data['search'] = $this->receivable_mdl->get_input_condition();
                $this->_get_radio_init($data);
                
                // 得意先一覧用のセッションを設定
                $this->receivable_mdl->set_list_session();
                
                // view読み込み
                $this->load->view('credit/receivable_list', $data);
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
                
                $this->form_validation->set_rules('date_from', '期間(開始日)', 'trim|required|date');
                $this->form_validation->set_rules('date_to', '期間(終了日)', 'trim|required|date');
                $this->form_validation->set_rules('other_rb', '', '');
                $this->form_validation->set_rules('customer_type', '得意先区分', '');
                $this->form_validation->set_rules('chk_span', '', 'callback_chk_span');

                if(!$this->form_validation->run()) {
                    return false;
                }
            }
            
            return true;
            
        }
        
	/**
	 * ラジオボタンの初期値
	 *
	 * @access public
     * @param  $data array
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_radio_init(&$data) {
            
            if(count($_POST) == 0 && count($data['search']) == 0) {
                // ラジオボタンの初期値を設定
                $data['search']['other_rb'] = "1";
            }
            
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
         
            $from = $_POST['date_from'];
            $to = $_POST['date_to'];
            
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

/* End of file home.php */
/* Location: ./application/controllers/home.php */