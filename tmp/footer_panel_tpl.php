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
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
 ?><div id="footpanel">
	<ul id="mainpanel">
	    <li class="panel first"></li>
	    <li id="settingspanel" class="panel panel-static" style="border-radius:0; box-shadow:none;">
        	<a href="#" style="height:26px; width:28px;" class="button settings"><span class="glyphicon glyphicon-cog"></span><?php echo vldext_lang("core","chat_settings"); ?></a>

	        <div class="subpanel">
            	<h3 style="margin-top:0; margin-bottom:0;"><span class="miminize"></span><?php echo vldext_lang("core","chat_settings"); ?></h3>
            	<div class="wrap">
            		<div class="status">
            			<span><?php echo vldext_lang("core","chat_status"); ?></span>
            			<a href="#" onclick="chatToggleStatus(1);return false;" id="chat-status-online" class="online <?php if ( @$SESSION->conf['statusonline']  == "1") { ?>active<?php } ?>"><?php echo vldext_lang("core","chat_status_online"); ?></a>
            			<a href="#" onclick="chatToggleStatus(0);return false;" id="chat-status-invisible" class="invisible <?php if ( @$SESSION->conf['statusonline']  == "0") { ?>active<?php } ?>"><?php echo vldext_lang("core","chat_status_invisible"); ?></a>
            			<div class="clear"></div>
            		</div>
            		<div class="sound">
            			<a href="#" id="chat-sound-notify" onclick="chatToggleSound();return false;" class="<?php if ( @$SESSION->conf['sound_notify'] ) { ?>on<?php } else { ?>off<?php } ?>"><?php echo vldext_lang("core","chat_sound_notify"); ?></a>
	            	</div>
		        </div>
	        </div>
	    </li>
	    <li id="alertpanel" class="panel panel-static" style="border-radius:0; box-shadow:none;">
        	<a href="#" style="height:26px; width:28px;" class="button alerts <?php if ( @$SESSION->conf['notifications_new'] ) { ?>alerts-new<?php } ?>">
				<span class="glyphicon glyphicon-bell"></span>
				<?php echo vldext_lang("core","chat_notifications"); ?></a>
	        <div class="subpanel">
            	<h3 style="margin-top:0; margin-bottom:0;"><span class="miminize"></span><?php echo vldext_lang("core","chat_notifications"); ?></h3>
            	<div class="wrap">
			        <ul>
						<?php if ( @$SESSION->conf['notifications'] ) { ?>
		        			<?php if (!empty($SESSION->conf['notifications'])){ if (!is_array($SESSION->conf['notifications'])) $SESSION->conf['notifications']=array(array('notifications'=>$SESSION->conf['notifications'])); $_tmp_arr_keys=array_keys($SESSION->conf['notifications']); if ($_tmp_arr_keys[0]!='0') $SESSION->conf['notifications']=array(0=>$SESSION->conf['notifications']); $_stack[$_stack_cnt++]=$_obj; $_cnt['notifications']=count($SESSION->conf['notifications']); foreach ($SESSION->conf['notifications'] as $rowcnt=>$notifications) { $notifications['rowcnt']=$rowcnt; $notifications['rowpos']=$rowcnt+1; $notifications['rownum']=$rowcnt%2+1; $notifications['rowtotal']=$_cnt['notifications']; $notifications['rowfirst']=$rowcnt==0?1:0; $notifications['rowlast']=($rowcnt+1)==$_cnt['notifications']?1:0; $_obj=&$notifications; ?>
		        				<li id="foot-notify-<?php echo isset($_obj['notify_id']) ? $_obj['notify_id'] : "&#123;notify_id&#125;"; ?>" <?php if ( $this->objval($_obj,'new') ) { ?>class="new"<?php } ?>>
		        					<a href="#" class="delete" onclick="deleteNotification('<?php echo vldext_lang("core","delete_notification?"); ?>', <?php echo isset($_obj['notify_id']) ? $_obj['notify_id'] : "&#123;notify_id&#125;"; ?>);return false;">X</a>
		        					<p><?php echo isset($_obj['message']) ? $_obj['message'] : "&#123;message&#125;"; ?> <span>(<?php echo isset($_obj['post_date']) ? $_obj['post_date'] : "&#123;post_date&#125;"; ?>)</span></p>
		        				</li>
		        			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
						<?php } else { ?>
							<li><p><?php echo vldext_lang("core","notify_none"); ?></p></li>
						<?php } ?>
			        </ul>
			    </div>
	        </div>
	    </li>
	    <li id="chatpanel" class="panel panel-static" <?php if ( @$PREFS->conf['enable_friends']  == "0") { ?>style="display:none"<?php } else { ?> style="border-radius:0; box-shadow:none; border-left:0;"<?php } ?>>
        	<a href="#" class="button chat" style="width:200px; border-left:0;
border-right: 1px solid #999999; height:26px;">
				<span class="glyphicon glyphicon-globe"></span>
        		<span id="chat-friends-status" style="line-height:17px;" class="<?php if ( @$SESSION->conf['statusonline']  == "1") { ?>online<?php } else { ?>invisible<?php } ?>">
        			<?php echo vldext_lang("core","chat_friends"); ?>
        			<?php if ( @$SESSION->conf['friends_online'] ) { ?> (<strong><?php echo isset($SESSION->conf['total_friends_online']) ? $SESSION->conf['total_friends_online'] : "&#123;total_friends_online&#125;"; ?></strong>)<?php } ?>
        		</span>
        	</a>
	        <div class="subpanel">
            	<h3 style="margin-top:0; margin-bottom:0;"><span class="miminize"></span><?php echo vldext_lang("core","chat_friends_online"); ?></h3>
            	<div class="wrap">
					<ul>
						<?php if ( @$SESSION->conf['friends_online'] ) { ?>
						    <?php if (!empty($SESSION->conf['friends_online'])){ if (!is_array($SESSION->conf['friends_online'])) $SESSION->conf['friends_online']=array(array('friends_online'=>$SESSION->conf['friends_online'])); $_tmp_arr_keys=array_keys($SESSION->conf['friends_online']); if ($_tmp_arr_keys[0]!='0') $SESSION->conf['friends_online']=array(0=>$SESSION->conf['friends_online']); $_stack[$_stack_cnt++]=$_obj; $_cnt['friends_online']=count($SESSION->conf['friends_online']); foreach ($SESSION->conf['friends_online'] as $rowcnt=>$friends_online) { $friends_online['rowcnt']=$rowcnt; $friends_online['rowpos']=$rowcnt+1; $friends_online['rownum']=$rowcnt%2+1; $friends_online['rowtotal']=$_cnt['friends_online']; $friends_online['rowfirst']=$rowcnt==0?1:0; $friends_online['rowlast']=($rowcnt+1)==$_cnt['friends_online']?1:0; $_obj=&$friends_online; ?>
    							<li>
    								<a href="#" onclick="return chatInitIM(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,'<?php echo vldext_trim($_obj['username'],25); ?>',0,0,1)" class="<?php if ( $this->objval($_obj,'show_status') ) { ?>online<?php } else { ?>offline<?php } ?>">
										<?php if ( $this->objval($_obj,'picture') ) { ?>
											<img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['media_path']) ? $_obj['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['picture']) ? $_obj['picture'] : "&#123;picture&#125;"; ?>" alt="" />
										<?php } else { ?>
											<img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" />
										<?php } ?>
										<?php echo vldext_trim($_obj['username'],22); ?>
									</a>
								</li>
							<?php } $_obj=$_stack[--$_stack_cnt];} ?>
						<?php } else { ?>
							<li><span><?php echo vldext_lang("core","chat_friends_online_none"); ?></span></li>
						<?php } ?>
					</ul>
		        </div>
	        </div>
	    </li>
	    <li id="imtemplate" class="panel impanel" style="display:none">
        	<a href="#" class="button im" title="XusernameX"><span class="glyphicon glyphicon-user"></span>XshortusernameX</a>
        	<span class="flag" style="display:none"></span>
	        <div class="subpanel">
            	<h3>
            		<span class="close" onclick="return closeIM(XidX)"></span>
            		<span class="miminize"></span>
            		XusernameX
            		<div class="clear"></div>
            	</h3>
            	<div class="info" style="text-align: right">
            		<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php if ( @$PREFS->conf['fancy_urls']  == "0") { ?>index.php?m=member_profile&id=<?php } ?>XusernameX" target="_blank" style="margin-right: 6px"><?php echo vldext_lang("core","chat_profile"); ?></a>
            		<a href="#" onclick="chatBlockMember('<?php echo vldext_lang("core","chat_block?"); ?>','XidX');return false;"><?php echo vldext_lang("core","chat_block"); ?></a>
            	</div>
            	<form name="chat-XidX" id="chat-form-XidX" onsubmit="chatSendMessage();return false;" action="">
            		<div class="wrap">
						<ul class="chatmessages">
						</ul>
					</div>
					<div class="chatsend">
						<input id="chat-message-XidX" type="text" autocomplete="off" name="message" value="" class="text" maxlength="255" />
					</div>
				</form>
	        </div>
	    </li>
	    <li class="panel last" style="border-radius:0; background: #e3e2e2 url('<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/footpanel/bg.png') repeat-x;"><div id="chatsndnotifyholder"></div></li>
	</ul>
</div>
