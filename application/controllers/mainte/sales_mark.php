<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property sales_mark_mdl $sales_mark_mdl
 */
class Sales_mark extends MY_Controller {

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
                
                $this->load->model('mainte/sales_mark_mdl');

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
            $data['data'] = array();
            
            if(count($_POST) > 0) {
                if($_POST['disp_type'] == "regist") {
                    $this->_exec();
                } else {
                    $data['data'] = $this->_display();
                }
                
            }
            
            // 画面制御用配列を取得
            $data['screen'] = $this->_get_page_ctrl();
            
            // 表示用マスタデータ設定
            $data['mst'] = $this->_get_mst_data();
            
            // view読み込み
            $this->load->view('mainte/sales_mark', $data);
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
        private function _exec()
        {

            // ルールを設定
            $this->_set_rule();
            
            if($this->form_validation->run()) {
                $this->sales_mark_mdl->regist_data();
                
                // 画面再表示
                $this->body = 'onload="'.alert_href('目標を登録しました。', $this->get_back_url()).'"';
                
            } else {
                return false;
            }
            
            return true;
        }
        
	/**
	 * 表示処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _display()
        {
            
            $data = array();
            //ルールを設定
            $this->form_validation->set_rules('regist_year', '年度', 'trim|required|numeric|exact_length[4]');
            
            if($this->form_validation->run()){
                $data = $this->sales_mark_mdl->get_disp_data();
            } 
            
            return $data;
            
        }

        
	/**
	 * 画面制御用配列取得
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _get_page_ctrl()
        {
            
            $screen = array();
            
           
            
            return $screen;
        
        }
        
    /**
	 * マスタデータ取得処理
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
	private function _get_mst_data()
	{
            $data = array();
                
            // 部門取得
            $data['depart'] = $this->sales_mark_mdl->get_disp_depart();

            return $data;
            
	}
        
    /**
	 * チェック用のルールを設定
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        private function _set_rule()
        {
            
            $input = $_POST;
            
            $this->form_validation->set_rules('chk_all_required', '', 'callback_chk_all_required');
            $this->form_validation->set_rules('regist_year', '年度', 'trim|required|numeric|exact_length[4]');
            for($i=1;$i<=12;$i++) {
                
                foreach ($input['money_3'] as $key => $value) {
                    $this->form_validation->set_rules('money_'.$i.'['.$key.']', '', 'trim|money');
                    $this->form_validation->set_message('money', '正確な金額を入力ください。');
                }
                
            }
            
            
        }
        
	/*
	 * ---------------------------------------------------------------------------
	 * エラーチェックメソッド
	 * ---------------------------------------------------------------------------
	 */
        
    /**
	 * 全て未入力時エラー
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function chk_all_required()
        {
            $input = $_POST;
            $bflg = false;
            for($i=1;$i<=12;$i++) {
                foreach ($input['money_'.$i] as $key => $value) {
                    
                     if($this->form_validation->required($value)) {
                        $bflg = true; 
                     }
                }
                
            }
            
            if(!$bflg) {
                $this->form_validation->set_message('chk_all_required', ERR_ALL_EXIST);
                return false;
            }
            
            return true;
            
            
            
        }

        
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */