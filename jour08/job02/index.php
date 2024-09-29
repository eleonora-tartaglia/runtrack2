<!-- Les Sessions et les Cookies en PHP -->

<!-- Consigne : Créer un cookie -->

<?php
// Vérification si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialisation du cookie
    setcookie('nbvisites', 0, time() + 3600);  // Réinitialise à 0 pour 1 heure
    $_COOKIE['nbvisites'] = 0; // Mettre à jour la valeur dans le script
} else {
    // Incrémentation du cookie à chaque visite
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
        setcookie('nbvisites', $nbvisites, time() + 3600);  // Mémoriser pour 1 heure
    } else {
        $nbvisites = 1;  // Initialisation à la première visite
        setcookie('nbvisites', $nbvisites, time() + 3600);  // Mémoriser pour 1 heure
    }
}

// Affichage du nombre de visites
if (isset($_COOKIE['nbvisites'])) {
    echo "Nombre de visites : " . $_COOKIE['nbvisites'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un cookie</title>
</head>
<body>
    
    <form method="POST" action="">
        <button type="submit" name="reset">Reset</button>
    </form>
    
</body>
</html>