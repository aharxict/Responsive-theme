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

	<div class="outter page_contactus">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="edit" method="post" action="">
						<div class="fieldset">
							<dl class="fieldset">
								<dt><label for="field_from">{lang:"contactus","email"}</label></dt>
								<dd><input type="text" class="text form-control" size="40" id="field_from" name="from" value="{from}" /></dd>
								<dt><label for="field_subject">{lang:"contactus","subject"}</label></dt>
								<dd>
									<select name="subject" class="select form-control">
										<option value="Förslag">Förslag</option>
                                        <option value="Annonsera">Annonsera</option>
                                        <option value="Rapportera missbruk">Rapportera missbruk</option>
                                        <option value="Tekniska problem">Tekniska problem</option>
                                        <option value="Annan fråga">Annan fråga</option>
                                    </select>
								</dd>
								<dt><label for="field_body">{lang:"contactus","message"}</label></dt>
								<dd><textarea class="textarea textarea_full form-control" id="field_body" name="body" rows="5" cols="40">{body}</textarea></dd>
								<!-- IF settings.feedback_captcha -->
									<dt><label for="field_captcha">{lang:"contactus","verify_number"}</label></dt>
									<dd>
										<div>
                                        <div style="float:left; padding-right:15px;">
                                        <input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="width:200px;" />
                                        </div>
                                        <div style="float:left;">
										<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" />
                                        </div>
                                        <div class="clearfix"></div>
                                        </div>
									</dd>
								<!-- ENDIF -->
    							<dd class="submit"><input style="margin-top:10px;" class="submit btn" name="submit" value="{lang:"contactus","submit"}" type="submit" /></dd>
							</dl>
						</div>
						<input type="hidden" name="iscontactus" value="1" />
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>

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