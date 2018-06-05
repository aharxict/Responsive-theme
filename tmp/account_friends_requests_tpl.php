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
						<div class="hide-on-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture_large']) ? $SESSION->conf['picture_large'] : "&#123;picture_large&#125;"; ?>" alt="" border="0" /></a>
							<?php } else { ?>
                            <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" /></a>
                            <?php } ?>
							
						</div>
                        </div>

						<div class="hide-on-mobile">
                        <?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
                        </div>
						
                        <div class="hide-on-mobile">
                        <?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
                        </div>
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("friends","app_friends_requests"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/friends/","index.php?m=account_friends"); ?>" class="btn"><i class="glyphicon glyphicon-heart"></i> <?php echo vldext_lang("friends","opt_friends"); ?></a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/friends/requests/","index.php?m=account_friends&p=requests"); ?>" class="btn active"><i class="glyphicon glyphicon-info-sign"></i> <?php echo vldext_lang("friends","app_friends_requests"); ?><?php if ( @$SESSION->conf['new_friends'] ) { ?> (<?php echo isset($SESSION->conf['new_friends']) ? $SESSION->conf['new_friends'] : "&#123;new_friends&#125;"; ?>)<?php } ?></a>
                           
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/friends/online/","index.php?m=account_friends&p=online"); ?>" class="btn"><i class="glyphicon glyphicon-globe"></i> <?php echo vldext_lang("friends","opt_friends_online"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        
<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_friends_requests">
<style type="text/css">
.dataitem {    
    padding-bottom:10px;
    margin-bottom: 15px;
}
ul.actions li {
	padding-bottom:3px;
	padding-top:3px;
	min-width:125px;
}
</style>
<style type="text/css">
.tag {
   position: absolute;
   bottom: 5px;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:95.3%;
   text-align:center;
   font-weight: bold;
}
.tagthumb {
   position: absolute;
   bottom: 0;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:100%;
   text-align:center;
   font-weight: bold;
}
.hoverinfo {
   text-align:center;
   font-weight: bold;
   width:100%;
}
.overlay{
    position: absolute;
    width: 125px;
    overflow-y: hidden;
    transition-property: all;
    transition-duration: .5s;
    transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    height: 125px;
    background-color: rgba(0,0,0,0.0)
    border: 1px solid white;
    bottom: 0;
    left: 0;
    /*opacity: 0;*/
	padding:5px;
	padding-top:25px;
	color: rgba(255,255,255,0.0);
	text-align:center;
} .overlay:hover{
    color: rgba(255,255,255,1.0);
	cursor:pointer;
    /*opacity: 0.7;*/
	background-color: rgba(0,0,0,0.8);
    z-index: 1;
	border-radius:3px;
}
.imghover{
position: relative;
}
</style>
		<div class="typemembers">
			<?php if (!empty($_obj['requests_profiles'])){ if (!is_array($_obj['requests_profiles'])) $_obj['requests_profiles']=array(array('requests_profiles'=>$_obj['requests_profiles'])); $_tmp_arr_keys=array_keys($_obj['requests_profiles']); if ($_tmp_arr_keys[0]!='0') $_obj['requests_profiles']=array(0=>$_obj['requests_profiles']); $_stack[$_stack_cnt++]=$_obj; $_cnt['requests_profiles']=count($_obj['requests_profiles']); foreach ($_obj['requests_profiles'] as $rowcnt=>$requests_profiles) { $requests_profiles['rowcnt']=$rowcnt; $requests_profiles['rowpos']=$rowcnt+1; $requests_profiles['rownum']=$rowcnt%2+1; $requests_profiles['rowtotal']=$_cnt['requests_profiles']; $requests_profiles['rowfirst']=$rowcnt==0?1:0; $requests_profiles['rowlast']=($rowcnt+1)==$_cnt['requests_profiles']?1:0; $_obj=&$requests_profiles; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
								
                                <div style="float:left;">
                                <ul class="grid cs-style-3" style="padding:0;">
                                <div class="image" style="float:left; margin-right:5px; margin-bottom:5px;">
									<figure>
                                    <?php $_temp_inc = $TEMPLATE->output('member_sections_picture.tpl',0); include($_temp_inc); ?>
                                    </figure>
								</div>
                                </ul>
                                </div>

								<div style="float:left;">
                                <div class="datainfo">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_name.tpl',0); include($_temp_inc); ?>
									<dl class="datainfo">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_card.tpl',0); include($_temp_inc); ?>
									</dl>
								</div>
                                </div>

		                    <div style="float:right;">
								<div class="actions">
									<ul class="actions" style="list-style:none inside; padding-left:0; margin-left:0;">
										<?php $_temp_inc = $TEMPLATE->output('member_sections_quick_actions.tpl',0); include($_temp_inc); ?>
										<?php if ( $this->objval($_obj,'member_accept_link') ) { ?>
											<li class="approve"><a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("friends","accept?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_accept_link']) ? $_obj['member_accept_link'] : "&#123;member_accept_link&#125;"; ?>')" title="<?php echo vldext_lang("friends","accept"); ?>"><span class="glyphicon glyphicon-ok" style="padding-right:8px;"></span><?php echo vldext_lang("friends","accept"); ?></a></li>
										<?php } ?>
										<?php if ( @$SESSION->conf['can_delete_own_friends'] ) { ?>
											<li class="remove"><a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("friends","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_delete_link']) ? $_obj['member_delete_link'] : "&#123;member_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("friends","delete"); ?>"><span class="glyphicon glyphicon-remove" style="padding-right:8px;"></span><?php echo vldext_lang("friends","delete"); ?></a></li>
										<?php } ?>
									</ul>
									<div class="clear"></div>
								</div>
							</div>
		                <div class="clearfix"></div>
				</div>
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
		</div>
		<div class="clear"></div>

	</div>

<?php } ?>
		</div>
		<div class="clear"></div>

	</div>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>