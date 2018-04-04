
	<a href="{virtual_path}{member_profile_link}" <!-- IF active_module == "member_profile" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-user"></i> {lang:"member","frm_profile"}</a>
	<!-- IF member_group_id != settings.canceled_member_group -->
		<!-- IF settings.enable_pictures AND member_total_albums -->
			<a href="{virtual_path}{member_pictures_link}" <!-- IF active_module == "member_albums" OR active_module == "member_pictures" OR active_module == "member_pictures_view" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-picture"></i> {lang:"member","frm_pictures"}</a>
		<!-- ENDIF -->
		<!-- IF settings.enable_videos AND member_total_videos -->
			<a href="{virtual_path}{member_videos_link}" <!-- IF active_module == "member_videos" OR active_module == "member_videos_view" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-facetime-video"></i> {lang:"member","frm_videos"} ({member_total_videos})</a>
		<!-- ENDIF -->
		<!-- IF settings.enable_audio AND member_total_music -->
			<a href="{virtual_path}{member_audio_link}" <!-- IF active_module == "member_audio" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-music"></i> {lang:"member","frm_audio"} ({member_total_music})</a>
		<!-- ENDIF -->
		<!-- IF settings.enable_friends AND member_total_friends -->
			<a href="{virtual_path}{member_friends_link}" <!-- IF active_module == "member_friends" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-user"></i> {lang:"member","frm_friends"} ({member_total_friends})</a>
		<!-- ENDIF -->
		<!-- IF settings.enable_events AND member_total_events -->
			<a href="{virtual_path}{member_events_link}" <!-- IF active_module == "member_events" OR active_module == "member_events_joined" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-calendar"></i> {lang:"member","frm_events"} ({member_total_events})</a>
		<!-- ENDIF -->
		<!-- IF settings.enable_gifts AND member_total_gifts -->
			<a href="{virtual_path}{member_gifts_link}" <!-- IF active_module == "member_gifts" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-gift"></i> {lang:"member","frm_gifts"} ({member_total_gifts})</a>
		<!-- ENDIF -->
		<!-- IF settings.enable_blogs AND member_total_blogs -->
			<a href="{virtual_path}{member_blog_link}" <!-- IF active_module == "member_blog" OR active_module == "member_blog_entry" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-book"></i> {lang:"member","frm_blog"} ({member_total_blogs})</a>
		<!-- ENDIF -->
		<!-- IF settings.enable_guestbooks AND member_total_guestbooks -->
			<a href="{virtual_path}{member_guestbook_link}" <!-- IF active_module == "member_guestbook" -->class="active btn"<!-- ELSE -->class="btn"<!-- ENDIF -->><i class="glyphicon glyphicon-book"></i> {lang:"member","frm_guestbook"} ({member_total_guestbooks})</a>
		<!-- ENDIF -->
	<!-- ENDIF -->