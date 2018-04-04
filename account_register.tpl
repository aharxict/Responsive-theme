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

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:20px;">
							<h2>{lang:"register","app_register"} - {htmlentities:settings.app_title}</h2>
							</div>

                                <div class="clearfix"></div>
<div>
<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

<form class="form-horizontal" name="register" method="post" action="" enctype="multipart/form-data" style="padding-left:5px;">
  <fieldset>
    <legend style="font-size:16px; padding-bottom:5px; margin-left:-5px; color: #535B60;">Login information</legend>
    
    <div class="form-group">
      <label for="field_online_only" class="col-lg-2 control-label">{lang:"register","username"} *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_username" type="text" onblur="checkusername(this.value)" name="username" value="{registration_username}" maxlength="32" size="32" required="required">
        <span id="field_username_status" class="info wide" style="display:none"></span>
      </div>
    </div>
    <div class="form-group">
      <label for="field_password" class="col-lg-2 control-label">{lang:"register","password"} *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="inputPassword" type="password" name="password" value="{registration_password}" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="field_password_confirm" class="col-lg-2 control-label">{lang:"register","password_confirm"} *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_password_confirm" type="password" name="password_confirm" value="{registration_password_confirm}" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="field_email" class="col-lg-2 control-label">{lang:"register","email"} *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_email" type="text" name="email" value="{registration_email}" size="32" maxlength="64" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="field_email_confirm" class="col-lg-2 control-label">{lang:"register","email_confirm"} *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_email_confirm" type="text" name="email_confirm" value="{registration_email_confirm}" size="32" maxlength="64" required="required">
      </div>
    </div>
    <div class="form-group" <!-- IF count.profiletypes == "1" -->style="display:none"<!-- ENDIF -->>
      <label for="field_type_id" class="col-lg-2 control-label">{lang:"register","user_type"}</label>
      <div class="col-lg-10" <!-- IF count.profiletypes == "1" -->style="display:none"<!-- ENDIF -->>
        <select name="type_id" class="select form-control" id="field_type_id" onchange="toggleProfileFields(this.value);return false;" >
		{dropdownlist:profiletypes,registration_type_id}
		</select>
      </div>
    </div>
    
    <!-- GENERAL START HERE -->
    <!-- BEGIN profile_types -->
<div id="profile_type_{type_id}" class="profile_type">

<!-- BEGIN profile_groups -->

<div class="form">
	<div class="fieldset">
		<legend style="font-size:16px; padding-bottom:5px; margin-left:-5px; color: #535B60;">{group_name}</legend>
			<dl class="fieldset fieldgrid break">

<!-- BEGIN profile_fields -->
<dt><label for="field_{field_label}" id="field_{field_label}">{field_name} {ifelse:field_required,"1","<i>*</i>",""}</label></dt>

<dd style="padding-bottom:10px;">

<!-- IF field_type = "text" -->
<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
<!-- ELSEIF field_type = "image" -->
<input type="file" class="text" id="field_{field_label}" name="{field_label}" />
<!-- IF field_value != "" -->
<a target="_blank" href="{top.virtual_pic_path}{field_value}">View file</a>&nbsp;
<label><input class="checkbox" id="{field_label}_remove" name="{field_label}_remove" type="checkbox" value="1">&nbsp;{lang:"profile","remove"}</label>
<!-- ENDIF -->

<!-- ELSEIF field_type = "textarea" -->
<textarea class="textarea" id="field_{field_label}" name="{field_label}" style="width: {field_width}; height: {field_height}">{htmlentities:field_value}</textarea>

<!-- ELSEIF field_type = "checkbox" -->
<ul class="fielditems" style="margin-bottom:10px;">
	<!-- INBEGIN field_items -->
	<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;">{checkboxes:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
	<!-- END field_items -->
<div class="clearfix"></div></ul>
<div class="clear"></div>

