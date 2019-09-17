<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="ja" />
    <meta http-equiv="Content-style-Type" content="text/css" />
    <title><?php echo $heading ?>　－　売掛金管理システム</title>
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="stylesheet" type="text/css" href="/js/jquery_ui/smoothness/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/js/jquery_ui/tinyTips.css" />
    <script  src="/js/screen/login.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="container">
        <div id="header">
          <div id="header_navi">
            <h1 id="logo">
              <img src="/images/logo.gif" alt="消費科学研究所" />
            </h1>
          </div>
        </div>
        <div id="contents">
          <div class="contents_blk">
            <div style="width: 100%; text-align: center; line-height: 160%; margin-top: 200px;">
              <div class="red">
                <?php echo $message; ?>
              </div>
              <div style="margin-top: 50px;margin-bottom: 200px;">
                <a href="<?php echo $url; ?>"><?php echo $link_message; ?></a>
              </div>
            </div>
          </div>
        </div>
        <div id="footer">
          <div id="footer_content">
            <div>
              <p>Copyright &copy; CONSUMER PRODUCT END-USE RESEARCH INSTITUTE Co.,LTD. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>