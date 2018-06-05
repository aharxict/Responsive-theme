<!DOCTYPE html>
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

<!-- IF active_module == "member_profile" AND hide_content != "1" -->
	<title>{member_username} | {htmlentities:app_page} | {htmlentities:settings.app_title}</title>
<!-- ELSEIF (active_module == "member_albums" OR active_module == "member_pictures" OR active_module == "member_pictures_view") AND hide_content != "1" -->
	<!-- IF picture_description -->
		<title>{member_username} | {trim:picture_description,64} | {htmlentities:settings.app_title}</title>
	<!-- ELSEIF album_description -->
		<title>{member_username} | {trim:album_description,64} | {htmlentities:settings.app_title}</title>
	<!-- ELSE -->
		<title>{member_username} | {htmlentities:app_page} | {htmlentities:settings.app_title}</title>
	<!-- ENDIF -->
<!-- ELSEIF (active_module == "member_videos" OR active_module == "member_videos_view") AND hide_content != "1" -->
	<!-- IF video_description -->
		<title>{member_username} | {trim:video_description,64} | {htmlentities:settings.app_title}</title>
	<!-- ELSE -->
		<title>{member_username} | {htmlentities:app_page} | {htmlentities:settings.app_title}</title>
	<!-- ENDIF -->
<!-- ELSEIF (active_module == "member_audio" OR active_module == "member_friends" OR active_module == "member_guestbook" OR active_module == "member_gifts" OR active_module == "member_events") AND hide_content != "1" -->
	<title>{member_username} | {htmlentities:app_page} | {htmlentities:settings.app_title}</title>
<!-- ELSEIF (active_module == "member_blog" OR active_module == "member_blog_entry") AND hide_content != "1" -->
	<!-- IF entry_title -->
		<title>{member_username} | {trim:entry_title,64} | {htmlentities:settings.app_title}</title>
	<!-- ELSE -->
		<title>{member_username} | {htmlentities:app_page} | {htmlentities:settings.app_title}</title>
	<!-- ENDIF -->
<!-- ELSEIF (active_module == "events_details" OR active_module == "events_guests" OR active_module == "events_pictures") AND hide_content != "1" -->
	<!-- IF event_name -->
		<title>{event_name} | {htmlentities:app_page} | {htmlentities:settings.app_title}</title>
	<!-- ELSE -->
		<title>{htmlentities:app_page} | {htmlentities:settings.app_title}</title>
	<!-- ENDIF -->
<!-- ELSE -->
	<title>{htmlentities:app_page} | {htmlentities:settings.app_title}</title>
<!-- ENDIF -->

<!-- Bootstrap Core CSS -->
<link href="{virtual_tpl_path}{session.template}/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="{virtual_tpl_path}{session.template}/css/main.css">
<link href="{virtual_tpl_path}{session.template}/css/custom.css" rel="stylesheet">

<script src="https://use.edgefonts.net/bebas-neue.js"></script>

<!-- Custom Fonts & Icons -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,600,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{virtual_tpl_path}{session.template}/css/icomoon-social.css">
<link rel="stylesheet" href="{virtual_tpl_path}{session.template}/css/font-awesome.min.css">

<script type="text/javascript" src="{virtual_path}includes/js/jquery.js"></script>

	<script src="{virtual_tpl_path}{session.template}/js/jquery-1.9.1.min.js"></script>

	<!-- IF loggedin AND settings.enable_chat AND session.can_chat -->
	<script type="text/javascript" src="{virtual_path}includes/js/jquery.cookie.js"></script>
	<!-- ENDIF -->
<script type="text/javascript" src="{virtual_path}includes/js/misc.js"></script>

<!-- IF loggedin AND settings.enable_chat AND session.can_chat -->
<link rel="stylesheet" type="text/css" href="{virtual_tpl_path}{session.template}/media/footpanel.css" />
<script type="text/javascript" src="{virtual_path}includes/js/jquery.cookie.js"></script>

<script type="text/javascript" src="{virtual_path}includes/js/chat.js"></script>
<!-- ENDIF -->

<!-- IF active_module == "account_audio_edit" OR active_module == "account_pictures_edit" OR active_module == "account_events_pictures_edit" OR active_module == "account_videos_edit" OR active_module == "account_audio" OR active_module == "member_audio" OR active_module == "member_videos" OR active_module == "member_videos_view" -->
<script type="text/javascript" src="{virtual_path}includes/js/swfobject.js"></script>
<!-- ELSEIF loggedin -->
<script type="text/javascript" src="{virtual_path}includes/js/swfobject.js"></script>
<!-- ENDIF -->

<script src="{virtual_tpl_path}{session.template}/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	
<!-- IF loggedin == "1" -->
<script type="text/javascript">
/*(function worker() {
  $.ajax({
	type: 'POST',
    url: '{virtual_tpl_path}{session.template}/ajax.php',
    data: { userid: '{session.member_id}' },
	cache: false,
	success: function(data) {
      $('#result').html(data);
    },
    complete: function() {
      // Schedule the next request when the current one's complete
      setTimeout(worker, 5000);
    }
  });
})();*/
</script>
<!-- ENDIF -->


