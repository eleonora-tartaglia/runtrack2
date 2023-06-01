<!-- En utilisant php, connectez-vous à la base de données “jour09”. À l’aide d’une requête SQL, sélectionnez l’ensemble des 
informations des salles en les triant par capacité décroissante. Affichez le résultat de cette requête dans un tableau HTML. 
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
    $requete = "SELECT*from salles order by capacité DESC";
    $resultat = $bdd->query($requete);
// Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nom</th>";
    echo "<th>ID étage</th>";
    echo "<th>Capacité</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['Id'] . "</td>";
        echo "<td>" . $ligne['nom'] . "</td>";
        echo "<td>" . $ligne['Id_etage'] . "</td>";
        echo "<td>" . $ligne['capacité'] . "</td>";
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

ID	Nom	ID étage	Capacité
1	Lounge	1	100
9	Coworking	2	80
5	Broadcasting	2	50
3	Studio Son	1	5
11	Studio Video	2	5
7	Bocal Peda	2	4

 -->