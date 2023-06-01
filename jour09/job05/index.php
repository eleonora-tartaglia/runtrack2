<!-- En utilisant PHP, connectez-vous à la base de données “jour08”. À l’aide d’une requête SQL, récupérez l’ensemble des 
informations des étudiants qui ont moins de 18 ans. Affichez le résultat de cette requête dans un tableau HTML. 
La première ligne de votre tableau HTML doit contenir le nom des champs. Les suivantes doivent contenir les données présentes 
dans votre base de données. -->

<?php
$serveur = 'localhost';
$nomUtilisateur = 'hayley';
$motDePasse = 'monarque';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer les informations de la table étudiants
    $requete = "SELECT * from étudiants where naissance > date_sub(curdate(), interval 18 year)";
    $resultat = $bdd->query($requete);
// Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Naissance</th>";
    echo "<th>Sexe</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['Id'] . "</td>";
        echo "<td>" . $ligne['prénom'] . "</td>";
        echo "<td>" . $ligne['nom'] . "</td>";
        echo "<td>" . $ligne['naissance'] . "</td>";
        echo "<td>" . $ligne['sexe'] . "</td>";
        echo "<td>" . $ligne['email'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    // Fermeture de la connexion à la base de données
    $resultat->closeCursor();
    $bdd = null;
} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur : " . $e->getMessage();
}
?>

<!--
ID	Prénom	Nom	Naissance	Sexe	Email
5	Roxan	Roumégas	2016-09-08	Homme	roxan@laplateforme.io
13	Toto	Dupont	2019-11-07	Homme	toto@laplateforme.io
-->