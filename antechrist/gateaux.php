<?php

                         // Découpage radial du gâteau

// Créer une fonction couper gâteau qui renvoie le nombre de parts
// Parametres : nombre de part en lien avec le nombre de coupe ( si coupe x fois = n part )
// Test avec un gâteau et le couper plusieurs fois

// Affichage d'un petit message :
echo "Pour l'anniversaire du Capitaine Crochet, nous avons également pris un gâteau. 
Pour que chacun ait une part, nous voulons le couper en rayons, comme un camembert
on est d'accord que chacun n'aura pas forcement une part égale, mais on s'en moque, c'est des pirates 😂<br><br>";

// Fonction de calcul
function couper_gateau_radial($nombre_coupes) {
    // Le nombre de parts est initialement 1 et chaque coupe ajoute une nouvelle part
    $nombre_parts = $nombre_coupes - 1;
    return $nombre_parts;
}

// Fonction d'affichage
function affichage_coupe_radial($nombre_coupes, $nombre_parts) {
    echo "Si je coupe mon gâteau $nombre_coupes fois, j'aurai $nombre_parts parts, ceci n'est point sorcier !<br>";
}

// Mode de coupe radial et affichage :
$coupe1 = 2;
$parts1 = couper_gateau_radial($coupe1);
affichage_coupe_radial($coupe1, $parts1);

$coupe2 = 3;
$parts2 = couper_gateau_radial($coupe2);
affichage_coupe_radial($coupe2, $parts2);

$coupe3 = 4;
$parts3 = couper_gateau_radial($coupe3);
affichage_coupe_radial($coupe3, $parts3);

?>

<hr><hr> <!-- Double separation pour plus de clarté -->


<?php

                         // Découpage diamétral du gâteau

// Créer une fonction couper gâteau qui renvoie le nombre de parts
// Parametres : nombre de part en lien avec le nombre de coupe ( si coupe x fois = n part )
// Test avec un gâteau et le couper plusieurs fois

echo "Pour l'anniversaire de la fée Clochette, nous avons pris un gâteau spécial. 
Nous voulons le découper en diagonale, passant par le centre,
afin que chaque fée puisse en avoir une part égale, car c'est ainsi qu'on coupe un gateau là d'où je viens 😂<br><br>";

//  Fonction de calcul
function couper_gateau_diametral ($coupe) {
    $part_gateau = 2 * $coupe;
        return $part_gateau;
}

// Fonction d'affichage
function affichage_coupe_diametral ($coupe, $part_gateau) {
    echo "Si on coupe le gateau $coupe fois dans sa diagonale, on obtiendra $part_gateau parts !<br><br>";
}

// Mode de coupe diametral et affichage :
$coupe4 = 1;
$part_gateau4 = couper_gateau_diametral ($coupe4);
affichage_coupe_diametral ($coupe4, $part_gateau4);

$coupe5 = 2;
$part_gateau5 = couper_gateau_diametral ($coupe5);
affichage_coupe_diametral ($coupe5, $part_gateau5);

$coupe6 = 3;
$part_gateau6 = couper_gateau_diametral ($coupe6);
affichage_coupe_diametral ($coupe6, $part_gateau6);

?>