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
								<div style="float:left;"><h2>{lang:"friends","app_friends_requests"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/friends/","index.php?m=account_friends"}" class="btn"><i class="glyphicon glyphicon-heart"></i> {lang:"friends","opt_friends"}</a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/friends/requests/","index.php?m=account_friends&p=requests"}" class="btn active"><i class="glyphicon glyphicon-info-sign"></i> {lang:"friends","app_friends_requests"}<!-- IF session.new_friends --> ({session.new_friends})<!-- ENDIF --></a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/friends/online/","index.php?m=account_friends&p=online"}" class="btn"><i class="glyphicon glyphicon-globe"></i> {lang:"friends","opt_friends_online"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
<!-- IF hide_content != "1" -->

	<div class="outter page_account_friends_requests">
<style type="text/css">
.dataitem {    
    padding-bottom:10px;
    margin-bottom: 15px;
}
ul.actions li {
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
			<!-- BEGIN requests_profiles -->
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
										<!-- IF member_accept_link -->
											<li class="approve"><a href="#" onclick="javascript:confirmLink('{lang:"friends","accept?"}', '{top.virtual_path}{member_accept_link}')" title="{lang:"friends","accept"}"><span class="glyphicon glyphicon-ok" style="padding-right:8px;"></span>{lang:"friends","accept"}</a></li>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_friends -->
											<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"friends","delete?"}', '{top.virtual_path}{member_delete_link}')" title="{lang:"friends","delete"}"><span class="glyphicon glyphicon-remove" style="padding-right:8px;"></span>{lang:"friends","delete"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
							</div>
		                <div class="clearfix"></div>
				</div>
			<!-- END requests_profiles -->
		</div>
		<div class="clear"></div>

	</div>

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