function showDiv(){
 var winWidth;
 var winHeight;
    if (document.body && document.body.clientHeight && document.body.clientWidth)
        {
            winHeight = document.body.clientHeight;
            winWidth = document.body.clientWidth;
        }
    document.getElementById('show').style.display="block";
    document.getElementById('show_win').style.display="block";
    document.getElementById('show').style.width=winWidth+"px";
    document.getElementById('show').style.height=winHeight+"px";
}
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
$(document).ready(function(){
 
    $('.service_top').find('a').bind('click', function(){
     
    $('.caption').removeClass('show');
    // $('.service_top a').removeClass('service_now');
    // $(this).addClass("service_now");
     
     var index = $(this).attr('class').split('_')[1];
     var cation_name = '.caption_' +  index;
     var cap = $(cation_name).addClass("show");
     console.log( cap.attr('class'));
    });
    $('.caption_1').addClass('show');
    $('.service_top a').removeClass('service_now');
    $(this).addClass("service_now");
});