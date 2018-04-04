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
								<div style="float:left;"><h2>{lang:"events","app_events"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{event_guests_view_link}" class="btn">{lang:"events","opt_guests"}</a>
                                <a href="{virtual_path}{event_comments_view_link}" class="btn">{lang:"events","opt_comments"}</a>
                                
                                <a href="{virtual_path}{event_pictures_view_link}" class="btn">{lang:"events","opt_pictures"}</a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
       

<!-- IF hide_content != "1" -->

	<div class="outter page_account_event_comments">

		<div class="typecomments">
			<!-- BEGIN event_comments -->
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
										<li>{lang:"events","post_date"} {comment_post_date}</li>
										<!-- IF session.can_delete_own_events_comments -->
											<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"events","delete_comment?"}', '{top.virtual_path}{comment_delete_link}')" title="{lang:"events","delete_comment"}">{lang:"events","delete_comment"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
<style type="text/css">
					.entry {
						width:500px !important;
						overflow:inherit;
						word-wrap: break-word;
					}
					</style>
								<div class="entry">
									{comment_body}
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END event_comments -->
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