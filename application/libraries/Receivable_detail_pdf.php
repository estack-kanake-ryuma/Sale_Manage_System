<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'libraries/Pdf_common.php';

/**
 * Pdf
 *
 * Pdfクラス
 *
 * @package	application
 * @subpackage	libraries
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class Receivable_detail_pdf extends Pdf_common {
        
        private $m_list_st_y = 65;
        private $m_break_page_cnt = 28;
        private $m_list_st_x = 15;
        private $al_abstract_money = array();
        private $al_handler_money = array();
        private $m_list_cnt = 0;
    
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
	public function __construct(){}

	/*
	* ---------------------------------------------------------------------------
	* 個別メソッド
	* ---------------------------------------------------------------------------
	*/

	/**
	 * PDF表示処理
	 *
	 * @access public
	 * @param  array $output
	 * @param  string $save_file
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function display($data)
	{
            
            // PDF出力準備処理
            $this->pre_display();
            
            // HEADER作成
            $this->Header($data[0]);
            
            // 明細作成
            $this->_set_handler_spec($data);
            
            $this->end_display();
            
	}

	/**
	 * 各種ヘッダーを生成
	 *
	 * @access public
	 * @param  array $output
	 * @param  string $save_file
	 * @return void
	 * @author Kita Yasuhiro
	 */
        function Header($info) {
  
            // テンプレート設定
            $this->_pdf->setSourceFile(APPPATH.'pdf/list_header.pdf');
            
            $iIndex = $this->_pdf->importPage(1);
            $this->_pdf->useTemplate($iIndex);
            
            $this->set_header_common();

            // タイトルを設定
            $this->set_title("売掛金月齢明細表");
            
            // 範囲を設定
            $this->set_target_month();
            
            //$this->set_condition("sales_sum_handler_order");
            
            // セグメントを設定
            $this->_pdf->SetFont(GOTHIC,'',13);
            $this->_pdf->text(16, 53, $this->change_code(""));
            
        }

	/**
	 * 売上明細表を設定
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_handler_spec($data) {
            
            // 表のタイトル行を設定
            $title_conf = $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "receivable_detail_list");
            $param = array("other", "fifth", "fourth", "third", "second", "first", "target_sales");
            
            $y = $this->m_list_st_y;
            $customer_y = 0;
            $row = 0;
            foreach ($data as $val) {
                
                ($row == 0) ? $customer_y = $y : $customer_y = $y+7;
                
                foreach ($val['depart_info'] as $depart) {
                    
                    $res = $this->_get_output_money($depart['sales_info']);
                    
                    
                    for($i=0; $i<count($param); $i++) {
                        
                        // 配列内にデータがあれば帳票に出力する。
                        if(isset($res[$param[$i]])) {
                            
                            $this->_pdf->SetXY(90, $y+=$this->_list_height);
                            $row++;
                            $this->_pdf->Cell(30, $this->_list_height * count($res[$param[$i]]) + $this->_list_height, $this->change_code($this->_get_month_name($param[$i])), 1, "", "L");

                            $sum_ary = array();
                            foreach ($res[$param[$i]] as $output) {
                                
                                $this->_pdf->Cell(16, $this->_list_height, $this->change_code($output['bill_date']), 1, "", "L");
                                $this->_pdf->Cell(16, $this->_list_height, $this->change_code($output['bill_no']), 1, "", "L");
                                $this->_pdf->Cell(16, $this->_list_height, $this->change_code($output['sales_money']), 1, "", "R");
                                $this->_pdf->Cell(16, $this->_list_height, $this->change_code($output['credit_money']), 1, "", "R");
                                $this->_pdf->Cell(16, $this->_list_height, $this->change_code($output['balance_money']), 1, "", "R");
                                
                                $sum_ary['sales_money'][] = $output['sales_money'];
                                $sum_ary['credit_money'][] = $output['credit_money'];
                                $sum_ary['balance_money'][] = $output['balance_money'];
                                
                                $this->_pdf->SetXY(120, $y+=$this->_list_height);
                                $row++;
                            
                            }
                            
                            $this->_pdf->Cell(32, $this->_list_height, $this->change_code("【月齢".$this->_get_month_name($param[$i])." 計】"), 1, "", "R");
                            $this->_pdf->Cell(16, $this->_list_height, $this->change_code(array_sum($sum_ary['sales_money'])), 1, "", "R");
                            $this->_pdf->Cell(16, $this->_list_height, $this->change_code(array_sum($sum_ary['credit_money'])), 1, "", "R");
                            $this->_pdf->Cell(16, $this->_list_height, $this->change_code(array_sum($sum_ary['balance_money'])), 1, "", "R");
                            
                        }
                        
                    }
                    
                    
                    
                }
                
                // 得意先名を設定
                $this->_pdf->SetXY($this->m_list_st_x, $customer_y);
                $this->_pdf->Cell(75, $this->_list_height * $row + 7, $this->change_code($val['customer_disp_name']), 1, "", "L");

                
//                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
//                
//                // 改ページ
//                $this->_set_page_break($data, $key, $y);
//                
//                // 摘要名称を設定
//                $this->_set_abstract_ctrl($data, $key, $y);
//
//                // 担当者計設定
//                $this->_set_handler_ctrl($data, $key, $y);
//                
//                for($i=0; $i<count($title_conf); $i++) {
//                    
//                    $disp_str = "";
//                    if(isset($val->$title_conf[$i]['col_name'])) {
//                        $disp_str = $this->get_disp_str($title_conf[$i]['type'], $val->$title_conf[$i]['col_name']);
//                    }
//                    
//                    if($title_conf[$i]['col_name'] == 'no') $disp_str = $row;
//                    
//                    $this->_pdf->Cell($title_conf[$i]['width'], $this->_list_height, $disp_str, 1, "", $title_conf[$i]['align']);
//                }
//                
//                $row++;
            }
//            
//            // 摘要名称を設定
//            $this->_set_abstract_ctrl($data, count($data), $y, true);
//
//            // 部門計設定
//            $this->_set_handler_ctrl($data, count($data), $y, true);
            
        }
        
        /**
         * 売上明細表を設定
         *
         * @access public
         * @param  array $data
         * @return void
         * @author Kita Yasuhiro
         */
        private function _set_abstract_ctrl($data, $key, &$y, $last_flg = false)
        {
            
            if($last_flg) {
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                $this->_pdf->Cell(116, $this->_list_height, $this->change_code("【".$data[$key-1]->abstract_name."　計】"), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_money))), 1, "", "R");
                return;
            }
            
            if($key == 0) {
                $this->_pdf->Cell(139, $this->_list_height, $this->change_code("● ".$data[$key]->abstract_name), 1, "", "L");
                $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                $this->al_abstract_money[] = $data[$key]->sum_no_tax;
                $this->m_list_cnt++;
            } else {
                
                if($data[$key]->abstract_id == $data[$key-1]->abstract_id && $data[$key]->depart_id == $data[$key-1]->depart_id) {
                    $this->al_abstract_money[] = $data[$key]->sum_no_tax;
                } else {
                    $this->_pdf->Cell(116, $this->_list_height, $this->change_code("【".$data[$key-1]->abstract_name."　計】"), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_money))), 1, "", "R");
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    $this->al_abstract_money = array();
                    $this->al_abstract_money[] = $data[$key]->sum_no_tax;
                    $this->m_list_cnt++;
                    
                    if($data[$key]->handler_id == $data[$key-1]->handler_id) {
                        $this->_pdf->Cell(139, $this->_list_height, $this->change_code("● ".$data[$key]->abstract_name), 1, "", "L");
                        $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    }
                    
                }
                
            }

        }
        
        /**
         * 部門計を設定
         *
         * @access public
         * @param  array $data
         * @return void
         * @author Kita Yasuhiro
         */
        private function _set_handler_ctrl($data, $key, &$y, $last_flg = false)
        {
            
            if($last_flg) {
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                $this->_pdf->Cell(116, $this->_list_height, $this->change_code("【".$data[$key-1]->handler_name    ."　計】"), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_handler_money))), 1, "", "R");
                return;
            }
            
            if($key == 0) {
                
                $this->al_handler_money[] = $data[$key]->sum_no_tax;
                
            } else {
                
                if($data[$key]->handler_id == $data[$key-1]->handler_id) {
                    $this->al_handler_money[] = $data[$key]->sum_no_tax;
                } else {
                    
                    $this->_pdf->Cell(116, $this->_list_height, $this->change_code("【".$data[$key-1]->handler_name    ."　計】"), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_handler_money))), 1, "", "R");
                    
                    $this->_set_page_break($data, $key, $y, TRUE);
                    $this->_pdf->Cell(139, $this->_list_height, $this->change_code("● ".$data[$key]->abstract_name), 1, "", "L");
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    $this->al_handler_money = array();
                    $this->al_handler_money[] = $data[$key]->sum_no_tax;
                }
                
            }

        }
        
	/**
	 * 改ページ処理
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_page_break($data, $key, &$y, $auto_break_flg=false)
        {
            
            if($this->m_list_cnt == $this->m_break_page_cnt || $auto_break_flg == true) {
                
                $this->m_list_cnt=0;
                
                // 改ページ
                $this->_pdf->AddPage();

                // HEADER入れる
                $this->Header($data[$key]);

                $this->_pdf->SetFont(GOTHIC,'',7);

                $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "sales_sum_handler");
                
                $y = $this->m_list_st_y;
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                
            } else {
                $this->m_list_cnt++;
            }
            
        }
        
        private function _get_output_money($sales)
        {
            $res = array();
            
            $i =0;
            foreach ($sales as $value) {
                
                if($value['target_sales'] != 0) {
                    $res['target_sales'][$i]['bill_date'] = $value['bill_date'];
                    $res['target_sales'][$i]['bill_no'] = $value['bill_no'];
                    $res['target_sales'][$i]['sales_money'] = $value['sales_money'];
                    $res['target_sales'][$i]['credit_money'] = $value['credit_money'];
                    $res['target_sales'][$i]['balance_money'] = $value['sales_money'] - $value['credit_money'];
                }
                
                if($value['first_rec'] != 0) {
                    $res['first'][$i]['bill_date'] = $value['bill_date'];
                    $res['first'][$i]['bill_no'] = $value['bill_no'];
                    $res['first'][$i]['sales_money'] = $value['sales_money'];
                    $res['first'][$i]['credit_money'] = $value['credit_money'];
                    $res['first'][$i]['balance_money'] = $value['sales_money'] - $value['credit_money'];
                }
                
                if($value['second_rec'] != 0) {
                    $res['second'][$i]['bill_date'] = $value['bill_date'];
                    $res['second'][$i]['bill_no'] = $value['bill_no'];
                    $res['second'][$i]['sales_money'] = $value['sales_money'];
                    $res['second'][$i]['credit_money'] = $value['credit_money'];
                    $res['second'][$i]['balance_money'] = $value['sales_money'] - $value['credit_money'];
                }
                
                if($value['third_rec'] != 0) {
                    $res['third'][$i]['bill_date'] = $value['bill_date'];
                    $res['third'][$i]['bill_no'] = $value['bill_no'];
                    $res['third'][$i]['sales_money'] = $value['sales_money'];
                    $res['third'][$i]['credit_money'] = $value['credit_money'];
                    $res['third'][$i]['balance_money'] = $value['sales_money'] - $value['credit_money'];
                }
                
                if($value['fourth_rec'] != 0) {
                    $res['fourth'][$i]['bill_date'] = $value['bill_date'];
                    $res['fourth'][$i]['bill_no'] = $value['bill_no'];
                    $res['fourth'][$i]['sales_money'] = $value['sales_money'];
                    $res['fourth'][$i]['credit_money'] = $value['credit_money'];
                    $res['fourth'][$i]['balance_money'] = $value['sales_money'] - $value['credit_money'];
                }
                
                if($value['fifth_rec'] != 0) {
                    $res['fifth'][$i]['bill_date'] = $value['bill_date'];
                    $res['fifth'][$i]['bill_no'] = $value['bill_no'];
                    $res['fifth'][$i]['sales_money'] = $value['sales_money'];
                    $res['fifth'][$i]['credit_money'] = $value['credit_money'];
                    $res['fifth'][$i]['balance_money'] = $value['sales_money'] - $value['credit_money'];
                }
                
                if($value['other_rec'] != 0) {
                    $res['other'][$i]['bill_date'] = $value['bill_date'];
                    $res['other'][$i]['bill_no'] = $value['bill_no'];
                    $res['other'][$i]['sales_money'] = $value['sales_money'];
                    $res['other'][$i]['credit_money'] = $value['credit_money'];
                    $res['other'][$i]['balance_money'] = $value['sales_money'] - $value['credit_money'];
                }
                
                $i++;
            }
            
            return $res;
            
        }
        
        
        private function _get_month_name($param)
        {
            
            switch ($param) {
                case "other": return "６ヵ月以上";
                case "fifth": return "５ヵ月";
                case "fourth": return "４ヵ月";
                case "third": return "３ヵ月";
                case "second": return "２ヵ月";
                case "first": return "１ヵ月";
                case "targeet_sales": return "対象月売上";
                default : return "";
            }
            
        }
        
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */