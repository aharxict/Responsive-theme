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
	                           
                            <!-- INCLUDE message.tpl -->
                            
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
						<div class="blog-post blog-single-post page-content" style="padding-bottom:0px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC;">
								<div style="float:left;"><h2>{member_username}'s <!-- IF settings.enable_old_style_pictures -->{lang:"member","frm_pictures"}<!-- ELSE -->{lang:"member","frm_albums"}<!-- ENDIF --></h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="{top.virtual_path}{member_profile_link}" class="btn"><i class="glyphicon glyphicon-user"></i> PROFILE</a>
                                <a href="{virtual_path}{member_pictures_link}" class="btn active"><i class="glyphicon glyphicon-picture"></i> <span style="text-transform:uppercase"><!-- IF settings.enable_old_style_pictures -->{lang:"member","frm_pictures"}<!-- ELSE -->{lang:"member","frm_albums"}<!-- ENDIF --></span></a>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<div class="single-post-content" style="border-bottom:none;">
                            
 
<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_member_pictures_view">
		<div class="typepage">

			<!-- IF album_display -->

				<div class="dataitem single galleryitem">
					<div class="arrows" style="margin-bottom:15px;">
						<div style="float: left">
							<a href="{virtual_path}{pictures_page_link}"><!-- {lang:"member","back_to_album"} -->&laquo; View all pictures</a>
						</div>
						<div style="float: right">
							<!-- IF !settings.enable_old_style_pictures -->
								{picture_order_id} / {album_total_pictures}
							<!-- ENDIF -->
							<a href="{virtual_path}{previous_picture_link}">&laquo; {lang:"member","previous_page"}</a>&nbsp;
							<a href="{virtual_path}{next_picture_link}">{lang:"member","next_page"} &raquo;</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- IF picture_adult AND session.showadult == "0" AND agree_adult_picture == "0" AND session.can_view_adult_images -->
						<div class="form">
							<form name="adultpicture" method="post" action="{virtual_path}{picture_link}">
								<div class="fieldset">
									<dl class="fieldset">
										<dt>{lang:"member","adult_notice"}</dt>
										<dt><label><input class="checkbox" name="adult_remember" type="checkbox" value="1">&nbsp;{lang:"member","adult_remember_yes"}</label></dt>
										<dd class="submit">
											<input class="submit" name="adult_on" value="{lang:"member","adult_warning_yes"}" type="submit" />
											<input class="submit" name="adult_off" value="{lang:"member","adult_warning_no"}" onclick="javascript:history.go(-1)" type="button" />
										</dd>
									</dl>
								</div>
							</form>
						</div>
					<!-- ELSEIF picture_display -->
						<div class="image" style="text-align:center;">
							<a href="{virtual_path}{picture_link}"><img src="{top.virtual_pic_path}{member_media_path}{picture_filename}" alt="" border="0" style="padding: 4px; border-radius:3px;" /><br /></a>
						</div>
						<div class="entry" style="margin-top:10px; text-align:center;">
							{picture_description}
						</div>
                        <hr />
						<div class="itemfooter">
							<div class="itemfooter">
								<!-- IF settings.enable_picture_rating AND session.can_rate_pictures AND picture_rated -->
<style type="text/css">
div.ratingbox div.selection a.over {
    cursor: default;
    background: url('{virtual_tpl_path}{session.template}/media/rate.png') no-repeat -12px center;
}
div.ratingbox div.selection a {
    width: 12px;
    height: 16px;
    float: left;
    display: block;
    cursor: default;
    background: url('{virtual_tpl_path}{session.template}/media/rate.png') no-repeat 0px center;
    text-decoration: none;
}
</style>
                                    <div style="float:left; display:none;">
										{ratings:type="picture",member_id=top.member_id,item_id=picture_id,score=picture_score,votes=picture_votes}
									</div>
								<!-- ENDIF -->
								<div style="float:left;">
										{lang:"member","views"}: {picture_total_views}
								</div>
								<!-- IF settings.enable_reports AND settings.enable_picture_reports AND session.can_submit_reports -->
									<div class="report" style="float:right;">
										{reports:type="picture",member_id=top.member_id,item_id=picture_id}
									</div>
								<!-- ENDIF -->
							</div>
							<div class="clearfix"></div>
						</div>
					<!-- ENDIF -->
				</div>

				<!-- IF picture_display AND settings.enable_picture_comments AND picture_allow_comments AND session.can_view_all_pictures_comments -->

					<div class="comments page_member_pictures_comments">

						<div class="subtitle">
							<h2>{lang:"member","comments_list"}</h2>
							<div class="progress" id="get_comments_progress" style="display:none;"></div>
						</div>
						<div id="comments_page">
                        <style type="text/css">
						.entry {
							width:500px !important;
							overflow:inherit;
							word-wrap: break-word;
						}
						</style>
							{comments:type="picture",member_id=member_id,content_id=picture_id}
						</div>

						<div class="commentsform page_member_pictures_comments_submit">
							<div class="dataitem single">
								<div class="form">
									<form name="edit" method="post" action="">
										<div class="fieldset">
											<dl class="fieldset">
												<dt><label for="field_comment_body">{lang:"member","add_comment"}</label></dt>
												<dd><textarea class="textarea textarea_full" id="field_comment_body" cols="40" rows="5" name="body">{comment_body}</textarea></dd>
												<!-- IF settings.pictures_comments_captcha -->
    												<dt><label for="field_captcha">{lang:"member","verify_number"}</label></dt>
    												<dd>
														<input type="text" id="field_captcha" class="text captcha" name="captcha" maxlength="5" />
														<img src="{virtual_path}includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
													</dd>
												<!-- ENDIF -->
    											<dd class="submit"><input class="submit" type="submit" name="submit" value="{lang:"member","submit"}" /></dd>
											</dl>
										</div>
										<input type="hidden" name="iscomment" value="1" />
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>

				<!-- ENDIF -->

			<!-- ELSE -->
				<div class="dataitem single galleryitem">
					<div class="form">
						<form name="privatealbum" method="post" action="">
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_album_password">{lang:"member","private_album_warning"}</label></dt>
									<dd><input class="text" id="field_album_password" name="album_password" value="" type="text" /></dd>
									<dd class="submit">
										<input class="submit" name="private_on" value="{lang:"member","private_warning_yes"}" type="submit" />&nbsp;
										<input class="submit" name="private_off" value="{lang:"member","private_warning_no"}" onclick="javascript:history.go(-1)" type="button" />
									</dd>
								</dl>
							</div>
						</form>
					</div>
				</div>
			<!-- ENDIF -->

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