<?php

# Créez une variable de type string nommée $str et affectez y le texte :
# “Dans l'espace, personne ne vous entend crier”.

$str = "Dans l'espace, personne ne vous entend crier";

# Création d'une variable $compteur et l'initialise à 0. Cette variable sera utilisée pour compter le nombre de caractères dans la chaîne $str
$compteur = 0;

# Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents dans cette chaîne.

for ($i = 0; isset($str[$i]); $i++) {
    $compteur++;
}

# La boucle for est utilisée pour parcourir la chaîne $str en utilisant isset() pour vérifier l'existence de l'indice $i dans la chaîne.
# À chaque itération de la boucle, le compteur $compteur est incrémenté de 1, ce qui permet de compter le nombre de caractères dans la chaîne.

echo "Le nombre de caractères dans cette phrase un tantinet stupide est : " . $compteur;

?>