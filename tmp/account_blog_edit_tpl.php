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
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture']) ? $SESSION->conf['picture'] : "&#123;picture&#125;"; ?>" alt="" border="0" /></a>
							<?php } ?>
							
						</div>
<?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>
					
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php if ( $this->objval($_obj,'entry_id') ) { ?><?php echo vldext_lang("blog","app_editentry"); ?><?php } else { ?><?php echo vldext_lang("blog","app_addentry"); ?><?php } ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
	                            <?php if ( $this->objval($_obj,'entry_id') ) { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_edit_link']) ? $_obj['entry_edit_link'] : "&#123;entry_edit_link&#125;"; ?>" class="btn active"><i class="glyphicon glyphicon-edit"></i> <?php echo vldext_lang("blog","opt_edit_entry"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_comments_link']) ? $_obj['entry_comments_link'] : "&#123;entry_comments_link&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-comment"></i> <?php echo vldext_lang("blog","opt_view_comments"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/blog/add/","index.php?m=account_blog&p=add"); ?>" class="btn"><i class="glyphicon glyphicon-book"></i> <?php echo vldext_lang("blog","opt_add_entry"); ?></a>
                                <?php } else { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/blog/","index.php?m=account_blog"); ?>" class="btn"><i class="glyphicon glyphicon-book"></i> <?php echo vldext_lang("blog","opt_view_entries"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/blog/add/","index.php?m=account_blog&p=add"); ?>" class="btn active"><i class="glyphicon glyphicon-book"></i> <?php echo vldext_lang("blog","opt_add_entry"); ?></a>
                                <?php } ?>
                                
                                </div>
                                <div class="clearfix"></div>
                           </div>
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>


<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_blogs_edit" style="margin-top:15px;">

		<div class="typepage">
			<div class="dataitem single">
							<div class="image image-preview">
								<?php if ( $this->objval($_obj,'entry_picture')  != "") { ?>
									<a class="picture_zoom" href="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['entry_picture']) ? $_obj['entry_picture'] : "&#123;entry_picture&#125;"; ?>" id="entry_<?php echo isset($_obj['entry_id']) ? $_obj['entry_id'] : "&#123;entry_id&#125;"; ?>" target="_blank"><img src="<?php echo isset($_obj['virtual_pic_path']) ? $_obj['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['entry_preview_picture']) ? $_obj['entry_preview_picture'] : "&#123;entry_preview_picture&#125;"; ?>" alt="<?php echo vldext_lang("blog","view"); ?>" border="0" /><br /></a>
									<div id="entry_<?php echo isset($_obj['entry_id']) ? $_obj['entry_id'] : "&#123;entry_id&#125;"; ?>_zoom" style="display:none"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($_obj['entry_picture']) ? $_obj['entry_picture'] : "&#123;entry_picture&#125;"; ?>" alt="" border="0" /><br/></div>
								<?php } else { ?>
									<a href="#"><img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="" border="0" /><br /></a>
								<?php } ?>
							</div>
				<table class="plain">
					<tr>
		                <td class="data">
							<div class="form">
								<form name="edit" method="post" action="" enctype="multipart/form-data">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_title"><?php echo vldext_lang("blog","title"); ?></label></dt>
											<dd><input type="text" id="field_title" class="text text_small form-control" name="title" value="<?php echo isset($_obj['entry_title']) ? $_obj['entry_title'] : "&#123;entry_title&#125;"; ?>" maxlength="255" /></dd>
											<dt>
												<label for="field_body"><?php echo vldext_lang("blog","body"); ?><?php if ( @$PREFS->conf['blog_chars_counter'] ) { ?> <span style="font-weight:normal">(<?php echo isset($_obj['character_count']) ? $_obj['character_count'] : "&#123;character_count&#125;"; ?>)</span><?php } ?></label>
											</dt>
											<dd>
												<textarea id="field_body" class="textarea textarea_small form-control" cols="40" rows="5" name="body" <?php if ( @$PREFS->conf['blog_chars_counter'] ) { ?>onkeyup="strcounter('field_body','field_body_count',this.value,<?php echo isset($PREFS->conf['blog_max_length']) ? $PREFS->conf['blog_max_length'] : "&#123;blog_max_length&#125;"; ?>)" onkeydown="strcounter('field_body','field_body_count',this.value,<?php echo isset($PREFS->conf['blog_max_length']) ? $PREFS->conf['blog_max_length'] : "&#123;blog_max_length&#125;"; ?>)" onchange="strcounter('field_body','field_body_count',this.value,<?php echo isset($PREFS->conf['blog_max_length']) ? $PREFS->conf['blog_max_length'] : "&#123;blog_max_length&#125;"; ?>)"<?php } ?>><?php echo isset($_obj['entry_body']) ? $_obj['entry_body'] : "&#123;entry_body&#125;"; ?></textarea>
											</dd>
											<dt><label for="field_picture"><?php echo vldext_lang("blog","picture"); ?></label></dt>
											<dd><input id="field_picture" type="file" name="picture" value="" class="form-control file-input-control" /></dd>
											<dd class="submit"><input style="margin-top:10px;" class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("blog","submit"); ?>" /></dd>
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

<?php } ?>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>