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
	try {
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

	} catch(e) {
		console.log('don\'t forget to fix it\nthere are no tooltips for this js code to work');
	}

});