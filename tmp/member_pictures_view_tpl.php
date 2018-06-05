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
include_once SYS_PATH . "includes/ext/ext.ratings.php";
include_once SYS_PATH . "includes/ext/ext.reports.php";
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
					<!-- Blog Post Excerpt -->
                    <div class="hide-on-mobile">
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>
                            
                            <div class="image picture_zoom">
                            <?php $_temp_inc = $TEMPLATE->output('member_sections_picture_profile.tpl',0); include($_temp_inc); ?>
                            </div>
                            
						</div>
                        

<?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>					
                    
                    </div>
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content" style="padding-bottom:0px;">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC;">
								<div style="float:left;"><h2><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?>'s <?php if ( @$PREFS->conf['enable_old_style_pictures'] ) { ?><?php echo vldext_lang("member","frm_pictures"); ?><?php } else { ?><?php echo vldext_lang("member","frm_albums"); ?><?php } ?></h2></div>
                                
                                <div style="float:right;">
                                <div class="nav nav-tabs" role="tablist">
                                <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>" class="btn"><i class="glyphicon glyphicon-user"></i> PROFILE</a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_pictures_link']) ? $_obj['member_pictures_link'] : "&#123;member_pictures_link&#125;"; ?>" class="btn active"><i class="glyphicon glyphicon-picture"></i> <span style="text-transform:uppercase"><?php if ( @$PREFS->conf['enable_old_style_pictures'] ) { ?><?php echo vldext_lang("member","frm_pictures"); ?><?php } else { ?><?php echo vldext_lang("member","frm_albums"); ?><?php } ?></span></a>
                                </div>
                                </div>
                                
                                <div class="clearfix"></div>
							</div>
							
							<div class="single-post-content" style="border-bottom:none;">
                            
 
