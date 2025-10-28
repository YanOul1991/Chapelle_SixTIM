<?php get_header(); ?>
<main>
  <div class="globalProjet">
  <?php get_caller(); ?>
  <?php if (have_posts()) : the_post(); ?>
    <h1 class="single-project-titre"><?php print_r(get_field('projet_nom')); ?></h1>
    <p class="single-project-type"><?php print_r(get_field('projet_cours')['label']); ?></p>
    <img class="single-project-thumbnail" src="https://placehold.co/500x500/FF9900/FFFFFF" alt="Projet Thumbnail">
    
    <?php
    $query = new WP_Query([
      'post__in' =>   get_field('projet_eleves'),
      'post_type' => 'any',
      'order_by'  => 'post_in'
    ]); ?> 
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post() ?>
        <h1><?php echo (get_field('eleve_nom') . " " . get_field('eleve_prenom') . " - Contribution : " . get_field('eleve_contribution')) ?></h1>
        
    <?php endwhile; endif; wp_reset_postdata(); ?>
    <p class="single-project-description"><?php print_r(get_field('projet_description')) ?></p>
  <?php endif; ?>
  </div>
</main>
<?php wp_footer();
get_footer(); ?>