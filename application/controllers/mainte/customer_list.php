<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Home Controller
 *
 * 得意先一覧のコントローラー
 *
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 * @property customer_mdl $customer_mdl
 */
class Customer_list extends MY_Controller {

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
                $this->load->model('mainte/customer_mdl');

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

            // 検索条件を設定
            $condition = $this->customer_mdl->create_search_condition();

            // 各マスタデータの取得
            $data['mst'] = $this->_get_mst_data();

            // リストデータの取得
            $data['list'] = $this->_get_list_data();

            // 一覧
            $data['list_data'] = $this->_get_disp_list_data($condition);

            $total = $this->_get_total_cnt($condition);

            // ページ情報を取得
            $data['cnt_info'] = cut_info_str($total, $this->uri->segment(4), count($data['list_data']));

            // ページリンク
            $data['page_link'] = $this->pagination->create_page_link($total);

            // 検索条件の入力値
            $data['search'] = $this->customer_mdl->get_input_condition();

            // 得意先一覧用のセッションを設定
            $this->customer_mdl->set_list_session();
            

            $this->load->view('mainte/customer_list', $data);
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
            $bRes = $this->customer_mdl->delete_data($id);

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
	 * 検索条件のマスタデータ取得処理
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
	private function _get_mst_data()
	{
		$data = array();
                
		// 得意先区分
		$data['customer_type'] = $this->general_name_mdl->get_customer_type();

		return $data;
	}
        
        /**
	 * 
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
	private function _get_list_data()
	{
            $list = array();
            
            // 締日リスト
            $list['cutoff_date'] = $this->customer_mdl->get_cutoff_list();
            
            return $list;
	}
        
        /**
	 * 表示要の一覧データを取得
	 *
	 * @access private
	 * @return array
	 * @author kita Yasuhiro
	 */
        private function _get_disp_list_data($condition) 
        {
            
            // 検索開始番号を取得
            $start = $this->uri->segment(4);
            
            // 一覧を取得
            $list = $this->customer_mdl->get_list_data($condition, $start);
            
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
                // 締日
                $val->disp_cutoff_date = cutoff_date_str($val->cutoff_date);
                // メモ
                $val->disp_memo = get_memo($val->memo);
                // 偶数行フラグ
                $val->disp_even_flg = cutoff_date_str($val->cutoff_date);
                
                // メモ
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
        private function _get_total_cnt($condition) {           

            // テーブル名を設定
            $this->customer_mdl->set_tbl(M_CUSTOMER);
            
            // 件数取得
            return $this->customer_mdl->get_total_cnt($condition);
            
        }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */