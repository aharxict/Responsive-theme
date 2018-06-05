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
								<div style="float:left;"><h2>{app_page}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_default">

		<div class="typepage">
			<div class="dataitem single">
				<div class="entry">
					{page_content}
				</div>
				<div class="clear"></div>
			</div>
			<!-- IF settings.enable_page_comments AND page_allow_comments -->

				<div class="comments page_pages_comments">

					<div class="subtitle">
						<h2>{lang:"pages","comments_list"}</h2>
						<div class="progress" id="get_comments_progress"></div>
					</div>
					<div id="comments_page">
						{comments:type="page",member_id=0,content_id=page_id}
					</div>
					<!-- IF loggedin == "1" -->
					<div class="commentsform page_pages_comments_submit">
						<div class="dataitem single">
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_comment_body">{lang:"pages","add_comment"}</label></dt>
											<dd><textarea class="textarea textarea_full" id="field_comment_body" cols="40" rows="5" name="body">{comment_body}</textarea></dd>
											<!-- IF settings.pages_comments_captcha -->
    											<dt><label for="field_captcha">{lang:"pages","verify_number"}</label></dt>
    											<dd>
													<input type="text" id="field_captcha" class="text captcha" name="captcha" maxlength="5" />
													<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
												</dd>
											<!-- ENDIF -->
    										<dd class="submit"><input class="submit" type="submit" name="submit" value="{lang:"pages","submit"}" /></dd>
										</dl>
									</div>
									<input type="hidden" name="iscomment" value="1" />
								</form>
							</div>
						</div>
					</div>
					<!-- ENDIF -->
				</div>
				<div class="clear"></div>

			<!-- ENDIF -->
		</div>
		<div class="clear"></div>

	</div>
</div>
<!-- ENDIF -->

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->