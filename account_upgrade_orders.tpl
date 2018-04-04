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
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" /></a>
							<!-- ELSE -->
                            <a href="{top.virtual_path}{session.username}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /></a>
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
								<div style="float:left;"><h2>{lang:"upgrade","app_upgrade"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}index.php?m=account_upgrade" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i> {lang:"core","usermenu_upgrade"}</a>
                                <a href="{virtual_path}index.php?m=account_upgrade&p=orders" class="btn active"><i class="glyphicon glyphicon-info-sign"></i> {lang:"upgrade","opt_orders"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<div class="outter page_account_upgrade_orders">

		<div class="typecontent">
			<!-- BEGIN orders -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<!-- IF order_package -->
						<!-- IF order_credits -->
							<h2 class="inner">{order_package} - ${order_amount}</h2>
							{lang:"upgrade","date"}: {order_date} - {order_credits} {lang:"upgrade","credits"}
						<!-- ELSE -->
							<h2 class="inner">{order_package} - ${order_amount}</h2>
							{lang:"upgrade","date"}: {order_date} - {lang:"upgrade","term"}: {order_term}
						<!-- ENDIF -->
					<!-- ELSE -->
						<!-- IF order_credits -->
							<h2 class="inner">{order_credits} {lang:"upgrade","credits"} - ${order_amount}</h2>
						<!-- ELSE -->
							<h2 class="inner">{order_term} - ${order_amount}</h2>
						<!-- ENDIF -->
						{lang:"upgrade","date"}: {order_date}
					<!-- ENDIF -->
				</div>
			<!-- END orders -->
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