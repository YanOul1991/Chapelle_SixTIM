<?php get_header() ?>

<main>
  <?php get_caller()?>
  <h1 class="info-titre">
    L'ExpoTIM Page Info
  </h1>

  <?php for ($i=0; $i < 3; $i++) : ?>
    <section class="info-section">
      <h1 class="info-section-titre">Sous-titre section</h1>
      <p class="info-section-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos eveniet repellat iusto consectetur? Assumenda, nulla sapiente minus ut quaerat quas?</p>
    </section>
  <?php endfor; ?>

</main>

<?php wp_footer(); get_footer(); ?>