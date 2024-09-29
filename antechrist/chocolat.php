<?php
            // Faire une liste de vos conso en chocolat. Les lister en grammage. 
                // Calculer la somme des 5 conso et calculer la moyenne. 
    // Afficher un message odieux si conso supperieur à 100g, sinon afficher un gentil msg

$excès_chocolat = [120, 80, 150, 90, 110];

$excès_chocolat = array(120, 80, 150, 90, 110);

$somme = 0;
$moyenne = 0;

$nombre_excès = count($excès_chocolat);

// Calcule de la somme des excès de chocolat
for ($i = 0; $i < $nombre_excès; $i++) {
    $somme += $excès_chocolat[$i];
}

// Calcule de la moyenne des excès de chocolat
$moyenne = $somme / $nombre_excès;

echo "Vérification de la consommation en chocolat de la Mama<br><br>";
echo "Sur 5 jours, elle a mangé tout ça : " . $somme . " g<br><br>";
echo "En moyenne, sa consommation en chocolat est de : " . $moyenne . " g<br><br>";

// Vérification si la moyenne est supérieure à 100g
if ($moyenne > 100) {
    echo "Attention, vous consommez beaucoup trop de chocolat Madame ! Vous filez du mauvais coton.";
} else {
    echo "Félicitations, votre consommation de chocolat est raisonnable !";
}

?>