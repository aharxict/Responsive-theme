<!-- INCLUDE header.tpl -->

<div class="section section-header">
<div class="container">
<div class="row">

<!-- IF loggedin -->
<!-- INCLUDE user-menu.tpl -->
<!-- ENDIF -->

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post Excerpt -->
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>

					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><!-- IF video_id -->{lang:"videos","app_editvideo"}<!-- ELSE -->{lang:"videos","app_addvideo"}<!-- ENDIF --></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_videos" class="btn"><i class="glyphicon glyphicon-picture"></i> {lang:"videos","opt_viewvideos"}</a>
                           
                           <a href="{virtual_path}index.php?m=account_videos&p=add" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> {lang:"videos","opt_addvideo"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


	<!-- IF hide_content != "1" -->

	<div class="outter page_account_video_edit">

		<div class="typepage">
			<div class="dataitem single">
            
            <div class="image image-preview">
								<!-- IF video_type -->
									<!-- IF meta_id -->
										<a href="javascript:void(0)" onclick="showhide_field('video_preview')" title="{lang:"videos","viewvideo"}"><img style="width:100px !important; height:100px !important;" src="{metavideo:video_id=meta_id,type=video_type,media="preview",preview=video_preview}" alt="{lang:"videos","viewvideo"}" border="0" width="100" height="100" /><br /></a>
									<!-- ELSE -->
										<a href="#"><img src="{virtual_tpl_path}{session.template}/media/video_picture_none.gif" alt="{lang:"videos","viewvideo"}" border="0" /><br /></a>
									<!-- ENDIF -->
								<!-- ELSE -->
									<!-- IF video_preview -->
										<a href="javascript:void(0)" onclick="showhide_field('video_preview')" title="{lang:"videos","viewvideo"}"><img src="{virtual_pic_path}{session.media_path}{video_preview}" alt="{lang:"videos","viewvideo"}" border="0" /><br /></a>
									<!-- ELSE -->
										<!-- IF video_filename -->
											<a href="javascript:void(0)" onclick="showhide_field('video_preview')" title="{lang:"videos","viewvideo"}"><img src="{virtual_tpl_path}{session.template}/media/video_picture_none.gif" alt="{lang:"videos","viewvideo"}" border="0" /><br /></a>
										<!-- ELSE -->
											<a href="#"><img src="{virtual_tpl_path}{session.template}/media/video_picture_none.gif" alt="{lang:"videos","viewvideo"}" border="0" /><br /></a>
										<!-- ENDIF -->
									<!-- ENDIF -->
								<!-- ENDIF -->
							</div>
            
				<table class="plain">
					<tr>
		                <td class="data">
							<div class="form">
								<div id="video_preview" style="margin-bottom:10px;display:none">
									<!-- IF video_type -->
										<!-- IF meta_id -->
											{metavideo:video_id=meta_id,type=video_type}
										<!-- ENDIF -->
									<!-- ELSE -->
										<!-- IF video_filename -->
											<!-- IF video_streaming == "1" -->
												<div id="mpl"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
												<script type="text/javascript" language="javascript">
													swfobject.embedSWF("{virtual_path}media/utils/mediaplayer.swf", "mpl", "{settings.video_width}", "{settings.video_height}", "9.0.0", false,
														{'autostart':'false','file':'{top.virtual_pic_path}{session.media_path}{video_filename}','logo':'{top.virtual_path}media/overlay_player.png','wmode':'transparent'},
														{'allowfullscreen':'true','wmode':'transparent'}, {});
												</script>
											<!-- ELSE -->
												<object width="400" height="370" id="mediaplayer" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" standby="Loading Microsoft Windows Media Player components..." type="application/x-oleobject" align="middle">
													<param name="filename" value="{top.virtual_pic_path}{session.media_path}{video_filename}">
													<param name="showstatusbar" value="1">
													<param name="autostart" value="0">
													<param name="animationatstart" value="1">
													<param name="transparentatstart" value="1">
													<param name="showcontrols" value="1">
													<param name="width" value="400">
													<param name="height" value="370">
													<embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/windows/mediaplayer/" src="{top.virtual_pic_path}{session.media_path}{video_filename}" align="middle" showstatusbar="1" animationatstart="1" showcontrols="1" autostart="1" transparentatstart="1" width="400" height="370"></embed>
												</object>
											<!-- ENDIF -->
										<!-- ENDIF -->
									<!-- ENDIF -->
								</div>
								<form id="fileuploadform" name="edit" method="post" action="" enctype="multipart/form-data" onsubmit="doUploadFile();return false;">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_description">{lang:"videos","description"}</label></dt>
											<dd><textarea id="field_description" class="textarea textarea_small form-control" cols="40" rows="5" name="description">{video_description}</textarea></dd>
											<!-- IF settings.enable_remote_videos -->
												<dt><label for="field_video_type">{lang:"videos","video_type"}</label></dt>
												<dd><select id="field_video_type" name="type" onchange="javascript:set_video_type(this.value)" class="select form-control" <!-- IF video_id -->disabled="disabled"<!-- ENDIF --> >{dropdownlist:video_types,video_type}</select></dd>
											<!-- ENDIF -->
											<!-- IF settings.enable_ffmpeg != "1" AND settings.enable_encodercloud != "1" AND video_filename != "" AND !video_type -->
												<dt id="regular_file_select"><label for="field_previewfile">{lang:"videos","select_preview"}</label></dt>
												<dd id="regular_file_browse"><input class="form-control file-input-control" type="file" name="pending_file" id="pending_file" /><!-- IF settings.enable_flash_uploader --><a href="#" onclick="removeFlashUploader();return false;">{lang:"core","remove_flash_uploader"}</a><!-- ENDIF --></dd>
											<!-- ENDIF -->
											<!-- IF video_filename == "" -->
												<dt id="regular_file_select" <!-- IF video_type -->style="display:none"<!-- ENDIF -->><label for="field_videofile">{lang:"videos","select_video"}</label></dt>
												<dd id="regular_file_browse" <!-- IF video_type -->style="display:none"<!-- ENDIF -->><input class="form-control file-input-control" type="file" name="pending_file" id="pending_file" /><!-- IF settings.enable_flash_uploader --><a href="#" onclick="removeFlashUploader();return false;">{lang:"core","remove_flash_uploader"}</a><!-- ENDIF --></dd>
											<!-- ENDIF -->
											<!-- IF video_id AND settings.enable_encodercloud AND video_streaming > "1" -->
												<dt>
													<!-- IF video_streaming == "2" -->
														{lang:"videos","status_queue"}
													<!-- ELSE -->
														{lang:"videos","status_error"}
													<!-- ENDIF -->
												</dt>
											<!-- ENDIF -->
											<dt id="remote_file_select" <!-- IF !video_type OR video_filename -->style="display:none"<!-- ENDIF -->><label for="field_meta_url">{lang:"videos","video_url"}</label></dt>
											<dd id="remote_file_browse" <!-- IF !video_type OR video_filename -->style="display:none"<!-- ENDIF -->><input type="text" class="text form-control" id="field_meta_url" name="meta_url" value="{meta_url}" maxlength="255" size="64" /></dd>
											<!-- IF settings.enable_videos_categories -->
    											<dt style="margin-top:10px;"><label for="field_category_id">{lang:"videos","category"}</label></dt>
												<dd><select class="select form-control" name="category_id" id="field_category_id"><option value="0">{lang:"videos","select_category"}</option>{dropdownlist:video_categories,video_category_id}</select></dd>
											<!-- ENDIF -->
											<!-- IF settings.enable_video_rating -->
												<dt>
													<label for="field_rated">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="rated" value="1" id="field_rated" <!-- IF video_rated -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left; line-height:26px;">{lang:"videos","is_rated"}</div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<!-- ENDIF -->
											<!-- IF settings.adult_videos -->
												<dt>
													<label for="field_adult">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="adult" value="1" id="field_adult" <!-- IF video_adult -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left; line-height:26px;">{lang:"videos","is_adult"}</div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<!-- ENDIF -->
											<!-- IF settings.enable_video_comments -->
												<dt>
													<label for="field_comments">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="comments" value="1" id="field_comments" <!-- IF video_comments -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left; line-height:26px;">{lang:"videos","allow_comments"}</div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<!-- ENDIF -->
											<dd class="submit">
												<input class="submit btn" type="submit" name="submit_regular" value="{lang:"videos","submit"}" id="regular_file_submit" onclick="doUploadFile();return false;" />
												<input class="submit btn" type="button" name="submit_pending" value="{lang:"videos","submit"}" id="pending_file_submit" style="display:none" onclick="doUploadFile();return false;" />
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
				<!-- IF video_filename == "" -->
					$('#remote_file_browse').show();
				<!-- ENDIF -->
			}
			else {
				$('#remote_file_select').hide();
				$('#remote_file_browse').hide();
				$('#regular_file_select').show();
				$('#regular_file_browse').show();
			}
			return true;
		}
		<!-- IF video_filename == "" -->
			<!-- IF settings.enable_flash_uploader -->
				$(document).ready(function(){
					$('#pending_file').uploadify({
						'uploader': '{virtual_path}media/utils/uploader.swf',
						'script': '{virtual_path}index.php',
						'method': 'GET',
						'fileDataName': 'pending_file',
						'scriptData': {'m':'account_videos','p':'upload','mid':'{session.member_id}'},
						'auto': false,
						'buttonText': '{lang:"videos","select_video"}',
						'fileDesc': '{video_extensions}',
						'fileExt': '{video_extensions}',
						'sizeLimit': '{video_maxsize}',
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
						}<!-- IF settings.debug -->,
						onError: function (a, b, c, d) {
							alert(d.type + "\n" + d.status + "\n" + d.text + "\n");
						}<!-- ENDIF -->
					});
				});
			<!-- ENDIF -->
		<!-- ELSEIF settings.enable_ffmpeg != "1" AND settings.enable_flash_uploader -->
			$(document).ready(function(){
				$('#pending_file').uploadify({
					'uploader': '{virtual_path}media/utils/uploader.swf',
					'script': '{virtual_path}index.php',
					'method': 'GET',
					'fileDataName': 'pending_file',
					'scriptData': {'m':'account_videos','p':'uploadpreview','mid':'{session.member_id}'},
					'auto': false,
					'buttonText': '{lang:"videos","select_preview"}',
					'fileDesc': '{picture_extensions}',
					'fileExt': '{picture_extensions}',
					'sizeLimit': '{picture_maxsize}',
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
					}<!-- IF settings.debug -->,
					onError: function (a, b, c, d) {
						alert(d.type + "\n" + d.status + "\n" + d.text + "\n");
					}<!-- ENDIF -->
				});
			});
		<!-- ENDIF -->
		function doUploadFile()
		{
			<!-- IF !video_filename -->
				if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' && (typeof($('#field_video_type')[0]) == 'undefined' || $('#field_video_type').val() == '') ) {
					if ( !$('#newfilename').val() ) {
						alert("{lang:"videos","empty_filename"}");
						return false;
					}
				}
			<!-- ENDIF -->
			<!-- IF settings.enable_videos_categories -->
			if ( $('#field_category_id').val() == 0 ) {
				alert("{lang:"videos","no_category"}");
				return false;
			}
			<!-- ENDIF -->
			<!-- IF !video_filename -->
				if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' && (typeof($('#field_video_type')[0]) == 'undefined' || $('#field_video_type').val() == '') ) {
			<!-- ELSE -->
				if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' && (typeof($('#field_video_type')[0]) == 'undefined' || $('#field_video_type').val() == '' && $('#newfilename').val()) ) {
			<!-- ENDIF -->
				$('#pending_file').uploadifyUpload();
			}
			else {
				$('#fileuploadform').submit();
			}
			return false;
		}
	</script>

<!-- ENDIF -->
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->