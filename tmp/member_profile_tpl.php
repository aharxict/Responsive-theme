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
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
include_once SYS_PATH . "includes/ext/ext.members.php";
include_once SYS_PATH . "includes/ext/core/ext.break.php";
include_once SYS_PATH . "includes/ext/ext.pictures.php";
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
					<!-- Blog Post Excerpt -->
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            
                            <?php $_temp_inc = $TEMPLATE->output('member_profile_picture.tpl',0); include($_temp_inc); ?>
                            
                            						

							
						</div>
                        
                        
                        <div style="box-shadow: 1px 1px 5px 0 #ced4e0;">
                        <ul class="list-group" style="margin-top: 10px; margin-bottom:5px !important;">
                        
                        <?php if ( @$PREFS->conf['enable_friends']  &&  $this->objval($_obj,'member_is_friend')  == "0") { ?>
						<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_add_friends_link']) ? $_obj['member_add_friends_link'] : "&#123;member_add_friends_link&#125;"; ?>" title="<?php echo vldext_lang("member","friends"); ?>"><span class="glyphicon glyphicon-user" style="width:20px;"></span> <?php echo vldext_lang("member","add_friends"); ?></a>
                        </li>
						<?php } ?>
                        
                        <?php if ( @$PREFS->conf['enable_favorites']  &&  $this->objval($_obj,'member_is_self_favorite')  == "0") { ?>
						<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_add_favorites_link']) ? $_obj['member_add_favorites_link'] : "&#123;member_add_favorites_link&#125;"; ?>" title="<?php echo vldext_lang("member","add_favorites"); ?>"><span class="glyphicon glyphicon-star" style="width:20px;"></span> <?php echo vldext_lang("member","add_favorites"); ?></a>
                        </li>
						<?php } ?>
                        
                        <?php if ( @$PREFS->conf['enable_messaging'] ) { ?>
                        <li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a title="<?php echo vldext_lang("member","send_message"); ?>" href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_send_message_link']) ? $_obj['member_send_message_link'] : "&#123;member_send_message_link&#125;"; ?>"> <span class="glyphicon glyphicon-comment" style="width:20px;"></span> <?php echo vldext_lang("member","send_message"); ?></a>
                        </li>
                        <?php } ?>
                        
                        <?php if ( @$PREFS->conf['enable_gifts'] ) { ?>
						<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_send_gift_link']) ? $_obj['member_send_gift_link'] : "&#123;member_send_gift_link&#125;"; ?>" title="<?php echo vldext_lang("member","send_gift"); ?>"><span class="glyphicon glyphicon-gift" style="width:20px;"></span> <?php echo vldext_lang("member","send_gift"); ?></a></li>
						<?php } ?>
                        
                        <?php if ( @$PREFS->conf['quick_messages'] ) { ?>
						<li class="list-group-item wink" style="border-left:none !important; border-right:none !important; border-top:none !important; border-bottom: 1px dotted #ddd; margin-bottom:0;">
							<a href="#" title="<?php echo vldext_lang("member","send_wink"); ?>" onclick="showhide_field('send_wink_box');return false;"><span class="glyphicon glyphicon-eye-open" style="width:20px;"></span> <?php echo vldext_lang("member","send_wink"); ?></a>
								<div id="send_wink_box" class="winkbox" style="display: none">
									<select class="select form-control" id="quick_messages" name="quick_messages">
										<?php echo vldext_dropdownlist($PREFS->conf['quick_messages'],""); ?>
									</select>
									<a href="#" class="submit btn" onclick="send_wink(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,$('#quick_messages').val());return false;"><?php echo vldext_lang("core","submit"); ?></a>
									<a href="#" onclick="showhide_field('send_wink_box');return false;" class="cancel"></a>
								</div>
						</li>
						<?php } ?>
                        
                        <?php if ( $this->objval($_obj,'loggedin')  &&  @$PREFS->conf['enable_chat']  &&  @$SESSION->conf['can_chat'] ) { ?>
							<?php if ( $this->objval($_obj,'member_access_chat')  == "1" &&  $this->objval($_obj,'member_is_friend')  == "0") { ?>
								<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; margin-bottom:0;"><a href="#" onclick="alert('<?php echo vldext_lang("member","chat_friends_only"); ?>');return false;" title="<?php echo vldext_lang("member","chat"); ?>"><span class="glyphicon glyphicon-comment" style="width:20px;"></span> <?php echo vldext_lang("member","chat"); ?></a></li>
								<?php } else { ?>
								<li class="list-group-item" style="border-left:none !important; border-right:none !important; border-top:none !important; margin-bottom:0;"><a href="#" onclick="return chatInitIM(<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>,'<?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?>')" title="<?php echo vldext_lang("member","chat"); ?>"><span class="glyphicon glyphicon-comment" style="width:20px;"></span> <?php echo vldext_lang("member","chat"); ?></a></li>
							<?php } ?>
						<?php } ?>
                        
                        <?php if ( @$PREFS->conf['enable_blocked_members'] ) { ?>
                        <li class="list-group-item" style="border-left:none !important; border-right:none !important; border-bottom:none; border-top:none; margin-bottom:0;">
                        <a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("member","block?"); ?>', '<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_block_link']) ? $_obj['member_block_link'] : "&#123;member_block_link&#125;"; ?>');return false;" title="<?php echo vldext_lang("member","block"); ?>"><span class="glyphicon glyphicon-minus-sign" style="width:20px;"></span> <?php echo vldext_lang("member","block"); ?></a>
                        </li>
                        <?php } ?>
	                    </ul>
                        </div>
                        
                        <?php echo vldext_members(array('limit'=>12,'orderby'=>"visitdate",'cache_time'=>0,'visitors_id'=>$_obj['member_id'],'template'=>"ext.profile_visitors.tpl")); ?>
					
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="padding-bottom:0px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC;">
								<div style="float:left;"><h2><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?>'s <?php echo vldext_lang("member","frm_profile"); ?></h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="#profile" aria-controls="profile" role="tab" class="btn" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> <span style="text-transform:uppercase;"><?php echo vldext_lang("member","frm_profile"); ?></span></a>
                                <a href="#pictures" aria-controls="pictures" role="tab" class="btn" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> <span style="text-transform:uppercase;"><?php echo vldext_lang("member","frm_pictures"); ?></span></a>
                                
                                <?php if ( @$PREFS->conf['enable_guestbooks'] ) { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_guestbook_link']) ? $_obj['member_guestbook_link'] : "&#123;member_guestbook_link&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-book"></i> <span style="text-transform:uppercase;"><?php echo vldext_lang("member","frm_guestbook"); ?> (<?php echo isset($_obj['member_total_guestbooks']) ? $_obj['member_total_guestbooks'] : "&#123;member_total_guestbooks&#125;"; ?>)</span></a>
                                <?php } ?>
                                
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<div class="single-post-content" style="border-bottom:none;">
                            <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>
                            
 
