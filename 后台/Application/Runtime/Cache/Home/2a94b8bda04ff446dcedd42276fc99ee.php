<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
<title>大学生校园二手网站</title>
<link href="/xxx/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/zhucedenglu.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/xxx/Public/home/js/jquery-1.8.2.min.js"></script>
<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/thcic_menu.js"></script>
<!--[if !IE]>banner图片  JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/solideForK13-min.js"></script>

</head>
<body style="margin:0px">
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
   
<!--banner-->
<div id="slide_4">
        <div class="slide_content">
            <ul>
            <?php if(is_array($adv)): $i = 0; $__LIST__ = $adv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="<?php echo U($vo['address']);?>" alt=""></li>
                <!-- <li><img src="/xxx/Public/home/img/banner_02.jpg" alt=""></li>
                <li><img src="/xxx/Public/home/img/banner_03.jpg" alt=""></li>
                <li><img src="/xxx/Public/home/img/banner_04.jpg" alt=""></li>
                <li><img src="/xxx/Public/home/img/banner_05.jpg" alt=""></li>
                <li><img src="/xxx/Public/home/img/banner_06.jpg" alt=""></li>
                <li><img src="/xxx/Public/home/img/banner_07.jpg" alt=""></li>  --><?php endforeach; endif; else: echo "" ;endif; ?>              
            </ul>
        </div>
    </div>
<div class="clear"></div>
<!--content-->
<div class="wrapper">

   <div class="one">
        <img src="/xxx/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title" >
           <a href="#"><img src="/xxx/Public/home/img/book.png"/ class="icons"></a>
           <h2><a href="#">书籍报刊<span>Books and periodicals</span></a></h2><p><a href="#"><img src="/xxx/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
            <?php if(is_array($ess)): $i = 0; $__LIST__ = $ess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div>
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo U($vo['picture']);?>" /  id="p1"></a>
                    </div>
                    <div id="t1">
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><p style="text-align: center"><?php echo ($vo["name"]); ?></p>原价：<?php echo ($vo["price"]); ?>元  售价<?php echo ($vo["secprice"]); ?>元</a>
                    </div>

                </li> 
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

                </li> --><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
    </div>
    <div class="one">
        <img src="/xxx/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title">
           <a href="#"><img src="/xxx/Public/home/img/xianzhi.png"/ class="icons"></a>
           <h2><a href="#">闲置日用<span>Idle daily</span></a></h2><p><a href="#"><img src="/xxx/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
           <?php if(is_array($iss)): $i = 0; $__LIST__ = $iss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div>
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo U($vo['picture']);?>" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><p style="text-align: center"><?php echo ($vo["name"]); ?></p>原价：<?php echo ($vo["price"]); ?>元  售价<?php echo ($vo["secprice"]); ?>元</a>
                    </div>

                </li>  
                <!-- <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/台灯.png" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="#"<p style="text-align: center">台灯</p>原价：40元  售价15元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/椅子.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">椅子</p>原价：95元  售价30元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/桌子.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">桌子</p>原价：100元  售价50元</a>
                    </div>

                </li> --><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
    </div>

    <div class="one">
        <img src="/xxx/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title">
           <a href="#"><img src="/xxx/Public/home/img/shuma.png"/ class="icons"></a>
           <h2><a href="#">闲置数码<span>Idle digital</span></a></h2><p><a href="#"><img src="/xxx/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
            <?php if(is_array($dss)): $i = 0; $__LIST__ = $dss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div>
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo U($vo['picture']);?>" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><p style="text-align: center"><?php echo ($vo["name"]); ?></p>原价：<?php echo ($vo["price"]); ?>元  售价<?php echo ($vo["secprice"]); ?>元</a>
                    </div>

                </li>  
                <!-- <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/充电头.png" /  id="p2"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">充电头</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/平板.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">平板</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/手机.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">手机</p>原价：945元  售价200元</a>
                    </div>

                </li>   --><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
    </div>

    <div class="one">
        <img src="/xxx/Public/home/img/one_title.png" height="102" width="407">
        <div class="one_title">
           <a href="#"><img src="/xxx/Public/home/img/jiadian.png"/ class="icons"></a>
           <h2><a href="#">影音系小家电<span>Small household electrical</span></a></h2><p><a href="#"><img src="/xxx/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
           <?php if(is_array($fss)): $i = 0; $__LIST__ = $fss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div>
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo U($vo['picture']);?>" /  id="p2" style="height:105px; margin-top: 35px"></a>
                    </div>
                    <div id="t1">
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><p style="text-align: center"><?php echo ($vo["name"]); ?></p>原价：<?php echo ($vo["price"]); ?>元  售价<?php echo ($vo["secprice"]); ?>元</a>
                    </div>

                </li>  
                <!-- <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/小电扇.png" /  id="p2" style="height:115px; margin-top: 25px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">小电扇</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/耳麦.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">耳麦</p>原价：45元  售价10元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/插线板.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">插线板</p>原价：945元  售价200元</a>
                    </div>

                </li>    --><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
    </div>

    <div class="one">
        <img src="/xxx/Public/home/img/one_title.png" height="102" width="407"> 
        <div class="one_title">
           <a href="#"><img src="/xxx/Public/home/img/chuxing.png"/ class="icons"></a>
           <h2><a href="#">出行娱乐<span>Travel and entertainment</span></a></h2><p><a href="#"><img src="/xxx/Public/home/img/more.gif" /></a></p>
        </div>
           <ul>
           <?php if(is_array($pss)): $i = 0; $__LIST__ = $pss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <div>
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><img src="<?php echo U($vo['picture']);?>" /  id="p2" style="height:105px; margin-top: 35px"></a>
                    </div>
                    <div id="t1">
                        <a href="<?php echo U('Home/Show/show');?>?id=<?php echo ($vo["id"]); ?>"><p style="text-align: center"><?php echo ($vo["name"]); ?></p>原价：<?php echo ($vo["price"]); ?>元  售价<?php echo ($vo["secprice"]); ?>元</a>
                    </div>

                </li>  
                <!-- <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/轮滑鞋.png" /  id="p2" style="height:105px; margin-top: 35px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">轮滑鞋</p>原价：245元  售价140元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/行李箱.png" /  id="p2" style="height:160px; margin-top: 7px; padding-bottom: 23px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">行李箱</p>原价：245元  售价100元</a>
                    </div>

                </li>
                <li>
                    <div>
                        <a href="#"><img src="/xxx/Public/home/img/自行车.png" /  id="p2" style="height:100px; margin-top: 40px"></a>
                    </div>
                    <div id="t1">
                        <a href="#"><p style="text-align: center">自行车</p>原价：945元  售价200元</a>
                    </div>

                </li>  --><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
    </div>
</div>

    <div id="scrollTop" >
        <div class="level-2"></div>
        <div class="level-3"></div>
    </div>
    <script src="/xxx/Public/home/js/mumayi_top.js"></script>
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

<script type="text/javascript" src="/xxx/Public/home/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/xxx/Public/home/js/bootstrap.js"></script>
<script type="text/javascript" src="/xxx/Public/home/js/re.js"></script>
</body>
</html>