<?php

               # Creation d'une variable nommée $str et affectez y le texte :
                     # “Dans l'espace, personne ne vous entend crier”.
        # Créez un algo qui parcourt, compte et affiche le nombre de caractères.

echo "Voici la phrase à méditer : Dans l'espace, personne ne vous entend crier.<br><br>";

echo "Si on calcule le nombre de caractères dans cette petite phrase, on obtiendra un nombre de :<br><br>";

$str = "Dans l'espace, personne ne vous entend crier.";

// Initialisation de mon compteur = index à 0
$compteur = 0;

for ($i = 0; $i < strlen($str); $i++) {
    // Incrémente le compteur pour chaque caractère
    $compteur++;
}

echo $compteur;

?>