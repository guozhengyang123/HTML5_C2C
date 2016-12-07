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