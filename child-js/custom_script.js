jQuery(function () {
    jQuery(".testimonials-content").owlCarousel({
        dots:false,
        nav:true,
        loop: true,
        slideSpeed: 2000,
        autoPlay: true,
        responsiveClass:true,
        navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>'
        ],
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            600:{
                items:1,
                nav:true,
            },
            800:{
                items:1,
                nav:true,
            },
            1500:{
                items:1,
                nav:true,
            }
        }
    });
});