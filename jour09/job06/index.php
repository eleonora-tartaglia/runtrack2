<!-- En utilisant PHP, connectez-vous à la base de données “jour08”. À l’aide d’une requête SQL, récupérez le nombre total 
d’étudiants dans une colonne nommée “nb_etudiants”. Affichez le résultat de cette requête dans un tableau HTML. La première 
ligne de votre tableau HTML doit contenir le nom du champ. -->

<?php
$serveur = 'localhost';
$nomUtilisateur = 'hayley';
$motDePasse = 'monarque';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer le nombre total d'étudiants
    $requete = "SELECT COUNT(*) AS nb_étudiants FROM étudiants";
    $resultat = $bdd->query($requete);
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
    $nbEtudiants = $ligne['nb_étudiants'];

    // Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre d'étudiants</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $nbEtudiants . "</td>";
    echo "</tr>";
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
Nombre d'étudiants
7 
-->