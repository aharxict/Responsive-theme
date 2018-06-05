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
include_once SYS_PATH . "includes/ext/core/ext.break.php";
include_once SYS_PATH . "includes/ext/ext.activities.php";
 ?>﻿<?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="section section-header">
<div class="container">
<div class="row">

<?php if ( $this->objval($_obj,'loggedin') ) { ?>
<?php $_temp_inc = $TEMPLATE->output('user-menu.tpl',0); include($_temp_inc); ?>
<?php } ?>

<style type="text/css">
.tag {
   position: relative;
   background-color: #3B3C41;
   padding: 5px;
   color: #FFFFFF;
   width:100%;
   text-align:center;
   font-weight: bold;
   border-radius: 0px 0px 2px 2px;
}
.tagthumb {
   position: relative;
   bottom: 5px;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:95.3%;
   text-align:center;
   font-weight: bold;
}

</style>

<div class="section" style="padding-top:10px;">
	<div class="container">
		<div class="row">
		
        <!-- LEFT SIDEBAR -->
		<div class="col-sm-4 col-leftside">
			<div class="hide-mobile">
            <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
                
                <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
				<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>">
                <img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture_large']) ? $SESSION->conf['picture_large'] : "&#123;picture_large&#125;"; ?>" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<?php } else { ?>
				<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>">
                <img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
                </a>
				<?php } ?>
                
			</div>
            </div>
			
            <div class="hide-mobile">
            <?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
            </div>
			
            <div class="hide-mobile">
            <?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>					
            </div>
            
		</div>
		<!-- /LEFT SIDEBAR -->
					

		<!-- RIGHT CONTENT -->
		<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("home","app_home"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/home/","index.php?m=account_home"); ?>" class="btn active"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("core","usermenu_page"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/profile/","index.php?m=account_profile"); ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("core","usermenu_profile"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/photo/","index.php?m=account_photo"); ?>" class="btn"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("core","usermenu_photo"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter account_home">
		<div class="typepage">

			<div class="dataitem single" style="margin-bottom:20px; border: 1px #eee solid; padding:20px 13px 13px 13px; border-radius: 3px 3px 3px 3px;">
				<div class="alert alert-success fade in" style="margin-top:10px;">
					<a href="#" class="close" data-dismiss="alert">×</a>
					<p>Hallo, <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?></a>! hier ein Ueberblick deiner Events </p>
				</div>

				<table class="plain" style="width:100%;">
					<tr style="width:100%;">
						<td class="data" style="width:50%" valign="top">
							<div class="datainfo profile">
                            	<h2 style="font-size:18px;">Profile information</h2>
								<dl class="datainfo">
									<?php if ( $this->objval($_obj,'member_online') ) { ?>
                                    <dt style="float:left;">Status:</dt>
                                    <dd style="float:left; padding-left:7px;">Online</dd>
                                    <div class="clearfix" style="margin-bottom:7px;"></div>
                                    <?php } ?>
                                    <?php $_temp_inc = $TEMPLATE->output('member_sections_card.tpl',0); include($_temp_inc); ?>
									<?php if ( @$PREFS->conf['enable_member_rating']  &&  @$SESSION->conf['rated'] ) { ?>
										<dt style="float:left;"><?php echo vldext_lang("home","score"); ?>:</dt>
										<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['member_score']) ? $_obj['member_score'] : "&#123;member_score&#125;"; ?> (<?php echo vldext_lang("home","votes"); ?>: <?php echo isset($_obj['member_votes']) ? $_obj['member_votes'] : "&#123;member_votes&#125;"; ?>)</dd>
                                        <div class="clearfix" style="margin-bottom:7px;"></div>
									<?php } ?>
								</dl>
							</div>
						</td>
						<td class="data" style="width:50%" valign="top">
							<div class="datainfo profile">
								<h2 style="font-size:18px;"><?php echo vldext_lang("home","details"); ?></h2>
								<dl class="datainfo">
									<dt style="float:left;"><?php echo vldext_lang("home","new_messages"); ?>:</dt>
									<dd style="float:left; padding-left:7px;"><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/messages/","index.php?m=account_messages"); ?>"><?php echo isset($SESSION->conf['new_messages']) ? $SESSION->conf['new_messages'] : "&#123;new_messages&#125;"; ?></a></dd>
                                    <div class="clearfix" style="margin-bottom:7px;"></div>
									<?php if ( @$PREFS->conf['enable_friends'] ) { ?>
										<dt style="float:left;"><?php echo vldext_lang("home","new_friends"); ?>:</dt>
										<dd style="float:left; padding-left:7px;">
											<?php if ( @$SESSION->conf['new_friends'] ) { ?>
												<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/friends/requests/","index.php?m=account_friends&p=requests"); ?>"><?php echo isset($SESSION->conf['new_friends']) ? $SESSION->conf['new_friends'] : "&#123;new_friends&#125;"; ?></a>
											<?php } else { ?>
												<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/friends/","index.php?m=account_friends"); ?>">0</a>
											<?php } ?>
										</dd>
                                        <div class="clearfix" style="margin-bottom:7px;"></div>
									<?php } ?>
									<?php if ( @$PREFS->conf['enable_gifts'] ) { ?>
										<dt style="float:left;"><?php echo vldext_lang("home","new_gifts"); ?>:</dt>
										<dd style="float:left; padding-left:7px;"><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/gifts/","index.php?m=account_gifts"); ?>"><?php echo isset($SESSION->conf['new_gifts']) ? $SESSION->conf['new_gifts'] : "&#123;new_gifts&#125;"; ?></a></dd>
                                        <div class="clearfix" style="margin-bottom:7px;"></div>
									<?php } ?>
										<?php if ( @$PREFS->conf['enable_credits'] ) { ?>
											<dt style="float:left;"><?php echo vldext_lang("home","credits"); ?>:</dt>
											<dd style="float:left; padding-left:7px;"><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/upgrade/credits/","index.php?m=account_upgrade&p=credits"); ?>"><?php echo isset($SESSION->conf['totalcredits']) ? $SESSION->conf['totalcredits'] : "&#123;totalcredits&#125;"; ?></a></dd>
                                            <div class="clearfix" style="margin-bottom:7px;"></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_upgrades'] ) { ?>
											<dt style="float:left;"><?php echo vldext_lang("home","membership"); ?>:</dt>
											<dd style="float:left; padding-left:7px;">
												<?php if ( @$SESSION->conf['can_upgrade_account'] ) { ?>
													<?php if ( @$SESSION->conf['group_id']  ==  @$PREFS->conf['regular_member_group'] ) { ?>
														<?php echo vldext_lang("home","account_free"); ?>
														- <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/upgrade/","index.php?m=account_upgrade"); ?>"><?php echo vldext_lang("home","upgrade"); ?></a>
													<?php } else { ?>
														<?php echo isset($_obj['member_group_name']) ? $_obj['member_group_name'] : "&#123;member_group_name&#125;"; ?>
														<?php if ( @$SESSION->conf['expiration_date'] ) { ?><br />
															<?php echo vldext_lang("home","expiration"); ?> <?php echo isset($SESSION->conf['expiration_date']) ? $SESSION->conf['expiration_date'] : "&#123;expiration_date&#125;"; ?> -
															<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/upgrade/","index.php?m=account_upgrade"); ?>"><?php echo vldext_lang("home","renew"); ?></a>
														<?php } ?>
													<?php } ?>
												<?php } else { ?>
													<?php if ( @$SESSION->conf['group_id']  ==  @$PREFS->conf['regular_member_group'] ) { ?>
														<?php echo vldext_lang("home","account_free"); ?>
													<?php } else { ?>
														<?php echo isset($_obj['member_group_name']) ? $_obj['member_group_name'] : "&#123;member_group_name&#125;"; ?>
													<?php } ?>
												<?php } ?>
											</dd>
                                            <div class="clearfix" style="margin-bottom:7px;"></div>
										<?php } ?>
								</dl>
							</div>
						</td>
					</tr>
				</table>
			</div>


			<div class="dataitem single subfield" style="margin-bottom:20px; border: 1px #eee solid; padding:13px 13px 13px 13px; border-radius: 3px 3px 3px 3px;">
				<div class="suboptions_wrap">
					<div class="suboptions">
						<ul class="nav nav-ul">
							<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>
								<?php if ( $this->objval($_obj,'group_label')  != "general") { ?>
									<li><a href="javascript:void(0)" id="profile_data_<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_tab" onclick="switch_tabs('profile_data', <?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>)"><?php echo isset($_obj['group_name']) ? $_obj['group_name'] : "&#123;group_name&#125;"; ?></a></li>
								<?php } ?>
							<?php } $_obj=$_stack[--$_stack_cnt];} ?>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>

				<?php if (!empty($_obj['profile_groups'])){ if (!is_array($_obj['profile_groups'])) $_obj['profile_groups']=array(array('profile_groups'=>$_obj['profile_groups'])); $_tmp_arr_keys=array_keys($_obj['profile_groups']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_groups']=array(0=>$_obj['profile_groups']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_groups']=count($_obj['profile_groups']); foreach ($_obj['profile_groups'] as $rowcnt=>$profile_groups) { $profile_groups['rowcnt']=$rowcnt; $profile_groups['rowpos']=$rowcnt+1; $profile_groups['rownum']=$rowcnt%2+1; $profile_groups['rowtotal']=$_cnt['profile_groups']; $profile_groups['rowfirst']=$rowcnt==0?1:0; $profile_groups['rowlast']=($rowcnt+1)==$_cnt['profile_groups']?1:0; $_obj=&$profile_groups; ?>
					<?php if ( $this->objval($_obj,'group_label')  != "general") { ?>
						<div class="datainfo profile" id="profile_data_<?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>_content" style="display: none">
							<dl class="datainfo">
								<?php if (!empty($_obj['profile_fields'])){ if (!is_array($_obj['profile_fields'])) $_obj['profile_fields']=array(array('profile_fields'=>$_obj['profile_fields'])); $_tmp_arr_keys=array_keys($_obj['profile_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_fields']=array(0=>$_obj['profile_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_fields']=count($_obj['profile_fields']); foreach ($_obj['profile_fields'] as $rowcnt=>$profile_fields) { $profile_fields['rowcnt']=$rowcnt; $profile_fields['rowpos']=$rowcnt+1; $profile_fields['rownum']=$rowcnt%2+1; $profile_fields['rowtotal']=$_cnt['profile_fields']; $profile_fields['rowfirst']=$rowcnt==0?1:0; $profile_fields['rowlast']=($rowcnt+1)==$_cnt['profile_fields']?1:0; $_obj=&$profile_fields; ?>
									<dt><?php echo isset($_obj['field_name']) ? $_obj['field_name'] : "&#123;field_name&#125;"; ?>:</dt>
									<dd>
										<?php if ( $this->objval($_obj,'field_value') ) { ?>
											<?php if ( $this->objval($_obj,'field_type')  == "checkbox") { ?>
												<?php echo vldext_break($_obj['field_value']); ?>
											<?php } else { ?>
												<?php echo isset($_obj['field_value']) ? $_obj['field_value'] : "&#123;field_value&#125;"; ?>
											<?php } ?>
										<?php } else { ?>
											<?php echo vldext_lang("core","user_field_none"); ?>
										<?php } ?>
									</dd>
								<?php } $_obj=$_stack[--$_stack_cnt];} ?>
							</dl>
						</div>
						<script type="text/javascript" language="javascript">switch_tabs('profile_data', <?php echo isset($_obj['rowcnt']) ? $_obj['rowcnt'] : "&#123;rowcnt&#125;"; ?>, 1)</script>
					<?php } ?>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
			</div>


			<div style="margin-bottom:20px; border: 1px #eee solid; padding:13px 13px 13px 13px; border-radius: 3px 3px 3px 3px;">
            <?php echo vldext_activities(array('member_id'=>$_obj['member_id'],'timeframe'=>"45",'limit'=>"30")); ?>
            </div>

		</div>
	</div>

<?php } ?>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- /RIGHT CONTENT -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>