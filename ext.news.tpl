<!-- IF ext_news -->
	<div class="typecontent">
		<!-- BEGIN ext_news -->
			<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
				<table class="plain" style="margin-bottom: 12px; border-top: 2px dotted #CCC;">
					<tr>
						<!-- IF news_picture -->
							<td style="padding-right:10px; padding-top:12px;">
								<div class="image" style="width:100px;">
									<a href="{top.virtual_path}{news_link}"><img src="{top.virtual_pic_path}{news_picture}" alt="" border="0" style="height:100px; width:100px;" /><br /></a>
								</div>
							</td>
						<!-- ENDIF -->
			            <td class="data" valign="middle">
							<div class="itemheader">
								<h2 class="inner" style="font-size: 1.2em; font-weight:700;"><a href="{top.virtual_path}{news_link}">{news_title}</a></h2>
								<div class="itemheader">
									<div style="float:left; font-size:12px; padding-right:7px;"><i class="glyphicon glyphicon-file"></i> {lang:"core","home_post_date"} {news_date}</div>
									<div style="float:left; font-size:12px;"><a href="{top.virtual_path}{news_link}"><i class="glyphicon glyphicon-comment"></i> {news_total_comments} {lang:"core","home_total_comments"}</a></div>
                                    <div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="entry">
								{trim:news_body,60} <a href="{top.virtual_path}{news_link}">{lang:"core","home_read_more"}</a>
							</div>
						</td>
			        </tr>
			    </table>
			</div>
		<!-- END ext_news -->
	</div>
	<div class="clear"></div>
<!-- ENDIF -->
