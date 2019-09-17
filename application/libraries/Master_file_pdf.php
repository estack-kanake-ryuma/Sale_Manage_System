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
class Master_file_pdf extends Pdf_common {
        
        private $m_list_st_y = 65;
        private $m_break_page_cnt = 28;
        private $m_list_st_x = 15;
        private $m_list_cnt = 0;
        private $m_customer_info = array();
    
	/**
	 * コンストラクタ
	 *
	 * @package	application
	 * @subpackage controllers
	 * @author	Kita Yasuhiro
	 * @link	http://www.datalyze.co.jp
	 */
	public function __construct(){
        }

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
	public function display($data, $customer_info)
	{
            
            $this->m_customer_info = $customer_info;
            
            // PDF出力準備処理
            $this->pre_display();
            
            // HEADER作成
            $this->Header($this->m_customer_info);
            
            // 内容の編集
            $this->_set_deital_list($data);
                        
            // PDF出力終了処理
            $from = $this->get_search_condition('target_date_from');
            $to = $this->get_search_condition('target_date_to');
            
            $fname = 'motochou_'.str_replace("/", "", $from).'_'.str_replace("/", "", $to);
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
            $this->set_title("得意先元帳");
            
            // 範囲を設定
            $this->set_span("target_date_from", "target_date_to");
            
            // 出力条件を設定
            $this->set_master_condition($info);
            
            // セグメントを設定
            $this->_pdf->SetFont(GOTHIC,'',13);
            $this->_pdf->text(16, 53, $this->change_code($info->customer_disp_name));
  
            
        }

	/**
	 * 得意先元帳を設定
	 *
	 * @access public
	 * @param  array $data
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function _set_deital_list($data) {
            
            
            // 表のタイトル行を設定
            $title_conf = $this->set_list_title($this->m_list_st_x, $this->m_list_st_y, "master_file_print");
            
            $y = $this->m_list_st_y;
            
            $row = 1;
            foreach ($data as $key=>$val) {
                
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                
                $this->_set_page_break($data, $key, $y);
                
                if($val->month_flg == true) {
                    $this->_pdf->SetFillColor(217, 217, 217);
                    $range = get_range_str($data[$key-1]->target_month, $this->m_customer_info->cutoff_date, $this->_ci->input->post("target_date_from"), $this->_ci->input->post("target_date_to"));
                    $this->_pdf->Cell(100, $this->_list_height, $this->change_code($range), 1, "", "R", "1");
                    $this->_pdf->Cell(26, $this->_list_height, $this->change_code($val->disp_sales_total), 1, "", "R", "1");
                    $this->_pdf->Cell(26, $this->_list_height, $this->change_code($val->disp_credit_total), 1, "", "R", "1");
                    $this->_pdf->Cell(26, $this->_list_height, "", 1, "", "R", "1");
                    $this->_pdf->SetFillColor(255, 255, 255);
                    
                    $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                    
                    $this->_set_page_break($data, $key, $y);
                }
                
                if(count($data) - 1 != $key ) {
                    
                    for($i=0; $i<count($title_conf); $i++) {
                        $disp_str = "";
                        if(isset($val->$title_conf[$i]['col_name'])) {
                            $disp_str = $this->get_disp_str($title_conf[$i]['type'], $val->$title_conf[$i]['col_name']);
                        }

                        $this->_pdf->Cell($title_conf[$i]['width'], $this->_list_height, $disp_str, 1, "", $title_conf[$i]['align']);
                    }
                }
                
                $row++;
                
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
                $this->Header($this->m_customer_info);

                $this->_pdf->SetFont(GOTHIC,'',7);

                $this->set_list_title($this->m_list_st_x, $this->m_list_st_y);
                
                $y = $this->m_list_st_y;
                $this->_pdf->SetXY($this->m_list_st_x, $y+=$this->_list_height);
                
            } else {
                $this->m_list_cnt++;
            }
            
        }
        
        
	/**
	 * 得意先元帳の出力条件を設定
	 *
	 * @access public
	 * @param  array $output
	 * @param  string $save_file
	 * @return void
	 * @author Kita Yasuhiro
	 */
        private function set_master_condition($info) {
            
            $x = 140;
            $y = 40;
            
            // 出力順序
            $this->_pdf->SetFont(GOTHIC,'',7);
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->SetFillColor(217, 217, 217);
            
            $this->_pdf->Cell(18, 5, $this->change_code("得意先区分"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->change_code($info->customer_type_name), "1", 0, "L");
            
            $this->_pdf->SetXY($x, $y+=5);
            $this->_pdf->Cell(18, 5, $this->change_code("締日"), "1", 0, "C", 1);
            $this->_pdf->Cell(33, 5, $this->change_code($info->disp_cutoff_date), "1", 0, "L");

            $this->_pdf->SetFillColor(255, 255, 255);
            
        }
        
        
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */