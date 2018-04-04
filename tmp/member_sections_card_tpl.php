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
 ?><?php if ( $this->objval($_obj,'member_type_label')  == "members") { ?>
	<?php if ( $this->objval($_obj,'profile_field_age_name') ) { ?>
		<dt style="float:left;"><?php echo vldext_lang("core","userinfo_age"); ?>:</dt>
		<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['profile_field_age_value_years']) ? $_obj['profile_field_age_value_years'] : "&#123;profile_field_age_value_years&#125;"; ?>&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<?php } ?>
	<?php if ( $this->objval($_obj,'profile_field_gender1_name') ) { ?>
		<dt style="float:left;"><?php echo vldext_lang("core","userinfo_gender"); ?>:</dt>
		<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['profile_field_gender1_value']) ? $_obj['profile_field_gender1_value'] : "&#123;profile_field_gender1_value&#125;"; ?>&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<?php } ?>
	<?php if ( $this->objval($_obj,'profile_field_gender2_name') ) { ?>
		<dt style="float:left;"><?php echo vldext_lang("core","userinfo_seeking"); ?>:</dt>
		<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['profile_field_gender2_value']) ? $_obj['profile_field_gender2_value'] : "&#123;profile_field_gender2_value&#125;"; ?>&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<?php } ?>
	<?php if ( $this->objval($_obj,'profile_field_country_name')  ||  $this->objval($_obj,'profile_field_city_name') ) { ?>
		<dt style="float:left;"><?php echo vldext_lang("core","userinfo_location"); ?>:</dt>
		<dd style="float:left; padding-left:7px;"><?php echo isset($_obj['profile_field_country_value']) ? $_obj['profile_field_country_value'] : "&#123;profile_field_country_value&#125;"; ?><?php if ( $this->objval($_obj,'profile_field_city_value') ) { ?>, <?php echo isset($_obj['profile_field_city_value']) ? $_obj['profile_field_city_value'] : "&#123;profile_field_city_value&#125;"; ?><?php } ?>&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<?php } ?>
<?php } ?>