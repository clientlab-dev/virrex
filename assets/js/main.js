$(function(){
	$('.slider ul').bxSlider({
		pager:false,
		easing:'ease-in',
		speed:350
	});

	$('.js-menu-btn').click(function(){
		$(this).toggleClass('menu-btn--active');
		$('body').toggleClass('overflow');
	});

	$('.nav .has-child').click(function(e){
		$(this).toggleClass('has-child--active');
		//return false;

	});

	

	/*Rnage track*/

	var initRanges = function(){
		var ranges = $('.range-track');

		$.each(ranges,function(key,value){
			//debugger;
			//console.log('key, value', key, value);
			var id = $(value).attr('id');

			var min = $('.js-left-value-'+id).val()*1;
			var max =  $('.js-right-value-'+id).val()*1;
			//console.log('id', id);
			$(value).editRangeSlider({
				bounds:{
					min: min,
					max: max
				},
				arrows:false,
				step:1,
				'resize':true
			});
			$(value).editRangeSlider("values", min, max);

			$(value).bind("valuesChanging", function(e, data){
				$('.js-left-value-'+id).val(data.values.min);
				$('.js-right-value-'+id).val(data.values.max);
			});


			//debugger;
			$('.js-left-value-'+id).on('change keyup', function(){
				var min = $('.js-left-value-'+id).val()*1;
				var max =  $('.js-right-value-'+id).val()*1;
				$(value).editRangeSlider("values", min, max);
			});

			$('.js-right-value-'+id).on('change keyup', function(){
				var min = $('.js-left-value-'+id).val()*1;
				var max =  $('.js-right-value-'+id).val()*1;
				$(value).editRangeSlider("values", min, max);
			});
		});
		//ranges
		//ranges

	};

	initRanges();





	/*Main page present block screen height*/

	(function(){

		if ($('.main-page-present-block').length>0) {

			var scrH = $(window).height();

			var mainPageCatalogH =  $('.catalog-line').outerHeight();

			if ($(window).width()>=890 && scrH > 800) {
				$('.hero-slider').height(scrH - mainPageCatalogH);
			};

			$('.hero-slider>.slides').bxSlider({
				pager:true,
				controls:false,
				easing:'ease-in',
				speed:350,
				mode:'fade'
			});
		}
	})();


	/* hero header */

	(function(){
		if ($('.hero-slider').length>0) {
			$('header').addClass('hero-header');
		}
	})();


	/* Btn glow */
	(function(){
		

		$('.btn').on('mouseover, mousemove', function(evt){

			var x = evt.pageX - $(this).offset().left;
			var y = evt.pageY - $(this).offset().top;
			$(this).find('.glow').css({
				'top': y+"px",
				'left': x+"px"
			});
			
		});
	})();

	/* chage header on scroll*/
	(function(){
		var isHero = false;

		if ($('header').hasClass('hero-header')) {
			isHero = true;
		}

		$( window ).scroll(function(e) {
		 var scrT = window.pageYOffset;

	if (scrT>100) {
		$('header').addClass('body-scroll');
		$('header').removeClass('hero-header');
	}else{
		$('header').removeClass('body-scroll');
		if (isHero) {
			$('header').addClass('hero-header');
		}
	}
		});
	})();



	$('.catalog-sidebar-btn').click(function(){
		$(this).toggleClass('catalog-sidebar-btn--active');
		$('body').toggleClass('overflow');
		//initRanges();
		$('.range-track').editRangeSlider('resize');
	});



	/*PRODUCT SLIDER*/
	(function(){
		var thPager = $('.product-slider .js-thumb-pager');

		var thPagerItems = $('.product-slider .js-thumb-pager a');

		if (thPager.length>0) {
			var productSlider = $('.js-product-slider').bxSlider({
				pager:true,
				easing:'ease-in',
				speed:350,
				adaptiveHeight:true,
				//controls:false,
				//pagerCustom: '.product-slider-b .thumbs-block .items'
				onSlideAfter:function($slideElement, oldIndex, newIndex){
					thPagerItems.removeClass('active');
					$(thPagerItems[newIndex]).addClass('active');
				}
			});

			thPagerItems.click(function(e){
				var index = $(this).attr('data-slide-index');
				productSlider.goToSlide(index);
				e.preventDefault();
			});
		}

	})();


	$('.row-slider').each(function(key, value){

		var slider = $(this);
		var controls = $(this).find('.row-slider-controls');

		var prev = controls.find('.prev');
		var next = controls.find('.next');
		var track = slider.find('.cols-4');


		prev.click(function(){
			mooveTrack((-1))
			return false;
		});

		next.click(function(){
			mooveTrack(1)
			return false;
		});

		function mooveTrack(direction){
			var colWidth = slider.find('.col').outerWidth() * direction;
			colWidth = Math.round(colWidth);
			track.animate({
					scrollLeft: track.scrollLeft() + colWidth
				}, 500);
		}
	});


	/*configurator*/
	(function(){

		/*BAR*/
		if ($('.configurator-bottom-bar').length>0) {
			$('body').addClass('bottom-bar');
		};

		$('.configurator-window .close, .configurator-window .back').click(function(){
			configuratorWindow("","closeAll");
			return false;
		});

		$('.js-base-model').click(function(){
			configuratorWindow("base-model");
			return false;
		});

		$('.js-options').click(function(){
			configuratorWindow("options");
			return false;
		});

		$('.js-fittings').click(function(){
			configuratorWindow("fittings");
			return false;
		});

		//configuratorWindow("fittings");
	})();


	/*ACCORDION*/
	(function(){

		if ($('.accordion').length>0) {
			var title = $('.row-title');
			title.click(function(){
				//title.removeClass('active');
				if (!$(this).hasClass('active')) {
					$(this).addClass('active');

					var current = $(this);
					if ($(this).hasClass('row-title--autoscroll')) {
						$([document.documentElement, document.body]).animate({
							scrollTop: current.offset().top-400
						}, 100);
					};

					title.each(function(){
						if ($(this).closest(current).length == 0) {
							$(this).removeClass('active');
						};
					});
				}else{
					$(this).removeClass('active');
				}

				return false;
			});
		};
	})();

	/*OPTIONS*/
	(function(){

		$('.option-radio input').change(function(){
			//console.log($(this).prop('checked'));
			$(this).parents('.options').find('.option-description').removeClass('active');
			if ($(this).prop('checked')) {
				$(this).parents('.option').find('.option-description').addClass('active');
			}
		});

		$('.option-checkbox input').change(function(){
			//console.log($(this).prop('checked'));
			//$('.option-description').removeClass('active');

			if ($(this).prop('checked')) {
				$(this).parents('.option').find('.option-description').addClass('active');
			}else{
				$(this).parents('.option').find('.option-description').removeClass('active');
			}
		});
	})();



	/* Personal  info rows */

	(function(){
		if ($('.user-description').length>0) {

			$('.user-description .add-controls a').click(function(){
				check();
				$('.user-description').find('.'+$(this).attr('data-row-class')).removeClass('hidden');
				$('.user-description').find('.'+$(this).attr('data-row-class')+" input").focus();
				$(this).addClass('hidden');

				return falsse;

			});

			$('.user-description input').on('change',function(){
				check();
			});



			check();
			function check(){
				var rows = $('.user-description .row');
				var controls = $('.user-description .add-controls a');

				controls.each(function(){

					//debugger;
					var input = $('.user-description').find('.'+$(this).attr('data-row-class')+' input');

					if (input.val()=="") {
						$('.user-description').find('.'+$(this).attr('data-row-class')).addClass('hidden');
						$(this).removeClass('hidden');
					}else{
						$(this).addClass('hidden');
						$('.user-description').find('.'+$(this).attr('data-row-class')).removeClass('hidden');

					}
				});
			}
		};
	})();

	/* TABS */

	(function(){
		if ($('.tabs').length>0) {
			var handles = $('.tabs-handels .handle');
			var tabsItems = $('.tabs-body .item');
			handles.click(function(){
				handles.removeClass('active');
				$(this).addClass('active');
				tabsItems.addClass('hidden');
				$(tabsItems[$(this).attr('data-tab-no')]).removeClass('hidden');
				return false;
			});
		}
	})();

	/*
	compare page equal rows scroll
	*/

	(function(){
		$('.js-equal-scroll').scroll(function(){
			var scrollValue = $(this).scrollLeft();

			$('.js-equal-scroll').not($(this)).scrollLeft(scrollValue);
		});
	})();

	/*
		Dealer Map
	*/

	(function(){

	})();




});

