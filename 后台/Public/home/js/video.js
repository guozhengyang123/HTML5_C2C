/*
调用方法：
<script src="/e/js/video.js" type="text/javascript"></script>
<script type="text/javascript">
player(furl,width,height,autostart,startpic,baseurl);
</script>

参数说明：
furl:视频地址：填要播放的视频地址，比如：http://localhost/file/movie.flv
width：视频显示的宽度。
height：视频显示的高度。
autostart：是否自动播放，0为不自动播放，1为自动播放，不填写默认0
startpic：flv和mp4流媒体播放时候的开始图片
baseurl：网站的地址，不填写则自动获取 	
*/
var PaPlayer_Id=1;
function player(furl,width,height,autostart,startpic,baseurl){
	var filetype;
	var cfiletype;
	var playstr='';
	var filetypeflash='|.swf|';
	var filetypeflv='|.flv|';
	var filetypemediaplayer='|.wmv|.asf|.wma|.mp3|.asx|.mid|.midi|';
	var filetyperealplayer='|.rm|.ra|.rmvb|.mp4|.mov|.avi|.wav|.ram|.mpg|.mpeg|';
	var filetypepaplayer='|.flv|.mp4|';
	filetype=PlayerGetFiletype(furl);
	cfiletype='|'+filetype+'|';
        if(typeof(autostart)=="undefined")
         {
           autostart=1;
         }
        if(typeof(startpic)=="undefined")
         {
           //startpic="/e/incs/paplayer/start.jpg";
           startpic="";
         }
        if(typeof(baseurl)=="undefined")
         {
          baseurl="/";
         }
	if(filetypepaplayer.indexOf(cfiletype)!=-1)//paplayer
	  {
            document.write('<script type="text/javascript" src="/e/incs/paplayer/swfobject.js"></script>');
	    playstr=ShowPaplayer(furl,width,height,autostart,startpic,baseurl);
	  }
	else if(filetypeflash.indexOf(cfiletype)!=-1)//flash
	 {
	   playstr=ShowFlash(furl,width,height,autostart,baseurl);
	 }
	else if(filetyperealplayer.indexOf(cfiletype)!=-1)//realplayer
	{
	  playstr=ShowRealPlayer(furl,width,height,autostart,baseurl);
	}
	else//mediaplayer
	{
	  playstr=ShowMediaPlayer(furl,width,height,autostart,baseurl);
	}
	document.write(playstr);
}

//filetype
function PlayerGetFiletype(sfile){
	var filetype,s;
	s=sfile.lastIndexOf(".");
	filetype=sfile.substring(s+1).toLowerCase();
	return '.'+filetype;
}

//flash
function ShowFlash(furl,width,height,autostart,baseurl){
	var str='';
	str='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="'+width+'" height="'+height+'"><param name="movie" value="'+furl+'"><param name="quality" value="high"><embed src="'+furl+'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'" autostart="'+autostart+'"></embed></object>';
	return str;
}

//flv
function ShowFlv(furl,width,height,autostart,baseurl){
	var str='';
	var fname='';
	str='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="'+width+'" height="'+height+'"><param name="movie" value="'+baseurl+'e/incs/videoplayer/flv/flvplayer.swf?vcastr_file='+furl+'&vcastr_title='+fname+'&BarColor=0x000000&BarPosition=1&IsAutoPlay='+autostart+'"><param name="quality" value="high"><param name="allowFullScreen" value="true" /><embed src="'+baseurl+'e/incs/videoplayer/flv/flvplayer.swf?vcastr_file='+furl+'&vcastr_title='+fname+'&BarColor=0x000000&BarPosition=1&IsAutoPlay='+autostart+'" allowFullScreen="true"  quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="'+width+'" height="'+height+'"></embed></object>';
	return str;
}

//mediaplayer
function ShowMediaPlayer(furl,width,height,autostart,baseurl){
	var str='';
	str='<object align="middle" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" class="OBJECT" id="MediaPlayer" width="'+width+'" height="'+height+'"><PARAM NAME="AUTOSTART" VALUE="'+autostart+'"><param name="ShowStatusBar" value="-1"><param name="Filename" value="'+furl+'"><embed type="application/x-oleobject codebase=http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" flename="mp" src="'+furl+'" width="'+width+'" height="'+height+'"></embed></object>';
	return str;
}

//realplayer
function ShowRealPlayer(furl,width,height,autostart,baseurl){
	var str='';
	str='<object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" HEIGHT="'+height+'" ID="Player" WIDTH="'+width+'" VIEWASTEXT><param NAME="_ExtentX" VALUE="12726"><param NAME="_ExtentY" VALUE="8520"><param NAME="AUTOSTART" VALUE="'+autostart+'"><param NAME="SHUFFLE" VALUE="0"><param NAME="PREFETCH" VALUE="0"><param NAME="NOLABELS" VALUE=0><param NAME=CONTROLS VALUE=ImageWindow><param NAME=CONSOLE VALUE=_master><param NAME=LOOP VALUE=0><param NAME=NUMLOOP VALUE=0><param NAME=CENTER VALUE=0><param NAME=MAINTAINASPECT VALUE="'+furl+'"><param NAME=BACKGROUNDCOLOR VALUE="#000000"></object><br><object CLASSID="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" HEIGHT=32 ID="Player" WIDTH="'+width+'" VIEWASTEXT><param NAME=_ExtentX VALUE=18256><param NAME=_ExtentY VALUE=794><param NAME=AUTOSTART VALUE="'+autostart+'"><param NAME=SHUFFLE VALUE=0><param NAME=PREFETCH VALUE=0><param NAME=NOLABELS VALUE=0><param NAME=CONTROLS VALUE=controlpanel><param NAME=CONSOLE VALUE=_master><param NAME=LOOP VALUE=0><param NAME=NUMLOOP VALUE=0><param NAME=CENTER VALUE=0><param NAME=MAINTAINASPECT VALUE=0><param NAME=BACKGROUNDCOLOR VALUE="#000000"><param NAME=SRC VALUE="'+furl+'"></object>';
	return str;
}

//paplayer
function ShowPaplayer(furl,width,height,autostart,startpic,baseurl)
 {
    var str='';
    if(IsPC())
    {
    var Id="";
    if(PaPlayer_Id>1)
     {
      Id="_"+Id;
     }
    str+='<div id="PaPlayer'+Id+'">Loading...</div>'; 
    str+='<scri'+'pt type="text/javascri'+'pt">';
    str+='var so = new SWFObject("/e/incs/paplayer/paplayer.swf","ply","'+width+'","'+height+'","9","#000000");so.addParam("allowfullscreen","true");so.addParam("allowscriptaccess","always");so.addParam("wmode","opaque");so.addParam("quality","high");so.addParam("salign","lt");so.addVariable("JcScpFile","/e/incs/paplayer/set.xml");';
    str+='so.addVariable("JcScpAutoPlay","'+(autostart==0?"no":"yes")+'");'; 
    str+='so.addVariable("JcScpVideoPath","'+furl+'");';
    str+='so.addVariable("JcScpImg","'+startpic+'");';
    str+='so.write("PaPlayer'+Id+'");</scri'+'pt>'; 
    PaPlayer_Id++;
    }
    else
    {
     if(startpic==""){startpic="/e/incs/paplayer/start.jpg";}
     str='<video width="'+width+'" height="'+height+'" src="'+furl+'" poster="'+startpic+'" autoplay="autoplay" preload="none"></video>';
    }
    return str;
}
document.write('<script type="text/javascript" src="/e/incs/paplayer/swfobject.js"></script>');