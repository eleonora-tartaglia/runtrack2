<?php

                    // Exercices sur les conditions avec la methode de remplacement et l'operateur modulo %

# Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre et en remplaçant certains nombres par un mot:
# Si le nombre est un multiple de 3, affichez “chenapan”.
# Si le nombre est un multiple de 5, affichez “freluquet”.
# Si le nombre est un multiple de 3 et de 5, affichez “bandit de grand chemin”.

for ($i = 1; $i <= 100; $i++ ) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "bandit de grand chemin<br>";

    } else if ($i % 5 == 0) {
        echo "chenapan<br>";

    } else if ($i % 3 == 0) {
        echo "freluquet<br>";
        
    } else {
        echo $i . "<br>";
    }
}

?>