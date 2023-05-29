<?php

# Créez une variable de type string nommée $str et affectez y le texte : “Certaines choses changent, et d'autres ne changeront jamais.”

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

# Créer un algorithme qui parcourt cette string en remplaçant le 1er caractère par le 2eme, le 2eme par le 3eme etc.. et le dernier par le 1er.

$newStr = "";
            # Ici, nous initialisons une nouvelle variable de chaîne, $newStr, qui contiendra le résultat final
$firstChar = $str[0];
            # On stocke le 1er caractère de la chaîne $str dans la variable $firstChar. Nous en aurons besoin plus tard pour le placer à la fin de la chaîne.
$i = 0;
            # Nous initialisons une variable $i à 0. Celle-ci sera utilisée pour parcourir la chaîne $str.
while(isset($str[$i+1])) {
    $newStr .= $str[$i+1];
    $i++;
}
            # Boucle while qui continuera à s'exécuter tant que le caractère suivant dans la chaîne $str est défini. 
            # Cela nous permet de parcourir chaque caractère de la chaîne.
            # $newStr .= $str[$i+1]; À chaque itération de la boucle, nous ajoutons le caractère suivant de la chaîne $str à notre chaîne $newStr. 
            # Cela déplace chaque caractère de la chaîne $str un pas vers la gauche dans la chaîne $newStr.
            # $i++; Après avoir ajouté le caractère à la chaîne $newStr, nous augmentons la valeur de $i de 1 pour passer au caractère suivant lors de la prochaine itération de la boucle

$newStr .= $firstChar;
            # Une fois que la boucle while a terminé de parcourir tous les caractères de la chaîne $str, nous ajoutons le premier caractère 
            # (qui a été stocké dans la variable $firstChar au début) à la fin de la chaîne $newStr

echo $newStr;

?>