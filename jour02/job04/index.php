<?php

# Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre et en remplaçant certains nombres par :
# Si le nombre est un multiple de 3, affichez “Fizz”.
# Si le nombre est un multiple de 5, affichez “Buzz”.
# Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br />";
    } else if ($i % 3 == 0) {
        echo "Fizz<br />";
    } else if ($i % 5 == 0) {
        echo "Buzz<br />";
    } else {
        echo "$i<br />";
    }
}

# La boucle for parcourt les nombres de 1 à 100
# if ($i % 3 == 0 && $i % 5 == 0) vérifie si le nombre est un multiple de 3 et de 5 
# = c'est-à-dire si le reste de la division de $i par 3 et par 5 est égal à 0). Si c'est le cas, elle affiche "FizzBuzz"
# else if ($i % 3 == 0) vérifie si le nombre est un multiple de 3. Si c'est le cas, elle affiche "Fizz"
# else if ($i % 5 == 0) vérifie si le nombre est un multiple de 5. Si c'est le cas, elle affiche "Buzz"
# Si le nombre n'est pas un multiple de 3 ni de 5, alors le nombre est simplement affiché tel quel.

?>