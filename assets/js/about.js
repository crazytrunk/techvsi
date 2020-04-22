


var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop:true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
      nextEl: '.swiper-carousel-next',
      prevEl: '.swiper-carousel-prev',
    },
  
  });

  var swiper = new Swiper('.swiper-text', {
    spaceBetween: 30,
    effect: 'fade',
    loop:true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
      nextEl: '.swiper-carousel-next',
      prevEl: '.swiper-carousel-prev',
    },
   
  });