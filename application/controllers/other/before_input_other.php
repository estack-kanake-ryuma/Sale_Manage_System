<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Before_input_other
 *
 * 分割金額変更画面のコントローラークラス
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property before_input_mdl $before_input_mdl
 * @property sales_mdl $sales_mdl
 */
class Before_input_other extends MY_Controller {

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
            $this->load->model("other/before_input_mdl");
            $this->load->model("bill/sales_mdl");
            $this->title = "分割金額変更　－　売掛金管理システム";
            $this->js = "/js/screen/bef_input.js";
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
         
            // 変更するIDを取得
            $id = $this->input->get('id');
            
            // 売上情報を取得
            $data['sales'] = $this->_get_sales_data($id);
            
            // 入金種別が変更可能かのチェック
            $data['credit'] = $this->before_input_mdl->get_credit_cnt($id, $data['sales']['mng']);
            
            $data['mst'] = $this->before_input_mdl->get_mst_data();
            
            // データの変更処理
            if(count($_POST) > 0) {
                // データ登録処理
                $this->_exec();
            }
            
            $this->load->view('other/before_input_other', $data);
	}
        
    /**
	 * データを取得し返却
	 *
	 * @access public
	 * @param $id integer
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_sales_data($id)
        {
            $data = array();
            
            $mng = $this->sales_mdl->get_sales_mng($id);
            
            // 配列にキャストし格納
            $data['mng'] = (array)$mng[0];
            
            // データ編集
            $data['mng']['sep_month_from'] = substr($data['mng']['sep_month_from'], 0, 4)."/".substr($data['mng']['sep_month_from'], 4, 2);
            $data['mng']['sep_month_to'] = substr($data['mng']['sep_month_to'], 0, 4)."/".substr($data['mng']['sep_month_to'], 4, 2);
            $data['mng']['disp_sum_money'] = money_sep($data['mng']['sum_money']);
            $data['mng']['abstract_id'] = $data['mng']['abstract_id'].",".$data['mng']['abstract_name'];
            
            $before = $this->sales_mdl->get_sales_before($id);
            
            $i=0;
            foreach ($before as $obj) {
                $data['before'][$i] = (array)$obj;
                $data['before'][$i]['sep_money'] = money_sep($data['before'][$i]['sep_money']);
                $i++;
            }
            
            if(count($before) == 0) $data['before'] = array();
            
            return $data;
            
        }
        
	/**
	 * 登録処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _exec() {

            
            $this->form_validation->set_rules('customer_type', '得意先区分', '');
            $this->form_validation->set_rules('abstract_id', '摘要', '');
            
            if($_POST['credit_type_hf'] == CREDIT_TYPE_BEFORE) {
            
                $this->form_validation->set_rules('sep_month_from', '分割開始月', 'trim|yearmonth');
                $this->form_validation->set_rules('sep_month_to', '分割終了月', 'trim|yearmonth');
                $this->form_validation->set_rules('sep_inp_money_hd', '分割金額計', 'trim|callback_compare_sep_money');
                $this->form_validation->set_rules('sep_money_hd', '売上合計金額', 'trim');
                $this->form_validation->set_rules('sep_money[]', '分割金額', 'trim|money|callback_sep_money_required');
                $this->form_validation->set_rules('sep_year_month[]', '分割金額', 'trim');
                $this->form_validation->set_rules('sep_tax_type[]', '消費税率', 'trim');
                
            } else {
                $this->form_validation->set_rules('credit_type', '入金種別', '');
            }

            if($this->form_validation->run()) {
                // 変更
                $this->before_input_mdl->update_data();

                // アラート処理実行
                $this->body = 'onload="alert(\'登録しました。\');window.close()";';

            } else {
                return false;
            }

            
        }
        
	/**
	 * 分割金額計の整合正チェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function compare_sep_money() 
        {
            
            $total = erase_money_sep($this->input->post("sep_money_hd"));
            $sep_total = erase_money_sep($this->input->post("sep_inp_money_hd"));

            // 金額が等しいかチェックする。
            if ($total != $sep_total) {
                $this->form_validation->set_message('compare_sep_money', ERR_COMPARE_SEP_MONEY);
                return false;
            }
            
            return true;
        }
        
	/**
	 * 分割金額必須チェック
	 *
	 * @access public
	 * @param $sep_money string
	 * @param $flg boolean
	 * @param $cycle string
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function sep_money_required($sep_money, $flg, $cycle) 
        {
            if($_POST['sep_disp_flg'][$cycle] == "1") {
                
                if(!$this->form_validation->required($sep_money)) {
                    $this->form_validation->set_message('sep_money_required', ERR_SEP_MONEY);
                    return false;
                }
            }
            
            return true;
            
        }
        
}

/* End of file before_input_other.php */
/* Location: ./application/controllers/other/before_input_other.php */