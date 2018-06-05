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
include_once SYS_PATH . "includes/ext/core/ext.dropdownlist.php";
 ?><div class="reportbox" id="report_<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>_response<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>">
	<a href="#" onclick="showhide_field('report_<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>_box<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>');return false;"><?php echo vldext_lang("core","report"); ?></a>
	<div class="popup" id="report_<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>_box<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>">
		<div class="reason">
			<select class="select" id="report_<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>_reason<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>" name="report_<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>_reason<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>">
				<option value=""><?php echo vldext_lang("core","report_reason"); ?></option>
				<?php echo vldext_dropdownlist($PREFS->conf['reports_items'],""); ?>
			</select>
		</div>
		<div class="submit">
			<a href="#" onclick="submit_report('<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>','<?php echo isset($_obj['ext_report_member_id']) ? $_obj['ext_report_member_id'] : "&#123;ext_report_member_id&#125;"; ?>','<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>','<?php echo vldext_lang("core","report_no_reason"); ?>');return false;"><?php echo vldext_lang("core","submit"); ?></a>
		</div>
		<div class="progress" id="report_<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>_progress<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>"></div>
		<a href="#" onclick="showhide_field('report_<?php echo isset($_obj['ext_report_type']) ? $_obj['ext_report_type'] : "&#123;ext_report_type&#125;"; ?>_box<?php echo isset($_obj['ext_report_item_id']) ? $_obj['ext_report_item_id'] : "&#123;ext_report_item_id&#125;"; ?>');return false;" class="cancel"></a>
	</div>
</div>
