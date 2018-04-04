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

 ?><?php if ( $this->objval($_obj,'ext_pictures') ) { ?>
	<?php if (!empty($_obj['ext_pictures'])){ if (!is_array($_obj['ext_pictures'])) $_obj['ext_pictures']=array(array('ext_pictures'=>$_obj['ext_pictures'])); $_tmp_arr_keys=array_keys($_obj['ext_pictures']); if ($_tmp_arr_keys[0]!='0') $_obj['ext_pictures']=array(0=>$_obj['ext_pictures']); $_stack[$_stack_cnt++]=$_obj; $_cnt['ext_pictures']=count($_obj['ext_pictures']); foreach ($_obj['ext_pictures'] as $rowcnt=>$ext_pictures) { $ext_pictures['rowcnt']=$rowcnt; $ext_pictures['rowpos']=$rowcnt+1; $ext_pictures['rownum']=$rowcnt%2+1; $ext_pictures['rowtotal']=$_cnt['ext_pictures']; $ext_pictures['rowfirst']=$rowcnt==0?1:0; $ext_pictures['rowlast']=($rowcnt+1)==$_cnt['ext_pictures']?1:0; $_obj=&$ext_pictures; ?>
		<div class="image" style="margin-top:15px; float:left; padding-right:5px;">
			<?php if ( $this->objval($_obj,'picture_adult')  == "0" ||  $this->objval($_obj,'picture_adult')  &&  @$SESSION->conf['can_view_adult_images']  &&  @$SESSION->conf['showadult'] ) { ?>
				<!-- <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"> -->
                <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="" border="0" style="width:150px; border-radius:3px;" /></a>
                <!-- </a> -->
			<?php } else { ?>
				<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_adult.gif" alt="" border="0" /></a>
			<?php } ?>
		</div>
	<?php } $_obj=$_stack[--$_stack_cnt];} ?>
	<div class="clearfix"></div>
<?php } ?>
