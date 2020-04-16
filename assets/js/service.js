$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //console.log(scroll);
    if (scroll >= 50) {
        //console.log('a');
        $(".header").addClass("change");
    } else {
        //console.log('a');
        $(".header").removeClass("change");
    }
});