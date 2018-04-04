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
 ?><nav role="navigation" class="navbar navbar-default navbar-usermenu usermenu-profile" style="background-color:transparent;">

	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a href="#" class="navbar-brand2" style="color:#828282;">Menu</a>
	</div>

	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-usermenu nav-ul">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-user" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_outter_profile"); ?> <b class="caret"></b></a>
            	<ul role="menu" class="dropdown-menu">
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/home/","index.php?m=account_home"); ?>"><span class="glyphicon glyphicon-home" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_page"); ?></a></li>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=member_profile&id=<?php echo isset($SESSION->conf['member_id']) ? $SESSION->conf['member_id'] : "&#123;member_id&#125;"; ?>"><span class="glyphicon glyphicon-user" style="padding-right:8px;"></span>View <?php echo vldext_lang("core","usermenu_outter_profile"); ?></a></li>
					<li class="divider"></li>
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/profile/","index.php?m=account_profile"); ?>"><span class="glyphicon glyphicon-edit" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_profile"); ?></a></li>
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/photo/","index.php?m=account_photo"); ?>"><span class="glyphicon glyphicon-picture" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_photo"); ?></a></li>
				</ul>
            </li>

			<?php if ( @$PREFS->conf['enable_messaging'] ) { ?>
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-envelope" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_outter_messages"); ?> <span id="result"></span><b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/","index.php?m=account_messages&p=inbox"); ?>"><span class="glyphicon glyphicon-inbox" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_messages_inbox"); ?></a></li>
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/sent/","index.php?m=account_messages&p=sent"); ?>"><span class="glyphicon glyphicon-send" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_messages_sent"); ?></a></li>
				</ul>
			</li>
            <?php } ?>
            
            <?php if ( @$PREFS->conf['enable_pictures']  ||  @$PREFS->conf['enable_videos']  ||  @$PREFS->conf['enable_audio'] ) { ?>
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-hdd" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_outter_media"); ?> <span id="result"></span><b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<?php if ( @$PREFS->conf['enable_pictures'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/albums/","index.php?m=account_albums"); ?>"><span class="glyphicon glyphicon-picture" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_pictures"); ?></a></li>
                    <?php } ?>
					<?php if ( @$PREFS->conf['enable_videos'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/videos/","index.php?m=account_videos"); ?>"><span class="glyphicon glyphicon-facetime-video" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_videos"); ?></a></li>
                    <?php } ?>
                    <?php if ( @$PREFS->conf['enable_audio'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/audio/","index.php?m=account_audio"); ?>"><span class="glyphicon glyphicon-sound-stereo" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_audio"); ?></a></li>
                    <?php } ?>
				</ul>
			</li>
            <?php } ?>
            
            <?php if ( @$PREFS->conf['enable_guestbooks']  ||  @$PREFS->conf['enable_blogs']  ||  @$PREFS->conf['enable_events']  ||  @$PREFS->conf['enable_gifts'] ) { ?>
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-folder-open" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_outter_apps"); ?> <span id="result"></span><b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<?php if ( @$PREFS->conf['enable_blogs'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/blog/","index.php?m=account_blog"); ?>"><span class="glyphicon glyphicon-book" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_blog"); ?></a></li>
                    <?php } ?>
                    <?php if ( @$PREFS->conf['enable_gifts'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/gifts/","index.php?m=account_gifts&p=inbox"); ?>"><span class="glyphicon glyphicon-gift" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_gifts"); ?></a></li>
                    <?php } ?>
                    <?php if ( @$PREFS->conf['enable_guestbooks'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/guestbook/","index.php?m=account_guestbook"); ?>"><span class="glyphicon glyphicon-comment" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_guestbook"); ?></a></li>
                    <?php } ?>
                    <?php if ( @$PREFS->conf['enable_events'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/events/","index.php?m=account_events"); ?>"><span class="glyphicon glyphicon-calendar" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_events"); ?></a></li>
                    <?php } ?>
				</ul>
			</li>
            <?php } ?>

			<?php if ( @$PREFS->conf['enable_friends']  ||  @$PREFS->conf['enable_favorites'] ) { ?>
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-globe" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_outter_network"); ?> <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
                    <?php if ( @$PREFS->conf['enable_friends'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/friends/","index.php?m=account_friends"); ?>"><span class="glyphicon glyphicon-heart" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_friends"); ?></a></li>
                    <?php } ?>
                    <?php if ( @$PREFS->conf['enable_favorites'] ) { ?>
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/favorites/","index.php?m=account_favorites"); ?>"><span class="glyphicon glyphicon-star" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_favorites"); ?></a></li>
                    <?php } ?>
                    <?php if ( @$PREFS->conf['enable_visitors'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/visitors/","index.php?m=account_visitors"); ?>"><span class="glyphicon glyphicon-eye-open" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_visitors"); ?></a></li>
                    <?php } ?>
                    <?php if ( @$PREFS->conf['enable_blocked_members'] ) { ?>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/blocked/","index.php?m=account_blocked"); ?>"><span class="glyphicon glyphicon-ban-circle" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_blocked"); ?></a></li>
                    <?php } ?>
				</ul>
			</li>
            <?php } ?>
            
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-cog" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_outter_settings"); ?> <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/settings/","index.php?m=account_settings"); ?>"><span class="glyphicon glyphicon-cog" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_settings"); ?></a></li>
					<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/notifications/","index.php?m=account_notifications"); ?>"><span class="glyphicon glyphicon-flag" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_notifications"); ?></a></li>
                    <li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/privacy/","index.php?m=account_privacy"); ?>"><span class="glyphicon glyphicon-eye-open" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_privacy"); ?></a></li>
                    <?php if ( @$PREFS->conf['enable_upgrades']  &&  @$SESSION->conf['can_upgrade_account'] ) { ?>
            		<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/upgrade/","index.php?m=account_upgrade"); ?>"><span class="glyphicon glyphicon-shopping-cart" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_upgrade"); ?></a></li>
            		<?php } ?>
				</ul>
			</li>                
			
        </ul>

		<ul class="nav navbar-nav navbar-usermenu navbar-right nav-ul">
			<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/logout/","index.php?m=account_logout"); ?>"><span class="glyphicon glyphicon-log-out" style="padding-right:8px;"></span><?php echo vldext_lang("core","usermenu_logout"); ?></a></li>
		</ul>
	</div>

</nav>