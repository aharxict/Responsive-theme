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
								<div style="float:left;"><h2>{lang:"events","app_results"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/calendar/","index.php?m=events&p=calendar"}" class="btn"><i class="glyphicon glyphicon-calendar"></i> {lang:"events","frm_events"}</a>
                                
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/search/","index.php?m=events&p=search"}" class="btn"><i class="glyphicon glyphicon-search"></i> {lang:"events","opt_search"}</a>
                                
                                <a href="{virtual_path}{search_link}" class="btn active"><i class="glyphicon glyphicon-search"></i> {lang:"events","opt_results"}</a>
                                
								<!-- IF hide_content != "1" -->
								<a href="javascript:void(0)" onclick="showhide_field('div_reorder')" title="{lang:"events","reorder"}" class="btn"><i class="glyphicon glyphicon-search"></i> {lang:"events","reorder"}</a>
								<!-- ENDIF -->
                                
                                </div>

                                <div class="clearfix"></div>
                           </div>

<!-- INCLUDE message.tpl -->        

<!-- IF hide_content != "1" -->

	<div class="outter page_events_search_results">
		<div class="typemedia">
			<div class="dataitem single" id="div_reorder" style="display: none">
				<div class="form">
					<form name="form_reorder" action="{virtual_path}{search_link}" method="post">
						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<dt><label for="field_orderby">{lang:"events","order_by"}</label></dt>
								<dd><select class="select form-control" name="orderby" id="field_orderby" style="width:auto;">{dropdownlist:orderby_box,search_orderby}</select></dd>
								<dt><label for="field_direction">{lang:"events","direction"}</label></dt>
								<dd><select class="select form-control" name="direction" id="field_direction" style="width:auto;">{dropdownlist:direction_box,search_direction}</select></dd>
								<dd class="submit"><input class="submit btn" name="submit" value="{lang:"events","submit"}" type="submit" /></dd>
							</dl>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
			<!-- BEGIN search_events -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<!-- IF event_picture_preview AND event_picture_active -->
										<a href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_pic_path}{member_media_path}{event_picture_preview}" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ENDIF -->
								</div>
							</td>
							<td class="data" valign="top">
								<h2 class="inner" style="font-size:16px;"><a href="{top.virtual_path}{event_details_link}">{event_name}</a></h2>
                                <div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_guests_link}">{event_total_guests} {lang:"events","total_guests"}</a></div>
										<!-- IF settings.enable_event_comments AND event_allow_comments -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_comments_link}">{event_total_comments} {lang:"events","total_comments"}</a></div>
										<!-- ENDIF -->
										<!-- IF settings.enable_event_pictures -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_pictures_link}">{event_total_pictures} {lang:"events","total_pictures"}</a></div>
										<!-- ENDIF -->
									<div class="clearfix"></div>
                                </div>
								<div class="datainfo" style="padding-top:5px;">
									<dl class="datainfo">
										<dt style="float:left;">{event_field_summary_name}:</dt>
										<dd style="float:left; padding-left:7px;">{event_field_summary_value}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left;">{event_field_place_name}:</dt>
										<dd style="float:left; padding-left:7px;">{event_field_place_value}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left;">{lang:"events","startdate"}:</dt>
										<dd style="float:left; padding-left:7px;">{event_start_date}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left;">{lang:"events","creator"}:</dt>
										<dd style="float:left; padding-left:7px;"><a href="{top.virtual_path}{member_profile_link}">{member_username}</a></dd>
                                        <div class="clearfix"></div>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />
			<!-- END search_events -->
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

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->