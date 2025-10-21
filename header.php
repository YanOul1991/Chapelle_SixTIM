<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChapelleSixTIM</title>
  <base href="<?php echo home_url(); ?>">
  <?php wp_head() ?>
  <?php wp_body_open() ?>
</head>

<body <?php wp_body_open() ?>>
  <header>
    <?php 
      if (function_exists('the_custom_logo')) : ?>
      <div class="main-logo">
        <?php the_custom_logo(); ?>
      </div>
    <?php endif;
    get_nav('header'); ?>
  </header>