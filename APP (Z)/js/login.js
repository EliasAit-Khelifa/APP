function login() {
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  // Utilisation de fetch pour envoyer la requête
  fetch('Connexion_T.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `username=${encodeURIComponent(username)}&password=${encodeURIComponent(password)}`
  })
  .then(response => response.text())
  .then(data => {
    // Gérer la réponse ici
    alert(data);
  })
  .catch(error => {
    console.error('Erreur:', error);
  });
}
