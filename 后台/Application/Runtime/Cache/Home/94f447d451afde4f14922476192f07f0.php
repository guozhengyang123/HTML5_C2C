<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大学生校园二手网站</title>
<link href="/xxx/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/show.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/news_list_css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/zhucedenglu.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css">



<script type="text/javascript" src="/xxx/Public/home/js/jquery-1.8.2.min.js"></script>
<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/thcic_menu.js"></script>
<script type="text/javascript" src="/xxx/Public/home/js/show.js"></script>

<script type="text/javascript" src="/xxx/Public/home/js/re.js"></script>



 <style type="text/css">
        
    </style>
    <script type="text/javascript" src="/xxx/Public/home/js/jquery.min.js"></script>
    <script src="/xxx/Public/home/js/jquery.fly.min.js"></script>
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
                         <?php if(is_array($list[0])): $i = 0; $__LIST__ = $list[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainlevel" id="mainlevel_02">
                              <a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>
                                <ul id="sub_02">
                                    <?php if(is_array($list[$vo['id']])): $i = 0; $__LIST__ = $list[$vo['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo2["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!-- <li><a href="<?php echo U('Home/Category/category');?>">资格证/等级考试</a></li>
                                    <li><a href="<?php echo U('Home/List/list');?>">考研资料</a></li>
                                    <li><a href="#">教科书</a></li>
                                    <li><a href="#">计算机网络</a></li>
                                    <li><a href="#">小说杂志</a></li>
                                    <li><a href="#">其他</a></li> -->
                                </ul>
                             </li><?php endforeach; endif; else: echo "" ;endif; ?>
                          <!-- <a href="<?php echo U('Home/Category/category');?>">书籍报刊</a>
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
                        </li> -->
                   </ul>
            </div>
</div>


       

<!--banner-->

<!--content-->
<div class="wrapper">
	<div class="daohang"> 
        <img src="/xxx/Public/home/img/one_title.png" height="102" width="407">
          <div class="one_title" >
              <a href="#"><img src="/xxx/Public/home/img/find.png"/ class="icons"></a>
               <h2>迷路指南：<span><a href="<?php echo U('Home/Index/index');?>">首页</a>&gt;&gt;<?php if(is_array($pid)): $i = 0; $__LIST__ = $pid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>&gt;&gt;<?php if(is_array($cid)): $i = 0; $__LIST__ = $cid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Category/category');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></span></h2>
          </div>         
    </div>

	<div class="scontent">
    <?php if(is_array($are)): $i = 0; $__LIST__ = $are;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="scontentup1">
				  <img src="<?php echo U($vo['picture']);?>" height="100%" width="100%">
		    </div>
         <div class="scontentup2">
                <h2><?php echo ($vo["name"]); ?></h2><br/>
                <div class="content_price">
                    <div class="content_price1"><p>二手价：<span>&nbsp￥<?php echo ($vo["secprice"]); ?></span></p></div> 
                    <div class="content_price2"> 原价：<s><?php echo ($vo["price"]); ?>￥</s></div>
                </div>
                 <div class="content_icon21">
          几乎全新

        </div>
                <div class="content_icon2">
					<input id="min" name="" type="button" value="-" />  
					<input id="text_box" name="" type="text" value="1" />  
					<input id="add" name="" type="button" value="+" />  
					<h3>(剩余<?php echo ($vo["quantity"]); ?>件)</h3>

				</div><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="content_icon3">
                <?php if(is_array($is)): $i = 0; $__LIST__ = $is;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="110%" color=#987cb9 SIZE=1>
                      <div class="icon3_left"><img src="/xxx/Public/home/img/ren.png"style="height:30px;"></br><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1><?php echo ($vo["username"]); ?></div>
                      <div class="icon3_left"><img src="/xxx/Public/home/img/qq1.png"style="height:30px;"></br><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1><?php echo ($vo["email"]); ?></div>
                      <div class="icon3_left"><img src="/xxx/Public/home/img/school.png"style="height:30px;"></br><HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1><?php echo ($vo["school"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
                <div class="buy_btn1">
                     <a href="#"><div class="icon1_left"><img src="/xxx/Public/home/img/buy.png"></div><div class="icon1_right">立即购买</div></a>
                </div>
                <div id="buy_btn2">
                   
                       <img src="/xxx/Public/home/img/cart.png">
                       <a href="#" class="button orrange addcar"><div class="boxs">添加到购物车</div></a>
                </div>
               
            </div>
            
         </div>
         <div class="clear"></div>
         <div class="details">
            <?php if(is_array($are)): $i = 0; $__LIST__ = $are;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="detail">
                    <div class="active_tab" id="outer">
                        <ul class="act_title_left" id="tab">
                            <li class="act_active">
                                <a href="#">卖家描述</a>
                            </li>

                        </ul>

                        <div class="clear"></div>
                        
                    </div>
                    <div id="content" class="active_list"> 
                      <div id="ui-a" class="ui-a">
                        <ul style="display:block;">
                            <li> <?php echo ($vo["detail"]); ?></li>
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
               </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
                     <?php if($_SESSION['username']!= null): ?><div class="form">
                          <form id="dreamduform" action=<?php echo U('home/show/message');?> method="post">
                                <label for="text">发表评论：</label>
                                <textarea cols="90" rows="2" id="text" name="text">
                                </textarea>
                                <input type="submit" value="提交">
                          </form>
                         </div>
                      <!-- </div> -->
                      <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="comment">
                           <ul>
                               <li>用户：<a href="#"><?php echo (session('username')); ?></a></li>
                                <li>
                                   <!-- <div class="question">问题：</div> -->
                                   <div class="q_content"><?php echo ($vo["wr_info"]); ?></div>
                               </li>
                           </ul> 
                      </div><?php endforeach; endif; else: echo "" ;endif; ?>
                      <?php else: ?>
                        <a href="<?php echo U('Home/User/login');?>">登录后才能发表评论</a><?php endif; ?>
                  </div>
                  
               </div>
         </div>
        <div class="clear"></div>

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

</body>
</html>