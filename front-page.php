<?php get_header() ?>
<main class="accueil">
  <div class="accueil-intro">
    <img src="https://placehold.co/600x400" alt="Image logo">
    <h1 class="home-main-title">ExpoTIM</h1>
  </div>
  <section class="accueil-informations">
    <p class="home-main-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam maiores nostrum, molestiae sit quibusdam cupiditate in non eius qui suscipit laborum, provident totam expedita nisi?</p>
  </section>

  <?php   # Loop pour chacune des categories, titre plus description.
          # Tout la section et un lien cliquable vers la categorie choisie
  
  
  $categories = get_categories();
  foreach ($categories as $cat) : ?>
    <section class="accueil-projets">
      <a class="accueil-projets-click" href="<?php echo get_category_link($cat->term_id) ?>">
        <div class="accueil-projets-visuel">
          <img src="https://placehold.co/600x400" alt="Visuel tout les projets">
        </div>
        <div class="accueil-projets-description">
          <h1 class="accueil-projets-description-titre"><?php echo $cat->name ?></h1>
          <h3 class="accueil-projets-description-paragraphe"><?php echo $cat->description ?></h3>
        </div>
      </a>
    </section>
  <?php endforeach ?>
</main>
<?php get_footer() ?>