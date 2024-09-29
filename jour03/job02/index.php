<?php

            # Creation d'une variable $str et affectez y le texte :
        # “Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
            # Parcourir cette chaîne en affichant seulement un caractère sur deux.

// Creation de ma variable str
echo "Voici la phrase à étudier : Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.<br><br>";
echo "Si on affiche un caractère sur deux, ça devient : <br><br>";

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Initialisation de mon compteur pour comptage de mes caratères
// $longueur = strlen($str);

$taille = strlen($str);

for ($i = 0; $i < $taille; $i++) {
    // Vérifie si l'index est pair
    if ($i % 2 == 0) {
        // Affiche le caractère à l'index pair
        echo $str[$i];
    }
}

echo "<br><br>C'est très etrange je ne vois pas trop l'interet de faire ça..";

?>