<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {
	wp_register_script( 'stolmar-whcookies', STOLMAR_DIRECTORY_URI . '/assets/js/whcookies.js', array( 'jquery' ), '3.5.7', true );
	wp_register_script( 'stolmar-component-carousel', STOLMAR_DIRECTORY_URI . '/assets/js/component/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );	
	wp_register_script( 'stolmar-component-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array( 'jquery' ), '1.0.0', true );
	wp_register_script( 'stolmar-component-aos', STOLMAR_DIRECTORY_URI . '/assets/js/component/jquery.aos.js', array( 'jquery' ), '2.3.1', true );
	wp_register_script( 'stolmar-component-maphilight', get_template_directory_uri() . '/assets/js/component/jquery.maphilight.js', array(), false, true );
	wp_register_script( 'stolmar-component-rwd-image-maps', get_template_directory_uri() . '/assets/js/component/jquery.rwdImageMaps.min.js', array(), false, true );
	wp_register_script( 'stolmar-component-rwd-range-slider', get_template_directory_uri() . '/assets/js/component/ion.rangeSlider.min.js', array(), false, true );

	wp_register_script( 'stolmar-data-tables', 'https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'stolmar-data-tables-natural', 'https://cdn.datatables.net/plug-ins/1.10.16/sorting/natural.js', array(), false, true );
	wp_register_script( 'stolmar-data-tables-responsive', 'https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js', array(), false, true );
    if(is_single(4095)) { 
	wp_register_script( 'stolmar-single-flats', STOLMAR_DIRECTORY_URI . '/assets/js/single/investment/flats-zielona-podkowa.js', array( 'jquery' ), '1.0.0', true );
	} else {
	wp_register_script( 'stolmar-single-flats', STOLMAR_DIRECTORY_URI . '/assets/js/single/investment/flats.js', array( 'jquery' ), '1.0.0', true );
	}
	wp_register_script( 'stolmar-main-scripts', STOLMAR_DIRECTORY_URI . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/component/jquery.slicknav.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'slicknav-init', get_template_directory_uri() . '/assets/js/component/jquery.slicknav-init.js', array( 'jquery' ), false, true );

	if ( is_page( 2 ) ) {
		wp_enqueue_script( 'stolmar-component-carousel' );
		wp_add_inline_script( 'stolmar-component-carousel', 'jQuery(document).ready(function(a){"use strict";a(".slider-main").owlCarousel({loop:!0,margin:0,items:1,dots:!0,dotsData:!0,autoplay:!0,autoplayTimeout:8e3,autoplayHoverPause:!0,
			nav:!0,
			navContainer: ".wraper-nav",
			navText: [a(".left-nav"),a(".right-nav")],
			dotsContainer:".slider-main-nav span"
		})});' );
		wp_add_inline_script( 'stolmar-component-carousel', 'jQuery(document).ready(function(a){"use strict";a(".slider-investment").owlCarousel({loop:!0,margin:0,items:1,dots:!0,dotsData:!0,autoplay:!1,autoplayTimeout:8e3,autoplayHoverPause:!0,nav:!1,dotsContainer:".slider-investment-nav"})});' );
		wp_add_inline_script( 'stolmar-component-carousel', 'jQuery(document).ready(function(a){"use strict";a(".slider-post").owlCarousel({
			loop:!0,
			margin:0,
			items:4,
			margin:30,
			autoWidth:!0,
			dots:!0,
			dotsData:!0,
			autoplay:!1,
			autoplayTimeout:8e3,
			autoplayHoverPause:!0,
			nav:!1,
			dotsContainer:".slider-post-nav",
		})});' );
	}

	if ( is_singular( 'galleries' ) ) {
		wp_enqueue_script( 'stolmar-component-fancybox' );
	}

	if ( is_singular( 'investment' ) ) {
		wp_enqueue_script( 'stolmar-component-carousel' );
		wp_enqueue_script( 'stolmar-component-fancybox' );
		wp_enqueue_script( 'stolmar-component-maphilight' );
		wp_enqueue_script( 'stolmar-component-rwd-image-maps' );
		wp_enqueue_script( 'stolmar-component-rwd-range-slider' );
		wp_add_inline_script( 'stolmar-component-maphilight', 'jQuery(document).ready(function(){jQuery(\'#InvestmentMap\').maphilight();jQuery(\'img[usemap]\').rwdImageMaps();});' );
		wp_add_inline_script( 'stolmar-component-carousel', 'jQuery(document).ready(function(a){"use strict";a(".slider-main").owlCarousel({
			loop:!0,margin:0,items:1,dots:!0,dotsData:!0,autoplay:!0,autoplayTimeout:8e3,autoplayHoverPause:!0,
			nav:!0,
			navContainer: ".wraper-nav",
			navText: [a(".left-nav"),a(".right-nav")],
			dotsContainer:".slider-main-nav span"
		})});' );
		wp_add_inline_script( 'stolmar-component-carousel', 'jQuery(document).ready(function(a){"use strict";a(".slider-investment").owlCarousel({
			responsive : {
				0 : {
					loop:!0,
					margin:0,
					items:1,
					stagePadding:20,
					dots:!1,autoplay:!0,
					autoplayTimeout:8e3,
					autoplayHoverPause:!0,
					nav:!1
				},
				768 : {
					items: 1,
					stagePadding:200,
					loop:!0,
				    margin:0,
					dots:!1,autoplay:!0,
					autoplayTimeout:8e3,
					autoplayHoverPause:!0,
					nav:!0
				}
			}
		})});' );

		wp_enqueue_script( 'stolmar-data-tables' );
		wp_enqueue_script( 'stolmar-data-tables-natural' );
		wp_enqueue_script( 'stolmar-data-tables-responsive' );
		wp_enqueue_script( 'stolmar-single-flats' );
	}

	wp_enqueue_script( 'stolmar-component-aos' );
	wp_enqueue_script( 'stolmar-main-scripts' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php',
		'wp-all-import-pro/wp-all-import-pro.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );