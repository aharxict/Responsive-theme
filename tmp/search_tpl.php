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
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
include_once SYS_PATH . "includes/ext/core/ext.htmlentities.php";
include_once SYS_PATH . "includes/ext/core/ext.checkboxes.php";
include_once SYS_PATH . "includes/ext/core/ext.radiobuttons.php";
include_once SYS_PATH . "includes/ext/ext.members.php";
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
					

<!-- SEARCH RESULTS -->
					<div class="col-sm-8" style="margin-bottom:7px; padding-right:10px;">
						<div class="blog-post blog-single-post page-content" style="padding:15px 5px; padding-bottom:0;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-left:11px; margin-right:11px;">
							<div style="float:left;"><h2><?php if ( $this->objval($_obj,'active_module')  == "advanced_search") { ?><?php echo vldext_lang("search","app_advanced_search"); ?><?php } else { ?><?php echo vldext_lang("search","app_search"); ?><?php } ?></h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <?php if ( $this->objval($_obj,'active_module')  == "advanced_search") { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","search/","index.php?m=search"); ?>" class="btn"><i class="glyphicon glyphicon-search"></i> SEARCH</a>
								<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","search/advanced/","index.php?m=search&p=advanced"); ?>" class="btn active"><i class="glyphicon glyphicon-search"></i> ADVANCED</a>
                                <?php } else { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","search/","index.php?m=search"); ?>" class="btn active"><i class="glyphicon glyphicon-search"></i> SEARCH</a>
								<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","search/advanced/","index.php?m=search&p=advanced"); ?>" class="btn"><i class="glyphicon glyphicon-search"></i> ADVANCED</a>
                                <?php } ?>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<?php if ( $this->objval($_obj,'active_module')  == "advanced_search") { ?>
<!-- SEARCH FORM -->
<div style="margin-bottom:7px; padding:20px;">

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_search">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="search" method="post" action="">

						<?php if ( $this->objval($_obj,'total_types')  > "1") { ?>
							<div class="fieldset">
								<dl class="fieldset fieldgrid break">
    								<dt><label for="field_type_id"><?php echo vldext_lang("search","search_type"); ?></label></dt>
									<dd>
										<select class="select form-control" name="type_id" id="field_type_id" onchange="row_switch('type_'+this.value+'_box')">
											<?php echo vldext_dropdownlist($_obj['typesbox'],$_obj['default_type']); ?>
										</select>
									</dd>
								</dl>
								<div class="clear"></div>
							</div>
						<?php } else { ?>
							<input type="hidden" name="type_id" value="<?php echo isset($_obj['default_type']) ? $_obj['default_type'] : "&#123;default_type&#125;"; ?>" />
						<?php } ?>

						<?php if (!empty($_obj['profile_types'])){ if (!is_array($_obj['profile_types'])) $_obj['profile_types']=array(array('profile_types'=>$_obj['profile_types'])); $_tmp_arr_keys=array_keys($_obj['profile_types']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_types']=array(0=>$_obj['profile_types']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_types']=count($_obj['profile_types']); foreach ($_obj['profile_types'] as $rowcnt=>$profile_types) { $profile_types['rowcnt']=$rowcnt; $profile_types['rowpos']=$rowcnt+1; $profile_types['rownum']=$rowcnt%2+1; $profile_types['rowtotal']=$_cnt['profile_types']; $profile_types['rowfirst']=$rowcnt==0?1:0; $profile_types['rowlast']=($rowcnt+1)==$_cnt['profile_types']?1:0; $_obj=&$profile_types; ?>

							<?php if ( $this->objval($_obj,'type_id')  ==  @$PREFS->conf['default_profile_type'] ) { ?>
								<script type="text/javascript" language="javascript">var active_tab = 'type_<?php echo isset($_obj['type_label']) ? $_obj['type_label'] : "&#123;type_label&#125;"; ?>_box';</script>
							<?php } ?>
							<div id="type_<?php echo isset($_obj['type_label']) ? $_obj['type_label'] : "&#123;type_label&#125;"; ?>_box"<?php if ( $this->objval($_obj,'type_id')  !=  @$PREFS->conf['default_profile_type'] ) { ?> style="display:none"<?php } ?>>

								<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>

									<?php if ( $this->objval($_obj,'profile_fields') ) { ?>

										<div class="fieldset">
                                        	<h2 style="font-size:16px; padding-bottom:15px;"><?php echo isset($_obj['group_name']) ? $_obj['group_name'] : "&#123;group_name&#125;"; ?></h2>
											<dl class="fieldset fieldgrid break">

												<?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>

													<dt style="display:none;"><label for="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?></label></dt>
													<dd style="padding-bottom:5px;">
														<?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
															<?php if ( $this->objval($_obj,'field_label')  == "uszip") { ?>
																<?php if ( @$PREFS->conf['search_uszip'] ) { ?>
																	<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="" />
																	within <input type="text" class="text" name="dist" style="width: 40px" value="" maxlength="2" /> miles
																<?php } else { ?>
																	<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
																<?php } ?>
															<?php } elseif ( $this->objval($_obj,'field_in_search_range') ) { ?>
																<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
																-
																<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
															<?php } else { ?>
																<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
															<?php } ?>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
															<textarea class="textarea textarea_data" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
															<ul class="fielditems" style="margin-bottom:10px;">
																<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																	<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																<?php } $_obj=$_stack[--$_stack_cnt];} ?>
															<div class="clearfix"></div></ul>
															<div class="clear"></div>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
															<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
																<ul class="fielditems" style="margin-bottom:10px;">
																	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																		<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
																<div class="clearfix"></div></ul>
																<div class="clear"></div>
															<?php } else { ?>
																<ul class="fielditems" style="margin-bottom:10px;">
																	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																		<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
																<div class="clearfix"></div></ul>
																<div class="clear"></div>
															<?php } ?>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
															<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
																<ul class="fielditems" style="margin-bottom:10px;">
																	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																		<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label class="checkbox" style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
																<div class="clearfix"></div></ul>
																<div class="clear"></div>
															<?php } elseif ( $this->objval($_obj,'field_in_search_range') ) { ?>
																<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>">
																	<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
																	<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
																</select>
																-
																<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2">
																	<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
																	<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
																</select>
															<?php } else { ?>
																<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>">
																	<?php if ( $this->objval($_obj,'field_label')  != "gender1" &&  $this->objval($_obj,'field_label')  != "gender2") { ?>
																		<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
																	<?php } ?>
																	<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
																</select>
															<?php } ?>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "birthday") { ?>
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_from"><?php echo vldext_dropdownlist($_stack[0]['agebox'],$_obj['field_value']); ?></select> -
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_to" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_to"><?php echo vldext_dropdownlist($_stack[0]['agebox'],$_obj['field_default']); ?></select>
														<?php } ?>
													</dd>

												<?php } $_obj=$_stack[--$_stack_cnt];} ?>

											</dl>
											<div class="clear"></div>
										</div>

									<?php } ?>
								<hr />
								<?php } $_obj=$_stack[--$_stack_cnt];} ?>

							</div>
						<?php } $_obj=$_stack[--$_stack_cnt];} ?>
                        
						<h2 style="font-size:16px; padding-bottom:15px;"><?php echo vldext_lang("search","options"); ?></h2>
                        <div class="fieldset">
							<dl class="fieldset fieldgrid" style="margin-bottom:5px;">
								<?php if ( $this->objval($_obj,'search_username') ) { ?>
    								<dt><label for="field_username"><?php echo vldext_lang("search","search_username"); ?></label></dt>
									<dd style="padding-bottom:5px;"><input type="text" class="text form-control" name="username" value="" id="field_username" /></dd>
								<?php } ?>
								<?php if ( $this->objval($_obj,'search_online') ) { ?>
									<dt><label for="field_online_only"><?php echo vldext_lang("search","search_online"); ?></label></dt>
									<dd style="padding-bottom:5px;"><select class="select form-control" name="online_only" id="field_online_only"><?php echo vldext_dropdownlist($_obj['yesnobox'],"0"); ?></select></dd>
								<?php } ?>
								<dt><label for="field_pictures_only"><?php echo vldext_lang("search","pictures_only"); ?></label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="pictures_only" id="field_pictures_only"><?php echo vldext_dropdownlist($_obj['yesnobox'],"0"); ?></select></dd>
								<dt><label for="field_display_type"><?php echo vldext_lang("search","display_type"); ?></label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="display_type" id="field_display_type"><?php echo vldext_dropdownlist($_obj['displaytypebox'],0); ?></select></dd>
								<?php if ( $this->objval($_obj,'loggedin')  &&  @$PREFS->conf['enable_saved_searches'] ) { ?>
    								<dt><label for="field_search_save"><?php echo vldext_lang("search","save_search"); ?></label></dt>
									<dd style="padding-bottom:5px;"><input name="search_save" type="text" class="text form-control" id="field_search_save" value="" maxlength="128" />
									</dd>
								<?php } ?>
								<dd class="submit" style="padding-top:15px;"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("search","submit"); ?>" /></dd>
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

