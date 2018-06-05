<!-- INCLUDE header.tpl -->

<div class="section section-header">
	<div class="container">
		<div class="row">

			<!-- IF loggedin -->
			<!-- INCLUDE user-menu.tpl -->
			<!-- ENDIF -->

			<div class="section" style="padding-top:10px;">
				<div class="container">
					<div class="row">
						<!-- INCLUDE login_form_sidebar.tpl -->

						<div class="col-sm-8">
							<div class="blog-post blog-single-post page-content">



								<div class="header_wrap single-post-title">
									<div class="location_wrap" style="display: none;">
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
										<div class="title" style="float: left;">
											<h2>{lang:"member","app_friends"}</h2>
										</div>
										<div class="options text-right" >
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
										<div class="gift-box">
										<dt>{lang:"member","sent_by"}:</dt>
										<!-- IF gift_privacy == "0" -->
											<dd><a href="{top.virtual_path}{member_profile_link}">{member_username}</a></dd>
										<!-- ELSEIF gift_privacy == "1" AND (session.member_id == gift_sender_id OR session.member_id == gift_receiver_id) -->
											<dd><a href="{top.virtual_path}{member_profile_link}">{member_username}</a></dd>
										<!-- ELSE -->
											<dd>{lang:"member","anonymous"}</dd>
										<!-- ENDIF -->
										</div>
										<!-- IF gift_privacy == "0" OR session.member_id == gift_receiver_id -->
											<!-- IF gift_message -->
												<div class="gift-box">
												<dt>{lang:"member","message"}:</dt>
												<dd>{gift_message}</dd>
												</div>
											<!-- ENDIF -->
										<!-- ENDIF -->
										<div class="gift-box">
										<dt>{lang:"member","send_date"}:</dt>
										<dd>{gift_date}</dd>
										</div>
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
							</div>
						</div>

					</div>
				</div>
			</div>    </div></div></div>
<!-- INCLUDE footer.tpl -->
