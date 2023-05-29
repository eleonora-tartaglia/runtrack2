<!-- Créez une fonction nommée “bonjour()”.
Cette fonction prend en paramètre un booléen nommé “$jour”.
● Si le paramètre vaut true, la fonction doit afficher : “Bonjour”,
● Si le paramètre vaut false, la fonction doit afficher : “Bonsoir”. -->

<?php
    function bonjour($jour) {
        if ($jour == true) {
            echo "Bonjour";
        } else {
            echo "Bonsoir";
        }
    }

    // Appel de la fonction avec le paramètre à true
    bonjour(true); // Affichera "Bonjour"

    // Appel de la fonction avec le paramètre à false
    bonjour(false); // Affichera "Bonsoir"
?>
