<!-- IF ext_members -->
<div style="position: relative; box-shadow: 1px 1px 5px 0px #CED4E0; border-radius: 3px; background: #FFF none repeat scroll 0% 0%; padding:5px; margin-bottom:7px;">
	<div class="sidebox_wrap">
		<div class="sidebox">
			<div class="memberslist" style="padding-left:5px; padding-bottom:5px;">
            <h2 style="font-size:16px; font-weight:300; border-bottom: 2px dotted #CCC; padding-bottom:5px; margin-bottom:10px;">{lang:"core","home_latest_visitors"}...</h2>
				<!-- BEGIN ext_members -->
					<div class="image" style="float:left; padding-right:5px; padding-bottom:5px;">
						<!-- IF member_picture AND member_picture_active -->
							<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" width="60" height="60" style="width:60px; border-radius:3px;" /><br/></a>
						<!-- ELSE -->
                        <a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" width="60" height="60" style="width:60px; border-radius:3px;" /><br/></a>
                        <!-- ENDIF -->
					</div>
				<!-- END ext_members -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- ENDIF -->