<!-- Les Fonctions en PHP -->

<!-- Consigne : Créer une fonction qui transforme du texte en leet speak -->

<?php

// Définition de la fonction leetSpeak
function leetSpeak($str) {
    // Remplacement des lettres par leurs équivalents leet
    $str = str_ireplace(['A', 'B', 'E', 'G', 'L', 'S', 'T'], ['4', '8', '3', '6', '1', '5', '7'], $str);

    // Retourner la chaîne modifiée
    return $str;
}

// Exemple avec la celebre phrase de Stephen Hawking : "L'intelligence est la capacité de s'adapter au changement"
echo leetSpeak("L'intelligence est la capacité de s'adapter au changement");
// Affiche : 1'in7311i63nc3 357 14 c4p4ci7é d3 5'4d4p73r 4u ch4n63m3n7
?>