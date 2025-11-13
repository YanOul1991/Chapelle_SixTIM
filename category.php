<?php get_header() ?>
<main>
  <?php get_caller() ?>
  <h2 class="project-gallery-title">Tout les projets etudiants.</h2>
  <div class="project-gallery">
    <ul class="project-gallery-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="project-gallery-list-item">
            <?php get_project_card("project-gallery-list-item"); ?>
          </li>
      <?php endwhile;
      endif; ?>
    </ul>
  </div>
</main>
<?php
wp_footer();
get_footer();
?>