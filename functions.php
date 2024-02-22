<?php
// theme Support
add_theme_support( 'post-thumbnails' );


function includeStyleFiles(){
    wp_enqueue_style('style', get_stylesheet_uri());
    // make it fit for arabic
    wp_style_add_data('style','rtl','replace');
}
add_action('wp_enqueue_scripts', 'includeStyleFiles');

// activate menu into the site
function activate_menu(){
    register_nav_menu('Main Menu','this is the main menu for my site');
}
add_action('init','activate_menu');

// activate widgets into the site by add new sidebars
function create_new_sidebars(){
    $footer1=[
        'id'=>'footer-1',
        'name'=>'Footer Column 1',
        'description'=>'add widgets here for the content of footer1',
        'before_widget' => '',
        'after_widget'  => '',
    ];
    register_sidebar($footer1);
    
   $footer2=[
    'id'=>'footer-2',
    'name'=>'Footer Column 2',
    'description'=>'add widgets here for the content of footer3',
    'before_widget' => '',
        'after_widget'  => '',
   ];
   register_sidebar($footer2);
   $footer3=[
    'id'=>'footer-3',
    'name'=>'Footer Column 3',
    'description'=>'add widgets here for the content of footer3',
    'before_widget' => '',
    'after_widget'  => '',
   ];
   register_sidebar($footer3);

//    create sidebars for Single Page
$sidebar1=[
    'id'=>'sidebar1',
    'name'=>'SideBar Row 1',
    'description'=>'add widgets here for the content of sidebar1',
    'before_widget' => '',
    'after_widget'  => '',
   ];
   register_sidebar($sidebar1);

   $sidebar2=[
    'id'=>'sidebar2',
    'name'=>'SideBar Row 2',
    'description'=>'add widgets here for the content of sidebar2',
    'before_widget' => '',
    'after_widget'  => '',
   ];
   register_sidebar($sidebar2);

   $sidebar3=[
    'id'=>'sidebar3',
    'name'=>'SideBar Row 3',
    'description'=>'add widgets here for the content of sidebar3',
    'before_widget' => '',
    'after_widget'  => '',
   ];
   register_sidebar($sidebar3);
}
add_action('widgets_init','create_new_sidebars');
