<!-- INCLUDE header.tpl -->

<div class="section section-header">
<div class="container">
<div class="row">

<!-- IF loggedin -->
<!-- INCLUDE user-menu.tpl -->
<!-- ENDIF -->

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">

<div class="hide-on-mobile">
<!-- INCLUDE login_form_sidebar.tpl -->
</div>

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"member","app_videos"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
<!-- IF hide_content != "1" -->

	<div class="outter page_member_videos">

		<div class="typepage">
			<div class="dataitem single gallerybox">
				<!-- BEGIN profile_videos -->
					<div class="image" style="float:left; margin-right:5px; margin-bottom:5px;">
						<!-- IF video_type -->
							<a href="{top.virtual_path}{video_link}"><img style="border-radius:3px; height:125px; width:125px;" height="125" width="125" src="{metavideo:video_id=meta_id,type=video_type,media="preview",preview=video_preview}" alt="" border="0" /></a>
						<!-- ELSE -->
							<!-- IF video_preview -->
								<!-- IF video_adult -->
									<!-- IF session.showadult AND session.can_view_adult_images -->
										<a href="{top.virtual_path}{video_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{video_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{video_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /></a>
									<!-- ENDIF -->
								<!-- ELSE -->
									<a href="{top.virtual_path}{video_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{video_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /></a>
								<!-- ENDIF -->
							<!-- ELSE -->
								<a href="{top.virtual_path}{video_link}"><img src="{top.virtual_tpl_path}{session.template}/media/video_picture_none.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /></a>
							<!-- ENDIF -->
						<!-- ENDIF -->
					</div>
					<!-- IF rowlast OR rowcnt mod "6" == "5" --><div class="clear"></div><!-- ENDIF -->
				<!-- END profile_videos -->
			</div>
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"member","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"member","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

<!-- ENDIF -->

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->