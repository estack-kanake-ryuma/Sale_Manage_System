<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Credit Input Controller
 *
 * 入金登録のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property credit_input_mdl $credit_input_mdl
 */
class Credit_input extends MY_Controller {

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

	        $this->load->model("credit/credit_common_mdl");
	        $this->load->model('credit/credit_input_mdl');

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
            
            if(count($_POST) > 0) {
                $this->_exec();
            }

            $data['search'] = $this->credit_input_mdl->get_input_condition();
            
            $date = $this->input->get("date");
            if(!empty($date)) {
                $data['search']['credit_date'] = $date;
                $data['search']['bank_id'] = "1";
            }
            
            $data['credit'] = $this->_get_data();

            $data['mst'] = $this->credit_input_mdl->get_mst_data();
            
            $data['add_row_ctrl'] = $this->get_add_row_ctrl();

            
            // view読み込み
            $this->load->view('credit/credit_input', $data);
		}
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * データ取得処理
	 *
	 * @access public
	 * @return array()
	 * @author Kita Yasuhiro
	 */
        private function _get_data() 
        {
            
            $date = $this->input->get("date");
            
            if(count($_POST) == 0 && empty($date)) {
                return $this->credit_input_mdl->init_data_aray(10, "disabled");
            }
            
            if(isset($_POST['regist'])) {
                
                $cnt = count($_POST['customer_name']);
                if($cnt < 10) $cnt = 10;
                
                $type = "";
                if(empty($_POST['credit_date']) || empty($_POST['bank_id'])) {
                    $type = "disabled";
                }
                
                if(!empty($this->form_validation->_field_data['credit_date']['error'])) {
                    $type = "disabled";
                }
                
                return $this->credit_input_mdl->init_data_aray($cnt, $type);
                
            } else {
                
                $search = $this->credit_input_mdl->create_search_condition();
                
                if((empty($_POST['credit_date']) || empty($_POST['bank_id'])) && empty($date)) {
                    return $this->credit_input_mdl->init_data_aray(10, "disabled");
                    
                } else {
                    $data = $this->credit_input_mdl->get_target_data($search);
                }

                // 既に登録データが存在する場合は削除できるように存在する旨のフラグを立てる
                if(count($data) > 0) {
                    $data['data_flag'] = 1;
                }

                $i=0;
                foreach ($data as $obj) {
                    $data[$i] = (array)$obj;
                    $data[$i]['customer_id'] = $data[$i]['customer_id'];
                    $data[$i]['customer_name'] = $data[$i]['customer_disp_name'];
                    $data[$i]['credit_money'] = money_sep($data[$i]['credit_money']);
                    $data[$i]['reconcile_money'] = $data[$i]['reconcile_money'];
                    
                    if(empty($data[$i]['reconcile_money']) && empty($data[$i]['adjust_money']) && empty($data[$i]['first_money'])) {
                        
                        if(empty($this->form_validation->_field_data['credit_date']['error'])) {
                            $data[$i]['disabled'] = "";
                        } else {
                            $data[$i]['disabled'] = "disabled=disabled";
                        }
                        
                    } else {
                        $data[$i]['disabled'] = "disabled=disabled";
                    }
                    
                    $i++;
                }
                
                for($i=count($data); $i<10; $i++) {
                    if(empty($this->form_validation->_field_data['credit_date']['error'])) {
                        $data[$i] = array();
                    } else {
                        $data[$i]['disabled'] = "disabled=disabled";
                    }
                }
                
            }
            
            return $data;
            
        }
        
	/**
	 * 実行処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _exec()
        {
            
            if(isset($_POST['regist'])) {
                
                if($this->form_validation->run("credit_regist")) {
                    
                    // データ登録処理
                    $err_msg = "";
                    $this->credit_input_mdl->regist_data($err_msg);
                    
                    if(empty($err_msg)) {
                        $this->body = 'onload="'.alert_href('登録しました。', '/credit/credit_input/').'""';
                    } else {
                        $this->body = 'onload="'.alert_href($err_msg, '/credit/credit_input/?date='.$_POST['credit_date']).'"';
                    }
                    
                    return true;
                } else {
                    return false;
                }
                
            } else {
                
                if($this->form_validation->run("credit_search")) {
                    return true;
                } else {
                    return false;
                }
                
            }
            
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
	/**
	 * 得意先マスタに存在するかチェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function get_add_row_ctrl()
        {
            
            $input = $_POST;
            
            if(empty($input['credit_date'])) {
                return "disabled=true";
            }
            
            if(empty($input['bank_id'])) {
                return "disabled=true";
            }
                
            return "";
            
        }
        
	/**
	 * 得意先マスタに存在するかチェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function is_exist_customer($customer_name, $flg, $cycles=null)
        {
            
            if($cycles === null) return true;
            
            if(!empty($customer_name)) {
                
                if($this->credit_input_mdl->get_customer_cnt($customer_name) == 0) {
                    $this->form_validation->set_message('is_exist_customer', ERR_EXIST_CUSTOMER);
                    return false;
                } else {
                    if(!$this->form_validation->required($_POST['credit_money'][$cycles])) {
                        $this->form_validation->set_message('is_exist_customer', ERR_CREDIT_MONEY_REQUIRED);
                        return false;
                    }
                    
                }
                
            }
            
            return true;
            
        }

	/**
	 * 得意先が入力された場合、入金額が必須
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function credit_money_required($credit_money, $flg, $cycles=null)
        {
            
            if($cycles === null) return true;

            if(!empty($credit_money)) {
                
                if(!$this->form_validation->required($_POST['customer_name'][$cycles])) {
                    $this->form_validation->set_message('credit_money_required', ERR_CUSTOMER_REQUIRED);
                    return false;
                }
                
            }
            
            return true;
            
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
            
            $proc = $this->get_db_proc_month();
            $target = date("Ym", strtotime($value));
            
            if($proc > $target){
                $this->form_validation->set_message("proc_date", ERR_PROC_DATE);
                return false;
            } 
            
            return true;
            
        }
        
	/**
	 * 全て未入力の時、エラー
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function all_required()
        {
            
            $input = $_POST;

            // 登録済データはデータチェックを行わない
            if(empty($input['data_flag'])) {

                if ( count( $input['customer_name'] ) == 0 ) {
                    $this->form_validation->set_message( "all_required", ALL_REQUIRED );

                    return false;
                }

                $flg = false;
                for ( $i = 0; $i < count( $input['customer_name'] ); $i ++ ) {

                    if ( ! empty( $input['customer_name'][ $i ] ) ) {
                        $flg = true;
                    }

                    if ( ! empty( $input['credit_money'][ $i ] ) ) {
                        $flg = true;
                    }

                    if ( $flg == true ) {
                        break;
                    }

                }

                if ( $flg == false ) {
                    $this->form_validation->set_message( "all_required", ALL_REQUIRED );

                    return false;
                }
            }
            
            return true;
            
        }

}

/* End of file credit_input.php */
/* Location: ./application/controllers/credit_input.php */