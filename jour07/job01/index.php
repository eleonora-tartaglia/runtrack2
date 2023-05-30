                                                <!-- Jour 7 - Session / Cookies -->

<!-- Créez une variable de session nommée “nbvisites”. À chaque fois que la page est visitée, ajoutez 1. 

    Afficher le contenu de cette variable et ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php
session_start();

if(isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    if(isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites']++;
    } else {
        $_SESSION['nbvisites'] = 1;
    }
}
?>

<!DOCTYPE html>
<html>

<body>
    <p>Nombre de visites inattendues : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>

</html>