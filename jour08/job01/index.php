<!-- Les Sessions et les Cookies en PHP -->

<!-- Consigne : Créer une variable de session -->

<?php

// Démarrage de la session
session_start();

// Vérification si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialisation de la variable de session
    $_SESSION['nbvisites'] = 0;
} else {
    // Incrémentation du compteur à chaque visite
    if (isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites']++;
    } else {
        $_SESSION['nbvisites'] = 1;  // Initialisation de la variable de session
    }
}

// Affichage du nombre de visites
echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable de session qui compte le nbr de visite</title>
</head>
<body>
    
    <form method="POST" action="">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>
</html>