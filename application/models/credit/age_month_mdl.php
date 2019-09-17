<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Age Month Mdl
 *
 * 売掛金月齢表のモデル
 *
 * @link		http://www.datalyze.co.jp
 *
 */
class Age_month_mdl extends Credit_common_mdl {

        private $m_target_month = "";
        private $m_change_cnt = 999;
		private $disp_type = "";

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
	 * 月齢表一覧データ取得
	 *
	 * @access	public
	 * @param  string $where
	 * @param  boolean $page_flg
	 * @param  int $start
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_customer($where, $page_flg, $start=0) {
            
            $input = $this->get_input_condition();
            
            $sql = " SELECT ";
            $sql .= " customer_disp_name ";
            $sql .= " FROM ( ";
            $sql .= " SELECT ";
            $sql .= "  mng.customer_disp_name ";
            $sql .= " FROM ".T_RECEIVABLE_MNG." mng ";
            $sql .= " LEFT JOIN ".M_CUSTOMER." cus ON mng.customer_id=cus.customer_id ";
            
            $day = "";
            if(empty($input['target_month'])) {
                $day = date("Ym")."01";
            } else {
                $day = str_replace("/", "", $input['target_month'])."01";
            }
            
            $retention = $this->get_retention();
            //$target_where = "(mng.target_month <= ".$this->db->escape(date("Ym", strtotime($day."-".$retention." month ")))." ) ";
            $target_where = "(mng.target_month <= ".$this->db->escape(date("Ym", strtotime($day."-".$retention." month ")))." and (mng.sales_money+mng.first_balance_money-mng.credit_money) <> 0) ";
            
            $sql .= " WHERE ".$target_where;
            if(!empty($where)) {
                $sql .= " AND ".$where;
            }
            $sql .= "  GROUP BY customer_disp_name ";
            $sql .= "  ORDER BY customer_furi ";
            $sql .= " ) cnt_tbl ";
            if($start == FALSE) $start = "0";
            if($page_flg == true) {
                $sql .= " LIMIT ".$start.",".PER_CREDIT_PAGE_CNT;
            }
            
            $ret = $this->db->query($sql);
            
            return $ret->result();
            
        }
        
