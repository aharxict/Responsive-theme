<!-- IF ext_friends -->
	<!-- BEGIN ext_friends -->
		<div class="image">
			<!-- IF member_picture AND member_picture_active -->
				<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" /><br/></a>
			<!-- ELSE -->
				<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /><br/></a>
			<!-- ENDIF -->
			<a href="{top.virtual_path}{member_profile_link}">{trim:member_username,7}</a>
		</div>
	<!-- END ext_friends -->
	<div class="clear"></div>
<!-- ENDIF -->