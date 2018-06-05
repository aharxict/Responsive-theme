</div>
<!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3 style="padding-bottom:5px;">Jew-Friends.eu</h3>
		    			<p style="line-height:1.7em;">Die Alternative um juedische Bekannte, Freunde und mehr zu finden. Viele Glueck.</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3 style="padding-bottom:5px;">Kundendienst</h3>
						<p style="line-height:1.7em;">Du hast eine Frage, ein Problem? Gerne helfen wir Dir schnellstmoeglich.</p>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3 style="padding-bottom:5px;">Folge uns:</h3>
		    			<ul class="social">
							<li class="facebook"><a href="https://www.facebook.com/JewFriends.eu/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li class="google"><a href="mailto:info@jew-friends.eu"><i class="fa fa-envelope-square"></i></a></li>
							<!--
							<li class="twitter"><a href="http://www.twitter.com/#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
							<li class="youtube"><a href="http://www.youtube.com/#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
						 -->
						</ul>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">
                        <span style="text-transform:uppercase;">
                        <!-- IF loggedin == "0" -->
                        <a href="{virtual_path}" style="color: #E4E4E4;">{lang:"core","menu_index"}</a>
                        <!-- ELSE -->
                        <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","account/home/","index.php?m=account_home"}" style="color: #E4E4E4;">{lang:"core","menu_index"}</a>
                        <!-- ENDIF -->
                        </span> | 
                        <!-- IF settings.enable_tellfriend OR settings.enable_openinviter -->
                        <span style="text-transform:uppercase;">
                        <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","invitefriends/","index.php?m=invitefriends"}" style="color: #E4E4E4;">{lang:"core","menu_invitefriends"}</a>
                        </span> | 
                        <!-- ENDIF -->
                        <!-- IF settings.enable_feedback -->
                        <span style="text-transform:uppercase;">
                        <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","contactus/","index.php?m=contactus"}" style="color: #E4E4E4;">{lang:"core","menu_contactus"}</a>
                        </span>  |
                        <!-- ENDIF -->
						<span style="text-transform:uppercase;">
                        <a href="{virtual_path}{ifelse:settings.fancy_urls,"1","page/tos/","index.php?m=tos"}" style="color: #E4E4E4;">{lang:"core","menu_tos"}</a>
                        </span>

                        <br /><div style="padding-top:5px;">&copy; 2018 <a href="{virtual_path}" style="color: #fff;">{htmlentities:settings.app_title}</a></div>
                        </div>
		    		</div>
		    	</div>
		    </div>
	    </div>

<!-- IF loggedin AND settings.enable_chat AND session.can_chat -->
	<!-- INCLUDE footer_panel.tpl -->
<!-- ENDIF -->

<!-- Javascripts -->
<!--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="{virtual_tpl_path}{session.template}/js/jquery-1.9.1.min.js"><\/script>')</script>-->
<script src="{virtual_tpl_path}{session.template}/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="{virtual_tpl_path}{session.template}/js/jquery.easing.min.js"></script>
<script src="{virtual_tpl_path}{session.template}/js/scrolling-nav.js"></script>


<script src="{virtual_tpl_path}{session.template}/js/custom.js"></script>

<script type="text/javascript" language="javascript">
 //<![CDATA[
var virpath = "{virtual_path}";
$(document).ready(function(){
    $("#usernav ul li").hover(
        function() { $(this).addClass("shover"); },
        function() { $(this).removeClass("shover"); }
    );
   // if($('#reg_inner').length > 0) {
     //   $('#reg_inner').load(virpath+'account/register #regwrapper',function(data) {
       // });
        //console.log('true');
       // console.log(virpath);
    //}
});
 (function ($) {
     if($('#reg_inner').length > 0) {
         $('#reg_inner').load(virpath+'account/register #regwrapper',function(data) {
         });
         //console.log('true');
         // console.log(virpath);
     }
     if($('#login_inner').length > 0) {
         $('#login_inner').load(virpath+'account/login .form',function(data) {
         });
         //console.log('true');
         // console.log(virpath);
     }
 })(jQuery);
//]]>
</script>

<script type="text/javascript" src="{virtual_tpl_path}{session.template}/js/jquery.nivo.slider.js"></script>
</body>
</html>