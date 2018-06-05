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
                    <div class="hide-on-mobile">
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>
                            
                            <div class="image picture_zoom">
                            <?php $_temp_inc = $TEMPLATE->output('member_sections_picture_profile.tpl',0); include($_temp_inc); ?>
                            </div>
                            
						</div>
                        

<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>					
                    
                    </div>
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="padding-bottom:0px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC;">
								<div style="float:left;"><h2><?php if ( $this->objval($_obj,'hide_content')  != "1") { ?><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?>'s <?php echo vldext_lang("member","frm_pictures"); ?><?php } else { ?><?php echo vldext_lang("member","frm_pictures"); ?><?php } ?></h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-user"></i> <span style="text-transform:uppercase;"><?php echo vldext_lang("member","frm_profile"); ?></span></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_pictures_link']) ? $_obj['member_pictures_link'] : "&#123;member_pictures_link&#125;"; ?>" class="btn active"><i class="glyphicon glyphicon-picture"></i> <span style="text-transform:uppercase;"><?php echo vldext_lang("member","frm_pictures"); ?></span></a>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<div class="single-post-content" style="border-bottom:none;">
                            
 
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_albums">

		<div class="typemedia">
			<?php if (!empty($_obj['profile_albums'])){ if (!is_array($_obj['profile_albums'])) $_obj['profile_albums']=array(array('profile_albums'=>$_obj['profile_albums'])); $_tmp_arr_keys=array_keys($_obj['profile_albums']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_albums']=array(0=>$_obj['profile_albums']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_albums']=count($_obj['profile_albums']); foreach ($_obj['profile_albums'] as $rowcnt=>$profile_albums) { $profile_albums['rowcnt']=$rowcnt; $profile_albums['rowpos']=$rowcnt+1; $profile_albums['rownum']=$rowcnt%2+1; $profile_albums['rowtotal']=$_cnt['profile_albums']; $profile_albums['rowfirst']=$rowcnt==0?1:0; $profile_albums['rowlast']=($rowcnt+1)==$_cnt['profile_albums']?1:0; $_obj=&$profile_albums; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<?php if ( $this->objval($_obj,'album_preview')  &&  $this->objval($_obj,'album_picture_active') ) { ?>
										<?php if ( @$PREFS->conf['adult_images']  &&  $this->objval($_obj,'album_picture_adult') ) { ?>
											<?php if ( @$SESSION->conf['showadult']  &&  @$SESSION->conf['can_view_adult_images'] ) { ?>
												<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['album_pictures_link']) ? $_obj['album_pictures_link'] : "&#123;album_pictures_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_stack[0]['member_media_path']) ? $_stack[0]['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['album_preview']) ? $_obj['album_preview'] : "&#123;album_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
											<?php } else { ?>
												<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['album_pictures_link']) ? $_obj['album_pictures_link'] : "&#123;album_pictures_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
											<?php } ?>
										<?php } else { ?>
											<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['album_pictures_link']) ? $_obj['album_pictures_link'] : "&#123;album_pictures_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_stack[0]['member_media_path']) ? $_stack[0]['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['album_preview']) ? $_obj['album_preview'] : "&#123;album_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
										<?php } ?>
									<?php } else { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['album_pictures_link']) ? $_obj['album_pictures_link'] : "&#123;album_pictures_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/album_picture_none.gif" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
									<?php } ?>
								</div>
							</td>
		                    <td class="data">
								<div class="datainfo" style="margin-left:7px;">
									<dl class="datainfo">
										<div><strong><?php echo vldext_lang("member","description"); ?>:</strong> <?php echo isset($_obj['album_description']) ? $_obj['album_description'] : "&#123;album_description&#125;"; ?></div>
										<div><strong><?php echo vldext_lang("member","total_pictures"); ?>:</strong> <?php echo isset($_obj['album_total_pictures']) ? $_obj['album_total_pictures'] : "&#123;album_total_pictures&#125;"; ?></div>
										<div><strong><?php echo vldext_lang("member","post_date"); ?>:</strong> <?php echo isset($_obj['album_post_date']) ? $_obj['album_post_date'] : "&#123;album_post_date&#125;"; ?></div>
										<?php if ( $this->objval($_obj,'album_update_date') ) { ?>
											<div><strong><?php echo vldext_lang("member","update_date"); ?>:</strong> <?php echo isset($_obj['album_update_date']) ? $_obj['album_update_date'] : "&#123;album_update_date&#125;"; ?></div>
										<?php } ?>
									</dl>
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
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("member","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("member","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

<?php } ?>

                            
                            
                            
							</div>
						</div>


</div>
<!-- End Blog Post Excerpt -->

</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>