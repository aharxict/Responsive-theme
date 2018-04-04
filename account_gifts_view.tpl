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
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" /></a>
							<!-- ELSE -->
                            <a href="{top.virtual_path}{session.username}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /></a>
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
								<div style="float:left;"><h2>{lang:"gifts","app_gifts"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/inbox/","index.php?m=account_gifts&p=inbox"}" class="btn <!-- IF gifts_folder == "1" -->active<!-- ENDIF -->"><i class="glyphicon glyphicon-gift"></i> {lang:"gifts","opt_inbox"} ({session.totaligifts})</a>
                           
                           <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/sent/","index.php?m=account_gifts&p=sent"}" class="btn <!-- IF gifts_folder == "2" -->active<!-- ENDIF -->"><i class="glyphicon glyphicon-gift"></i> {lang:"gifts","opt_sent"} ({session.totalsgifts})</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->
        
<!-- IF hide_content != "1" -->

	<div class="outter page_account_gifts_view">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td>
							<div class="image">
								<!-- IF gifts_folder == "1" -->
									<!-- IF gift_privacy == "2" -->
										<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/gifts/inbox/","index.php?m=account_gifts&p=inbox"}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /><br/></a>
									<!-- ELSE -->
										<!-- INCLUDE member_sections_picture.tpl -->
									<!-- ENDIF -->
								<!-- ELSE -->
									<!-- INCLUDE member_sections_picture.tpl -->
								<!-- ENDIF -->
							</div>
						</td>
		                <td class="data">
							<div class="itemheader">
								<h2 class="inner"><a href="{top.virtual_path}{gift_link}">{gift_name}</a></h2>
								<ul class="itemheader">
									<li>
										<!-- IF gift_folder == "1" -->{lang:"gifts","from"}<!-- ELSE -->{lang:"gifts","to"}<!-- ENDIF -->:
										<!-- IF top.gifts_folder == "1" -->
											<!-- IF gift_privacy == "2" -->
												{lang:"gifts","anonymous"}
											<!-- ELSE -->
												<a href="{virtual_path}{member_profile_link}">{member_username}</a>
											<!-- ENDIF -->
										<!-- ELSE -->
											<a href="{virtual_path}{member_profile_link}">{member_username}</a>
										<!-- ENDIF -->
									</li>
									<li>{lang:"gifts","date"} {gift_date}</li>
								</ul>
								<div class="clear"></div>
							</div>
							<div class="entry">
								<img src="{top.virtual_pic_path}{gift_filename}" alt="{gift_name}" />
								<form name="gifts" method="post" action="{virtual_path}{gift_delete_link}">
								<input type="hidden" name="gift_id[{gift_id}]" value="1" id="gift_id_{gift_id}" />
								</form>
							</div>
							<!-- IF gift_message -->
								<div class="entry">
									{gift_message}
								</div>
							<!-- ENDIF -->
							<div class="itemfooter">
								<ul class="itemfooter">
									<li><a href="#" onclick="confirmForm('{lang:"gifts","delete_one?"}', 'gifts')">{lang:"gifts","delete_button"}</a></li>
								</ul>
								<div class="clear"></div>
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