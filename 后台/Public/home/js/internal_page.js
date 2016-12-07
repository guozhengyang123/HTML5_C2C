var InnerPage,PageHtml,TheContent,A_TheContent;
var currentPage=0;
var pagecount=0;
var P=6; //表示开始时显示的页码总数
var M=3; //超过p页后左右两边显示页码数
var LastPage;
function Build_InnerPage()
 {
   PageHtml="";
  if(currentPage<P)
   {
     LastPage=P;
     if(LastPage>pagecount)
     {
       LastPage=pagecount;
     }
     for(i=1;i<=LastPage;i++)
      {
      if(currentPage==i)
        {
         PageHtml+=" <span class='c'>"+i+"</span>";
        }
       else
       {
        PageHtml+=" <a href='javascript:page("+i+")'>"+i+"</a>";
       }
     }
   } 
  else
   {
     LastPage=currentPage+M;
     if(LastPage>pagecount)
     {
       LastPage=pagecount;
     }
     for(i=currentPage-M;i<=LastPage;i++)
      {
      if(currentPage==i)
        {
         PageHtml+=" <span class='c'>"+i+"</span>";
        }
       else
       {
        PageHtml+=" <a href='javascript:page("+i+")'>"+i+"</a>";
       }
     }

   }

    if(currentPage>1)
    {
     PageHtml=" <a href='javascript:page(1)'>首页</a> <a href='javascript:page("+(currentPage-1)+")'>上一页</a>"+PageHtml;
    }
   if(currentPage>=1 && currentPage<pagecount)
    {
     PageHtml+=" <a href='javascript:page("+(currentPage+1)+")'>下一页</a> <a href='javascript:page("+(pagecount)+")'>尾页</a>";
    }
  InnerPage.innerHTML=PageHtml+" <span>页次："+currentPage+"/"+pagecount+"</span>";
 }

function page(j)
{ 
 currentPage=j;
 document.documentElement.scrollTop=0;
 ContentObj.innerHTML=A_TheContent[currentPage-1];
 Build_InnerPage();
}

var ContentObj=document.getElementById("Content");
if(ContentObj!=null)
{
  TheContent=ContentObj.innerHTML;
  //A_TheContent=TheContent.split(/<div style=\"page-break-after:\s*always;*\"><span style=\"display:\s*none;*\">&nbsp;<\/span><\/div>/i);
  A_TheContent=TheContent.split(/<hr\s*style=\"page-break-after:\s*always[;]?"\s*class=[\"]?ke-pagebreak[\"]?>/i);
  pagecount=A_TheContent.length;
  if(A_TheContent.length>1)
  {
    document.write('<div class="sublanmu_page" id="InnerPage" align="center"></div>');
    InnerPage=document.getElementById("InnerPage");
    page(1);
  }
}

