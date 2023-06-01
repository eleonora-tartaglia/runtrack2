<!-- En utilisant PHP, connectez-vous à la base de données “jour09”. À l’aide d’une requête SQL, sélectionnez récupérer le nom 
des salles et le nom de leur étage. Affichez le résultat de cette requête dans un tableau HTML. La première ligne de votre tableau 
HTML doit contenir le nom des champs. Les suivantes doivent contenir les données présentes dans votre base de données. -->

<?php
$serveur = 'localhost';
$nomUtilisateur = 'hayley';
$motDePasse = 'monarque';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer les informations de la table étudiants
    $requete = "SELECT salles.nom AS nom_salles, etage.nom AS nom_etage FROM salles JOIN etage ON salles.Id_etage = etage.Id";
    $resultat = $bdd->query($requete);
// Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom de la salle</th>";
    echo "<th>Nom de l'étage</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['nom_salles'] . "</td>";
        echo "<td>" . $ligne['nom_etage'] . "</td>";
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

Nom de la salle	Nom de l'étage
Lounge	RDC
Studio Son	RDC
 -->