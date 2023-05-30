                                                <!-- Jour 7 - Session / Cookies -->

<!-- Créez un formulaire de connexion qui contient un input de type de text nommé “prenom” et un bouton submit nommé “connexion”.

    Lorsque l’on valide le formulaire, le prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, 
    n'affichez plus le formulaire de connexion. À la place, écrivez “Bonjour prenom !” et ajouter un bouton “Déconnexion” nommé “deco”. 
    Lorsque l’utilisateur se déconnecte, il faut à nouveau afficher le formulaire de connexion. -->

<?php
if(isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    $prenom = '';
} elseif(isset($_POST['prenom']) && $_POST['prenom'] != '') {
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + 3600);
} else {
    $prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : '';
}
?>

<!DOCTYPE html>
<html>

<body>
    <?php 
    if($prenom != '') {
        echo "<p>Bonjour bel inconnu au doux nom de " . $prenom . " !</p>";
        echo "<form method='post'>";
        echo "<input type='submit' name='deco' value='Déconnexion'>";
        echo "</form>";
    } else {
        echo "<form method='post'>";
        echo "<label for='prenom'>Prénom du mysterieux inconnu: </label>";
        echo "<input type='text' id='prenom' name='prenom'>";
        echo "<input type='submit' value='Connexion'>";
        echo "</form>";
    }
    ?>
</body>

</html>