<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="entry">

						<?php the_content(); ?>

					</div>

				<?php endwhile; endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>