<?php get_header() ?>
<?php
$queryArgs = array(
  'post_type' => 'post',
  'posts_per_page' => -1
);

$queryPost = new WP_Query($queryArgs);
?>
<main>
<?php get_caller(); ?>
<div class="project-gallery">
    <h2 class="project-gallery-title">Tout les projets etudiants.</h2>
    <ul class="project-gallery-list">
      <?php if ($queryPost->have_posts()) : while ($queryPost->have_posts()) : $queryPost->the_post(); ?>
          <li class="project-gallery-list-item">
            <?php get_project_card("project-gallery-list-item"); ?>
          </li>
      <?php endwhile;
      endif; ?>
    </ul>
  </div>
</main>

<?php get_footer() ?>