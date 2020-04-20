
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 6,
    spaceBetween: 30,
    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    // },
    loop: true,
    centeredSlides:true,
    centeredSlidesBounds:true,
    infinite: true,
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var swiper__BA = new Swiper('.swiper-container__BA', {
    slidesPerView: 0,
    // spaceBetween: 0,
    centeredSlidesBounds:true,
    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    // },
    loop: true,
    centeredSlides:true,
    
    infinite: true,
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});