    function fadeBlend(selector1,selector2) {
        $(selector1).fadeOut(500,function(){
            $(selector2).fadeIn(500);
        });
        return false;
    }

    function openSecondRegTab() {
        var requiredFields = ["field_h_username","field_h_password","field_h_password_confirm","field_h_email","field_h_email_confirm"];
        var regvalid = true;
        $.each(requiredFields,function(i,v) {
            if(regvalid && $('#'+v).val() == "") {
                $('#'+v).focus();
                regvalid = false;
            };
        });

        if(regvalid) {
            return fadeBlend('#vt_reg_tab1','#vt_reg_tab2');
        }

    }



    function openFirstRegTab() {
        return fadeBlend('#vt_reg_tab2','#vt_reg_tab1');
    }

    function validateRequired() {
        $fields = $('#regwrapper .validate_required');
        $out = true;
        $fields.each(function(i,v) {
            if($(v).val() === '') {
                $(v).parent().addClass('has-error');
                $out = false;
            }
            else {
                $(v).parent().removeClass('has-error');
            }
        });
        return $out;
    }
    function validateCurrent(el) {
        if($(el).val() !== '') {
            $(el).parent().removeClass('has-error');
        }
        else {
            $(el).parent().addClass('has-error');
        }
    }
    function openLoginTab() {
        var login_inner = $('#login_inner');
        var reg_inner = $('#reg_inner');
        console.log('test');
        reg_inner.css('display','none');
        login_inner.css('display','block');
    }

(function($) {
    function showRegTab() {
        var login_back = $('#login_back');
        var login_inner = $('#login_inner');
        var reg_inner = $('#reg_inner');
        login_back.on("click", function () {
            console.log('back');
        reg_inner.css('display','block');
        login_inner.css('display','none');
        });
    }
    function showTab() {
        var reg_block = $('#registration_block');
        reg_block.css('opacity','1')
    }
    function move_dom_elements() {
        var body = $('body');
        if (body.width() < 500) {
            console.log(body);
            var user_menu = $('#user-menu').detach();
            var inner_user_menu = $('#inner-user-menu');
            user_menu.appendTo(inner_user_menu);
        }


          //  var mobile_bottom_part = $('#mobile-bottom-part').detach();
          //  var dekstop_right_part = $('#dekstop-right-part').detach();
          //  var mobile_menu = $('#mobile_menu');
          //  var dekstop_menu = $('#top-menu>.mega-menu.menu-item-has-children>.sub-menu');
          //   mobile_top_part.prependTo(mobile_menu);
          //   mobile_bottom_part.appendTo(mobile_menu);
          //   dekstop_right_part.appendTo(dekstop_menu);
        // console.log(user_menu);
        // console.log(inner_user_menu);

    }
    $(window).load(function() {
        setTimeout(function() {
            showRegTab();
        }, 500);
        setTimeout(function() {
            showTab();
        }, 100);
        setTimeout(function() {
            move_dom_elements();
        }, 100);
    });

    })(jQuery);
