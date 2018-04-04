<!-- INCLUDE header.tpl -->

<div class="section section-header">
<div class="container">
<div class="row">

<!-- IF loggedin -->
<!-- INCLUDE user-menu.tpl -->
<!-- ENDIF -->

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post Excerpt -->
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            
                            <!-- INCLUDE member_profile_picture.tpl -->
                            
                            						

							
						</div>
                        
                        
                        <div style="box-shadow: 1px 1px 5px 0 #ced4e0;">
                        <ul class="list-group" style="margin-top: 10px; margin-bottom:5px !important;">
                        
                        <!-- IF settings.enable_friends AND member_is_friend == "0" -->
						<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a href="{virtual_path}{member_add_friends_link}" title="{lang:"member","friends"}"><span class="glyphicon glyphicon-user" style="width:20px;"></span> {lang:"member","add_friends"}</a>
                        </li>
						<!-- ENDIF -->
                        
                        <!-- IF settings.enable_favorites AND member_is_self_favorite == "0" -->
						<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a href="{virtual_path}{member_add_favorites_link}" title="{lang:"member","add_favorites"}"><span class="glyphicon glyphicon-star" style="width:20px;"></span> {lang:"member","add_favorites"}</a>
                        </li>
						<!-- ENDIF -->
                        
                        <!-- IF settings.enable_messaging -->
                        <li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a title="{lang:"member","send_message"}" href="{virtual_path}{member_send_message_link}"> <span class="glyphicon glyphicon-comment" style="width:20px;"></span> {lang:"member","send_message"}</a>
                        </li>
                        <!-- ENDIF -->
                        
                        <!-- IF settings.enable_gifts -->
						<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a href="{virtual_path}{member_send_gift_link}" title="{lang:"member","send_gift"}"><span class="glyphicon glyphicon-gift" style="width:20px;"></span> {lang:"member","send_gift"}</a></li>
						<!-- ENDIF -->
                        
                        <!-- IF settings.quick_messages -->
						<li class="list-group-item wink" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
							<a href="#" title="{lang:"member","send_wink"}" onclick="showhide_field('send_wink_box');return false;"><span class="glyphicon glyphicon-eye-open" style="width:20px;"></span> {lang:"member","send_wink"}</a>
								<div id="send_wink_box" class="winkbox" style="display: none">
									<select class="select form-control" id="quick_messages" name="quick_messages">
										{dropdownlist:settings.quick_messages,""}
									</select>
									<a href="#" class="submit btn" onclick="send_wink({member_id},$('#quick_messages').val());return false;">{lang:"core","submit"}</a>
									<a href="#" onclick="showhide_field('send_wink_box');return false;" class="cancel"></a>
								</div>
						</li>
						<!-- ENDIF -->
                        
                        <!-- IF loggedin AND settings.enable_chat AND session.can_chat -->
							<!-- IF member_access_chat == "1" AND member_is_friend == "0" -->
								<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; margin-bottom:0;"><a href="#" onclick="alert('{lang:"member","chat_friends_only"}');return false;" title="{lang:"member","chat"}"><span class="glyphicon glyphicon-comment" style="width:20px;"></span> {lang:"member","chat"}</a></li>
								<!-- ELSE -->
								<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; margin-bottom:0;"><a href="#" onclick="return chatInitIM({member_id},'{member_username}')" title="{lang:"member","chat"}"><span class="glyphicon glyphicon-comment" style="width:20px;"></span> {lang:"member","chat"}</a></li>
							<!-- ENDIF -->
						<!-- ENDIF -->
                        
                        <!-- IF settings.enable_blocked_members -->
                        <li class="list-group-item" style="border-left:none !important; border-right:none !important; border-bottom:none; border-top:none; margin-bottom:0;">
                        <a href="#" onclick="javascript:confirmLink('{lang:"member","block?"}', '{virtual_path}{member_block_link}');return false;" title="{lang:"member","block"}"><span class="glyphicon glyphicon-minus-sign" style="width:20px;"></span> {lang:"member","block"}</a>
                        </li>
                        <!-- ENDIF -->
	                    </ul>
                        </div>
                        
                        {members:limit=12,orderby="visitdate",cache_time=0,visitors_id=member_id,template="ext.profile_visitors.tpl"}
					
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="padding-bottom:0px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC;">
								<div style="float:left;"><h2>{member_username}'s {lang:"member","frm_profile"}</h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="#profile" aria-controls="profile" role="tab" class="btn" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> <span style="text-transform:uppercase;">{lang:"member","frm_profile"}</span></a>
                                <a href="#pictures" aria-controls="pictures" role="tab" class="btn" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> <span style="text-transform:uppercase;">{lang:"member","frm_pictures"}</span></a>
                                
                                <!-- IF settings.enable_guestbooks -->
                                <a href="{virtual_path}{member_guestbook_link}" class="btn"><i class="glyphicon glyphicon-book"></i> <span style="text-transform:uppercase;">{lang:"member","frm_guestbook"} ({member_total_guestbooks})</span></a>
                                <!-- ENDIF -->
                                
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<div class="single-post-content" style="border-bottom:none;">
                            <!-- INCLUDE message.tpl -->
                            
 
<div role="tabpanel">

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="profile">
    <!-- MORE DETAILS -->
    <div class="dataitem single">

							<!-- BEGIN profile_groups -->
								<div class="datainfo profile">
									<dl class="datainfo" style="padding:13px 13px 13px 13px; border-radius: 3px 3px 3px 3px; margin-top:-1px; margin-bottom:15px;">
                                    <h3 style="font-size:18px;">{group_name}</h3>
										<!-- BEGIN profile_fields -->
											<dt style="float:left;">{field_name}:</dt>
											<dd style="float:left; padding-left:7px;">
												<!-- IF field_value -->
													<!-- IF field_type == "checkbox" -->
														{break:field_value}
													<!-- ELSEIF field_type == "birthday" -->
														{field_value_years}
													<!-- ELSE -->
														{field_value}
													<!-- ENDIF -->
												<!-- ELSE -->
													{lang:"core","user_field_none"}
												<!-- ENDIF -->
											</dd>
                                            <div class="clearfix" style="margin-bottom:7px;"></div>
										<!-- END profile_fields -->
									</dl>
								</div>
								<script type="text/javascript" language="javascript">switch_tabs('profile_data', {rowcnt}, 1, 1)</script>
							<!-- END profile_groups -->


						</div>
    <!-- /MORE DETAILS -->
    
    <div class="clearfix"></div>
    
    

    </div>
    <!-- /MORE DETAILS -->
    
    
    <div role="tabpanel" class="tab-pane" id="pictures">
    <p style="font-weight:500;">{member_username}'s pictures...</strong></p>
    {pictures:member_id=member_id}
    </div>
    
  </div>

</div>

                            
                            
                            
							</div>
						</div>


</div>
<!-- End Blog Post Excerpt -->

</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->