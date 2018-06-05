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

<div class="hide-on-mobile">
<!-- INCLUDE login_form_sidebar.tpl -->
</div>

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2>{lang:"pictures","app_pictures"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        
<div class="content-box">
<div class="outter page_member_pictures">

	<div class="typemedia">

		<!-- IF hide_content != "1" AND global_pictures -->
<style type="text/css">
.tag {
   position: absolute;
   bottom: 5px;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:95.3%;
   text-align:center;
   font-weight: bold;
}
.tagthumb {
   position: absolute;
   bottom: 0;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:100%;
   text-align:center;
   font-weight: bold;
}
.hoverinfo {
   text-align:center;
   font-weight: bold;
   width:100%;
}
</style>
			<div class="dataitem single dataitemlast gallerylist">
<div class="image image-preview-pictures">
<ul class="grid cs-style-3" style="padding:0;">
				<!-- BEGIN global_pictures -->
<div class="image" style="float:left; margin-right:5px; margin-bottom:5px;">
<figure>
						<!-- IF picture_adult -->
							<!-- IF session.showadult AND session.can_view_adult_images -->
<a href="{top.virtual_path}{picture_link}" title="{trim:picture_description,60}"><img src="{top.virtual_pic_path}{member_media_path}{picture_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /></a>
							<!-- ELSE -->
<a href="{top.virtual_path}{picture_link}" title="{trim:picture_description,60}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" /></a>
							<!-- ENDIF -->
						<!-- ELSE -->
<a href="{top.virtual_path}{picture_link}" title="{trim:picture_description,60}"><img src="{top.virtual_pic_path}{member_media_path}{picture_preview}" alt="" border="0" style="border-radius:3px; height:125px; width:125px;" height="125" width="125" /></a>
						<!-- ENDIF -->
</figure>
						
					</div>
					<!-- IF rowcnt > "0" AND rowlast == "0" AND rowcnt mod "6" == "5" --><div class="clear"></div><!-- ENDIF -->
				<!-- END global_pictures -->
                </div>
</ul>
						<div class="clearfix"></div>
				<div class="clearfix"></div>
			</div>

		<!-- ENDIF -->

	</div>
	<div class="clear"></div>

</div>
</div>
<style type="text/css">
div.page_numbers {
	margin-top: 0;
	padding-top: 20px;
}
div.page_numbers p {
    margin: 0px 2px 0px 0px;
    padding: 4px 8px;
    display: block;
    float: left;
    color: #666;
    border: 1px solid #ddd;
}
div.page_numbers a {
    margin-right: 2px;
    padding: 4px 8px;
    display: block;
    float: left;
    color: #666;
    border: 1px solid #ddd;
	background:#fff;
    text-decoration: none;
}
div.page_numbers a.active {
    color: #eee;
    font-weight: bold;
    background: #aec62c;
	border: 1px solid #ddd;
}
</style>
<!-- IF hide_content != "1" -->
<!-- IF total_pages > "1" -->
<div class="footer_wrap">
	<div class="page_numbers">
		<p style="background:#fff;">{lang:"pictures","page_numbers"}: </p>
        {page_links}
		<div class="clear"></div>
	</div>
</div>
<div class="clearfix"></div>
<!-- ENDIF -->
<!-- ENDIF -->

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<!-- INCLUDE footer.tpl -->