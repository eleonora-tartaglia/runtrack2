<!-- Les Sessions et les Cookies en PHP -->

<!-- Consigne : Créer un formulaire de connexion qui affiche le prenom de la personne ainsi qu'un bouton de deco -->


<?php

// Vérifier si l'utilisateur a cliqué sur le bouton de déconnexion
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le réinitialisant avec une date d'expiration dans le passé
    setcookie('prenom', '', time() - 3600);
    // Supprimer également la variable dans le script courant
    unset($_COOKIE['prenom']);
}

// Vérifier si le prénom a été soumis via le formulaire de connexion
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    // Ajouter le prénom dans un cookie pour 1 heure (3600 secondes)
    setcookie('prenom', htmlspecialchars($_POST['prenom']), time() + 3600);
    // Actualiser la page pour que le cookie soit pris en compte immédiatement
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Si le cookie "prenom" est défini, afficher le message de bienvenue et le bouton de déconnexion
if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])) {
    echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !";
    ?>

    <!-- Formulaire de déconnexion -->
    <form method="POST" action="">
        <button type="submit" name="deco">Déconnexion</button>
    </form>

    <?php
} else {
    // Si le cookie n'est pas défini, afficher le formulaire de connexion
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
    </head>
    <body>
    
        <!-- Formulaire de connexion -->
        <form method="POST" action="">
            <label for="prenom">Entrez votre prénom :</label>
            <input type="text" name="prenom" id="prenom" required><br><br>

            <button type="submit" name="connexion">Connexion</button>
        </form>

    </body>
    </html>

    <?php
}
?>