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
 ?><?php if (!empty($_obj['news_obj'])){ if (!is_array($_obj['news_obj'])) $_obj['news_obj']=array(array('news_obj'=>$_obj['news_obj'])); $_tmp_arr_keys=array_keys($_obj['news_obj']); if ($_tmp_arr_keys[0]!='0') $_obj['news_obj']=array(0=>$_obj['news_obj']); $_stack[$_stack_cnt++]=$_obj; $_cnt['news_obj']=count($_obj['news_obj']); foreach ($_obj['news_obj'] as $rowcnt=>$news_obj) { $news_obj['rowcnt']=$rowcnt; $news_obj['rowpos']=$rowcnt+1; $news_obj['rownum']=$rowcnt%2+1; $news_obj['rowtotal']=$_cnt['news_obj']; $news_obj['rowfirst']=$rowcnt==0?1:0; $news_obj['rowlast']=($rowcnt+1)==$_cnt['news_obj']?1:0; $_obj=&$news_obj; ?>
	<item>
		<title><?php echo isset($_obj['news_title']) ? $_obj['news_title'] : "&#123;news_title&#125;"; ?></title>
		<pubDate><?php echo isset($_obj['news_date_rss']) ? $_obj['news_date_rss'] : "&#123;news_date_rss&#125;"; ?></pubDate>
		<link><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['news_link']); ?></link>
		<description>
			<?php if ( $this->objval($_obj,'news_picture') ) { ?>
				&lt;img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['news_picture']) ? $_obj['news_picture'] : "&#123;news_picture&#125;"; ?>" alt="" align="left" border="0" /&gt;
			<?php } ?>
			<?php echo vldext_htmlentities($_obj['news_body']); ?>
		</description>
		<guid><?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_htmlentities($_obj['news_link']); ?></guid>
	</item>
<?php } $_obj=$_stack[--$_stack_cnt];} ?>