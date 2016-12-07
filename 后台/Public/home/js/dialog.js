document.write("<script src=\"/e/incs/dialog/popup.js?skin=default\" type=\"text/javascript\"></script>");
function IDialog(title,url,width,height,scroll) //iframe弹出层,width和height支持百分比字符
 {
   if(typeof(scroll)=="undefined")
   {
     scroll="auto";
   }
  ShowIframe(url,PercenToNumber(width,"width"),PercenToNumber(height,"height"),title,scroll);
 }
function CloseDialog(back) //关闭弹出层
 {
   ClosePop();
   if(typeof(back)!="undefined")
   {
     if(back=="refresh")
      {
        location.reload();
      }
     else
      {
       eval(back);
      }
   }
 }