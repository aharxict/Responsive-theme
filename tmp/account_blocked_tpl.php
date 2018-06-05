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
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture']) ? $SESSION->conf['picture'] : "&#123;picture&#125;"; ?>" alt="" border="0" /></a>
							<?php } ?>
							
						</div>
<?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("blocked","app_blocked"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/blocked/","index.php?m=account_blocked"); ?>" class="btn active"><i class="glyphicon glyphicon-ban-circle"></i> <?php echo vldext_lang("core","usermenu_blocked"); ?></a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        


<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_blocked">

		<div class="typemembers">
			<?php if (!empty($_obj['blocked_profiles'])){ if (!is_array($_obj['blocked_profiles'])) $_obj['blocked_profiles']=array(array('blocked_profiles'=>$_obj['blocked_profiles'])); $_tmp_arr_keys=array_keys($_obj['blocked_profiles']); if ($_tmp_arr_keys[0]!='0') $_obj['blocked_profiles']=array(0=>$_obj['blocked_profiles']); $_stack[$_stack_cnt++]=$_obj; $_cnt['blocked_profiles']=count($_obj['blocked_profiles']); foreach ($_obj['blocked_profiles'] as $rowcnt=>$blocked_profiles) { $blocked_profiles['rowcnt']=$rowcnt; $blocked_profiles['rowpos']=$rowcnt+1; $blocked_profiles['rownum']=$rowcnt%2+1; $blocked_profiles['rowtotal']=$_cnt['blocked_profiles']; $blocked_profiles['rowfirst']=$rowcnt==0?1:0; $blocked_profiles['rowlast']=($rowcnt+1)==$_cnt['blocked_profiles']?1:0; $_obj=&$blocked_profiles; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_picture.tpl',0); include($_temp_inc); ?>
								</div>
							</td>
		                    <td class="data">
								<div class="datainfo">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_name.tpl',0); include($_temp_inc); ?>
									<dl class="datainfo">
										<?php $_temp_inc = $TEMPLATE->output('member_sections_card.tpl',0); include($_temp_inc); ?>
									</dl>
								</div>
							</td>
		                    <td>
								<div class="actions">
									<ul class="actions">
										<?php $_temp_inc = $TEMPLATE->output('member_sections_quick_actions.tpl',0); include($_temp_inc); ?>
										<?php if ( @$SESSION->conf['can_unblock_members'] ) { ?>
											<li class="remove"><a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("blocked","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_delete_link']) ? $_obj['member_delete_link'] : "&#123;member_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("blocked","delete"); ?>"><?php echo vldext_lang("blocked","delete"); ?></a></li>
										<?php } ?>
									</ul>
									<div class="clear"></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
		</div>
		<div class="clear"></div>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("blocked","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("blocked","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

<?php } ?>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>