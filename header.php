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
      <svg id="btn-burger-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000ff">
        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
      </svg>
    </label>
    <?php
    // get_nav('header'); 
    
    $page_info = get_page_by_path('info');
    $page_createurs = get_page_by_path('creators');

    $categories = get_categories(
      array('order' => 'DESC')
    );
    $categorie_projets = get_cat_ID('projets');
    
    // print_r($page_info);
    ?>
    <ul class="header-navigation">
      <a href="<?php echo get_permalink($page_info->ID)?>"><?php echo $page_info->post_name; ?></a>
      <div class="navigation-drop">
        <h3 class="navigation-drop-titre">Projets</h3>
        <ul class="navigation-drop-list">
          <?php foreach ($categories as $cat) : if ($cat->category_parent == $categorie_projets) : ?>
            <a href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name; ?></a>
            <?php endif; endforeach; ?>
            <a href="<?php echo get_category_link($categorie_projets) ?>">Tout</a>
          </ul>
        </div>
      <a href="<?php echo get_permalink($page_createurs->ID)?>">Créateurs</a>
    </ul>
  </header>