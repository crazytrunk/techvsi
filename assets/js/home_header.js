$(".vsi-fe1-border").hover(
  function () {
    $(this).addClass('active');
  },
  function () {
    $(this).removeClass('active');
  }
);


//Click btn Menu
$(".vsi-menu-btn").on("click", function (e) {
  // $(".vsi-menu__mobile-logo").toggleClass("vsi-menu__mobile-logo-none");
  $(".vsi-menu-mobile_content-nav").toggleClass("vsi-menu-mobile_content-nav-show");
  // $(".vsi-menu-mobile__content-list").toggleClass("vsi-menu-animation-out");
  $(".vsi-menu-mobile_content-nav").toggleClass("vsi-menu-animation-out-1");
  // $(".vsi-menu-mobile__content-overlay").toggleClass("vsi-menu-mobile__content-overlay-show");;

  $('body').toggleClass('overflow-hidden');

  // if (!$(".vsi-menu-mobile__content-list").hasClass("vsi-menu-animation-out")) {
  //   $(".vsi-menu-mobile__content-list").addClass("vsi-menu-animation-in");
  // } else {
  //   $(".vsi-menu-mobile__content-list").removeClass("vsi-menu-animation-in");
  // }
  // if (!$(".vsi-menu-mobile_content-nav").hasClass("vsi-menu-animation-out-1")) {
  //   $(".vsi-menu-mobile_content-nav").addClass("vsi-menu-animation-in-1");
  // } else {
  //   $(".vsi-menu-mobile_content-nav").removeClass("vsi-menu-animation-in-1");

  // }

  




  setTimeout(function () {
    // if (!$(".vsi-menu-mobile_content-nav").hasClass("vsi-menu-mobile_content-nav-show")) {
    //   $(".vsi-menu-mobile_content-nav").addClass("vsi-menu-mobile_content-nav-none");
    // } else {
    //   $(".vsi-menu-mobile_content-nav").removeClass("vsi-menu-mobile_content-nav-none");
    // }
    $(".vsi-menu-mobile__content-item").toggleClass("vsi-menu-animation-out-text");

  }, 500);

});


// Disable scroll when click btn Menu
$("input").click(function () {
  $(".vsi-menu-btn").trigger("click");

});


// Scroll Hide Show Menu
var lastScrollTop = 0;
$(window).scroll(function (event) {
  var st = $(this).scrollTop();
  if (st > lastScrollTop) {
    if (!$(".vsi-menu-mobile").hasClass("vsi-menu-mobile-hide")) {
      $(".vsi-menu-mobile").addClass("vsi-menu-mobile-hide");
      $(".vsi-menu-mobile").removeClass("vsi-menu-mobile-show");
    }
  } else {
    if (!$(".vsi-menu-mobile").hasClass("vsi-menu-mobile-show")) {
      $(".vsi-menu-mobile").removeClass("vsi-menu-mobile-hide");
      $(".vsi-menu-mobile").addClass("vsi-menu-mobile-show");
    }
  }
  lastScrollTop = st;
});
