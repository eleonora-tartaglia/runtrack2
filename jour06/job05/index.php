<!-- Revision et exo de style gérer par une boucle PHP -->

<!-- Consigne : Créer un formulaire pour changer de visuel -->

<?php
$style = 'style1'; // Par défaut on va charger le style 1

if (isset($_GET['style'])) {
  $style = $_GET['style'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire qui change de style de visuel grace à une boucle PHP</title>
    <?php echo '<link rel="stylesheet" href="' . htmlspecialchars($style) . '.css">'; ?>
</head>
<body>

    <form method="GET" action="">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?php if ($style === 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($style === 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($style === 'style3') echo 'selected'; ?>>Style 3</option>
        </select><br><br>

        <input type="submit" value="Appliquer le style">
    </form>

</body>
</html>
