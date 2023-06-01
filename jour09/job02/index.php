<!--  En utilisant PHP et PDO, connectez-vous à la base de données “jour08”. À l’aide d’une requête SQL, 
récupérez le nom et la capacité de chacune des salles. Affichez le résultat de cette requête dans un tableau HTML. 
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
    $requete = "SELECT nom, capacité FROM salles";
    $resultat = $bdd->query($requete);
// Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Capacité</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['nom'] . "</td>";
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
Nom	Capacité
Lounge	100
Studio Son	5
Broadcasting	50
Bocal Peda	4
Coworking	80
Studio Video	5 
-->