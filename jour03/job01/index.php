<?php

                                // Creation d'un tableau

        // Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
    // Parcourez ce tableau et affichez pour chaque nombre “X est paire” ou “X est impaire”

// Déclaration et initialisation du tableau avec array
$tableau = array(200, 204, 173, 98, 171, 404, 459);

echo "Voici un petit tableau vraiment très chou qui permet de catégoriser les nombres paires et impaires :<br><br>";

// Affichage en tableau
echo "<table border='4' style='width:50%; text-align:center; margin:auto'>";

// Génération de l'en-tête du tableau
echo "<thead>";                                 // thead = en tete 
echo "<tr>";                                    // tr = table row = ligne
echo "<th>Index</th>";                          // th = table header = en tete
echo "<th>Valeur</th>";
echo "<th>Parité</th>";
echo "</tr>";
echo "</thead>";

// Génération du corps du tableau
echo "<tbody>";

foreach ($tableau as $index => $valeur) {
    $parite = ($valeur % 2 == 0) ? 'Paire' : 'Impaire'; // Vérification de la parité

    // Affichage des valeurs dans le tableau
    echo "<tr>";
    echo "<td>$index</td>";
    echo "<td>$valeur</td>";
    echo "<td>$parite</td>";
    echo "</tr>";
}
echo "</tbody>";

// Fin du tableau
echo "</table><br><br>";

echo "Autre manière, affichage version phrase :<br><br>";

// Affichage en phrase :
foreach ($tableau as $valeur) {
    // Vérification si le nombre est pair ou impair
    if ($valeur % 2 == 0) {
        echo "Le $valeur est un nombre paire, le diviser en 2 renvoie un entier<br><br>";
    } else {
        echo "Le $valeur est un nombre impaire, le diviser en 2 revoie un decimal<br><br>";
    }
}

echo "<br><br>Test avec affichage du rapport standard sur une variable avec print_r<br><br>";
// Rapport standard sur une variable avec print_r
echo "<pre>";
print_r($tableau);
echo "</pre><br><br>";

echo "Test avec affichage du rapport detaillé sur une variable avec var_dump<br><br>";
// Rapport detaillé sur une variable avec var_dump
echo "<pre>";
var_dump($tableau);
echo "</pre>";

?>