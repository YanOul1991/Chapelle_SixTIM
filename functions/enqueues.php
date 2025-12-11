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
  // Enqueue main CSS (variables, fonts) first
  wp_enqueue_style('theme-main', get_stylesheet_directory_uri() . '/css/main.css', array(), filemtime( get_stylesheet_directory() . '/css/main.css'));

  // Enqueue single-project after main so it can use variables from main.css
  wp_enqueue_style('theme-single-project', get_stylesheet_directory_uri() . '/css/single-project.css', array('theme-main'), filemtime( get_stylesheet_directory() . '/css/single-project.css'));

  // Enqueue the theme style.css last (no @import needed)
  wp_enqueue_style('theme-style', get_stylesheet_uri(), array('theme-single-project'), filemtime( get_stylesheet_directory() . '/style.css'));
}

add_action('wp_enqueue_scripts', 'theme_sixtim_enqueue_styles');

/**
 * Enqueue music mute button JavaScript
 */
function theme_sixtim_enqueue_scripts() {
  $music_mute_file = get_template_directory() . '/js/music-mute-button.js';
  if (file_exists($music_mute_file)) {
    wp_enqueue_script(
      'theme-music-mute-button',
      get_template_directory_uri() . '/js/music-mute-button.js',
      array(),
      filemtime($music_mute_file),
      true // Load in footer
    );
  }

  $interactive_sounds_file = get_template_directory() . '/js/interactive-sounds.js';
  if (file_exists($interactive_sounds_file)) {
    wp_enqueue_script(
      'theme-interactive-sounds',
      get_template_directory_uri() . '/js/interactive-sounds.js',
      array(),
      filemtime($interactive_sounds_file),
      true // Load in footer
    );
  }
}

add_action('wp_enqueue_scripts', 'theme_sixtim_enqueue_scripts');

