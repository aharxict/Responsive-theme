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
								<div style="float:left;"><h2>{lang:"events","app_search"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/","index.php?m=events"}" class="btn"><i class="glyphicon glyphicon-calendar"></i> {lang:"events","frm_events"}</a>
                                
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","events/search/","index.php?m=events&p=search"}" class="btn active"><i class="glyphicon glyphicon-search"></i> {lang:"events","opt_search"}</a>
                                </div>

                                <div class="clearfix"></div>
                           </div>

<!-- INCLUDE message.tpl -->        

<!-- IF hide_content != "1" -->

	<div class="outter page_search">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="search" method="post" action="">
						<!-- IF event_fields -->
							<div class="fieldset">
								<div class="legend">{lang:"events","event_fields"}</div>
								<dl class="fieldset fieldgrid break">

									<!-- IF settings.enable_event_name_search -->
    									<dt><label for="field_event_name">{lang:"events","event_name"}</label></dt>
										<dd><input type="text" class="text form-control" name="event_name" style="width: 150px" value="" id="field_event_name" /></dd>
									<!-- ENDIF -->

									<!-- BEGIN event_fields -->

										<dt><label for="field_{field_label}">{field_name}</label></dt>
										<dd>
											<!-- IF field_type = "text" -->
												<!-- IF field_label = "uszip" -->
													<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="" />
													within <input type="text" class="text form-control" name="dist" style="width: 40px" value="" maxlength="2" /> miles
												<!-- ELSE -->
													<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
												<!-- ENDIF -->
											<!-- ELSEIF field_type = "textarea" -->
												<textarea class="textarea textarea_data form-control" id="field_{field_label}" name="{field_label}" style="height: {field_height}">{htmlentities:field_value}</textarea>
											<!-- ELSEIF field_type = "checkbox" -->
												<ul class="fielditems" style="margin-bottom:10px;">
													<!-- INBEGIN field_items -->
														<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
													<!-- END field_items -->
												<div class="clear"></div></ul>
												<div class="clear"></div>
											<!-- ELSEIF field_type = "radio" -->
												<!-- IF field_in_search_multi -->
													<ul class="fielditems" style="margin-bottom:10px;">
														<!-- INBEGIN field_items -->
															<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
														<!-- END field_items -->
													<div class="clear"></div></ul>
													<div class="clear"></div>
												<!-- ELSE -->
													<ul class="fielditems" style="margin-bottom:10px;">
														<!-- INBEGIN field_items -->
															<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;">{radiobuttons:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
														<!-- END field_items -->
													<div class="clear"></div></ul>
													<div class="clear"></div>
												<!-- ENDIF -->
											<!-- ELSEIF field_type = "combo" -->
												<!-- IF field_in_search_multi -->
													<ul class="fielditems" style="margin-bottom:10px;">
														<!-- INBEGIN field_items -->
															<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
														<!-- END field_items -->
													<div class="clear"></div></ul>
													<div class="clear"></div>
												<!-- ELSE -->
													<select class="select form-control" id="field_{field_label}" name="{field_label}">
														<option value="">{lang:"core","user_field_any"}</option>
														{dropdownlist:field_items,field_value}
													</select>
												<!-- ENDIF -->
											<!-- ENDIF -->
										</dd>

									<!-- END event_fields -->

								</dl>
								<div class="clear"></div>
							</div>

						<!-- ENDIF -->

						<div class="fieldset">
							<div class="legend">{lang:"events","options"}</div>
							<dl class="fieldset fieldgrid">
								<dt><label for="field_with_guests">{lang:"events","with_guests_events"}</label></dt>
								<dd><select class="select form-control" name="with_guests" id="field_with_guests">{dropdownlist:yesnobox,"0"}</select></dd>
								<dt><label for="field_pictures_only">{lang:"events","pictures_only"}</label></dt>
								<dd><select class="select form-control" name="pictures_only" id="field_pictures_only">{dropdownlist:yesnobox,"0"}</select></dd>
								<dt><label for="field_upcoming_only">{lang:"events","event_type"}</label></dt>
								<dd><select class="select form-control" name="upcoming_only" id="field_upcoming_only">{dropdownlist:eventtypebox,"0"}</select></dd>
								<dd class="submit"><input class="submit btn" type="submit" name="submit" value="{lang:"events","submit"}" /></dd>
							</dl>
							<div class="clear"></div>
						</div>

						<input type="hidden" name="issearch" value="1" />
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>

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