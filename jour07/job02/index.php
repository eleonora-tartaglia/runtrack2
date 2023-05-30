                                                <!-- Jour 7 - Session / Cookies -->

<!-- Créez un cookie nommé “nbvisites”. À chaque fois que la page est visitée, ajoutez 1. 

    Afficher le contenu du cookie et ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php
if(isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600);
    $visits = 0;
} else {
    if(isset($_COOKIE['nbvisites'])) {
        $visits = $_COOKIE['nbvisites'] + 1;
    } else {
        $visits = 1;
    }
    setcookie('nbvisites', $visits, time() + 3600);
}
?>

<!DOCTYPE html>
<html>

<body>
    <p>Nombre de visites inopinées: <?php echo $visits; ?></p>
    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>

</html>