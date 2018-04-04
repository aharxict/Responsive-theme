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
 ?><?php if ( $this->objval($_obj,'ext_activities') ) { ?>
	<div class="subtitle subtitle_small">
		<h2 style="font-size:18px;"><?php echo vldext_lang("core","activities"); ?></h2>
	</div>
	<table class="plain activities">
		<?php if (!empty($_obj['ext_activities'])){ if (!is_array($_obj['ext_activities'])) $_obj['ext_activities']=array(array('ext_activities'=>$_obj['ext_activities'])); $_tmp_arr_keys=array_keys($_obj['ext_activities']); if ($_tmp_arr_keys[0]!='0') $_obj['ext_activities']=array(0=>$_obj['ext_activities']); $_stack[$_stack_cnt++]=$_obj; $_cnt['ext_activities']=count($_obj['ext_activities']); foreach ($_obj['ext_activities'] as $rowcnt=>$ext_activities) { $ext_activities['rowcnt']=$rowcnt; $ext_activities['rowpos']=$rowcnt+1; $ext_activities['rownum']=$rowcnt%2+1; $ext_activities['rowtotal']=$_cnt['ext_activities']; $ext_activities['rowfirst']=$rowcnt==0?1:0; $ext_activities['rowlast']=($rowcnt+1)==$_cnt['ext_activities']?1:0; $_obj=&$ext_activities; ?>
			<tr <?php if ( $this->objval($_obj,'rowlast') ) { ?>class="last"<?php } ?>>
				<td class="activity" style="padding-bottom:5px;">
					<?php if ( $this->objval($_obj,'activity_type')  == "friends") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/friend.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "blogs") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/blog.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "albums") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/album.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "pictures") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/picture.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "audios") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/audio.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "videos") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/video.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "events") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/event.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "guestbooks") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/guestbook.png" align="absmiddle" />
					<?php } elseif ( $this->objval($_obj,'activity_type')  == "gifts") { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/gift.png" align="absmiddle" />
					<?php } else { ?>
						<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/activities/comment.png" align="absmiddle" />
					<?php } ?>
					<?php echo isset($_obj['activity_action']) ? $_obj['activity_action'] : "&#123;activity_action&#125;"; ?> <?php echo isset($_obj['activity_date']) ? $_obj['activity_date'] : "&#123;activity_date&#125;"; ?>.
				</td>
			</tr>
		<?php } $_obj=$_stack[--$_stack_cnt];} ?>
	</table>
	<div class="clear"></div>
	<script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('a.tooltip').ToolTip('htmltooltip');
		});
	</script>
<?php } ?>
