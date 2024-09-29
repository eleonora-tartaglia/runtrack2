<?php             
                
                    # Créez une variable $str et affectez y le texte : 
            # “On n’est pas le meilleur quand on le croit mais quand on le sait”.
# Créez un dictionnaire (tableau keys/values) : $dic qui a comme keys “consonnes” et “voyelles”. 
# Créez un algorithme qui parcourt, compte et stocke le nombre d'occurrences de consonnes et de voyelles de $str.
# Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et “Consonnes”..

echo "Voici la phrase que l'on veut étudier : On n’est pas le meilleur quand on le croit mais quand on le sait.<br><br>";
echo "On cherche à savoir combien il y a de voyelles et de consonnes dans cette phrase :<br><br>";
// Création de la variable
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";

// Initialisation du dictionnaire
$dictionnaire = [
    "consonne" => 0,
    "voyelle" => 0,
];

// Définition des voyelles
$voyelle = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];

// Parcours de la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];
    if (ctype_alpha($caractere)) {                  // Vérifie si le caractère est une lettre
        if (in_array($caractere, $voyelle)) {
            $dictionnaire["voyelle"]++;
        } else {
            $dictionnaire["consonne"]++;
        }
    }
}

// Généreration du tableau HTML
echo "<table border='1' style='width:50%; text-align:center; margin:auto'>";
echo "<thead>";
echo "<tr><th>Voyelles</th><th>Consonnes</th></tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr><td>{$dictionnaire['voyelle']}</td><td>{$dictionnaire['consonne']}</td></tr>";
echo "</tbody>";
echo "</table>";

?>