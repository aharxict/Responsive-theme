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
					

<!-- SEARCH RESULTS -->
					<div class="col-sm-8" style="margin-bottom:7px; padding-right:10px;">
						<div class="blog-post blog-single-post page-content" style="padding:0px 0px; padding-bottom:0;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-left:0px; margin-right:0px;">
							<div style="float:left;"><h2><!-- IF active_module == "advanced_search" -->{lang:"search","app_advanced_search"}<!-- ELSE -->{lang:"search","app_search"}<!-- ENDIF --></h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <!-- IF active_module == "advanced_search" -->
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","search/","index.php?m=search"}" class="btn"><i class="glyphicon glyphicon-search"></i> SEARCH</a>
								<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","search/advanced/","index.php?m=search&p=advanced"}" class="btn active"><i class="glyphicon glyphicon-search"></i> ADVANCED</a>
                                <!-- ELSE -->
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","search/","index.php?m=search"}" class="btn active"><i class="glyphicon glyphicon-search"></i> SEARCH</a>
								<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","search/advanced/","index.php?m=search&p=advanced"}" class="btn"><i class="glyphicon glyphicon-search"></i> ADVANCED</a>
                                <!-- ENDIF -->
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<!-- IF active_module == "advanced_search" -->
<!-- SEARCH FORM -->
<div style="margin-bottom:7px; padding:20px;">

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_search">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="search" method="post" action="">

						<!-- IF total_types > "1" -->
							<div class="fieldset">
								<dl class="fieldset fieldgrid break">
    								<dt><label for="field_type_id">{lang:"search","search_type"}</label></dt>
									<dd>
										<select class="select form-control" name="type_id" id="field_type_id" onchange="row_switch('type_'+this.value+'_box')">
											{dropdownlist:typesbox,default_type}
										</select>
									</dd>
								</dl>
								<div class="clear"></div>
							</div>
						<!-- ELSE -->
							<input type="hidden" name="type_id" value="{default_type}" />
						<!-- ENDIF -->

						<!-- BEGIN profile_types -->

							<!-- IF type_id == settings.default_profile_type -->
								<script type="text/javascript" language="javascript">var active_tab = 'type_{type_label}_box';</script>
							<!-- ENDIF -->
							<div id="type_{type_label}_box"<!-- IF type_id != settings.default_profile_type --> style="display:none"<!-- ENDIF -->>

								<!-- BEGIN profile_groups -->

									<!-- IF profile_fields -->

										<div class="fieldset">
                                        	<h2 style="font-size:16px; padding-bottom:15px;">{group_name}</h2>
											<dl class="fieldset fieldgrid break">

												<!-- BEGIN profile_fields -->

													<dt style="display:none;"><label for="field_{field_label}">{field_name}</label></dt>
													<dd style="padding-bottom:5px;">
														<!-- IF field_type = "text" -->
															<!-- IF field_label = "uszip" -->
																<!-- IF settings.search_uszip -->
																	<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="" />
																	within <input type="text" class="text" name="dist" style="width: 40px" value="" maxlength="2" /> miles
																<!-- ELSE -->
																	<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
																<!-- ENDIF -->
															<!-- ELSEIF field_in_search_range -->
																<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
																-
																<input type="text" class="text form-control" id="field_{field_label}_2" name="{field_label}_2" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
															<!-- ELSE -->
																<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
															<!-- ENDIF -->
														<!-- ELSEIF field_type = "textarea" -->
															<textarea class="textarea textarea_data" id="field_{field_label}" name="{field_label}" style="height: {field_height}">{htmlentities:field_value}</textarea>
														<!-- ELSEIF field_type = "checkbox" -->
															<ul class="fielditems" style="margin-bottom:10px;">
																<!-- INBEGIN field_items -->
                                                                <li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;<div class="checkbox__text">{inner_value}</div></label></li>
																<!-- END field_items -->
															<div class="clearfix"></div></ul>
															<div class="clear"></div>
														<!-- ELSEIF field_type = "radio" -->
															<!-- IF field_in_search_multi -->
																<ul class="fielditems" style="margin-bottom:10px;">
																	<!-- INBEGIN field_items -->
                                                                    <li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;<div class="checkbox__text">{inner_value}</div></label></li>
																	<!-- END field_items -->
																<div class="clearfix"></div></ul>
																<div class="clear"></div>
															<!-- ELSE -->
																<ul class="fielditems" style="margin-bottom:10px;">
																	<!-- INBEGIN field_items -->
                                                                    <li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{radiobuttons:parent.field_label,rowcnt,"",inner_key}&nbsp;<div class="checkbox__text">{inner_value}</div></label></li>
																	<!-- END field_items -->
																<div class="clearfix"></div></ul>
																<div class="clear"></div>
															<!-- ENDIF -->
														<!-- ELSEIF field_type = "combo" -->
															<!-- IF field_in_search_multi -->
																<ul class="fielditems" style="margin-bottom:10px;">
																	<!-- INBEGIN field_items -->
                                                                    <li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;<div class="checkbox__text">{inner_value}</div></label></li>
																	<!-- END field_items -->
																<div class="clearfix"></div></ul>
																<div class="clear"></div>
															<!-- ELSEIF field_in_search_range -->
																<select class="select form-control" id="field_{field_label}" name="{field_label}">
																	<option value="">{lang:"core","user_field_any"}</option>
																	{dropdownlist:field_items,field_value}
																</select>
																-
																<select class="select form-control" id="field_{field_label}_2" name="{field_label}_2">
																	<option value="">{lang:"core","user_field_any"}</option>
																	{dropdownlist:field_items,field_value}
																</select>
															<!-- ELSE -->
																<select class="select form-control" id="field_{field_label}" name="{field_label}">
																	<!-- IF field_label != "gender1" AND field_label != "gender2" -->
																		<option value="">{lang:"core","user_field_any"}</option>
																	<!-- ENDIF -->
																	{dropdownlist:field_items,field_value}
																</select>
															<!-- ENDIF -->
														<!-- ELSEIF field_type = "birthday" -->
                                                        <div class="ages_box">
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_{field_label}" name="{field_label}_from">{dropdownlist:top.agebox,field_value}</select> -
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_{field_label}_to" name="{field_label}_to">{dropdownlist:top.agebox,field_default}</select>
                                                        </div>
														<!-- ENDIF -->
													</dd>

												<!-- END profile_fields -->

											</dl>
											<div class="clear"></div>
										</div>

									<!-- ENDIF -->
								<hr />
								<!-- END profile_groups -->

							</div>
						<!-- END profile_types -->
                        
						<h2 style="font-size:16px; padding-bottom:15px;">{lang:"search","options"}</h2>
                        <div class="fieldset">
							<dl class="fieldset fieldgrid" style="margin-bottom:5px;">
								<!-- IF search_username -->
    								<dt><label for="field_username">{lang:"search","search_username"}</label></dt>
									<dd style="padding-bottom:5px;"><input type="text" class="text form-control" name="username" value="" id="field_username" /></dd>
								<!-- ENDIF -->
								<!-- IF search_online -->
									<dt><label for="field_online_only">{lang:"search","search_online"}</label></dt>
									<dd style="padding-bottom:5px;"><select class="select form-control" name="online_only" id="field_online_only">{dropdownlist:yesnobox,"0"}</select></dd>
								<!-- ENDIF -->
								<dt><label for="field_pictures_only">{lang:"search","pictures_only"}</label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="pictures_only" id="field_pictures_only">{dropdownlist:yesnobox,"0"}</select></dd>
								<dt><label for="field_display_type">{lang:"search","display_type"}</label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="display_type" id="field_display_type">{dropdownlist:displaytypebox,0}</select></dd>
								<!-- IF loggedin AND settings.enable_saved_searches -->
    								<dt><label for="field_search_save">{lang:"search","save_search"}</label></dt>
									<dd style="padding-bottom:5px;"><input name="search_save" type="text" class="text form-control" id="field_search_save" value="" maxlength="128" />
									</dd>
								<!-- ENDIF -->
								<dd class="submit" style="padding-top:15px;"><input class="submit btn" type="submit" name="submit" value="{lang:"search","submit"}" /></dd>
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
</div>
<!-- SEARCH FORM ENDS -->
                            <!-- ELSE -->
