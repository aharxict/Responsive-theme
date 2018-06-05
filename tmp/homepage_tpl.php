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

include_once SYS_PATH . "includes/ext/ext.vldthemes.php";
include_once SYS_PATH . "includes/ext/ext.members.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/ext.news.php";
include_once SYS_PATH . "includes/ext/ext.blogs.php";
 ?>﻿<?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

    <section id="main-slider" class="no-margin"
<?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
style="margin-top: -60px;"
<?php } ?>
    >
        <div class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/01_slider.jpg);background-position: 50%;background-repeat: no-repeat;background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <!--    <h2 class="animation animated-item-1">jew-friends.eu - Deine Seite fuer juedische Freunde </h2>
                                    <p class="animation animated-item-2">Perfect template and theme for vldPersonals dating software. More information at vldPersonals-themes.com</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                     -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/02_slider.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <!--
                                    <h2 class="animation animated-item-1">Advanced Search and matchmaking</h2>
                                    <p class="animation animated-item-2">With our advanced search facility on hand, you can easily filter out the members who should meet your criteria</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                     -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/03_slider.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <!--
                                    <h2 class="animation animated-item-1">Powerful and Responsive Theme</h2>
                                    <p class="animation animated-item-2">Perfect template and theme for vldPersonals dating software. More information at vldPersonals-themes.com</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                    -->
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

<?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
<div class="container home">
    <div class="row">
        <div id="registration_block"class="col-md-5">
            <h3 class="front_reg_title bg-primary"><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"reg_title")); ?></h3>
            <div id="reg_inner"></div>
            <div id="login_inner" style="display: none;"></div>
        </div>
    </div>
</div>

<?php } ?>

<div class="stage stage-white star-bg">
    <div class="container container-small ">
        <div class="home_members homepage">
            <h2 class="nhtitle text-primary"><em>Check our members</em></h2>
            <div class="members_list members_popular row">
                <?php echo vldext_members(array('limit'=>4,'photos'=>1,'cache_time'=>0,'cache_name'=>"featured_home",'featured'=>"1",'orderby'=>"random",'template'=>"ext.members.home.tpl")); ?>
            </div>
        </div>
    </div>
</div>

<div class="news-section">
    <div class="container">
        <div class="row">
            <!-- NEWS, HOMEPAGE -->
            <div class="col-sm-12" style="margin-bottom:10px;">
                <div class="news-block" style="padding-bottom:10px; min-height:323px;">
                    <div class="section-title">

                        <h2><em><?php echo vldext_lang("core","home_latest_news"); ?></em></h2>
                    </div>

                    <?php echo vldext_news(array('limit'=>2,'cache_time'=>0,'template'=>"ext.news.home.tpl")); ?>

                </div>
            </div>
            <!-- /NEWS, HOMEPAGE -->
        </div>
    </div>
</div>
<div id="stage_stories" class="stage stage-white ">

    <div class="container-fluid">
        <div class="row flex-row">
            <div class="icon-box col-sm-12 col-md-6">
                <a href="mailto:info@jew-friends.eu" class="col-sm-12 commenting wow " data-wow-delay="0.5s">
                    <h2 class="nhtitle text-primary"><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"homepage_title_3")); ?></h2>
                    <p class="lead"><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"homepage_subtitle_3")); ?></p>
                </a>
            </div>
            <div class="icon-box col-sm-12 col-md-6">
                <a href="account/register/" class="col-sm-12 envelope wow " data-wow-delay="1s">
                    <h2 class="nhtitle text-primary"><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"homepage_title_4")); ?></h2>
                    <p class="lead"><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"homepage_subtitle_4")); ?></p>
                </a>
            </div>
           <!-- <div class="icon-box col-sm-12 col-md-4">
                <a href="account/register/" class="col-sm-12 comment wow " data-wow-delay="1.5s">
                    <h2 class="nhtitle text-primary"><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"homepage_title_5")); ?></h2>
                    <p class="lead"><?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"homepage_subtitle_5")); ?></p>
                </a>
            </div> -->
        </div>
    </div>
</div>
<div class="blog-section star-small-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin-bottom:10px;">
                <div class="news-block" style="padding-bottom:10px; min-height:323px;">
                    <div class="section-title">

                        <h2><em><?php echo vldext_lang("core","home_latest_blogs"); ?></em></h2>
                    </div>

                    <?php echo vldext_blogs(array('limit'=>4,'cache_time'=>0,'template'=>"ext.blogs.home.tpl")); ?>

                </div>
            </div>
        </div>
    </div>
</div>





<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>