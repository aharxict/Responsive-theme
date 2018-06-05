<!-- IF app_message_type == "info" -->
<div class="content-box">
<div class="alert alert-success fade in" style="margin-top:10px;">
<a href="#" class="close" data-dismiss="alert">&times;</a>
{app_message}
</div>
</div>
<!-- ELSEIF app_message_type == "error" -->
<div class="content-box">
<div class="alert alert-danger fade in" style="margin-top:10px;">
<a href="#" class="close" data-dismiss="alert">&times;</a>
{app_message}
</div>
</div>
<!-- ENDIF -->