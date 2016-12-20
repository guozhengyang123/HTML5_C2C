<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
<title>大学生校园二手网站</title>
<link href="/xxx/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/user.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/xxx/Public/home/js/jquery-1.8.2.min.js"></script>
<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/thcic_menu.js"></script>
<!--[if !IE]>banner图片  JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/solideForK13-min.js"></script>
<link rel="stylesheet" href="/xxx/Public/home/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/xxx/Public/home/css/bootstrap-grid.min.css" />
<link rel="stylesheet" type="text/css" href="/xxx/Public/home/css/zzsc.css">
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
                <form>
                    <input name="" type="text" class="intext"/><input name="" type="button" class="inbut" value="" />
                </form>
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
                      <a href="#">书籍报刊</a>
                        <ul id="sub_02">
                            <li><a href="#">资格证/等级考试</a></li>
                            <li><a href="#">考研资料</a></li>
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
    <!--content-->
    <div class="wrapper">
        <ul id="user_nav">
            <li><a href="user1.html">个人资料</a></li>
            <li><a href="user2.html">我发布的商品</a></li>
            <li><a href="user3.html">我的收藏</a></li>
            <li class="on"><a href="user4.html">消息中心</a></li>
        </ul>
        <div id="my_info">
                 <div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-main">
					<div class="main-wrap mt15" style="border: 0px;">
						<!--<h3>
	                        <strong>个人信息</strong>
	                    </h3>-->
						<div class="server-wrapper">
							<div class="server-tab" style="margin-top: 20px;">
								</div>
								<div style=" width: 503px;height: 90px;float: left;border: 2px 	#5F9EA0 solid;margin-left: 10px;">
									<p style="margin-top: 0px;font-size: 14px;color: #333333;font-weight: bold;margin-top: 10px;margin-left: 10px;">评价小贴士</p>
									<ul style="    list-style: none;margin-left: 20px;font-size: 12px;">
										<li style=" margin-left: 10px;   list-style: none;font-size: 12px;margin-top:5px "><span class="pingspan"></span>发表评价就有机会获得买豆</li>
										<li style=" margin-left: 10px;   list-style: none;font-size: 12px;margin-top:5px "><span class="pingspan"></span>发表评价就有机会获得买豆</li>
										
									</ul>
								</div>
								<div style="width: 100%;    display: inline-block; margin-top: 20px;">
									
									<p style="width: 99%;font-size: 14px;color: #333333;margin-top: 20px; margin-left: 30px; font-weight: bold;"><font style="color: #007AFF;">&nbsp;&nbsp;</font><img src="" style="margin-left:5px;"><img src="" ><span style="margin-left: 630px;"><font style="color: #F37B1D;">&nbsp;&nbsp;</font></span></p>
									
								</div>
								<ul>
								  <li><a data-toggle="tab">我收到的评价</a></li>
								  
								</ul>
							     <div style="width: 80px;margin-left: 50px;height: 20px;">
							     	
							     	
							     </div>
							        <div style="width: 96%;margin-top: 20px;display: inline-block;border-top: 1px #ccc solid;padding-top: 30px;">
								  	<div style="float: left;margin-left: 77px;"> 
								  		好评
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<p style="    word-break: break-word;   width: 300px;font-size: 12px;">很好的卖家,推荐的品牌正合适,推荐的品牌的时候问了好多详细的问题,很负责</p>
								  	  <p>[2016-07-10 19:00:00]</p>
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span>买家:<a ><font style="color:#0f42b2">依山小屋2016</font ></a></span>
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span><a ><font style="color:#0f42b2">悦诗风吟卸妆水</font ></a></span>
								  		<p><font style="color:#f37b1d;">128</font><font style="color:#333333;">元</font></p>
								  	</div>
								  	
								  	<div style="float:right;"> 
								  		<button style="background-color: #F37B1D;padding: 5px;border: 0px;color: #fff;border-radius: 5px;width: 50px;"> 回复</button>
								  	</div>
								  	
								  	</div>
								
								  	
								 	<div style="width: 96%;margin-top: 20px;display: inline-block;border-top: 1px #ccc solid;padding-top: 30px;">
								  	<div style="float: left;margin-left: 77px;"> 
								  		好评
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<p style="    word-break: break-word;   width: 300px;font-size: 12px;">很好的卖家,推荐的品牌正合适,推荐的品牌的时候问了好多详细的问题,很负责</p>
								  	  <p>[2016-07-10 19:00:00]</p>
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span>买家:<a ><font style="color:#0f42b2">依山小屋2016</font ></a></span>
								  	</div>
								  	
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span><a ><font style="color:#0f42b2">悦诗风吟卸妆水</font ></a></span>
								  		<p><font style="color:#f37b1d;">128</font><font style="color:#333333;">元</font></p>
								  	</div>
								  	
								  	<div style="float:right;"> 
								  		<button style="background-color: #F37B1D;padding: 5px;border: 0px;color: #fff;border-radius: 5px;width: 50px;"> 回复</button>
								  	</div>
								  	
								  	</div>
								<div style="width: 96%;margin-top: 20px;display: inline-block;border-top: 1px #ccc solid;padding-top: 30px;"></div>
						</div>
						        <ul>
								  <li><a data-toggle="tab">我做出的评价</a></li>
								  
								</ul>
								<div style="width: 80px;margin-left: 50px;height: 20px;">
							     	
							     	
							     </div>
							        <div style="width: 96%;margin-top: 20px;display: inline-block;border-top: 1px #ccc solid;padding-top: 30px;">
								  	<div style="float: left;margin-left: 77px;"> 
								  		好评
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<p style="    word-break: break-word;   width: 300px;font-size: 12px;">很好的卖家,推荐的品牌正合适,推荐的品牌的时候问了好多详细的问题,很负责</p>
								  	  <p>[2016-07-10 19:00:00]</p>
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span>买家:<a ><font style="color:#0f42b2">依山小屋2016</font ></a></span>
								  	</div>
								  	
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span><a ><font style="color:#0f42b2">悦诗风吟卸妆水</font ></a></span>
								  		<p><font style="color:#f37b1d;">128</font><font style="color:#333333;">元</font></p>
								  	</div>
								  	
								  	<div style="float:right;"> 
								  		<button style="background-color: #F37B1D;padding: 5px;border: 0px;color: #fff;border-radius: 5px;width: 50px;"> 回复</button>
								  	</div>
								  	
								  	</div>
								  	<div style="width: 80px;margin-left: 50px;height: 20px;">
							     	
							     	
							     </div>
							        <div style="width: 96%;margin-top: 20px;display: inline-block;border-top: 1px #ccc solid;padding-top: 30px;">
								  	<div style="float: left;margin-left: 77px;"> 
								  		好评
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<p style="    word-break: break-word;   width: 300px;font-size: 12px;">很好的卖家,推荐的品牌正合适,推荐的品牌的时候问了好多详细的问题,很负责</p>
								  	  <p>[2016-07-10 19:00:00]</p>
								  	</div>
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span>买家:<a ><font style="color:#0f42b2">依山小屋2016</font ></a></span>
								  	</div>
								  	
								  	<div style="float: left;margin-left: 77px;"> 
								  		<span><a ><font style="color:#0f42b2">悦诗风吟卸妆水</font ></a></span>
								  		<p><font style="color:#f37b1d;">128</font><font style="color:#333333;">元</font></p>
								  	</div>
								  	
								  	<div style="float:right;"> 
								  		<button style="background-color: #F37B1D;padding: 5px;border: 0px;color: #fff;border-radius: 5px;width: 50px;"> 回复</button>
								  	</div>
								  	
								  	</div>
								  	<div style="width: 80px;margin-left: 50px;height: 20px;">
							     	
							     	
							     </div>
							     <div style="width: 96%;margin-top: 20px;display: inline-block;border-top: 1px #ccc solid;padding-top: 30px;"></div>
							       
								  	
					</div>
				</div>
				
			</div>
		</div>
		</div>
		<div class="clear "></div>
                
                 
                   
    </div>
</div>
</div>

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
<script type="text/javascript" src="js/add.js"></script>
 </body>
</html>