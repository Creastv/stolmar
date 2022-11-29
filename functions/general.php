<?php

function register_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Menu główne', 'stolmar' ),
			'footer'    => __( 'footer', 'stolmar' ),
			'header-left-menu'   => __( 'Lewe menu header', 'stolmar' ),
			'header-right-menu'   => __( 'Prawe menu header', 'stolmar' ),
		)
	);
}

add_action( 'init', 'register_menus' );


function remove_nav_container( $args = '' ) {
	$args['container'] = false;

	return $args;
}

add_filter( 'wp_nav_menu_args', 'remove_nav_container' );

function add_to_head() { ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/fav.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&display=swap"
          rel="stylesheet">
<?php }

add_action( 'wp_head', 'add_to_head' );

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );
add_image_size( 'home-slide-background', 1920, 1080, true );
add_image_size( 'home-intro-thumbnail', 1850, 848, true );
add_image_size( 'home-investment-slide', 895, 330, true );
add_image_size( 'category-post-thumbnail', 734, 516, true );
add_image_size( 'gallery-image-thumbnail', 610, 420, true );
add_image_size( 'post-slider-thumbnail', 409, 429, true );
add_image_size( 'contact-person-thumbnail', 363, 478, true );
add_image_size( 'single-investment-gallery-thumbnail', 1520, 600, true );


function async_scripts( $url ) {
	if ( strpos( $url, '#asyncload' ) === false ) {
		return $url;
	} else if ( is_admin() ) {
		return str_replace( '#asyncload', '', $url );
	} else {
		return str_replace( '#asyncload', '', $url ) . "' async='async";
	}
}

add_filter( 'clean_url', 'async_scripts', 11, 1 );

function prefix_remove_unnecessary_tags() {

	// REMOVE WP EMOJI
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );


	// remove all tags from header
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'template_redirect', 'rest_output_link_header', 11 );

	// language
	add_filter( 'multilingualpress.hreflang_type', '__return_false' );
}

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Stolmar',
		'menu_title' => 'Stolmar',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );

	acf_add_options_sub_page( array(
		'page_title'  => 'Kontakt',
		'menu_title'  => 'Kontakt',
		'parent_slug' => 'theme-general-settings',
	) );

}

function my_acf_init() {
	acf_update_setting( 'google_api_key', 'AIzaSyAQ1mwTkz-wO4aLMgXbMYusMk6TbM2p3jQ' );
}

add_action( 'acf/init', 'my_acf_init' );


// Paginacja
function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
}

add_action( 'pre_get_posts', 'my_change_sort_order'); 
function my_change_sort_order($que){
    if ( !is_admin() && $que->is_main_query() && is_archive() ) {
        $que->set( 'order', 'ASC' );
		$que->set( 'orderby', 'menu_order' );

		$que->set('post_parent', 0);
		$que->set('post__not_in', array( -4581, -13554 ));
	}    
};

add_filter('login_errors', function($message){
return "Nieprawidłowa nazwa użytkownika lub hasła.";
});
/* Hide WP version meta tag from header and generator tag from feeds
 * @return null
 * @filter the_generator
 */
function fjarrett_remove_wp_version_tag() {
	return null;
}
add_filter( 'the_generator', 'fjarrett_remove_wp_version_tag' );

/* Hide WP version strings from scripts and styles
 * @return {string} $src
 * @filter script_loader_src
 * @filter style_loader_src
 */
function fjarrett_remove_wp_version_strings( $src ) {
	global $wp_version;

	$parts = explode( '?', $src );

	if ( $parts[1] === 'ver=' . $wp_version ) {
		return $parts[0];
	}
	else {
		return $src;
	}
}
add_filter( 'script_loader_src', 'fjarrett_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'fjarrett_remove_wp_version_strings' );


function todo_restrict_manage_posts() {
    global $typenow;
    $args=array( 'public' => true, '_builtin' => false ); 
    $post_types = get_post_types($args);
    if ( in_array($typenow, $post_types) ) {
    $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            wp_dropdown_categories(array(
                'show_option_all' => __('Show All '.$tax_obj->label ),
                'taxonomy' => $tax_slug,
                'name' => $tax_obj->name,
                'orderby' => 'term_order',
                'selected' => $_GET[$tax_obj->query_var],
                'hierarchical' => $tax_obj->hierarchical,
                'show_count' => false,
                'hide_empty' => true
            ));
        }
    }
}
function todo_convert_restrict($query) {
    global $pagenow;
    global $typenow;
    if ($pagenow=='edit.php') {
        $filters = get_object_taxonomies($typenow);
        foreach ($filters as $tax_slug) {
            $var = &$query->query_vars[$tax_slug];
            if ( isset($var) ) {
                $term = get_term_by('id',$var,$tax_slug);
                $var = $term->slug;
            }
        }
    }
    return $query;
}
add_action( 'restrict_manage_posts', 'todo_restrict_manage_posts' );
add_filter('parse_query','todo_convert_restrict');