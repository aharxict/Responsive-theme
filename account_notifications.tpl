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
								<div style="float:left;"><h2>{lang:"notifications","app_notifications"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_settings" class="btn"><i class="glyphicon glyphicon-cog"></i> {lang:"core","usermenu_settings"}</a>
                           
                           <a href="{virtual_path}index.php?m=account_notifications" class="btn active"><i class="glyphicon glyphicon-plus-sign"></i> {lang:"core","usermenu_notifications"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
	<div class="content-box">
<h3>Wählen Sie, wenn Sie eine Nachricht an Ihre E-Mail-Adresse erhalten möchten.</h3>
	<div class="outter page_account_notifications">

		<form name="edit" method="post" action="">
			<div class="typepage">
				<div class="dataitem single">
					<div class="form">
						<div class="fieldset">
							<dl class="fieldset">
								<!-- BEGIN settings -->
									<dt>
									<label class="checkbox" for="field_{setting_label}" style="margin-bottom: 15px;">
									<input style="float:left;" type="checkbox" class="checkbox" name="{setting_label}" value="1" id="field_{setting_label}" <!-- IF setting_value -->checked="checked"<!-- ENDIF --> />
										<div class="checkbox__text"><div style="float:left; padding-left:10px; padding-top:3px;">{setting_name}</div></div>
										</label>
									</dt>
								<!-- END settings -->
    							<dd class="submit btn-box" style="margin-top:10px;"><input class="submit btn" type="submit" name="submit" value="{lang:"notifications","submit"}" /></dd>
							</dl>
						</div>
						<input type="hidden" name="issettings" value="1" />
					</div>
				</div>
			</div>
			<div class="clear"></div>
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