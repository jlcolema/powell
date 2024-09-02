		</div>

		<footer id="footer" role="contentinfo">

			<div class="wrap">

				<div class="inner-wrap">

					<p id="copyright">&copy; <?php echo date("Y"); echo " "; bloginfo( 'name' ); ?> <?php bloginfo('description'); ?>. All rights reserved.</p>

					<div class="back-to-home">

						<a href="<?php echo esc_url( home_url( '/') ); ?>">

							<span class="arrow">&larr;</span> Return to Home Page

						</a>

					</div>

				</div>

			</div>

		</footer>

	</div>

	<?php wp_footer(); ?>

	<?php

		/* Plugins */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/picturefill.js"></script>

	<?php if ( is_page( 'home' ) || is_single() ) { ?>

		<script src="<?php bloginfo('template_directory'); ?>/a/js/flexslider.js"></script>

	<?php } ?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/widows.js"></script>

	<?php

		/* Functions */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/functions.js"></script>

	<?php if ( is_page( 'home' ) ) { ?>

		<script>

			/*-------------------------------------------
				Featured Slideshow
			-------------------------------------------*/

			// Displayed on home page.


			$("#featured").find(".flexslider").flexslider({

				animation: "slide",
				slideshowSpeed: 9000,
				useCSS: false,
				controlNav: false,
				directionNav: true,
				start: function(slider){

					$("body").removeClass("loading");

				}

			});

		</script>

	<?php } ?>

	<?php if ( is_single() ) { ?>

		<script>

			/*-------------------------------------------
				Samples
			-------------------------------------------*/

			// Displayed on individual product page.


			$("#samples").find(".flexslider").flexslider({

				animation: "slide",
				slideshow: false,
				animationLoop: false,
				useCSS: false,
				controlNav: false,
				directionNav: true,
				start: function(slider){

					$("body").removeClass("loading");

				}

			});

		</script>

	<?php } ?>

	<?php

		/* Analytics */

	?>

	<?php if( the_field( 'google_analytics', 'option' ) ): ?>

		<!--

		Asynchronous google analytics; this is the official snippet.

		Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

		-->

		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php the_field( 'google_analytics', 'option'); ?>', 'domainname.com');

			ga('send', 'pageview');

		</script>

	<?php endif; ?>

</body>

</html>