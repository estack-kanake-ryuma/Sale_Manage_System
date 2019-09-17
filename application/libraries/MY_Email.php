<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY Email
 *
 * 独自のEmailクラス
 *
 * @package	application
 * @subpackage libraries
 * @author		Kita Yasuhiro
 * @link		http://www.datalyze.co.jp
 */
class MY_Email extends CI_Email {

	/**
	 * コンストラクタ
	 *
	 * @access public
	 * @author	Kita Yasuhiro
	 */
	public function __construct($rules = array())
	{
		parent::__construct($rules);
	}

    /**
	 * FROMの設定
	 *
	 * @access public
	 * @param	string $from
	 * @param	string $name
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function from($from, $name = '')
	{
		// エンコードの設定
		$name = mb_encode_mimeheader($name, "ISO-2022-JP", "UTF-8");

		parent::from($from, $name);
	}

    /**
	 * 件名の設定
	 *
	 * @access public
	 * @param	string $subject
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function subject($subject)
	{
		// エンコードの設定
		$subject = mb_convert_encoding($subject, "ISO-2022-JP", "UTF-8");

		parent::subject($subject);
	}

    /**
	 * 本文の設定
	 *
	 * @access public
	 * @param	string $body
	 * @return void
	 * @author Kita Yasuhiro
	 */
	public function message($body)
	{
		// エンコードの設定
		$body = mb_convert_encoding($body, "ISO-2022-JP", "UTF-8");

		// 改行コードの設定
//		$body = str_replace(array("\r\n","\r"), "", $body);

		parent::message($body);
	}
}

/* End of file MY_Email.php */
/* Location: ./application/libraries/MY_Email.php */