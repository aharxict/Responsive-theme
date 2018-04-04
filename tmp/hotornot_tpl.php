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
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
include_once SYS_PATH . "includes/ext/core/ext.htmlentities.php";
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
								<div style="float:left;"><h2><?php echo vldext_lang("hotornot","app_hotornot"); ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
<a href="javascript:void(0)" onclick="showhide_field('field_filters')"><span class="glyphicon glyphicon-search" style="padding-right:4px;"></span> <?php echo vldext_lang("hotornot","filters"); ?></a>
        

	<div class="outter page_hotornot">

		<div class="typemedia">
			<div class="dataitem single" id="field_filters" <?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>style="display: none"<?php } ?>>
				<div class="form" style="margin-top:7px;">
					<form name="hotornot" action="" method="post">

						<?php if ( $this->objval($_obj,'total_types')  > "1") { ?>
							<div class="fieldset">
								<dl class="fieldset fieldgrid">
    								<dt><label for="field_group_type_label"><?php echo vldext_lang("hotornot","members_type"); ?></label></dt>
									<dd>
										<select class="select" name="group_type_label" id="field_group_type_label" onchange="row_switch('type_'+this.value+'_box')">
											<?php echo vldext_dropdownlist($_obj['typesbox'],$_obj['default_type']); ?>
										</select>
									</dd>
								</dl>
								<div class="clear"></div>
							</div>
						<?php } ?>

						<?php if (!empty($_obj['profile_types'])){ if (!is_array($_obj['profile_types'])) $_obj['profile_types']=array(array('profile_types'=>$_obj['profile_types'])); $_tmp_arr_keys=array_keys($_obj['profile_types']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_types']=array(0=>$_obj['profile_types']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_types']=count($_obj['profile_types']); foreach ($_obj['profile_types'] as $rowcnt=>$profile_types) { $profile_types['rowcnt']=$rowcnt; $profile_types['rowpos']=$rowcnt+1; $profile_types['rownum']=$rowcnt%2+1; $profile_types['rowtotal']=$_cnt['profile_types']; $profile_types['rowfirst']=$rowcnt==0?1:0; $profile_types['rowlast']=($rowcnt+1)==$_cnt['profile_types']?1:0; $_obj=&$profile_types; ?>
							<?php if ( $this->objval($_obj,'profile_fields') ) { ?>
								<?php if ( $this->objval($_obj,'type_label')  ==  $this->objval($_stack[0],'default_type') ) { ?>
									<script type="text/javascript" language="javascript">var active_tab = 'type_<?php echo isset($_obj['type_label']) ? $_obj['type_label'] : "&#123;type_label&#125;"; ?>_box';</script>
								<?php } ?>
								<div id="type_<?php echo isset($_obj['type_label']) ? $_obj['type_label'] : "&#123;type_label&#125;"; ?>_box"<?php if ( $this->objval($_obj,'type_label')  !=  $this->objval($_stack[0],'default_type') ) { ?> style="display:none"<?php } ?>>

									<div class="fieldset">
										<dl class="fieldset fieldgrid">

											<?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>

												<dt><label for="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?></label></dt>
												<dd>
													<?php if ( $this->objval($_obj,'field_type')  == "text") { ?>
														<input type="text" class="text form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>" value="<?php echo vldext_htmlentities($_obj['field_value']); ?>" maxlength="<?php echo isset($_obj['field_maxlength']) ? $_obj['field_maxlength'] : "&#123;field_maxlength&#125;"; ?>" />
													<?php } elseif ( $this->objval($_obj,'field_type')  == "textarea") { ?>
														<textarea class="textarea form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" style="width: <?php echo isset($_obj['field_width']) ? $_obj['field_width'] : "&#123;field_width&#125;"; ?>; height: <?php echo isset($_obj['field_height']) ? $_obj['field_height'] : "&#123;field_height&#125;"; ?>"><?php echo vldext_htmlentities($_obj['field_value']); ?></textarea>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
														<ul class="fielditems">
															<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																<li><label><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
															<?php } $_obj=$_stack[--$_stack_cnt];} ?>
														</ul>
														<div class="clear"></div>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "radio") { ?>
														<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
															<ul class="fielditems">
																<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																	<li><label><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																<?php } $_obj=$_stack[--$_stack_cnt];} ?>
															</ul>
															<div class="clear"></div>
														<?php } else { ?>
															<ul class="fielditems">
																<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																	<li><label><?php echo vldext_radiobuttons($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																<?php } $_obj=$_stack[--$_stack_cnt];} ?>
															</ul>
															<div class="clear"></div>
														<?php } ?>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "combo") { ?>
														<?php if ( $this->objval($_obj,'field_in_search_multi') ) { ?>
															<ul class="fielditems">
																<?php if (!empty($_obj['field_items'])){ if (!is_array($_obj['field_items'])) $_obj['field_items']=array(array('field_items'=>$_obj['field_items'])); $_tmp_arr_keys=array_keys($_obj['field_items']); if ($_tmp_arr_keys[0]!='0') $_obj['field_items']=array(0=>$_obj['field_items']); $_stack[$_stack_cnt++]=$_obj; $_cnt['field_items']=count($_obj['field_items']); $rowcnt=0; foreach ($_obj['field_items'][0] as $inner_key=>$inner_field_items) { $field_items['inner_key']=$inner_key; $field_items['inner_value']=$inner_field_items; $field_items['rowcnt']=$rowcnt; $field_items['rowpos']=$rowcnt+1; $field_items['rownum']=$rowcnt%2+1; $field_items['rowtotal']=$_cnt['field_items']; $field_items['rowfirst']=$rowcnt==0?1:0; $field_items['rowlast']=($rowcnt+1)==$_cnt['field_items']?1:0; $rowcnt++; $_obj=&$field_items; ?>
																	<li><label><?php echo vldext_checkboxes($_stack[$_stack_cnt-1]['field_label'],$_obj['rowcnt'],$_stack[$_stack_cnt-1]['field_value'],$_obj['inner_key']); ?>&nbsp;<?php echo isset($_obj['inner_value']) ? $_obj['inner_value'] : "&#123;inner_value&#125;"; ?></label></li>
																<?php } $_obj=$_stack[--$_stack_cnt];} ?>
															</ul>
															<div class="clear"></div>
														<?php } else { ?>
															<select style="width:auto;" class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>">
																<option value=""><?php echo vldext_lang("core","user_field_any"); ?></option>
																<?php echo vldext_dropdownlist($_obj['field_items'],$_obj['field_value']); ?>
															</select>
														<?php } ?>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "birthday") { ?>
														<div>
                                                        <select style="width:auto; float:left;" class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_from"><?php echo vldext_dropdownlist($_stack[0]['agebox'],$_obj['field_value']); ?></select><div style="float:left; padding-left:7px; padding-right:7px; height:34px;"><div style="padding-top:5px;"> - </div></div>
														<select style="width:auto; float:left;" class="select form-control" id="field_<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_to" name="<?php echo isset($_obj['field_label']) ? $_obj['field_label'] : "&#123;field_label&#125;"; ?>_to"><?php echo vldext_dropdownlist($_stack[0]['agebox'],$_obj['field_default']); ?></select>
                                                        <div class="clearfix"></div>
													<?php } ?>
												</dd>

											<?php } $_obj=$_stack[--$_stack_cnt];} ?>

										</dl>
										<div class="clear"></div>
									</div>
								</div>
							<?php } ?>
						<?php } $_obj=$_stack[--$_stack_cnt];} ?>

						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<?php if ( @$PREFS->conf['adult_images']  &&  @$SESSION->conf['can_view_adult_images'] ) { ?>
									<dt><label for="field_adult"><?php echo vldext_lang("hotornot","show_adult"); ?></label></dt>
									<dd><select id="field_adult" class="select form-control" name="adult" style="width:auto;"><?php echo vldext_dropdownlist($_obj['yesnobox'],$_obj['picture_adult']); ?></select></dd>
								<?php } ?>
    							<dd class="submit"><input class="submit btn" name="submit" value="<?php echo vldext_lang("hotornot","submit"); ?>" type="submit" /></dd>
							</dl>
							<div class="clear"></div>
						</div>
						<input type="hidden" name="ishotornot" value="1" />
					</form>
				</div>
			</div>

			<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

				<div class="dataitem single galleryitem dataitemlast">
					<div class="image" style="text-align:center;">
						<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_obj['virtual_pic_path']) ? $_obj['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_filename']) ? $_obj['picture_filename'] : "&#123;picture_filename&#125;"; ?>" alt="" border="0" /><br /></a>
					</div>
					<div class="entry" style="text-align:center; width:100%; padding-top:4px;">
						<?php echo isset($_obj['picture_description']) ? $_obj['picture_description'] : "&#123;picture_description&#125;"; ?>
					</div>
                    <hr />
					<div class="itemfooter">
						<div class="itemfooter">
							<div style="float:left;">
								<div class="ratingbox">
									<div class="scores">
										<?php echo vldext_lang("core","rating_score"); ?>:
										<span id="rating_picture_score<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>"><?php echo isset($_obj['picture_score']) ? $_obj['picture_score'] : "&#123;picture_score&#125;"; ?></span>
										<?php echo vldext_lang("core","rating_votes"); ?>:
										<span id="rating_picture_votes<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>"><?php echo isset($_obj['picture_votes']) ? $_obj['picture_votes'] : "&#123;picture_votes&#125;"; ?></span>
									</div>
									<div>
                                    <div class="scores" style="float:left; padding-right:10px;">
										<?php echo vldext_lang("hotornot","your_rating"); ?>
									</div>
