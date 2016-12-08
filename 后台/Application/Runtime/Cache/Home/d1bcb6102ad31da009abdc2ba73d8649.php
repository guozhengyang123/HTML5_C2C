<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
<title>大学生校园二手网站</title>
<link href="/20161218/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/20161218/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/20161218/Public/home/css/zhucedenglu.css" rel="stylesheet" type="text/css">
<link href="/20161218/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/20161218/Public/home/js/jquery-1.8.2.min.js"></script>
<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="/20161218/Public/home/js/thcic_menu.js"></script>
<!--[if !IE]>banner图片  JS<![endif]-->
<script type="text/javascript" src="/20161218/Public/home/js/solideForK13-min.js"></script>

<script src="/20161218/Public/home/js/mumayi_top.js"></script>

</head>
<body>   
    <!-- <div id="register_bottom"> -->
    <form method="post" role="form" style="height:300px; width:500px;" class="form">  
        <div class="form-group">
                <label for="user-name" class="control-label">用户名：</label>
                <input type="text" class="form-control" id="user-name" onblur="checkUserName()" placeholder="请输入用户名！"/>
                <div class="r">
                    <span id="nameInfo"></span>
                </div>
        </div>

        <div class="form-group">
                <label for="password" class="control-label">密码：</label>
                <input type="password" class="form-control" id="password"  onblur="checkPassword()" placeholder="请输入密码！"/>
                <div class="r">
                    <span id="passwordInfo"></span>
                </div>
        </div>
        <div class="form-group" style="margin-top: 50px">
                <div style="text-align: center">
                    <button type="submit" id="submit" class="btn btn-success" onclick="validateForm()">登录</button>
                   
                </div>
            </div>


            <span class="register" style="text-align: center;">
                <h3 style="line-height: 70px">还没有账户吗，先去注册一下吧！</h3>
            </span>
    </form>  
    
<script type="text/javascript" src="/20161218/Public/home/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/20161218/Public/home/js/bootstrap.js"></script>
<script type="text/javascript" src="/20161218/Public/home/js/re.js"></script>
</body>
</html>