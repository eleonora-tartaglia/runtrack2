<!-- En utilisant PHP et PDO, connectez-vous à la base de données “jour08”. 
    À l’aide d’une requête SQL, récupérez l’ensemble des informations de la table étudiants. 
    Affichez le résultat de cette requête dans un tableau HTML. La première ligne de votre tableau html (thead) doit contenir 
    le nom des champs. Les suivantes (tbody) doivent contenir les données présentes dans votre base de données. -->

<?php

$serveur = 'localhost';
$nomUtilisateur = 'hayley';
$motDePasse = 'monarque';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer les informations de la table étudiants
    $requete = "SELECT * FROM étudiants";
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

<!-- Ce code commence par se connecter à la base de données et effectuer une requête pour récupérer toutes les lignes de la 
    table etudiants. Ensuite, il crée une en-tête de tableau avec le nom de chaque champ. Enfin, il crée une ligne de tableau pour 
    chaque enregistrement, avec une cellule pour chaque champ de l'enregistrement. -->

<!-- 
ID	Prénom	Nom	Naissance	Sexe	Email
1	Cyril	Zimmermann	1989-01-02	Homme	cyril@laplateforme.io
3	Jessica	Soriano	1995-09-08	Femme	jessica@laplateforme.io
5	Roxan	Roumégas	2016-09-08	Homme	roxan@laplateforme.io
7	Pascal	Assens	1999-12-31	Homme	pascal@laplateforme.io
9	Terry	Cristinelli	2005-02-01	Homme	terry@laplateforme.io
11	Ruben	Habib	1993-05-26	Homme	ruben.habib@laplateforme.io
13	Toto	Dupont	2019-11-07	Homme	toto@laplateforme.io 
-->