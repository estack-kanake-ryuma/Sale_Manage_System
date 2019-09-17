<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Customer input
 *
 * 得意先情報入力のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property customer_mdl $customer_mdl
 * @property Bill_pdf $bill_pdf
 */
class Customer_input extends MY_Controller {

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
                
                $this->load->model('mainte/customer_mdl');
                
                $sWin = $this->input->get("win_type");
                if($sWin == "win") {
                    $this->js = "/js/screen/customer.js";
                }

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
					$data['customer'] = array();
					$data['page_info'] = array();

					// ラジオボタンの初期値を設定
					$data['customer'] = $this->_get_radio_init();

					// マスタデータ取得
					$data['mst'] = $this->_get_mst_data();

					// 独自リスト取得
					$data['list'] = $this->_get_list_data();

					if(count($_POST) > 0) {
						// データ登録処理
						$this->_exec();
					}

					// view読み込み
					$this->load->view('mainte/customer_input', $data);
		}
        
	/**
	* 変更処理
	*
	* @access public
	* @return void
	* @author Kita Yasuhiro
	*/
        public function edit()
        {
            
            // 変更するIDを取得
            $id = $this->input->get('id');
            
            // パラメータ用配列
            $data['customer'] = array();
            
            // IDからデータを取得
            $result = $this->customer_mdl->get_list_data(array('customer_id'=>$id));
            
            // 配列にキャストし格納
            $data['customer'] = (array)$result[0];
            
            // マスタデータ取得
            $data['mst'] = $this->_get_mst_data();

            // 独自リスト取得
            $data['list'] = $this->_get_list_data();
            
            // 締日変更の可否を判定する
            $data['page_info'] = $this->customer_mdl->chk_cutoff_date($id, $data['customer']);
            
            // データの変更処理
            if(count($_POST) > 0) {
                // 変更処理実行
                $this->_exec();
            }
            
            // view読み込み
            $this->load->view('mainte/customer_input', $data);
            
        }

	/**
	 * PDF出力
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
		public function output()
		{
			$this->load->library('bill_pdf');
			$info = new stdClass();
			$info->customer_name = $this->input->get('name');
			$data[] = $info;

			// 画面表示を行う
			$this->bill_pdf->screen_flag = true;

			// pdfの出力処理
			$this->bill_pdf->display($data, "cutoff");
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
        private function _exec(){
            
            // チェック処理
            if($this->form_validation->run('customer')) {
                
                if ($this->router->method == "index") {
                    // 登録
                    $this->customer_mdl->regist_data();
                } else {
                    // 変更
                    $this->customer_mdl->update_data();
                }
                
                $sWin = $this->input->get("win_type");
                
                if($sWin == "win") {
                    $this->body = 'onload="alert(\'登録しました。\');window.close()";';
                } else {
                    // アラート処理実行
                    $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';
                    
                }
                
                
            } else {

                return false;
            }
            
        }
        
	/**
	 * マスタデータ取得処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_mst_data(){
            
		$mst = array();

		// 得意先区分
		$mst['customer_type'] = $this->general_name_mdl->get_customer_type();
                
                // 敬称
                $mst['prefix'] = $this->general_name_mdl->get_prefix();
                
                // 入金種別
                $mst['credit_type'] = $this->general_name_mdl->get_credit_type();
                
                return $mst;
                

        }
        
	/**
	 * マスタデータ取得処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_list_data() {
            
            $list = array();
            
            // 締日リスト
            $list['cutoff_date'] = $this->customer_mdl->get_cutoff_list();
            
            return $list;
            
        }
        
	/**
	 * ラジオボタンの初期値
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_radio_init() {
            
            $data = array();
            
            // ラジオボタンの初期値を設定
            $data['card_print_type'] = FLG_OFF;
            $data['customer_type'] = CUSTOMER_TYPE_IPPAN;
            
            return $data;
            
        }
	/*
	 * ---------------------------------------------------------------------------
	 * 個別入力チェックメソッド
	 * ---------------------------------------------------------------------------
	 */
	/**
	/**
	 * 呼称存在チェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function exist_name($str)
        {
            
            $id = $this->input->get("id");
            $this->db->where("customer_disp_name", $str);
            if(!empty($id)) {
               $this->db->where("customer_id <> '".$id."'");
            }
            
            // 呼称の存在チェック
            $this->customer_mdl->set_tbl(M_CUSTOMER);
            if ($this->customer_mdl->get_total_cnt() > 0) {
                $this->form_validation->set_message('exist_name', str_replace("#NAME#", "呼称", ERR_EXIST_NAME));
                return false;
            }
            
            
            return true;
        }


        

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */