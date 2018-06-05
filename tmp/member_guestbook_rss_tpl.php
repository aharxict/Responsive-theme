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
 ?><?php if (!empty($_obj['guestbook_entries'])){ if (!is_array($_obj['guestbook_entries'])) $_obj['guestbook_entries']=array(array('guestbook_entries'=>$_obj['guestbook_entries'])); $_tmp_arr_keys=array_keys($_obj['guestbook_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['guestbook_entries']=array(0=>$_obj['guestbook_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['guestbook_entries']=count($_obj['guestbook_entries']); foreach ($_obj['guestbook_entries'] as $rowcnt=>$guestbook_entries) { $guestbook_entries['rowcnt']=$rowcnt; $guestbook_entries['rowpos']=$rowcnt+1; $guestbook_entries['rownum']=$rowcnt%2+1; $guestbook_entries['rowtotal']=$_cnt['guestbook_entries']; $guestbook_entries['rowfirst']=$rowcnt==0?1:0; $guestbook_entries['rowlast']=($rowcnt+1)==$_cnt['guestbook_entries']?1:0; $_obj=&$guestbook_entries; ?>
	<item>
		<title><?php echo vldext_htmlentities($_obj['member_username']); ?></title>
		<pubDate><?php echo isset($_obj['entry_post_date_rss']) ? $_obj['entry_post_date_rss'] : "&#123;entry_post_date_rss&#125;"; ?></pubDate>
		<author><?php echo vldext_htmlentities($_obj['member_username']); ?></author>
		<link><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['entry_link']); ?></link>
		<description>
			<?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
				&lt;img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="" align="left" border="0" /&gt;
			<?php } ?>
			<?php echo vldext_htmlentities($_obj['entry_body']); ?>
		</description>
		<guid><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['entry_link']); ?></guid>
	</item>
<?php } $_obj=$_stack[--$_stack_cnt];} ?>