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

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"events","app_event"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <!-- IF hide_content != "1" -->
                                	<a href="{virtual_path}{event_details_link}" class="btn active"> {lang:"events","frm_details"}</a>
                                
                                	<a href="{virtual_path}{event_guests_link}" class="btn"> {lang:"events","frm_guests"}</a>
                                	<!-- IF settings.enable_event_pictures -->
                                	<a href="{virtual_path}{event_pictures_link}" class="btn"> {lang:"events","frm_pictures"}</a>
                                	<!-- ENDIF -->
                                <!-- ENDIF -->
                                </div>

                                <div class="clearfix"></div>
                           </div>
                      

<!-- INCLUDE message.tpl -->        

<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_events">

		<div class="typemedia">

				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<!-- IF event_picture_preview AND event_picture_active -->
										<a href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_pic_path}{member_media_path}{event_picture_preview}" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{event_details_link}"><img src="{top.virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<!-- ENDIF -->
								</div>
							</td>
							<td class="data" valign="top">
								<h2 class="inner" style="font-size:13px;width:500px !important;overflow:inherit;word-wrap: break-word;"><a href="{top.virtual_path}{event_details_link}">{event_name}</a></h2>
								
                                <div class="actions">
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_guests_link}">{event_total_guests} {lang:"events","total_guests"}</a></div>
										<!-- IF settings.enable_event_comments AND event_allow_comments -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_comments_link}">{event_total_comments} {lang:"events","total_comments"}</a></div>
										<!-- ENDIF -->
										<!-- IF settings.enable_event_pictures -->
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="{top.virtual_path}{event_pictures_link}">{event_total_pictures} {lang:"events","total_pictures"}</a></div>
										<!-- ENDIF -->
                                        <div style="float:left; position: relative; font-size:12px; padding-right:7px;">{lang:"events","creator"}: <a href="{top.virtual_path}{member_profile_link}">{member_username}</a>
                                        </div>
									</div>
									<div class="clearfix"></div>
								</div>

                                <div class="datainfo" style="padding-top:5px;">
									<dl class="datainfo">
										<dt style="float:left; font-size:13px;">{event_field_description_name}:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;width:400px !important;overflow:inherit;word-wrap: break-word;">{event_field_description_value}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;">{event_field_place_name}:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;">{event_field_place_value}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;">{lang:"events","startdate"}:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;">{event_start_date}</dd>
                                        <div class="clearfix"></div>
                                        <dt style="float:left; font-size:13px;">{lang:"events","creator"}:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;"><a href="{virtual_path}{member_profile_link}">{member_username}</a></dd>
                                        <div class="clearfix"></div>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />

			<!-- IF settings.enable_event_comments AND event_allow_comments AND session.can_view_all_events_comments -->

				<div class="comments page_events_comments">

					<div class="subtitle" style="margin-bottom:20px;">
						<h2 style="font-size:18px;">{lang:"events","comments_list"}</h2>
						<div class="progress" id="get_comments_progress" style="display:none;"></div>
					</div>
<style type="text/css">
#comments_page .entry {
	width:500px !important;
	overflow:inherit;
	word-wrap: break-word;
	}
</style>
					<div id="comments_page">
                    	{comments:type="event",member_id=member_id,content_id=event_id}
					</div>

					<div class="commentsform page_events_comments_submit">
						<div class="dataitem single">
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_comment_body">{lang:"events","add_comment"}</label></dt>
											<dd><textarea class="textarea textarea_full form-control" id="field_comment_body" cols="40" rows="5" name="body">{comment_body}</textarea></dd>
											<!-- IF settings.events_comments_captcha -->
    											<dt><label for="field_captcha">{lang:"events","verify_number"}</label></dt>
    											<dd>
													<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="float:left; width:auto;" />
													<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" style="float:left;" /><div class="clearfix"></div>
												</dd>
											<!-- ENDIF -->
    										<dd class="submit"><input class="submit btn" type="submit" name="submit" value="{lang:"events","submit"}" /></dd>
										</dl>
									</div>
									<input type="hidden" name="iscomment" value="1" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>

			<!-- ENDIF -->

		</div>
		<div class="clear"></div>

	</div>
</div>
<!-- ENDIF -->

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->