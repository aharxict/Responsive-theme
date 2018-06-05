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
								<div style="float:left;"><h2><?php echo vldext_lang("event_pictures","app_pictures"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_add_link']) ? $_obj['event_pictures_add_link'] : "&#123;event_pictures_add_link&#125;"; ?>" class="btn"><?php echo vldext_lang("event_pictures","opt_addpicture"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_edit_link']) ? $_obj['event_edit_link'] : "&#123;event_edit_link&#125;"; ?>" class="btn"><?php echo vldext_lang("event_pictures","opt_editevent"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_guests_view_link']) ? $_obj['event_guests_view_link'] : "&#123;event_guests_view_link&#125;"; ?>" class="btn"><?php echo vldext_lang("event_pictures","opt_guests"); ?></a>
                                
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_comments_view_link']) ? $_obj['event_comments_view_link'] : "&#123;event_comments_view_link&#125;"; ?>" class="btn"><?php echo vldext_lang("event_pictures","opt_comments"); ?></a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
       

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_events_pictures">

		<div class="typemedia">
			<?php if (!empty($_obj['event_pictures'])){ if (!is_array($_obj['event_pictures'])) $_obj['event_pictures']=array(array('event_pictures'=>$_obj['event_pictures'])); $_tmp_arr_keys=array_keys($_obj['event_pictures']); if ($_tmp_arr_keys[0]!='0') $_obj['event_pictures']=array(0=>$_obj['event_pictures']); $_stack[$_stack_cnt++]=$_obj; $_cnt['event_pictures']=count($_obj['event_pictures']); foreach ($_obj['event_pictures'] as $rowcnt=>$event_pictures) { $event_pictures['rowcnt']=$rowcnt; $event_pictures['rowpos']=$rowcnt+1; $event_pictures['rownum']=$rowcnt%2+1; $event_pictures['rowtotal']=$_cnt['event_pictures']; $event_pictures['rowfirst']=$rowcnt==0?1:0; $event_pictures['rowlast']=($rowcnt+1)==$_cnt['event_pictures']?1:0; $_obj=&$event_pictures; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_edit_link']) ? $_obj['picture_edit_link'] : "&#123;picture_edit_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="" border="0" /><br /></a>
								</div>
							</td>
							<td class="data">
								<div class="datainfo" style="padding-left:7px;">
									<dl class="datainfo">
										<?php if ( $this->objval($_obj,'picture_description') ) { ?>
											<dt><?php echo vldext_lang("event_pictures","notes"); ?>:</dt>
											<dd><?php echo isset($_obj['picture_description']) ? $_obj['picture_description'] : "&#123;picture_description&#125;"; ?></dd>
										<?php } ?>
										<dt><?php echo vldext_lang("event_pictures","post_date"); ?>:</dt>
										<dd><?php echo isset($_obj['picture_post_date']) ? $_obj['picture_post_date'] : "&#123;picture_post_date&#125;"; ?><br />
                                        <?php if ( @$SESSION->conf['can_edit_own_events_pictures'] ) { ?>
											<span class="glyphicon glyphicon-edit" style="padding-right:4px;"></span> <a style="padding-right:7px;" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_edit_link']) ? $_obj['picture_edit_link'] : "&#123;picture_edit_link&#125;"; ?>" title="<?php echo vldext_lang("event_pictures","edit"); ?>"><?php echo vldext_lang("event_pictures","edit"); ?></a>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_delete_own_events_pictures'] ) { ?>
											<span class="glyphicon glyphicon-remove" style="padding-right:4px;"></span> <a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("event_pictures","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_delete_link']) ? $_obj['picture_delete_link'] : "&#123;picture_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("event_pictures","delete"); ?>"><?php echo vldext_lang("event_pictures","delete"); ?></a>
										<?php } ?>
                                        </dd>
									</dl>
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
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("event_pictures","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("event_pictures","next_page"); ?> &raquo;</a>
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