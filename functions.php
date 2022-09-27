<?php 
require_once get_theme_file_path('inc/tgm.php' );
require_once get_theme_file_path('inc/kirki.php' );
require_once get_theme_file_path('inc/customizer.php' );
require_once get_theme_file_path('inc/demo.php' );
function photo_theme_support(){
    load_theme_textdomain( 'photo', get_template_directory() . '/languages' );
 
    add_theme_support( 'automatic-feed-links' );
 
    add_theme_support( 'title-tag' );
 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu','photo' ),
        'social'  => __( 'Social Links Menu', 'photo' ),
        'footer_1'  => __( 'Footer Quick Link', 'photo' ),
        'footer_2'  => __( 'Footer Useful Link', 'photo' ),
    ) );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
    add_theme_support( 'custom-logo' );
}
add_action("after_setup_theme","photo_theme_support");


function photo_theme_files(){
    wp_enqueue_style( "bootstrap", get_theme_file_uri( "assets/css/bootstrap.min.css" ), null, 1.0,"all" );
    wp_enqueue_style( "tiny-slider", "//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css" );
   // wp_enqueue_style( "owl-carousel", get_theme_file_uri( "assets/css/owl.carousel.min.css" ), null, 1.0,"all" );
    wp_enqueue_style( "slicknav", get_theme_file_uri( "assets/css/slicknav.css" ), null, 1.0,"all" );
    wp_enqueue_style( "flaticon", get_theme_file_uri( "assets/css/flaticon.css" ), null, 1.0,"all" );
    wp_enqueue_style( "animate", get_theme_file_uri( "assets/css/animate.min.css" ), null, 1.0,"all" );
    wp_enqueue_style( "magmnigic", get_theme_file_uri( "assets/css/magnific-popup.css" ), null, 1.0,"all" );
    wp_enqueue_style( "fontawesome", get_theme_file_uri( "assets/css/fontawesome-all.min.css" ), null, 1.0,"all" );
    wp_enqueue_style( "themify", get_theme_file_uri( "assets/css/themify-icons.css" ), null, 1.0,"all" );
    wp_enqueue_style( "slick", get_theme_file_uri( "assets/css/slick.css" ), null, 1.0,"all" );
    wp_enqueue_style( "nice-select", get_theme_file_uri( "assets/css/nice-select.css" ), null, 1.0,"all" );
    wp_enqueue_style( "main-style", get_theme_file_uri( "assets/css/style.css" ), null, 1.0,"all" );
    wp_enqueue_style( "photo-css",get_stylesheet_uri() );


    wp_enqueue_script( "modernizer-js", get_theme_file_uri( "./assets/js/vendor/modernizr-3.5.0.min.js" ), null, 1.0, true );
    wp_enqueue_script( "popper-js", get_theme_file_uri( "./assets/js/popper.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "./assets/js/bootstrap.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "slicknav-js", get_theme_file_uri( "./assets/js/jquery.slicknav.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "tiny-slider-js", "//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js",null,1.0,true);
    //wp_enqueue_script( "owl-js", get_theme_file_uri( "./assets/js/owl.carousel.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "slicknav-js", get_theme_file_uri( "./assets/js/slick.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "wow-js", get_theme_file_uri( "./assets/js/wow.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "animate-js", get_theme_file_uri( "./assets/js/animated.headline.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "magnific-js", get_theme_file_uri( "./assets/js/jquery.magnific-popup.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "nice-js", get_theme_file_uri( "./assets/js/jquery.nice-select.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "sticky-js", get_theme_file_uri( "./assets/js/jquery.sticky.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "contact-js", get_theme_file_uri( "./assets/js/contact.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "form-js", get_theme_file_uri( "./assets/js/jquery.form.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "validate-js", get_theme_file_uri( "./assets/js/jquery.validate.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "mail-js", get_theme_file_uri( "./assets/js/mail-script.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "ajaxchimp-js", get_theme_file_uri( "./assets/js/jquery.ajaxchimp.min.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "plugins-js", get_theme_file_uri( "./assets/js/plugins.js" ), array('jquery'), 1.0, true );
    wp_enqueue_script( "main-js", get_theme_file_uri( "./assets/js/main.js" ), array('jquery'), 1.0, true );

}
add_action("wp_enqueue_scripts","photo_theme_files");

function photo_sidebar() {
    register_sidebar( array(
        'name'          => __( 'About Sidebar', 'photo' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'photo' ),
        'before_widget' => '<div about2-caption mb-70">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer After Logo', 'photo' ),
        'id'            => 'footer-1',
        'description'   => __( 'This Sidebar Appear After Footer Logo', 'photo' ),
        'before_widget' => '<div footer-pera">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Instagram Feed', 'photo' ),
        'id'            => 'footer-2',
        'description'   => __( 'Footer Instagram Feed', 'photo' ),
        'before_widget' => '<div instagram-gellay">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Right', 'photo' ),
        'id'            => 'footer-3',
        'description'   => __( 'Footer Right Text', 'photo' ),
        'before_widget' => '<div footer-copy-right">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Social Share', 'photo' ),
        'id'            => 'footer-4',
        'description'   => __( 'Footer Social Share', 'photo' ),
        'before_widget' => '<div footer-social f-right">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Google Map', 'photo' ),
        'id'            => 'contact-1',
        'description'   => __( 'Contact Page Map', 'photo' ),
        'before_widget' => '<div d-none d-sm-block mb-5 pb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Contact Form', 'photo' ),
        'id'            => 'contact-form',
        'description'   => __( 'Contact Form', 'photo' ),
        'before_widget' => '<div col-lg-8">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'photo_sidebar' );