<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><!-- INCLUDE member_sections_location.tpl --></li>
				<li><span>&#187;</span></li>
				<li><a href="{virtual_path}{member_audio_link}">{lang:"member","frm_audio"}</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{lang:"member","app_audio"}</h1>
		</div>
		<div class="options">
			<!-- INCLUDE member_sections_links.tpl -->
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_member_audio">

		<div class="typemedia">
			<!-- BEGIN profile_audio -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
		                    <td class="data">
								<div id="mpl{rowcnt}" class="player"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
								<script type="text/javascript" language="javascript">
									swfobject.embedSWF("{top.virtual_path}media/utils/mediaplayer.swf", "mpl{rowcnt}", "345", "19", "9.0.0", false,
										{'autostart':'false','file':'{top.virtual_pic_path}{top.member_media_path}{audio_filename}','wmode':'transparent'},
										{'allowfullscreen':'false','wmode':'transparent'}, {});
								</script>
								<div class="datainfo">
									<dl class="datainfo">
										<dt>{lang:"member","title"}:</dt>
										<dd>{audio_name}</dd>
										<!-- IF audio_description -->
											<dt>{lang:"member","description"}:</dt>
											<dd>{audio_description}</dd>
										<!-- ENDIF -->
									</dl>
								</div>
								<div class="itemfooter">
									<ul class="itemfooter">
										<!-- IF settings.enable_audio_rating AND session.can_rate_audios AND audio_rated -->
											<li>
												{ratings:type="audio",member_id=top.member_id,item_id=audio_id,score=audio_score,votes=audio_votes}
											</li>
										<!-- ENDIF -->
										<!-- IF settings.enable_reports AND settings.enable_audio_reports AND session.can_submit_reports -->
											<li class="report">
												{reports:type="audio",member_id=top.member_id,item_id=audio_id}
											</li>
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

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
