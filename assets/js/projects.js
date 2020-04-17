
$(document).ready(function () {
    $('.vsi-fe3-zoom').zoom();
});


$( "#vsi-fe3-btn-more-projects" ).click(function() {
    
    $( ".vsi-fe3-projects__projects-list--more-projects" ).addClass('vsi-fe3__more-projects--show');
    $( ".vsi-fe3-projects__projects-list--more-projects" ).addClass('vsi-fe3__more-projects--animations');
    $( ".vsi-more-projects" ).addClass("vsi-btn-more-projects-hide");
  
  });