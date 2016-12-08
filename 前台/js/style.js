$(function(){
	//最后一个没有边框
	$("nav dl:last,.shouyi dl:last").css("border","0");
	//.bankList li 银行选择	
	$(".bankList li").click(function(){
		$(this).addClass("banSty").siblings("li").removeClass("banSty");
		})	
	//添加银行卡	
	$(".tianjiayinhang").click(function(){
		$(".addYinhang").fadeIn();
		})	
	$(".glyphicon-remove").click(function(){
		$(".addYinhang").fadeOut();
		})	
	
	//站内信息 点击展开收起效果	
	$(".znxx dt em").click(function(){
		$(this).find("b").toggle();
		$(this).find("i").toggle();
		$(this).parents("dt").next("dd").toggle().siblings("dd").hide();
		})	
	//安全设置 手机号码下一步	
	$(".sjyz-one-next").click(function(){
		$(this).parents("form").next(".sjyz-two").show();
		$(this).parents(".sjyz-one").hide();
		$(this).parents("dd").find(".Step li:eq(1)").addClass("stepCur");
		})	
	$(".sjyz-two-next").click(function(){
		$(this).parents(".sjyz-two").hide();
		$(this).parents("form").prev(".sjyz-one").hide();
		$(this).parents("dd").find(".sjyz-ok").show();
		$(this).parents("dd").find(".Step li:eq(2)").addClass("stepCur");
		})		
	// 安全设置 点击展开收起效果	
	$(".Safety dt em").click(function(){
		$(this).parents("dt").next("dd").toggle().siblings("dd").hide();
		})			
	})
	
	
function next()
{
document.write("<a href='javascript:history.go(-1)'>后退</a>   &nbsp;&nbsp;<a href='javascript:history.go(0)'>刷新</a>&nbsp;&nbsp;<a href='javascript:history.go(1)'>前进</a>   <form>   <input name='ht' type='button' onclick='javascript:history.go(-1)' value='后退' />   <input name='sx' type='button' onclick='javascript:history.go(0)' value='刷新' />   <input name='qj' type='button' onclick='javascript:history.go(1)' value='前进' />   </form> ");
}	