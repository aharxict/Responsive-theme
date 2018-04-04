<!-- IF session.can_view_all_guestbooks -->

	<div class="comments page_member_profile_comments">

		<div class="subtitle">
			<h2 style="float:left">
				{lang:"member","comments_list"}
				<a href="{virtual_path}<!-- IF settings.fancy_urls -->member/{member_id}/guestbook/rss/<!-- ELSE -->index.php?m=member_guestbook&p=rss&id={member_id}<!-- ENDIF -->" target="_blank"><img src="{virtual_tpl_path}{session.template}/media/rss-small.png" border="0" align="absmiddle" /></a>
			</h2>
			<!-- IF ext_guestbooks_comments_form -->
				<h2 style="float:right"><a href="#" onclick="showhide_field('new_comment_box');return false;">{lang:"member","sign_guestbook"}</a></h2>
			<!-- ENDIF -->
			<div class="clear"></div>
		</div>

		<!-- IF ext_guestbooks_comments_form -->

				<div class="commentsform page_member_profile_comments_submit" style="display:none" id="new_comment_box">
					<div class="dataitem single">
						<div class="form">
							<form name="edit" method="post" action="{virtual_path}{member_guestbook_link}">
								<div class="fieldset">
									<dl class="fieldset">
										<dt><label for="field_comment_body">{lang:"member","sign_guestbook"}</label></dt>
										<dd><textarea class="textarea textarea_full" id="field_comment_body" cols="40" rows="5" name="body"></textarea></dd>
										<!-- IF settings.guestbooks_captcha -->
    										<dt><label for="field_captcha">{lang:"member","verify_number"}</label></dt>
    										<dd>
												<input type="text" id="field_captcha" class="text captcha" name="captcha" maxlength="5" />
												<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
											</dd>
										<!-- ENDIF -->
    									<dd class="submit"><input class="submit" type="submit" name="submit" value="{lang:"member","submit"}" /></dd>
									</dl>
								</div>
								<input type="hidden" name="isguestbook" value="1" />
								<input type="hidden" name="isprofile" value="1" />
							</form>
						</div>
					</div>
				</div>

		<!-- ENDIF -->

		<!-- IF ext_guestbooks -->
			<!-- BEGIN ext_guestbooks -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<!-- INCLUDE member_sections_picture.tpl -->
								</div>
							</td>
						    <td class="data">
								<div class="itemheader">
									<!-- INCLUDE member_sections_name.tpl -->
									<ul class="itemheader">
										<li>{lang:"core","date_stamp"} {entry_post_date}</li>
										<!-- IF settings.enable_reports AND settings.enable_guestbook_reports AND session.can_submit_reports -->
											<li class="report">
												{reports:type="guestbook",member_id=top.member_id,item_id=entry_id}
											</li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
								<div class="entry">
									{entry_body}
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END ext_guestbooks -->
		<!-- ELSE -->
			<div class="form">{lang:"member","no_comments"}</div>
		<!-- ENDIF -->

	</div>
	<div class="clear"></div>

<!-- ENDIF -->
