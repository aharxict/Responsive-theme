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

							<div class="single-post-title events" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"events","app_events"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/calendar/","index.php?m=events&p=calendar"}" class="btn active"><i class="glyphicon glyphicon-calendar"></i> {lang:"events","frm_events"}</a>
                                
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/search/","index.php?m=events&p=search"}" class="btn"><i class="glyphicon glyphicon-search"></i> {lang:"events","opt_search"}</a>
                                <a href="{virtual_path}{prev_page}" class="btn"><i class="glyphicon glyphicon-menu-left"></i> &laquo; {lang:"events","prev_month"}</a>
                                <a href="{virtual_path}{next_page}" class="btn"><i class="glyphicon glyphicon-menu-right"></i> {lang:"events","next_month"} &raquo;</a>
                                </div>

                                <div class="clearfix"></div>
                           </div>
<div class="content-box">

			<div style="margin-bottom:15px;">
				<div style="float:left; padding-right:5px; font-size:16px; font-weight:bold;">{anchor:url1="events/",url2="index.php?m=events&p=calendar",name="events|frm_events"}</div>
				<div style="float:left; padding-right:5px; font-size:16px; font-weight:bold;"><span>&#187;</span></div>
				<div style="float:left; padding-right:2px; font-size:16px; font-weight:bold;"><span>{events_date}</span></div>
				<div style="float:right; padding-right:2px; font-size:16px; font-weight:bold;"><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/rss/","index.php?m=events&p=rss"}" target="_blank"><img src="{virtual_tpl_path}{session.template}/media/rss.png" border="0" /></a></div>
                <div class="clearfix"></div>
			</div>
                        

<!-- INCLUDE message.tpl -->        

<!-- IF hide_content != "1" -->
	<div class="outter page_events">

		<div class="typemedia">
			<!-- BEGIN events_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<!-- IF event_picture_preview AND event_picture_active -->
										<a href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_pic_path}{member_media_path}{event_picture_preview}" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ENDIF -->
								</div>
							</td>
							<td class="data" valign="top">
								<h2 class="inner" style="font-size:13px;width:500px !important;overflow:inherit;word-wrap: break-word;"><a href="{top.virtual_path}{event_details_link}">{event_name}</a></h2>
								
                                <div class="actions">
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_guests_link}">{event_total_guests} {lang:"events","total_guests"}</a></div>
										<!-- IF settings.enable_event_comments AND event_allow_comments -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_comments_link}">{event_total_comments} {lang:"events","total_comments"}</a></div>
										<!-- ENDIF -->
										<!-- IF settings.enable_event_pictures -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_pictures_link}">{event_total_pictures} {lang:"events","total_pictures"}</a></div>
										<!-- ENDIF -->
                                        <div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"events","creator"}: <a href="{top.virtual_path}{member_profile_link}">{member_username}</a>
                                        </div>
									</div>
									<div class="clearfix"></div>
								</div>
                                
                                <div class="datainfo" style="padding-top:5px;width:500px !important;overflow:inherit;word-wrap: break-word;">
									<dl class="datainfo">
										<dt style="float:left; font-size:13px;">{event_field_summary_name}:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;width:400px !important;overflow:inherit;word-wrap: break-word;"><span style="width:400px !important;overflow:inherit;word-wrap: break-word;">{event_field_summary_value}</span></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;">{event_field_place_name}:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;">{event_field_place_value}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;">{lang:"events","startdate"}:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;">{event_start_date}</dd>
                                        <div class="clearfix"></div>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />
			<!-- END events_entries -->
		</div>
		<div class="clear"></div>

	</div>
</div>
<!-- ENDIF -->

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->