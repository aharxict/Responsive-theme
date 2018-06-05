<!-- IF !post.dynamic_request -->
<!-- INCLUDE header.tpl -->
<div id="dynamic_media_box">
<!-- ENDIF -->

<div class="section section-header">
<div class="container">
<div class="row">

<!-- IF loggedin -->
<!-- INCLUDE user-menu.tpl -->
<!-- ENDIF -->

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post Excerpt -->
                    <div class="hide-on-mobile">
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- INCLUDE message.tpl -->
                            
                            <div class="image picture_zoom">
                            <!-- INCLUDE member_sections_picture_profile.tpl -->
                            </div>
                            
						</div>
                        

<!-- INCLUDE ext.search.tpl -->					
                    
                    </div>
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"member","app_videos"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{top.virtual_path}{member_profile_link}" class="btn"><i class="glyphicon glyphicon-user"></i> <span style="text-transform:uppercase;">{lang:"member","frm_profile"}</span></a>
                                <a href="{virtual_path}{member_videos_link}" class="btn active"><i class="glyphicon glyphicon-facetime-video"></i> <span style="text-transform:uppercase;">{lang:"member","frm_videos"}</span></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_member_videos_view">
		<div class="typepage">

			<div class="dataitem single galleryitem">

				<!-- IF video_adult AND session.showadult == "0" AND agree_adult_video == "0" AND session.can_view_adult_videos -->
					<div class="form">
						<form name="adultpicture" method="post" action="{virtual_path}{video_link}">
							<div class="fieldset">
								<dl class="fieldset">
									<dt>{lang:"member","adult_notice"}</dt>
									<dt><label><input class="checkbox" name="adult_remember" type="checkbox" value="1">&nbsp;{lang:"member","adult_remember_yes"}</label></dt>
									<dd class="submit">
										<input class="submit" name="adult_on" value="{lang:"member","adult_warning_yes"}" type="submit" />
										<input class="submit" name="adult_off" value="{lang:"member","adult_warning_no"}" onclick="javascript:history.go(-1)" type="button" />
									</dd>
								</dl>
							</div>
						</form>
					</div>
				<!-- ELSEIF video_display -->
					<div class="image">
												<!-- IF video_type -->
							{metavideo:video_id=meta_id,type=video_type}
						<!-- ELSE -->
							<!-- IF video_streaming == "1" -->
								<div id="mpl"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
								<script type="text/javascript" language="javascript">
									swfobject.embedSWF("{virtual_path}media/utils/mediaplayer.swf", "mpl", "{settings.video_width}", "{settings.video_height}", "9.0.0", false,
										{'autostart':'false','file':'{top.virtual_pic_path}{member_media_path}{video_filename}','logo':'{top.virtual_path}media/overlay_player.png','wmode':'transparent'},
										{'allowfullscreen':'true','wmode':'transparent'}, {});
								</script>
							<!-- ELSE -->
<style type="text/css">
object{
     width:100%;
     max-height:100% ;
}
</style>
                               <object width="400" height="370" id="mediaplayer" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" standby="Loading Microsoft Windows? Media Player components..." type="application/x-oleobject" align="middle">
									<param name="filename" value="{top.virtual_pic_path}{member_media_path}{video_filename}">
									<param name="showstatusbar" value="1">
									<param name="autostart" value="1">
									<param name="animationatstart" value="1">
									<param name="transparentatstart" value="1">
									<param name="showcontrols" value="1">
									<param name="width" value="400">
									<param name="height" value="370">
									<embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/windows/mediaplayer/" src="{top.virtual_pic_path}{member_media_path}{video_filename}" align="middle" showstatusbar="1" animationatstart="1" showcontrols="1" autostart="1" transparentatstart="1" width="400" height="370"></embed>
								</object>
							<!-- ENDIF -->
						<!-- ENDIF -->
					</div>
					<div class="entry">
						{video_description}
					</div>

				<!-- ENDIF -->
			</div>



		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- ENDIF -->
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- IF !post.dynamic_request -->
</div>
<!-- INCLUDE footer.tpl -->
<!-- ENDIF -->