<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : ?>

					<h1><?php single_cat_title(); ?></h1>

					<div class="overview">

						<p><?php echo category_description(); ?></p>

					</div>

					<div class="collection">

						<ul>

							<?php while (have_posts()) : the_post(); ?>

								<?php

									/* Image */

									$furniture_thumbnail = get_field('furniture_thumbnail');

									// Image Sizes

									$large = "full";
									$small = "small_furniture_thumbnail";

									// Large (800 x 800)

									$large_furniture_thumbnail = wp_get_attachment_image_src( $furniture_thumbnail, $large );

									// Small (400 x 400)

									$small_furniture_thumbnail = wp_get_attachment_image_src( $furniture_thumbnail, $small );

								?>

								<li <?php post_class() ?>>

									<a href="<?php the_permalink() ?>">

										<picture>

											<!--[if IE 9]>

												<video style="display: none;">

											<![endif]-->

												<source srcset="<?php echo $small_furniture_thumbnail[0]; ?>, <?php echo $large_furniture_thumbnail[0]; ?> 2x">

											<!--[if IE 9]>

												</video>

											<![endif]-->

											<img srcset="<?php echo $small_furniture_thumbnail[0]; ?>" alt="<?php the_title(); ?>">

										</picture>

									</a>

								</li>

							<?php endwhile; ?>

							<li class="gap"></li>

						</ul>

					</div>

				<?php else : ?>

					<h1><?php single_cat_title(); ?></h1>

					<div class="overview">

						<p><?php echo category_description(); ?></p>

					</div>

					<?php /*

					<h1><?php _e('No Products Available in this Category','bloom'); ?></h1>

					<div class="overview">

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum condimentum posuere. Praesent quis aliquet magna. Morbi laoreet libero et volutpat dapibus. Ut sed augue iaculis, eleifend neque et, dapibus sem. Fusce et elementum sapien. Nunc scelerisque nisl dui, et iaculis est scelerisque quis. In a velit sit amet ante vulputate rutrum. Quisque imperdiet ligula et mi tempor, sed molestie dolor bibendum. Nam id venenatis metus, vel sollicitudin est.</p>

					</div>

					*/ ?>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>