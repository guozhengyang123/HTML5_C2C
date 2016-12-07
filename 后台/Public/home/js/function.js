/* PageAdmin基础函数/方法 */
function Id(id) {return document.getElementById(id);}

function Trim(str) {return str.replace(/(^\s*)|(\s*$)/g,"");} //去除首尾空格
function LTrim(str){return str.replace(/(^\s*)/g, "");}   //去除左空格
function RTrim(str) {return str.replace(/(\s*$)/g, "");}  // 去除右空格

function Length(str) //获取字符长度，汉字占2个字节
 {
   str=str.replace(/[^\x00-\xff]/g,"**")
   return str.length;
 }

function Left(str,len) //左边截取字段数
  {
    if (isNaN(len) || len == null) {
        len = str.length;
    }
    else {
        if (parseInt(len) < 0 || parseInt(len) > str.length) {
           len = str.length;
        }
    }
   return str.substr(0, len);
}
function Right(str,len) //右边截取字段数
{
    if (isNaN(len) || len == null) {
        len = str.length;
    }
    else {
        if (parseInt(len) < 0 || parseInt(len) > str.length) {
            len = str.length;
        }
    }
  return str.substring(str.length-len,str.length);
}

function Request(paras,url) //获取url中参数
 { 
  if(url==null){url=location.href;}
  var paraString = url.substring(url.indexOf("?")+1,url.length).split("&"); 
  var paraObj={} 
  for (i=0;j=paraString[i]; i++)
   { 
    paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
   } 
  var returnValue = paraObj[paras.toLowerCase()]; 
  if(typeof(returnValue)=="undefined")
  { 
   return ""; 
  }
 else
  { 
    return decodeURI(returnValue); 
  } 
} 

function IsStr(str)  //是否由数字、字母和下划线组成
 {
  if(Trim(str)==""){return false;}
  return (str.replace(/\w/g,"").length==0);
 }

function IsLStr(str) //是否由数字、字母和下划线组成 字母开头
{
   if(Trim(str)==""){return false;}
   var reg = /^[a-zA-Z][a-zA-Z0-9_]*$/;
   if(reg.test(str))
   return true;
   else
   return false;
}

function IsNum(str)  //是否是数值，包括正负数，小数
 {
  if(Trim(str)==""){return false;}
  if(isNaN(str)){return false;}
  else{return true;}
 }

function IsUserName(str)  //由数字、字母和下划线汉字组成
 {
  if(Trim(str)==""){return false;}
  str=str.replace(/[^\x00-\xff]/g,"");
  if(str==""){return true;}
  else{return IsStr(str);}
 }

function isNumeric(str,flag)      //验证数值类型
   {
    if(Trim(str)==""){return false;}
    if(isNaN(str)){return false;}
    switch (flag) {
        case "+":        //正数
            return /(^\+?|^\d?)\d*\.?\d+$/.test(str);
        case "-":        //负数
            return /^-\d*\.?\d+$/.test(str);
        case "i":        //整数
            return /(^-?|^\+?|\d)\d+$/.test(str);
        case "+i":        //正整数
            return /(^\d+$)|(^\+?\d+$)/.test(str);
        case "-i":        //负整数
            return /^[-]\d+$/.test(str);
        case "f":        //浮点数
            return /(^-?|^\+?|^\d?)\d*\.\d+$/.test(str);
        case "+f":        //正浮点数
            return /(^\+?|^\d?)\d*\.\d+$/.test(str);
        case "-f":        //负浮点数
            return /^[-]\d*\.\d$/.test(str);
        default: //缺省
           return true;
    }
}

function Digit(str) //只保留数字
{
  return str.replace(/\D/g, "");
}

function IsDigit(str) //检测是否是数字
{
  if(Trim(str)==""){return false;}
  return (str.replace(/\d/g, "").length==0);
}

function IsStrDigit(str) //是否由数字、字母组成
  {
   if(Trim(str)==""){return false;}
   var reg = /^[a-zA-Z0-9]+$/g;
   return reg.test(str);
  }

function StrDigit(str)  //只保留数字、字母部分
{
  return str.replace(/[\W]/g, '');
}

function Chinese(str) //只保留汉字
 {
  return (str.replace(/[^\u4E00-\u9FA5]/g, ''));
 }
function IncludeChinese(str) //是否包含汉字
 {
  return (str.length != str.replace(/[^\x00-\xff]/g, "**").length);
}
function IsChinese(str) //是否为汉字
{
  //[\u4E00-\u9FA5]为汉字，[\uFE30-\uFFA0]为全角符号
  if(Trim(str)==""){return false;}
  return /^[^\x00-\xff]*$/.test(str);
}

