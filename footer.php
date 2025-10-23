<section id="footer_complet">
  <?php get_caller(); ?>

    <section id="footer_navs"> <!-- Navs -->
        <h3>Les pages du site</h3>
        <?php get_nav('header'); ?>
    </section>

  <section id="footer_central"> <!-- Section centrale (logo, réseaux, légal) -->

    <section id="footer_logo_contenant"> <!-- L'image logo -->
      <div class="main-logo">
        <?php the_custom_logo(); ?>
      </div>
    </section>
    
    <section id="footer_social_contenant"> <!-- Les liens vers réseaux sociaux | Customizer -->
      <h3>Suivez-nous sur les réseaux sociaux</h3>
      <div class="social-links">
        <?php
          $social_links = get_theme_mod('social_links', []);
          foreach ($social_links as $link) {
            echo '<a href="' . esc_url($link['url']) . '" target="_blank" rel="noopener noreferrer">';
            echo '<img src="' . esc_url($link['icon']) . '" alt="' . esc_attr($link['name']) . ' Icon">';
            echo '</a>';
          }
        ?>
      </div>
    </section>
    
    <section id="footer_legal_contenant"> <!-- Mention légal -->
      <h3>Mentions légales</h3>
      <p>© ChapelleSixTIM - Tous droits réservés.</p> <!-- À revoir pour rendre dynamique genre un champ customizer -->
    </section>
  </section>

  <section id="footer_a_propos"> <!-- À propos --> 
    <h3>À propos de l'exposition</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium tempora optio, vel, mollitia impedit dolore ratione ut nobis nisi quas quibusdam? Eveniet perspiciatis tempora fugit ab veniam officiis, tenetur labore.</p>
  </section>

</section>