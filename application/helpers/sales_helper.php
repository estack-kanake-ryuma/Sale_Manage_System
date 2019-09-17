<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sales helper
 *
 * 売上情報処理のhelperファイル
 *
 * @package	 application
 * @subpackage helpers
 * @author		Kanake Ryuma
 * @link		http://www.datalyze.co.jp
 */

if ( ! function_exists('convert_delimiter_report_no'))
{
	/**
	 * Convert_delimiter_report_no
	 *
	 * ハイフン区切りされていない報告書番号をハイフン区切りにする
	 *
	 * @access	public
	 * @param	string $str 報告書番号の親番号
	 * @return	string
	 */
	function convert_delimiter_report_no($str)
	{

		if(strlen($str) == 6) {

			// 下２桁とそれ以外でハイフン区切りにする
			// 一般外部XXXXXX-XX　自主・クレームXXXX-XX
			$str = substr($str, 0, count($str) - 3) . '-' . substr($str, count($str) - 3, 2);
		}

		return $str;
	}
}

/* End of file sales_helper.php */
/* Location: ./application/helpers/sales_helper.php */