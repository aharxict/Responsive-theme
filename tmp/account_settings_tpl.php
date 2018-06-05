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
					<div class="col-sm-4 col-leftside">
						<div class="hide-on-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture_large']) ? $SESSION->conf['picture_large'] : "&#123;picture_large&#125;"; ?>" alt="" border="0" /></a>
							<?php } else { ?>
                            <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" /></a>
                            <?php } ?>
							
						</div>
                        </div>

						<div class="hide-on-mobile">
                        <?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
                        </div>
                        
						<div class="hide-on-mobile">
                        <?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>					
                        </div>
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("settings","app_settings"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_settings" class="btn active"><i class="glyphicon glyphicon-cog"></i> <?php echo vldext_lang("core","usermenu_settings"); ?></a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_notifications" class="btn"><i class="glyphicon glyphicon-plus-sign"></i>  <?php echo vldext_lang("core","usermenu_notifications"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        


	<div class="outter page_account_settings">

		<form name="edit" method="post" action="">
			<div class="typepage">
				<div class="dataitem single">
					<div class="form">
						<div class="fieldset">
							<dl class="fieldset" style="margin-bottom:4px;">
								<dt><label for="field_username"><?php echo vldext_lang("settings","username"); ?></label></dt>
								<dd style="padding-bottom:10px;"><input type="text" class="text form-control" id="field_username" name="username" value="<?php echo isset($_obj['username']) ? $_obj['username'] : "&#123;username&#125;"; ?>" maxlength="32" size="32" /></dd>
								<dt><label for="field_password"><?php echo vldext_lang("settings","password"); ?></label></dt>
								<dd style="padding-bottom:10px;"><input type="password" class="text form-control" id="field_password" name="password" value="<?php echo isset($_obj['password']) ? $_obj['password'] : "&#123;password&#125;"; ?>" size="20" maxlength="32" /></dd>
								<dt><label for="field_password2"><?php echo vldext_lang("settings","password2"); ?></label></dt>
								<dd style="padding-bottom:10px;"><input type="password" class="text form-control" id="field_password2" name="password2" value="<?php echo isset($_obj['password2']) ? $_obj['password2'] : "&#123;password2&#125;"; ?>" size="20" maxlength="32" /></dd>
								<dt><label for="field_email"><?php echo vldext_lang("settings","email"); ?></label></dt>
								<dd style="padding-bottom:0;"><input type="text" class="text form-control" id="field_email" name="email" value="<?php echo isset($_obj['email']) ? $_obj['email'] : "&#123;email&#125;"; ?>" maxlength="64" size="32" /><br /></dd>
								<dt><label for="field_timezone"><?php echo vldext_lang("settings","timezone"); ?></label></dt>
								<dd style="padding-bottom:10px;"><select class="select form-control" name="timezone" id="field_timezone"><?php echo vldext_dropdownlist($_obj['timezones'],$_obj['timezone']); ?></select></dd>
								<dt><label for="field_timeformat"><?php echo vldext_lang("settings","timeformat"); ?></label></dt>
								<dd style="padding-bottom:10px;"><select class="select form-control" name="timeformat" id="field_timeformat"><?php echo vldext_dropdownlist($_obj['timeformats'],$_obj['timeformat']); ?></select></dd>
								<?php if ( @$SESSION->conf['can_change_language'] ) { ?>
									<dt><label for="field_language"><?php echo vldext_lang("settings","language"); ?></label></dt>
									<dd style="padding-bottom:10px;"><select class="select form-control" name="language" id="field_language"><?php echo vldext_dropdownlist($_obj['languages'],$_obj['language']); ?></select></dd>
								<?php } ?>
								<?php if ( @$SESSION->conf['can_change_template'] ) { ?>
									<dt><label for="field_template"><?php echo vldext_lang("settings","template"); ?></label></dt>
									<dd style="padding-bottom:10px;"><select class="select form-control" name="template" id="field_template"><?php echo vldext_dropdownlist($_obj['templates'],$_obj['template']); ?></select></dd>
								<?php } ?>
								<?php if ( @$PREFS->conf['enable_pictures']  &&  @$PREFS->conf['adult_images']  &&  @$SESSION->conf['can_view_adult_images'] ) { ?>
									<dt>
										<label for="field_showadult">
											<input type="checkbox" class="checkbox" name="showadult" value="1" id="field_showadult" <?php if ( $this->objval($_obj,'showadult') ) { ?>checked="checked"<?php } ?> />
											<?php echo vldext_lang("settings","showadult"); ?>
										</label>
									</dt>
								<?php } ?>
								<?php if ( @$PREFS->conf['enable_member_rating'] ) { ?>
									<dt>
										<label for="field_rated">
											<input type="checkbox" class="checkbox" name="rated" value="1" id="field_rated" <?php if ( $this->objval($_obj,'rated') ) { ?>checked="checked"<?php } ?> />
											<?php echo vldext_lang("settings","allow_rating"); ?>
										</label>
									</dt>
								<?php } ?>
    							<dd class="submit" style="margin-top:0;"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("settings","submit"); ?>" /></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<input type="hidden" name="issettings" value="1" />
		</form>

	</div>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>