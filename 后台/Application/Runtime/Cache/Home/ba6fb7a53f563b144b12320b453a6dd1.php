<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大学生校园二手网站</title>
<link href="/xxx/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/news_list_css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/zhucedenglu.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/xxx/Public/home/js/jquery-1.8.2.min.js"></script>
<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/thcic_menu.js"></script>
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
                         <?php if(is_array($list[0])): $i = 0; $__LIST__ = $list[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="mainlevel_01" class="mainlevel">
                              <a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>
                                <ul id="sub_02">
                                    <?php if(is_array($list[$vo['id']])): $i = 0; $__LIST__ = $list[$vo['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                             </li><?php endforeach; endif; else: echo "" ;endif; ?>        
                </ul>
        </div>
</div>

<div class="clear"></div>
<!--content-->
<div class="wrapper">
    <div class="daohang"> 
	<img src="/xxx/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title" >
           <a href="#"><img src="/xxx/Public/home/img/find.png"/ class="icons"></a>
           <h2><!-- 迷路指南： --><span><a href="<?php echo U('Home/Index/index');?>">首页</a>&gt;&gt;<a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php if(is_array($ess)): $i = 0; $__LIST__ = $ess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["name"]); endforeach; endif; else: echo "" ;endif; ?></a>&gt;&gt;<a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php if(is_array($pos)): $i = 0; $__LIST__ = $pos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["name"]); endforeach; endif; else: echo "" ;endif; ?></a></span></h2>
        </div>
    </div>
	<div class="content">
    	<div class="content_left">
        	<div class="left_one">
                <img src="/xxx/Public/home/img/leftone_bg.png" style="height:450px; width:220px; background-color:#E3EEEC">
            	<div>
            		<h2><?php if(is_array($ess)): $i = 0; $__LIST__ = $ess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></h2>
               		 <ul>
                     <?php if(is_array($poss)): $i = 0; $__LIST__ = $poss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>" class="now"><?php echo ($vo["name"]); ?></a></li>
						<!-- <li><a href="list.html">考研资料</a></li>
						<li><a href="#">教科书</a></li>
						<li><a href="#">计算机网络</a></li>
						<li><a href="#">小说杂志</a></li>
						<li><a href="#">其他    </a></li> --><?php endforeach; endif; else: echo "" ;endif; ?>
                	</ul>
                </div>
            </div>
        </div>
        <div class="content_right">
                <ul>
                <?php if(is_array($iss)): $i = 0; $__LIST__ = $iss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <div>
                            <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo U($vo['picture']);?>"  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><p style="text-align: center">教师资格证资料</p>原价：<?php echo ($vo["price"]); ?>元  售价<?php echo ($vo["secprice"]); ?>元</a>
                        </div>

                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/考研政治.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">考研政治资料</p>原价：45元  售价10元</a>
                        </div>

                    </li>
                    <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/六级真题.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">英语六级真题</p>原价：45元  售价10元</a>
                        </div>

                    </li>
                    <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/四级听力.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">四级听力</p>原价：45元  售价10元</a>
                        </div>

                    </li>
                    <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/教师.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">教师资格证资料</p>原价：45元  售价10元</a>
                        </div>

                    </li> 
                    <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/考研政治.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">考研政治资料</p>原价：45元  售价10元</a>
                        </div>

                    </li>
                    <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/六级真题.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">英语六级真题</p>原价：45元  售价10元</a>
                        </div>

                    </li>
                    <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/六级真题.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">英语六级真题</p>原价：45元  售价10元</a>
                        </div>

                    </li>
                    <li>
                        <div>
                            <a href="#"><img src="/xxx/Public/home/img/四级听力.png" /  id="p1"></a>
                        </div>
                        <div id="t1">
                            <a href="#"><p style="text-align: center">四级听力</p>原价：45元  售价10元</a>
                        </div>

                    </li> -->

                </ul>
            
                <div class="clear"></div>
                <!-- <div class="page">
                	<dl>
                    	<dt><a href="#">首 页</a></dt>
                    	<dt><a href="#">上一页</a></dt>
                    	<dt><a href="#">1</a></dt>
                    	<dt><a href="#">2</a></dt>
                    	<dt><a href="#">3</a></dt>
                    	<dt><a href="#">4</a></dt>
                    	<dt><a href="#">5</a></dt>
                    	<dt><a href="#">……</a></dt>
                    	<dt><a href="#">下一页</a></dt>
                    	<dt><a href="#">末 页</a></dt>
                    </dl>
                </div> -->
        </div>   
    </div>
</div>

<div class="clear"></div>
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

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/re.js"></script>
</body>
</html>