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
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="min-height: 200px !important;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:20px;">
							<h2>{lang:"login","app_page"}</h2>
							</div>

                                <div class="clearfix"></div>
<div>
<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_account_login">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="login" method="post" action="">
						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<dt><label for="field_username">{lang:"login","username"}</label></dt>
								<dd class="icon-field user-field" style="padding-bottom:10px;"><input maxlength="64" size="30" type="text" id="field_username" name="username" value="" class="text form-control" placeholder="{lang:"login","username"}" /></dd>
								<dt><label for="field_password">{lang:"login","password"}</label></dt>
								<dd class="icon-field password-field" style="padding-bottom:10px;"><input maxlength="32" size="30" type="password" id="field_password" name="password" value="" class="text form-control" placeholder="{lang:"login","password"}" /></dd>
								<dt><label class="remember" for="field_nonxpcookie">{lang:"login","remember_me"}</label></dt>
								<dd style="padding-bottom:20px;"><select class="select form-control" name="nonxpcookie" id="field_nonxpcookie">{dropdownlist:yesnobox,0}</select></dd>
									<dd class="submit">
										<div style="display:none;" id="login_back" class="btn-default btn pull-left">Zurück</div>

										<button type="submit" name="submit" value="{lang:"login","submit"}" class="submit btn" >{lang:"login","submit"}</button>

									</dd>


							</dl>
							<div class="clear"></div>
						</div>
						<input type="hidden" name="islogin" value="1" />
					</form>
				</div>
			<div class="itemfooter" style="padding-top:10px;">
			<span class="glyphicon glyphicon-lock" style="padding-right:8px;"></span><span style="padding-right:10px;">{anchor:url1="account/lostpass/",url2="index.php?m=account_lostpass",name="login|forgot_password"}</span>
            <span class="glyphicon glyphicon-lock" style="padding-right:8px;"></span>{anchor:url1="account/sendhash/",url2="index.php?m=account_sendhash",name="login|resend_activation_email"}
                    <div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

<!-- ENDIF -->
</div>



							</div><div class="clearfix" style="margin-bottom:10px;"></div>
						</div><!-- INCLUDE info_sidebar.tpl -->
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->