<!-- SEARCH FORM -->
<div style="margin-bottom:7px; padding:20px;">

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_search">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="search" method="post" action="">

						<!-- IF total_types > "1" -->
							<div class="fieldset">
								<div class="legend">{lang:"search","type"}</div>
								<dl class="fieldset fieldgrid break">
    								<dt><label for="field_type_id">{lang:"search","search_type"}</label></dt>
									<dd>
										<select class="select form-control" name="type_id" id="field_type_id" onchange="row_switch('type_'+this.value+'_box')">
											{dropdownlist:typesbox,default_type}
										</select>
									</dd>
								</dl>
								<div class="clear"></div>
							</div>
						<!-- ELSE -->
							<input type="hidden" name="type_id" value="{default_type}" />
						<!-- ENDIF -->

						<!-- BEGIN profile_types -->

							<!-- IF type_id == settings.default_profile_type -->
								<script type="text/javascript" language="javascript">var active_tab = 'type_{type_label}_box';</script>
							<!-- ENDIF -->
							<div id="type_{type_label}_box"<!-- IF type_id != settings.default_profile_type --> style="display:none"<!-- ENDIF -->>

								<!-- BEGIN profile_groups -->

									<!-- IF profile_fields -->

										<div class="fieldset">
                                        	<h2 style="font-size:16px; padding-bottom:15px;">{group_name}</h2>
											<dl class="fieldset fieldgrid break">

												<!-- BEGIN profile_fields -->

													<dt><label for="field_{field_label}">{field_name}</label></dt>
													<dd style="padding-bottom:5px;">
														<!-- IF field_type = "text" -->
															<!-- IF field_label = "uszip" -->
																<!-- IF settings.search_uszip -->
																	<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="" />
																	within <input type="text" class="text" name="dist" style="width: 40px" value="" maxlength="2" /> miles
																<!-- ELSE -->
																	<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
																<!-- ENDIF -->
															<!-- ELSEIF field_in_search_range -->
																<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
																-
																<input type="text" class="text form-control" id="field_{field_label}_2" name="{field_label}_2" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
															<!-- ELSE -->
																<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
															<!-- ENDIF -->
														<!-- ELSEIF field_type = "textarea" -->
															<textarea class="textarea textarea_data" id="field_{field_label}" name="{field_label}" style="height: {field_height}">{htmlentities:field_value}</textarea>
														<!-- ELSEIF field_type = "checkbox" -->
															<ul class="fielditems">
																<!-- INBEGIN field_items -->
																	<li><label>{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
																<!-- END field_items -->
															</ul>
															<div class="clear"></div>
														<!-- ELSEIF field_type = "radio" -->
															<!-- IF field_in_search_multi -->
																<ul class="fielditems">
																	<!-- INBEGIN field_items -->
																		<li><label>{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
																	<!-- END field_items -->
																</ul>
																<div class="clear"></div>
															<!-- ELSE -->
																<ul class="fielditems">
																	<!-- INBEGIN field_items -->
																		<li><label>{radiobuttons:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
																	<!-- END field_items -->
																</ul>
																<div class="clear"></div>
															<!-- ENDIF -->
														<!-- ELSEIF field_type = "combo" -->
															<!-- IF field_in_search_multi -->
																<ul class="fielditems">
																	<!-- INBEGIN field_items -->
																		<li><label>{checkboxes:parent.field_label,rowcnt,"",inner_key}&nbsp;{inner_value}</label></li>
																	<!-- END field_items -->
																</ul>
																<div class="clear"></div>
															<!-- ELSEIF field_in_search_range -->
																<select class="select form-control" id="field_{field_label}" name="{field_label}">
																	<option value="">{lang:"core","user_field_any"}</option>
																	{dropdownlist:field_items,field_value}
																</select>
																-
																<select class="select form-control" id="field_{field_label}_2" name="{field_label}_2">
																	<option value="">{lang:"core","user_field_any"}</option>
																	{dropdownlist:field_items,field_value}
																</select>
															<!-- ELSE -->
																<select class="select form-control" id="field_{field_label}" name="{field_label}">
																	<!-- IF field_label != "gender1" AND field_label != "gender2" -->
																		<option value="">{lang:"core","user_field_any"}</option>
																	<!-- ENDIF -->
																	{dropdownlist:field_items,field_value}
																</select>
															<!-- ENDIF -->
														<!-- ELSEIF field_type = "birthday" -->
                                                            <div class="ages_box">
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_{field_label}" name="{field_label}_from">{dropdownlist:top.agebox,field_value}</select> -
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_{field_label}_to" name="{field_label}_to">{dropdownlist:top.agebox,field_default}</select>
                                                            </div>
														<!-- ENDIF -->
													</dd>

												<!-- END profile_fields -->

											</dl>
											<div class="clear"></div>
										</div>

									<!-- ENDIF -->
								<hr />
								<!-- END profile_groups -->

							</div>
						<!-- END profile_types -->
                        
						<h2 style="font-size:16px; padding-bottom:15px;">{lang:"search","options"}</h2>
                        <div class="fieldset">
							<dl class="fieldset fieldgrid" style="margin-bottom:5px;">
								<!-- IF search_username -->
    								<dt><label for="field_username">{lang:"search","search_username"}</label></dt>
									<dd style="padding-bottom:5px;"><input type="text" class="text form-control" name="username" value="" id="field_username" /></dd>
								<!-- ENDIF -->
								<!-- IF search_online -->
									<dt><label for="field_online_only">{lang:"search","search_online"}</label></dt>
									<dd style="padding-bottom:5px;"><select class="select form-control" name="online_only" id="field_online_only">{dropdownlist:yesnobox,"0"}</select></dd>
								<!-- ENDIF -->
								<dt><label for="field_pictures_only">{lang:"search","pictures_only"}</label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="pictures_only" id="field_pictures_only">{dropdownlist:yesnobox,"0"}</select></dd>
								<dt><label for="field_display_type">{lang:"search","display_type"}</label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="display_type" id="field_display_type">{dropdownlist:displaytypebox,0}</select></dd>
								<!-- IF loggedin AND settings.enable_saved_searches -->
    								<dt><label for="field_search_save">{lang:"search","save_search"}</label></dt>
									<dd style="padding-bottom:5px;"><input name="search_save" type="text" class="text form-control" id="field_search_save" value="" maxlength="128" />
									</dd>
								<!-- ENDIF -->
								<dd class="submit" style="padding-top:15px;"><input class="submit btn" type="submit" name="submit" value="{lang:"search","submit"}" /></dd>
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
</div>
<!-- SEARCH FORM ENDS -->
							<!-- ENDIF -->
						</div>
					</div>
<!-- /SEARCH RESULTS -->
                    
                    
<!-- SIDEBAR, SEARCH FORM -->
<div class="col-sm-4 col-rightside">
<!-- IF active_module == "advanced_search" -->
{members:limit=12,photos=1,orderby="lastvisit",cache_time=0,cache_name="online",template="ext.members_search.tpl"}
<!-- ELSE -->
{members:limit=12,photos=1,orderby="lastvisit",cache_time=0,cache_name="online",template="ext.members_search.tpl"}
<!-- ENDIF -->
</div>
<!-- /SIDEBAR, SEARCH FORM -->
					
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->