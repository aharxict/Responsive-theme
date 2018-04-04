<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li>{anchor:url1="events/calendar/",url2="index.php?m=events&p=calendar",name="events|frm_events"}</li>
				<li><span>&#187;</span></li>
				<li><a href="{virtual_path}{curr_page}">{events_date}</a></li>
				<li class="action"><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/rss/","index.php?m=events&p=rss"}" target="_blank"><img src="{virtual_tpl_path}{session.template}/media/rss.png" border="0" /></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{events_date}</h1>
		</div>
		<div class="options">
			<ul>
				<li>{anchor:url1="events/calendar/",url2="index.php?m=events&p=calendar",name="events|opt_calendar",class="active"}</li>
				<li>{anchor:url1="events/search/",url2="index.php?m=events&p=search",name="events|opt_search"}</li>
				<li class="break"></li>
				<li><a href="{virtual_path}{prev_page}">&laquo; {lang:"events","prev_month"}</a></li>
				<li><a href="{virtual_path}{next_page}">{lang:"events","next_month"} &raquo;</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_events">

		<table class="calendar" cellpadding="0" cellspacing="1" style="">
			<tr class="weekdays">
				<!-- BEGIN weekdays -->
					<td>{name}</td>
				<!-- END weekdays -->
			</tr>
			<tr>
				<!-- BEGIN events_entries -->
					<td class="eventdays <!-- IF events_today -->eventtoday<!-- ENDIF -->" valign="top">
						<p>
							<!-- IF events_day -->
								{events_day}
							<!-- ELSE -->
								&nbsp;
							<!-- ENDIF -->
						</p>
						<!-- IF events_day -->
							<!-- IF events_total > "1" -->
								<a href="javascript:void(0)" onclick="eventScroll({events_day},{events_total});return false;" class="rotate"></a>
							<!-- ENDIF -->
						<!-- ENDIF -->
						<div class="clear"></div>
						<!-- BEGIN events -->
							<div id="event_{parent.events_day}_{rowcnt}" class="event_items_{parent.events_day}" <!-- IF rowcnt != "0" -->style="display:none;"<!-- ENDIF -->>
								<!-- IF member_id -->
									<!-- IF member_picture AND member_picture_active -->
										<a class="eventtooltip" title="&lt;img src={top.virtual_pic_path}{member_media_path}{member_picture} />&lt;span class=birthday>{trim:member_username,20} ({profile_field_age_value_years})&lt;/span>" href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="{member_username}" border="0" /><br/></a>
									<!-- ELSE -->
										<a class="eventtooltip" title="&lt;img src={top.virtual_tpl_path}{session.template}/media/user_picture_none.gif />&lt;span class=birthday>{trim:member_username,20} ({profile_field_age_value_years})&lt;/span>" href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="{member_username}" border="0" /><br/></a>
									<!-- ENDIF -->
									<a href="{top.virtual_path}{member_profile_link}">{trim:member_username,12}</a>
								<!-- ELSE -->
									<!-- IF event_picture_preview AND event_picture_active -->
										<a class="eventtooltip" title="&lt;img src={top.virtual_pic_path}{member_media_path}{event_picture_preview} />&lt;span class=event>{trim:event_name,20}&lt;/span>" href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_pic_path}{member_media_path}{event_picture_preview}" alt="{event_name}" border="0" /><br /></a>
									<!-- ELSE -->
										<a class="eventtooltip" title="&lt;img src={top.virtual_tpl_path}{session.template}/media/content_picture_none.gif />&lt;span class=event>{trim:event_name,20}&lt;/span>" href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="{event_name}" border="0" /><br /></a>
									<!-- ENDIF -->
									<a href="{top.virtual_path}{event_details_link}">{trim:event_name,30}</a>
								<!-- ENDIF -->
							</div>
						<!-- END events -->
					</td>
					<!-- IF rowcnt > "0" AND rowcnt < "35" AND rowcnt mod "7" == "6" AND rowlast != "1" --></tr><!-- IF rowcnt != "34" --><tr><!-- ENDIF --><!-- ENDIF -->
				<!-- END events_entries -->
			</tr>
		</table>
		<script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('a.eventtooltip').ToolTip('eventtooltip');
		});
		</script>

	</div>

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
