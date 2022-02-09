<?php
if ( ! function_exists( 'cars_setup' ) ) :

function cars_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'cars', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'cars' ),
        'social'  => __( 'Social Links Menu', 'cars' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // cars_setup

add_action( 'after_setup_theme', 'cars_setup' );


if ( ! function_exists( 'cars_init' ) ) :

function cars_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // cars_setup

add_action( 'init', 'cars_init' );


if ( ! function_exists( 'cars_custom_image_sizes_names' ) ) :

function cars_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'cars_custom_image_sizes_names' );
endif;// cars_custom_image_sizes_names



if ( ! function_exists( 'cars_widgets_init' ) ) :

function cars_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'cars_widgets_init' );
endif;// cars_widgets_init



if ( ! function_exists( 'cars_customize_register' ) ) :

function cars_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'cars_customize_register' );
endif;// cars_customize_register


if ( ! function_exists( 'cars_enqueue_scripts' ) ) :
    function cars_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'ieemulationmodeswarning' );
    wp_enqueue_script( 'ieemulationmodeswarning', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', false, null, false);

    wp_enqueue_script( 'jquery' );
    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'bootstrapsubmenu' );
    wp_enqueue_script( 'bootstrapsubmenu', get_template_directory_uri() . '/js/bootstrap-submenu.js', false, null, true);

    wp_deregister_script( 'rangeslider' );
    wp_enqueue_script( 'rangeslider', get_template_directory_uri() . '/js/rangeslider.js', false, null, true);

    wp_deregister_script( 'jquerymbytplayer' );
    wp_enqueue_script( 'jquerymbytplayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.js', false, null, true);

    wp_deregister_script( 'bootstrapselect' );
    wp_enqueue_script( 'bootstrapselect', get_template_directory_uri() . '/js/bootstrap-select.min.js', false, null, true);

    wp_deregister_script( 'jqueryeasing' );
    wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', false, null, true);

    wp_deregister_script( 'jqueryscrollup' );
    wp_enqueue_script( 'jqueryscrollup', get_template_directory_uri() . '/js/jquery.scrollUp.js', false, null, true);

    wp_deregister_script( 'jquerymcustomscrollbarconcat' );
    wp_enqueue_script( 'jquerymcustomscrollbarconcat', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', false, null, true);

    wp_deregister_script( 'dropzone' );
    wp_enqueue_script( 'dropzone', get_template_directory_uri() . '/js/dropzone.js', false, null, true);

    wp_deregister_script( 'slick' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', false, null, true);

    wp_deregister_script( 'jqueryfilterizr' );
    wp_enqueue_script( 'jqueryfilterizr', get_template_directory_uri() . '/js/jquery.filterizr.js', false, null, true);

    wp_deregister_script( 'jquerymagnificpopup' );
    wp_enqueue_script( 'jquerymagnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', false, null, true);

    wp_deregister_script( 'jquerycountdown' );
    wp_enqueue_script( 'jquerycountdown', get_template_directory_uri() . '/js/jquery.countdown.js', false, null, true);

    wp_deregister_script( 'jquerymousewheel' );
    wp_enqueue_script( 'jquerymousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', false, null, true);

    wp_deregister_script( 'lightgalleryall' );
    wp_enqueue_script( 'lightgalleryall', get_template_directory_uri() . '/js/lightgallery-all.js', false, null, true);

    wp_deregister_script( 'jnoty' );
    wp_enqueue_script( 'jnoty', get_template_directory_uri() . '/js/jnoty.js', false, null, true);

    wp_deregister_script( 'app' );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css', false, null, 'all');

    wp_deregister_style( 'bootstrapsubmenu' );
    wp_enqueue_style( 'bootstrapsubmenu', get_template_directory_uri() . '/css/bootstrap-submenu.css', false, null, 'all');

    wp_deregister_style( 'bootstrapselect' );
    wp_enqueue_style( 'bootstrapselect', get_template_directory_uri() . '/css/bootstrap-select.min.css', false, null, 'all');

    wp_deregister_style( 'magnificpopup' );
    wp_enqueue_style( 'magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'flaticon' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/fonts/linearicons/style.css', false, null, 'all');

    wp_deregister_style( 'jquerymcustomscrollbar' );
    wp_enqueue_style( 'jquerymcustomscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', false, null, 'all');

    wp_deregister_style( 'dropzone' );
    wp_enqueue_style( 'dropzone', get_template_directory_uri() . '/css/dropzone.css', false, null, 'all');

    wp_deregister_style( 'slick' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', false, null, 'all');

    wp_deregister_style( 'lightbox' );
    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.min.css', false, null, 'all');

    wp_deregister_style( 'jnoty' );
    wp_enqueue_style( 'jnoty', get_template_directory_uri() . '/css/jnoty.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'yellow' );
    wp_enqueue_style( 'yellow', get_template_directory_uri() . '/css/skins/yellow.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Poppins:300,400,600,700%7CUbuntu:300,400,700', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap', false, null, 'all');

    wp_deregister_style( 'ieviewportbugworkaround' );
    wp_enqueue_style( 'ieviewportbugworkaround', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'cars_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>