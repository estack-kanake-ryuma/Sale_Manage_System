<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
                <meta http-equiv="content-language" content="ja" />
		<meta http-equiv="Content-style-Type" content="text/css" />
		<title><?php echo $page_info->tag_title; ?></title>
		<link rel="stylesheet" href="/css/base.css" />
                <script  src="/js/util.js"></script>
		<script  src="/js/common.js?v=1.2.0"></script>
		<script  src="/js/jquery.js"></script>
		<script  src="/js/jquery_ui/jquery-ui.js"></script>
		<script  src="/js/jquery_ui/jquery.ui.datepicker-ja.js"></script>
                <script  src="/js/jquery_ui/jquery.ui.ympicker.js"></script>
		<script  src="/js/jquery_ui/jquery.tinyTips.js"></script>
                <script  src="/js/jquery_ui/jquery.tablefix.js"></script>
		<script  src="/js/jq_lib.js"></script>
                <?php if(!empty($page_info->js_file_name)): ?>
                    <script  src="<? echo $page_info->js_file_name; ?>"></script>
                <?php endif; ?>
		<link rel="stylesheet" type="text/css" href="/js/jquery_ui/smoothness/jquery-ui.css" />
		<link rel="stylesheet" type="text/css" href="/js/jquery_ui/tinyTips.css" />
    </head>
    <body <?php echo $body; ?>>
            <div id="wrapper">
                    <div id="container">
                        <div id="header">
                            <div id="header_navi">
                                <div style="float: left;width: 250px;height: 100%;">
                                    <h1 id="logo"><a href="/top"><img src="/images/logo.gif" alt="消費科学研究所" /></a></h1>
                                </div>
                                <div style="text-align: right;">
                                    <ul style="padding-top: 10px;">
                                        <li>
                                            <a href="/logout">ログアウト</a>
                                        </li>
                                    </ul>
                                </div>
                                <div style="text-align: right;margin-top: 20px;">
                                    <span style="color: #22408F;font-weight: bold;">
                                        <?PHP echo $login[SS_KEY_INSTITUTE_NAME].nbs(3).$login[SS_KEY_USER_NAME].nbs(2)."様";?>
                                    </span>
                                    <span style="margin-left: 30px;font-size: 1.5em;font-weight: bold;color: #22408F;"><?php echo $proc_month; ?></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div id="gnavi_blk">
                                <div id="gnavi_p_blk">
                                    <ul id="gnavi">
                                        <?php foreach($tab_menu as $tab): ?>
                                            <li><a href="/<?PHP echo $tab->url; ?>"><img src="<?PHP echo $tab->image_path ?>" /></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div id="gnavi_c_blk">
                                    <div id="lnavi_master">
                                        <table class="lnavi_tbl">
                                            <tr>
                                                <?php foreach($local_menu as $menu): ?>
                                                    <td>
                                                        <?php if($menu->now_flg == 1): ?>
                                                            <?php echo $menu->menu_name; ?>
                                                        <?php else: ?>
                                                            <a href="/<?php echo $menu->url; ?>"><?php echo $menu->menu_name; ?></a>
                                                        <?php endif; ?>
                                                    </td>
                                                <?php endforeach; ?>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div id="contents">
                            <table class="contents_title">
                                <tr>
                                    <td class="page_title">
                                        <h2 style="width: 100%"><?= $page_info->page_name ?></h2>
                                    </td>
                                    <?php if($page_info->input_flg == FLG_ON): ?>
                                    <td class="proc_info">
                                        <div>
                                            <?PHP $url = get_back_url(); if(!empty($url)): ?>
                                                <a style="margin-top: 5px;" href="<?PHP echo $url ?>">→&nbsp;戻る</a>
                                            <?PHP endif; ?>
                                            <span class="msg"><?PHP echo $page_info->regist_msg; ?></span>
                                        </div>
                                    </td>
                                    <?php endif; ?>
                                    <?php if($page_info->group_cd == GRP_MST && $page_info->page_type == FLG_ON): ?>
                                    <td>
                                        <input type="button" class="size_L" value="新規登録" onclick="move_input();" />
                                    </td>
                                    <?php endif; ?>
                                </tr>
                            </table>
                            <?php echo $contents; ?>
                        </div>

                        <div class="clear"></div>

                        <div id="footer">
                            <div id="footer_content">
                                <div>
                                        <p>Copyright &copy; CONSUMER PRODUCT END-USE RESEARCH INSTITUTE Co.,LTD. All Rights Reserved</p>
                                </div>
                            </div>
                            <?php
                            if(ENVIRONMENT == 'development') {
                                    $ci =& get_instance();
                            ?>
                            <p class="footer">このページは、<?php echo $ci->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end'); ?> 秒でレンダリングされました。メモリ使用量：<?php echo (memory_get_usage(TRUE) / 1024); ?>KB</p>
                            <?php } ?>
                        </div>
            </div>
    </body>
</html>