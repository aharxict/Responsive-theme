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
 ?><?php if ( $this->objval($_obj,'ext_members') ) { ?>
<div style="position: relative; box-shadow: 1px 1px 5px 0px #CED4E0; border-radius: 3px; background: #FFF none repeat scroll 0% 0%; margin-top: 10px; padding:5px; margin-bottom:7px;">
	<div class="sidebox_wrap">
		<div class="sidebox">
			<div class="memberslist" style="padding-left:5px; padding-bottom:5px;">
            <h2 style="font-size:16px; font-weight:300; border-bottom: 2px dotted #CCC; padding-bottom:5px; margin-bottom:10px;"><?php echo vldext_lang("core","home_latest_visitors"); ?>...</h2>
				<?php if (!empty($_obj['ext_members'])){ if (!is_array($_obj['ext_members'])) $_obj['ext_members']=array(array('ext_members'=>$_obj['ext_members'])); $_tmp_arr_keys=array_keys($_obj['ext_members']); if ($_tmp_arr_keys[0]!='0') $_obj['ext_members']=array(0=>$_obj['ext_members']); $_stack[$_stack_cnt++]=$_obj; $_cnt['ext_members']=count($_obj['ext_members']); foreach ($_obj['ext_members'] as $rowcnt=>$ext_members) { $ext_members['rowcnt']=$rowcnt; $ext_members['rowpos']=$rowcnt+1; $ext_members['rownum']=$rowcnt%2+1; $ext_members['rowtotal']=$_cnt['ext_members']; $ext_members['rowfirst']=$rowcnt==0?1:0; $ext_members['rowlast']=($rowcnt+1)==$_cnt['ext_members']?1:0; $_obj=&$ext_members; ?>
					<div class="image" style="float:left; padding-right:5px; padding-bottom:5px;">
						<?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
							<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="" border="0" width="60" height="60" style="width:60px; border-radius:3px;" /><br/></a>
						<?php } else { ?>
                        <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" width="60" height="60" style="width:60px; border-radius:3px;" /><br/></a>
                        <?php } ?>
					</div>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php } ?>