    /**
	 * 月齢表一覧データ取得(合計用)
	 *
	 * @access	public
	 * @param  string $where
	 * @param  string $customer
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_sum_data($where, $customer) {
        
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->m_prefix = "mng";
            
            $this->db->select("mng.customer_disp_name");
            $this->db->select("mng.customer_id");
            $this->db->select("mng.target_month");
            $this->db->select("(sum(mng.sales_money) + sum(mng.first_balance_money)) as sales_money");
            $this->db->select("sum(mng.credit_money) as credit_money");
            
            // WHERE句作成
            $this->db->where("mng.customer_disp_name in (".$customer.")");
            $this->db->join(M_CUSTOMER." cus", "mng.customer_id=cus.customer_id", "LEFT");
            
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // GROUP句の設定
            $this->db->group_by("customer_disp_name, target_month");
            
            // ORDER句の設定
            $this->db->order_by("cus.customer_furi", "asc");
            $this->db->order_by("cus.customer_id", "asc");
            $this->db->order_by("mng.customer_disp_name", "asc");
            $this->db->order_by("mng.target_month", "asc");
            
            
            
            return $this->select();
        }
        
    /**
	 * 月齢表一覧データ取得(PDF用)
	 *
	 * @access	public
	 * @param  string $where
	 * @param  string $customer
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_pdf_data($where, $customer) {
        
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->m_prefix = "mng";
            
            $this->db->select("mng.customer_disp_name");
            $this->db->select("mng.target_month");
            $this->db->select("mng.institute_id");
            $this->db->select("mng.institute_name");
            $this->db->select("mng.depart_id");
            $this->db->select("mng.depart_name");
            $this->db->select("(CASE WHEN institute_id is null THEN null ELSE CONCAT(institute_id, ',', depart_id) END) as id", false);
            $this->db->select("mng.sales_money + mng.first_balance_money as sales_money", false);
            $this->db->select("mng.credit_money");
            
            // WHERE句作成
            $this->db->where("mng.sales_money + mng.first_balance_money - mng.credit_money <> 0 ");
            $this->db->where("mng.customer_disp_name in (".$customer.")");
            if(!empty($where)) {
                $this->db->where($where);
            }
            $this->db->join(M_CUSTOMER." cus", "mng.customer_id=cus.customer_id", "LEFT");
            
            // ORDER句の設定
            $this->db->order_by("cus.customer_furi is null", "asc");
            $this->db->order_by("cus.customer_furi", "asc");
            $this->db->order_by("mng.institute_id", "asc");
            $this->db->order_by("mng.depart_id", "asc");
            $this->db->order_by("mng.target_month", "asc");
            
            return $this->select();
            
        }
        
        
    /**
	 * 月齢表一覧データのデータ件数を取得
	 *
	 * @access	public
	 * @param  string $where
	 * @param  array $input
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_cnt($where, $input) {
        
            
            $sql = " SELECT ";
            $sql .= " count(*) as cnt ";
            $sql .= " FROM ( ";
            $sql .= " SELECT ";
            $sql .= "  mng.customer_disp_name ";
            $sql .= " FROM ".T_RECEIVABLE_MNG." mng ";
            $sql .= " LEFT JOIN ".M_CUSTOMER." cus ON mng.customer_id=cus.customer_id ";
           
            $day = "";
            if(empty($input['target_month'])) {
                $day = date("Ym")."01";
            } else {
                $day = str_replace("/", "", $input['target_month'])."01";
            }
            
            $retention = $this->get_retention();
            $target_where = "(mng.target_month <= ".$this->db->escape(date("Ym", strtotime($day."-".$retention." month ")))." and (mng.sales_money+mng.first_balance_money-mng.credit_money) <> 0) ";
            
            $sql .= " WHERE ".$target_where;
            if(!empty($where)) {
                $sql .= " AND ".$where;
            }
            $sql .= "  GROUP BY customer_disp_name ";
            $sql .= " ) cnt_tbl ";
            
            $ret = $this->db->query($sql);
            $result = $ret->result();
            
            return intval($result[0]->cnt);
        }

        
    /**
	 * 月齢表一覧データ取得(詳細)
	 *
	 * @access	public
	 * @param  string $where
	 * @param  string $customer
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_detail_data($where, $customer) {
        
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->m_prefix = "mng";
            
            $this->db->select("mng.customer_disp_name");
            $this->db->select("mng.target_month");
            $this->db->select("mng.institute_id");
            $this->db->select("mng.institute_name");
            $this->db->select("mng.depart_id");
            $this->db->select("mng.depart_name");
            $this->db->select("(CASE WHEN institute_id is null THEN null ELSE CONCAT(institute_id, ',', depart_id) END) as id", false);
            $this->db->select("mng.sales_money+mng.first_balance_money as sales_money", false);
            $this->db->select("mng.credit_money");
            
            // WHERE句作成
            $this->db->where("mng.customer_disp_name = '".$customer."'");
            $this->db->where("mng.sales_money + mng.first_balance_money - mng.credit_money <> 0 ");
            if(!empty($where)) {
                $this->db->where($where);
            }
            $this->db->join(M_CUSTOMER." cus", "mng.customer_id=cus.customer_id", "LEFT");
            
            // ORDER句の設定
            $this->db->order_by("mng.institute_id", "asc");
            $this->db->order_by("mng.depart_id", "asc");
            $this->db->order_by("mng.target_month", "asc");
            
            return $this->select();
        }
        
    /**
	 * 月齢表一覧データ取得
	 *
	 * @access	public
	 * @param  string $where
	 * @param  string $customer
	 * @param  int $institute_id
	 * @param  int $depart_id
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_bill_unit_data($where, $customer, $institute_id, $depart_id) {
        
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            $this->m_prefix = "rec_c";
            
            $this->db->select("mng.target_month");
            $this->db->select("mng.customer_disp_name");
            $this->db->select("bill_p.bill_no");
            $this->db->select("rec_c.bill_date");
            $this->db->select("rec_c.sales_money");
            $this->db->select("credit.sum_credit_money as credit_money");
            
            // WHERE句作成
            $this->db->where("mng.customer_disp_name = '".$customer."'");
            $this->db->where("mng.institute_id = '".$institute_id."'");
            $this->db->where("mng.depart_id = '".$depart_id."'");
            $this->db->where("sales.cutoff_date_from is null");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // JOIN句の設定
            $this->db->join(T_RECEIVABLE_MNG." mng ", "rec_c.receivable_mng_id=mng.receivable_mng_id", "LEFT");
            $this->db->join(T_SALES_MNG." sales ", "sales.sales_mng_id=rec_c.sales_mng_id", "LEFT");
            $this->db->join(T_BILL_DATA." bill_c ", "sales.sales_mng_id=bill_c.sales_mng_id", "LEFT");
            $this->db->join(T_BILL_MNG." bill_p ", "bill_c.bill_mng_id=bill_p.bill_mng_id", "LEFT");
            $this->db->join(T_CREDIT_MNG." credit ", "credit.credit_mng_id=rec_c.credit_mng_id", "LEFT");
            
            // ORDER句の設定
            $this->db->order_by("mng.institute_id", "asc");
            $this->db->order_by("mng.depart_id", "asc");
            $this->db->order_by("rec_c.bill_date", "asc");
            
            return $this->select();
        }
        
    /**
	 * 月齢表一覧データ取得
	 *
	 * @access	public
	 * @param  string $where
	 * @param  string $customer
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_list_bill_cutoff_data($where, $customer) {
        
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_DATA;
            $this->m_prefix = "rec_c";
            
            $this->db->select("mng.target_month");
            $this->db->select("mng.customer_disp_name");
            $this->db->select("bill_p.bill_no");
            $this->db->select("rec_c.bill_date");
            $this->db->select("sum(rec_c.sales_money) as sales_money");
            $this->db->select("credit.sum_credit_money as credit_money");
            
            // WHERE句作成
            $this->db->where("mng.customer_disp_name = '".$customer."'");
            $this->db->where("sales.cutoff_date_from is not null");
            if(!empty($where)) {
                $this->db->where($where);
            }
            
            // JOIN句の設定
            $this->db->join(T_RECEIVABLE_MNG." mng ", "rec_c.receivable_mng_id=mng.receivable_mng_id", "LEFT");
            $this->db->join(T_SALES_MNG." sales ", "sales.sales_mng_id=rec_c.sales_mng_id", "LEFT");
            $this->db->join(T_BILL_DATA." bill_c ", "sales.sales_mng_id=bill_c.sales_mng_id", "LEFT");
            $this->db->join(T_BILL_MNG." bill_p ", "bill_c.bill_mng_id=bill_p.bill_mng_id", "LEFT");
            $this->db->join(T_CREDIT_MNG." credit ", "bill_p.bill_mng_id=credit.bill_mng_id", "LEFT");
            
            // GROUP句の設定
            $this->db->group_by("bill_p.bill_mng_id");
            
            // ORDER句の設定
            $this->db->order_by("rec_c.bill_date", "asc");
            
            return $this->select();
        }
        
    /**
	 * 一番古い残高の月を取得
	 *
	 * @access	public
	 * @param  string $customer
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_old_balance_data($customer) {
        
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->m_prefix = "mng";
            
            $this->db->select("mng.target_month");
            $this->db->select("mng.customer_disp_name");
            
            // WHERE句作成
            $this->db->where("mng.customer_disp_name = '".$customer."'");
            $this->db->where("sales_money + first_balance_money - credit_money <> 0");
            
            // GROUP句の設定
            $this->db->group_by("customer_disp_name");
            
            // ORDER句の設定
            $this->db->order_by("target_month", "asc");
            $this->db->order_by("customer_disp_name", "asc");
            
            return $this->select();
        }

        
    /**
	 * 6ヶ月以上滞留しているデータを取得
	 *
	 * @access	public
	 * @param  string $date
	 * @param  string $customer
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_six_month_sum_data($date, $customer)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->m_prefix = "mng";
            
            $this->db->select("mng.customer_disp_name");	
            $this->db->select("sum(mng.sales_money) + sum(mng.first_balance_money)  as sales_money");
            $this->db->select("sum(mng.credit_money) as credit_money");
            
            // WHERE句作成
            $this->db->where("target_month <= ".$date);
            $this->db->where("customer_disp_name = '".$customer."'");
            
            // GROUP句の設定
            $this->db->group_by("customer_disp_name");
            
            // ORDER句の設定
            $this->db->order_by("mng.customer_disp_name", "asc");
            
            return $this->select();
            
        }
        
    /**
	 * 6ヶ月以上滞留しているデータを取得
	 *
	 * @access	public
	 * @param  string $date
	 * @param  string $customer
	 * @param  stdClass $child
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_six_month_sum_data_child($date, $customer, $child)
        {
            
            // テーブル設定
            $this->m_tbl_name = T_RECEIVABLE_MNG;
            $this->m_prefix = "mng";
            
            $this->db->select("mng.customer_disp_name");	
            $this->db->select("sum(mng.sales_money) + sum(mng.first_balance_money)  as sales_money");
            $this->db->select("sum(mng.credit_money) as credit_money");
            
            // WHERE句作成
            $this->db->where("target_month <= ".$date);
            $this->db->where("customer_disp_name = '".$customer."'");
            if(empty($child->institute_id)) {
                $this->db->where("institute_id is null");
            } else {
                $this->db->where("institute_id = '".$child->institute_id."'");
            }
            if(empty($child->institute_id)) {
                $this->db->where("depart_id is null");
            } else {
                $this->db->where("depart_id = '".$child->depart_id."'");
            }
            
            // GROUP句の設定
            $this->db->group_by("customer_disp_name");
            
            // ORDER句の設定
            $this->db->order_by("mng.customer_disp_name", "asc");
            
            return $this->select();
            
        }
        
    /**
	 * 月齢表一覧データ取得
	 *
	 * @access	public
	 * @param  string $search
	 * @param  boolean $page_flg
	 * @param  string $type
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_disp_data($search, $page_flg, $type="")
        {
            $res = array();

            $data = array();
            if(empty($type)) {
                $customer_where = $this->get_customer_where($search, $page_flg);
                if(empty($customer_where)) return array();
                $data = $this->get_list_sum_data($search, $customer_where);
                
            } else {
                $data = $this->get_list_pdf_data($search, "");
                if(empty($data)) return array();
            }
            
            $i = 0;
            $balance_flg = true;
            foreach ($data as $key => $value) {
               
                if($this->chk_dup_data($data, $key, "customer_disp_name")) {
                    $this->init_disp_array($res, $i);
                    $balance_flg = true;
                } else {
                    $i--;
                    $this->m_change_cnt = count($res);
                }
                
                $res[$i]['customer_disp_name'] = $value->customer_disp_name;
                if($value->sales_money - $value->credit_money <> 0 && $balance_flg == true) {
                    
                    $res[$i]['customer_link'] = get_anchor($this->get_master_file_url($value), $value->customer_disp_name, array("target" => "_blank"));
                    $balance_flg = false;
                }

				// 各月の売掛金を設定
				$this->set_target_month($value, $res, $i);

				// 部門ごとの明細を設定
				$detail = $this->get_list_detail_data($search, $value->customer_disp_name);
				$res[$i]['depart_info'] = $this->_get_sep_depart($detail);

                $i++;

            }

            return $res;
            
        }
        
    /**
	 * 月齢表一覧データ取得
	 *
	 * @access	public
	 * @param  string $search
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        public function get_pdf_data($search)
        {
            $res = array();
            
            $customer_where = $this->get_customer_where($search, false);
            if(empty($customer_where)) return array();

			$this->disp_type = "pdf";

            $data = $this->get_list_pdf_data($search, $customer_where);
            
            $i = 0;
            $j = 0;
            foreach ($data as $key => $value) {
                
                if($this->chk_dup_data($data, $key, "customer_disp_name")) {
                    $this->init_disp_array($res, $i);
                    
                    if($i > 0) {
                        
                        foreach ($res[$i - 1]['depart_info'] as $key => $money) {
                            if(isset($money['total_money']))  $res[$i-1]['total_money'] += erase_money_sep($money['total_money']);
                            if(isset($money['three_total']))  $res[$i-1]['three_total'] += erase_money_sep($money['three_total']);
                            if(isset($money['target_sales'])) $res[$i-1]['target_sales'] += erase_money_sep($money['target_sales']);
                            if(isset($money['first_rec']))    $res[$i-1]['first_rec'] += erase_money_sep($money['first_rec']);
                            if(isset($money['second_rec']))   $res[$i-1]['second_rec'] += erase_money_sep($money['second_rec']);
                            if(isset($money['third_rec']))    $res[$i-1]['third_rec'] += erase_money_sep($money['third_rec']);
                            if(isset($money['fourth_rec']))   $res[$i-1]['fourth_rec'] += erase_money_sep($money['fourth_rec']);
                            if(isset($money['fifth_rec']))    $res[$i-1]['fifth_rec'] += erase_money_sep($money['fifth_rec']);
                            if(isset($money['other_rec']))    $res[$i-1]['other_rec'] += erase_money_sep($money['other_rec']);
                        }
                        
                        
                    }
                    
                    $j=0;
                } else {
                    // 得意先が同じ場合
                    $i--;
                }
                
                if($this->chk_dup_data($data, $key, "id")) {
                    $this->m_change_cnt = 0;
                } else {
                    if($j > 0) {
                        $j--;
                        $this->m_change_cnt = count($res[$i]['depart_info']);
                    }
                }

                $res[$i]['customer_disp_name'] = $value->customer_disp_name;
                $res[$i]['depart_info'][$j]['institute_name'] = $value->institute_name;
                $res[$i]['depart_info'][$j]['institute_id'] = $value->institute_id;
                $res[$i]['depart_info'][$j]['depart_name'] = $value->depart_name;
                $res[$i]['depart_info'][$j]['depart_id'] = $value->depart_id;
                $res[$i]['depart_info'][$j]['disp_depart_name'] = empty($value->institute_name)? "諸口" : $value->institute_name." ".$value->depart_name;
                
                $this->set_target_month($value, $res[$i]['depart_info'], $j, "child");
                
                
                $i++;
                $j++;
            }
            
            foreach ($res[count($res)- 1]['depart_info'] as $key => $money) {
                if(isset($money['total_money']))  $res[count($res)- 1]['total_money'] += erase_money_sep($money['total_money']);
                if(isset($money['three_total']))  $res[count($res)- 1]['three_total'] += erase_money_sep($money['three_total']);
                if(isset($money['target_sales'])) $res[count($res)- 1]['target_sales'] += erase_money_sep($money['target_sales']);
                if(isset($money['first_rec']))    $res[count($res)- 1]['first_rec'] += erase_money_sep($money['first_rec']);
                if(isset($money['second_rec']))   $res[count($res)- 1]['second_rec'] += erase_money_sep($money['second_rec']);
                if(isset($money['third_rec']))    $res[count($res)- 1]['third_rec'] += erase_money_sep($money['third_rec']);
                if(isset($money['fourth_rec']))   $res[count($res)- 1]['fourth_rec'] += erase_money_sep($money['fourth_rec']);
                if(isset($money['fifth_rec']))    $res[count($res)- 1]['fifth_rec'] += erase_money_sep($money['fifth_rec']);
                if(isset($money['other_rec']))    $res[count($res)- 1]['other_rec'] += erase_money_sep($money['other_rec']);
            }
            
            
            return $res;
            
        }
        
        
    /**
	 * 元帳への遷移URLを返却する
	 *
	 * @access	public
	 * @param  string $val
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function get_master_file_url($val)
        {
            
            $param = "";
            
            // 残高がある一番古い月を取得
            $res = $this->get_old_balance_data($val->customer_disp_name);

            if(empty($val->customer_id)) {
                $param = "?target=".$res[0]->target_month."&name=".$val->customer_disp_name;
            } else {
                $param = "?target=".$res[0]->target_month."&id=".$val->customer_id;
            }
            
            $url = "/account/master_file_print/disp/".$param;
            
            return $url;
        }


	/**
	 * 詳細画面への遷移URLを返却する
	 *
	 * @access	public
	 * @param  stdClass $val
	 * @param  stdClass $res
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
		private function get_detail_url($val, $res=null)
		{

			$param = "?target=".$val->target_month."&name=".urlencode($val->customer_disp_name);
			// 研究所と部門がある場合はパラメタに含める
			if($res !== null) {
				$param .= "&institute_id=".$res['institute_id']."&depart_id=".$res['depart_id'];
			}

			$url = "/credit/age_month_print_detail/".$param;

			return $url;
		}

    /**
	 * 対象月のデータが入っているかチェックする
	 *
	 * @access	public
	 * @param  stdClass $val
	 * @param  array $res
	 * @param  int $cnt
	 * @param  string $type
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function set_target_month($val, &$res, $cnt, $type="")
        {
            
            $param = array("target_sales", "first_rec", "second_rec", "third_rec", "fourth_rec", "fifth_rec");
            $day = $this->m_target_month."01";
            
            $str = "";
            $total = 0;
            $three = 0;
            for($i=0; $i<count($param); $i++) {
                
                $money = 0;
                if($i==0) {
                    $str = $day;
                    $money = $val->sales_money;
                } else {
                    $str = $day." ".($i*-1)." month";
                    $money = ($val->sales_money - $val->credit_money);
                }
                
                if($val->target_month == date("Ym", strtotime($str))) {

					if($money > 0) {
						if(empty($this->disp_type)) {
							if($type == 'child') {
								$res[$cnt][$param[$i]] =  get_anchor($this->get_detail_url($val, $res[$cnt]), money_sep($money), array("target" => "_blank"));
							} else {
								$res[$cnt][$param[$i]] =  get_anchor($this->get_detail_url($val), money_sep($money), array("target" => "_blank"));
							}
						} else {
							$res[$cnt][$param[$i]] =money_sep($money);
						}
					}
                    $total += $money;
                    if($i >= 3) {
                        $three += $money;
                    }
                }
                
            }
            
            
            if(count($res) != $this->m_change_cnt) {
                
                // 6ヶ月以上滞留しているデータを取得
                $six_month = date("Ym", strtotime($day." -6 month"));
                $six = array();
                if(empty($type)) {
                    $six = $this->get_six_month_sum_data($six_month, $val->customer_disp_name);
                } else {
                    $six = $this->get_six_month_sum_data_child($six_month, $val->customer_disp_name, $val);
                }
                
                
                if(count($six) > 0) {
                    $res[$cnt]['other_rec'] = money_sep($six[0]->sales_money - $six[0]->credit_money);
					if(empty($this->disp_type) && $res[$cnt]['other_rec'] <> 0) {
						$val->target_month = $six_month;
						if($type == 'child') {
							$res[$cnt]['other_rec'] =  get_anchor($this->get_detail_url($val, $res[$cnt]), $res[$cnt]['other_rec'], array("target" => "_blank"));
						} else {
							$res[$cnt]['other_rec'] =  get_anchor($this->get_detail_url($val), $res[$cnt]['other_rec'], array("target" => "_blank"));
						}
					}
                    $total += $six[0]->sales_money - $six[0]->credit_money;
                    $three += $six[0]->sales_money - $six[0]->credit_money;
                }
                $this->m_change_cnt = count($res);
            }
            
            if(isset($res[$cnt]['three_total'])) {
                $three += erase_money_sep($res[$cnt]['three_total']);
            }
            
            if(isset($res[$cnt]['total_money'])) {
                $total += erase_money_sep($res[$cnt]['total_money']);
            }
            
            
            $res[$cnt]['three_total'] = money_sep($three);
            $res[$cnt]['total_money'] = money_sep($total);
            
            
        }
        
    /**
	 * 部門別の月齢表一覧を取得する
	 *
	 * @access	public
	 * @param  array $detail
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
       private function _get_sep_depart($detail)
       {
           $res = array(); 
           
           $this->m_change_cnt = 999;
           
            $i=0;
            foreach ($detail as $key => $value) {

                if($this->chk_dup_data($detail, $key, "id")) {
                    $this->init_disp_array($res, $i);
                    unset($res[$i]['customer_disp_name']);
                } else {
                    $i--;
                }

                $res[$i]['institute_name'] = $value->institute_name;
                $res[$i]['institute_id'] = $value->institute_id;
                $res[$i]['depart_name'] = $value->depart_name;
                $res[$i]['depart_id'] = $value->depart_id;
                $res[$i]['disp_depart_name'] = empty($value->institute_name)? "諸口" : $value->institute_name." ".$value->depart_name;
                
                $this->set_target_month($value, $res, $i, "child");

                $i++;
            }
            
            return $res;
        }
        
    /**
	 * 配列の初期化
	 *
	 * @access	public
	 * @param  array $res
	 * @param  int $i
	 * @return	array
	 * @author	Kita Yasuhiro
	 */
        private function init_disp_array(&$res, $i)
        {
            
            $res[$i]['customer_disp_name'] = "";
            $res[$i]['total_money'] = "0";
            $res[$i]['three_total'] = "0";
            $res[$i]['target_sales'] = "0";
            $res[$i]['first_rec'] = "0";
            $res[$i]['second_rec'] = "0";
            $res[$i]['third_rec'] = "0";
            $res[$i]['fourth_rec'] = "0";
            $res[$i]['fifth_rec'] = "0";
            $res[$i]['other_rec'] = "0";
            
        }
        
