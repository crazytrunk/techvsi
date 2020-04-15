$( document ).ready(function() {
    console.log( "ready!" );
});
$(document).ready(function () {
    $(".vsi-fe1-hover").hover(
        function () {
          $(this).addClass('vsi-fe1-active');
        }, 
        function () {
          $(this).removeClass('vsi-fe1-active');
        }
    );
});
