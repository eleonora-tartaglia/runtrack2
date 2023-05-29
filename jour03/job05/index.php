<?php

# Créez une variable de type string nommée $str et affectez y le texte : 
# “On n’est pas le meilleur quand on le croit mais quand on le sait”.

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

# Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys “consonnes” et “voyelles”.
$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

# Création d'un tableau associatif (ou dictionnaire) qui va stocker le nombre de consonnes et de voyelles que nous trouvons dans la chaîne. 
# Initialement, nous mettons ces valeurs à 0.

# Créez un algorithme qui parcourt, compte et stocke le nombre d'occurrences de consonnes et de voyelles de $str.
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

# On definit une liste de toutes les voyelles que nous voulons compter. Nous incluons à la fois les minuscules et les majuscules.

$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];

    if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {     # Verifie si le caractère est une lettre, en minuscules ou en majuscules
        if (in_array($char, $voyelles)) {                                       # Si le caractère est une lettre, nous vérifions s'il est une voyelle.
            $dic["voyelles"]++;                                                 # Si c'est une voyelle, nous augmentons le nombre de voyelles dans notre dictionnaire.
        } else {
            $dic["consonnes"]++;                                                # Si c'est pas une voyelle, alors c'est une consonne, donc nous augmentons le nombre de consonnes dans notre dictionnaire.
        }
    }
    $i++;                                                                       # Nous augmentons notre compteur pour passer au caractère suivant dans la chaîne.
}

# $i = 0; Nous initialisons un compteur à 0. Il servira à parcourir chaque caractère de la chaîne.
# Nous entrons dans une boucle while qui continuera tant que le caractère à l'indice $i dans la chaîne $str est défini.
# Nous affectons à la variable $char le caractère de $str à l'indice $i
# $char >= 'A' && $char <= 'Z' vérifie si $char est une lettre majuscule.
# $char >= 'a' && $char <= 'z' vérifie si $char est une lettre minuscule.
# l'opérateur || signifie "ou" : autrement dit, on vérifie si $char est une lettre de l'alphabet, indépendamment de sa casse

# Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et “Consonnes”..

echo "<table>";
    # <table> pour créer le tableau
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
    # <thead>..</thead> pour la ligne d'en-tête
    # <tr>..</tr> pour une seule ligne qui contient :
    # deux cellules <th>Voyelles</th> pour "Voyelles" et <th>Consonnes</th> pour "Consonnes"
echo "<tbody>";
    # <tbody> pour commencer le corps du tableau
echo "<tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr>";
    # <tr> pour une seule ligne avec deux cellules <td> où nous affichons les valeurs des voyelles et des consonnes du dico $dic :
    # en utilisant $dic["voyelles"] et $dic["consonnes"].
echo "</tbody>";
    # nous terminons le corps en utilisant </tbody>
echo "</table>";
    # nous terminons le tableau en utilisant </table>

?>