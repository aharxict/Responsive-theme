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
								<div style="float:left;"><h2><?php echo vldext_lang("events","app_event"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>
                                	<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>" class="btn active"> <?php echo vldext_lang("events","frm_details"); ?></a>
                                
                                	<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_guests_link']) ? $_obj['event_guests_link'] : "&#123;event_guests_link&#125;"; ?>" class="btn"> <?php echo vldext_lang("events","frm_guests"); ?></a>
                                	<?php if ( @$PREFS->conf['enable_event_pictures'] ) { ?>
                                	<a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_link']) ? $_obj['event_pictures_link'] : "&#123;event_pictures_link&#125;"; ?>" class="btn"> <?php echo vldext_lang("events","frm_pictures"); ?></a>
                                	<?php } ?>
                                <?php } ?>
                                </div>

                                <div class="clearfix"></div>
                           </div>
                      

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_events">

		<div class="typemedia">

				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td valign="top">
								<div class="image">
									<?php if ( $this->objval($_obj,'event_picture_preview')  &&  $this->objval($_obj,'event_picture_active') ) { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['event_picture_preview']) ? $_obj['event_picture_preview'] : "&#123;event_picture_preview&#125;"; ?>" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<?php } else { ?>
										<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="" border="0" style="padding-right:10px;" /><br /></a>
									<?php } ?>
								</div>
							</td>
							<td class="data" valign="top">
								<h2 class="inner" style="font-size:13px;width:500px !important;overflow:inherit;word-wrap: break-word;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>"><?php echo isset($_obj['event_name']) ? $_obj['event_name'] : "&#123;event_name&#125;"; ?></a></h2>
								
                                <div class="actions">
									<div>
										<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_guests_link']) ? $_obj['event_guests_link'] : "&#123;event_guests_link&#125;"; ?>"><?php echo isset($_obj['event_total_guests']) ? $_obj['event_total_guests'] : "&#123;event_total_guests&#125;"; ?> <?php echo vldext_lang("events","total_guests"); ?></a></div>
										<?php if ( @$PREFS->conf['enable_event_comments']  &&  $this->objval($_obj,'event_allow_comments') ) { ?>
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_comments_link']) ? $_obj['event_comments_link'] : "&#123;event_comments_link&#125;"; ?>"><?php echo isset($_obj['event_total_comments']) ? $_obj['event_total_comments'] : "&#123;event_total_comments&#125;"; ?> <?php echo vldext_lang("events","total_comments"); ?></a></div>
										<?php } ?>
										<?php if ( @$PREFS->conf['enable_event_pictures'] ) { ?>
											<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_link']) ? $_obj['event_pictures_link'] : "&#123;event_pictures_link&#125;"; ?>"><?php echo isset($_obj['event_total_pictures']) ? $_obj['event_total_pictures'] : "&#123;event_total_pictures&#125;"; ?> <?php echo vldext_lang("events","total_pictures"); ?></a></div>
										<?php } ?>
                                        <div style="float:left; position: relative; font-size:12px; padding-right:7px;"><?php echo vldext_lang("events","creator"); ?>: <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a>
                                        </div>
									</div>
									<div class="clearfix"></div>
								</div>

                                <div class="datainfo" style="padding-top:5px;">
									<dl class="datainfo">
										<dt style="float:left; font-size:13px;"><?php echo isset($_obj['event_field_description_name']) ? $_obj['event_field_description_name'] : "&#123;event_field_description_name&#125;"; ?>:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;width:400px !important;overflow:inherit;word-wrap: break-word;"><?php echo isset($_obj['event_field_description_value']) ? $_obj['event_field_description_value'] : "&#123;event_field_description_value&#125;"; ?></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;"><?php echo isset($_obj['event_field_place_name']) ? $_obj['event_field_place_name'] : "&#123;event_field_place_name&#125;"; ?>:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;"><?php echo isset($_obj['event_field_place_value']) ? $_obj['event_field_place_value'] : "&#123;event_field_place_value&#125;"; ?></dd>
                                        <div class="clearfix"></div>
										<dt style="float:left; font-size:13px;"><?php echo vldext_lang("events","startdate"); ?>:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;"><?php echo isset($_obj['event_start_date']) ? $_obj['event_start_date'] : "&#123;event_start_date&#125;"; ?></dd>
                                        <div class="clearfix"></div>
                                        <dt style="float:left; font-size:13px;"><?php echo vldext_lang("events","creator"); ?>:</dt>
										<dd style="float:left; font-size:13px; padding-left:7px;"><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a></dd>
                                        <div class="clearfix"></div>
									</dl>
								</div>
							</td>
						</tr>
					</table>
				</div>
                <hr />

			<?php if ( @$PREFS->conf['enable_event_comments']  &&  $this->objval($_obj,'event_allow_comments')  &&  @$SESSION->conf['can_view_all_events_comments'] ) { ?>

				<div class="comments page_events_comments">

					<div class="subtitle" style="margin-bottom:20px;">
						<h2 style="font-size:18px;"><?php echo vldext_lang("events","comments_list"); ?></h2>
						<div class="progress" id="get_comments_progress" style="display:none;"></div>
					</div>
<style type="text/css">
#comments_page .entry {
	width:500px !important;
	overflow:inherit;
	word-wrap: break-word;
	}
</style>
					<div id="comments_page">
                    	<?php echo vldext_comments(array('type'=>"event",'member_id'=>$_obj['member_id'],'content_id'=>$_obj['event_id'])); ?>
					</div>

					<div class="commentsform page_events_comments_submit">
						<div class="dataitem single">
							<div class="form">
								<form name="edit" method="post" action="">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_comment_body"><?php echo vldext_lang("events","add_comment"); ?></label></dt>
											<dd><textarea class="textarea textarea_full form-control" id="field_comment_body" cols="40" rows="5" name="body"><?php echo isset($_obj['comment_body']) ? $_obj['comment_body'] : "&#123;comment_body&#125;"; ?></textarea></dd>
											<?php if ( @$PREFS->conf['events_comments_captcha'] ) { ?>
    											<dt><label for="field_captcha"><?php echo vldext_lang("events","verify_number"); ?></label></dt>
    											<dd>
													<input type="text" id="field_captcha" class="text captcha form-control" name="captcha" maxlength="5" style="float:left; width:auto;" />
													<img src="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>includes/fns/fns.captcha.php" alt="" border="0" class="captcha" style="float:left;" /><div class="clearfix"></div>
												</dd>
											<?php } ?>
    										<dd class="submit"><input class="submit btn" type="submit" name="submit" value="<?php echo vldext_lang("events","submit"); ?>" /></dd>
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

							</div><div class="clearfix"></div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>