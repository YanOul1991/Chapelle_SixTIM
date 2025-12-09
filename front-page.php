<?php get_header() ?>
<main class="accueil">
  <div class="accueil-intro">
    <img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" alt="Image logo du site">
  </div>
  <section class="accueil-informations">
    <p class="accueil-information-description">ExpoTIM est une vitrine créative qui célèbre le talent et l'innovation des étudiants en Techniques d'intégration multimédia. Découvrez des projets uniques alliant design, interactivité et technologie de pointe.</p>
  </section>
  <section class="accueil-projets">
    <?php
    
    # Affiche la categorie parent : Projets 
    # Ainsi que ses sous categrories : affiches, arcade, finissants, etc.

    $catProjets = get_category_by_slug('projets');
    $catProjetSpec = get_terms(array(
      'taxonomy'    => 'category',
      'parent'      => $catProjets->term_id,
      'hide_empty'  => 'false'
    ));

    # Categorie parent
    if ($catProjets) : ?>
        <a class="accueil-projets-clique" href="<?php echo get_category_link($catProjets->term_id) ?>">
          <div class="accueil-projets-visuel">
            <img src="<?php echo get_template_directory_uri() . '/images/accueil_tous_1.png'; ?>" alt="Visuel tout les projets">
            <img src="<?php echo get_template_directory_uri() . '/images/accueil_tous_2.png'; ?>" alt="Visuel tout les projets">
            <img src="<?php echo get_template_directory_uri() . '/images/accueil_tous_3.jpg'; ?>" alt="Visuel tout les projets">
          </div>
          <div class="accueil-projets-description">
            <h2 class="accueil-projets-description-titre"><?php echo $catProjets->name ?></h2>
            <h3 class="accueil-projets-description-paragraphe"><?php echo $catProjets->description ?></h3>
          </div>
        </a>
      <?php endif;

    # Categories enfants
    if (!empty($catProjetSpec) && ! is_wp_error($catProjetSpec)) : foreach ($catProjetSpec as $cat) : ?>
      <!-- If cat = affiche, mettre l'url de accueil_affiche_1/2/3 -->
      <?php
      if ($cat->slug == 'affiches') {
        $img1 = 'accueil_affiche_1.png';
        $img2 = 'accueil_affiche_2.png';
        $img3 = 'accueil_affiche_3.png';
      } elseif ($cat->slug == 'arcade') {
        $img1 = 'accueil_jeu_1.jpg';
        $img2 = 'accueil_jeu_2.jpg';
        $img3 = 'accueil_jeu_3.jpg';
      } elseif ($cat->slug == 'finissants') {
        $img1 = 'NOUS N AVONS PAS LES IMAGES';
        $img2 = 'NOUS N AVONS PAS LES IMAGES';
        $img3 = 'NOUS N AVONS PAS LES IMAGES';
      }
        ?>
        <a class="accueil-projets-clique" href="<?php echo get_category_link($cat->term_id) ?>">
          <div class="accueil-projets-visuel">
            <img src="<?php echo get_template_directory_uri() . '/images/' . $img1; ?>" alt="Visuel tout les projets">
            <img src="<?php echo get_template_directory_uri() . '/images/' . $img2; ?>" alt="Visuel tout les projets">
            <img src="<?php echo get_template_directory_uri() . '/images/' . $img3; ?>" alt="Visuel tout les projets">
          </div>
          <div class="accueil-projets-description">
            <section class="michel">
            <h2 class="accueil-projets-description-titre"><?php echo $cat->name ?></h2>
            <h3 class="accueil-projets-description-paragraphe"><?php echo $cat->description ?></h3>
            </section>
          </div>
        </a>
    <?php
      endforeach;
    endif;
    ?>
  </section>
</main>
<?php get_footer() ?>