<?php

	/*-------------------------------------------
		Theme Setup
	-------------------------------------------*/

	// Notes...


	function bloom_setup() {

		load_theme_textdomain( 'bloom', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		// add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );


		/* Post Formats */


		// add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );


		/* Navigation */


		register_nav_menu( 'primary', __( 'Navigation Menu', 'bloom' ) );


		/* Featured Images */


		// add_theme_support( 'post-thumbnails' );


		/* Additional Image Sizes */


		// Feautured Slides (full size is 1,000 x 480)

		add_image_size( "medium_featured_slide", 800, 480, true );

		add_image_size( "small_featured_slide", 480, 480, true );


		// Category Thumbnail (full size is 800 x 800)

		add_image_size( "small_category_thumbnail", 400, 400, true );


		// Furniture Thumbnail (full size is 800 x 800)

		add_image_size( "small_furniture_thumbnail", 400, 400, true );


		// Title (full size is 1400 x 575)

		// add_image_size( "slide_large", 800, 575, true );

		// add_image_size( "slide_medium", 640, 480, true );

		// add_image_size( "slide_small", 400, 300, true );

	}

	add_action( 'after_setup_theme', 'bloom_setup' );


	/*-------------------------------------------
		Scripts and Styles
	-------------------------------------------*/

	// Notes...


	function bloom_scripts_styles() {

		global $wp_styles;


		/* Load Comments */


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )

			wp_enqueue_script( 'comment-reply' );


		/* Load Stylesheets */


		// wp_enqueue_style( 'bloom-reset', get_template_directory_uri() . '/reset.css' );

		// wp_enqueue_style( 'bloom-style', get_stylesheet_uri() );


		// Load IE Stylesheet.

		// wp_enqueue_style( 'bloom-ie', get_template_directory_uri() . '/css/ie.css', array( 'bloom-style' ), '20130213' );

		// $wp_styles->add_data( 'bloom-ie', 'conditional', 'lt IE 9' );


		/* Load Scripts */


		// Modernizr

		// wp_enqueue_script( 'bloom-modernizr', get_template_directory_uri() . '/_/js/modernizr-2.6.2.dev.js' );

	}

	add_action( 'wp_enqueue_scripts', 'bloom_scripts_styles' );


	/*-------------------------------------------
		WP Title
	-------------------------------------------*/

	// Notes...


	function bloom_wp_title( $title, $sep ) {

		global $paged, $page;

		if ( is_feed() )

			return $title;


		/* Add Site Name */


		$title .= get_bloginfo( 'name' );


		/* Add Site Description for Home / Front Page */


		$site_description = get_bloginfo( 'description', 'display' );

		if ( $site_description && ( is_home() || is_front_page() ) )

			$title = "$title $sep $site_description";


		/* Add Page Number (if necessary) */


		if ( $paged >= 2 || $page >= 2 )

			$title = "$title $sep " . sprintf( __( 'Page %s', 'bloom' ), max( $paged, $page ) );


		/* Fix */


		// if (function_exists('is_tag') && is_tag()) {

			// single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }

		// elseif (is_archive()) {

			// wp_title(''); echo ' Archive - '; }

		// elseif (is_search()) {

			// echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }

		// elseif (!(is_404()) && (is_single()) || (is_page())) {

			// wp_title(''); echo ' - '; }

		// elseif (is_404()) {

			// echo 'Not Found - '; }

		// if (is_home()) {

			// bloginfo('name'); echo ' - '; bloginfo('description'); }

		// else {

			// bloginfo('name'); }

		// if ($paged>1) {

			// echo ' - page '. $paged; }

		return $title;

	}

	add_filter( 'wp_title', 'bloom_wp_title', 10, 2 );


	/*-------------------------------------------
	   	Add Page ID to <body>
	-------------------------------------------*/

	// An example would be for the home page: <body id="home" class="...">


	function get_body_id( $id = '' ) {

		global $wp_query;

		// Fallbacks

		if ( is_front_page() )  $id = 'home';
		if ( is_home() )        $id = 'home';
		if ( is_search() )      $id = 'search';

		// If it's an Archive Page

		if ( is_archive() ) {

			if ( is_author() ) {

				$author = $wp_query->get_queried_object();
				$id = 'archive-author-' . sanitize_html_class( $author->user_nicename , $author->ID );

			} elseif ( is_category() ) {

				$cat = $wp_query->get_queried_object();
				$id = 'archive-category-' . sanitize_html_class( $cat->slug, $cat->cat_ID );

			} elseif ( is_date() ) {

				if ( is_day() ) {

					$date = get_the_time('F jS Y');
					$id = 'archive-day-' . str_replace(' ', '-', strtolower($date) );

				} elseif ( is_month() ) {

					$date = get_the_time('F Y');
					$id = 'date-' . str_replace(' ', '-', strtolower($date) );

				} elseif ( is_year() ) {

					$date = get_the_time('Y');
					$id = 'date-' . strtolower($date);

				} else {

					$id = 'archive-date';

				}

			} elseif ( is_tag() ) {

				$tags = $wp_query->get_queried_object();
				$id = 'archive-tag-' . sanitize_html_class( $tags->slug, $tags->term_id );

			} else {

				$id = 'archive';

			}

		}

		// If it's a Page

		if ( is_page() ) {

			$id = $wp_query->queried_object->post_name;

			if ('' == $id ) {

				$id = 'page';

			}

		}

		// If it's the Blog landing Page

		if ( ! is_page()) {

			$id = 'blog';

		}

		// If it's a Single Post

		if ( is_single() ) {

			if ( is_attachment() ) {

				$id = 'attachment';

			} else {

				$id = 'single-post';

			}

		}

		// If it's an Error Page

		if ( is_404() ) $id = 'error';

		// If $id still doesn't have a value, attempt to assign it the Page's name

		if ('' == $id ) {

			$id = $wp_query->queried_object->post_name;

		}

		$id = preg_replace("#\s+#", " ", $id);
		$id = str_replace(' ', '-', strtolower($id) );

		// Let other plugins modify the function

		return apply_filters( 'body_id', $id );

	};

	// Print id on body elements

	function body_id( $id = '' ) {

		if ( '' == $id ) {

			$id = get_body_id();

		}

		$id = preg_replace("#\s+#", " ", $id);
		$id = str_replace(' ', '-', strtolower($id) );

		echo ( '' != $id ) ? 'id="'.$id. '"': '' ;

	};


	// OLD STUFF BELOW


	/*-------------------------------------------
		jQuery
	-------------------------------------------*/

	// Notes...


	if ( !function_exists( 'core_mods' ) ) {

		function core_mods() {

			if ( !is_admin() ) {

				wp_deregister_script( 'jquery' );

				// wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ), false, '1.10.2', true);

				wp_register_script( 'jquery', ( "/wp-content/themes/powell/a/js/jquery.js"), false, '1.11.1', true);

				wp_enqueue_script( 'jquery' );

			}

		}

		add_action( 'wp_enqueue_scripts', 'core_mods' );

	}


	/*-------------------------------------------
		Clean up the <head>
	-------------------------------------------*/

	// Notes...


	function removeHeadLinks() {


		/* WordPress Version */

		remove_action('wp_head', 'wp_generator');


		/* Really Simply Discovery */

		// This is only necessary is you are connecting to WordPress from desktop software.

		remove_action('wp_head', 'rsd_link');


		/* WL Manifest Link */

		// This is only necessary if you are administering your site using Windows Live Writer.

		remove_action('wp_head', 'wlwmanifest_link');


		/* Shorlink */

		// This is only useful for sharing with limited characters

		remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


		/* Prev / Next */

		// Notes...

		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


		/* Canonical */

		// Notes...

		remove_action('wp_head', 'rel_canonical');


		remove_action('wp_head', 'feed_links', 2);
		remove_action('wp_head', 'feed_links_extra', 3);

	}

	add_action('init', 'removeHeadLinks');


	/* Remove Comment Styles */

	// Notes...

	function mytheme_remove_recent_comments_style() {

		global $wp_widget_factory;

		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );

	}

	add_action( 'widgets_init', 'mytheme_remove_recent_comments_style' );


	/*-------------------------------------------
		Navigation
	-------------------------------------------*/

	// Notes...


	/* Primary Navigation */

	register_nav_menu( 'primary', __( 'Navigation Menu', 'bloom' ) );


	/*-------------------------------------------
		Widgets
	-------------------------------------------*/

	// Notes...


	/* Sidebar */

	if ( function_exists('register_sidebar' )) {

		function bloom_widgets_init() {

			register_sidebar( array(

				'name'          => __( 'Sidebar Widgets', 'bloom' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',

			) );

		}

		add_action( 'widgets_init', 'bloom_widgets_init' );

	}


	/*-------------------------------------------
		Article Navigation
	-------------------------------------------*/

	// Notes...


	function post_navigation() {

		echo '<div class="navigation">';

		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';

		echo '	<div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';

		echo '</div>';

	}


	/*-------------------------------------------
		Posted On
	-------------------------------------------*/

	// Notes...


	function posted_on() {

		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),

			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )

		);

	}


	/*-------------------------------------------
		Order Products Alphabetically
	-------------------------------------------*/

	// Notes...


	function alphabetical_product_order( $query ) {

		if ( $query->is_category() && $query->is_main_query() ) {

			$query->set( 'orderby', 'title' );

			$query->set( 'order', 'ASC' );

		}

	}

	add_action( 'pre_get_posts', 'alphabetical_product_order' );


	/*-------------------------------------------
		Style Sign-In
	-------------------------------------------*/

	// Notes...


	// function sign_in_styles() {

		// wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/a/css/screen.css');

		// wp_enqueue_script( 'custom-login', get_template_directory_uri() . 'a/js/functions.js');

	// }

	// add_action( 'login_enqueue_scripts', 'sign_in_styles' );


	/*-------------------------------------------
		Load Gravity Forms Script in Footer
	-------------------------------------------*/

	// Notes...


	add_filter('gform_init_scripts_footer', '__return_true');


	/*-------------------------------------------
		Globals (for Advanced Custom Fields)
	-------------------------------------------*/

	// Notes...


	add_filter( 'acf/options_page/settings', 'my_options_page_settings');

	function my_options_page_settings( $options ) {

		$options["title"] = __("Globals");

		$options["pages"] = array(

			__("Contact Info"),
			__("Social Media"),
			__("Google Tools")

		);

		return $options;

	}


?>