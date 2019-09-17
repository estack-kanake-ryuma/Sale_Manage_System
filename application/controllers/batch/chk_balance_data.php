<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 繰越金整合性チェック
 *
 * @author datalyze
 */
class chk_balance_data extends MY_Controller {
    	/**
	 * コンストラクタ
	 *
	 * @package    application
	 * @subpackage controllers
	 * @author    Yoko Koiwai
	 * @link    http://www.datalyze.co.jp
         * php C:/gitwork/skk/main/index.php batch chk_balance_data
	 */
	public function __construct() {

		parent::__construct();
		// CLI処理か判定 ブラウザからのアクセスは404エラー
		if ( ! $this->input->is_cli_request() ) {
			show_404();
		}

	}

        public function index($input=NULL)
        {
            if ($input) {
                if (!preg_match("/^[0-9]{8}$/", $input)) {
                    echo "format error [yyyymmdd]";
                    exit;
                }
                $min_target = strtotime($input);
                //$min_target = new Datetime($input);
                //if (substr($input,-2) != $min_target->format('d')) {
                $check = date('m-d-Y', $min_target);
                list($month, $day, $year) = explode('-', $check);
                if (substr($input, -2) != $day) {
                    echo '[ERROR] date not exist';
                    exit;
                }
                if (strtotime('20170101')>$min_target) {
                    echo '[ERROR] Invalid date. from 20170101 to now';
                    exit;
                }
            } else {
                //$min_target = new DateTime('first day of 6 month ago');
                $min_target =  strtotime(date('Ym01').' -6 month');
                //$min_target = $min_target->modify('-6 month');
            }
            
            
            $this->db->select('MAX(target_month) AS max_target');
            $res = $this->db->get(T_BALANCE_MNG)->result();
            if ($res) {
//                $max_target = new DateTime($res[0]->max_target.'01');
//                $max_target = $max_target->modify('+1 months');
                $max_target = strtotime($res[0]->max_target.'01');

            } else {
                // t_balance_mng にデータない想定外
                echo '[ERROR] NO DATA AT T_BALANCE_MNG!!';
                exit;
            }
            if ($min_target > $max_target) {
                // min_targetがmax_targetより大きかったらERROR
                echo '[ERROR] check the date. min='.date('Ymd', $min_target).' max='.date('Ymd', $max_target);
                exit;
            }
            
            
            
            $target = $min_target;
            $i=0;
            while ($target <= $max_target)
            {
                $i++;
                if ($i >= 1000)
                {
                    echo "[ERROR]too match roop!\n";
                    exit;
                }
                
//                $this->update_balance_info($this->checkcheck($target->format("Ym")));
                $this->update_balance_info($this->checkcheck(date('Ym', $target)));
                //$target = $target->modify('+1 months');
                $target = strtotime(date('Ymd',$target). " +1 month");
                
            }
            
        }
        
        private function checkcheck($target)
        {
            $sql = 'SELECT '.
                            'balance.target_month,'.
                            'balance.customer_id, '.
                            'balance.customer_disp_name, '.
                            'balance_money, '.
                            'bef_balance_money, '.
                            'IFNULL(sales_sum,0), '.
                            'IFNULL(s_before_sum,0), '.
                            'IFNULL(rec_sum,0), '.
                            'IFNULL(f_rec_sum,0),  '.
                            '(IFNULL(sales_sum,0)+IFNULL(s_before_sum,0))-(IFNULL(rec_sum,0)+IFNULL(f_rec_sum,0)) AS calc_result  , '.
                            'IFNULL(balance_money,0)-((IFNULL(sales_sum,0)+IFNULL(s_before_sum,0))-(IFNULL(rec_sum,0)+IFNULL(f_rec_sum,0))) AS diff_value  '.
                    'FROM  '.
                            '(SELECT target_month,customer_id,customer_disp_name,balance_money, bef_balance_money FROM t_balance_mng WHERE target_month = ? collate utf8_general_ci AND delete_flg = 0 GROUP BY customer_id) AS balance '.
                            'LEFT JOIN  '.
                            '(SELECT customer_id,customer_disp_name,IFNULL(sum(sum_money),0) AS sales_sum FROM t_sales_mng WHERE credit_type <>3 AND date_format(book_date,"%Y%m") = ? AND delete_flg = 0 GROUP BY customer_id) AS sales  '.
                            'ON balance.customer_id = sales.customer_id AND balance.customer_disp_name = sales.customer_disp_name '.
                            'LEFT JOIN  '.
                            '(SELECT customer_id,customer_disp_name,IFNULL(sum(sum_money),0) AS s_before_sum FROM t_sales_mng WHERE credit_type =3 AND date_format(bill_date,"%Y%m") = ? AND delete_flg = 0 GROUP BY customer_id) AS s_before  '.
                            'ON balance.customer_id = s_before.customer_id AND balance.customer_disp_name = s_before.customer_disp_name	 '.
                            'LEFT JOIN  '.
                            '(SELECT bill.customer_id,bill.customer_disp_name,IFNULL(sum(reconcile_money),0) AS rec_sum FROM t_credit_data AS data LEFT JOIN t_credit_mng AS credit ON data.credit_mng_id = credit.credit_mng_id LEFT JOIN t_bill_mng AS bill ON credit.bill_no = bill.bill_no WHERE date_format(reconcile_date, "%Y%m") = ? AND bill.delete_flg = 0 GROUP BY customer_id) AS reconicile '.
                            'ON balance.customer_id = reconicile.customer_id AND balance.customer_disp_name = reconicile.customer_disp_name '.
                            'LEFT JOIN  '.
                            '(SELECT f_money.customer_id,f_money.customer_disp_name,IFNULL(sum(reconcile_money),0) AS f_rec_sum FROM t_first_money_data AS f_data LEFT JOIN t_first_money_mng AS f_money ON f_data.first_mng_id = f_money.first_mng_id  WHERE date_format(f_data.reconcile_date, "%Y%m") = ? AND f_data.delete_flg = 0 GROUP BY customer_id) AS f_reconicile '.
                            'ON balance.customer_id = f_reconicile.customer_id AND balance.customer_disp_name = f_reconicile.customer_disp_name '.
                    ' HAVING balance_money != calc_result'; 
            
            $result = $this->db->query($sql, array($target,$target,$target,$target,$target));
            return $result;
        }
        private function update_balance_info( $result)
        {
            if ($result->num_rows() > 0)
            {
                //var_dump($result->result());
                foreach ($result->result() as $res ) {
                    
                    if ($this->_check_duplicate($res->target_month, $res->customer_disp_name)->num_rows == 0) {
                        // 売上情報管理テーブル登録
                        $b_info = array();
                        $b_info = array(
                            'target_month'  => $res->target_month,
                            'customer_id'   => $res->customer_id,
                            'customer_disp_name' => $res->customer_disp_name,
                            'diff_value'         => $res->diff_value,
                            'ins_user_id'   => 0, //BATCH_USER
                            'last_user_id'  => 0, //BATCH_USER
                                );
                        $this->db->set('last_datetime', 'now()', false);
                        //$this->db->insert(T_BALANCE_INFO, $b_info);  TODO:system_config への切り出し
                        $this->db->insert('t_balance_info', $b_info);
                        
                    }
                    
                    
                    
                }
            }
            
        }
        private function _check_duplicate($target_month, $customer_disp_name)
        {
            $this->db->where('target_month', $target_month);
            $this->db->where('customer_disp_name', $customer_disp_name);
            $this->db->where('delete_flg', 0);
            $result = $this->db->get('t_balance_info');

            return $result;
        }
}
