$('.owl-carousel').owlCarousel({
    stagePadding: 200,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    nav:false,
    items:1,
    lazyLoad: true,
    nav:true,
  responsive:{
        0:{
            items:1,
            stagePadding: 10
        },
        600:{
            items:1,
            stagePadding: 30
        },
        1000:{
            items:1,
            stagePadding: 200
        },
        1200:{
            items:1,
            stagePadding: 250
        },
        1400:{
            items:1,
            stagePadding: 300
        },
        1600:{
            items:1,
            stagePadding: 350
        },
        1800:{
            items:1,
            stagePadding: 400
        }
    }
})