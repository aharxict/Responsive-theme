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

	<div class="outter page_member_albums">

		<div class="typemedia">
			<!-- BEGIN profile_albums -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<!-- IF album_preview AND album_picture_active -->
										<!-- IF settings.adult_images AND album_picture_adult -->
											<!-- IF session.showadult AND session.can_view_adult_images -->
												<a href="{top.virtual_path}{album_pictures_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{album_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
											<!-- ELSE -->
												<a href="{top.virtual_path}{album_pictures_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
											<!-- ENDIF -->
										<!-- ELSE -->
											<a href="{top.virtual_path}{album_pictures_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{album_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
										<!-- ENDIF -->
									<!-- ELSE -->
										<a href="{top.virtual_path}{album_pictures_link}"><img src="{top.virtual_tpl_path}{session.template}/media/album_picture_none.gif" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
									<!-- ENDIF -->
								</div>
							</td>
		                    <td class="data">
								<div class="datainfo" style="margin-left:7px;">
									<dl class="datainfo">
										<div><strong>{lang:"member","description"}:</strong> {album_description}</div>
										<div><strong>{lang:"member","total_pictures"}:</strong> {album_total_pictures}</div>
										<div><strong>{lang:"member","post_date"}:</strong> {album_post_date}</div>
										<!-- IF album_update_date -->
											<div><strong>{lang:"member","update_date"}:</strong> {album_update_date}</div>
										<!-- ENDIF -->
									</dl>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
			<!-- END profile_albums -->
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

                            
                            
                            
							</div>
						</div>


</div>
<!-- End Blog Post Excerpt -->

</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->