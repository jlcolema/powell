<?php get_header(); ?>

	<div id="featured">

		<div class="wrap">

			<div class="flexslider">

				<?php if( have_rows('featured_slides') ): ?>

					<ul class="slides">

						<?php while( have_rows('featured_slides') ): the_row();

							/* Image */

							$featured_slide_image = get_sub_field('featured_slide_image');

							// Image Sizes

							$large = "full";
							$medium = "medium_featured_slide";
							$small = "small_featured_slide";

							// Large (1000 x 480)

							$large_featured_slide_image = wp_get_attachment_image_src( $featured_slide_image, $large );

							// Medium (800 x 480)

							$medium_featured_slide_image = wp_get_attachment_image_src( $featured_slide_image, $medium );

							// Small (480 x 480)

							$small_featured_slide_image = wp_get_attachment_image_src( $featured_slide_image, $small );

							/* Headline */

							$featured_slide_headline = get_sub_field('featured_slide_headline');

							$featured_slide_page_link = get_sub_field('featured_slide_page_link');

						?>

							<li>

								<a href="<?php echo $featured_slide_page_link; ?>">

									<picture>

										<!--[if IE 9]>

											<video style="display: none">

										<![endif]-->

										<source srcset="<?php echo $large_featured_slide_image[0]; ?>" media="(min-width: 800px)">

										<source srcset="<?php echo $medium_featured_slide_image[0]; ?>" media="(min-width: 480px)">

										<source srcset="<?php echo $small_featured_slide_image[0]; ?>">

										<!--[if IE 9]>

											</video>

										<![endif]-->

										<img srcset="<?php echo $small_featured_slide_image[0]; ?>" alt="<?php echo $featured_slide_headline; ?>" />

									</picture>

									<div class="overlay">

										<div class="headline">

											<span><?php echo $featured_slide_headline; ?></span>

										</div>

									</div>

								</a>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

	</div>

	<div class="cta">

		<div class="wrap">

			<div class="bombay-heritage">

				<a href="/furniture/bombay/">

					<img src="/wp-content/themes/powell/a/img/new/bombay-heritage.jpg" alt="Bombay Heritage" />

				</a>

			</div>

		</div>

	</div>

	<div class="cta">

		<div class="wrap">

			<div class="rug-collection">

				<a href="/furniture/rugs/">

					<img src="/wp-content/themes/powell/a/img/new/rug-collection.jpg" alt="Powell Rug Collection" />

				</a>

			</div>

		</div>

	</div>

	<div class="cta">

		<div class="wrap">

			<div class="powell-home-fashions">

				<a href="/catalog/">

					<img src="/wp-content/themes/powell/a/img/new/powell-home-fashions.jpg" alt="Powell Home Fashions" />

				</a>

			</div>

			<div class="retail-store-locator">

				<a href="/stores/">

					<img src="/wp-content/themes/powell/a/img/new/retail-store-locator.jpg" alt="Retail Store Locator" />

				</a>

			</div>

		</div>

	</div>

	<div class="notice">

		<div class="wrap">

			<p>

				<a href="/anywhere-lounger/">Anywhere Lounger Safety Enhancement Kit</a>

			</p>

		</div>

	</div>

<?php get_footer(); ?>