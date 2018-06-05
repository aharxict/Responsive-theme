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

<div class="hide-on-mobile">
<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>
</div>

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("events","app_pictures"); ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<div class="outter page_member_pictures">

	<div class="typemedia">

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_pictures_view">

		<div class="typepage">
			<div class="dataitem single galleryitem">
				<div class="arrows">
					<div style="float: left">
						<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['pictures_page_link']) ? $_obj['pictures_page_link'] : "&#123;pictures_page_link&#125;"; ?>"><?php echo vldext_lang("events","back_to_pictures"); ?></a>
					</div>
					<div style="float: right">
						<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_picture_link']) ? $_obj['previous_picture_link'] : "&#123;previous_picture_link&#125;"; ?>">&laquo; <?php echo vldext_lang("events","previous_page"); ?></a>&nbsp;
						<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_picture_link']) ? $_obj['next_picture_link'] : "&#123;next_picture_link&#125;"; ?>"><?php echo vldext_lang("events","next_page"); ?> &raquo;</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="image">
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_filename']) ? $_obj['picture_filename'] : "&#123;picture_filename&#125;"; ?>" alt="" border="0" /><br /></a>
				</div>
				<div class="entry">
					<?php echo isset($_obj['picture_description']) ? $_obj['picture_description'] : "&#123;picture_description&#125;"; ?>
				</div>
			</div>
		</div>
		<div class="clear"></div>

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