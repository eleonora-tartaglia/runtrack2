<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <!-- Lien vers la feuille de style CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <?php
    // Démarrage de la session
    session_start();

    // Initialiser ou réinitialiser la grille du morpion
    if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
        $_SESSION['grille'] = array_fill(0, 3, array_fill(0, 3, "-"));
        $_SESSION['tour'] = "X"; // ⍾ commence
    }

    // Gérer le clic sur une case
    if (isset($_POST['ligne']) && isset($_POST['colonne']) && $_SESSION['grille'][$_POST['ligne']][$_POST['colonne']] === "-") {
        // Mettre à jour la case avec ⍾ ou ⌖
        $_SESSION['grille'][$_POST['ligne']][$_POST['colonne']] = $_SESSION['tour'] === "X" ? "⍾" : "⌖";
        // Changer de tour
        $_SESSION['tour'] = $_SESSION['tour'] === "X" ? "O" : "X";
    }

    // Fonction pour vérifier si un joueur a gagné
    function check_victoire($grille, $signe) {
        // Vérifier les lignes, colonnes et diagonales
        for ($i = 0; $i < 3; $i++) {
            if ($grille[$i][0] === $signe && $grille[$i][1] === $signe && $grille[$i][2] === $signe) return true;
            if ($grille[0][$i] === $signe && $grille[1][$i] === $signe && $grille[2][$i] === $signe) return true;
        }
        if ($grille[0][0] === $signe && $grille[1][1] === $signe && $grille[2][2] === $signe) return true;
        if ($grille[0][2] === $signe && $grille[1][1] === $signe && $grille[2][0] === $signe) return true;
        return false;
    }

    // Vérifier si un joueur a gagné
    $victoire = null;
    if (check_victoire($_SESSION['grille'], "⍾")) {
        $victoire = "⍾ a gagné";
    } elseif (check_victoire($_SESSION['grille'], "⌖")) {
        $victoire = "⌖ a gagné";
    } elseif (!in_array("-", array_merge(...$_SESSION['grille']))) {
        $victoire = "Match nul";
    }

    // Réinitialiser la partie si victoire ou match nul
    if ($victoire) {
        echo "<h2>$victoire</h2>";
        echo "<form method='POST'><button type='submit' name='reset' class='reset'>Réinitialiser la partie</button></form>";
        session_destroy();
    } else {
        // Afficher la grille
        echo "<form method='POST'>";
        echo "<table class='grille'>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>";
                if ($_SESSION['grille'][$i][$j] === "-") {
                    // Passer les indices de ligne et de colonne comme inputs cachés
                    echo "<button type='submit' name='ligne' value='$i' class='case'>";
                    echo "<input type='hidden' name='colonne' value='$j' />";
                    echo "-</button>";
                } else {
                    echo "<span>" . $_SESSION['grille'][$i][$j] . "</span>";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<button type='submit' name='reset' class='reset'>Réinitialiser la partie</button>";
        echo "</form>";
    }
    ?>
</body>
</html>
