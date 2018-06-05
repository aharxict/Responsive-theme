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

include_once SYS_PATH . "includes/ext/ext.vldthemes.php";
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
 ?><div class="vt_prof clearfix">

    <div class="vt_image <?php if ( $this->objval($_stack[0],'loggedin') ) { ?> <?php echo vldext_vldthemes(array('a'=>"onlinestatus",'status'=>$_obj['member_online'])); ?> <?php } ?>">
        <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>">     
            <?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
            <?php if ( $this->objval($_obj,'member_picture_adult')  == "0" ||  $this->objval($_obj,'member_picture_adult')  &&  @$SESSION->conf['can_view_adult_images']  &&  @$SESSION->conf['showadult'] ) { ?>       
            <img class="img-full img-responsive ease 1" src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="" border="0" />
            <!--  <img class="img-full img-responsive ease 1" src="<?php echo vldext_vldthemes(array('a'=>"thumbnail",'path'=>$_obj['member_media_path'],'filename'=>$_obj['member_picture'])); ?>" alt="" border="0" />-->
            <?php } else { ?>
            <img class="img-full img-responsive ease 2" src="<?php echo vldext_vldthemes(array('a'=>"blur",'path'=>$_obj['member_media_path'],'filename'=>$_obj['member_picture'])); ?>" alt="" border="0" />
            <?php } ?>
            <?php } else { ?>
              <img class="img-full img-responsive ease 3"  src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/images/<?php echo vldThemes::avatar_obj($_obj);?>" alt="" border="0" />
            <?php } ?>
        </a>
        <?php if ( $this->objval($_stack[0],'loggedin') ) { ?><?php echo vldext_vldthemes(array('a'=>"onlinedot",'status'=>$_obj['member_online'])); ?><?php } ?>
    </div>
            
    <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>" class="vt_username"> 
        <span class="visible-xs"><?php echo vldext_trim($_obj['member_username'],12); ?></span>
        <span class="hidden-xs"><?php echo vldext_trim($_obj['member_username'],12); ?></span>
        <?php if ( $this->objval($_obj,'profile_field_country_name')  ||  $this->objval($_obj,'profile_field_city_name') ) { ?>
        <?php } ?>
    </a>

    <?php if ( $this->objval($_stack[0],'loggedin') ) { ?>
    <div class="vt_prof_actions btn-group btn-group-justified">
        <a class=" btn btn-link"  href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/compose/","index.php?m=account_messages&p=compose&id="); ?><?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>" onclick="return showConversations(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>)"><span class="glyphicon glyphicon-envelope"></span></a>
      
        
        <a class="btn btn-link" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/favorites/add/","index.php?m=m=account_favorites&p=add&id="); ?><?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>"><span class="glyphicon glyphicon-thumbs-up"></span></a>
        <?php if ( @$SESSION->conf['can_delete_own_friends']  &&  $this->objval($_stack[0],'active_module')  == "account_friends") { ?>
        <a class="btn btn-link" href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("friends","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_delete_link']) ? $_obj['member_delete_link'] : "&#123;member_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("friends","delete"); ?>"><span class="glyphicon glyphicon-remove"></span></a></li>
        <?php } ?>
        <?php if ( $this->objval($_obj,'member_accept_link')  &&  $this->objval($_stack[0],'active_module')  == "account_friends") { ?>
        <a href="#" class="btn btn-link" onclick="javascript:confirmLink('<?php echo vldext_lang("friends","accept?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_accept_link']) ? $_obj['member_accept_link'] : "&#123;member_accept_link&#125;"; ?>')" title="<?php echo vldext_lang("friends","accept"); ?>"><span class="glyphicon glyphicon-ok"></span></a>
        <?php } ?>
        
        
        <?php if ( $this->objval($_stack[0],'active_module')  == "account_favorites" &&  @$SESSION->conf['can_delete_own_favorites'] ) { ?>
            <a href="#"  class="btn btn-link" onclick="javascript:confirmLink('<?php echo vldext_lang("favorites","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_delete_link']) ? $_obj['member_delete_link'] : "&#123;member_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("favorites","delete"); ?>"><span class="glyphicon glyphicon-remove"></span></a>
        <?php } ?>

        <?php if ( @$SESSION->conf['can_unblock_members']  &&  $this->objval($_stack[0],'active_module')  == "account_blocked") { ?>
        <a href="#" class="btn btn-link" onclick="javascript:confirmLink('<?php echo vldext_lang("blocked","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_delete_link']) ? $_obj['member_delete_link'] : "&#123;member_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("blocked","delete"); ?>"><span class="glyphicon glyphicon-remove"></span></a>
        <?php } ?>

        <?php if ( @$SESSION->conf['can_delete_own_events_guests']  &&  $this->objval($_stack[0],'active_module')  == "account_events") { ?>
        <a class="btn btn-link" onclick="javascript:confirmLink('<?php echo vldext_lang("events","deleteguest?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_delete_link']) ? $_obj['member_delete_link'] : "&#123;member_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("events","deleteguest"); ?>"><span class="glyphicon glyphicon-remove"></span></a>
        <?php } ?>

    </div>
     <?php } ?>



</div>