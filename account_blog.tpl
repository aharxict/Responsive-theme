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
								<div style="float:left;"><h2>{lang:"blog","app_blog"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blog/","index.php?m=account_blog"}" class="btn active"><i class="glyphicon glyphicon-book"></i> {lang:"blog","opt_view_entries"}</a>
                                
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blog/add/","index.php?m=account_blog&p=add"}" class="btn"><i class="glyphicon glyphicon-book"></i> {lang:"blog","opt_add_entry"}</a>
                           
                                </div>
                                <div class="clearfix"></div>
                           </div>
<!-- INCLUDE message.tpl -->

       
<!-- IF hide_content != "1" -->

	<div class="outter page_account_blog">

		<div class="typecontent">
			<!-- BEGIN blog_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image" style="height:100px; width:145px;">
									<!-- IF entry_picture -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_pic_path}{session.media_path}{entry_picture}" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br /></a>
								<!-- ELSE -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br/></a>
								<!-- ENDIF -->
								</div>
							</td>
		                    <td class="data" valign="top">
								<div class="itemheader">
									<h2 class="inner" style="font-size:16px;"><a href="{top.virtual_path}{entry_link}">{trim:entry_title,85}</a></h2>
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"blog","post_date"} {entry_post_date}</div>
										<!-- IF session.can_view_own_blogs_comments -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{entry_comments_link}">{entry_total_comments} {lang:"blog","comments"}</a></div>
										<!-- ENDIF -->
										<!-- IF session.can_edit_own_blogs -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{entry_link}">{lang:"blog","edit"}</a></div>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_blog -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="#" onclick="javascript:confirmLink('{lang:"blog","delete?"}', '{top.virtual_path}{entry_delete_link}')" title="{lang:"blog","delete"}">{lang:"blog","delete"}</a></div>
										<!-- ENDIF -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="entry" style="padding-top:7px;">
									{trim:entry_body,120}
								</div>
							</td>
		                </tr>
		            </table>
				</div>
                <hr />
			<!-- END blog_entries -->
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"blog","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"blog","next_page"} &raquo;</a>
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