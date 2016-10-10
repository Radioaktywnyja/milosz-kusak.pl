var tool="";
var licznik=0;

$(document).ready(function () {
	
	$(".tooltip-act").on("click", function (event) {
		if (licznik==0) {
			tool=$(this).attr("tool");
			$(tool).css("bottom", $(window).height() - event.pageY - 50).css("left", event.pageX - 20);
			$(tool).slideDown();
			licznik=1;
			return false;
		} else {
			$(tool).slideUp();
			licznik=0;
		}
	});
	
	$(".tooltip").on("click", function () {
		$(tool).slideUp();
		licznik=0;
	});
		
});