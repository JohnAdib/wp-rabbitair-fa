<?php

add_theme_support( 'menus' );


// Add Your Menu Locations
function register_my_menus()
{
  register_nav_menus(
  [
    'menu_header'  => 'منوی بالای صفحه',
    'menu_nav'     => 'ناوبری',
    'menu_sidebar' => 'منوی نوار کناری',
    'menu_footer'  => 'منوی فوتر',
                        'header_menu' => 'Header Menu',
  ]
  );
}


function theme_widgets_init()
{
  $site_title = '؛ <h1>'. get_bloginfo('name'). ' </h1> ';

  register_sidebar( [
    'name'          => 'widget-sidebar',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
    'before_widget' => '<div class="widget-sidebar">',
    'after_widget'  => '</div>',
  ]);
}

add_action( 'widgets_init', 'theme_widgets_init' );
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status'] );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, array( 'center', 'center') ); // 50 pixels wide by 50 pixels tall, resize mode
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

// Changing excerpt length
function new_excerpt_length($length) {
return 80;
}
?>