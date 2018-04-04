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
						<div class="hide-on-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" /></a>
							<!-- ELSE -->
                            <a href="{top.virtual_path}{session.username}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /></a>
                            <!-- ENDIF -->
							
						</div>
                        </div>

						<div class="hide-on-mobile">
                        <!-- INCLUDE ext.member_sidebar.tpl -->
                        </div>
						
                        <div class="hide-on-mobile">
                        <!-- INCLUDE ext.search.tpl -->
                        </div>
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"member","app_blog"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <!-- INCLUDE member_sections_links.tpl -->
                           
                                </div>
                                <div class="clearfix"></div>
                           </div>
<!-- INCLUDE message.tpl -->

       
<!-- IF hide_content != "1" -->

	<div class="outter page_member_blogs_entry">
		<div class="typepage">

			<div class="dataitem single">
            	<!-- IF entry_picture -->
				<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{entry_picture_large}" alt="" border="0" /><br /></a>
				<!-- ELSE -->
				<!-- ENDIF -->
				<table class="plain" style="margin-top:10px;">
					<tr>
						<td class="data" valign="top">
							<div class="itemheader">
                            <div style="float:right;"><a href="{virtual_path}{member_blog_rss_link}" target="_blank"><img src="{virtual_tpl_path}{session.template}/media/rss.png" border="0" /></a></div>
								<h2 class="inner" style="font-size:16px;"><a href="{top.virtual_path}{entry_link}">{entry_title}</a></h2>
								<div>
									<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"member","post_date"} {entry_post_date}</div>
									<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{entry_link}">{entry_total_comments} {lang:"member","comments"}</a></div>
									<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"member","views"}: {entry_total_views}</div>
									<!-- IF settings.enable_reports AND settings.enable_blog_reports AND session.can_submit_reports -->
<style type="text/css">
div.reportbox div.popup {
    padding: 10px;
    display: none;
    z-index: 1;
    position: absolute;
    bottom: 16px;
    right: 0px;
    background: #f5fbff;
    border: 1px solid #cccccc;
    width: 155px;
}
</style>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">
											{reports:type="blog",member_id=member_id,item_id=entry_id}
										</div>
									<!-- ENDIF -->
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="entry" style="padding-top:7px;">
								{entry_body}
							</div>
						</td>
					</tr>
				</table>
			</div>
            <hr />

			<!-- IF entry_allow_comments AND session.can_view_all_blogs_comments -->

				<div class="comments page_member_blogs_comments">

					<div class="subtitle">
						<h2 style="font-size:16px;">{lang:"member","comments_list"}</h2>
						<div class="progress" id="get_comments_progress" style="display:none;"></div>
					</div>
					<div id="comments_page">
						{comments:type="blog",member_id=member_id,content_id=entry_id}
					</div>

					<div class="commentsform page_member_blogs_comments_submit">
						<div class="dataitem single">
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_comment_body">{lang:"member","add_comment"}</label></dt>
											<dd><textarea class="textarea textarea_full form-control" id="field_comment_body" cols="40" rows="5" name="body">{comment_body}</textarea></dd>
											<!-- IF settings.blogs_comments_captcha -->
    											<dt><label for="field_captcha">{lang:"member","verify_number"}</label></dt>
    											<dd>
													<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="float:left; width:auto;" />
													<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" style="float:left;" /><div class="clearfix"></div>
												</dd>
											<!-- ENDIF -->
    										<dd class="submit"><input class="submit btn" type="submit" name="submit" value="{lang:"member","submit"}" /></dd>
										</dl>
									</div>
									<input type="hidden" name="iscomment" value="1" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>

			<!-- ENDIF -->

		</div>
		<div class="clear"></div>
	</div>

<!-- ENDIF -->
		</div>
		<div class="clear"></div>

	</div>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->