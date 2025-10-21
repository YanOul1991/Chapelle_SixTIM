<?php

// DEBUG MODE
define('DEBUG', false);

add_filter('show_admin_bar', DEBUG ? '__return_true' : '__return_false');

$dir = '/functions';
$files = array_diff(scandir(__DIR__.$dir), array('.', '..'));

foreach($files as $f) {
  include_once get_template_directory()."$dir/$f";
}