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
include_once SYS_PATH . "includes/ext/core/ext.ifelse.php";
include_once SYS_PATH . "includes/ext/core/ext.htmlentities.php";
 ?></div>
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
							<li class="facebook"><a href="http://www.facebook.com/#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li class="google"><a href="http://plus.google.com/#" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
							<li class="twitter"><a href="http://www.twitter.com/#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
							<li class="youtube"><a href="http://www.youtube.com/#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
						</ul>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">
                        <span style="text-transform:uppercase;">
                        <?php if ( $this->objval($_obj,'loggedin')  == "0") { ?>
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>" style="color: #E4E4E4;"><?php echo vldext_lang("core","menu_index"); ?></a>
                        <?php } else { ?>
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","account/home/","index.php?m=account_home"); ?>" style="color: #E4E4E4;"><?php echo vldext_lang("core","menu_index"); ?></a>
                        <?php } ?>
                        </span> | 
                        <?php if ( @$PREFS->conf['enable_tellfriend']  ||  @$PREFS->conf['enable_openinviter'] ) { ?>
                        <span style="text-transform:uppercase;">
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","invitefriends/","index.php?m=invitefriends"); ?>" style="color: #E4E4E4;"><?php echo vldext_lang("core","menu_invitefriends"); ?></a>
                        </span> | 
                        <?php } ?>
                        <?php if ( @$PREFS->conf['enable_feedback'] ) { ?>
                        <span style="text-transform:uppercase;">
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","contactus/","index.php?m=contactus"); ?>" style="color: #E4E4E4;"><?php echo vldext_lang("core","menu_contactus"); ?></a>
                        </span> | 
                        <?php } ?>
                        <span style="text-transform:uppercase;">
                        <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?><?php echo vldext_ifelse($PREFS->conf['fancy_urls'],"1","page/tos/","index.php?m=tos"); ?>" style="color: #E4E4E4;"><?php echo vldext_lang("core","menu_tos"); ?></a>
                        </span>
                        <br /><div style="padding-top:5px;">&copy; 2016 <a href="<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>" style="color: #7C7C7C;"><?php echo vldext_htmlentities($PREFS->conf['app_title']); ?></a></div>
                        </div>
		    		</div>
		    	</div>
		    </div>
	    </div>

<?php if ( $this->objval($_obj,'loggedin')  &&  @$PREFS->conf['enable_chat']  &&  @$SESSION->conf['can_chat'] ) { ?>
	<?php $_temp_inc = $TEMPLATE->output('footer_panel.tpl',0); include($_temp_inc); ?>
<?php } ?>

<!-- Javascripts -->
<!--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/js/jquery-1.9.1.min.js"><\/script>')</script>-->
<script src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/js/scrolling-nav.js"></script>


<script src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/js/custom.js"></script>

<script type="text/javascript" language="javascript">
 //<![CDATA[
var virpath = "<?php echo isset($_obj['virtual_path']) ? $_obj['virtual_path'] : "&#123;virtual_path&#125;"; ?>";
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

<script type="text/javascript" src="<?php echo isset($_obj['virtual_tpl_path']) ? $_obj['virtual_tpl_path'] : "&#123;virtual_tpl_path&#125;"; ?><?php echo isset($SESSION->conf['template']) ? $SESSION->conf['template'] : "&#123;template&#125;"; ?>/js/jquery.nivo.slider.js"></script>
</body>
</html>