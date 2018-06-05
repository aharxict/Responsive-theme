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
<!-- LEFT SIDEBAR -->
<div class="hide-mobile">

					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
					
                    
                    </div>

</div>
<!-- /LEFT SIDEBAR -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><!-- IF picture_id -->{lang:"pictures","app_editpicture"}<!-- ELSE -->{lang:"pictures","app_addpicture"}<!-- ENDIF --></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{pictures_view_link}" class="btn"><i class="glyphicon glyphicon-picture"></i> {lang:"pictures","opt_viewpictures"}</a>
                           
	                            <!-- IF picture_id -->
                                <a href="{virtual_path}{pictures_edit_link}" class="btn active"><i class="glyphicon glyphicon-edit"></i> {lang:"pictures","frm_editpicture"}</a>
                                <!-- ELSE -->
                                <a href="{virtual_path}{pictures_add_link}" class="btn active"><i class="glyphicon glyphicon-plus-sign"></i> {lang:"pictures","opt_addpicture"}</a>
                                <!-- ENDIF -->
                                
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->
				<div class="content-box">
                        <span>{pictures_info}</span>

	<div class="outter page_account_pictures_edit" style="margin-top:15px;">

		<div class="typepage">
			<div class="dataitem single">
            
            <div class="image image-preview">
								<!-- IF picture_preview -->
									<a class="picture_zoom" href="{top.virtual_pic_path}{session.media_path}{picture_filename}" id="picture_{picture_id}" target="_blank"><img src="{virtual_pic_path}{session.media_path}{picture_preview}" alt="{lang:"pictures","viewpicture"}" border="0" /><br /></a>
									<div id="picture_{picture_id}_zoom" style="display:none"><img src="{top.virtual_pic_path}{session.media_path}{picture_filename}" alt="" border="0" /><br/></div>
								<!-- ELSE -->
									<a href="#"><img src="{virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /><br /></a>
								<!-- ENDIF -->
			</div>
				<table class="plain">
					<tr>
		                <td class="data">
							<div class="form">
								<form id="fileuploadform" name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
    										<dt><label for="field_description">{lang:"pictures","description"}</label></dt>
											<dd><textarea id="field_description" class="textarea textarea_small form-control" cols="40" rows="5" name="description">{picture_description}</textarea></dd>
											<!-- IF picture_preview == "" -->
												<dt id="regular_file_select" style="margin-top:15px;"><label for="field_filename">{lang:"pictures","select_picture"}</label></dt>
												<dd id="regular_file_browse"><input class="form-control file-input-control" type="file" name="pending_file" id="pending_file" /></dd>
											<!-- ENDIF -->
											<!-- IF settings.enable_picture_rating -->
												<dt>
													<label for="field_rated">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="rated" value="1" id="field_rated" <!-- IF picture_rated -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left; line-height:26px;">{lang:"pictures","is_rated"}</div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<!-- ENDIF -->
											<!-- IF settings.adult_images -->
												<dt>
													<label for="field_adult">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="adult" value="1" id="field_adult" <!-- IF picture_adult -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left; line-height:26px;">{lang:"pictures","is_adult"}</div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<!-- ENDIF -->
											<!-- IF settings.enable_picture_comments -->
												<dt>
													<label for="field_comments">
														<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="comments" value="1" id="field_comments" <!-- IF picture_comments -->checked="checked"<!-- ENDIF --> /></div>
														<div style="float:left; line-height:26px;">{lang:"pictures","allow_comments"}</div>
                                                        <div class="clearfix"></div>
													</label>
												</dt>
											<!-- ENDIF -->
											<dt <!-- IF settings.enable_old_style_pictures -->style="display:none"<!-- ENDIF -->>
												<label for="field_primary">
													<div style="float:left; padding-right:4px;"><input type="checkbox" class="checkbox" name="primary" value="1" id="field_primary" <!-- IF picture_primary -->checked="checked"<!-- ENDIF --> /></div>
													<div style="float:left; line-height:26px;">{lang:"pictures","set_primary"}</div>
                                                    <div class="clearfix"></div>
												</label>
											</dt>
											<dd class="submit">
												<input style="margin-top:10px;" class="submit btn" type="submit" name="submit_regular" value="{lang:"pictures","submit"}" id="regular_file_submit" />
												<input class="submit" type="button" name="submit_pending" value="{lang:"pictures","submit"}" id="pending_file_submit" style="display:none" onclick="doUploadFile();return false;" />
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
				</div>
	<!-- IF picture_preview == "" AND settings.enable_flash_uploader -->
		<script type="text/javascript" language="javascript">
			$(document).ready(function(){
				$('#pending_file').uploadify({
					'uploader': '{virtual_path}media/utils/uploader.swf',
					'script': '{virtual_path}index.php',
					'method': 'GET',
					'fileDataName': 'pending_file',
					'scriptData': {'m':'account_pictures','p':'upload','mid':'{session.member_id}'},
					'auto': false,
					'buttonText': '{lang:"pictures","select_picture"}',
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
			function doUploadFile()
			{
				if ( !$('#newfilename').val() ) {
					alert("{lang:"pictures","empty_filename"}");
					return false;
				}
				$('#pending_file').uploadifyUpload()
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