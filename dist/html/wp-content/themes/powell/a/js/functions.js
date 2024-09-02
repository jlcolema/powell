
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).ready(function (){


		/*-------------------------------------------
			Pre-Header Nav Toggle
		-------------------------------------------*/

		// Add toggle function to open and close
		// the primary navigation when Javascript
		// is available.


		/* Add toggle button to page */

		$('#pre-header').find('.nav').prepend('<div class="toggle"></div>');

		$('#pre-header').find('.toggle').append('<span>Nav</span>');


		/* Add or remove class of 'open' on click or tap */

		$('#pre-header').find('.toggle').click(function() {

			$(this).next('ul').toggleClass('open');

			$(this).parent().parent().parent().toggleClass('open');

		});


		/*-------------------------------------------
			Search Toggle (in Pre-Header)
		-------------------------------------------*/

		// Add toggle function to open and close
		// the search field.


		/* Add or remove class of 'open' on click or tap */

		$('#pre-header').find('label').click(function() {

			$(this).parent().toggleClass('open');

		});


		/*-------------------------------------------
			Open External URLs in New Window
		-------------------------------------------*/

		// Notes...


		$('a').each(function() {

			var a = new RegExp('/' + window.location.host + '/');

			if(!a.test(this.href)) {

				$(this).click(function(event) {

					event.preventDefault();
					event.stopPropagation();
					window.open(this.href, '_blank');

				});

			}

		});


		/*-------------------------------------------
			Widows
		-------------------------------------------*/

		// Notes...


		$('.cta.store-locator .description, .cta.about-us .description, #stores .overview').widowFix();


		/*-------------------------------------------
			Remove Store Locator CSS
		-------------------------------------------*/

		// Notes...


		// Remove primary stylesheet

		$('#wpsl-css-css').remove();

		// Remove inline styles

		$('#wpsl-wrap').prev('style').remove();


		/*-------------------------------------------
			Add Placeholder to Search
		-------------------------------------------*/

		// Notes...


		$('#wpsl-search-input').attr('placeholder', 'Location');


		/*-------------------------------------------
			Info Window Close Button
		-------------------------------------------*/

		// Notes...


		$('.gm-style-iw').delegate( 'next', function() {

			$(this).addClass('close-window');

		});


		/*-------------------------------------------
			Remove Highlight from Furniture
		-------------------------------------------*/

		// In certain cases where a furniture category
		// has been added to the primary navigation,
		// the Furniture menu item should not be active.


		if ( $( '.menu-item-object-category.current-menu-item' ).length ) {

			$('#menu-item-67').addClass('inactive');

		}


		/*-------------------------------------------
			Fixed Header
		-------------------------------------------*/

		// Notes...


		$(window).scroll(function() {

			if ($(window).scrollTop() >= 40) {

				$('body').addClass('fixed');

			}

			else {

				$('body').removeClass('fixed');

			}

		});


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Add class of "dev" to <body>


		// $("body").addClass("dev");


		// Displays screen size on the fly.


		// var windowSize = $(window).width();

		// $("#footer").after('<div id="dev"></div>');

		// $("#dev").text(windowSize);


	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Displays screen size on the fly.


		// var windowSize = $(window).width();

		// $("#dev").text(windowSize);


	});


})(window.jQuery);