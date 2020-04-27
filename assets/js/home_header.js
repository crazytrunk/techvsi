$(".vsi-fe1-border").hover(
    function () {
      $(this).addClass('active');
    }, 
    function () {
      $(this).removeClass('active');
    }
);
  


$(".vsi-menu-btn").on("click", function (e) {
  $(".vsi-menu__mobile-logo").toggleClass("vsi-menu__mobile-logo-none");
  $(".vsi-menu-mobile__content-overlay").toggleClass("vsi-menu-mobile__content-overlay-show");

  $(".vsi-menu-mobile_content-nav").toggleClass("vsi-menu-mobile_content-nav-show");
  $(".vsi-menu-mobile__content-list").toggleClass("vsi-menu-animation-out");
  $(".vsi-menu-mobile_content-nav").toggleClass("vsi-menu-animation-out-1");
  $(".vsi-menu-mobile__content-overlay").toggleClass("vsi-menu-animation-out-2");

  $('body').toggleClass('overflow-hidden');
  


  if (!$(".vsi-menu-mobile__content-list").hasClass("vsi-menu-animation-out")) {
      $(".vsi-menu-mobile__content-list").addClass("vsi-menu-animation-in");
  } else {
      $(".vsi-menu-mobile__content-list").removeClass("vsi-menu-animation-in");

  }

  if (!$(".vsi-menu-mobile_content-nav").hasClass("vsi-menu-animation-out-1")) {
      $(".vsi-menu-mobile_content-nav").addClass("vsi-menu-animation-in-1");
  } else {
      $(".vsi-menu-mobile_content-nav").removeClass("vsi-menu-animation-in-1");

  }

  if (!$(".vsi-menu-mobile__content-overlay").hasClass("vsi-menu-animation-out-2")) {
    $(".vsi-menu-mobile__content-overlay").addClass("vsi-menu-animation-in-2");
} else {
    $(".vsi-menu-mobile__content-overlay").removeClass("vsi-menu-animation-in-2");

}

  setTimeout(function () {
      if (!$(".vsi-menu-mobile_content-nav").hasClass("vsi-menu-mobile_content-nav-show")) {
          $(".vsi-menu-mobile_content-nav").addClass("vsi-menu-mobile_content-nav-none");
      } else {
          $(".vsi-menu-mobile_content-nav").removeClass("vsi-menu-mobile_content-nav-none");
      }
      
      if (!$("#vsi-fe3-overlay").hasClass("vsi-menu-mobile__content-overlay-show")) {
        $("#vsi-fe3-overlay").addClass("vsi-menu-mobile__content-overlay-none");
    } else {
        $("#vsi-fe3-overlay").removeClass("vsi-menu-mobile__content-overlay-none");
    }

      $(".vsi-menu-mobile__content-item").toggleClass("vsi-menu-animation-out-text");

  }, 500);

});


$( "input" ).click(function() {
  $( ".vsi-menu-btn" ).trigger( "click" );
 
});
 