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
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.htmlentities.php";
include_once SYS_PATH . "includes/ext/core/ext.checkboxes.php";
include_once SYS_PATH . "includes/ext/core/ext.radiobuttons.php";
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="section section-header">
<div class="container">
<div class="row">

<?php if ( $this->objval($_obj,'loggedin') ) { ?>
<?php $_temp_inc = $TEMPLATE->output('user-menu.tpl',0); include($_temp_inc); ?>
<?php } ?>

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
                
                <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
				<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>">
                <img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture_large']) ? $SESSION->conf['picture_large'] : "&#123;picture_large&#125;"; ?>" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<?php } else { ?>
				<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>">
                <img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<?php } ?>
                
			</div>
            </div>
			
            <div class="hide-mobile">
            <?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
            </div>
			
            <div class="hide-mobile">
            <?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>					
            </div>
            
		</div>
		<!-- /LEFT SIDEBAR -->
					

		<!-- RIGHT CONTENT -->
		<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("profile","app_profile"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_profile" class="btn active"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("core","usermenu_profile"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_upgrade" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo vldext_lang("core","usermenu_upgrade"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_profile">

		<form name="profile" method="post" action="" enctype="multipart/form-data">

			<div class="typepage">
				<div class="dataitem single">

					<div class="suboptions_wrap">
						<div class="suboptions">
							<ul class="nav nav-tabs  nav-append-content" style="border-bottom: 1px solid #3abeb1;">
								<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>
									<li><a href="javascript:void(0)" id="profile_data_<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_tab" onclick="switch_tabs('profile_data', <?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>, 0, 1);$('#current_profile_section').val(<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>);"><?php echo isset($_obj['group_name']) ? $_obj['group_name'] : "&#123;group_name&#125;"; ?></a></li>
								<?php } $_obj=$_stack[--$_stack_cnt];} ?>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>

					<div class="form" style="border: 1px #3abeb1 solid; padding:20px 13px 13px 13px; border-radius: 3px 3px 3px 3px; margin-top:-1px;">
						<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>
							<div class="fieldset " id="profile_data_<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_content" style="display: none;">
								<dl class="fieldset fieldgrid break">

    								<?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>

    									<dt><label for="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?> <?php echo vldext_ifelse($_obj['field_required'],"1","<i>*</i>",""); ?></label></dt>
										<dd>

											<?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
												<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="margin-bottom:10px; width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
											<?php } elseif ( $this->objval($_obj,'field_type')  == "image") { ?>
												<input type="file" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" />
												<?php if ( $this->objval($_obj,'field_old_value')  != "") { ?>
													<a target="_blank" href="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['field_value']) ? $_obj['field_value'] : "&#123;field_value&#125;"; ?>">View file</a>&nbsp;
													<label><input class="checkbox" id="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" type="checkbox" value="1">&nbsp;<?php echo vldext_lang("profile","remove"); ?></label>
												<?php } ?>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
												<textarea class="textarea textarea_data form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" rows="6" cols="40" style="height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
	                                                <ul class="fielditems" style="margin-bottom:10px;">
													<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
														<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
													<?php } $_obj=$_stack[--$_stack_cnt];} ?>
												<div class="clearfix"></div></ul>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
												<ul class="fielditems">
													<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
														<li><label><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
													<?php } $_obj=$_stack[--$_stack_cnt];} ?>
												</ul>
												<div class="clear"></div>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
												<select class="select form-control" style="margin-bottom:10px;" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>">
													<?php if ( $this->objval($_obj,'field_label')  != "gender1" &&  $this->objval($_obj,'field_label')  != "gender2") { ?>
														<option value=""><?php echo vldext_lang("core","user_field_none"); ?></option>
													<?php } ?>
													<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
												</select>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "birthday") { ?>
												<?php if ( @$SESSION->conf['timeformat'] ) { ?>
													<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
													<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
												<?php } else { ?>
													<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
													<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
												<?php } ?>
												<select style="width:auto; float:left; margin-right:5px;" class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_stack[0]['birthday_years'],$_obj['field_value_year']); ?></select>
                                                <div style="margin-bottom:10px;" class="clearfix"></div>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "date") { ?>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "time") { ?>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "datetime") { ?>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select> @
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
												<select class="select form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>
											<?php } ?>

										</dd><div class="clearfix"></div>

									<?php } $_obj=$_stack[--$_stack_cnt];} ?>

								</dl>
								<div class="clear"></div>
							</div>
						<?php } $_obj=$_stack[--$_stack_cnt];} ?>
						<?php if ( $this->objval($_obj,'error_profile_section') ) { ?>
							<script type="text/javascript" language="javascript">switch_tabs('profile_data', <?php echo isset($_obj['error_profile_section']) ? $_obj['error_profile_section'] : "&#123;error_profile_section&#125;"; ?>, 1, 1)</script>
						<?php } elseif ( @$_POST['current_profile_section'] ) { ?>
							<script type="text/javascript" language="javascript">switch_tabs('profile_data', <?php echo isset($_POST['current_profile_section']) ? $_POST['current_profile_section'] : ""; ?>, 1, 1)</script>
						<?php } else { ?>
							<script type="text/javascript" language="javascript">switch_tabs('profile_data', 0, 1, 1)</script>
						<?php } ?>
						<div class="edit-profile-submit"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("profile","submit"); ?>" /></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<input type="hidden" name="isprofile" value="1" />
			<input type="hidden" name="current_profile_section" id="current_profile_section" value="<?php if ( @$_POST['current_profile_section'] ) { ?><?php echo isset($_POST['current_profile_section']) ? $_POST['current_profile_section'] : ""; ?><?php } else { ?>0<?php } ?>" />
		</form>

	</div>

<?php } ?>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- /RIGHT CONTENT -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>