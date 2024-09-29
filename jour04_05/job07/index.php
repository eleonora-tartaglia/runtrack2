<!-- Les superglobales : GET et POST -->

<!-- Consigne : Faire un formulaire qui permet d'afficher des maisons -->

<?php

if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
  $largeur = (int)$_GET['largeur'];
  $hauteur = (int)$_GET['hauteur'];

  if ($largeur > 0 && $hauteur > 0) {

    // Toit de la maison generé via une boucle qui ajoute des *
    for ($i = 1; $i <= $largeur; $i += 2) {
      echo str_repeat('&nbsp;', ($largeur - $i) / 2);
      echo str_repeat('*', $i);
      echo "<br>";
    }

    // Mur de la maison generé par les barres, l'interieur rempli d'espace
    for ($j = 0; $j < $hauteur; $j++) {
      echo "|" . str_repeat('&nbsp;', $largeur - 2) . "|<br>";
    }

    // Base de la maison via les -
    echo str_repeat('-', $largeur);
  } else {
    echo "Veuillez entrer des valeurs valides pour la largeur et la hauteur.";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 7 - Faire un formulaire qui affiche maison selon sa forme</title>
</head>
<body>

    <form method="GET" action="">
    <label for="largeur">Largeur :</label>
    <input type="text" name="largeur" id="largeur"><br>

    <label for="hauteur">Hauteur :</label>
    <input type="text" name="hauteur" id="hauteur"><br>

    <input type="submit" value="Construire la maison">
    </form>

</body>
</html>