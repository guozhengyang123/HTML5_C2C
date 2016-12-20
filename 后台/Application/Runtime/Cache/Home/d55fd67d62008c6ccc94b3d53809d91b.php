<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
<title>大学生校园二手网站</title>
<link href="/xxx/Public/home/css/reset.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/css.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/user.css" rel="stylesheet" type="text/css">
<link href="/xxx/Public/home/css/news_list_css.css" rel="stylesheet" type="text/css">
<!-- 个人资料修改 -->
<link href="/xxx/Public/home/css/style.css" rel="stylesheet">
<script src="/xxx/Public/home/js/jquery.min.js"></script>
<script src="/xxx/Public/home/js/style.js"></script>
<script type="text/javascript" src="/xxx/Public/home/js/jquery-1.8.2.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script>
 --><script type="text/javascript" src="/xxx/Public/home/js/angular.min.js"></script>

<!--[if !IE]>导航条样式　JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/thcic_menu.js"></script>
<!--[if !IE]>banner图片  JS<![endif]-->
<script type="text/javascript" src="/xxx/Public/home/js/solideForK13-min.js"></script>

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
                    <div name="" type="button" class="inbut" value="">
                        
                    </div>
                    <input name="" type="text" class="intext"/>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="menu">
                <ul id="nav">
                      <li id="mainlevel_01" class="mainlevel">
                      <a href="<?php echo U('Home/Index/index');?>">网站首页</a>
                      </li>
                      <li id="mainlevel_02" class="mainlevel">
                      <a href="<?php echo U('Home/Category/category');?>">书籍报刊</a>
                        <ul id="sub_02">
                            <li><a href="<?php echo U('Home/Category/category');?>">资格证/等级考试</a></li>
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
                      <a href="image.html">失物招领</a>
                                          
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
                <li class="on"><a href="user1.html">个人资料</a></li>
                <li><a href="user2.html">我发布的商品</a></li>
                <li><a href="user3.html">我的收藏</a></li>
                <li><a href="user4.html">消息中心</a></li>
            </ul>
            <div id="my_info">
             <div class="Safety">
              <dl>
               <dt>
                <strong>登录密码：</strong>
                <span>保障账户安全，建议您定期更换密码</span>
                <b><span class="glyphicon glyphicon-ok"> </span>已设置</b>
                <em>修改</em>
               </dt>
               <dd>
               <form action="#" method="get">
                <table width="100%" class="safForm">
                 <tr>
                  <td width="35%" align="right">当前密码：</td>
                  <td><input type="text" class="safinput1" /> <span style="display:none;">直接在input后加span没问题</span></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">设置新密码：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">确认新密码：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td><input type="submint" class="safSub" value="修改登录密码" /></td>
                 </tr>
                </table>
               </form>
               </dd>
               <dt>
                <strong>交易密码：</strong>
                <span>保障资金安全，建议您交易密码区别于登录密码</span>
                <b><span class="glyphicon glyphicon-exclamation-sign"> </span>未设置 </b>
                <em>修改</em>
               </dt>
               <dd>
               <form action="#" method="get">
                <table width="100%" class="safForm">
                 <tr>
                  <td width="35%" align="right">设置交易密码：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">确认交易密码：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td><input type="submint" class="safSub" value="修改登录密码" /></td>
                 </tr>
                </table>
               </form>
               </dd>
               <dt>
                <strong>手机号码：</strong>
                <span>保障账户与资金安全，是您在融合天下重要的身份凭证</span>
                <b><span class="glyphicon glyphicon-ok"> </span>已设置 </b>
                <em>修改</em>
               </dt>
               <dd>
               <ul class="Step">
                <li class="stepCur"><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <div class="clearfix"></div>
               </ul><!--Step/-->
               <form action="#" method="get" class="sjyz-one">
                <table width="100%" class="safForm">
                 <tr>
                  <td width="35%" align="right">手机号：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">验证码：</td>
                  <td><input type="text" class="safinput2" /> <button>点击获取</button></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">身份证号：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td><a class="safSub sjyz-one-next" href="javascript:;">下一步</a></td>
                 </tr>
                </table>
               </form>
               <form action="#" method="get" class="sjyz-two">
                <table width="100%" class="safForm">
                 <tr>
                  <td width="35%" align="right">新手机号：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">验证码：</td>
                  <td><input type="text" class="safinput2" /> <button>点击获取</button></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">身份证号：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td><a class="safSub sjyz-two-next" href="javascript:;">下一步</a></td>
                 </tr>
                </table>
               </form>
               <div class="sjyz-ok"><span class="glyphicon glyphicon-ok"></span> 恭喜您,设置成功!</div>
               </dd>
               <dt>
                <strong>实名认证：</strong>
                <span>保障账户安全，只有通过实名认证，才能充值投资、申请贷款</span>
                <b><span class="glyphicon glyphicon-ok"> </span>已设置 </b>
                <em>修改</em>
               </dt>
               <dd>
               <form action="#" method="get" enctype="multipart/form-data">
                <table width="100%" class="safForm">
                 <tr>
                  <td width="35%" align="right">用户名：</td>
                  <td>asdsdfasdf</td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">真是姓名：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">身份证号：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">正面证件照</td>
                  <td><input type="file" name="_f" /> </td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td>
                   <img src="" width="280" height="188" />
                  </td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">背面证件照</td>
                  <td><input type="file" name="_f" /> </td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td>
                   <img src="" width="280" height="188" />
                  </td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td><input type="submint" class="safSub" value="提交" /></td>
                 </tr>
                </table>
               </form>
               </dd>
               <dt>
                <strong>电子邮箱：</strong>
                <span>邮件接收账户通知，及时了解账户信息变动情况</span>
                <b><span class="glyphicon glyphicon-exclamation-sign"> </span>未设置 </b>
                <em>认证</em>
               </dt>
               <dd>
               <ul class="Step">
                <li class="stepCur"><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <div class="clearfix"></div>
               </ul><!--Step/-->
               <form action="#" method="get" class="sjyz-one">
                <table width="100%" class="safForm">
                 <tr>
                  <td width="35%" align="right">邮箱验证：</td>
                  <td><input type="text" class="safinput1" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td><a class="safSub sjyz-one-next" href="javascript:;">下一步</a></td>
                 </tr>
                </table>
               </form>
               <form action="#" method="get" class="sjyz-two">
                <table width="100%" class="safForm">
                 <tr>
                  <td width="35%" align="right">邮箱验证码：</td>
                  <td><input type="text" class="safinput2" /></td>
                 </tr>
                 <tr>
                  <td width="35%" align="right">&nbsp;</td>
                  <td><a class="safSub sjyz-two-next" href="javascript:;">下一步</a></td>
                 </tr>
                </table>
               </form>
               <div class="sjyz-ok"><span class="glyphicon glyphicon-ok"></span> 恭喜您,设置成功!</div>
               </dd>
              </dl>
         </div>
         </div>
         
    </div>

    <div id="scrollTop" >
        <div class="level-2"></div>
        <div class="level-3"></div>
    </div>
    <script src="/xxx/Public/home/js/mumayi_top.js"></script>
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