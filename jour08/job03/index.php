<!-- Les Sessions et les Cookies en PHP -->

<!-- Consigne : Créer un formulaire qui affiche des prenoms -->

<?php

// Démarrer la session
session_start();

// Si le bouton "reset" est cliqué, on réinitialise la liste des prénoms
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];  // Réinitialisation de la liste des prénoms
}

// Si un prénom est soumis via le formulaire
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    // Ajouter le prénom dans la session
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];  // Initialisation si la liste n'existe pas encore
    }
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);  // Ajouter le prénom
}

// Afficher les prénoms stockés
if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
    echo "<h3>Liste des prénoms :</h3>";
    echo "<ul>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>" . $prenom . "</li>";
    }
    echo "</ul>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de prenom a l'aide de session pour les stocker</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="prenom">Entrez votre prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <button type="submit">Ajouter</button>
    </form>

    <!-- Formulaire pour réinitialiser la liste -->
    <form method="POST" action="">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>
</html>