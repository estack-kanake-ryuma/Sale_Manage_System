<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-style-Type" content="text/css" />
                <title><?php echo $title; ?></title>
		<link rel="stylesheet" href="/css/base.css" />
		<link rel="stylesheet" href="/css/base.css" />
                <script  src="/js/util.js"></script>
		<script  src="/js/common.js"></script>
		<script  src="/js/jquery.js"></script>
		<script  src="/js/jquery_ui/jquery-ui.js"></script>
		<script  src="/js/jquery_ui/jquery.ui.datepicker-ja.js"></script>
                <script  src="/js/jquery_ui/jquery.ui.ympicker.js"></script>
		<script  src="/js/jquery_ui/jquery.tinyTips.js"></script>
                <script  src="/js/jquery_ui/jquery.tablefix.js"></script>
		<script  src="/js/jq_lib.js"></script>
		<link rel="stylesheet" type="text/css" href="/js/jquery_ui/smoothness/jquery-ui.css" />
		<link rel="stylesheet" type="text/css" href="/js/jquery_ui/tinyTips.css" />
                <?PHP if(!empty($js)): ?><script  src="<?PHP echo $js; ?>"></script><?PHP endif; ?>
    </head>
    <body <?php echo $body; ?>>
        <div id="wrapper">
            <div id="container">
                <div id="contents" style="margin-left: 10px;">
                    <?php echo $contents; ?>
                </div>
            </div>
        </div>
    </body>
</html>