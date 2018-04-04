<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li>{anchor:url1="account/settings/",url2="index.php?m=account_settings",name="privacy|frm_settings"}</li>
				<li><span>&#187;</span></li>
				<li>{anchor:url1="account/privacy/",url2="index.php?m=account_privacy",name="privacy|frm_privacy"}</li>
				<li><span>&#187;</span></li>
				<li>{anchor:url1="account/privacy/cancel/",url2="index.php?m=account_privacy&p=cancel",name="privacy|frm_cancel"}</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{lang:"privacy","app_cancel"}</h1>
		</div>
		<div class="options">
			<ul>
				<li>{anchor:url1="account/settings/",url2="index.php?m=account_settings",name="privacy|opt_settings"}</li>
				<li>{anchor:url1="account/notifications/",url2="index.php?m=account_notifications",name="privacy|opt_notifications"}</li>
				<!-- IF session.can_change_privacy_settings -->
					<li>{anchor:url1="account/privacy/",url2="index.php?m=account_privacy",name="privacy|opt_privacy",class="active"}</li>
				<!-- ENDIF -->
				<!-- IF app_license == "commercial" -->
					<!-- IF settings.enable_upgrades AND session.can_upgrade_account -->
						<li>{anchor:url1="account/upgrade/",url2="index.php?m=account_upgrade",name="privacy|opt_upgrade"}</li>
					<!-- ENDIF -->
					<!-- IF settings.enable_credits -->
						<li>{anchor:url1="account/upgrade/credits/",url2="index.php?m=account_upgrade&p=credits",name="privacy|opt_credits"}</li>
					<!-- ENDIF -->
				<!-- ENDIF -->
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<!-- INCLUDE message.tpl -->

<!-- IF hide_content != "1" -->

	<div class="outter page_account_privacy">

		<form name="edit" method="post" action="">
			<div class="typepage">
				<div class="dataitem single">
					<div class="data">
						{lang:"privacy","cancel?"}
						<div class="fieldset">
							<dl class="fieldset">
								<dd class="submit">
									<input type="submit" class="submit" name="yes" value="{lang:"core","yes"}" title="{lang:"core","yes"}" />&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="button" class="submit" name="no" onclick="javascript:history.go(-1)" value="{lang:"core","no"}" title="{lang:"core","no"}" />
								</dd>
							</dl>
						</div>
						<input type="hidden" name="iscancel" value="1" />
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</form>
	</div>

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
