<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="entry">

						<?php the_content(); ?>

					</div>

					<div class="form">

						<?php gravity_form(

							"2", // $id_or_title
							false, // $display_title
							false, // $display_description
							false, // $display inactive
							null, // $field_values
							false, // $ajax
							1 // $tabindex

						); ?>

					</div>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
