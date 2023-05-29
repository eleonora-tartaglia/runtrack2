<!-- Faire un formulaire de connexion de type POST ayant deux champs <input> nommés username et password -->

<!DOCTYPE html>
<html>
<body>

<h2>Formulaire de connexion Top Secret</h2>

<form method="post" action="">
  Nom d'utilisateur:<br>
  <input type="text" name="username"><br>
  Code secret (à taper en cachant avec sa mimine):<br>
  <input type="password" name="password"><br><br>
  <input type="submit" value="Se connecter">
</form>

</body>
</html>

<!-- POST pour les demandes sensibles : Les données ne sont pas envoyées dans l'URL -->
<!-- Concernant la question de savoir pourquoi utiliser POST et non GET pour un formulaire de connexion, 
    la raison est que GET place toutes les informations de la requête dans l'URL, ce qui signifie qu'elles sont visibles dans 
    l'historique du navigateur, peuvent être enregistrées dans les journaux du serveur, et peuvent également être exposées si l'URL 
    est partagée. POST, en revanche, envoie les informations dans le corps de la requête, ce qui est plus sûr pour les informations 
    sensibles comme les mots de passe. -->

<?php
    if($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "John" && $password == "Rambo") {
            echo "J'ignore pourquoi mais ce n'est pas ma guerre";
        } else {
            echo "Je suis votre pire cauchemar mouahahahahahaha";
        }
    }
?>
