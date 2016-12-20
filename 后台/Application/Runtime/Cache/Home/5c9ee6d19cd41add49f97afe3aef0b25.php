<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<mate charset="utf-8">
<title>登录</title>
<link href="/xxx/Public/home/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<div class="header">
		<div class="left">
			<img src="/xxx/Public/home/img/logo.png" />
		</div>

		<div class="header_link">
			<a href="<?php echo U('Home/User/login');?>">登录 |</a>
			<a href="<?php echo U('Home/User/register');?>">注册</a>
		</div>
	</div>
	
	<div class="loginpanel">
	    <form action="<?php echo U('Home/User/login');?>" method="post">
	        <div class="panel loginbox">
	        	<div class="panel-top">登录&nbsp;<a href="<?php echo U('Home/User/register');?>">/注册</a></div>
	            <div class="panel-body">
	                <div class="log-line">
	                    <div class="log-text">
	                        <input type="text" class="username" name="username" placeholder="用户名"/>
	                    </div>
	                </div>
	                <div class="log-line">
	                    <div class="log-text">
	                        <input type="password"class="password" name="password" placeholder="密码"/>
	                    </div>
	                </div>
	                <div class="log-line">
	                    <div class="log-text">
	                        <input type="text" style="height:44px;width:149px" class="verify" name="verify" placeholder="验证码"/>
	                        <img id="ver" src="<?php echo U('Home/User/verify');?>" alt="verify_code" onclick="this.src='<?php echo U('Home/User/verify');?>'" />                       
	                    </div>
	                </div>
	            </div>
	            <div class="forget">
                    <a href="#">忘记密码？</a>
                </div>

	            <div class="log-sub">
	            	<input type="submit" name="submit" class="style1" onmouseover="this.className='style2'" onmouseout="this.className='style1'" value="登    录">
	            </div>
	        </div>
	    </form>
	</div>
		
	<div class="foot">
		Copyright &copy; 2016-2017 奋斗小组
	</div>
</div>	

</body>
</html>