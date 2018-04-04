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
 ?>
	<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_profile") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-user"></i> <?php echo vldext_lang("member","frm_profile"); ?></a>
	<?php if ( $this->objval($_obj,'member_group_id')  !=  @$PREFS->conf['canceled_member_group'] ) { ?>
		<?php if ( @$PREFS->conf['enable_pictures']  &&  $this->objval($_obj,'member_total_albums') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_pictures_link']) ? $_obj['member_pictures_link'] : "&#123;member_pictures_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_albums" ||  $this->objval($_obj,'active_module')  == "member_pictures" ||  $this->objval($_obj,'active_module')  == "member_pictures_view") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-picture"></i> <?php echo vldext_lang("member","frm_pictures"); ?></a>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_videos']  &&  $this->objval($_obj,'member_total_videos') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_videos_link']) ? $_obj['member_videos_link'] : "&#123;member_videos_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_videos" ||  $this->objval($_obj,'active_module')  == "member_videos_view") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-facetime-video"></i> <?php echo vldext_lang("member","frm_videos"); ?> (<?php echo isset($_obj['member_total_videos']) ? $_obj['member_total_videos'] : "&#123;member_total_videos&#125;"; ?>)</a>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_audio']  &&  $this->objval($_obj,'member_total_music') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_audio_link']) ? $_obj['member_audio_link'] : "&#123;member_audio_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_audio") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-music"></i> <?php echo vldext_lang("member","frm_audio"); ?> (<?php echo isset($_obj['member_total_music']) ? $_obj['member_total_music'] : "&#123;member_total_music&#125;"; ?>)</a>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_friends']  &&  $this->objval($_obj,'member_total_friends') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_friends_link']) ? $_obj['member_friends_link'] : "&#123;member_friends_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_friends") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-user"></i> <?php echo vldext_lang("member","frm_friends"); ?> (<?php echo isset($_obj['member_total_friends']) ? $_obj['member_total_friends'] : "&#123;member_total_friends&#125;"; ?>)</a>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_events']  &&  $this->objval($_obj,'member_total_events') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_events_link']) ? $_obj['member_events_link'] : "&#123;member_events_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_events" ||  $this->objval($_obj,'active_module')  == "member_events_joined") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-calendar"></i> <?php echo vldext_lang("member","frm_events"); ?> (<?php echo isset($_obj['member_total_events']) ? $_obj['member_total_events'] : "&#123;member_total_events&#125;"; ?>)</a>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_gifts']  &&  $this->objval($_obj,'member_total_gifts') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_gifts_link']) ? $_obj['member_gifts_link'] : "&#123;member_gifts_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_gifts") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-gift"></i> <?php echo vldext_lang("member","frm_gifts"); ?> (<?php echo isset($_obj['member_total_gifts']) ? $_obj['member_total_gifts'] : "&#123;member_total_gifts&#125;"; ?>)</a>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_blogs']  &&  $this->objval($_obj,'member_total_blogs') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_blog_link']) ? $_obj['member_blog_link'] : "&#123;member_blog_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_blog" ||  $this->objval($_obj,'active_module')  == "member_blog_entry") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-book"></i> <?php echo vldext_lang("member","frm_blog"); ?> (<?php echo isset($_obj['member_total_blogs']) ? $_obj['member_total_blogs'] : "&#123;member_total_blogs&#125;"; ?>)</a>
		<?php } ?>
		<?php if ( @$PREFS->conf['enable_guestbooks']  &&  $this->objval($_obj,'member_total_guestbooks') ) { ?>
			<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_guestbook_link']) ? $_obj['member_guestbook_link'] : "&#123;member_guestbook_link&#125;"; ?>" <?php if ( $this->objval($_obj,'active_module')  == "member_guestbook") { ?>class="active btn"<?php } else { ?>class="btn"<?php } ?>><i class="glyphicon glyphicon-book"></i> <?php echo vldext_lang("member","frm_guestbook"); ?> (<?php echo isset($_obj['member_total_guestbooks']) ? $_obj['member_total_guestbooks'] : "&#123;member_total_guestbooks&#125;"; ?>)</a>
		<?php } ?>
	<?php } ?>