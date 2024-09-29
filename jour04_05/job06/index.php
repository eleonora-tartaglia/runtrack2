<!-- Les superglobales : GET et POST -->

<!-- Consigne : Faire un formulaire de type GET et afficher les nbr pair ou impaire -->

<?php

if (isset($_GET['nombre'])) {
  $nombre = $_GET['nombre'];

  if (is_numeric($nombre)) {
    if ($nombre % 2 == 0) {
        // Si le reste de la division par 2 est égal à 0, alors :
      echo "Nombre pair";
    } else {
      echo "Nombre impair";
    }
  } else {
    echo "Veuillez entrer un nombre valide.";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 6 - Faire un formulaire de tyep GET</title>
</head>
<body>

    <form method="GET" action="">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre"><br>
    <input type="submit" value="Vérifier">
    </form>

</body>
</html>