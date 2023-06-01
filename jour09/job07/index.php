<!-- En utilisant PHP, connectez-vous à la base de données “jour08”. À l’aide d’une requête SQL, récupérez la superficie 
totale des étages dans une colonne nommée “superficie_totale”. Affichez le résultat de cette requête dans un tableau HTML. 
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

    // Requête SQL pour récupérer le nombre total d'étudiants
    $requete = "SELECT sum(superficie) as superficie_totale from etage";
    $resultat = $bdd->query($requete);
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
    $superficieTotale = $ligne['superficie_totale'];

    // Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Superficie totale</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $superficieTotale . "</td>";
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
Superficie totale
1000
-->