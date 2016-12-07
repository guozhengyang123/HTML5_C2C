function NotLogin(sid) //未登录提示
 {
   alert("请先登录!");
   var backurl=parent.location.href;
   var url="/e/member/index.aspx?type=login&s="+sid+"&to="+escape(backurl);
   parent.location=url;
   parent.CloseDialog()
 }

function NoReserves(sid) //无库存
 {
   alert('此产品已无库存！');
   parent.CloseDialog()
 }

function AlreadyInOrder()
 {
   //alert("此产品已经在订购列表中!");
  //location.href=location.href;
 }

function edit_order() //修改参数
 {
   var Obj=document.getElementsByName("id");

   if(Obj.length==0)
     {
       return;
     }
    var id,name,num,reserves,numobj;
   for(i=0;i<Obj.length;i++)
    {
       id=Obj[i].value;
       name=document.getElementById("name_"+id).innerHTML;
       objnum=document.getElementById("num_"+id);
       num=objnum.value;
       if(!IsNum(num)){num=0;}
       reserves=document.getElementById("num_"+id).attributes["reserves"].value;
       if(!IsNum(reserves)){reserves=0;}
       if(parseInt(num)>parseInt(reserves))
        {
         alert(name+"没有足够库存(现有库存数："+reserves+")，请修改订购数量!");
         objnum.focus();
         objnum.style.color="#ff0000";
         return;
        }
      else
        {
          objnum.style.color="#000000";
        }
    }
   document.order.post.value="edit"
   document.order.submit();
 }

function del_order(id) //删除订单
 {
   if(confirm("是否确定删除!\r\nAre you sure you want to delete!"))
    {
     document.order.delid.value=id;
     document.order.post.value="del"
     document.order.submit();
    }
 }

function order_submit(tourl,username) //订单提交完毕
 {
   alert("订单提交成功!\r\nYour orders has been successfully submitted!");
   if(username!="")
    {
     parent.location=tourl;
    }
    parent.CloseDialog();
 }

function Exchange(str) //积分兑换
 {
   switch(str)
    {
   case "invalid":
     alert("参数错误!");
     location.href= location.href;
   break;

   case "num>reserves":
     alert("兑换失败，兑换数不能大于商品库存!");
     location.href= location.href;
   break;

   case "mypoint<points":
     alert("兑换失败，可用积分不足!");
     location.href= location.href;
   break;

   case "success":
     alert("兑换成功!");
   break;
  }
 }


