function quick_login(sid,fun) //快速登录界面
 {
   if(typeof(fun)!="undefined")
   {
    fun="&fun="+escape(fun);
   }
   IDialog('会员登录','/e/aspx/quick_login.aspx?s='+sid+fun,300,200);
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
     IDialog('会员登录','/e/aspx/quick_login.aspx?s='+sid,300,200);
    }
   else
    {
     IDialog('购物车信息',"/e/order/cart.aspx?s="+sid+"&table="+table+"&id="+id,400,140);
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
   else if(Length(L_username.value)<4 || Length(L_username.value)>16)
      {
        alert("用户名长度需要在4-16之间!");
        L_username.focus();
        return false;
      }
   else if(!IsUserName(L_username.value))
      {
       alert("用户名只能由字母、数字、下划线和汉字组成!");
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
