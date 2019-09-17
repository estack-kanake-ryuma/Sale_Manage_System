<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Institute_input extends MY_Controller {

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
                
                $this->load->model('mainte/institute_mdl');

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
                $data['institute'] = array();
                
                // マスタデータ取得
                $data['mst'] = $this->_get_mst_data();
                
                if(count($_POST) > 0) {
                    // データ登録処理
                    $this->_exec();
                }
                
                // view読み込み
                $this->load->view('mainte/institute_input', $data);
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
            $data['institute'] = array();
            
            // IDからデータを取得
            $result = $this->institute_mdl->get_list_data(array('institute_id'=>$id));
            
            if(count($result) == 0) {
                // TODO@IDがおかしいぞー処理の実装
            }
            
            // 配列にキャストし格納
            $data['institute'] = (array)$result[0];
            
            // マスタデータ取得
            $data['mst'] = $this->_get_mst_data();
            
            // データの変更処理
            if(count($_POST) > 0) {
                // 変更処理実行
                $this->_exec();
            }
            
            // view読み込み
            $this->load->view('mainte/institute_input', $data);
            
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
            if($this->form_validation->run('institute')) {
                
                if ($this->router->method == "index") {
                    // 登録
                    $this->institute_mdl->regist_data();
                } else {
                    // 変更
                    $this->institute_mdl->update_data();
                }
                
                // アラート処理実行
                $this->body = 'onload="'.alert_href('登録しました。', $this->get_back_url()).'"';
                
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

		// 税区分
		$mst['tax_type'] = $this->general_name_mdl->get_tax_type();
                
                return $mst;
                

        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * 個別入力チェックメソッド
	 * ---------------------------------------------------------------------------
	 */
	/**
	/**
	 * 研究所名称存在チェック
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        public function exist_name($str)
        {
            
            $id = $this->input->get("id");
            $this->db->where("institute_name", $str);
            if(!empty($id)) {
               $this->db->where("institute_id <> '".$id."'");
            }
            
            // 呼称の存在チェック
            $this->institute_mdl->set_tbl(M_INSTITUTE);
            if ($this->institute_mdl->get_total_cnt() > 0) {
                $this->form_validation->set_message('exist_name', str_replace("#NAME#", "研究所名称", ERR_EXIST_NAME));
                return false;
            }
            
            return true;
        }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */