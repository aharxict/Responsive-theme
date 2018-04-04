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
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/ext.anchor.php";
 ?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" style="height: 100%;">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<?php if ( $this->objval($_obj,'active_module')  == "member_profile" &&  $this->objval($_obj,'hide_content')  != "1") { ?>
	<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
<?php } elseif ( (  $this->objval($_obj,'active_module')  == "member_albums" ||  $this->objval($_obj,'active_module')  == "member_pictures" ||  $this->objval($_obj,'active_module')  == "member_pictures_view" )  &&  $this->objval($_obj,'hide_content')  != "1") { ?>
	<?php if ( $this->objval($_obj,'picture_description') ) { ?>
		<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_trim($_obj['picture_description'],64); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } elseif ( $this->objval($_obj,'album_description') ) { ?>
		<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_trim($_obj['album_description'],64); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } else { ?>
		<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } ?>
<?php } elseif ( (  $this->objval($_obj,'active_module')  == "member_videos" ||  $this->objval($_obj,'active_module')  == "member_videos_view" )  &&  $this->objval($_obj,'hide_content')  != "1") { ?>
	<?php if ( $this->objval($_obj,'video_description') ) { ?>
		<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_trim($_obj['video_description'],64); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } else { ?>
		<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } ?>
<?php } elseif ( (  $this->objval($_obj,'active_module')  == "member_audio" ||  $this->objval($_obj,'active_module')  == "member_friends" ||  $this->objval($_obj,'active_module')  == "member_guestbook" ||  $this->objval($_obj,'active_module')  == "member_gifts" ||  $this->objval($_obj,'active_module')  == "member_events" )  &&  $this->objval($_obj,'hide_content')  != "1") { ?>
	<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
<?php } elseif ( (  $this->objval($_obj,'active_module')  == "member_blog" ||  $this->objval($_obj,'active_module')  == "member_blog_entry" )  &&  $this->objval($_obj,'hide_content')  != "1") { ?>
	<?php if ( $this->objval($_obj,'entry_title') ) { ?>
		<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_trim($_obj['entry_title'],64); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } else { ?>
		<title><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?> | <?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } ?>
<?php } elseif ( (  $this->objval($_obj,'active_module')  == "events_details" ||  $this->objval($_obj,'active_module')  == "events_guests" ||  $this->objval($_obj,'active_module')  == "events_pictures" )  &&  $this->objval($_obj,'hide_content')  != "1") { ?>
	<?php if ( $this->objval($_obj,'event_name') ) { ?>
		<title><?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?> | <?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } else { ?>
		<title><?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
	<?php } ?>
<?php } else { ?>
	<title><?php echo vldext_htmlentities($_obj['app_page']); ?> | <?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></title>
<?php } ?>

<!-- Bootstrap Core CSS -->
<link href="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/css/main.css">
<link href="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/css/custom.css" rel="stylesheet">

<script src="http://use.edgefonts.net/bebas-neue.js"></script>

<!-- Custom Fonts & Icons -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,600,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/css/icomoon-social.css">
<link rel="stylesheet" href="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/css/font-awesome.min.css">

<script type="text/javascript" src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/js/misc.js"></script>

<?php if ( $this->objval($_obj,'loggedin')  &&  @$PREFS->conf['enable_chat']  &&  @$SESSION->conf['can_chat'] ) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/footpanel.css" />
<script type="text/javascript" src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/js/chat.js"></script>
<?php } ?>

<?php if ( $this->objval($_obj,'active_module')  == "account_audio_edit" ||  $this->objval($_obj,'active_module')  == "account_pictures_edit" ||  $this->objval($_obj,'active_module')  == "account_events_pictures_edit" ||  $this->objval($_obj,'active_module')  == "account_videos_edit" ||  $this->objval($_obj,'active_module')  == "account_audio" ||  $this->objval($_obj,'active_module')  == "member_audio" ||  $this->objval($_obj,'active_module')  == "member_videos" ||  $this->objval($_obj,'active_module')  == "member_videos_view") { ?>
<script type="text/javascript" src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/js/swfobject.js"></script>
<?php } elseif ( $this->objval($_obj,'loggedin') ) { ?>
<script type="text/javascript" src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/js/swfobject.js"></script>
<?php } ?>

<script src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	
<?php if ( $this->objval($_obj,'loggedin')  == "1") { ?>
<script type="text/javascript">
(function worker() {
  $.ajax({
	type: 'POST',
    url: '<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/ajax.php', 
    data: { userid: '<?php echo isset($SESSION->conf['member_id']) ? $SESSION->conf['member_id'] : "&#123;member_id&#125;"; ?>' },
	cache: false,
	success: function(data) {
      $('#result').html(data);
    },
    complete: function() {
      // Schedule the next request when the current one's complete
      setTimeout(worker, 5000);
    }
  });
})();
</script>
<?php } ?>


