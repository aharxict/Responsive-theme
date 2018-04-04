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

include_once SYS_PATH . "includes/ext/ext.members.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/ext.news.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/slide1.jpg);background-position: 50%;background-repeat: no-repeat;background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">YourWebsite.com Dating Community</h2>
                                    <p class="animation animated-item-2">Perfect template and theme for vldPersonals dating software. More information at vldPersonals-themes.com</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/slide2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Advanced Search and matchmaking</h2>
                                    <p class="animation animated-item-2">With our advanced search facility on hand, you can easily filter out the members who should meet your criteria</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/slide3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">Powerful and Responsive Theme</h2>
                                    <p class="animation animated-item-2">Perfect template and theme for vldPersonals dating software. More information at vldPersonals-themes.com</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- SERVICES -->
        <div class="section section-white" style="padding-top:20px;">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
                            <img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/heart-search.png" width="70" height="70" />
		        			<h3>Find the right partner</h3>
		        			<p>With our advanced search facility on hand, you can easily filter out the members who should meet your criteria and requirements.</p>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/heart-screen.png" width="70" height="70" />
		        			<h3>1000's Singles</h3>
		        			<p>We constantly get new registered singles here at YourWebsite.com who are looking to find and meet the right one for him / her.</p>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/heart-message.png" width="70" height="70" />
		        			<h3>Communicate</h3>
		        			<p>Where, when and how you want! YourWebsite.com supports all kinds of platforms. Whether you choose a computer, mobile phone or tablet.</p>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- /SERVICES -->

		<!-- RANDOM MEMBERS WITH PHOTO -->	
        <div class="section section-white" style="padding-top:0;">
	        <div class="container" style="padding:10px;">
	        	<div class="row" style="border-radius: 5px; box-shadow: 1px 1px 5px 0 #ced4e0; background-color:#fff; margin-left:0; margin-right:0;">
	
		
			<ul class="grid cs-style-3" style="padding:0px;">
            <?php echo vldext_members(array('template'=>"ext.homepage.tpl",'limit'=>12,'photos'=>1,'orderby'=>"rand()",'cache_time'=>0,'cache_name'=>"members_homepage")); ?>
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- /RANDOM MEMBERS WITH PHOTO -->
			
<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">
					<!-- NEWS, HOMEPAGE -->
					<div class="col-sm-6" style="margin-bottom:10px;">
						<div class="blog-post blog-single-post" style="padding-bottom:10px; min-height:323px;">
							<div class="single-post-title">
								<h2><?php echo vldext_lang("core","home_latest_news"); ?></h2>
							</div>
							
                            <?php echo vldext_news(array('limit'=>2,'cache_time'=>0)); ?>

						</div>
					</div>
					<!-- /NEWS, HOMEPAGE -->
					

					<!-- ABOUT, HOMEPAGE -->
					<div class="col-sm-6">
						<div class="blog-post blog-single-post" style="min-height:323px;">
							<div class="single-post-title">
								<h2>Why YourWebsite.com?</h2>
							</div>
							
							<div class="single-post-content" style="padding-bottom:0; border-top: 2px dotted #CCC; margin-top:10px; border-bottom:none;">
								<p style="padding-top:10px;">On YourWebsite.com you can always feel safe and comfortable when you are looking for a new date. All photos and profiles are checked manually, which means that you only have serious singles to choose from. You can choose who you contact and who can send you messages. <br /> <br /> Our support is in place around the clock, every day and provide quick answers to your questions and help you with tips and advice. <br /><br /><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_register" class="btn">Sign Up Today!</a></p>
							</div>
						</div>
					</div>
					<!-- /ABOUT, HOMEPAGE -->
</div>
</div>
</div>                    

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>