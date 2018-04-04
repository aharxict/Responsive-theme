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
include_once SYS_PATH . "includes/ext/ext.comments.php";
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
        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_news_view">

		<div class="typepage">
			<div class="dataitem single">
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
								<?php echo isset($_obj['news_body']) ? $_obj['news_body'] : "&#123;news_body&#125;"; ?>
							</div>
						</td>
		            </tr>
		        </table>
			</div>
<hr />
			<?php if ( @$PREFS->conf['enable_news_comments']  &&  $this->objval($_obj,'news_allow_comments') ) { ?>

				<div class="comments page_news_comments">

					<div class="subtitle" style="background-color: #ecf0f1;">
						<h2 style="font-size:16px; margin-bottom:15px; padding:5px;"><?php echo vldext_lang("news","comments_list"); ?></h2>
						<div class="progress" id="get_comments_progress" style="display:none;"></div>
					</div>
					<div id="comments_page">
						<?php echo vldext_comments(array('type'=>"news",'member_id'=>0,'content_id'=>$_obj['news_id'])); ?>
					</div>

					<div class="commentsform page_news_comments_submit">
						<div class="dataitem single">
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_comment_body"><?php echo vldext_lang("news","add_comment"); ?></label></dt>
											<dd><textarea class="textarea textarea_full form-control" id="field_comment_body" cols="40" rows="5" name="body"><?php echo isset($_obj['comment_body']) ? $_obj['comment_body'] : "&#123;comment_body&#125;"; ?></textarea></dd>
											<?php if ( @$PREFS->conf['news_comments_captcha'] ) { ?>
    											<dt><label for="field_captcha"><?php echo vldext_lang("news","verify_number"); ?></label></dt>
    											<dd>
													<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="width:auto; float:left;" />
													<img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" style="float:left;" /><div class="clearfix"></div>
												</dd>
											<?php } ?>
    										<dd class="submit" style="padding-top:15px;"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("news","submit"); ?>" /></dd>
										</dl>
									</div>
									<input type="hidden" name="iscomment" value="1" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>

			<?php } ?>

		</div>
		<div class="clear"></div>
	</div>

<?php } ?>

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