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
        
<!-- IF hide_content != "1" -->

	<div class="outter page_account_albums">

		<div class="typemedia">
			<!-- BEGIN profile_albums -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain" style="margin-bottom:7px;">
						<tr>
							<td>
								<div class="image">
									<!-- IF album_preview -->
										<a href="{top.virtual_path}{album_pictures_link}" title="{lang:"albums","pictures"}"><img src="{top.virtual_pic_path}{session.media_path}{album_preview}" alt="{lang:"albums","pictures"}" border="0" style="height:125px; width:125px;" height="125" width="125" /><br /></a>
									<!-- ELSE -->
										<a href="{top.virtual_path}{album_pictures_link}" title="{lang:"albums","pictures"}"><img src="{top.virtual_tpl_path}{session.template}/media/album_picture_none.gif" alt="{lang:"albums","pictures"}" border="0" style="height:125px; width:125px;" height="125" width="125" /><br /></a>
									<!-- ENDIF -->
								</div>
							</td>
		                    <td class="data" style="padding-left:7px;">
								<div class="datainfo">
									<dl class="datainfo" style="margin-bottom:7px;">
										<dt style="float:left; padding-right:5px;">{lang:"albums","notes"}:</dt>
										<dd style="float:left;">{album_description}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; padding-right:5px;">{lang:"albums","total_pictures"}:</dt>
										<dd style="float:left;">{album_total_pictures}</dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; padding-right:5px;">{lang:"albums","post_date"}:</dt>
										<dd style="float:left;">{album_post_date}</dd>
                                        <div class="clearfix"></div>
										<!-- IF album_update_date -->
											<dt style="float:left; padding-right:5px;">{lang:"albums","update_date"}:</dt>
											<dd style="float:left;">{album_update_date}</dd>
                                            <div class="clearfix"></div>
										<!-- ENDIF -->
									</dl>
								</div>
							</td>
		                    <td>
								<div class="actions">
									<ul class="actions">
										<!-- IF session.can_edit_own_pictures -->
											<li class="pictures"><a href="{top.virtual_path}{album_pictures_link}" title="{lang:"albums","pictures"}">{lang:"albums","pictures"}</a></li>
											<li class="edit"><a href="{top.virtual_path}{album_edit_link}" title="{lang:"albums","edit"}">{lang:"albums","edit"}</a></li>
										<!-- ENDIF -->
										<!-- IF session.can_delete_own_pictures -->
											<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"albums","delete?"}', '{top.virtual_path}{album_delete_link}')" title="{lang:"albums","delete"}">{lang:"albums","delete"}</a></li>
										<!-- ENDIF -->
									</ul>
									<div class="clear"></div>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
			<!-- END profile_albums -->
		</div>
		<div class="clear"></div>

	</div>

	<!-- IF total_pages > "1" -->
		<div class="footer_wrap">
			<div class="footer">
				<p>{pages_info}</p>
				<!-- IF previous_page != "0" -->
					<a href="{virtual_path}{previous_page_link}">&laquo; {lang:"albums","previous_page"}</a>
				<!-- ENDIF -->
				<!-- IF next_page != "0" -->
					<a href="{virtual_path}{next_page_link}">{lang:"albums","next_page"} &raquo;</a>
				<!-- ENDIF -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<!-- ENDIF -->

<!-- ENDIF -->          
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->