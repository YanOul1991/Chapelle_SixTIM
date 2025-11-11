<?php get_header() ?>

<main>
  <!-- "L'ExpoTIM Page Info" -->
  <?php get_caller()?>  

  <section id="PageInfo">
  <!-- Partie paragraphe d'explications -->
    <section id="ExplicationsContenant">
      <p id="ExplicationsTexte">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </section>

  <!-- Partie les trois contenants de projets -->
    <section id="ProjetsContenant">
      <div id="Projet1" class="ProjetBox">
        <div id="Projet1Image" class="ProjetImageContenant">
          <img src="https://placehold.co/100x100" alt="Projet 1 Image">
        </div>
        <div id="Projet1TexteContenant" class="ProjetTexteContenant">
          <h3 class="ProjetTitre"> Projet 1 TITRE </h3>
          <p class="ProjetTexte">Projet 1 Description Ceci est la description d'un projet pour voir la taille du paragraphe et la quantité d'espace qu'il faudrait lui donner woaw je capote solide d'écrire ça à la main</p>
        </div>
      </div>
      <div id="Projet2" class="ProjetBox">
        <div id="Projet2Image" class="ProjetImageContenant">
          <img src="https://placehold.co/100x100" alt="Projet 2 Image">
        </div>
        <div id="Projet2TexteContenant" class="ProjetTexteContenant">
          <h3 class="ProjetTitre"> Projet 2 TITRE </h3>
          <p class="ProjetTexte">Projet 2 Description Ceci est la description d'un projet pour voir la taille du paragraphe et la quantité d'espace qu'il faudrait lui donner woaw je capote solide d'écrire ça à la main</p>
        </div>
      </div>
      <div id="Projet3" class="ProjetBox">
        <div id="Projet3Image" class="ProjetImageContenant">
          <img src="https://placehold.co/100x100" alt="Projet 3 Image">
        </div>
        <div id="Projet3TexteContenant" class="ProjetTexteContenant">
          <h3 class="ProjetTitre"> Projet 3 TITRE </h3>
          <p class="ProjetTexte">Projet 3 Description Ceci est la description d'un projet pour voir la taille du paragraphe et la quantité d'espace qu'il faudrait lui donner woaw je capote solide d'écrire ça à la main</p>
        </div>
      </div>
    </section>

  <!-- Partie Lignes d'accroches pour gallerie images -->
    <section id="LignesAccrochesContenant">
      <p class="LigneAccroche">Découvrez nos projets innovants</p>
      <p class="LigneAccroche">Inspirez-vous avec nos réalisations</p>
    </section>

  <!-- Partie gallerie images -->
   <!-- Grid d'images de tailles différentes -->
    <section id="GalerieImagesContenant">
      <div class="ImageGrid">
        <div class="ImageItem Row-1-1">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 1">
        </div>
        <div class="ImageItem Row-1-2">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 0">
        </div>
        <div class="ImageItem Row-2-1-1">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 2">
        </div>
        <div class="ImageItem Row-2-1-2">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 3">
        </div>
        <div class="ImageItem Row-2-2">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 4">
        </div>
        <div class="ImageItem Row-2-3-1">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 5">
        </div>
        <div class="ImageItem Row-2-3-2">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 6">
        </div>
        <div class="ImageItem Row-3-1">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 7">
        </div>
        <div class="ImageItem Row-3-2">
          <img src="https://picsum.photos/200/300" alt="Image gallerie 8">
        </div>
      </div>
  </section>

  <!-- FOOTER -->

  <?php wp_footer(); get_footer(); ?>


</main>
