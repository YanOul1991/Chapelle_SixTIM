/**
 * Background Music Manager - Mute Button
 * Contrôle le mute/unmute de l'élément audio #bmmw-audio
 * Bouton ON = musique jouée, Bouton OFF = musique muette
 */

(function() {
  const muteBtn = document.getElementById('music-mute-btn');
  const audioDiv = document.getElementById('bmmw-audio');
  
  if (!muteBtn) return;

  // Récupère l'état du localStorage
  const storageKey = 'bmmw_music_muted';
  const isMuted = localStorage.getItem(storageKey) === 'true';

  // Initialise l'état du bouton
  if (isMuted) {
    muteBtn.classList.add('muted');
    applyMuteState(true);
  }

  /**
   * Applique l'état mute/unmute à l'audio
   * @param {boolean} muted - true = muted, false = unmuted
   */
  function applyMuteState(muted) {
    // Trouve tous les éléments audio dans #bmmw-audio
    if (audioDiv) {
      const audioElements = audioDiv.querySelectorAll('audio');
      audioElements.forEach(audio => {
        audio.muted = muted;
      });
    }

    // Fallback : cherche l'audio directement dans le DOM
    const mainAudio = document.querySelector('audio[id*="bmmw"], audio[class*="bmmw"]');
    if (mainAudio) {
      mainAudio.muted = muted;
    }
  }

  /**
   * Toggle mute/unmute
   */
  function toggleMute() {
    const currentMuted = localStorage.getItem(storageKey) === 'true';
    const newMutedState = !currentMuted;

    // Met à jour le localStorage
    localStorage.setItem(storageKey, newMutedState);

    // Applique le nouvel état
    applyMuteState(newMutedState);

    // Met à jour la classe du bouton
    if (newMutedState) {
      muteBtn.classList.add('muted');
    } else {
      muteBtn.classList.remove('muted');
    }
  }

  // Ajoute l'écouteur d'événement au bouton
  muteBtn.addEventListener('click', toggleMute);

  // Rend la fonction accessible globalement
  window.toggleBGMMusic = toggleMute;

})();
