<?php  
       
            // Créer une fonction qui calcule le % d’alcool dans les bouteilles de Sylvie :
            // Paramètres : quantité totale, quantité d’alcool. Tester sur 3 bouteilles
            
// Affichage d'un petit message :
echo "Sylvie fait une mega party chez elle, elle a plusieurs bouteilles d'alcool..<br> 
mais on se pose tous la question de savoir combien de pourcentage d'alcool les bouteilles contiennent..<br><br>";

function taux_alcool ($quantite_totale, $quantite_alcool) {
    $pourcentage = ($quantite_alcool / $quantite_totale)* 100;
    return round($pourcentage, 2); 
} 

// floor = arrondir au + bas
// ceil = arrondir au plus haut
// round = arrondir par defaut

// Definition des boissons :
$boisson1 = "Martini Blanc";
$quantite_alcool1 = 0.17;
$quantite_totale1 = 1.1;

$boisson2 = "Rhum Ambré";
$quantite_alcool2 = 0.36;
$quantite_totale2 = 0.75;

$boisson3 = "Ruinart";
$quantite_alcool3 = 0.14;
$quantite_totale3 = 1;

function affichage ($pourcentage, $boisson) {
    echo "Le pourcentage d'alcool dans la bouteille de $boisson de Sylvie est de $pourcentage %<br>";
}

// Affichage du taux d'alccol dans la bouteille de Martini Blanc de Sylvie
$pourcentage1 = taux_alcool($quantite_totale1, $quantite_alcool1);
affichage($pourcentage1, $boisson1);

// Affichage du taux d'alccol dans la bouteille de Rhum ambré de Sylvie
$pourcentage2 = taux_alcool($quantite_totale2, $quantite_alcool2);
affichage($pourcentage2, $boisson2);

// Affichage du taux d'alccol dans la bouteille de Ruinart de Sylvie
$pourcentage3 = taux_alcool($quantite_totale3, $quantite_alcool3);
affichage($pourcentage3, $boisson3);

?>