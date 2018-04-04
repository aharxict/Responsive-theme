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
        

<!-- IF hide_content != "1" -->

	<div class="outter page_news_view">

		<div class="typepage">
			<div class="dataitem single">
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
								{news_body}
							</div>
						</td>
		            </tr>
		        </table>
			</div>
<hr />
			<!-- IF settings.enable_news_comments AND news_allow_comments -->

				<div class="comments page_news_comments">

					<div class="subtitle" style="background-color: #ecf0f1;">
						<h2 style="font-size:16px; margin-bottom:15px; padding:5px;">{lang:"news","comments_list"}</h2>
						<div class="progress" id="get_comments_progress" style="display:none;"></div>
					</div>
					<div id="comments_page">
						{comments:type="news",member_id=0,content_id=news_id}
					</div>

					<div class="commentsform page_news_comments_submit">
						<div class="dataitem single">
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_comment_body">{lang:"news","add_comment"}</label></dt>
											<dd><textarea class="textarea textarea_full form-control" id="field_comment_body" cols="40" rows="5" name="body">{comment_body}</textarea></dd>
											<!-- IF settings.news_comments_captcha -->
    											<dt><label for="field_captcha">{lang:"news","verify_number"}</label></dt>
    											<dd>
													<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="width:auto; float:left;" />
													<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" style="float:left;" /><div class="clearfix"></div>
												</dd>
											<!-- ENDIF -->
    										<dd class="submit" style="padding-top:15px;"><input class="submit btn" type="submit" name="submit" value="{lang:"news","submit"}" /></dd>
										</dl>
									</div>
									<input type="hidden" name="iscomment" value="1" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>

			<!-- ENDIF -->

		</div>
		<div class="clear"></div>
	</div>

<!-- ENDIF -->

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