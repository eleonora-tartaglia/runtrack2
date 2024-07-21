<?php
                    // Exercices sur les conditions en utilisant l'operateur || ou else if 

# Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233. Deux methodes de faire :

# Methode qui utilise l'operateur : ||

for ( $i = 0; $i <= 1337; $i ++) {
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233 ) {
    } else {
        echo $i . "<br>";
    }
}

# Methode qui utilise : else if

for ($i = 0; $i <= 1337; $i++) {
    if ($i == 26) {
    } else if ($i == 37) {
    } else if ($i == 88) {
    } else if ($i == 1111) {
    } else if ($i == 3233) {
    } else {
        echo $i . "<br><br>";
    }
}

?>