<?php

# Créez une variable de type string nommée $str et affectez y le texte :
# “Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
# Parcourir cette chaîne en affichant seulement un caractère sur deux.

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

# Parcours de la chaîne en affichant un caractère sur deux :

for ($i = 0; isset($str[$i]); $i += 2) {
    echo $str[$i];
}

# La boucle for parcourt la chaîne $str en affichant un caractère sur deux. 
# La condition de continuation de la boucle est définie en utilisant la fonction isset() sur $str[$i]. 
# Cela permet de vérifier si l'indice $i existe dans la chaîne, c'est-à-dire s'il y a encore des caractères à parcourir.

# À chaque itération de la boucle, le caractère correspondant à l'indice $i de la chaîne $str est affiché à l'aide de echo $str[$i].
# Ainsi, la boucle continue tant que l'indice $i existe dans la chaîne $str. Cela permet d'afficher seulement un caractère sur deux dans la chaîne d'origine.

?>