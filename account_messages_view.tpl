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
<!-- LEFT SIDEBAR -->
<div class="hide-mobile">

					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>
                        
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
					
                    
                    </div>

</div>
<!-- /LEFT SIDEBAR -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"messages","app_message"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/inbox/","index.php?m=account_messages&p=inbox"}" class="btn"><i class="glyphicon glyphicon-inbox"></i> {lang:"messages","opt_inbox"} ({session.totalimessages})</a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/sent/","index.php?m=account_messages&p=sent"}" class="btn"><i class="glyphicon glyphicon-send"></i> {lang:"messages","opt_sent"} ({session.totalsmessages})</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
							<div class="content-box message-box">
                        <!-- INCLUDE message.tpl -->   
            			<span>{messages_info}</span>
        
        <div class="form" style="margin-top:15px;">
        <table class="plain">
					<tr>
						<td valign="top">
							<div class="image">
							<!-- IF member_picture AND member_picture_active -->
                            <a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" title="{trim:member_username,25}" border="0" style="border-radius:3px; height:150px;" /><br/></a>
                            <!-- ELSE -->
                            <a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="border-radius:3px; height:150px;" /><br/></a>
                            <!-- ENDIF -->
							</div>
						</td>
		                <td class="data" style="padding-left:15px;" valign="top">
							<div class="itemheader">
								<!-- IF message_folder == "1" -->{lang:"messages","from"}<!-- ELSE -->{lang:"messages","to"}<!-- ENDIF -->: <a href="{virtual_path}{member_profile_link}">{member_username}</a>
                                <br /><span style="font-size:12px;">{lang:"messages","date"} {message_date}</span>
                                <h2 class="inner" style="font-size:14px; padding-top:5px;"><a href="{top.virtual_path}{message_link}">{message_subject}</a></h2>
                                <div class="entry">
								{message_body}
								<form method="post" name="message" id="privatemessageform" action="{virtual_path}{message_reply_link}">
								<input type="hidden" name="isreply" value="1" />
								<input name="subject" value="{message_subject}" type="hidden" />
								</form>
								<form name="messages" method="post" action="{virtual_path}{message_delete_link}">
								<input type="hidden" name="message_id[{message_id}]" value="1" id="message_id_{message_id}" />
								</form>
								</div>
								
								<div class="clear"></div>
							</div>
							
							<div class="itemfooter" style="padding-top:15px;">
    								<!-- IF message_folder == "1" -->
									<a class="btn" href="#" onclick="$('#privatemessageform').submit()">{lang:"messages","reply"}</a>
									<!-- ENDIF -->
									<a class="btn" href="#" onclick="showhide_field('pmhistory','')">{lang:"messages","history"}</a>
									<a class="btn" href="#" onclick="confirmForm('{lang:"messages","delete_one?"}', 'messages')">{lang:"messages","delete_button"}</a>
									<!-- IF settings.enable_reports AND settings.enable_message_reports AND session.can_submit_reports AND message_folder == "1" -->
									<!-- {reports:type="message",member_id=member_id,item_id=message_id} -->
									<!-- ENDIF -->
								<div class="clear"></div>
							</div>
							<div class="entry">
								<div id="pmhistory" class="pmhistory" style="display: none;position:relative">
									<!-- IF message_history -->
										<!-- BEGIN message_history -->
											<p class="row{rownum}">
												{member_username} - {message_date}<br />
												{message_body}
											</p>
										<!-- END message_history -->
									<!-- ELSE -->
										<p>{lang:"messages","no_history"}</p>
									<!-- ENDIF -->
								</div>
							</div>
						</td>
		            </tr>
		        </table>
        
        
        
        
        
        
        
        
        
        
        
        
        
        

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