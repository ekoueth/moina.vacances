<!!DOCTYPE html>
<!html lang="fr">
<!head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Confirmation </title>
    <link href="style.css" rel="stylesheet" type="text/css">
<!/head>
<!body>

<!?php
// Récupération du nombre de lignes traitées après insertion
//$nb_lignes = $_GET["nb"]; // Récupère la valeur transmise dans l'URL
echo "<p class='resultat'>Confirmation<br />
      Les valeurs ont bien été enregistrées dans la table inscription.<br />
      $nb_lignes  ligne(s) insérée(s).</p>";
?!>

<!a href="index.html">Retour à l'accueil</a>

<!/body>
<!/html>

<?php
// Vérifier si les données ont été envoyées via GET ou POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer 
    $destination = $_POST['destination'] ?? '';

    // Vous pouvez ajouter ici une logique pour traiter les données, par exemple les enregistrer dans une base de données.

    // Afficher le message de confirmation
    echo "<h1>Confirmation de votre inscription</h1>";
    echo "<p>Félicitations ! Vous êtes inscrit(e) pour le séjour au <strong>" . htmlspecialchars($destination) . "</strong>.</p>";
    echo "<p>Merci pour votre inscription !</p>";
} else {
    echo "<h1>Erreur : Formulaire non soumis correctement.</h1>";
}
?>