    /**
	 * 一覧の絞込条件を作成する
	 *
	 * @access private
	 * @param  array $input
	 * @return string
	 * @author Kita Yasuhiro
	 */
	public function create_search_condition($input = array())
	{
		$condition = array();
                
                if(count($input) == 0) {
                    $data = $this->get_input_condition();
                } else {
                    $data = $input;
                }

                // 対象月
                if(empty($data['target_month'])) {
                    $this->m_target_month = date("Ym");
                } else {
                    $this->m_target_month = str_replace("/", "", $data['target_month']);
                }
                
                // 得意先
                if(!empty($data['customer_disp_name'])) {
                    $condition[] = "(mng.customer_disp_name like '%".$this->db->escape_like_str($data['customer_disp_name'])
                                                        ."%' or cus.customer_furi like '%".$this->db->escape_like_str($data['customer_disp_name'])."%')";
                }
                
                // 研究所
                if(!empty($data['institute_id'])) {
                    $condition[] = "(mng.institute_id=".$this->db->escape_like_str($data['institute_id']).")";
                }
                
                // 部門
                if(!empty($data['depart_id'])) {
                    $condition[] = "(mng.depart_id=".$this->db->escape_like_str($data['depart_id']).")";
                }
                
                // 検索条件返却
                if(count($condition) > 0) {
                    return implode(' and ', $condition);
                } else {
                    
                }

	}
        
