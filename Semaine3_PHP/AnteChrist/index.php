<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice Magique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculatrice Ensorcelée</h1>
        <form method="get" action="index.php">
            <label for="a">Mon premier est sous le charme</label>
            <input type="number" id="a" name="a" required><br><br>

            <label for="b">Mon deuxième est envouté</label>
            <input type="number" id="b" name="b" required><br><br>

            <label for="operation">Opération magique</label>
            <select id="operation" name="operation" required>
                <option value="addition">Additionix</option>
                <option value="soustraction">Soustractionus</option>
                <option value="multiplication">Multiplicatix</option>
                <option value="division">Divisionus</option>
                <option value="modulo">Modulo de la vieille sorcière</option>
            </select><br><br>

            <input type="submit" value="Petit coup de baguette">
        </form>
        <br>
        
        <?php
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operation'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $operation = $_GET['operation'];
            $result = '';

            if ($operation == 'addition') {
                $result = $a + $b;
                $op_symbol = '+';
            } elseif ($operation == 'soustraction') {
                $result = $a - $b;
                $op_symbol = '-';
            } elseif ($operation == 'multiplication') {
                $result = $a * $b;
                $op_symbol = '*';
            } elseif ($operation == 'division') {
                if ($b != 0) {
                    $result = $a / $b;
                    $op_symbol = '/';
                } else {
                    $result = 'Sapristi ! La division par zéro est impossible';
                }
            } elseif ($operation == 'modulo') {
                if ($b != 0) {
                    $result = $a % $b;
                    $op_symbol = '%';
                } else {
                    $result = 'Sapristi ! La division par zéro est impossible avec cette histoire de modulo';
                }
            } else {
                $result = 'cette operation n est pas ref dans mon grimoire';
            }

            if (is_numeric($result)) {
                echo "<h2>Abracadabra : $a $op_symbol $b = $result</h2>";
            } else {
                echo "<h2>$result</h2>";
            }
        }
        ?>

        <br>
        <form action="index.php">
            <input type="submit" value="Encore la magie !">
        </form>

    </div>

</body>
</html>