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

include_once SYS_PATH . "includes/ext/ext.members.php";
 ?><!-- DISPLAY MY RECENT VISITORS -->
<?php echo vldext_members(array('limit'=>12,'orderby'=>"visitdate",'cache_time'=>0,'visitors_id'=>$SESSION->conf['member_id'],'template'=>"ext.profile_visitors.tpl")); ?>
<!-- /DISPLAY MY RECENT VISITORS -->