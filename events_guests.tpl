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
                    <div class="hide-on-mobile">
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <div class="image picture_zoom">
                            <!-- INCLUDE member_sections_picture_profile.tpl -->
                            </div>
                            
						</div>
                        

<!-- INCLUDE ext.search.tpl -->					
                    
                    </div>
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"events","app_guests"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{event_details_link}" class="btn"><span style="text-transform:uppercase;">{lang:"events","frm_details"}</span></a>
                                <a href="{virtual_path}{event_guests_link}" class="btn active"><span style="text-transform:uppercase;">{lang:"events","frm_guests"}</span></a>
                                <!-- IF settings.enable_event_pictures -->
                                <a href="{virtual_path}{event_pictures_link}" class="btn active"><span style="text-transform:uppercase;">{lang:"events","frm_pictures"}</span></a>
                                <!-- ENDIF -->
                                </div>
                                
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


<!-- IF hide_content != "1" AND guests_profiles -->

	<div class="outter page_events_guests">

		<div class="typemembers">
			<!-- BEGIN guests_profiles -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<!-- INCLUDE member_sections_picture.tpl -->
								</div>
							</td>
							<td class="data">
								<div class="datainfo">
									<!-- INCLUDE member_sections_name.tpl -->
									<dl class="datainfo">
										<!-- INCLUDE member_sections_card.tpl -->
									</dl>
								</div>
							</td>
							<td>
								<div class="actions">
									<ul class="actions">
										<!-- INCLUDE member_sections_quick_actions.tpl -->
									</ul>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END guests_profiles -->
		</div>
		<div class="clear"></div>

	</div>

<!-- ENDIF -->

                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->