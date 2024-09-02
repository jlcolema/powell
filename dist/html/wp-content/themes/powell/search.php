<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : ?>

					<h1><?php _e('Search Results','bloom'); ?></h1>

					<ul class="results">

						<?php while (have_posts()) : the_post(); ?>

							<li <?php post_class() ?> id="post-<?php the_ID(); ?>">

								<h1>

									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								</h1>

							</li>

						<?php endwhile; ?>

					</ul>

					<?php post_navigation(); ?>

				<?php else : ?>

					<h1><?php _e('Oops&hellip; there&rsquo;s nothing to be found here.','bloom'); ?></h1>

					<p>Add a fancy, helpful message here in case someone arrives on this page.</p>

				<?php endif; ?>

			</div>

			<div id="secondary" role="complementary">

				<p>Fancy sidebar details will be here.</p>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
