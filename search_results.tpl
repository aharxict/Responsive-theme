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
<!-- SEARCH FORM -->
<div style="margin-top:-10px;">
<!-- INCLUDE ext.search.tpl -->
</div>

<!-- DISPLAY MY RECENT VISITORS -->
<?php $id = $_SESSION['member_id']; if ($id == $_SESSION['member_id']): ?>
<div class="hide-mobile">
{members:limit=12,orderby="visitdate",cache_time=0,visitors_id=session.member_id,template="ext.profile_visitors.tpl"}
</div>
<?php endif; ?>
<!-- /DISPLAY MY RECENT VISITORS -->


					
                    
                    </div>
					<!-- End Blog Post Excerpt -->

<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="padding:15px 5px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-left:11px; margin-right:11px; padding-bottom:3px;">
								<div style="float:left;"><h2>{lang:"search","app_results"}</h2></div>
                                
                                <div class="floatmobile" style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","search/","index.php?m=search"}" class="btn"><i class="glyphicon glyphicon-search"></i> SEARCH</a>
								<a href="{virtual_path}{ifelse:settings.fancy_urls,"1","search/advanced/","index.php?m=search&p=advanced"}" class="btn"><i class="glyphicon glyphicon-search"></i> ADVANCED</a>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
                            
                            <!-- INCLUDE message.tpl -->
							
							<div class="single-post-content" style="border-bottom:none;">
<!-- RESULT -->
<!-- IF displaytype == "1" -->
					<!-- BEGIN search_profiles -->
<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
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
.overlay{
    position: absolute;
    width: 125px;
    overflow-y: hidden;
    transition-property: all;
    transition-duration: .5s;
    transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    height: 125px;
    background-color: rgba(0,0,0,0.0)
    border: 1px solid white;
    bottom: 0;
    left: 0;
    /*opacity: 0;*/
	padding:5px;
	padding-top:25px;
	color: rgba(255,255,255,0.0);
	text-align:center;
} .overlay:hover{
    color: rgba(255,255,255,1.0);
	cursor:pointer;
    /*opacity: 0.7;*/
	background-color: rgba(0,0,0,0.8);
    z-index: 1;
	border-radius:3px;
}
.imghover{
position: relative;
}
</style>

<!-- DISPLAY MEMBER -->
                <div class="col-sm-3 col-xs-6" style="float:left;">
                <div class="image" style="float:left; margin-bottom:7px; padding: 4px; border: 1px solid #ddd;">
					<!-- IF member_picture AND member_picture_active -->
						<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<!-- ELSE -->
						<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<!-- ENDIF -->
                </div>
                </div>
<!-- /DISPLAY MEMBER -->

</div>
					<!-- END search_profiles -->
			<!-- ELSE -->

<!-- BEGIN search_profiles -->
<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
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
.overlay{
    position: absolute;
    width: 125px;
    overflow-y: hidden;
    transition-property: all;
    transition-duration: .5s;
    transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
    height: 125px;
    background-color: rgba(0,0,0,0.0)
    border: 1px solid white;
    bottom: 0;
    left: 0;
    /*opacity: 0;*/
	padding:5px;
	padding-top:25px;
	color: rgba(255,255,255,0.0);
	text-align:center;
} .overlay:hover{
    color: rgba(255,255,255,1.0);
	cursor:pointer;
    /*opacity: 0.7;*/
	background-color: rgba(0,0,0,0.8);
    z-index: 1;
	border-radius:3px;
}
.imghover{
position: relative;
}
</style>

<!-- DISPLAY MEMBER -->
                <div class="col-sm-3 col-xs-6" style="float:left;">
                <div class="image" style="float:left; margin-bottom:7px; padding: 4px; border: 1px solid #ddd;">
					<!-- IF member_picture AND member_picture_active -->
						<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_pic_path}{member_media_path}{member_picture}" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<!-- ELSE -->
						<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<!-- ENDIF -->
				<div style="text-align:center;">
                	<a href="{top.virtual_path}{member_profile_link}" style="line-height:28px;">{trim:member_username,12}</a>
                </div>
                
                <div style="padding-top: 5px; border-top: 1px solid #ddd; width:100%;">
                <div style="width:50%; float:left; text-align:center;"><a href="{top.virtual_path}account/messages/compose/{member_id}"><span class="glyphicon glyphicon-envelope"></span></a></div>
                <div style="width:50%; float:left; text-align:center; border-left: 1px solid #eee;"><a href="{top.virtual_path}account/favorites/add/{member_id}"><span class="glyphicon glyphicon-heart"></span></a></div>
                <div class="clearfix"></div>
                </div>
                
                </div>
                </div>
<!-- /DISPLAY MEMBER -->

</div>
<!-- END search_profiles -->

			<!-- ENDIF -->
		</div>
		<div class="clearfix"></div>

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
<!-- IF total_pages > "1" -->
<div class="footer_wrap">
	<div class="page_numbers">
		<p style="background:#fff;">{lang:"search","page_numbers"}: </p>
        {page_links}
		<div class="clear"></div>
	</div>
</div>
<div class="clearfix"></div>
<!-- ENDIF -->

<!-- RESULT ENDS -->
							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>
<!-- CLOSING DIVS BEFOR FOOTER INCLUDE -->

<!-- INCLUDE footer.tpl -->
