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
								<div style="float:left;"><h2><?php echo isset($_obj['app_page']) ? $_obj['app_page'] : "&#123;app_page&#125;"; ?></h2></div>

                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_default">

		<div class="typepage">
			<div class="dataitem single">
				<div class="entry">
					<?php echo isset($_obj['page_content']) ? $_obj['page_content'] : "&#123;page_content&#125;"; ?>
				</div>
				<div class="clear"></div>
			</div>
			<?php if ( @$PREFS->conf['enable_page_comments']  &&  $this->objval($_obj,'page_allow_comments') ) { ?>

				<div class="comments page_pages_comments">

					<div class="subtitle">
						<h2><?php echo vldext_lang("pages","comments_list"); ?></h2>
						<div class="progress" id="get_comments_progress"></div>
					</div>
					<div id="comments_page">
						<?php echo vldext_comments(array('type'=>"page",'member_id'=>0,'content_id'=>$_obj['page_id'])); ?>
					</div>
					<?php if ( $this->objval($_obj,'loggedin')  == "1") { ?>
					<div class="commentsform page_pages_comments_submit">
						<div class="dataitem single">
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_comment_body"><?php echo vldext_lang("pages","add_comment"); ?></label></dt>
											<dd><textarea class="textarea textarea_full" id="field_comment_body" cols="40" rows="5" name="body"><?php echo isset($_obj['comment_body']) ? $_obj['comment_body'] : "&#123;comment_body&#125;"; ?></textarea></dd>
											<?php if ( @$PREFS->conf['pages_comments_captcha'] ) { ?>
    											<dt><label for="field_captcha"><?php echo vldext_lang("pages","verify_number"); ?></label></dt>
    											<dd>
													<input type="text" id="field_captcha" class="text captcha" name="captcha" maxlength="5" />
													<img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
												</dd>
											<?php } ?>
    										<dd class="submit"><input class="submit" type="submit" name="submit" value="<?php echo vldext_lang("pages","submit"); ?>" /></dd>
										</dl>
									</div>
									<input type="hidden" name="iscomment" value="1" />
								</form>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="clear"></div>

			<?php } ?>
		</div>
		<div class="clear"></div>

	</div>

<?php } ?>

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>