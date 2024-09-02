<?php

	$posts = get_field('furniture_similar_products');

if( $posts ): ?>

	<div id="related">

		<div class="header">

			<h2 class="title">You May Also Be Interested In&hellip;</h2>

		</div>

		<div class="products">

			<ul>

				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

				<?php setup_postdata($post); ?>

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

					<li>

						<a href="<?php the_permalink(); ?>">

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

				<?php endforeach; ?>

			</ul>

		</div>

	</div>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>