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

 ?><?php if ( $this->objval($_obj,'app_message_type')  == "info") { ?>
<div class="alert alert-success fade in" style="margin-top:10px;">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<?php echo isset($_obj['app_message']) ? $_obj['app_message'] : "&#123;app_message&#125;"; ?>
</div>
<?php } elseif ( $this->objval($_obj,'app_message_type')  == "error") { ?>
<div class="alert alert-danger fade in" style="margin-top:10px;">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<?php echo isset($_obj['app_message']) ? $_obj['app_message'] : "&#123;app_message&#125;"; ?>
</div>
<?php } ?>