<?php

# Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre (<br />).
# Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25 et 50 : souligner.
# Afficher “La Plateforme_” à la place de 42

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br />";
    } else if ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />"; 
    } else if ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    } else {
        echo "$i<br />";
    }
}

# La boucle for parcourt les nombres de 0 à 100.
# La première condition if ($i == 42) vérifie si le nombre est 42 si oui elle affiche "La Plateforme_" et un retour à la ligne.
# Le deuxième else if ($i >= 0 && $i <= 20) vérifie si le nombre est compris entre 0 et 20. Si oui, le nombre est affiché en italique.
# Le troisième else if ($i >= 25 && $i <= 50) vérifie si le nombre est compris entre 25 et 50. Si oui le nombre est affiché souligné.
# Si aucune des conditions précédentes n'est vraie (c'est-à-dire si le nombre n'est pas 42 et n'est pas compris entre 0 et 20 ou 25 et 50)
# alors le nombre est simplement affiché tel quel avec un retour à la ligne.

?>