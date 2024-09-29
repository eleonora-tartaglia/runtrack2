<?php

            # Créez une variable de type string nommée $str et affectez y le texte : 
                # “Les choses que l'on possède finissent par nous posséder."
            # Créez un algorithme qui parcourt et écrit cette chaine à l’envers.


$str = "Les choses que l'on possède finissent par nous posséder.";

echo "Voici la phrase que l'on veut étudier : Les choses que l'on possède finissent par nous posséder.";

// Calcul de la longueur de la chaîne
$longueur = 0;
while (true) {
    // Utiliser une condition pour sortir de la boucle quand on atteint la fin de la chaîne
    if (isset($str[$longueur])) {
        $longueur++;
    } else {
        break;
    }
}

// Parcours la chaîne à l'envers et stocke les caractères
$str_inverse = '';
for ($i = $longueur - 1; $i >= 0; $i--) {
    $str_inverse .= $str[$i];
}

// Affichage de la chaîne inversée
echo $str_inverse;

?>