<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><!-- INCLUDE member_sections_location.tpl --></li>
				<li><span>&#187;</span></li>
				<li><a href="{virtual_path}{member_gifts_link}">{lang:"member","frm_gifts"}</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{lang:"member","app_gifts"}</h1>
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
<div class="content-box">

	<div class="outter page_member_gifts">

		<div class="typemedia">
			<!-- BEGIN profile_gifts -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<img src="{top.virtual_pic_path}{gift_filename}" alt="" border="0" /><br />
								</div>
							</td>
		                    <td class="data">
								<div class="datainfo">
									<h2 class="inner">
										{gift_name}
									</h2>
									<dl class="datainfo">
										<dt>{lang:"member","sent_by"}:</dt>
										<!-- IF gift_privacy == "0" -->
											<dd><a href="{top.virtual_path}{member_profile_link}">{member_username}</a></dd>
										<!-- ELSEIF gift_privacy == "1" AND (session.member_id == gift_sender_id OR session.member_id == gift_receiver_id) -->
											<dd><a href="{top.virtual_path}{member_profile_link}">{member_username}</a></dd>
										<!-- ELSE -->
											<dd>{lang:"member","anonymous"}</dd>
										<!-- ENDIF -->
										<!-- IF gift_privacy == "0" OR session.member_id == gift_receiver_id -->
											<!-- IF gift_message -->
												<dt>{lang:"member","message"}:</dt>
												<dd>{gift_message}</dd>
											<!-- ENDIF -->
										<!-- ENDIF -->
										<dt>{lang:"member","send_date"}:</dt>
										<dd>{gift_date}</dd>
									</dl>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
			<!-- END profile_gifts -->
		</div>
		<div class="clear"></div>

	</div>
</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"member","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"member","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
