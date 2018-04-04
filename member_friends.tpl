<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><!-- INCLUDE member_sections_location.tpl --></li>
				<li><span>&#187;</span></li>
				<li><a href="{virtual_path}{member_friends_link}">{lang:"member","frm_friends"}</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{lang:"member","app_friends"}</h1>
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

	<div class="outter page_member_friends">

		<div class="typemembers">
			<!-- BEGIN friends_profiles -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<!-- INCLUDE member_sections_picture.tpl -->
								</div>
							</td>
							<td class="data">
								<div class="datainfo">
									<!-- INCLUDE member_sections_name.tpl -->
									<dl class="datainfo">
										<!-- INCLUDE member_sections_card.tpl -->
									</dl>
								</div>
							</td>
							<td>
								<div class="actions">
									<ul class="actions">
										<!-- INCLUDE member_sections_quick_actions.tpl -->
									</ul>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END friends_profiles -->
		</div>
		<div class="clear"></div>

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
