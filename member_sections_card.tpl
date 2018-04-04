<!-- IF member_type_label == "members" -->
	<!-- IF profile_field_age_name -->
		<dt style="float:left;">{lang:"core","userinfo_age"}:</dt>
		<dd style="float:left; padding-left:7px;">{profile_field_age_value_years}&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<!-- ENDIF -->
	<!-- IF profile_field_gender1_name -->
		<dt style="float:left;">{lang:"core","userinfo_gender"}:</dt>
		<dd style="float:left; padding-left:7px;">{profile_field_gender1_value}&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<!-- ENDIF -->
	<!-- IF profile_field_gender2_name -->
		<dt style="float:left;">{lang:"core","userinfo_seeking"}:</dt>
		<dd style="float:left; padding-left:7px;">{profile_field_gender2_value}&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<!-- ENDIF -->
	<!-- IF profile_field_country_name OR profile_field_city_name -->
		<dt style="float:left;">{lang:"core","userinfo_location"}:</dt>
		<dd style="float:left; padding-left:7px;">{profile_field_country_value}<!-- IF profile_field_city_value -->, {profile_field_city_value}<!-- ENDIF -->&nbsp;</dd>
        <div class="clearfix" style="margin-bottom:7px;"></div>
	<!-- ENDIF -->
<!-- ENDIF --->