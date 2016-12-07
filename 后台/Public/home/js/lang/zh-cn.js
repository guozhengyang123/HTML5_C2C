function quick_login(sid) //快速登录界面
 {
   var MC=GetCookie("Member");
   if(MC=="")
    {
     ShowIframe('会员登录','/e/aspx/quick_login.aspx?s='+sid,300,200);
     return false;
    }
   return true;
 }

function Check_Permission(sid,state,mtype) //文章浏览权限
 {
  switch(state)
   {
     case "not_login":
       alert("对不起，请先登录!");
       var backurl=location.href;
       location.href="/e/member/index.aspx?type=login&s="+sid+"&to="+escape(backurl);
     break;

     case "no_permissions":
      alert("对不起，"+mtype+"没有访问权限!");
       location.href="/";
     break;
   }
 }

function cart_prompt(sid,table,id)
 {
    var MC=GetCookie("Member");
    if(MC=="")
    {
     ShowIframe('会员登录','/e/aspx/quick_login.aspx?s='+sid,300,200);
    }
   else
    {
     ShowIframe('购物车信息',"/e/order/cart.aspx?s="+sid+"&table="+table+"&id="+id,400,140);
    }
 }

function Attachment_Back(Error,Point,SiteId) //下载提示函数
 {
  switch(Error)
   {
     case "notexists":
       alert("对不起，文件不存在!");
       window.close();
     break;

     case "nopermission":
       alert("对不起，您所在的会员组无下载权限!");
       window.close();
     break;

     case "nopoint":
        alert("对不起，您的积分不足，此文件下载需要"+Point+"点积分!")
        window.close();
     break;

     case "notlogin":
       alert("对不起，请先登录!");
       var backurl=location.href;
       location.href="/e/member/index.aspx?s="+SiteId+"&type=login&to="+escape(backurl);
       return false;
     break;
   }
 }

function AddFavourites_Back(sid,v) //下载回调函数
 {
   switch(v)
    {
      case "ok":
       alert("信息收藏成功!");
      break;

      case "has_exists":
       alert("此信息已经收藏过了!");
      break;

      case "not_exists":
       alert("此信息数据已经不存在!");
      break;

      case "notlogin":
       quick_login(sid);
      break;
     
      default:
       alert("错误:"+v);
      break;
    }

 }

function Add_Comments_Over(v,Table,DetailId)  //Addcomment后的回调函数
 {
   var c_content=document.forms["c_f"].c_content;
   var c_yzm=document.forms["c_f"].c_yzm;
   if(c_yzm!=null)
     {
      c_yzm.value="";
      Code_Change("yzmcode");
     }
   switch(v)
    {
      case "1":
       alert("提交成功!");
       c_content.value="";
       CommentsOver=true;
       Load_Comments(Table,DetailId,100); //这里显示100页为方便看到自己发布的评论
      break;

      case "0":
       alert("提交成功!需要审核后才能显示!");
       c_content.value="";
      break;

      case "yzm error":
       alert("验证码输入错误!");
      break;

      case "user_pass error":
       alert("用户或密码输入错误!");
      break;

      case "input error":
       alert("输入不完整!");
      break;

      case "forbid_keyword":
       alert("提交的内容包含被禁止的关键字!");
       c_content.focus();
      break;

      default:
       if(v.indexOf("maxleng_limit,")>=0)
        {
          alert("内容长度请控制在"+v.replace("maxleng,","")+"字符以内!");
          c_content.focus();
        }
      else if(v.indexOf("time_limit,")>=0)
        {
         alert("不要灌水，先休息一下!");
        }
       else if(v.indexOf("no_permissions")>=0)
        {
         alert("未登录或登录超时!");
         location.href=location.href;
        }
       else
        {
         alert(v);
        }
      break;
    }
 }

function Write_Comment(Rv) //Load_Comments后加载评论
 {
   var obj=document.getElementById("comments_list");
   if(Rv=="")
    {
      obj.style.display="none";
      return;
    }
   else
    {
      obj.style.display="";
    }
   if(obj!=null)
    {
      Rv=ReplaceAll(Rv,"{pa:listsign}","网友评论");
      Rv=ReplaceAll(Rv,"{pa:quote}","引用");
      Rv=ReplaceAll(Rv,"{pa:reply}","回复：");
      Rv=ReplaceAll(Rv,"{pa:firstpage}","首页");
      Rv=ReplaceAll(Rv,"{pa:lastpage}","尾页");
      Rv=ReplaceAll(Rv,"{pa:floor}","#");
      obj.innerHTML=Rv;
    }
  obj=document.getElementById("c_page");
  var phtml=obj.innerHTML.split('|');
  obj=document.getElementById("comments_page");
  if(obj!=null)
    {
     obj.innerHTML=phtml[0]+"&nbsp;<span>页次："+phtml[1]+"/"+phtml[2]+"页&nbsp;"+phtml[3]+"条评论</span>";
    }
 }

function cquote(id)
 {
   var obj1=document.getElementById("c_floor_"+id);
   var obj2=document.getElementById("c_date_"+id);
   var obj3=document.getElementById("c_content_"+id);
   var obj4=document.getElementById("c_content"); 
   obj4.focus();
   var Va="[quote]"+"引用 "+obj1.innerHTML+"# 于"+obj2.innerHTML+"发表：\r\n"+obj3.innerHTML+"[/quote]\r\n";
   Va=ReplaceAll(Va.toLowerCase(),"<br>","\r\n");
   Va=ReplaceAll(Va,"&nbsp;"," ");
   Va=ReplaceAll(Va,"<span class=\"quote\">","[quote]");
   Va=ReplaceAll(Va,"<span class=quote>","[quote]");
   Va=ReplaceAll(Va,"</span>","[/quote]");
   obj4.value=Va;
 }

