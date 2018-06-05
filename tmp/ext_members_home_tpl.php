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
 ?><?php if ( $this->objval($_obj,'ext_members') ) { ?>
    <?php if (!empty($_obj['ext_members'])){ if (!is_array($_obj['ext_members'])) $_obj['ext_members']=array(array('ext_members'=>$_obj['ext_members'])); $_tmp_arr_keys=array_keys($_obj['ext_members']); if ($_tmp_arr_keys[0]!='0') $_obj['ext_members']=array(0=>$_obj['ext_members']); $_stack[$_stack_cnt++]=$_obj; $_cnt['ext_members']=count($_obj['ext_members']); foreach ($_obj['ext_members'] as $rowcnt=>$ext_members) { $ext_members['rowcnt']=$rowcnt; $ext_members['rowpos']=$rowcnt+1; $ext_members['rownum']=$rowcnt%2+1; $ext_members['rowtotal']=$_cnt['ext_members']; $ext_members['rowfirst']=$rowcnt==0?1:0; $ext_members['rowlast']=($rowcnt+1)==$_cnt['ext_members']?1:0; $_obj=&$ext_members; ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
             <?php $_temp_inc = $TEMPLATE->output('webffo_profile.tpl',0); include($_temp_inc); ?>
            </div>
    <?php } $_obj=$_stack[--$_stack_cnt];} ?>	
<?php } else { ?>
<p class="text-center">
    <span class="vt_usrn glyphicon glyphicon-user"></span>
    <span class="vt_usrm glyphicon glyphicon-remove text-danger"></span>
    <br>
    <?php echo vldext_vldthemes(array('a'=>"lang",'key'=>"nomembers")); ?>
</p>

<?php } ?>            