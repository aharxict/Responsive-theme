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

include_once SYS_PATH . "includes/ext/ext.anchor.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="header_wrap header_dynamic">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><?php echo vldext_anchor(array('url1'=>"account/audio/",'url2'=>"index.php?m=account_audio",'name'=>"audio|frm_audio")); ?></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1><?php echo vldext_lang("audio","app_audio"); ?></h1>
		</div>
		<div class="options">
			<ul>
				<li><?php echo vldext_anchor(array('url1'=>"account/audio/",'url2'=>"index.php?m=account_audio",'name'=>"audio|opt_viewaudio",'class'=>"active")); ?></li>
				<li class="break"></li>
				<li><?php echo vldext_anchor(array('url1'=>"account/audio/add/",'url2'=>"index.php?m=account_audio&p=add",'name'=>"audio|opt_addaudio")); ?></li>
				<?php if ( $this->objval($_obj,'audio_pct') ) { ?>
					<li class="info">
						<div class="progress_bar">
							<div class="bar" style="width:<?php echo isset($_obj['audio_pct']) ? $_obj['audio_pct'] : "&#123;audio_pct&#125;"; ?>%"></div>
						</div>
					</li>
					<li class="info">
						<?php echo isset($_obj['audio_info']) ? $_obj['audio_info'] : "&#123;audio_info&#125;"; ?>
					</li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_audio">

		<div class="typemedia">
			<?php if (!empty($_obj['profile_audio'])){ if (!is_array($_obj['profile_audio'])) $_obj['profile_audio']=array(array('profile_audio'=>$_obj['profile_audio'])); $_tmp_arr_keys=array_keys($_obj['profile_audio']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_audio']=array(0=>$_obj['profile_audio']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_audio']=count($_obj['profile_audio']); foreach ($_obj['profile_audio'] as $rowcnt=>$profile_audio) { $profile_audio['rowcnt']=$rowcnt; $profile_audio['rowpos']=$rowcnt+1; $profile_audio['rownum']=$rowcnt%2+1; $profile_audio['rowtotal']=$_cnt['profile_audio']; $profile_audio['rowfirst']=$rowcnt==0?1:0; $profile_audio['rowlast']=($rowcnt+1)==$_cnt['profile_audio']?1:0; $_obj=&$profile_audio; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
		                    <td class="data">
								<div id="mpl<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>" class="player"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
								<script type="text/javascript" language="javascript">
									swfobject.embedSWF("<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?>media/utils/mediaplayer.swf", "mpl<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>", "345", "19", "9.0.0", false,
										{'autostart':'false','file':'<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['audio_filename']) ? $_obj['audio_filename'] : "&#123;audio_filename&#125;"; ?>','wmode':'transparent'},
										{'allowfullscreen':'false','wmode':'transparent'}, {});
								</script>
								<div class="datainfo">
									<dl class="datainfo">
										<dt><?php echo vldext_lang("audio","name"); ?>:</dt>
										<dd><?php echo isset($_obj['audio_name']) ? $_obj['audio_name'] : "&#123;audio_name&#125;"; ?></dd>
										<?php if ( $this->objval($_obj,'audio_description') ) { ?>
											<dt><?php echo vldext_lang("audio","notes"); ?>:</dt>
											<dd><?php echo isset($_obj['audio_description']) ? $_obj['audio_description'] : "&#123;audio_description&#125;"; ?></dd>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_audio_rating']  &&  $this->objval($_obj,'audio_rated') ) { ?>
											<dt><?php echo vldext_lang("audio","rated_on"); ?>:</dt>
											<dd><?php echo isset($_obj['audio_score']) ? $_obj['audio_score'] : "&#123;audio_score&#125;"; ?> (<?php echo isset($_obj['audio_votes']) ? $_obj['audio_votes'] : "&#123;audio_votes&#125;"; ?> <?php echo vldext_lang("audio","votes"); ?>)</dd>
										<?php } ?>
										<dt><?php echo vldext_lang("audio","dateadded"); ?>:</dt>
										<dd><?php echo isset($_obj['audio_post_date']) ? $_obj['audio_post_date'] : "&#123;audio_post_date&#125;"; ?></dd>
									</dl>
								</div>
							</td>
		                    <td>
								<div class="actions">
									<ul class="actions">
										<?php if ( @$PREFS->conf['show_online'] ) { ?>
											<?php if ( $this->objval($_obj,'member_online') ) { ?>
												<li class="status"><?php echo vldext_lang("core","userinfo_online"); ?></li>
											<?php } ?>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_edit_own_audio'] ) { ?>
											<li class="edit"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['audio_edit_link']) ? $_obj['audio_edit_link'] : "&#123;audio_edit_link&#125;"; ?>" title="<?php echo vldext_lang("audio","edit"); ?>"><?php echo vldext_lang("audio","edit"); ?></a></li>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_delete_own_audio'] ) { ?>
											<li class="remove"><a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("audio","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['audio_delete_link']) ? $_obj['audio_delete_link'] : "&#123;audio_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("audio","delete"); ?>"><?php echo vldext_lang("audio","delete"); ?></a></li>
										<?php } ?>
									</ul>
									<div class="clear"></div>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
		</div>
		<div class="clear"></div>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("audio","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("audio","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

<?php } ?>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>
