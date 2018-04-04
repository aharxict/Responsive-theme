<div class="sidebox_wrap">
	<h5><span>{lang:"core","order_filters"}</span></h5>
	<div class="sidebox">
		<form name="form_filter" action="" method="post">
			<div class="fieldset">
				<dl class="fieldset">
					<dt><label for="field_orderby">{lang:"core","order_browse"}</label></dt>
					<dd><select class="select" name="orderby" id="field_orderby">{dropdownlist:orderby_box,pictures_orderby}</select></dd>
					<dt style="display:none"><label for="field_direction">{lang:"core","order_direction"}</label></dt>
					<dd style="display:none"><select class="select" name="direction" id="field_direction">{dropdownlist:direction_box,pictures_direction}</select></dd>
					<dt><label for="field_kwds">{lang:"core","order_search"}</label></dt>
					<dd><input name="kwds" type="text" class="text" id="field_kwds" value="" maxlength="128" /></dd>
					<dd class="submit"><input class="submit" name="submit" value="{lang:"core","submit"}" type="submit" /></dd>
				</dl>
				<div class="clear"></div>
			</div>
			<input type="hidden" name="isfilter" value="1" />
		</form>
	</div>
</div>
