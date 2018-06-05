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
 ?><div class="ratingbox">
	<div class="selection" id="rating_<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>_box<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>" onmouseout="ratingstar_reset('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>)">
		<div id="rating_<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>_response<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>" <?php if ( $this->objval($_obj,'ext_rating_force_locked') ) { ?>title="<?php echo isset($_obj['ext_rating_score']) ? $_obj['ext_rating_score'] : "&#123;ext_rating_score&#125;"; ?>"<?php } elseif ( $this->objval($_obj,'ext_rating_locked') ) { ?>title="<?php echo vldext_lang("core","rating_submitted"); ?>"<?php } ?>>
			<a onclick="submit_rating('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_member_id']) ? $_obj['ext_rating_member_id'] : "&#123;ext_rating_member_id&#125;"; ?>,<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,1);return false;" onmouseover="ratingstar_toggle('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,1);return false;" href="#" id="ratingstar<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>__1"></a><!--
			--><a onclick="submit_rating('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_member_id']) ? $_obj['ext_rating_member_id'] : "&#123;ext_rating_member_id&#125;"; ?>,<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,2);return false;" onmouseover="ratingstar_toggle('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,2);return false;" href="#" id="ratingstar<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>__2"></a><!--
			--><a onclick="submit_rating('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_member_id']) ? $_obj['ext_rating_member_id'] : "&#123;ext_rating_member_id&#125;"; ?>,<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,3);return false;" onmouseover="ratingstar_toggle('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,3);return false;" href="#" id="ratingstar<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>__3"></a><!--
			--><a onclick="submit_rating('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_member_id']) ? $_obj['ext_rating_member_id'] : "&#123;ext_rating_member_id&#125;"; ?>,<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,4);return false;" onmouseover="ratingstar_toggle('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,4);return false;" href="#" id="ratingstar<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>__4"></a><!--
			--><a onclick="submit_rating('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_member_id']) ? $_obj['ext_rating_member_id'] : "&#123;ext_rating_member_id&#125;"; ?>,<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,5);return false;" onmouseover="ratingstar_toggle('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>',<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>,5);return false;" href="#" id="ratingstar<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>__5"></a>
		</div>
	</div>
	<?php if ( $this->objval($_obj,'ext_rating_force_locked') ) { ?>
		<div class="scores" <?php if ( $this->objval($_obj,'ext_rating_hide_score') ) { ?>style="display:none"<?php } ?>>
			<?php echo vldext_lang("core","rating_score"); ?>:
			<span id="rating_<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>_score<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>"><?php echo isset($_obj['ext_rating_score']) ? $_obj['ext_rating_score'] : "&#123;ext_rating_score&#125;"; ?></span>
			<?php echo vldext_lang("core","rating_votes"); ?>:
			<span id="rating_<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>_votes<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>"><?php echo isset($_obj['ext_rating_votes']) ? $_obj['ext_rating_votes'] : "&#123;ext_rating_votes&#125;"; ?></span>&nbsp;
		</div>
		<?php if ( $this->objval($_obj,'ext_rating_hide_score') ) { ?>&nbsp;<?php } ?>
	<?php } else { ?>
		<div class="scores">
			<?php echo vldext_lang("core","rating_score"); ?>:
			<span id="rating_<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>_score<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>"><?php echo isset($_obj['ext_rating_score']) ? $_obj['ext_rating_score'] : "&#123;ext_rating_score&#125;"; ?></span>
			<?php echo vldext_lang("core","rating_votes"); ?>:
			<span id="rating_<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>_votes<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>"><?php echo isset($_obj['ext_rating_votes']) ? $_obj['ext_rating_votes'] : "&#123;ext_rating_votes&#125;"; ?></span>
		</div>
		<div class="progress" id="rating_<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>_progress<?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?>"></div>
	<?php } ?>
</div>
<script type="text/javascript" language="javascript">ratingstar_reset('<?php echo isset($_obj['ext_rating_type']) ? $_obj['ext_rating_type'] : "&#123;ext_rating_type&#125;"; ?>', <?php echo isset($_obj['ext_rating_item_id']) ? $_obj['ext_rating_item_id'] : "&#123;ext_rating_item_id&#125;"; ?><?php if ( $this->objval($_obj,'ext_rating_locked') ) { ?>, 1<?php } ?>);</script>
