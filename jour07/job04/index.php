<!-- Les Fonctions en PHP -->

<!-- Consigne : Créer une fonction qui manipule des nbr et fait des opérations de calcul -->

<?php

// Définition de la fonction calcule
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : Division par zéro impossible.";
            }
        case '%':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : Modulo par zéro impossible.";
            }
        default:
            return "Opération non reconnue.";
    }
}

// Test avec plusieurs opérations :
echo calcule(10, '+', 5);  // Affiche 15
echo "<br>";
echo calcule(10, '-', 5);  // Affiche 5
echo "<br>";
echo calcule(10, '*', 5);  // Affiche 50
echo "<br>";
echo calcule(10, '/', 2);  // Affiche 5
echo "<br>";
echo calcule(10, '%', 3);  // Affiche 1

?>