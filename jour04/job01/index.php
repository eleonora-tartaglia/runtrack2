<!-- Développez un algorithme qui affiche le nombre d’arguments $_GET -->


<!-- Creation d'un formaulaire en html -->

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

<!-- Les Méthodes GET et POST sont fondamentales pour toute interaction entre un navigateur et un serveur web : type formulaire 

        GET pour les demandes non sensibles : Les données sont envoyées dans l'URL
        POST pour les demandes sensibles : Les données ne sont pas envoyées dans l'URL 
        En PHP, on peut accéder à ces données à l'aide des superglobales $_GET et $_POST -->

<?php

    if($_GET) {                         # vérifie si le tableau $_GET contient des données
        $nombreArguments = 0;           # Initialisation d'une new variable qu'on met à O : utile pour utilisée pour compter le nbr d'arg dans $_GET
        foreach($_GET as $key => $value) {
            $nombreArguments++;         # Augmentons la valeur de $nombreArguments de 1
        }
        echo "Le nombre d'arguments GET envoyé est : " . $nombreArguments;
    }

# $_GET est une variable superglobale en PHP qui contient toutes les données envoyées via une requête GET. 
# Si la page a été appelée avec des données GET (par exemple, avec l'URL votrepage.php?nom=John), alors $_GET ne sera pas vide 
# et la condition sera vraie

# La boucle foreach : parcourt chaque élément dans le tableau $_GET. Pour chaque élément, la clé et la valeur sont assignées aux 
# variables $key et $value, respectivement.

?>