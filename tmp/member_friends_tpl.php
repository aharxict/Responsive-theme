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
						<?php $_temp_inc = $TEMPLATE->output('login_form_sidebar.tpl',0); include($_temp_inc); ?>

						<div class="col-sm-8">
							<div class="blog-post blog-single-post page-content">



							<div class="header_wrap">
	<div class="location_wrap" style="display: none;">
		<div class="location">
			<ul>
				<li><?php $_temp_inc = $TEMPLATE->output('member_sections_location.tpl',0); include($_temp_inc); ?></li>
				<li><span>&#187;</span></li>
				<li><a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['member_friends_link']) ? $_obj['member_friends_link'] : "&#123;member_friends_link&#125;"; ?>"><?php echo vldext_lang("member","frm_friends"); ?></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1><?php echo vldext_lang("member","app_friends"); ?></h1>
		</div>
		<div class="options" >
			<?php $_temp_inc = $TEMPLATE->output('member_sections_links.tpl',0); include($_temp_inc); ?>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_member_friends">

		<div class="typemembers">
			<?php if (!empty($_obj['friends_profiles'])){ if (!is_array($_obj['friends_profiles'])) $_obj['friends_profiles']=array(array('friends_profiles'=>$_obj['friends_profiles'])); $_tmp_arr_keys=array_keys($_obj['friends_profiles']); if ($_tmp_arr_keys[0]!='0') $_obj['friends_profiles']=array(0=>$_obj['friends_profiles']); $_stack[$_stack_cnt++]=$_obj; $_cnt['friends_profiles']=count($_obj['friends_profiles']); foreach ($_obj['friends_profiles'] as $rowcnt=>$friends_profiles) { $friends_profiles['rowcnt']=$rowcnt; $friends_profiles['rowpos']=$rowcnt+1; $friends_profiles['rownum']=$rowcnt%2+1; $friends_profiles['rowtotal']=$_cnt['friends_profiles']; $friends_profiles['rowfirst']=$rowcnt==0?1:0; $friends_profiles['rowlast']=($rowcnt+1)==$_cnt['friends_profiles']?1:0; $_obj=&$friends_profiles; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
					<table class="plain">
						<tr>
							<td>
								<div class="image" style="margin-right: 10px;">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_picture.tpl',0); include($_temp_inc); ?>
								</div>
							</td>
							<td class="data">
								<div class="datainfo">
									<?php $_temp_inc = $TEMPLATE->output('member_sections_name.tpl',0); include($_temp_inc); ?>
									<dl class="datainfo">
										<?php $_temp_inc = $TEMPLATE->output('member_sections_card.tpl',0); include($_temp_inc); ?>
									</dl>
								</div>
							</td>
							<td>
								<div class="actions" style="display: none;">
									<ul class="actions">
										<?php $_temp_inc = $TEMPLATE->output('member_sections_quick_actions.tpl',0); include($_temp_inc); ?>
									</ul>
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
						</div>
						</div>

					</div>
				</div>
			</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>
