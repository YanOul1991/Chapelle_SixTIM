<?php get_header() ?>

<main>
  <!-- "L'ExpoTIM Page Info" -->
  <?php get_caller()?>  

  <section id="infoPage">
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
          <img src="chemin/vers/image1.jpg" alt="Projet 1 Image">
        </div>
        <div id="Projet1TexteContenant" class="ProjetTexteContenant">
          <p class="ProjetTexte">Projet 1 Description</p>
        </div>
      </div>
      <div id="Projet2" class="ProjetBox">
        <div id="Projet2Image" class="ProjetImageContenant">
          <img src="chemin/vers/image2.jpg" alt="Projet 2 Image">
        </div>
        <div id="Projet2TexteContenant" class="ProjetTexteContenant">
          <p class="ProjetTexte">Projet 2 Description</p>
        </div>
      </div>
      <div id="Projet3" class="ProjetBox">
        <div id="Projet3Image" class="ProjetImageContenant">
          <img src="chemin/vers/image3.jpg" alt="Projet 3 Image">
        </div>
        <div id="Projet3TexteContenant" class="ProjetTexteContenant">
          <p class="ProjetTexte">Projet 3 Description</p>
        </div>
      </div>
    </section>

  <!-- Partie Lignes d'accroches pour gallerie images -->

  <!-- Partie gallerie images -->
  </section>

  <!-- FOOTER -->

  <?php wp_footer(); get_footer(); ?>


</main>
