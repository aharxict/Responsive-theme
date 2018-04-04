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
								<div style="float:left;"><h2><?php echo vldext_lang("news","app_news"); ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<div class="outter page_news">

		<div class="typecontent">
			<?php if (!empty($_obj['news_entries'])){ if (!is_array($_obj['news_entries'])) $_obj['news_entries']=array(array('news_entries'=>$_obj['news_entries'])); $_tmp_arr_keys=array_keys($_obj['news_entries']); if ($_tmp_arr_keys[0]!='0') $_obj['news_entries']=array(0=>$_obj['news_entries']); $_stack[$_stack_cnt++]=$_obj; $_cnt['news_entries']=count($_obj['news_entries']); foreach ($_obj['news_entries'] as $rowcnt=>$news_entries) { $news_entries['rowcnt']=$rowcnt; $news_entries['rowpos']=$rowcnt+1; $news_entries['rownum']=$rowcnt%2+1; $news_entries['rowtotal']=$_cnt['news_entries']; $news_entries['rowfirst']=$rowcnt==0?1:0; $news_entries['rowlast']=($rowcnt+1)==$_cnt['news_entries']?1:0; $_obj=&$news_entries; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<?php if ( $this->objval($_obj,'news_picture') ) { ?>
								<td>
									<div class="image" style="width:150px; margin-right:10px;">
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['news_link']) ? $_obj['news_link'] : "&#123;news_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['news_picture']) ? $_obj['news_picture'] : "&#123;news_picture&#125;"; ?>" alt="" border="0" style="height:150px; width:150px;" /><br /></a>
									</div>
								</td>
							<?php } ?>
		                    <td class="data" valign="top">
								<div class="itemheader" style="vertical-align:top;">
									<h2 class="inner" style="font-size:16px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['news_link']) ? $_obj['news_link'] : "&#123;news_link&#125;"; ?>"><?php echo isset($_obj['news_title']) ? $_obj['news_title'] : "&#123;news_title&#125;"; ?></a></h2>
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><?php echo vldext_lang("news","postdate"); ?> <?php echo isset($_obj['news_date']) ? $_obj['news_date'] : "&#123;news_date&#125;"; ?></div>
										<div style="float:left; position: relative; font-size:12px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['news_link']) ? $_obj['news_link'] : "&#123;news_link&#125;"; ?>"><?php echo isset($_obj['news_total_comments']) ? $_obj['news_total_comments'] : "&#123;news_total_comments&#125;"; ?> <?php echo vldext_lang("news","total_comments"); ?></a></div>
									<div class="clearfix"></div>
                                    </div>
								</div>
								<div class="entry" style="padding-top:7px;">
									<?php echo vldext_trim($_obj['news_body'],400); ?> <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['news_link']) ? $_obj['news_link'] : "&#123;news_link&#125;"; ?>"><?php echo vldext_lang("news","readmore"); ?></a>
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
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_page_link']) ? $_obj['previous_page_link'] : "&#123;previous_page_link&#125;"; ?>">&laquo; <?php echo vldext_lang("news","previous_page"); ?></a>
				<?php } ?>
				<?php if ( $this->objval($_obj,'next_page')  != "0") { ?>
					<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_page_link']) ? $_obj['next_page_link'] : "&#123;next_page_link&#125;"; ?>"><?php echo vldext_lang("news","next_page"); ?> &raquo;</a>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>