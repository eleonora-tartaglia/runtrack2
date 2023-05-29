<!-- Créez une fonction nommée “occurrences()”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans $str sera : 2 -->

<?php
    function occurrences($str, $char) {
        $count = 0;
        $length = 0;
        while (isset($str[$length])) {
            $length++;
        }

        for ($i = 0; $i < $length; $i++) {
            if ($str[$i] == $char) {
                $count++;
            }
        }
        return $count;
    }

    // Test de la fonction
    $str = "Bonjour";
    $char = "o";
    echo occurrences($str, $char);  // Affichera 2
?>