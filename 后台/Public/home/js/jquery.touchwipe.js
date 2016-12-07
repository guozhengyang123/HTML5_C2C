/**
 * jQuery Plugin to obtain touch gestures from iPhone, iPod Touch and iPad, should also work with Android mobile phones (not tested yet!)
 * Common usage: wipe images (left and right to show the previous or next image)

$("#id").touch({
     Left: function() { alert("left"); },
     Right: function() { alert("right"); },
     Up: function() { alert("up"); },
     Down: function() { alert("down"); },
     min_x: 40,
     min_y: 40,
});

 */
(function($) { 
   $.fn.touch = function(settings) {
     var config = {
 		Left: function() { },
 		Right: function() { },
 		Up: function() { },
 		Down: function() { },
    		min_x: 20,
    		min_y: 20
	 };
     
     if (settings) $.extend(config, settings);
 
     this.each(function() {
    	 var startX;
    	 var startY;
		 var isMoving = false;

    	 function cancelTouch() {
    		 this.removeEventListener('touchmove', onTouchMove);
    		 startX = null;
    		 isMoving = false;
    	 }	
    	 
    	 function onTouchMove(e) {
    		 if(isMoving) {
	    		 var x = e.touches[0].pageX;
	    		 var y = e.touches[0].pageY;
	    		 var dx = startX - x;
	    		 var dy = startY - y;
	    		 if(Math.abs(dx) >= config.min_x) {
	    			cancelTouch();
                                e.preventDefault();
	    			if(dx > 0) {
	    				config.Left();
	    			}
	    			else {
	    				config.Right();
	    			}
	    		 }
	    		 else if(Math.abs(dy) >= config.min_y) {
		    			cancelTouch();
		    			if(dy <0) {
		    				config.Down();
		    			}
		    			else {
		    				config.Up();
		    			}
		    		 }
    		 }
    	 }
    	 
    	 function onTouchStart(e)
    	 {
    		 if (e.touches.length == 1) {
    			 startX = e.touches[0].pageX;
    			 startY = e.touches[0].pageY;
    			 isMoving = true;
    			 this.addEventListener('touchmove', onTouchMove, false);
    		 }
    	 }    	 
    	 if ('ontouchstart' in document.documentElement) {
    		 this.addEventListener('touchstart', onTouchStart, false);
    	 }
     });
 
     return this;
   };
 
 })(jQuery);
