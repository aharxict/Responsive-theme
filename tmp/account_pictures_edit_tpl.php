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
								<div style="float:left;"><h2><?php if ( $this->objval($_obj,'picture_id') ) { ?><?php echo vldext_lang("pictures","app_editpicture"); ?><?php } else { ?><?php echo vldext_lang("pictures","app_addpicture"); ?><?php } ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['pictures_view_link']) ? $_obj['pictures_view_link'] : "&#123;pictures_view_link&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-picture"></i> <?php echo vldext_lang("pictures","opt_viewpictures"); ?></a>
                           
	                            <?php if ( $this->objval($_obj,'picture_id') ) { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['pictures_edit_link']) ? $_obj['pictures_edit_link'] : "&#123;pictures_edit_link&#125;"; ?>" class="btn active"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("pictures","frm_editpicture"); ?></a>
                                <?php } else { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['pictures_add_link']) ? $_obj['pictures_add_link'] : "&#123;pictures_add_link&#125;"; ?>" class="btn active"><i class="glyphicon glyphicon-plus-sign"></i> <?php echo vldext_lang("pictures","opt_addpicture"); ?></a>
                                <?php } ?>
                                
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>
                        <span><?php echo isset($_obj['pictures_info']) ? $_obj['pictures_info'] : "&#123;pictures_info&#125;"; ?></span>

	<div class="outter page_account_pictures_edit" style="margin-top:15px;">

		<div class="typepage">
			<div class="dataitem single">
            
            <div class="image image-preview">
								<?php if ( $this->objval($_obj,'picture_preview') ) { ?>
									<a class="picture_zoom" href="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['picture_filename']) ? $_obj['picture_filename'] : "&#123;picture_filename&#125;"; ?>" id="picture_<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>" target="_blank"><img src="<?php echo isset($_obj['virtual_pic_path']) ? $_obj['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="<?php echo vldext_lang("pictures","viewpicture"); ?>" border="0" /><br /></a>
									<div id="picture_<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>_zoom" style="display:none"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['picture_filename']) ? $_obj['picture_filename'] : "&#123;picture_filename&#125;"; ?>" alt="" border="0" /><br/></div>
								<?php } else { ?>
									<a href="#"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" /><br /></a>
								<?php } ?>
			</div>
				<table class="plain">
					<tr>
		                <td class="data">
							<div class="form">
								<form id="fileuploadform" name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
    										<dt><label for="field_description"><?php echo vldext_lang("pictures","description"); ?></label></dt>
											<dd><textarea id="field_description" class="textarea textarea_small form-control" cols="40" rows="5" name="description"><?php echo isset($_obj['picture_description']) ? $_obj['picture_description'] : "&#123;picture_description&#125;"; ?></textarea></dd>
											<?php if ( $this->objval($_obj,'picture_preview')  == "") { ?>
												<dt id="regular_file_select" style="margin-top:15px;"><label for="field_filename"><?php echo vldext_lang("pictures","select_picture"); ?></label></dt>
												<dd id="regular_file_browse"><input class="form-control file-input-control" type="file" name="pending_file" id="pending_file" /></dd>
											<?php } ?>
											<?php if ( @$PREFS->conf['enable_picture_rating'] ) { ?>
												<dt>
													<label for="field_rated">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="rated" value="1" id="field_rated" <?php if ( $this->objval($_obj,'picture_rated') ) { ?>checked="checked"<?php } ?> /></div>
														<div style="float:left; line-height:26px;"><?php echo vldext_lang("pictures","is_rated"); ?></div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<?php } ?>
											<?php if ( @$PREFS->conf['adult_images'] ) { ?>
												<dt>
													<label for="field_adult">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="adult" value="1" id="field_adult" <?php if ( $this->objval($_obj,'picture_adult') ) { ?>checked="checked"<?php } ?> /></div>
														<div style="float:left; line-height:26px;"><?php echo vldext_lang("pictures","is_adult"); ?></div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<?php } ?>
											<?php if ( @$PREFS->conf['enable_picture_comments'] ) { ?>
												<dt>
													<label for="field_comments">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="comments" value="1" id="field_comments" <?php if ( $this->objval($_obj,'picture_comments') ) { ?>checked="checked"<?php } ?> /></div>
														<div style="float:left; line-height:26px;"><?php echo vldext_lang("pictures","allow_comments"); ?></div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<?php } ?>
											<dt <?php if ( @$PREFS->conf['enable_old_style_pictures'] ) { ?>style="display:none"<?php } ?>>
												<label for="field_primary">
													<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="primary" value="1" id="field_primary" <?php if ( $this->objval($_obj,'picture_primary') ) { ?>checked="checked"<?php } ?> /></div>
													<div style="float:left; line-height:26px;"><?php echo vldext_lang("pictures","set_primary"); ?></div>
                                                    <div class="clearfix"></div>
												</label>
											</dt>
											<dd class="submit">
												<input style="margin-top:10px;" class="submit btn" type="submit" name="submit_regular" value="<?php echo vldext_lang("pictures","submit"); ?>" id="regular_file_submit" />
												<input class="submit" type="button" name="submit_pending" value="<?php echo vldext_lang("pictures","submit"); ?>" id="pending_file_submit" style="display:none" onclick="doUploadFile();return false;" />
											</dd>
										</dl>
									</div>
									<input type="hidden" name="issubmit" value="1" />
									<input type="hidden" name="newfilename" id="newfilename" value="" />
								</form>
							</div>
						</td>
		            </tr>
		        </table>
			</div>
		</div>
		<div class="clear"></div>

	</div>

	<?php if ( $this->objval($_obj,'picture_preview')  == "" &&  @$PREFS->conf['enable_flash_uploader'] ) { ?>
		<script type="text/javascript" language="javascript">
			$(document).ready(function(){
				$('#pending_file').uploadify({
					'uploader': '<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>media/utils/uploader.swf',
					'script': '<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php',
					'method': 'GET',
					'fileDataName': 'pending_file',
					'scriptData': {'m':'account_pictures','p':'upload','mid':'<?php echo isset($SESSION->conf['member_id']) ? $SESSION->conf['member_id'] : "&#123;member_id&#125;"; ?>'},
					'auto': false,
					'buttonText': '<?php echo vldext_lang("pictures","select_picture"); ?>',
					'fileDesc': '<?php echo isset($_obj['picture_extensions']) ? $_obj['picture_extensions'] : "&#123;picture_extensions&#125;"; ?>',
					'fileExt': '<?php echo isset($_obj['picture_extensions']) ? $_obj['picture_extensions'] : "&#123;picture_extensions&#125;"; ?>',
					'sizeLimit': '<?php echo isset($_obj['picture_maxsize']) ? $_obj['picture_maxsize'] : "&#123;picture_maxsize&#125;"; ?>',
					onComplete: function (a, b, c, d, e) {
						$('#newfilename').val(d);
						$('#fileuploadform').submit();
					},
					onInit: function () {
						$('#regular_file_select').hide();
						$('#regular_file_submit').hide();
						$('#pending_file_submit').show();
					},
					onSelect: function () {
						$('#newfilename').val('x');
					},
					onCancel: function () {
						$('#newfilename').val('');
					}<?php if ( @$PREFS->conf['debug'] ) { ?>,
					onError: function (a, b, c, d) {
						alert(d.type + "\n" + d.status + "\n" + d.text + "\n");
					}<?php } ?>
				});
			});
			function doUploadFile()
			{
				if ( !$('#newfilename').val() ) {
					alert("<?php echo vldext_lang("pictures","empty_filename"); ?>");
					return false;
				}
				$('#pending_file').uploadifyUpload()
			}
		</script>
	<?php } ?>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>