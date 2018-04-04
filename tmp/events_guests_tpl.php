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
                    <div class="hide-on-mobile">
					<div class="col-sm-4 col-leftside">
						<div class="blog-post blog-single-post" style="padding:5px !important;">
	                           
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
						<div class="blog-post blog-single-post page-content">
							<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
								<div style="float:left;"><h2><?php echo vldext_lang("events","app_guests"); ?></h2></div>
                                
                                <div style="float:right; padding-bottom:5px;">
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_details_link']) ? $_obj['event_details_link'] : "&#123;event_details_link&#125;"; ?>" class="btn"><span style="text-transform:uppercase;"><?php echo vldext_lang("events","frm_details"); ?></span></a>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_guests_link']) ? $_obj['event_guests_link'] : "&#123;event_guests_link&#125;"; ?>" class="btn active"><span style="text-transform:uppercase;"><?php echo vldext_lang("events","frm_guests"); ?></span></a>
                                <?php if ( @$PREFS->conf['enable_event_pictures'] ) { ?>
                                <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['event_pictures_link']) ? $_obj['event_pictures_link'] : "&#123;event_pictures_link&#125;"; ?>" class="btn active"><span style="text-transform:uppercase;"><?php echo vldext_lang("events","frm_pictures"); ?></span></a>
                                <?php } ?>
                                </div>
                                
                                <div class="clearfix"></div>
                           </div>
                        <?php $_temp_inc = $TEMPLATE->output('message.tpl',0); include($_temp_inc); ?>   
        


<?php if ( $this->objval($_obj,'hide_content')  != "1" &&  $this->objval($_obj,'guests_profiles') ) { ?>

	<div class="outter page_events_guests">

		<div class="typemembers">
			<?php if (!empty($_obj['guests_profiles'])){ if (!is_array($_obj['guests_profiles'])) $_obj['guests_profiles']=array(array('guests_profiles'=>$_obj['guests_profiles'])); $_tmp_arr_keys=array_keys($_obj['guests_profiles']); if ($_tmp_arr_keys[0]!='0') $_obj['guests_profiles']=array(0=>$_obj['guests_profiles']); $_stack[$_stack_cnt++]=$_obj; $_cnt['guests_profiles']=count($_obj['guests_profiles']); foreach ($_obj['guests_profiles'] as $rowcnt=>$guests_profiles) { $guests_profiles['rowcnt']=$rowcnt; $guests_profiles['rowpos']=$rowcnt+1; $guests_profiles['rownum']=$rowcnt%2+1; $guests_profiles['rowtotal']=$_cnt['guests_profiles']; $guests_profiles['rowfirst']=$rowcnt==0?1:0; $guests_profiles['rowlast']=($rowcnt+1)==$_cnt['guests_profiles']?1:0; $_obj=&$guests_profiles; ?>
				<div class="dataitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
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

<?php } ?>

                           
                           
                           	</div>
							
						</div>
					</div>
					<!-- End Blog Post Excerpt -->
</div>
</div>
</div>    </div></div></div>

<?php $_temp_inc = $TEMPLATE->output('footer.tpl',0); include($_temp_inc); ?>