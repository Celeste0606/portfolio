'use strict';

/* ============== Google map ============== */
function initMap() {
    var coor = {lat: 28.1249658, lng: -82.3772481},
        icon = {
        //path: "",
        fillColor: '#777',
        fillOpacity: 1,
        anchor: new google.maps.Point(0,0),
        strokeWeight: 0,
        scale: 1
        },
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: coor,
            scrollwheel: false,
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
        });
    new google.maps.Marker({
        position: coor,
        map: map,
        icon: icon
    });
}



window.onload = function(){

    /* ============== Page loader ============== */
    $('.loader').fadeOut(300);

    var scrollTop = document.createElement('A'),
        responsiveButton = document.createElement('A');

    scrollTop.className = 'scrollTop-button';
    responsiveButton.className = 'responsive-button';

    document.querySelector('body').appendChild(scrollTop);
    document.querySelector('body').appendChild(responsiveButton);

};

(function($) {

    $('section[data-image-src]').each(function(){
        var src = $(this).data('image-src');
        $(this).css("background", "url(" + src + ")");
        $(this).attr('data-image-src', '');
    });

    /*============== Bootstrap scrollspy =============== */
    $('body').scrollspy({target: ".navbar", offset: 100});

    /* Scrollspy animate */
    $(document).on('click', '.navbar ul li a', function(event) {
        event.preventDefault();
        if (this.hash !== "" && ($(this.hash).length > 0) ) {
            event.preventDefault();
            var hash = this.hash,
                navbar = $('nav.navbar');
            navbar.removeClass("open");
            var scrl = Math.floor($(hash).offset().top) - navbar.height();
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                scrl = Math.floor($(hash).offset().top);
            }
            $('html, body').stop().animate({
                scrollTop: !$('body').hasClass("left-sidebar") && !$('body').hasClass("right-sidebar") ? scrl : $(hash).offset().top
            });
        }
    });

    $(document).on('click', '*', function(e){
        if(!$(e.target).is( 'nav.navbar, a.responsive-button, a.responsive-button *' )){
            $('nav.navbar').removeClass("open animated slideInLeft slideInRight");
        }
    });

    /* =============== Element effects ================ */
    if( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

        $('[data-effect]').addClass("effectHidden");

        $("[data-effect], .progress, .counter").viewportChecker({
            offset: 30,
            callbackFunction: function (element) {
                if (element.hasClass('progress')) {
                    /* =============== Progress ================ */
                    var level = element.find('.progress-item .progress-bar').data("level");
                    if (level) {
                        if (element.hasClass('progress-vertical')) {
                            element.find('.progress-item .progress-bar').css("height", level + "%");
                        } else {
                            element.find('.progress-item .progress-bar').css("width", level + "%");
                        }
                    }
                } else if (element.hasClass('counter')) {
                    /* =============== Counter ================ */
                    var number = element.find('.animate-number').data('number'),
                        comma_separator_number_step = $.animateNumber.numberStepFactories.separator('.');
                    element.find('.animate-number').animateNumber({
                        number: number,
                        numberStep: comma_separator_number_step,
                        easing: 'easeInQuad'
                    }, 2500);
                } else {
                    var effect = element.data('effect'),
                        delay = element.data('delay');
                    setTimeout(function () {
                        element.removeClass("effectHidden");
                        element.addClass("animated " + effect).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function (e) {
                            $(this).removeClass("animated " + effect).removeAttr('data-effect');
                            $(this).removeClass("animated " + effect).removeAttr('data-delay');
                        });
                    }, delay);
                }
            }
        });

    }else{

        /* =============== Mobile Device ================ */

        $('.counter').each(function(){
            var number = $(this).find('.animate-number').data('number'),
                comma_separator_number_step = $.animateNumber.numberStepFactories.separator('.');
            $(this).find('.animate-number').animateNumber({
                number: number,
                numberStep: comma_separator_number_step,
                easing: 'easeInQuad'
            }, 2500);
        });

        $('.progress').each(function(){
            var level = $(this).find('.progress-item .progress-bar').data("level");
            $(this).find('.progress-item .progress-bar').css("width", level + "%");
        });

    }

    /* =============== Slick carousel ================ */
    $('.references').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false
    });

    $('.hero-slide').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows:false,
        fade: true
    });

    /* =============== Portfolio gallery ================ */
    $(window).on('load', function(){
        $('.portfolio .portfolio-gallery').isotope({
            itemSelector: '.portfolio-item'
        });
    });
    $(document).on('click', '.portfolio nav.portfolio-filter ul li a', function() {
        var selector = $(this).attr('data-filter');
        $('.portfolio .portfolio-gallery').isotope({ filter: selector });
        return false;
    });


    /* =============== Typed.js ================ */
    $('.typed-js').each(function () {
        var that = $(this),
            string = that.data("string");
        that.typed({
            strings: string,
            typeSpeed: 0,
            startDelay: 1000,
            backDelay: 2000,
            loop: true
        });
    });

    /* Responsive button click event */
    $(document).on('click', 'a.responsive-button', function (e) {
        e.preventDefault();
        var effectDirection = 'slideInLeft';
        if( $('body').hasClass("right-sidebar") ){
            effectDirection = 'slideInRight';
        }
        $('nav.navbar').toggleClass("open animated " + effectDirection);
        return false;
    });

    /* ScrollTop button click event */
    $(document).on('click', 'a.scrollTop-button', function(){
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    /* ScrollTop button scroll event */
    $(window).on('scroll', function(){
        if($(this).scrollTop() > 200){
            $('a.scrollTop-button').addClass('visible');
        }else{
            $('a.scrollTop-button').removeClass('visible');
        }
    });
    
    

})(jQuery);