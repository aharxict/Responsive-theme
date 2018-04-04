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
								<div style="float:left;"><h2>{lang:"gifts","app_send"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/inbox/","index.php?m=account_gifts&p=inbox"}" class="btn <!-- IF gifts_folder == "1" -->active<!-- ENDIF -->"><i class="glyphicon glyphicon-gift"></i> {lang:"gifts","opt_inbox"} ({session.totaligifts})</a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/sent/","index.php?m=account_gifts&p=sent"}" class="btn <!-- IF gifts_folder == "2" -->active<!-- ENDIF -->"><i class="glyphicon glyphicon-gift"></i> {lang:"gifts","opt_sent"} ({session.totalsgifts})<!-- IF session.new_friends --> ({session.new_friends})<!-- ENDIF --></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
<!-- IF hide_content != "1" -->

	<div class="outter page_account_gifts_compose">
<style type="text/css">
.dataitem {    
	background: transparent url('{virtual_path}templates/{session.template}/media/border.png') repeat-x scroll left bottom;
    padding-bottom:15px;
    margin-bottom: 15px;
}
ul.actions li {
	background: transparent url('{virtual_path}templates/{session.template}/media/border.png') repeat-x scroll left bottom;
	padding-bottom:3px;
	padding-top:3px;
	min-width:125px;
}
</style>
<style type="text/css">
.tag {
   position: absolute;
   bottom: 5px;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:95.3%;
   text-align:center;
   font-weight: bold;
}
.tagthumb {
   position: absolute;
   bottom: 0;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:100%;
   text-align:center;
   font-weight: bold;
}
.hoverinfo {
   text-align:center;
   font-weight: bold;
   width:100%;
}
.overlay{
    position: absolute;
    width: 125px;
    overflow-y: hidden;
    transition-property: all;
    transition-duration: .5s;
    transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    height: 125px;
    background-color: rgba(0,0,0,0.0)
    border: 1px solid white;
    bottom: 0;
    left: 0;
    /*opacity: 0;*/
	padding:5px;
	padding-top:25px;
	color: rgba(255,255,255,0.0);
	text-align:center;
} .overlay:hover{
    color: rgba(255,255,255,1.0);
	cursor:pointer;
    /*opacity: 0.7;*/
	background-color: rgba(0,0,0,0.8);
    z-index: 1;
	border-radius:3px;
}
.imghover{
position: relative;
}
</style>
<style type="text/css">
.gifts {    
	background: transparent url('{virtual_path}templates/{session.template}/media/border.png') repeat-x scroll left bottom;
    padding-bottom:15px;
    margin-bottom: 15px;
}
</style>
		<div class="typepage">
			<div class="dataitem single">
            <div><p>Välj en gåva nedan som du vill skicka till <!-- INCLUDE member_sections_name.tpl -->. Det kostar 1 kredit att skicka en gåva. Du kan köpa flera krediter genom att <a href="{virtual_path}index.php?m=account_upgrade">klicka här</a>. Du har förnärvarande {session.totalcredits} krediter.</p></div>
				<table class="plain">
					<tr>
		                <td class="data">
							<div class="form">
								<form method="post" name="gift" action="">
											<div class="gifts">
                                            <!-- BEGIN gifts -->
													<div style="float:left; margin-right:6px;">
														<label style="padding: 5px; border: 1px solid #404040; background: #222; border-radius:3px;">
															<img src="{top.virtual_pic_path}{gift_filename}" title="{gift_name}" /><br/>
															<div>
                                                            <input style="float:left;" name="gift_id" value="{gift_id}" type="radio" class="radio" <!-- IF gift_id == top.gift_post_id -->checked="checked"<!-- ENDIF --> /> <!-- IF gift_credits --><span style="float:left; padding-right:2px;">{gift_credits} </span> <!-- IF gift_credits > "1" --><span style="float:left;"> {lang:"gifts","credits"}</span><!-- ELSE --><span style="float:left;"> {lang:"gifts","credit"}</span><!-- ENDIF --><!-- ELSE --><span style="float:left;"> {lang:"gifts","free"}</span><!-- ENDIF -->
                                                            <div class="clearfix"></div>
                                                            </div>
														</label>
													</div>
											<!-- END gifts -->
                                            <div class="clearfix"></div>
                                            </div>

									<div class="fieldset">
										<dl class="fieldset">
											<dt style="float:left;"><label for="field_subject">{lang:"gifts","sendto"}</label></dt>
											<dd style="float:left; padding-left:7px;"><!-- INCLUDE member_sections_name.tpl --></dd>
                                            <div class="clearfix"></div>
											<!-- IF settings.enable_gifts_message -->
												<dt><label for="field_message">{lang:"gifts","message"}</label></dt>
												<dd><textarea id="field_message" class="textarea textarea_small form-control" cols="40" rows="5" name="message">{gift_message}</textarea></dd>
											<!-- ENDIF -->
											<dd style="margin-top:10px;">
													<div style="margin-bottom:5px;">
														<div style="float:left; padding-right:7px;"><input id="privacy_public" type="radio" class="radio" name="privacy" value="0" <!-- IF gift_privacy == "0" -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left;"><label for="privacy_public" style="margin-bottom:0;">{lang:"gifts","privacy_public"}</label><br/><span>{lang:"gifts","privacy_public_help"}</span></div>
													<div class="clearfix"></div>
                                                    </div>
													
                                                    <div style="margin-bottom:5px;">
														<div style="float:left; padding-right:7px;"><input id="privacy_personal" type="radio" class="radio" name="privacy" value="1" <!-- IF gift_privacy == "1" -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left;"><label for="privacy_personal" style="margin-bottom:0;">{lang:"gifts","privacy_personal"}</label><br/><span>{lang:"gifts","privacy_personal_help"}</span></div>
													<div class="clearfix"></div>
                                                    </div>
                                                    
                                                    <div>
														<div style="float:left; padding-right:7px;"><input id="privacy_anon" type="radio" class="radio" name="privacy" value="2" <!-- IF gift_privacy == "2" -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left;"><label for="privacy_anon" style="margin-bottom:0;">{lang:"gifts","privacy_anon"}</label><br/><span>{lang:"gifts","privacy_anon_help"}</span></div>
													<div class="clearfix"></div>
                                                    </div>
											</dd>
    										<dd class="submit" style="margin-top:10px;"><input class="btn submit" name="submit" value="{lang:"gifts","submit"}" type="submit" /></dd>
										</dl>
									</div>
									<input type="hidden" name="isgift" value="1" />
								</form>
							</div>
						</td>
		            </tr>
		        </table>
			</div>
		</div>
		<div class="clear"></div>

	</div>

	<script type="text/javascript" language="javascript">
	var smilies = [{smilies_str}];
	</script>

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