function IsDate(str)   
 {  
  if(Trim(str)==""){return false;}
  var reg1=/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/; 
  var reg2=/^(\d{1,2})\/(\d{1,2})\/(\d{4}) (\d{1,2}):(\d{1,2}):(\d{1,2})$/; 
  var reg3=/^(\d{1,2})\/(\d{1,2})\/(\d{4}) (\d{1,2}):(\d{1,2}):(\d{1,2}) ([a-zA-Z]{0,2})$/; 
  var reg4=/^(\d{4})-(\d{1,2})-(\d{1,2})$/;    
  var reg5=/^(\d{4})-(\d{1,2})-(\d{1,2}) (\d{1,2}):(\d{1,2}):(\d{1,2})$/;   
  if(!reg1.test(str) && !reg2.test(str) && !reg3.test(str) && !reg4.test(str) && !reg5.test(str))
   {    
      return  false;   
   }   
   return true;   
  }   

function IsMobile(mobile)
   {   
     if(mobile.length!=11){return false;}
     var myreg = /^((1[3458])+\d{9})$/;
     if(!myreg.test(mobile)){return false;}
     return true;
   }

function IsEmail(str) 
 {
   var pattern =/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/        
   var flag=pattern.test(Trim(str));       
   if (!flag)
    {
     return false;
    }
   else
    {
     return true;
    }
 }

