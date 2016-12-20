<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>注册</title>
<link href="/xxx/Public/home/css/register.css" rel="stylesheet" type="text/css" />
<!-- <script type="text/javascript" src="/xxx/Public/home/js/re.js"></script> -->
</head>

<body>
<div class="container">
	<div class="header">
		<div class="left">
			<img src="/xxx/Public/home/img/logo.png" />
		</div>

		<div class="header_link">
			<a href="<?php echo U('Home/User/login');?>">登录 |</a>
			<a href="<?php echo U('Home/User/register');?>">注册</a>
		</div>
	</div>
	
	<div class="registerpanel">
	    <form action="<?php echo U('Home/User/register');?>" method="post">
	        <div class="panel registerbox">
	        	<div class="panel-top">注册&nbsp;<a href="<?php echo U('Home/User/login');?>">/登录</a></div>
	            <div class="panel-body">
	                <div class="reg-line">
	                    <div class="reg-text">
	                        <input type="text" class="username" name="username" id="user-name" onblur="checkUserName()" placeholder="用户名"/>
	                    </div>
	                    <div class="r">
                            <span id="nameInfo" style="height:20px;font-size:14px;color:red;position:relative;top:50px;"></span>
                        </div>
	                </div>
	                <div class="reg-line">
	                    <div class="reg-text">
	                        <input type="password" class="password" name="password" id="password"  onblur="checkPassword()" placeholder="密码"/>
	                    </div>
	                    <div class="r">
                            <span id="passwordInfo" style="height:20px;font-size:14px;color:red;position:relative;top:50px;"></span>
                        </div>
	                </div>
	                <div class="reg-line">
	                    <select class="school" name="school" id="province" style="height:30px;width:171px;position:relative;top:-10px;"></select>
	                    <select class="college" name="college" id="city" style="height:30px;width:171px;"></select>
	                </div>
	                <div class="reg-line">
	                    <div class="reg-text">
	                        <input type="email" class="email" name="email" id="email" onblur="checkEmail()" placeholder="邮箱"/>
	                    </div>
	                    <div class="r">
                            <span id="emailInfo" style="height:20px;font-size:14px;color:red;position:relative;top:50px;left:"></span>
                        </div>
	                </div>
	            </div>
	            

	            <div class="reg-sub">
	            	<input type="submit" name="submit" class="style1" onmouseover="this.className='style2'" onmouseout="this.className='style1'" value="注    册">
	            </div>
	        </div>
	    </form>
	</div>
		
	<div class="foot">
		Copyright &copy; 2016-2017 奋斗小组
	</div>
</div>	
<script type="text/javascript">
	function SelectCity(){
	    this.init();
	}
	 
	SelectCity.prototype={
	     
	    init:function(){
	        this.arr = new  Array();
	        this.proArr=[
	            "河北师范大学","河北科技大学","河北经贸大学","河北医科大学","河北政法学院","河北师范大学汇华学院","河北地质大学","石家庄铁道学院","石家庄学院"
	        ]
	        this.arr[0 ]="商学院,软件学院,法政学院,教育学院,文学院,历史文化学院,外国语学院,音乐学院,数学与信息科学学院,美术与设计学院,新闻传播学院,物理科学与信息工程学院,化学与材料科学学院,生命科学学院,资源与环境科学学院" ;
	        this.arr[1 ]="材料科学与工程学院,化学与制药工程学院,经济管理学院,环境科学与工程学院,理学院,文法学院,外国语学院,机械电子工程学院,电气工程学院,信息科学与工程学院,纺织服装学院,建筑工程学院,艺术学院,影视学院";
	        this.arr[2 ]="法学,电气信息,轻工纺织食品类,生物工程,管理学,工商管理类管理学,公共管理类,经济学类";
	        this.arr[3 ]="预防医学,临床医学,麻醉学,医学影像学,医学检验,口腔医学,中医学,针灸推拿学,中西医临床医学,法医学,护理学,药学类,中药学";
	        this.arr[4 ]="管理系,国际法商系,财经系,园林系,计算机系,会计系,外语系,电子商务系,法律系,国际经济与贸易,法律文秘,社区管理与服务,人力资源管理,物业管理";
	        this.arr[5 ]="数学与应用数学,网络工程,通信工程,计算机科学与技术,物联网工程,汉语言文学,新闻学,历史学,秘书学,对外汉语学,物理学,化学,生物科学,地理科学,资源环境与城乡规划管理,科学教育,法学,心理学,会计学,人力资源管理,国际经济与贸易,旅游管理,学前教育,特殊教育";
	        this.arr[6 ]="经贸学院,法政学院,会计学院,商学院,管理科学与工程学院,艺术设计学院,外国语学院,信息工程学院,勘查技术与工程,资源学院,土地资源与城乡规划学院,水资源与环境学院,宝石与材料工艺学院,数理学院,国际教育学院";
	        this.arr[7 ]="土木类,机械类,电气与电子类,交通类,经管类,英语系,数学力学系,人文类,计算机类,材料类,建筑与艺术类";
	        this.arr[8 ]="物理学,化工学院,英语系,计算机系,文传系,政法系,经济管理专业";
	        this.arr[9 ]="" ;
	 
	        var city = document.getElementById("city");
	        var cityArr = this.arr[0].split(",");
	        var pro = document.getElementById("province");
	 
	        //初始化北京省份
	        for(var i=0;i<this.proArr.length;i++)
	        {       
	                  
	            pro[i]=new Option(this.proArr[i],this.proArr[i]);
	                
	        }
	 
	        //初始化北京城市
	        for(var i=0;i<cityArr.length;i++)
	        {       
	            city[i]=new Option(cityArr[i],cityArr[i]);
	                
	        }
	 
	        this.handelEvent();
	        
	    },
	    handelEvent:function(){
	        var _this=this;
	        //alert(this.arr[20])
	        var pro = document.getElementById("province");
	        var city = document.getElementById("city");
	        var pro_city=document.getElementById('pro_city');
	        pro.onchange=function(){
	            var index = this.selectedIndex;
	            var cityArr = _this.arr[index].split(",");  
	            city.length = 0;
	            //将城市数组中的值填充到城市下拉框中
	            for(var i=0;i<cityArr.length;i++)
	            {
	                city[i]=new Option(cityArr[i],cityArr[i]);
	            }
	        }
	 
	        city.onchange=function(){
	            //将最终值写在一个隐藏input里 可自定义格式
	            pro_city.value=pro.value+'-'+this.value;
	            // alert(pro_city.value);
	        }
	    }
	}
	 
	new SelectCity();
</script>
</body>
</html>