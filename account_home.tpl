<!-- INCLUDE header.tpl -->

<div class="section section-header">
<div class="container">
<div class="row">

<!-- IF loggedin -->
<!-- INCLUDE user-menu.tpl -->
<!-- ENDIF -->

<style type="text/css">
.tag {
   position: relative;
   background-color: #3B3C41;
   padding: 5px;
   color: #FFFFFF;
   width:100%;
   text-align:center;
   font-weight: bold;
   border-radius: 0px 0px 2px 2px;
}
.tagthumb {
   position: relative;
   bottom: 5px;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:95.3%;
   text-align:center;
   font-weight: bold;
}

</style>

<div class="section" style="padding-top:10px;">
	<div class="container">
		<div class="row">
		
        <!-- LEFT SIDEBAR -->
		<div class="col-sm-4 col-leftside">
			<div class="hide-mobile">
            <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
                
                <!-- IF session.picture AND session.picture_active -->
				<a href="{top.virtual_path}{session.username}">
                <img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<!-- ELSE -->
				<a href="{top.virtual_path}{session.username}">
                <img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<!-- ENDIF -->
                
			</div>
            </div>
			
            <div class="hide-mobile">
            <!-- INCLUDE ext.member_sidebar.tpl -->
            </div>
			
            <div class="hide-mobile">
            <!-- INCLUDE ext.search.tpl -->					
            </div>
            
		</div>
		<!-- /LEFT SIDEBAR -->
					

		<!-- RIGHT CONTENT -->
		<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"home","app_home"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/home/","index.php?m=account_home"}" class="btn active"><i class="glyphicon glyphicon-edit"></i> {lang:"core","usermenu_page"}</a>
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/profile/","index.php?m=account_profile"}" class="btn"><i class="glyphicon glyphicon-edit"></i> {lang:"core","usermenu_profile"}</a>
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/photo/","index.php?m=account_photo"}" class="btn"><i class="glyphicon glyphicon-edit"></i> {lang:"core","usermenu_photo"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   

<!-- IF hide_content != "1" -->

	<div class="outter account_home">
		<div class="typepage">

			<div class="dataitem single" style="margin-bottom:20px; border: 1px #eee solid; padding:20px 13px 13px 13px; border-radius: 3px 3px 3px 3px;">
				<div class="alert alert-success fade in" style="margin-top:10px;">
					<a href="#" class="close" data-dismiss="alert">×</a>
					<p>Hallo, <a href="{top.virtual_path}{member_profile_link}">{session.username}</a>! hier ein Ueberblick deiner Events </p>
				</div>

				<table class="plain" style="width:100%;">
					<tr style="width:100%;">
						<td class="data" style="width:50%" valign="top">
							<div class="datainfo profile">
                            	<h2 style="font-size:18px;">Profile information</h2>
								<dl class="datainfo">
									<!-- IF member_online -->
                                    <dt style="float:left;">Status:</dt>
                                    <dd style="float:left; padding-left:7px;">Online</dd>
                                    <div class="clearfix" style="margin-bottom:7px;"></div>
                                    <!-- ENDIF -->
                                    <!-- INCLUDE member_sections_card.tpl -->
									<!-- IF settings.enable_member_rating AND session.rated -->
										<dt style="float:left;">{lang:"home","score"}:</dt>
										<dd style="float:left; padding-left:7px;">{member_score} ({lang:"home","votes"}: {member_votes})</dd>
                                        <div class="clearfix" style="margin-bottom:7px;"></div>
									<!-- ENDIF -->
								</dl>
							</div>
						</td>
						<td class="data" style="width:50%" valign="top">
							<div class="datainfo profile">
								<h2 style="font-size:18px;">{lang:"home","details"}</h2>
								<dl class="datainfo">
									<dt style="float:left;">{lang:"home","new_messages"}:</dt>
									<dd style="float:left; padding-left:7px;"><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/","index.php?m=account_messages"}">{session.new_messages}</a></dd>
                                    <div class="clearfix" style="margin-bottom:7px;"></div>
									<!-- IF settings.enable_friends -->
										<dt style="float:left;">{lang:"home","new_friends"}:</dt>
										<dd style="float:left; padding-left:7px;">
											<!-- IF session.new_friends -->
												<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/friends/requests/","index.php?m=account_friends&p=requests"}">{session.new_friends}</a>
											<!-- ELSE -->
												<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/friends/","index.php?m=account_friends"}">0</a>
											<!-- ENDIF -->
										</dd>
                                        <div class="clearfix" style="margin-bottom:7px;"></div>
									<!-- ENDIF -->
									<!-- IF settings.enable_gifts -->
										<dt style="float:left;">{lang:"home","new_gifts"}:</dt>
										<dd style="float:left; padding-left:7px;"><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/","index.php?m=account_gifts"}">{session.new_gifts}</a></dd>
                                        <div class="clearfix" style="margin-bottom:7px;"></div>
									<!-- ENDIF -->
										<!-- IF settings.enable_credits -->
											<dt style="float:left;">{lang:"home","credits"}:</dt>
											<dd style="float:left; padding-left:7px;"><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/upgrade/credits/","index.php?m=account_upgrade&p=credits"}">{session.totalcredits}</a></dd>
                                            <div class="clearfix" style="margin-bottom:7px;"></div>
										<!-- ENDIF -->
										<!-- IF settings.enable_upgrades -->
											<dt style="float:left;">{lang:"home","membership"}:</dt>
											<dd style="float:left; padding-left:7px;">
												<!-- IF session.can_upgrade_account -->
													<!-- IF session.group_id == settings.regular_member_group -->
														{lang:"home","account_free"}
														- <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/upgrade/","index.php?m=account_upgrade"}">{lang:"home","upgrade"}</a>
													<!-- ELSE -->
														{member_group_name}
														<!-- IF session.expiration_date --><br />
															{lang:"home","expiration"} {session.expiration_date} -
															<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/upgrade/","index.php?m=account_upgrade"}">{lang:"home","renew"}</a>
														<!-- ENDIF -->
													<!-- ENDIF -->
												<!-- ELSE -->
													<!-- IF session.group_id == settings.regular_member_group -->
														{lang:"home","account_free"}
													<!-- ELSE -->
														{member_group_name}
													<!-- ENDIF -->
												<!-- ENDIF -->
											</dd>
                                            <div class="clearfix" style="margin-bottom:7px;"></div>
										<!-- ENDIF -->
								</dl>
							</div>
						</td>
					</tr>
				</table>
			</div>


			<div class="dataitem single subfield" style="margin-bottom:20px; border: 1px #eee solid; padding:13px 13px 13px 13px; border-radius: 3px 3px 3px 3px;">
				<div class="suboptions_wrap">
					<div class="suboptions">
						<ul class="nav nav-ul">
							<!-- BEGIN profile_groups -->
								<!-- IF group_label != "general" -->
									<li><a href="javascript:void(0)" id="profile_data_{rowcnt}_tab" onclick="switch_tabs('profile_data', {rowcnt})">{group_name}</a></li>
								<!-- ENDIF -->
							<!-- END profile_groups -->
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>

				<!-- BEGIN profile_groups -->
					<!-- IF group_label != "general" -->
						<div class="datainfo profile" id="profile_data_{rowcnt}_content" style="display: none">
							<dl class="datainfo">
								<!-- BEGIN profile_fields -->
									<div class="data-row">
									<dt>{field_name}:</dt>
									<dd>
										<!-- IF field_value -->
											<!-- IF field_type == "checkbox" -->
												{break:field_value}
											<!-- ELSE -->
												{field_value}
											<!-- ENDIF -->
										<!-- ELSE -->
											{lang:"core","user_field_none"}
										<!-- ENDIF -->
									</dd>
									</div>
								<!-- END profile_fields -->
							</dl>
						</div>
						<script type="text/javascript" language="javascript">switch_tabs('profile_data', {rowcnt}, 1)</script>
					<!-- ENDIF -->
				<!-- END profile_groups -->
			</div>


			<div style="margin-bottom:20px; border: 1px #eee solid; padding:13px 13px 13px 13px; border-radius: 3px 3px 3px 3px;">
            {activities:member_id=member_id,timeframe="45",limit="30"}
            </div>

		</div>
	</div>

<!-- ENDIF -->
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- /RIGHT CONTENT -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->