<!-- Développez un algorithme qui affiche le nombre d’arguments $_POST -->

<!DOCTYPE html>
<html>
<body>

<h2>Formulaire de test pour savoir quel est le secret de polichinelle de quelqu'un</h2>

<form method="post" action="">
  Prénom:<br>
  <input type="text" name="prenom"><br>
  Nom:<br>
  <input type="text" name="nom"><br>
  Secret:<br>
  <input type="text" name="secret"><br><br>
  <input type="submit" value="Envoyer">
</form>

</body>
</html>

<!-- POST pour les demandes sensibles : Les données ne sont pas envoyées dans l'URL -->

<?php
    if($_POST) {
        $nombreArguments = 0;
        foreach($_POST as $key => $value) {
            $nombreArguments++;
        }
        echo "Le nombre d’arguments POST envoyé est : " . $nombreArguments;
    }
?>