    /**
	 * 検索条件のマスタデータ取得処理
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
	public function get_mst_data()
	{
		$data = array();
                
                // 部門
                $this->m_tbl_name = M_DEPART;
                $data['depart_list'] = $this->get_name_list(array("depart_id", "depart_name"));

                // 研究所
                $this->m_tbl_name = M_INSTITUTE;
                $data['institute_list'] = $this->get_name_list(array("institute_id", "institute_name"));
                
                // 滞留条件
                $data['retention'] = $this->general_name_mdl->get_retention();
                

		return $data;
	}
        
    /**
	 * 選択された滞留条件を取得する
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        private function get_retention()
        {
            
            if(isset($_POST['retention'])) {
                return $_POST['retention'];
            } else {
                
                if($this->session->userdata($this->router->class) == true) {
                    $input = $this->session->userdata($this->router->class);
                    return $input[SS_KEY_SEARCH]['retention'];
                    
                } else {
                    return RETENTION_1;
                }
                
            }
            
        }
        
    /**
	 * 売掛金月齢表出力
	 *
	 * @access private
	 * @return array
	 * @author Kita Yasuhiro
	 */
        public function output_receivable()
        {
            $input = $this->session->userdata($this->router->class);
            $search = $this->create_search_condition($input[SS_KEY_SEARCH]);
            
            $data = $this->get_pdf_data($search);
            
            
            
            $this->load->library('receivable_pdf');
            $this->receivable_pdf->display($data);
            
        }
        
    /**
	 * 必要な得意先条件を取得する
	 *
	 * @access private
	 * @param  string $search
	 * @param  boolean $page_flg
	 * @return array
	 * @author Kita Yasuhiro
	 */
        private function get_customer_where($search, $page_flg)
        {
            
            $start = $this->uri->segment(4);
            
            $customer_list = $this->get_list_customer($search, $page_flg, $start);
            
            if(count($customer_list) == 0) return array();
            
            $ary = array();
            foreach ($customer_list as $key => $value) {
                $ary[] = "'".$value->customer_disp_name."'";
            }
            return implode(',', $ary);
        }

}

/* End of file age_month_mdl.php */
/* Location: ./application/model/credit/age_month_mdl.php */