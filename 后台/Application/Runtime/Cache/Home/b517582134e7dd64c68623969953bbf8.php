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
     <form method="post" role="form" style="height:610px; width:490px;" class="form"> 
                                                
        <h5 style="text-align: center; line-height: 30px; margin-bottom: 10px">欢迎您注册网站会员，如果您已拥有账户，则可在此<a href="#">登录</a></h5>
        
        <div class="form-group">
            <label for="user-name" class="control   -label">用户名：</label>
            <input type="text" class="form-control" id="user-name" onblur="checkUserName()" placeholder="3~16个字符，且不能包含”@”和”#”字符"/>


            <div class="r">
                <span id="nameInfo"></span>
            </div>
        </div>
       
        <div class="form-group">
            <label for="password" class="control-label">密码：</label>
            <input type="password" class="form-control" id="password"  onblur="checkPassword()"
                       placeholder="长度在8个字符到16个字符"/>
            
            <div class="r">
                <span id="passwordInfo"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="repassword" class="control-label">校验密码：</label>
            <input type="password" class="form-control" id="repassword" onblur="checkRepassword()"placeholder="长度在8个字符到16个字符">
           
            <div class="r">
                <span id="repasswordInfo"></span>
            </div>
        </div>
        
        <div class="form-group">
            <label>选择学校：</label>
            <select name="province" class="input_three" id="selProvince" onChange = "getCity(this.options[this.selectedIndex].value)">  
            </select>  
            <select name="city" class="input_four" id="selCity">  
                <option>商学院</option>  
            </select>
        </div>

        <div class="form-group">
            <label  for="school" class="control-label">学校:</label>
            <input type="text" class="form-control" id="school" onblur="checkSchool()">
            <div class="r">
                <span id="schoolInfo"></span>
            </div>
        </div>

        <div class="form-group">
            <label  for="school" class="control-label">E-mail:</label>
            <input type="text" class="form-control" id="email" onblur="checkEmail()">
            <div class="r">
                <span id="emailInfo"></span>
            </div>
        </div>

        <div class="form-group" style="text-align: center">
            <input type="checkbox" name="save" value="yes" />已同意<a href="">c2c网站服务条款</a></td>
        </div>

        <div class="form-group">
            <div style="text-align: center">
                <button type="submit" id="submit" class="btn btn-success" onclick="validateForm()">提交</button>
                <br/><br/>
                <label><a href="#">注册帮助信息请点击这里</a></label>
            </div>
        </div>

    </form>
<script type="text/javascript" src="/20161218/Public/home/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/20161218/Public/home/js/bootstrap.js"></script>
<script type="text/javascript" src="/20161218/Public/home/js/re.js"></script>
</body>
</html>