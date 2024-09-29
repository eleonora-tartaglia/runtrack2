<?php
                    // Exercices sur les conditions pour verifier si un nombre est premier

# Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour à la ligne entre chaque nombre

# Nombre premier : divisable par 1 ou lui meme donc on exclue le 0 et le 1 c'est pour ça qu'on start a 2

for ($i = 2; $i <= 1000; $i ++) {

    $nombre_premier = true;

        for ($n = 2; $n < $i; $n ++) {          # Assure que nous ne vérifions que les diviseurs possibles pour $i
            if ($i % $n == 0) {                 # S'il n'y a pas de reste dans la division
                $nombre_premier = false;        # Alors ce n'est pas un nombre premier
                break;                          # On sort de la boucle
            }
        }
    if ($nombre_premier) {                      # Si c'est un nombre premier
        echo $i . "<br>";                       # On l'affiche avec un saut à la ligne
    }
}

?>