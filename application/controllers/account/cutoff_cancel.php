<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * 締処理後取消入力のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property cutoff_cancel_mdl $cutoff_cancel_mdl
 */
class Cutoff_cancel extends MY_Controller {

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
                
                $this->load->model('account/cutoff_cancel_mdl');

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
 
            $search = $this->cutoff_cancel_mdl->create_search_condition();
            
            $data['search'] = $this->cutoff_cancel_mdl->get_input_condition();

            $data['list_data'] = $this->cutoff_cancel_mdl->get_disp_data($search);

            // ページ情報を取得
            $total = $this->cutoff_cancel_mdl->get_list_cnt($search);
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
            
            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total);
            
            // マスタ
            $data['mst'] = $this->cutoff_cancel_mdl->get_mst_data();
            
            // ラジオボタンの初期値を設定
            $this->_get_search_init($data);
            
            // 振込消込一覧用のセッションを設定
            $this->cutoff_cancel_mdl->set_list_session($data['search']);

            // view読み込み
            $this->load->view('account/cutoff_cancel', $data);
	}
        
	/**
	 * 訂正登録ボタン押下時イベント
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
        public function regist()
        {
            
            $data = array();
            
            $ses_search = $this->session->userdata($this->router->class);
            $data['search'] = $ses_search['search'];
            
            $search = $this->cutoff_cancel_mdl->create_search_condition($data['search']);

            $data['list_data'] = $this->cutoff_cancel_mdl->get_disp_data($search);
            
            // ページ情報を取得
            $total = $this->cutoff_cancel_mdl->get_list_cnt($search);
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
            
            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total);
            
            // マスタ
            $data['mst'] = $this->cutoff_cancel_mdl->get_mst_data();
            
            // 登録処理
            if($_POST['exec_name'] == 'regist') {
                
                // 入力チェック
                $index = $_POST['bill_mng_id'];

                $this->form_validation->set_rules('correct_money['.$index[0].'][]', '訂正金額', 'trim|required|money|callback_comp_bill_money|callback_comp_credit_money');
//                $this->form_validation->set_rules('correct_type['.$index[0].'][]', '訂正区分', 'trim|required');
                $this->form_validation->set_rules('credit_status', '状態', '');

                if($this->form_validation->run()) {
                    // 登録処理
                    $this->cutoff_cancel_mdl->regist_data();

                    // アラート処理実行
                    $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';

                }
                
            } else {
                
                // 削除処理
                $this->cutoff_cancel_mdl->cancel_data();
                
                // アラート処理実行
                $this->body = 'onload="'.alert_href('削除しました。', $this->get_back_url()).'"';
                
                
            }
            
            // 振込消込一覧用のセッションを設定
            $this->cutoff_cancel_mdl->set_list_session($data['search']);

            // view読み込み
            $this->load->view('account/cutoff_cancel', $data);
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 検索フィールドの初期値
	 *
	 * @access public
     * @param  $data array
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_search_init(&$data) {
            
            if(count($data['search']) == 0) {
                // ラジオボタンの初期値を設定
                $data['search']['status'] = "1";
                
                // 対象月の初期値
                $data['search']['target_month'] = $this->cutoff_cancel_mdl->get_init_target_month();
                
            } else {
                
                if(empty($data['search']['target_month'])) {
                    $data['search']['target_month'] = $this->cutoff_cancel_mdl->get_init_target_month();
                }
                
                
            }
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 独自チェック
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 請求調整額が残額より大きい場合エラー
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function comp_bill_money($value)
        {
            
            $index = $_POST['bill_mng_id'];
            
            if($_POST['correct_type'][$index[0]][0] != "1") return true;
            
            $balance = erase_money_sep($_POST['balance_money'][$index[0]]);
            $correct = erase_money_sep($value);
            
            if($correct == 0) {
                $this->form_validation->set_message("comp_bill_money", ERR_COMP_CORRECT_ZERO);
                return false;
            }
            
            if($correct > 0) {
                return true;
                
            } else if($correct < 0) {
                
                if($balance > ($correct * -1)) {
                    $this->form_validation->set_message("comp_bill_money", str_replace("#GREATER#", "小さい", ERR_COMP_BILL_MONEY));
                    return false;
                }
                
            } else {
                return true;
            }
            
            return true;
            
        }
        
	/**
	 * 消込調整額が請求額より大きい場合エラー
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function comp_credit_money($value)
        {
            
            $index = $_POST['bill_mng_id'];
            
            if($_POST['correct_type'][$index[0]][0] != "2") return true;
            
            $balance = erase_money_sep($_POST['balance_money'][$index[0]]);
            $correct = erase_money_sep($value);
            
            if($correct == 0) {
                $this->form_validation->set_message("comp_credit_money", ERR_COMP_CORRECT_ZERO);
                return false;
            }
            
            if($correct > 0) {
                if($balance < $correct) {
                    $this->form_validation->set_message("comp_credit_money", str_replace("#GREATER#", "大きい",ERR_COMP_CREDIT_MONEY));
                    return false;
                }
            } else if($correct < 0) {
                
                if($balance > $correct) {
                   return true;
                }
                
            } else {
                return true;
            }
            
            return true;
        }
        

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */