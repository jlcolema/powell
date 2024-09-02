<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="entry">

						<?php the_content(); ?>

					</div>

					<h2>Addresses</h2>

					<div class="vcard">

						<div class="fn n org">

							Powell Furniture

						</div>

						<div class="adr">

							<span class="label">Executive Office:</span>

							<div class="street-address"><?php the_field('executive_street', 'option'); ?></div>
							<span class="locality"><?php the_field('executive_city', 'option'); ?></span>,
							<span class="region"><?php the_field('executive_state', 'option'); ?></span>
							<span class="postal-code"><?php the_field('executive_zipcode', 'option'); ?></span>

						</div>

						<div class="email">

							<span class="label">Email:</span>

							<a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a>

						</div>

						<div class="tel toll-free">

							<span class="label">Toll Free:</span> <?php the_field('contact_toll_free', 'option'); ?>

						</div>

						<div class="tel phone">

							<span class="label">Phone:</span> <?php the_field('contact_phone', 'option'); ?>

						</div>

						<div class="tel fax">

							<span class="label">Fax:</span> <?php the_field('contact_fax', 'option'); ?>

						</div>

					</div>

					<h2>Become a Dealer</h2>

					<p>Powell Company is always looking to grow and partner with new retailers. If you own a traditional or online retail store and would like to become a dealer, <a href="/become-a-dealer/">click here to get more information</a>.</p>

					<h2>Find a Dealer Near You</h2>

					<p>Powell Company is a national wholesaler that sells directly to furniture retailers. At this time we do not sell directly to the public. If you are a consumer and wish to purchase our products, please use our <a href="/stores/">Store Locator</a> to a find a retailer in your area.</p>

				<?php endwhile; endif; ?>

			</div>

			<div id="secondary" role="complementary">

				<div class="widget promo">

					<div class="container">

						<div class="image">

							<a href="/furniture/">

								<img src="/wp-content/themes/powell/a/img/sidebars/furniture.jpg" alt="" />

							</a>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
