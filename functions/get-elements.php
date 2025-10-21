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

/**
 * Genere du html pour une crte de projet
 * @param string $class_prefix Prefix ajoute au nom de la class pour gerer le CSS plus facilement, ex: header-nav ou footer-nav.
 * @return html 
 */
function get_project_card($class_prefix)
{ ?>
  <h1 class="<?php echo $class_prefix; ?>-title"><?php the_title(); ?></h1>
  <?php the_content() ?>
  <a href="<?php the_permalink() ?>">Voir plus</a>
<?php }
