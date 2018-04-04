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
include_once SYS_PATH . "includes/ext/core/ext.htmlentities.php";
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

	<div class="outter page_invitefriends">

		<div class="typepage">
			<div class="dataitem single">

				<?php if ( @$PREFS->conf['enable_openinviter'] ) { ?>
					<div class="form">
						<form name="edit" method="post" action="">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<div class="fieldset">
											<dl class="fieldset">
    											<dt><label for="field_provider_box"><?php echo vldext_lang("tellfriend","provider"); ?></label></dt>
												<dd>
													<select class="select" id="field_provider_box" name="provider_box">
														<option><?php echo vldext_lang("tellfriend","select_invitees"); ?></option>
														<?php echo isset($_obj['oi_services']) ? $_obj['oi_services'] : "&#123;oi_services&#125;"; ?>
													</select>
												</dd>
    											<dt><label><?php echo vldext_lang("tellfriend","email"); ?></label></dt>
												<dd><input type="text" class="text" name="email" style="width: 200px" value="<?php echo vldext_htmlentities($_obj['oi_email']); ?>" /></dd>
    											<dt><label><?php echo vldext_lang("tellfriend","password"); ?></label></dt>
												<dd><input type="password" class="text" name="password" style="width: 200px" value="<?php echo vldext_htmlentities($_obj['oi_password']); ?>" /></dd>
											</dl>
										</div>
									</td>
								</tr>
							</table>
							<div class="fieldset">
								<dl class="fieldset">
    								<dd class="submit"><input class="submit" name="submit" value="<?php echo vldext_lang("tellfriend","submit"); ?>" type="submit" /></dd>
								</dl>
							</div>
							<input type="hidden" name="isfetchcontacts" value="1" />
						</form>
					</div>
					<div class="clear"></div>
					<?php if ( $this->objval($_obj,'oi_contacts') ) { ?>
						<div class="form">
							<form action="" method="POST" name="openinviter" id="openinviterform">
								<div style="overflow:auto;max-height:150px;text-align:left;padding-top:10px;">
									<?php echo isset($_obj['oi_contacts']) ? $_obj['oi_contacts'] : "&#123;oi_contacts&#125;"; ?>
								</div>
								<dl class="fieldset">
									<dt><label for="field_message"><?php echo vldext_lang("tellfriend","message"); ?></label></dt>
									<dd><textarea class="textarea textarea_full" id="field_message" name="message"><?php echo isset($_obj['message']) ? $_obj['message'] : "&#123;message&#125;"; ?></textarea></dd>
									<dd class="submit"><input type="submit" name="send" value="<?php echo vldext_lang("tellfriend","send"); ?>" class="submit"></dd>
								</dl>
								<input type="hidden" name="issendrequests" value="1" />
								<input type="hidden" name="email" value="<?php echo vldext_htmlentities($_obj['oi_email']); ?>" />
								<input type="hidden" name="password" value="<?php echo vldext_htmlentities($_obj['oi_password']); ?>" />
								<input type="hidden" name="provider_box" value="<?php echo isset($_obj['oi_provider']) ? $_obj['oi_provider'] : "&#123;oi_provider&#125;"; ?>" />
								<input type="hidden" name="oi_session_id" value="<?php echo isset($_obj['oi_session_id']) ? $_obj['oi_session_id'] : "&#123;oi_session_id&#125;"; ?>" />
							</form>
						</div>
						<div class="clear"></div>
					<?php } ?><?php if ( @$PREFS->conf['enable_tellfriend'] ) { ?><br/><?php } ?>
				<?php } ?>

				<?php if ( @$PREFS->conf['enable_tellfriend'] ) { ?>
					<div class="form" id="field_email_custom">
						<form name="edit" method="post" action="">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<div class="fieldset">
											<dl class="fieldset">
												<dt><label for="field_self_name"><?php echo vldext_lang("tellfriend","self_name"); ?></label></dt>
												<dd><input class="form-control" type="text" class="text" id="field_self_name" name="self_name" style="width: 100%;" value="<?php echo isset($_obj['self_name']) ? $_obj['self_name'] : "&#123;self_name&#125;"; ?>" /></dd>
											</dl>
										</div>
									</td>
									<td style="padding-left: 10px">
										<div class="fieldset">
											<dl class="fieldset">
												<dt><label for="field_self_email"><?php echo vldext_lang("tellfriend","self_email"); ?></label></dt>
												<dd><input class="form-control" type="text" class="text" id="field_self_email" name="self_email" style="width: 100%;" value="<?php echo isset($_obj['self_email']) ? $_obj['self_email'] : "&#123;self_email&#125;"; ?>" /></dd>
											</dl>
										</div>
									</td>
								</tr>
							</table>
							<table cellpadding="0" cellspacing="0">
								<?php if (!empty($_obj['friends_list'])){ if (!is_array($_obj['friends_list'])) $_obj['friends_list']=array(array('friends_list'=>$_obj['friends_list'])); $_tmp_arr_keys=array_keys($_obj['friends_list']); if ($_tmp_arr_keys[0]!='0') $_obj['friends_list']=array(0=>$_obj['friends_list']); $_stack[$_stack_cnt++]=$_obj; $_cnt['friends_list']=count($_obj['friends_list']); foreach ($_obj['friends_list'] as $rowcnt=>$friends_list) { $friends_list['rowcnt']=$rowcnt; $friends_list['rowpos']=$rowcnt+1; $friends_list['rownum']=$rowcnt%2+1; $friends_list['rowtotal']=$_cnt['friends_list']; $friends_list['rowfirst']=$rowcnt==0?1:0; $friends_list['rowlast']=($rowcnt+1)==$_cnt['friends_list']?1:0; $_obj=&$friends_list; ?>
									<tr>
										<td>
											<div class="fieldset">
												<dl class="fieldset">
													<dt><label for="field_friend<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_name"><?php echo vldext_lang("tellfriend","friend_name"); ?> <?php echo isset($_obj['number']) ? $_obj['number'] : "&#123;number&#125;"; ?></label></dt>
													<dd><input class="form-control" type="text" class="text" id="field_friend<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_name" name="friend<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_name" style="width: 100%;" value="<?php echo isset($_obj['name']) ? $_obj['name'] : "&#123;name&#125;"; ?>" /></dd>
												</dl>
											</div>
										</td>
										<td style="padding-left: 10px">
											<div class="fieldset">
												<dl class="fieldset">
													<dt><label for="field_friend<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_email"><?php echo vldext_lang("tellfriend","friend_email"); ?> <?php echo isset($_obj['number']) ? $_obj['number'] : "&#123;number&#125;"; ?></label></dt>
													<dd><input class="form-control" type="text" class="text" id="field_friend<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_email" name="friend<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_email" style="width: 100%;" value="<?php echo isset($_obj['email']) ? $_obj['email'] : "&#123;email&#125;"; ?>" /></dd>
												</dl>
											</div>
										</td>
									</tr>
								<?php } $_obj=$_stack[--$_stack_cnt];} ?>
							</table>
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_message"><?php echo vldext_lang("tellfriend","message"); ?></label></dt>
									<dd><textarea class="textarea textarea_full form-control" id="field_message" name="message"><?php echo isset($_obj['message']) ? $_obj['message'] : "&#123;message&#125;"; ?></textarea></dd>
									<?php if ( @$PREFS->conf['tellfriend_captcha'] ) { ?>
										<dt><label for="field_captcha"><?php echo vldext_lang("tellfriend","verify_number"); ?></label></dt>
										<dd>
											<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="width: 100%;" />
											<img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
										</dd>
									<?php } ?>
    								<dd class="submit" style="margin-top:7px;"><input class="submit btn" name="submit" value="<?php echo vldext_lang("tellfriend","submit"); ?>" type="submit" /></dd>
								</dl>
							</div>
							<input type="hidden" name="istellfriend" value="1" />
						</form>
					</div>
					<div class="clear"></div>
				<?php } ?>

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