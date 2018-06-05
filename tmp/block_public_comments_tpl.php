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

include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
include_once SYS_PATH . "includes/ext/ext.reports.php";
 ?><?php if (!empty($_obj['block_comments'])){ if (!is_array($_obj['block_comments'])) $_obj['block_comments']=array(array('block_comments'=>$_obj['block_comments'])); $_tmp_arr_keys=array_keys($_obj['block_comments']); if ($_tmp_arr_keys[0]!='0') $_obj['block_comments']=array(0=>$_obj['block_comments']); $_stack[$_stack_cnt++]=$_obj; $_cnt['block_comments']=count($_obj['block_comments']); foreach ($_obj['block_comments'] as $rowcnt=>$block_comments) { $block_comments['rowcnt']=$rowcnt; $block_comments['rowpos']=$rowcnt+1; $block_comments['rownum']=$rowcnt%2+1; $block_comments['rowtotal']=$_cnt['block_comments']; $block_comments['rowfirst']=$rowcnt==0?1:0; $block_comments['rowlast']=($rowcnt+1)==$_cnt['block_comments']?1:0; $_obj=&$block_comments; ?>
	<div id="object_comment_<?php echo isset($_obj['comment_id']) ? $_obj['comment_id'] : "&#123;comment_id&#125;"; ?>" class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
		<table class="plain">
			<tr>
				<td>
					<div class="image" style="padding: 4px; border: 1px solid #ddd; margin-right:10px;">
						<?php $_temp_inc = $TEMPLATE->output('member_sections_picture.tpl',0); include($_temp_inc); ?>
                        <div style="text-align:center;">
                		<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>" style="line-height:28px;"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a>
                		</div>
					</div>
				</td>
				<td class="data" valign="top">
					<div class="itemheader">
						<div class="itemheader">
							<div style="float:left; position: relative; font-size:12px; padding-right:7px;"><?php echo vldext_lang("core","date_stamp"); ?> <?php echo isset($_obj['comment_post_date']) ? $_obj['comment_post_date'] : "&#123;comment_post_date&#125;"; ?></div>
							<?php if ( $this->objval($_obj,'comment_delete_link') ) { ?>
								<div style="float:left; position: relative; font-size:12px; padding-right:7px;" id="object_comment_delete_link_<?php echo isset($_obj['comment_id']) ? $_obj['comment_id'] : "&#123;comment_id&#125;"; ?>"><?php echo isset($_obj['comment_delete_link']) ? $_obj['comment_delete_link'] : "&#123;comment_delete_link&#125;"; ?></div>
							<?php } ?>
							<?php if ( @$PREFS->conf['enable_reports']  &&  $this->objval($_stack[0],'comment_type_reports_enabled')  &&  @$SESSION->conf['can_submit_reports'] ) { ?>
								<div style="float:left; position: relative; font-size:12px; padding-right:7px;" class="report">
									<?php echo vldext_reports(array('type'=>$_stack[0]['comment_type'],'member_id'=>$_stack[0]['member_id'],'item_id'=>$_obj['comment_id'])); ?>
								</div>
							<?php } ?>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="entry">
						<?php echo isset($_obj['comment_body']) ? $_obj['comment_body'] : "&#123;comment_body&#125;"; ?>
					</div>
				</td>
			</tr>
		</table>
	</div>
    <hr />
<?php } $_obj=$_stack[--$_stack_cnt];} ?>
<?php if ( $this->objval($_obj,'total_pages')  > "1") { ?>
	<div class="footer_wrap">
		<div class="footer">
			<p><?php echo vldext_lang("core","page_numbers"); ?></p>
			<?php echo isset($_obj['page_links']) ? $_obj['page_links'] : "&#123;page_links&#125;"; ?>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
<?php } ?>
