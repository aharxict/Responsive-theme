<?php global $PREFS, $TEMPLATE, $SESSION;

/*
=====================================================
This file has been automatically generated. Do not
modify unless you know what you are doing.
=====================================================
vldPersonals - by VLD Interactive Inc.
----------------------------------------------------
http://www.vldpersonals.com/
http://www.vldinteractive.com/
-----------------------------------------------------
Copyright (c) 2005-2017 VLD Interactive Inc.
=====================================================
THIS IS COPYRIGHTED SOFTWARE
PLEASE READ THE LICENSE AGREEMENT
http://www.vldpersonals.com/agreement/
=====================================================
*/

include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/core/ext.htmlentities.php";
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.checkboxes.php";
include_once SYS_PATH . "includes/ext/core/ext.radiobuttons.php";
include_once SYS_PATH . "includes/ext/ext.vldthemes.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="section section-header">
<div class="container">
<div class="row">

<?php if ( $this->objval($_obj,'loggedin') ) { ?>
<?php $_temp_inc = $TEMPLATE->output('user-menu.tpl',0); include($_temp_inc); ?>
<?php } ?>

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:20px;">
							<h2><?php echo vldext_lang("register","app_register"); ?> - <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></h2>
							</div>

                                <div class="clearfix"></div>
<div>
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

<form class="form-horizontal" name="register" method="post" action="" enctype="multipart/form-data" style="padding-left:5px;">
  <fieldset>
    <legend style="font-size:16px; padding-bottom:5px; margin-left:-5px; color: #535B60;">Login information</legend>
    
    <div class="form-group">
      <label for="field_online_only" class="col-lg-2 control-label"><?php echo vldext_lang("register","username"); ?> *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_username" type="text" onblur="checkusername(this.value)" name="username" value="<?php echo isset($_obj['registration_username']) ? $_obj['registration_username'] : "&#123;registration_username&#125;"; ?>" maxlength="32" size="32" required="required">
        <span id="field_username_status" class="info wide" style="display:none"></span>
      </div>
    </div>
    <div class="form-group">
      <label for="field_password" class="col-lg-2 control-label"><?php echo vldext_lang("register","password"); ?> *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="inputPassword" type="password" name="password" value="<?php echo isset($_obj['registration_password']) ? $_obj['registration_password'] : "&#123;registration_password&#125;"; ?>" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="field_password_confirm" class="col-lg-2 control-label"><?php echo vldext_lang("register","password_confirm"); ?> *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_password_confirm" type="password" name="password_confirm" value="<?php echo isset($_obj['registration_password_confirm']) ? $_obj['registration_password_confirm'] : "&#123;registration_password_confirm&#125;"; ?>" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="field_email" class="col-lg-2 control-label"><?php echo vldext_lang("register","email"); ?> *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_email" type="text" name="email" value="<?php echo isset($_obj['registration_email']) ? $_obj['registration_email'] : "&#123;registration_email&#125;"; ?>" size="32" maxlength="64" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="field_email_confirm" class="col-lg-2 control-label"><?php echo vldext_lang("register","email_confirm"); ?> *</label>
      <div class="col-lg-10">
        <input class="text form-control" id="field_email_confirm" type="text" name="email_confirm" value="<?php echo isset($_obj['registration_email_confirm']) ? $_obj['registration_email_confirm'] : "&#123;registration_email_confirm&#125;"; ?>" size="32" maxlength="64" required="required">
      </div>
    </div>
    <div class="form-group" <?php if ( @count($this->objval($_obj,'profiletypes'))  == "1") { ?>style="display:none"<?php } ?>>
      <label for="field_type_id" class="col-lg-2 control-label"><?php echo vldext_lang("register","user_type"); ?></label>
      <div class="col-lg-10" <?php if ( @count($this->objval($_obj,'profiletypes'))  == "1") { ?>style="display:none"<?php } ?>>
        <select name="type_id" class="select form-control" id="field_type_id" onchange="toggleProfileFields(this.value);return false;" >
		<?php echo vldext_dropdownlist($_obj['profiletypes'],$_obj['registration_type_id']); ?>
		</select>
      </div>
    </div>
    
    <!-- GENERAL START HERE -->
    <?php if (!empty($_obj['profile_types'])){ if (!is_array($_obj['profile_types'])) $_obj['profile_types']=array(array('profile_types'=>$_obj['profile_types'])); $_tmp_arr_keys=array_keys($_obj['profile_types']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_types']=array(0=>$_obj['profile_types']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_types']=count($_obj['profile_types']); foreach ($_obj['profile_types'] as $rowcnt=>$profile_types) { $profile_types['rowcnt']=$rowcnt; $profile_types['rowpos']=$rowcnt+1; $profile_types['rownum']=$rowcnt%2+1; $profile_types['rowtotal']=$_cnt['profile_types']; $profile_types['rowfirst']=$rowcnt==0?1:0; $profile_types['rowlast']=($rowcnt+1)==$_cnt['profile_types']?1:0; $_obj=&$profile_types; ?>
<div id="profile_type_<?php echo isset($_obj['type_id']) ? $_obj['type_id'] : "&#123;type_id&#125;"; ?>" class="profile_type">

<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>

<div class="form">
	<div class="fieldset">
		<legend style="font-size:16px; padding-bottom:5px; margin-left:-5px; color: #535B60;"><?php echo isset($_obj['group_name']) ? $_obj['group_name'] : "&#123;group_name&#125;"; ?></legend>
			<dl class="fieldset fieldgrid break">

<?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>
<dt><label for="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?> <?php echo vldext_ifelse($_obj['field_required'],"1","<i>*</i>",""); ?></label></dt>

<dd style="padding-bottom:10px;">

<?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
<?php } elseif ( $this->objval($_obj,'field_type')  == "image") { ?>
<input type="file" class="text" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" />
<?php if ( $this->objval($_obj,'field_value')  != "") { ?>
<a target="_blank" href="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['field_value']) ? $_obj['field_value'] : "&#123;field_value&#125;"; ?>">View file</a>&nbsp;
<label><input class="checkbox" id="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" type="checkbox" value="1">&nbsp;<?php echo vldext_lang("profile","remove"); ?></label>
<?php } ?>

<?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
<textarea class="textarea" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>; height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>

<?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
<ul class="fielditems" style="margin-bottom:10px;">
	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
	<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
<div class="clearfix"></div></ul>
<div class="clear"></div>

<?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
<ul class="fielditems">
	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
	<li><label><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
</ul>
<div class="clear"></div>

<?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?></select>

<?php } elseif ( $this->objval($_obj,'field_type')  == "birthday") { ?>
	<?php if ( @$SESSION->conf['timeformat'] ) { ?>
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
	<?php } else { ?>
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
	<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
	<?php } ?>
	<select style="width:auto; float:left;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_stack[0]['birthday_years'],$_obj['field_value_year']); ?></select>
    <div class="clearfix"></div>

<?php } elseif ( $this->objval($_obj,'field_type')  == "date") { ?>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select>

<?php } elseif ( $this->objval($_obj,'field_type')  == "time") { ?>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>

<?php } elseif ( $this->objval($_obj,'field_type')  == "datetime") { ?>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select> @
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>
<?php } ?>
</dd>

<?php } $_obj=$_stack[--$_stack_cnt];} ?>
</dl>
<div class="clear"></div>
</div>
</div>

