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