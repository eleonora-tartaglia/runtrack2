<?php
                    // Exercices sur les conditions en utilisant la notion d'intervalle et de à la place de..

# Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre (<br />).
# Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25 et 50 : souligner.
# Afficher “du texte” à la place de 42.

# Notion d'intervalle et d'exclusion

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "C'est moi, je suis l'intrus.. normalement je m'appelle 42<br>";
    } else if ($i >= 0 && $i <= 20){
        echo "<i>$i</i><br>";
    } else if ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br>";
    } else {
        echo $i . "<br>";
    }
}

?>