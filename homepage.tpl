<!-- INCLUDE header.tpl -->

    <section id="main-slider" class="no-margin"
<!-- IF loggedin == "0" -->
style="margin-top: 57px;"
<!-- ENDIF -->
    >
        <div class="carousel slide" data-ride="carousel">
            <!--  <ol class="carousel-indicators">
                  <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                   <li data-target="#main-slider" data-slide-to="1"></li>
                  <li data-target="#main-slider" data-slide-to="2"></li>

            </ol> -->
            <div class="carousel-inner">
                <div class="item active"
                     style="background: linear-gradient(90deg,#d7df39, #2fc091);">
                     <!-- style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({virtual_tpl_path}{session.template}/media/01_slider.jpg);background-position: 50%;background-repeat: no-repeat;background-size: cover;" -->

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
                <!--   <div class="item" style="background-image: url({virtual_tpl_path}{session.template}/media/02_slider.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <!--
                                    <h2 class="animation animated-item-1">Advanced Search and matchmaking</h2>
                                    <p class="animation animated-item-2">With our advanced search facility on hand, you can easily filter out the members who should meet your criteria</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                     -->
                <!--   </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <!--   <div class="item" style="background-image: url({virtual_tpl_path}{session.template}/media/03_slider.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <!--
                                    <h2 class="animation animated-item-1">Powerful and Responsive Theme</h2>
                                    <p class="animation animated-item-2">Perfect template and theme for vldPersonals dating software. More information at vldPersonals-themes.com</p>
                                    <a class="btn btn-md animation animated-item-3" href="http://www.vldpersonals-themes.com/">Read More</a>
                                    -->
                <!--    </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <!--
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
         -->
    </section><!--/#main-slider-->

<!-- IF loggedin == "0" -->
<div class="container home">
    <div class="row">
        <div id="registration_block"class="col-md-5">
            <h3 class="front_reg_title bg-primary">{vldthemes:a="lang",key="reg_title"}</h3>
            <div id="reg_inner"></div>
            <div id="login_inner" style="display: none;"></div>
        </div>
    </div>
</div>

<!-- ENDIF -->

<div class="stage stage-white star-bg">
    <div class="container container-small ">
        <div class="home_members homepage">
            <h2 class="nhtitle text-primary"><em>Schau Dir unsere Mitglieder an</em></h2>
            <div class="members_list members_popular row">
                {members:limit=4,photos=1,cache_time=0,cache_name="featured_home",featured="1",orderby="random",template="ext.members.home.tpl"}
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
                    <!-- <div class="section-title">

                        <h2><em>{lang:"core","home_latest_news"}</em></h2>
                    </div>
                        -->
                    {news:limit=2,cache_time=0,template="ext.news.home.tpl"}

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
                    <h2 class="nhtitle text-primary">info@jew-friends.eu</h2>
                    <p class="lead">Wir freuen uns, von Dir zu hören</p>
                </a>
            </div>
            <div class="icon-box col-sm-12 col-md-6">
                <a href="https://www.facebook.com/JewFriends.eu/" class="col-sm-12 envelope wow " data-wow-delay="1s" target="_blank">
                    <h2 class="nhtitle text-primary" style="display: none;">facebook.com/JewFriends.eu/</h2>
                    <p class="lead" style="display: none"></p>
                    <h2 class="facebook nhtitle text-primary"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        Like uns auf Facebook</h2>
                </a>
            </div>
           <!-- <div class="icon-box col-sm-12 col-md-4">
                <a href="account/register/" class="col-sm-12 comment wow " data-wow-delay="1.5s">
                    <h2 class="nhtitle text-primary">{vldthemes:a="lang",key="homepage_title_5"}</h2>
                    <p class="lead">{vldthemes:a="lang",key="homepage_subtitle_5"}</p>
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

                        <h2><em>Unsere Blogs, die Möglichkeit, deine Gedanken mitzuteilen</em></h2>
                    </div>

                    {blogs:limit=4,cache_time=0,template="ext.blogs.home.tpl"}

                </div>
            </div>
        </div>
    </div>
</div>





<!-- INCLUDE footer.tpl -->