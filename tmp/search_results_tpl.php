<?php global $PREFS, $TEMPLATE, $SESSION;

/*
=====================================================
This file has been automatically generated. Do not
modify unless you know what you are doing.
=====================================================
vldPersonals - by VLD Interactive Inc.
----------------------------------------------------
http://www.vldpersonals.com/
http://www.vldinteractive.com/
-----------------------------------------------------
Copyright (c) 2005-2017 VLD Interactive Inc.
=====================================================
THIS IS COPYRIGHTED SOFTWARE
PLEASE READ THE LICENSE AGREEMENT
http://www.vldpersonals.com/agreement/
=====================================================
*/

include_once SYS_PATH . "includes/ext/ext.members.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
 ?><?php $_temp_inc = $TEMPLATE->output('header.tpl',0); include($_temp_inc); ?>

<div class="section section-header">
<div class="container">
<div class="row">

<?php if ( $this->objval($_obj,'loggedin') ) { ?>
<?php $_temp_inc = $TEMPLATE->output('user-menu.tpl',0); include($_temp_inc); ?>
<?php } ?>

<div class="section" style="padding-top:10px;">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post Excerpt -->
					<div class="col-sm-4 col-leftside">
<!-- SEARCH FORM -->
<div style="margin-top:-10px;">
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
</div>

<!-- DISPLAY MY RECENT VISITORS -->
<?php $id = $_SESSION['member_id']; if ($id == $_SESSION['member_id']): ?>
<div class="hide-mobile">
<?php echo vldext_members(array('limit'=>12,'orderby'=>"visitdate",'cache_time'=>0,'visitors_id'=>$SESSION->conf['member_id'],'template'=>"ext.profile_visitors.tpl")); ?>
</div>
<?php endif; ?>
<!-- /DISPLAY MY RECENT VISITORS -->


					
                    
                    </div>
					<!-- End Blog Post Excerpt -->

<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="padding:15px 5px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-left:11px; margin-right:11px; padding-bottom:3px;">
								<div style="float:left;"><h2><?php echo vldext_lang("search","app_results"); ?></h2></div>
                                
                                <div class="floatmobile" style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","search/","index.php?m=search"); ?>" class="btn"><i class="glyphicon glyphicon-search"></i> SEARCH</a>
								<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","search/advanced/","index.php?m=search&p=advanced"); ?>" class="btn"><i class="glyphicon glyphicon-search"></i> ADVANCED</a>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
                            
                            <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>
							
							<div class="single-post-content" style="border-bottom:none;">
<!-- RESULT -->
<?php if ( $this->objval($_obj,'displaytype')  == "1") { ?>
					<?php if (!empty($_obj['search_profiles'])){ if (!is_array($_obj['search_profiles'])) $_obj['search_profiles']=array(array('search_profiles'=>$_obj['search_profiles'])); $_tmp_arr_keys=array_keys($_obj['search_profiles']); if ($_tmp_arr_keys[0]!='0') $_obj['search_profiles']=array(0=>$_obj['search_profiles']); $_stack[$_stack_cnt++]=$_obj; $_cnt['search_profiles']=count($_obj['search_profiles']); foreach ($_obj['search_profiles'] as $rowcnt=>$search_profiles) { $search_profiles['rowcnt']=$rowcnt; $search_profiles['rowpos']=$rowcnt+1; $search_profiles['rownum']=$rowcnt%2+1; $search_profiles['rowtotal']=$_cnt['search_profiles']; $search_profiles['rowfirst']=$rowcnt==0?1:0; $search_profiles['rowlast']=($rowcnt+1)==$_cnt['search_profiles']?1:0; $_obj=&$search_profiles; ?>
<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
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
					<?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<?php } else { ?>
						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<?php } ?>
                </div>
                </div>
<!-- /DISPLAY MEMBER -->

</div>
					<?php } $_obj=$_stack[--$_stack_cnt];} ?>
			<?php } else { ?>

<?php if (!empty($_obj['search_profiles'])){ if (!is_array($_obj['search_profiles'])) $_obj['search_profiles']=array(array('search_profiles'=>$_obj['search_profiles'])); $_tmp_arr_keys=array_keys($_obj['search_profiles']); if ($_tmp_arr_keys[0]!='0') $_obj['search_profiles']=array(0=>$_obj['search_profiles']); $_stack[$_stack_cnt++]=$_obj; $_cnt['search_profiles']=count($_obj['search_profiles']); foreach ($_obj['search_profiles'] as $rowcnt=>$search_profiles) { $search_profiles['rowcnt']=$rowcnt; $search_profiles['rowpos']=$rowcnt+1; $search_profiles['rownum']=$rowcnt%2+1; $search_profiles['rowtotal']=$_cnt['search_profiles']; $search_profiles['rowfirst']=$rowcnt==0?1:0; $search_profiles['rowlast']=($rowcnt+1)==$_cnt['search_profiles']?1:0; $_obj=&$search_profiles; ?>
<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
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
					<?php if ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['member_picture']) ? $_obj['member_picture'] : "&#123;member_picture&#125;"; ?>" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<?php } else { ?>
						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" style="height:150px;width:150px;" /><br/></a>
					<?php } ?>
				<div style="text-align:center;">
                	<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>" style="line-height:28px;"><?php echo vldext_trim($_obj['member_username'],12); ?></a>
                </div>
                
                <div style="padding-top: 5px; border-top: 1px solid #ddd; width:100%;">
                <div style="width:50%; float:left; text-align:center;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?>account/messages/compose/<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>"><span class="glyphicon glyphicon-envelope"></span></a></div>
                <div style="width:50%; float:left; text-align:center; border-left: 1px solid #eee;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?>account/favorites/add/<?php echo isset($_obj['member_id']) ? $_obj['member_id'] : "&#123;member_id&#125;"; ?>"><span class="glyphicon glyphicon-heart"></span></a></div>
                <div class="clearfix"></div>
                </div>
                
                </div>
                </div>
<!-- /DISPLAY MEMBER -->

</div>
<?php } $_obj=$_stack[--$_stack_cnt];} ?>

			<?php } ?>
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
<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
<div class="footer_wrap">
	<div class="page_numbers">
		<p style="background:#fff;"><?php echo vldext_lang("search","page_numbers"); ?>: </p>
        <?php echo isset($_obj['page_links']) ? $_obj['page_links'] : "&#123;page_links&#125;"; ?>
		<div class="clear"></div>
	</div>
</div>
<div class="clearfix"></div>
<?php } ?>

<!-- RESULT ENDS -->
							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>
<!-- CLOSING DIVS BEFOR FOOTER INCLUDE -->

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>
