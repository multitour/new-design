$(function(){

          try {
                $('.photo_mini_pane').jScrollPane(
                    {showArrows: true}
                );
            } catch (e) {}

             try {
                var pull        = $('.menu-mobil');
                    menu        = $('.transport_menu > ul, .tourist_menu > ul');
                    menuHeight  = menu.height();

                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });

                $(window).resize(function(){
                   var w=$(window).width();
                    if(w>570){
                        $('.tourist_menu > ul').removeAttr('style');
                        
                    }                   
                });

  } catch (e) {}

            try {
                        // var maskOpts = {
                        //             inputmask: {
                        //                 definitions: {
                        //                     '#': {
                        //                         validator: "[0-9]",
                        //                         cardinality: 1
                        //                     }
                        //                 }
                        //             },
                        //             match: /[0-9]/,
                        //             replace: '#'
                        // };
                            
                        // $('.form_registr .data_phone').inputmask("+#(###)############", maskOpts.inputmask);
                            var maskList = $.masksSort($.masksLoad("js/phones-ru.json"), ['#'], /[0-9]|#/, "mask");
        var maskOpts = {
            inputmask: {
                definitions: {
                    '#': {
                        validator: "[0-9]",
                        cardinality: 1
                    }
                },
                //clearIncomplete: true,
                // showMaskOnHover: false,
                autoUnmask: true
            },
            match: /[0-9]/,
            replace: '#',
            list: maskList,
            listKey: "mask"
        };
    $('#customer_phone').keyup(function() {
            $(this).inputmasks(maskOpts);
        });
    $('#customer_phone').inputmasks(maskOpts);
            
            } catch (e) {}
                
});

