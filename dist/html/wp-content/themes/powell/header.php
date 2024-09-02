<!doctype html>

<!--[if lt IE 7 ]>

	<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7 ]>

	<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8 ]>

	<html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 9 ]>

	<html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if gt IE 9]><!-->

	<html class="no-js" <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<!--[if IE ]>

		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

	<![endif]-->

	<?php

		if (is_search())

			echo '<meta name="robots" content="noindex, nofollow" />';

	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>" />

	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<meta name="author" content="" />

	<meta name="apple-mobile-web-app-title" content="Powell" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<?php if( the_field( 'google_site_verification', 'option' ) ): ?>

		<meta name="google-site-verification" content="<?php the_field( 'google_site_verification', 'option' ); ?>" />

	<?php endif; ?>

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/a/img/favicon.png" />

	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/a/img/touch-icon.png" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/a/css/screen.css" rel="stylesheet" media="screen, projection" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/a/css/print.css" rel="stylesheet" media="print" />

	<script src="<?php bloginfo( 'template_directory' ); ?>/a/js/modernizr.js"></script>

	<script type="text/javascript">

		(function(d) {

			var config = {

				kitId: 'cch1kqz',
				scriptTimeout: 3000

			},

			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)

		})(document);

	</script>

	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="<?php bloginfo( 'template_directory' ); ?>/a/img/twitter-icon.png" />
	<meta name="twitter:url" content="" />

	<meta name="og:title" content="" />
	<meta name="og:description" content="" />
	<meta name="og:url" content="" />
	<meta name="og:image" content="<?php bloginfo( 'template_directory' ); ?>/a/img/og-icon.png" />

	<meta name="application-name" content="" />
	<meta name="msapplication-TileColor" content="" />
	<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/a/img/tile-image.png" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<?php wp_head(); ?>

</head>

<body <?php body_id(); ?> <?php body_class(); ?>>

	<div id="wrapper">

		<div id="page">

			<div id="pre-header">

				<div class="wrap">

					<div class="inner-wrap">

						<nav class="nav" role="navigation">

							<?php $defaults = array(

								'theme_location'	=> 'primary',
								'menu'				=> 'Utility Navigation',
								'container'			=> '',
								'container_class'	=> '',
								'container_id'		=> '',
								'menu_class'		=> 'menu',
								'menu_id'			=> '',
								'echo'				=> true,
								'fallback_cb'		=> 'wp_page_menu',
								'before'			=> '',
								'after'				=> '',
								'link_before'		=> '',
								'link_after'		=> '',
								'items_wrap'		=> '<ul>%3$s</ul>',
								'depth'				=> 1,
								'walker'			=> ''

							); ?>

							<?php wp_nav_menu( $defaults ); ?>

						</nav>

						<?php get_search_form(); ?>

						<?php if( get_field('social_twitter', 'option') ): ?>

							<div class="connect">

								<div>

									<a href="<?php the_field('social_twitter', 'option'); ?>" rel="external">Twitter</a>

								</div>

							</div>

						<?php endif; ?>

					</div>

				</div>

			</div>

			<header id="header" role="banner">

				<div class="wrap">

					<div id="logo">

						<a href="<?php echo esc_url( home_url( '/') ); ?>">

							<?php bloginfo( 'name' ); ?>

						</a>

					</div>

					<nav id="nav" role="navigation">

						<?php $defaults = array(

							'theme_location'	=> 'primary',
							'menu'				=> '',
							'container'			=> '',
							'container_class'	=> '',
							'container_id'		=> '',
							'menu_class'		=> 'menu',
							'menu_id'			=> '',
							'echo'				=> true,
							'fallback_cb'		=> 'wp_page_menu',
							'before'			=> '',
							'after'				=> '',
							'link_before'		=> '',
							'link_after'		=> '',
							'items_wrap'		=> '<ul>%3$s</ul>',
							'depth'				=> 1,
							'walker'			=> ''

						); ?>

						<?php wp_nav_menu( $defaults ); ?>

					</nav>

				</div>

			</header>