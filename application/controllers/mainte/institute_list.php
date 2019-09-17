<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ホームのコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Institute_list extends MY_Controller {


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

                // Load Model
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
            
                $data = array();
                
                // 一覧
                $data['list_data'] = $this->_get_disp_list_data();
                
                $total = $this->_get_total_cnt();
                
                // ページ情報を取得
                $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));
                
		// ページリンク
		$data['page_link'] = $this->pagination->create_page_link($total);
                
                // 得意先一覧用のセッションを設定
                $this->institute_mdl->set_list_session();

		$this->load->view('mainte/institute_list', $data);
	}
        
	/**
	 * 削除イベント処理
	 *
	 * @access public
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function delete()
	{
   
            // ID取得
            $id = $this->input->get('id');
            
            // 削除処理実行
            $bRes = $this->institute_mdl->delete_data($id);

            if($bRes) {
                $this->body = 'onload="'.alert_href('削除しました。', $this->get_back_url()).'"';
            } else {
                // TODO@削除失敗時の処理実装
            }
                
	}


	/*
	 * ---------------------------------------------------------------------------
	 * 個別メソッド
	 * ---------------------------------------------------------------------------
	 */
        
        /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_disp_list_data() 
        {
            
            // 検索開始番号を取得
            $start = $this->uri->segment(4);
            
            // 一覧を取得
            $list = $this->institute_mdl->get_list_data("", $start);
            
            $i = 1;
            foreach ($list as $val) {
                // No
                $val->no = $i;
                // 郵便番号
                $val->disp_post_no = post_number($val->post_no_1, $val->post_no_2);
                // 住所
                $val->disp_addr = address_str($val->address, $val->buil_name);
                // TEL
                $val->disp_tel_no = phone_number($val->tel_no_1, $val->tel_no_2, $val->tel_no_3);
                // FAX
                $val->disp_fax_no = phone_number($val->fax_no_1, $val->fax_no_2, $val->fax_no_3);
                // メモ
                $val->disp_memo = get_memo($val->memo);
                $i++;
            }
            
            return $list;
            
        }
        
        /**
	 * データの総件数を取得
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        private function _get_total_cnt() {           

            // テーブル名を設定
            $this->institute_mdl->set_tbl(M_INSTITUTE);
            
            // 件数取得
            return $this->institute_mdl->get_total_cnt();
            
        }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */