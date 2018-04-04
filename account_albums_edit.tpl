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

<!-- INCLUDE login_form_sidebar.tpl -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{app_page}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<!-- IF hide_content != "1" -->

	<div class="outter page_account_albums_edit">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td valign="top">
							<div class="image">
								<!-- IF album_id -->
									<!-- IF album_preview -->
										<a href="{virtual_path}{album_pictures_link}" title="{lang:"albums","pictures"}"><img src="{virtual_pic_path}{session.media_path}{album_preview}" alt="{lang:"albums","pictures"}" border="0" /><br /></a>
									<!-- ELSE -->
										<a href="{virtual_path}{album_pictures_link}" title="{lang:"albums","pictures"}"><img src="{virtual_tpl_path}{session.template}/media/album_picture_none.gif" alt="{lang:"albums","pictures"}" border="0" /><br /></a>
									<!-- ENDIF -->
								<!-- ELSE -->
									<a href="#"><img src="{virtual_tpl_path}{session.template}/media/album_picture_none.gif" border="0" /><br /></a>
								<!-- ENDIF -->
							</div>
						</td>
		                <td class="data">
							<div class="form" style="margin-left:10px;">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
    										<dt><label for="field_description">{lang:"albums","description"}</label></dt>
											<dd><textarea id="field_description" class="textarea textarea_small form-control" cols="40" rows="5" name="description">{album_description}</textarea></dd>
											<!-- IF settings.enable_password_albums AND session.can_password_albums -->
												<dt><label for="field_password">{lang:"albums","album_password"}</label></dt>
												<dd><input id="field_password" type="text" class="text form-control" name="password" value="{album_password}" size="20" maxlength="16" /></dd>
											<!-- ENDIF -->
    										<dt><label for="field_accesstype">{lang:"albums","access_level"}</label></dt>
											<dd><select id="field_accesslevel" name="accesslevel" class="select form-control">{dropdownlist:accesslevelbox,album_access_level}</select></dd>
											<dd class="submit"><input class="submit btn" type="submit" name="submit" value="{lang:"albums","submit"}" /></dd>
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

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->