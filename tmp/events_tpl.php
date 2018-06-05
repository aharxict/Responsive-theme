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
include_once SYS_PATH . "includes/ext/ext.anchor.php";
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

							<div class="single-post-title events" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("events","app_events"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/calendar/","index.php?m=events&p=calendar"); ?>" class="btn active"><i class="glyphicon glyphicon-calendar"></i> <?php echo vldext_lang("events","frm_events"); ?></a>
                                
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/search/","index.php?m=events&p=search"); ?>" class="btn"><i class="glyphicon glyphicon-search"></i> <?php echo vldext_lang("events","opt_search"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['prev_page']) ? $_obj['prev_page'] : "&#123;prev_page&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-menu-left"></i> &laquo; <?php echo vldext_lang("events","prev_month"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page']) ? $_obj['next_page'] : "&#123;next_page&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-menu-right"></i> <?php echo vldext_lang("events","next_month"); ?> &raquo;</a>
                                </div>

                                <div class="clearfix"></div>
                           </div>

			<div style="margin-bottom:15px;">
				<div style="float:left; padding-right:5px; font-size:16px; font-weight:bold;"><?php echo vldext_anchor(array('url1'=>"events/",'url2'=>"index.php?m=events&p=calendar",'name'=>"events|frm_events")); ?></div>
				<div style="float:left; padding-right:5px; font-size:16px; font-weight:bold;"><span>&#187;</span></div>
				<div style="float:left; padding-right:2px; font-size:16px; font-weight:bold;"><span><?php echo isset($_obj['events_date']) ? $_obj['events_date'] : "&#123;events_date&#125;"; ?></span></div>
				<div style="float:right; padding-right:2px; font-size:16px; font-weight:bold;"><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/rss/","index.php?m=events&p=rss"); ?>" target="_blank"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/rss.png" border="0" /></a></div>
                <div class="clearfix"></div>
			</div>
                        

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_events">

		<div class="typemedia">
			<?php if (!empty($_obj['events_entries'])){ if (!is_array($_obj['events_entries'])) $_obj['events_entries']=array(array('events_entries'=>$_obj['events_entries'])); $_tmp_arr_keys=array_keys($_obj['events_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['events_entries']=array(0=>$_obj['events_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['events_entries']=count($_obj['events_entries']); foreach ($_obj['events_entries'] as $rowcnt=>$events_entries) { $events_entries['rowcnt']=$rowcnt; $events_entries['rowpos']=$rowcnt+1; $events_entries['rownum']=$rowcnt%2+1; $events_entries['rowtotal']=$_cnt['events_entries']; $events_entries['rowfirst']=$rowcnt==0?1:0; $events_entries['rowlast']=($rowcnt+1)==$_cnt['events_entries']?1:0; $_obj=&$events_entries; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<?php if ( $this->objval($_obj,'event_picture_preview')  &&  $this->objval($_obj,'event_picture_active') ) { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['event_picture_preview']) ? $_obj['event_picture_preview'] : "&#123;event_picture_preview&#125;"; ?>" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<?php } else { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<?php } ?>
								</div>
							</td>
							<td class="data" valign="top">
								<h2 class="inner" style="font-size:13px;width:500px !important;overflow:inherit;word-wrap: break-word;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?></a></h2>
								
                                <div class="actions">
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_guests_link']) ? $_obj['event_guests_link'] : "&#123;event_guests_link&#125;"; ?>"><?php echo isset($_obj['event_total_guests']) ? $_obj['event_total_guests'] : "&#123;event_total_guests&#125;"; ?> <?php echo vldext_lang("events","total_guests"); ?></a></div>
										<?php if ( @$PREFS->conf['enable_event_comments']  &&  $this->objval($_obj,'event_allow_comments') ) { ?>
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_comments_link']) ? $_obj['event_comments_link'] : "&#123;event_comments_link&#125;"; ?>"><?php echo isset($_obj['event_total_comments']) ? $_obj['event_total_comments'] : "&#123;event_total_comments&#125;"; ?> <?php echo vldext_lang("events","total_comments"); ?></a></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_event_pictures'] ) { ?>
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_link']) ? $_obj['event_pictures_link'] : "&#123;event_pictures_link&#125;"; ?>"><?php echo isset($_obj['event_total_pictures']) ? $_obj['event_total_pictures'] : "&#123;event_total_pictures&#125;"; ?> <?php echo vldext_lang("events","total_pictures"); ?></a></div>
										<?php } ?>
                                        <div style="float:left; position: relative; font-size:12px; padding-right:7px;"><?php echo vldext_lang("events","creator"); ?>: <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a>
                                        </div>
									</div>
									<div class="clearfix"></div>
								</div>
                                
                                <div class="datainfo" style="padding-top:5px;width:500px !important;overflow:inherit;word-wrap: break-word;">
									<dl class="datainfo">
										<dt style="float:left; font-size:13px;"><?php echo isset($_obj['event_field_summary_name']) ? $_obj['event_field_summary_name'] : "&#123;event_field_summary_name&#125;"; ?>:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;width:400px !important;overflow:inherit;word-wrap: break-word;"><span style="width:400px !important;overflow:inherit;word-wrap: break-word;"><?php echo isset($_obj['event_field_summary_value']) ? $_obj['event_field_summary_value'] : "&#123;event_field_summary_value&#125;"; ?></span></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;"><?php echo isset($_obj['event_field_place_name']) ? $_obj['event_field_place_name'] : "&#123;event_field_place_name&#125;"; ?>:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;"><?php echo isset($_obj['event_field_place_value']) ? $_obj['event_field_place_value'] : "&#123;event_field_place_value&#125;"; ?></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;"><?php echo vldext_lang("events","startdate"); ?>:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;"><?php echo isset($_obj['event_start_date']) ? $_obj['event_start_date'] : "&#123;event_start_date&#125;"; ?></dd>
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

<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>