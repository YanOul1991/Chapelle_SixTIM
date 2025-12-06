<?php get_header() ?>
<main class="accueil">
  <div class="accueil-intro">
    <img src="https://placehold.co/600x400" alt="Image logo">
  </div>
  <section class="accueil-informations">
    <h1 class="accueil-informations-titre">ExpoTIM</h1>
    <p class="accueil-information-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam maiores nostrum, molestiae sit quibusdam cupiditate in non eius qui suscipit laborum, provident totam expedita nisi?</p>
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
            <img src="https://placehold.co/200x350" alt="Visuel tout les projets">
            <img src="https://placehold.co/200x350" alt="Visuel tout les projets">
            <img src="https://placehold.co/200x350" alt="Visuel tout les projets">
          </div>
          <div class="accueil-projets-description">
            <h2 class="accueil-projets-description-titre"><?php echo $catProjets->name ?></h2>
            <h3 class="accueil-projets-description-paragraphe"><?php echo $catProjets->description ?></h3>
          </div>
        </a>
      <?php endif;

    # Categories enfants
    if (!empty($catProjetSpec) && ! is_wp_error($catProjetSpec)) : foreach ($catProjetSpec as $cat) : ?>
        <a class="accueil-projets-clique" href="<?php echo get_category_link($cat->term_id) ?>">
          <div class="accueil-projets-visuel">
            <img src="https://placehold.co/200x350" alt="Visuel tout les projets">
            <img src="https://placehold.co/200x350" alt="Visuel tout les projets">
            <img src="https://placehold.co/200x350" alt="Visuel tout les projets">          </div>
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