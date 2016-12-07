
var Image=new Array();
var Pics="/e/upload/s1/article/image/2011-05/t-c-1.jpg|/e/upload/s1/article/image/2011-05/t-c-1.gif|/e/upload/s1/article/image/2011-05/t-c-27092733.gif|/e/upload/s1/article/image/2011-05/t-c-27100611.gif";
var Links="/index.aspx?lanmuid=63&sublanmuid=547&id=405|/index.aspx?lanmuid=63&sublanmuid=547&id=406|/index.aspx?lanmuid=63&sublanmuid=547&id=407|/index.aspx?lanmuid=63&sublanmuid=547&id=408";
var Titles="红色政府网站模板专业版|深蓝色政府网站模板|深蓝色政府网站模板|深蓝色政府网站模板";
var Alts="红色政府网站模板专业版|深蓝色政府网站模板|深蓝色政府网站模板|深蓝色政府网站模板";
var Apic11=Pics.split('|');
var ALink11=Links.split('|');
var ATitle11=Titles.split('|');
var AAlts11=Alts.split('|');
var Show_Text=1;
var Total_Item=Apic11.length;
for(i=0;i<Total_Item;i++)
  {
   Image.src = Apic11[i]; 
  }







 var speed_11=3500;
 var slide_currentitem_11=0; 
 var Title="",Link="";
 var slide_Time_11;
function LoadSlideBox_11()
{
SlideHtml='<a href="#" id="slide_link_11" target="_self"><img class="slide_image" style="display:block;filter:revealTrans(duration=1,transition=20);display:none;border:0px solid ;width:190px;height:150px"  name="slide_pic_11" id="slide_pic_11"></a>';
SlideHtml+='<ul  class="slide_item" style="display:">';
for(i=0;i<Total_Item;i++)
  {
    SlideHtml+='<li id="slide_num_11_'+i+'" onclick="Change_Num_11('+i+')">'+(i+1)+'</li>';
  }
SlideHtml+='</ul>';
document.write("<div id='slide_box_11' class='slide_box' style='width:190px;height:150px'>"+SlideHtml+"</div><div style='width:190px;text-align:center;display:none' id='slide_title_11'></div>");
document.images["slide_pic_11"].src=Apic11[0];
document.images["slide_pic_11"].alt=AAlts11[0];
document.images["slide_pic_11"].style.display="inline";


Title="<a href='"+ALink11[0]+"' class='slide_title' target='_self'>"+ATitle11[0]+"</a>";
document.getElementById("slide_link_11").href=ALink11[0];
if(Show_Text=="1")
 {
  document.getElementById("slide_title_11").style.display="";
  document.getElementById("slide_title_11").innerHTML=Title;
 }


document.getElementById("slide_num_11_0").className="current";
slide_Time_11=setInterval(nextAd_11,speed_11);
document.getElementById("slide_box_11").onmouseover=function() {clearInterval(slide_Time_11)}
document.getElementById("slide_box_11").onmouseout=function() {slide_Time_11=setInterval(nextAd_11,speed_11)}

}

function setTransition_11()
{
  if (document.all)
   {
     document.images["slide_pic_11"].filters.revealTrans.Transition=23;
     document.images["slide_pic_11"].filters.revealTrans.apply();
   }
}


function playTransition_11()
{
  if(document.all)
  document.images["slide_pic_11"].filters.revealTrans.play()
}


function Control_Num_11(Currentnum)
 {
  for(i=0;i<Apic11.length;i++)
  {
   document.getElementById("slide_num_11_"+i).className="";
  }
  document.getElementById("slide_num_11_"+Currentnum).className="current";
 }

function Change_Num_11(Currentnum)
 {
  for(i=0;i<Total_Item;i++)
  {
   document.getElementById("slide_num_11_"+i).className="";
  }
  document.getElementById("slide_num_11_"+Currentnum).className="current";
  slide_currentitem_11=Currentnum;
  ShowFocus_11(Currentnum);
 }

function nextAd_11()
{
  if(Apic11.length<=1)
   {
     clearInterval(slide_Time_11);
     return;
   }

  if(slide_currentitem_11<Apic11.length-1)
    {
      slide_currentitem_11++;
    }
  else 
   {
     slide_currentitem_11=0;
   }
 ShowFocus_11(slide_currentitem_11);
}


function ShowFocus_11(slide_currentitem_11)
 {
  if(ATitle11.length>slide_currentitem_11)
   {
     if(ALink11.length>slide_currentitem_11)
      {
       Title="<a href='"+ALink11[slide_currentitem_11]+"' class='slide_title' target='_self'>"+ATitle11[slide_currentitem_11]+"</a>";
      }
     else
      {
       Title=ATitle11[slide_currentitem_11]; 
      }
   }
  else
   {
       Title=""; 
   }

  if(ALink11.length>slide_currentitem_11)
   {
      Link=ALink11[slide_currentitem_11];
   }
  else
   {
      Link="#";
   }

  document.getElementById("slide_link_11").href=Link;
  document.getElementById("slide_title_11").innerHTML=Title;

  setTransition_11();
  document.images["slide_pic_11"].src=Apic11[slide_currentitem_11];
  document.images["slide_pic_11"].alt=AAlts11[slide_currentitem_11];
  document.getElementById("slide_title_11").innerHTML=Title;
  playTransition_11();
  Control_Num_11(slide_currentitem_11);
 }

LoadSlideBox_11();