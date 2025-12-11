<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="<?php echo home_url(); ?>">
  <!-- Pass theme URI to JavaScript -->
  <script>
    window.themeUri = '<?php echo get_template_directory_uri(); ?>';
  </script>
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
    <?php get_nav('header'); ?>
    <button id="music-mute-btn" class="music-mute-btn" title="Mute/Unmute Music" aria-label="Mute or unmute background music">
      <svg class="music-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" fill="#ffffff">
        <path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/>
      </svg>
    </button>
    
  </header>