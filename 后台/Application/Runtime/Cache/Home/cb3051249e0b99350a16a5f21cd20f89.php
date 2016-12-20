<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>jQuery移动端购物车商品删除代码 - 站长素材</title>
<link rel="stylesheet" href="/xxx/Public/home/css/reset2.css">
<link rel="stylesheet" href="/xxx/Public/home/css/animate.css">
<link rel="stylesheet" href="/xxx/Public/home/css/jd_cart.css">
<link href="/xxx/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/user.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="js/thcic_menu.js"></script>
<!--[if !IE]>banner图片  JS<![endif]-->
<script type="text/javascript" src="js/solideForK13-min.js"></script>
</head>
<body>
<div class="header_bg">
        <div class="logo_search">
            <div class="logo"><a href="#"><img src="/xxx/Public/home/img/logo.png" /></a></div>
            <div class="search">
                <?php if($_SESSION['username']!= null): ?><ul class="nav">
                            <li class="drop">
                                <a href="#" class="dropdown">你好，<?php echo (session('username')); ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo U('Home/User/user1');?>">个人中心</a></li>
                                    <li><a href="<?php echo U('Home/User/logout');?>">退出登录</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php else: ?>
                        <ul class="nav">
                            <li>
                                <a href="<?php echo U('Home/User/login');?>">登录</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Home/User/register');?>">注册</a>
                            </li>
                        </ul><?php endif; ?>
                <div class="clear"></div>
                <div class="form">
                    <div name="" type="button" class="inbut" value="" /></div>
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
                      <a href="#">失物招领</a>
                                          
                    </li>
                    <li id="mainlevel_08" class="mainlevel">
                      <a href="#">Girls</a>
                    </li>
                    
                                          
                </ul>
            </div>
    </div>
    <div class="clear"></div>
    <div class="wrapper">
        <ul id="user_nav">
            <li><a href="user1.html">个人资料</a></li>
            <li><a href="user2.html">我发布的商品</a></li>
            <li class="on"><a href="user3.html">我的收藏</a></li>
            <li><a href="user4.html">消息中心</a></li>
        </ul>
</div>
  <div class="jd_shop">
     
     <div class="jd_shop_con">
         <div class="product">
             
             <div class="shop_info clearfix">
                 <a href="#" class="img_box f_left"><img src="/xxx/Public/home/img/六级真题.png" alt=""></a>
                 <div class="info_box">
                     <a class="p_name" href="#">华研外语 英语六级真题2016年12月新题型详解 大学英语真题单词汇听力阅读理解</a>
                     <p class="p_price">&yen;32</p>
                     <div class="p_opition">
                        <div class="change_num f_left">
                            <p>卖家：张三</p>
                        </div>
                        <div class="delete_box f_right">
                            <span class="delete_up"></span>
                            <span class="delete_down"></span>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="product">
             
             <div class="shop_info clearfix">
                 <a href="#" class="img_box f_left"><img src="/xxx/Public/home/img/六级真题.png" alt=""></a>
                 <div class="info_box">
                     <a class="p_name" href="#">华研外语 英语六级真题2016年12月新题型详解 大学英语真题单词汇听力阅读理解</a>
                     <p class="p_price">&yen;32</p>
                     <div class="p_opition">
                        <div class="change_num f_left">
                            <p>卖家：张三</p>
                        </div>
                        <div class="delete_box f_right">
                            <span class="delete_up"></span>
                            <span class="delete_down"></span>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="product">
             
             <div class="shop_info clearfix">
                 <a href="#" class="img_box f_left"><img src="/xxx/Public/home/img/六级真题.png" alt=""></a>
                 <div class="info_box">
                     <a class="p_name" href="#">华研外语 英语六级真题2016年12月新题型详解 大学英语真题单词汇听力阅读理解</a>
                     <p class="p_price">&yen;32</p>
                     <div class="p_opition">
                        <div class="change_num f_left">
                            <p>卖家：张三</p>
                        </div>
                        <div class="delete_box f_right">
                            <span class="delete_up"></span>
                            <span class="delete_down"></span>
                        </div>
                     </div>
                 </div>
             </div>
             </div>
         <div class="product">     
             <div class="shop_info clearfix">
                 <a href="#" class="img_box f_left"><img src="/xxx/Public/home/img/六级真题.png" alt=""></a>
                 <div class="info_box">
                     <a class="p_name" href="#">华研外语 英语六级真题2016年12月新题型详解 大学英语真题单词汇听力阅读理解</a>
                     <p class="p_price">&yen;32</p>
                     <div class="p_opition">
                        <div class="change_num f_left">
                            <p>卖家：张三</p>
                        </div>
                        <div class="delete_box f_right">
                            <span class="delete_up"></span>
                            <span class="delete_down"></span>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="product">
             <div class="shop_info clearfix">
                 <a href="#" class="img_box f_left"><img src="/xxx/Public/home/img/六级真题.png" alt=""></a>
                 <div class="info_box">
                     <a class="p_name" href="#">华研外语 英语六级真题2016年12月新题型详解 大学英语真题单词汇听力阅读理解</a>
                     <p class="p_price">&yen;32</p>
                     <div class="p_opition">
                        <div class="change_num f_left">
                            <p>卖家：张三</p>
                        </div>
                        <div class="delete_box f_right">
                            <span class="delete_up"></span>
                            <span class="delete_down"></span>
                        </div>
                     </div>
                 </div>
             </div>
             </div>
     </div>
 </div>

<div class="jd_win">
    <div class="jd_win_box">
        <div class="jd_win_tit">你确定取消收藏该商品吗？</div>
        <div class="jd_btn clearfix">
            <a href="#" class="cancle f_left">取消</a>
            <a href="#" class="submit f_right">确定</a>
        </div>

    </div>
</div>
<script src='js/jquery.js'></script>
<script src="js/cartjs.js"></script>
<!--底部-->
    <footer>
        <img class="footer-tri" src="/xxx/Public/home/img/footer-tri.png">
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



</body>
</html>