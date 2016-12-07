
function h_scroll(Id) //手机横向滑动效果
 {
   var startX=0,endX=0;
   var $obj=$("#"+Id);
   var $objdl=$obj.children("dl");
   var $objdd=$objdl.children("dd");
   var $objimg=$objdd.find("img.fullscreen");
   var ItemWidth=$objdd.css("width").replace("px","");
   var nums=$objdd.size();
   $objdd.css("width",ItemWidth+"px");
   $objdl.css("width",ItemWidth*nums+"px");
   var panelhtml="";
   for(i=0;i<nums;i++)
   {
     panelhtml+="<span></span>";
    }
   panelhtml="<div class='panel'>"+panelhtml+"</div>";
   $obj.prepend(panelhtml);
   var $baritem=$obj.children("div.panel").children("span");
   $baritem.eq(0).addClass("current");
  if(!IsPC())
  {
   $obj.touch({
     Left: function() {ShowNum(currentnum+1);},
     Right: function() {ShowNum(currentnum-1); },
     Up: function() {},
     Down: function() {},
     min_x: 40,
     min_y: 40,
   });
   }
   var currentnum=0;
   function ShowNum(num) 
    {
      if(num<0){return;num=nums-1;}
      if(num>(nums-1)){return;num=0;}
      $baritem.eq(currentnum).removeClass("current");
      $objdl.animate({marginLeft:(-1*num*ItemWidth)+'px'});
      $baritem.eq(num).addClass("current");
      currentnum=num;
      event.preventDefault();
    };
  
   var ITimes=5000;
   //var it=setInterval(function(){ShowNum(currentnum+1)},ITimes);
   $obj.mouseenter(function(){
        //clearInterval(it);
    });
   $obj.mouseleave(function(){
       //it=setInterval(function(){ShowNum(currentnum+1)},ITimes);
    });

  $(window).resize(function(){
    ItemWidth=parseInt($(document).width());
    var $h_scroll=$(".h_scroll");
    if($h_scroll.size()==0){return;}
    $h_scroll.children("dl").css("width",ItemWidth*nums+"px");
    $h_scroll.children("dl").children("dd").css("width",ItemWidth+"px");
    $objdl.css({marginLeft:(-1*currentnum*ItemWidth)+'px'});
   });

  $baritem.each(function(i){
    $(this).click(function(){
       ShowNum(i);
    });
  });
 }

$(function(){
     var TouchEvent="touchstart";
     if(IsPC()){TouchEvent="click"}    
     var icon='<a class="gotoptop_icon" id="gotoptop_icon" href="javascript:void(0)"><i class="iconfont">&#xf02ef;</i></a>';
     $(".bottom_box").append(icon);
     var $window=$(window);
     var $gotoptop_icon=$("#gotoptop_icon");
     var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'); // opera fix
     $(window).on('scroll resize',function(){
        if($window.scrollTop()>0)
         {
          $gotoptop_icon.show();
         }
        else
         {
          $gotoptop_icon.hide();
         }
     });
     $gotoptop_icon.on(TouchEvent,function(){
        $body.animate({scrollTop:'0px'});
         return false;
     });
});