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
include_once SYS_PATH . "includes/ext/ext.ratings.php";
include_once SYS_PATH . "includes/ext/ext.reports.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><?php $_temp_inc = $TEMPLATE->output('member_sections_location.tpl',0); include($_temp_inc); ?></li>
				<li><span>&#187;</span></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_audio_link']) ? $_obj['member_audio_link'] : "&#123;member_audio_link&#125;"; ?>"><?php echo vldext_lang("member","frm_audio"); ?></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1><?php echo vldext_lang("member","app_audio"); ?></h1>
		</div>
		<div class="options">
			<?php $_temp_inc = $TEMPLATE->output('member_sections_links.tpl',0); include($_temp_inc); ?>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_audio">

		<div class="typemedia">
			<?php if (!empty($_obj['profile_audio'])){ if (!is_array($_obj['profile_audio'])) $_obj['profile_audio']=array(array('profile_audio'=>$_obj['profile_audio'])); $_tmp_arr_keys=array_keys($_obj['profile_audio']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_audio']=array(0=>$_obj['profile_audio']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_audio']=count($_obj['profile_audio']); foreach ($_obj['profile_audio'] as $rowcnt=>$profile_audio) { $profile_audio['rowcnt']=$rowcnt; $profile_audio['rowpos']=$rowcnt+1; $profile_audio['rownum']=$rowcnt%2+1; $profile_audio['rowtotal']=$_cnt['profile_audio']; $profile_audio['rowfirst']=$rowcnt==0?1:0; $profile_audio['rowlast']=($rowcnt+1)==$_cnt['profile_audio']?1:0; $_obj=&$profile_audio; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
		                    <td class="data">
								<div id="mpl<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>" class="player"><a href="http://www.macromedia.com/go/getflashplayer">Get Flash</a> to see this player.</div>
								<script type="text/javascript" language="javascript">
									swfobject.embedSWF("<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?>media/utils/mediaplayer.swf", "mpl<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>", "345", "19", "9.0.0", false,
										{'autostart':'false','file':'<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_stack[0]['member_media_path']) ? $_stack[0]['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['audio_filename']) ? $_obj['audio_filename'] : "&#123;audio_filename&#125;"; ?>','wmode':'transparent'},
										{'allowfullscreen':'false','wmode':'transparent'}, {});
								</script>
								<div class="datainfo">
									<dl class="datainfo">
										<dt><?php echo vldext_lang("member","title"); ?>:</dt>
										<dd><?php echo isset($_obj['audio_name']) ? $_obj['audio_name'] : "&#123;audio_name&#125;"; ?></dd>
										<?php if ( $this->objval($_obj,'audio_description') ) { ?>
											<dt><?php echo vldext_lang("member","description"); ?>:</dt>
											<dd><?php echo isset($_obj['audio_description']) ? $_obj['audio_description'] : "&#123;audio_description&#125;"; ?></dd>
										<?php } ?>
									</dl>
								</div>
								<div class="itemfooter">
									<ul class="itemfooter">
										<?php if ( @$PREFS->conf['enable_audio_rating']  &&  @$SESSION->conf['can_rate_audios']  &&  $this->objval($_obj,'audio_rated') ) { ?>
											<li>
												<?php echo vldext_ratings(array('type'=>"audio",'member_id'=>$_stack[0]['member_id'],'item_id'=>$_obj['audio_id'],'score'=>$_obj['audio_score'],'votes'=>$_obj['audio_votes'])); ?>
											</li>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_reports']  &&  @$PREFS->conf['enable_audio_reports']  &&  @$SESSION->conf['can_submit_reports'] ) { ?>
											<li class="report">
												<?php echo vldext_reports(array('type'=>"audio",'member_id'=>$_stack[0]['member_id'],'item_id'=>$_obj['audio_id'])); ?>
											</li>
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

<?php } ?>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>
