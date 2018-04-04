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

 ?><?php if ( $this->objval($_obj,'ext_members') ) { ?>
<div class="col-md-12 col-sm-12" style="margin:2px; margin-left:0; padding:7px;">
<?php if (!empty($_obj['ext_members'])){ if (!is_array($_obj['ext_members'])) $_obj['ext_members']=array(array('ext_members'=>$_obj['ext_members'])); $_tmp_arr_keys=array_keys($_obj['ext_members']); if ($_tmp_arr_keys[0]!='0') $_obj['ext_members']=array(0=>$_obj['ext_members']); $_stack[$_stack_cnt++]=$_obj; $_cnt['ext_members']=count($_obj['ext_members']); foreach ($_obj['ext_members'] as $rowcnt=>$ext_members) { $ext_members['rowcnt']=$rowcnt; $ext_members['rowpos']=$rowcnt+1; $ext_members['rownum']=$rowcnt%2+1; $ext_members['rowtotal']=$_cnt['ext_members']; $ext_members['rowfirst']=$rowcnt==0?1:0; $ext_members['rowlast']=($rowcnt+1)==$_cnt['ext_members']?1:0; $_obj=&$ext_members; ?>
	<div class="col-sm-2 col-xs-6" style="float:left; padding:5px;">
		<div class="image" style="width:100%;">
		<?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
			<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="" border="0" style="width:100%;" /><br/></a>
		<?php } else { ?>
			<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" /><br/></a>
		<?php } ?>
		</div>
	</div>
<?php } $_obj=$_stack[--$_stack_cnt];} ?>
<div class="clearfix"></div>
</div>
<?php } ?>