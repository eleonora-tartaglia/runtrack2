<?php

# Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour à la ligne entre chaque nombre (“<br />”)

for ($i = 2 ; $i < 1000 ; $i++) {               # boucle qui verifie les nbr premier 
    $nbrpremier = true;

    for( $x = 2 ; $x < $i ; $x++) {             # boucle qui verifie les nbr premier 
        if($i % $x == 0) {
            $nbrpremier = false;
            break;
        }
    }

    if ($nbrpremier) {
        echo $i . "<br/>";
    }
}

# La boucle for ($i = 2 ; $i < 1000 ; $i++) initialise une boucle qui commence à 2 = premier nombre premier et se termine avant d'atteindre 1000.
# La variable $nbrpremier est initialisée à true à chaque itération de la boucle extérieure.
# La boucle intérieure for ($x = 2 ; $x < $i ; $x++) vérifie si le nombre $i est divisible par un nombre autre que 1 et lui-même. Elle itère de 2 jusqu'à $i - 1
# Dans la condition if ($i % $x == 0), si le reste de la division de $i par $x est égal à 0, cela signifie que $i est divisible par $x, donc il n'est pas un nombre premier. 
# La variable $nbrpremier est alors définie sur false et la boucle intérieure est interrompue avec break.
# La boucle intérieure for ($x = 2 ; $x < $i ; $x++) vérifie si le nombre $i est divisible par un nombre autre que 1 et lui-même. Elle itère de 2 jusqu'à $i - 1.
# Dans la condition if ($i % $x == 0), si le reste de la division de $i par $x est égal à 0, cela signifie que $i est divisible par $x, donc il n'est pas un nombre premier. 
# La variable $nbrpremier est alors définie sur false et la boucle intérieure est interrompue avec break.
# Après la boucle intérieure, si la variable $nbrpremier est true, cela signifie que $i est un nombre premier. Il est alors affiché avec echo $i . "<br/>";
# La boucle extérieure continue jusqu'à ce que tous les nombres de 2 à 999 aient été testés.

?>