
var Image=new Array();
var Pics="/e/images/diy/1.jpg|/e/images/diy/2.jpg|/e/images/diy/4.jpg";
var Links="#|#|#";
var Titles="";
var Alts="";
var Apic7=Pics.split('|');
var ALink7=Links.split('|');
var ATitle7=Titles.split('|');
var AAlts7=Alts.split('|');
var Show_Text=0;
var Total_Item=Apic7.length;
for(i=0;i<Total_Item;i++)
  {
   Image.src = Apic7[i]; 
  }







 var speed_7=3500;
 var slide_currentitem_7=0; 
 var Title="",Link="";
 var slide_Time_7;
function LoadSlideBox_7()
{
SlideHtml='<a href="#" id="slide_link_7" target="_self"><img class="slide_image" style="display:block;filter:revealTrans(duration=1,transition=20);display:none;border:0px solid #eeeeee;width:680px;height:300px"  name="slide_pic_7" id="slide_pic_7"></a>';
SlideHtml+='<ul  class="slide_item" style="display:">';
for(i=0;i<Total_Item;i++)
  {
    SlideHtml+='<li id="slide_num_7_'+i+'" onclick="Change_Num_7('+i+')">'+(i+1)+'</li>';
  }
SlideHtml+='</ul>';
document.write("<div id='slide_box_7' class='slide_box' style='width:680px;height:300px'>"+SlideHtml+"</div><div style='width:680px;text-align:center;display:none' id='slide_title_7'></div>");
document.images["slide_pic_7"].src=Apic7[0];
document.images["slide_pic_7"].alt=AAlts7[0];
document.images["slide_pic_7"].style.display="inline";


Title="<a href='"+ALink7[0]+"' class='slide_title' target='_self'>"+ATitle7[0]+"</a>";
document.getElementById("slide_link_7").href=ALink7[0];
if(Show_Text=="1")
 {
  document.getElementById("slide_title_7").style.display="";
  document.getElementById("slide_title_7").innerHTML=Title;
 }


document.getElementById("slide_num_7_0").className="current";
slide_Time_7=setInterval(nextAd_7,speed_7);
document.getElementById("slide_box_7").onmouseover=function() {clearInterval(slide_Time_7)}
document.getElementById("slide_box_7").onmouseout=function() {slide_Time_7=setInterval(nextAd_7,speed_7)}

}

function setTransition_7()
{
  if (document.all)
   {
     document.images["slide_pic_7"].filters.revealTrans.Transition=23;
     document.images["slide_pic_7"].filters.revealTrans.apply();
   }
}


function playTransition_7()
{
  if(document.all)
  document.images["slide_pic_7"].filters.revealTrans.play()
}


function Control_Num_7(Currentnum)
 {
  for(i=0;i<Apic7.length;i++)
  {
   document.getElementById("slide_num_7_"+i).className="";
  }
  document.getElementById("slide_num_7_"+Currentnum).className="current";
 }

function Change_Num_7(Currentnum)
 {
  for(i=0;i<Total_Item;i++)
  {
   document.getElementById("slide_num_7_"+i).className="";
  }
  document.getElementById("slide_num_7_"+Currentnum).className="current";
  slide_currentitem_7=Currentnum;
  ShowFocus_7(Currentnum);
 }

function nextAd_7()
{
  if(Apic7.length<=1)
   {
     clearInterval(slide_Time_7);
     return;
   }

  if(slide_currentitem_7<Apic7.length-1)
    {
      slide_currentitem_7++;
    }
  else 
   {
     slide_currentitem_7=0;
   }
 ShowFocus_7(slide_currentitem_7);
}


function ShowFocus_7(slide_currentitem_7)
 {
  if(ATitle7.length>slide_currentitem_7)
   {
     if(ALink7.length>slide_currentitem_7)
      {
       Title="<a href='"+ALink7[slide_currentitem_7]+"' class='slide_title' target='_self'>"+ATitle7[slide_currentitem_7]+"</a>";
      }
     else
      {
       Title=ATitle7[slide_currentitem_7]; 
      }
   }
  else
   {
       Title=""; 
   }

  if(ALink7.length>slide_currentitem_7)
   {
      Link=ALink7[slide_currentitem_7];
   }
  else
   {
      Link="#";
   }

  document.getElementById("slide_link_7").href=Link;
  document.getElementById("slide_title_7").innerHTML=Title;

  setTransition_7();
  document.images["slide_pic_7"].src=Apic7[slide_currentitem_7];
  document.images["slide_pic_7"].alt=AAlts7[slide_currentitem_7];
  document.getElementById("slide_title_7").innerHTML=Title;
  playTransition_7();
  Control_Num_7(slide_currentitem_7);
 }

LoadSlideBox_7();