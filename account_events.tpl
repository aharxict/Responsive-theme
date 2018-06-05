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
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/events/","index.php?m=account_events"}" class="btn active"><i class="glyphicon glyphicon-calendar"></i> {lang:"events","opt_events"}</a>
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/events/joined/","index.php?m=account_events&p=joined"}" class="btn"><i class="glyphicon glyphicon-calendar"></i> {lang:"events","opt_joinedevents"}</a>
                                
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/events/add/","index.php?m=account_events&p=add"}" class="btn"><i class="glyphicon glyphicon-calendar"></i> {lang:"events","opt_addevent"}</a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
       

<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_account_events">

		<div class="typemedia">
			<!-- BEGIN events_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<!-- IF event_picture_preview -->
										<a href="{top.virtual_path}{event_edit_link}"><img src="{top.virtual_pic_path}{session.media_path}{event_picture_preview}" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{event_pictures_link}"><img src="{top.virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ENDIF -->
								</div>
							</td>
							<td class="data" valign="top">
								<div class="datainfo" style="padding-top:5px;width:400px !important;overflow:inherit;word-wrap: break-word;">
									<h2 class="inner" style="font-size:18px;"><a href="{top.virtual_path}{event_edit_link}">{event_name}</a></h2>
									<dl class="datainfo">
										<div style="float:left;word-wrap: break-word;"><strong>{event_field_summary_name}:</strong> {event_field_summary_value}</div>
                                        <div class="clearfix"></div>
										<div style="float:left;word-wrap: break-word;"><strong>{event_field_place_name}:</strong> {event_field_place_value}</div>
                                        <div class="clearfix"></div>
										<div style="float:left;word-wrap: break-word;"><strong>{lang:"events","startdate"}:</strong> {event_start_date}</div>
                                        <div class="clearfix"></div>
									</dl>
								</div>
							</td>
							<td>
								<div class="actions">
									<ul class="actions" style="list-style-type:none;">
										<li class="guests"><span class="glyphicon glyphicon-user" style="padding-right:8px;"></span> <a href="{top.virtual_path}{event_guests_link}">{event_total_guests} <!-- IF event_max_guests -->/ {event_max_guests}<!-- ENDIF --> {lang:"events","total_guests"}</a></li>
										<!-- IF settings.enable_event_comments -->
											<li class="comments"><span class="glyphicon glyphicon-comment" style="padding-right:8px;"></span> <a href="{top.virtual_path}{event_comments_link}">{event_total_comments} {lang:"events","total_comments"}</a></li>
										<!-- ENDIF -->
										<!-- IF settings.enable_event_pictures AND session.can_view_own_events_pictures -->
											<li class="pictures"><span class="glyphicon glyphicon-picture" style="padding-right:8px;"></span> <a href="{top.virtual_path}{event_pictures_link}">{event_total_pictures} {lang:"events","total_pictures"}</a></li>
										<!-- ENDIF -->
										<!-- IF session.can_edit_own_events -->
											<li class="edit"><span class="glyphicon glyphicon-edit" style="padding-right:8px;"></span> <a href="{top.virtual_path}{event_edit_link}">{lang:"events","edit"}</a></li>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_events -->
											<li class="remove"><span class="glyphicon glyphicon-remove-circle" style="padding-right:8px;"></span> <a href="#" onclick="javascript:confirmLink('{lang:"events","delete?"}', '{top.virtual_path}{event_delete_link}')" title="{lang:"events","delete"}">{lang:"events","delete"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END events_entries -->
		</div>
		<div class="clear"></div>

	</div>
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
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->