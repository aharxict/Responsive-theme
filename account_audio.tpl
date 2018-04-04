<!-- INCLUDE header.tpl -->

<div class="header_wrap header_dynamic">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li>{anchor:url1="account/audio/",url2="index.php?m=account_audio",name="audio|frm_audio"}</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{lang:"audio","app_audio"}</h1>
		</div>
		<div class="options">
			<ul>
				<li>{anchor:url1="account/audio/",url2="index.php?m=account_audio",name="audio|opt_viewaudio",class="active"}</li>
				<li class="break"></li>
				<li>{anchor:url1="account/audio/add/",url2="index.php?m=account_audio&p=add",name="audio|opt_addaudio"}</li>
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

	<div class="outter page_account_audio">

		<div class="typemedia">
			<!-- BEGIN profile_audio -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
		                    <td class="data">
								<div id="mpl{rowcnt}" class="player"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
								<script type="text/javascript" language="javascript">
									swfobject.embedSWF("{top.virtual_path}media/utils/mediaplayer.swf", "mpl{rowcnt}", "345", "19", "9.0.0", false,
										{'autostart':'false','file':'{top.virtual_pic_path}{session.media_path}{audio_filename}','wmode':'transparent'},
										{'allowfullscreen':'false','wmode':'transparent'}, {});
								</script>
								<div class="datainfo">
									<dl class="datainfo">
										<dt>{lang:"audio","name"}:</dt>
										<dd>{audio_name}</dd>
										<!-- IF audio_description -->
											<dt>{lang:"audio","notes"}:</dt>
											<dd>{audio_description}</dd>
										<!-- ENDIF -->
										<!-- IF settings.enable_audio_rating AND audio_rated -->
											<dt>{lang:"audio","rated_on"}:</dt>
											<dd>{audio_score} ({audio_votes} {lang:"audio","votes"})</dd>
										<!-- ENDIF -->
										<dt>{lang:"audio","dateadded"}:</dt>
										<dd>{audio_post_date}</dd>
									</dl>
								</div>
							</td>
		                    <td>
								<div class="actions">
									<ul class="actions">
										<!-- IF settings.show_online -->
											<!-- IF member_online -->
												<li class="status">{lang:"core","userinfo_online"}</li>
											<!-- ENDIF -->
										<!-- ENDIF -->
										<!-- IF session.can_edit_own_audio -->
											<li class="edit"><a href="{top.virtual_path}{audio_edit_link}" title="{lang:"audio","edit"}">{lang:"audio","edit"}</a></li>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_audio -->
											<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"audio","delete?"}', '{top.virtual_path}{audio_delete_link}')" title="{lang:"audio","delete"}">{lang:"audio","delete"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
			<!-- END profile_audio -->
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"audio","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"audio","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
