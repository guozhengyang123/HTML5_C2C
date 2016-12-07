var shut_subnav=0;//默认不影藏二级子栏目;
$(document).ready(function(){
  var TouchEvent="touchstart";
  if(IsPC()){TouchEvent="click"}
  var $Menu=$("#Menu");
  if($Menu.size()==0){return;}
  var $top_box=$(".top_box");
  var MenuShow=0;
  $top_box.prepend("<header class=\"header_bar\"><a class=\"mobile_home_icon\" href=\"/\"><i class=\"iconfont\">&#xf029d;</i></a><a class=\"mobile_search_icon\" href=\"#\"><i class=\"iconfont\">&#xf012c;</i></a><a class=\"mobile_menu_icon\" id=\"mobile_menu_icon\"><i class=\"open iconfont\">&#xf0025;</i><i class=\"close iconfont\">&#xf0170;</i></a></header>");
  $Menu.prepend("<div class=\"mobile_arrow\" ><span class=\"arrow\"></span></div>");
  $("#mobile_menu_icon").on(TouchEvent,function(){
     hidesubmenu();
     if(MenuShow==0){MenuShow=1;}
     else{MenuShow=0;}
     $Menu.slideToggle();
     AddMenuIconClass();
     event.stopPropagation();
   });
 var $current_location=$(".current_location");
 var $main_box_inner_left=$(".main_box_inner_left");
 if($current_location.size()==1)
  {
    //$main_box_inner_left.css({"height":$(document).height()+"px"});
    $current_location.prepend("<span id=\"mobile_sublanmu_icon\" class=\"mobile_sublanmu_icon\"><i class=\"iconfont\">&#xf0141;</i></span>");
    var $mobile_sublanmu_icon=$("#mobile_sublanmu_icon");
    $mobile_sublanmu_icon.on(TouchEvent,function(){
    if($main_box_inner_left.css("marginLeft")=="0px")
      {
      $main_box_inner_left.animate({marginLeft:"-"+$main_box_inner_left.css("width")});
      }
     else
      {
        $main_box_inner_left.animate({marginLeft:"0px"});
      }
     $(this).blur();
     event.stopPropagation();
   });
  }

 if($("#sublanmu_box").size()!=0)
  {
    $("#sublanmu_box").on(TouchEvent,function(){hideallmenu();});
  }
 if($top_box.size()!=0)
  {
   $top_box.on(TouchEvent,function(){hidesubmenu();});
  }
 if($(".nav_title").size()!=0)
  {
   $(".nav_title").on(TouchEvent,function(){hidesubmenu();});
  }
 if($(".main_box_inner").size()!=0)
  {
    $(".main_box_inner").on(TouchEvent,function(){hidemainmenu();});
  }
 if($(".bottom_box").size()!=0)
  {
    $(".bottom_box").on(TouchEvent,function(){hideallmenu();});
  }
 function hideallmenu(event)
  {
    if($Menu.css("display")=="block")
    {
      MenuShow=0;
      $Menu.slideUp();
      AddMenuIconClass();
    }
    if($main_box_inner_left.size()!=0)
     {
      $main_box_inner_left.animate({marginLeft:"-"+$main_box_inner_left.css("width")});
     }
   //event.preventDefault();
  }
 function hidemainmenu(event)
  {
    if($Menu.css("display")=="block")
    {
      MenuShow=0;
      $Menu.slideUp();
      AddMenuIconClass();
    }
  }
 function hidesubmenu(event)
  {
    if($main_box_inner_left.size()!=0)
     {
      $main_box_inner_left.animate({marginLeft:"-"+$main_box_inner_left.css("width")});
     }
   //event.preventDefault();
  }
 var $mobile_menu_icon=$("#mobile_menu_icon");
 function AddMenuIconClass()
  {
    if(MenuShow==1)
    {
      $mobile_menu_icon.addClass("mobile_menu_icon_hover");
    }
   else
    {
      $mobile_menu_icon.removeClass("mobile_menu_icon_hover");
    }
  }

  window.onorientationchange=function()
   {
     hideallmenu();
   }
});


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