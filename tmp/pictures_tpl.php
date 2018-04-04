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
								<div style="float:left;"><h2><?php echo vldext_lang("pictures","app_pictures"); ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<div class="outter page_member_pictures">

	<div class="typemedia">

		<?php if ( $this->objval($_obj,'hide_content')  != "1" &&  $this->objval($_obj,'global_pictures') ) { ?>
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
</style>
			<div class="dataitem single dataitemlast gallerylist">
<div class="image image-preview-pictures">
<ul class="grid cs-style-3" style="padding:0;">
				<?php if (!empty($_obj['global_pictures'])){ if (!is_array($_obj['global_pictures'])) $_obj['global_pictures']=array(array('global_pictures'=>$_obj['global_pictures'])); $_tmp_arr_keys=array_keys($_obj['global_pictures']); if ($_tmp_arr_keys[0]!='0') $_obj['global_pictures']=array(0=>$_obj['global_pictures']); $_stack[$_stack_cnt++]=$_obj; $_cnt['global_pictures']=count($_obj['global_pictures']); foreach ($_obj['global_pictures'] as $rowcnt=>$global_pictures) { $global_pictures['rowcnt']=$rowcnt; $global_pictures['rowpos']=$rowcnt+1; $global_pictures['rownum']=$rowcnt%2+1; $global_pictures['rowtotal']=$_cnt['global_pictures']; $global_pictures['rowfirst']=$rowcnt==0?1:0; $global_pictures['rowlast']=($rowcnt+1)==$_cnt['global_pictures']?1:0; $_obj=&$global_pictures; ?>
<div class="image" style="float:left; margin-right:5px; margin-bottom:5px;">
<figure>
						<?php if ( $this->objval($_obj,'picture_adult') ) { ?>
							<?php if ( @$SESSION->conf['showadult']  &&  @$SESSION->conf['can_view_adult_images'] ) { ?>
<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>" title="<?php echo vldext_trim($_obj['picture_description'],60); ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /></a>
							<?php } else { ?>
<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>" title="<?php echo vldext_trim($_obj['picture_description'],60); ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /></a>
							<?php } ?>
						<?php } else { ?>
<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>" title="<?php echo vldext_trim($_obj['picture_description'],60); ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_preview']) ? $_obj['picture_preview'] : "&#123;picture_preview&#125;"; ?>" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /></a>
						<?php } ?>
</figure>
						
					</div>
					<?php if ( $this->objval($_obj,'rowcnt')  > "0" &&  $this->objval($_obj,'rowlast')  == "0" &&  $this->objval($_obj,'rowcnt')  % "6" == "5") { ?><div class="clear"></div><?php } ?>
				<?php } $_obj=$_stack[--$_stack_cnt];} ?>
                </div>
</ul>
						<div class="clearfix"></div>
				<div class="clearfix"></div>
			</div>

		<?php } ?>

	</div>
	<div class="clear"></div>

</div>
<style type="text/css">
div.page_numbers {
	margin-top: 0;
	padding-top: 20px;
}
div.page_numbers p {
    margin: 0px 2px 0px 0px;
    padding: 4px 8px;
    display: block;
    float: left;
    color: #666;
    border: 1px solid #ddd;
}
div.page_numbers a {
    margin-right: 2px;
    padding: 4px 8px;
    display: block;
    float: left;
    color: #666;
    border: 1px solid #ddd;
	background:#fff;
    text-decoration: none;
}
div.page_numbers a.active {
    color: #eee;
    font-weight: bold;
    background: #aec62c;
	border: 1px solid #ddd;
}
</style>
<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>
<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
<div class="footer_wrap">
	<div class="page_numbers">
		<p style="background:#fff;"><?php echo vldext_lang("pictures","page_numbers"); ?>: </p>
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