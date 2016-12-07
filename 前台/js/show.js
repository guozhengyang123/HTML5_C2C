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

        function litimg1(){
            document.getElementById("bigimg").innerHTML='<img src="img/3.jpg" height="100%" width="100%"/>'
        } 
        function litimg2(){
            document.getElementById("bigimg").innerHTML='<img src="img/4.jpg" height="100%" width="100%"/>'
        } 
        function litimg3(){
            document.getElementById("bigimg").innerHTML='<img src="img/5.jpg" height="100%" width="100%"/>'
        } 
        function litimg4(){
            document.getElementById("bigimg").innerHTML='<img src="img/clean1.jpg" height="100%" width="100%"/>'
        } 
        function baobei(){
            document.getElementById("mai").style.backgroundColor="#aaaaaa";
            document.getElementById("bao").style.backgroundColor="#aaaaaa";
            document.getElementById("xiang").style.backgroundColor="#e6e6fa";
            document.getElementById("scontentbot1").innerHTML='面单原声，琴体厚重，懂者一看便知道。专业箱子放置，我很爱惜，保养很好，匹克板上的保护膜都没撕下，没有磕碰。3800元购于香港通利琴行，非本地货。不讲价，爽快的送琴盒。具体见图';
        }
        function maijia(){
            document.getElementById("bao").style.backgroundColor="#aaaaaa";
            document.getElementById("xiang").style.backgroundColor="#aaaaaa";
            document.getElementById("mai").style.backgroundColor="#e6e6fa";
            document.getElementById("scontentbot1").innerHTML='<img src="img/pic_06.jpg" height="3%" width="3%">飞鱼***1:包不包邮啊？';
        }
        function anquan(){
            document.getElementById("xiang").style.backgroundColor="#aaaaaa";
            document.getElementById("mai").style.backgroundColor="#aaaaaa";
            document.getElementById("bao").style.backgroundColor="#e6e6fa";
            document.getElementById("scontentbot1").innerHTML='1、卖家实名认证；2、专业团队支撑；3、支付宝交易担保；';
        }
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