<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des arguments $_ POST et les valeurs associées. -->

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
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        foreach($_POST as $key => $value) {
            echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }
        echo "</table>";
    }

# La fonction htmlspecialchars est utilisée pour convertir les caractères spéciaux en entités HTML, ce qui est important pour éviter 
# les attaques d'injection de code

?>