<style type="text/css">
* {
margin: 0;
}
html, body {
height: 100%;
}
</style>
	<link rel="stylesheet" href="{virtual_tpl_path}{session.template}/css/style.css">

</head>
<body style="height: 100%;" <!-- IF loggedin AND settings.enable_chat AND session.can_chat -->onload="initChat({settings.chat_check_sec},'{session.username}',{session.sound_notify});"<!-- ENDIF -->>
<div class="pagewrapper" style="min-height: 100%; height: auto !important; height: 100%; margin: 0 auto;
<!-- IF loggedin == "0" -->
padding-top: 60px;
<!-- ENDIF -->
">

<header class="navbar navbar-inverse navbar-fixed-top" role="banner" style="padding:0px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- IF loggedin == "0" -->
                <a class="navbar-brand" href="{virtual_path}"><img src="{virtual_tpl_path}{session.template}/media/small_logo_2.png" alt="" style="margin-top:-6px;"></a>
                <!-- ELSE -->
				<a class="navbar-brand loged" href="{virtual_path}"><img src="{virtual_tpl_path}{session.template}/media/small_logo_2.png" alt="" style="margin-top:-6px;"></a>

				<!-- <a class="navbar-brand" href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/home/","index.php?m=account_home"}"><img src="{virtual_tpl_path}{session.template}/media/logo.png" alt="" style="margin-top:-6px;"></a> -->
                <!-- ENDIF -->
            </div>
		<div class="collapse navbar-collapse navbar-collapse-top">
		<ul class="nav navbar-nav sub-menu"
			<!-- IF loggedin == "1" -->
			style="display: none;"
			<!-- ENDIF -->
		>
			<!-- IF loggedin == "0" -->
			<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/login/","index.php?m=account_login"}">{lang:"core","menu_login"}</a></li>
			<!-- ENDIF -->
			<!-- IF loggedin == "0" -->
			<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/register/","index.php?m=account_register"}">{lang:"core","menu_register"}</a></li>
			<!-- ENDIF -->

		</ul>
		<ul class="nav navbar-nav navbar-right">

		<!-- IF loggedin == "0" -->
		<li><a href="{virtual_path}">{lang:"core","menu_index"}</a></li>
		<!-- ELSE -->
		<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/home/","index.php?m=account_home"}">{lang:"core","menu_index"}</a></li>
		<!-- ENDIF -->

		<!-- IF settings.is_news -->
		<li><a href="{virtual_path}news/">{lang:"core","menu_news"}</a></li>
		<!-- ENDIF -->
        <!-- IF settings.enable_global_blogs_page -->
		<li><a href="{virtual_path}blogs/">{lang:"core","menu_blogs"}</a></li>
		<!-- ENDIF -->  
		<li><a href="{virtual_path}search/">{lang:"core","menu_search"}</a></li>
		<!-- IF loggedin == "0" -->
				<!-- IF settings.enable_global_pictures_page -->
                <li><a href="{virtual_path}pictures/">{lang:"core","menu_pictures"}</a></li>
                <!-- ENDIF -->
				<!-- IF settings.enable_global_videos_page -->
                <li><a href="{virtual_path}videos/">{lang:"core","menu_videos"}</a></li>
                <!-- ENDIF -->
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <i class="icon-angle-down"></i></a>
				<ul class="dropdown-menu">
				<!-- IF settings.is_news -->
				<li><a href="{virtual_path}news/">{lang:"core","menu_news"}</a></li>
        		<!-- ENDIF -->
                <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","contactus/","index.php?m=contactus"}">{lang:"core","menu_contactus"}</a></li>
				<li><a href="{virtual_path}page/general/tos/">{lang:"core","menu_tos"}</a></li>
				</ul>
		</li>
		
        <!-- ELSE -->
		
        <!-- IF settings.enable_global_pictures_page -->
        <li><a href="{virtual_path}pictures/">{lang:"core","menu_pictures"}</a></li>
        <!-- ENDIF -->
		<!-- IF settings.enable_global_videos_page -->
        <li><a href="{virtual_path}videos/">{lang:"core","menu_videos"}</a></li>
        <!-- ENDIF -->
		<!-- IF settings.enable_events -->
		<li><a href="{virtual_path}events/calendar/">{lang:"core","menu_events"}</a></li>
		<!-- ENDIF -->
		<!-- IF settings.enable_hotornot_page AND settings.enable_picture_rating -->
		<li><a href="{virtual_path}hotornot/">{lang:"core","menu_rate"}</a></li>
		<!-- ENDIF -->

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <i class="icon-angle-down"></i></a>
				<ul class="dropdown-menu">
                <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","contactus/","index.php?m=contactus"}">{lang:"core","menu_contactus"}</a></li>
				<li><a href="{virtual_path}page/general/tos/">{lang:"core","menu_tos"}</a></li>
				</ul>
		</li>
		<!-- ENDIF -->

		<!-- IF session.can_access_cp -->
		<li>{anchor:host=virtual_cp_path,url1="",url2="",name="CP",pre="<span>",pro="</span>"}</li>
		<!-- ENDIF -->

                
		</ul>

		</div>
	</div>
</header>
<div id="inner-user-menu"></div>
<!--/header-->