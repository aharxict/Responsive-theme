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
								<div style="float:left;"><h2>{lang:"settings","app_settings"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_settings" class="btn active"><i class="glyphicon glyphicon-cog"></i> {lang:"core","usermenu_settings"}</a>
                           
                           <a href="{virtual_path}index.php?m=account_notifications" class="btn"><i class="glyphicon glyphicon-plus-sign"></i>  {lang:"core","usermenu_notifications"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<div class="content-box">
	<div class="outter page_account_settings">

		<form name="edit" method="post" action="">
			<div class="typepage">
				<div class="dataitem single">
					<div class="form">
						<div class="fieldset">
							<dl class="fieldset" style="margin-bottom:4px;">
								<dt><label for="field_username">{lang:"settings","username"}</label></dt>
								<dd style="padding-bottom:10px;"><input type="text" class="text form-control" id="field_username" name="username" value="{username}" maxlength="32" size="32" /></dd>
								<dt><label for="field_password">{lang:"settings","password"}</label></dt>
								<dd style="padding-bottom:10px;"><input type="password" class="text form-control" id="field_password" name="password" value="{password}" size="20" maxlength="32" /></dd>
								<dt><label for="field_password2">{lang:"settings","password2"}</label></dt>
								<dd style="padding-bottom:10px;"><input type="password" class="text form-control" id="field_password2" name="password2" value="{password2}" size="20" maxlength="32" /></dd>
								<dt><label for="field_email">{lang:"settings","email"}</label></dt>
								<dd style="padding-bottom:0;"><input type="text" class="text form-control" id="field_email" name="email" value="{email}" maxlength="64" size="32" /><br /></dd>
								<dt><label for="field_timezone">{lang:"settings","timezone"}</label></dt>
								<dd style="padding-bottom:10px;"><select class="select form-control" name="timezone" id="field_timezone">{dropdownlist:timezones,timezone}</select></dd>
								<dt><label for="field_timeformat">{lang:"settings","timeformat"}</label></dt>
								<dd style="padding-bottom:10px;"><select class="select form-control" name="timeformat" id="field_timeformat">{dropdownlist:timeformats,timeformat}</select></dd>
								<!-- IF session.can_change_language -->
									<dt><label for="field_language">{lang:"settings","language"}</label></dt>
									<dd style="padding-bottom:10px;"><select class="select form-control" name="language" id="field_language">{dropdownlist:languages,language}</select></dd>
								<!-- ENDIF -->
								<!-- IF session.can_change_template -->
									<dt><label for="field_template">{lang:"settings","template"}</label></dt>
									<dd style="padding-bottom:10px;"><select class="select form-control" name="template" id="field_template">{dropdownlist:templates,template}</select></dd>
								<!-- ENDIF -->
								<!-- IF settings.enable_pictures AND settings.adult_images AND session.can_view_adult_images -->
									<dt>
										<label class="checkbox" for="field_showadult">
											<input type="checkbox" class="checkbox" name="showadult" value="1" id="field_showadult" <!-- IF showadult -->checked="checked"<!-- ENDIF --> />
											<div class="checkbox__text">{lang:"settings","showadult"}</div>
										</label>
									</dt>
								<!-- ENDIF -->
								<!-- IF settings.enable_member_rating -->
									<dt>
										<label class="checkbox" for="field_rated">
											<input type="checkbox" class="checkbox" name="rated" value="1" id="field_rated" <!-- IF rated -->checked="checked"<!-- ENDIF --> />
											<div class="checkbox__text">{lang:"settings","allow_rating"}</div>
										</label>
									</dt>
								<!-- ENDIF -->
    							<dd class="submit btn-box" style="margin-top:0;"><input class="submit btn" type="submit" name="submit" value="{lang:"settings","submit"}" /></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<input type="hidden" name="issettings" value="1" />
		</form>

	</div>
</div>
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->