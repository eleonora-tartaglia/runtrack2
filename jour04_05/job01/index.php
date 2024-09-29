<!--     Les superglobales : GET et POST
 
$_GET : Une superglobale qui permet de récupérer les valeurs envoyées via une URL.
$_POST : utilisée pour récupérer les données envoyées via un formulaire de type POST. 
        Les données sont transmises de manière invisible, hors de l’URL. -->

<!-- Consigne : aﬃcher le nombre d’arguments $_GET -->

<?php

if (isset($_GET)) {
  $nombre_arguments = count($_GET);
  echo "Le nombre d'arguments GET envoyé est : " . $nombre_arguments;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 1 - Afficher le nbr d'arguments en GET</title>
</head>
<body>

    <form method="GET" action="">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name"><br>

    <label for="age">Âge :</label>
    <input type="text" name="age" id="age"><br>

    <input type="submit" value="Envoyer">
    </form>

</body>
</html>

<!-- NB : URL = http://localhost:8888/Promo2/phase1/jour04/job01/?name=anne&age=dupont -->