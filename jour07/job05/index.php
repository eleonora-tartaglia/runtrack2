<!-- Les Fonctions en PHP -->

<!-- Consigne : Créer une fonction qui manipule une chaine de caractere et compte le nbr d'occurence -->

<?php

// Définition de la fonction occurrences
function occurrences($str, $char) {
    $count = 0; // Variable pour compter les occurrences

    // Parcourir chaque caractère de la chaîne $str
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }

    // Retourner le nombre d'occurrences
    return $count;
}

// Exemple avec la lettre o dans bonjour :
echo occurrences("Bonjour", "o");  // Affiche 2

?>
