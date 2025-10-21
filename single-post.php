<?php get_header(); ?>
<main>
  <?php get_caller(); ?>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <h1><?php the_title();?></h1>
    <?php the_content() ?>
  <?php endwhile; endif;?>
</main>
<?php wp_footer(); get_footer(); ?>