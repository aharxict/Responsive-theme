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
								<div style="float:left;"><h2>{lang:"member","app_blog"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<!-- IF hide_content != "1" -->

	<div class="outter page_member_blogs">

		<div class="typecontent">
			<!-- BEGIN blog_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
                                <div class="image" style="height:100px; width:145px;">
									<!-- IF entry_picture -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_pic_path}{top.member_media_path}{entry_picture}" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br /></a>
								<!-- ELSE -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br/></a>
								<!-- ENDIF -->
								</div>
							</td>
                            <td class="data" valign="top">
								<div class="itemheader">
									<h2 class="inner" style="font-size:16px;"><a href="{top.virtual_path}{entry_link}">{trim:entry_title,80}</a></h2>
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"member","post_date"} {entry_post_date}</div>

										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{entry_link}">{entry_total_comments} {lang:"member","comments"}</a></div>
									<div class="clearfix"></div>
								</div>
								<div class="entry" style="padding-top:7px;">
									{trim:entry_body,120,"more",1}
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

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->