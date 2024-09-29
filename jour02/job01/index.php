<?php

                            // Exercices sur les conditions

// Initialise une boucle for qui commence à 0 et continue jusqu'à 1337 inclus et met en gras et souligné 42

for ($i = 0; $i <= 1337; $i ++) {
    if ($i == 42) {
        echo "<b><u>$i</u></b><br>";
    } else {
        echo $i . "<br><br>";
    }
}

?>