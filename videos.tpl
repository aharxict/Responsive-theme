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
								<div style="float:left;"><h2>{lang:"videos","app_videos"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<div class="outter page_member_videos">

	<div class="typemedia">

		<!-- IF hide_content != "1" AND global_videos -->

			<div class="dataitem single dataitemlast gallerylist">
				<!-- BEGIN global_videos -->
					<div class="image" style="float:left; margin-right:5px; margin-bottom:5px;">
						<!-- IF video_type -->
							<a href="{top.virtual_path}{video_link}"><img src="{metavideo:video_id=meta_id,type=video_type,media="preview",preview=video_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
						<!-- ELSE -->
							<!-- IF video_preview -->
								<!-- IF video_adult -->
									<!-- IF session.showadult AND session.can_view_adult_images -->
										<a href="{top.virtual_path}{video_link}" class="img" title="{trim:video_description,60}"><img src="{top.virtual_pic_path}{member_media_path}{video_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{video_link}" class="img" title="{trim:video_description,60}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
									<!-- ENDIF -->
								<!-- ELSE -->
									<a href="{top.virtual_path}{video_link}" class="img" title="{trim:video_description,60}"><img src="{top.virtual_pic_path}{member_media_path}{video_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
								<!-- ENDIF -->
							<!-- ELSE -->
								<a href="{top.virtual_path}{video_link}" class="img" title="{trim:video_description,60}"><img src="{top.virtual_tpl_path}{session.template}/media/video_picture_none.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
							<!-- ENDIF -->
						<!-- ENDIF -->
	
					</div>
					<!-- IF rowcnt > "0" AND rowlast == "0" AND rowcnt mod "6" == "5" --><div class="clear"></div><!-- ENDIF -->
				<!-- END global_videos -->
				<div class="clearfix"></div>
			</div>

		<!-- ENDIF -->

	</div>
	<div class="clearfix"></div>

</div>

<style type="text/css">
div.page_numbers {
	margin-top: 10px;
	padding-top: 20px;
}
div.page_numbers p {
    margin: 0px 2px 0px 0px;
    padding: 4px 8px;
    display: block;
    float: left;
    color: #666;
    border: 1px solid #404040;
}
</style>
<!-- IF hide_content != "1" -->
	<!-- IF total_pages > "1" -->
	<div class="footer_wrap">
		<div class="page_numbers">
			<p>{lang:"videos","page_numbers"}: </p>
        	{page_links}
			<div class="clear"></div>
		</div>
	</div>
	<div class="clearfix"></div>
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