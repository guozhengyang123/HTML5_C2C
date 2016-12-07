function ShowSubMenu(id) //显示下拉
 {
   if(document.getElementById("Menu")==null){return;}
   var MenuItem=GetMenuItem();
   if(MenuItem.length<=1){return;}
   if(typeof(submenu_style)=="undefined")
    {
      submenu_style=1;  //1表示纵向下拉，2表示横向下拉,其他数值则关闭
    }
   switch(submenu_style)
    {
      case 1:
       document.write('<link rel="stylesheet" type="text/css" href="/e/css/dropmenu.css" />');
       addHover("Menu","li","hover");
      break;

     case 2:
       document.write('<link rel="stylesheet" type="text/css" href="/e/css/submenu.css" />');
       HorisontalSubMenu(id);
     break;
   }
 }

function addHover(id,tag,classname) //增加hover效果
 {
    document.getElementById(id).onmouseover=function()
    {
      var MenuItem=GetMenuItem();
      if(MenuItem.length>1)
       {
        for(i=0;i<MenuItem.length;i++)
        {
          MenuItem[i].className=MenuItem[i].className.replace(" menu_current","");
         }
       }
    }
    document.getElementById(id).onmouseout=function()
     {
       document.getElementById("MenuItem"+Lanmu_Id).className+=" "+"menu_current";
     }
    var sfEls =document.getElementById(id).getElementsByTagName(tag);
    for (var i=0; i<sfEls.length;i++) 
        {
          sfEls[i].onmouseover=function() 
            {
              this.className+=" "+classname;
            }
          sfEls[i].onmouseout=function()
          {
           this.className=this.className.replace(new RegExp("( ?|^)"+classname+"\\b"),"");
          }
      }
 }

function HorisontalSubMenu(id)
 {
   var MenuItem=GetMenuItem();
   var classname="hover";
   if(MenuItem.length<1)
   {
     return;
   }
   for(i=0;i<MenuItem.length;i++)
    {
      MenuItem[i].className=MenuItem[i].className.replace(new RegExp("( ?|^)"+classname+"\\b"),"").replace(" menu_current","");
      if(MenuItem[i].id=="MenuItem"+id)
       {
         MenuItem[i].className+=" "+classname;
       }
      MenuItem[i].onmouseover=function(){HorisontalSubMenu(this.id.replace("MenuItem",""))};
    }
 }

function GetMenuItem()
 {
   var MenuItem;
   if(document.all)
    {
     var tagArr =document.getElementById("Menu").document.getElementsByTagName("li");
      var elements=[];
      for (var i=0; i<tagArr.length;i++)
       {
        var att=tagArr[i].getAttribute("name");if(att=="MenuItem"){elements[elements.length]=tagArr[i];}
       }
      MenuItem=elements;
    }
   else
    {
     MenuItem=document.getElementsByName("MenuItem");
    }
   return MenuItem;
 }

function nav(id) //一级导航鼠标展开
 {
    var thisobj=document.getElementById(id);
    if(thisobj==null){return;}
    var first_ul=thisobj.getElementsByTagName("ul")[0];
    if(first_ul!=null)
     {
       var dp=first_ul.style.display;
       if(dp=="none")
        {
          first_ul.style.display="block";
        }
      else
        {
          first_ul.style.display="none";
        }
     }
    if(this.url=="#")
     {
       return false;
     }
 }

function subnav(id,isroot) //导航鼠标点击时间展开
 {
    var thisobj=$("#"+id);
    if(thisobj.size()==0){return;}
    var first_ul=thisobj.children("ul");
    var first_span=thisobj.children("span");
    thisobj.siblings().children("ul").slideUp();
    thisobj.siblings().children("span.node").attr("class","node_close");
    if(first_ul.size()>0)
     {
       if(first_ul.is(":hidden"))
        {
          first_ul.slideDown();
        }
      else
        {
          first_ul.slideUp();
        }
      if(isroot){return;}
      if(first_span.attr("class")=="node")
       {
         first_span.attr("class","node_close");
       }
      else
       {
         first_span.attr("class","node");
       }
     }
 }

function shut_allsubnav(rootulid) //关闭所有导航
  {
   if(typeof(shut_subnav)=="undefined"){shut_subnav=1;}
   if(shut_subnav==0){return;}
   var rootul=document.getElementById(rootulid);
   if(rootul==null){return;}
   var child_ul=rootul.getElementsByTagName("ul");
   var child_span=rootul.getElementsByTagName("span");
   if(child_ul!=null)
   {
    for(i=0;i<child_ul.length;i++)
     {
       child_ul[i].style.display="none"
     }
   }

  if(child_span!=null)
   {
    for(i=0;i<child_span.length;i++)
     {
       if(child_span[i].className=="node")
        {
         child_span[i].className="node_close";
        }
     }
   }
  }

