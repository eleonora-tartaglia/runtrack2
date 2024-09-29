<?php

                // Créer une liste des villes que vous voulez visiter. 
                    // Classer les villes par ordre alphabétique. 
                // Afficher toutes les villes dans le nouvel ordre. 

echo "<div style = 'background-color: black; color: aquamarine; padding: 20px;'>";

echo "<h1 style = 'text-align: center; color: aquamarine; font-weight: bold; font-family: Cochin, sans-serif;'; >Rêves d'Escapades : Voici les villes que mon petit cœur aspire à découvrir quand ma bourse fleurira</h1>";

$villes = ["Le Caire", "Lafayette", "Athènes", "Nazca", "Angkor"];
$liste_vide = [];

echo "<h3>Utilisation de foreach :</h3>";
foreach ($villes as $ville) {
    echo $ville . "<br>";
}

echo "<h3>Utilisation de for :</h3>";
$nombre_de_villes = count($villes);
for ($i = 0; $i < $nombre_de_villes; $i++) {
    echo $villes[$i] . "<br>";
}


echo "<h3>Utilisation de implode :</h3>";
echo implode(", ", $villes);

echo "<h3>Utilisation de print_r pour débogage :</h3>";
echo "<pre>";
print_r($villes);
echo "</pre>";

echo "<h3>Utilisation de var_dump pour débogage :</h3>";
echo "<pre>";
var_dump($villes);
echo "</pre>";

// Fonction pour comparer deux chaînes de caractères
function comparaison($a, $b) {
    // Convertie les deux chaînes en minuscules pour une comparaison insensible à la casse
    $a = strtolower($a);
    $b = strtolower($b);

    // Trouve la longueur des chaînes pour comparer les caractères un par un.
    $len_a = strlen($a);
    $len_b = strlen($b);
    $len = min($len_a, $len_b); // Trouve la longueur de la chaîne la plus courte

    for ($i = 0; $i < $len; $i++) {
        if ($a[$i] != $b[$i]) {
            // Comparer les caractères et retourner la différence
            return ($a[$i] < $b[$i]) ? -1 : 1;
        }
    }

    // Si toutes les lettres sont égales jusqu'ici, comparer la longueur des chaînes
    return $len_a - $len_b;
}

// Fonction pour trier le tableau de villes
function triage(&$villes) {
    $n = count($villes);

    for ($i = 0; $i < $n - 1; $i++) {
        $min_index = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            if (comparaison($villes[$j], $villes[$min_index]) < 0) {
                $min_index = $j;
            }
        }

        // Échanger les éléments
        $temp = $villes[$i];
        $villes[$i] = $villes[$min_index];
        $villes[$min_index] = $temp;
    }
}

echo "<h3>Avant le tri :</h3>";
foreach ($villes as $ville) {
    echo $ville . "<br>";
}

// Trier les villes par ordre alphabétique
triage($villes);

echo "<h3>Après le tri :</h3>";
foreach ($villes as $ville) {
    echo $ville . "<br>";
}

echo "</div>";

?>