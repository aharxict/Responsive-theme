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

include_once SYS_PATH . "includes/ext/ext.vldthemes.php";
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
 ?><?php if ( $this->objval($_obj,'ext_blogs') ) { ?>
	<div class="typecontent">
  
   <div class="container-fluid container-small row">
                    
		<?php if (!empty($_obj['ext_blogs'])){ if (!is_array($_obj['ext_blogs'])) $_obj['ext_blogs']=array(array('ext_blogs'=>$_obj['ext_blogs'])); $_tmp_arr_keys=array_keys($_obj['ext_blogs']); if ($_tmp_arr_keys[0]!='0') $_obj['ext_blogs']=array(0=>$_obj['ext_blogs']); $_stack[$_stack_cnt++]=$_obj; $_cnt['ext_blogs']=count($_obj['ext_blogs']); foreach ($_obj['ext_blogs'] as $rowcnt=>$ext_blogs) { $ext_blogs['rowcnt']=$rowcnt; $ext_blogs['rowpos']=$rowcnt+1; $ext_blogs['rownum']=$rowcnt%2+1; $ext_blogs['rowtotal']=$_cnt['ext_blogs']; $ext_blogs['rowfirst']=$rowcnt==0?1:0; $ext_blogs['rowlast']=($rowcnt+1)==$_cnt['ext_blogs']?1:0; $_obj=&$ext_blogs; ?>
  
      <?php if ( $this->objval($_obj,'rowcnt')  > "0") { ?>

       <?php } ?>

           <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="col-xs-12">
              <div class="entry_image image_overlay_actions">
                  <?php if ( $this->objval($_obj,'entry_picture') ) { ?>
                  <a class="blog_entry_link" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>">
                      <img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['member_media_path']) ? $_obj['member_media_path'] : "&#123;member_media_path&#125;"; ?><?php echo isset($_obj['entry_picture']) ? $_obj['entry_picture'] : "&#123;entry_picture&#125;"; ?>" class="img-full img-responsive" alt="" border="0" /></a>
                  <?php } elseif ( $this->objval($_obj,'member_picture')  &&  $this->objval($_obj,'member_picture_active') ) { ?>
                 
                  <a class="blog_entry_link" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>">
                      <img class="img-full img-responsive" src="<?php echo vldext_vldthemes(array('a'=>"thumbnail",'path'=>$_obj['member_media_path'],'filename'=>$_obj['member_picture'])); ?>" alt="" border="0" />
                  </a>
                  <?php } else { ?>
                  <a class="blog_entry_link" href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>">
                      <img  class="img-full img-responsive" src="<?php echo isset($_stack[0]['virtual_tpl_path']) ? $_stack[0]['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/media/content_picture_none.gif" alt="" border="0" />
                  </a>
                  <?php } ?>                                                         
              </div> 
          </div>

          <div class="col-xs-12">
              <h4 class="blog-title"><a class="nowrap " href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>"><?php echo vldext_trim($_obj['entry_title'],40); ?></a></h4>
              <div class="text-justify">
                  <?php echo vldext_trim($_obj['entry_body'],150); ?>
              </div>
              <div class="date"><i class="fa fa-calendar-o"></i> <?php echo isset($_obj['entry_date']) ? $_obj['entry_date'] : "&#123;entry_date&#125;"; ?></div>
              <div class="link">
                  <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['entry_link']) ? $_obj['entry_link'] : "&#123;entry_link&#125;"; ?>"><?php echo vldext_lang("core","home_read_more"); ?></a>
              </div>

          </div>
           </div>

		<?php } $_obj=$_stack[--$_stack_cnt];} ?>
	</div>

</div>
<?php } ?>
