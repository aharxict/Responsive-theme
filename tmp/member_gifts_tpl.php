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

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li><?php $_temp_inc = $TEMPLATE->output('member_sections_location.tpl',0); include($_temp_inc); ?></li>
				<li><span>&#187;</span></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_gifts_link']) ? $_obj['member_gifts_link'] : "&#123;member_gifts_link&#125;"; ?>"><?php echo vldext_lang("member","frm_gifts"); ?></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1><?php echo vldext_lang("member","app_gifts"); ?></h1>
		</div>
		<div class="options">
			<?php $_temp_inc = $TEMPLATE->output('member_sections_links.tpl',0); include($_temp_inc); ?>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_gifts">

		<div class="typemedia">
			<?php if (!empty($_obj['profile_gifts'])){ if (!is_array($_obj['profile_gifts'])) $_obj['profile_gifts']=array(array('profile_gifts'=>$_obj['profile_gifts'])); $_tmp_arr_keys=array_keys($_obj['profile_gifts']); if ($_tmp_arr_keys[0]!='0') $_obj['profile_gifts']=array(0=>$_obj['profile_gifts']); $_stack[$_stack_cnt++]=$_obj; $_cnt['profile_gifts']=count($_obj['profile_gifts']); foreach ($_obj['profile_gifts'] as $rowcnt=>$profile_gifts) { $profile_gifts['rowcnt']=$rowcnt; $profile_gifts['rowpos']=$rowcnt+1; $profile_gifts['rownum']=$rowcnt%2+1; $profile_gifts['rowtotal']=$_cnt['profile_gifts']; $profile_gifts['rowfirst']=$rowcnt==0?1:0; $profile_gifts['rowlast']=($rowcnt+1)==$_cnt['profile_gifts']?1:0; $_obj=&$profile_gifts; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
									<img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['gift_filename']) ? $_obj['gift_filename'] : "&#123;gift_filename&#125;"; ?>" alt="" border="0" /><br />
								</div>
							</td>
		                    <td class="data">
								<div class="datainfo">
									<h2 class="inner">
										<?php echo isset($_obj['gift_name']) ? $_obj['gift_name'] : "&#123;gift_name&#125;"; ?>
									</h2>
									<dl class="datainfo">
										<dt><?php echo vldext_lang("member","sent_by"); ?>:</dt>
										<?php if ( $this->objval($_obj,'gift_privacy')  == "0") { ?>
											<dd><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a></dd>
										<?php } elseif ( $this->objval($_obj,'gift_privacy')  == "1" &&  (  @$SESSION->conf['member_id']  ==  $this->objval($_obj,'gift_sender_id')  ||  @$SESSION->conf['member_id']  ==  $this->objval($_obj,'gift_receiver_id')  ) ) { ?>
											<dd><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_profile_link']) ? $_obj['member_profile_link'] : "&#123;member_profile_link&#125;"; ?>"><?php echo isset($_obj['member_username']) ? $_obj['member_username'] : "&#123;member_username&#125;"; ?></a></dd>
										<?php } else { ?>
											<dd><?php echo vldext_lang("member","anonymous"); ?></dd>
										<?php } ?>
										<?php if ( $this->objval($_obj,'gift_privacy')  == "0" ||  @$SESSION->conf['member_id']  ==  $this->objval($_obj,'gift_receiver_id') ) { ?>
											<?php if ( $this->objval($_obj,'gift_message') ) { ?>
												<dt><?php echo vldext_lang("member","message"); ?>:</dt>
												<dd><?php echo isset($_obj['gift_message']) ? $_obj['gift_message'] : "&#123;gift_message&#125;"; ?></dd>
											<?php } ?>
										<?php } ?>
										<dt><?php echo vldext_lang("member","send_date"); ?>:</dt>
										<dd><?php echo isset($_obj['gift_date']) ? $_obj['gift_date'] : "&#123;gift_date&#125;"; ?></dd>
									</dl>
								</div>
							</td>
		                </tr>
		            </table>
				</div>
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

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>