<div role="tabpanel">

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="profile">
    <!-- MORE DETAILS -->
    <div class="dataitem single">

							<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>
								<div class="datainfo profile">
									<dl class="datainfo" style="border:#eee solid 1px; padding:13px 13px 13px 13px; border-radius: 3px 3px 3px 3px; margin-top:-1px; margin-bottom:15px;">
                                    <h3 style="font-size:18px;"><?php echo isset($_obj['group_name']) ? $_obj['group_name'] : "&#123;group_name&#125;"; ?></h3>
										<?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>
											<dt style="float:left;"><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?>:</dt>
											<dd style="float:left; padding-left:7px;">
												<?php if ( $this->objval($_obj,'field_value') ) { ?>
													<?php if ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
														<?php echo vldext_break($_obj['field_value']); ?>
													<?php } elseif ( $this->objval($_obj,'field_type')  == "birthday") { ?>
														<?php echo isset($_obj['field_value_years']) ? $_obj['field_value_years'] : "&#123;field_value_years&#125;"; ?>
													<?php } else { ?>
														<?php echo isset($_obj['field_value']) ? $_obj['field_value'] : "&#123;field_value&#125;"; ?>
													<?php } ?>
												<?php } else { ?>
													<?php echo vldext_lang("core","user_field_none"); ?>
												<?php } ?>
											</dd>
                                            <div class="clearfix" style="margin-bottom:7px;"></div>
										<?php } $_obj=$_stack[--$_stack_cnt];} ?>
									</dl>
								</div>
								<script type="text/javascript" language="javascript">switch_tabs('profile_data', <?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>, 1, 1)</script>
							<?php } $_obj=$_stack[--$_stack_cnt];} ?>


						</div>
    <!-- /MORE DETAILS -->
    
    <div class="clearfix"></div>
    
    

    </div>
    <!-- /MORE DETAILS -->
    
    
    <div role="tabpanel" class="tab-pane" id="pictures">
    <p style="font-weight:500;"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?>'s pictures...</strong></p>
    <?php echo vldext_pictures(array('member_id'=>$_obj['member_id'])); ?>
    </div>
    
  </div>

</div>

                            
                            
                            
							</div>
						</div>


</div>
<!-- End Blog Post Excerpt -->

</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>