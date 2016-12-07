<% @ Page language="c#"%><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="/e/images/favicon.ico">
<LINK href="/e/images/picsview/css/style.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="box-cnfen" style="margin:0px auto 0px auto;">
      <div class="nph_gallery nph_skin_white" id=gallery342>
		  <div class=nph_bg>
			  <div class=nph_photo id=modePhoto342>
				  <div class=nph_photo_view>
					  <div class=nph_cnt id=photoView342>
					  	<IMG id=photo342 src="images/blank.gif">					 
					  </div>
					  <div class=nph_photo_prev>
						<A class=nph_btn_pphoto id=photoPrev342 hideFocus href="#" target=_self></A>					  
						</div>
					  <div class=nph_photo_next>
					  <A class=nph_btn_nphoto id=photoNext342 hideFocus href="#" target=_self></A>					 
					   </div>
					  <div class=nph_photo_loading id=photoLoading342></div>
				  </div>
				  <div class=nph_cnt>
					  <div class=nph_photo_ctrl>
						  <UL>
						  	<li><SPAN class="nph_set_cur hidden" id=photoType342>（<SPAN class=nph_c_lh id=photoIndex342></SPAN>/<%=Server.HtmlEncode(Request.QueryString["num"])%>）</SPAN><SPAN class=nph_set_size id=streamType342>（共<SPAN class=nph_c_lh><%=Server.HtmlEncode(Request.QueryString["num"])%></SPAN>张）</SPAN></li>
							<LI><A class=nph_icon_orig id=viewOrig342  href="#" target=_blank>查看原图</A>|</LI>
						</UL>
					  </div>
					  <div class=nph_photo_desc id=photoDesc342></div>
				  </div>
				  <SPAN class=nph_hr_solid></SPAN>
				  <div class="nph_cnt clearfix">
					  <div class=nph_photo_thumb id=scrl342>
					    <div class=clearfix>
							  <div class=nph_scrl>
								  <div class=nph_scrl_thumb>
									  <div class=nph_scrl_main>
										  <UL class=nph_list_thumb id=thumb342></UL>
									  </div>
									  <div class="nph_scrl_bar clearfix">
										  <SPAN class=nph_scrl_lt></SPAN><SPAN class=nph_scrl_rt></SPAN>
										  <div class=nph_scrl_bd>
											  <div class=nph_scrl_ct>
												  <A class=nph_btn_scrl id=bar342 hideFocus href="#"><B class=nph_btn_lt></B><B class=nph_btn_rt></B><SPAN 
												  class=nph_btn_bd><SPAN><B class=nph_btn_ct></B></SPAN></SPAN></A>											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
						    <SPAN class=nph_scrl_prev><A class=nph_btn_pscrl id=scrlPrev342 hideFocus href="#"></A></SPAN><SPAN class=nph_scrl_next><A class=nph_btn_nscrl id=scrlNext342 hideFocus href="#"></A></SPAN>						  </div>
					  </div>
				  </div>
			  </div>
		  </div>
	   </div>
<TEXTAREA id="photoList342" style="display:none"></TEXTAREA>
<div class=hidden id=galleryTpl342></div>
<SCRIPT language=javascript src="/e/images/picsview/js/ntes_jslib_1.x.js" type=text/javascript charset=gb2312></SCRIPT>
<SCRIPT language=javascript src="/e/images/picsview/js/ntes_ui_scroll.js" type=text/javascript charset=gb2312></SCRIPT>
<SCRIPT language=javascript  src="/e/images/picsview/js/nph_gallery_2.11.js"  type=text/javascript charset=gb2312></SCRIPT>
<SCRIPT type=text/javascript>
document.getElementById("photoList342").value=parent.document.getElementById("photoList342").value;
NTES.ready(function ($) { new nph.Gallery({ sn: "342" }); });
</SCRIPT>
</div>
</body>
</html>