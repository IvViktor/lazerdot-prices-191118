$(function () {
"use strict";
    (function () {
        $('menu').prepend('<li class="helper"></li>');
        var $helper = $('menu > li.helper');
        var $active = $('menu > li.active');

        $active.addClass('other-hov');
        $(window).load(function () {
            $('menu > li:not(.active)').hover(function () {
                $active.addClass('other-hov');
                var left = $(this).position().left;
                var width = $(this).outerWidth();
                $helper.css({
                    'left': left + 'px',
                    'width': width - 1 + 'px',
                    'opacity': '1'
                });
            }, mouseOut);
            mouseOut();
        });

        function mouseOut() {
            $active.removeClass('other-hov');
            $active = $('menu > li.active');
            if ($active.size() > 0) {
                var left = $active.position().left;
                var width = $active.outerWidth();
                $helper.css({
                    'left': left + 'px',
                    'width': width - 1 + 'px',
                    'opacity': '1'
                });
            }
            else {
                $helper.css({
                    'left': '50%',
                    'width': '0px',
                    'opacity': '0'
                });
            }
        }
    })();

    $('header menu .menu-item-has-children > a').click(function (e) {
        if ($(window).innerWidth() < 992) {
            if $(this).parent('#menu-item-8') return;
            e.preventDefault();
            if (!$('.sub-menu', $(this).parent()).is(':visible'))
                $('.sub-menu', $(this).parent()).slideDown(500);
            else
                $('.sub-menu', $(this).parent()).slideUp(500);
        }
    });
    $('.c-hamburger').click(function () {
        if ($(this).hasClass('is-active'))
            $('header menu').addClass('opened');
        else
            $('header menu').removeClass('opened');
    });
    //$(window).on("resize", function () {
    //    if ($("#s").is(":focus") || $("#s").is(":hover")) return;
    //    $('header menu').removeClass('opened');
    //   $('.c-hamburger').removeClass('is-active');
    //    $('.sub-menu, menu .helper').removeAttr('style');
    //});

    $(window).load(function () {
        setTimeout(function () {
            $('#preloader').addClass('preloader-hide');

            setTimeout(function () {
                $('#preloader').remove();
            }, 3000);
        }, 1);
    });


    $('.home section h2.title').each(function () {
        var $this = $(this);
        var html = $this.html();
        $this.html('<div>' + html + '</div>');
        $('> div', this).append('<span class="rhombus"></span>');
    });

    $('.lblog-photo, .img-wrap').each(function () {
        var $this = $(this);
        var img = 'url(' + $('img', this).attr('src') + ')';
        $this.css('background-image', img);
        $('img', this).remove();
    });
    $('ul.side-menu > li.menu-item-has-children > a').click(function(event){
        event.preventDefault();
        $(this).parent().toggleClass('active');
    });


    (function () {
        $('.zl-collapse .zl-collapse-title').click(function (e) {
            e.preventDefault();

            var active = $(this).hasClass('active');

            $('.zl-collapse .zl-collapse-title.active').siblings(".zl-collapse-content").slideUp(300);
            $('.zl-collapse .zl-collapse-title').removeClass('active');
            if (active) {
                //$(this).removeClass('active');
                //$(this).siblings(".zl-collapse-content").slideUp(300);
                return;
            }
            $(this).addClass('active');
            $(this).siblings(".zl-collapse-content").slideDown(300);
        });
    })();

    //$('#after-header .container').parallax3d();


    $('.katb_test_box_basic').after('<div class="article-separator"><span class="rhombus"></span></div>');

    $('.katb_input_style').hide();

    $('#show-review-form').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('show');
        if ($(this).hasClass('show')) {
            $('.katb_input_style').slideDown(300);
            $(this).html('<i class="fa fa-times" aria-hidden="true"></i> Закрыть');
        }
        else {
            $('.katb_input_style').slideUp(300);
            $(this).html('<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Оставить свой отзыв');
        }
    });

    //event handlers for displaying search menu
    $('#searchform-menu-item .searchbutton').click(function(event) {
        $('#searchform-menu-item').toggleClass('active');
    });


    // Google Map
    if ($('#map').size() > 0)
        initMap();
});



$.fn.parallax3d = function (options) {
    if (typeof TweenLite === 'undefined') {
        console.warn('TweenMax or Tweenlite library is requiered... https://greensock.com/tweenmax');
        return;
    }

    var op = $.extend({
        moveObj: document,
        degX: 45,
        degY: 45,
        rotate: true
    }, options);


    var pageX = 0;
    var pageY = 0;

    var $this = $(this);

    $(op.moveObj).on("mousemove", function (event) {
        var centerScreenY = $(window).innerHeight() / 2;
        var centerScreenX = $(window).innerWidth() / 2;
        pageX = event.pageX;
        pageY = event.pageY;

        TweenLite.to($this, 0.5, {rotationX: (centerScreenY - pageY) / 20, rotationY: (pageX - centerScreenX) / 70});

        $("#log").html("pageX: " + event.pageX + ", \
                        pageY: " + event.pageY + ", <br />\
                        pageCenterOffsetY: " + (centerScreenY - event.pageY) +
                "Screen center: " + centerScreenY);
    });

    return this;
};


function initMap() {
    getLocation('вулиця Бузника, 14, Миколаїв, Миколаївська область, Украина');

    var myLatLng = {lat: 46.9669752, lng: 31.96217999999999};

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 16
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: ''
    });
}

var getLocation = function (address) {
    var geocoder = new google.maps.Geocoder();

    var latitude, longitude;
    var location;

    geocoder.geocode({'address': address}, function (results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            latitude = results[0].geometry.location.lat();
            longitude = results[0].geometry.location.lng();
            location = results[0].geometry.location;
            console.log(latitude, longitude);
        }
    });

    return location;
};


(function () {
    "use strict";

    var toggles = document.querySelectorAll(".c-hamburger");

    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    }
    ;

    function toggleHandler(toggle) {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
        });
    }

})();

$(document).ready(function(){
  $('#owl-about').owlCarousel({
    items: 1,
    center:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    loop: true,
    nav: false,
    URLhashListener:true,
    startPosition: 'URLHash'
  });

  $( "#accordion" ).accordion({
    collapsible: true
  });
});