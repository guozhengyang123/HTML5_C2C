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
<link href="/xxx/Public/home/css/publish.css" rel="stylesheet" type="text/css">

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

<div class="publish_content">
    <form method="post" action="<?php echo U('Home/Publish/uploadfile');?>" role="form" enctype="multipart/form-data">
        <div class="pub_1">
            <b>*</b>所属分类:
            <select name="" id="cattype" class="pub_1_1">
                <option>请选择父类别</option>
                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            
            <select name="cateid" id="catchild" class="pub_1_2">
                <option>请选择子类别</option>
            </select>
            <!-- <select name="lable" size="1" id="lables">
            </select> -->
        </div>
        <!-- <div class="pub_2"><b>*</b>有 效 期:
            <select name="term">
                <option value="无">选择有效期</option>
                <option value="一星期">一星期</option>
                <option value="一个月">一个月</option>
                <option value="一年">一年</option>
                <option value="长期有效">长期有效</option>
            </select>
        </div> -->
        <div class="pub_3"><b>*</b>商品名称:<input type="text" name="name" value=""></div>
        <!-- <div class="pub_4"><b>*</b>付款方式:
            <label><input name="pay" type="checkbox" value="" />面对面交易</label>
            <label><input name="pay" type="checkbox" value="" />网银</label>
            <label><input name="pay" type="checkbox" value="" />支付宝 </label>
            <label><input name="pay" type="checkbox" value="" />微信 </label>
        </div> -->
        <div class="pub_4"><b>*</b>商品原价:<input type="text" name="price"> 元</div>
        <div class="pub_5"><b>*</b>价&nbsp;&nbsp;格:<input type="text" name="secprice"> 元</div>
        <div class="pub_6"><b>*</b>数&nbsp;&nbsp;量:<input type="text" name="quantity"></div>
        
        <div class="pub_8"><b>*</b>新旧程度:
            <select name="condition">
                <option value="无">选择新旧程度</option>
                <option value="全新">全新</option>
                <option value="9成新">9成新</option>
                <option value="8成新">8成新</option>
                <option value="4">7成新</option>
                <option value="7成新">6成新</option>
                <option value="5成新及以下">5成新及以下</option>
            </select>
        </div>
        <div class="pub_9">
            <div class="pub_9_1"><b>*</b>上传图片:</div>
            <div class="pub_9_2">
                <div><input type="file" name="photo[]" /></div>
                <!-- <div><input type="file" name="photo[]"/></div>
                <div><input type="file" name="photo[]"/></div>
                <div><input type="file" name="photo[]"/></div> -->
            </div>
        </div>
        <div class="pub_7">商家所在地:<input type="text" name="address"></div>
        <div class="pub_10"><b>*</b>内容详情:<input type="text" name="content"></div>
        <div class="pub_11"><b>*</b>联 系 人:<input type="text" name="linkman"></div>
        <div class="pub_12"><b>*</b>联系电话:<input type="text" name="linktel"></div>
        <div class="pub_13"><b>*</b>联系 Q Q:<input type="text" name="qq"></div>
        <div class="pub_14"><b>*</b>电子邮箱:<input type="text" name="email"></div>
        <input type="submit" class="pub_15" value="马上发布" >
    </form>
</div><!--publish_content-->

<!--    底部 -->
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
<script type="text/javascript">
    console.log("1314");
$("#cattype").change(function(){
    var catid = $(this).val(); //获取切换的类别的id
    console.log(catid);
    $.ajax({
        url :"<?php echo U('Home/Publish/gett');?>",
        data:{"name":catid},
        type:'POST',
        dataType:"json",       
        // error:function(){
        //     console.log(<?php echo U("home/Publish/get");?>);
        // },

        success:function(data){
            $('#catchild option[value!=""]').remove(); //清空option 每次改变option的时候载入新的数据
        //alert(data.length);
            if(data==''){
                vals="<option value='data[i].id'>"+"请选择子类别"+"</option>";
                $(vals).appendTo("#catchild");
            }else{
                for(var i=0;i<data.length;i++){
                    var vals='';
                    vals+="<option value="+data[i].id+">"+data[i].name+"</option>";
                    $(vals).appendTo("#catchild");
                }
            }

            console.log(data);    
           
               
        
        }
    });
});
</script>
</body>
</html>




<!-- onfocus="if(this.value=="请输商品名称"){this.value="";}" onblur="if(this.value==''){this.value="请输商品名称";}" -->