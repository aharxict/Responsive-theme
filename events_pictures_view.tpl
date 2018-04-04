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
								<div style="float:left;"><h2>{lang:"events","app_pictures"}</h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <!-- INCLUDE message.tpl -->   
        

<div class="outter page_member_pictures">

	<div class="typemedia">

<!-- IF hide_content != "1" -->

	<div class="outter page_member_pictures_view">

		<div class="typepage">
			<div class="dataitem single galleryitem">
				<div class="arrows">
					<div style="float: left">
						<a href="{virtual_path}{pictures_page_link}">{lang:"events","back_to_pictures"}</a>
					</div>
					<div style="float: right">
						<a href="{virtual_path}{previous_picture_link}">&laquo; {lang:"events","previous_page"}</a>&nbsp;
						<a href="{virtual_path}{next_picture_link}">{lang:"events","next_page"} &raquo;</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="image">
					<a href="{virtual_path}{picture_link}"><img src="{top.virtual_pic_path}{member_media_path}{picture_filename}" alt="" border="0" /><br /></a>
				</div>
				<div class="entry">
					{picture_description}
				</div>
			</div>
		</div>
		<div class="clear"></div>

	</div>

<!-- ENDIF -->


	</div>
	<div class="clear"></div>

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