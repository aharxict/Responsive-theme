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

	<div class="outter page_member_pictures">

		<div class="typepage">
			<div class="dataitem single gallerybox">
				<?php if ( $this->objval($_obj,'album_display') ) { ?>
					<?php if (!empty($_obj['profile_pictures'])){ if (!is_array($_obj['profile_pictures'])) $_obj['profile_pictures']=array(array('profile_pictures'=>$_obj['profile_pictures'])); $_tmp_arr_keys=array_keys($_obj['profile_pictures']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_pictures']=array(0=>$_obj['profile_pictures']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_pictures']=count($_obj['profile_pictures']); foreach ($_obj['profile_pictures'] as $rowcnt=>$profile_pictures) { $profile_pictures['rowcnt']=$rowcnt; $profile_pictures['rowpos']=$rowcnt+1; $profile_pictures['rownum']=$rowcnt%2+1; $profile_pictures['rowtotal']=$_cnt['profile_pictures']; $profile_pictures['rowfirst']=$rowcnt==0?1:0; $profile_pictures['rowlast']=($rowcnt+1)==$_cnt['profile_pictures']?1:0; $_obj=&$profile_pictures; ?>
						<div class="image image-preview-pictures">
							<?php if ( $this->objval($_obj,'picture_adult') ) { ?>
								<?php if ( @$SESSION->conf['showadult']  &&  @$SESSION->conf['can_view_adult_images'] ) { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_stack[0]['member_media_path']) ? $_stack[0]['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
								<?php } else { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
								<?php } ?>
							<?php } else { ?>
								<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_stack[0]['member_media_path']) ? $_stack[0]['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /><br /></a>
							<?php } ?>
						</div>
					<?php } $_obj=$_stack[--$_stack_cnt];} ?>
					<div class="clearfix"></div>
				<?php } else { ?>
					<div class="form">
						<form name="privatealbum" method="post" action="">
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_album_password"><?php echo vldext_lang("member","private_album_warning"); ?></label></dt>
									<dd><input class="text" id="field_album_password" name="album_password" value="" type="text" /></dd>
									<dd class="submit">
										<input class="submit" name="private_on" value="<?php echo vldext_lang("member","private_warning_yes"); ?>" type="submit" />&nbsp;
										<input class="submit" name="private_off" value="<?php echo vldext_lang("member","private_warning_no"); ?>" onclick="javascript:history.go(-1)" type="button" />
									</dd>
								</dl>
							</div>
						</form>
					</div>
				<?php } ?>
			</div>
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
