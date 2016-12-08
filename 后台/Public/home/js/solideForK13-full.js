;(function($){
    $.fn.solideForK13 = function(options){
        var defaults = {
        	"name": ".slide_content", /*图片轮换id或class，垂直滚动ie6高度不准确，需要在css中另设overflow: hidden;*/
	        "l_t_btn": ".slide_lt_btn", /*左,上按钮id*/
	        "r_b_btn": ".slide_rb_btn", /*右,下按钮id*/
	        "index_name": ".index_name", /*索引id或class*/
	        "page_num": ".page_num", /*当前页数或屏书id或class*/
	        "index_way": 0, /*索引操作方式，0单个操作，以下四项起效，1鼠标拖拽,以下四项失效,slide_X只能设置0或1*/
		        "index_size": true, /*true自动计算索引ul宽高，false不计算*/
		        "index_num": true, /*数字索引,true为启用，false为关闭*/
		        "index_hover": 1, /*索引轮换方式，0为不可用，1为hover，2为click*/
		        "index_now": "index_now", /*当前索引class*/
		    "mouse_drag": false, /*鼠标内容拖拽，true开启，内容不可点击，auto_way值不能为1，false关闭*/
	        "li_count": 1, /*显示行数或一行显示个数*/
	        "page_count": true, /*true每次一屏;false每次一个，拖拽，索引不可用,auto_way值不能为1，slide_X值不能为2*/
	        "time": 500, /*动画延时*/
	        "time_auto": 5000, /*自动滚动间隔,单位毫秒，如果为0，则不自动滚动*/
	        "auto_way" : 0,  /*滚动效果，0瞬间回到第一个，1无缝回到第一个，2来回循环*/
	        "slide_X": 0 /*轮换方式，0水平，1垂直,2渐隐*/          
        }

        var options = $.extend(defaults, options);

        this.each(function(){
            /*初始化参数冲突重设*/
            if (options.slide_X == 2) {options.li_count = 1;}  /*渐隐轮换方式每屏只显示一个*/
            if (options.index_way == 1) {options.index_hover = 1;}  /*索引拖拽模式下，改变索引轮换方式为hover，以实现鼠标移上去停止*/
            if (!options.page_count) {options.mouse_drag = false;} /*如果每次轮换一个，则不可拖拽*/  

            var _name = $(this).find(options.name),
            	_nameUL = _name.children("ul"),
            	_nameLI = _nameUL.children("li");

            /*遮罩宽度和高度*/
            var solide_width = parseInt(_name.css("width")),
            	solide_height = parseInt(_name.css("height"));

            /*计算水平和垂直方向的padding margin border的和*/
            var	li_o_width = parseInt(_nameLI.css("padding-left")) +
		    				 parseInt(_nameLI.css("padding-right")) +
		    				 parseInt(_nameLI.css("margin-left")) +
		    				 parseInt(_nameLI.css("margin-right")) +
		    				 parseInt(_nameLI.css("border-left-width")) +
		    				 parseInt(_nameLI.css("border-right-width")),
	    		li_o_heigth = parseInt(_nameLI.css("padding-top")) +
		    				  parseInt(_nameLI.css("padding-bottom")) +
		    				  parseInt(_nameLI.css("margin-top")) +
		    				  parseInt(_nameLI.css("margin-bottom")) +
		    				  parseInt(_nameLI.css("border-top-width")) +
		    				  parseInt(_nameLI.css("border-bottom-width"));

		    var	li_num = _nameLI.length;  /*获取li的个数，以计算显示几屏*/

		    /*计算li的宽度和高度*/
	    	var	li_width = parseInt((solide_width - options.li_count * li_o_width) / options.li_count),
	    		li_height = parseInt((solide_height - options.li_count * li_o_heigth) / options.li_count);

	    	/*计算显示的屏数*/
	    	var	p_count = li_num % options.li_count == 0 ? parseInt(li_num / options.li_count) : parseInt(li_num / options.li_count) + 1;
	    	if (!options.page_count) {
	    		p_count = (li_num % options.li_count) + (p_count > 1 ? p_count - 1 : 0) * options.li_count + 1
	    	}

	    	/*设置默认属性*/
	    	_name.css({
				"overflow": "hidden",
				"position": "relative"
			});

			_nameUL.css({
				"position": "absolute",
				"top": "0",
				"left": "0",
				"width": function (width) {return width = options.slide_X == 0 ? solide_width * p_count + "px" : solide_width + "px"},
				"height": function (height) {return height = options.slide_X == 1 ? solide_height * p_count + "px" : solide_height + "px"}
			});

			_nameLI.css({
				"top": "0",
				"left": "0",
				"width": function (width) {return width = options.slide_X == 0 ? li_width + "px" : (solide_width - li_o_width) + "px"},
				"height": function (height) {return height = options.slide_X == 1 ? li_height + "px" : (solide_height - li_o_heigth) + "px"},
				"float": function (fl) {return fl = options.slide_X == 0 ? "left" : "none";},
				"position": function (pos) {return pos = options.slide_X == 2 ? "absolute" : "relative"}
			});

			/*轮换方式为渐隐时，显示第一个li的内容，并隐藏其余内容*/
			if (options.slide_X == 2) {_nameLI.eq(0).show().siblings().hide();}

			var ii = 0;  /*索引计数器*/

			/*插入索引*/
			var _indexUL = $(this).find(options.index_name);

			/*索引操作方式为单个操作*/
			if (_indexUL.length && options.index_way == 0 && options.page_count) {

				/*插入索引标签*/
				if (_indexUL.children("li").length == 0) {				
			    	for (var i = 0; i < p_count; i++) {
			    		options.index_num ? _indexUL.append("<li>" + (i+1) + "</li>") : _indexUL.append("<li></li>");
			    	}
		    	}
		    	else if (_indexUL.children("li").length != p_count) {
		    		alert("索引数量与轮换内容不符，请检查！");
		    	}
		    	else {
		    		options.index_size = false;
		    	}

		    	/*设置第一个索引样式*/
		    	_indexUL.children("li").first().addClass(options.index_now);

		    	/*计算并设置索引宽高*/
		    	if(options.index_size) {	
		    		var index_width = parseInt(_indexUL.children("li").css("width")) + 
		    					  parseInt(_indexUL.children("li").css("padding-left")) +
			    				  parseInt(_indexUL.children("li").css("padding-right")) +
			    				  parseInt(_indexUL.children("li").css("margin-left")) +
			    				  parseInt(_indexUL.children("li").css("margin-right")) +
			    				  parseInt(_indexUL.children("li").css("border-left-width")) +
			    				  parseInt(_indexUL.children("li").css("border-right-width")),
			    		index_height = parseInt(_indexUL.children("li").css("height")) +
			    				   parseInt(_indexUL.children("li").css("padding-top")) +
			    				   parseInt(_indexUL.children("li").css("padding-bottom")) +
			    				   parseInt(_indexUL.children("li").css("margin-top")) +
			    				   parseInt(_indexUL.children("li").css("margin-bottom")) +
			    				   parseInt(_indexUL.children("li").css("border-top-width")) +
			    				   parseInt(_indexUL.children("li").css("border-bottom-width"));

			    	if (_indexUL.children("li").css("float") == "left" || _indexUL.children("li").css("float") == "right") {
			    		_indexUL.css({
				    		"width": index_width * p_count + "px",
				    		"height": index_height + "px"
			    		});
			    	}
			    	else {
			    		_indexUL.css({
				    		"width": index_width + "px",
				    		"height": index_height * p_count + "px"
			    		});
			    	}	 	
		    	}


		    	/*索引轮换*/
				switch (options.index_hover) {
					case 0: /*索引不可操作*/
						break;
					case 1: /*hover索引*/
						var timer1; /*声明计数器，放置鼠标误操作*/
						_indexUL.children("li").mouseover(
							function(){	
								var n = $(this).index();
								timer1 = setTimeout(function () {
									ii = n;
									showImg(ii);
								},150);
							}
						);
						_indexUL.children("li").mouseout(function() {clearTimeout(timer1);});
						break;
					case 2: /*click索引*/
						_indexUL.children("li").click(
							function(){
								if (options.time_auto != 0) {
									clearInterval(timer);
									ii = $(this).index();
									showImg(ii);
									timer = setInterval(slide,options.time_auto);
								}
								else {
									ii = $(this).index();
									showImg(ii);
								}
							}
						);
						break;
				}
			}

			/*鼠标拖拽的索引模式*/
			else if (_indexUL.length && options.index_way == 1 && options.page_count) {

				var _x,_y,X1,Y1,X2,Y2,isDrag = false; 
				var li_Width,li_height;
				/*插入拖拽索引*/
				if (_indexUL.children("li").length == 0) {
					_indexUL.append("<li><div><span></span></div></li>");

					/*计算滑动块的宽高*/
			    	li_Width = parseInt(solide_width / parseInt(_nameUL.css("width")) * parseInt(_indexUL.css("width"))),
			    	li_height = parseInt(solide_height / parseInt(_nameUL.css("height")) * parseInt(_indexUL.css("height")));
				}
				else {
					li_Width = parseInt(_indexUL.children("li").css("width")) + 
		    				parseInt(_indexUL.children("li").css("padding-left")) +
			    			parseInt(_indexUL.children("li").css("padding-right")) +
			    			parseInt(_indexUL.children("li").css("border-left-width")) +
			    			parseInt(_indexUL.children("li").css("border-right-width")),
			    	li_height = parseInt(_indexUL.children("li").css("height")) +
			    			parseInt(_indexUL.children("li").css("padding-top")) +
			    			parseInt(_indexUL.children("li").css("padding-bottom")) +
			    			parseInt(_indexUL.children("li").css("border-top-width")) +
			    			parseInt(_indexUL.children("li").css("border-bottom-width"));
				}
				
			    /*计算滑动块的可移动距离*/
			    var	li_moveX = parseInt(_indexUL.css("width")) - li_Width,
			    	li_moveY = parseInt(_indexUL.css("height")) - li_height;

			    switch (options.slide_X) {
			    	case 0:  /*横向滑动*/
					    _indexUL.children("li").css("width",li_Width);
					      
					    _indexUL.children("li").mousedown(function (e) { 
					    	e = e || window.event; 
					    	X1 = e.pageX;
					        _x = e.pageX-parseInt($(this).css("left"));  
					        isDrag = true;
					        
							$(document).mousemove(function (e){ 
								if(isDrag) {
									e = e || window.event; 
									X2 = e.pageX;
								    var x = e.pageX - _x;  
								    if (x <= 0) {
								    	x = 0;
								    } 
								    else if (x >= li_moveX) {
								    	x = li_moveX;
								    }

								    _indexUL.children("li").stop(true,true).css({left: x});  
								    
								    _nameUL.stop(true,true).css({left: function (left) { return left = -x / li_moveX * (solide_width * (p_count - 1))}});
								    
									window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty(); /*禁止鼠标选中*/
								}
							}).mouseup(function (){
								isDrag = false;

								/*计算拖拽位置属于哪一屏，并产生动画过渡效果，计算出索引计数*/
								var ulLeft = Math.abs(parseInt(_nameUL.css("left")));
								if (ulLeft % solide_width != 0) {
									if ((X2 > X1 && (ulLeft % solide_width) / solide_width > 0.1) || (X2 < X1 && (ulLeft % solide_width) / solide_width > 0.9)) {
										ii = parseInt(ulLeft / solide_width) + 1;
									}
									else {
										ii = parseInt(ulLeft / solide_width);	
									}
									_nameUL.stop(true,false).animate({left: (-solide_width * ii)},options.time);
									_indexUL.children("li").stop(true,false).animate({left: ii / (p_count - 1) * li_moveX},options.time); 
								}
								else {
									/*计算鼠标拖拽到两个端点位置时的索引计数*/
									if (ulLeft == 0) {
										ii = 0;
									}
									else if (ulLeft > parseInt(_nameUL.css("width")) - solide_width * 2) {
										ii = p_count - 1;
									}
								}
							});
					    }); 
					    break;
					case 1:  /*纵向滑动*/
					    _indexUL.children("li").css("height",li_height); 
					      
					    _indexUL.children("li").mousedown(function (e) { 
					    	e = e || window.event; 
					    	Y1 = e.pageY;
					        _y = e.pageY-parseInt($(this).css("top")); 
					        isDrag = true;
					        
							$(document).mousemove(function (e){ 
								if(isDrag) {
									e = e || window.event; 
					    			Y2 = e.pageY;
								    var y = e.pageY - _y;  
								    if (y <= 0) {
								    	y = 0;
								    }
								 	else if (y >= li_moveY) {
								 		y = li_moveY;
								 	}

								    _indexUL.children("li").stop(true,true).css({top: y});  
								    
								    _nameUL.stop(true,true).css({top: function (top) { return top = -y / li_moveY * (solide_height * (p_count - 1))}});
								    
									window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty(); /*禁止鼠标选中*/
								}
							}).mouseup(function (){
								isDrag = false;

								/*计算拖拽位置属于哪一屏，并产生动画过渡效果，计算出索引计数*/
								var ulTop = Math.abs(parseInt(_nameUL.css("top")));
								if (ulTop % solide_height != 0) {
									if ((Y2 > Y1 && (ulTop % solide_height) / solide_height > 0.1) || (Y2 < Y1 && (ulTop % solide_height) / solide_height > 0.9)) {
										ii = parseInt(ulTop / solide_height) + 1;
									}
									else {
										ii = parseInt(ulTop / solide_height);	
									}
									_nameUL.stop(true,false).animate({top: (-solide_height * ii)},options.time);
									_indexUL.children("li").stop(true,false).animate({top: ii / (p_count - 1) * li_moveY},options.time); 
								}
								else {
									/*计算鼠标拖拽到两个端点位置时的索引计数*/
									if (ulTop == 0) {
										ii = 0;
									}
									else if (ulTop > parseInt(_nameUL.css("height")) - solide_height * 2) {
										ii = p_count - 1;
									}
								}
							});
					    });  
						break;
					case 2:
						alert("索引拖拽模式不支持渐隐，请将slide_X设置为0或1，或者将index_way设置为0");
						break;
			   }
			}

			/*点击按钮轮换*/

			/*左按钮或上按钮的点击事件*/
			$(this).find(options.l_t_btn).click(function() {
				_stop();

				if (options.slide_X == 2 && options.auto_way == 1 && ii <= 0) {  /*渐隐+无缝*/
					ii = p_count - 1;
				}
				else if(options.slide_X != 2 && options.auto_way == 1 && ii <= 0) {  /*水平或垂直+无缝*/
					if (_loop) {
						change(cloneUL,-solide_width * p_count,solide_width,-solide_width * p_count,_nameUL,-solide_height * p_count,solide_height,-solide_height * p_count);
					}
					else {
						change(_nameUL,-solide_width * p_count,solide_width,-solide_width * p_count,cloneUL,-solide_height * p_count,solide_height,-solide_height * p_count);
					}

					ii = p_count - 1;
				}
				else if (ii > 0) {  /*其他*/
					ii--;
				}

				showImg(ii);
				_start();
				return false;
			});

			/*右按钮或下按钮的点击事件*/
			$(this).find(options.r_b_btn).click(function() {
				_stop();

				if (options.slide_X == 2 && options.auto_way == 1 && ii >= p_count - 1) {  /*渐隐+无缝*/
					ii = 0;
				}
				else if(options.slide_X != 2 && options.auto_way == 1 && ii >= p_count - 1) {  /*水平或垂直+无缝*/
					if (_loop) {
						change(cloneUL,solide_width,-solide_width * (ii+1),solide_width,_nameUL,solide_height,-solide_height * (ii+1),solide_height);
					}
					else {
						change(_nameUL,solide_width,-solide_width * (ii+1),solide_width,cloneUL,solide_height,-solide_height * (ii+1),solide_height);
					}

					ii = 0;
				}
				else if (ii < p_count - 1) {  /*其他*/
					ii++;
				}

				showImg(ii);						
				_start();
				return false;
			});

			/*内容拖拽*/
			if (options.mouse_drag) {  /*可拖拽*/
				var _x,_y,X1,Y1,X2,Y2,isDrag = false; 

				/*拖拽内容可移动距离*/
				var ul_moveX = -solide_width * (p_count - 1);
				var ul_moveY = -solide_height * (p_count - 1);

				// _nameUL.css("z-index","-10");
				if (options.slide_X == 0 || options.slide_X == 1) {
					_nameUL.before("<div class='solideForK13_shade'>123</div>")
					var _nameUL_t = _name.find(".solideForK13_shade");
					_nameUL_t.css({
						"width": solide_width + "px",
						"height": solide_height + "px",
						"position": "absolute",
						"top": "0",
						"left": "0",
						"z-index": "9999",
						"background": "#fff",
						"opacity": "0"
					});
				}
				
				switch (options.slide_X) {
					case 0:  /*水平拖拽*/
						_nameUL_t.mousedown(function (e) { 
					    	e = e || window.event; 
					    	X1 = e.pageX;
					        _x = e.pageX-parseInt(_nameUL.css("left"));  
					        isDrag = true;
					        
							$(document).mousemove(function (e){ 
								if(isDrag) {
									e = e || window.event; 
									X2 = e.pageX;
								    var x = e.pageX - _x;  
								    if (x >= 0) {
								    	x = 0;
								    }
								 	else if (x <= ul_moveX) {
								 		x = ul_moveX;
								 	}

								    _nameUL.stop(true,true).css({left: x});  
								    _indexUL.children("li").stop(true,true).css({left: x / ul_moveX * li_moveX}); 

								    window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty(); /*禁止鼠标选中*/
								}
							}).mouseup(function (){
								isDrag = false;

								/*计算拖拽位置属于哪一屏，并产生动画过渡效果，计算出索引计数*/
								var ulLeft = Math.abs(parseInt(_nameUL.css("left")));
								if (ulLeft % solide_width != 0) {
									if ((X2 > X1 && (ulLeft % solide_width) / solide_width > 0.9) || (X2 < X1 && (ulLeft % solide_width) / solide_width > 0.1)) {
										ii = parseInt(ulLeft / solide_width) + 1;
									}
									else {
										ii = parseInt(ulLeft / solide_width);	
									}
									_nameUL.stop(true,false).animate({left: (-solide_width * ii)},options.time);
									if (options.index_way == 0) {
										_indexUL.children("li").eq(ii).addClass(options.index_now).siblings().removeClass(options.index_now);
									}
									else {
										_indexUL.children("li").stop(true,false).animate({left: ii / (p_count - 1) * li_moveX},options.time);
									}
									/*当前页码*/
									if (_page_num.length && options.page_count) {
										_page_num.empty().append("<i>" + (ii+1) + "</i>/<span>" + p_count + "</span>")
									}
								}
								else {
									/*计算鼠标拖拽到两个端点位置时的索引计数*/
									if (ulLeft == 0) {
										ii = 0;
									}
									else if (ulLeft > parseInt(_nameUL.css("width")) - solide_width * 2) {
										ii = p_count - 1;
									}
								}
							});
					    }); 
						break;
					case 1:  /*垂直拖拽*/
						_nameUL.mousedown(function (e) { 
					    	e = e || window.event; 
					    	Y1 = e.pageY;
					        _y = e.pageY-parseInt($(this).css("top"));  
					        isDrag = true;
					        
							$(document).mousemove(function (e){ 
								if(isDrag) {
									e = e || window.event; 
									Y2 = e.pageY;
								    var y = e.pageY - _y;  
								    if (y >= 0) {
								    	y = 0;
								    }
								 	else if (y <= ul_moveY) {
								 		y = ul_moveY;
								 	}

								    _nameUL.stop(true,true).css({top: y});  
								    _indexUL.children("li").stop(true,true).css({top: y / ul_moveY * li_moveY}); 

								    window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty(); /*禁止鼠标选中*/
								}
							}).mouseup(function (){
								isDrag = false;

								/*计算拖拽位置属于哪一屏，并产生动画过渡效果，计算出索引计数*/
								var ulTop = Math.abs(parseInt(_nameUL.css("top")));
								if (ulTop % solide_height != 0) {
									if ((Y2 > Y1 && (ulTop % solide_height) / solide_height > 0.9) || (Y2 < Y1 && (ulTop % solide_height) / solide_height > 0.1)) {
										ii = parseInt(ulTop / solide_height) + 1;
									}
									else {
										ii = parseInt(ulTop / solide_height);	
									}
									_nameUL.stop(true,false).animate({top: (-solide_height * ii)},options.time);
									if (options.index_way == 0) {
										_indexUL.children("li").eq(ii).addClass(options.index_now).siblings().removeClass(options.index_now);
									}
									else {
										_indexUL.children("li").stop(true,false).animate({top: ii / (p_count - 1) * li_moveY},options.time);
									}
									/*当前页码*/
									if (_page_num.length) {
										_page_num.empty().append("<i>" + (ii+1) + "</i>/<span>" + p_count + "</span>")
									}
								}
								else {
									/*计算鼠标拖拽到两个端点位置时的索引计数*/
									if (ulTop == 0) {
										ii = 0;
									}
									else if (ulTop > parseInt(_nameUL.css("height")) - solide_height * 2) {
										ii = p_count - 1;
									}
								}
							});
					    }); 
						break;
				}
			}

			/*插入当前页数*/
			var _page_num = $(this).find(options.page_num);
			if (_page_num.length && options.page_count) {
				_page_num.append("<i>" + (ii+1) + "</i>/<span>" + p_count + "</span>")
			}

			/*自动轮换*/
			var timer,  /*自动轮换计时器*/
				dir = true,  /*来回循环切换*/
				cloneUL = _nameUL.clone();  /*无缝轮换克隆显示内容*/

			/*插入克隆元素*/
			if (options.auto_way == 1 && options.slide_X != 2) {
				_nameUL.after(cloneUL);

				switch (options.slide_X) {
					case 0:
						cloneUL.css("left",solide_width);
						break;
					case 1:
						cloneUL.css("top",solide_height);
						break;
				}
				
			}

			var _loop=true;  /*原始内容与克隆内容位置切换*/

			/*滚动效果函数*/
			function slide() {
				switch (options.auto_way) {
					case 0:  /*瞬间回到第一个*/
						ii >= p_count - 1 ? ii = 0 : ii++;
						break;
					case 1:  /*无缝轮换*/
						if (ii >= p_count - 1) {

							if (_loop) {
								change(cloneUL,solide_width,-solide_width * (ii+1),solide_width,_nameUL,solide_height,-solide_height * (ii+1),solide_height);
							}
							else {
								change(_nameUL,solide_width,-solide_width * (ii+1),solide_width,cloneUL,solide_height,-solide_height * (ii+1),solide_height);
							}
							ii = 0;
						}
						else {
							ii++;
						}

						break;
					case 2:  /*来回循环*/
						if (ii >= p_count - 1) {
							dir = false
						}
						else if (ii <= 0) {
							dir = true
						}
						dir == true ? ii++ : ii--;
						break;

					default: return;
				}

				showImg(ii);
			}

			if (options.time_auto != 0) {
				/*开始自动轮换*/
				timer = setInterval(slide,options.time_auto);

				/*自动轮换时，鼠标移到内容上时轮换停止，移出时恢复*/
				_nameLI.hover(
					function(){clearInterval(timer);},
					function(){timer = setInterval(slide,options.time_auto);}
				);

				/*如果索引操作方式为hover时，鼠标移上去时轮换停止，移出恢复*/
				if (options.index_hover == 1 && (!options.mouse_drag)) {
					_indexUL.children("li").hover(
						function(){clearInterval(timer);},
						function(){timer = setInterval(slide,options.time_auto);}
					);
				}

				/*如果任溶可拖拽时，鼠标移上去时轮换停止，移出恢复*/
				if (options.mouse_drag) {
					_name.find(".solideForK13_shade").hover(
						function(){clearInterval(timer);},
						function(){timer = setInterval(slide,options.time_auto);}
					);
				}
			}

			/*图片轮换动画函数*/
			function showImg(i){
				var move_width = options.page_count ? solide_width : li_width + li_o_width,
					move_height = options.page_count ? solide_height : li_height + li_o_heigth;
				/*内容轮换*/
				switch (options.slide_X) {
					case 0:  /*横向滚动*/
						slide_c.stop(true,false).animate({left: (-move_width * i)},options.time);
						break;
					case 1:  /*纵向滚动*/
						slide_c.stop(true,false).animate({top: (-move_height * i)},options.time);
						break;
					case 2:  /*渐隐*/
						_nameLI.stop(true,false).fadeOut(options.time).eq(i).fadeIn(options.time);
						break;
				}

				/*索引轮换*/
				if (_indexUL.length) {
					switch (options.index_way) {
						case 0:  /*索引操作方式为单个操作时*/
							_indexUL.children("li").eq(i).addClass(options.index_now).siblings().removeClass(options.index_now);
							break;
						case 1:  /*索引操作方式为拖拽时*/
							if (options.slide_X == 0) {
								_indexUL.children("li").stop(true,false).animate({left: i / (p_count - 1) * li_moveX},options.time);
							}
							else if (options.slide_X == 1) {
								_indexUL.children("li").stop(true,false).animate({top: i / (p_count - 1) * li_moveY},options.time);
							}
							break;
					}	
				}

				/*当前页码*/
				if (_page_num.length && options.page_count) {
					_page_num.empty().append("<i>" + (ii+1) + "</i>/<span>" + p_count + "</span>")
				}
			}

			/*无缝切换函数，原内容与克隆内容互换*/
			var slide_c = _nameUL;
			function change (dom1,dom1A,dom1B,dom1C,dom2,dom2A,dom2B,dom2C) {

				switch (options.slide_X) {
					case 0:
						dom1.css("left",dom1A);
						dom2.stop(true,true).animate({left: dom1B},options.time,function () {$(this).css("left",dom1C);});
						break;
					case 1:
						dom1.css("top",dom2A);
						dom2.stop(true,true).animate({top: dom2B},options.time,function () {$(this).css("top",dom2C);});
						break;
					case 2:
						break;
				}
				slide_c = dom1;
				_loop = (!_loop);
			}

			/*停止轮换*/
			function _stop () {
				if (options.time_auto != 0) {clearInterval(timer);}
			}

			/*开始轮换*/
			function _start () {
				if (options.time_auto != 0) {timer = setInterval(slide,options.time_auto);}
			}

        });
    }
})(jQuery);