function IsIP() 
 {
    var reSpaceCheck = /^(\d+)\.(\d+)\.(\d+)\.(\d+)$/;
    if (reSpaceCheck.test(str)) {
        str.match(reSpaceCheck);
        if (RegExp.$1 <= 255 && RegExp.$1 >= 0
                 && RegExp.$2 <= 255 && RegExp.$2 >= 0
                 && RegExp.$3 <= 255 && RegExp.$3 >= 0
                 && RegExp.$4 <= 255 && RegExp.$4 >= 0) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}
function Input_Digit() //只能输入数字
 {
   this.value=Digit(this.value);
 }
function Input_Chinese() //只能输入中文
{
  this.value =Chinese(this.value);
}
function Input_StrDigit()  //只能输入中文 字母 下划线
{
  this.value=StrDigit(this.value);
}
function SetCookie(name,value)//cookies设置
{
	var argv = SetCookie.arguments;
	var argc = SetCookie.arguments.length;
	var expires = (argc > 2) ? argv[2] : null;//第三个参数为过期时间
	if(expires!=null)
	{
	 var LargeExpDate = new Date ();
	 //LargeExpDate.setTime(LargeExpDate.getTime() + (expires*1000*60*60*24));//expires为过期天数
	 LargeExpDate.setTime(LargeExpDate.getTime() + (expires*1000)); //expires为过期秒数值
	}
	document.cookie = name + "=" + escape (value)+((expires == null) ? "" : (";expires=" +LargeExpDate.toGMTString()+";path=/"));
}

function GetCookie(Name)//cookies读取
{
   var search = Name + "="
   if(document.cookie.length > 0) 
	{
	 offset = document.cookie.indexOf(search)
		if(offset != -1) 
		{
			offset += search.length
			end = document.cookie.indexOf(";", offset)
			if(end == -1) end = document.cookie.length
			return unescape(document.cookie.substring(offset, end))
		 }
	else return ""
	  }
}
function DelCookie(name)//删除cookie
{
   var exp = new Date();
   exp.setTime(exp.getTime() - 1);
   var cval = GetCookie(name);
   if (cval != null)
   document.cookie = name + "=" + escape (value)+((expires == null) ? "" : (";expires=" +exp.toGMTString()+";path=/"));
}
function UrlEncode(Str) 
 {
   return encodeURIComponent(Str).replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').replace(/\)/g,'%29').replace(/\*/g,'%2A').replace(/%20/g,'+');  
 }

function ShowItem(id,url)
 {
    var obj=document.getElementById(id);
    if(url!="#" || obj==null)
     {
       return;
     }
    if(obj.style.display=="none")
     {
      obj.style.display="";
     }
   else
     {
      obj.style.display="none";
     }
 }

function RemoveHtml(str)  //删除html标签
 {
   var temp = document.createElement("div");
   temp.innerHTML =str;
   var output = temp.innerText || temp.textContent;
   temp = null;
   return output;
}

function GetBrowser()  //获取浏览器类型
{
    if (navigator.userAgent.indexOf('MSIE') > -1) return 'MSIE';
    if (navigator.userAgent.indexOf('Firefox') > -1) return 'Firefox';
    if (navigator.userAgent.indexOf("Safari") > 0) return 'Safari';
    if (navigator.userAgent.indexOf("Camino") > 0) return 'Camino';
    if (navigator.userAgent.indexOf("Gecko/") > 0) return 'Gecko';
    if (navigator.userAgent.indexOf('Opera') > -1) return 'Opera';
    return 'Other';
}

function DelObj(objname) //删除标签
  {
    var obj = document.getElementById(objname);
    if (obj != undefined) {
        obj.parentNode.removeChild(obj);
    }
    obj = null;
 }

function HasClass(obj,cls){return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));}
function AddClass(obj,cls) {if(!this.hasClass(obj, cls)) obj.className += " " + cls;}
function RemoveClass(obj,cls){if(HasClass(obj, cls)){var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');obj.className = obj.className.replace(reg, ' ');}}

function ReplaceAll(str,str1,str2)
 {
  while(str.indexOf(str1)>= 0)
  {
   str=str.replace(str1,str2);
  }
  return str;
}


function IsChecked(obj)  //检测radid或checkbox是否有选择
{
 var k=0;
 for(k=0;k<obj.length;k++) 
  { 
   if(obj[k].checked) 
    {
     return true;
    }
  }
 return false;
} 


function CheckBox_Inverse(Name) //反选checkbox
 {
   var Obj=document.getElementsByName(Name);
   for(i=0;i<Obj.length;i++)
     {
      if(Obj[i].disabled){continue;}
      if(Obj[i].checked)
       {
          Obj[i].checked=false;
       }
      else
       {
          Obj[i].checked=true;
       }
     }
 }


function Get_Checked(Name) //获取checkbox或radio组信息
 {
   var Obj=document.getElementsByName(Name);
   var ID="";
   for(i=0;i<Obj.length;i++)
     {
      if(Obj[i].checked)
       {
         ID+=","+Obj[i].value;
       }
     }
   return ID.replace(",","");
 }

function Set_Checked(ckvalue,objname) //根据值设置checkbox表单
 {
  var obj=document.getElementsByName(objname);
  var Ackvalue=ckvalue.split(',');
  for(i=0;i<Ackvalue.length;i++)
   {
     for(k=0;k<obj.length;k++)
      {
        if(obj[k].value==Ackvalue[i] || ckvalue=="check-all")
         {
          obj[k].checked=true;
         }
      }
   }
 }

function Get_Selected(Id) //获取select选中的值
 {
   var Obj=document.getElementById(Id);
   var ID="";
   for(i=0;i<Obj.options.length;i++)
     {
      if(Obj.options[i].selected)
       {
         ID+=","+Obj.options[i].value;
       }
     }
   return ID.replace(",","");
 }

function Set_Selected(selectvalue,objname) //根据值设置select表单
 {
  var obj=document.getElementById(objname);
  var Avalue=selectvalue.split(',');
  for(i=0;i<Avalue.length;i++)
   {
     for(k=0;k<obj.options.length;k++)
      {
        if(obj.options[k].value==Avalue[i] || selectvalue=="select-all")
         {
          obj.options[k].selected=true;
         }
      }
   }
 }

function GetDateDiff(startTime,endTime,diffType) 
{ 
 startTime = startTime.replace(/-/g, "/");  //将xxxx-xx-xx的时间格式，转换为 xxxx/xx/xx的格式 
 endTime = endTime.replace(/-/g, "/"); 
 diffType = diffType.toLowerCase();  //将计算间隔类性字符转换为小写 
 var sTime = new Date(startTime); //开始时间 
 var eTime = new Date(endTime); //结束时间 
 var divNum = 1;  //作为除数的数字 
 switch (diffType) 
 { 
  case "second": 
   divNum = 1000; 
  break; 
 case "minute": 
   divNum = 1000 * 60; 
 break; 
 case "hour": 
   divNum = 1000 * 3600; 
 break; 
 case "day": 
   divNum = 1000 * 3600 * 24; 
 break; 
 default: 
 break; 
 } 
 return parseInt((eTime.getTime() - sTime.getTime())/parseInt(divNum)); 
}

function DateToStr(datetime)
{
var year = datetime.getFullYear();
var month = datetime.getMonth()+1;//js从0开始取
var date = datetime.getDate();
var hour = datetime.getHours();
var minutes = datetime.getMinutes();
var second = datetime.getSeconds();
if(month<10){
month = "0" + month;
}
if(date<10){
date = "0" + date;
}
if(hour <10){
hour = "0" + hour;
}
if(minutes <10){
minutes = "0" + minutes;
}
if(second <10){
second = "0" + second ;
}
var time = year+"-"+month+"-"+date+" "+hour+":"+minutes+":"+second; //2009-06-12 17:18:05
return time;
}

function PercenToNumber(thisValue,thetype) //窗口百度比和数值之间转换
   {
       if(!thisValue && thisValue !== 0 || typeof thisValue == 'number') 
        {
          return thisValue;
        }
       else
        {
          var maxValue;	
          var pageWidth = window.innerWidth;
          var pageHeight = window.innerHeight;
          if(typeof pageWidth != "number")
          {
           if(document.compatMode == "CSS1Compat")
           {
            pageWidth=document.documentElement.clientWidth;
            pageHeight=document.documentElement.clientHeight;
           }
         else
          {
           pageWidth=document.body.clientWidth;
           pageHeight=document.body.clientHeight;
          }
         } 
         if(thetype=="width")
          {
           maxValue=pageWidth;
          }
         else
          {
           maxValue=pageHeight;
          }
         thisValue = parseInt(maxValue * thisValue.split('%')[0]/100);
        }
       return thisValue;
 }

function IsPC(){
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}

//Ajax插件
PAAjax = function(){
    var http_request = false;
    var result = "";
    var method = "get";
    var anc = true;
    this.setarg = function(m, a){//a=false表示顺序同步加载
        method = (m == "get") ? "get" : "post";
        anc = (a) ? true : false;
    }
    this.init = function(){
        http_request = false;
        if (window.XMLHttpRequest) { // Mozilla, Safari,...
            http_request = new XMLHttpRequest();
        }
        else 
            if (window.ActiveXObject) { // IE
                try {
                    http_request = new ActiveXObject("Msxml2.XMLHTTP");
                } 
                catch (e) {
                    try {
                        http_request = new ActiveXObject("Microsoft.XMLHTTP");
                    } 
                    catch (e) {
                        alert("Can't Creat AJAX Object!");
                        return false;
                    }
                }
            }
    }
    this.send = function(url,sendcontent,callback){
        this.init();
        var AjaxStateChange= function(){
            if (http_request.readyState == 4) 
              {
                if (http_request.status == 200) 
                  {
                    result = http_request.responseText;
                    try{
                        callback(result);
                       } 
                    catch (e) 
                       {
                        alert("The CallBack Method Wrong!" + e);
                        return false;
                        }
                  }
                else
                  {
                    if(http_request.status!=0)
                     {
                     alert("ajax出现http"+http_request.status+"错误")
                     }
                     return false;
                  }
            }
        };
        http_request.onreadystatechange=AjaxStateChange;
        if (method == "get") 
         {
            http_request.open('get', url+"?"+sendcontent, anc);
            http_request.send(null);
         }
        else
         {
            http_request.open('post', url, anc);
            http_request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            http_request.send(sendcontent);
          }
     }
}


/*滚动插件
使用方法：var marquee=new Marquee("对象id","Direction",Step,Width,Height,Timer,DelayTime,ScrollStep,WaitTime);
参数说明:
		ID		"marquee"	容器ID		(必选)
		Direction	(left)		滚动方向	(可选,默认为left向左滚动,可设置的值包括:"top","bottom","left","right")
		Step		(1)		滚动的步长	(可选,默认值为1,数值越大,滚动越快)
		Width		(760)		容器可视宽度	(可选,默认值为容器初始设置的宽度)
		Height		(52)		容器可视高度	(可选,默认值为容器初始设置的高度)
		Timer		(50)		定时器		(可选,默认值为30,数值越小,滚动的速度越快,1000=1秒,建议不小于20)
		DelayTime	(5000)		间歇停顿延迟时间(可选,默认为0不停顿,1000=1秒)
		ScrollStep	(52)		间歇滚动间距	(可选,默认为翻屏宽/高度,该数值与延迟均为0则为鼠标左右滑动悬停控制(效果不是很好),-1禁止鼠标控制)
		WaitTime	(3000)		开始时的等待时间(可选,默认或0为不等待,1000=1秒)
*/

function Marquee()
{
 this.ID=document.getElementById(arguments[0]);if(!this.ID){alert("\""+arguments[0]+"\"初始化错误\r\n请检查标签ID设置是否正确!");this.ID=-1;return;}this.Width=this.Height=this.DelayTime=this.WaitTime=this.CTL=this.StartID=this.Stop=this.MouseOver=0;this.Direction="left";this.Step=1;this.Timer=30;if(typeof arguments[1]=="number"||typeof arguments[1]=="string"){this.Direction=arguments[1];}if(typeof arguments[2]=="number"){this.Step=arguments[2];}if(typeof arguments[3]=="number"){this.Width=arguments[3];}if(typeof arguments[4]=="number"){this.Height=arguments[4];}if(typeof arguments[5]=="number"){this.Timer=arguments[5];}if(typeof arguments[6]=="number"){this.DelayTime=arguments[6];}if(typeof arguments[7]=="number"){this.ScrollStep=arguments[7];}if(typeof arguments[8]=="number"){this.WaitTime=arguments[8];}this.ID.style.overflow=this.ID.style.overflowX=this.ID.style.overflowY="hidden";this.ID.noWrap=true;this.IsNotOpera=(navigator.userAgent.toLowerCase().indexOf("opera")==-1);if(arguments.length>=1){this.Start();}
}
Marquee.prototype.Start = function()
{
if(this.ID==-1)return;if(this.WaitTime<800)this.WaitTime=800;if(this.Timer<1)this.Timer=1;
if(this.Width==0)
{
 if(this.ID.style.width.indexOf("px")>0){this.Width = parseInt(this.ID.style.width);}else{this.Width = parseInt(this.ID.offsetWidth);}
}
if(this.Height==0)
{
 if(this.ID.style.height.indexOf("px")>0){this.Height = parseInt(this.ID.style.height);}else{this.Height =parseInt(this.ID.offsetHeight);}
}
this.HalfWidth=Math.round(this.Width/2);this.HalfHeight=Math.round(this.Height/2);this.BakStep=this.Step;if(this.Width>0){this.ID.style.width=this.Width+"px";}if(this.Height>0){this.ID.style.height=this.Height+"px";}if(typeof this.ScrollStep!="number")this.ScrollStep=(this.Direction=="left" || this.Direction=="right")?this.Width:this.Height;var templateLeft="<table cellspacing='0' cellpadding='0' style='border-collapse:collapse;display:block'><tr><td noWrap=true style='white-space: nowrap;word-break:keep-all;'>MSCLASS_TEMP_HTML</td><td noWrap=true style='white-space: nowrap;word-break:keep-all;'>MSCLASS_TEMP_HTML</td></tr></table>";var templateTop="<div>MSCLASS_TEMP_HTML</div><div>MSCLASS_TEMP_HTML</div>";var msobj=this;msobj.tempHTML=msobj.ID.innerHTML;if(msobj.Direction=="top" || msobj.Direction=="bottom"){msobj.ID.innerHTML=templateTop.replace(/MSCLASS_TEMP_HTML/g,msobj.ID.innerHTML);}else{msobj.ID.innerHTML=templateLeft.replace(/MSCLASS_TEMP_HTML/g,msobj.ID.innerHTML);}
	var timer = this.Timer;var delaytime = this.DelayTime;var waittime = this.WaitTime;msobj.StartID = function(){msobj.Scroll()}
	msobj.Continue = function(){if(msobj.MouseOver==1){setTimeout(msobj.Continue,delaytime);}else{clearInterval(msobj.TimerID);msobj.CTL=msobj.Stop=0;msobj.TimerID=setInterval(msobj.StartID,timer);}}
	msobj.Pause = function(){msobj.Stop = 1;clearInterval(msobj.TimerID);setTimeout(msobj.Continue,delaytime);}
	msobj.Begin = function()
		{     
                        msobj.ClientScroll = (msobj.Direction=="left" || msobj.Direction=="right")? msobj.ID.scrollWidth / 2 : msobj.ID.scrollHeight / 2;
			if(((msobj.Direction=="top" || msobj.Direction=="bottom") && msobj.ClientScroll <= msobj.Height + msobj.Step) || ((msobj.Direction=="left" || msobj.Direction=="right") && msobj.ClientScroll <= msobj.Width + msobj.Step))
                        {msobj.ID.innerHTML = msobj.tempHTML;delete(msobj.tempHTML);return;}
			delete(msobj.tempHTML);
			msobj.TimerID = setInterval(msobj.StartID,timer);
			if(msobj.ScrollStep < 0)return;
			msobj.ID.onmousemove = function(event){if(msobj.ScrollStep==0&&(msobj.Direction=="left" || msobj.Direction=="right")){var event=event||window.event;if(window.event){if(msobj.IsNotOpera){msobj.EventLeft=event.srcElement.id==msobj.ID.id?event.offsetX-msobj.ID.scrollLeft:event.srcElement.offsetLeft-msobj.ID.scrollLeft+event.offsetX;}else{msobj.ScrollStep=null;return;}}else{msobj.EventLeft=event.layerX-msobj.ID.scrollLeft;}msobj.Direction=msobj.EventLeft>msobj.HalfWidth?"right":"left";msobj.AbsCenter=Math.abs(msobj.HalfWidth-msobj.EventLeft);msobj.Step=Math.round(msobj.AbsCenter*(msobj.BakStep*2)/msobj.HalfWidth);}}
			msobj.ID.onmouseover = function(){if(msobj.ScrollStep == 0)return;msobj.MouseOver = 1;clearInterval(msobj.TimerID);}
			msobj.ID.onmouseout = function(){if(msobj.ScrollStep==0){if(msobj.Step==0)msobj.Step=1;return;}msobj.MouseOver=0;if(msobj.Stop==0){clearInterval(msobj.TimerID);msobj.TimerID=setInterval(msobj.StartID,timer);}}
		}
setTimeout(msobj.Begin,waittime);}
Marquee.prototype.Scroll=function(){
switch(this.Direction){case "top":this.CTL+=this.Step;if(this.CTL>=this.ScrollStep&&this.DelayTime>0){this.ID.scrollTop+=this.ScrollStep+this.Step-this.CTL;this.Pause();return}else{if(this.ID.scrollTop>=this.ClientScroll){this.ID.scrollTop-=this.ClientScroll}this.ID.scrollTop+=this.Step}break;case "bottom":this.CTL+=this.Step;if(this.CTL>=this.ScrollStep&&this.DelayTime>0){this.ID.scrollTop-=this.ScrollStep+this.Step-this.CTL;this.Pause();return}else{if(this.ID.scrollTop<=0){this.ID.scrollTop+=this.ClientScroll}this.ID.scrollTop-=this.Step}break;case "left":this.CTL+=this.Step;if(this.CTL>=this.ScrollStep&&this.DelayTime>0){this.ID.scrollLeft+=this.ScrollStep+this.Step-this.CTL;this.Pause();return}else{if(this.ID.scrollLeft>=this.ClientScroll){this.ID.scrollLeft-=this.ClientScroll}this.ID.scrollLeft+=this.Step}break;case "right":this.CTL+=this.Step;if(this.CTL>=this.ScrollStep&&this.DelayTime>0){this.ID.scrollLeft-=this.ScrollStep+this.Step-this.CTL;this.Pause();return}else{if(this.ID.scrollLeft<=0){this.ID.scrollLeft+=this.ClientScroll}this.ID.scrollLeft-=this.Step}break}
}

//tab封装
function tabs(tid,cid,tag1,tag2,addclass,theevent)
{
        if(arguments.length==3){theevent=arguments[2];tag1="dd";tag2=tag1;addclass="current";}
	var defaultindex=0,checkNav="",checkWrap="";
	var o1=document.getElementById(tid),o2=document.getElementById(cid),ElementNav=new Array();ElementWrap=new Array();
	chk=function(e,n){var v=eval("/"+n+"/gi");if(v==undefined){return true}else if(v.test(e.className)){return true};}
	function ser(e,arr,g,n,t)
         {
	    var tags=e.getElementsByTagName(g),v=0;
	    for(i=0;i<tags.length;i++)
                {
	           if(chk(tags[i],n)==true)
                   {
                    arr[v]=tags[i];v++;
                    if(t=="wrap")
                     {
                      if(tags[i].style.display=="block"){defaultindex=i;}
                      else{tags[i].style.display="none";}
                     }
                   }
		}
             if(t=="wrap"){tags[defaultindex].style.display="block";}
             else{$(tags[defaultindex]).addClass(addclass);}
	}
	function Start(e,f){
		var s=e.length;
		for(i=0;i<s;i++)
                   {
                       switch(theevent)
                        {
                          case "onclick":
                           {
			    e[i].onclick=function(){EV(this)}
                           }
                          break;

                          default:
                           {
			    e[i].onmouseover=function(){EV(this)}
                           }
                          break;
                        }      
		    }
		function EV(obj){
			for(var i=0;i<s;i++){
				f[i].style.display="none";
				$(e[i]).removeClass(addclass);
			}
			for(var i=0;i<s;i++){
				if(e[i]==obj){f[i].style.display="block";$(e[i]).addClass(addclass);}
			}
		}
	}
	ser(o2,ElementWrap,tag2,checkWrap,'wrap');
	ser(o1,ElementNav,tag1,checkNav,'nav');
	Start(ElementNav,ElementWrap)
}

//滚动函数
function marquee(boxid,direction,ITimes)
 {
   var movedistance=0,alldistance=0;
   var $boxid=$("#"+boxid);
   var $inner=$boxid.children(".inner")
   var $boxid_ul=$inner.children("ul");
   var $boxid_ul_li=$boxid_ul.children("li");
   var $prevarr=$boxid.children(".prev");
   var $nextarr=$boxid.children(".next");
   if(direction=="left" || direction=="right")
    {
     movedistance=parseInt($boxid_ul_li.eq(0).innerWidth());
    }
   else
    {
     movedistance=parseInt($boxid_ul_li.eq(0).innerHeight());
    }
   var nums=$boxid_ul_li.size();
   var alldistance=movedistance*nums;
   if(direction=="left" || direction=="right")
    {
     if(alldistance<$inner.innerWidth())
      {
       return;
      }
    }
   else
    {
     if(alldistance<$inner.innerHeight())
      {
       return;
      }
    }
   var itemwidth=$boxid_ul_li.eq(0).css("width");
   var itemheight=$boxid_ul_li.eq(0).css("height");
   var con=$boxid_ul.html();
   $boxid_ul.prepend(con);
   $boxid_ul.append(con);
   if(direction=="left" || direction=="right")
    {
     $boxid_ul.css("width",nums*movedistance*3+"px");
     $inner.scrollLeft(alldistance);
     $prevarr.click(function(){scroll("left");});
     $nextarr.click(function(){scroll("right");});
    }
   else
    {
     $boxid_ul.css("height",nums*movedistance*3+"px");
     $inner.scrollTop(alldistance);
     $prevarr.click(function(){scroll("up");});
     $nextarr.click(function(){scroll("down");});
    }
   function scroll(dir)
   {
    if(dir=="left")
     {
     $inner.animate({scrollLeft:"+="+movedistance+"px"},"normal",function(){reduction();});
     }
    else if(dir=="right")
     {
      $inner.animate({scrollLeft:"-="+movedistance+"px"},"normal",function(){reduction();});
     }
    else if(dir=="up")
     {
     $inner.animate({scrollTop:"+="+movedistance+"px"},"normal",function(){reduction();});
     }
    else if(dir=="down")
     {
      $inner.animate({scrollTop:"-="+movedistance+"px"},"normal",function(){reduction();});
     }
   }

  function reduction()
   {
     var scrolledLength=0;
     if(direction=="left" || direction=="right")
      {
        scrolledLength=$inner.scrollLeft();
        if(scrolledLength>=alldistance*2 || scrolledLength<=0)
        {
          $inner.scrollLeft(alldistance);
        }
     }
    else
      {
        scrolledLength=$inner.scrollTop();
        if(scrolledLength>=alldistance*2 || scrolledLength<=0)
        {
          $inner.scrollTop(alldistance);
        }
      }
    }
   
   var it=setInterval(function(){scroll(direction);},ITimes);
   $boxid.mouseenter(function(){
        clearInterval(it);
    });
   $boxid.mouseleave(function(){
       it=setInterval(function(){scroll(direction);},ITimes);
    });

 }

//js幻灯片
function Slide_Focus(id,slidestyle,ITimes,width,height,isbanner)
 {
  var o_width=width;   //原始宽度
  var o_height=height; //原始高度
  var slidestyle=slidestyle;   //0：显隐变换，1：左右轮换，2：上下轮换
  var ITimes=ITimes*1000;  //轮换时间
  var $obj_slide=$("#"+id);
  if($obj_slide.size()=="0"){return;}
  var $obj_slide_inner=$obj_slide.children(".inner");
  if($obj_slide_inner.size()=="0"){return;}
  var $li=$obj_slide_inner.children("li");
  var nums=$li.size();
  var hasadd=0;
  if(slidestyle>0 && nums>1)
  {
    $obj_slide_inner.append("<li>"+$li.eq(0).html()+"</li>");
    nums+=1;
    $li=$obj_slide_inner.children("li");
    hasadd=1;
  }
  var $img=$li.children("a").children("img");
  if(nums==0){return;}
  var screenwidth=parseInt($(document).width());
  if(!IsPC())
   {
    if(screenwidth<o_width)
     {
      width=screenwidth;
      height=Math.floor(height*(screenwidth/o_width));
     }
   }
  var startleft=0;
  var panelhtml="";
  $obj_slide.css({"height":height+"px"});
  if(!isbanner)
   {
    $obj_slide.css({"width":width+"px"});
   }
  $obj_slide_inner.css({"height":height+"px"});
  $li.css({"height":height+"px"});
  $img.css({"height":height+"px","width":width+"px"});
  if(nums>1)
  {
   for(i=0;i<nums;i++)
   {
    if(hasadd==1)
     {
       if(i==(nums-1)){continue;}
     }
    panelhtml+="<span><em>"+(i+1)+"</em></span>";
   }
  }
 panelhtml="<div class='titbar'><em></em><span></span></div><div class='panel'>"+panelhtml+"</div>";
 $obj_slide_inner.before(panelhtml);
 var $panel=$obj_slide.children(".panel");
 var $baritem=$panel.children("span");
 var currentnum=0;
 $baritem.eq(0).addClass("current");
 $li.eq(0).addClass("current");
 var $titbar=$obj_slide.children(".titbar");
 if($li.eq(0).children("a").children("em").html()!="")
   {
    $titbar.show();
    $titbar.children("em").html($li.eq(0).children("a").children("em").html());
   }
 if(slidestyle==0)
  {  
   $li.eq(0).siblings("li").hide();
  }
 else if(slidestyle==1)
  {
    $li.css({"width":width+"px"});
    $obj_slide_inner.css({"width":width*(nums)+"px"});
    $li.addClass("zy_move");
  }
 else
  {
    $obj_slide_inner.css({"position":"absolute","height":"auto"});
    $li.addClass("sx_move");
  }

 if(isbanner)
  {
    if(slidestyle!=1)
     {
      $li.css({"width":width+"px"});
      $obj_slide_inner.css({"width":width*(nums)+"px"});
     }
    $panel.css({"margin-left":-1*($panel.css('width').replace("px","")/2)+5+"px"})
    if(width<screenwidth)
     {
      $obj_slide.css({"width":width+"px"});
     }
    else
     {
       startleft=-1*parseInt((width-screenwidth)/2);
       if(startleft>0){startleft=0;}
       $obj_slide_inner.css({"margin-left":startleft+"px"});
     }
  }
  function GoFirst(num)
   {
    if(hasadd==0){return;}
    if(num<(nums-1)){return;}
    if(slidestyle==1)
     {
      $obj_slide_inner.css({marginLeft:startleft+'px'});
     }
    else
     {
      $obj_slide_inner.css({top:'0px'});
     }
   }
  function ShowNum(num) 
    {
      if(num<0){num=nums-1;}
      if(num>(nums-1)){num=0;}
      $baritem.eq(currentnum).removeClass("current");
      $titbar.children("em").html($li.eq(num).children("a").children("em").html());
      if(slidestyle==0)
      { 
       $li.eq(currentnum).removeClass("current");
       $li.eq(num).addClass("current");
       $li.eq(num).fadeIn(1000,function(){$(this).siblings("li").hide();});
      }
     else if(slidestyle==1)
      {
       $obj_slide_inner.animate({marginLeft:(-1*num*width)+startleft+'px'},"normal",function(){GoFirst(num);});
      }
     else
      {
       $obj_slide_inner.animate({top:(-1*num*height)+'px'},"normal",function(){GoFirst(num);});
      }
     currentnum=num;
     if(hasadd==1 && num==(nums-1)){currentnum=0;}
     $baritem.eq(currentnum).addClass("current");
    };
  
  $baritem.each(function(i){
    $(this).unbind("mouseenter").mouseenter(function(){
       $li.stop(true);
       $obj_slide_inner.stop(true);
       //$li.eq(currentnum).stop(true,true);
       ShowNum(i);
    });
  });
   var it=setInterval(function(){ShowNum(currentnum+1)},ITimes);
   $obj_slide.mouseenter(function(){
        clearInterval(it);
    });
   $obj_slide.mouseleave(function(){
       it=setInterval(function(){ShowNum(currentnum+1)},ITimes);
    });

 if(isbanner)
   {
   $(window).resize(function(){
    screenwidth=parseInt($(document).width());
    if(!IsPC())
    {
      height=Math.floor(o_height*(screenwidth/o_width));
      width=screenwidth;
      if(width>o_width)
       {
        width=o_width;
        height=o_height;
       }
      $obj_slide.css({"height":height+"px"});
      if(!isbanner)
      {
       $obj_slide.css({"width":width+"px"});
      }
      $obj_slide_inner.css({"height":height+"px"});
      $li.css({"height":height+"px"});
      $img.css({"height":height+"px","width":width+"px"});
     if(slidestyle==1)
      {
       $li.css({"width":width+"px"});
       $obj_slide_inner.css({"width":width*nums+"px"});
      }
     }

    startleft=-1*parseInt((width-screenwidth)/2);
    if(startleft>0){startleft=0;}
    ShowNum(currentnum);
  });
  }

 if(!IsPC())
  {
    function ShowNum_ForMobile(num)
      {
       if(num<0){return;}
       if(num>(nums-1)){return;}
       clearInterval(it);
       ShowNum(num);
      }
   $obj_slide.touch({
     Left: function() {ShowNum_ForMobile(currentnum+1);},
     Right: function() {ShowNum_ForMobile(currentnum-1)},
     Up: function() {},
     Down: function() {},
     min_x: 40,
     min_y: 40
   });
  }
}

if(!IsPC()){document.write("<script src=\"/e/js/jquery.touchwipe.js\" type=\"text/javascript\"></script>");}