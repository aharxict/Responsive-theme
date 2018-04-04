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
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"event_pictures","app_pictures"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{event_edit_link}" class="btn">{lang:"event_pictures","opt_editevent"}</a>
                                <a href="{virtual_path}{event_guests_view_link}" class="btn">{lang:"event_pictures","opt_guests"}</a>
                                
                                <a href="{virtual_path}{event_comments_view_link}" class="btn">{lang:"event_pictures","opt_comments"}</a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
       

<!-- IF hide_content != "1" -->

	<div class="outter page_account_events_pictures_edit">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td valign="top">
							<div class="image">
								<!-- IF picture_preview -->
									<a class="picture_zoom" href="{top.virtual_pic_path}{session.media_path}{picture_filename}" id="picture_{picture_id}" target="_blank"><img src="{virtual_pic_path}{session.media_path}{picture_preview}" alt="{lang:"event_pictures","viewpicture"}" border="0" /><br /></a>
									<div id="picture_{picture_id}_zoom" style="display:none"><img src="{top.virtual_pic_path}{session.media_path}{picture_filename}" alt="" border="0" /><br/></div>
								<!-- ELSE -->
									<a href="#"><img src="{virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="" border="0" /><br /></a>
								<!-- ENDIF -->
							</div>
						</td>
						<td class="data">
							<div class="form" style="padding-left:7px;">
								<form id="fileuploadform" name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
    										<dt><label for="field_description">{lang:"event_pictures","description"}</label></dt>
											<dd><textarea id="field_description" class="form-control" cols="40" rows="5" name="description">{picture_description}</textarea></dd>
											<!-- IF picture_preview == "" -->
												<dt id="regular_file_select"><label for="field_filename">{lang:"event_pictures","select_picture"}</label></dt>
												<dd id="regular_file_browse"><input type="file" name="pending_file" id="pending_file" /><!-- IF settings.enable_flash_uploader --><a href="#" onclick="removeFlashUploader();return false;">{lang:"core","remove_flash_uploader"}</a><!-- ENDIF --></dd>
											<!-- ENDIF -->
											<dt style="padding-top:7px;"><label for="field_primary">{lang:"event_pictures","set_primary"}</label></dt>
											<dd><select id="field_primary" name="primary" class="select form-control">{dropdownlist:yesnobox,picture_primary}</select></dd>
											<dd class="submit">
												<input class="submit btn" type="submit" name="submit_regular" value="{lang:"event_pictures","submit"}" id="regular_file_submit" />
												<input class="submit btn" type="button" name="submit_pending" value="{lang:"event_pictures","submit"}" id="pending_file_submit" style="display:none" onclick="doUploadFile();return false;" />
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

	<!-- IF picture_preview == "" AND settings.enable_flash_uploader -->
		<script type="text/javascript" language="javascript">
			$(document).ready(function(){
				$('#pending_file').uploadify({
					'uploader': '{virtual_path}media/utils/uploader.swf',
					'script': '{virtual_path}index.php',
					'method': 'GET',
					'fileDataName': 'pending_file',
					'scriptData': {'m':'account_events_pictures','p':'upload','mid':'{session.member_id}'},
					'auto': false,
					'buttonText': '{lang:"event_pictures","select_picture"}',
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
					alert("{lang:"event_pictures","empty_filename"}");
					return false;
				}
				$('#pending_file').uploadifyUpload()
			}
		</script>
	<!-- ENDIF -->

<!-- ENDIF -->
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->