<style type="text/css">
div.ratingbox div.selection a.over {
    cursor: default;
    background: url('<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/rate.png') no-repeat -12px center;
}
div.ratingbox div.selection a {
    width: 12px;
    height: 16px;
    float: left;
    display: block;
    cursor: default;
    background: url('<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/rate.png') no-repeat 0px center;
    text-decoration: none;
}
</style>
                                    <div class="selection" id="rating_picture_box<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>" onmouseout="ratingstar_reset('picture',<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>)" style="float:left; padding-top:2px;">
										<div id="rating_picture_response<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>">
											<a onclick="send_picture_rating(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,1);return false;" onmouseover="ratingstar_toggle('picture',<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,1);return false;" href="#" id="ratingstar<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>__1"></a><!--
											--><a onclick="send_picture_rating(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,2);return false;" onmouseover="ratingstar_toggle('picture',<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,2);return false;" href="#" id="ratingstar<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>__2"></a><!--
											--><a onclick="send_picture_rating(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,3);return false;" onmouseover="ratingstar_toggle('picture',<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,3);return false;" href="#" id="ratingstar<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>__3"></a><!--
											--><a onclick="send_picture_rating(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,4);return false;" onmouseover="ratingstar_toggle('picture',<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,4);return false;" href="#" id="ratingstar<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>__4"></a><!--
											--><a onclick="send_picture_rating(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,5);return false;" onmouseover="ratingstar_toggle('picture',<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>,5);return false;" href="#" id="ratingstar<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>__5"></a>
										</div>
									</div>
                                    </div>
									<div class="progress" id="rating_picture_progress<?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>" style="display:none;"></div>
									<script type="text/javascript" language="javascript">//ratingstar_reset('picture', <?php echo isset($_obj['picture_id']) ? $_obj['picture_id'] : "&#123;picture_id&#125;"; ?>);</script>
								</div>
							</div>
							<div style="float:right;" class="report">
								<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<?php } ?>

		</div>
		<div class="clear"></div>

	</div>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

	<script type="text/javascript" language="javascript">
	function send_picture_rating(member_id,picture_id,mark) {
		submit_rating('picture',member_id,picture_id,mark,"<?php echo isset($_obj['picture_next_link']) ? $_obj['picture_next_link'] : "&#123;picture_next_link&#125;"; ?>");
	}
	</script>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>