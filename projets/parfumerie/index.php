<?php
// Configuration de la base de données
$host = 'localhost';
$dbname = 'parfumerie';
$username = 'hayley';
$password = 'monarque';

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    die();
}

// Récupération des parfums depuis la base de données
$sql = 'SELECT * FROM parfums';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$parfums = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfumerie - Liste des Parfums</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Effluves d'Antan</h1>
    </header>
    <main>
        <h2>Nos Parfums</h2>
        <div class="parfums-container">
            <?php foreach ($parfums as $parfum) : ?>
                <div class="parfum-box">
                    <h3><?php echo htmlspecialchars($parfum['nom']); ?></h3>
                    <img src="<?php echo htmlspecialchars($parfum['image_path']); ?>" alt="<?php echo htmlspecialchars($parfum['nom']); ?>">
                    <p><strong>Prix unitaire</strong> <?php echo htmlspecialchars($parfum['prix']); ?> €</p>
                    <?php echo htmlspecialchars($parfum['concentration']); ?></p>
                    <?php echo htmlspecialchars($parfum['genre']); ?></p>
                    <p><strong>Famille Olfactive</strong> <?php echo htmlspecialchars($parfum['famille_olfactive']); ?></p>
                    <p><strong>Note de tête :</strong> <?php echo htmlspecialchars($parfum['note_de_tete']); ?></p>
                    <p><strong>Note de coeur :</strong> <?php echo htmlspecialchars($parfum['note_de_coeur']); ?></p>
                    <p><strong>Note de fond :</strong> <?php echo htmlspecialchars($parfum['note_de_fond']); ?></p>
                    <?php echo htmlspecialchars($parfum['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <p>Creation Parfumerie by Hayley</p>
    </footer>
</body>
</html>
