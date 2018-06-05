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
								<div style="float:left;"><h2><?php echo vldext_lang("notifications","app_notifications"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_settings" class="btn"><i class="glyphicon glyphicon-cog"></i> <?php echo vldext_lang("core","usermenu_settings"); ?></a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_notifications" class="btn active"><i class="glyphicon glyphicon-plus-sign"></i> <?php echo vldext_lang("core","usermenu_notifications"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<p>Select when you want to get a message to your email address.
	<div class="outter page_account_notifications">

		<form name="edit" method="post" action="">
			<div class="typepage">
				<div class="dataitem single">
					<div class="form">
						<div class="fieldset">
							<dl class="fieldset">
								<?php if (!empty($_obj['settings'])){ if (!is_array($_obj['settings'])) $_obj['settings']=array(array('settings'=>$_obj['settings'])); $_tmp_arr_keys=array_keys($_obj['settings']); if ($_tmp_arr_keys[0]!='0') $_obj['settings']=array(0=>$_obj['settings']); $_stack[$_stack_cnt++]=$_obj; $_cnt['settings']=count($_obj['settings']); foreach ($_obj['settings'] as $rowcnt=>$settings) { $settings['rowcnt']=$rowcnt; $settings['rowpos']=$rowcnt+1; $settings['rownum']=$rowcnt%2+1; $settings['rowtotal']=$_cnt['settings']; $settings['rowfirst']=$rowcnt==0?1:0; $settings['rowlast']=($rowcnt+1)==$_cnt['settings']?1:0; $_obj=&$settings; ?>
									<dt>
									<label for="field_<?php echo isset($_obj['setting_label']) ? $_obj['setting_label'] : "&#123;setting_label&#125;"; ?>">
									<input style="float:left;" type="checkbox" class="checkbox" name="<?php echo isset($_obj['setting_label']) ? $_obj['setting_label'] : "&#123;setting_label&#125;"; ?>" value="1" id="field_<?php echo isset($_obj['setting_label']) ? $_obj['setting_label'] : "&#123;setting_label&#125;"; ?>" <?php if ( $this->objval($_obj,'setting_value') ) { ?>checked="checked"<?php } ?> />
											<div style="float:left; padding-left:10px; padding-top:3px;"><?php echo isset($_obj['setting_name']) ? $_obj['setting_name'] : "&#123;setting_name&#125;"; ?></div>
										</label>
									</dt>
								<?php } $_obj=$_stack[--$_stack_cnt];} ?>
    							<dd class="submit" style="margin-top:10px;"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("notifications","submit"); ?>" /></dd>
							</dl>
						</div>
						<input type="hidden" name="issettings" value="1" />
					</div>
				</div>
			</div>
			<div class="clear"></div>
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