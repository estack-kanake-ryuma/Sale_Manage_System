<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Bill helper
 *
 * 請求情報処理のhelperファイル
 *
 * @package	application
 * @subpackage helpers
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */

if ( ! function_exists('get_bill_status_html'))
{
	/**
	 * Get Bill Status Html
	 *
	 * 請求書のステータス用のHTMLを取得する
	 *
	 * @access	public
	 * @param	string $flg
	 * @return	string
	 */
	function get_bill_status_html($flg)
	{
		$html = '<span class="#class#">#msg#</span>';

		if($flg == FLG_ON)
		{
			$html = str_replace('#class#', 'registed', $html);
			$html = str_replace('#msg#', '公開済', $html);
		}
		else
		{
			$html = str_replace('#class#', 'open_off', $html);
			$html = str_replace('#msg#', '公開待ち', $html);
		}

		return $html;
	}
}

/* End of file bill_helper.php */
/* Location: ./application/helpers/bill_helper.php */