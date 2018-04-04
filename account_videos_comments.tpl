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
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"videos","app_comments"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/videos/","index.php?m=account_videos"}" class="btn"><i class="glyphicon glyphicon-facetime-video"></i> {lang:"videos","opt_viewvideos"}</a>
                           
                           		<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/videos/add/","index.php?m=account_videos&p=add"}" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> {lang:"videos","opt_addvideo"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


<!-- IF hide_content != "1" -->

	<div class="outter page_account_video_comments">

		<div class="typecomments">
			<!-- BEGIN video_comments -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<!-- INCLUDE member_sections_picture.tpl -->
								</div>
							</td>
							<td class="data">
								<div class="itemheader">
									<!-- INCLUDE member_sections_name.tpl -->
									<ul class="itemheader">
										<li>{lang:"videos","post_date"} {comment_post_date}</li>
										<!-- IF session.can_delete_own_videos_comments -->
											<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"videos","delete_comment?"}', '{top.virtual_path}{comment_delete_link}')" title="{lang:"videos","delete_comment"}">{lang:"videos","delete_comment"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
								<div class="entry">
									{comment_body}
								</div>
							</td>
		                </tr>
		            </table>
				</div>
			<!-- END video_comments -->
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{lang:"core","page_numbers"}</p>
				{page_links}
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