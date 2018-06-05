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
include_once SYS_PATH . "includes/ext/ext.metavideo.php";
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
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

					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php if ( $this->objval($_obj,'video_id') ) { ?><?php echo vldext_lang("videos","app_editvideo"); ?><?php } else { ?><?php echo vldext_lang("videos","app_addvideo"); ?><?php } ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_videos" class="btn"><i class="glyphicon glyphicon-picture"></i> <?php echo vldext_lang("videos","opt_viewvideos"); ?></a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_videos&p=add" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> <?php echo vldext_lang("videos","opt_addvideo"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        


	<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_video_edit">

		<div class="typepage">
			<div class="dataitem single">
            
            <div class="image image-preview">
								<?php if ( $this->objval($_obj,'video_type') ) { ?>
									<?php if ( $this->objval($_obj,'meta_id') ) { ?>
										<a href="javascript:void(0)" onclick="showhide_field('video_preview')" title="<?php echo vldext_lang("videos","viewvideo"); ?>"><img style="width:100px !important; height:100px !important;" src="<?php echo vldext_metavideo(array('video_id'=>$_obj['meta_id'],'type'=>$_obj['video_type'],'media'=>"preview",'preview'=>$_obj['video_preview'])); ?>" alt="<?php echo vldext_lang("videos","viewvideo"); ?>" border="0" width="100" height="100" /><br /></a>
									<?php } else { ?>
										<a href="#"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/video_picture_none.gif" alt="<?php echo vldext_lang("videos","viewvideo"); ?>" border="0" /><br /></a>
									<?php } ?>
								<?php } else { ?>
									<?php if ( $this->objval($_obj,'video_preview') ) { ?>
										<a href="javascript:void(0)" onclick="showhide_field('video_preview')" title="<?php echo vldext_lang("videos","viewvideo"); ?>"><img src="<?php echo isset($_obj['virtual_pic_path']) ? $_obj['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['video_preview']) ? $_obj['video_preview'] : "&#123;video_preview&#125;"; ?>" alt="<?php echo vldext_lang("videos","viewvideo"); ?>" border="0" /><br /></a>
									<?php } else { ?>
										<?php if ( $this->objval($_obj,'video_filename') ) { ?>
											<a href="javascript:void(0)" onclick="showhide_field('video_preview')" title="<?php echo vldext_lang("videos","viewvideo"); ?>"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/video_picture_none.gif" alt="<?php echo vldext_lang("videos","viewvideo"); ?>" border="0" /><br /></a>
										<?php } else { ?>
											<a href="#"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/video_picture_none.gif" alt="<?php echo vldext_lang("videos","viewvideo"); ?>" border="0" /><br /></a>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							</div>
            
				<table class="plain">
					<tr>
		                <td class="data">
							<div class="form">
								<div id="video_preview" style="margin-bottom:10px;display:none">
									<?php if ( $this->objval($_obj,'video_type') ) { ?>
										<?php if ( $this->objval($_obj,'meta_id') ) { ?>
											<?php echo vldext_metavideo(array('video_id'=>$_obj['meta_id'],'type'=>$_obj['video_type'])); ?>
										<?php } ?>
									<?php } else { ?>
										<?php if ( $this->objval($_obj,'video_filename') ) { ?>
											<?php if ( $this->objval($_obj,'video_streaming')  == "1") { ?>
												<div id="mpl"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
												<script type="text/javascript" language="javascript">
													swfobject.embedSWF("<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>media/utils/mediaplayer.swf", "mpl", "<?php echo isset($PREFS->conf['video_width']) ? $PREFS->conf['video_width'] : "&#123;video_width&#125;"; ?>", "<?php echo isset($PREFS->conf['video_height']) ? $PREFS->conf['video_height'] : "&#123;video_height&#125;"; ?>", "9.0.0", false,
														{'autostart':'false','file':'<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['video_filename']) ? $_obj['video_filename'] : "&#123;video_filename&#125;"; ?>','logo':'<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?>media/overlay_player.png','wmode':'transparent'},
														{'allowfullscreen':'true','wmode':'transparent'}, {});
												</script>
											<?php } else { ?>
												<object width="400" height="370" id="mediaplayer" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" standby="Loading Microsoft Windows Media Player components..." type="application/x-oleobject" align="middle">
													<param name="filename" value="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['video_filename']) ? $_obj['video_filename'] : "&#123;video_filename&#125;"; ?>">
													<param name="showstatusbar" value="1">
													<param name="autostart" value="0">
													<param name="animationatstart" value="1">
													<param name="transparentatstart" value="1">
													<param name="showcontrols" value="1">
													<param name="width" value="400">
													<param name="height" value="370">
													<embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/windows/mediaplayer/" src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['video_filename']) ? $_obj['video_filename'] : "&#123;video_filename&#125;"; ?>" align="middle" showstatusbar="1" animationatstart="1" showcontrols="1" autostart="1" transparentatstart="1" width="400" height="370"></embed>
												</object>
											<?php } ?>
										<?php } ?>
									<?php } ?>
								</div>
								<form id="fileuploadform" name="edit" method="post" action="" enctype="multipart/form-data" onsubmit="doUploadFile();return false;">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_description"><?php echo vldext_lang("videos","description"); ?></label></dt>
											<dd><textarea id="field_description" class="textarea textarea_small form-control" cols="40" rows="5" name="description"><?php echo isset($_obj['video_description']) ? $_obj['video_description'] : "&#123;video_description&#125;"; ?></textarea></dd>
											<?php if ( @$PREFS->conf['enable_remote_videos'] ) { ?>
												<dt><label for="field_video_type"><?php echo vldext_lang("videos","video_type"); ?></label></dt>
												<dd><select id="field_video_type" name="type" onchange="javascript:set_video_type(this.value)" class="select form-control" <?php if ( $this->objval($_obj,'video_id') ) { ?>disabled="disabled"<?php } ?> ><?php echo vldext_dropdownlist($_obj['video_types'],$_obj['video_type']); ?></select></dd>
											<?php } ?>
											<?php if ( @$PREFS->conf['enable_ffmpeg']  != "1" &&  @$PREFS->conf['enable_encodercloud']  != "1" &&  $this->objval($_obj,'video_filename')  != "" &&  !  $this->objval($_obj,'video_type') ) { ?>
												<dt id="regular_file_select"><label for="field_previewfile"><?php echo vldext_lang("videos","select_preview"); ?></label></dt>
												<dd id="regular_file_browse"><input class="form-control file-input-control" type="file" name="pending_file" id="pending_file" /><?php if ( @$PREFS->conf['enable_flash_uploader'] ) { ?><a href="#" onclick="removeFlashUploader();return false;"><?php echo vldext_lang("core","remove_flash_uploader"); ?></a><?php } ?></dd>
											<?php } ?>
											<?php if ( $this->objval($_obj,'video_filename')  == "") { ?>
												<dt id="regular_file_select" <?php if ( $this->objval($_obj,'video_type') ) { ?>style="display:none"<?php } ?>><label for="field_videofile"><?php echo vldext_lang("videos","select_video"); ?></label></dt>
												<dd id="regular_file_browse" <?php if ( $this->objval($_obj,'video_type') ) { ?>style="display:none"<?php } ?>><input class="form-control file-input-control" type="file" name="pending_file" id="pending_file" /><?php if ( @$PREFS->conf['enable_flash_uploader'] ) { ?><a href="#" onclick="removeFlashUploader();return false;"><?php echo vldext_lang("core","remove_flash_uploader"); ?></a><?php } ?></dd>
											<?php } ?>
											<?php if ( $this->objval($_obj,'video_id')  &&  @$PREFS->conf['enable_encodercloud']  &&  $this->objval($_obj,'video_streaming')  > "1") { ?>
												<dt>
													<?php if ( $this->objval($_obj,'video_streaming')  == "2") { ?>
														<?php echo vldext_lang("videos","status_queue"); ?>
													<?php } else { ?>
														<?php echo vldext_lang("videos","status_error"); ?>
													<?php } ?>
												</dt>
											<?php } ?>
											<dt id="remote_file_select" <?php if ( !  $this->objval($_obj,'video_type')  ||  $this->objval($_obj,'video_filename') ) { ?>style="display:none"<?php } ?>><label for="field_meta_url"><?php echo vldext_lang("videos","video_url"); ?></label></dt>
											<dd id="remote_file_browse" <?php if ( !  $this->objval($_obj,'video_type')  ||  $this->objval($_obj,'video_filename') ) { ?>style="display:none"<?php } ?>><input type="text" class="text form-control" id="field_meta_url" name="meta_url" value="<?php echo isset($_obj['meta_url']) ? $_obj['meta_url'] : "&#123;meta_url&#125;"; ?>" maxlength="255" size="64" /></dd>
											<?php if ( @$PREFS->conf['enable_videos_categories'] ) { ?>
    											<dt style="margin-top:10px;"><label for="field_category_id"><?php echo vldext_lang("videos","category"); ?></label></dt>
												<dd><select class="select form-control" name="category_id" id="field_category_id"><option value="0"><?php echo vldext_lang("videos","select_category"); ?></option><?php echo vldext_dropdownlist($_obj['video_categories'],$_obj['video_category_id']); ?></select></dd>
											<?php } ?>
											<?php if ( @$PREFS->conf['enable_video_rating'] ) { ?>
												<dt>
													<label for="field_rated">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="rated" value="1" id="field_rated" <?php if ( $this->objval($_obj,'video_rated') ) { ?>checked="checked"<?php } ?> /></div>
														<div style="float:left; line-height:26px;"><?php echo vldext_lang("videos","is_rated"); ?></div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<?php } ?>
											<?php if ( @$PREFS->conf['adult_videos'] ) { ?>
												<dt>
													<label for="field_adult">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="adult" value="1" id="field_adult" <?php if ( $this->objval($_obj,'video_adult') ) { ?>checked="checked"<?php } ?> /></div>
														<div style="float:left; line-height:26px;"><?php echo vldext_lang("videos","is_adult"); ?></div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<?php } ?>
											<?php if ( @$PREFS->conf['enable_video_comments'] ) { ?>
												<dt>
													<label for="field_comments">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="comments" value="1" id="field_comments" <?php if ( $this->objval($_obj,'video_comments') ) { ?>checked="checked"<?php } ?> /></div>
														<div style="float:left; line-height:26px;"><?php echo vldext_lang("videos","allow_comments"); ?></div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<?php } ?>
											<dd class="submit">
												<input class="submit btn" type="submit" name="submit_regular" value="<?php echo vldext_lang("videos","submit"); ?>" id="regular_file_submit" onclick="doUploadFile();return false;" />
												<input class="submit btn" type="button" name="submit_pending" value="<?php echo vldext_lang("videos","submit"); ?>" id="pending_file_submit" style="display:none" onclick="doUploadFile();return false;" />
											</dd>
										</dl>
									</div>
									<input type="hidden" name="issubmit" value="1" />
									<input type="hidden" name="isclean"  id="isclean" value="0" />
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

	<script type="text/javascript" language="javascript">
		function set_video_type(type)
		{
			if ( type != '' ) {
				$('#regular_file_select').hide();
				$('#regular_file_browse').hide();
				$('#remote_file_select').show();
				<?php if ( $this->objval($_obj,'video_filename')  == "") { ?>
					$('#remote_file_browse').show();
				<?php } ?>
			}
			else {
				$('#remote_file_select').hide();
				$('#remote_file_browse').hide();
				$('#regular_file_select').show();
				$('#regular_file_browse').show();
			}
			return true;
		}
		<?php if ( $this->objval($_obj,'video_filename')  == "") { ?>
			<?php if ( @$PREFS->conf['enable_flash_uploader'] ) { ?>
				$(document).ready(function(){
					$('#pending_file').uploadify({
						'uploader': '<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>media/utils/uploader.swf',
						'script': '<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php',
						'method': 'GET',
						'fileDataName': 'pending_file',
						'scriptData': {'m':'account_videos','p':'upload','mid':'<?php echo isset($SESSION->conf['member_id']) ? $SESSION->conf['member_id'] : "&#123;member_id&#125;"; ?>'},
						'auto': false,
						'buttonText': '<?php echo vldext_lang("videos","select_video"); ?>',
						'fileDesc': '<?php echo isset($_obj['video_extensions']) ? $_obj['video_extensions'] : "&#123;video_extensions&#125;"; ?>',
						'fileExt': '<?php echo isset($_obj['video_extensions']) ? $_obj['video_extensions'] : "&#123;video_extensions&#125;"; ?>',
						'sizeLimit': '<?php echo isset($_obj['video_maxsize']) ? $_obj['video_maxsize'] : "&#123;video_maxsize&#125;"; ?>',
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
			<?php } ?>
		<?php } elseif ( @$PREFS->conf['enable_ffmpeg']  != "1" &&  @$PREFS->conf['enable_flash_uploader'] ) { ?>
			$(document).ready(function(){
				$('#pending_file').uploadify({
					'uploader': '<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>media/utils/uploader.swf',
					'script': '<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php',
					'method': 'GET',
					'fileDataName': 'pending_file',
					'scriptData': {'m':'account_videos','p':'uploadpreview','mid':'<?php echo isset($SESSION->conf['member_id']) ? $SESSION->conf['member_id'] : "&#123;member_id&#125;"; ?>'},
					'auto': false,
					'buttonText': '<?php echo vldext_lang("videos","select_preview"); ?>',
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
		<?php } ?>
		function doUploadFile()
		{
			<?php if ( !  $this->objval($_obj,'video_filename') ) { ?>
				if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' && (typeof($('#field_video_type')[0]) == 'undefined' || $('#field_video_type').val() == '') ) {
					if ( !$('#newfilename').val() ) {
						alert("<?php echo vldext_lang("videos","empty_filename"); ?>");
						return false;
					}
				}
			<?php } ?>
			<?php if ( @$PREFS->conf['enable_videos_categories'] ) { ?>
			if ( $('#field_category_id').val() == 0 ) {
				alert("<?php echo vldext_lang("videos","no_category"); ?>");
				return false;
			}
			<?php } ?>
			<?php if ( !  $this->objval($_obj,'video_filename') ) { ?>
				if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' && (typeof($('#field_video_type')[0]) == 'undefined' || $('#field_video_type').val() == '') ) {
			<?php } else { ?>
				if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' && (typeof($('#field_video_type')[0]) == 'undefined' || $('#field_video_type').val() == '' && $('#newfilename').val()) ) {
			<?php } ?>
				$('#pending_file').uploadifyUpload();
			}
			else {
				$('#fileuploadform').submit();
			}
			return false;
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