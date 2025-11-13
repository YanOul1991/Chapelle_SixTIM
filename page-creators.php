<?php get_header() ?>

<main class="createurs">
  <?php get_caller()?>
  <h1 class="titre-page">Createurs</h1>
  <ul class="liste-createurs">
    <?php for($i = 0; $i < 4; $i++) : ?>
    <li class="liste-createurs-item">
      <div class="createur-texte">
        <div class="createur-nom">Createur #<?php echo ($i + 1); ?></div>
        <div class="createur-description">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam harum eveniet voluptates repellendus perferendis facere asperiores tenetur iusto facilis in.
        </div>
      </div>
      <div class="createur-image">
        <img src="https://placehold.co/500x500/FF9900/FFFFFF" alt="Image Createur" style="width: 100%;">
      </div>
    </li>
    <?php endfor; ?>
  </ul>
</main>

<?php wp_footer(); get_footer(); ?>