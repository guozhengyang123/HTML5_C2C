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

</head>
<body style="margin:0px">
    <div class="header_bg">

            <div class="logo_search">
                <div class="logo"><a href="#"><img src="/20161218/Public/home/img/logo.png" /></a></div>
                <div class="search">
                    <ul>
                        <li>
                            <div style="Z-INDEX:8888;POSITION:absolute;-moz-opacity:0.50;opacity:0.3;filter:alpha(opacity=30);BACKGROUND-COLOR:#000;display:none;" id="show">
                            </div>
                            <div class="topDiv" id="show_win">
                                    <h1>注册</h1>  
                                    <a href="index.html"><input id="btnClose" type="button" value="×" onClick="custom_close()" / style="width:17px"></a>

                                        <!-- <form method="post" role="form" style="height:610px; width:490px;" class="form"> 
                                                
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
                                                    <label>选择省市：</label>
                                                    <select name="province" class="input_three" id="selProvince" onChange = "getCity(this.options[this.selectedIndex].value)">  
                                                    </select>  
                                                    <select name="city" class="input_four" id="selCity">  
                                                        <option>北京</option>  
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
  
                                        </form> -->
                                        <iframe src="<?php echo U('Home/Dengluzhuce/zhuce');?>" frameborder="0" width="100%" height="80%" scrolling="no"></iframe> 
                     
                            </div>
                            <a href="javascript:void(0);" onclick="javascript:showDiv();">注册 |</a>
                        </li>
                        <li>
                            <div style="Z-INDEX:8888;POSITION:absolute;-moz-opacity:0.50;opacity:0.3;filter:alpha(opacity=30);BACKGROUND-COLOR:#000;display:none;" id="show1">
                            </div>
                            <div class="topDiv1" id="show_win1">
                                    <h1>登录</h1>  
                                    <a href="index.html"><input id="btnClose" type="button" value="×" onClick="custom_close()" / style="width:17px"></a>
                                    <!-- <div id="register_bottom"> -->
                                        <!-- <form method="post" role="form" style="height:300px; width:500px;" class="form">  
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
                                        </form>   -->
                                        <iframe src="<?php echo U('Home/Dengluzhuce/denglu');?>" frameborder="0" width="100%" height="80%" scrolling="no"></iframe> 
                                        
                       
                                  <!--   </div> -->                        
                            </div>
                            <a href="javascript:void(1);" onclick="javascript:showDiv1();">登录 |</a>
                        </li>
                        <li ><a href="<?php echo U('Home/Gwc/gwc');?>">购物车</a> |</li>
                        <li><a href="<?php echo U('Home/User/user3');?>">收藏夹</a> |</li>
                        <li><a href="<?php echo U('Home/User/user1');?>">个人中心</a> |</li>
                        <li><a href="<?php echo U('Home/Service/service');?>">客户服务</a></li>
                    </ul>
                    <div class="clear"></div>
                    <div class="form">
                        <div name="" type="button" class="inbut" value=""></div>
                        <input name="" type="text" class="intext"/>

                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!--nav-->
            <div id="menu">
                    <ul id="nav">
                          <li id="mainlevel_01" class="mainlevel">
                          <a href="<?php echo U('Home/Index/index');?>">网站首页</a>
                          </li>
                          <li id="mainlevel_02" class="mainlevel">
                          <a href="<?php echo U('Home/Category/category');?>">书籍报刊</a>
                            <ul id="sub_02">
                                <li><a href="<?php echo U('Home/Category/category');?>">资格证/等级考试</a></li>
                                <li><a href="<?php echo U('Home/List/list');?>">考研资料</a></li>
                                <li><a href="#">教科书</a></li>
                                <li><a href="#">计算机网络</a></li>
                                <li><a href="#">小说杂志</a></li>
                                <li><a href="#">其他</a></li>
                            </ul>
                         </li>
                         <li id="mainlevel_03" class="mainlevel">
                          <a href="#">闲置日用</a>
                                              <ul id="sub_03">
                                                    <li><a href="#">卡卷</a></li>
                                                    <li><a href="#">台灯</a></li>
                                                    <li><a href="#">椅子</a></li>
                                                    <li><a href="#">书柜</a></li>
                                                    <li><a href="#">其他</a></li>

                                                    </ul>
                                              </li>
                         <li id="mainlevel_04" class="mainlevel">
                          <a href="#">闲置数码</a>
                                              <ul id="sub_04">
                                                    <li><a href="#">笔记本</a></li>
                                                    <li><a href="#">手机</a></li>
                                                    <li><a href="#">平板</a></li>
                                                    <li><a href="#">移动电源</a></li>
                                                    <li><a href="#">键盘鼠标</a></li>
                                                    <li><a href="#">充电器</a></li>
                                                    <li><a href="#">U盘</a></li>
                                                    <li><a href="#">其他</a></li>
                                                    </ul>
                                              </li>
                         <li id="mainlevel_05" class="mainlevel">
                          <a href="#">影音小家电</a>
                                              <ul id="sub_05">
                                                    <li><a href="#">小电扇</a></li>
                                                    <li><a href="#">吹风机</a></li>
                                                    <li><a href="#">音箱</a></li>
                                                    <li><a href="#">耳机</a></li>
                                                    <li><a href="#">插线板</a></li>
                                                    <li><a href="#">饮水机</a></li>
                                                    <li><a href="#">其他</a></li>
                                                    </ul>
                                              </li>
                         <li id="mainlevel_06" class="mainlevel">
                          <a href="#">出行娱乐</a>
                                              <ul id="sub_06">
                                                    <li><a href="#">电车</a></li>
                                                    <li><a href="#">自行车</a></li>
                                                    <li><a href="#">轮滑鞋</a></li>
                                                    <li><a href="#">行李箱</a></li>
                                                    <li><a href="#">帐篷</a></li>
                                                    <li><a href="#">背包</a></li>
                                                    <li><a href="#">其他</a></li>
                                                    </ul>
                                              </li>
                        <li id="mainlevel_07" class="mainlevel">
                          <a href="image.html">失物招领</a>
                                              
                        </li>
                        <li id="mainlevel_08" class="mainlevel">
                          <a href="#">Girls</a>
                        </li>
                        
                                              
                    </ul>
                </div>
        </div>
    <div class="clear"></div>
   
