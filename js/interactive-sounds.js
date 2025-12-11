
(function() {
  // Attend que window.themeUri soit défini (au cas où il y ait un délai)
  let attempts = 0;
  const maxAttempts = 50; // ~5 secondes avec 100ms d'intervalle
  
  const waitForThemeUri = setInterval(() => {
    const themeUri = window.themeUri;
    attempts++;
    
    if (themeUri || attempts >= maxAttempts) {
      clearInterval(waitForThemeUri);
      
      if (!themeUri) {
        console.error('Theme URI not found after waiting. Make sure window.themeUri is set in header.php');
        return;
      }
      
      initSounds(themeUri);
    }
  }, 100);
  
  function initSounds(themeUri) {
    const hoverSoundUrl = themeUri + '/sounds/one_beep.mp3';
    const clickSoundUrl = themeUri + '/sounds/selection.mp3';
    
    // Debug: affiche les URLs
    console.log('Theme URI:', themeUri);
    console.log('Hover Sound URL:', hoverSoundUrl);
    console.log('Click Sound URL:', clickSoundUrl);
    
    const hoverSound = new Audio(hoverSoundUrl);
    const clickSound = new Audio(clickSoundUrl);
    
    // Debug: vérifie si les sons se chargent
    hoverSound.addEventListener('error', (e) => {
      console.error('Erreur chargement hover sound:', e);
    });
    clickSound.addEventListener('error', (e) => {
      console.error('Erreur chargement click sound:', e);
    });

    // Définit les éléments interactifs
    const hoverableElements = 'a, button, input[type="button"], input[type="submit"], input[type="checkbox"], input[type="radio"], [role="button"], li.menu-item, div.project-gallery-list-item';
    const clickableElements = 'a, button, input[type="button"], input[type="submit"], input[type="checkbox"], input[type="radio"], [role="button"], li.menu-item, div.project-gallery-list-item';

    // Ajoute les écouteurs au hover
    document.addEventListener('mouseover', (e) => {
      if (e.target.matches(hoverableElements)) {
        playSound(hoverSound);
      }
    }, true);

    // Ajoute les écouteurs au click
    document.addEventListener('click', (e) => {
      if (e.target.matches(clickableElements)) {
        playSound(clickSound);
      }
    }, true);

    function playSound(audio) {
      // Clone l'audio pour pouvoir le rejouer au besoin
      const clone = audio.cloneNode();
      clone.volume = 0.5; // volume
      clone.play().catch(err => {
        console.warn('Impossible de jouer le son:', err);
      });
    }
  }

})();


