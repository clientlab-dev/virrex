$(function(){


	/*Burger btn*/

	$('.js-mobile-menu-btn').click(function(){
		$(this).toggleClass('mobile-menu-btn_active');
	});

	$(window).resize(function(){
		if ($(this).width()>940) {
			$('.js-mobile-menu-btn').removeClass('mobile-menu-btn_active');
		};
		 makeSvgLines();
	});

	 makeSvgLines();

	/*$(document).click(function(event) {
		if ($(event.target).closest(".mobile-menu-body").length) return;
		$(".js-mobile-menu-btn").removeClass('mobile-menu-btn_active');
		event.stopPropagation();
	});*/


function makeSvgLines(){
	$('.js-svg-lines .line').remove();
	$('.js-svg-lines').each(function(){
		$(this).append('<span class="line"></span>');
		$(this).find('.line').css({
			width: $(window).width(),
			left: (($(window).width() - $('.wrap').width())/2)*(-1)
		});
	});
}


/*
Safety block skew
*/
if ($('.safety').length>0) {

	// get the image
	var polygon = $(".safety__polygon")[0];
	// create and customize the canvas
	var canvas = document.createElement("canvas");

	function render(){
		canvas.width = $(polygon).width();
		canvas.height = $(polygon).height();
		polygon.appendChild(canvas);
		// get the context
		var ctx = canvas.getContext("2d");
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		ctx.beginPath();
		ctx.moveTo(0,canvas.height);
		ctx.lineTo(canvas.width,canvas.height);
		ctx.lineTo(canvas.width, 0);
		ctx.fillStyle = "#fff";
		ctx.fill();
	}

	render();
	$(window).resize(function(){
		render();
	});
};

});