<!--banner-->
<div id="slide_4">
        <div class="slide_content">
            <ul>
                <li><img src="/20161218/Public/home/img/banner_01.jpg" alt=""></li>
                <li><img src="/20161218/Public/home/img/banner_02.jpg" alt=""></li>
                <li><img src="/20161218/Public/home/img/banner_03.jpg" alt=""></li>
                <li><img src="/20161218/Public/home/img/banner_04.jpg" alt=""></li>
                <li><img src="/20161218/Public/home/img/banner_05.jpg" alt=""></li>
                <li><img src="/20161218/Public/home/img/banner_06.jpg" alt=""></li>
                <li><img src="/20161218/Public/home/img/banner_07.jpg" alt=""></li>                
            </ul>
        </div>
    </div>
<div class="clear"></div>
<!--content-->
<div class="wrapper">

    <div class="one">
        <img src="/20161218/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title" >
           <a href="#"><img src="/20161218/Public/home/img/book.png"/ class="icons"></a>
           <h2><a href="#">书籍报刊<span>Books and periodicals</span></a></h2><p><a href="#"><img src="/20161218/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/教师.png" /  id="p1"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">教师资格证资料</p>原价：45元  售价10元</a>
                    </div>

                </li> 
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/考研政治.png" /  id="p1"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">考研政治资料</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/六级真题.png" /  id="p1"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">英语六级真题</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/四级听力.png" /  id="p1"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">四级听力</p>原价：45元  售价10元</a>
                    </div>

                </li>
           </ul>
    </div>

    <div class="one">
        <img src="/20161218/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title">
           <a href="#"><img src="/20161218/Public/home/img/xianzhi.png"/ class="icons"></a>
           <h2><a href="#">闲置日用<span>Idle daily</span></a></h2><p><a href="#"><img src="/20161218/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/洗衣卡.png" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">洗衣卡</p>原价：45元  售价10元</a>
                    </div>

                </li>  
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/台灯.png" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="#"<p style="text-align: center">台灯</p>原价：40元  售价15元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/椅子.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">椅子</p>原价：95元  售价30元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/桌子.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">桌子</p>原价：100元  售价50元</a>
                    </div>

                </li>
           </ul>
    </div>

    <div class="one">
        <img src="/20161218/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title">
           <a href="#"><img src="/20161218/Public/home/img/shuma.png"/ class="icons"></a>
           <h2><a href="#">闲置数码<span>Idle digital</span></a></h2><p><a href="#"><img src="/20161218/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/充电宝.png" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">充电宝</p>原价：45元  售价10元</a>
                    </div>

                </li>  
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/充电头.png" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">充电头</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/平板.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">平板</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/手机.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">手机</p>原价：945元  售价200元</a>
                    </div>

                </li>  
           </ul>
    </div>

    <div class="one">
        <img src="/20161218/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title">
           <a href="#"><img src="/20161218/Public/home/img/jiadian.png"/ class="icons"></a>
           <h2><a href="#">影音系小家电<span>Small household electrical</span></a></h2><p><a href="#"><img src="/20161218/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/吹风机.png" /  id="p2" style="height:105px; margin-top: 35px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">吹风机</p>原价：45元  售价10元</a>
                    </div>

                </li>  
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/小电扇.png" /  id="p2" style="height:115px; margin-top: 25px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">小电扇</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/耳麦.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">耳麦</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/插线板.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">插线板</p>原价：945元  售价200元</a>
                    </div>

                </li>   
           </ul>
    </div>

    <div class="one">
        <img src="/20161218/Public/home/img/one_title.png" height="102" width="407"> 
        <div class="one_title">
           <a href="#"><img src="/20161218/Public/home/img/chuxing.png"/ class="icons"></a>
           <h2><a href="#">出行娱乐<span>Travel and entertainment</span></a></h2><p><a href="#"><img src="/20161218/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/帐篷.png" /  id="p2" style="height:105px; margin-top: 35px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">帐篷</p>原价：145元  售价80元</a>
                    </div>

                </li>  
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/轮滑鞋.png" /  id="p2" style="height:105px; margin-top: 35px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">轮滑鞋</p>原价：245元  售价140元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/行李箱.png" /  id="p2" style="height:160px; margin-top: 7px; padding-bottom: 23px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">行李箱</p>原价：245元  售价100元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/20161218/Public/home/img/自行车.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">自行车</p>原价：945元  售价200元</a>
                    </div>

                </li> 

           </ul>
    </div>
