$(function () {
            var offset = $("#end").offset();
            $(".addcar").click(function (event) {
                var addcar = $(this);
                var img = addcar.parent().find('img').attr('src');
                var flyer = $('<img class="u-flyer" src="' + img + '">');
                flyer.fly({
                    start: {
                        left: event.pageX,
                        top: event.pageY
                    },
                    end: {
                        left: offset.left + 10,
                        top: offset.top + 10,
                        width: 0,
                        height: 0
                    },
                    onEnd: function () {
                        $("#msg").show().animate({ width: '250px' }, 200).fadeOut(1000);
                        addcar.css("cursor", "default").removeClass('orange').unbind('click');
                        this.destory();
                    }
                });
            });

        });

       
        $(function(){  
    var t = $("#text_box");  
    $("#add").click(function(){       
        t.val(parseInt(t.val())+1)  
        setTotal();  
    })  
    $("#min").click(function(){  
        t.val(parseInt(t.val())-1)  
        setTotal();  
    })  
    setTotal();  
})  