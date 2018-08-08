$(function(){


	/*Burger btn*/

	$('.js-mobile-menu-btn').click(function(){
		$(this).toggleClass('mobile-menu-btn_active');
	});

	$(window).resize(function(){
		if ($(this).width()>940) {
			$('.js-mobile-menu-btn').removeClass('mobile-menu-btn_active');
		};
	});

	/*$(document).click(function(event) {
		if ($(event.target).closest(".mobile-menu-body").length) return;
		$(".js-mobile-menu-btn").removeClass('mobile-menu-btn_active');
		event.stopPropagation();
	});*/


});