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
class Handler_sum_pdf extends Pdf_common {
        
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
            
            // PDF出力終了処理
            $from = $this->get_search_condition('book_date_from');
            $to = $this->get_search_condition('book_date_to');
            
            $fname = 'uriagesyukei_tantousya_'.str_replace("/", "", $from).'_'.str_replace("/", "", $to);
            $this->end_display($fname);
            
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
            $this->set_title($info->title);
            
            // 範囲を設定
            $this->set_span();
            
            $this->set_condition("sales_sum_handler_order");
            
            // セグメントを設定
            $this->_pdf->SetFont(GOTHIC,'',13);
            $this->_pdf->text(16, 53, $this->change_code($info->handler_name));
            
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
            $title_conf = $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "sales_sum_handler");
            
            $y = $this->m_list_st_y;
            
            $row = 1;
            foreach ($data as $key=>$val) {
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                
                // 改ページ
                $this->_set_page_break($data, $key, $y);
                
                // 摘要名称を設定
                $this->_set_abstract_ctrl($data, $key, $y);

                // 担当者計設定
                $this->_set_handler_ctrl($data, $key, $y);
                
                for($i=0; $i<count($title_conf); $i++) {
                    
                    $disp_str = "";
                    if(isset($val->$title_conf[$i]['col_name'])) {
                        $disp_str = $this->get_disp_str($title_conf[$i]['type'], $val->$title_conf[$i]['col_name']);
                    }
                    
                    if($title_conf[$i]['col_name'] == 'no') $disp_str = $row;
                    
                    $this->_pdf->Cell($title_conf[$i]['width'], $this->_list_height, $disp_str, 1, "", $title_conf[$i]['align']);
                }
                
                $row++;
            }
            
            // 摘要名称を設定
            $this->_set_abstract_ctrl($data, count($data), $y, true);

            // 部門計設定
            $this->_set_handler_ctrl($data, count($data), $y, true);
            
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
                
                $this->_set_page_break($data, $key-1, $y);
                
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                $this->_pdf->Cell(120, $this->_list_height, $this->change_code("【".$data[$key-1]->abstract_name."　計】"), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_money))), 1, "", "R");
                return;
            }
            
            if($key == 0) {
                
                $this->_set_page_break($data, $key, $y);
                
                $this->_pdf->Cell(143, $this->_list_height, $this->change_code("● ".$data[$key]->abstract_name), 1, "", "L");
                $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                $this->al_abstract_money[] = $data[$key]->sum_no_tax;
            } else {
                
                if($data[$key]->abstract_id == $data[$key-1]->abstract_id && $data[$key]->handler_id == $data[$key-1]->handler_id) {
                    $this->al_abstract_money[] = $data[$key]->sum_no_tax;
                } else {
                    
                    $this->_set_page_break($data, $key-1, $y);
                    
                    $this->_pdf->Cell(120, $this->_list_height, $this->change_code("【".$data[$key-1]->abstract_name."　計】"), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_abstract_money))), 1, "", "R");
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=7);
                    
                    $this->al_abstract_money = array();
                    $this->al_abstract_money[] = $data[$key]->sum_no_tax;
                    
                    if($data[$key]->handler_id == $data[$key-1]->handler_id) {
                        
                        $this->_set_page_break($data, $key, $y);
                        
                        $this->_pdf->Cell(143, $this->_list_height, $this->change_code("● ".$data[$key]->abstract_name), 1, "", "L");
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
                
                $this->_set_page_break($data, $key-1, $y);
                
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                $this->_pdf->Cell(120, $this->_list_height, $this->change_code("【".$data[$key-1]->handler_name    ."　計】"), 1, "", "R");
                $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_handler_money))), 1, "", "R");
                return;
            }
            
            if($key == 0) {
                
                $this->al_handler_money[] = $data[$key]->sum_no_tax;
                
            } else {
                
                if($data[$key]->handler_id == $data[$key-1]->handler_id) {
                    $this->al_handler_money[] = $data[$key]->sum_no_tax;
                } else {
                
                    $this->_set_page_break($data, $key-1, $y);
                    
                    $this->_pdf->Cell(120, $this->_list_height, $this->change_code("【".$data[$key-1]->handler_name    ."　計】"), 1, "", "R");
                    $this->_pdf->Cell(23, $this->_list_height, $this->change_code(money_sep(array_sum($this->al_handler_money))), 1, "", "R");
                    
                    $this->_set_page_break($data, $key, $y, TRUE);
                    $this->_pdf->Cell(143, $this->_list_height, $this->change_code("● ".$data[$key]->abstract_name), 1, "", "L");
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
        
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */