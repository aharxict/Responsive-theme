<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><!-- INCLUDE member_sections_location.tpl --></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_member_profile_preview">

		<div class="typemembers">
			<div class="dataitem single">
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
									<!-- IF settings.show_online -->
										<!-- IF member_online -->
											<li class="approve"><a href="{virtual_path}{member_profile_link}">{lang:"core","userinfo_online"}</a></li>
										<!-- ENDIF -->
									<!-- ENDIF -->
									<!-- IF settings.enable_friends AND member_is_friend == "0" -->
										<li class="friends"><a href="{virtual_path}{member_add_friends_link}" title="{lang:"member","friends"}">{lang:"member","add_friends"}</a></li>
									<!-- ENDIF -->
									<!-- IF settings.enable_favorites AND member_is_favorite == "0" -->
										<li class="favorites"><a href="{virtual_path}{member_add_favorites_link}" title="{lang:"member","add_favorites"}">{lang:"member","add_favorites"}</a></li>
									<!-- ENDIF -->
									<!-- IF settings.enable_messaging -->
										<li class="message"><a href="{virtual_path}{member_send_message_link}" title="{lang:"member","send_message"}">{lang:"member","send_message"}</a></li>
									<!-- ENDIF -->
									<!-- IF settings.enable_blocked_members -->
										<li class="block">
											<a href="#" onclick="javascript:confirmLink('{lang:"member","block?"}', '{virtual_path}{member_block_link}');return false;" title="{lang:"member","block"}">{lang:"member","block"}</a>
										</li>
									<!-- ENDIF -->
								</ul>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="clear"></div>

	</div>

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->

