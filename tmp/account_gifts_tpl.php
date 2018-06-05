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
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
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
<!-- LEFT SIDEBAR -->
<div class="hide-mobile">

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

</div>
<!-- /LEFT SIDEBAR -->
					
					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("gifts","app_gifts"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/gifts/inbox/","index.php?m=account_gifts&p=inbox"); ?>" class="btn <?php if ( $this->objval($_obj,'gifts_folder')  == "1") { ?>active<?php } ?>"><i class="glyphicon glyphicon-gift"></i> <?php echo vldext_lang("gifts","opt_inbox"); ?> (<?php echo isset($SESSION->conf['totaligifts']) ? $SESSION->conf['totaligifts'] : "&#123;totaligifts&#125;"; ?>)</a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/gifts/sent/","index.php?m=account_gifts&p=sent"); ?>" class="btn <?php if ( $this->objval($_obj,'gifts_folder')  == "2") { ?>active<?php } ?>"><i class="glyphicon glyphicon-gift"></i> <?php echo vldext_lang("gifts","opt_sent"); ?> (<?php echo isset($SESSION->conf['totalsgifts']) ? $SESSION->conf['totalsgifts'] : "&#123;totalsgifts&#125;"; ?>)</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        
<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_gifts">

		<form name="gifts" method="post" action="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['gifts_delete_link']) ? $_obj['gifts_delete_link'] : "&#123;gifts_delete_link&#125;"; ?>">
<table class="pmbox" style="width:100%;">
				<tr class="header" style="background: transparent url('<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/border.png') repeat-x scroll left bottom; padding-bottom: 10px; margin-bottom: 15px;">
					<td class="checkbox" style="margin-top:0px; width:5%; padding-left:30px;">
                        <input style="widht:15px;" type="checkbox" name="check_all_gifts" id="check_all_gifts" class="checkbox form-control" onclick="toggleItems(this.form, this.checked)" />
					</td>
					<td class="sender" style="width:10%px;">
						<strong><?php if ( $this->objval($_obj,'gifts_folder')  == "1") { ?><?php echo vldext_lang("gifts","from"); ?><?php } else { ?><?php echo vldext_lang("gifts","to"); ?><?php } ?></strong>
					</td>
					<td class="subject" style="width:80%">
						<strong><?php echo vldext_lang("gifts","message"); ?></strong>
					</td>
				</tr>
				<?php if (!empty($_obj['gifts'])){ if (!is_array($_obj['gifts'])) $_obj['gifts']=array(array('gifts'=>$_obj['gifts'])); $_tmp_arr_keys=array_keys($_obj['gifts']); if ($_tmp_arr_keys[0]!='0') $_obj['gifts']=array(0=>$_obj['gifts']); $_stack[$_stack_cnt++]=$_obj; $_cnt['gifts']=count($_obj['gifts']); foreach ($_obj['gifts'] as $rowcnt=>$gifts) { $gifts['rowcnt']=$rowcnt; $gifts['rowpos']=$rowcnt+1; $gifts['rownum']=$rowcnt%2+1; $gifts['rowtotal']=$_cnt['gifts']; $gifts['rowfirst']=$rowcnt==0?1:0; $gifts['rowlast']=($rowcnt+1)==$_cnt['gifts']?1:0; $_obj=&$gifts; ?>
                    <tr class="row <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?> <?php if ( $this->objval($_stack[0],'gifts_folder')  == "1" &&  $this->objval($_obj,'gift_new') ) { ?>new<?php } ?>" style="background: transparent url('<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/border.png') repeat-x scroll left bottom; padding-bottom: 10px; margin-bottom: 15px;">
						<td class="checkbox" valign="top" style="padding-top:10px; width:15px; padding-bottom:10px; padding-left:30px;">
							<input style="width:15px;" type="checkbox" name="gift_id[<?php echo isset($_obj['gift_message_id']) ? $_obj['gift_message_id'] : "&#123;gift_message_id&#125;"; ?>]" id="gift_id_<?php echo isset($_obj['gift_message_id']) ? $_obj['gift_message_id'] : "&#123;gift_message_id&#125;"; ?>" class="checkbox" />
						</td>
						
                         <td class="sender" valign="top" style="padding-top:10px; padding-right:10px; padding-bottom:10px;">
							<div class="image">
								<?php if ( $this->objval($_stack[0],'gifts_folder')  == "1") { ?>
									<?php if ( $this->objval($_obj,'gift_privacy')  == "2") { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['gift_link']) ? $_obj['gift_link'] : "&#123;gift_link&#125;"; ?>" title="<?php echo isset($_obj['gift_name']) ? $_obj['gift_name'] : "&#123;gift_name&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="<?php echo isset($_obj['gift_name']) ? $_obj['gift_name'] : "&#123;gift_name&#125;"; ?>" style="border-radius:3px; height:75px;" /><br /></a>
									<?php } else { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['gift_link']) ? $_obj['gift_link'] : "&#123;gift_link&#125;"; ?>" title="<?php echo isset($_obj['gift_name']) ? $_obj['gift_name'] : "&#123;gift_name&#125;"; ?>"><img style="border: 0px" src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['gift_filename']) ? $_obj['gift_filename'] : "&#123;gift_filename&#125;"; ?>" alt="<?php echo isset($_obj['gift_name']) ? $_obj['gift_name'] : "&#123;gift_name&#125;"; ?>" style="border-radius:3px; height:75px;" /><br /></a>
									<?php } ?>
								<?php } else { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['gift_link']) ? $_obj['gift_link'] : "&#123;gift_link&#125;"; ?>" title="<?php echo isset($_obj['gift_name']) ? $_obj['gift_name'] : "&#123;gift_name&#125;"; ?>"><img style="border: 0px" src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['gift_filename']) ? $_obj['gift_filename'] : "&#123;gift_filename&#125;"; ?>" alt="<?php echo isset($_obj['gift_name']) ? $_obj['gift_name'] : "&#123;gift_name&#125;"; ?>" style="border-radius:3px; height:75px;" /><br /></a>
								<?php } ?>
							</div>
						</td>
                        
                        <td class="subject" valign="top" style="padding-top:10px; padding-bottom:10px;">
							<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['gift_link']) ? $_obj['gift_link'] : "&#123;gift_link&#125;"; ?>">
							<div class="preview">Meddelande: <?php echo vldext_trim($_obj['gift_message'],90); ?></div>
                            </a>
                            <div class="date" style="font-size:12px;">Från: 
                            <?php if ( $this->objval($_stack[0],'gifts_folder')  == "1") { ?>
								<?php if ( $this->objval($_obj,'gift_privacy')  == "2") { ?>
									<?php echo vldext_lang("gifts","anonymous"); ?>
								<?php } else { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo vldext_trim($_obj['member_username'],25); ?></a>
								<?php } ?>
							<?php } else { ?>
								<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo vldext_trim($_obj['member_username'],25); ?></a>
							<?php } ?>, <?php echo isset($_obj['gift_date']) ? $_obj['gift_date'] : "&#123;gift_date&#125;"; ?></div>
						</td>
                        
					</tr>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
                <tr>
					<td colspan="3" style="padding-top:15px;">
						<a href="#" class="btn" onclick="javascript:confirmForm('<?php echo vldext_lang("gifts","delete?"); ?>', 'gifts')" title="<?php echo vldext_lang("gifts","delete"); ?>"><?php echo vldext_lang("gifts","delete"); ?></a>
					</td>
				</tr>
			</table>
 		</form>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("gifts","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("gifts","next_page"); ?> &raquo;</a>
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