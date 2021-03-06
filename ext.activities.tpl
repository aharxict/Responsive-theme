<!-- IF ext_activities -->
	<div class="subtitle subtitle_small">
		<h2 style="font-size:18px;">{lang:"core","activities"}</h2>
	</div>
	<table class="plain activities">
		<!-- BEGIN ext_activities -->
			<tr <!-- IF rowlast -->class="last"<!-- ENDIF -->>
				<td class="activity" style="padding-bottom:5px;">
					<!-- IF activity_type == "friends" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/friend.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "blogs" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/blog.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "albums" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/album.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "pictures" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/picture.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "audios" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/audio.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "videos" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/video.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "events" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/event.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "guestbooks" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/guestbook.png" align="absmiddle" />
					<!-- ELSEIF activity_type == "gifts" -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/gift.png" align="absmiddle" />
					<!-- ELSE -->
						<img src="{top.virtual_tpl_path}{session.template}/media/activities/comment.png" align="absmiddle" />
					<!-- ENDIF -->
					{activity_action} {activity_date}.
				</td>
			</tr>
		<!-- END ext_activities -->
	</table>
	<div class="clear"></div>
	<script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('a.tooltip').ToolTip('htmltooltip');
		});
	</script>
<!-- ENDIF -->
