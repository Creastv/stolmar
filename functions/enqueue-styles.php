<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_styles() {
	wp_register_style( 'stolmar-grid-system', STOLMAR_DIRECTORY_URI . '/assets/css/grid.css', '', '1.0' );
	wp_register_style( 'stolmar-main-styles', STOLMAR_DIRECTORY_URI . '/assets/css/styles.css', '', '1.0' );
	wp_register_style( 'stolmar-component-carousel', STOLMAR_DIRECTORY_URI . '/assets/css/component/owl.carousel.min.css', '', '4.0' );
	wp_register_style( 'stolmar-component-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', '', '4.0' );
	wp_register_style( 'stolmar-component-aos', STOLMAR_DIRECTORY_URI . '/assets/css/component/jquery.aos.css', '', '2.3.1' );
	wp_register_style( 'stolmar-component-range-slider', STOLMAR_DIRECTORY_URI . '/assets/css/component/ion.rangeSlider.min.css', '', '2.3.1' );

	wp_register_style( 'stolmar-section-contact', STOLMAR_DIRECTORY_URI . '/assets/css/section/contact.css', '', '1.0' );
	wp_register_style( 'stolmar-section-post-slider', STOLMAR_DIRECTORY_URI . '/assets/css/section/post-slider.css', '', '1.0' );
	wp_register_style( 'stolmar-section-post-grid', STOLMAR_DIRECTORY_URI . '/assets/css/section/post-grid.css', '', '1.0' );
	wp_register_style( 'stolmar-section-form', STOLMAR_DIRECTORY_URI . '/assets/css/section/form.css', '', '1.0' );
	wp_register_style( 'stolmar-section-slider', STOLMAR_DIRECTORY_URI . '/assets/css/section/slider.css', '', '1.0' );

	wp_register_style( 'stolmar-page-home', STOLMAR_DIRECTORY_URI . '/assets/css/page/home.css', '', '1.0' );
	wp_register_style( 'stolmar-page-cooperation', STOLMAR_DIRECTORY_URI . '/assets/css/page/cooperation.css', '', '1.0' );
	wp_register_style( 'stolmar-page-about', STOLMAR_DIRECTORY_URI . '/assets/css/page/about.css', '', '1.0' );
	wp_register_style( 'stolmar-page-about', STOLMAR_DIRECTORY_URI . '/assets/css/page/about.css', '', '1.0' );
	wp_register_style( 'stolmar-page-commercial', STOLMAR_DIRECTORY_URI . '/assets/css/page/commercial.css', '', '1.0' );
	wp_register_style( 'stolmar-page-default', STOLMAR_DIRECTORY_URI . '/assets/css/page/default.css', '', '1.0' );

	wp_register_style( 'stolmar-archive-category', STOLMAR_DIRECTORY_URI . '/assets/css/archive/category.css', '', '1.0' );

	wp_register_style( 'stolmar-single-gallery', STOLMAR_DIRECTORY_URI . '/assets/css/single/gallery.css', '', '1.0' );
	wp_register_style( 'stolmar-single-investment', STOLMAR_DIRECTORY_URI . '/assets/css/single/investment.css', '', '1.0' );

	wp_enqueue_style( 'stolmar-data-tables', 'https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css', '', '1.10.16' );
	wp_enqueue_style( 'stolmar-data-tables-responsive', 'https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css', '', '2.2.3' );;

	wp_enqueue_style( 'stolmar-grid-system' );
	wp_enqueue_style( 'stolmar-section-form' );
	wp_enqueue_style( 'stolmar-page-default' );
	wp_enqueue_style( 'stolmar-component-aos' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	if ( is_page( 2 ) ) {
		wp_enqueue_style( 'stolmar-component-carousel' );
		wp_enqueue_style( 'stolmar-section-slider' );
		wp_enqueue_style( 'stolmar-section-contact' );
		wp_enqueue_style( 'stolmar-section-post-slider' );
		wp_enqueue_style( 'stolmar-section-post-grid' );
		wp_enqueue_style( 'stolmar-page-home' );
		wp_dequeue_style( 'stolmar-page-default' );
	}
	if ( is_page( 13783 ) ) {
		wp_enqueue_style( 'stolmar-page-commercial' );
	}

	if ( is_page( 3976 ) ) {
		wp_enqueue_style( 'stolmar-page-cooperation' );
	}

	if ( is_page( 3978 ) ) {
		wp_enqueue_style( 'stolmar-page-about' );
	}

	if ( is_page( 3983 ) ) {
		wp_enqueue_style( 'stolmar-page-contact' );
	}

	if ( is_category() || is_home() || is_tag() || is_post_type('investment') || is_post_type('galleries') ) {
		wp_enqueue_style( 'stolmar-archive-category' );
	}

	if ( is_singular( 'galleries' ) ) {
		wp_enqueue_style( 'stolmar-component-fancybox' );
		wp_enqueue_style( 'stolmar-single-gallery' );
	}

	if ( is_singular( 'investment' ) ) {
		wp_enqueue_style( 'stolmar-component-carousel' );
		wp_enqueue_style( 'stolmar-component-fancybox' );
		wp_enqueue_style( 'stolmar-section-slider' );
		wp_enqueue_style( 'stolmar-section-contact' );
		wp_enqueue_style( 'stolmar-single-investment' );
		wp_enqueue_style( 'stolmar-data-tables' );
		wp_enqueue_style( 'stolmar-data-tables-responsive' );
		wp_enqueue_style( 'stolmar-component-range-slider' );
	}
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );