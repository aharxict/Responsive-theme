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
	                           
                            <!-- INCLUDE member_sections_picture_profile.tpl -->

						</div>

					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"messages","app_compose"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/inbox/","index.php?m=account_messages&p=inbox"}" class="btn"><i class="glyphicon glyphicon-inbox"></i> {lang:"messages","opt_inbox"} ({session.totalimessages})</a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/sent/","index.php?m=account_messages&p=sent"}" class="btn"><i class="glyphicon glyphicon-send"></i> {lang:"messages","opt_sent"} ({session.totalsmessages})</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                         <div class="content-box message-box">
            			<span>{messages_info}</span>
                        
                        <!-- INCLUDE message.tpl -->
        
        <div class="form" style="margin-top:15px; margin-bottom: 25px;">
								<form method="post" name="message" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt style="padding-bottom:10px;"><label for="field_subject">{lang:"messages","composeto"}: <!-- INCLUDE member_sections_name.tpl --></label></dt>
											<dt><label for="field_subject">{lang:"messages","subject"}</label></dt>
											<dd style="padding-bottom:10px;"><input class="text text_small form-control" id="field_subject" type="text" name="subject" maxlength="255" value="{message_subject}" /></dd>
											<dt>
												<label for="field_body">{lang:"messages","body"}<!-- IF settings.message_chars_counter --> <span style="font-weight:normal">({character_count})</span><!-- ENDIF --></label>
											</dt>
											<dd>
												<textarea id="field_body" class="textarea textarea_small form-control" cols="40" rows="5" name="body" <!-- IF settings.message_chars_counter -->onkeyup="strcounter('field_body','field_body_count',this.value,{settings.max_message_chars})" onkeydown="strcounter('field_body','field_body_count',this.value,{settings.max_message_chars})" onchange="strcounter('field_body','field_body_count',this.value,{settings.max_message_chars})"<!-- ENDIF -->>{message_body}</textarea>
											</dd>
    										<dd class="submit" style="padding-bottom:20px;padding-top:20px;">
    											<div style="float: left">
													<input class="submit btn" name="submit" value="{lang:"messages","submit"}" type="submit" />&nbsp;
												</div>
												<!-- IF settings.pm_enable_smilies -->
													<div class="smilies" style="float: right">
														<p class="smilies"><a href="#" onclick="showhide_field('smilies_popup_box');return false;"><img src="{virtual_tpl_path}{session.template}/media/smilies.png" border="0" align="absmiddle" /><br /></a></p>
														<div class="smilies-inner">
															<div class="smiliesbox" style="display: none" id="smilies_popup_box">
																<!-- BEGIN smilies -->
																	<div class="smiliesitem"><a href="#" onclick="selectSmiley({smiley_id},'field_body');showhide_field('smilies_popup_box');return false;" title="{name} - {shortcut}"><img src="{top.virtual_pic_path}{filename}" alt="{name} - {shortcut}" border="0" align="absmiddle" /><br /></a></div>
																	<!-- IF rowcnt > "0" AND rowcnt mod "6" == "5" --><div class="clear"></div><!-- ENDIF -->
																<!-- END smilies -->
															</div>
														</div>
													</div>
												<!-- ENDIF -->
												<div class="clear"></div>
											</dd>
										</dl>
									</div>
									<input type="hidden" name="ismessage" value="1" />
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