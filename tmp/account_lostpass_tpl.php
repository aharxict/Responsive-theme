<?php global $PREFS, $TEMPLATE, $SESSION;

/*
=====================================================
This file has been automatically generated. Do not
modify unless you know what you are doing.
=====================================================
vldPersonals - by VLD Interactive Inc.
----------------------------------------------------
http://www.vldpersonals.com/
http://www.vldinteractive.com/
-----------------------------------------------------
Copyright (c) 2005-2017 VLD Interactive Inc.
=====================================================
THIS IS COPYRIGHTED SOFTWARE
PLEASE READ THE LICENSE AGREEMENT
http://www.vldpersonals.com/agreement/
=====================================================
*/

include_once SYS_PATH . "includes/ext/core/ext.lang.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="section section-header">
<div class="container">
<div class="row">

<?php if ( $this->objval($_obj,'loggedin') ) { ?>
<?php $_temp_inc = $TEMPLATE->output('user-menu.tpl',0); include($_temp_inc); ?>
<?php } ?>

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="min-height: 200px !important;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:20px;">
							<h2><?php echo vldext_lang("forgotpassword","app_forgotpassword"); ?></h2>
							</div>

                                <div class="clearfix"></div>
<div>
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_lostpass">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="lostpass" method="post" action="">
						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<dt><label for="field_username"><?php echo vldext_lang("forgotpassword","username"); ?></label></dt>
								<dd style="margin-bottom:10px;"><input maxlength="32" size="30" type="text" id="field_username" name="username" value="<?php echo isset($_obj['username']) ? $_obj['username'] : "&#123;username&#125;"; ?>" class="text form-control" /></dd>
								<dt><label for="field_email"><?php echo vldext_lang("forgotpassword","email"); ?></label></dt>
								<dd style="margin-bottom:20px;"><input type="text" size="30" class="text form-control" name="email" id="field_email" value="<?php echo isset($_obj['email']) ? $_obj['email'] : "&#123;email&#125;"; ?>" maxlength="64" /></dd>
    							<dd class="submit"><input class="submit btn" name="submit" value="<?php echo vldext_lang("forgotpassword","submit"); ?>" type="submit" /></dd>
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

<?php } ?>
</div>



							</div><div class="clearfix"></div>
						</div>
<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>