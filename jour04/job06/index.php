<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un bouton submit -->

<!DOCTYPE html>
<html>

<body>
<h2>Formulaire pour verifier si un nombre magique est pair ou impaire</h2>
    <form action="" method="get">
        <label for="nombre">Entrez ici votre nombre magique:</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
    if (isset($_GET['nombre'])) {           # Vérifie si la variable nombre a été définie dans l'URL par la méthode GET. 
                                            # isset() est une fonction qui renvoie true si la variable donnée existe et a été définie.
        $nombre = $_GET['nombre'];          # Affecte la valeur de la variable nombre provenant de l'URL à la variable $nombre dans votre script PHP.
        if (is_numeric($nombre)) {          # Vérifie si la valeur de la variable $nombre est un nombre. 
                                            # is_numeric() est une fonction qui renvoie true si la variable donnée est un nombre ou une chaîne numérique
            if ($nombre % 2 == 0) {         # Vérifie si le nombre est pair. 
                                            # L'opérateur % donne le reste de la division de $nombre par 2. Si le reste est 0, alors le nombre est pair.
                echo 'Ce nombre magique est considéré comme pair';
            } else {
                echo 'Ce nombre magique est considéré comme impair';
            }
        } else {
            echo 'Veuillez entrer votre nombre magique : ';
    }
}

?>