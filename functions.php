<?php

if ( ! function_exists( 'iBlogger_setup' ) ) :

  function iBlogger_setup() {

     load_theme_textdomain("iBlogger"); 
     add_theme_support("post-thumbnails"); 
     add_theme_support("title-tag");  
     add_theme_support("custom-logo");  
     add_theme_support("widgets");                                 
     add_theme_support( 'post-formats', array( 'aside', 'gallery', 'chat', 'link', 'image', 'quote', 'status', 'video ' ) );

  } 
endif;

add_action( 'after_setup_theme', 'iBlogger_setup' );

 
  
/**
 menu rigister
--------------------*/
 
        register_nav_menus( array(
        'header_menu' => esc_html__( 'Primary', 'iBlogger' ),
        'footer_menu' => esc_html__( 'Fpoter', 'iBlogger' ),
    ) );

/**
sidebar 
--------------*/
function iBlogger_widgets_init() { 

    register_sidebar( array(
        'name' =>__( 'Foote text 1', 'iBlogger'),
        'id' => 'foote-text-1',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_about">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 2', 'iBlogger'),
        'id' => 'foote-text-2',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_latestposts">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 3', 'iBlogger'),
        'id' => 'foote-text-3',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_twitter">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) ); 
 
    register_sidebar( array(
        'name' =>__( 'Foote text 4', 'iBlogger'),
        'id' => 'foote-text-4',
        'description' => __( 'Appears on the static front page template', 'iBlogger' ),
        'before_widget' => '<aside id="%1$s" class="widget widget_flickr">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

  

}
 
add_action( 'widgets_init', 'iBlogger_widgets_init' );  



/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

 

function iBlogger_assets(){ 
/**
css files
************/ 
  wp_enqueue_style( 'firezone',get_stylesheet_uri()); 
  wp_enqueue_style('apple-touch', get_template_directory_uri().'/assets/images/apple-touch-icon-114x114-precomposed.png');       
  wp_enqueue_style('apple-touch-2', get_template_directory_uri().'/assets/images/apple-touch-icon-72x72-precomposed.html');       
  wp_enqueue_style('apple-touch-3', get_template_directory_uri().'/assets/images/apple-touch-icon-57x57-precomposed.png');       
  wp_enqueue_style('googleapis','//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');       
  wp_enqueue_style('lib', get_template_directory_uri().'/assets/css/lib.css');     
  wp_enqueue_style('maincss', get_template_directory_uri().'/assets/css/lib.css');     
  wp_enqueue_style('plugins', get_template_directory_uri().'/assets/css/plugins.css');   
  wp_enqueue_style('elements', get_template_directory_uri().'/assets/css/elements.css');   
  wp_enqueue_style('rtl', get_template_directory_uri().'/assets/css/rtl.css');   
  wp_enqueue_style('style', get_template_directory_uri().'//style.css"');    

  /**********
  js files
  */ 
    wp_enqueue_script('jqueRy',get_template_directory_uri().'/assets/js/jquery-1.12.4.min.js',array('jquery'), false,true );
    wp_enqueue_script('libjs',get_template_directory_uri().'/assets/js/lib.js',null, false,true );
    wp_enqueue_script('libjs',get_template_directory_uri().'/assets/js/lib.js',null, false,true );
    wp_enqueue_script('mainJs',get_template_directory_uri().'/assets/js/main.js',null, false,true ); 
} 
add_action('wp_enqueue_scripts','iBlogger_assets');





 

include('inc/redux/ReduxCore/framework.php');
include('inc/redux/sample/config.php');
/*
tgm plugin
---------------------------*/
require_once get_theme_file_path('inc/tgm/tgm.php');