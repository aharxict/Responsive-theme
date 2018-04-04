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
include_once SYS_PATH . "includes/ext/ext.metavideo.php";
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

<div class="hide-on-mobile">
<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>
</div>

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("videos","app_videos"); ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<div class="outter page_member_videos">

	<div class="typemedia">

		<?php if ( $this->objval($_obj,'hide_content')  != "1" &&  $this->objval($_obj,'global_videos') ) { ?>

			<div class="dataitem single dataitemlast gallerylist">
				<?php if (!empty($_obj['global_videos'])){ if (!is_array($_obj['global_videos'])) $_obj['global_videos']=array(array('global_videos'=>$_obj['global_videos'])); $_tmp_arr_keys=array_keys($_obj['global_videos']); if ($_tmp_arr_keys[0]!='0') $_obj['global_videos']=array(0=>$_obj['global_videos']); $_stack[$_stack_cnt++]=$_obj; $_cnt['global_videos']=count($_obj['global_videos']); foreach ($_obj['global_videos'] as $rowcnt=>$global_videos) { $global_videos['rowcnt']=$rowcnt; $global_videos['rowpos']=$rowcnt+1; $global_videos['rownum']=$rowcnt%2+1; $global_videos['rowtotal']=$_cnt['global_videos']; $global_videos['rowfirst']=$rowcnt==0?1:0; $global_videos['rowlast']=($rowcnt+1)==$_cnt['global_videos']?1:0; $_obj=&$global_videos; ?>
					<div class="image" style="float:left; margin-right:5px; margin-bottom:5px;">
						<?php if ( $this->objval($_obj,'video_type') ) { ?>
							<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_link']) ? $_obj['video_link'] : "&#123;video_link&#125;"; ?>"><img src="<?php echo vldext_metavideo(array('video_id'=>$_obj['meta_id'],'type'=>$_obj['video_type'],'media'=>"preview",'preview'=>$_obj['video_preview'])); ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
						<?php } else { ?>
							<?php if ( $this->objval($_obj,'video_preview') ) { ?>
								<?php if ( $this->objval($_obj,'video_adult') ) { ?>
									<?php if ( @$SESSION->conf['showadult']  &&  @$SESSION->conf['can_view_adult_images'] ) { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_link']) ? $_obj['video_link'] : "&#123;video_link&#125;"; ?>" class="img" title="<?php echo vldext_trim($_obj['video_description'],60); ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['video_preview']) ? $_obj['video_preview'] : "&#123;video_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
									<?php } else { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_link']) ? $_obj['video_link'] : "&#123;video_link&#125;"; ?>" class="img" title="<?php echo vldext_trim($_obj['video_description'],60); ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
									<?php } ?>
								<?php } else { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_link']) ? $_obj['video_link'] : "&#123;video_link&#125;"; ?>" class="img" title="<?php echo vldext_trim($_obj['video_description'],60); ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['video_preview']) ? $_obj['video_preview'] : "&#123;video_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
								<?php } ?>
							<?php } else { ?>
								<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['video_link']) ? $_obj['video_link'] : "&#123;video_link&#125;"; ?>" class="img" title="<?php echo vldext_trim($_obj['video_description'],60); ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/video_picture_none.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /><br /></a>
							<?php } ?>
						<?php } ?>
	
					</div>
					<?php if ( $this->objval($_obj,'rowcnt')  > "0" &&  $this->objval($_obj,'rowlast')  == "0" &&  $this->objval($_obj,'rowcnt')  % "6" == "5") { ?><div class="clear"></div><?php } ?>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
				<div class="clearfix"></div>
			</div>

		<?php } ?>

	</div>
	<div class="clearfix"></div>

</div>

<style type="text/css">
div.page_numbers {
	margin-top: 10px;
	padding-top: 20px;
}
div.page_numbers p {
    margin: 0px 2px 0px 0px;
    padding: 4px 8px;
    display: block;
    float: left;
    color: #666;
    border: 1px solid #404040;
}
</style>
<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>
	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
	<div class="footer_wrap">
		<div class="page_numbers">
			<p><?php echo vldext_lang("videos","page_numbers"); ?>: </p>
        	<?php echo isset($_obj['page_links']) ? $_obj['page_links'] : "&#123;page_links&#125;"; ?>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clearfix"></div>
	<?php } ?>
<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>