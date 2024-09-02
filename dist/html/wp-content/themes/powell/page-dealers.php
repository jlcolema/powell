<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

			</div>

			<div id="secondary" role="complementary">

				<div class="widget promo">

					<div class="container">

						<div class="image">

							<a href="/catalogs/">

								<img src="/wp-content/themes/powell/a/img/sidebars/catalogs.jpg" alt="" />

							</a>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
