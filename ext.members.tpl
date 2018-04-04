<div>
<!-- IF ext_members -->
			<!-- BEGIN ext_members -->
                <div class="col-sm-3 col-xs-6" style="float:left;">
                <div class="image" style="float:left; margin-bottom:7px; padding: 4px; border: 1px solid #ddd;">
					<!-- IF member_picture AND member_picture_active -->
						<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" /><br/></a>
					<!-- ELSE -->
						<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /><br/></a>
					<!-- ENDIF -->
				<div style="text-align:center;">
                	<a href="{top.virtual_path}{member_profile_link}" style="line-height:28px;">{trim:member_username,12}</a>
                </div>
                
                <div style="padding-top: 5px; border-top: 1px solid #ddd; width:100%;">
                <div style="width:50%; float:left; text-align:center;"><a href="{top.virtual_path}account/messages/compose/{member_id}"><span class="glyphicon glyphicon-envelope"></span></a></div>
                <div style="width:50%; float:left; text-align:center; border-left: 1px solid #eee;"><a href="{top.virtual_path}account/favorites/add/{member_id}"><span class="glyphicon glyphicon-heart"></span></a></div>
                <div class="clearfix"></div>
                </div>
                
                </div>
                </div>
			<!-- END ext_members -->
<!-- ENDIF -->
</div>