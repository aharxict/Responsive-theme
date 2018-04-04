<!-- IF loggedin -->
<!-- LEFT SIDEBAR, MEMBER PICTURE -->
<div class="col-sm-4 col-leftside">
<div class="blog-post blog-single-post" style="padding:5px !important;">

<!-- IF session.picture AND session.picture_active -->
    						<a href="{top.virtual_path}{session.username}"><img src="{top.virtual_pic_path}{session.media_path}{session.picture_large}" alt="" border="0" /></a>
							<!-- ELSE -->
                            <a href="{top.virtual_path}{session.username}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" /></a>
                            <!-- ENDIF -->
</div>
<!-- INCLUDE ext.member_sidebar.tpl -->
<!-- INCLUDE ext.search.tpl -->
</div>
<!-- /LEFT SIDEBAR, MEMBER PICTURE -->

<!-- ELSE -->

<!-- LEFT SIDEBAR, LOGIN FORM -->
<div class="col-sm-4 col-leftside">
<div class="blog-post blog-single-post" style="margin-bottom:7px;">
<div class="single-post-title" style="border-bottom: 2px dotted #CCC; margin-bottom:15px;">
<h2>{lang:"core","login_header"}</h2>
</div>

<form method="post" name="login" action="{virtual_path}{ifelse:settings.fancy_urls,"1","account/login/","index.php?m=account_login"}">
<div class="fieldset">
<dl class="fieldset">
<dt><label for="loginbox_username">{lang:"core","login_username"}</label></dt>
<dd><input id="loginbox_username" maxlength="64" size="10" type="text" name="username" value="" class="text username form-control" /></dd>
<dt><label for="loginbox_password">{lang:"core","login_password"}</label></dt>
<dd><input id="loginbox_password" maxlength="32" size="10" type="password" name="password" value="" class="text password form-control" /></dd>
<dt><div style="line-height:26px;"><input type="checkbox" name="nonxpcookie" value="1" class="checkbox" id="loginbox_nonxpcookie" style="float:left; margin-right:7px;" /> <label for="loginbox_nonxpcookie" style="float:left;">{lang:"core","login_remember_me"}</label></div><div class="clearfix"></div></dt>
<dd class="submit"><input type="submit" name="login" value="{lang:"core","login_submit"}" class="submit btn" /></dd>
</dl>
</div>
<input type="hidden" name="islogin" value="1" />
<div class="itemfooter" style="padding-top:10px;">
<span class="glyphicon glyphicon-lock" style="padding-right:8px;"></span><span style="padding-right:10px;">{anchor:url1="account/lostpass/",url2="index.php?m=account_lostpass",name="core|login_forgot_pass"}</span>
</div>
</form>
</div>
</div>

<!-- /LEFT SIDEBAR, LOGIN FORM -->
<!-- ENDIF -->