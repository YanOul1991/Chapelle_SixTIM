<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    ?>
    <input type="checkbox" name="btn-burger" id="btn-burger-check">
    <label id="btn-burger-label" for="btn-burger-check">
      <svg id="btn-burger-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
      </svg>
    </label>
    <?php
    get_nav('header'); ?>
  </header>