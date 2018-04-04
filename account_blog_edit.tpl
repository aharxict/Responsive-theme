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
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture}" alt="" border="0" /></a>
							<!-- ENDIF -->
							
						</div>
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><!-- IF entry_id -->{lang:"blog","app_editentry"}<!-- ELSE -->{lang:"blog","app_addentry"}<!-- ENDIF --></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
	                            <!-- IF entry_id -->
                                <a href="{virtual_path}{entry_edit_link}" class="btn active"><i class="glyphicon glyphicon-edit"></i> {lang:"blog","opt_edit_entry"}</a>
                                <a href="{virtual_path}{entry_comments_link}" class="btn"><i class="glyphicon glyphicon-comment"></i> {lang:"blog","opt_view_comments"}</a>
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blog/add/","index.php?m=account_blog&p=add"}" class="btn"><i class="glyphicon glyphicon-book"></i> {lang:"blog","opt_add_entry"}</a>
                                <!-- ELSE -->
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blog/","index.php?m=account_blog"}" class="btn"><i class="glyphicon glyphicon-book"></i> {lang:"blog","opt_view_entries"}</a>
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/blog/add/","index.php?m=account_blog&p=add"}" class="btn active"><i class="glyphicon glyphicon-book"></i> {lang:"blog","opt_add_entry"}</a>
                                <!-- ENDIF -->
                                
                                </div>
                                <div class="clearfix"></div>
                           </div>
<!-- INCLUDE message.tpl -->


<!-- IF hide_content != "1" -->

	<div class="outter page_account_blogs_edit" style="margin-top:15px;">

		<div class="typepage">
			<div class="dataitem single">
							<div class="image image-preview">
								<!-- IF entry_picture != "" -->
									<a class="picture_zoom" href="{top.virtual_pic_path}{session.media_path}{entry_picture}" id="entry_{entry_id}" target="_blank"><img src="{virtual_pic_path}{session.media_path}{entry_preview_picture}" alt="{lang:"blog","view"}" border="0" /><br /></a>
									<div id="entry_{entry_id}_zoom" style="display:none"><img src="{top.virtual_pic_path}{session.media_path}{entry_picture}" alt="" border="0" /><br/></div>
								<!-- ELSE -->
									<a href="#"><img src="{virtual_tpl_path}{session.template}/media/content_picture_none.gif" alt="" border="0" /><br /></a>
								<!-- ENDIF -->
							</div>
				<table class="plain">
					<tr>
		                <td class="data">
							<div class="form">
								<form name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_title">{lang:"blog","title"}</label></dt>
											<dd><input type="text" id="field_title" class="text text_small form-control" name="title" value="{entry_title}" maxlength="255" /></dd>
											<dt>
												<label for="field_body">{lang:"blog","body"}<!-- IF settings.blog_chars_counter --> <span style="font-weight:normal">({character_count})</span><!-- ENDIF --></label>
											</dt>
											<dd>
												<textarea id="field_body" class="textarea textarea_small form-control" cols="40" rows="5" name="body" <!-- IF settings.blog_chars_counter -->onkeyup="strcounter('field_body','field_body_count',this.value,{settings.blog_max_length})" onkeydown="strcounter('field_body','field_body_count',this.value,{settings.blog_max_length})" onchange="strcounter('field_body','field_body_count',this.value,{settings.blog_max_length})"<!-- ENDIF -->>{entry_body}</textarea>
											</dd>
											<dt><label for="field_picture">{lang:"blog","picture"}</label></dt>
											<dd><input id="field_picture" type="file" name="picture" value="" class="form-control file-input-control" /></dd>
											<dd class="submit"><input style="margin-top:10px;" class="submit btn" type="submit" name="submit" value="{lang:"blog","submit"}" /></dd>
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