<?php } $_obj=$_stack[--$_stack_cnt];} ?>
</div>
<?php } $_obj=$_stack[--$_stack_cnt];} ?>

    
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
	toggleProfileFields('<?php echo isset($_obj['registration_type_id']) ? $_obj['registration_type_id'] : "&#123;registration_type_id&#125;"; ?>');
	-->
	</script>

<?php } ?>

<!-- GENERAL ENDS HERE -->
<hr />
    
    <?php if ( @$PREFS->conf['enable_registration_photo'] ) { ?>
    <div class="form-group">
      <label for="field_photo" class="col-lg-2 control-label"><?php echo vldext_lang("register","select_picture"); ?> <?php if ( @$PREFS->conf['require_registration_photo'] ) { ?><i>*</i><?php } ?></label>
      <div class="col-lg-10">
        <input class="text form-control" type="file" id="field_photo" name="photo" value="">
      </div>
    </div>
    <?php } ?>
    <?php if ( $this->objval($_obj,'is_captcha') ) { ?>
    <div class="form-group">
      <label for="field_verification" class="col-lg-2 control-label"><?php echo vldext_lang("register","verify_number"); ?></label>
      <div class="col-lg-10">
        <input class="form-control text captcha" id="field_verification" name="captcha" maxlength="5"> <img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
      </div>
    </div>
    <?php } ?>
    <?php if ( $this->objval($_obj,'is_tos') ) { ?>
    <div class="form-group" style="padding-left:15px; padding-right:15px;">
	<label for="field_tos"><?php echo vldext_lang("register","accept_tos"); ?> <a target="_blank" href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","page/tos/","index.php?m=pages&p=tos"); ?>"><?php echo vldext_lang("register","tos"); ?></a></label>
        <div class="form-inline">
        <select class="select form-control" id="field_tos" name="tos">
          <?php echo vldext_dropdownlist($_stack[0]['yesnobox'],$_obj['registration_tos']); ?>
        </select>
        </div>
    </div>
    <?php } ?> 
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
                                  <form name="register" method="post" id="regwrapper" class="form-horizontal clearfix" action="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>account/register" onsubmit="return validateRequired() " enctype="multipart/form-data">

                            <div id="vt_reg_tab1">
                                <div class="form-group">
                                    <label class="control-label col-sm-3"><?php echo vldext_lang("register","username"); ?></label>
                                    <div class="col-sm-12 icon-field user-field">
                                        <input type="text" class="form-control validate_required"   placeholder="<?php echo vldext_lang("register","username"); ?>" onkeypress="validateCurrent(this)" id="field_h_username" onblur="checkusername(this.value);validateCurrent(this)" name="username" value="<?php echo isset($_obj['registration_username']) ? $_obj['registration_username'] : "&#123;registration_username&#125;"; ?>" maxlength="32" size="32" />
                                    </div>
                                </div>

                                <div id="field_h_username_status" style="display:none"></div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3"><?php echo vldext_lang("register","password"); ?></label>
                                    <div class="col-sm-12 icon-field password-field">
                                        <input type="password"   placeholder="<?php echo vldext_lang("register","password"); ?>"  class="form-control validate_required" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" id="field_h_password" name="password" value="<?php echo isset($_obj['registration_password']) ? $_obj['registration_password'] : "&#123;registration_password&#125;"; ?>" size="20" maxlength="32" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3 "><?php echo vldext_lang("register","password_confirm"); ?></label>
                                    <div class="col-sm-12 icon-field password-field">
                                        <input type="password"  placeholder="<?php echo vldext_lang("register","password_confirm"); ?>"  class="form-control validate_required" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" id="field_h_password_confirm" name="password_confirm" value="<?php echo isset($_obj['registration_password_confirm']) ? $_obj['registration_password_confirm'] : "&#123;registration_password_confirm&#125;"; ?>" size="20" maxlength="32" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3 "><?php echo vldext_lang("register","email"); ?></label>
                                    <div class="col-sm-12 icon-field email-field">
                                        <input type="email"  placeholder="<?php echo vldext_lang("register","email"); ?>"  class="form-control validate_required" id="field_h_email" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" name="email" value="<?php echo isset($_obj['registration_email']) ? $_obj['registration_email'] : "&#123;registration_email&#125;"; ?>" size="32" maxlength="64" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3 "><?php echo vldext_lang("register","email_confirm"); ?></label>
                                    <div class="col-sm-12 icon-field email-field">
                                        <input type="email"  placeholder="<?php echo vldext_lang("register","email_confirm"); ?>"  class="form-control validate_required" id="field_h_email_confirm" onkeypress="validateCurrent(this)" onblur="validateCurrent(this)" name="email_confirm" value="<?php echo isset($_obj['registration_email_confirm']) ? $_obj['registration_email_confirm'] : "&#123;registration_email_confirm&#125;"; ?>" size="32" maxlength="64" >
                                    </div>
                                </div>


                                <div class="form-group"  <?php if ( @count($this->objval($_obj,'profiletypes'))  == "1") { ?> style="display:none" <?php } ?> >

                                <div class="col-sm-12">
                                    <select name="type_id" class="form-control" id="field_h_type_id" onchange="toggleProfileFields(this.value);return false;" >
                                        <?php echo vldext_dropdownlist($_obj['profiletypes'],$_obj['registration_type_id']); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="button-row">
                                <button onclick="return openSecondRegTab()" style="display:block" id="reg_second" class="btn btn-success ">Registrieren</button>
                                <div onclick="return openLoginTab()" style="display:block" id="login_tab" class="btn btn-success ">Anmelden</div>
                            </div>

                    </div>
                    <div id="vt_reg_tab2">

                        <?php if (!empty($_obj['profile_types'])){ if (!is_array($_obj['profile_types'])) $_obj['profile_types']=array(array('profile_types'=>$_obj['profile_types'])); $_tmp_arr_keys=array_keys($_obj['profile_types']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_types']=array(0=>$_obj['profile_types']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_types']=count($_obj['profile_types']); foreach ($_obj['profile_types'] as $rowcnt=>$profile_types) { $profile_types['rowcnt']=$rowcnt; $profile_types['rowpos']=$rowcnt+1; $profile_types['rownum']=$rowcnt%2+1; $profile_types['rowtotal']=$_cnt['profile_types']; $profile_types['rowfirst']=$rowcnt==0?1:0; $profile_types['rowlast']=($rowcnt+1)==$_cnt['profile_types']?1:0; $_obj=&$profile_types; ?>

                        <div id="profile_type_<?php echo isset($_obj['type_id']) ? $_obj['type_id'] : "&#123;type_id&#125;"; ?>" class="profile_type" style="<?php if ( $this->objval($_obj,'type_id')  !=  $this->objval($_stack[0],'registration_type_id') ) { ?> display:none <?php } ?>">

                            <?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>

                            <?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="field_h_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?> <?php echo vldext_ifelse($_obj['field_required'],"1","<i>*</i>",""); ?></label>
                                <div class="col-sm-10">
                                    <?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
                                    <input type="text" class="form-control" id="field_h_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "image") { ?>
                                    <input type="file" class=" form-control" id="field_h_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" />
                                    <?php if ( $this->objval($_obj,'field_value')  != "") { ?>
                                    <a target="_blank" href="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['field_value']) ? $_obj['field_value'] : "&#123;field_value&#125;"; ?>">View file</a>&nbsp;
                                    <label><input class="checkbox" id="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" type="checkbox" value="1">&nbsp;<?php echo vldext_lang("profile","remove"); ?></label>
                                    <?php } ?>
                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
                                    <textarea class="form-control" id="field_h_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>; height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>
                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
                                    <ul class="fielditems">
                                        <?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
                                        <li><label><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
                                        <?php } $_obj=$_stack[--$_stack_cnt];} ?>
                                    </ul>

                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
                                    <ul class="fielditems">
                                        <?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
                                        <li><label><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
                                        <?php } $_obj=$_stack[--$_stack_cnt];} ?>
                                    </ul>

                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
                                    <select class="form-control select" id="field_h_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?></select>
                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "birthday") { ?>
                                    <div class="form-inline">
                                        <?php if ( @$SESSION->conf['timeformat'] ) { ?>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
                                        <?php } else { ?>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
                                        <?php } ?>

                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_stack[0]['birthday_years'],$_obj['field_value_year']); ?></select>
                                    </div>
                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "date") { ?>
                                    <div class="form-inline">
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select>
                                    </div>
                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "time") { ?>
                                    <div class="form-inline">
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>
                                    </div>
                                    <?php } elseif ( $this->objval($_obj,'field_type')  == "datetime") { ?>
                                    <div class="form-inline">
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select> @
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
                                        <select class="form-control select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <?php } $_obj=$_stack[--$_stack_cnt];} ?>


                            <?php } $_obj=$_stack[--$_stack_cnt];} ?>

                        </div>

                        <?php } $_obj=$_stack[--$_stack_cnt];} ?>

                        <?php if ( @$PREFS->conf['enable_registration_photo'] ) { ?>
                        <div class="form-group" >
                            <label class="control-label col-sm-2 "><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"reg_avatar")); ?></label>
                            <div class="col-sm-10">
                                <input id="field_h_photo" type="file" name="photo" value="" >

                            </div>
                        </div>
                        <?php } ?>

                        <?php if ( $this->objval($_obj,'is_captcha') ) { ?>
                        <div class="form-group" >
                            <label class="control-label col-sm-4 "><?php echo vldext_lang("register","verify_number"); ?></label>
                            <div class="col-sm-8 form-inline">
                                <input type="form-control" id="field_captcha" class="form-control" name="captcha" maxlength="5"  />
                                <img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" />
                            </div>
                        </div>
                        <?php } ?>

                        <?php if ( $this->objval($_obj,'is_tos') ) { ?>
                        <div class="form-group" >
                            <!-- <label class="control-label col-sm-3 ">&nbsp;</label> -->
                            <div class="col-sm-12 text-center">
                                <input type="checkbox" value="1" name="tos"style="width: auto !important;">
                                <small><?php echo vldext_lang("register","accept_tos"); ?> <a target="_blank" href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","page/tos/","index.php?m=pages&p=tos"); ?>"><?php echo vldext_lang("register","tos"); ?></a></small>
                            </div>
                        </div>
                        <?php } ?>


                        <input type="hidden" name="isregister" value="1" />
                        <button onclick="return openFirstRegTab()" style="display:block" id="reg_back" class="btn-default btn pull-left">Zurück</button>
                        <input id="reg_submit" class="btn-primary btn pull-right" name="submit" value="<?php echo vldext_lang("register","submit"); ?>" type="submit" />

                    </div>



                    <script type="text/javascript" language="javascript">

                        function toggleProfileFields(type_id){
                            $("div.profile_type").hide();
                            if ( type_id ){ $("#profile_type_" + type_id).show(); }
                        }

                        toggleProfileFields('<?php echo isset($_obj['registration_type_id']) ? $_obj['registration_type_id'] : "&#123;registration_type_id&#125;"; ?>');

                    </script>


                    </form>
                        <!-- e f -->

</div>



							</div><div class="clearfix" style="margin-bottom:10px;"></div>
						</div><?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>