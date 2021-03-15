/*function() {
	var i = 0;
	setInterval(function() {
		$("#quote-" + i).removeClass("main");
		$("#quote-" + i).addClass("outside");
		i++;
		if(i>1) {
			for(i = 0;) {
				$("#quote" + i).removeClass("outside");
			}
			i = 0;
		}
		$("#quote" + i).addClass("main");
	}, 5000);
});*/

$(function() {
	var i = 0;
	slideCount = 5;
	function timeout() {
		setTimeout(function() {
			// Move $("#quote" + i) off to the left
			$("#quote" + i).animate({
				right: "120%"
			}, 2000);
			// Change selected quote
			i++;
			if(i > (slideCount - 1)) {
				i = 0;
			}
			// Move $("#quote" + i) to right side then back to middle
			$("#quote" + i).css("right", "-60%");
			$("#quote" + i).animate({
				right: "20%"
			}, 2000);
			timeout();
		}, 7000);
	};
	timeout();
});