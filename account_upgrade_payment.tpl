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
							<!-- ELSE -->
							<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />

								<!-- ENDIF -->
							
						</div>
                        </div>
                        
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"upgrade","app_upgrade"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_upgrade" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i> {lang:"core","usermenu_upgrade"}</a>
                                <a href="{virtual_path}index.php?m=account_upgrade&p=orders" class="btn"><i class="glyphicon glyphicon-info-sign"></i> {lang:"upgrade","opt_orders"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
<div class="content-box">
<div class="outter page_account_upgrade_payment">

		<div class="typepage">
			<div class="dataitem">
				<div class="data">
					<h2 class="inner" style="font-size:18px;"><a href="{package_upgrade_link}">{package_name}</a></h2>
					{package_description}
				</div>
			</div>
			<div class="dataitem">
				<div class="data">
					<!-- BEGIN payment_gateways -->
						<div class="form" style="padding-top: 15px">
							{gateway_payment_form}
						</div>
					<!-- END payment_gateways -->
				</div>
			</div>
			<!-- IF !get.sid OR !member_id -->
				<div class="dataitem">
					<div class="data"><br/>
						<img src="{virtual_tpl_path}{session.template}/media/upgrade_gift.png" align="absmiddle" />
						{lang:"upgrade","upgrade_gift"} <a href="#" onclick="$('#gift_form').toggle();return false;">{lang:"upgrade","upgrade_gift_link"}</a>
					</div>
				</div>
			<!-- ENDIF -->
		</div>
		<!-- IF !get.sid OR !member_id -->
			<!-- IF !package_credits AND settings.enable_gift_upgrades OR package_credits AND settings.enable_gift_credits -->
				<div class="typepage" id="gift_form" style="margin-top:5px;<!-- IF !post.username -->display:none<!-- ENDIF -->">
					<div class="dataitem">
						<div class="data">
							<form action="" name="gift" method="post">
								<div class="form">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_username" style="font-weight:normal">{lang:"upgrade","gift_purchase_info"}</label></dt>
											<dd style="float: left;"><input type="text" class="text form-control" id="field_username" name="username" value="{post.username}" maxlength="32" size="32" style="width: 200px" /></dd>
    										<dd class="submit btn-box"><input class="submit btn" type="submit" name="submit" value="{lang:"upgrade","submit"}" /></dd>
										</dl>
									</div>
								</div>
								<input type="hidden" name="isgift" value="1" />
							</form>
						</div>
					</div>
				</div>
			<!-- ENDIF -->
		<!-- ELSEIF member_id -->
			<div class="typemembers" style="margin-top:5px">
				<div class="dataitem dataitemlast">
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
										<li class="remove"><a href="{package_upgrade_link}">{lang:"upgrade","cancel"}</a></li>
									</ul>
									<div class="clear"></div>
								</div>
							</td>
			            </tr>
			        </table>
				</div>
			</div>
		<!-- ENDIF -->

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