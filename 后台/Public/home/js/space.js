function SpaceCount(UID)
 {
   var SpaceCookie=GetCookie(UID);
   if(SpaceCookie=="1")
    {
      return;
    }
  else
   {
     var x=new PAAjax();
     x.setarg("post",true);
     x.send("/e/space/spacecount.aspx","uid="+UID,function(v){Set_SpaceCookie(UID)});
    }
 }

function Set_SpaceCookie(UID)
 {
   SetCookie(UID,"1",24*60);
 }

function Space_Close()
 {
   alert("空间功能已经被关闭!");
   window.close();
 }

function SpcFeedback() //用户留言
  {  
     var Maxlength=300;
     var fbks=GetCookie("spcfbk");
     if(fbks=="1")
     {
       //alert("Hi,先休息2分钟再发!");
       //return false;
     }
    var FbkLength=FckLength("fb_content");
    if(FbkLength==0)
     {
      alert("请输入留言内容!");
      return false;
     }
    else if(FbkLength>Maxlength)
     {
      alert("留言内容长度请控制在"+Maxlength+"字符以内!");
      return false;
     }
   SetCookie("spcfbk","1",2);
   return true;
  }

function SpcLogin() //用户留言登录
  {  
   var fb_value=Trim(document.getElementById("fb_username").value);
   if(fb_value.length=="")
    {
      alert("请输入用户名!");
      document.getElementById("fb_username").focus();
      return false;
    }

   fb_value=Trim(document.getElementById("fb_pass").value);
   if(fb_value.length=="")
    {
      alert("请输入密码!");
      document.getElementById("fb_pass").focus();
      return false;
    }
   return true;
  }

 function d_spcfbk(did) //删除留言
  {
    if(confirm("确定删除吗?"))
     {
       var obj=document.forms["f"];
       obj.post.value="delete"
       obj.did.value=did;
       obj.submit();
     }
  }

 function r_spcfbk(did) //留言回复
  {
    IDialog('留言回复','/e/space/fbk_reply.aspx?id='+did,450,200);
  }
document.write("<script src=\"/e/js/dialog.js\" type=\"text/javascript\"></script>");