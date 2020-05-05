$(document).ready(function(){
	$(".menuBtn").on("click", function(event) {
		if($(".menuBtn").hasClass("clicked")) {
			$(this).removeClass("clicked");
			$(".mainMenu").removeClass("flip");
			$(".body-container").removeClass("flip");
		} else {
			$(this).addClass("clicked");
			$(".mainMenu").addClass("flip");
			$(".body-container").addClass("flip");
		}
	});
	$(".menuBtn :checkbox").on("click", function (event) {
        event.stopPropagation();
    });
});