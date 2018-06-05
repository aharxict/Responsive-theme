<!-- INCLUDE header.tpl -->

<div class="section section-header">
<div class="container">
<div class="row">

<!-- IF loggedin -->
<!-- INCLUDE user-menu.tpl -->
<!-- ENDIF -->

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post Excerpt -->
					<div class="col-sm-4 col-leftside">
						<div class="hide-on-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" /></a>
							<!-- ELSE -->
                            <a href="{top.virtual_path}{session.username}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /></a>
                            <!-- ENDIF -->
							
						</div>
                        </div>

						<div class="hide-on-mobile">
                        <!-- INCLUDE ext.member_sidebar.tpl -->
                        </div>
						
                        <div class="hide-on-mobile">
                        <!-- INCLUDE ext.search.tpl -->
                        </div>
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"favorites","app_fans"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/favorites/","index.php?m=account_favorites"}" class="btn"><i class="glyphicon glyphicon-star"></i> {lang:"favorites","opt_favorites"}</a>
                           
                           <!-- IF settings.enable_fans AND session.can_view_own_fans -->
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/favorites/fans/","index.php?m=account_favorites&p=fans"}" class="btn active"><i class="glyphicon glyphicon-info-sign"></i> {lang:"favorites","opt_fans"}</a>
                           <!-- ENDIF -->
                           
                           <!-- IF show_online_tab -->
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/favorites/online/","index.php?m=account_favorites&p=online"}" class="btn"><i class="glyphicon glyphicon-globe"></i> {lang:"favorites","opt_favorites_online"}</a>
                           <!-- ENDIF -->
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->
        
<!-- IF hide_content != "1" -->
<div class="content-box">
	<div class="outter page_account_friends">
<style type="text/css">
.dataitem {    
	background: transparent url('{virtual_path}templates/{session.template}/media/border.png') repeat-x scroll left bottom;
    padding-bottom:10px;
    margin-bottom: 15px;
}
ul.actions li {
	background: transparent url('{virtual_path}templates/{session.template}/media/border.png') repeat-x scroll left bottom;
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
			<!-- BEGIN fans_profiles -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
								
                                <div style="float:left;">
                                <ul class="grid cs-style-3" style="padding:0;">
                                <div class="image" style="float:left; margin-right:5px; margin-bottom:5px;">
									<figure>
                                    <!-- INCLUDE member_sections_picture.tpl -->
                                    </figure>
								</div>
                                </ul>
                                </div>

								<div style="float:left;">
                                <div class="datainfo">
									<!-- INCLUDE member_sections_name.tpl -->
									<dl class="datainfo">
									<!-- INCLUDE member_sections_card.tpl -->
									</dl>
								</div>
                                </div>

		                    <div style="float:right;">
								<div class="actions">
									<ul class="actions" style="list-style:none inside; padding-left:0; margin-left:0;">
										<!-- INCLUDE member_sections_quick_actions.tpl -->
									</ul>
									<div class="clear"></div>
								</div>
							</div>
		                <div class="clearfix"></div>
				</div>
			<!-- END fans_profiles -->
		</div>
		<div class="clear"></div>

	</div>
</div>
	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"favorites","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"favorites","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

<!-- ENDIF -->
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

<!-- INCLUDE footer.tpl -->