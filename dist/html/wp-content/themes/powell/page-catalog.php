<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="overview">

						<?php the_content(); ?>

					</div>

					<div class="catalogs">

						<ul>

							<li>

								<a href="<?php the_field('catalog_pdf'); ?>">

									<img src="<?php the_field('catalog_cover_image'); ?>" alt="2014 Powell Catalog" />

								</a>

							</li>

						</ul>

					</div>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>