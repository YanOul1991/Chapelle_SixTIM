<?php get_header() ?>

<main class="createurs">
  <?php get_caller()?>
  <h1 class="titre-page">Createurs</h1>
  <ul class="liste-createurs">
    <?php
    // Boucle : tous les articles publiés de la catégorie 'createur'
    $creators = new WP_Query([
      'category_name'  => 'createur',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
    ]);

    if ( $creators->have_posts() ) :
      while ( $creators->have_posts() ) : $creators->the_post(); ?>

        <li class="liste-createurs-item">
          <div class="createur-texte">
            <div class="createur-nom"><?php the_title(); ?></div>
            
            <div class="createur-description">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="createur-image">
            <?php if ( has_post_thumbnail() ) : ?>
              <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" style="width:100%;" />
            <?php else : ?>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/placeholder-creator.png' ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" style="width:100%;" />
            <?php endif; ?>
          </div>
        </li>

      <?php endwhile;
      wp_reset_postdata();
    else : ?>

      <li class="liste-createurs-item">Aucun créateur trouvé pour la catégorie 'createur'.</li>

    <?php endif; ?>
  </ul>
</main>

<?php wp_footer(); get_footer(); ?>