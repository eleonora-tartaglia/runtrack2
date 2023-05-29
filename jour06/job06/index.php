<!-- Créez une fonction nommée “leetSpeak()”. Cette fonction prend en paramètre une chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie qu’elle doit la modifier de sorte que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”,
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php
    function leetSpeak($str) {
        $leet = array('A' => '4', 'B' => '8', 'E' => '3', 'G' => '6', 'L' => '1', 'S' => '5', 'T' => '7',
                      'a' => '4', 'b' => '8', 'e' => '3', 'g' => '6', 'l' => '1', 's' => '5', 't' => '7');
        $str = strtr($str, $leet);
        return $str;
    }

    // Test de la fonction
    echo leetSpeak("Hello World");  // Affichera "H3110 W0r1d"
?>