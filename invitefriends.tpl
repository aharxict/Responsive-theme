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

	<div class="outter page_invitefriends">

		<div class="typepage">
			<div class="dataitem single">

				<!-- IF settings.enable_openinviter -->
					<div class="form">
						<form name="edit" method="post" action="">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<div class="fieldset">
											<dl class="fieldset">
    											<dt><label for="field_provider_box">{lang:"tellfriend","provider"}</label></dt>
												<dd>
													<select class="select" id="field_provider_box" name="provider_box">
														<option>{lang:"tellfriend","select_invitees"}</option>
														{oi_services}
													</select>
												</dd>
    											<dt><label>{lang:"tellfriend","email"}</label></dt>
												<dd><input type="text" class="text" name="email" style="width: 200px" value="{htmlentities:oi_email}" /></dd>
    											<dt><label>{lang:"tellfriend","password"}</label></dt>
												<dd><input type="password" class="text" name="password" style="width: 200px" value="{htmlentities:oi_password}" /></dd>
											</dl>
										</div>
									</td>
								</tr>
							</table>
							<div class="fieldset">
								<dl class="fieldset">
    								<dd class="submit"><input class="submit" name="submit" value="{lang:"tellfriend","submit"}" type="submit" /></dd>
								</dl>
							</div>
							<input type="hidden" name="isfetchcontacts" value="1" />
						</form>
					</div>
					<div class="clear"></div>
					<!-- IF oi_contacts -->
						<div class="form">
							<form action="" method="POST" name="openinviter" id="openinviterform">
								<div style="overflow:auto;max-height:150px;text-align:left;padding-top:10px;">
									{oi_contacts}
								</div>
								<dl class="fieldset">
									<dt><label for="field_message">{lang:"tellfriend","message"}</label></dt>
									<dd><textarea class="textarea textarea_full" id="field_message" name="message">{message}</textarea></dd>
									<dd class="submit"><input type="submit" name="send" value="{lang:"tellfriend","send"}" class="submit"></dd>
								</dl>
								<input type="hidden" name="issendrequests" value="1" />
								<input type="hidden" name="email" value="{htmlentities:oi_email}" />
								<input type="hidden" name="password" value="{htmlentities:oi_password}" />
								<input type="hidden" name="provider_box" value="{oi_provider}" />
								<input type="hidden" name="oi_session_id" value="{oi_session_id}" />
							</form>
						</div>
						<div class="clear"></div>
					<!-- ENDIF --><!-- IF settings.enable_tellfriend --><br/><!-- ENDIF -->
				<!-- ENDIF -->

				<!-- IF settings.enable_tellfriend -->
					<div class="form" id="field_email_custom">
						<form name="edit" method="post" action="">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<div class="fieldset">
											<dl class="fieldset">
												<dt><label for="field_self_name">{lang:"tellfriend","self_name"}</label></dt>
												<dd><input class="form-control" type="text" class="text" id="field_self_name" name="self_name" style="width: 100%;" value="{self_name}" /></dd>
											</dl>
										</div>
									</td>
									<td style="padding-left: 10px">
										<div class="fieldset">
											<dl class="fieldset">
												<dt><label for="field_self_email">{lang:"tellfriend","self_email"}</label></dt>
												<dd><input class="form-control" type="text" class="text" id="field_self_email" name="self_email" style="width: 100%;" value="{self_email}" /></dd>
											</dl>
										</div>
									</td>
								</tr>
							</table>
							<table cellpadding="0" cellspacing="0">
								<!-- BEGIN friends_list -->
									<tr>
										<td>
											<div class="fieldset">
												<dl class="fieldset">
													<dt><label for="field_friend{rowcnt}_name">{lang:"tellfriend","friend_name"} {number}</label></dt>
													<dd><input class="form-control" type="text" class="text" id="field_friend{rowcnt}_name" name="friend{rowcnt}_name" style="width: 100%;" value="{name}" /></dd>
												</dl>
											</div>
										</td>
										<td style="padding-left: 10px">
											<div class="fieldset">
												<dl class="fieldset">
													<dt><label for="field_friend{rowcnt}_email">{lang:"tellfriend","friend_email"} {number}</label></dt>
													<dd><input class="form-control" type="text" class="text" id="field_friend{rowcnt}_email" name="friend{rowcnt}_email" style="width: 100%;" value="{email}" /></dd>
												</dl>
											</div>
										</td>
									</tr>
								<!-- END friends_list -->
							</table>
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_message">{lang:"tellfriend","message"}</label></dt>
									<dd><textarea class="textarea textarea_full form-control" id="field_message" name="message">{message}</textarea></dd>
									<!-- IF settings.tellfriend_captcha -->
										<dt><label for="field_captcha">{lang:"tellfriend","verify_number"}</label></dt>
										<dd>
											<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="width: 100%;" />
											<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
										</dd>
									<!-- ENDIF -->
    								<dd class="submit" style="margin-top:7px;"><input class="submit btn" name="submit" value="{lang:"tellfriend","submit"}" type="submit" /></dd>
								</dl>
							</div>
							<input type="hidden" name="istellfriend" value="1" />
						</form>
					</div>
					<div class="clear"></div>
				<!-- ENDIF -->

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