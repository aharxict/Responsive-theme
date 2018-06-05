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
								<div style="float:left;"><h2><?php echo vldext_lang("events","app_results"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/calendar/","index.php?m=events&p=calendar"); ?>" class="btn"><i class="glyphicon glyphicon-calendar"></i> <?php echo vldext_lang("events","frm_events"); ?></a>
                                
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/search/","index.php?m=events&p=search"); ?>" class="btn"><i class="glyphicon glyphicon-search"></i> <?php echo vldext_lang("events","opt_search"); ?></a>
                                
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['search_link']) ? $_obj['search_link'] : "&#123;search_link&#125;"; ?>" class="btn active"><i class="glyphicon glyphicon-search"></i> <?php echo vldext_lang("events","opt_results"); ?></a>
                                
								<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>
								<a href="javascript:void(0)" onclick="showhide_field('div_reorder')" title="<?php echo vldext_lang("events","reorder"); ?>" class="btn"><i class="glyphicon glyphicon-search"></i> <?php echo vldext_lang("events","reorder"); ?></a>
								<?php } ?>
                                
                                </div>

                                <div class="clearfix"></div>
                           </div>

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_events_search_results">
		<div class="typemedia">
			<div class="dataitem single" id="div_reorder" style="display: none">
				<div class="form">
					<form name="form_reorder" action="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['search_link']) ? $_obj['search_link'] : "&#123;search_link&#125;"; ?>" method="post">
						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<dt><label for="field_orderby"><?php echo vldext_lang("events","order_by"); ?></label></dt>
								<dd><select class="select form-control" name="orderby" id="field_orderby" style="width:auto;"><?php echo vldext_dropdownlist($_obj['orderby_box'],$_obj['search_orderby']); ?></select></dd>
								<dt><label for="field_direction"><?php echo vldext_lang("events","direction"); ?></label></dt>
								<dd><select class="select form-control" name="direction" id="field_direction" style="width:auto;"><?php echo vldext_dropdownlist($_obj['direction_box'],$_obj['search_direction']); ?></select></dd>
								<dd class="submit"><input class="submit btn" name="submit" value="<?php echo vldext_lang("events","submit"); ?>" type="submit" /></dd>
							</dl>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
			<?php if (!empty($_obj['search_events'])){ if (!is_array($_obj['search_events'])) $_obj['search_events']=array(array('search_events'=>$_obj['search_events'])); $_tmp_arr_keys=array_keys($_obj['search_events']); if ($_tmp_arr_keys[0]!='0') $_obj['search_events']=array(0=>$_obj['search_events']); $_stack[$_stack_cnt++]=$_obj; $_cnt['search_events']=count($_obj['search_events']); foreach ($_obj['search_events'] as $rowcnt=>$search_events) { $search_events['rowcnt']=$rowcnt; $search_events['rowpos']=$rowcnt+1; $search_events['rownum']=$rowcnt%2+1; $search_events['rowtotal']=$_cnt['search_events']; $search_events['rowfirst']=$rowcnt==0?1:0; $search_events['rowlast']=($rowcnt+1)==$_cnt['search_events']?1:0; $_obj=&$search_events; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<?php if ( $this->objval($_obj,'event_picture_preview')  &&  $this->objval($_obj,'event_picture_active') ) { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['event_picture_preview']) ? $_obj['event_picture_preview'] : "&#123;event_picture_preview&#125;"; ?>" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<?php } else { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<?php } ?>
								</div>
							</td>
							<td class="data" valign="top">
								<h2 class="inner" style="font-size:16px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?></a></h2>
                                <div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_guests_link']) ? $_obj['event_guests_link'] : "&#123;event_guests_link&#125;"; ?>"><?php echo isset($_obj['event_total_guests']) ? $_obj['event_total_guests'] : "&#123;event_total_guests&#125;"; ?> <?php echo vldext_lang("events","total_guests"); ?></a></div>
										<?php if ( @$PREFS->conf['enable_event_comments']  &&  $this->objval($_obj,'event_allow_comments') ) { ?>
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_comments_link']) ? $_obj['event_comments_link'] : "&#123;event_comments_link&#125;"; ?>"><?php echo isset($_obj['event_total_comments']) ? $_obj['event_total_comments'] : "&#123;event_total_comments&#125;"; ?> <?php echo vldext_lang("events","total_comments"); ?></a></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_event_pictures'] ) { ?>
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_link']) ? $_obj['event_pictures_link'] : "&#123;event_pictures_link&#125;"; ?>"><?php echo isset($_obj['event_total_pictures']) ? $_obj['event_total_pictures'] : "&#123;event_total_pictures&#125;"; ?> <?php echo vldext_lang("events","total_pictures"); ?></a></div>
										<?php } ?>
									<div class="clearfix"></div>
                                </div>
								<div class="datainfo" style="padding-top:5px;">
									<dl class="datainfo">
										<dt style="float:left;"><?php echo isset($_obj['event_field_summary_name']) ? $_obj['event_field_summary_name'] : "&#123;event_field_summary_name&#125;"; ?>:</dt>
										<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['event_field_summary_value']) ? $_obj['event_field_summary_value'] : "&#123;event_field_summary_value&#125;"; ?></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left;"><?php echo isset($_obj['event_field_place_name']) ? $_obj['event_field_place_name'] : "&#123;event_field_place_name&#125;"; ?>:</dt>
										<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['event_field_place_value']) ? $_obj['event_field_place_value'] : "&#123;event_field_place_value&#125;"; ?></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left;"><?php echo vldext_lang("events","startdate"); ?>:</dt>
										<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['event_start_date']) ? $_obj['event_start_date'] : "&#123;event_start_date&#125;"; ?></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left;"><?php echo vldext_lang("events","creator"); ?>:</dt>
										<dd style="float:left; padding-left:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a></dd>
                                        <div class="clearfix"></div>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
		</div>
		<div class="clear"></div>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo vldext_lang("core","page_numbers"); ?></p>
				<?php echo isset($_obj['page_links']) ? $_obj['page_links'] : "&#123;page_links&#125;"; ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>