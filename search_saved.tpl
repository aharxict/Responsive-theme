<!-- INCLUDE header.tpl -->

<div class="header_wrap">
	<div class="location_wrap">
		<div class="location">
			<ul>
				<li>{anchor:url1="search/",url2="index.php?m=search",name="search|frm_search"}</li>
				<!-- IF hide_content != "1" -->
					<li><span>&#187;</span></li>
					<li>{anchor:url1="search/saved/",url2="index.php?m=search&p=saved",name="search|frm_saved_searches"}</li>
				<!-- ENDIF -->
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<div class="options_wrap">
		<div class="title">
			<h1>{lang:"search","app_saved_searches"}</h1>
		</div>
		<div class="options">
			<ul>
				<li>{anchor:url1="search/",url2="index.php?m=search",name="search|opt_search"}</li>
				<!-- IF session.can_advanced_search -->
					<li>{anchor:url1="search/advanced/",url2="index.php?m=search&p=advanced",name="search|opt_advanced_search"}</li>
				<!-- ENDIF -->
				<!-- IF loggedin AND settings.enable_matchmaker -->
					<li>{anchor:url1="search/matchmaker/",url2="index.php?m=search&p=matchmaker",name="search|opt_matchmaker"}</li>
				<!-- ENDIF -->
				<!-- IF loggedin AND settings.enable_saved_searches AND session.can_save_searches -->
					<li>{anchor:url1="search/saved/",url2="index.php?m=search&p=saved",name="search|opt_saved_searches",class="active"}</li>
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

	<div class="outter page_saved_searches">

		<div class="typemedia">
			<!-- BEGIN saved_searches -->
				<div class="dataitem {ifelse:rownum,"1","odd","even"} {ifelse:rowlast,"1","dataitemlast",""}">
					<table class="plain">
						<tr>
							<td class="data">
								<div class="datainfo">
									<h2 class="inner"><a href="{top.virtual_path}{search_run_link}">{search_title}</a></h2>
									<dl class="datainfo">
										<dt>{lang:"search","search_date"}:</dt>
										<dd>{search_date}</dd>
									</dl>
								</div>
							</td>
							<td>
								<div class="actions">
									<ul class="actions">
										<li class="join"><a href="{top.virtual_path}{search_run_link}" title="{lang:"search","run_search"}">{lang:"search","run_search"}</a></li>
										<!-- IF settings.enable_search_feed -->
											<li class="rss"><a href="{top.virtual_path}{search_rss_link}" title="{lang:"search","rss_feed"}">{lang:"search","rss_feed"}</a></li>
										<!-- ENDIF -->
										<li class="remove"><a href="#" onclick="javascript:confirmLink('{lang:"search","delete?"}','{top.virtual_path}{search_delete_link}')" title="{lang:"search","delete"}">{lang:"search","delete"}</a></li>
									</ul>
									<div class="clear"></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			<!-- END saved_searches -->
		</div>
		<div class="clear"></div>

	</div>

<!-- ENDIF -->

<!-- INCLUDE footer.tpl -->
