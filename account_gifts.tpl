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
						<div class="hide-on-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" /></a>
							<!-- ELSE -->
                            <a href="{top.virtual_path}{session.username}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /></a>
                            <!-- ENDIF -->
							
						</div>
                        </div>

						<div class="hide-on-mobile">
                        <!-- INCLUDE ext.member_sidebar.tpl -->
                        </div>
						
                        <div class="hide-on-mobile">
                        <!-- INCLUDE ext.search.tpl -->
                        </div>
                    
                    </div>

</div>
<!-- /LEFT SIDEBAR -->
					
					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"gifts","app_gifts"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/inbox/","index.php?m=account_gifts&p=inbox"}" class="btn <!-- IF gifts_folder == "1" -->active<!-- ENDIF -->"><i class="glyphicon glyphicon-gift"></i> {lang:"gifts","opt_inbox"} ({session.totaligifts})</a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/sent/","index.php?m=account_gifts&p=sent"}" class="btn <!-- IF gifts_folder == "2" -->active<!-- ENDIF -->"><i class="glyphicon glyphicon-gift"></i> {lang:"gifts","opt_sent"} ({session.totalsgifts})</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_account_gifts">

		<form name="gifts" method="post" action="{virtual_path}{gifts_delete_link}">
<table class="pmbox" style="width:100%;">
				<tr class="header" style="background: transparent url('{top.virtual_tpl_path}{session.template}/media/border.png') repeat-x scroll left bottom; padding-bottom: 10px; margin-bottom: 15px;">
					<td class="checkbox" style="margin-top:0px; width:5%; padding-left:30px;">
                        <input style="widht:15px;" type="checkbox" name="check_all_gifts" id="check_all_gifts" class="checkbox form-control" onclick="toggleItems(this.form, this.checked)" />
					</td>
					<td class="sender" style="width:10%px;">
						<strong><!-- IF gifts_folder == "1" -->{lang:"gifts","from"}<!-- ELSE -->{lang:"gifts","to"}<!-- ENDIF --></strong>
					</td>
					<td class="subject" style="width:80%">
						<strong>{lang:"gifts","message"}</strong>
					</td>
				</tr>
				<!-- BEGIN gifts -->
                    <tr class="row {ifelse:rowlast,"1","dataitemlast",""} <!-- IF top.gifts_folder == "1" AND gift_new -->new<!-- ENDIF -->" style="background: transparent url('{top.virtual_tpl_path}{session.template}/media/border.png') repeat-x scroll left bottom; padding-bottom: 10px; margin-bottom: 15px;">
						<td class="checkbox" valign="top" style="padding-top:10px; width:15px; padding-bottom:10px; padding-left:30px;">
							<input style="width:15px;" type="checkbox" name="gift_id[{gift_message_id}]" id="gift_id_{gift_message_id}" class="checkbox" />
						</td>
						
                         <td class="sender" valign="top" style="padding-top:10px; padding-right:10px; padding-bottom:10px;">
							<div class="image">
								<!-- IF top.gifts_folder == "1" -->
									<!-- IF gift_privacy == "2" -->
										<a href="{top.virtual_path}{gift_link}" title="{gift_name}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="{gift_name}" style="border-radius:3px; height:75px;" /><br /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{gift_link}" title="{gift_name}"><img style="border: 0px" src="{top.virtual_pic_path}{gift_filename}" alt="{gift_name}" style="border-radius:3px; height:75px;" /><br /></a>
									<!-- ENDIF -->
								<!-- ELSE -->
									<a href="{top.virtual_path}{gift_link}" title="{gift_name}"><img style="border: 0px" src="{top.virtual_pic_path}{gift_filename}" alt="{gift_name}" style="border-radius:3px; height:75px;" /><br /></a>
								<!-- ENDIF -->
							</div>
						</td>
                        
                        <td class="subject" valign="top" style="padding-top:10px; padding-bottom:10px;">
							<a href="{top.virtual_path}{gift_link}">
							<div class="preview">Meddelande: {trim:gift_message,90}</div>
                            </a>
                            <div class="date" style="font-size:12px;">Från: 
                            <!-- IF top.gifts_folder == "1" -->
								<!-- IF gift_privacy == "2" -->
									{lang:"gifts","anonymous"}
								<!-- ELSE -->
									<a href="{top.virtual_path}{member_profile_link}">{trim:member_username,25}</a>
								<!-- ENDIF -->
							<!-- ELSE -->
								<a href="{top.virtual_path}{member_profile_link}">{trim:member_username,25}</a>
							<!-- ENDIF -->, {gift_date}</div>
						</td>
                        
					</tr>
				<!-- END gifts -->
                <tr>
					<td colspan="3" style="padding-top:15px;">
						<a href="#" class="btn" onclick="javascript:confirmForm('{lang:"gifts","delete?"}', 'gifts')" title="{lang:"gifts","delete"}">{lang:"gifts","delete"}</a>
					</td>
				</tr>
			</table>
 		</form>

	</div>
</div>
	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"gifts","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"gifts","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

<!-- ENDIF -->
		</div>
		<div class="clear"></div>

	</div>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->