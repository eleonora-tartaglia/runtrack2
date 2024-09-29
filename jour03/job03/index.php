<?php

            # Creation d'une variable de type string nommée $str et affectez y le texte : 
                        # “I'm sorry Dave I'm afraid I can't do that”.
            # Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.


echo "Voici la phrase à étudier : I'm sorry Dave I'm afraid I can't do that.<br><br>";
echo "Si on affiche uniquement les voyelles, en oubliant pas le piège majuscule/minuscule, ça devient : <br><br>";

// Creation de ma variable str
$str = "I'm sorry Dave I'm afraid I can't do that.";

// Creation d'un tableau contenant le listing des voyelles (maj + min)
$voyelle = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];

// Utilisation de strlen pour calcul de la longueur de ma phrase
$longueur = strlen($str);

// Vérifie si le caractère actuel : $str[$i] est dans le tableau $voyelles
for ($i = 0; $i < $longueur; $i++) {
    // Vérifie si le caractère est une voyelle
    if (in_array($str[$i], $voyelle)) {
        // Affiche la voyelle
        echo $str[$i];
    }
}