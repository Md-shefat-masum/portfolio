/************* Custom Js File *******************************

    Template Name: Portfolio Template
    Author: shefat production
    Version: 1.0
    Copyright 2018

*************************************************************/


/*-------------------------------------------------------------------------------


JS INDEX
=============

01 - smooth scroll
02 - scroll js nav bar, comes after scrolling
03 - Skills Progress Bars
04 - Light box js
05 - port-folio part sliding  js
06 - back to top button js
07 - wow activation  js


--------------------------------------------------------------------------------*/


$(function () {

    "use strict";
    //    show menu
    var navOffset = $('.hidden_menu').offset().top

    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();
        if (scrolling > navOffset) {
            $('.hidden_menu').addClass('show_menu');
        } else {
            $('.hidden_menu').removeClass('show_menu');
        }
    });


    // Smooth scrolling
    $(".menus").click(function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });



    /*-------------------------------------
     wow activation  js
    -------------------------------------*/
    var wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function (box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();

    //    stars
    var stars = 800;
    var $stars = $(".stars");
    var r = 800;
    for (var i = 0; i < stars; i++) {
        var $star = $("<div/>").addClass("star");
        $stars.append($star);
    }
    $(".star").each(function () {
        var cur = $(this);
        var s = 0.2 + (Math.random() * 1);
        var curR = r + (Math.random() * 300);
        cur.css({
            transformOrigin: "0 0 " + curR + "px",
            transform: " translate3d(0,0,-" + curR + "px) rotateY(" + (Math.random() * 360) + "deg) rotateX(" + (Math.random() * -50) + "deg) scale(" + s + "," + s + ")"

        });
    });

    //    banner slide
    $(".banner-photo").owlCarousel({
        loop: true,
        nav: false,
        arrow: false,
        items: 1,
        autoplay: true,
        margin: 0,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',

    });

    // banner responsive

    $(".banner-responsive").owlCarousel({
        loop: true,
        nav: false,
        arrow: false,
        items: 1,
        autoplay: true,
        margin: 0,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',

    });

    // team part responsive slide

    $(".team-slide").owlCarousel({
        loop: true,
        nav: false,
        arrow: false,
        items: 1,
        autoplay: true,
        margin: 30,
        autoplayHoverPause:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',

    });
    //    back to top
    var btn = $('.b-to-top');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    //    add class for slider
    $(document).on('resize, ready', function () {
        // Add class if screen size equals
        var $window = $(window),
            $html = $('html');

        function resize() {
            //            $html.removeClass('');

            if ($window.width() <= 767) {
                $('#hire-me .right img').css(
                    "width","100%"
                );

                $(".service-left").owlCarousel({
                    loop: true,
                    nav: true,
                    margin: 0,
                    dots: false,
                    animateOut: 'fadeIn',
                    animateIn: 'flipInX',
                    autoplay: true,

                    responsive: {
                        0: {
                            items: 3
                        },
                        768: {
                            items: 3
                        }
                    }

                });
                $(".sm").owlCarousel({
                    loop: true,
                    nav: false,
                    animateOut: 'fadeOut',
                    animateIn: 'lightSpeedIn',
                    autoplay: true,
                    margin: 0,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        }
                    }

                });

                $(".service-right-inner-top").owlCarousel({
                    loop: true,
                    nav: true,
                    margin: 0,
                    dots: false,
                    animateOut: 'fadeIn',
                    animateIn: 'flipInX',
                    autoplay: true,

                    responsive: {
                        0: {
                            items: 3
                        },
                        768: {
                            items: 3
                        }
                    }

                });

                $(".skill").owlCarousel({
                    loop: true,
                    nav: true,
                    margin: 0,

                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        }
                    }

                });

                //                return $('.glyslide').removeClass('filtr-container');
                //                return $('.galleryPart col-md-4').removeClass('filtr-item');

                $(".glyslide").owlCarousel({
                    loop: true,
                    nav: true,
                    margin: 0,
                    animateOut: 'slideOutDown',
                    animateIn: 'fadeIn',


                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        }
                    }

                });

            } else if ($window.width() > 767.9 && $window.width() < 992) {
                //    filterizr
                $(window).load(function () {
                    var filterizd = $('.filtr-container').filterizr({
                        //options object
                    });
                });
                $('.service-left').removeClass('owl-carousel owl-theme');
                $('.service-right-inner-top').removeClass('owl-carousel owl-theme');

            } else if ($window.width() >= 992 && $window.width() < 1200) {
                //    filterizr
                $(window).load(function () {
                    var filterizd = $('.filtr-container').filterizr({
                        //options object
                    });
                });
                $('.service-left').removeClass('owl-carousel owl-theme');
                $('.service-right-inner-top').removeClass('owl-carousel owl-theme');
            } else if ($window.width() > 1200) {
                //    filterizr
                $(window).load(function () {
                    var filterizd = $('.filtr-container').filterizr({
                        //options object
                    });
                });
                $('.service-left').removeClass('owl-carousel owl-theme');
                $('.service-right-inner-top').removeClass('owl-carousel owl-theme');
            }
        }
        $window.resize(resize).trigger('resize');
    });


});
