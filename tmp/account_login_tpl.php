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
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
include_once SYS_PATH . "includes/ext/ext.anchor.php";
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
							<h2><?php echo vldext_lang("login","app_page"); ?></h2>
							</div>

                                <div class="clearfix"></div>
<div>
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_login">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="login" method="post" action="">
						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<dt><label for="field_username"><?php echo vldext_lang("login","username"); ?></label></dt>
								<dd style="padding-bottom:10px;"><input maxlength="64" size="30" type="text" id="field_username" name="username" value="" class="text form-control" /></dd>
								<dt><label for="field_password"><?php echo vldext_lang("login","password"); ?></label></dt>
								<dd style="padding-bottom:10px;"><input maxlength="32" size="30" type="password" id="field_password" name="password" value="" class="text form-control" /></dd>
								<dt><label for="field_nonxpcookie"><?php echo vldext_lang("login","remember_me"); ?></label></dt>
								<dd style="padding-bottom:20px;"><select class="select form-control" name="nonxpcookie" id="field_nonxpcookie"><?php echo vldext_dropdownlist($_obj['yesnobox'],0); ?></select></dd>
    							<dd class="submit"><input type="submit" name="submit" value="<?php echo vldext_lang("login","submit"); ?>" class="submit btn" /></dd>
							</dl>
							<div class="clear"></div>
						</div>
						<input type="hidden" name="islogin" value="1" />
					</form>
				</div>
			<div class="itemfooter" style="padding-top:10px;">
			<span class="glyphicon glyphicon-lock" style="padding-right:8px;"></span><span style="padding-right:10px;"><?php echo vldext_anchor(array('url1'=>"account/lostpass/",'url2'=>"index.php?m=account_lostpass",'name'=>"login|forgot_password")); ?></span>
            <span class="glyphicon glyphicon-lock" style="padding-right:8px;"></span><?php echo vldext_anchor(array('url1'=>"account/sendhash/",'url2'=>"index.php?m=account_sendhash",'name'=>"login|resend_activation_email")); ?>
                    <div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

<?php } ?>
</div>



							</div><div class="clearfix" style="margin-bottom:10px;"></div>
						</div><?php $_temp_inc = $TEMPLATE->output('info_sidebar.tpl',0); include($_temp_inc); ?>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>