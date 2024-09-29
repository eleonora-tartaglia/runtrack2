<?php

                                // Exercice sur les tableaux

// Déclaration des variables de différents types primitifs
$nom_scientifique = "Acropora"; // Chaîne de caractères (string)
$age_corail = 5; // Entier (integer)
$est_vivant = true; // Booléen (boolean)
$profondeur_ocean = 25.75; // Nombre à virgule flottante (float)

// Génération du tableau HTML
echo "<table border='4' style='width:50%; text-align:center; margin:auto'>";

// Généreration de l'en-tête du tableau
echo "<thead>";
echo "<tr>"; // table row = ligne
echo "<th>Type de variable</th>"; // table header = en tete
echo "<th>Recencement</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";

// Généreration du corps du tableau

echo "<tbody>";
echo "<tr>";
echo "<td>Chaîne de caractères</td>"; // Type de la variable 
echo "<td>Nom scientifique du corail</td>"; // Nom de la variable
echo "<td>$nom_scientifique</td>"; // Valeur de la variable
echo "</tr>";

echo "<tr>";
echo "<td>Entier</td>"; // table data = données
echo "<td>Age du corail</td>";
echo "<td>$age_corail</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Booléen</td>";
echo "<td>Etat : vivant ou non</td>";
echo "<td>" . ($est_vivant ? 'true' : 'false') . "</td>"; // Affichage du booléen
echo "</tr>";

echo "<tr>";
echo "<td>Nombre à virgule flottante</td>";
echo "<td>Profondeur d'océan en m</td>";
echo "<td>$profondeur_ocean</td>";
echo "</tr>";
echo "</tbody>";

// Fin du tableau
echo "</table>";

?>