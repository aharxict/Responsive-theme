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
								<div style="float:left;"><h2><?php if ( $this->objval($_obj,'page_online') ) { ?><?php echo vldext_lang("favorites","app_favorites_online"); ?><?php } else { ?><?php echo vldext_lang("favorites","app_favorites"); ?><?php } ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/favorites/","index.php?m=account_favorites"); ?>" class="btn <?php if ( $this->objval($_obj,'active_module')  == "account_favorites") { ?>active<?php } ?>"><i class="glyphicon glyphicon-star"></i> <?php echo vldext_lang("favorites","opt_favorites"); ?></a>
                           
                           <?php if ( @$PREFS->conf['enable_fans']  &&  @$SESSION->conf['can_view_own_fans'] ) { ?>
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/favorites/fans/","index.php?m=account_favorites&p=fans"); ?>" class="btn"><i class="glyphicon glyphicon-info-sign"></i> <?php echo vldext_lang("favorites","opt_fans"); ?></a>
                           <?php } ?>
                           
                           <?php if ( $this->objval($_obj,'show_online_tab') ) { ?>
                           <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/favorites/online/","index.php?m=account_favorites&p=online"); ?>" class="btn <?php if ( $this->objval($_obj,'active_module')  == "account_favorites_online") { ?>active<?php } ?>"><i class="glyphicon glyphicon-globe"></i> <?php echo vldext_lang("favorites","opt_favorites_online"); ?></a>
                           <?php } ?>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>
        
<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_friends">
<style type="text/css">
.dataitem {    
	background: transparent url('<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>templates/<?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/border.png') repeat-x scroll left bottom;
    padding-bottom:10px;
    margin-bottom: 15px;
}
ul.actions li {
	background: transparent url('<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>templates/<?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/border.png') repeat-x scroll left bottom;
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
			<?php if (!empty($_obj['favorites_profiles'])){ if (!is_array($_obj['favorites_profiles'])) $_obj['favorites_profiles']=array(array('favorites_profiles'=>$_obj['favorites_profiles'])); $_tmp_arr_keys=array_keys($_obj['favorites_profiles']); if ($_tmp_arr_keys[0]!='0') $_obj['favorites_profiles']=array(0=>$_obj['favorites_profiles']); $_stack[$_stack_cnt++]=$_obj; $_cnt['favorites_profiles']=count($_obj['favorites_profiles']); foreach ($_obj['favorites_profiles'] as $rowcnt=>$favorites_profiles) { $favorites_profiles['rowcnt']=$rowcnt; $favorites_profiles['rowpos']=$rowcnt+1; $favorites_profiles['rownum']=$rowcnt%2+1; $favorites_profiles['rowtotal']=$_cnt['favorites_profiles']; $favorites_profiles['rowfirst']=$rowcnt==0?1:0; $favorites_profiles['rowlast']=($rowcnt+1)==$_cnt['favorites_profiles']?1:0; $_obj=&$favorites_profiles; ?>
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
										<?php if ( @$SESSION->conf['can_delete_own_favorites'] ) { ?>
											<li class="remove"><a href="#" onclick="javascript:confirmLink('<?php echo vldext_lang("favorites","delete?"); ?>', '<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_delete_link']) ? $_obj['member_delete_link'] : "&#123;member_delete_link&#125;"; ?>')" title="<?php echo vldext_lang("favorites","delete"); ?>"><span class="glyphicon glyphicon-remove" style="padding-right:8px;"></span><?php echo vldext_lang("favorites","delete"); ?></a></li>
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

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("favorites","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("favorites","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

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