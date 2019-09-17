<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sales_input Controller
 *
 * Ajaxクラスのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property Ajax_mdl $ajax_mdl
 */
class Ajax extends MY_Controller {

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
            $this->load->model("util/ajax_mdl");
	}
        
	/**
	 * 得意先名称のオートコンプリートリストを返却する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function customer_list()
        {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_customer_list($name);
            
            echo json_encode($result);

        }
        
	/**
	 * 得意先名称のオートコンプリートリストを返却する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function customer_official_list()
        {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_official_customer_list($name);
            
            echo json_encode($result);

        }
        
	/**
	 * 得意先マスタと売上情報から得意先リストを返却する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function customer_tran_list()
        {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_customer_tran_list($name);
            
            echo json_encode($result);
            
        }
        
        
	/**
	 * 得意先名称の情報を取得する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function customer_info()
        {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $this->load->model("/db/m_customer_mdl");
            $result = $this->m_customer_mdl->get_customer_info($name);
            
            foreach ($result as $value) {
                $value->cutoff_date_str = cutoff_date_str($value->cutoff_date);
                $value->card_print_type = card_print_str($value->card_print_type);
                if(empty($value->credit_type_name)) {
                    $value->credit_type_name = "未設定";
                } 
            }
            
            echo json_encode($result);

        }
        
	/**
	 * 品名のオートコンプリートリストを返却する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function goods_list() {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_goods_list($name);
            
            echo json_encode($result);
            
        }
        
	/**
	 * メモのオートコンプリートリストを返却する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function memo_list() {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_memo_list($name);
            
            echo json_encode($result);
            
        }
        
	/**
	 * 担当者のオートコンプリートリストを返却する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function handler_list() {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_handler_list($name);
            
            echo json_encode($result);
            
        }
        
	/**
	 * 商品のオートコンプリートリストを返却する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function goods_info() {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_goods_info($name);
            
            echo json_encode($result);
            
        }
        
	/**
	 * 担当者の情報を取得する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function handler_info()
        {
            
            $name = $_POST['name'];
            
            if(empty($name)) return;
            
            $result = $this->ajax_mdl->get_handler_info($name);
            
            echo json_encode($result);

        }
        
	/**
	 * 売上入力と請求書発行件数を取得
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function daily_cnt_info()
        {
            
            $date = $_POST['date'];
            
            if(empty($date)) return;
            
            $result = $this->ajax_mdl->get_daily_cnt($date);
            
            echo json_encode($result);

        }
        
	/**
	 * 売上集計表の表示順を取得する
	 *
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 */
        public function sum_print_order()
        {
            
            $val = $_POST['name'];
            
            if(empty($val)) return;
            
            $this->config->load('disp_order');
            
            $ary_order = array();
            switch ($val) {
                case SEGMENT_DEPART:
                    $ary_order = $this->config->item("sales_sum_depart_order");
                    break;
                case SEGMENT_ABSTRACT:
                    $ary_order = $this->config->item("sales_sum_abstract_order");
                    break;
                case SEGMENT_HANDLER:
                    $ary_order = $this->config->item("sales_sum_handler_order");
                    break;
                case SEGMENT_CUSTOMER:
                    $ary_order = $this->config->item("sales_sum_customer_order");
                    break;
                default:
                    break;
            }
            
            echo json_encode($ary_order);

        }

}

/* End of file sales_input.php */
/* Location: ./application/controllers/sales_input.php */