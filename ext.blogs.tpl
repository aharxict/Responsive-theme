<!-- IF ext_blogs -->
	<div class="typecontent">
		<!-- BEGIN ext_blogs -->
			<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
				<table class="plain">
					<tr>
						<td>
							<div class="image">
								<!-- IF entry_picture -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_pic_path}{member_media_path}{entry_picture}" alt="" border="0" /><br /></a>
								<!-- ELSEIF member_picture AND member_picture_active -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" /><br/></a>
								<!-- ELSE -->
									<a href="{top.virtual_path}{entry_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /><br/></a>
								<!-- ENDIF -->
							</div>
						</td>
			            <td class="data">
							<div class="itemheader">
								<h2 class="inner"><a href="{top.virtual_path}{entry_link}">{trim:entry_title,50}</a></h2>
								<ul class="itemheader">
									<li>{lang:"core","home_post_date"} {entry_date}</li>
									<li><a href="{top.virtual_path}{entry_link}">{entry_total_comments} {lang:"core","home_total_comments"}</a></li>
								</ul>
								<div class="clear"></div>
							</div>
							<div class="entry">
								{trim:entry_body,200} <a href="{top.virtual_path}{entry_link}">{lang:"core","home_read_more"}</a>
							</div>
						</td>
			        </tr>
			    </table>
			</div>
		<!-- END ext_blogs -->
	</div>
	<div class="clear"></div>
<!-- ENDIF -->
