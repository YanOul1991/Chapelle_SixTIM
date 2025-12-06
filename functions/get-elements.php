<?php

// Fonctions de fichier servent a generer des elements HTML

/**
 * Genere le un menu de navigation selon les parametres du menu dans WordPress.
 * @param string $class_prefix Prefix ajoute au nom de la class pour gerer le CSS plus facilement, ex: header-nav ou footer-nav.
 * @return html Menu de navigation.
 */
function get_nav($class_prefix)
{
    wp_nav_menu(array(
        'menu' => 'nav',
        'container' => 'nav',
        'menu_class' => $class_prefix . '-menu-list',
        'container_class' => $class_prefix . '-menu-container'
    ));
}

function get_nav_drop()
{
    $categories = get_categories();
    $categorie_projets = get_cat_ID('projets');

    foreach ($categories as $cat) : if ($cat->category_parent == $categorie_projets) : ?>
        <a href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name; ?></a>
    <?php
    endif;
    endforeach;
}

/**
 * Genere du html pour une crte de projet
 * @param string $class_prefix Prefix ajoute au nom de la class pour gerer le CSS plus facilement, ex: header-nav ou footer-nav.
 * @return html 
 */
function get_project_card($class_prefix)
{
    // Récupérer la première catégorie du post
    $categories = get_the_category();
    $cat_slug = $categories ? $categories[0]->slug : '';

    // Associer une image selon la catégorie
    switch ($cat_slug) {
        case 'arcade':
            $image = '/images/manetteDeJeu.png';
            break;
        case 'finissants':
            $image = '/images/chapeauGraduation.png';
            break;
        case 'affiches':
            $image = '/images/pinceau2.png';
            break;
        default:
            $image = '/images/chapeauGraduation.png'; // fallback
            break;
    }
    ?>

    <?php
      $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
      if ( ! $thumb_url ) {
        $thumb_url = 'https://placehold.co/50x100';
      }
    ?>


    <div class="iconeAnnee">
        <img src="<?php echo esc_url(get_theme_file_uri($image)); ?>" alt="Image Catégorie">
    </div>

    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Image Catégorie" class="categorie-image" />

    <div class="informationProjet">
        <h1 class="<?php echo $class_prefix; ?>-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <a href="<?php the_permalink(); ?>">Voir plus</a>
    </div>

<?php
}
