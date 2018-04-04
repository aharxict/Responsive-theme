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
								<div style="float:left;"><h2>{lang:"privacy","app_privacy"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_privacy" class="btn active"><i class="glyphicon glyphicon-cog"></i> {lang:"privacy","app_privacy"}</a>
                           
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


<!-- IF hide_content != "1" -->

	<div class="outter page_account_privacy">

		<form name="edit" method="post" action="">
			<div class="typepage">
				<div class="dataitem single">
					<div class="form">
						<div class="fieldset">
							<dl class="fieldset">
								<!-- BEGIN settings -->
									<!-- IF setting_label != "access_guestbook_moderate" -->
										<dt><label for="field_{setting_label}">{setting_name}</label></dt>
									<!-- ENDIF -->
									<!-- IF setting_label == "access_profile" -->
										<dd><select class="select form-control" name="{setting_label}" id="field_{setting_label}">{dropdownlist:top.accesstypeprofile,setting_value}</select></dd>
									<!-- ELSEIF setting_label == "access_guestbook_moderate" -->
										<dt>
											<label for="field_{setting_label}">
												<input type="checkbox" class="checkbox form-control" name="{setting_label}" value="1" id="field_{setting_label}" <!-- IF setting_value -->checked="checked"<!-- ENDIF --> />
												{setting_name}
											</label>
										</dt>
									<!-- ELSE -->
										<dd><select class="select form-control" name="{setting_label}" id="field_{setting_label}">{dropdownlist:top.accesstypebox,setting_value}</select></dd>
									<!-- ENDIF -->
								<!-- END settings -->
    							<dd class="submit"><input class="submit btn" type="submit" name="submit" value="{lang:"privacy","submit"}" /></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<input type="hidden" name="issettings" value="1" />
		</form>

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