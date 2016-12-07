1 
var Url=location.href; 

var Adv_range="1";
function newwindow_6()
 {
  window.open("/e/aspx/adv_new.aspx?id=6","newwindow6","left=50,top=100");
 }

if(Url.indexOf("/e/")<0) 
  {
    if(Adv_range=="2")
     {
       newwindow_6();
     }
    else
     {
       if(IsPageHome=="1")
        {
          newwindow_6();
        }
     }
 }





