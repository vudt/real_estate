jQuery(document).ready(function(){
    Builder.initSubMenu();
    Builder.initScrollTop();
    Builder.initGalleria();
    Builder.intitUtilityTab();
    Builder.init_niceScroll();
    //Builder.initDatePicker();
    Builder.initAjaxTypeofEstate();
    Builder.initLocation('.user_post');
    Builder.initGoogleMap();
    //https://maps.googleapis.com/maps/api/geocode/json?address=10%2051%2029N,%20106%2044%2019E&key=AIzaSyC_rmx9OrmjuAs5_9Sl6eJ2dVf_VqslyWo
});

var Builder = {
    
    initGoogleMap: function() {
        if ($('#map_canvas').length == 0) return;
        
        var map = null;
        var marker = null;
        // set static address
        var addressReturn = 'ABC 4156 789';
        // set static latlng
        var latlng = new google.maps.LatLng(10.857805, 106.7377889);
        // init InfoWindow
        var infoWindow = new google.maps.InfoWindow();
        // Set map options
        var myOptions = {
            zoom: 16,
            center: latlng,
            panControl: true,
            zoomControl: true,
            scaleControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        
        // Create map object with options
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        
        // Create and set the marker
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            position: latlng
        });
        
        Builder.showAddress(marker, map, infoWindow, addressReturn);
        
        // Register Custom "Click" Event on map
        google.maps.event.addListener(map, 'click', function(event){
            Builder.placeMarker(marker, map, infoWindow, event.latLng, addressReturn);
        });
        
        Builder.dragEvent(marker, map, infoWindow, addressReturn);
    },
    
    dragEvent: function(marker, map, infoWindow, addressReturn){
        // Register Custom "dragstart" Event
        google.maps.event.addListener(marker, 'dragstart', function(){
            infoWindow.close()
        });
        // Register Custom "dragend" Event
        google.maps.event.addListener(marker, 'dragend', function() {
            // Get the Current position, where the pointer was dropped
            var point = marker.getPosition(); 
            // Center the map at given point
            map.panTo(point); 
            // Update address after drop & drag
            Builder.getAddress(point, map, marker, infoWindow, addressReturn); 
        });
    },
    
    placeMarker: function(marker, map, infoWindow, location, addressReturn) {
        if(marker == undefined) {
            marker = new google.maps.Marker({
                map: map,
                position: location,
                draggable: true
            });
        }else {
            marker.setPosition(location);
        }
        Builder.dragEvent(marker, map, infoWindow, location);
        // Update address after drop & drag
        Builder.getAddress(location, map, marker, infoWindow, addressReturn); 
        map.setCenter(location);
    },
    
    showAddress: function(marker, map, infoWindow, address){
        infoWindow.setContent("<span id='address'><b>Địa chỉ : </b>" + address + "</span>");
        infoWindow.open(map, marker);
    },
    
    getAddress: function(point, map, marker, infoWindow, addressReturn){
        var latlng = new google.maps.LatLng(point.lat(), point.lng());
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({ 'latLng': latlng }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if(results[0]) {
                    infoWindow.setContent("<span id='address'><strong> Địa chỉ : </strong>" + results[0].formatted_address  + "</span>");
                    addressReturn = results[0].formatted_address;
                    infoWindow.open(map, marker);
                }
            } 
        });
        map.setCenter(point);
    },
    
    initAjaxTypeofEstate: function(){
        if($('.user_post').length == 0) return;
        $("select[name='type_real_estate']").change(function(){
            var val = $(this).find('option:selected').val();
            var options = '';
            $.ajax({
                type: 'POST',
                url: ajaxObj.ajax_url,
                cache: false,
                dataType: 'json',
                data: {
                    action: 'cb_ajax',
                    val: val,
                    type: 'typeof'
                },
                success: function(data, textStatus, jqXHR) {
                    if(data.length > 0) {
                        $(data).each(function(i){
                            options += '<option value="' + data[i].term_id + '">' + data[i].name + '</option>'
                        });
                        $("select[name='child-of-type']").empty();
                        $(options).appendTo("select[name='child-of-type']");
                    }
                }
            });
        });
    },
    
    initLocation: function(element) {
        if ($(element).length == 0) return;
        $(element).on('change', '.cbb', function() {
            var type = $(this).attr('id');
            var val = $(this).find('option:selected').val();
            
            $.ajax({
                type: 'POST',
                url: ajaxObj.ajax_url,
                cache: false,
                dataType: 'json',
                data: {
                    action: 'cb_ajax',
                    type: type,
                    val: val
                },
                success: function(data, textStatus, jqXHR) {
                    if (data.length > 0) {   
                        if (type == 'province') {
                            var options = '<option value="0"> -- Quận/Huyện -- </option>';
                            $(data).each(function(i) {
                                options += '<option value="' + data[i].value + '">' + data[i].name + '</option>'
                            })
                            $('#district').empty();
                            $('#wards').empty();
                            $('<option value="0"> -- Phường/Xã -- </option>').appendTo('#wards');
                            $(options).appendTo('#district');
                        } else if (type == 'district') {
                            var options = '';
                            $(data).each(function(i) {
                                options += '<option value="' + data[i].value + '">' + data[i].name + '</option>'
                            })
                            $('#wards').empty();
                            $(options).appendTo('#wards');
                        }
                    } 
                }
            });
        });
    },
    
    initDatePicker: function(){
        if($('.date-picker').length == 0) return;
        $('.date-picker').datepicker();
    },
    
    init_niceScroll: function(){
        if($('.nicescroll1').length == 0) return;
        $('.nicescroll1').niceScroll({
            cursorcolor:"#7f7f7f",
            cursorfixedheight: 35,
            autohidemode:false,
            railpadding: {top: 0, right: 5, left: 0, bottom: 0}
        });
        if($('.nicescroll2').length == 0) return;
        $('.nicescroll2').niceScroll({
            cursorcolor:"#7f7f7f",
            cursorfixedheight: 35,
            autohidemode:false,
            railpadding: {top: 0, right: 5, left: 0, bottom: 0}
        });
        if($('.nicescroll3').length == 0) return;
        $('.nicescroll3').niceScroll({
            cursorcolor:"#7f7f7f",
            cursorfixedheight: 35,
            autohidemode:false,
            railpadding: {top: 0, right: 5, left: 0, bottom: 0}
        });
    },
    
    intitUtilityTab: function (){
        $('ul.utility-tab li a').click(function (e) {
            e.preventDefault()
            $(this).tab('show');
        })
    },
    
    initGalleria: function(){
        if($('#galleria').length == 0) return;
        Galleria.loadTheme('js/galleria.classic.min.js');
        Galleria.run('#galleria', {
            autoplay: 5000,
            default: true,
            responsive: false,
            height: 480,
            width: 670,
            clicknext: true,
            imageCrop: true,
        });
    },
    
    initSubMenu: function(){
        // handle menu search
        if($('#sub-Menu').length > 0 ){
            $('#sub-Menu').click(function(){
                $('.subMenu').slideToggle('300');
            });
        }
        if($('.box-search .txtSearch').length > 0) {
            $('.box-search .txtSearch').click(function(){
                if($('.subMenu').css('display') == 'none'){
                    $('ul.nav li').each(function(){
                        $('.subMenu').slideDown('300');
                    });
                }
            });
        }
        if($('.btn-close').length > 0 ) {
            $('.btn-close').click(function(){
                $('.subMenu').slideToggle('300');
            });
        }
        // handle sMenu
        $('li.parent').mouseover(function(){
            $('.sMenu').stop().slideDown(300);
        });
        $('.sMenu').mouseleave(function(){
            $('.sMenu').stop().slideUp(300);
        });
        $('.top').mouseover(function(){
            $('.sMenu').stop().slideUp(300);
        });
        $('ul.nav li').not('.parent').mouseover(function(){
            $('.sMenu').stop().slideUp(300);
        });
    },
    
    initScrollTop: function(){
        $(window).scroll(function(){
            if($(this).scrollTop() > 300) {
                $('.scrollTop').fadeIn();
            }else {
                $('.scrollTop').fadeOut();
            }
        });
        $('.scrollTop').click(function(){
            $('body,html').animate({scrollTop:0}, 300);
        });
    },
    
    initValidate: function() {
        if (jQuery('form.validate').length > 0) {
            var forms = jQuery('form.validate');
            forms.each(function() {
                var form = jQuery(this);
                var inputEmails = form.find('input.validateEmail');
                var types = ['Number', 'Email', 'Url'];
                var inputElements = form.find('input.required');
                var content = form.find('textarea.required');
                var selectbox = form.find('select.required');
                var radiobox = form.find('input.radrequired');

                form.find('.btn-register').click(function() {
                    var error = 0;
                    if (inputElements.length > 0) {
                        inputElements.each(function() {
                            var inputElement = jQuery(this);
                            if (!Builder.validateElement(inputElement, true)) {
                                error++;
                            }
                        });
                    }
                    if (content.length) {
                        content.each(function() {
                            if (!Builder.isNotOnlySpace(jQuery(this).val())) {
                                error++;
                                jQuery(this).addClass('error');
                                jQuery(this).parent().append('<label class="error">Vui lòng nhập đầy đủ thông tin.</label>');
                            }
                        });
                    }
                    if (radiobox.length) {
                        var groupName = new Array();
                        radiobox.each(function() {
                            var name = jQuery(this).attr('name');
                            if (jQuery.inArray(name, groupName) < 0) {
                                groupName.push(name);
                            }
                        });
                        for (var i = 0; i < groupName.length; i++) {
                            var radBox = jQuery('input[name="' + groupName[i] + '"]');
                            if (!Builder.validateRadiobox(groupName[i])) {
                                error++;
                                radBox.parents('.form-item').find('label.error').remove();
                                radBox.parents('.form-item').append('<label class="error">Vui lòng nhập đầy đủ thông tin.</label>');
                            }
                            else {
                                radBox.parents('.form-item').remove('label.error');
                            }
                        }
                    }
                    if (selectbox.length) {
                        selectbox.each(function() {
                            if (!Builder.validateSelectbox(jQuery(this))) {
                                error++;
                            } else {
                                jQuery(this).removeClass('error');
                                jQuery(this).parent().remove('label.error');
                            }
                        });
                    }
                    for (var i = 0; i < types.length; i++) {
                        var inputTypes = form.find('input.validate' + types[i]);
                        if (inputTypes.length > 0) {
                            inputTypes.each(function() {
                                var inputType = jQuery(this);
                                if (jQuery.trim(inputType.val()) !== '') {
                                    if (!Builder.validateElement(inputType, false, types[i])) {
                                        error++;
                                    }
                                }
                            });
                        }
                    }
                    if (error > 0) {
                        return false;
                    }
                });
                for (var i = 0; i < types.length; i++) {
                    var inputTypes = form.find('input.validate' + types[i]);
                    if (inputTypes.length > 0) {
                        inputTypes.each(function() {
                            var inputType = jQuery(this);
                            var error = 0;
                            inputType.keyup(function() {
                                if (inputType.val().length > 0) {
                                    if (!Builder.validateElement(inputType, false, types[i])) {
                                        error++;
                                    }
                                }
                            });
                            if (error > 0) {
                                return false;
                            }

                        });
                    }
                }
                if (selectbox.length) {
                    var error = 0;
                    selectbox.change(function() {
                        if (!Builder.validateSelectbox(jQuery(this))) {
                            error++;
                        } else {
                            error = 0;
                            jQuery(this).removeClass('error');
                            jQuery(this).parent().find('label.error').remove();
                        }
                    });
                    if (error > 0) {
                        return false;
                    }
                }
                if (radiobox.length) {
                    var error = 0;
                    radiobox.change(function() {

                        if (!Builder.validateRadiobox(jQuery(this).attr('name'))) {
                            error++;
                            jQuery(this).parents('.form-item').find('label.error').remove();
                            jQuery(this).parents('.form-item').append('<label class="error">Vui lòng nhập đầy đủ thông tin.</label>');
                        }
                        else {
                            jQuery(this).parents('.form-item').find('label.error').remove();
                        }
                    });
                }
                inputElements.each(function() {
                    var inputElement = jQuery(this);
                    var error = 0;
                    inputElement.keyup(function() {
                        if (!Builder.validateElement(inputElement, true)) {
                            error++;
                        }
                    });
                    if (error > 0) {
                        return false;
                    }
                });
            });
        }
    },
    
    isNotOnlySpace: function(sString) {
        while (sString.substring(0, 1) == ' ')
        {
            sString = sString.substring(1, sString.length);
        }
        while (sString.substring(sString.length - 1, sString.length) == ' ')
        {
            sString = sString.substring(0, sString.length - 1);
        }
        if (sString === '') {
            return false;
        }
        else {
            return true;
        }
    },
    
    validateSelectbox: function(selectBoxElement) {
        selectBoxElement.parent().find('label.error').remove();
        if ((jQuery.trim(selectBoxElement.val()) == '') || (parseInt(jQuery.trim(selectBoxElement.val())) == 0)) {
            selectBoxElement.addClass('error');
            selectBoxElement.parent().append('<label class="error">Vui lòng nhập đầy đủ thông tin.</label>');
            return false;
        }
        return true;
    },
    
    validateRadiobox: function(radioBoxName) {
        var radioBox = jQuery('input[name="' + radioBoxName + '"]');
        var check = 0;
        radioBox.each(function() {
            if (jQuery(this).is(':checked')) {
                check = 1;
            }
        });
        return check;
    },
    
    isEmail: function(val) {
        var regEmail = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
        return regEmail.test(val);
    },
    
    isUrl: function(val) {
        var regUrl = /(http|https|ftp|mailto):\/\/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
        return regUrl.test(val);
    },

    validateElement: function(inputElement, required, type, minlength) {
        if (!type) {
            type = '';
        }
        inputElement.parent().find('label.error').remove();
        inputElement.removeClass('error');
        if (required) {
            if (jQuery.trim(inputElement.val()) === '') {
                inputElement.parent().append('<label class="error">Vui lòng nhập đầy đủ thông tin.</label>');
                inputElement.addClass('error');
                return false;
            }
            if (minlength && minlength > 0) {
                if ((parseInt(minlength) > 0) && (inputElement.val().length > parseInt(minlength))) {
                    inputElement.parent().append('<label class="error">This field at least ' + parseInt(minlength) + ' characters</label>');
                    inputElement.addClass('error');
                    return false;
                }
            }
        }
        if (inputElement.hasClass('validateEmail') || inputElement.attr('type').toLowerCase() === 'email' || type.toLowerCase() === 'email') {
            if (!Builder.isEmail(inputElement.val())) {
                inputElement.parent().append('<label class="error">Email này không hợp lệ</label>');
                inputElement.addClass('error');
                return false;
            }
        }
        if (inputElement.hasClass('validateUrl') || inputElement.attr('type').toLowerCase() === 'url' || type.toLowerCase() === 'url') {
            if (!Builder.isUrl(inputElement.val())) {
                inputElement.parent().append('<label class="error">This field is url</label>');
                inputElement.addClass('error');
                return false;
            }
        }
        if ((inputElement.hasClass('validateNumber')) || (inputElement.attr('type') === 'number') || (type.toLowerCase() === 'number')) {
            if (/\D/g.test(inputElement.val()))
            {
                inputElement.val(inputElement.val().replace(/\D/g, ''));
            }
        }
        return true;
    },
    
}