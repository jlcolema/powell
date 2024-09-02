<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="overview">

						<?php the_content(); ?>

					</div>

					<div class="categories">

						<ul>

							<?php

								$this_category_id=get_query_var('cat');

								$args=array(

									'parent' => $this_category_id,
									'orderby' => 'name',
									'order' => 'ASC',
									'exclude' => '1',
									'hide_empty' => 0

								);

								$categories=get_categories($args);

							?>


							<?php foreach($categories as $category): ?>

								<?php

									/* Image */

									$category_thumbnail = get_field('category_thumbnail', 'category_'.$category->cat_ID);

									// Image Sizes

									$large = "full";
									$small = "small_category_thumbnail";

									// Large (800 x 800)

									$large_category_thumbnail = wp_get_attachment_image_src( $category_thumbnail, $large );

									// Small (400 x 400)

									$small_category_thumbnail = wp_get_attachment_image_src( $category_thumbnail, $small );

								?>

								<li>

									<a href="<?php echo get_category_link( $category->term_id); ?>">

										<picture>

											<!--[if IE 9]>

												<video style="display: none;">

											<![endif]-->

												<source srcset="<?php echo $small_category_thumbnail[0]; ?>, <?php echo $large_category_thumbnail[0]; ?> 2x">

											<!--[if IE 9]>

												</video>

											<![endif]-->

											<img srcset="<?php echo $small_category_thumbnail[0]; ?>" alt="<?php echo $category->name; ?>">

										</picture>

										<div class="overlay">

											<div class="inner-overlay">

												<span><?php echo $category->name; ?></span>

											</div>

										</div>

									</a>

								</li>

							<?php endforeach; ?>

							<li class="gap"></li>

						</ul>






						<ul style="display: none;">

							<?php

								/* Collection Listing */

							?>

							<?php

								$args = array(

									'numberposts'	=> -1,
									'post_type'	=> 'furniture-category',
									'orderby'		=> 'menu_order',
									'post_status'	=> 'publish',
									'order'			=> 'ASC'

								);

								$items = get_posts($args);

							?>

							<?php foreach($items as $item): ?>

								<?php

									/* Thumbnail */

									// $project_thumbnail = get_field('project_thumbnail', $item->ID);

								?>

								<li>

									<a href="/furniture/dining/">

										<picture>

											<!--[if IE 9]>

												<video style="display: none;">

											<![endif]-->

												<source srcset="http://placeimg.com/400/400/arch, http://placeimg.com/800/800/arch 2x">

											<!--[if IE 9]>

												</video>

											<![endif]-->

											<img srcset="http://placeimg.com/400/400/arch" alt="Title of collection">

										</picture>

										<div class="overlay">

											<div class="inner-overlay">

												<span><?php echo $item->post_title; ?></span>

											</div>

										</div>

									</a>

								</li>

							<?php endforeach; ?>

						</ul>

					</div>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>