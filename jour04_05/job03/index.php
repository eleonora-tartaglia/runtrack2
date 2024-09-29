<!-- Les superglobales : GET et POST -->

<!-- Consigne : aﬃcher le nombre d’arguments $_POST -->

<?php

if (isset($_POST)) {
  $nombre_arguments = count($_POST);
  echo "Le nombre d'arguments POST envoyé est : " . $nombre_arguments;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 3 - Afficher le nbr d'arguments en POST</title>
</head>
<body>

    <form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom"><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"><br>

    <label for="age">Âge :</label>
    <input type="text" name="age" id="age"><br>

    <input type="submit" value="Envoyer">
    </form>

</body>
</html>


<!-- NB : URL = http://localhost:8888/Promo2/phase1/jour04/job03/ -->