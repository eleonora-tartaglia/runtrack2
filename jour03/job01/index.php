<?php

# Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.

$tableau = array(200, 204, 173, 98, 171, 404, 459);

foreach ($tableau as $nombre) {
        # vérifie si la valeur actuelle $nombre est paire ou impaire.
    if ($nombre % 2 == 0) {                             
        echo $nombre . " est un nombre paire, ça va on aime bien ça<br />";   
        # condition $nombre % 2 == 0 vérifie si la valeur de $nombre est divisible par 2 sans laisser de reste, ce qui indique qu'elle est paire            
    } else {
        echo $nombre . " est un nombre impaire, ça ne va pas du tout, on est comme Poirot, on n'aime pas ça du tout<br />";
        # sinon la condition est fausse alors c'est impaire
    }
        # Ainsi, le code vérifie la parité de chaque nombre du tableau et affiche le résultat correspondant.
}

# $tableau = array(200, 204, 173, 98, 171, 404, 459) : ligne crée un tableau contenant les nombres 200, 204, 173, 98, 171, 404 et 459
# foreach ($tableau as $nombre) : boucle foreach qui parcourt le tableau. 
# À chaque itération de la boucle, la valeur courante du tableau est stockée dans la variable $nombre.

?>