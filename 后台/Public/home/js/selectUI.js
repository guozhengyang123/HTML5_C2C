/*
调用方式：
<div class="selectname"></div>
<script src="/e/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/e/js/selectui.js"></script>
<script type="text/javascript">
	$('.selectname').SelectUI({
                id:'objid',
		width: 150,
                height: 20,
		values : ['val1','val2','val3','val4'],
		options : ['txt1','txt2','txt3','txt4'],
		imgsrc: '/e/images/public/select_icon.gif',
                border:'1px solid #666666',
                padding:'0px 5px',
                background:'#fff'
	});
</script>
//selectname和id值每个页面必须保证唯一性
*/
(function($){
	function _SelectUI(here,options,index){
		var _this = this;
		this.$e = $(here),
		this.opts = options,
		this.index = index;
		this.init();
	}
	_SelectUI.prototype = {
		init : function(){
			var _this = this;
			var className = (_this.$e.attr('id') ? '#'+_this.$e.attr('id')+' ' : 0) || (_this.$e.attr('class') ? '.'+_this.$e.attr('class')+' ' : 0);
			var cssStr = 	'<style>'+
							className + '{position:relative; width:'+_this.opts.width+'px; z-index:3;}'+
							className + '.selectInput{position: relative;text-align:left;border:'+_this.opts.border+';padding:1px;background:'+_this.opts.background+';}'+
							className + '.selectInput span{height:'+_this.opts.height+'px;line-height:'+this.opts.height+'px;padding:'+_this.opts.padding+';display: block;cursor:pointer;overflow: hidden; border:none;}'+
							className + '.selectInput i{display:block;position: absolute; right:1px; top:0px; background: url("'+_this.opts.imgsrc+'") no-repeat center center;width:20px;height:'+_this.opts.height+'px;cursor:pointer;}'+
							className + '.selectList{position: absolute;border:'+_this.opts.border+';width:'+(_this.opts.width-4)+'px; padding:1px; margin-top:-1px;cursor: default;background:'+_this.opts.background+';z-index:3;left:0px;display:none;}'+
							className + '.selectList ul li{height:'+_this.opts.height+'px;line-height:'+_this.opts.height+'px;padding:'+_this.opts.padding+';text-align:left;cursor:pointer;overflow:hidden;}'+
							className + '.selectList ul li:hover{background:#000080; color:#fff;}'+
							className + '.selectList ul li.hover{background:#000080; color:#fff;}'+
							'</style>';
			//css插入页面				
			_this.$e.before(cssStr);
			//html代码导入
                        var _SelectedValue=(_this.opts.values[0] ? _this.opts.values[0] : "");
			var	selectStr = '<div class="selectInput">'+
								'<span>'+(_this.opts.options[0] ? _this.opts.options[0] : "")+'</span>'+
								'<i></i>'+
							'</div>'+
							'<div class="selectList">'+
								'<ul>';
			for(var i = 0; i < _this.opts.values.length; i++){
				selectStr += '<li value="'+(_this.opts.values[i] ? _this.opts.values[i] : "")+'">'+ (_this.opts.options[i] ? _this.opts.options[i] : "")+'</li>'
			}
			selectStr += '</ul></div><input type="hidden" id="'+_this.opts.id+'">';
			_this.$e.append(selectStr);
                        $("#"+_this.opts.id).val(_SelectedValue);
			_this.event();
		},
		event : function(){
			var _this = this;
			if( $.support.msie && ($.support.version == 6.0) ){
				_this.$e.find('.selectList li').hover(function(){
					$(this).addClass('hover').siblings().removeClass('hover');
				},function(){
					$(this).removeClass('hover');
				});
			}
			_this.$e.on('click','.selectInput',function(e){
				e.stopPropagation();
				_this.$e.find('.selectList').toggle();
			});
			$(document).click(function(){
				_this.$e.find('.selectList').hide();
			});
			_this.$e.find('.selectList').on('click','li',function(){
                                 liValue = $(this).attr("value");
				 liTxt = $(this).text();
                                 $("#"+_this.opts.id).val(liValue);
				_this.$e.find('.selectInput span').text(liTxt);
			});
		}
	}
	$.fn.SelectUI = function(options){
		var opts = $.extend({},$.fn.SelectUI.defaults,options);
		return this.each(function(index){
			this.SelectUI = new _SelectUI(this,opts,index);
		});
	}
	$.fn.SelectUI.defaults = {
                id:'_defaultid',
		width : 150,
                height:20,
		values : [''],
		options : ['请选择'],
		imgsrc : '',
                border:'1px solid #cccccc',
                padding:'0px 20px',
                background:'#fff'
	}
})(jQuery);

function SetSelectUI(classname,value,objid)
 {
    var $classname=$("."+classname);
    var $objid=$("#"+objid);
    if($classname.size()==0 || $objid.size()==0){return;}
    $classname.find('.selectList li').each(function(i){
       if($(this).attr("value")==value)
        {
          $classname.find('.selectInput span').text($(this).text());
          $objid.val(value);
          return false;
        }
      });
 }