<!-- Création d'un formulaire qui contient une liste déroulante nommée “style” et un bouton submit. 
    La liste déroulante doit proposer au moins “style1”, “style2” et “style3.
    Chaque style doit avoir des effets sur le design du formulaire, la couleur de background, la police d’écriture... 
    Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel doit changer. -->

<!DOCTYPE html>
<html>

<head>
    <title>Coup de baguette magique sur les styles</title>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['style'])) {
        $style = htmlspecialchars($_POST['style']);
        echo '<link rel="stylesheet" href="' . $style . '.css">';
    }
    ?>
</head>

<body>

    <form method="post">
        <select name="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <input type="submit" value="Appliquer le style">
    </form>
    <h1>Bienvenue dans la magie de la programmation</h1>

</body>

</html>
