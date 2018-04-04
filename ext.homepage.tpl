<!-- IF ext_members -->
<div class="col-md-12 col-sm-12" style="margin:2px; margin-left:0; padding:7px;">
<!-- BEGIN ext_members -->
	<div class="col-sm-2 col-xs-6" style="float:left; padding:5px;">
		<div class="image" style="width:100%;">
		<!-- IF member_picture AND member_picture_active -->
			<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" style="width:100%;" /><br/></a>
		<!-- ELSE -->
			<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /><br/></a>
		<!-- ENDIF -->
		</div>
	</div>
<!-- END ext_members -->
<div class="clearfix"></div>
</div>
<!-- ENDIF -->