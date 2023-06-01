<!-- En utilisant PHP, connectez-vous à la base de données “jour09”. À l’aide d’une requête SQL, sélectionnez le prénom, 
le nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018. Affichez le résultat de cette requête dans un 
tableau HTML. La première ligne de votre tableau HTML doit contenir le nom des champs. Les suivantes doivent contenir les données 
présentes dans votre base de données. -->

<?php
$serveur = 'localhost';
$nomUtilisateur = 'hayley';
$motDePasse = 'monarque';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer les informations de la table étudiants
    $requete = "SELECT prénom, nom, naissance from étudiants where naissance between '1998-01-01' and '2018-12-31'";
    $resultat = $bdd->query($requete);
// Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Naissance</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['prénom'] . "</td>";
        echo "<td>" . $ligne['nom'] . "</td>";
        echo "<td>" . $ligne['naissance'] . "</td>";
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
Prénom	Nom	Naissance
Roxan	Roumégas	2016-09-08
Pascal	Assens	1999-12-31
Terry	Cristinelli	2005-02-01 
-->