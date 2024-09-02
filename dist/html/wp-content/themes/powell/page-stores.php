<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="overview">

						<?php the_content(); ?>

					</div>

					<div id="locator">

						<?php echo do_shortcode("[wpsl]"); ?>

					</div>

				<?php endwhile; endif; ?>

			</div>

			<div id="secondary" role="complementary">

				<div class="widget retailers">

					<div class="header">

						<h3 class="widget-title">Online Retailers</h3>

						<div class="description">

							<p>Powell Company products are also available for purchase on several leading online retailers. Some of those websites are listed below.</p>

						</div>

					</div>

					<div class="container">

						<div class="country united-states">

							<h4>United States</h4>

							<ul>

								<li>

									<a href="http://search.hayneedle.com/search/index.cfm?Ntt=powell&Ntk=all" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/hayneedle.jpg" alt="Hayneedle" />

									</a>

								</li>

								<li>

									<a href="http://www.ezbuyfurniture.com/powell-furniture.html" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/ezbuy.jpg" alt="EZ Buy Furniture" />

									</a>

								</li>

								<li>

									<a href="http://www.onewayfurniture.com/powell-furniture.html" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/one-way-furniture.jpg" alt="One Way Furniture" />

									</a>

								</li>

								<li>

									<a href="http://www.gowfb.com/brand/powell/791" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/wholesale-furniture-brokers.jpg" alt="Wholesale Furniture Brokers" />

									</a>

								</li>

								<li>

									<a href="http://www.everythingfurniture.com/vendor-39.html" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/everything-furniture.jpg" alt="Everything Furniture" />

									</a>

								</li>

								<li>

									<a href="http://www.everythingfurniture.com/vendor-39.html" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/jewelry-box-direct.jpg" alt="Jewelry Box Direct" />

									</a>

								</li>

								<li>

									<a href="http://www.wayfair.com/Powell-Furniture-C115446.html" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/wayfair.jpg" alt="Wayfair" />

									</a>

								</li>

								<li>

									<a href="http://www.atgstores.com/powell_m824.html" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/allied-trade-group.jpg" alt="Allied Trade Group" />

									</a>

								</li>

							</ul>

						</div>

						<div class="country canada">

							<h4>Canada</h4>

							<ul>

								<li>

									<a href="http://www.homedepot.ca/webapp/wcs/stores/servlet/CatalogSearchResultView?langId=-15&storeId=10051&catalogId=10051&N=0&Ntk=level1&Ntt=Powell&Nty=1&D=Powell&Ntx=mode+matchallpartial&Dx=mode+matchallpartial&s=true" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/home-depot-ca.jpg" alt="Home Depot" />

									</a>

								</li>

								<li>

									<a href="http://www.cymax.com/Powell-Furniture--B72.htm" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/cymax-ca.jpg" alt="Cymax Stores" />

									</a>

								</li>

								<li>

									<a href="http://www.gowfb.ca/advanced_search_result.php?keywords=Powell%20Company" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/wholesale-furniture-brokers-ca.jpg" alt="Wholesale Furniture Brokers" />

									</a>

								</li>

								<li>

									<a href="http://www.wayfair.com/Powell-Furniture-C115446.html" rel="external">

										<img src="/wp-content/themes/powell/a/img/retailers/wayfair-ca.jpg" alt="Wayfair" />

									</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
