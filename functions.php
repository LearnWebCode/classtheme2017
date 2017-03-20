<?php

add_action('after_setup_theme', 'ourThemeSetup');

function ourThemeSetup() {
  add_theme_support( 'title-tag' );

  // Navigation Menus
  register_nav_menus(array(
    'headerMenu' => __( 'Header Menu'),
    'footerMenu' => __( 'Footer Menu'),
  ));
}

add_action('wp_enqueue_scripts', 'ourThemeResources');

function ourThemeResources() {
  wp_enqueue_style('ourMainCSS', get_stylesheet_uri());
}