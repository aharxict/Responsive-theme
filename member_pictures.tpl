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
					<!-- Blog Post Excerpt -->
                    <div class="hide-on-mobile">
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           

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
						<div class="blog-post blog-single-post page-content" style="padding-bottom:0px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC;">
								<div style="float:left;"><h2><!-- IF hide_content != "1" -->{member_username}'s {lang:"member","frm_pictures"}<!-- ELSE -->{lang:"member","frm_pictures"}<!-- ENDIF --></h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="{top.virtual_path}{member_profile_link}" class="btn"><i class="glyphicon glyphicon-user"></i> <span style="text-transform:uppercase;">{lang:"member","frm_profile"}</span></a>
                                <a href="{virtual_path}{member_pictures_link}" class="btn active"><i class="glyphicon glyphicon-picture"></i> <span style="text-transform:uppercase;">{lang:"member","frm_pictures"}</span></a>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<div class="single-post-content" style="border-bottom:none;">
                            
 
<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_member_pictures">

		<div class="typepage">
			<div class="dataitem single gallerybox">
				<!-- IF album_display -->
					<!-- BEGIN profile_pictures -->
						<div class="image image-preview-pictures">
							<!-- IF picture_adult -->
								<!-- IF session.showadult AND session.can_view_adult_images -->
									<a href="{top.virtual_path}{picture_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{picture_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
								<!-- ELSE -->
									<a href="{top.virtual_path}{picture_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
								<!-- ENDIF -->
							<!-- ELSE -->
								<a href="{top.virtual_path}{picture_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{picture_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
							<!-- ENDIF -->
						</div>
					<!-- END profile_pictures -->
					<div class="clearfix"></div>
				<!-- ELSE -->
					<div class="form">
						<form name="privatealbum" method="post" action="">
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_album_password">{lang:"member","private_album_warning"}</label></dt>
									<dd><input class="text" id="field_album_password" name="album_password" value="" type="text" /></dd>
									<dd class="submit">
										<input class="submit" name="private_on" value="{lang:"member","private_warning_yes"}" type="submit" />&nbsp;
										<input class="submit" name="private_off" value="{lang:"member","private_warning_no"}" onclick="javascript:history.go(-1)" type="button" />
									</dd>
								</dl>
							</div>
						</form>
					</div>
				<!-- ENDIF -->
			</div>
		</div>
		<div class="clear"></div>

	</div>
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

                            
                            
                            
							</div>
						</div>


</div>
<!-- End Blog Post Excerpt -->

</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->
