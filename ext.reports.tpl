<div class="reportbox" id="report_{ext_report_type}_response{ext_report_item_id}">
	<a href="#" onclick="showhide_field('report_{ext_report_type}_box{ext_report_item_id}');return false;">{lang:"core","report"}</a>
	<div class="popup" id="report_{ext_report_type}_box{ext_report_item_id}">
		<div class="reason">
			<select class="select" id="report_{ext_report_type}_reason{ext_report_item_id}" name="report_{ext_report_type}_reason{ext_report_item_id}">
				<option value="">{lang:"core","report_reason"}</option>
				{dropdownlist:settings.reports_items,""}
			</select>
		</div>
		<div class="submit">
			<a href="#" onclick="submit_report('{ext_report_type}','{ext_report_member_id}','{ext_report_item_id}','{lang:"core","report_no_reason"}');return false;">{lang:"core","submit"}</a>
		</div>
		<div class="progress" id="report_{ext_report_type}_progress{ext_report_item_id}"></div>
		<a href="#" onclick="showhide_field('report_{ext_report_type}_box{ext_report_item_id}');return false;" class="cancel"></a>
	</div>
</div>
