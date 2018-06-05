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
 ?><?php if (!empty($_obj['blog_entries'])){ if (!is_array($_obj['blog_entries'])) $_obj['blog_entries']=array(array('blog_entries'=>$_obj['blog_entries'])); $_tmp_arr_keys=array_keys($_obj['blog_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['blog_entries']=array(0=>$_obj['blog_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['blog_entries']=count($_obj['blog_entries']); foreach ($_obj['blog_entries'] as $rowcnt=>$blog_entries) { $blog_entries['rowcnt']=$rowcnt; $blog_entries['rowpos']=$rowcnt+1; $blog_entries['rownum']=$rowcnt%2+1; $blog_entries['rowtotal']=$_cnt['blog_entries']; $blog_entries['rowfirst']=$rowcnt==0?1:0; $blog_entries['rowlast']=($rowcnt+1)==$_cnt['blog_entries']?1:0; $_obj=&$blog_entries; ?>
	<item>
		<title><?php echo isset($_obj['entry_title']) ? $_obj['entry_title'] : "&#123;entry_title&#125;"; ?></title>
		<pubDate><?php echo isset($_obj['entry_post_date_rss']) ? $_obj['entry_post_date_rss'] : "&#123;entry_post_date_rss&#125;"; ?></pubDate>
		<author><?php echo vldext_htmlentities($_stack[0]['member_username']); ?></author>
		<link><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['entry_link']); ?></link>
		<description>
			<?php if ( $this->objval($_obj,'entry_picture_preview') ) { ?>
				&lt;img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['entry_picture_preview']) ? $_obj['entry_picture_preview'] : "&#123;entry_picture_preview&#125;"; ?>" alt="" align="left" border="0" /&gt;
			<?php } ?>
			<?php echo vldext_htmlentities($_obj['entry_body']); ?>
		</description>
		<guid><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['entry_link']); ?></guid>
	</item>
<?php } $_obj=$_stack[--$_stack_cnt];} ?>