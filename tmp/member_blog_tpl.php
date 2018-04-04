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

<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("member","app_blog"); ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_blogs">

		<div class="typecontent">
			<?php if (!empty($_obj['blog_entries'])){ if (!is_array($_obj['blog_entries'])) $_obj['blog_entries']=array(array('blog_entries'=>$_obj['blog_entries'])); $_tmp_arr_keys=array_keys($_obj['blog_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['blog_entries']=array(0=>$_obj['blog_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['blog_entries']=count($_obj['blog_entries']); foreach ($_obj['blog_entries'] as $rowcnt=>$blog_entries) { $blog_entries['rowcnt']=$rowcnt; $blog_entries['rowpos']=$rowcnt+1; $blog_entries['rownum']=$rowcnt%2+1; $blog_entries['rowtotal']=$_cnt['blog_entries']; $blog_entries['rowfirst']=$rowcnt==0?1:0; $blog_entries['rowlast']=($rowcnt+1)==$_cnt['blog_entries']?1:0; $_obj=&$blog_entries; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td>
                                <div class="image" style="height:100px; width:145px;">
									<?php if ( $this->objval($_obj,'entry_picture') ) { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_stack[0]['member_media_path']) ? $_stack[0]['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['entry_picture']) ? $_obj['entry_picture'] : "&#123;entry_picture&#125;"; ?>" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br /></a>
								<?php } else { ?>
									<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px; width:145px; height:100px;" /><br/></a>
								<?php } ?>
								</div>
							</td>
                            <td class="data" valign="top">
								<div class="itemheader">
									<h2 class="inner" style="font-size:16px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>"><?php echo vldext_trim($_obj['entry_title'],80); ?></a></h2>
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><?php echo vldext_lang("member","post_date"); ?> <?php echo isset($_obj['entry_post_date']) ? $_obj['entry_post_date'] : "&#123;entry_post_date&#125;"; ?></div>

										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>"><?php echo isset($_obj['entry_total_comments']) ? $_obj['entry_total_comments'] : "&#123;entry_total_comments&#125;"; ?> <?php echo vldext_lang("member","comments"); ?></a></div>
									<div class="clearfix"></div>
								</div>
								<div class="entry" style="padding-top:7px;">
									<?php echo vldext_trim($_obj['entry_body'],120,"more",1); ?>
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
		</div>
		<div class="clear"></div>

	</div>

	<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
		<div class="footer_wrap">
			<div class="footer">
				<p><?php echo isset($_obj['pages_info']) ? $_obj['pages_info'] : "&#123;pages_info&#125;"; ?></p>
				<?php if ( $this->objval($_obj,'previous_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("member","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("member","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>