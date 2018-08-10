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

	(function(){

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
	})();

	/*
	hero-skew
	*/
	(function(){

		if ($('.hero-skew').length>0) {

			// get the image
			var polygon = $(".hero-skew__polygon")[0];
			// create and customize the canvas
			var canvas = document.createElement("canvas");

			var leftGrad = $(".hero-skew__polygon").find('.hero-skew__polygon__left-grad');
			var rightGrad = $(".hero-skew__polygon").find('.hero-skew__polygon__right-grad');


			var rightGradDelta =8.4;
			var leftGradDelta =8.4;


			function render(){

				var tanBeta = canvas.width/canvas.height;

				var beta = Math.degrees(Math.atan(tanBeta));

				rightGrad.css({
					'transform': "rotate("+(beta - 90 + rightGradDelta)+"deg)"
				});


				//console.log('beta', beta);


				var alfa  = 180 - 90 - beta;

				//console.log('alfa', alfa);

				leftGrad.css({
					'transform': "rotate("+(beta - 90 + leftGradDelta)+"deg)"
				});


				//console.log('beta', beta);

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
			render();
			$(window).resize(function(){
				render();
			});
		};

	})();


	(function() {
	    var langSwitcher = document.getElementById('langSwitcher');
	    var langOpen = false;
	    var arrow = document.getElementsByClassName('footer__dropdown-icon')[0];
	    langSwitcher.addEventListener('click', function() {
	            for(var i = 0; i<3; i++) {
	                langSwitcher.children[i].classList.toggle('footer__lang-switcher--active');
	            }
	        if(!langOpen) {
	            langSwitcher.children[3].style.display = 'block';
	            langOpen = true;
	            arrow.classList.toggle('footer__lang-arrow--active');
	        } else {
	            langSwitcher.children[3].style.display = 'none';
	            langOpen = false;
	            arrow.classList.toggle('footer__lang-arrow--active');
	        }
	    })
	    langSwitcher.addEventListener('mouseenter', function() {
	        // langSwitcher.classList.toggle('footer__lang-switcher--active');
	            for(var i = 0; i<3; i++) {
	                langSwitcher.children[i].classList.toggle('footer__lang-switcher--active');
	            }
	    })
	    langSwitcher.addEventListener('mouseleave', function() {
	        // langSwitcher.classList.toggle('footer__lang-switcher--active');
	            for(var i = 0; i<3; i++) {
	                langSwitcher.children[i].classList.toggle('footer__lang-switcher--active');
	            }
	    })
	}());

	if ($('#row').length>0) {
		let row = document.querySelector('#row');
		let size = row.childElementCount;
		// console.log(row.children);
		for(let i = 0; i<size; i++) {
		  var imgSize = row.children[i].firstElementChild.firstElementChild.offsetWidth;
		  var tooltip = row.children[i].firstElementChild.lastElementChild;
		  var tooltipSize = row.children[i].firstElementChild.lastElementChild.offsetWidth;
		  // let difference = tooltipSize - imgSize - imgSize/2;
		  if(tooltipSize > imgSize) {
		    var difference = tooltipSize - imgSize;
		    var result = '-' + difference / 2 + 'px';
		    tooltip.style.left = result;
		  } else {
		    var difference = Math.abs(tooltipSize - imgSize);
		    var result = difference / 2 + 'px';
		    tooltip.style.left = result;
		  }
		  // console.log(row.children[i]);
		}
		// let tooltipSize = document.getElementById('tooltip').offsetWidth;
		// let imgSize = document.getElementById('img').offsetWidth;
		// let difference = tooltipSize - imgSize;
		// let result = difference / 2;
	}

/*
	Adaptive tables
*/
	(function(){

			if ($('.adaptive-table').length>0) {

				$('.simplebar-content').each(function(){
					$(this).scroll(function(){
							if ($(window).width()>600) {
									var scrL = $(this).scrollLeft();

									var firstColW = $(this).find('.adaptive-table__table td').first().width();

									if (scrL>=firstColW) {
										$(this).find('.adaptive-table__table').addClass('adaptive-table__onscroll');
										$(this).find('.adaptive-table__table tr td,th:first-child').width(Math.round(firstColW));
									}else{
										$(this).find('.adaptive-table__table').removeClass('adaptive-table__onscroll');
									}
							}else{
								$('.adaptive-table__table').removeClass('adaptive-table__onscroll');
							}
					});
				});

			try{
				var headertext = [],
					headers = document.querySelectorAll(".adaptive-table__table  th"),
					tablerows = document.querySelectorAll(".adaptive-table__table  th"),
					tablebody = document.querySelector(".adaptive-table__table  tbody");

				for(var i = 0; i < headers.length; i++) {
				  var current = headers[i];
				  headertext.push(current.textContent.replace(/\r?\n|\r/,""));
				} 
				for (var i = 0, row; row = tablebody.rows[i]; i++) {
				  for (var j = 0, col; col = row.cells[j]; j++) {
				    col.setAttribute("data-th", headertext[j]);
				  } 
				}
			}catch(e){
				console.warn(e);
			}


		};
	})();


});














Math.degrees = function(radians) {
	return radians * 180 / Math.PI;
}