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
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/ext.anchor.php";
 ?><?php if ( $this->objval($_obj,'loggedin') ) { ?>
<!-- LEFT SIDEBAR, MEMBER PICTURE -->
<div class="col-sm-4 col-leftside">
<div class="blog-post blog-single-post" style="padding:5px !important;">

<?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture_large']) ? $SESSION->conf['picture_large'] : "&#123;picture_large&#125;"; ?>" alt="" border="0" /></a>
							<?php } else { ?>
                            <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" /></a>
                            <?php } ?>
</div>
<?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
</div>
<!-- /LEFT SIDEBAR, MEMBER PICTURE -->

<?php } else { ?>

<!-- LEFT SIDEBAR, LOGIN FORM -->
<div class="col-sm-4 col-leftside">
<div class="blog-post blog-single-post" style="margin-bottom:7px;">
<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
<h2><?php echo vldext_lang("core","login_header"); ?></h2>
</div>

<form method="post" name="login" action="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/login/","index.php?m=account_login"); ?>">
<div class="fieldset">
<dl class="fieldset">
<dt><label for="loginbox_username"><?php echo vldext_lang("core","login_username"); ?></label></dt>
<dd><input id="loginbox_username" maxlength="64" size="10" type="text" name="username" value="" class="text username form-control" /></dd>
<dt><label for="loginbox_password"><?php echo vldext_lang("core","login_password"); ?></label></dt>
<dd><input id="loginbox_password" maxlength="32" size="10" type="password" name="password" value="" class="text password form-control" /></dd>
<dt><div style="line-height:26px;"><input type="checkbox" name="nonxpcookie" value="1" class="checkbox" id="loginbox_nonxpcookie" style="float:left; margin-right:7px;" /> <label for="loginbox_nonxpcookie" style="float:left;"><?php echo vldext_lang("core","login_remember_me"); ?></label></div><div class="clearfix"></div></dt>
<dd class="submit"><input type="submit" name="login" value="<?php echo vldext_lang("core","login_submit"); ?>" class="submit btn" /></dd>
</dl>
</div>
<input type="hidden" name="islogin" value="1" />
<div class="itemfooter" style="padding-top:10px;">
<span class="glyphicon glyphicon-lock" style="padding-right:8px;"></span><span style="padding-right:10px;"><?php echo vldext_anchor(array('url1'=>"account/lostpass/",'url2'=>"index.php?m=account_lostpass",'name'=>"core|login_forgot_pass")); ?></span>
</div>
</form>
</div>
</div>

<!-- /LEFT SIDEBAR, LOGIN FORM -->
<?php } ?>