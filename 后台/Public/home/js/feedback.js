function Check_Feedback()
  {  

   var fb_value=Trim(document.getElementById("title").value);
   if(fb_value=="")
    {
      alert("请输入留言主题!");
      document.getElementById("title").focus();
      return false;
    }

   fb_value=Trim(document.getElementById("email").value);
   if(fb_value=="")
    {
     alert("请输入您的邮箱!");
     document.getElementById("email").focus();
     return false;
     }
     if (fb_value.charAt(0)=="." || fb_value.charAt(0)=="@" || fb_value.indexOf('@', 0) == -1 || fb_value.indexOf('.', 0) == -1 || fb_value.lastIndexOf("@")==fb_value.length-1 || fb_value.lastIndexOf(".")==fb_value.length-1)
        {
           alert("邮箱格式错误，请重新输入!");
          document.getElementById("email").focus();
          return false;
        }

   fb_value=Trim(document.getElementById("content").value);
   if(fb_value=="")
    {
      alert("请输入留言内容!");
      document.getElementById("content").focus();
      return false;
    }

   fb_value=Trim(document.getElementById("vcode").value);
   if(fb_value=="")
    {
      alert("请输入验证码!");
      document.getElementById("vcode").focus();
      return false;
    }

   return true;

  }



