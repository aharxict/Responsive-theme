
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

<!-- INCLUDE login_form_sidebar.tpl -->

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"events","app_pictures"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <!-- IF hide_content != "1" -->
                                	<a href="{virtual_path}{event_details_link}" class="btn"> {lang:"events","frm_details"}</a>
                                
                                	<a href="{virtual_path}{event_guests_link}" class="btn"> {lang:"events","frm_guests"}</a>
                                	<!-- IF settings.enable_event_pictures -->
                                	<a href="{virtual_path}{event_pictures_link}" class="btn active"> {lang:"events","frm_pictures"}</a>
                                	<!-- ENDIF -->
                                <!-- ENDIF -->
                                </div>

                                <div class="clearfix"></div>
                           </div>
                      

<!-- INCLUDE message.tpl -->        

<!-- IF hide_content != "1" AND event_pictures -->

	<div class="outter page_event_pictures">

		<div class="typepage">
			<div class="dataitem single gallerybox">
				<!-- BEGIN event_pictures -->
					<div class="image">
						<a href="{top.virtual_path}{picture_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{picture_preview}" alt="" border="0" /><br /></a>
					</div>
				<!-- END event_pictures -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"events","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"events","next_page"} &raquo;</a>
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