<?php
/*
|--------------------------------------------------------------------------
| メールの設定
|--------------------------------------------------------------------------
*/
if(PHP_OS == 'WIN32' || PHP_OS == 'WINNT')
{
	$config['protocol'] = 'smtp';
	$config['smtp_host'] = 'smtp.gmoserver.jp';
	$config['smtp_port'] = '587';
	$config['smtp_user'] = 'info@datalyze.co.jp';
	$config['smtp_pass'] = 'datalyzeinfo';
	$config['charset'] = 'iso-2022-jp';
	$config['crlf'] = '\r';
	$config['wordwrap'] = false;
}
else
{
	$config['protocol'] = 'sendmail';
	$config['mailpath'] = '/usr/sbin/sendmail';
	$config['charset'] = 'iso-2022-jp';
	$config['crlf'] = '\r';
	$config['wordwrap'] = false;
}

/* End of file email.php */
/* Location: ./application/config/email.php */