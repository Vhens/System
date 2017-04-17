<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>登录</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="/favicon.ico.png">
    <!--Core CSS -->
    <link href="/Public/Js/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="/Public/Css/bootstrap-reset.css" rel="stylesheet">
    <link href="/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Public/Js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="/Public/Css/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="/Public/Js/css3clock/css/style.css" rel="stylesheet">

    <link href="/Public/Css/style.css" rel="stylesheet">
    <link href="/Public/Css/myStyle.css" rel="stylesheet">
    <link href="/Public/Css/style-responsive.css" rel="stylesheet"/>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="index.html">
        <h2 class="form-signin-heading">
          <img src="/Public/Img/tx.jpg" class="avatar" alt="">
        </h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" name="loginName" class="form-control" id="loginName" placeholder="账号" autofocus>
                <input type="password" name="loginPwd" class="form-control" id="loginPwd" placeholder="密码">
                <input type="text" name="code" class="form-control dib w50" placeholder="验证码">
                <img src="<?php echo U('Login/Verify');?>" onclick="this.src=this.src+'?'+Math.random()" alt="" class="dib codeImg">
            </div>
            <div class="checkbox">
                <input id="checkbox-1" name="checkbox" type="checkbox" checked><label for="checkbox-1"></label>记住
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> 忘记密码?</a>

                </span>
            </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">登录</button>

            <div class="registration">
                未注册账号去.
                <a class="" href="<?php echo U('Regster/regster');?>">
                    注册
                </a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title text-center">找回密码？</h4>
                      </div>
                      <div class="modal-body">
                          <p>请输入你的邮箱重置密码！</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">取消</button>
                          <button class="btn btn-success" type="button">确认</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>

  
<script src="/Public/Js/jquery.js"></script>
<script src="/Public/Js/bs3/js/bootstrap.min.js"></script>
<script src="/Public/Js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/Public/Js/jquery.scrollTo.min.js"></script>
<script src="/Public/Js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="/Public/Js/jquery.nicescroll.js"></script>
<script src="/Public/Js/skycons/skycons.js"></script>
<script src="/Public/Js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="/Public/Js/calendar/clndr.js"></script>
<script src="http://cdn.bootcss.com/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="/Public/Js/layer/layer.js"></script>
<script type="text/javascript" src="/Public/Js/dialog.js"></script>
<script src="/Public/Js/calendar/moment-2.2.1.js"></script>
<script src="/Public/Js/evnt.calendar.init.js"></script>
<script src="/Public/Js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Public/Js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="/Public/Js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="/Public/Js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="/Public/Js/sparkline/jquery.sparkline.js"></script>
<script src="/Public/Js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="/Public/Js/scripts.js"></script>
<!--script for this page-->
<script type="text/javascript" src="/Template/Default/Admin/Login/Js/login.js"></script>
  </body>
</html>