function expand_subnav(curentid,parentids) //根据当前sublamuid展开
  {
    if(curentid=="0"){return;}
    var c_sublanmu=document.getElementById(curentid);
    if(c_sublanmu!=null)
    {
    var child_ul=c_sublanmu.getElementsByTagName("ul");
    var first_span=c_sublanmu.getElementsByTagName("span")[0];
    if(child_ul[0]!=null)
     {
       child_ul[0].style.display="";
       if(first_span.className=="node_close" && parentids!="0")
        {
         first_span.className="node"
        }
     }
    var first_a=c_sublanmu.getElementsByTagName("a")[0];
    first_a.className=first_a.className+" current";
    }
    if(parentids=="0" || parentids==null){return}
    var Aparentids=parentids.split(",");
    var parentid;
    for(i=0;i<Aparentids.length;i++)
     {
       if(Aparentids[i]!="")
        {
          parentid="sl"+Aparentids[i];
          document.getElementById(parentid).style.display="";
          var child_ul=document.getElementById(parentid).getElementsByTagName("ul");
          var child_span=document.getElementById(parentid).getElementsByTagName("span");
          var child_a=document.getElementById(parentid).getElementsByTagName("a");
          if(child_ul.length>0){child_ul[0].style.display="";}
          if(child_a.length>0){child_a[0].className=child_a[0].className+" current";}
          if(child_span.length>0)
            {
              if(child_span[0].className=="node_close" && i>1)
               {
                child_span[0].className="node";
               }
            }
        }
     }

  }
function AddFavourites(sid,tb,Id) //收藏
 {
   var x=new PAAjax();
   x.setarg("post",true);
   var Url=location.href;
   x.send("/e/aspx/add_favo.aspx","table="+tb+"&id="+Id+"&url="+UrlEncode(Url)+"&post=add",function(v){AddFavourites_Back(sid,v)});
 }

function TongJi(s)//流量统计
 {
   var url=location.href;
   var re=/http:\/\/([^\/]+)\//i;
   var h = url.match(re);
   url=h[1];
   var referer=document.referrer;
   if(referer==null){referer=""};
   if(referer=="http://www.baidu.com/s?wd=a")
    {
      return;
    }
   var tjcookie=GetCookie("tongji");
   if(tjcookie!="1")
      {
       var x=new PAAjax();
       x.setarg("get",true);
       x.send("/e/aspx/count.aspx","referer="+UrlEncode(referer)+"&s="+s,function(v){TJCookie(v,referer)});
      }
 }

function TJCookie(v,Referer)
 {
   SetCookie("tongji","1",24*60*60);
   SetCookie("referer",Referer,24*60*60);
 }

function FontZoom(Size,Id)
 {
   var Obj=document.getElementById(Id);
   Obj.style.fontSize=Size; 
   Obj.style.lineHeight="180%"; 
 }

function ordercart(sid,Table,Id,thecolor,thesize,thetype) //产品订单界面，sid：分站点id，table:产品的数据表明，id：产品id
 {
    if(Table==null){Table="";}
    if(Id==null){Id=0;}
    if(thecolor==null){thecolor="";}
    if(thesize==null){thesize="";}
    if(thetype==null){thetype="";}
    IDialog('订购窗口',"/e/order/order.aspx?s="+sid+"&table="+Table+"&id="+Id+"&color="+thecolor+"&size="+thesize+"&type="+thetype,800,500);
 }

function exchange(sid,Table,Id) //积分兑换界面
 {
   IDialog('积分兑换窗口',"/e/order/exchange.aspx?s="+sid+"&table="+Table+"&id="+Id,550,450);
 }

function open_calendar(Id,showtime)
 {
  Id=document.getElementById(Id);
  if(showtime==1)
   {
    SelectDate(Id,'yyyy-MM-dd hh:mm:ss',80,0);
   }
 else
   {
    SelectDate(Id,'yyyy-MM-dd',80,0);
   }
 }


//改变验证码
function Code_Change(Id)
 {
  var obj=document.getElementById(Id);
  var R=Math.random();
  obj.src="/e/aspx/yzm.aspx?r="+R;
 }


function Get_Info(Table,Id)
 {
   var objclicks=document.getElementById("clicks");
   var objcomments=document.getElementById("comments");
   var objdownloads=document.getElementById("downloads");
   var objreserves=document.getElementById("reserves");
   if(objclicks==null && objcomments==null && objdownloads==null && objreserves==null)
    {
      return;
    }
  var R=Math.random();
  var x=new PAAjax();
  x.setarg("get",true);
  x.send("/e/aspx/get_info.aspx","table="+Table+"&id="+Id+"&r="+R,function(v){Write_Info(v)});
 }

function Write_Info(V)
 {
  var Av=V.split('&');
  if(Av.length==4)
   {
    var sublanmu_content=document.getElementById("sublanmu_content");
    if(sublanmu_content!=null){sublanmu_content.style.display="";}
    var clicks=Av[0].split('=')[1];
    var comments=Av[1].split('=')[1];
    var downloads=Av[2].split('=')[1];
    var reserves=Av[3].split('=')[1];

    var objclicks=document.getElementById("clicks");
    var objcomments=document.getElementById("comments");
    var objdownloads=document.getElementById("downloads");
    var objreserves=document.getElementById("reserves");
    if(objclicks!=null){objclicks.innerHTML=parseInt(clicks)+1;}
    if(objcomments!=null){objcomments.innerHTML=comments;}
    if(objdownloads!=null){objdownloads.innerHTML=downloads;}
    if(objreserves!=null){objreserves.innerHTML=reserves;}
  }
 }

function Link_Open(link,Target) //友情链接
 {
   if(link!="")
    {
      window.open(link,Target);
    }
 }
document.write("<script src=\"/e/js/function.js\" type=\"text/javascript\"></script>");
document.write("<script src=\"/e/js/dialog.js\" type=\"text/javascript\"></script>");                                                                    
document.write("<script src=\"/e/incs/pie/PIE.js\" type=\"text/javascript\"></script>");