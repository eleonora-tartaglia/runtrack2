<?php

                            // Créer une fonction qui présente un animal :
        // Paramètres : taille, poids, nom, couleur, ailes ou non, herbivore ? Tester sur 3 individus

function presentation($taille, $poids, $nom, $couleur, $ailes, $herbivore) {
    echo "Voici $nom :<br>";
    echo "Taille : $taille cm<br>";
    echo "Poids : $poids grammes<br>";
    echo "Couleur : $couleur<br>";
    echo "Ailes : " . ($ailes ? 'Oui' : 'Non') . "<br>";
    echo "Herbivore : " . ($herbivore ? 'Oui' : 'Non') . "<br>";
    echo "<br>";
}

// Présentation de Fripouille la chauve-souris
presentation(15, 300.80, "Fripouille la chauve souris", "Noire", true, false);

// Présentation de Bernardo l'asticot magique
presentation(5, 7.5, "Bernardo l'asticot", "Vert scintillant", false, true);

// Présentation de Farceur le hibou rieur qui n'a pas d'ailes, on lui a coupé !!
presentation(30, 856.60, "Farceur le hibou rieur qui est helas depourvu d'ailes", "Brun avec des taches dorées", false, false);

?>