</div>

    <div id="scrollTop" >
        <div class="level-2"></div>
        <div class="level-3"></div>
    </div>
    <script src="/20161218/Public/home/js/mumayi_top.js"></script>
    <div class="clear"></div>
    <!--底部-->
    <footer>
        <img class="footer-tri" src="/20161218/Public/home/img/footer-tri.png">
        <div class="friend-links">
            <div class="links-title center">友情链接</div>
                <ul class="links-wr center">
                    <li class="first">
                        <a href="https://2.taobao.com/" target="_blank" class="links">闲鱼网</a>
                    </li>
                    <li>
                        <a href="http://www.ganji.com/" target="_blank" class="links">赶集网</a>
                    </li>
                </ul>
            </div>
        <div class="site-msg line1">
            <a class="about" id="fd_footer" href="javascript:;">产品意见反馈</a>
            <a class="contact" href="http://www.2shoujie.com/open" target="_blank">开通学校|开放平台</a>
        </div>
        <div class="site-msg line2">
            <span class="power">Power By Fighting-group ©2016-2017 奋斗小组 版权所有</span>
            <span>ICP备14003265号-2</span>
        </div>
    </footer>

<script type="text/javascript" src="/20161218/Public/home/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/20161218/Public/home/js/bootstrap.js"></script>
<script type="text/javascript" src="/20161218/Public/home/js/re.js"></script>
</body>
</html>