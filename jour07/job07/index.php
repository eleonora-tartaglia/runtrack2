<!-- Les Fonctions en PHP -->

<!-- Consigne : Créer un formulaire qui fct de l'option choisie, applique ≠ transformations à la chaîne de caractères -->

<?php

if (isset($_POST['str']) && isset($_POST['fonction'])) {
  $str = $_POST['str'];
  $fonction = $_POST['fonction'];

  // Appeler la fonction correspondante
  switch ($fonction) {
    case 'gras':
      echo gras($str);
      break;

    case 'cesar':
      echo cesar($str);
      break;

    case 'plateforme':
      echo plateforme($str);
      break;

    default:
      echo "Option non reconnue.";
  }
}

// Fonction "gras" : mettre en gras les mots commençant par une majuscule
function gras($str) {
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {
        if (ctype_upper($mot[0])) {
            $mot = "<b>$mot</b>";
        }
    }
    return implode(' ', $mots);
}


// Fonction "cesar" : décalage des caractères
function cesar($str, $decalage = 2) {
    $resultat = '';
    $decalage = $decalage % 26; // Pour limiter le décalage à l'alphabet
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $code = ord($char);
            if (ctype_upper($char)) {
                $char = chr(($code - 65 + $decalage) % 26 + 65); // Majuscules
            } else {
                $char = chr(($code - 97 + $decalage) % 26 + 97); // Minuscules
            }
        }
        $resultat .= $char;
    }
    return $resultat;
}

// Fonction "plateforme" : ajout d'un "_" aux mots finissant par "me"
function plateforme($str) {
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === 'me') {
            $mot .= '_';
        }
    }
    return implode(' ', $mots);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
    <label for="str">Entrez une chaîne :</label>
    <input type="text" name="str" id="str"><br><br>

    <label for="fonction">Choisissez une transformation :</label>
    <select name="fonction" id="fonction">
        <option value="gras">Gras</option>  // Test avec Salut les amis ok
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option> // Test avec love me ok
    </select><br><br>

    <button type="submit">Transformer</button>
    </form>

</body>
</html>