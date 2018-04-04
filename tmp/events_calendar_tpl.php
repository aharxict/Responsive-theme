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

include_once SYS_PATH . "includes/ext/ext.anchor.php";
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><?php echo vldext_anchor(array('url1'=>"events/calendar/",'url2'=>"index.php?m=events&p=calendar",'name'=>"events|frm_events")); ?></li>
				<li><span>&#187;</span></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['curr_page']) ? $_obj['curr_page'] : "&#123;curr_page&#125;"; ?>"><?php echo isset($_obj['events_date']) ? $_obj['events_date'] : "&#123;events_date&#125;"; ?></a></li>
				<li class="action"><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","events/rss/","index.php?m=events&p=rss"); ?>" target="_blank"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/rss.png" border="0" /></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1><?php echo isset($_obj['events_date']) ? $_obj['events_date'] : "&#123;events_date&#125;"; ?></h1>
		</div>
		<div class="options">
			<ul>
				<li><?php echo vldext_anchor(array('url1'=>"events/calendar/",'url2'=>"index.php?m=events&p=calendar",'name'=>"events|opt_calendar",'class'=>"active")); ?></li>
				<li><?php echo vldext_anchor(array('url1'=>"events/search/",'url2'=>"index.php?m=events&p=search",'name'=>"events|opt_search")); ?></li>
				<li class="break"></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['prev_page']) ? $_obj['prev_page'] : "&#123;prev_page&#125;"; ?>">&laquo; <?php echo vldext_lang("events","prev_month"); ?></a></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page']) ? $_obj['next_page'] : "&#123;next_page&#125;"; ?>"><?php echo vldext_lang("events","next_month"); ?> &raquo;</a></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_events">

		<table class="calendar" cellpadding="0" cellspacing="1" style="">
			<tr class="weekdays">
				<?php if (!empty($_obj['weekdays'])){ if (!is_array($_obj['weekdays'])) $_obj['weekdays']=array(array('weekdays'=>$_obj['weekdays'])); $_tmp_arr_keys=array_keys($_obj['weekdays']); if ($_tmp_arr_keys[0]!='0') $_obj['weekdays']=array(0=>$_obj['weekdays']); $_stack[$_stack_cnt++]=$_obj; $_cnt['weekdays']=count($_obj['weekdays']); foreach ($_obj['weekdays'] as $rowcnt=>$weekdays) { $weekdays['rowcnt']=$rowcnt; $weekdays['rowpos']=$rowcnt+1; $weekdays['rownum']=$rowcnt%2+1; $weekdays['rowtotal']=$_cnt['weekdays']; $weekdays['rowfirst']=$rowcnt==0?1:0; $weekdays['rowlast']=($rowcnt+1)==$_cnt['weekdays']?1:0; $_obj=&$weekdays; ?>
					<td><?php echo isset($_obj['name']) ? $_obj['name'] : "&#123;name&#125;"; ?></td>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
			</tr>
			<tr>
				<?php if (!empty($_obj['events_entries'])){ if (!is_array($_obj['events_entries'])) $_obj['events_entries']=array(array('events_entries'=>$_obj['events_entries'])); $_tmp_arr_keys=array_keys($_obj['events_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['events_entries']=array(0=>$_obj['events_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['events_entries']=count($_obj['events_entries']); foreach ($_obj['events_entries'] as $rowcnt=>$events_entries) { $events_entries['rowcnt']=$rowcnt; $events_entries['rowpos']=$rowcnt+1; $events_entries['rownum']=$rowcnt%2+1; $events_entries['rowtotal']=$_cnt['events_entries']; $events_entries['rowfirst']=$rowcnt==0?1:0; $events_entries['rowlast']=($rowcnt+1)==$_cnt['events_entries']?1:0; $_obj=&$events_entries; ?>
					<td class="eventdays <?php if ( $this->objval($_obj,'events_today') ) { ?>eventtoday<?php } ?>" valign="top">
						<p>
							<?php if ( $this->objval($_obj,'events_day') ) { ?>
								<?php echo isset($_obj['events_day']) ? $_obj['events_day'] : "&#123;events_day&#125;"; ?>
							<?php } else { ?>
								&nbsp;
							<?php } ?>
						</p>
						<?php if ( $this->objval($_obj,'events_day') ) { ?>
							<?php if ( $this->objval($_obj,'events_total')  > "1") { ?>
								<a href="javascript:void(0)" onclick="eventScroll(<?php echo isset($_obj['events_day']) ? $_obj['events_day'] : "&#123;events_day&#125;"; ?>,<?php echo isset($_obj['events_total']) ? $_obj['events_total'] : "&#123;events_total&#125;"; ?>);return false;" class="rotate"></a>
							<?php } ?>
						<?php } ?>
						<div class="clear"></div>
						<?php if (!empty($_obj['events'])){ if (!is_array($_obj['events'])) $_obj['events']=array(array('events'=>$_obj['events'])); $_tmp_arr_keys=array_keys($_obj['events']); if ($_tmp_arr_keys[0]!='0') $_obj['events']=array(0=>$_obj['events']); $_stack[$_stack_cnt++]=$_obj; $_cnt['events']=count($_obj['events']); foreach ($_obj['events'] as $rowcnt=>$events) { $events['rowcnt']=$rowcnt; $events['rowpos']=$rowcnt+1; $events['rownum']=$rowcnt%2+1; $events['rowtotal']=$_cnt['events']; $events['rowfirst']=$rowcnt==0?1:0; $events['rowlast']=($rowcnt+1)==$_cnt['events']?1:0; $_obj=&$events; ?>
							<div id="event_<?php echo isset($_stack[$_stack_cnt-1]['events_day']) ? $_stack[$_stack_cnt-1]['events_day'] : "&#123;events_day&#125;"; ?>_<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>" class="event_items_<?php echo isset($_stack[$_stack_cnt-1]['events_day']) ? $_stack[$_stack_cnt-1]['events_day'] : "&#123;events_day&#125;"; ?>" <?php if ( $this->objval($_obj,'rowcnt')  != "0") { ?>style="display:none;"<?php } ?>>
								<?php if ( $this->objval($_obj,'member_id') ) { ?>
									<?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
										<a class="eventtooltip" title="&lt;img src=<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?> />&lt;span class=birthday><?php echo vldext_trim($_obj['member_username'],20); ?> (<?php echo isset($_obj['profile_field_age_value_years']) ? $_obj['profile_field_age_value_years'] : "&#123;profile_field_age_value_years&#125;"; ?>)&lt;/span>" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="<?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?>" border="0" /><br/></a>
									<?php } else { ?>
										<a class="eventtooltip" title="&lt;img src=<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif />&lt;span class=birthday><?php echo vldext_trim($_obj['member_username'],20); ?> (<?php echo isset($_obj['profile_field_age_value_years']) ? $_obj['profile_field_age_value_years'] : "&#123;profile_field_age_value_years&#125;"; ?>)&lt;/span>" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="<?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?>" border="0" /><br/></a>
									<?php } ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo vldext_trim($_obj['member_username'],12); ?></a>
								<?php } else { ?>
									<?php if ( $this->objval($_obj,'event_picture_preview')  &&  $this->objval($_obj,'event_picture_active') ) { ?>
										<a class="eventtooltip" title="&lt;img src=<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['event_picture_preview']) ? $_obj['event_picture_preview'] : "&#123;event_picture_preview&#125;"; ?> />&lt;span class=event><?php echo vldext_trim($_obj['event_name'],20); ?>&lt;/span>" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['event_picture_preview']) ? $_obj['event_picture_preview'] : "&#123;event_picture_preview&#125;"; ?>" alt="<?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?>" border="0" /><br /></a>
									<?php } else { ?>
										<a class="eventtooltip" title="&lt;img src=<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif />&lt;span class=event><?php echo vldext_trim($_obj['event_name'],20); ?>&lt;/span>" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="<?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?>" border="0" /><br /></a>
									<?php } ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><?php echo vldext_trim($_obj['event_name'],30); ?></a>
								<?php } ?>
							</div>
						<?php } $_obj=$_stack[--$_stack_cnt];} ?>
					</td>
					<?php if ( $this->objval($_obj,'rowcnt')  > "0" &&  $this->objval($_obj,'rowcnt')  < "35" &&  $this->objval($_obj,'rowcnt')  % "7" == "6" &&  $this->objval($_obj,'rowlast')  != "1") { ?></tr><?php if ( $this->objval($_obj,'rowcnt')  != "34") { ?><tr><?php } ?><?php } ?>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
			</tr>
		</table>
		<script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('a.eventtooltip').ToolTip('eventtooltip');
		});
		</script>

	</div>

<?php } ?>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>