$(function () {

    $('.lk').on('click', '.lk.dotted', function () {
        $('.authPopUp').show();
        return false;
    });
    $('.authPopUp .popup .btn-close').on('click', function() {
        $(this).closest('.authPopUp').hide();
    });
    
    try {
        $('img[src^="/public"]').each(function (e) {
            $img = $(this);
            $img.attr('src', "http://www.multitour.ru" + $img.attr('src'));
        })
    } catch (e) {

    }

    /*Страница отеля*/

  (function () {
        /*новая страница*/
        $('div.f-left.select').on('click', 'a.a_s', function() {
            $parent = $(this).parent();
            if($parent.hasClass("popup")) {
                $parent.removeClass("popup");
            }
            else {
                $('div.f-left.select').removeClass("popup");
                $parent.addClass("popup");
            }
            return false;
        });
        $('body').click(function (ev) {
            var $blocks = $('div.f-left.select.popup');

            if ($(ev.target).closest('div.f-left.select.popup').length == 0) {
                $blocks.removeClass("popup");
            }
        });
    })();
    
    

    try {

        $("#datepicker1, #datepicker2, #dateBegin, #dateEnd").datepicker({
            // showOn: "button",
            buttonImage: "img/calendar.gif",
            buttonImageOnly: true,
            buttonText: 'выберите дату',
            dateFormat: 'dd.mm.y',
            onClose: function (selectedDate) {
                $("#datepicker1, #datepicker2, #dateBegin, #dateEnd").blur();
            } 
        });

        $('#gallery').jcarousel({
            start: 0
        });

        $("img.reflect").reflect();

        //$('a.fancybox').fancybox();

        $(".various").fancybox({
            //maxWidth  : 800,
            //maxHeight : 600,
            padding: 0,
            margin: 15,
            fitToView: false,
            width: '50%',
            height: 573,
            autoSize: false,
            //            closeClick: false,
            //            openEffect: 'none',
            //            closeEffect: 'none',
            //            type: 'iframe'
            prevEffect: 'none',
            nextEffect: 'none',
            titlePosition: 'inside',


            helpers: {
                thumbs: {
                    width: 50,
                    height: 50,
                    position: "bottom"
                },
                buttons: {
                    position: 'bottom'
                },
                title: {
                    type: 'inside' // 'float', 'inside', 'outside' or 'over'
                }
            }
        });
        $('.photo_mini_pane').on('click', '.preview', function() {
            $('.photo_mini_pane .preview').removeClass('active');
            $this = $(this);
            $this.addClass('active');
            var ind = $this.index();

            $fancyImg = $('.hotel_action_gallery .photo_big .various');
            $fancyImg.removeClass('cur');
            $fancyImg.eq(ind).addClass('cur');
        });

        $(".certivicate_list a").fancybox({
            closeBtn: false,
            titlePosition: 'inside',
            helpers: {

                title: {
                    type: 'inside'
                }
            }
        });

        var isShow = false;
        $('.desc_hotel .map_link').click(function () {
            $link = $(this);
            //var h = $('.desc_hotel').height();
            if ($link.hasClass('v')) {
                $link.removeClass('v');
                $link.next().slideUp(500);
                //$('.desc_hotel').animate({ "height": h - 305 }, 500, function () { });
            }
            else {
                $link.addClass('v');
                $link.next().slideDown(500);
                //$('.desc_hotel').animate({ "height": h + 305 }, 500, function () { });
            }
            try {
                if (!isShow) {
                    window.setTimeout(function () {
                        if (!$link.hasClass('v'))
                            $link.next().show();
                        initHotelAdressYandex()
                    }, 500);
                    isShow = true;
                }
            } catch (e) {

            }
            return false;
        });

        (function () {
            $placement = $('.desc_hotel span.db:contains("Размещение")');
            if ($placement.length > 0) {
                $placement.after("&nbsp;<span class=\"button_bron\">забронировать</span>");
            }
            $('._contentHotelWrapper').on('click', '.button_bron', function() {
                if(isAuth) {
                    window.location = '/site/hotel/' + $(this).closest('._contentHotelWrapper').attr('data-hotelId') + '?section=price';
                } else {
                     $('.authPopUp').fadeIn(200);
                }
            });

            $lastDescr = $('.desc_hotel').children('.pb').last();
            if($lastDescr.length > 0) {
                $lastDescr.append('&nbsp;&nbsp;<a href="/site/hotel/' + $lastDescr.closest('._contentHotelWrapper').attr('data-hotelId') + '?section=map" class="more">Подробнее</a>');
            }
            $lastAction = $('.desc_hotel span.db-green:contains("Акция")').last();
            if($lastAction.length > 0) {
                $lastAction.parent().append('<a class="more" href="/site/hotel/' + $lastAction.closest('._contentHotelWrapper').attr('data-hotelId') + '?section=actions">Все акции</a>')
            }

        })();
        $('.all_desc_hotel').click(function () {

            if ($(this).hasClass('noall_desc_hotel_active')) { $(this).text('Показать все описание'); }
            else { $(this).text('Свернуть описание'); }

            $('.noall_desc_hotel').toggleClass('noall_desc_hotel_active');

            $('.desc_hotel._full').slideToggle();

            //$('.desc_hotel_block').toggle();
            //$('.desc_hotel').css('height', '255');
            /*
            var h = 255;
            if ($('.hotel_map').is(':visible'))
            h = h + 305;

            $hotel = $('.desc_hotel');
            if ($hotel.hasClass('showAll')) { $('.desc_hotel').css('height', h); }
            else { $hotel.css('height', ''); }
            $hotel.toggleClass("showAll");*/

        });

        function showSpo() {
            if (window.location.hash == "#spo") {
                if ($('.all_desc_hotel').hasClass('noall_desc_hotel_active')) { $('.all_desc_hotel').text('Показать все описание'); }
                else { $('.all_desc_hotel').text('Свернуть описание'); }

                $('.noall_desc_hotel').toggleClass('noall_desc_hotel_active');

                $('.desc_hotel._full').slideToggle();

                $('html, body').animate({
                    scrollTop: $("a[name=spo]").offset().top
                }, 500);
            }
        }
        showSpo();

        //$('.tabs').tabs();
        $('.f-left.list_price').click(function () {

            $link = $(this);
            if ($link.hasClass('v')) {
                $link.removeClass('v');
                $link.parent().next().slideUp(500);
            }
            else {
                $link.addClass('v');
                $link.parent().next().slideDown(500);
            }

            return false;
        });
    }
    catch (e) { }

    /*Главная*/
    try {
        //var $ = jQuery = jquery_1_7_2;

        $('select').not('.no_styler').styler({ idSuffix: '' });

        $('.spo .scroll, .action .scroll, .news .scroll').jScrollPane();

        //var $ = jQuery = jquery_1_9_1;

        $('#slideshow_nav').html('<div id="nav">');
        $('#slideshow').cycle({
            fx: 'turnDown',
            speed: 'fast',
            timeout: 2000,
            pager: '#nav',
            pagerAnchorBuilder: function (idx, slide) {
                var table = '<div class="inline_block"><a href="#">' + slide.title + '</a></div>';
                return table;
            }
        });

        try {
            $('#banners_ind').cycle({
                //fx:      'scrollLeft', 
                fx: 'fade',
                speed: 4000,
                timeout: 2000,
                pause: true,
                speedIn: 1000,
                speedOut: 800,
                pager: '#bannersnav'
            });
        } catch (e) { }

        $("#datepicker").datepicker({
            showOn: "button",
            buttonImage: "/content/img/calendar.gif",
            buttonImageOnly: true,
            buttonText: 'выберите дату',
            dateFormat: 'dd.mm.y',
            onClose: function (selectedDate) {
                $("#datepicker").blur();
            }
        });



        $('.tabs .vkl').click(function () {
            var tab_id = $(this).attr('id');
            tabClick(tab_id);
        });
        function tabClick(tab_id) {
            if (tab_id != $('.tabs  .current').attr('id')) {
                //  var tabs = $('#con_' + tab_id).height();
                $('.tabs  .vkl').removeClass('current');
                $('#' + tab_id).addClass('current');
                $('.tabs .sod').removeClass('current');
                $('#con_' + tab_id).addClass('current');
                $('.tabs').css({height:tabs});
            }
        }

        var tabs_cap = $('.tabs_cap').height(), tabs = $('.tabs').height() - tabs_cap;
        $('.sod').css({ top: -tabs_cap });
        $('.box-map').css({ paddingTop: tabs_cap });
        //$('.tabs').css({height: tabs, paddingTop: 0});
        //$('.tabs_b').html(tabs);
        //$('.box-map').html(box_map);


        
    }
    catch (e) { }

    /*Просто подбор - унификация*/
    try {
        /*наличие детей - отображение фильтра по возрасту*/
        function childcheck() {
            child = $('select._child').val();
            $('div[id^=agechild], span[id^=agechild]').hide();
            $('div[id^=agechild] select, span[id^=agechild] select').prop('disabled', true);
            try { $('div[id^=agechild] select, span[id^=agechild] select').trigger('refresh'); } catch(e) {} 
            for (var i = 1; i <= child; ++i) {
                $('#agechild_' + i).show();
                $('#agechild_' + i + ' select').prop('disabled', false);
                try { $('#agechild_' + i + ' select').trigger('refresh'); } catch(e) {} 
            }
        }
        childcheck();
        $("select._child").change(function () {
            childcheck();
        });
        
        /*некий ручной аналог form.reset() по избранным элементам*/
        function serializeResettable(restore) {
            $('._resettable').each(function () {
                var $this = $(this);
                restore ? $this.val($this.data('default')) : $this.data('default', $this.val());
                try { $this.trigger('refresh'); } catch(e) {} 
                
            });
        }
        serializeResettable(false);
        $('._reset').click(function () {
            serializeResettable(true);
            try { updateDependable(); } catch(e) {} 
            return false;
        });
        
        /*количество ночей - соблюдение границ диапазона*/
        (function () {

            function NightsUpdate() {
                var val = parseInt($('select.f_nights_min').val());
                var maxVal = parseInt($('select.f_nights_min option').filter(':last').val());
                $f_nights_max = $('select.f_nights_max');
                var def_max_val = parseInt($f_nights_max.val());
                $f_nights_max.find('option').remove();
            
                for (var i = val; i <= maxVal; ++i) {
                    $f_nights_max.append("<option value=\"" + i + "\">" + i + "</option>");
                }
                if(def_max_val >= val) {
                    $f_nights_max.val(def_max_val);
                }else {
                    if ($f_nights_max.find('option').length > 1) {
                        $f_nights_max.find('option').eq(1).prop('selected', true);
                    }
                }
                try { $f_nights_max.trigger('refresh'); } catch(e) {} 
            }

            NightsUpdate();
       
            $('select.f_nights_min').change(function () {
                NightsUpdate();
            });
        })();
        
        /*выбор отеля сразу редиректит на его страницу*/
        window.redirectToHotelOrTourDirect = function() {
            var $dropBoxes = $('.podbor-mini select#f_hotel:visible, .podbor_new select#f_hotel:visible, .podbor-mini select#f_tour:visible');
            if ($dropBoxes.val() > 0) {
                var $control = $dropBoxes.first();
                var dataUri = $control.find(':selected').attr('data-uri');
                var $form = $control.parents('form').first();
                $form.attr('action', dataUri);
                var $submit = $form.find('input[type=submit]');
                $submit.attr('disabled', 'disabled');
                $form.submit();
            }
        };

        

        $('.podbor-mini select#f_hotel, .podbor_new select#f_hotel, .podbor-mini select#f_tour').change(function () {
            redirectToHotelOrTourDirect();
        });

        /*Обновление зависимостей  селекторов друг от друга*/
        function updateDependable() {
            $('.podbor-mini select._dependent, .podbor_new select._dependent').each(function () {
                var $this = $(this);
            
                var dependable = $this.attr('data-dependent');
                var $dependable = $('#' + dependable);
                var dependableValue = $this.attr('data-dependable-value');

                var newDependableValue = $dependable.val();

                if ((!newDependableValue) || (newDependableValue.length == 0) || (newDependableValue == 'all') || $dependable.data('isLoad')) {
                    newDependableValue = 0;
                }

                if (!dependableValue || (dependableValue.length == 0) || (dependableValue == 'all')) {
                    dependableValue = 0;
                }

                newDependableValue = parseInt(newDependableValue);
                dependableValue = parseInt(dependableValue);

               if (newDependableValue == dependableValue) {
                    return;
                }

                $this.attr('data-dependable-value', newDependableValue);

                var uri = $this.attr('data-uri');

                $this.data('isLoad', true);
                $this.load(uri, { id: newDependableValue }, function () {
                    $(this).find('option[value=0]').val('all');
                    $(this).data('isLoad', false);
                    try { $(this).trigger('refresh'); } catch(e) {} 
                });

            });
        }
        $('.podbor-mini select._dependable, .podbor_new select._dependable').change(updateDependable);

        /*мега-хрень для обновления фильтров из куки и крошек*/
        $(function () {
            /*ищем крошки, если их нет, то пытаемся взять из куки*/
            $forfill = $('._forFillSelector');
            if ($forfill.length <= 0 && (typeof cookieManager != 'undefined')) {
                var podborCookie = cookieManager.get_cookie("podborCookie");
                if (podborCookie != null && podborCookie != "" && podborCookie != 'undefined') {
                    var jPodborObj = $.parseJSON(podborCookie);
                    $memoryFilled = $("<div class=\"_forFillSelector\"></div>");
                    if (typeof jPodborObj["countryId"] != 'undefined') {
                        if(jPodborObj["countryId"] != "all") {
                            $("<span class=\"_countryId\" data-objid=\"" + jPodborObj["countryId"] + "\"></span>").appendTo($memoryFilled);
                        }else {
                            $("<span class=\"_countryId\" data-objid=\"\"></span>").appendTo($memoryFilled);
                        }
                    }
                    if (typeof jPodborObj["resortid[]"] != 'undefined') {
                        if(jPodborObj["resortid[]"] != "all") {
                            $("<span class=\"_resortId\" data-objid=\"" + jPodborObj["resortid[]"] + "\"></span>").appendTo($memoryFilled);
                        }else {
                            $("<span class=\"_resortId\" data-objid=\"\"></span>").appendTo($memoryFilled);
                        }
                    }
                    if (typeof jPodborObj["cityId[]"] != 'undefined') {
                        if(jPodborObj["cityId[]"] != "all") {
                            $("<span class=\"_cityId\" data-objid=\"" + jPodborObj["cityId[]"] + "\"></span>").appendTo($memoryFilled);
                        } else {
                            $("<span class=\"_cityId\" data-objid=\"\"></span>").appendTo($memoryFilled);
                        }
                    }
                    if (typeof jPodborObj["hotelId[]"] != 'undefined') {
                        if(jPodborObj["hotelId[]"] != "all") {
                            $("<span class=\"_hotelId\" data-objid=\"" + jPodborObj["hotelId[]"] + "\"></span>").appendTo($memoryFilled);
                        } else {
                            $("<span class=\"_hotelId\" data-objid=\"\"></span>").appendTo($memoryFilled);
                        }
                    }
                    if (typeof jPodborObj["turlistkey"] != 'undefined') {
                        if(jPodborObj["turlistkey"] != "all") {
                            $("<span class=\"_tourId\" data-objid=\"" + jPodborObj["turlistkey"] + "\"></span>").appendTo($memoryFilled);
                        }else {
                            $("<span class=\"_tourId\" data-objid=\"\"></span>").appendTo($memoryFilled);
                        }
                    }
                    if ($memoryFilled.children().length > 0)
                        $forfill = $memoryFilled;
                }
            }

            /*теперь крошки точно - берём оттуда*/
            $filled = $('._filledSelector');
            var base_elements = ['_countryId', '_resortId', '_cityId', '_hotelId', '_tourId'];
            var elements = [];
            $filled.find('select').each(function() {
                var classList = $(this).attr('class').split(/\s+/);
                $.each( classList, function(index, item){
                    if($.inArray(item, base_elements) > -1) {
                        elements.push(item);
                    }
                });
            });

            /* если есть данные */
            if ($filled.length > 0 && $forfill.length > 0 && elements.length > 0) {
                fillSelector(0);
            }
            /* начинаем магию заполнения */
            var countryText;
            function fillSelector(i) {
                if (i == 0) {
                    var $item = $forfill.find('.' + elements[i]);
                    if($item.length > 0) {
                        itemId = $item.attr('data-objid');
                        $filled.find('select.' + elements[i] + ' [value=' + itemId + ']').attr("selected", "selected");
                        try { $filled.find('select.' + elements[i]).trigger('refresh'); } catch(e) {}
                    }
                    countryText = $filled.find('select.' + elements[i] + ' :selected').text();
                    if ((i + 1) < elements.length)
                        fillSelector(i + 1);
                } else {
                    var $item = $forfill.find('.' + elements[i - 1]);
                    if($item.length > 0) {
                        itemId = $item.attr('data-objid');
                        $select = $filled.find('select.' + elements[i]);
                        /*
                         * магический костыль - проверямем, есть ли и в исходных данных этот элемент
                         * если нет, пытаемся взять следующий - пропускаем курорт, где его нет типа, и берём сразу город
                         */
                        $test_o = $forfill.find('.' + elements[i]); 
                        if($test_o.length <= 0 && typeof(elements[i + 1]) != "undefined" && countryText.indexOf('Экскурс') != -1) {
                            ++i;
                            $select.prop('disabled', true);
                            try { $select.trigger('refresh');} catch(e) {}
                            $select = $filled.find('select.' + elements[i]);
                            if($select.length > 0 && $select.hasClass('_cityId')) {
                                $select.attr('data-dependent', 'f_country');
                                $select.attr('data-uri', '/Site/AjaxLoadCitiesByCountry');
                                $select.closest('#miniSelectForm').attr('action', '/Site/ExcursionSelector');
                            }
                        }
                        if($select.length > 0) {
                            $select.attr('data-dependable-value', itemId);
                            uri = $select.attr('data-uri');
                            if(itemId!="") {
                                $select.load(uri, { id: itemId }, function() {
                                    $select.find('option[value=0]').val('all');
                                    itemId = $forfill.find('.' + elements[i]).attr('data-objid');
                                    if (typeof(itemId) != "undefined") {
                                        $select.find('option[value=' + itemId + ']').attr("selected", "selected");
                                    } else {
                                        if(countryText.indexOf('Экскурс') != -1)
                                            $select.prop('disabled', true);
                                    }
                                    try {
                                        $select.trigger('refresh');
                                    } catch(e) {
                                    }
                                    if ((i + 1) < elements.length)
                                        fillSelector(i + 1);
                                });
                            }
                        } else {
                        if ((i + 1) < elements.length)
                            fillSelector(i + 1);
                        }
                    } else {
                        if ((i + 1) < elements.length)
                            fillSelector(i + 1);
                    }
                }
            }
        });
        
    }
    catch(e) {}
    
    /*Подбор отеля*/
    try {
        $("#dateFrom, #dateMin").datepicker({
            showOn: "button",
            buttonImage: "img/calendar.gif",
            buttonImageOnly: true,
            buttonText: 'выберите дату',
            dateFormat: 'dd.mm.y',

            onClose: function (selectedDate) {
                $("#dateTo, #dateMax").datepicker("option", "minDate", selectedDate);
                $("#dateFrom, #dateMin").blur();
            }
        });

        $("#dateTo, #dateMax").datepicker({
            showOn: "button",
            buttonImage: "img/calendar.gif",
            buttonImageOnly: true,
            buttonText: 'выберите дату',
            dateFormat: 'dd.mm.y',
            onClose: function (selectedDate) {
                $("#dateFrom, #dateMin").datepicker("option", "maxDate", selectedDate);
                $("#dateTo, #dateMax").blur();
            }
        });

        $('.podbor_dop_param_toggle').click(
                function () {
                    $('.block_apply_button').toggle();
                });

        $('.podbor_dop_param_toggle_prof').click(
                function () {
                    $('.block_apply_button_prof').toggle();
                });

        $('.hotel_close').click(
                function () {
                    $('.no_active_hotel').toggle();
                });
    }
    catch (e) { }
    /*Подбор тура*/
    try {
        $('.podbor_reset a').click(
                function () {
                    $('#form')[0].reset();
                });
    }
    catch (e) { }

    $('.additional_descr .header span').click(function () {
        $(this).parent().parent().hide();
    });

    $('.offer_table .descr .more').click(function () {
        $link = $(this);
        $link.closest('.offer_table').find('.additional_descr').hide();
        $info = $link.parent().find('.additional_descr');

        $info.css('left', $link.offset().left - parseInt(($(window).width() - 1038) / 2) - 350 + 'px');
        $info.css('top', $link.offset().top - 138 - $info.height() + 'px');
        $info.show();
        return false;
    });

    $('.tabs_radio input[type=radio]').click(function () {
        $radio = $(this);
        $radio.parent().find('label').removeClass('checked');
        $radio.parent().find('label[for=' + $radio.attr('id') + ']').addClass('checked');

    });

    $('.content_bg.trip .offer_table .trip a').mouseenter(function (e) {
        $link = $(this);
        $info = $link.next();
        //$info.css('left', $link.offset().left - parseInt(($(window).width()-1038)/2) + 100 + 'px');
        //$info.css('top', $link.offset().top - 205 - $info.height() + 'px');
        var y = 210;
        if ($.browser.msie && $.browser.version.indexOf('7') > -1) {
            y = 230;
        }
        $info.css('top', e.pageY - y - $info.height() + 'px');
        $info.css('left', e.pageX - parseInt(($(window).width() - 1038) / 2) + 'px');
        $info.show();
    });
    $('.content_bg.trip .offer_table .trip').mouseleave(function () {
        $(this).find('.info_trip').hide();
    });

    $('.podbor_hotel_route_trip span').mouseenter(function (e) {
        $link = $(this);
        $info = $link.parent().find('.podbor_route_popup');
        //$info.css('left', $link.offset().left - parseInt(($(window).width()-1038)/2) + 100 + 'px');
        //$info.css('top', $link.offset().top - 205 - $info.height() + 'px');
        var y = 210;
        if ($.browser.msie && $.browser.version.indexOf('7') > -1) {
            y = 230;
        }
        $info.css('top', e.pageY - y - $info.height() + 'px');
        $info.css('left', e.pageX - parseInt(($(window).width() - 1038) / 2) - 220 + 'px');
        $info.show();
    });
    $('.podbor_hotel_route_trip').mouseleave(function () {
        $(this).find('.podbor_route_popup').hide();
    });

    $('.content_company .collective .name span').mouseenter(function (e) {
        $link = $(this);
        $info = $link.next();
        //$info.css('left', $link.offset().left - parseInt(($(window).width()-1038)/2) + 100 + 'px');
        //$info.css('top', $link.offset().top - 205 - $info.height() + 'px');
        var y = 180;
        if ($.browser.msie && $.browser.version.indexOf('7') > -1) {
            y = 200;
        }
        $info.css('top', e.pageY - y - $info.height() - 15 + 'px');
        $info.css('left', e.pageX - parseInt(($(window).width() - 1038) / 2) - 220 + 'px');
        $info.show();
    });
    $('.content_company .collective .name span').mouseleave(function () {
        $(this).next(/*'.user_photo'*/).hide();
    });

    $('.enableDaySelector').click(function () {
        var $cur = $(this);
        if ($cur.attr('checked')) {
            $cur.next().next().removeAttr('disabled');
        }
        else {
            $cur.next().next().attr('disabled', 'disabled');
        }
    });

    try {
        $('.tableprice').tablehighlight();
    } catch (e) { }


    (function () {
        $('.hotel_news_page .offerBlock .name a').click(function () {

            $link = $(this);

            $link.closest('.offerBlock').find('.descr_news').slideToggle(500);

            return false;
        });
    })();

    (function () {
        $('.insurance.question a').click(function () {

            $link = $(this);

            $link.parent().find('ul').slideToggle(500);

            return false;
        });
    })();

    (function () {
        $('.transport_menu > ul > li > a').click(function () {

            $link = $(this);

            $link.parent().find('ul').slideToggle(300);

            var re = /\+\s/;

            $span = $link.find('span');

            if ($span.length > 0) {
                $link.html("+ " + $span.text());
            } else {
                $link.html("- <span>" + $link.text().replace(re, "") + "</span>");
            }

            return false;
        });
    })();
    if ($.browser.safari || $.browser.mozilla) {
        $('._crome_fix_tab').css("width", "75px");
        //$('.catalog_search').css('top', '-75px');
    }
    if ($.browser.msie) {
        if (($.browser.version.indexOf('8') > -1)) {
            $('._crome_fix_tab').css("width", "75px");
        }
        if (($.browser.version.indexOf('9') > -1)) {
            $('._crome_fix_tab').css("width", "73px");
            //$('.catalog_search').css('top', '-90px');
        }
        if (($.browser.version.indexOf('10') > -1)) {
            //$('.catalog_search').css('top', '-90px');
        }
    }

    (function () {
        $('.place_block .close').click(function () {
            $(this).parent().hide();
        });
        $('.place_show .button_orange').click(function () {
            $(this).next().toggle();
        });
    })();

    /* выбор города */
    $('.delivery_list').click(function () {
        $(".cities_list").slideToggle('fast');
    });
    $('ul.cities_list li').click(function () {
        var $li = $(this);
        var tx = $li.html();
        var city = $li.attr('data-city');

        $(".cities_list").slideUp('fast');
        $(".delivery_list span").html(tx);

        $('.phone .str_cap').hide();

        $('.phone .str_cap[data-city=' + city + ']').show();

    });
 $(document).click( function(event){
      if( $(event.target).closest(".delivery_list").length ) 
        return;
      $(".delivery_list + ul.cities_list").slideUp('fast');
      event.stopPropagation();
    });
    /* Страница о компании */

    var regexResult = /AboutCompany.*/i.exec(location.href);
    if (regexResult) {
        var menuItem = $(".tourist_menu").find("a[href]").filter(function () {
            return new RegExp(location.pathname, "i").test($(this).attr("href"));
        }).first().parent();

        var menuItemText = menuItem.find("a").attr("title");
        menuItem.empty().append("<span>" + menuItemText + "</span>");
        $("#breadcrump-last-item").text(menuItemText);


        /* Страница с фотографиями в разделе о компании */
        $(".pager").on("change", ".output select", function (event) {
            var currentUrl = location.href;
            var itemsPerPage = $(this).val();
            if (/itemsPerPage=/i.test(currentUrl)) {
                location.href = currentUrl.replace(/itemsPerPage=\d+/i, "itemsPerPage=" + itemsPerPage);
            } else {
                location.href = currentUrl + ((/\?/).test(location.href) ? "&" : "?") + "itemsPerPage=" + itemsPerPage;
            }
        });
    }

    var itemsPerPageRegex = /itemsPerPage=(\d+)/i.exec(location.href);
    if (itemsPerPageRegex && itemsPerPageRegex[1]) {
        $(".pager").find("select").val(itemsPerPageRegex[1]);
    }

    /*Где купить*/
    var $citi_list = $("#select_city_where_to_buy");
    if ($citi_list.length > 0) {
        $.ajax(
            {
                type: 'POST',
                traditional: true,
                url: '/Site/AjaxLoadAgencyCities',
                success: function (_data) {
                    var container = $("<div/>").append("<option value='0'>Выбрать город</option>");
                    $(_data).each(function(key, value) {
                        container.append($("<option value='" + value.cityId + "' />").text(value.cityName));
                    });
                    $("#select_city_where_to_buy").html(container.html());
                    $('#select_city_where_to_buy').styler();
                }
            });

        $citi_list.change(function () {
            window.location = $(this).closest('form').attr('action') + '?parametr=' + $(this).val();
        });
    }

});

