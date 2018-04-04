<!-- IF ext_albums -->
	<table class="plain">
		<!-- BEGIN ext_albums -->
			<tr>
				<td>
					<div class="image">
						<!-- IF album_preview AND album_picture_active -->
							<!-- IF album_picture_adult == "0" OR album_picture_adult AND session.can_view_adult_images AND session.showadult -->
								<a href="{top.virtual_path}{album_pictures_link}"><img src="{top.virtual_pic_path}{member_media_path}{album_preview}" alt="" border="0" /></a>
							<!-- ELSE -->
								<a href="{top.virtual_path}{album_pictures_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" /><br /></a>
							<!-- ENDIF -->
						<!-- ELSE -->
							<a href="{top.virtual_path}{album_pictures_link}"><img src="{top.virtual_tpl_path}{session.template}/media/album_picture_none.gif" border="0" /><br /></a>
						<!-- ENDIF -->
					</div>
					<div class="clear"></div>
				</td>
				<td>
					{trim:album_description,38} ({album_total_pictures})<br/>
					<div class="sub">
						<!-- IF album_update_date -->
							{lang:"member","update_date"} {album_update_date}
						<!-- ELSE -->
							{lang:"member","post_date"} {album_post_date}
						<!-- ENDIF -->
					</div>
				</td>
			</tr>
		<!-- END ext_albums -->
	</table>
<!-- ENDIF -->
