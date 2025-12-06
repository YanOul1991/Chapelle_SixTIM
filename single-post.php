<?php get_header(); ?>
<main class="single-post-content">
  <?php get_caller(); ?>
  <?php if (have_posts()) : the_post(); ?>
    <h1 class="single-project-titre single-project-texte-item"><?php print_r(get_field('projet_nom')); ?></h1>
    <h1 class="single-project-type single-project-texte-item"><?php print_r(get_field('projet_cours')['label']); ?></h1>
    <?php
      $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
      if ( ! $thumb_url ) {
        $thumb_url = 'https://placehold.co/800x600';
      }
    ?>
    <img class="single-project-thumbnail" src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
    
    <?php
    $query = new WP_Query([
      'post__in' =>   get_field('projet_eleves'),
      'post_type' => 'any',
      'order_by'  => 'post_in'
    ]); ?> 
    <div class="single-project-membres single-project-texte-item">
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post() ?>
          <h3 class="single-project-membres-item"><?php echo (get_field('eleve_nom') . " " . get_field('eleve_prenom') . " - " . get_field('eleve_contribution')) ?></h3>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <p class="single-project-description single-project-texte-item"><?php print_r(get_field('projet_description')) ?></p>
  <?php endif; ?>
</main>
<?php wp_footer();
get_footer(); ?>