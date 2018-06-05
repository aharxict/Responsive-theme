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
<!-- LEFT SIDEBAR -->
<div class="hide-mobile">

					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture']) ? $SESSION->conf['picture'] : "&#123;picture&#125;"; ?>" alt="" border="0" /></a>
							<?php } ?>
							
						</div>
<?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
					
                    
                    </div>

</div>
<!-- /LEFT SIDEBAR -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("core","usermenu_pictures"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['pictures_view_link']) ? $_obj['pictures_view_link'] : "&#123;pictures_view_link&#125;"; ?>" class="btn active"><i class="glyphicon glyphicon-picture"></i> <?php echo vldext_lang("pictures","opt_viewpictures"); ?></a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['pictures_add_link']) ? $_obj['pictures_add_link'] : "&#123;pictures_add_link&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> <?php echo vldext_lang("pictures","opt_addpicture"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

        <div class="content-box">
	<div class="outter page_account_pictures">

		<div class="typemedia">
			<?php if (!empty($_obj['profile_pictures'])){ if (!is_array($_obj['profile_pictures'])) $_obj['profile_pictures']=array(array('profile_pictures'=>$_obj['profile_pictures'])); $_tmp_arr_keys=array_keys($_obj['profile_pictures']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_pictures']=array(0=>$_obj['profile_pictures']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_pictures']=count($_obj['profile_pictures']); foreach ($_obj['profile_pictures'] as $rowcnt=>$profile_pictures) { $profile_pictures['rowcnt']=$rowcnt; $profile_pictures['rowpos']=$rowcnt+1; $profile_pictures['rownum']=$rowcnt%2+1; $profile_pictures['rowtotal']=$_cnt['profile_pictures']; $profile_pictures['rowfirst']=$rowcnt==0?1:0; $profile_pictures['rowlast']=($rowcnt+1)==$_cnt['profile_pictures']?1:0; $_obj=&$profile_pictures; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>" style="border:#eee solid 1px; border-radius:3px; margin-bottom:10px; padding:5px;">
					<table class="plain">
						<tr>
							<td>
								<div class="image" style="width:125px; margin-right:10px;">
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_edit_link']) ? $_obj['picture_edit_link'] : "&#123;picture_edit_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="" border="0" style="height:125px; width:125px;" height="125" width="125" /><br /></a>
								</div>
							</td>
		                    <td class="data" valign="middle">
								<div class="datainfo">
									<dl class="datainfo" style="padding-bottom:7px;">
										<?php if ( $this->objval($_obj,'picture_description') ) { ?>
											<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("pictures","notes"); ?>:</dt>
											<dd style="float:left;"><?php echo isset($_obj['picture_description']) ? $_obj['picture_description'] : "&#123;picture_description&#125;"; ?></dd>
                                            <div class="clearfix"></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_picture_rating']  &&  $this->objval($_obj,'picture_rated') ) { ?>
											<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("pictures","rated_on"); ?>:</dt>
											<dd style="float:left;"><?php echo isset($_obj['picture_score']) ? $_obj['picture_score'] : "&#123;picture_score&#125;"; ?> (<?php echo isset($_obj['picture_votes']) ? $_obj['picture_votes'] : "&#123;picture_votes&#125;"; ?> <?php echo vldext_lang("pictures","votes"); ?>)</dd>
                                            <div class="clearfix"></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['adult_images']  &&  $this->objval($_obj,'picture_adult') ) { ?>
											<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("pictures","set_as_adult"); ?>:</dt>
											<dd style="float:left;"><?php echo vldext_lang("core","yes"); ?></dd>
                                            <div class="clearfix"></div>
										<?php } ?>
										<dt style="float:left; padding-right:5px;"><?php echo vldext_lang("pictures","post_date"); ?>:</dt>
										<dd style="float:left;"><?php echo isset($_obj['picture_post_date']) ? $_obj['picture_post_date'] : "&#123;picture_post_date&#125;"; ?></dd>
                                        <div class="clearfix"></div>
									</dl>
								</div>
                                
                                <div style="border-top:#eee solid 1px; padding:5px; padding-left:0; padding-bottom:0; margin-top:7px;">
									<?php if ( @$SESSION->conf['can_view_own_pictures_comments'] ) { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_comments_link']) ? $_obj['picture_comments_link'] : "&#123;picture_comments_link&#125;"; ?>" style="padding-right:5px;"><i class="glyphicon glyphicon-comment"></i> <?php echo isset($_obj['picture_total_comments']) ? $_obj['picture_total_comments'] : "&#123;picture_total_comments&#125;"; ?> <?php echo vldext_lang("pictures","comments"); ?></a>
									<?php } ?>
									<?php if ( @$SESSION->conf['can_edit_own_pictures'] ) { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_edit_link']) ? $_obj['picture_edit_link'] : "&#123;picture_edit_link&#125;"; ?>" title="<?php echo vldext_lang("pictures","edit"); ?>" style="padding-right:5px;"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("pictures","edit"); ?></a>
									<a style="display:none; padding-right:5px;" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_thumbnail_link']) ? $_obj['picture_thumbnail_link'] : "&#123;picture_thumbnail_link&#125;"; ?>" title="<?php echo vldext_lang("pictures","edit_thumbnail"); ?>"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("pictures","edit_thumbnail"); ?></a>
									<?php } ?>
									<?php if ( @$SESSION->conf['can_delete_own_pictures'] ) { ?>
									<a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("pictures","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_delete_link']) ? $_obj['picture_delete_link'] : "&#123;picture_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("pictures","delete"); ?>" style="padding-right:5px;"><i class="glyphicon glyphicon-remove"></i> <?php echo vldext_lang("pictures","delete"); ?></a>
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
        </div>
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>