function check_comments() //评论输入验证
  {  
   var IsMember=0;
   var c_content=document.forms["c_f"].c_content;
   var c_anonymous=document.forms["c_f"].anonymous;
   if(c_anonymous==null)
    {
      IsMember=1;
    }
   else if(c_anonymous.checked==false)
    {
      IsMember=1;
    }
   if(Trim(c_content.value)=="")
    {
      alert("请输入评论内容!");
      c_content.focus();
      return false;
    }
   var c_name,c_yzm,username,password;
   if(IsMember==0)
    {
      c_name=document.forms["c_f"].c_username;
      if(Trim(c_name.value)=="")
      {
        alert("请输入您的姓名!");
         c_name.focus();
         return false;
      }
     var c_yzm=document.forms["c_f"].c_yzm;
     if(Trim(c_yzm.value)=="")
     {
       alert("请输入验证码!");
       c_yzm.focus();
       return false;
     }
    Add_Comments(document.forms["c_f"].c_siteid.value,document.forms["c_f"].c_table.value,document.forms["c_f"].c_detailid.value,c_content.value,c_name.value,c_yzm.value,document.forms["c_f"].c_checked.value,0);
   }
  else
   {
      var UserName,Pass;
      username=document.forms["c_f"].username;
      if(username!=null)
      {
        if(Trim(username.value)=="")
         {
           alert("请输入用户名!");
           username.focus();
           return false;
         }
       UserName=username.value;
      }
     password=document.forms["c_f"].password;
     if(password!=null)
     {
       if(Trim(password.value)=="")
       {
        alert("请输入用户密码!");
        password.focus();
        return false;
       }
      Pass=password.value;
     }
   
   Add_Comments(document.forms["c_f"].c_siteid.value,document.forms["c_f"].c_table.value,document.forms["c_f"].c_detailid.value,c_content.value,UserName,Pass,document.forms["c_f"].c_checked.value,1);
   }

  
 }


function VoteBack(msg,tourl) //问卷投票的js提示
 {
  switch(msg)
    {
     case "vote has ended":
       alert("您好，此调查已经结束了!");
       location.href=tourl;
     break;

     case "repeat vote":
       alert("您好，您已经投过票了!");
       location.href=tourl;
     break;

     case "not completed":
       alert("您好，您还没有填写完整问卷!");
       window.close();
     break;

     case "success":
       alert("投票成功，感谢您的参与!");
       location.href=tourl;
     break;
    }

 }


function PostBack(sid,table,checked,code,backurl,v) //自定义表单插入数据反馈函数,checked表示是否审核，1审核，0等待审核
 {
   switch(v)
    {
     case "success":
      var fbk_table="a,b,c";//需要给用户返回查询码的表
      if(fbk_table.indexOf(table)>=0)
       {
         location.href="/e/info/suc.aspx?code="+code+"&to="+escape(backurl);
         return;
       }
      else
       {
         if(checked==1)
         {
          alert("提交成功!");
         }
        else
         {
          alert("提交成功,请等待处理!");
         }
        location.href=backurl;
       }
     break;

     case "invalid filetype":
       alert("提交失败:上传的文件格式被禁止!");
       history.back();
     break;

     case "upload file is too big":
       alert("提交失败:上传的文件太大了!");
       history.back();
     break;

     case "invalid siteid":
       alert("站点不存在!");
       history.back();
     break;

     case "invalid yzm":
       alert("验证码错误!");
       history.back();
     break;

     case "invalid table":
       alert("数据表不存在!");
       history.back();
     break;

      case "forbid_keyword":
       alert("提交的内容包含被禁止的关键字!");
       history.back();
      break;

     default:
      if(v.indexOf("daynum_limit,")>=0)
        {
          alert("每天最多只能发布"+v.replace("daynum_limit,","")+"条信息!");
          history.back();
        }
      else if(v.indexOf("time_limit,")>=0)
        {
         alert("请不要连续发布信息，先休息一下!");
        }
      else
        {
          alert("提交出错："+v);
        }
      history.back();
     break;
    }
 }

function LoginBox(Id,SiteId)//js调用登录
 {
   var LoginForm=document.forms["loginbox_"+Id];
   LoginForm.action="/e/member/index.aspx?type=login&s="+SiteId;
   LoginForm.target="_self";
   var L_username = LoginForm.username;
   var L_passowrd = LoginForm.password;
   var L_yzm = LoginForm.vcode;
   if(L_username.value=="")
    {
      alert("请输入用户名!");
      L_username.focus();
      return false;
    }
   else if(L_username.value.length <4 || L_username.value.length > 16)
      {
        alert("用户名长度需要在4-16之间!");
        L_username.focus();
        return false;
      }
   else if(!IsStr(L_username.value))
      {
            alert("用户名只能由数字，字母和下划线组成!");
            L_username.focus();
            return false;
      }

   if(L_passowrd.value=="")
    {
      alert("请输入密码!");
      L_passowrd.focus();
      return false;
    }
  else if (L_passowrd.value.length <4 || L_passowrd.valuelength > 16)
    {
        alert("密码长度需要在4-16之间!");
        L_passowrd.focus();
        return false;
    }
  else if(!IsStr(L_passowrd.value))
    {
       alert("密码只能由数字，字母和下划线组成!");
       L_passowrd.focus();
       return false;
    }

  if(L_yzm!=null)
   {
     if(L_yzm.value.length!=4)
      {
        alert("请输入正确的验证码!");
        L_yzm.focus();
        return false;
      }
   }
   return true;
 }