<?php } ?>
</div>
<!-- SEARCH FORM ENDS -->
                            <?php } else { ?>
<!-- SEARCH FORM -->
<div style="margin-bottom:7px; padding:20px;">

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_search">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="search" method="post" action="">

						<?php if ( $this->objval($_obj,'total_types')  > "1") { ?>
							<div class="fieldset">
								<div class="legend"><?php echo vldext_lang("search","type"); ?></div>
								<dl class="fieldset fieldgrid break">
    								<dt><label for="field_type_id"><?php echo vldext_lang("search","search_type"); ?></label></dt>
									<dd>
										<select class="select form-control" name="type_id" id="field_type_id" onchange="row_switch('type_'+this.value+'_box')">
											<?php echo vldext_dropdownlist($_obj['typesbox'],$_obj['default_type']); ?>
										</select>
									</dd>
								</dl>
								<div class="clear"></div>
							</div>
						<?php } else { ?>
							<input type="hidden" name="type_id" value="<?php echo isset($_obj['default_type']) ? $_obj['default_type'] : "&#123;default_type&#125;"; ?>" />
						<?php } ?>

						<?php if (!empty($_obj['profile_types'])){ if (!is_array($_obj['profile_types'])) $_obj['profile_types']=array(array('profile_types'=>$_obj['profile_types'])); $_tmp_arr_keys=array_keys($_obj['profile_types']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_types']=array(0=>$_obj['profile_types']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_types']=count($_obj['profile_types']); foreach ($_obj['profile_types'] as $rowcnt=>$profile_types) { $profile_types['rowcnt']=$rowcnt; $profile_types['rowpos']=$rowcnt+1; $profile_types['rownum']=$rowcnt%2+1; $profile_types['rowtotal']=$_cnt['profile_types']; $profile_types['rowfirst']=$rowcnt==0?1:0; $profile_types['rowlast']=($rowcnt+1)==$_cnt['profile_types']?1:0; $_obj=&$profile_types; ?>

							<?php if ( $this->objval($_obj,'type_id')  ==  @$PREFS->conf['default_profile_type'] ) { ?>
								<script type="text/javascript" language="javascript">var active_tab = 'type_<?php echo isset($_obj['type_label']) ? $_obj['type_label'] : "&#123;type_label&#125;"; ?>_box';</script>
							<?php } ?>
							<div id="type_<?php echo isset($_obj['type_label']) ? $_obj['type_label'] : "&#123;type_label&#125;"; ?>_box"<?php if ( $this->objval($_obj,'type_id')  !=  @$PREFS->conf['default_profile_type'] ) { ?> style="display:none"<?php } ?>>

								<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>

									<?php if ( $this->objval($_obj,'profile_fields') ) { ?>

										<div class="fieldset">
                                        	<h2 style="font-size:16px; padding-bottom:15px;"><?php echo isset($_obj['group_name']) ? $_obj['group_name'] : "&#123;group_name&#125;"; ?></h2>
											<dl class="fieldset fieldgrid break">

												<?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>

													<dt><label for="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?></label></dt>
													<dd style="padding-bottom:5px;">
														<?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
															<?php if ( $this->objval($_obj,'field_label')  == "uszip") { ?>
																<?php if ( @$PREFS->conf['search_uszip'] ) { ?>
																	<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="" />
																	within <input type="text" class="text" name="dist" style="width: 40px" value="" maxlength="2" /> miles
																<?php } else { ?>
																	<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
																<?php } ?>
															<?php } elseif ( $this->objval($_obj,'field_in_search_range') ) { ?>
																<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
																-
																<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
															<?php } else { ?>
																<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
															<?php } ?>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
															<textarea class="textarea textarea_data" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
															<ul class="fielditems">
																<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																	<li><label><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																<?php } $_obj=$_stack[--$_stack_cnt];} ?>
															</ul>
															<div class="clear"></div>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
															<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
																<ul class="fielditems">
																	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																		<li><label><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
																</ul>
																<div class="clear"></div>
															<?php } else { ?>
																<ul class="fielditems">
																	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																		<li><label><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
																</ul>
																<div class="clear"></div>
															<?php } ?>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
															<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
																<ul class="fielditems">
																	<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																		<li><label><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
																</ul>
																<div class="clear"></div>
															<?php } elseif ( $this->objval($_obj,'field_in_search_range') ) { ?>
																<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>">
																	<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
																	<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
																</select>
																-
																<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_2">
																	<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
																	<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
																</select>
															<?php } else { ?>
																<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>">
																	<?php if ( $this->objval($_obj,'field_label')  != "gender1" &&  $this->objval($_obj,'field_label')  != "gender2") { ?>
																		<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
																	<?php } ?>
																	<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
																</select>
															<?php } ?>
														<?php } elseif ( $this->objval($_obj,'field_type')  == "birthday") { ?>
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_from"><?php echo vldext_dropdownlist($_stack[0]['agebox'],$_obj['field_value']); ?></select> -
															<select class="select form-control" style="width:46%; display:inline-block;" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_to" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_to"><?php echo vldext_dropdownlist($_stack[0]['agebox'],$_obj['field_default']); ?></select>
														<?php } ?>
													</dd>

												<?php } $_obj=$_stack[--$_stack_cnt];} ?>

											</dl>
											<div class="clear"></div>
										</div>

									<?php } ?>
								<hr />
								<?php } $_obj=$_stack[--$_stack_cnt];} ?>

							</div>
						<?php } $_obj=$_stack[--$_stack_cnt];} ?>
                        
						<h2 style="font-size:16px; padding-bottom:15px;"><?php echo vldext_lang("search","options"); ?></h2>
                        <div class="fieldset">
							<dl class="fieldset fieldgrid" style="margin-bottom:5px;">
								<?php if ( $this->objval($_obj,'search_username') ) { ?>
    								<dt><label for="field_username"><?php echo vldext_lang("search","search_username"); ?></label></dt>
									<dd style="padding-bottom:5px;"><input type="text" class="text form-control" name="username" value="" id="field_username" /></dd>
								<?php } ?>
								<?php if ( $this->objval($_obj,'search_online') ) { ?>
									<dt><label for="field_online_only"><?php echo vldext_lang("search","search_online"); ?></label></dt>
									<dd style="padding-bottom:5px;"><select class="select form-control" name="online_only" id="field_online_only"><?php echo vldext_dropdownlist($_obj['yesnobox'],"0"); ?></select></dd>
								<?php } ?>
								<dt><label for="field_pictures_only"><?php echo vldext_lang("search","pictures_only"); ?></label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="pictures_only" id="field_pictures_only"><?php echo vldext_dropdownlist($_obj['yesnobox'],"0"); ?></select></dd>
								<dt><label for="field_display_type"><?php echo vldext_lang("search","display_type"); ?></label></dt>
								<dd style="padding-bottom:5px;"><select class="select form-control" name="display_type" id="field_display_type"><?php echo vldext_dropdownlist($_obj['displaytypebox'],0); ?></select></dd>
								<?php if ( $this->objval($_obj,'loggedin')  &&  @$PREFS->conf['enable_saved_searches'] ) { ?>
    								<dt><label for="field_search_save"><?php echo vldext_lang("search","save_search"); ?></label></dt>
									<dd style="padding-bottom:5px;"><input name="search_save" type="text" class="text form-control" id="field_search_save" value="" maxlength="128" />
									</dd>
								<?php } ?>
								<dd class="submit" style="padding-top:15px;"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("search","submit"); ?>" /></dd>
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

<?php } ?>
</div>
<!-- SEARCH FORM ENDS -->
							<?php } ?>
						</div>
					</div>
<!-- /SEARCH RESULTS -->
                    
                    
<!-- SIDEBAR, SEARCH FORM -->
<div class="col-sm-4 col-rightside">
<?php if ( $this->objval($_obj,'active_module')  == "advanced_search") { ?>
<?php echo vldext_members(array('limit'=>12,'photos'=>1,'orderby'=>"lastvisit",'cache_time'=>0,'cache_name'=>"online",'template'=>"ext.members_search.tpl")); ?>
<?php } else { ?>
<?php echo vldext_members(array('limit'=>12,'photos'=>1,'orderby'=>"lastvisit",'cache_time'=>0,'cache_name'=>"online",'template'=>"ext.members_search.tpl")); ?>
<?php } ?>
</div>
<!-- /SIDEBAR, SEARCH FORM -->
					
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>