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
<!-- LEFT SIDEBAR -->
<div class="hide-mobile">

					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
					
                    
                    </div>

</div>
<!-- /LEFT SIDEBAR -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"core","usermenu_pictures"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{pictures_view_link}" class="btn active"><i class="glyphicon glyphicon-picture"></i> {lang:"pictures","opt_viewpictures"}</a>
                           
                           <a href="{virtual_path}{pictures_add_link}" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> {lang:"pictures","opt_addpicture"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


	<div class="outter page_account_pictures">

		<div class="typemedia">
			<!-- BEGIN profile_pictures -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}" style="border:#eee solid 1px; border-radius:3px; margin-bottom:10px; padding:5px;">
					<table class="plain">
						<tr>
							<td>
								<div class="image" style="width:125px; margin-right:10px;">
									<a href="{top.virtual_path}{picture_edit_link}"><img src="{top.virtual_pic_path}{session.media_path}{picture_preview}" alt="" border="0" style="height:125px; width:125px;" height="125" width="125" /><br /></a>
								</div>
							</td>
		                    <td class="data" valign="middle">
								<div class="datainfo">
									<dl class="datainfo" style="padding-bottom:7px;">
										<!-- IF picture_description -->
											<dt style="float:left; padding-right:5px;">{lang:"pictures","notes"}:</dt>
											<dd style="float:left;">{picture_description}</dd>
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
										<!-- IF settings.enable_picture_rating AND picture_rated -->
											<dt style="float:left; padding-right:5px;">{lang:"pictures","rated_on"}:</dt>
											<dd style="float:left;">{picture_score} ({picture_votes} {lang:"pictures","votes"})</dd>
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
										<!-- IF settings.adult_images AND picture_adult -->
											<dt style="float:left; padding-right:5px;">{lang:"pictures","set_as_adult"}:</dt>
											<dd style="float:left;">{lang:"core","yes"}</dd>
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
										<dt style="float:left; padding-right:5px;">{lang:"pictures","post_date"}:</dt>
										<dd style="float:left;">{picture_post_date}</dd>
                                        <div class="clearfix"></div>
									</dl>
								</div>
                                
                                <div style="border-top:#eee solid 1px; padding:5px; padding-left:0; padding-bottom:0; margin-top:7px;">
									<!-- IF session.can_view_own_pictures_comments -->
									<a href="{top.virtual_path}{picture_comments_link}" style="padding-right:5px;"><i class="glyphicon glyphicon-comment"></i> {picture_total_comments} {lang:"pictures","comments"}</a>
									<!-- ENDIF -->
									<!-- IF session.can_edit_own_pictures -->
									<a href="{top.virtual_path}{picture_edit_link}" title="{lang:"pictures","edit"}" style="padding-right:5px;"><i class="glyphicon glyphicon-edit"></i> {lang:"pictures","edit"}</a>
									<a style="display:none; padding-right:5px;" href="{top.virtual_path}{picture_thumbnail_link}" title="{lang:"pictures","edit_thumbnail"}"><i class="glyphicon glyphicon-edit"></i> {lang:"pictures","edit_thumbnail"}</a>
									<!-- ENDIF -->
									<!-- IF session.can_delete_own_pictures -->
									<a href="#" onclick="javascript:confirmLink('{lang:"pictures","delete?"}', '{top.virtual_path}{picture_delete_link}')" title="{lang:"pictures","delete"}" style="padding-right:5px;"><i class="glyphicon glyphicon-remove"></i> {lang:"pictures","delete"}</a>
										<!-- ENDIF -->
									
								</div>
                                
							</td>
		                </tr>
		            </table>

				</div>
			<!-- END profile_pictures -->
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