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
								<div style="float:left;"><h2>{lang:"pictures","app_thumbnail"}</h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="{virtual_path}{pictures_view_link}" class="btn"><i class="glyphicon glyphicon-picture"></i> {lang:"pictures","opt_viewpictures"}</a>
                           
                           <a href="{virtual_path}{pictures_add_link}" class="btn"><i class="glyphicon glyphicon-plus-sign"></i> {lang:"pictures","opt_addpicture"}</a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        


<!-- IF hide_content != "1" -->

	<div class="outter page_account_pictures_thumbnail">

		<div class="typepage">
			<div class="dataitem single">
				<table class="plain">
					<tr>
						<td>
							<div class="image">
								<div style="width: {settings.thumbnail_width}px; height: {settings.thumbnail_height}px; overflow:hidden; border: 1px solid #000;">
									<img src="{virtual_pic_path}{session.media_path}{picture_filename}" border="0" id="thumb_preview" /><br />
								</div>
							</div>
						</td>
		                <td class="data">
							<div class="data">
								<img src="{virtual_pic_path}{session.media_path}{picture_filename}" border="0" id="thumb_cropbox" />
							</div>
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dd class="submit"><input class="submit" type="submit" name="submit_regular" value="{lang:"pictures","submit"}" /></dd>
										</dl>
									</div>
									<input type="hidden" name="issubmit" value="1" />
									<input type="hidden" size="4" id="thumb_x" name="thumb_x" />
									<input type="hidden" size="4" id="thumb_y" name="thumb_y" />
									<input type="hidden" size="4" id="thumb_w" name="thumb_w" />
									<input type="hidden" size="4" id="thumb_h" name="thumb_h" />
								</form>
							</div>
						</td>
		            </tr>
		        </table>
			</div>
		</div>
		<div class="clear"></div>

	</div>

	<script type="text/javascript" language="javascript">
		$(document).ready(function(){
			jQuery('#thumb_cropbox').Jcrop({
				onChange: showPreview,
				onSelect: showPreview,
				bgOpacity: .8,
				minSize: [ {settings.thumbnail_width}, {settings.thumbnail_height} ],
	            setSelect: [ 10, 10, {settings.thumbnail_width}, {settings.thumbnail_height} ],
				aspectRatio: {picture_ratio}
			});
		});
		function showPreview(coords)
		{
			if (parseInt(coords.w) > 0)
			{
				var rx = {settings.thumbnail_width} / coords.w;
				var ry = {settings.thumbnail_height} / coords.h;

				jQuery('#thumb_preview').css({
					width: Math.round(rx * {picture_width}) + 'px',
					height: Math.round(ry * {picture_height}) + 'px',
					marginLeft: '-' + Math.round(rx * coords.x) + 'px',
					marginTop: '-' + Math.round(ry * coords.y) + 'px'
				});
			}
				$('#thumb_x').val(coords.x);
				$('#thumb_y').val(coords.y);
				$('#thumb_w').val(coords.w);
				$('#thumb_h').val(coords.h);
		}
	</script>

<!-- ENDIF -->
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->