<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_pictures_view">
		<div class="typepage">

			<?php if ( $this->objval($_obj,'album_display') ) { ?>

				<div class="dataitem single galleryitem">
					<div class="arrows" style="margin-bottom:15px;">
						<div style="float: left">
							<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['pictures_page_link']) ? $_obj['pictures_page_link'] : "&#123;pictures_page_link&#125;"; ?>"><!-- <?php echo vldext_lang("member","back_to_album"); ?> -->&laquo; View all pictures</a>
						</div>
						<div style="float: right">
							<?php if ( !  @$PREFS->conf['enable_old_style_pictures'] ) { ?>
								<?php echo isset($_obj['picture_order_id']) ? $_obj['picture_order_id'] : "&#123;picture_order_id&#125;"; ?> / <?php echo isset($_obj['album_total_pictures']) ? $_obj['album_total_pictures'] : "&#123;album_total_pictures&#125;"; ?>
							<?php } ?>
							<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['previous_picture_link']) ? $_obj['previous_picture_link'] : "&#123;previous_picture_link&#125;"; ?>">&laquo; <?php echo vldext_lang("member","previous_page"); ?></a>&nbsp;
							<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['next_picture_link']) ? $_obj['next_picture_link'] : "&#123;next_picture_link&#125;"; ?>"><?php echo vldext_lang("member","next_page"); ?> &raquo;</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<?php if ( $this->objval($_obj,'picture_adult')  &&  @$SESSION->conf['showadult']  == "0" &&  $this->objval($_obj,'agree_adult_picture')  == "0" &&  @$SESSION->conf['can_view_adult_images'] ) { ?>
						<div class="form">
							<form name="adultpicture" method="post" action="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>">
								<div class="fieldset">
									<dl class="fieldset">
										<dt><?php echo vldext_lang("member","adult_notice"); ?></dt>
										<dt><label><input class="checkbox" name="adult_remember" type="checkbox" value="1">&nbsp;<?php echo vldext_lang("member","adult_remember_yes"); ?></label></dt>
										<dd class="submit">
											<input class="submit" name="adult_on" value="<?php echo vldext_lang("member","adult_warning_yes"); ?>" type="submit" />
											<input class="submit" name="adult_off" value="<?php echo vldext_lang("member","adult_warning_no"); ?>" onclick="javascript:history.go(-1)" type="button" />
										</dd>
									</dl>
								</div>
							</form>
						</div>
					<?php } elseif ( $this->objval($_obj,'picture_display') ) { ?>
						<div class="image" style="text-align:center;">
							<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['picture_link']) ? $_obj['picture_link'] : "&#123;picture_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['picture_filename']) ? $_obj['picture_filename'] : "&#123;picture_filename&#125;"; ?>" alt="" border="0" style="padding: 4px; border-radius:3px;" /><br /></a>
						</div>
						<div class="entry" style="margin-top:10px; text-align:center;">
							<?php echo isset($_obj['picture_description']) ? $_obj['picture_description'] : "&#123;picture_description&#125;"; ?>
						</div>
                        <hr />
						<div class="itemfooter">
							<div class="itemfooter">
								<?php if ( @$PREFS->conf['enable_picture_rating']  &&  @$SESSION->conf['can_rate_pictures']  &&  $this->objval($_obj,'picture_rated') ) { ?>
<style type="text/css">
div.ratingbox div.selection a.over {
    cursor: default;
    background: url('<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/rate.png') no-repeat -12px center;
}
div.ratingbox div.selection a {
    width: 12px;
    height: 16px;
    float: left;
    display: block;
    cursor: default;
    background: url('<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/rate.png') no-repeat 0px center;
    text-decoration: none;
}
</style>
                                    <div style="float:left; display:none;">
										<?php echo vldext_ratings(array('type'=>"picture",'member_id'=>$_stack[0]['member_id'],'item_id'=>$_obj['picture_id'],'score'=>$_obj['picture_score'],'votes'=>$_obj['picture_votes'])); ?>
									</div>
								<?php } ?>
								<div style="float:left;">
										<?php echo vldext_lang("member","views"); ?>: <?php echo isset($_obj['picture_total_views']) ? $_obj['picture_total_views'] : "&#123;picture_total_views&#125;"; ?>
								</div>
								<?php if ( @$PREFS->conf['enable_reports']  &&  @$PREFS->conf['enable_picture_reports']  &&  @$SESSION->conf['can_submit_reports'] ) { ?>
									<div class="report" style="float:right;">
										<?php echo vldext_reports(array('type'=>"picture",'member_id'=>$_stack[0]['member_id'],'item_id'=>$_obj['picture_id'])); ?>
									</div>
								<?php } ?>
							</div>
							<div class="clearfix"></div>
						</div>
					<?php } ?>
				</div>

				<?php if ( $this->objval($_obj,'picture_display')  &&  @$PREFS->conf['enable_picture_comments']  &&  $this->objval($_obj,'picture_allow_comments')  &&  @$SESSION->conf['can_view_all_pictures_comments'] ) { ?>

					<div class="comments page_member_pictures_comments">

						<div class="subtitle">
							<h2><?php echo vldext_lang("member","comments_list"); ?></h2>
							<div class="progress" id="get_comments_progress" style="display:none;"></div>
						</div>
						<div id="comments_page">
                        <style type="text/css">
						.entry {
							width:500px !important;
							overflow:inherit;
							word-wrap: break-word;
						}
						</style>
							<?php echo vldext_comments(array('type'=>"picture",'member_id'=>$_obj['member_id'],'content_id'=>$_obj['picture_id'])); ?>
						</div>

						<div class="commentsform page_member_pictures_comments_submit">
							<div class="dataitem single">
								<div class="form">
									<form name="edit" method="post" action="">
										<div class="fieldset">
											<dl class="fieldset">
												<dt><label for="field_comment_body"><?php echo vldext_lang("member","add_comment"); ?></label></dt>
												<dd><textarea class="textarea textarea_full" id="field_comment_body" cols="40" rows="5" name="body"><?php echo isset($_obj['comment_body']) ? $_obj['comment_body'] : "&#123;comment_body&#125;"; ?></textarea></dd>
												<?php if ( @$PREFS->conf['pictures_comments_captcha'] ) { ?>
    												<dt><label for="field_captcha"><?php echo vldext_lang("member","verify_number"); ?></label></dt>
    												<dd>
														<input type="text" id="field_captcha" class="text captcha" name="captcha" maxlength="5" />
														<img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" /><div class="clear"></div>
													</dd>
												<?php } ?>
    											<dd class="submit"><input class="submit" type="submit" name="submit" value="<?php echo vldext_lang("member","submit"); ?>" /></dd>
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

			<?php } else { ?>
				<div class="dataitem single galleryitem">
					<div class="form">
						<form name="privatealbum" method="post" action="">
							<div class="fieldset">
								<dl class="fieldset">
									<dt><label for="field_album_password"><?php echo vldext_lang("member","private_album_warning"); ?></label></dt>
									<dd><input class="text" id="field_album_password" name="album_password" value="" type="text" /></dd>
									<dd class="submit">
										<input class="submit" name="private_on" value="<?php echo vldext_lang("member","private_warning_yes"); ?>" type="submit" />&nbsp;
										<input class="submit" name="private_off" value="<?php echo vldext_lang("member","private_warning_no"); ?>" onclick="javascript:history.go(-1)" type="button" />
									</dd>
								</dl>
							</div>
						</form>
					</div>
				</div>
			<?php } ?>

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