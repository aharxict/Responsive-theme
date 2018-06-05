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
								<div style="float:left;"><h2>{lang:"hotornot","app_hotornot"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
<div class="content-box">
<!-- INCLUDE message.tpl -->
	<div class="btn-box text-center" style="margin-bottom: 5px;">
	<a class="btn" href="javascript:void(0)" onclick="showhide_field('field_filters')"><span class="glyphicon glyphicon-search" style="padding-right:4px;"></span> {lang:"hotornot","filters"}</a>
	</div>

	<div class="outter page_hotornot">

		<div class="typemedia">
			<div class="dataitem single" id="field_filters" <!-- IF hide_content != "1" -->style="display: none"<!-- ENDIF -->>
				<div class="form content-box" style="margin-top:7px;">
					<form name="hotornot" action="" method="post">

						<!-- IF total_types > "1" -->
							<div class="fieldset">
								<dl class="fieldset fieldgrid">
    								<dt><label for="field_group_type_label">{lang:"hotornot","members_type"}</label></dt>
									<dd>
										<select class="select" name="group_type_label" id="field_group_type_label" onchange="row_switch('type_'+this.value+'_box')">
											{dropdownlist:typesbox,default_type}
										</select>
									</dd>
								</dl>
								<div class="clear"></div>
							</div>
						<!-- ENDIF -->

						<!-- BEGIN profile_types -->
							<!-- IF profile_fields -->
								<!-- IF type_label == top.default_type -->
									<script type="text/javascript" language="javascript">var active_tab = 'type_{type_label}_box';</script>
								<!-- ENDIF -->
								<div id="type_{type_label}_box"<!-- IF type_label != top.default_type --> style="display:none"<!-- ENDIF -->>

									<div class="fieldset">
										<dl class="fieldset fieldgrid">

											<!-- BEGIN profile_fields -->

												<dt><label for="field_{field_label}">{field_name}</label></dt>
												<dd>
													<!-- IF field_type = "text" -->
														<input type="text" class="text form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}" value="{htmlentities:field_value}" maxlength="{field_maxlength}" />
													<!-- ELSEIF field_type = "textarea" -->
														<textarea class="textarea form-control" id="field_{field_label}" name="{field_label}" style="width: {field_width}; height: {field_height}">{htmlentities:field_value}</textarea>
													<!-- ELSEIF field_type = "checkbox" -->
														<ul class="fielditems">
															<!-- INBEGIN field_items -->
																<li><label>{checkboxes:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
															<!-- END field_items -->
														</ul>
														<div class="clear"></div>
													<!-- ELSEIF field_type = "radio" -->
														<!-- IF field_in_search_multi -->
															<ul class="fielditems">
																<!-- INBEGIN field_items -->
																	<li><label>{checkboxes:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
																<!-- END field_items -->
															</ul>
															<div class="clear"></div>
														<!-- ELSE -->
															<ul class="fielditems">
																<!-- INBEGIN field_items -->
																	<li><label>{radiobuttons:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
																<!-- END field_items -->
															</ul>
															<div class="clear"></div>
														<!-- ENDIF -->
													<!-- ELSEIF field_type = "combo" -->
														<!-- IF field_in_search_multi -->
															<ul class="fielditems">
																<!-- INBEGIN field_items -->
																	<li><label>{checkboxes:parent.field_label,rowcnt,parent.field_value,inner_key}&nbsp;{inner_value}</label></li>
																<!-- END field_items -->
															</ul>
															<div class="clear"></div>
														<!-- ELSE -->
															<select style="width:auto;" class="select form-control" id="field_{field_label}" name="{field_label}">
																<option value="">{lang:"core","user_field_any"}</option>
																{dropdownlist:field_items,field_value}
															</select>
														<!-- ENDIF -->
													<!-- ELSEIF field_type = "birthday" -->
														<div>
                                                        <select style="width:auto; float:left;" class="select form-control" id="field_{field_label}" name="{field_label}_from">{dropdownlist:top.agebox,field_value}</select><div style="float:left; padding-left:7px; padding-right:7px; height:34px;"><div style="padding-top:5px;"> - </div></div>
														<select style="width:auto; float:left;" class="select form-control" id="field_{field_label}_to" name="{field_label}_to">{dropdownlist:top.agebox,field_default}</select>
                                                        <div class="clearfix"></div>
													<!-- ENDIF -->
												</dd>

											<!-- END profile_fields -->

										</dl>
										<div class="clear"></div>
									</div>
								</div>
							<!-- ENDIF -->
						<!-- END profile_types -->

						<div class="fieldset">
							<dl class="fieldset fieldgrid">
								<!-- IF settings.adult_images AND session.can_view_adult_images -->
									<dt><label for="field_adult">{lang:"hotornot","show_adult"}</label></dt>
									<dd><select id="field_adult" class="select form-control" name="adult" style="width:auto;">{dropdownlist:yesnobox,picture_adult}</select></dd>
								<!-- ENDIF -->
    							<dd class="submit btn-box"><input class="submit btn" name="submit" value="{lang:"hotornot","submit"}" type="submit" /></dd>
							</dl>
							<div class="clear"></div>
						</div>
						<input type="hidden" name="ishotornot" value="1" />
					</form>
				</div>
			</div>
</div>
			<!-- IF hide_content != "1" -->

				<div class="dataitem single galleryitem dataitemlast">
					<div class="image" style="text-align:center;">
						<a href="{virtual_path}{member_profile_link}"><img src="{virtual_pic_path}{member_media_path}{picture_filename}" alt="" border="0" /><br /></a>
					</div>
					<div class="entry" style="text-align:center; width:100%; padding-top:4px;">
						{picture_description}
					</div>
                    <hr />
					<div class="itemfooter">
						<div class="itemfooter">
							<div style="float:left;">
								<div class="ratingbox">
									<div class="scores">
										{lang:"core","rating_score"}:
										<span id="rating_picture_score{picture_id}">{picture_score}</span>
										{lang:"core","rating_votes"}:
										<span id="rating_picture_votes{picture_id}">{picture_votes}</span>
									</div>
									<div>
                                    <div class="scores" style="float:left; padding-right:10px;">
										{lang:"hotornot","your_rating"}
									</div>
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
                                    <div class="selection" id="rating_picture_box{picture_id}" onmouseout="ratingstar_reset('picture',{picture_id})" style="float:left; padding-top:2px;">
										<div id="rating_picture_response{picture_id}">
											<a onclick="send_picture_rating({member_id},{picture_id},1);return false;" onmouseover="ratingstar_toggle('picture',{picture_id},1);return false;" href="#" id="ratingstar{picture_id}__1"></a><!--
											--><a onclick="send_picture_rating({member_id},{picture_id},2);return false;" onmouseover="ratingstar_toggle('picture',{picture_id},2);return false;" href="#" id="ratingstar{picture_id}__2"></a><!--
											--><a onclick="send_picture_rating({member_id},{picture_id},3);return false;" onmouseover="ratingstar_toggle('picture',{picture_id},3);return false;" href="#" id="ratingstar{picture_id}__3"></a><!--
											--><a onclick="send_picture_rating({member_id},{picture_id},4);return false;" onmouseover="ratingstar_toggle('picture',{picture_id},4);return false;" href="#" id="ratingstar{picture_id}__4"></a><!--
											--><a onclick="send_picture_rating({member_id},{picture_id},5);return false;" onmouseover="ratingstar_toggle('picture',{picture_id},5);return false;" href="#" id="ratingstar{picture_id}__5"></a>
										</div>
									</div>
                                    </div>
									<div class="progress" id="rating_picture_progress{picture_id}" style="display:none;"></div>
									<script type="text/javascript" language="javascript">//ratingstar_reset('picture', {picture_id});</script>
								</div>
							</div>
							<div style="float:right;" class="report">
								<a href="{virtual_path}{member_profile_link}">{member_username}</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<!-- ENDIF -->

		</div>
		<div class="clear"></div>

	</div>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

	<script type="text/javascript" language="javascript">
	function send_picture_rating(member_id,picture_id,mark) {
		submit_rating('picture',member_id,picture_id,mark,"{picture_next_link}");
	}
	</script>

<!-- INCLUDE footer.tpl -->