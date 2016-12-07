document.write("<script src=\"/e/js/dialog.js\" type=\"text/javascript\"></script>");
var viewobj,picture,thumbnail,thumbnails,c_setInterval,RollTime,RollWidth,Direction;
function LoadImg(i)
 {
   picture=document.getElementsByName("picture");
   thumbnail=document.getElementsByName("thumbnail");
   HideAllpic();
   picture[i].style.display="block";
   thumbnail[i].className="current";
 }

function HideAllpic()
 {
  for(i=0;i<picture.length;i++)
   {
     picture[i].style.display="none";
     thumbnail[i].className=thumbnail[i].className.replace(new RegExp("( ?|^)current\\b"),"");
   }
 }



function roll(direction) 
 {
  RollTime=10;
  Direction=direction;
  c_setInterval=setInterval(startroll,RollTime);
 }

function startroll()
 {
   thumbnails=document.getElementById("thumbnails");
   RollWidth=thumbnails.scrollLeft;
   if(Direction=="left")
    {
      thumbnails.scrollLeft-=2;
      if(thumbnails.scrollLeft==0)
       {
        stoproll();
       }
    }
   else
    {
      thumbnails.scrollLeft+=2;
      if(thumbnails.scrollLeft==RollWidth)
       {
        stoproll();
       }
    }
 }

function stoproll()
 {
    clearInterval(c_setInterval);
 }
