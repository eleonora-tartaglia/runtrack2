<?php

# Créez une variable de type string nommée $str et affectez y le texte : “Les choses que l'on possède finissent par nous posséder."

$str = "Les choses que l on possede finissent par nous posseder.";

# Créez un algorithme qui parcourt et écrit cette chaine à l’envers.

$enversStr = "";
        # Crée une variable $reverseStr et lui assigne une chaîne vide. Cette variable sera utilisée pour stocker la chaîne inversée, 
        # qui sera construite à mesure que nous parcourons la chaîne d'origine

$i = 0;
        # Initialisation de la variable à 0

# Calcule la longueur de la chaîne
while(isset($str[$i])) {
    $i++;
}

# Premiere boucle while. Elle continuera à s'exécuter tant que la condition à l'intérieur des parenthèses est vraie. 
# Dans ce cas, la condition est isset($str[$i]). 
# La fonction isset() vérifie si une variable est définie et n'est pas null. Dans notre cas, nous utilisons isset($str[$i]) pour vérifier si le caractère à 
# l'indice $i dans la chaîne $str existe.
# Au début, $i est défini à 0, donc nous vérifions le premier caractère de la chaîne. Si ce caractère existe, ça renverra true et la boucle while s'exécutera.
# $i++ signifie que nous augmentons la valeur de $i de 1 à chaque itération de la boucle

# Inverse la chaîne caractère par caractère
while($i >= 0) {
    $enversStr .= isset($str[$i]) ? $str[$i] : '';
    $i--;
}

# Deuxieme boucle qui s'exécutera tant que $i est supérieur ou égal à 0. Dans ce contexte, $i a été défini avant la boucle comme étant égal à la longueur de la chaîne $str. 
# Donc cette boucle commencera à la fin de la chaîne et se déplacera vers le début.
# Pour chaque itération, nous ajoutons le caractère actuel à la chaîne $enversStr (qui stocke la chaîne inversée).
# Puis on effectue une opération de concaténation de chaînes. Il utilise l'opérateur ternaire ? : pour vérifier si le caractère à l'indice $i dans $str existe. 
# Si c'est le cas, ce caractère est ajouté à la fin de $enversStr. Si ce n'est pas le cas (ce qui pourrait arriver si $i est égal à la longueur de la chaîne, 
# puisque les indices de chaîne en PHP commencent à 0), alors une chaîne vide est ajoutée à $enversStr, ce qui n'a pas d'effet.
# $i--: À chaque itération de la boucle, $i est décrémenté de 1. Cela signifie que la boucle se déplace en arrière à travers la chaîne $str, 
# commençant par le dernier caractère et se terminant par le premier.

echo $enversStr;

?>