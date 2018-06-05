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
								<div style="float:left;"><h2><?php if ( $this->objval($_obj,'active_module')  == "account_guestbook") { ?><?php echo vldext_lang("guestbook","app_guestbook"); ?><?php } else { ?><?php echo vldext_lang("guestbook","app_unapproved"); ?><?php } ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <?php if ( $this->objval($_obj,'active_module')  == "account_guestbook") { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/guestbook/unapproved/","index.php?m=account_guestbook&p=unapproved"); ?>" class="btn"><i class="glyphicon glyphicon-book"></i> <?php echo vldext_lang("guestbook","opt_unapproved_entries"); ?><?php if ( @$SESSION->conf['new_guestbooks'] ) { ?> (<?php echo isset($SESSION->conf['new_guestbooks']) ? $SESSION->conf['new_guestbooks'] : "&#123;new_guestbooks&#125;"; ?>)<?php } ?></a>
                                <?php } else { ?>
                                
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/guestbook/unapproved/","index.php?m=account_guestbook&p=unapproved"); ?>" class="btn active"><i class="glyphicon glyphicon-book"></i> <?php echo vldext_lang("guestbook","opt_unapproved_entries"); ?><?php if ( @$SESSION->conf['new_guestbooks'] ) { ?> (<?php echo isset($SESSION->conf['new_guestbooks']) ? $SESSION->conf['new_guestbooks'] : "&#123;new_guestbooks&#125;"; ?>)<?php } ?></a>
                                <?php } ?>
                           
                                </div>
                                <div class="clearfix"></div>
                           </div>
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

       
<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_guestbook">

		<div class="typecontent">
			<?php if (!empty($_obj['guestbook_entries'])){ if (!is_array($_obj['guestbook_entries'])) $_obj['guestbook_entries']=array(array('guestbook_entries'=>$_obj['guestbook_entries'])); $_tmp_arr_keys=array_keys($_obj['guestbook_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['guestbook_entries']=array(0=>$_obj['guestbook_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['guestbook_entries']=count($_obj['guestbook_entries']); foreach ($_obj['guestbook_entries'] as $rowcnt=>$guestbook_entries) { $guestbook_entries['rowcnt']=$rowcnt; $guestbook_entries['rowpos']=$rowcnt+1; $guestbook_entries['rownum']=$rowcnt%2+1; $guestbook_entries['rowtotal']=$_cnt['guestbook_entries']; $guestbook_entries['rowfirst']=$rowcnt==0?1:0; $guestbook_entries['rowlast']=($rowcnt+1)==$_cnt['guestbook_entries']?1:0; $_obj=&$guestbook_entries; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td>
			                    <div class="image">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_picture.tpl',0); include($_temp_inc); ?>
								</div>
							</td>
		                    <td class="data">
								<div class="itemheader">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_name.tpl',0); include($_temp_inc); ?>
									<ul class="itemheader">
										<li><?php echo vldext_lang("guestbook","posted_on"); ?> <?php echo isset($_obj['entry_post_date']) ? $_obj['entry_post_date'] : "&#123;entry_post_date&#125;"; ?></li>
										<?php if ( @$SESSION->conf['can_approve_own_guestbook']  &&  $this->objval($_stack[0],'entries_active')  == "0") { ?>
											<li class="approve"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_approve_link']) ? $_obj['entry_approve_link'] : "&#123;entry_approve_link&#125;"; ?>" title="<?php echo vldext_lang("guestbook","approve"); ?>"><?php echo vldext_lang("guestbook","approve"); ?></a></li>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_delete_own_guestbook'] ) { ?>
											<li class="remove"><a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("guestbook","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_delete_link']) ? $_obj['entry_delete_link'] : "&#123;entry_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("guestbook","delete"); ?>"><?php echo vldext_lang("guestbook","delete"); ?></a></li>
										<?php } ?>
									</ul>
									<div class="clear"></div>
								</div>
								<div class="entry">
									<?php echo isset($_obj['entry_body']) ? $_obj['entry_body'] : "&#123;entry_body&#125;"; ?>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
				<div class="clear"></div>
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
		</div>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("guestbook","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("guestbook","next_page"); ?> &raquo;</a>
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