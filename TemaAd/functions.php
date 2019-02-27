<?php

    function elMeuTema_setup() {
        
        load_theme_textdomain( "elMeuTema", bloginfo('template_url')."/languages");
     
        
        add_theme_support( 'post-thumbnails' );
     
        
        add_theme_support( 'automatic-feed-links' );
     
        
        add_theme_support( 'title-tag' );
     
       
        add_theme_support( 'custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
        ) );
     
       
        register_nav_menus(array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ));
     
        // Inclou per defecte el marcat HTML5 per a formularis de cerca i comentaris
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    }
    add_action( 'after_setup_theme', 'elMeuTema_setup' );

    /*function elMeuTema_cssjs() {
        wp_enqueue_style( 'elMeuTema-style', get_template_directory_uri() . '/css/styles.min.css' );
        wp_enqueue_script( 'elMeuTema-js', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery' ), '', true );
    }*/

//add_action( 'wp_enqueue_scripts', 'my-theme_cssjs' );

// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}


// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );



