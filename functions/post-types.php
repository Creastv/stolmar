<?php

// CPT: Mieszkania
function cpt_flats() {
	$labels = array(
		'name'               => _x( 'Mieszkania', 'post type general name', 'stolmar' ),
		'singular_name'      => _x( 'Mieszkania', 'post type singular name', 'stolmar' ),
		'menu_name'          => _x( 'Mieszkania', 'admin menu', 'stolmar' ),
		'name_admin_bar'     => _x( 'Mieszkania', 'add new on admin bar', 'stolmar' ),
		'add_new'            => _x( 'Dodaj nowy', 'book', 'stolmar' ),
		'add_new_item'       => __( 'Dodaj nowy', 'stolmar' ),
		'new_item'           => __( 'Nowa stroną', 'stolmar' ),
		'edit_item'          => __( 'Edytuj stronę', 'stolmar' ),
		'view_item'          => __( 'Pokaż stronę', 'stolmar' ),
		'all_items'          => __( 'Wszystkie strony', 'stolmar' ),
		'search_items'       => __( 'Przeszukaj strony', 'stolmar' ),
		'parent_item_colon'  => __( 'Rodzic strony:', 'stolmar' ),
		'not_found'          => __( 'Nie znaleziono strony', 'stolmar' ),
		'not_found_in_trash' => __( 'Nie znaleziono strony w koszu', 'stolmar' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'stolmar' ),
		'taxonomies'         => array( 'flats_tax' ),
		'public'             => true,
		'show_in_rest'       => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'mieszkanie' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-admin-home',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'flats', $args );
}

add_action( 'init', 'cpt_flats' );

function create_flats_tax() {
	$labels = array(
		'name'              => _x( 'Kategorie', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Kategorie', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Znajdź kategorię', 'textdomain' ),
		'all_items'         => __( 'Wszystkie kategorie', 'textdomain' ),
		'parent_item'       => __( 'Rodzic kategorii', 'textdomain' ),
		'parent_item_colon' => __( 'Rodzic kategorii:', 'textdomain' ),
		'edit_item'         => __( 'Edytuj kategorię', 'textdomain' ),
		'update_item'       => __( 'Aktualizuj kategorię', 'textdomain' ),
		'add_new_item'      => __( 'Dodaj kategorię', 'textdomain' ),
		'new_item_name'     => __( 'Nazwa nowej kategorii', 'textdomain' ),
		'menu_name'         => __( 'Kategorie', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		//'rewrite' => '',
	);

	register_taxonomy( 'flats_tax', array( 'flats', 'flat-no-cont', 'ready-flats' ), $args );

}

add_action( 'init', 'create_flats_tax' );

// CPT: Gallery
function cpt_galleries() {
	$labels = array(
		'name'               => _x( 'Zrealizowane', 'post type general name', 'stolmar' ),
		'singular_name'      => _x( 'Zrealizowane', 'post type singular name', 'stolmar' ),
		'menu_name'          => _x( 'Zrealizowane', 'admin menu', 'stolmar' ),
		'name_admin_bar'     => _x( 'Zrealizowane', 'add new on admin bar', 'stolmar' ),
		'add_new'            => _x( 'Dodaj nowy', 'book', 'stolmar' ),
		'add_new_item'       => __( 'Dodaj nowy', 'stolmar' ),
		'new_item'           => __( 'Nowa stroną', 'stolmar' ),
		'edit_item'          => __( 'Edytuj stronę', 'stolmar' ),
		'view_item'          => __( 'Pokaż stronę', 'stolmar' ),
		'all_items'          => __( 'Wszystkie strony', 'stolmar' ),
		'search_items'       => __( 'Przeszukaj strony', 'stolmar' ),
		'parent_item_colon'  => __( 'Rodzic strony:', 'stolmar' ),
		'not_found'          => __( 'Nie znaleziono strony', 'stolmar' ),
		'not_found_in_trash' => __( 'Nie znaleziono strony w koszu', 'stolmar' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'stolmar' ),
		'public'             => true,
		'show_in_rest'       => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'zrealizowane-inwestycje' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-format-gallery',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'galleries', $args );
}

add_action( 'init', 'cpt_galleries' );

// CPT: Investment
function cpt_investment() {
	$labels = array(
		'name'               => _x( 'Inwestycje', 'post type general name', 'stolmar' ),
		'singular_name'      => _x( 'Inwestycje', 'post type singular name', 'stolmar' ),
		'menu_name'          => _x( 'Inwestycje', 'admin menu', 'stolmar' ),
		'name_admin_bar'     => _x( 'Inwestycje', 'add new on admin bar', 'stolmar' ),
		'add_new'            => _x( 'Dodaj nowy', 'book', 'stolmar' ),
		'add_new_item'       => __( 'Dodaj nowy', 'stolmar' ),
		'new_item'           => __( 'Nowa stroną', 'stolmar' ),
		'edit_item'          => __( 'Edytuj stronę', 'stolmar' ),
		'view_item'          => __( 'Pokaż stronę', 'stolmar' ),
		'all_items'          => __( 'Wszystkie strony', 'stolmar' ),
		'search_items'       => __( 'Przeszukaj strony', 'stolmar' ),
		'parent_item_colon'  => __( 'Rodzic strony:', 'stolmar' ),
		'not_found'          => __( 'Nie znaleziono strony', 'stolmar' ),
		'not_found_in_trash' => __( 'Nie znaleziono strony w koszu', 'stolmar' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'stolmar' ),
		'public'             => true,
		'show_in_rest'       => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'inwestycje' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-format-gallery',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' )
	);

	register_post_type( 'investment', $args );
}

add_action( 'init', 'cpt_investment' );