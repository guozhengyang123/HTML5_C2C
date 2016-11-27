// JavaScript Document
$(function(){
//左侧菜单
	var LeftOpenArr=new Array()
	var Wait_S_Slide;
	
     $('.left_menu>ul>li').hover(function(){
		 $(this).addClass("current");
		 var Elem=$(this);
		 Wait_S_Slide = setTimeout(function() { 
			if(!$(Elem).children('ul').is(':visible'))
			{
				$(Elem).children('ul').slideDown(300);
			}
			
		 },500);
	 },
	 
	 function(){
		 clearTimeout(Wait_S_Slide);
		 if(!$(this).children('ul').is(':visible'))	$(this).removeClass("current");
		}
	 )
	
	$(document).mousemove(
		function(e){
			if($.inArray(e.target,$('.left_menu *'))>=0) return; 
			clearTimeout(Wait_S_Slide);
			$('.left_menu>ul>li').each(function(){
				if(!LeftOpenArr[$.inArray(this,$('.left_menu>ul>li'))]){
					//Wait_H_Slide = setTimeout(function() { 
						var Elem=$(this);
						$(this).children('ul').slideUp(200,function(){$(Elem).removeClass("current");});
					 //},500);
					}
			});
		}
	);
	
	$('.left_menu>ul>li>a').append("<span title='点击打开'></span>"); //菜单图钉
	$('.left_menu>ul>li span').click(
		function(){
			Toggle(this);
			return false;
		}
	);
	
	function Toggle(Obj)
	{
		if(!$(Obj).parent().parent().children('ul').is(':visible')){
			LeftOpenArr[$.inArray($(Obj).parent().parent()[0],$('.left_menu>ul>li'))]=true;//菜单图钉判断
			var Elem=$(Obj);
			$($(Obj).parent().parent()).children('ul').slideDown(300,function(){$(Elem).addClass("current");});
		}
		else
		{
			LeftOpenArr[$.inArray($(Obj).parent().parent()[0],$('.left_menu>ul>li'))]=false;
			var Elem=$(Obj);
			$($(Obj).parent().parent()).children('ul').slideUp(200,function(){$(Elem).removeClass("current");});
		}	

	}
	
	$('.left_menu>ul>li.current>ul').addClass("disp"); //二级栏目定位
	$('.left_menu>ul>li>ul>li.current').parent().addClass("disp");
	$('.left_menu>ul>li>ul>li.current').parent().parent().addClass("current")
	
	$('.left_menu>ul>li').each(function(){
		if($(this).is('.current')) LeftOpenArr[$.inArray($(this)[0],$('.left_menu>ul>li'))]=true; //菜单图钉初始化
	});
	
	
		
//顶部导航菜单
  $('li.mainlevel').hover(
  function(){
	  $(this).find('a:first').addClass("hover");
	  var current_li=$(this);
	  NavWaitSlide = setTimeout(function() { 
		  if(!$(current_li).children('ul').is(':visible'))
		  {
				$(current_li).find('ul').slideDown(200);
		  }
	  },100)
  },
 function(){
	  clearTimeout(NavWaitSlide);
	  $(this).find('ul').slideUp(100);
	  $(this).find('a:first').removeClass("hover");
  }
);



//新闻图片切换
    $('#pic_up').click(function(){
            $('#pic_List li:first').slideUp('fast',function(){
                $(this).appendTo('#pic_List').show();
            });

    });
	
    $('#pic_down').click(function(){
            var last = $('#pic_List li:last').slideDown('fast',function(){
                $(this).prependTo('#pic_List').show();
            });
    });
    $('#pic_List li').click(function(){
        var url = $(this).find('img').attr('rel');
        $('#pic_canvas img').attr('src',url);
        $('#pic_List li img').css({"opacity":"0.5"});
        $(this).find('img').css({"opacity":"1"});
    });
    $('#pic_List li:first').click();



//首页banner 缩进特效
$('div.notice').hide();
$('div.notice_tab').show();
			
	$('#noticeClose').click(function(){
		var $notice = $('div.notice_left');
		var leftNum = $notice.position().left;

		$notice.animate({'left': '235',"opacity":"0"}, 200,function(){
			$('div.notice').hide();
			$('div.notice_tab').show();
		});
	});
	$('div.notice_tab').click(function(){
		var $notice = $('div.notice_left');
		$('div.notice_tab').hide(0,function(){
			$('div.notice').show();
		});

		$notice.animate({'left': '0',"opacity":"0.9"}, 100,function(){

			$('div.notice_tab').hide();
		});
	});

});