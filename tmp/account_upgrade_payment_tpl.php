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
						<div class="hide-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture']) ? $SESSION->conf['picture'] : "&#123;picture&#125;"; ?>" alt="" border="0" /></a>
							<?php } ?>
							
						</div>
                        </div>
                        
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("upgrade","app_upgrade"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_upgrade" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo vldext_lang("core","usermenu_upgrade"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_upgrade&p=orders" class="btn"><i class="glyphicon glyphicon-info-sign"></i> <?php echo vldext_lang("upgrade","opt_orders"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<div class="outter page_account_upgrade_payment">

		<div class="typepage">
			<div class="dataitem">
				<div class="data">
					<h2 class="inner" style="font-size:18px;"><a href="<?php echo isset($_obj['package_upgrade_link']) ? $_obj['package_upgrade_link'] : "&#123;package_upgrade_link&#125;"; ?>"><?php echo isset($_obj['package_name']) ? $_obj['package_name'] : "&#123;package_name&#125;"; ?></a></h2>
					<?php echo isset($_obj['package_description']) ? $_obj['package_description'] : "&#123;package_description&#125;"; ?>
				</div>
			</div>
			<div class="dataitem">
				<div class="data">
					<?php if (!empty($_obj['payment_gateways'])){ if (!is_array($_obj['payment_gateways'])) $_obj['payment_gateways']=array(array('payment_gateways'=>$_obj['payment_gateways'])); $_tmp_arr_keys=array_keys($_obj['payment_gateways']); if ($_tmp_arr_keys[0]!='0') $_obj['payment_gateways']=array(0=>$_obj['payment_gateways']); $_stack[$_stack_cnt++]=$_obj; $_cnt['payment_gateways']=count($_obj['payment_gateways']); foreach ($_obj['payment_gateways'] as $rowcnt=>$payment_gateways) { $payment_gateways['rowcnt']=$rowcnt; $payment_gateways['rowpos']=$rowcnt+1; $payment_gateways['rownum']=$rowcnt%2+1; $payment_gateways['rowtotal']=$_cnt['payment_gateways']; $payment_gateways['rowfirst']=$rowcnt==0?1:0; $payment_gateways['rowlast']=($rowcnt+1)==$_cnt['payment_gateways']?1:0; $_obj=&$payment_gateways; ?>
						<div class="form" style="padding-top: 15px">
							<?php echo isset($_obj['gateway_payment_form']) ? $_obj['gateway_payment_form'] : "&#123;gateway_payment_form&#125;"; ?>
						</div>
					<?php } $_obj=$_stack[--$_stack_cnt];} ?>
				</div>
			</div>
			<?php if ( !  @$_GET['sid']  ||  !  $this->objval($_obj,'member_id') ) { ?>
				<div class="dataitem">
					<div class="data"><br/>
						<img src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/upgrade_gift.png" align="absmiddle" />
						<?php echo vldext_lang("upgrade","upgrade_gift"); ?> <a href="#" onclick="$('#gift_form').toggle();return false;"><?php echo vldext_lang("upgrade","upgrade_gift_link"); ?></a>
					</div>
				</div>
			<?php } ?>
		</div>
		<?php if ( !  @$_GET['sid']  ||  !  $this->objval($_obj,'member_id') ) { ?>
			<?php if ( !  $this->objval($_obj,'package_credits')  &&  @$PREFS->conf['enable_gift_upgrades']  ||  $this->objval($_obj,'package_credits')  &&  @$PREFS->conf['enable_gift_credits'] ) { ?>
				<div class="typepage" id="gift_form" style="margin-top:5px;<?php if ( !  @$_POST['username'] ) { ?>display:none<?php } ?>">
					<div class="dataitem">
						<div class="data">
							<form action="" name="gift" method="post">
								<div class="form">
									<div class="fieldset">
										<dl class="fieldset">
											<dt><label for="field_username" style="font-weight:normal"><?php echo vldext_lang("upgrade","gift_purchase_info"); ?></label></dt>
											<dd><input type="text" class="text" id="field_username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ""; ?>" maxlength="32" size="32" style="width: 200px" /></dd>
    										<dd class="submit"><input class="submit" type="submit" name="submit" value="<?php echo vldext_lang("upgrade","submit"); ?>" /></dd>
										</dl>
									</div>
								</div>
								<input type="hidden" name="isgift" value="1" />
							</form>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } elseif ( $this->objval($_obj,'member_id') ) { ?>
			<div class="typemembers" style="margin-top:5px">
				<div class="dataitem dataitemlast">
					<table class="plain">
						<tr>
							<td>
								<div class="image">
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
								<div class="actions">
									<ul class="actions">
										<li class="remove"><a href="<?php echo isset($_obj['package_upgrade_link']) ? $_obj['package_upgrade_link'] : "&#123;package_upgrade_link&#125;"; ?>"><?php echo vldext_lang("upgrade","cancel"); ?></a></li>
									</ul>
									<div class="clear"></div>
								</div>
							</td>
			            </tr>
			        </table>
				</div>
			</div>
		<?php } ?>

	</div>
                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>