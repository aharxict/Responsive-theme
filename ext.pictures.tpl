<!-- IF ext_pictures -->
	<!-- BEGIN ext_pictures -->
		<div class="image" style="margin-top:15px; float:left; padding-right:5px;">
			<!-- IF picture_adult == "0" OR picture_adult AND session.can_view_adult_images AND session.showadult -->
				<!-- <a href="{top.virtual_path}{picture_link}"> -->
                <a href="{top.virtual_path}{picture_link}"><img src="{top.virtual_pic_path}{member_media_path}{picture_preview}" alt="" border="0" style="width:150px; border-radius:3px;" /></a>
                <!-- </a> -->
			<!-- ELSE -->
				<a href="{top.virtual_path}{picture_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" /></a>
			<!-- ENDIF -->
		</div>
	<!-- END ext_pictures -->
	<div class="clearfix"></div>
<!-- ENDIF -->