function validateEmail(email) {
    var re = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    return re.test(email);
} 
function quickAuth() {
    if(!isAuth) {
        //$('.podbor_hotel_price_bron input[type=button]').addClass('_noAuth').removeAttr('onclick');

        $('.podbor_hotel_price_bron input[type=button], .tableprice input[type=button]').each(function (i,e) {
            $btn = $(e);
            
            var url = $btn.attr('onclick');
            if(typeof(url) != "undefined" && url.length > 0) {
                url = url.replace("window.open(\"", "");
                url = url.replace("\", \"_blank\")", "");
                //$btn.data('click', $btn.attr('onclick'));
                $btn.data('click', url);
                $btn.removeAttr('onclick');
            }
            $btn.click(function () {
                 $('.authPopUp').fadeIn(200);
                return false;
//                $cbtn = $(this);
//                var $dilog = $("#dialog-attention");

//                if (!$dilog.dialog("isOpen")) {

//                    $dilog.dialog("option", "title", "Предупреждение. Необходима авторизация.");
//                            
//                    $aLink = $dilog.find('.auth_link');
//                    $aLink.click(function () {
//                        $dilog.dialog("close");
//                        window.open("" + $btn.data('click') + "", "_blank");
//                        return false;
//                    });

//                    $email = $dilog.find('._quick_email');
//                    $send = $email.next();

//                    $send.click(function () {
//                        if(validateEmail($email.val())) {

//                            $.ajax({
//                                type: "POST",
//                                url: "/Security/CheckExistEmail",
//                                data: {email: $email.val()},
//                                success: function (data) {
//                                    if(data.toString().toLowerCase() == "false") {
//                                        $bookUrl = $dilog.find('._bookUrl');
//                                        $bookUrl.val($cbtn.data('click'));
//                                        $email.closest('form').submit();
//                                    }
//                                    else {
//                                        alert("Введённый email адес уже зарегистирован в нашей системе. Пожалуйтса, пройдите процедуру авторизации или укажите другой адрес.");
//                                    }
//                                }
//                            });
//                            
//                            

//                        } else {
//                            alert("Введите корректный email адрес!");    
//                        }
//                        
//                    });

//                    $dilog.dialog("option", "buttons", [
//                        { text: "Отмена", click: function () { $(this).dialog("close"); } }
//                    ]);

//                    $dilog.dialog("open");
//                } 
            });
        });
    }
}

try{
window.onload=startCheck;
} catch (e) { }

function restrictDates(dateText, instance) {        
    var currentDatepicker = $(instance.input);
    var selectedDate = currentDatepicker.datepicker("getDate");
    console.log(selectedDate);

    if (currentDatepicker.data("to-id")) {
        var toDatepicker = $("#" + currentDatepicker.data("to-id"));
        var toDate = toDatepicker.datepicker("getDate");
        if (toDate && selectedDate > toDate) {
            toDatepicker.datepicker("setDate", selectedDate);
        }
    } else if (currentDatepicker.data("from-id")) {
        var fromDatepicker = $("#" + currentDatepicker.data("from-id"));
        var fromDate = fromDatepicker.datepicker("getDate");
        if (fromDate && selectedDate < fromDate) {
            fromDatepicker.datepicker("setDate", selectedDate);
        }
    }
}