    <?php $icone_1_img = get_theme_mod("social_1_icon", "http://localhost:81/4w4/wp-content/uploads/2025/02/25231.png") ?>
    <?php $icone_1_url = get_theme_mod("social_1_url", "Default") ?>
    <?php $icone_1_name = get_theme_mod("social_1_name", "Default") ?>
    <?php $icone_2_img = get_theme_mod("social_2_icon", "http://localhost:81/4w4/wp-content/uploads/2025/02/77364-instagram-icons-computer-black-logo-white-wine_600x600.png") ?>
    <?php $icone_2_url = get_theme_mod("social_2_url", "Default") ?>
    <?php $icone_2_name = get_theme_mod("social_2_name", "Default") ?>
    <?php $icone_3_img = get_theme_mod("social_3_icon", "FacebookIconBlack.png") ?>
    <?php $icone_3_url = get_theme_mod("social_3_url", "Default") ?>
    <?php $icone_3_name = get_theme_mod("social_3_name", "Default") ?>
    <?php $icone_4_img = get_theme_mod("social_4_icon", "5a2fe479cc45e43754640849.png") ?>
    <?php $icone_4_url = get_theme_mod("social_4_url", "Default") ?>
    <?php $icone_4_name = get_theme_mod("social_4_name", "Default") ?>




<div id="footer_complet">
  <?php get_caller(); ?>

    <div id="footer_navs"> <!-- Navs -->
        <h3>Les pages du site</h3>
        <?php get_nav('footer'); ?>
  </div>

  <div id="footer_central"> <!-- Section centrale (logo, réseaux, légal) -->

    <div id="footer_logo_contenant"> <!-- L'image logo -->
      <div class="footer_logo">
        <?php the_custom_logo(); ?>
      </div>
    </div>
    
    <div id="footer_social_contenant"> <!-- Les liens vers réseaux sociaux | Customizer -->
      <div class="social-links">
        <a href="<?php echo $icone_1_url ?>">
          <img class="social-links-icon" src="<?php echo $icone_1_img ?>" alt="<?php echo $icone_1_name ?>" width="32" height="32">
        </a>
        <a href="<?php echo $icone_2_url ?>">
          <img class="social-links-icon" src="<?php echo $icone_2_img ?>" alt="<?php echo $icone_2_name ?>" width="32" height="32">
        </a>
        <a href="<?php echo $icone_3_url ?>">
          <img class="social-links-icon" src="<?php echo $icone_3_img ?>" alt="<?php echo $icone_3_name ?>" width="32" height="32">
        </a>
        <a href="<?php echo $icone_4_url ?>">
          <img class="social-links-icon" src="<?php echo $icone_4_img ?>" alt="<?php echo $icone_4_name ?>" width="32" height="32">
        </a>
      </div>
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
