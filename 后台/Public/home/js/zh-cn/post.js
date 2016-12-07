function PostBack(sid,table,checked,cs,backurl,v,tourl) //自定义表单插入数据反馈函数,checked表示是否审核，1审核，0等待审核
 {
   switch(v)
    {
     case "success":
      if(tourl!="")
       {
        location.href=tourl;
        return;
       }
      if(cs!=0)
       {
         location.href="/e/info/suc.aspx?code="+cs+"&to="+escape(backurl);
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

     case "repeat":
      alert(cs+"字段的值出现重复，请重新输入并保证值的唯一性!");
      history.back();
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
