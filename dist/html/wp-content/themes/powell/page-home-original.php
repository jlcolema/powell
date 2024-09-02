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

	<div class="cta catalogs-overview">

		<div class="wrap">

			<div class="inner-wrap">

				<div class="covers">

					<div class="cover">

						<img src="<?php the_field('cta_catalogs_cover_one'); ?>" alt="<?php the_title(); ?>" />

					</div>

					<div class="cover">

						<img src="<?php the_field('cta_catalogs_cover_two'); ?>" alt="<?php the_title(); ?>" />

					</div>

				</div>

				<h2 class="title"><?php the_field('cta_catalogs_title'); ?></h2>

				<div class="description">

					<p><?php the_field('cta_catalogs_description'); ?></p>

				</div>

				<div class="more">

					<a href="<?php the_field('cta_catalogs_page_link'); ?>">Read More</a>

				</div>

			</div>

		</div>

	</div>

	<div class="cta store-locator">

		<div class="wrap">

			<div class="inner-wrap">

				<div class="map">

					<img src="<?php the_field('cta_store_locator_map'); ?>" alt="<?php the_field('cta_store_locator_title'); ?>" />

				</div>

				<div class="content">

					<h2 class="title"><?php the_field('cta_store_locator_title'); ?></h2>

					<div class="description">

						<p><?php the_field('cta_store_locator_description'); ?></p>

					</div>

					<div class="more">

						<a href="<?php the_field('cta_store_locator_page_link'); ?>">Read More</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php

		/* Collection Types */

	?>

	<?php

		// check if the flexible content field has rows of data

		if( have_rows('cta_collection_types') ):

			// loop through the rows of data

			while ( have_rows('cta_collection_types') ) : the_row();

				// check current row layout

				if( get_row_layout() == 'cta_collection_image_only' ):

					/* Variables */

					// Image

					$cta_collection_image_only_image = get_sub_field('cta_collection_image_only_image');

					// Category Link

					$cta_collection_image_only_category_link = get_sub_field('cta_collection_image_only_category_link');

					// Description

					$cta_collection_image_only_description = get_sub_field('cta_collection_image_only_description');

					echo '<div class="cta image-only">';

						echo '<div class="wrap">';

							echo '<div class="inner-wrap">';

								echo '<div class="photo">';

									echo '<a href="' . $cta_collection_image_only_category_link . '">';

										echo '<img src="' . $cta_collection_image_only_image['url'] . '" alt="' . $cta_collection_image_only_image['alt'] . '" />';

									echo '</a>';

								echo '</div>';

								echo '<div class="description">';

									echo '<p>' . $cta_collection_image_only_description . '</p>';

								echo '</div>';

							echo '</div>';

						echo '</div>';

					echo '</div>';

				elseif( get_row_layout() == 'cta_collection_image_and_description'):

					/* Variables */

					// Title

					$cta_collection_image_and_description_title = get_sub_field('cta_collection_image_and_description_title');

					// Description

					$cta_collection_image_and_description_description = get_sub_field('cta_collection_image_and_description_description');

					// Category Link

					$cta_collection_image_and_description_category_link = get_sub_field('cta_collection_image_and_description_category_link');

					// Image

					$cta_collection_image_and_description_image = get_sub_field('cta_collection_image_and_description_image');

					echo '<div class="cta image-and-description">';

						echo '<div class="wrap">';

							echo '<div class="inner-wrap">';

								echo '<div class="photo">';

									echo '<img src="' . $cta_collection_image_and_description_image['url'] . '" alt="' . $cta_collection_image_and_description_title . '" />';

								echo '</div>';

								echo '<div class="content">';

									echo '<h2 class="title">' . $cta_collection_image_and_description_title . '</h2>';

									echo '<div class="description">';

										echo '<p>' . $cta_collection_image_and_description_description . '</p>';

									echo '</div>';

									echo '<div class="more">';

										// echo '<a href="' . $cta_collection_image_and_description_category_link . '">Read More</a>';

										echo '<a href="http://powell.smbls.com/furniture/rugs/">Read More</a>';

									echo '</div>';

								echo '</div>';

							echo '</div>';

						echo '</div>';

					echo '</div>';

				endif;

			endwhile;

		else :

			// no layouts found

		endif;

	?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<div class="cta about-us">

					<h1 class="title"><?php the_field('introduction_headline'); ?></h1>

					<div class="description">

						<p><?php the_field('introduction_description'); ?></p>

					</div>

					<div class="more">

						<a href="<?php the_field('introduction_page_link'); ?>">Read More</a>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>