<?php
                    // Exercices sur les conditions pour afficher un vulgaire triangle


// Faire un algorithme qui affiche un triangle de 5 de hauteur. 
// Cette dimension devra être stockée dans une variable $hauteur, modifiable facilement ex : $hauteur = 5

$hauteur = 30;

for ($i = 1; $i <= $hauteur; $i++) {                # Boucle principale pour chaque ligne

    // Impression des espaces                       # Impression d'espaces avant d'imprimer les étoiles
                                                    # Qui diminue à mesure que nous descendons dans les lignes.
    for ($j = $hauteur - $i; $j > 0; $j--) {        # D'ou le $j-- .. ecoli t'as tout compris !!!
        echo "&nbsp;";                              # Espace insécable en html : merci Clem :) 
    }
    // Impression des étoiles
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    // Retour à la ligne
    echo "<br>";
}

//  Idem.. Disons que c'est de l'art abstrait !!

?>