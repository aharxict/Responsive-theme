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
						<div class="hide-mobile">
                        <div class="blog-post blog-single-post" style="padding:5px !important; margin-bottom:10px;">
	                           
                            <?php if ( @$SESSION->conf['picture']  &&  @$SESSION->conf['picture_active'] ) { ?>
    						<a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($SESSION->conf['media_path']) ? $SESSION->conf['media_path'] : "&#123;media_path&#125;"; ?><?php echo isset($SESSION->conf['picture_large']) ? $SESSION->conf['picture_large'] : "&#123;picture_large&#125;"; ?>" alt="" border="0" /></a>
							<?php } else { ?>
                            <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($SESSION->conf['username']) ? $SESSION->conf['username'] : "&#123;username&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/user_picture_none.gif" alt="" border="0" /></a>
                            <?php } ?>
							
						</div>
                        </div>

						<div class="hide-mobile">
                        <?php $_temp_inc = $TEMPLATE->output('ext.member_sidebar.tpl',0); include($_temp_inc); ?>
                        </div>
                        
						<div class="hide-mobile">
                        <?php $_temp_inc = $TEMPLATE->output('ext.search.tpl',0); include($_temp_inc); ?>					
                        </div>
                    
                    </div>
					<!-- End Blog Post Excerpt -->
					

					<!-- Blog Post Excerpt -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("upgrade","app_upgrade"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_upgrade" class="btn active"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo vldext_lang("core","usermenu_upgrade"); ?></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>index.php?m=account_upgrade&p=orders" class="btn"><i class="glyphicon glyphicon-info-sign"></i> <?php echo vldext_lang("upgrade","opt_orders"); ?></a>
                                </div>
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        

<?php if ( $this->objval($_obj,'hide_content')  != "1") { ?>

	<div class="outter page_account_upgrade">

		<div class="typemembers">
			<?php if (!empty($_obj['package_fields'])){ if (!is_array($_obj['package_fields'])) $_obj['package_fields']=array(array('package_fields'=>$_obj['package_fields'])); $_tmp_arr_keys=array_keys($_obj['package_fields']); if ($_tmp_arr_keys[0]!='0') $_obj['package_fields']=array(0=>$_obj['package_fields']); $_stack[$_stack_cnt++]=$_obj; $_cnt['package_fields']=count($_obj['package_fields']); foreach ($_obj['package_fields'] as $rowcnt=>$package_fields) { $package_fields['rowcnt']=$rowcnt; $package_fields['rowpos']=$rowcnt+1; $package_fields['rownum']=$rowcnt%2+1; $package_fields['rowtotal']=$_cnt['package_fields']; $package_fields['rowfirst']=$rowcnt==0?1:0; $package_fields['rowlast']=($rowcnt+1)==$_cnt['package_fields']?1:0; $_obj=&$package_fields; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>" style="border-bottom:1px #eee solid; padding-bottom:15px; margin-bottom:15px;">
					<div class="data">
						<h2 class="inner" style="font-size:18px;"><a href="<?php echo isset($_obj['package_upgrade_link']) ? $_obj['package_upgrade_link'] : "&#123;package_upgrade_link&#125;"; ?>"><?php echo isset($_obj['package_name']) ? $_obj['package_name'] : "&#123;package_name&#125;"; ?></a></h2>
						<?php echo isset($_obj['package_description']) ? $_obj['package_description'] : "&#123;package_description&#125;"; ?>
                        <br /><a class="submit btn" style="margin-top:7px;" href="<?php echo isset($_obj['package_upgrade_link']) ? $_obj['package_upgrade_link'] : "&#123;package_upgrade_link&#125;"; ?>">Buy this upgrade</a>
					</div>
				</div>
			<?php } $_obj=$_stack[--$_stack_cnt];} ?>
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