$(function () {

// $('#login').arcticmodal();
// $('#recover').arcticmodal();
// $('#success-registration').arcticmodal();
// $('#confirmed-registration').arcticmodal();
// $('#can-enter').arcticmodal();
// $('#key-error').arcticmodal();
// $('#confirmation-error').arcticmodal();
// $('#registration').arcticmodal();
	/*
		Burger btn
	*/
	$('.js-mobile-menu-btn').click(function () {
		$(this).toggleClass('mobile-menu-btn_active');
	});

	$(document).click(function(event) {
		if ($(event.target).closest(".mobile-menu-body, .js-mobile-menu-btn").length) return;
		$(".js-mobile-menu-btn").removeClass('mobile-menu-btn_active');
		event.stopPropagation();
	});

	$(window).resize(function () {
		if ($(this).width() > 940) {
			$('.js-mobile-menu-btn').removeClass('mobile-menu-btn_active');
		};
	});


	/*
		Makes hml els - lines for svg background
	*/
	makeSvgLines();
	$(window).resize(function () {
		makeSvgLines();
	});
	function makeSvgLines() {
		$('.js-svg-lines .line').remove();
		$('.js-svg-lines').each(function () {
			$(this).append('<span class="line"></span>');
			$(this).find('.line').css({
				width: $(window).width(),
				left: (($(window).width() - $('.wrap').width()) / 2) * (-1)
			});
		});
	}


	/*
	Safety block skew
	*/
	(function () {

		if ($('.safety').length > 0) {

			// get the image
			var polygon = $(".safety__polygon")[0];
			// create and customize the canvas
			var canvas = document.createElement("canvas");

			function render() {
				canvas.width = $(polygon).width();
				canvas.height = $(polygon).height();
				polygon.appendChild(canvas);
				// get the context
				var ctx = canvas.getContext("2d");
				ctx.clearRect(0, 0, canvas.width, canvas.height);
				ctx.beginPath();
				ctx.moveTo(0, canvas.height);
				ctx.lineTo(canvas.width, canvas.height);
				ctx.lineTo(canvas.width, 0);
				ctx.fillStyle = "#fff";
				ctx.fill();
			}

			render();
			$(window).resize(function () {
				render();
			});
		};
	})();


	/*
		hero-skew
	*/
	(function () {

		if ($('.hero-skew').length > 0) {

			$('.hero-skew').each(function(){




				if ($(this).find(".hero-skew__polygon").length>0) {
					var polygon = $(this).find(".hero-skew__polygon")[0];
					
					var canvas = document.createElement("canvas");

					polygon.appendChild(canvas);
					var leftGrad = $(this).find(".hero-skew__polygon").find('.hero-skew__polygon__left-grad');
					var rightGrad = $(this).find(".hero-skew__polygon").find('.hero-skew__polygon__right-grad');
					var rightGradDelta = 8.4;
					var leftGradDelta = 8.4;

					/*
						calculate rotation angle for skew gradient
					*/
					function renderBottom() {

						/*Bottom*/
						var tanBeta = canvas.width / canvas.height;

						var beta = Math.degrees(Math.atan(tanBeta));

						rightGrad.css({
							'transform': "rotate(" + (beta - 90 + rightGradDelta) + "deg)"
						});

						var alfa = 180 - 90 - beta;

						leftGrad.css({
							'transform': "rotate(" + (beta - 90 + leftGradDelta) + "deg)"
						});

 



						canvas.width = $(polygon).width();
						canvas.height = $(polygon).height();
						var ctx = canvas.getContext("2d");
						ctx.clearRect(0, 0, canvas.width, canvas.height);
						ctx.beginPath();
						ctx.moveTo(0, canvas.height);
						ctx.lineTo(canvas.width, canvas.height);
						ctx.lineTo(canvas.width, 0);
						ctx.fillStyle = "#fff";
						ctx.fill();

					}

					renderBottom();
					renderBottom();
					$(window).resize(function () {
						renderBottom();
					});
				}


				if ($(this).find(".hero-skew__polygon--top").length>0) {
					var polygonTop = $(this).find(".hero-skew__polygon--top")[0];

					var canvasTop = document.createElement("canvas");

					polygonTop.appendChild(canvasTop);


					var leftTopGrad = $(this).find(".hero-skew__polygon--top").find('.hero-skew__polygon--top__left-grad');
					var rightTopGrad = $(this).find(".hero-skew__polygon--top").find('.hero-skew__polygon--top__right-grad');



					var rightTopGradDelta = 8.4;
					var leftTopGradDelta = 8.4;


					/*
						calculate rotation angle for skew gradient
					*/
					function renderTop() {

						 


						/*Top*/
						var tanBetaTop = canvasTop.width / canvasTop.height;

						var betaTop = Math.degrees(Math.atan(tanBetaTop));

						rightTopGrad.css({
							'transform': "rotate(" + (betaTop - 90 + rightTopGradDelta) + "deg)"
						});

						var alfaTop = 180 - 90 - betaTop;

						leftTopGrad.css({
							'transform': "rotate(" + (betaTop - 90 + leftTopGradDelta) + "deg)"
						});


						canvasTop.width = $(polygonTop).width();
						canvasTop.height = $(polygonTop).height();
						var ctxTop = canvasTop.getContext("2d");
						ctxTop.clearRect(0, 0, canvasTop.width, canvasTop.height);
						ctxTop.beginPath();
						ctxTop.moveTo(0, 0);
						ctxTop.lineTo(canvasTop.width, 0);
						ctxTop.lineTo(0, canvasTop.height);
						ctxTop.fillStyle = "#fafafa";
						ctxTop.fill();
					}

					renderTop();
					renderTop();
					$(window).resize(function () {
						renderTop();
					});
				}
			});

		};

	})();


	/*
		content-skew
	*/

	(function(){
		if ($('.content-skew').length>0) {
			$('.content-skew').each(function(){
					var polygon = $(this).find(".content-skew__polygon")[0];
					var canvas = document.createElement("canvas");
					polygon.appendChild(canvas);

					var leftGrad = $(this).find('.content-skew__polygon_polygon__left-grad');
					var rightGrad = $(this).find('.content-skew__polygon_polygon__right-grad');


					var rightGradDelta = 8.4;
					var leftGradDelta = 8.4;
				function render() {

					var tanBeta = canvas.width / canvas.height;

					var beta = Math.degrees(Math.atan(tanBeta));

					rightGrad.css({
						'transform': "rotate(" + (beta - 90 + rightGradDelta) + "deg)"
					});

					var alfa = 180 - 90 - beta;

					leftGrad.css({
						'transform': "rotate(" + (beta - 90 + leftGradDelta) + "deg)"
					});


					canvas.width = $(polygon).width();
					canvas.height = $(polygon).height();
					var ctx = canvas.getContext("2d");
					ctx.clearRect(0, 0, canvas.width, canvas.height);
					ctx.beginPath();
					ctx.moveTo(0, 0);
					ctx.lineTo(canvas.width, 0);
					ctx.lineTo(0, canvas.height);
					ctx.fillStyle = "#fff";
					ctx.fill();
				}

				render();
				render();
				$(window).resize(function () {
					render();
				});
			});
		}
	})();


	/*
		Language switcher
	*/
	(function () {

		$('.js-lang-switcher').each(function(){
			var swr = $(this);
			$(this).find('.lang-switcher__handle').click(function(){
				$(this).toggleClass('lang-switcher__handle--active');
			});
		});

		$(document).click(function(event) {
			if ($(event.target).closest(".js-lang-switcher, .lang-switcher__handle").length) return;
			$(".lang-switcher__handle").removeClass('lang-switcher__handle--active');
			event.stopPropagation();
		});
	}());


	/*
		Tooltips
	*/
	(function () {
		if ($('#row').length > 0) {
			var row = document.querySelector('#row');
			var size = row.childElementCount;
			for (var i = 0; i < size; i++) {
				var imgSize = row.children[i].firstElementChild.firstElementChild.offsetWidth;
				var tooltip = row.children[i].firstElementChild.lastElementChild;
				var tooltipSize = row.children[i].firstElementChild.lastElementChild.offsetWidth;
				if (tooltipSize > imgSize) {
					var difference = tooltipSize - imgSize;
					// the reason for -8 px because I positioned -8px all icons
					var result = '-' + difference / 2 - 8 + 'px';
					tooltip.style.left = result;
				} else {
					var difference = Math.abs(tooltipSize - imgSize);
					var result = difference / 2 - 8 + 'px';
					tooltip.style.left = result;
				}
			}
		}
	})();


	/*
		Adaptive tables
	*/
	(function () {
		if ($('.adaptive-table').length > 0) {
			$('.simplebar-content').each(function () {
				$(this).scroll(function () {
					if ($(window).width() > 480) {
						var scrL = $(this).scrollLeft();

						var firstColW = $(this).find('.adaptive-table__table td').first().width();

						if (scrL >= firstColW) {
							$(this).find('.adaptive-table__table').addClass('adaptive-table__onscroll');
							$(this).find('.adaptive-table__table tr td,th:first-child').width(Math.round(firstColW));
							$(this).find('.adaptive-table__table').css({'padding-left':firstColW+"px"});

						} else {
							$(this).find('.adaptive-table__table').removeClass('adaptive-table__onscroll');
							$(this).find('.adaptive-table__table').css({'padding-left':0+"px"});
						}
					} else {
						$('.adaptive-table__table').removeClass('adaptive-table__onscroll');
					}
				});
			});

			$('.adaptive-table').each(function () {
				var headertext = [],
					headers = $(this).find(".adaptive-table__table  th"),
					tablerows = $(this).find(".adaptive-table__table  th"),
					tablebody = $(this).find(".adaptive-table__table  tbody");

				for (var i = 0; i < headers.length; i++) {
					var current = headers[i];
					headertext.push(current.textContent.replace(/\r?\n|\r/, ""));
				}
				for (var i = 0, row; row = tablebody[0].rows[i]; i++) {
					for (var j = 0, col; col = row.cells[j]; j++) {
						col.setAttribute("data-th", headertext[j]);
					}
				}
			});
		};
	})();


	/*
		Reviews slider
	*/
	(function(){
		if ($('.js-reviews__slider').length>0) {
			if ($('.js-reviews__slider > ul li').length >1) {
				$('.js-reviews__slider > ul').bxSlider({
					adaptiveHeight:true
				});
				$('.js-reviews__slider').removeClass('reviews__slider--one-el');
			}
		};
	})();

	(function () {
		var animating = false;
		$('.accordion .item').click(function () {
			if (animating) {
				return;
			}
			var cur = $(this);
			if (cur.hasClass('item--active')) {
				animating = true;
				cur.find('.body').slideUp(200, function () {
					animating = false;
					cur.removeClass('item--active');
				});
			} else {
				animating = true;

				$('.accordion .item').not(cur).removeClass('item--active').find('.body').slideUp(300, function () {
					cur.find('.body').slideDown(200, function () {
						animating = false;
						cur.addClass('item--active');
					});
				});
			}
		});

		$('.accordion .item .body').click(function (e) {
			e.stopPropagation();
		});
	})();


	/*
		Roadmap slider
	*/
	(function(){
		var roadmap = $('.roadmap');
		if (roadmap.length>0) {
			roadmap.each(function(){
				var parent = $(this);
				updateScrolableLeftOffset(parent);
				checkDisabled(parent);

				intHendels(parent);
			
				$(window).resize(function () {
					updateScrolableLeftOffset(parent);
					checkDisabled(parent);
				});

				parent.find('.roadmap__scrolable').scroll(function(){
					checkDisabled(parent);
				});
			});


			function intHendels(parent){
				var scrolable = parent.find('.roadmap__scrolable');
				var handels = {
					prev : parent.find('.roadmap__hendel--prev'),
					next : parent.find('.roadmap__hendel--next')
				}
				var steps = parent.find('.roadmap__steps__step');
				var stepW = steps.width();

				console.log('stepW', stepW);


				handels.prev.click(function(){
					stepW = Math.round(stepW);
					scrolable.animate({
							scrollLeft: scrolable.scrollLeft() - stepW
						}, 300, function(){
							handelsCheck();
						});
					return false;
				});

				handels.next.click(function(){
					stepW = Math.round(stepW);

					scrolable.animate({
							scrollLeft: scrolable.scrollLeft() + stepW
						}, 300, function(){
							handelsCheck();
						});

					return false;
				});

				function handelsCheck(){
					//debugger;

					//console.log('scrolable.scrollLeft()', scrolable.scrollLeft());

					//console.log('stepW', stepW);
					//console.log('stepW * 3', stepW * 3);

				//	var winW = $(window).width();

					//console.log('winW', winW);

					//debugger;
/*
					if ( scrolable.scrollLeft() > 0 ) {
						handels.prev.removeClass('roadmap__hendel--disabled');
					}else{
						//handels.prev.addClass('roadmap__hendel--disabled');
					}*/

					/*var wrap = parent.find('.wrap');
					if (  stepW * steps.length - scrolable.scrollLeft() > winW ) {
						 handels.next.removeClass('roadmap__hendel--disabled');
					} else{
						 handels.next.addClass('roadmap__hendel--disabled');
					}

					if ( scrolable.scrollLeft() == 0 ) {
						handels.prev.addClass('roadmap__hendel--disabled');
						handels.next.removeClass('roadmap__hendel--disabled');
					}else{
						handels.prev.removeClass('roadmap__hendel--disabled');
					}
*/
					

				}

			}


		}

		function updateScrolableLeftOffset(parent){
			setTimeout( function(){
				var wrap = parent.find('.wrap');
				var scrolable = parent.find('.roadmap__scrolable');
				var scrolableLeftOffset = ($(window).width() - wrap.width()) / 2;
				console.log('scrolableLeftOffset', scrolableLeftOffset);

				if (scrolableLeftOffset==0) {
					scrolableLeftOffset = 15;
				};

				scrolable.css({
					'padding-left' : scrolableLeftOffset + 'px',
					//'padding-right' : scrolableLeftOffset + 'px',

				});

				var steps = parent.find('.roadmap__steps__step');
				var stepW = steps.width();

				$('.roadmap__steps').css({
					//'padding-left' : scrolableLeftOffset + 'px',
					'width' : stepW * steps.length + scrolableLeftOffset + 'px',

				});
			},500);
		}

		function checkDisabled(parent){
			var wrap = parent.find('.wrap');
			var steps = parent.find('.roadmap__steps__step');
			steps.each(function(){
				var step = $(this);

				if ((step.offset().left )  > wrap.width()) {
					step.addClass('roadmap__steps__step--disabled');
				}else{
					step.removeClass('roadmap__steps__step--disabled');
				}
			});
		}
	})();

	$('.js-close').click(function(){
		$(this).parents('.box-modal').arcticmodal('close');
	});


/*End JQReady function*/
});

/*
	Tools
*/
Math.degrees = function (radians) {
	return radians * 180 / Math.PI;
}