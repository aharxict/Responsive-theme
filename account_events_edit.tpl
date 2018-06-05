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
								<div style="float:left;"><h2>{app_page}</h2></div>

                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{event_pictures_view_link}" class="btn">{lang:"events","opt_pictures"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_account_events_edit">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td class="data">
							<div class="form">
								<form name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_event_name">{lang:"events","name"} <i>*</i></label></dt>
											<dd><input type="text" id="field_event_name" class="text text_small form-control" name="event_name" value="{htmlentities:event_name}" maxlength="255" /></dd>
											<dt><label for="field_event_start_month">{lang:"events","startdate"} <i>*</i></label></dt>
											<dd>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_start_month" id="field_event_start_month">{dropdownlist:top.months,event_start_month}</select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_start_day">{dropdownlist:top.days,event_start_day}</select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_start_year">{dropdownlist:top.years,event_start_year}</select>
                                                <div style="float:left;">@</div>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;;" name="event_start_hour">{dropdownlist:top.hours,event_start_hour}</select>
												<select class="select form-control" style="float:left;width:100px;" name="event_start_minute">{dropdownlist:top.minutes,event_start_minute}</select>
											<div class="clearfix"></div>
                                            </dd>
    										<dt><label for="field_event_end_month">{lang:"events","enddate"} <i>*</i></label></dt>
											<dd>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_month" id="field_event_end_month">{dropdownlist:top.months,event_end_month}</select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_day">{dropdownlist:top.days,event_end_day}</select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_year">{dropdownlist:top.years,event_end_year}</select>
                                                <div style="float:left;">@</div>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_hour">{dropdownlist:top.hours,event_end_hour}</select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_minute">{dropdownlist:top.minutes,event_end_minute}</select>
											<div class="clearfix"></div>
                                            </dd>
											<!-- BEGIN event_fields -->
    											<dt><label for="field_{field_label}">{field_name} {ifelse:field_required,"1","<i>*</i>",""}</label></dt>
    											<dd>
													<!-- IF field_type = "text" -->
														<input type="text" id="field_{field_label}" class="text form-control" name="{field_label}" style="width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
													<!-- ELSEIF field_type = "image" -->
														<input type="file" id="field_{field_label}" class="text form-control" name="{field_label}" />
														<!-- IF field_old_value != "" -->
															<a target="_blank" href="{top.virtual_pic_path}{field_old_value}">View file</a>&nbsp;
															<input class="inputCheck" id="{field_label}_remove" name="{field_label}_remove" type="checkbox" value="1">&nbsp;{lang:"events","remove"}
														<!-- ENDIF -->
													<!-- ELSEIF field_type = "textarea" -->
														<textarea id="field_{field_label}" class="textarea textarea_full form-control" name="{field_label}" style="height: {field_height}">{htmlentities:field_value}</textarea>
													<!-- ELSEIF field_type = "checkbox" -->
														<ul class="fielditems" style="margin-bottom:10px;">
															<!-- INBEGIN field_items -->
																<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
															<!-- END field_items -->
														<div class="clearfix"></div></ul>
														<div class="clear"></div>
													<!-- ELSEIF field_type = "radio" -->
														<ul class="fielditems" style="margin-bottom:10px;">
															<!-- INBEGIN field_items -->
																<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{radiobuttons:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
															<!-- END field_items -->
														<div class="clearfix"></div></ul>
														<div class="clear"></div>
													<!-- ELSEIF field_type = "combo" -->
														<select id="field_{field_label}" class="select" name="{field_label}">{dropdownlist:field_items,field_value}</select>
													<!-- ELSEIF field_type = "date" -->
														<select class="select" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
														<select class="select" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
														<select class="select" name="{field_label}_year">{dropdownlist:years,field_value_year}</select>
													<!-- ELSEIF field_type = "time" -->
														<select class="select" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
														<select class="select" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>
													<!-- ELSEIF field_type = "datetime" -->
														<select class="select" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
														<select class="select" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
														<select class="select" name="{field_label}_year">{dropdownlist:years,field_value_year}</select> @
														<select class="select" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
														<select class="select" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>
													<!-- ENDIF -->
												</dd>
											<!-- END event_fields -->
											<!-- IF settings.enable_event_max_guests -->
												<dt><label for="field_comments">{lang:"events","max_guests"}</label></dt>
												<dd><input type="text" id="field_max_guests" class="text form-control" name="max_guests" size="4" value="{event_max_guests}" maxlength="6" /></dd>
											<!-- ENDIF -->
											<!-- IF settings.enable_event_comments -->
												<dt>
													<label for="field_comments">
														<input type="checkbox" class="checkbox" style="float:left;margin-right:5px;" name="comments" value="1" id="field_comments" <!-- IF event_comments -->checked="checked"<!-- ENDIF --> />
														<div style="float:left;line-height:28px;">{lang:"events","allow_comments"}</div>
													</label>
												</dt>
											<!-- ENDIF -->
    										<dd class="submit btn-box"><input class="submit btn" type="submit" name="submit" value="{lang:"events","submit"}" /></dd>
										</dl>
									</div>
									<input type="hidden" name="isevent" value="1" />
								</form>
							</div>
						</td>
					</tr>
				</table>
			</div>
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