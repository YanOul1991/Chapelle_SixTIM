<?php

function theme_sixtime_theme_supports(){
  add_theme_support('title-tag');
  add_theme_support('menu');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 175,
    'flex-height' => true,
    'flex-width' => true
  ));
}
add_action('after_setup_theme', 'theme_sixtime_theme_supports');


function theme_sixtim_enqueue_styles() {
  wp_enqueue_style('mytheme_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_sixtim_enqueue_styles');
