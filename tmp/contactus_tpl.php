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
 ?>﻿<?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="section section-header">
<div class="container">
<div class="row">

<?php if ( $this->objval($_obj,'loggedin') ) { ?>
<?php $_temp_inc = $TEMPLATE->output('user-menu.tpl',0); include($_temp_inc); ?>
<?php } ?>

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">

<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo isset($_obj['app_page']) ? $_obj['app_page'] : "&#123;app_page&#125;"; ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_contactus">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="edit" method="post" action="">
						<div class="fieldset">
							<dl class="fieldset">
								<dt><label for="field_from"><?php echo vldext_lang("Kontaktiere uns","email"); ?></label></dt>
								<dd><input type="text" class="text form-control" size="40" id="field_from" name="from" value="<?php echo isset($_obj['from']) ? $_obj['from'] : "&#123;from&#125;"; ?>" /></dd>
								<dt><label for="field_subject"><?php echo vldext_lang("Kontaktiere uns","subject"); ?></label></dt>
								<dd>
									<select name="subject" class="select form-control">
										<option value="Vorschlag">Vorschlag</option>
                                        <option value="Werbung">Werbung</option>
                                        <option value="Missbrauch melden">Missbrauch melden</option>
                                        <option value="Technische Probleme">Technische Probleme</option>
                                        <option value="Andere Frage">Andere Frage</option>
                                    </select>
								</dd>
								<dt><label for="field_body"><?php echo vldext_lang("Kontaktiere uns","message"); ?></label></dt>
								<dd><textarea class="textarea textarea_full form-control" id="field_body" name="body" rows="5" cols="40"><?php echo isset($_obj['body']) ? $_obj['body'] : "&#123;body&#125;"; ?></textarea></dd>
								<?php if ( @$PREFS->conf['feedback_captcha'] ) { ?>
									<dt><label for="field_captcha"><?php echo vldext_lang("contactus","verify_number"); ?></label></dt>
									<dd>
										<div>
                                        <div style="float:left; padding-right:15px;">
                                        <input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="width:200px;" />
                                        </div>
                                        <div style="float:left;">
										<img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" />
                                        </div>
                                        <div class="clearfix"></div>
                                        </div>
									</dd>
								<?php } ?>
    							<dd class="submit"><input style="margin-top:10px;" class="submit btn" name="submit" value="<?php echo vldext_lang("contactus","submit"); ?>" type="submit" /></dd>
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

<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>