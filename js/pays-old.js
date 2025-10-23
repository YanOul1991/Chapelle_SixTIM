const paysSelectionne = bouton.getAttribute('data-pays');
const apiUrl = `${domaine}wp-json/wp/v2/posts?per_page=100`; // récupère tous les articles (limite par défaut = 10)

fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    const articlesFiltrés = data.filter(article => article.pays === paysSelectionne);

    destinationList.innerHTML = ""; // Vide l'existant

    articlesFiltrés.forEach(article => {
      // ... (ta logique d'affichage ici)
    });
  });