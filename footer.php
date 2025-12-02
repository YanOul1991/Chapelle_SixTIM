

<div id="footer_complet">
  <?php get_caller(); ?>

    <div id="footer_navs"> <!-- Navs -->
        <h3>Les pages du site</h3>
        <?php get_nav('footer'); ?>
  </div>

  <div id="footer_central"> <!-- Section centrale (logo, réseaux, légal) -->

    <div id="footer_logo_contenant"> <!-- L'image logo -->
      <div class="footer_logo">
        <!-- Le logo du site wordpress --> 
        <?php
if ( function_exists('has_custom_logo') && has_custom_logo() ) {
  echo get_custom_logo();
} else {
  echo '<!-- Pas de logo défini ou le thème n\'a pas ajouté le support -->';
}
?>
      </div>
    </div>
    
    <div id="footer_social_contenant"> <!-- Les liens vers réseaux sociaux | Customizer -->
        <?php
        // Boucle : tous les articles de la catégorie 'media'
        $media_query = new WP_Query([
          'category_name'  => 'media',
          'posts_per_page' => -1,
          'post_status'    => 'publish',
        ]);

        if ( $media_query->have_posts() ) :
          while ( $media_query->have_posts() ) : $media_query->the_post();
            $post_id = get_the_ID();

            // media_url 
            $media_url = function_exists('get_field') ? get_field('media_url', $post_id) : '';
            if ( empty($media_url) ) { $media_url = get_post_meta($post_id, 'media_url', true); }

            // media_thumbnail - Retourne un URL
            $thumb_url = function_exists('get_field') ? get_field('media_thumbnail', $post_id) : get_post_meta($post_id, 'media_thumbnail', true);
            $thumb_alt = get_the_title($post_id);

            // Si le champ ACF retourne un tableau (array) au lieu d'une URL directe (garde-fou)
            if ( is_array($thumb_url) && ! empty($thumb_url['url']) ) {
              $thumb_url = $thumb_url['url'];
            }

            // Assemblage du lien avec l'image miniature
            if ( ! empty($media_url) && ! empty($thumb_url) ) : ?>
              <a class="footer_social" href="<?php echo esc_url($media_url); ?>" target="_blank" rel="noopener noreferrer">
                <img class="footer_social_img" src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($thumb_alt); ?>" />
              </a>
            <?php endif;

          endwhile;
          wp_reset_postdata();
        endif;
        ?>
    </div>
    
    <div id="footer_legal_contenant"> <!-- Mention légal -->
      <p>© ChapelleSixTIM - Tous droits réservés.</p> <!-- À revoir pour rendre dynamique genre un champ customizer -->
    </div>
  </div>

  <div id="footer_a_propos"> <!-- À propos --> 
    <h3>À propos de l'exposition</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium tempora optio, vel, mollitia impedit dolore ratione ut nobis nisi quas quibusdam? Eveniet perspiciatis tempora fugit ab veniam officiis, tenetur labore.</p>
  </div>

</div>
