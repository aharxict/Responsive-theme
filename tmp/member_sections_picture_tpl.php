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

 ?><?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
	<?php if ( $this->objval($_obj,'member_picture_adult')  == "0" ||  $this->objval($_obj,'member_picture_adult')  &&  @$SESSION->conf['can_view_adult_images']  &&  @$SESSION->conf['showadult'] ) { ?>
		<?php if ( $this->objval($_stack[0],'active_module')  == "member_profile" &&  !  $this->objval($_obj,'member_profile_preview') ) { ?>
            <!-- <a class="picture_zoom" href="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture_large']) ? $_obj['member_picture_large'] : "&#123;member_picture_large&#125;"; ?>" id="profile_picture_<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>" target="_blank"> -->
            <img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture_large']) ? $_obj['member_picture_large'] : "&#123;member_picture_large&#125;"; ?>" alt="" border="0" style="height:125px; width:125px;" />
            <!-- </a> -->
			<div id="profile_picture_<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>_zoom" class="picture_zoom_in" style="display:none"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture_large']) ? $_obj['member_picture_large'] : "&#123;member_picture_large&#125;"; ?>" alt="" border="0" style="height:125px; width:125px;" width="125" height="125" /><br/></div>
<?php } else { ?>
<div class="imghover">
<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>">
<img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="" border="0" style="height:125px; width:125px;" width="125" height="125" />
</a>
</div>
<?php } ?>
<?php } else { ?>
<div class="imghover">
<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>">
<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_adult.gif" alt="" border="0" style="height:125px; width:125px;" width="125" height="125" />
</a>
</div>
<?php } ?>
<?php } else { ?>
<div class="imghover">
<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>">
<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" style="height:125px; width:125px;" width="125" height="125" />
</a>
</div>
<?php } ?>