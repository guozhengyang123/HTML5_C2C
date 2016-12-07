var Comment_LastTime="";
function Add_Comments(SiteId,Table,DetailId,Quote,Content,UserName,yzm_or_pass,Checked,IsMember) //提交评论
 {
   var x=new PAAjax();
   x.setarg("post",true);
   x.send("/e/aspx/get_comments.aspx","siteid="+SiteId+"&table="+Table+"&id="+DetailId+"&username="+encodeURIComponent(UserName)+"&quote="+encodeURIComponent(Quote)+"&content="+encodeURIComponent(Content)+"&checked="+Checked+"&code="+encodeURIComponent(yzm_or_pass)+"&post=add&ismember="+IsMember,function(v){Add_Comments_Over(v,Table,DetailId)});
 }
function Load_Comments(Table,DetailId,Page,GoTop) //读取评论
 {
  var order=""; //默认评论排序规则,也可通过页面中定义comment_order来指定,如：id desc;
  var pagesize=10; //默认评论每页显示数,也可通过页面中定义comment_pagesize来指定;
  if(typeof(comment_order)!="undefined"){order=comment_order;}
  if(typeof(comment_pagesize)!="undefined"){pagesize=comment_pagesize;}
  Id("c_title_sign").innerHTML="发布评论";
  if(Id("c_user_sign")!=null)Id("c_user_sign").innerHTML="用户：";
  if(Id("c_yzm_sign")!=null)Id("c_yzm_sign").innerHTML="验证码：";
  if(Id("c_username_sign")!=null)
  {
   Id("c_username_sign").innerHTML="用户名：";
   Id("c_pass_sign").innerHTML="密码：";
  }
  if(Id("c_anonymous_sign")!=null)Id("c_anonymous_sign").innerHTML="匿名";
  if(Id("c_user")!=null)Id("c_user").value="游客";
  Id("c_submit").value="提交";
  if(GoTop==null)
   {
     GoTop=true;
   }
  var R=Math.random();
  var x=new PAAjax();
  x.setarg("get",true);
  x.send("/e/aspx/get_comments.aspx","table="+Table+"&id="+DetailId+"&page="+Page+"&pagesize="+pagesize+"&order="+escape(order)+"&r="+R,function(v){Write_Comments(v)});
  if(GoTop)
   {
    location.href="#comments";
   }
 }

function Write_Comments(Rv) //Load_Comments后加载评论
 {
   var obj=Id("comments_list");
   if(Rv.indexOf("{pa:listsign}")>=0)
    {
      obj.style.display="";
      Rv=ReplaceAll(Rv,"{pa:listsign}","用户评论");
      Rv=ReplaceAll(Rv,"{pa:quote}","引用");
      Rv=ReplaceAll(Rv,"{pa:reply}","回复：");
      Rv=ReplaceAll(Rv,"{pa:firstpage}","首页");
      Rv=ReplaceAll(Rv,"{pa:lastpage}","尾页");
      Rv=ReplaceAll(Rv,"{pa:floor}","楼 ");
      obj.innerHTML=Rv;
      obj=Id("c_page");
      var phtml=obj.innerHTML.split('|');
      obj=Id("comments_page");
      if(obj!=null)
      {
       obj.innerHTML=phtml[0]+"&nbsp;<span>页次："+phtml[1]+"/"+phtml[2]+"页&nbsp;"+phtml[3]+"条评论</span>";
      }
    }
   else
    {
      obj.style.display="none";
      obj.innerHTML=Rv;
    }
  obj=Id("c_loginusername");
  var LoginUserName=obj.value;
  if(LoginUserName!="")
   {
    c_member_box.innerHTML="用户名："+LoginUserName;
    c_member_box.style.display="";
    if(c_anonymous_box!=null)
    {
     c_anonymous_box.style.display="none";
    Id("c_anonymous").checked=false;
    }
   }
 }

function Add_Comments_Over(v,Table,DetailId)  //Addcomment后的回调函数
 {
   var c_content=Id("c_content");
   var c_yzm=Id("c_yzm");
   var c_quote=Id("c_quote"); 
   if(c_yzm!=null)
     {
      c_yzm.value="";
      Code_Change("c_yzmcode");
     }
   switch(v)
    {
      case "1":
       alert("提交成功!");
       c_content.value="";
       CommentsOver=true;
       del_cquote();
       Comment_LastTime=DateToStr(new Date());
       Load_Comments(Table,DetailId,100); //这里显示100页为方便看到自己发布的评论
      break;

      case "0":
       Comment_LastTime=DateToStr(new Date());
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

function cquote(id)
 {
   var obj1=Id("c_username_"+id);
   var obj2=Id("c_date_"+id);
   var obj3=Id("c_content_"+id);
   var c_quote=Id("c_quote"); 
   var c_quote_tips=Id("c_quote_tips"); 
   var quote_tips="<span class=quote>"+"引用 "+obj1.innerHTML+" 于"+obj2.innerHTML+"发表的评论";
   var quote_content="<br>"+obj3.innerHTML+"</span>\r\n";
   c_quote.value=quote_tips+quote_content;
   c_quote_tips.innerHTML=quote_tips+" [<a href=# onclick=\"return del_cquote()\">取消引用</a>]";
   c_quote_tips.style.display="";
   Id("c_content").focus();
   return false;
 }

function del_cquote() //删除引用
 {
   var c_quote=Id("c_quote"); 
   var c_quote_tips=Id("c_quote_tips"); 
   c_quote.value="";
   c_quote_tips.innerHTML="";
   c_quote_tips.style.display="none";
   return false;
 }

function check_comments() //评论输入检查
  {
   var MaxNum=Comment_MaxLength; //评论允许的最大字符
   var NowTime=DateToStr(new Date());
   var IsMember=0;
   var c_quote=Id("c_quote");
   var c_content=Id("c_content");
   var c_anonymous=Id("c_anonymous");
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
   else
    {
     if(MaxNum>0 && (Trim(c_content.value)).length>MaxNum)
      {
       alert("评论内容请控制在"+MaxNum+"字符以内!");
       c_content.value=c_content.value.substr(0,MaxNum);
       c_content.focus();
       return false;
      }
    }
   if(Comment_TimeLimit>0 && Comment_LastTime!="") //时间间隔验证
    {
      var Jg_SecondS=GetDateDiff(Comment_LastTime,NowTime,"second");
      if(Jg_SecondS<Comment_TimeLimit)
       {
         alert("请"+(Comment_TimeLimit-Jg_SecondS)+"秒后再发布!");
         return false;
       }
    }
   var c_name,c_yzm,username,password;
   if(IsMember==0)
    {
      c_name=Id("c_user");
      if(c_name==null)
       {
         return;
       }
      if(Trim(c_name.value)=="")
      {
        alert("请输入您的姓名!");
         c_name.focus();
         return false;
      }
     var c_yzm=Id("c_yzm");
      if(c_yzm==null)
       {
         return;
       }
     if(Trim(c_yzm.value)=="")
     {
       alert("请输入验证码!");
       c_yzm.focus();
       return false;
     }
    Add_Comments(Id("c_siteid").value,Id("c_table").value,Id("c_detailid").value,c_quote.value,c_content.value,c_name.value,c_yzm.value,Id("c_checked").value,0);
   }
  else
   {
      var UserName,Pass;
      username=Id("c_username");
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
     else
      {
       UserName="";
      }
     password=Id("c_password");
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
    else
     {
      Pass="";
     }
   Add_Comments(Id("c_siteid").value,Id("c_table").value,Id("c_detailid").value,c_quote.value,c_content.value,UserName,Pass,Id("c_checked").value,1);
   }
 }