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
								<div style="float:left;"><h2>{lang:"videos","app_videos"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_videos" class="btn active"><i class="glyphicon glyphicon-picture"></i> {lang:"videos","opt_viewvideos"}</a>
                           
                           <a href="{virtual_path}index.php?m=account_videos&p=add" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> {lang:"videos","opt_addvideo"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


	<!-- IF hide_content != "1" -->

	<div class="outter page_account_videos">

		<div class="typemedia">
			<!-- BEGIN profile_videos -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}" style="border:#eee solid 1px; border-radius:3px; margin-bottom:10px; padding:5px;">
					<table class="plain">
						<tr>
							<td>
								<div class="image" style="width:125px; margin-right:10px;">
									<!-- IF video_type -->
										<a href="{top.virtual_path}{video_edit_link}"><img src="{metavideo:video_id=meta_id,type=video_type,media="preview",preview=video_preview}" style="height:125px; width:125px;" height="125" width="125" alt="" border="0" /><br /></a>
									<!-- ELSE -->
										<!-- IF video_preview != "" -->
											<a href="{top.virtual_path}{video_edit_link}"><img src="{top.virtual_pic_path}{session.media_path}{video_preview}" style="height:125px; width:125px;" height="125" width="125" alt="" border="0" /><br /></a>
										<!-- ELSE -->
											<a href="{top.virtual_path}{video_edit_link}"><img src="{top.virtual_tpl_path}{session.template}/media/video_picture_none.gif" style="height:125px; width:125px;" height="125" width="125" alt="" border="0" /><br /></a>
										<!-- ENDIF -->
									<!-- ENDIF -->
								</div>
							</td>
		                    <td class="data" valign="middle">
								<div class="datainfo">
									<dl class="datainfo" style="padding-bottom:7px;">
										<!-- IF video_description -->
											<dt style="float:left; padding-right:5px;">{lang:"videos","notes"}:</dt>
											<dd style="float:left;">{video_description}</dd>
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
										<!-- IF settings.enable_video_rating AND video_rated -->
											<dt style="float:left; padding-right:5px;">{lang:"videos","rated_on"}:</dt>
											<dd style="float:left;">{video_score} ({video_votes} {lang:"videos","votes"})</dd>
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
										<!-- IF settings.enable_videos_categories -->
											<dt style="float:left; padding-right:5px;">{lang:"videos","category"}:</dt>
											<dd style="float:left;">{video_category}</dd>
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
										<dt style="float:left; padding-right:5px;">{lang:"videos","dateadded"}:</dt>
										<dd style="float:left;">{video_post_date}</dd>
                                        <div class="clearfix"></div>
										<!-- IF settings.enable_encodercloud AND video_streaming > "1" -->
											<dt style="float:left; padding-right:5px;">{lang:"videos","status"}</dt>
											<!-- IF video_streaming == "2" -->
												<dd style="float:left;">{lang:"videos","status_queue"}</dd>
											<!-- ELSE -->
												<dd style="float:left;">{lang:"videos","status_error"}</dd>
											<!-- ENDIF -->
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
									</dl>
								</div>
                                
                                <div style="border-top:#eee solid 1px; padding:5px; padding-left:0; padding-bottom:0; margin-top:7px;">
										<!-- IF session.can_view_own_videos_comments -->
											<a href="{top.virtual_path}{video_comments_link}" style="padding-right:5px;"><i class="glyphicon glyphicon-comment"></i> {video_total_comments} {lang:"videos","comments"}</a>
										<!-- ENDIF -->
										<!-- IF session.can_edit_own_videos -->
											<a href="{top.virtual_path}{video_edit_link}" title="{lang:"videos","edit"}" style="padding-right:5px;"><i class="glyphicon glyphicon-edit"></i> {lang:"videos","edit"}</a>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_videos -->
											<a href="#" onclick="javascript:confirmLink('{lang:"videos","delete?"}', '{top.virtual_path}{video_delete_link}')" title="{lang:"videos","delete"}" style="padding-right:5px;"><i class="glyphicon glyphicon-remove"></i> {lang:"videos","delete"}</a>
										<!-- ENDIF -->
								</div>
                                
							</td>
		                </tr>
		            </table>
				</div>
			<!-- END profile_videos -->
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"videos","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"videos","next_page"} &raquo;</a>
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