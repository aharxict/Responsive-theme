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
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture']) ? $SESSION->conf['picture'] : "&#123;picture&#125;"; ?>" alt="" border="0" /></a>
							<?php } ?>
							
						</div>
<?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					
					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("events","app_joined"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>account/events/" class="btn"><?php echo vldext_lang("events","opt_events"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>account/events/joined/" class="btn"><?php echo vldext_lang("events","opt_joinedevents"); ?></a>
                                
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>account/events/add/" class="btn"><?php echo vldext_lang("events","opt_addevent"); ?></a>
                           
                               </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
       

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_events_joined">

		<div class="typemedia">
			<?php if (!empty($_obj['events_entries'])){ if (!is_array($_obj['events_entries'])) $_obj['events_entries']=array(array('events_entries'=>$_obj['events_entries'])); $_tmp_arr_keys=array_keys($_obj['events_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['events_entries']=array(0=>$_obj['events_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['events_entries']=count($_obj['events_entries']); foreach ($_obj['events_entries'] as $rowcnt=>$events_entries) { $events_entries['rowcnt']=$rowcnt; $events_entries['rowpos']=$rowcnt+1; $events_entries['rownum']=$rowcnt%2+1; $events_entries['rowtotal']=$_cnt['events_entries']; $events_entries['rowfirst']=$rowcnt==0?1:0; $events_entries['rowlast']=($rowcnt+1)==$_cnt['events_entries']?1:0; $_obj=&$events_entries; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<?php if ( $this->objval($_obj,'event_picture_preview')  &&  $this->objval($_obj,'event_picture_active') ) { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['event_picture_preview']) ? $_obj['event_picture_preview'] : "&#123;event_picture_preview&#125;"; ?>" alt="" border="0" /><br /></a>
									<?php } else { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="" border="0" /><br /></a>
									<?php } ?>
								</div>
							</td>
							<td class="data" valign="top">
								<div class="datainfo" style="padding-top:5px;width:400px !important;overflow:inherit;word-wrap: break-word;">
									<h2 class="inner" style="font-size:18px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?></a></h2>
									<dl class="datainfo">
										<div style="float:left;word-wrap: break-word;"><strong><?php echo isset($_obj['event_field_summary_name']) ? $_obj['event_field_summary_name'] : "&#123;event_field_summary_name&#125;"; ?>:</strong> <?php echo isset($_obj['event_field_summary_value']) ? $_obj['event_field_summary_value'] : "&#123;event_field_summary_value&#125;"; ?></div>
                                        <div class="clearfix"></div>
										<div style="float:left;word-wrap: break-word;"><strong><?php echo isset($_obj['event_field_place_name']) ? $_obj['event_field_place_name'] : "&#123;event_field_place_name&#125;"; ?>:</strong> <?php echo isset($_obj['event_field_place_value']) ? $_obj['event_field_place_value'] : "&#123;event_field_place_value&#125;"; ?></div>
                                        <div class="clearfix"></div>
										<div style="float:left;word-wrap: break-word;"><strong><?php echo vldext_lang("events","startdate"); ?>:</strong> <?php echo isset($_obj['event_start_date']) ? $_obj['event_start_date'] : "&#123;event_start_date&#125;"; ?></div>
                                        <div class="clearfix"></div>
									</dl>
								</div>
							</td>
							<td>
								<div class="actions">
									<ul class="actions" style="list-style-type:none;">
										<li class="guests"><span class="glyphicon glyphicon-user" style="padding-right:8px;"></span> <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><?php echo isset($_obj['event_total_guests']) ? $_obj['event_total_guests'] : "&#123;event_total_guests&#125;"; ?> <?php echo vldext_lang("events","total_guests"); ?></a></li>
										<?php if ( @$PREFS->conf['enable_event_comments']  &&  $this->objval($_obj,'event_allow_comments') ) { ?>
											<li class="comments"><span class="glyphicon glyphicon-comment" style="padding-right:8px;"></span> <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_comments_link']) ? $_obj['event_comments_link'] : "&#123;event_comments_link&#125;"; ?>"><?php echo isset($_obj['event_total_comments']) ? $_obj['event_total_comments'] : "&#123;event_total_comments&#125;"; ?> <?php echo vldext_lang("events","total_comments"); ?></a></li>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_event_pictures'] ) { ?>
											<li class="pictures"><span class="glyphicon glyphicon-picture" style="padding-right:8px;"></span> <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_link']) ? $_obj['event_pictures_link'] : "&#123;event_pictures_link&#125;"; ?>"><?php echo isset($_obj['event_total_pictures']) ? $_obj['event_total_pictures'] : "&#123;event_total_pictures&#125;"; ?> <?php echo vldext_lang("events","total_pictures"); ?></a></li>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_leave_events'] ) { ?>
											<li class="leave"><span class="glyphicon glyphicon-remove-circle" style="padding-right:8px;"></span> <a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("events","leave?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_leave_link']) ? $_obj['event_leave_link'] : "&#123;event_leave_link&#125;"; ?>')" title="<?php echo vldext_lang("events","leave"); ?>"><?php echo vldext_lang("events","leave"); ?></a></li>
										<?php } ?>
									</ul>
									<div class="clear"></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
		</div>
		<div class="clear"></div>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("events","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("events","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

<?php } ?>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>
