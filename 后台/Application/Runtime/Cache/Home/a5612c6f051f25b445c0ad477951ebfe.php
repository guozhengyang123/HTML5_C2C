<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大学生校园二手网站</title>
<link href="/C2C/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/C2C/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/C2C/Public/home/css/show.css" rel="stylesheet" type="text/css">
<link href="/C2C/Public/home/css/news_list_css.css" rel="stylesheet" type="text/css">
<link href="/C2C/Public/home/css/zhucedenglu.css" rel="stylesheet" type="text/css">
<link href="/C2C/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css">



<script type="text/javascript" src="/C2C/Public/home/js/jquery-1.8.2.min.js"></script>
<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="/C2C/Public/home/js/thcic_menu.js"></script>
<script type="text/javascript" src="/C2C/Public/home/js/show.js"></script>

<script type="text/javascript" src="/C2C/Public/home/js/re.js"></script>



 <style type="text/css">
        
    </style>
    <script type="text/javascript" src="/C2C/Public/home/js/jquery.min.js"></script>
    <script src="/C2C/Public/home/js/jquery.fly.min.js"></script>
    <!--[if lte IE 9]>
<script src="requestAnimationFrame.js"></script>
<![endif]-->
    <script>
       
    </script>
    <script src="/scripts/2bc/_gg_980_90.js" type="text/javascript"></script>
</head>
<body>
<div class="header_bg">
     <div class="m-sidebar">
        <div class="cart">
            <i id="end"></i><span>购物车</span>
        </div>
    </div>
    <div id="msg">
        已成功加入购物车！
    </div>

    <div class="logo_search">
                <!-- 欢迎你：<?php echo ($_SESSION['username']); ?> -->
                <div class="logo"><a href="#"><img src="/C2C/Public/home/img/logo.png" /></a></div>
                <div class="search">
                    <ul>
                        <li>
                            <div style="Z-INDEX:8888;POSITION:absolute;-moz-opacity:0.50;opacity:0.3;filter:alpha(opacity=30);BACKGROUND-COLOR:#000;display:none;" id="show">
                            </div>
                            <div class="topDiv" id="show_win">
                                    <h1>注册</h1>  
                                    <a href="<?php echo U(index);?>"><input id="btnClose" type="button" value="×" onClick="custom_close()" / style="width:17px"></a>
 
                                        <iframe src="<?php echo U('Home/Dengluzhuce/zhuce');?>" frameborder="0" width="100%" height="80%" scrolling="no"></iframe> 
                     
                            </div>
                            
                            <a href="javascript:void(0);" onclick="javascript:showDiv();">注册 |</a>
                        </li>
                        <li>
                            <div style="Z-INDEX:8888;POSITION:absolute;-moz-opacity:0.50;opacity:0.3;filter:alpha(opacity=30);BACKGROUND-COLOR:#000;display:none;" id="show1">
                            </div>
                            <div class="topDiv1" id="show_win1">
                                    <h1>登录</h1>  
                                    <a href="<?php echo U(index);?>"><input id="btnClose" type="button" value="×" onClick="custom_close()" / style="width:17px"></a>
                                     
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


       

<!--banner-->

<!--content-->
<div class="wrapper">
	<div class="daohang"> 
        <img src="/C2C/Public/home/img/one_title.png" height="102" width="407">
            <div class="one_title" >
                <a href="#"><img src="/C2C/Public/home/img/find.png"/ class="icons"></a>
                 <h2>迷路指南：<span><a href="#">首页</a>&gt;&gt;<a href="#">书籍报刊</a>&gt;&gt;<a href="#">教师资格证</a></span></h2>
                </div>
    </div>
	<div class="scontent">
         <?php if(is_array($are)): $i = 0; $__LIST__ = $are;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="scontentup1">
        
				<img src="/C2C/Public/<?php echo ($vo["url"]); ?>" height="100%" width="100%">
		    </div>
         <div class="scontentup2">
                <h2><?php echo ($vo["name"]); ?></h2><br/>
                <div class="content_price">
                    <div class="content_price1"><p>二手价：<span>&nbsp￥<?php echo ($vo["secprice"]); ?></span></p></div> 
                    <div class="content_price2"> 原价：<s><?php echo ($vo["price"]); ?>￥</s></div>
                </div>
                <div class="content_icon2">
					<input id="min" name="" type="button" value="-" />  
					<input id="text_box" name="" type="text" value="1" />  
					<input id="add" name="" type="button" value="+" />  
					<h3>(剩余<?php echo ($vo["quantity"]); ?>件)</h3>

				</div>
                <div class="content_icon3">
                <?php if(is_array($is)): $i = 0; $__LIST__ = $is;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="110%" color=#987cb9 SIZE=1>
                      <div class="icon3_left">卖家呢称 ：</br><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1><?php echo ($vo["username"]); ?></div>
                      <div class="icon3_left">QQ号码：</br><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1><?php echo ($vo["nickname"]); ?></div>
                      <div class="icon3_left">所在学校 ：</br><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1><?php echo ($vo["school"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
                <div class="buy_btn1">
                     <a href="#"><div class="icon1_left"><img src="/C2C/Public/home/img/buy.png"></div><div class="icon1_right">立即购买</div></a>
                </div>
                <div id="buy_btn2">
                   
                       <img src="/C2C/Public/home/img/cart.png">
                       <a href="#" class="button orrange addcar"><div class="boxs">添加到购物车</div></a>
                </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="details">

                <div class="detail">
                    <div class="active_tab" id="outer">
                        <ul class="act_title_left" id="tab">
                            <li class="act_active">
                                <a href="#">卖家描述</a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                        <?php echo ($vo["detail"]); ?>
                    </div>
                    <div id="content" class="active_list"> 
                      <div id="ui-a" class="ui-a">
                        <ul style="display:block;">
                            <li> </li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                        </ul>
                      </div>
                    </div>
              </div>

              <div class="detail">
                  <div class="active_tab" id="outer">
                     <ul class="act_title_left" id="tab">
                        <li class="act_active">
                            <a href="#">安全保障</a>
                        </li>
                     </ul>
                     <div class="clear"></div>
                  </div>
                  <div id="content" class="active_list"> 
                     <div id="ui-a" class="ui-a">
                        <ul style="display:block;">
                            <li>主要以同城在校大学生交易为主，同城交易见货交钱。</li>
                            <li>卖家发信息，留电话，见面交易；买家看信息，打电话，见面交易。</li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                      </div>
                  </div>
               </div>

             <div class="detail">
                  <div class="active_tab" id="outer">
                    <ul class="act_title_left" id="tab">
                        <li class="act_active">
                            <a href="#">买家评论</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                  <div id="content" class="active_list"> 
                     <!-- <div id="ui-a" class="ui-a"> -->
                        <div class="form">
                          <form id="dreamduform" action=<?php echo U('home/show/message');?> method="post">
                                <label for="text">发表评论：</label>
                                <textarea cols="90" rows="2" id="text" name="text">我来评论
                                </textarea>
                                <input type="submit" value="提交">
                          </form>
                         </div>
                      <!-- </div> -->
                      <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="comment">
                           <ul>
                               <li>用户：<a href="#">李大庄</a></li>
                                <li>
                                   <!-- <div class="question">问题：</div> -->
                                   <div class="q_content"><?php echo ($vo["wr_info"]); ?></div>
                               </li>
                           </ul> 
                      </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
               </div>
         </div>
        <div class="clear"></div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
 </div>
	<div class="clear"></div>



    <!--底部-->
	 <footer>
        <img class="footer-tri" src="/C2C/Public/home/img/footer-tri.png">
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