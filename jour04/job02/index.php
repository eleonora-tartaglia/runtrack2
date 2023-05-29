<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des arguments $_GET et les valeurs associées -->

<!DOCTYPE html>
<html>
<body>

<h2>Formulaire de test pour savoir quel est le secret de polichinelle de quelqu'un</h2>

<form method="get" action="">
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

<?php

    if($_GET) {                     # vérifie si le tableau $_GET contient des données
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";       # ajoute une ligne à la table avec deux en-têtes de colonne : 
                                                                # "Argument" et "Valeur". <tr> commence une nouvelle ligne, 
                                                                # et <th> est utilisé pour les en-têtes de colonne.
        foreach($_GET as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        echo "</table>";
    }
?>
