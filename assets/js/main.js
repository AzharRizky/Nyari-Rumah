!(function($) {
    "use strict"

    $(".owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
        responsiveClass: true,
        margin:10,
        responsive:{
            0:{
                items:1,
                nav:false,
                dots: false
            }, 600:{
                items:3,
                nav:false,
                dots: false
            }, 1000:{
                items:5,
                nav:false,
                dots: false
            }
        }
    });
})(jQuery);