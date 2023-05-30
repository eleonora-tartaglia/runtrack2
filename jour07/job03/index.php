                                                <!-- Jour 7 - Session / Cookies -->

<!-- Créez un formulaire qui contient un input de type text nommé “prenom” et un bouton submit. 

    Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de session. 
    Afficher l’ensemble des prénoms et ajoutez un bouton “reset” qui permet de réinitialiser la liste. -->

<?php
session_start();

if(isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
} elseif(isset($_POST['prenom']) && $_POST['prenom'] != '') {
    if(isset($_SESSION['prenoms'])) {
        array_push($_SESSION['prenoms'], $_POST['prenom']);
    } else {
        $_SESSION['prenoms'] = array($_POST['prenom']);
    }
}
?>

<!DOCTYPE html>
<html>

<body>
    <form method="post">
        <label for="prenom">Prénom de Divinité Grecque : </label>
        <input type="text" id="prenom" name="prenom">
        <input type="submit" value="Ajouter">
        <input type="submit" name="reset" value="Reset">
    </form>
    <?php 
    if(isset($_SESSION['prenoms'])) {
        echo "<h2>Liste des prénoms des divinités Grecques:</h2>";
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . $prenom . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>