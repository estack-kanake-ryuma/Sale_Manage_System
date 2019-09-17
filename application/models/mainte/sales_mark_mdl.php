<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_mark_mdl extends Mainte_common_mdl {

	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage	model/db
	 * @author		Kita Yasuhiro
	 * @link		http://www.datalyze.co.jp
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 登録処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
	public function regist_data()
        {
            // データ取得
            $data = $this->get_regist_data();
            
           // トランザクション開始
            $this->db->trans_start();
            
            // 年度のデータ全削除
            $this->m_tbl_name = M_SALES_MARK;
            $year = $_POST['regist_year'];
            $condition = "(year = ".$this->db->escape_like_str($year)." and month >= '03' and month <= '12' OR year = ".$this->db->escape_like_str($year + 1)." and month <= '02' )";
            $this->db->where($condition);
            $this->delete();
            
            // データ登録
            foreach ($data as $key => $regist_data) {
                $this->m_tbl_name = M_SALES_MARK;
                $this->insert($regist_data);
            }
            
           // トランザクション終了
           $this->db->trans_complete();
            
	}
        
	/**
	 * 変更処理
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function update_data()
        {
            
            // トランザクション開始
            $this->db->trans_begin();

            // トランザクション終了
            $this->db->trans_complete();
            
        }
        
        /**
	 * 目標登録データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_data($where) {
        
            // テーブル設定
            $this->m_tbl_name = M_SALES_MARK;
            
            $this->db->select("year");
            $this->db->select("month");	
            $this->db->select("institute_id");
            $this->db->select("depart_id");
            $this->db->select("money");
            
            // WHERE句作成
            $this->db->where($where);
            
            // ORDER句の設定
            $this->db->order_by("year", "asc");
            $this->db->order_by("month", "asc");
            
            return $this->select();
        }
        
        /**
	 * 表示用目標登録データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_disp_data()
        {
            
            $condition = $this->create_search_condition();
            $mark = $this->get_list_data($condition);
            
            $depart = $this->get_disp_depart();
            
            $res = array();
            
            $key_ary = array();
            foreach ($depart as $key => $ary) {
                foreach ($ary['id'] as $id) {
                    $key_ary[] = $key. "-".$id;
                }
            }
                
            for($i=1;$i<=12;$i++) {
                for($j=0;$j<count($key_ary);$j++) {
                    $res[$i][$key_ary[$j]] = "";
                }
            }
            
            foreach ($mark as $value) {
                $key_id = $value->institute_id."-".$value->depart_id;
                $key_month = (int)$value->month;
                $res[$key_month][$key_id] = money_sep($value->money);
            }
            
            
            return $res;
            
            
        }
        
        /**
	 * 登録用データ取得
	 *
	 * @access	public
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_regist_data()
        {
            $res = array();
            $input = $_POST;
           
            $j=0;
            for($i=1;$i<=12;$i++) {
                
                foreach($input['money_3'] as $key => $value) {
                    
                    if(empty($input['money_'.$i][$key]) && $input['money_'.$i][$key] != "0") continue;
                    $month = $i;
                    $year = $input['regist_year'];
                    if($i < 10) $month = "0".$i;
                    
                    if($i == 1 OR $i == 2) {
                        $year = $year + 1;
                    }
                    
                    $param = explode("-", $key);
                    
                    $res[$j]['year'] = $year;
                    $res[$j]['month'] = $month;
                    $res[$j]['institute_id'] = $param[0];
                    $res[$j]['depart_id'] = $param[1];
                    $res[$j]['money'] = erase_money_sep($input['money_'.$i][$key]);
                    
                    $j++;
                }
            }
            
            return $res;
            
            
        }
        
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @return string
	 * @author Kita Yasuhiro
	 */
	public function create_search_condition()
	{
		$condition = array();
		$data = $this->get_input_condition();
                
                if (count($data) == 0) return;

                // 得意先名称
                if(!empty($data['regist_year'])) {
                    $year = $data['regist_year'];
                    $condition[] = "(year = ".$this->db->escape_like_str($year)." and month >= '03' and month <= '12' OR year = ".$this->db->escape_like_str($year + 1)." and month <= '02' )";
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    return "";
                }
                
	}
        
    /**
	 * 部門データを表示用に編集
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function get_disp_depart() {
            
            $res = $this->sales_mark_mdl->get_depart_data();
            
            $ary = array();
            
            foreach ($res as $val) {
                $ary[$val->institute_id]['institute_id'] = $val->institute_id;
                $ary[$val->institute_id]['institute_name'] = $val->institute_name;
                $ary[$val->institute_id]['id'][] = $val->depart_id;
                $ary[$val->institute_id]['name'][] = $val->depart_name;
            }
            
            return $ary;
            
        }

}

/* End of file general_name_mdl.php */
/* Location: ./application/model/db/general_name_mdl.php */