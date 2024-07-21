<?php

                            // Exercices sur les GET et notion de integer

// Récupérer les valeurs du joueur et du score via la méthode GET
$joueur = $_GET['joueur'] ?? 'Harry';                   // Valeur par défaut si non définie dans l'URL
$score = $_GET['score'] ?? 15;                          // Valeur par défaut si non définie dans l'URL

// Convertir le score en entier
$score = (int)$score;

// Afficher le message en fonction du score
if ($score >= 10) {
    echo "Victoire pour le joueur $joueur avec un score de $score !";
} else {
    echo "Défaite pour le joueur $joueur avec un score de $score..";
}

?>