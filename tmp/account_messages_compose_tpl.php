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
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
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
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php $_temp_inc = $TEMPLATE->output('member_sections_picture_profile.tpl',0); include($_temp_inc); ?>

						</div>

					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("messages","app_compose"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/inbox/","index.php?m=account_messages&p=inbox"); ?>" class="btn"><i class="glyphicon glyphicon-inbox"></i> <?php echo vldext_lang("messages","opt_inbox"); ?> (<?php echo isset($SESSION->conf['totalimessages']) ? $SESSION->conf['totalimessages'] : "&#123;totalimessages&#125;"; ?>)</a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/sent/","index.php?m=account_messages&p=sent"); ?>" class="btn"><i class="glyphicon glyphicon-send"></i> <?php echo vldext_lang("messages","opt_sent"); ?> (<?php echo isset($SESSION->conf['totalsmessages']) ? $SESSION->conf['totalsmessages'] : "&#123;totalsmessages&#125;"; ?>)</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                           
            			<span><?php echo isset($_obj['messages_info']) ? $_obj['messages_info'] : "&#123;messages_info&#125;"; ?></span>
                        
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>
        
        <div class="form" style="margin-top:15px;">
								<form method="post" name="message" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt style="padding-bottom:10px;"><label for="field_subject"><?php echo vldext_lang("messages","composeto"); ?>: <?php $_temp_inc = $TEMPLATE->output('member_sections_name.tpl',0); include($_temp_inc); ?></label></dt>
											<dt><label for="field_subject"><?php echo vldext_lang("messages","subject"); ?></label></dt>
											<dd style="padding-bottom:10px;"><input class="text text_small form-control" id="field_subject" type="text" name="subject" maxlength="255" value="<?php echo isset($_obj['message_subject']) ? $_obj['message_subject'] : "&#123;message_subject&#125;"; ?>" /></dd>
											<dt>
												<label for="field_body"><?php echo vldext_lang("messages","body"); ?><?php if ( @$PREFS->conf['message_chars_counter'] ) { ?> <span style="font-weight:normal">(<?php echo isset($_obj['character_count']) ? $_obj['character_count'] : "&#123;character_count&#125;"; ?>)</span><?php } ?></label>
											</dt>
											<dd>
												<textarea id="field_body" class="textarea textarea_small form-control" cols="40" rows="5" name="body" <?php if ( @$PREFS->conf['message_chars_counter'] ) { ?>onkeyup="strcounter('field_body','field_body_count',this.value,<?php echo isset($PREFS->conf['max_message_chars']) ? $PREFS->conf['max_message_chars'] : "&#123;max_message_chars&#125;"; ?>)" onkeydown="strcounter('field_body','field_body_count',this.value,<?php echo isset($PREFS->conf['max_message_chars']) ? $PREFS->conf['max_message_chars'] : "&#123;max_message_chars&#125;"; ?>)" onchange="strcounter('field_body','field_body_count',this.value,<?php echo isset($PREFS->conf['max_message_chars']) ? $PREFS->conf['max_message_chars'] : "&#123;max_message_chars&#125;"; ?>)"<?php } ?>><?php echo isset($_obj['message_body']) ? $_obj['message_body'] : "&#123;message_body&#125;"; ?></textarea>
											</dd>
    										<dd class="submit" style="padding-bottom:20px;padding-top:20px;">
    											<div style="float: left">
													<input class="submit btn" name="submit" value="<?php echo vldext_lang("messages","submit"); ?>" type="submit" />&nbsp;
												</div>
												<?php if ( @$PREFS->conf['pm_enable_smilies'] ) { ?>
													<div class="smilies" style="float: right">
														<p class="smilies"><a href="#" onclick="showhide_field('smilies_popup_box');return false;"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/smilies.png" border="0" align="absmiddle" /><br /></a></p>
														<div class="smilies-inner">
															<div class="smiliesbox" style="display: none" id="smilies_popup_box">
																<?php if (!empty($_obj['smilies'])){ if (!is_array($_obj['smilies'])) $_obj['smilies']=array(array('smilies'=>$_obj['smilies'])); $_tmp_arr_keys=array_keys($_obj['smilies']); if ($_tmp_arr_keys[0]!='0') $_obj['smilies']=array(0=>$_obj['smilies']); $_stack[$_stack_cnt++]=$_obj; $_cnt['smilies']=count($_obj['smilies']); foreach ($_obj['smilies'] as $rowcnt=>$smilies) { $smilies['rowcnt']=$rowcnt; $smilies['rowpos']=$rowcnt+1; $smilies['rownum']=$rowcnt%2+1; $smilies['rowtotal']=$_cnt['smilies']; $smilies['rowfirst']=$rowcnt==0?1:0; $smilies['rowlast']=($rowcnt+1)==$_cnt['smilies']?1:0; $_obj=&$smilies; ?>
																	<div class="smiliesitem"><a href="#" onclick="selectSmiley(<?php echo isset($_obj['smiley_id']) ? $_obj['smiley_id'] : "&#123;smiley_id&#125;"; ?>,'field_body');showhide_field('smilies_popup_box');return false;" title="<?php echo isset($_obj['name']) ? $_obj['name'] : "&#123;name&#125;"; ?> - <?php echo isset($_obj['shortcut']) ? $_obj['shortcut'] : "&#123;shortcut&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['filename']) ? $_obj['filename'] : "&#123;filename&#125;"; ?>" alt="<?php echo isset($_obj['name']) ? $_obj['name'] : "&#123;name&#125;"; ?> - <?php echo isset($_obj['shortcut']) ? $_obj['shortcut'] : "&#123;shortcut&#125;"; ?>" border="0" align="absmiddle" /><br /></a></div>
																	<?php if ( $this->objval($_obj,'rowcnt')  > "0" &&  $this->objval($_obj,'rowcnt')  % "6" == "5") { ?><div class="clear"></div><?php } ?>
																<?php } $_obj=$_stack[--$_stack_cnt];} ?>
															</div>
														</div>
													</div>
												<?php } ?>
												<div class="clear"></div>
											</dd>
										</dl>
									</div>
									<input type="hidden" name="ismessage" value="1" />
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