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

<!-- INCLUDE login_form_sidebar.tpl -->

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"blogs","app_blogs"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<div class="outter page_member_blogs">

	<!-- IF hide_content != "1" AND globalblogs_entries -->
		<div class="typecontent">
			<!-- BEGIN globalblogs_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image" style="height:100px; width:145px;">
									<!-- IF entry_picture -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_pic_path}{member_media_path}{entry_picture}" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br /></a>
								<!-- ELSEIF member_picture AND member_picture_active -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br/></a>
								<!-- ELSE -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br/></a>
								<!-- ENDIF -->
								</div>
							</td>
							<td class="data" valign="top">
								<div class="itemheader">
									<h2 class="inner" style="font-size:16px;"><a href="{top.virtual_path}{entry_link}">{trim:entry_title,80}</a></h2>
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"blogs","post_date"} {entry_post_date}</div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"blogs","posted_by"} <a href="{top.virtual_path}{member_profile_link}">{member_username}</a></div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{entry_link}">{entry_total_comments} {lang:"blogs","comments"}</a></div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"blogs","total_views"}: {entry_total_views}</div>
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
			<!-- END globalblogs_entries -->
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

</div>

<!-- IF hide_content != "1" -->
	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{lang:"blogs","page_numbers"}</p>
				{page_links}
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->
<!-- ENDIF -->

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->