var Dt=new Date();
var Y=Dt.getFullYear();
var M=Dt.getMonth()+1;
var D=Dt.getDate();
var H=Dt.getHours();
var MI=Dt.getMinutes();
var W=Dt.getDay();
var MD=M+"-"+D;
var Wek=new Array("0:星期日","1:星期一","2:星期二","3:星期三","4:星期四","5:星期五","6:星期六");
var datecontent=""+Y+"年"+M+"月"+D+"日 "+week(Wek,W);
document.write(datecontent);
function week(Wek,W)
 {
   var A;
   for(i=0;i<Wek.length;i++)
    {
      A=Wek[i].split(':');
      if(W==A[0])
       {
        return A[1];
       }
    }
 }
