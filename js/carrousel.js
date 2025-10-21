(function(){

  // Variables
    const imagesCarrousel = document.querySelectorAll('.hero__carrousel');
    const boutonsCarrousel = document.querySelectorAll('.carrousel__radio');
    let i = 0;
  //

  // // // Les inputs manuel via boutons
    boutonsCarrousel.forEach((bouton)=>{
      bouton.addEventListener("click", ()=>{

      /**
       * 3 Étapes
       * 1: Cacher l'ancienne image
       * 2: Incrementer le pointer à la valeur du bouton cliqué
       * 3: Afficher la nouvelle image
       */
        imagesCarrousel[i].classList.add('carrouselInvisible'); // On cache l'ancienne image

        animationContenu();


        i = bouton.getAttribute('data-id_carrousel'); // On récupère l'index de la nouvelle image à afficher
        imagesCarrousel[i].classList.remove('carrouselInvisible'); // On affiche la nouvelle image (correspondante au bouton cliqué)
      })
    })
  // // // 

  // // // Automatique sur une boucle (avec intervalle de 5000ms)
    setInterval(()=>{
      /**
       * 4 Étapes
       * 1: Cacher l'ancienne image
       * 2: Incrémenter (aller à la nouvelle image)
       * 3: Checker le bouton radio correspondant
       * 4: Afficher la nouvelle image
       */
      imagesCarrousel[i].classList.add('carrouselInvisible'); // On cache l'ancienne image (utilisation de "transition" dans la classe CSS pour avoir une sorte d'animation)

      animationContenu();

      // Boucle à travers les images
      i++;
      if (i >= imagesCarrousel.length) {
        i = 0; // Remet à 0
      }

      // On boucle à travers les boutons
      boutonsCarrousel.forEach((bouton)=>{
        if (bouton.getAttribute('data-id_carrousel') == i) {
          bouton.checked = true; // On check le bouton correspondant
        } else {
          bouton.checked = false; // On décheck les autres boutons
        }
      })

      imagesCarrousel[i].classList.remove('carrouselInvisible'); // On affiche la nouvelle image (utilisation de "transition" dans la classe CSS pour avoir une sorte d'animation)
    }, 5000);
  // // //
})()

// Créé une fonction
function animationContenu(){
  console.log("Animation du contenu");

  const heroContenu = document.querySelector('.hero__contenu');
  const heroIcones = document.querySelector(".hero__icones-box");

  // On les rend invisible
  heroContenu.classList.toggle("invisible"); // Animation du contenu
  heroIcones.classList.toggle("invisible"); // Animation des icônes

  setTimeout(() => { // On les déplace alors qu'ils sont invisible
    heroContenu.classList.toggle("hero__contenu-variante"); // Animation du contenu
    heroIcones.classList.toggle("hero__icones-box-variante"); // Animation des icônes
  }, 500);


  // Après 0.5s, on re-toggle l'invisibilité
  setTimeout(() => {
    heroContenu.classList.toggle("invisible"); // Animation du contenu
    heroIcones.classList.toggle("invisible"); // Animation des icônes
  }, 1000);
}