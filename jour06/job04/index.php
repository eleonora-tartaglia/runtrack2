<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier est un nombre,
● le deuxième est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième est un nombre.
La fonction doit retourner le résultat de l’opération. -->

<?php
    function calcule($nombre1, $operation, $nombre2) {
        switch ($operation) {
            case '+':
                return $nombre1 + $nombre2;
            case '-':
                return $nombre1 - $nombre2;
            case '*':
                return $nombre1 * $nombre2;
            case '/':
                if ($nombre2 != 0) {
                    return $nombre1 / $nombre2;
                } else {
                    return "Erreur : Division par zéro";
                }
            case '%':
                if ($nombre2 != 0) {
                    return $nombre1 % $nombre2;
                } else {
                    return "Erreur : Division par zéro";
                }
            default:
                return "Erreur : Opération non reconnue";
        }
    }

    // Test de la fonction
    echo calcule(10, '+', 5);  // Affichera 15
    echo calcule(10, '-', 5);  // Affichera 5
    echo calcule(10, '*', 5);  // Affichera 50
    echo calcule(10, '/', 5);  // Affichera 2
    echo calcule(10, '%', 5);  // Affichera 0
    echo calcule(10, '/', 0);  // Affichera "Erreur : Division par zéro"
    echo calcule(10, '?', 5);  // Affichera "Erreur : Opération non reconnue"
?>