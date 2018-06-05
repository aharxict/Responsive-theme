<!-- INCLUDE header.tpl -->

<div class="section section-header">
<div class="container">
<div class="row">

<!-- IF loggedin -->
<!-- INCLUDE user-menu.tpl -->
<!-- ENDIF -->

<style type="text/css">
.tag {
   position: relative;
   background-color: #3B3C41;
   padding: 5px;
   color: #FFFFFF;
   width:100%;
   text-align:center;
   font-weight: bold;
   border-radius: 0px 0px 2px 2px;
}
.tagthumb {
   position: relative;
   bottom: 5px;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:95.3%;
   text-align:center;
   font-weight: bold;
}

</style>

<div class="section" style="padding-top:10px;">
	<div class="container">
		<div class="row">
		
        <!-- LEFT SIDEBAR -->
		<div class="col-sm-4 col-leftside">
			<div class="hide-mobile">
            <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
                
                <!-- IF session.picture AND session.picture_active -->
				<a href="{top.virtual_path}{session.username}">
                <img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<!-- ELSE -->
				<a href="{top.virtual_path}{session.username}">
                <img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<!-- ENDIF -->
                
			</div>
            </div>
			
            <div class="hide-mobile">
            <!-- INCLUDE ext.member_sidebar.tpl -->
            </div>
			
            <div class="hide-mobile">
            <!-- INCLUDE ext.search.tpl -->					
            </div>
            
		</div>
		<!-- /LEFT SIDEBAR -->
					

		<!-- RIGHT CONTENT -->
		<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"profile","app_profile"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_profile" class="btn active"><i class="glyphicon glyphicon-edit"></i> {lang:"core","usermenu_profile"}</a>
                                <a href="{virtual_path}index.php?m=account_upgrade" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i> {lang:"core","usermenu_upgrade"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   

<!-- IF hide_content != "1" -->

	<div class="outter page_account_profile">

		<form name="profile" method="post" action="" enctype="multipart/form-data">

			<div class="typepage">
				<div class="dataitem single">

					<div class="suboptions_wrap">
						<div class="suboptions">
							<ul class="nav nav-tabs  nav-append-content" style="border-bottom: 0px solid #3abeb1;">
								<!-- BEGIN profile_groups -->
									<li><a href="javascript:void(0)" id="profile_data_{rowcnt}_tab" onclick="switch_tabs('profile_data', {rowcnt}, 0, 1);$('#current_profile_section').val({rowcnt});">{group_name}</a></li>
								<!-- END profile_groups -->
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>

					<div class="form" style="padding:20px 13px 13px 13px; border-radius: 3px 3px 3px 3px; margin-top:-1px;">
						<!-- BEGIN profile_groups -->
							<div class="fieldset " id="profile_data_{rowcnt}_content" style="display: none;">
								<dl class="fieldset fieldgrid break">

    								<!-- BEGIN profile_fields -->

    									<dt><label for="field_{field_label}">{field_name} {ifelse:field_required,"1","<i>*</i>",""}</label></dt>
										<dd>

											<!-- IF field_type = "text" -->
												<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="margin-bottom:10px; width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
											<!-- ELSEIF field_type = "image" -->
												<input type="file" class="text form-control" id="field_{field_label}" name="{field_label}" />
												<!-- IF field_old_value != "" -->
													<a target="_blank" href="{top.virtual_pic_path}{field_value}">View file</a>&nbsp;
													<label><input class="checkbox" id="{field_label}_remove" name="{field_label}_remove" type="checkbox" value="1">&nbsp;{lang:"profile","remove"}</label>
												<!-- ENDIF -->
											<!-- ELSEIF field_type = "textarea" -->
												<textarea class="textarea textarea_data form-control" id="field_{field_label}" name="{field_label}" rows="6" cols="40" style="height: {field_height}">{htmlentities:field_value}</textarea>
											<!-- ELSEIF field_type = "checkbox" -->
	                                                <ul class="fielditems" style="margin-bottom:10px;">
													<!-- INBEGIN field_items -->
														<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;<div class="checkbox__text">{inner_value}</div></label></li>
													<!-- END field_items -->
												<div class="clearfix"></div></ul>
											<!-- ELSEIF field_type = "radio" -->
												<ul class="fielditems">
													<!-- INBEGIN field_items -->
														<li><label>{radiobuttons:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
													<!-- END field_items -->
												</ul>
												<div class="clear"></div>
											<!-- ELSEIF field_type = "combo" -->
												<select class="select form-control custom-select" style="margin-bottom:10px;" id="field_{field_label}" name="{field_label}">
													<!-- IF field_label != "gender1" AND field_label != "gender2" -->
														<option value="">{lang:"core","user_field_none"}</option>
													<!-- ENDIF -->
													{dropdownlist:field_items,field_value}
												</select>
											<!-- ELSEIF field_type = "birthday" -->
												<!-- IF session.timeformat -->
													<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
													<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
												<!-- ELSE -->
													<select class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
													<select class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
												<!-- ENDIF -->
												<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_year">{dropdownlist:top.birthday_years,field_value_year}</select>
                                                <div style="margin-bottom:10px;" class="clearfix"></div>
											<!-- ELSEIF field_type = "date" -->
												<select class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
												<select class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
												<select class="select form-control" name="{field_label}_year">{dropdownlist:years,field_value_year}</select>
											<!-- ELSEIF field_type = "time" -->
												<select class="select form-control" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
												<select class="select form-control" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>
											<!-- ELSEIF field_type = "datetime" -->
												<select class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
												<select class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
												<select class="select form-control" name="{field_label}_year">{dropdownlist:years,field_value_year}</select> @
												<select class="select form-control" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
												<select class="select form-control" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>
											<!-- ENDIF -->

										</dd><div class="clearfix"></div>

									<!-- END profile_fields -->

								</dl>
								<div class="clear"></div>
							</div>
						<!-- END profile_groups -->
						<!-- IF error_profile_section -->
							<script type="text/javascript" language="javascript">switch_tabs('profile_data', {error_profile_section}, 1, 1)</script>
						<!-- ELSEIF post.current_profile_section -->
							<script type="text/javascript" language="javascript">switch_tabs('profile_data', {post.current_profile_section}, 1, 1)</script>
						<!-- ELSE -->
							<script type="text/javascript" language="javascript">switch_tabs('profile_data', 0, 1, 1)</script>
						<!-- ENDIF -->
						<div class="edit-profile-submit"><input class="submit btn" type="submit" name="submit" value="{lang:"profile","submit"}" /></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<input type="hidden" name="isprofile" value="1" />
			<input type="hidden" name="current_profile_section" id="current_profile_section" value="<!-- IF post.current_profile_section -->{post.current_profile_section}<!-- ELSE -->0<!-- ENDIF -->" />
		</form>

	</div>

<!-- ENDIF -->
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- /RIGHT CONTENT -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->