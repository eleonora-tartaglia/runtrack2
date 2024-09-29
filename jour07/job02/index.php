<!-- Les Fonctions en PHP -->

<!-- Consigne : Créer une fonction avec parametre -->

<?php

// Définition de la fonction avec un paramètre booléen
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction avec true
bonjour(true);  // Affichera "Bonjour"

// bonjour(false); // Test avec false

?>