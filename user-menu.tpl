<nav id="user-menu" role="navigation" class="navbar navbar-default navbar-usermenu usermenu-profile">

	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a href="#" class="navbar-brand2">Menu</a>
	</div>

	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-usermenu nav-ul">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-user" style="padding-right:8px;"></span>{lang:"core","usermenu_outter_profile"} <b class="caret"></b></a>
            	<ul role="menu" class="dropdown-menu">
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/home/","index.php?m=account_home"}"><span class="glyphicon glyphicon-home" style="padding-right:8px;"></span>{lang:"core","usermenu_page"}</a></li>
                    <li><a href="{virtual_path}index.php?m=member_profile&id={session.member_id}"><span class="glyphicon glyphicon-user" style="padding-right:8px;"></span>View {lang:"core","usermenu_outter_profile"}</a></li>
					<li class="divider"></li>
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/profile/","index.php?m=account_profile"}"><span class="glyphicon glyphicon-edit" style="padding-right:8px;"></span>{lang:"core","usermenu_profile"}</a></li>
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/photo/","index.php?m=account_photo"}"><span class="glyphicon glyphicon-picture" style="padding-right:8px;"></span>{lang:"core","usermenu_photo"}</a></li>
				</ul>
            </li>

			<!-- IF settings.enable_messaging -->
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-envelope" style="padding-right:8px;"></span>{lang:"core","usermenu_outter_messages"} <span id="result"></span><b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/","index.php?m=account_messages&p=inbox"}"><span class="glyphicon glyphicon-inbox" style="padding-right:8px;"></span>{lang:"core","usermenu_messages_inbox"}</a></li>
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/messages/sent/","index.php?m=account_messages&p=sent"}"><span class="glyphicon glyphicon-send" style="padding-right:8px;"></span>{lang:"core","usermenu_messages_sent"}</a></li>
				</ul>
			</li>
            <!-- ENDIF -->
            
            <!-- IF settings.enable_pictures OR settings.enable_videos OR settings.enable_audio -->
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-hdd" style="padding-right:8px;"></span>{lang:"core","usermenu_outter_media"} <span id="result"></span><b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<!-- IF settings.enable_pictures -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/albums/","index.php?m=account_albums"}"><span class="glyphicon glyphicon-picture" style="padding-right:8px;"></span>{lang:"core","usermenu_pictures"}</a></li>
                    <!-- ENDIF -->
					<!-- IF settings.enable_videos -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/videos/","index.php?m=account_videos"}"><span class="glyphicon glyphicon-facetime-video" style="padding-right:8px;"></span>{lang:"core","usermenu_videos"}</a></li>
                    <!-- ENDIF -->
                    <!-- IF settings.enable_audio -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/audio/","index.php?m=account_audio"}"><span class="glyphicon glyphicon-sound-stereo" style="padding-right:8px;"></span>{lang:"core","usermenu_audio"}</a></li>
                    <!-- ENDIF -->
				</ul>
			</li>
            <!-- ENDIF -->
            
            <!-- IF settings.enable_guestbooks OR settings.enable_blogs OR settings.enable_events OR settings.enable_gifts -->
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-folder-open" style="padding-right:8px;"></span>{lang:"core","usermenu_outter_apps"} <span id="result"></span><b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<!-- IF settings.enable_blogs -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blog/","index.php?m=account_blog"}"><span class="glyphicon glyphicon-book" style="padding-right:8px;"></span>{lang:"core","usermenu_blog"}</a></li>
                    <!-- ENDIF -->
                    <!-- IF settings.enable_gifts -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/","index.php?m=account_gifts&p=inbox"}"><span class="glyphicon glyphicon-gift" style="padding-right:8px;"></span>{lang:"core","usermenu_gifts"}</a></li>
                    <!-- ENDIF -->
                    <!-- IF settings.enable_guestbooks -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/guestbook/","index.php?m=account_guestbook"}"><span class="glyphicon glyphicon-comment" style="padding-right:8px;"></span>{lang:"core","usermenu_guestbook"}</a></li>
                    <!-- ENDIF -->
                    <!-- IF settings.enable_events -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/events/","index.php?m=account_events"}"><span class="glyphicon glyphicon-calendar" style="padding-right:8px;"></span>{lang:"core","usermenu_events"}</a></li>
                    <!-- ENDIF -->
				</ul>
			</li>
            <!-- ENDIF -->

			<!-- IF settings.enable_friends OR settings.enable_favorites -->
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-globe" style="padding-right:8px;"></span>{lang:"core","usermenu_outter_network"} <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
                    <!-- IF settings.enable_friends -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/friends/","index.php?m=account_friends"}"><span class="glyphicon glyphicon-heart" style="padding-right:8px;"></span>{lang:"core","usermenu_friends"}</a></li>
                    <!-- ENDIF -->
                    <!-- IF settings.enable_favorites -->
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/favorites/","index.php?m=account_favorites"}"><span class="glyphicon glyphicon-star" style="padding-right:8px;"></span>{lang:"core","usermenu_favorites"}</a></li>
                    <!-- ENDIF -->
                    <!-- IF settings.enable_visitors -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/visitors/","index.php?m=account_visitors"}"><span class="glyphicon glyphicon-eye-open" style="padding-right:8px;"></span>{lang:"core","usermenu_visitors"}</a></li>
                    <!-- ENDIF -->
                    <!-- IF settings.enable_blocked_members -->
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blocked/","index.php?m=account_blocked"}"><span class="glyphicon glyphicon-ban-circle" style="padding-right:8px;"></span>{lang:"core","usermenu_blocked"}</a></li>
                    <!-- ENDIF -->
				</ul>
			</li>
            <!-- ENDIF -->
            
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-cog" style="padding-right:8px;"></span>{lang:"core","usermenu_outter_settings"} <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/settings/","index.php?m=account_settings"}"><span class="glyphicon glyphicon-cog" style="padding-right:8px;"></span>{lang:"core","usermenu_settings"}</a></li>
					<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/notifications/","index.php?m=account_notifications"}"><span class="glyphicon glyphicon-flag" style="padding-right:8px;"></span>{lang:"core","usermenu_notifications"}</a></li>
                    <li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/privacy/","index.php?m=account_privacy"}"><span class="glyphicon glyphicon-eye-open" style="padding-right:8px;"></span>{lang:"core","usermenu_privacy"}</a></li>
                    <!-- IF settings.enable_upgrades AND session.can_upgrade_account -->
            		<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/upgrade/","index.php?m=account_upgrade"}"><span class="glyphicon glyphicon-shopping-cart" style="padding-right:8px;"></span>{lang:"core","usermenu_upgrade"}</a></li>
            		<!-- ENDIF -->
				</ul>
			</li>                
			
        </ul>

		<ul class="nav navbar-nav navbar-usermenu navbar-right nav-ul">
			<li><a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/logout/","index.php?m=account_logout"}"><span class="glyphicon glyphicon-log-out" style="padding-right:8px;"></span>{lang:"core","usermenu_logout"}</a></li>
		</ul>
	</div>

</nav>