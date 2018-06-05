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
								<div style="float:left;"><h2>{lang:"messages","app_inbox"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/inbox/","index.php?m=account_messages&p=inbox"}" class="btn active"><i class="glyphicon glyphicon-inbox"></i> {lang:"messages","opt_inbox"} ({session.totalimessages})</a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/sent/","index.php?m=account_messages&p=sent"}" class="btn"><i class="glyphicon glyphicon-send"></i> {lang:"messages","opt_sent"} ({session.totalsmessages})</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
						<div class="content-box">
                        <!-- INCLUDE message.tpl -->   
            			<span>{messages_info}</span>
        
        <div class="form 123" style="margin-top:15px;">
								<form name="messages" method="post" action="{virtual_path}{messages_delete_link}">

			<table class="pmbox" style="width:100%;">
				<tr class="header" style="border-bottom: 1px dotted #CCC;">
					<td class="checkbox" style="margin-top:0px; width:5%;">
						<input type="checkbox" name="check_all_messages" id="check_all_messages" class="checkbox form-control" onclick="toggleItems(this.form, this.checked)" />
					</td>
					<td class="sender" style="width:10%px;">
						<strong>{lang:"messages","to"}</strong>
					</td>
					<td class="subject" style="width:80%">
						<strong>{lang:"messages","subject"}</strong>
					</td>
				</tr>
				<!-- BEGIN profile_messages -->
					<tr class="row {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}" style="border-bottom: 1px dotted #CCC; <!-- IF message_new -->background:#E0F0F7;<!-- ENDIF -->">
						<td class="checkbox" valign="top" style="padding-top:10px; width:15px; padding-bottom:10px;">
							<input type="checkbox" name="message_id[{message_id}]" id="message_id_{message_id}" class="checkbox messageCheckbox form-control" />
						</td>
						<td class="sender" valign="top" style="padding-top:10px; padding-right:10px; padding-bottom:10px;">
							<div class="image">
							<!-- IF member_picture AND member_picture_active -->
                            <a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" title="{trim:member_username,25}" border="0" style="border-radius:3px; height:75px;" /><br/></a>
                            <!-- ELSE -->
                            <a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="border-radius:3px; height:75px;" /><br/></a>
                            <!-- ENDIF -->
							</div>
                            
						</td>
						<td class="subject" valign="top" style="padding-top:10px; padding-bottom:10px;">
							<a href="{top.virtual_path}{message_link}">
                            Rubrik: {trim:message_subject,90}
							<div class="preview">Meddelande: {trim:message_body,90}</div>
                            <div class="date" style="font-size:12px;">{message_date} <!-- IF message_new -->({lang:"messages","status_unread"})<!-- ELSE -->({lang:"messages","status_read"})<!-- ENDIF --></div></a>
						</td>
					</tr>
				<!-- END profile_messages -->
				<tr>
					<td colspan="3" style="padding-top:15px;">
						<a href="#" class="btn" onclick="javascript:confirmForm('{lang:"messages","delete?"}', 'messages')" title="{lang:"messages","delete"}">{lang:"messages","delete"}</a>
					</td>
				</tr>
			</table>

		</form>
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