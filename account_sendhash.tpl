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
					<div class="col-sm-8" style="margin-bottom:10px;">
						<div class="blog-post blog-single-post page-content" style="min-height: 200px !important;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:20px;">
							<h2>{lang:"forgotpassword","app_resendhash"}</h2>
							</div>

                                <div class="clearfix"></div>
<div>
<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_account_lostpass">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="lostpass" method="post" action="">
						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<dt><label for="field_username">{lang:"forgotpassword","username"}</label></dt>
								<dd style="margin-bottom:10px;"><input maxlength="32" size="30" type="text" id="field_username" name="username" value="{username}" class="text form-control" /></dd>
								<dt><label for="field_email">{lang:"forgotpassword","email"}</label></dt>
								<dd style="margin-bottom:20px;"><input type="text" size="30" class="text form-control" name="email" id="field_email" value="{email}" maxlength="64" /></dd>
    							<dd class="submit"><input class="submit btn" name="submit" value="{lang:"forgotpassword","submit"}" type="submit" /></dd>
							</dl>
							<div class="clear"></div>
						</div>
						<input type="hidden" name="forgotpass" value="1" />
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

<!-- ENDIF -->
</div>



							</div><div class="clearfix"></div>
						</div>
<!-- INCLUDE login_form_sidebar.tpl -->
					</div>
					<!-- End Blog Post Excerpt -->

</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->