<style type="text/css">
* {
margin: 0;
}
html, body {
height: 100%;
}
</style>
</head>
<body style="height: 100%;" <?php if ( $this->objval($_obj,'loggedin')  &&  @$PREFS->conf['enable_chat']  &&  @$SESSION->conf['can_chat'] ) { ?>onload="initChat(<?php echo isset($PREFS->conf['chat_check_sec']) ? $PREFS->conf['chat_check_sec'] : "&#123;chat_check_sec&#125;"; ?>,'<?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>',<?php echo isset($SESSION->conf['sound_notify']) ? $SESSION->conf['sound_notify'] : "&#123;sound_notify&#125;"; ?>);"<?php } ?>>
<div class="pagewrapper" style="min-height: 100%; height: auto !important; height: 100%; margin: 0 auto;">

<header class="navbar navbar-inverse navbar-fixed-top" role="banner" style="padding:0px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
                <a class="navbar-brand" href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/logo.png" alt="" style="margin-top:-6px;"></a>
                <?php } else { ?>
                <a class="navbar-brand" href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/home/","index.php?m=account_home"); ?>"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/logo.png" alt="" style="margin-top:-6px;"></a>
                <?php } ?>
            </div>
		<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">

		<?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>"><?php echo vldext_lang("core","menu_index"); ?></a></li>
		<?php } else { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/home/","index.php?m=account_home"); ?>"><?php echo vldext_lang("core","menu_index"); ?></a></li>
		<?php } ?>
		<?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/register/","index.php?m=account_register"); ?>"><?php echo vldext_lang("core","menu_register"); ?></a></li>
		<?php } ?>
		<?php if ( @$PREFS->conf['is_news'] ) { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>news/"><?php echo vldext_lang("core","menu_news"); ?></a></li>
		<?php } ?>
        <?php if ( @$PREFS->conf['enable_global_blogs_page'] ) { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>blogs/"><?php echo vldext_lang("core","menu_blogs"); ?></a></li>
		<?php } ?>  
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>search/"><?php echo vldext_lang("core","menu_search"); ?></a></li>
		<?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
				<?php if ( @$PREFS->conf['enable_global_pictures_page'] ) { ?>
                <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>pictures/"><?php echo vldext_lang("core","menu_pictures"); ?></a></li>
                <?php } ?>
				<?php if ( @$PREFS->conf['enable_global_videos_page'] ) { ?>
                <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>videos/"><?php echo vldext_lang("core","menu_videos"); ?></a></li>
                <?php } ?>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <i class="icon-angle-down"></i></a>
				<ul class="dropdown-menu">
				<?php if ( @$PREFS->conf['is_news'] ) { ?>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>news/"><?php echo vldext_lang("core","menu_news"); ?></a></li>
        		<?php } ?>
                <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","contactus/","index.php?m=contactus"); ?>"><?php echo vldext_lang("core","menu_contactus"); ?></a></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>page/general/tos/"><?php echo vldext_lang("core","menu_tos"); ?></a></li>
				</ul>
		</li>
		
        <?php } else { ?>
		
        <?php if ( @$PREFS->conf['enable_global_pictures_page'] ) { ?>
        <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>pictures/"><?php echo vldext_lang("core","menu_pictures"); ?></a></li>
        <?php } ?>
		<?php if ( @$PREFS->conf['enable_global_videos_page'] ) { ?>
        <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>videos/"><?php echo vldext_lang("core","menu_videos"); ?></a></li>
        <?php } ?>
		<?php if ( @$PREFS->conf['enable_events'] ) { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>events/"><?php echo vldext_lang("core","menu_events"); ?></a></li>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_hotornot_page']  &&  @$PREFS->conf['enable_picture_rating'] ) { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>hotornot/"><?php echo vldext_lang("core","menu_rate"); ?></a></li>
		<?php } ?>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <i class="icon-angle-down"></i></a>
				<ul class="dropdown-menu">
                <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","contactus/","index.php?m=contactus"); ?>"><?php echo vldext_lang("core","menu_contactus"); ?></a></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>page/general/tos/"><?php echo vldext_lang("core","menu_tos"); ?></a></li>
				</ul>
		</li>
		<?php } ?>

		<?php if ( @$SESSION->conf['can_access_cp'] ) { ?>
		<li><?php echo vldext_anchor(array('host'=>$_obj['virtual_cp_path'],'url1'=>"",'url2'=>"",'name'=>"CP",'pre'=>"<span>",'pro'=>"</span>")); ?></li>
		<?php } ?>
		
        <?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/login/","index.php?m=account_login"); ?>"><?php echo vldext_lang("core","menu_login"); ?></a></li>
		<?php } ?>
                
		</ul>
		</div>
	</div>
</header><!--/header-->