/**************************************************
 * 用法：<img src="1.jpg" class="zoom" big="1.jpg">
 <script>zoom({width:300,height:300});</script> width,height是放大显示的区域

 **************************************************/

//定义所有的变量，方法
var zoom = function(o){
	var d = document,
	db=document.body,
	timgs=d.getElementsByTagName('img'),
	opt = {
		width:200,
		height:200,
		offset:20,
		float:'right',
		minWidth:100
	    },
   	div = d.createElement('div'),
   	divup = d.createElement('div'),
	//获取元素的定位,x,y
   	getXY = function(el){
	var r={t:0,l:0},
		ua = navigator.userAgent.toLowerCase(),
		add = function(t,l){r.l+=l,r.t+=t},
		p = el;
		if(el&&el!=db){
		//el.getBoundingClientRect,获得元素的左，上，右和下分别相对浏览器视窗的位置
		if(el.getBoundingClientRect){
		var b = el.getBoundingClientRect();
		add(b.top + Math.max(d.body.scrollTop,d.documentElement.scrollTop),
			b.left+Math.max(d.body.scrollLeft,d.documentElement.scrollLeft));
		add(-d.documentElement.clientTop,-d.documentElement.clientLeft);
			 }else{
				while(p){
					add(p.offsetTop,p.offsetLeft);
					p = p.offsetParent;
				}
				p = el.parentNode;
				while (p && p != db) {
					add(-p.scrollTop,-p.scrollLeft);
					p = p.parentNode;
				}
			}
		}
   		return r;
   	},
	//重新设置div的宽高
   	extend = function(t,s){
	  	for(var p in s){
		t[p] = s[p];
		};
   	};
   
   	div.id='zoomdiv',divup.id = 'zoomup';
   	div.innerHTML = '<img id="bigimg" src="" />';
   	db.appendChild(div);
   	extend(opt,o);
   	function leave(obj,e){
		var e=e||event;
		/*alert(obj);
		alert(e.currentTarget);*/
		//火狐，opera专用，e.currentTarget是火狐，opera专用的属性
		if (e.currentTarget) {
			//relatedTarget对于 mouseout 事件来说，该属性是离开目标时，鼠标指针进入的节点。
			//e.relatedTarget != obj，当移入子元素的时候，会出现相等
			if (e.relatedTarget != obj) {
				if (obj != e.relatedTarget.parentNode) {
					div.style.display = divup.style.display = 'none';
					db.onmousemove = null;
				}
			}
		} else {//ie专用
			if (e.toElement != obj) {
				if (obj != e.toElement.parentNode) {
					div.style.display = divup.style.display = 'none';
					db.onmousemove = null;
				}
			}
		}
   		};
		
   	for(var i=0,ci;ci=timgs[i++];){
    	if(ci.className=='zoom'){
    		ci.onmouseover = function(e){
     			this.parentNode.appendChild(divup);
     			var bimg=d.getElementById('bigimg'),bwidth,bheight,sx,sy,
       			width = this.offsetWidth,
				height = this.offsetHeight,
				top=getXY(this).t,
				left = getXY(this).l,
				tWidth,tLeft,sWidth;
				//当鼠标移过的时候，开始载入大图
                bimg.src = this.getAttribute('big');
					
				if(!bimg.complete){
					bimg.onload=showBimg;
				}else{
					showBimg();
					}
      			function showBimg(){
                    div.style.display = 'block';
                    bwidth = bimg.width,
					bheight = bimg.height,
       				sx = bwidth/width,sy = bheight/height;
                    tLeft =opt.float=='right'?opt.offset+width+left:left-opt.offset-opt.width,			
                    sWidth = window.innerWidth||(d.documentElement.clientWidth);
					//如果浏览器宽度不够，则自动适应显示div的宽度
                    if(tLeft+opt.width+5>sWidth){
                        tWidth = sWidth - 5 - tLeft;
						//此句式比较特殊
                        tWidth<opt.minWidth&&(tLeft = left-opt.offset-opt.width,tWidth=0);
                        };
					//设置div,divup的宽高和位置
                    extend(div.style,{
        				left:tLeft +'px',
        				top:top+'px',
        				width:(tWidth||opt.width)+'px',
       					height:opt.height+'px'
       					});
       				extend(divup.style,{
						width:(tWidth||opt.width)/sx+'px',
						height:opt.height/sy+'px',
                       	display:'block'
      					});
       				db.onmousemove = function(e){
						var e = e || event,
						//显示非IE的鼠标位置，然后是IE的
						x=e.pageX||(e.clientX+(d.documentElement.scrollLeft||db.scrollLeft)),
						y=e.pageY||(e.clientY+(d.documentElement.scrollTop||db.scrollTop)),
						//X,Y相对于原始图片的位置
						scrolly = y - divup.offsetHeight/2 - top,
						scrollx = x - divup.offsetWidth/2 - left;
						//如果鼠标接近边界的时候，相对位置将不再随鼠标发生变化

						scrolly = y - divup.offsetHeight/2 < top ? 0 : y + divup.offsetHeight/2>height+top ? height - divup.offsetHeight  : scrolly;
						scrollx = x - divup.offsetWidth/2 < left ? 0 : x + divup.offsetWidth/2>width+left ? width - divup.offsetWidth  : scrollx;
						div.scrollTop = scrolly*sy;
						div.scrollLeft =  scrollx*sx;
						extend(divup.style,{top:scrolly+'px',left:scrollx+'px'});
       				}
      			};
     		};
		ci.parentNode.onmouseout =function(event){leave(this,event)};
    	}
 	 };    
}