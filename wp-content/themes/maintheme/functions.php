<?php

//Add thumbnail images
function theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup');


//Adding stylesheets
function _adding_stylesheet(){
  //Style register
  wp_register_style('cards',get_template_directory_uri().'/assets/css/card.css',array(),'1.0 ');
  wp_register_style('style',get_template_directory_uri().'/style.css',array(),'1.0 ');
  //Style display
  wp_enqueue_style('cards');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','_adding_stylesheet');

//Create menus
function adding_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu','Menu Principal')
    ));
}
add_action( 'init', 'adding_menus' );

//Action that call javascript file on themebase assets/js
function _adding_scripts() {
  //JS file regist
  wp_register_script('my_custom_script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),'1', true);
  //Js load
  wp_enqueue_script('my_custom_script');
  wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', '_adding_scripts',100 ); 

//Remove warning for jquery migrate version 1.4.1
add_action( 'wp_default_scripts', function( $scripts ) {  
  if ( ! empty( $scripts->registered['jquery'] ) ) {
    $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
  }
} );

//Expires cookie for "jobs" page when user close the page
function custom_password_cookie_expiry( $expires ) {
    return (-1);
}
add_filter( 'post_password_expires', 'custom_password_cookie_expiry' );

//Removes the 'Protected' string from title pages
function change_protected_title_prefix() {
    return '%s';
}
add_filter('protected_title_format', 'change_protected_title_prefix');

//Projects Post type
add_action( 'init', 'blog_projects' );
function blog_projects() {
  $labels = array(
    'name'               => _x( 'Productos', 'blog' ),
    'singular_name'      => _x( 'Producto', 'post type singular name', 'blog' ),
    'menu_name'          => _x( 'Productos', 'admin menu', 'blog' ),
    'name_admin_bar'     => _x( 'Productos', 'add new on admin bar', 'blog' ),
    'add_new'            => _x( 'Agregar Nuevo', 'book', 'blog' ),
    'add_new_item'       => __( 'Agregar Nuevo Proyecto', 'blog' ),
    'new_item'           => __( 'Nuevo Proyecto', 'blog' ),
    'edit_item'          => __( 'Editar Productos', 'blog' ),
    'view_item'          => __( 'Ver Productos', 'blog' ),
    'all_items'          => __( 'Todos los Productos', 'blog' ),
    'search_items'       => __( 'Buscar Productos', 'blog' ),
    'parent_item_colon'  => __( 'Parent Products:', 'blog' ),
    'not_found'          => __( 'No se encontraron productos.', 'blog' ),
    'not_found_in_trash' => __( 'Sin productos en basura.', 'blog' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Descripción.', 'blog' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'productosblog' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
  );

  register_post_type( 'productosblog', $args );
}

//Widget activation
function my_widgets (){
  register_sidebar( array( 
    'name' => 'Blog sidebar',
    'id' => 'blog_sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'my_widgets');
?>