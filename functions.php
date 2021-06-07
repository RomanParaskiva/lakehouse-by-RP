<?php 
add_theme_support( 'title-tag' );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head');
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

add_action('wp_enqueue_scripts', 'init_scripts');

function init_scripts(){
    $version = '0.0.0.0';

    wp_enqueue_style( 'google-font', "https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap", [], $version );
    wp_enqueue_style( 'owl-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", [], $version );
    wp_enqueue_style( 'owl-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", ['owl-carousel'], $version );
   
    wp_enqueue_style( 'flexmasonry', get_template_directory_uri() ."/assets/css/flexmasonry.css", [], $version );
    wp_enqueue_style( 'daterangepicker', get_template_directory_uri().'/assets/css/daterangepicker.css', [], $version );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_script( 'jquery',  "https://code.jquery.com/jquery-3.6.0.min.js" , [], $version, true);
    wp_enqueue_script( 'owl-carousel',  get_template_directory_uri() ."/assets/js/owl.carousel.min.js" , [], '', true);
    wp_enqueue_script( 'fslightbox',  get_template_directory_uri() ."/assets/js/fslightbox.js" , [], $version, true);
    wp_enqueue_script( 'moment',  get_template_directory_uri() ."/assets/js/moment.min.js" , [], $version, true);
    wp_enqueue_script( 'daterangepicker',  get_template_directory_uri() ."/assets/js/daterangepicker.js" , [], $version, true);
    wp_enqueue_script( 'imagesloaded',  "https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js" , [], $version, true);
    wp_enqueue_script( 'main',  get_template_directory_uri() ."/assets/js/script.js" , [], $version, true);

    wp_deregister_script('wp-embed');
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' );

    wp_localize_script('main', 'WPJS', [
        'siteUrl' => get_template_directory_uri()
    ]);
}


add_action('after_setup_theme', 'crb_load');

function crb_load(){
    require_once('includes/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');

function register_carbon_fields(){
    require_once('includes/carbon-fields/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields/carbon-fields-options/post-meta.php');
}


add_action('init', 'create_global_variables');

function create_global_variables() {
    
    global $site_variables;
    $site_variables = [
        'phone' => carbon_get_theme_option( 'site_phone' ),
        'phone_digits' => carbon_get_theme_option( 'site_phone_digits' ),
        'site_email' => carbon_get_theme_option( 'site_email' ),
        'vk_link' => carbon_get_theme_option( 'site_vk_link' ),
        'in_link' => carbon_get_theme_option( 'site_in_link' ),
        'fb_link' => carbon_get_theme_option( 'site_fb_link' ),
        'site_adress' => carbon_get_theme_option( 'site_adress' )
    ];
}

add_action('init', 'register_post_types');

function register_post_types() {
    register_post_type('room', [
        'labels' => [
            'name' => 'Номера',
            'singular_name'      => 'Номер', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый номер',
			'edit_item'          => 'Редактировать номер',
			'new_item'           => 'Новый номер',
			'view_item'          => 'Посмотреть номер',
			'search_items'       => 'Найти номер',
			'not_found'          => 'Номеров не найдено',
			'not_found_in_trash' => 'В корзине номеров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Номера'

        ],
		'public'             => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'      => 5,
		'supports'           => ['title','editor','thumbnail','excerpt']
    ]);
}

add_action( 'after_setup_theme', 'theme_support');

function theme_support() {
    register_nav_menus( [
		'header_menu' => 'Меню'
	] );
}