<?php

function memento_theme_setup() {

	add_theme_support( 'post-thumbnails' );
}

function twentythirteen_widgets_init() {
register_sidebar( array(
'name' => __( 'Main Widget Area' ),
'id' => 'sidebar',
'description' => __( 'oikea' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
) );

register_sidebar( array(
'name' => __( 'Secondary Widget Area' ),
'id' => 'sidebar2',
'description' => __( 'yla' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
) );
}
add_action( 'widgets_init', 'twentythirteen_widgets_init' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

?>




