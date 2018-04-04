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
								<div style="float:left;"><h2><!-- IF active_module == "account_guestbook" -->{lang:"guestbook","app_guestbook"}<!-- ELSE -->{lang:"guestbook","app_unapproved"}<!-- ENDIF --></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <!-- IF active_module == "account_guestbook" -->
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/guestbook/unapproved/","index.php?m=account_guestbook&p=unapproved"}" class="btn"><i class="glyphicon glyphicon-book"></i> {lang:"guestbook","opt_unapproved_entries"}<!-- IF session.new_guestbooks --> ({session.new_guestbooks})<!-- ENDIF --></a>
                                <!-- ELSE -->
                                
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/guestbook/unapproved/","index.php?m=account_guestbook&p=unapproved"}" class="btn active"><i class="glyphicon glyphicon-book"></i> {lang:"guestbook","opt_unapproved_entries"}<!-- IF session.new_guestbooks --> ({session.new_guestbooks})<!-- ENDIF --></a>
                                <!-- ENDIF -->
                           
                                </div>
                                <div class="clearfix"></div>
                           </div>
<!-- INCLUDE message.tpl -->

       
<!-- IF hide_content != "1" -->

	<div class="outter page_account_guestbook">

		<div class="typecontent">
			<!-- BEGIN guestbook_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
			                    <div class="image">
									<!-- INCLUDE member_sections_picture.tpl -->
								</div>
							</td>
		                    <td class="data">
								<div class="itemheader">
									<!-- INCLUDE member_sections_name.tpl -->
									<ul class="itemheader">
										<li>{lang:"guestbook","posted_on"} {entry_post_date}</li>
										<!-- IF session.can_approve_own_guestbook AND top.entries_active == "0" -->
											<li class="approve"><a href="{top.virtual_path}{entry_approve_link}" title="{lang:"guestbook","approve"}">{lang:"guestbook","approve"}</a></li>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_guestbook -->
											<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"guestbook","delete?"}', '{top.virtual_path}{entry_delete_link}')" title="{lang:"guestbook","delete"}">{lang:"guestbook","delete"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
								<div class="entry">
									{entry_body}
								</div>
							</td>
		                </tr>
		            </table>
				</div>
				<div class="clear"></div>
			<!-- END guestbook_entries -->
		</div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"guestbook","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"guestbook","next_page"} &raquo;</a>
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