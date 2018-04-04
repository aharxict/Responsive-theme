<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li>{anchor:url1="account/home/",url2="index.php?m=account_home",name="photo|frm_profile"}</li>
				<li><span>&#187;</span></li>
				<li>{anchor:url1="account/photo/",url2="index.php?m=account_photo",name="photo|frm_photo"}</li>
			</ul>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{lang:"photo","app_photo"}</h1>
		</div>
		<div class="options">
			<ul>
				<li>{anchor:url1="account/home/",url2="index.php?m=account_home",name="photo|opt_home"}</li>
				<li>{anchor:url1="account/profile/",url2="index.php?m=account_profile",name="photo|opt_profile"}</li>
				<li>{anchor:url1="account/photo/",url2="index.php?m=account_photo",name="photo|opt_photo",class="active"}</li>
				<li class="info">
					<div class="progress_bar">
						<div class="bar" style="width:{session.completepct}%"></div>
					</div>
				</li>
				<li class="info">
					{lang:"photo","profile_pct"} {session.completepct}%
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_account_photo_thumbnail">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td>
							<div class="image">
								<div style="width: {settings.thumbnail_photo_width}px; height: {settings.thumbnail_photo_height}px; overflow:hidden; border: 1px solid #000;">
									<img src="{virtual_pic_path}{session.media_path}{photo_filename_large}" border="0" id="thumb_preview" alt="" /><br />
								</div>
							</div>
						</td>
		                <td class="data">
							<div class="data">
								<img src="{virtual_pic_path}{session.media_path}{photo_filename_large}" border="0" id="thumb_cropbox" alt="" />
							</div>
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dd class="submit"><input class="submit" type="submit" name="submit_regular" value="{lang:"photo","submit"}" /></dd>
										</dl>
									</div>
									<input type="hidden" name="issubmit" value="1" />
									<input type="hidden" size="4" id="thumb_x" name="thumb_x" />
									<input type="hidden" size="4" id="thumb_y" name="thumb_y" />
									<input type="hidden" size="4" id="thumb_w" name="thumb_w" />
									<input type="hidden" size="4" id="thumb_h" name="thumb_h" />
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
		$(document).ready(function(){
			jQuery('#thumb_cropbox').Jcrop({
				onChange: showPreview,
				onSelect: showPreview,
				bgOpacity: .8,
				minSize: [ {settings.thumbnail_photo_width}, {settings.thumbnail_photo_height} ],
	            setSelect: [ 10, 10, {settings.thumbnail_photo_width}, {settings.thumbnail_photo_height} ],
				aspectRatio: {photo_ratio}
			});
		});
		function showPreview(coords)
		{
			if (parseInt(coords.w) > 0)
			{
				var rx = {settings.thumbnail_width} / coords.w;
				var ry = {settings.thumbnail_height} / coords.h;

				jQuery('#thumb_preview').css({
					width: Math.round(rx * {photo_width}) + 'px',
					height: Math.round(ry * {photo_height}) + 'px',
					marginLeft: '-' + Math.round(rx * coords.x) + 'px',
					marginTop: '-' + Math.round(ry * coords.y) + 'px'
				});
			}
				$('#thumb_x').val(coords.x);
				$('#thumb_y').val(coords.y);
				$('#thumb_w').val(coords.w);
				$('#thumb_h').val(coords.h);
		}
	</script>

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
