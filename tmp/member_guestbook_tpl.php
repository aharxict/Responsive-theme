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
include_once SYS_PATH . "includes/ext/ext.reports.php";
 ?>
<?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

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
								<div style="float:left;"><h2><?php echo vldext_lang("member","app_guestbook"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <?php $_temp_inc = $TEMPLATE->output('member_sections_links.tpl',0); include($_temp_inc); ?>
                           
                                </div>
                                <div class="clearfix"></div>
                           </div>
<div style="float:right;"><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_guestbook_rss_link']) ? $_obj['member_guestbook_rss_link'] : "&#123;member_guestbook_rss_link&#125;"; ?>" target="_blank"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/rss.png" border="0" /></a></div>
<div class="clearfix"></div>
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

       
<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_guestbook">
		<div class="typecontent">

			<?php if (!empty($_obj['guestbook_entries'])){ if (!is_array($_obj['guestbook_entries'])) $_obj['guestbook_entries']=array(array('guestbook_entries'=>$_obj['guestbook_entries'])); $_tmp_arr_keys=array_keys($_obj['guestbook_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['guestbook_entries']=array(0=>$_obj['guestbook_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['guestbook_entries']=count($_obj['guestbook_entries']); foreach ($_obj['guestbook_entries'] as $rowcnt=>$guestbook_entries) { $guestbook_entries['rowcnt']=$rowcnt; $guestbook_entries['rowpos']=$rowcnt+1; $guestbook_entries['rownum']=$rowcnt%2+1; $guestbook_entries['rowtotal']=$_cnt['guestbook_entries']; $guestbook_entries['rowfirst']=$rowcnt==0?1:0; $guestbook_entries['rowlast']=($rowcnt+1)==$_cnt['guestbook_entries']?1:0; $_obj=&$guestbook_entries; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td style="padding-right:10px;">
								<div class="image" style="width:125px; height:125px;">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_picture.tpl',0); include($_temp_inc); ?>
								</div>
							</td>
			                <td class="data" valign="top">
								<div class="itemheader">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_name.tpl',0); include($_temp_inc); ?>
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><?php echo vldext_lang("member","post_date"); ?> <?php echo isset($_obj['entry_post_date']) ? $_obj['entry_post_date'] : "&#123;entry_post_date&#125;"; ?></div>
										<?php if ( @$PREFS->conf['enable_reports']  &&  @$PREFS->conf['enable_guestbook_reports']  &&  @$SESSION->conf['can_submit_reports'] ) { ?>
<style type="text/css">
div.reportbox div.popup {
    padding: 10px;
    display: none;
    z-index: 1;
    position: absolute;
    bottom: 16px;
    right: 0px;
    background: #f5fbff;
    border: 1px solid #cccccc;
    width: 155px;
}
</style>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;">
												<?php echo vldext_reports(array('type'=>"guestbook",'member_id'=>$_stack[0]['member_id'],'item_id'=>$_obj['entry_id'])); ?>
										</div>
										<?php } ?>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="entry" style="padding-top:7px;">
									<?php echo isset($_obj['entry_body']) ? $_obj['entry_body'] : "&#123;entry_body&#125;"; ?>
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>

			<div class="commentsform page_member_guestbook_submit" style="margin-top:15px;">
				<div class="dataitem single">
					<div class="form">
						<form name="edit" method="post" action="">
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_comment_body"><?php echo vldext_lang("member","sign_guestbook"); ?></label></dt>
									<dd><textarea class="textarea textarea_full form-control" id="field_comment_body" cols="40" rows="5" name="body"><?php echo isset($_obj['guestbook_comment']) ? $_obj['guestbook_comment'] : "&#123;guestbook_comment&#125;"; ?></textarea></dd>
									<?php if ( @$PREFS->conf['guestbooks_captcha'] ) { ?>
    									<dt><label for="field_captcha"><?php echo vldext_lang("member","verify_number"); ?></label></dt>
    									<dd>
											<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="float:left; width:auto;" />
											<img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" style="float:left;" /><div class="clearfix"></div>
										</dd>
									<?php } ?>
    								<dd class="submit"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("member","submit"); ?>" /></dd>
								</dl>
							</div>
							<input type="hidden" name="isguestbook" value="1" />
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("member","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("member","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

<?php } ?>
		</div>
		<div class="clear"></div>

	</div>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>