<?php

	/* Template Name: Product */

	/* In the future, this will be the template used for individual product pages. */

?>

<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div id="product">

						<div class="description">

							<p><?php the_field('furniture_description'); ?></p>

						</div>

						<div class="meta">

							<?php if( have_rows('furniture_size') ): ?>

								<div class="size">

									<div class="label">

										<span>Size</span>

									</div>

									<?php while( have_rows('furniture_size') ): the_row();

										$furniture_note = get_sub_field('furniture_note');

										$furniture_length = get_sub_field('furniture_length');

										$furniture_width = get_sub_field('furniture_width');

										$furniture_height = get_sub_field('furniture_height');

									?>

										<span>

											<?php if( get_sub_field('furniture_note') ): ?>

												<?php the_sub_field('furniture_note'); ?>

											<?php endif; ?>

											<?php if( get_sub_field('furniture_length') ): ?>

												<?php the_sub_field('furniture_length'); ?>&Prime; L

											<?php endif; ?>

											<?php if( get_sub_field('furniture_width') ): ?>

												&times; <?php the_sub_field('furniture_width'); ?>&Prime; W

											<?php endif; ?>

											<?php if( get_sub_field('furniture_width') ): ?>

												&times; <?php the_sub_field('furniture_height'); ?>&Prime; H

											<?php endif; ?>

										</span>

									<?php endwhile; ?>

								</div>

							<?php endif; ?>

							<?php if( get_field('furniture_part_number') ): ?>

								<div class="part-number">

									<div class="label">

										<span>Part Number</span>

									</div>

									<?php the_field('furniture_part_number'); ?>

								</div>

							<?php endif; ?>

						</div>

						<?php if( have_rows('furniture_samples') ): ?>

							<div id="samples">

								<div class="flexslider">

									<ul class="slides">

										<?php while( have_rows('furniture_samples') ): the_row();

											// vars

											$furniture_image = get_sub_field('furniture_image');
											// $content = get_sub_field('content');
											// $link = get_sub_field('link');


										?>

											<li>

												<img src="<?php echo $furniture_image['url']; ?>" alt="<?php the_sub_field('furniture_alt'); ?>" />

											</li>

										<?php endwhile; ?>

									</ul>

								</div>

							</div>

						<?php endif; ?>

					</div>

					<!-- Related Products will go here... -->

					<?php

						$terms = get_field('furniture_category');

						if( $terms ):

					?>

						<div class="product-nav">

							<div class="next-product">

								<?php next_post_link_plus( array(

									'order_by' => 'post_title',
									// 'order_2nd' => 'post_date',
									// 'meta_key' => '',
									// 'post_type' => '',
									'loop' => true,
									// 'end_post' => false,
									// 'thumb' => false,
									// 'max_length' => 0,
									'format' => '%link',
									'link' => 'Next Product &rarr;',
									// 'date_format' => '',
									// 'tooltip' => '%title',
									'in_same_cat' => true,
									// 'in_same_tax' => false,
									// 'in_same_format' => false,
									// 'in_same_author' => false,
									// 'in_same_meta' => false,
									// 'ex_cats' => '',
									// 'ex_cats_method' => 'weak',
									// 'in_cats' => '',
									// 'ex_posts' => '',
									// 'in_posts' => '',
									// 'before' => '',
									// 'after' => '',
									// 'num_results' => 1,
									// 'return' => ''

								) ); ?>

							</div>

							<div class="back-to">

								<?php foreach( $terms as $term ): ?>

									<a href="<?php echo get_term_link( $term ); ?>">

										<span class="arrow">&larr;</span> Back to <?php echo $term->name; ?>

									</a>

								<?php endforeach; ?>

							</div>

						</div>

					<?php endif; ?>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>