function configuratorWindow(windowName, action){

	if (windowName!='' && windowName != undefined) {
		$('.configurator-window').each(function(){
			var name = $(this).attr('data-window-name');

			if (windowName == name) {
				$('.configurator-window').removeClass('window-open');
				$('body').removeClass('overflow');

				$(this).addClass('window-open');
				$('body').addClass('overflow');

			};
		});
	}

	if (action == "closeAll") {
		$('.configurator-window').removeClass('window-open');
		$('body').removeClass('overflow');
	};
}



/*
	Scroll bars
*/

if($('.dilers-list-side').length>0){
	new SimpleBar($('.dilers-list-side')[0])
}




var map;
     function initMap() {
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 54.7136709, lng: 20.4852733},
         zoom: 11,
         styles: mapStyle
       });

       // Create a <script> tag and set the USGS URL as the source.
               var script = document.createElement('script');
               // This example uses a local copy of the GeoJSON stored at
               // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
               script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
               document.getElementsByTagName('head')[0].appendChild(script);
     }

     // Loop through the results array and place a marker for each
           // set of coordinates.

           window.eqfeed_callback = function(results) {

           	console.log('result', results);
	              
               //var coords = results.features[i].geometry.coordinates;
               //var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
               var image = 'assets/img/svg/placemark.svg';
               var latLng = new google.maps.LatLng(54.7136709, 20.4852733);
               var marker = new google.maps.Marker({
                 position: latLng,
                 map: map,
                 icon:image,
               });

               marker.addListener('click', function() {
               	//console.log('arguments', arguments);
                         //map.setZoom(8);
               			var image = 'assets/img/svg/placemark_active.svg';
                         marker.setIcon(image); 
                         map.setCenter(marker.getPosition());
                       });
              
           }



var mapStyle = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
];