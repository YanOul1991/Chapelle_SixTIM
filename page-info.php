<?php get_header() ?>

<main>
  <!-- "L'ExpoTIM Page Info" -->
  <?php get_caller()?>  

  <section id="PageInfo">
  <!-- Partie paragraphe d'explications -->
    <section id="ExplicationsContenant">
      <h2 class="ExplicationTitre">ExpoTIM</h2>
      <p id="ExplicationsTexte">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </section>

  <!-- Partie les trois contenants de projets -->
    <section id="ProjetsContenant">
      <div id="Projet1" class="ProjetBox">
        <div class="iconeAnnee">
          <img src="/images/pinceau2.png" alt="Image Catégorie">
        </div>
        <div id="Projet1Image" class="ProjetImageContenant">
          <img src="https://placehold.co/100x100" alt="Projet 1 Image">
        </div>
        <div id="Projet1TexteContenant" class="ProjetTexteContenant">
          <h3 class="ProjetTitre">
              <?php
                $category = get_category_by_slug('affiches');
                if ($category) {
                    echo esc_html($category->name);
                } else {
                    echo 'Nom de la catégorie non trouvé.';
                } 
              ?>
          </h3>
          <p class="ProjetTexte">
            <?php
              $category = get_category_by_slug('affiches');
              if ($category) {
                  echo esc_html($category->description);
              } else {
                  echo 'Description de la catégorie non trouvée.';
              }
            ?>
          </p>
        </div>
      </div>
      <div id="Projet2" class="ProjetBox">
        <div class="iconeAnnee">
          <img src="/images/manetteDeJeu.png" alt="Image Catégorie">
        </div>
        <div id="Projet2Image" class="ProjetImageContenant">
          <img src="http://localhost/chapelle_SixTim/wp-content/uploads/2025/11/Affiche-jeu-Hachiman.jpg" alt="Projet 2 Image">
        </div>
        <div id="Projet2TexteContenant" class="ProjetTexteContenant">
          <h3 class="ProjetTitre"> 
                            <?php
              $category = get_category_by_slug('arcade');
              if ($category) {
                  echo esc_html($category->name);
              } else {
                  echo 'Nom de la catégorie non trouvé.';
              } 
              ?>
          </h3>
          <p class="ProjetTexte">
            <?php
              $category = get_category_by_slug('arcade');
              if ($category) {
                  echo esc_html($category->description);
              } else {
                  echo 'Description de la catégorie non trouvée.';
              }
            ?>
          </p>
        </div>
      </div>
      <div id="Projet3" class="ProjetBox">
        <div class="iconeAnnee">
          <img src="/images/chapeauGraduation.png" alt="Image Catégorie">
        </div>
        <div id="Projet3Image" class="ProjetImageContenant">
          <img src="https://placehold.co/100x100" alt="Projet 3 Image">
        </div>
        <div id="Projet3TexteContenant" class="ProjetTexteContenant">
          <h3 class="ProjetTitre">
              <?php
              $category = get_category_by_slug('finissants');
              if ($category) {
                  echo esc_html($category->name);
              } else {
                  echo 'Nom de la catégorie non trouvé.';
              } 
              ?>

          </h3>
          <p class="ProjetTexte">
            <?php
              $category = get_category_by_slug('finissants');
              if ($category) {
                  echo esc_html($category->description);
              } else {
                  echo 'Description de la catégorie non trouvée.';
              }
            ?>
          </p>
        </div>
      </div>
    </section>

  <!-- Partie Lignes d'accroches pour gallerie images -->
    <section id="LignesAccrochesContenant">
      <?php
        // Lien vers la page de la catégorie 'projets' (par slug)
        $cat_projets = get_category_by_slug('projets');
        if ( $cat_projets ) :
          $projets_link = get_category_link( $cat_projets->term_id );
        else :
          $projets_link = '#';
        endif;
      ?>
      <section class="LigneAccrocheContenant-Lien">
      <a href="<?php echo esc_url( $projets_link ); ?>">
        <p class="LigneAccroche-LienProjet">- Découvrez nos projets innovants -</p>
      </a>
      </section>
      <h1 class="LigneAccroche">Inspirez-vous avec nos réalisations ci-dessous</h1>
    </section>

  <!-- Partie gallerie images -->
  <!-- Remplace la grille statique par le contenu de l'article 'Galerie Expo' (affiche la galerie WordPress) -->
  <section id="GalerieImagesContenant">
    <div class="GalerieArticle">
      <?php
        // Cherche l'article intitulé 'Galerie Expo'
        $galerie_post = get_page_by_title( 'Galerie Expo', OBJECT, 'post' );

        if ( $galerie_post ) {
          // Applique les filtres de contenu pour traiter shortcodes (gallery) et autres filtres
          echo apply_filters( 'the_content', $galerie_post->post_content );
        } else {
          // Fallback : message et ancienne grille minimaliste
          echo '<p>La galerie n\'a pas été trouvée. Assurez-vous qu\'un article nommé "Galerie Expo" existe.</p>';
        }
      ?>
    </div>
  </section>

  <!-- FOOTER -->

  <?php wp_footer(); get_footer(); ?>


</main>