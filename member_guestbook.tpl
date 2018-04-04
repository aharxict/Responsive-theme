
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
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"member","app_guestbook"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <!-- INCLUDE member_sections_links.tpl -->
                           
                                </div>
                                <div class="clearfix"></div>
                           </div>
<div style="float:right;"><a href="{virtual_path}{member_guestbook_rss_link}" target="_blank"><img src="{virtual_tpl_path}{session.template}/media/rss.png" border="0" /></a></div>
<div class="clearfix"></div>
<!-- INCLUDE message.tpl -->

       
<!-- IF hide_content != "1" -->

	<div class="outter page_member_guestbook">
		<div class="typecontent">

			<!-- BEGIN guestbook_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td style="padding-right:10px;">
								<div class="image" style="width:125px; height:125px;">
									<!-- INCLUDE member_sections_picture.tpl -->
								</div>
							</td>
			                <td class="data" valign="top">
								<div class="itemheader">
									<!-- INCLUDE member_sections_name.tpl -->
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"member","post_date"} {entry_post_date}</div>
										<!-- IF settings.enable_reports AND settings.enable_guestbook_reports AND session.can_submit_reports -->
<style type="text/css">
div.reportbox div.popup {
    padding: 10px;
    display: none;
    z-index: 1;
    position: absolute;
    bottom: 16px;
    right: 0px;
    background: #f5fbff;
    border: 1px solid #cccccc;
    width: 155px;
}
</style>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">
												{reports:type="guestbook",member_id=top.member_id,item_id=entry_id}
										</div>
										<!-- ENDIF -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="entry" style="padding-top:7px;">
									{entry_body}
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />
			<!-- END guestbook_entries -->

			<div class="commentsform page_member_guestbook_submit" style="margin-top:15px;">
				<div class="dataitem single">
					<div class="form">
						<form name="edit" method="post" action="">
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_comment_body">{lang:"member","sign_guestbook"}</label></dt>
									<dd><textarea class="textarea textarea_full form-control" id="field_comment_body" cols="40" rows="5" name="body">{guestbook_comment}</textarea></dd>
									<!-- IF settings.guestbooks_captcha -->
    									<dt><label for="field_captcha">{lang:"member","verify_number"}</label></dt>
    									<dd>
											<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="float:left; width:auto;" />
											<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" style="float:left;" /><div class="clearfix"></div>
										</dd>
									<!-- ENDIF -->
    								<dd class="submit"><input class="submit btn" type="submit" name="submit" value="{lang:"member","submit"}" /></dd>
								</dl>
							</div>
							<input type="hidden" name="isguestbook" value="1" />
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"member","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"member","next_page"} &raquo;</a>
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