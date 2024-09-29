<!-- Les superglobales : GET et POST -->

<!-- Consigne : aﬃcher ds un tableau HTML l’ensemble des
arguments $_GET et les valeurs associées. -->

<?php

if (isset($_GET) && !empty($_GET)) {
  echo "<table border='1'>";
  echo "<tr><th>Argument</th><th>Valeur</th></tr>";

  foreach ($_GET as $argument => $valeur) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($argument) . "</td>";
    echo "<td>" . htmlspecialchars($valeur) . "</td>";
    echo "</tr>";
  }

  echo "</table>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 2 - Afficher un tableau avec ses valeurs</title>
</head>
<body>

    <form method="GET" action="">
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