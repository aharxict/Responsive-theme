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
								<div style="float:left;"><h2>{lang:"event_pictures","app_pictures"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{event_pictures_add_link}" class="btn">{lang:"event_pictures","opt_addpicture"}</a>
                                <a href="{virtual_path}{event_edit_link}" class="btn">{lang:"event_pictures","opt_editevent"}</a>
                                <a href="{virtual_path}{event_guests_view_link}" class="btn">{lang:"event_pictures","opt_guests"}</a>
                                
                                <a href="{virtual_path}{event_comments_view_link}" class="btn">{lang:"event_pictures","opt_comments"}</a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
       

<!-- IF hide_content != "1" -->

	<div class="outter page_account_events_pictures">

		<div class="typemedia">
			<!-- BEGIN event_pictures -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<a href="{top.virtual_path}{picture_edit_link}"><img src="{top.virtual_pic_path}{session.media_path}{picture_preview}" alt="" border="0" /><br /></a>
								</div>
							</td>
							<td class="data">
								<div class="datainfo" style="padding-left:7px;">
									<dl class="datainfo">
										<!-- IF picture_description -->
											<dt>{lang:"event_pictures","notes"}:</dt>
											<dd>{picture_description}</dd>
										<!-- ENDIF -->
										<dt>{lang:"event_pictures","post_date"}:</dt>
										<dd>{picture_post_date}<br />
                                        <!-- IF session.can_edit_own_events_pictures -->
											<span class="glyphicon glyphicon-edit" style="padding-right:4px;"></span> <a style="padding-right:7px;" href="{top.virtual_path}{picture_edit_link}" title="{lang:"event_pictures","edit"}">{lang:"event_pictures","edit"}</a>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_events_pictures -->
											<span class="glyphicon glyphicon-remove" style="padding-right:4px;"></span> <a href="#" onclick="javascript:confirmLink('{lang:"event_pictures","delete?"}', '{top.virtual_path}{picture_delete_link}')" title="{lang:"event_pictures","delete"}">{lang:"event_pictures","delete"}</a>
										<!-- ENDIF -->
                                        </dd>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END event_pictures -->
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"event_pictures","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"event_pictures","next_page"} &raquo;</a>
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