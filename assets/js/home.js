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