<!-- Les superglobales : GET et POST -->

<!-- Consigne : faire un formulaire de connexion de type POST -->

<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === "John" && $password === "Rambo") {
    echo "C’est pas ma guerre";
  } else {
    echo "Votre pire cauchemar";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 5 - Faire un formulaire de connexion</title>
</head>
<body>

    <form method="POST" action="">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username"><br>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password"><br>

    <input type="submit" value="Connexion">
    </form>

</body>
</html>