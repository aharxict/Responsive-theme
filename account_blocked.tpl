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
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"blocked","app_blocked"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blocked/","index.php?m=account_blocked"}" class="btn active"><i class="glyphicon glyphicon-ban-circle"></i> {lang:"core","usermenu_blocked"}</a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_account_blocked">

		<div class="typemembers">
			<!-- BEGIN blocked_profiles -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<!-- INCLUDE member_sections_picture.tpl -->
								</div>
							</td>
		                    <td class="data">
								<div class="datainfo">
									<!-- INCLUDE member_sections_name.tpl -->
									<dl class="datainfo">
										<!-- INCLUDE member_sections_card.tpl -->
									</dl>
								</div>
							</td>
		                    <td class="blocked-actions">
								<div class="actions">
									<ul class="actions">
										<!-- INCLUDE member_sections_quick_actions.tpl -->
										<!-- IF session.can_unblock_members -->
											<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"blocked","delete?"}', '{top.virtual_path}{member_delete_link}')" title="{lang:"blocked","delete"}">{lang:"blocked","delete"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END blocked_profiles -->
		</div>
		<div class="clear"></div>

	</div>
</div>
	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"blocked","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"blocked","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

<!-- ENDIF -->
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->