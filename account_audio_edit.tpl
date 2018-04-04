<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li>{anchor:url1="account/audio/",url2="index.php?m=account_audio",name="audio|frm_audio"}</li>
				<li><span>&#187;</span></li>
				<!-- IF audio_id -->
					<li><a href="{virtual_path}{audios_edit_link}">{lang:"audio","frm_editaudio"}</a></li>
				<!-- ELSE -->
					<li>{anchor:url1="account/audio/add/",url2="index.php?m=account_audio&p=add",name="audio|frm_addaudio"}</li>
				<!-- ENDIF -->
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1><!-- IF audio_id -->{lang:"audio","app_editaudio"}<!-- ELSE -->{lang:"audio","app_addaudio"}<!-- ENDIF --></h1>
		</div>
		<div class="options">
			<ul>
				<!-- IF audio_id -->
					<li><a href="{virtual_path}{audios_edit_link}" class="active">{lang:"audio","opt_editaudio"}</a></li>
					<li class="break"></li>
					<li>{anchor:url1="account/audio/add/",url2="index.php?m=account_audio&p=add",name="audio|opt_addaudio"}</li>
				<!-- ELSE -->
					<li>{anchor:url1="account/audio/",url2="index.php?m=account_audio",name="audio|opt_viewaudio"}</li>
					<li class="break"></li>
					<li>{anchor:url1="account/audio/add/",url2="index.php?m=account_audio&p=add",name="audio|opt_addaudio",class="active"}</li>
				<!-- ENDIF -->
				<!-- IF audio_pct -->
					<li class="info">
						<div class="progress_bar">
							<div class="bar" style="width:{audio_pct}%"></div>
						</div>
					</li>
					<li class="info">
						{audio_info}
					</li>
				<!-- ENDIF -->
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_account_audio_edit">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td class="data">
							<div class="form">
								<!-- IF audio_filename -->
									<div id="mpl" class="player"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
									<script type="text/javascript" language="javascript">
										swfobject.embedSWF("{top.virtual_path}media/utils/mediaplayer.swf", "mpl", "345", "19", "9.0.0", false,
											{'autostart':'false','file':'{top.virtual_pic_path}{session.media_path}{audio_filename}','wmode':'transparent'},
											{'allowfullscreen':'false','wmode':'transparent'}, {});
									</script>
								<!-- ENDIF -->
								<form id="fileuploadform" name="edit" method="post" action="" enctype="multipart/form-data" onsubmit="doUploadFile();return false;">
									<div class="fieldset">
										<dl class="fieldset">
											<!-- IF audio_filename == "" -->
    											<dt id="regular_file_select"><label for="field_name">{lang:"audio","select_audio"}</label></dt>
												<dd id="regular_file_browse"><input type="file" name="pending_file" id="pending_file" /><!-- IF settings.enable_flash_uploader --><a href="#" onclick="removeFlashUploader();return false;">{lang:"core","remove_flash_uploader"}</a><!-- ENDIF --></dd>
											<!-- ENDIF -->
											<dt><label for="field_title">{lang:"audio","name"}</label></dt>
											<dd><input type="text" id="field_title" name="title" value="{audio_name}" class="text text_full" maxlength="64" /></dd>
											<dt><label for="field_description">{lang:"audio","description"}</label></dt>
											<dd><textarea id="field_description" class="textarea textarea_full" cols="40" rows="5" name="description">{audio_description}</textarea></dd>
											<!-- IF settings.enable_audio_rating -->
												<dt><label for="field_rated">{lang:"audio","is_rated"}</label></dt>
												<dd><select id="field_rated" name="rated" class="select">{dropdownlist:yesnobox,audio_rated}</select></dd>
											<!-- ENDIF -->
											<dd class="submit">
												<input class="submit" type="submit" name="submit_regular" value="{lang:"audio","submit"}" id="regular_file_submit" onclick="doUploadFile();return false;" />
												<input class="submit" type="button" name="submit_pending" value="{lang:"audio","submit"}" id="pending_file_submit" style="display:none" onclick="doUploadFile();return false;" />
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

	<script type="text/javascript" language="javascript">
		<!-- IF audio_filename == "" AND settings.enable_flash_uploader -->
			$(document).ready(function(){
				$('#pending_file').uploadify({
					'uploader': '{virtual_path}media/utils/uploader.swf',
					'script': '{virtual_path}index.php',
					'method': 'GET',
					'fileDataName': 'pending_file',
					'scriptData': {'m':'account_audio','p':'upload','mid':'{session.member_id}'},
					'auto': false,
					'buttonText': '{lang:"audio","select_audio"}',
					'fileDesc': '{audio_extensions}',
					'fileExt': '{audio_extensions}',
					'sizeLimit': '{audio_maxsize}',
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
			if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' ) {
				if ( !$('#newfilename').val() ) {
					alert("{lang:"audio","empty_filename"}");
					return false;
				}
			}
			if ( !$('#field_title').val() ) {
				alert("{lang:"audio","empty_name"}");
				return false;
			}
			if ( typeof($('#pending_fileUploader')[0]) != 'undefined' && $('#pending_fileUploader').css('display') != 'none' ) {
				$('#pending_file').uploadifyUpload()
			}
			else {
				$('#fileuploadform').submit();
			}
		}
	</script>

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
