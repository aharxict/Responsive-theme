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

include_once SYS_PATH . "includes/ext/core/ext.htmlentities.php";
 ?><?php if (!empty($_obj['events_entries'])){ if (!is_array($_obj['events_entries'])) $_obj['events_entries']=array(array('events_entries'=>$_obj['events_entries'])); $_tmp_arr_keys=array_keys($_obj['events_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['events_entries']=array(0=>$_obj['events_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['events_entries']=count($_obj['events_entries']); foreach ($_obj['events_entries'] as $rowcnt=>$events_entries) { $events_entries['rowcnt']=$rowcnt; $events_entries['rowpos']=$rowcnt+1; $events_entries['rownum']=$rowcnt%2+1; $events_entries['rowtotal']=$_cnt['events_entries']; $events_entries['rowfirst']=$rowcnt==0?1:0; $events_entries['rowlast']=($rowcnt+1)==$_cnt['events_entries']?1:0; $_obj=&$events_entries; ?>
	<item>
		<title><?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?> - <?php echo isset($_obj['event_field_place_value']) ? $_obj['event_field_place_value'] : "&#123;event_field_place_value&#125;"; ?></title>
		<pubDate><?php echo isset($_obj['event_start_date_rss']) ? $_obj['event_start_date_rss'] : "&#123;event_start_date_rss&#125;"; ?></pubDate>
		<author><?php echo vldext_htmlentities($_obj['member_username']); ?></author>
		<link><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['event_details_link']); ?></link>
		<description>
			<?php if ( $this->objval($_obj,'event_picture_preview')  &&  $this->objval($_obj,'event_picture_active') ) { ?>
				&lt;img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['event_picture_preview']) ? $_obj['event_picture_preview'] : "&#123;event_picture_preview&#125;"; ?>" alt="" align="left" border="0" /&gt;
			<?php } ?>
			<?php echo vldext_htmlentities($_obj['event_field_summary_value']); ?>
		</description>
		<guid><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['event_details_link']); ?></guid>
	</item>
<?php } $_obj=$_stack[--$_stack_cnt];} ?>