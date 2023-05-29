<?php

# Créez une variable de type string nommée $str et affectez y le texte :
# “I'm sorry Dave I'm afraid I can't do that”.
# Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.

$str = "I'm sorry Dave I'm afraid I can't do that";

# Définition des voyelles :
$voyelles = array('a', 'e', 'i', 'o', 'u');

# Parcours de la chaîne en affichant uniquement les voyelles
for ($i = 0; isset($str[$i]); $i++) {
    $caractere = $str[$i];

    if (isVoyelle($caractere)) {
        echo $caractere;
    }
}

# La boucle for parcourt la chaîne $str en utilisant isset() pour vérifier l'existence de l'indice $i dans la chaîne.
# À chaque itération de la boucle, le caractère correspondant à l'indice $i de la chaîne $str est stocké dans la variable $caractere. 
# Ensuite, la fonction isVoyelle() est appelée pour vérifier si le caractère est une voyelle. Si c'est le cas, le caractère est affiché à l'aide de echo $caractere.

#  Fonction pour vérifier si un caractère est une voyelle
function isVoyelle($caractere) {
    $voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
    return in_array($caractere, $voyelles);
}

# La fonction isVoyelle() est utilisée pour vérifier si un caractère est une voyelle. Elle utilise un tableau $voyelles qui contient toutes les voyelles 
# en minuscules et en majuscules. La fonction in_array() est utilisée pour vérifier si le caractère se trouve dans le tableau des voyelles.

?>