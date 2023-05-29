<!-- Créez une fonction nommée “getHello()”.
Cette fonction doit retourner “Hello LaPlateforme!”.
Appelez cette fonction dans votre page en récupérant sa valeur de retour et affichez-la. -->

<?php
    function getHello() {
        return "Hello LaPlateforme!";
    }

    // Appel de la fonction et stockage de sa valeur de retour
    $message = getHello();

    // Affichage de la valeur retournée
    echo $message;
?>