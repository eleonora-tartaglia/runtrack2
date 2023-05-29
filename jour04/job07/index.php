<!-- Construction d'une maison ..

    Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et “hauteur” et un bouton submit. -->

<!DOCTYPE html>
<html>

<body>
  <h2>Construction de maison</h2>
  <form method="GET" action="">

    <label for="hauteur">Hauteur :</label>
    <input type="text" id="hauteur" name="hauteur" required><br><br>

    <label for="largeur">Largeur :</label>
    <input type="text" id="largeur" name="largeur" required><br><br>

    <input type="submit" value="Construire">
  </form>
</body>

</html>

<?php
    if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
        $largeur = $_GET['largeur'];
        $hauteur = $_GET['hauteur'];

        // Construction de la maison
        $toit = "";
        $ligne_toit = "";
        $murs = "";
        $base = "";

        // Construction du toit
        for ($i = 0; $i < $hauteur; $i++) {
            for ($j = 0; $j < $hauteur - $i - 1; $j++) {
                $toit .= " ";
            }
            $toit .= "/";
            for ($j = 0; $j < $i * 2; $j++) {
                $toit .= "_"; // Creating roof tiles with horizontal lines
            }
            $toit .= "\\" . "\n";
        }

        // Construction de la ligne entre le toit et les murs
        $ligne_toit .= "|";
        for ($j = 0; $j < $largeur - 2; $j++) {
            $ligne_toit .= "_";
        }
        $ligne_toit .= "|";
        
        // Construction des murs
        for ($i = 0; $i < $hauteur - 1; $i++) { // -1 to account for the added line
            $murs .= "|";
            for ($j = 0; $j < $largeur - 2; $j++) {
                if ($i <= $hauteur/2 && ($j == 1 || $j == $largeur - 4)) {
                    $murs .= "O"; // Add windows on the left and right if possible
                } else {
                    $murs .= " ";
                }
            }
            $murs .= "|" . "\n";
        } 

        // Construction de la base
        $base .= "|";
        for ($j = 0; $j < $largeur - 2; $j++) {
            $base .= "_";
        }
        $base .= "|";

        // Affichage de la maison
        echo "<pre>";
        echo $toit;
        echo $ligne_toit . "\n";
        echo $murs;
        echo $base;
        echo "</pre>";
    }
?>