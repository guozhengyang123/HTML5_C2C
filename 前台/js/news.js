// JavaScript Document
function getObject(o){
    if (!getObject) { return null; };
    o = (typeof o == 'string') ? document.getElementById(o) : o;
    return o;
}
if (typeof photolist != 'function'){
    var photolist=function (){
        var a;
        var img;
        var title;
    }
}
var plist=getObject("photolists");
plist.style.display='none';
var Photos=new Array();
var Num=0;
if(plist){
    var n=plist.getElementsByTagName("p");
    for (var i=0;i<n.length;i++){
        var p=new photolist();
        p.a=n[i].getElementsByTagName("A")[0];
        p.img=n[i].getElementsByTagName("IMG")[0];
        p.title=p.a.innerHTML;
        if(p.a&&p.img&&p.title){
            Photos[Num]=p;Num++;
        }
    }
    var focus_photo_nav=getObject("focus_photo_nav");
    for (var i=1;i<Photos.length+1;i++){
        var y=document.createElement("a");
        y.appendChild(document.createTextNode(i));
        y.id="xxjdjj"+i;
        y.className="axx";
        y.target="_self";
        y.href="javascript:changeimg("+i+");";
        focus_photo_nav.appendChild(y);
    }
}
var nn=1; //当前所显示的滚动图
var key=0; //标识是否为第一次开始执行
var tt; //标识作用

function change_img()
{
    if(key==0){key=1;} //如果第一次执行KEY=1，表示已经执行过一次了。
    else if(document.all)//document.all仅IE6/7认识，firefox不会执行此段内容
    {
        getObject("focus_photo_pic").filters[0].Apply(); //将滤镜应用到对像上
        getObject("focus_photo_pic").filters[0].Play(duration=2); //开始转换
        getObject("focus_photo_pic").filters[0].Transition=23;//转换效果
    }

    getObject("focus_photo_pic").src=Photos[nn-1].img.src; //替换图片
    getObject("focus_photo_url").href=Photos[nn-1].a.href; //替换URL
    getObject("focus_title_url").href=Photos[nn-1].a.href; //替换URL
    getObject("focus_title_url").innerHTML=Photos[nn-1].title; //替换title

    for (var i=1;i<=Num;i++){
        getObject("xxjdjj"+i).className='axx'; //将下面黑条上的所有链接变为未选中状态
    }
    getObject("xxjdjj"+nn).className='bxx'; //将当前页面的ID设置为选中状态
    nn++;
    if(nn>Num){nn=1;} //如果ID大于总图片数量。则从头开始循环
    tt=setTimeout('change_img()',7000); //在4秒后重新执行change_img()方法.
}
function changeimg(n)//点击黑条上的链接执行的方法。
{
    nn=n; //当前页面的ID等于传入的N值,
    window.clearInterval(tt); //清除用于循环的TT
    //重新执行change_img();但change_img()内所调用的图片ID已经在此处被修改,会从新ID处开始执行.
    change_img();
}
//开始执行滚动操作
change_img();
