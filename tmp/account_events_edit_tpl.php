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

<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo isset($_obj['app_page']) ? $_obj['app_page'] : "&#123;app_page&#125;"; ?></h2></div>

                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_view_link']) ? $_obj['event_pictures_view_link'] : "&#123;event_pictures_view_link&#125;"; ?>" class="btn"><?php echo vldext_lang("events","opt_pictures"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

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
											<dt><label for="field_event_name"><?php echo vldext_lang("events","name"); ?> <i>*</i></label></dt>
											<dd><input type="text" id="field_event_name" class="text text_small form-control" name="event_name" value="<?php echo vldext_htmlentities($_obj['event_name']); ?>" maxlength="255" /></dd>
											<dt><label for="field_event_start_month"><?php echo vldext_lang("events","startdate"); ?> <i>*</i></label></dt>
											<dd>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_start_month" id="field_event_start_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['event_start_month']); ?></select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_start_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['event_start_day']); ?></select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_start_year"><?php echo vldext_dropdownlist($_stack[0]['years'],$_obj['event_start_year']); ?></select>
                                                <div style="float:left;">@</div>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;;" name="event_start_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['event_start_hour']); ?></select>
												<select class="select form-control" style="float:left;width:100px;" name="event_start_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['event_start_minute']); ?></select>
											<div class="clearfix"></div>
                                            </dd>
    										<dt><label for="field_event_end_month"><?php echo vldext_lang("events","enddate"); ?> <i>*</i></label></dt>
											<dd>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_month" id="field_event_end_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['event_end_month']); ?></select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['event_end_day']); ?></select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_year"><?php echo vldext_dropdownlist($_stack[0]['years'],$_obj['event_end_year']); ?></select>
                                                <div style="float:left;">@</div>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['event_end_hour']); ?></select>
												<select class="select form-control" style="float:left;width:100px;margin-right:2px;" name="event_end_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['event_end_minute']); ?></select>
											<div class="clearfix"></div>
                                            </dd>
											<?php if (!empty($_obj['event_fields'])){ if (!is_array($_obj['event_fields'])) $_obj['event_fields']=array(array('event_fields'=>$_obj['event_fields'])); $_tmp_arr_keys=array_keys($_obj['event_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['event_fields']=array(0=>$_obj['event_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['event_fields']=count($_obj['event_fields']); foreach ($_obj['event_fields'] as $rowcnt=>$event_fields) { $event_fields['rowcnt']=$rowcnt; $event_fields['rowpos']=$rowcnt+1; $event_fields['rownum']=$rowcnt%2+1; $event_fields['rowtotal']=$_cnt['event_fields']; $event_fields['rowfirst']=$rowcnt==0?1:0; $event_fields['rowlast']=($rowcnt+1)==$_cnt['event_fields']?1:0; $_obj=&$event_fields; ?>
    											<dt><label for="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?> <?php echo vldext_ifelse($_obj['field_required'],"1","<i>*</i>",""); ?></label></dt>
    											<dd>
													<?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
														<input type="text" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" class="text form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
													<?php } elseif ( $this->objval($_obj,'field_type')  == "image") { ?>
														<input type="file" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" class="text form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" />
														<?php if ( $this->objval($_obj,'field_old_value')  != "") { ?>
															<a target="_blank" href="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['field_old_value']) ? $_obj['field_old_value'] : "&#123;field_old_value&#125;"; ?>">View file</a>&nbsp;
															<input class="inputCheck" id="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_remove" type="checkbox" value="1">&nbsp;<?php echo vldext_lang("events","remove"); ?>
														<?php } ?>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
														<textarea id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" class="textarea textarea_full form-control" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
														<ul class="fielditems" style="margin-bottom:10px;">
															<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
															<?php } $_obj=$_stack[--$_stack_cnt];} ?>
														<div class="clearfix"></div></ul>
														<div class="clear"></div>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
														<ul class="fielditems" style="margin-bottom:10px;">
															<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
															<?php } $_obj=$_stack[--$_stack_cnt];} ?>
														<div class="clearfix"></div></ul>
														<div class="clear"></div>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
														<select id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?></select>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "date") { ?>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "time") { ?>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "datetime") { ?>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_month"><?php echo vldext_dropdownlist($_stack[0]['months'],$_obj['field_value_month']); ?></select>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_day"><?php echo vldext_dropdownlist($_stack[0]['days'],$_obj['field_value_day']); ?></select>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_year"><?php echo vldext_dropdownlist($_obj['years'],$_obj['field_value_year']); ?></select> @
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_hour"><?php echo vldext_dropdownlist($_stack[0]['hours'],$_obj['field_value_hour']); ?></select>
														<select class="select" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_minute"><?php echo vldext_dropdownlist($_stack[0]['minutes'],$_obj['field_value_minute']); ?></select>
													<?php } ?>
												</dd>
											<?php } $_obj=$_stack[--$_stack_cnt];} ?>
											<?php if ( @$PREFS->conf['enable_event_max_guests'] ) { ?>
												<dt><label for="field_comments"><?php echo vldext_lang("events","max_guests"); ?></label></dt>
												<dd><input type="text" id="field_max_guests" class="text form-control" name="max_guests" size="4" value="<?php echo isset($_obj['event_max_guests']) ? $_obj['event_max_guests'] : "&#123;event_max_guests&#125;"; ?>" maxlength="6" /></dd>
											<?php } ?>
											<?php if ( @$PREFS->conf['enable_event_comments'] ) { ?>
												<dt>
													<label for="field_comments">
														<input type="checkbox" class="checkbox" style="float:left;margin-right:5px;" name="comments" value="1" id="field_comments" <?php if ( $this->objval($_obj,'event_comments') ) { ?>checked="checked"<?php } ?> />
														<div style="float:left;line-height:28px;"><?php echo vldext_lang("events","allow_comments"); ?></div>
													</label>
												</dt>
											<?php } ?>
    										<dd class="submit"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("events","submit"); ?>" /></dd>
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

<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>