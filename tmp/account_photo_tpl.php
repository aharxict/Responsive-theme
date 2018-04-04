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
						<div class="hide-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture']) ? $SESSION->conf['picture'] : "&#123;picture&#125;"; ?>" alt="" border="0" /></a>
							<?php } ?>
							
						</div>
                        </div>
<div class="hide-mobile">
<?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
</div>

<div class="hide-mobile">
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
</div>
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("photo","app_photo"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_photo" class="btn active"><i class="glyphicon glyphicon-picture"></i> <?php echo vldext_lang("photo","app_photo"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
 <?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_photo">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td>
							<div class="image image-profile-preview">
								<?php if ( $this->objval($_obj,'photo_filename') ) { ?>
									<a class="picture_zoom" href="<?php echo isset($_obj['virtual_pic_path']) ? $_obj['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['photo_filename_large']) ? $_obj['photo_filename_large'] : "&#123;photo_filename_large&#125;"; ?>" target="_blank" id="photo_0"><img src="<?php echo isset($_obj['virtual_pic_path']) ? $_obj['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['photo_filename']) ? $_obj['photo_filename'] : "&#123;photo_filename&#125;"; ?>" border="0" alt="" /><br /></a>
									<div id="photo_0_zoom" style="display:none"><img src="<?php echo isset($_obj['virtual_pic_path']) ? $_obj['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['photo_filename_large']) ? $_obj['photo_filename_large'] : "&#123;photo_filename_large&#125;"; ?>" alt="" border="0" /><br/></div>
								<?php } else { ?>
									<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_photo_link']) ? $_obj['member_photo_link'] : "&#123;member_photo_link&#125;"; ?>"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" /><br /></a>
								<?php } ?>
							</div>
                            <div class="clearfix"></div>
                        <?php if ( $this->objval($_obj,'photo_filename') ) { ?>
						<div class="actions hide-mobile" style="border:#eee 1px solid; border-radius:3px; margin-top:7px; padding:7px; font-size:12px; width:212px;">
						<a style="display:none; padding-right:7px;" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_thumbnail_link']) ? $_obj['member_thumbnail_link'] : "&#123;member_thumbnail_link&#125;"; ?>" title="<?php echo vldext_lang("photo","edit_thumbnail"); ?>"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("photo","edit_thumbnail"); ?></a>
                        <a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("photo","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['delete_link']) ? $_obj['delete_link'] : "&#123;delete_link&#125;"; ?>')" title="<?php echo vldext_lang("photo","delete"); ?>"><i class="glyphicon glyphicon-remove"></i> <?php echo vldext_lang("photo","delete"); ?></a>
						</div>
						<?php } ?>
						</td>
		                <td class="data">
							<div class="form">
								<form name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_photo"><?php echo vldext_lang("photo","select_picture"); ?></label></dt>
											<dd><input style="height:auto;" id="field_photo" type="file" name="photo" value="" class="text form-control" /></dd>
											<?php if ( @$PREFS->conf['adult_images'] ) { ?>
												<dt>
													<label for="field_adult">
														<input type="checkbox" class="checkbox" name="adult" value="1" id="field_adult" <?php if ( $this->objval($_obj,'photo_adult') ) { ?>checked="checked"<?php } ?> />
														<?php echo vldext_lang("photo","is_adult"); ?>
													</label>
												</dt>
											<?php } ?>
    										<dd class="submit">
    											<input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("photo","submit"); ?>" />
    										</dd>
										</dl>
									</div>
									<input type="hidden" name="issubmit" value="1" />
								</form>
							</div>
						</td>
		            </tr>
		        </table>
			</div>
		</div>
		<div class="clear"></div>

	</div>

<?php } ?>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>