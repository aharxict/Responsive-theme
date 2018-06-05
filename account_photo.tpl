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
						<div class="hide-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>
                        </div>
<div class="hide-mobile">
<!-- INCLUDE ext.member_sidebar.tpl -->
</div>

<div class="hide-mobile">
<!-- INCLUDE ext.search.tpl -->
</div>
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"photo","app_photo"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_photo" class="btn active"><i class="glyphicon glyphicon-picture"></i> {lang:"photo","app_photo"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
 <!-- IF hide_content != "1" -->

	<div class="outter page_account_photo">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td>
							<div class="image image-profile-preview">
								<!-- IF photo_filename -->
									<a class="picture_zoom" href="{virtual_pic_path}{session.media_path}{photo_filename_large}" target="_blank" id="photo_0"><img src="{virtual_pic_path}{session.media_path}{photo_filename}" border="0" alt="" /><br /></a>
									<div id="photo_0_zoom" style="display:none"><img src="{virtual_pic_path}{session.media_path}{photo_filename_large}" alt="" border="0" /><br/></div>
								<!-- ELSE -->
									<a href="{virtual_path}{member_photo_link}"><img src="{virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /><br /></a>
								<!-- ENDIF -->
							</div>
                            <div class="clearfix"></div>
                        <!-- IF photo_filename -->
						<div class="actions hide-mobile" style="border:#eee 1px solid; border-radius:3px; margin-top:7px; padding:7px; font-size:12px; width:212px;">
						<a style="display:none; padding-right:7px;" href="{top.virtual_path}{member_thumbnail_link}" title="{lang:"photo","edit_thumbnail"}"><i class="glyphicon glyphicon-edit"></i> {lang:"photo","edit_thumbnail"}</a>
                        <a href="#" onclick="javascript:confirmLink('{lang:"photo","delete?"}', '{top.virtual_path}{delete_link}')" title="{lang:"photo","delete"}"><i class="glyphicon glyphicon-remove"></i> {lang:"photo","delete"}</a>
						</div>
						<!-- ENDIF -->
						</td>
		                <td class="data">
							<div class="form">
								<form name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_photo">{lang:"photo","select_picture"}</label></dt>
											<dd><input style="height:auto;" id="field_photo" type="file" name="photo" value="" class="text form-control" /></dd>
											<!-- IF settings.adult_images -->
												<dt>
													<label for="field_adult">
														<input type="checkbox" class="checkbox" name="adult" value="1" id="field_adult" <!-- IF photo_adult -->checked="checked"<!-- ENDIF --> />
														{lang:"photo","is_adult"}
													</label>
												</dt>
											<!-- ENDIF -->
    										<dd class="submit btn-box">
    											<input class="submit btn" type="submit" name="submit" value="{lang:"photo","submit"}" />
    										</dd>
										</dl>
									</div>
									<input type="hidden" name="issubmit" value="1" />
								</form>
							</div>
						</td>
		            </tr>
		        </table>
			</div>
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