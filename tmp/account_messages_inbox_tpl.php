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
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="section section-header">
<div class="container">
<div class="row">

<?php if ( $this->objval($_obj,'loggedin') ) { ?>
<?php $_temp_inc = $TEMPLATE->output('user-menu.tpl',0); include($_temp_inc); ?>
<?php } ?>

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">
<!-- LEFT SIDEBAR -->
<div class="hide-mobile">
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture']) ? $SESSION->conf['picture'] : "&#123;picture&#125;"; ?>" alt="" border="0" /></a>
							<?php } ?>
							
						</div>
<?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
					
                    
                    </div>
</div>
<!-- /LEFT SIDEBAR -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("messages","app_inbox"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/inbox/","index.php?m=account_messages&p=inbox"); ?>" class="btn active"><i class="glyphicon glyphicon-inbox"></i> <?php echo vldext_lang("messages","opt_inbox"); ?> (<?php echo isset($SESSION->conf['totalimessages']) ? $SESSION->conf['totalimessages'] : "&#123;totalimessages&#125;"; ?>)</a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/sent/","index.php?m=account_messages&p=sent"); ?>" class="btn"><i class="glyphicon glyphicon-send"></i> <?php echo vldext_lang("messages","opt_sent"); ?> (<?php echo isset($SESSION->conf['totalsmessages']) ? $SESSION->conf['totalsmessages'] : "&#123;totalsmessages&#125;"; ?>)</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
            			<span><?php echo isset($_obj['messages_info']) ? $_obj['messages_info'] : "&#123;messages_info&#125;"; ?></span>
        
        <div class="form" style="margin-top:15px;">
								<form name="messages" method="post" action="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['messages_delete_link']) ? $_obj['messages_delete_link'] : "&#123;messages_delete_link&#125;"; ?>">

			<table class="pmbox" style="width:100%;">
				<tr class="header" style="border-bottom: 1px dotted #CCC;">
					<td class="checkbox" style="margin-top:0px; width:5%;">
						<input type="checkbox" name="check_all_messages" id="check_all_messages" class="checkbox form-control" onclick="toggleItems(this.form, this.checked)" />
					</td>
					<td class="sender" style="width:10%px;">
						<strong><?php echo vldext_lang("messages","to"); ?></strong>
					</td>
					<td class="subject" style="width:80%">
						<strong><?php echo vldext_lang("messages","subject"); ?></strong>
					</td>
				</tr>
				<?php if (!empty($_obj['profile_messages'])){ if (!is_array($_obj['profile_messages'])) $_obj['profile_messages']=array(array('profile_messages'=>$_obj['profile_messages'])); $_tmp_arr_keys=array_keys($_obj['profile_messages']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_messages']=array(0=>$_obj['profile_messages']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_messages']=count($_obj['profile_messages']); foreach ($_obj['profile_messages'] as $rowcnt=>$profile_messages) { $profile_messages['rowcnt']=$rowcnt; $profile_messages['rowpos']=$rowcnt+1; $profile_messages['rownum']=$rowcnt%2+1; $profile_messages['rowtotal']=$_cnt['profile_messages']; $profile_messages['rowfirst']=$rowcnt==0?1:0; $profile_messages['rowlast']=($rowcnt+1)==$_cnt['profile_messages']?1:0; $_obj=&$profile_messages; ?>
					<tr class="row <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>" style="border-bottom: 1px dotted #CCC; <?php if ( $this->objval($_obj,'message_new') ) { ?>background:#E0F0F7;<?php } ?>">
						<td class="checkbox" valign="top" style="padding-top:10px; width:15px; padding-bottom:10px;">
							<input type="checkbox" name="message_id[<?php echo isset($_obj['message_id']) ? $_obj['message_id'] : "&#123;message_id&#125;"; ?>]" id="message_id_<?php echo isset($_obj['message_id']) ? $_obj['message_id'] : "&#123;message_id&#125;"; ?>" class="checkbox messageCheckbox form-control" />
						</td>
						<td class="sender" valign="top" style="padding-top:10px; padding-right:10px; padding-bottom:10px;">
							<div class="image">
							<?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
                            <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" title="<?php echo vldext_trim($_obj['member_username'],25); ?>" border="0" style="border-radius:3px; height:75px;" /><br/></a>
                            <?php } else { ?>
                            <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" style="border-radius:3px; height:75px;" /><br/></a>
                            <?php } ?>
							</div>
                            
						</td>
						<td class="subject" valign="top" style="padding-top:10px; padding-bottom:10px;">
							<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['message_link']) ? $_obj['message_link'] : "&#123;message_link&#125;"; ?>">
                            Rubrik: <?php echo vldext_trim($_obj['message_subject'],90); ?>
							<div class="preview">Meddelande: <?php echo vldext_trim($_obj['message_body'],90); ?></div>
                            <div class="date" style="font-size:12px;"><?php echo isset($_obj['message_date']) ? $_obj['message_date'] : "&#123;message_date&#125;"; ?> <?php if ( $this->objval($_obj,'message_new') ) { ?>(<?php echo vldext_lang("messages","status_unread"); ?>)<?php } else { ?>(<?php echo vldext_lang("messages","status_read"); ?>)<?php } ?></div></a>
						</td>
					</tr>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
				<tr>
					<td colspan="3" style="padding-top:15px;">
						<a href="#" class="btn" onclick="javascript:confirmForm('<?php echo vldext_lang("messages","delete?"); ?>', 'messages')" title="<?php echo vldext_lang("messages","delete"); ?>"><?php echo vldext_lang("messages","delete"); ?></a>
					</td>
				</tr>
			</table>

		</form>
							</div>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>