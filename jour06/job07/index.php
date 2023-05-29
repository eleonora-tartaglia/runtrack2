<!-- Créez un formulaire <form> qui contient : un champ nommé “str” de type “text”, une liste déroulante nommée “fonction”, 
    et un bouton submit. Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en fonction de l’option 
    choisie dans la liste déroulante. Les choix possibles sont : 
    - “gras” : une fonction qui prend en paramètre une chaine de caractère et écrit celle-ci en mettant en gras les mots commençant 
    par une lettre majuscule.
    -“cesar” : une fonction qui prend en paramètre une chaine de caractère et un nombre (qui vaut 2 par défaut). Elle doit afficher la 
    chaine de caractère en décalant chaque caractère d’un nombre égal au nombre passé en paramètre.
            ex : Si le paramètre vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient “c”.
    -“plateforme” : une fonction qui prend en paramètre une chaine de caractère. Elle affiche la chaine de caractère en ajoutant 
    un “_” aux mots finissant par “me”. -->


<!DOCTYPE html>

<html>
<body>

<form method="post" action="">
  <input type="text" name="str" placeholder="Enter text here">
  <select name="fonction">
    <option value="gras">Gras</option>
    <option value="cesar">Cesar</option>
    <option value="plateforme">Plateforme</option>
  </select>
  <input type="submit">
</form>

<?php
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];

    function myExplode($delimiter, $str) {
        $result = array();
        $word = '';
        $i = 0;
        while (isset($str[$i])) {
            if ($str[$i] == $delimiter) {
            $result[] = $word;
            $word = '';
            } else {
            $word .= $str[$i];
            }
            $i++;
        }
        $result[] = $word;
        return $result;
    }

    function myUcfirst($str) {
        if ('a' <= $str && $str <= 'z') {
            return chr(ord($str) - 32);
        }
        return $str;
    }

    function isUpperCase($char) {
        return 'A' <= $char && $char <= 'Z';
    }

    function gras($str) {
        $words = myExplode(' ', $str);
        $result = '';
        for ($i = 0; isset($words[$i]); $i++) {
            if (isUpperCase($words[$i][0])) {
                $result .= "<b>" . $words[$i] . "</b> ";
            } else {
            $result .= $words[$i] . " ";
            }
        }
        return $result;
    }

    function cesar($str, $shift = 2) {
        $output = '';
        for ($i = 0; isset($str[$i]); $i++) {
            $ascii = ord($str[$i]);

            if('a' <= $str[$i] && $str[$i] <= 'z') {
                $output .= chr((($ascii - ord('a') + $shift) % 26) + ord('a'));
            } elseif('A' <= $str[$i] && $str[$i] <= 'Z') {
                $output .= chr((($ascii - ord('A') + $shift) % 26) + ord('A'));
            } else {
                $output .= $str[$i];
            }
        }
        return $output;
    }


    function plateforme($str) {
        $words = myExplode(' ', $str);
        $result = '';
        for ($i = 0; isset($words[$i]); $i++) {
            if ($words[$i][strlen($words[$i]) - 1] == 'e' && $words[$i][strlen($words[$i]) - 2] == 'm') {
                $result .= $words[$i] . "_ ";
            } else {
                $result .= $words[$i] . " ";
            }
        }
        return $result;
    }

    switch ($fonction) {
        case "gras":
        echo gras($str);
        break;
        case "cesar":
        echo cesar($str);
        break;
        case "plateforme":
        echo plateforme($str);
        break;
        default:
        echo "No function selected";
    }
}

?>

</body>
</html>

<!-- PS : je n'arrive pas à le faire sans utiliser de fonctions systemes voilà !! -->