$(document).ready(function () {
    var typed = new Typed('#typed',{
        strings: ["Web Development", "Mobile Development", "Email Newsletter (EDM)", "Wordpress", "ReactJS", "AngularJS", "React Native", "PHP ZEND & Magento"],
        typeSpeed: 30,
        backSpeed: 30,
        backDelay: 2000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
});

$('.vsi-fe1-span-working-hours').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
    {
      duration: 2000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
      }
  
    });  
  
  });

  $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  dots: true,
  autoplay: 6000,
  responsive:{
      0:{
          items:1
      },
      768:{
          items:2
      },
      1000:{
          items:3
      }
  }
})
$(document).ready(function(){
	$('.skillbar').each(function(){
		$(this).find('.skillbar-bar').animate({
			width:$(this).attr('data-percent')
		},3000);
	});
});

var $btns = $('.btn').click(function() {
  if (this.id == 'all') {
    $('.vsi-fe1-item-movie').fadeIn(450);
  } else {
    var $el = $('.' + this.id).fadeIn(450);
    $('.vsi-fe1-item-movie').not($el).hide();
  }
  $btns.removeClass('vsi-fe1-opa');
  $(this).addClass('vsi-fe1-opa');
}) 