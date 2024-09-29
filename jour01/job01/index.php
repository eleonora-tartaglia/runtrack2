<?php

                                // Exercice sur les variables

    // Création de la variable str et affectation de la valeur "Pas très fan.."
$str = "Pas très fan..";

// Affichage du contenu de la variable str et double saut de ligne
echo $str . "<br><br>";

    // Création des variables str2 et str3
$str2 = "de";
$str3 = "PHP";

// Affichage de "Pas très fan..de PHP" en concaténant les variables str2, str, et str3
echo $str . " " . $str2 . " " . $str3 . "<br><br>";

    // Création de la variable val et affectation de la valeur 6
$val = 6;

// Affichage du contenu de la variable val
echo "Si ma valeur initiale de val est : " . $val . "<br><br>";

// Ajout de 4 à la variable val
$val += 4;

// Affichage du nouveau contenu de la variable val
echo "Et que j'ajoute 4 à cette valeur, normalement si tout va bien ça me donnera : " . $val . "<br><br>";

    // Création de la variable myBool et affectation de la valeur true
$myBool = true;

// Affichage du contenu de la variable myBool
// Utilisation de var_export pour convertir une valeur boolenne en chaine de caractere
echo "Si la valeur initiale de ma variable booléenne myBool est : " . var_export($myBool, true) .  "<br><br>";

// Affectation de la valeur false à la variable myBool
$myBool = false;

// Affichage du nouveau contenu de la variable myBool
// Utilisation de var_export pour convertir une valeur boolenne en chaine de caractere
echo "Et qu'après un coup de baguette magique, elle donne ça : " . var_export($myBool, true) . " .. surtout ne me posez pas de question, c'est de la sorcellerie voilà tout !";

?>