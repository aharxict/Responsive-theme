<!-- IF member_picture AND member_picture_active -->
	<!-- IF member_picture_adult == "0" OR member_picture_adult AND session.can_view_adult_images AND session.showadult -->
		<!-- IF top.active_module == "member_profile" AND !member_profile_preview -->
            <!-- <a class="picture_zoom" href="{top.virtual_pic_path}{member_media_path}{member_picture_large}" id="profile_picture_{member_id}" target="_blank"> -->
            <img src="{top.virtual_pic_path}{member_media_path}{member_picture_large}" alt="" border="0" style="width: 100% !important;" />
            <!-- </a> -->
			<div id="profile_picture_{member_id}_zoom" class="picture_zoom_in" style="display:none"><img src="{top.virtual_pic_path}{member_media_path}{member_picture_large}" alt="" border="0" style="width: 100% !important;" width="125" height="125" /><br/></div>
<!-- ELSE -->
<div class="imghover">
<a href="{top.virtual_path}{member_profile_link}">
<img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" style="width: 100% !important;" width="125" height="125" />
</a>
</div>
<!-- ENDIF -->
<!-- ELSE -->
<div class="imghover">
<a href="{top.virtual_path}{member_profile_link}">
<img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" style="width: 100% !important;" width="125" height="125" />
</a>
</div>
<!-- ENDIF -->
<!-- ELSE -->
<div class="imghover">
<a href="{top.virtual_path}{member_profile_link}">
<img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="width: 100% !important;" width="125" height="125" />
</a>
</div>
<!-- ENDIF -->