<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>注册</title>
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

      <form class="form-signin" id="form-register"  method="post">
        <h2 class="form-signin-heading">注册用户</h2>
        <div class="login-wrap">
            <input type="text" name="userName" class="form-control" id="userName" placeholder="用户昵称" autofocus>
            <input type="text" name="userQQ" class="form-control" id="userQQ" placeholder="QQ" autofocus>
            <input type="text" name="userEmail" class="form-control" id="userEmail" placeholder="Email" autofocus>
            <div class="radios text-center">
                <input id="radio-3" name="userType" type="radio" checked value="0"><label for="radio-3"></label>普通会员
                <input id="radio-4" name="userType" type="radio" value="1"><label for="radio-4"></label>门店用户
            </div>
            <input type="text" name="loginName" class="form-control" id="loginName" placeholder="用户名" autofocus>
            <input type="password" name="loginPwd" id="loginPwd" class="form-control" placeholder="密码">
            <input type="password" name="rePwd" class="form-control" id="rePwd" placeholder="确认密码">
            <div class="radios text-center">
                <input id="radio-1" name="userSex" type="radio" checked value="1"><label for="radio-1"></label>男
                <input id="radio-2" name="userSex" type="radio" value="0"><label for="radio-2"></label>女
            </div>
            <input type="text" name="userPhone" class="form-control" id="userPhone" placeholder="手机号">
            <input type="text" name="code" class="form-control dib w50" id="code" placeholder="验证码">
            <img src="<?php echo U('Login/Verify');?>" onclick="this.src=this.src+'?'+Math.random()" alt="" class="dib codeImg">
            <button class="btn btn-lg btn-login btn-block" id="register" type="button">注册</button>

            <div class="registration">
                已有账号去.
                <a class="" href="<?php echo U('Login/login');?>">
                    登录
                </a>
            </div>

        </div>

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
    <script type="text/javascript">
        var url='<?php echo U("Register/register");?>';
    </script>
    <script type="text/javascript" src="/Template/Default/Admin/Register/Js/register.js"></script>
  </body>
</html>