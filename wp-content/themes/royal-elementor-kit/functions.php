<?php

/* 
** Sets up theme defaults and registers support for various WordPress features
*/
function royal_elementor_kit_setup() {

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title for us
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages
	add_theme_support( 'post-thumbnails' );

	// Custom Logo
	add_theme_support( 'custom-logo', [
		'height'      => 100,
		'width'       => 350,
		'flex-height' => true,
		'flex-width'  => true,
	] );

	add_theme_support( 'custom-header' );

	// Add theme support for Custom Background.
	add_theme_support( 'custom-background', ['default-color' => ''] );

	// Set the default content width.
	$GLOBALS['content_width'] = 960;

	// This theme uses wp_nav_menu() in one location
	register_nav_menus( array(
		'main' => __( 'Main Menu', 'royal-elementor-kit' ),
	) );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Gutenberg Embeds
	add_theme_support( 'responsive-embeds' );

	// Gutenberg Widge Images
	add_theme_support( 'align-wide' );


	// WooCommerce in general.
	add_theme_support( 'woocommerce' );

	// zoom.
	add_theme_support( 'wc-product-gallery-zoom' );
	// lightbox.
	add_theme_support( 'wc-product-gallery-lightbox' );
	// swipe.
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'royal_elementor_kit_setup' );

/*
** Enqueue scripts and styles
*/
function royal_elementor_kit_scripts() {

	// Theme Stylesheet
	wp_enqueue_style( 'royal-elementor-kit-style', get_stylesheet_uri(), array(), '1.0' );

	// Comment reply link
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'royal_elementor_kit_scripts' );


/*
** Notices
*/
require_once get_parent_theme_file_path( '/inc/activation/class-welcome-notice.php' );
require_once get_parent_theme_file_path( '/inc/activation/class-rating-notice.php' );

add_action( 'after_switch_theme', 'rek_activation_time');
add_action('after_setup_theme', 'rek_activation_time');
    
function rek_activation_time() {
	if ( false === get_option( 'rek_activation_time' ) ) {
		add_option( 'rek_activation_time', strtotime('now') );
	}
}


add_action('wp', 'remove_woo_image_effects');
function remove_woo_image_effects() {

    // this should be disable the gallery slider and lightbox
    remove_theme_support('wc-product-gallery-lightbox');
    remove_theme_support('wc-product-gallery-slider');

    // this should be disable the zoom
    remove_theme_support('wc-product-gallery-zoom');
}



/* Cache Persistente */
function ativar_cache_objeto_persistente() {
    if ( ! is_admin() ) {
        $cache_time = 3600; // tempo de cache em segundos (1 hora)
        $cache_key = 'meu_cache_key'; // chave única para o cache
        
        // Verificar se o objeto está no cache
        $objeto_cache = get_transient( $cache_key );
        
        // Se o objeto não está no cache, gerar o objeto e armazená-lo no cache
        if ( false === $objeto_cache ) {
            // Gerar o objeto aqui
            $objeto = minha_funcao_gerar_objeto();
            
            // Armazenar o objeto no cache por um determinado tempo
            set_transient( $cache_key, $objeto, $cache_time );
            
            // Retornar o objeto
            return $objeto;
        } else {
            // Se o objeto está no cache, retornar o objeto do cache
            return $objeto_cache;
        }
    }
}

function minha_funcao_gerar_objeto() {
    // Coloque aqui a lógica para gerar o objeto que você deseja armazenar em cache
    return $objeto;
}

add_filter( 'woocommerce_terms_is_checked_default', '__return_true' );


