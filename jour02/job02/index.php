<?php

# Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en mettant un retour à la ligne entre chaque nombre

for ($i = 0; $i <= 1337; $i++) {
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111 && $i != 3233) {
        echo "$i<br />";
    }
}

# boucle for: parcourt tous les nombres de 0 à 1337 
# if ($i != 26 && $i != 37 && $i != 88 && $i != 1111 && $i != 3233) { : Cette ligne vérifie si le nombre actuel n'est pas égal (!=) à 26, 37, 88, 1111 ou 3233. 
# Si c'est le cas (c'est-à-dire que le nombre actuel n'est aucun de ces nombres), le code à l'intérieur des accolades {} sera exécuté.
# echo "$i<br />"; :    Cette ligne affiche le nombre actuel suivi d'un retour à la ligne.
# opérateur && : signifie "ET" en PHP

?>