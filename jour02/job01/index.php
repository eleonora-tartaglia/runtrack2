<?php

# Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre chaque nombre. 
# Le nombre 42 doit être en gras et souligné.

for ($i = 0; $i <= 1337; $i++) {           
                                         
    if ($i == 42) {                                 

        echo "<b><u>$i</u></b><br />";              # les balises <b> et <u> servent pour mettre en gras et souligner

                                                    # <br /> pour un retour à la ligne
    } else {
        echo "$i<br />";
    }
}


# boucle for: parcourt tous les nombres de 0 à 1337
# $i = 0; :     Cette partie initialise la variable $i à 0. C'est l'état initial de la boucle. 
# La variable $i est généralement appelée le compteur de la boucle.
# $i <= 1337; :     Condition pour que la boucle continue de tourner. Tant que cette condition est vraie, la boucle continuera à tourner. 
# $i++ :    Cette partie est l'expression d'incrémentation. À chaque tour de la boucle, cette expression est exécutée. 
# Dans ce cas, la valeur de $i est augmentée de 1 ($i++ est une opération d'incrémentation qui augmente la valeur de $i de 1).

# if ($i == 42) :   la condition vérifie si la variable $i est égale à 42 alors elle imprime :
# echo "<b><u>$i</u></b><br />";    <b> : pour le gras <u> : pour le souligné <br /> : pour retour a la ligne pour 42
# else echo "$i<br />";     si la condition dans la déclaration if est fausse (si $i n'est pas égal à 42
# Dans ce cas, elle produit le nombre contenu dans la variable $i, suivi d'un retour à la ligne <br />

?>