<!-- ELSEIF field_type = "radio" -->
<ul class="fielditems">
	<!-- INBEGIN field_items -->
	<li><label>{radiobuttons:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
	<!-- END field_items -->
</ul>
<div class="clear"></div>

<!-- ELSEIF field_type = "combo" -->
<select class="select form-control" id="field_{field_label}" name="{field_label}">{dropdownlist:field_items,field_value}</select>

<!-- ELSEIF field_type = "birthday" -->
	<!-- IF session.timeformat -->
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
	<!-- ELSE -->
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
	<!-- ENDIF -->
	<select style="width:auto; float:left;" class="select form-control" name="{field_label}_year">{dropdownlist:top.birthday_years,field_value_year}</select>
    <div class="clearfix"></div>

<!-- ELSEIF field_type = "date" -->
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_year">{dropdownlist:years,field_value_year}</select>

<!-- ELSEIF field_type = "time" -->
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>

<!-- ELSEIF field_type = "datetime" -->
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_year">{dropdownlist:years,field_value_year}</select> @
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>
<!-- ENDIF -->
</dd>

<!-- END profile_fields -->
</dl>
<div class="clear"></div>
</div>
</div>

<!-- END profile_groups -->
</div>
<!-- END profile_types -->

    
	<script type="text/javascript" language="javascript">
	<!--
	function toggleProfileFields(type_id)
	{
		$("div.profile_type").hide();
		if ( type_id )
		{
			$("#profile_type_" + type_id).show();
		}
	}
	toggleProfileFields('{registration_type_id}');
	-->
	</script>

<!-- ENDIF -->

<!-- GENERAL ENDS HERE -->
<hr />
    
    <!-- IF settings.enable_registration_photo -->
    <div class="form-group">
      <label for="field_photo" class="col-lg-2 control-label">{lang:"register","select_picture"} <!-- IF settings.require_registration_photo --><i>*</i><!-- ENDIF --></label>
      <div class="col-lg-10">
        <input class="text form-control" type="file" id="field_photo" name="photo" value="">
      </div>
    </div>
    <!-- ENDIF -->
    <!-- IF is_captcha -->
    <div class="form-group">
      <label for="field_verification" class="col-lg-2 control-label">{lang:"register","verify_number"}</label>
      <div class="col-lg-10">
        <input class="form-control text captcha" id="field_verification" name="captcha" maxlength="5"> <img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
      </div>
    </div>
    <!-- ENDIF -->
    <!-- IF is_tos -->
    <div class="form-group" style="padding-left:15px; padding-right:15px;">
	<label for="field_tos">{lang:"register","accept_tos"} <a target="_blank" href="{virtual_path}{ifelse:settings.fancy_urls,"1","page/tos/","index.php?m=pages&p=tos"}">{lang:"register","tos"}</a></label>
        <div class="form-inline">
        <select class="select form-control" id="field_tos" name="tos">
          {dropdownlist:top.yesnobox,registration_tos}
        </select>
        </div>
    </div>
    <!-- ENDIF --> 
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2" style="padding-left:0px; margin-left:15px;">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </fieldset>
<input type="hidden" name="isregister" value="1" />
</form>

                        <!-- b f -->
                                  <form name="register" method="post" id="regwrapper" class="form-horizontal clearfix" action="{virtual_path}account/register" onsubmit="return validateRequired() " enctype="multipart/form-data">

                            <div id="vt_reg_tab1">
                                <div class="form-group">
                                    <label class="control-label col-sm-3">{lang:"register","username"}</label>
                                    <div class="col-sm-12 icon-field user-field">
                                        <input type="text" class="form-control validate_required"   placeholder="{lang:"register","username"}" onkeypress="validateCurrent(this)" id="field_h_username" onblur="checkusername(this.value);validateCurrent(this)" name="username" value="{registration_username}" maxlength="32" size="32" />
                                    </div>
                                </div>

                                <div id="field_h_username_status" style="display:none"></div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">{lang:"register","password"}</label>
                                    <div class="col-sm-12 icon-field password-field">
                                        <input type="password"   placeholder="{lang:"register","password"}"  class="form-control validate_required" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" id="field_h_password" name="password" value="{registration_password}" size="20" maxlength="32" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3 ">{lang:"register","password_confirm"}</label>
                                    <div class="col-sm-12 icon-field password-field">
                                        <input type="password"  placeholder="{lang:"register","password_confirm"}"  class="form-control validate_required" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" id="field_h_password_confirm" name="password_confirm" value="{registration_password_confirm}" size="20" maxlength="32" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3 ">{lang:"register","email"}</label>
                                    <div class="col-sm-12 icon-field email-field">
                                        <input type="email"  placeholder="{lang:"register","email"}"  class="form-control validate_required" id="field_h_email" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" name="email" value="{registration_email}" size="32" maxlength="64" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3 ">{lang:"register","email_confirm"}</label>
                                    <div class="col-sm-12 icon-field email-field">
                                        <input type="email"  placeholder="{lang:"register","email_confirm"}"  class="form-control validate_required" id="field_h_email_confirm" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" name="email_confirm" value="{registration_email_confirm}" size="32" maxlength="64" >
                                    </div>
                                </div>


                                <div class="form-group"  <!-- IF count.profiletypes == "1" --> style="display:none" <!-- ENDIF --> >

                                <div class="col-sm-12">
                                    <select name="type_id" class="form-control" id="field_h_type_id" onchange="toggleProfileFields(this.value);return false;" >
                                        {dropdownlist:profiletypes,registration_type_id}
                                    </select>
                                </div>
                            </div>


                            <button onclick="return openSecondRegTab()" style="display:block" id="reg_second" class="btn btn-success ">{vldthemes:a="lang",key="register_nextstep"}</button>
                    </div>
                    <div id="vt_reg_tab2">

                        <!-- BEGIN profile_types -->

                        <div id="profile_type_{type_id}" class="profile_type" style="<!-- IF type_id != top.registration_type_id --> display:none <!-- ENDIF -->">

                            <!-- BEGIN profile_groups -->

                            <!-- BEGIN profile_fields -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="field_h_{field_label}">{field_name} {ifelse:field_required,"1","<i>*</i>",""}</label>
                                <div class="col-sm-10">
                                    <!-- IF field_type = "text" -->
                                    <input type="text" class="form-control" id="field_h_{field_label}" name="{field_label}" style="width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
                                    <!-- ELSEIF field_type = "image" -->
                                    <input type="file" class=" form-control" id="field_h_{field_label}" name="{field_label}" />
                                    <!-- IF field_value != "" -->
                                    <a target="_blank" href="{top.virtual_pic_path}{field_value}">View file</a>&nbsp;
                                    <label><input class="checkbox" id="{field_label}_remove" name="{field_label}_remove" type="checkbox" value="1">&nbsp;{lang:"profile","remove"}</label>
                                    <!-- ENDIF -->
                                    <!-- ELSEIF field_type = "textarea" -->
                                    <textarea class="form-control" id="field_h_{field_label}" name="{field_label}" style="width: {field_width}; height: {field_height}">{htmlentities:field_value}</textarea>
                                    <!-- ELSEIF field_type = "checkbox" -->
                                    <ul class="fielditems">
                                        <!-- INBEGIN field_items -->
                                        <li><label>{checkboxes:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
                                        <!-- END field_items -->
                                    </ul>

                                    <!-- ELSEIF field_type = "radio" -->
                                    <ul class="fielditems">
                                        <!-- INBEGIN field_items -->
                                        <li><label>{radiobuttons:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
                                        <!-- END field_items -->
                                    </ul>

                                    <!-- ELSEIF field_type = "combo" -->
                                    <select class="form-control select" id="field_h_{field_label}" name="{field_label}">{dropdownlist:field_items,field_value}</select>
                                    <!-- ELSEIF field_type = "birthday" -->
                                    <div class="form-inline">
                                        <!-- IF session.timeformat -->
                                        <select class="form-control select" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
                                        <select class="form-control select" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
                                        <!-- ELSE -->
                                        <select class="form-control select" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
                                        <select class="form-control select" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
                                        <!-- ENDIF -->

                                        <select class="form-control select" name="{field_label}_year">{dropdownlist:top.birthday_years,field_value_year}</select>
                                    </div>
                                    <!-- ELSEIF field_type = "date" -->
                                    <div class="form-inline">
                                        <select class="form-control select" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
                                        <select class="form-control select" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
                                        <select class="form-control select" name="{field_label}_year">{dropdownlist:years,field_value_year}</select>
                                    </div>
                                    <!-- ELSEIF field_type = "time" -->
                                    <div class="form-inline">
                                        <select class="form-control select" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
                                        <select class="form-control select" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>
                                    </div>
                                    <!-- ELSEIF field_type = "datetime" -->
                                    <div class="form-inline">
                                        <select class="form-control select" name="{field_label}_month">{dropdownlist:top.months,field_value_month}</select>
                                        <select class="form-control select" name="{field_label}_day">{dropdownlist:top.days,field_value_day}</select>
                                        <select class="form-control select" name="{field_label}_year">{dropdownlist:years,field_value_year}</select> @
                                        <select class="form-control select" name="{field_label}_hour">{dropdownlist:top.hours,field_value_hour}</select>
                                        <select class="form-control select" name="{field_label}_minute">{dropdownlist:top.minutes,field_value_minute}</select>
                                    </div>
                                    <!-- ENDIF -->

                                </div>
                            </div>
                            <!-- END profile_fields -->


                            <!-- END profile_groups -->

                        </div>

                        <!-- END profile_types -->

                        <!-- IF settings.enable_registration_photo -->
                        <div class="form-group" >
                            <label class="control-label col-sm-2 ">{vldthemes:a="lang",key="reg_avatar"}</label>
                            <div class="col-sm-10">
                                <input id="field_h_photo" type="file" name="photo" value="" >

                            </div>
                        </div>
                        <!-- ENDIF -->

                        <!-- IF is_captcha -->
                        <div class="form-group" >
                            <label class="control-label col-sm-4 ">{lang:"register","verify_number"}</label>
                            <div class="col-sm-8 form-inline">
                                <input type="form-control" id="field_captcha" class="form-control" name="captcha" maxlength="5"  />
                                <img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" />
                            </div>
                        </div>
                        <!-- ENDIF -->

                        <!-- IF is_tos -->
                        <div class="form-group" >
                            <!-- <label class="control-label col-sm-3 ">&nbsp;</label> -->
                            <div class="col-sm-12 text-center">
                                <input type="checkbox" value="1" name="tos"style="width: auto !important;">
                                <small>{lang:"register","accept_tos"} <a target="_blank" href="{virtual_path}{ifelse:settings.fancy_urls,"1","page/tos/","index.php?m=pages&p=tos"}">{lang:"register","tos"}</a></small>
                            </div>
                        </div>
                        <!-- ENDIF -->


                        <input type="hidden" name="isregister" value="1" />
                        <button onclick="return openFirstRegTab()" style="display:block" id="reg_back" class="btn-default btn pull-left">Back</button>
                        <input id="reg_submit" class="btn-primary btn pull-right" name="submit" value="{lang:"register","submit"}" type="submit" />

                    </div>


                    <script type="text/javascript" language="javascript">

                        function toggleProfileFields(type_id){
                            $("div.profile_type").hide();
                            if ( type_id ){ $("#profile_type_" + type_id).show(); }
                        }

                        toggleProfileFields('{registration_type_id}');

                    </script>


                    </form>
                        <!-- e f -->

</div>



							</div><div class="clearfix" style="margin-bottom:10px;"></div>
						</div><!-- INCLUDE login_form_sidebar.tpl -->
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->