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
								<div style="float:left;"><h2>{lang:"news","app_news"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
<div class="content-box">
<div class="outter page_news">

		<div class="typecontent">
			<!-- BEGIN news_entries -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<!-- IF news_picture -->
								<td>
									<div class="image" style="width:150px; margin-right:10px;">
										<a href="{top.virtual_path}{news_link}"><img src="{top.virtual_pic_path}{news_picture}" alt="" border="0" style="height:150px; width:150px;" /><br /></a>
									</div>
								</td>
							<!-- ENDIF -->
		                    <td class="data" valign="top">
								<div class="itemheader" style="vertical-align:top;">
									<h2 class="inner" style="font-size:16px;"><a href="{top.virtual_path}{news_link}">{news_title}</a></h2>
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"news","postdate"} {news_date}</div>
										<div style="float:left; position: relative; font-size:12px;"><a href="{top.virtual_path}{news_link}">{news_total_comments} {lang:"news","total_comments"}</a></div>
									<div class="clearfix"></div>
                                    </div>
								</div>
								<div class="entry" style="padding-top:7px;">
									{trim:news_body,400} <a href="{top.virtual_path}{news_link}">{lang:"news","readmore"}</a>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
                <hr />
			<!-- END news_entries -->
		</div>
		<div class="clear"></div>

	</div>
</div>
	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"news","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"news","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->