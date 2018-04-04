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

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">

<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("events","app_search"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/","index.php?m=events"); ?>" class="btn"><i class="glyphicon glyphicon-calendar"></i> <?php echo vldext_lang("events","frm_events"); ?></a>
                                
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/search/","index.php?m=events&p=search"); ?>" class="btn active"><i class="glyphicon glyphicon-search"></i> <?php echo vldext_lang("events","opt_search"); ?></a>
                                </div>

                                <div class="clearfix"></div>
                           </div>

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_search">

		<div class="typepage">
			<div class="dataitem single">
				<div class="form">
					<form name="search" method="post" action="">
						<?php if ( $this->objval($_obj,'event_fields') ) { ?>
							<div class="fieldset">
								<div class="legend"><?php echo vldext_lang("events","event_fields"); ?></div>
								<dl class="fieldset fieldgrid break">

									<?php if ( @$PREFS->conf['enable_event_name_search'] ) { ?>
    									<dt><label for="field_event_name"><?php echo vldext_lang("events","event_name"); ?></label></dt>
										<dd><input type="text" class="text form-control" name="event_name" style="width: 150px" value="" id="field_event_name" /></dd>
									<?php } ?>

									<?php if (!empty($_obj['event_fields'])){ if (!is_array($_obj['event_fields'])) $_obj['event_fields']=array(array('event_fields'=>$_obj['event_fields'])); $_tmp_arr_keys=array_keys($_obj['event_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['event_fields']=array(0=>$_obj['event_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['event_fields']=count($_obj['event_fields']); foreach ($_obj['event_fields'] as $rowcnt=>$event_fields) { $event_fields['rowcnt']=$rowcnt; $event_fields['rowpos']=$rowcnt+1; $event_fields['rownum']=$rowcnt%2+1; $event_fields['rowtotal']=$_cnt['event_fields']; $event_fields['rowfirst']=$rowcnt==0?1:0; $event_fields['rowlast']=($rowcnt+1)==$_cnt['event_fields']?1:0; $_obj=&$event_fields; ?>

										<dt><label for="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?></label></dt>
										<dd>
											<?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
												<?php if ( $this->objval($_obj,'field_label')  == "uszip") { ?>
													<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="" />
													within <input type="text" class="text form-control" name="dist" style="width: 40px" value="" maxlength="2" /> miles
												<?php } else { ?>
													<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
												<?php } ?>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
												<textarea class="textarea textarea_data form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
												<ul class="fielditems" style="margin-bottom:10px;">
													<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
														<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
													<?php } $_obj=$_stack[--$_stack_cnt];} ?>
												<div class="clear"></div></ul>
												<div class="clear"></div>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
												<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
													<ul class="fielditems" style="margin-bottom:10px;">
														<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
															<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
														<?php } $_obj=$_stack[--$_stack_cnt];} ?>
													<div class="clear"></div></ul>
													<div class="clear"></div>
												<?php } else { ?>
													<ul class="fielditems" style="margin-bottom:10px;">
														<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
															<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;"><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
														<?php } $_obj=$_stack[--$_stack_cnt];} ?>
													<div class="clear"></div></ul>
													<div class="clear"></div>
												<?php } ?>
											<?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
												<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
													<ul class="fielditems" style="margin-bottom:10px;">
														<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
															<li style="list-style-type: none; padding: 0px; margin: 0px; width: 33%; float: left;"><label style="font-weight:400; line-height:26px;"><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],"",$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
														<?php } $_obj=$_stack[--$_stack_cnt];} ?>
													<div class="clear"></div></ul>
													<div class="clear"></div>
												<?php } else { ?>
													<select class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>">
														<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
														<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
													</select>
												<?php } ?>
											<?php } ?>
										</dd>

									<?php } $_obj=$_stack[--$_stack_cnt];} ?>

								</dl>
								<div class="clear"></div>
							</div>

						<?php } ?>

						<div class="fieldset">
							<div class="legend"><?php echo vldext_lang("events","options"); ?></div>
							<dl class="fieldset fieldgrid">
								<dt><label for="field_with_guests"><?php echo vldext_lang("events","with_guests_events"); ?></label></dt>
								<dd><select class="select form-control" name="with_guests" id="field_with_guests"><?php echo vldext_dropdownlist($_obj['yesnobox'],"0"); ?></select></dd>
								<dt><label for="field_pictures_only"><?php echo vldext_lang("events","pictures_only"); ?></label></dt>
								<dd><select class="select form-control" name="pictures_only" id="field_pictures_only"><?php echo vldext_dropdownlist($_obj['yesnobox'],"0"); ?></select></dd>
								<dt><label for="field_upcoming_only"><?php echo vldext_lang("events","event_type"); ?></label></dt>
								<dd><select class="select form-control" name="upcoming_only" id="field_upcoming_only"><?php echo vldext_dropdownlist($_obj['eventtypebox'],"0"); ?></select></dd>
								<dd class="submit"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("events","submit"); ?>" /></dd>
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

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>