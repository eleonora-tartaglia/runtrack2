<!--                                   POTION MAGIQUE
        Faire un tableau ingrédients pour potion magique idem pour quantité ingrédients
            Pour chaque ingrédient, afficher le nom de l’ingrédient et sa quantité
                    Faire de meme pour présenter un total de 3 potions -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Potion Magique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$potion1 = "Elixir de Vie";
$ingredients1 = ["Ailes de chauve-souris", "Corne de licorne", "Feuilles d'herbe pimentée"];
$quantités1 = [6, 1, 34];

$potion2 = "Philtre d'amour";
$ingredients2 = ["Racines de Mandragore", "Yeux de triton", "Langues de crapaud"];
$quantités2 = [13, 2, 4];

$potion3 = "Potion de chance";
$ingredients3 = ["Ecailles de dragon", "Gouttes de sang de phoenix", "Larmes de sirène"];
$quantités3 = [25, 2, 56];

function affichage($ingredients, $quantités) {
    echo "<table>";
    echo "<thead><tr><th>Ingrédients</th><th>Quantités</th></tr></thead><tbody>";
    for ($i = 0; $i < count($ingredients); $i++) {
        echo "<tr><td>" . $ingredients[$i] . "</td><td>" . $quantités[$i] . "</td></tr>";
    }
    echo "</tbody></table><br>";
}

echo "<h2>Les Potions de mes ancêtres<br><br></h2>";

echo "<h2>Pour concocter de l'" . $potion1 . " il vous faut :</h2>";
affichage($ingredients1, $quantités1);

echo "<h2>Pour concocter du " . $potion2 . " il vous faut :</h2>";
affichage($ingredients2, $quantités2);

echo "<h2>Pour concocter de la " . $potion3 . " il vous faut :</h2>";
affichage($ingredients3, $quantités3);

?>

</body>
</html>