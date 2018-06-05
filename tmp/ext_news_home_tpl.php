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
include_once SYS_PATH . "includes/ext/core/ext.trim.php";
include_once SYS_PATH . "includes/ext/core/ext.lang.php";
 ?><?php if ( $this->objval($_obj,'ext_news') ) { ?>
<div class="panel panel-default">
   <div class="panel-heading">News</div>
   <div class="panel-body word-break">
      <?php if (!empty($_obj['ext_news'])){ if (!is_array($_obj['ext_news'])) $_obj['ext_news']=array(array('ext_news'=>$_obj['ext_news'])); $_tmp_arr_keys=array_keys($_obj['ext_news']); if ($_tmp_arr_keys[0]!='0') $_obj['ext_news']=array(0=>$_obj['ext_news']); $_stack[$_stack_cnt++]=$_obj; $_cnt['ext_news']=count($_obj['ext_news']); foreach ($_obj['ext_news'] as $rowcnt=>$ext_news) { $ext_news['rowcnt']=$rowcnt; $ext_news['rowpos']=$rowcnt+1; $ext_news['rownum']=$rowcnt%2+1; $ext_news['rowtotal']=$_cnt['ext_news']; $ext_news['rowfirst']=$rowcnt==0?1:0; $ext_news['rowlast']=($rowcnt+1)==$_cnt['ext_news']?1:0; $_obj=&$ext_news; ?>
      <?php if ( $this->objval($_obj,'rowcnt')  > "0") { ?>

       <?php } ?>

      <div class="dataitem newsitem <?php echo vldext_ifelse($_obj['rownum'],"1","odd","even"); ?> <?php echo vldext_ifelse($_obj['rowlast'],"1","dataitemlast",""); ?>">
          <?php if ( $this->objval($_obj,'news_picture') ) { ?>
  
          <div class="image">
              <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['news_link']) ? $_obj['news_link'] : "&#123;news_link&#125;"; ?>"><img src="<?php echo isset($_stack[0]['virtual_pic_path']) ? $_stack[0]['virtual_pic_path'] : "&#123;virtual_pic_path&#125;"; ?><?php echo isset($_obj['news_picture']) ? $_obj['news_picture'] : "&#123;news_picture&#125;"; ?>" alt="" border="0" /><br /></a>
          </div>
  
          <?php } ?>
            <div class="block">
          <h3><a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['news_link']) ? $_obj['news_link'] : "&#123;news_link&#125;"; ?>"><?php echo vldext_trim($_obj['news_title'],40); ?></a></h3>
          <em><?php echo isset($_obj['news_date']) ? $_obj['news_date'] : "&#123;news_date&#125;"; ?></em>
          <p><?php echo vldext_trim($_obj['news_body'],120); ?> </p>
          <a href="<?php echo isset($_stack[0]['virtual_path']) ? $_stack[0]['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo isset($_obj['news_link']) ? $_obj['news_link'] : "&#123;news_link&#125;"; ?>"><?php echo vldext_lang("core","home_read_more"); ?></a>
            </div>
      </div>
      <?php } $_obj=$_stack[--$_stack_cnt];} ?>
  </div>
</div>
<?php } ?>
