<!-- BEGIN block_comments -->
	<div id="object_comment_{comment_id}" class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
		<table class="plain">
			<tr>
				<td>
					<div class="image" style="padding: 4px; border: 1px solid #ddd; margin-right:10px;">
						<!-- INCLUDE member_sections_picture.tpl -->
                        <div style="text-align:center;">
                		<a href="{top.virtual_path}{member_profile_link}" style="line-height:28px;">{member_username}</a>
                		</div>
					</div>
				</td>
				<td class="data" valign="top">
					<div class="itemheader">
						<div class="itemheader">
							<div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"core","date_stamp"} {comment_post_date}</div>
							<!-- IF comment_delete_link -->
								<div style="float:left; position: relative; font-size:12px; padding-right:7px;" id="object_comment_delete_link_{comment_id}">{comment_delete_link}</div>
							<!-- ENDIF -->
							<!-- IF settings.enable_reports AND top.comment_type_reports_enabled AND session.can_submit_reports -->
								<div style="float:left; position: relative; font-size:12px; padding-right:7px;" class="report">
									{reports:type=top.comment_type,member_id=top.member_id,item_id=comment_id}
								</div>
							<!-- ENDIF -->
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="entry">
						{comment_body}
					</div>
				</td>
			</tr>
		</table>
	</div>
    <hr />
<!-- END block_comments -->
<!-- IF total_pages > "1" -->
	<div class="footer_wrap">
		<div class="footer">
			<p>{lang:"core","page_numbers"}</p>
			{page_links}
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
<!-- ENDIF -->
