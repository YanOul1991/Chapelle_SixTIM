<?php

// DEBUG MODE
define('DEBUG', false);

add_filter('show_admin_bar', DEBUG ? '__return_true' : '__return_false');

add_filter('wp_img_tag_add_auto_sizes', '__return_false');

$dir = '/functions';
$files = array_diff(scandir(__DIR__.$dir), array('.', '..'));

foreach($files as $f) {
  include_once get_template_directory()."$dir/$f";
}

// Support des miniatures
function theme_setup_custom_logo() {
  add_theme_support( 'custom-logo', array(
    'height'      => 120,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
  ) );
}
add_action( 'after_setup_theme', 'theme_setup_custom_logo' );