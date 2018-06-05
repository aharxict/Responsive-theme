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
include_once SYS_PATH . "includes/ext/ext.metavideo.php";
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
								<div style="float:left;"><h2><?php echo vldext_lang("videos","app_videos"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_videos" class="btn active"><i class="glyphicon glyphicon-picture"></i> <?php echo vldext_lang("videos","opt_viewvideos"); ?></a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_videos&p=add" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> <?php echo vldext_lang("videos","opt_addvideo"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        


	<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_videos">

		<div class="typemedia">
			<?php if (!empty($_obj['profile_videos'])){ if (!is_array($_obj['profile_videos'])) $_obj['profile_videos']=array(array('profile_videos'=>$_obj['profile_videos'])); $_tmp_arr_keys=array_keys($_obj['profile_videos']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_videos']=array(0=>$_obj['profile_videos']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_videos']=count($_obj['profile_videos']); foreach ($_obj['profile_videos'] as $rowcnt=>$profile_videos) { $profile_videos['rowcnt']=$rowcnt; $profile_videos['rowpos']=$rowcnt+1; $profile_videos['rownum']=$rowcnt%2+1; $profile_videos['rowtotal']=$_cnt['profile_videos']; $profile_videos['rowfirst']=$rowcnt==0?1:0; $profile_videos['rowlast']=($rowcnt+1)==$_cnt['profile_videos']?1:0; $_obj=&$profile_videos; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>" style="border:#eee solid 1px; border-radius:3px; margin-bottom:10px; padding:5px;">
					<table class="plain">
						<tr>
							<td>
								<div class="image" style="width:125px; margin-right:10px;">
									<?php if ( $this->objval($_obj,'video_type') ) { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_edit_link']) ? $_obj['video_edit_link'] : "&#123;video_edit_link&#125;"; ?>"><img src="<?php echo vldext_metavideo(array('video_id'=>$_obj['meta_id'],'type'=>$_obj['video_type'],'media'=>"preview",'preview'=>$_obj['video_preview'])); ?>" style="height:125px; width:125px;" height="125" width="125" alt="" border="0" /><br /></a>
									<?php } else { ?>
										<?php if ( $this->objval($_obj,'video_preview')  != "") { ?>
											<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_edit_link']) ? $_obj['video_edit_link'] : "&#123;video_edit_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['video_preview']) ? $_obj['video_preview'] : "&#123;video_preview&#125;"; ?>" style="height:125px; width:125px;" height="125" width="125" alt="" border="0" /><br /></a>
										<?php } else { ?>
											<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_edit_link']) ? $_obj['video_edit_link'] : "&#123;video_edit_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/video_picture_none.gif" style="height:125px; width:125px;" height="125" width="125" alt="" border="0" /><br /></a>
										<?php } ?>
									<?php } ?>
								</div>
							</td>
		                    <td class="data" valign="middle">
								<div class="datainfo">
									<dl class="datainfo" style="padding-bottom:7px;">
										<?php if ( $this->objval($_obj,'video_description') ) { ?>
											<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("videos","notes"); ?>:</dt>
											<dd style="float:left;"><?php echo isset($_obj['video_description']) ? $_obj['video_description'] : "&#123;video_description&#125;"; ?></dd>
                                            <div class="clearfix"></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_video_rating']  &&  $this->objval($_obj,'video_rated') ) { ?>
											<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("videos","rated_on"); ?>:</dt>
											<dd style="float:left;"><?php echo isset($_obj['video_score']) ? $_obj['video_score'] : "&#123;video_score&#125;"; ?> (<?php echo isset($_obj['video_votes']) ? $_obj['video_votes'] : "&#123;video_votes&#125;"; ?> <?php echo vldext_lang("videos","votes"); ?>)</dd>
                                            <div class="clearfix"></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_videos_categories'] ) { ?>
											<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("videos","category"); ?>:</dt>
											<dd style="float:left;"><?php echo isset($_obj['video_category']) ? $_obj['video_category'] : "&#123;video_category&#125;"; ?></dd>
                                            <div class="clearfix"></div>
										<?php } ?>
										<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("videos","dateadded"); ?>:</dt>
										<dd style="float:left;"><?php echo isset($_obj['video_post_date']) ? $_obj['video_post_date'] : "&#123;video_post_date&#125;"; ?></dd>
                                        <div class="clearfix"></div>
										<?php if ( @$PREFS->conf['enable_encodercloud']  &&  $this->objval($_obj,'video_streaming')  > "1") { ?>
											<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("videos","status"); ?></dt>
											<?php if ( $this->objval($_obj,'video_streaming')  == "2") { ?>
												<dd style="float:left;"><?php echo vldext_lang("videos","status_queue"); ?></dd>
											<?php } else { ?>
												<dd style="float:left;"><?php echo vldext_lang("videos","status_error"); ?></dd>
											<?php } ?>
                                            <div class="clearfix"></div>
										<?php } ?>
									</dl>
								</div>
                                
                                <div style="border-top:#eee solid 1px; padding:5px; padding-left:0; padding-bottom:0; margin-top:7px;">
										<?php if ( @$SESSION->conf['can_view_own_videos_comments'] ) { ?>
											<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_comments_link']) ? $_obj['video_comments_link'] : "&#123;video_comments_link&#125;"; ?>" style="padding-right:5px;"><i class="glyphicon glyphicon-comment"></i> <?php echo isset($_obj['video_total_comments']) ? $_obj['video_total_comments'] : "&#123;video_total_comments&#125;"; ?> <?php echo vldext_lang("videos","comments"); ?></a>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_edit_own_videos'] ) { ?>
											<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_edit_link']) ? $_obj['video_edit_link'] : "&#123;video_edit_link&#125;"; ?>" title="<?php echo vldext_lang("videos","edit"); ?>" style="padding-right:5px;"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("videos","edit"); ?></a>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_delete_own_videos'] ) { ?>
											<a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("videos","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_delete_link']) ? $_obj['video_delete_link'] : "&#123;video_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("videos","delete"); ?>" style="padding-right:5px;"><i class="glyphicon glyphicon-remove"></i> <?php echo vldext_lang("videos","delete"); ?></a>
										<?php } ?>
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
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("videos","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("videos","next_page"); ?> &raquo;</a>
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