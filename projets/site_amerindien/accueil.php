<?php 
include 'base_donnee.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Les Tipis Tomahawks</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="nav-bar">
            <a class="logo" href="accueil.php"><img src="images/logo.png" alt="Logo"></a>
            <h1 class="nav-title">Les Tipis Tomahawks</h1>
            <a class="nav-cart" href="panier.php"><img src="images/panier.png" alt="Panier"></a>
        </nav>
    </header>
    
    <main>
        <section class="presentation">
            <h2>Présentation de la Marque</h2>
            <p>L'histoire de notre marque trouve son origine dans la fascination pour la culture Amérindienne et son artisanat traditionnel.</p>
            <p>C'est en explorant les vastes étendues des Grandes Plaines, des montagnes Rocheuses et des forêts luxuriantes que nous avons découvert l'âme de cette culture bohème, où la nature et l'art de vivre sont en parfaite harmonie.</p>
            <p>Nous avons ainsi décidé de créer une marque qui rend hommage à cette culture, en proposant des bijoux et objets d'artisanat traditionnel inspirés de la nature et du savoir-faire amérindien.</p>
            <p>Nos créations sont le fruit d'un travail minutieux, réalisé avec passion et respect pour la tradition.</p>
            <h2>Bienvenue dans l'univers des Tipis Tomahawks des Temps Modernes, où l'authenticité et la bohème sont à l'honneur</h2>
        </section>

        <h2>Nos Produits</h2>

        <section class="products">
            <?php foreach ($produits as $produit): ?>
                <div class='product'>
                    <h3><?php echo htmlspecialchars($produit['nom']); ?></h3>
                    <img src='<?php echo htmlspecialchars($produit['image']); ?>'>
                    <p><?php echo htmlspecialchars($produit['description']); ?></p>
                    <p>Prix: <?php echo htmlspecialchars($produit['prix']); ?> €</p>
                    <a href='article.php?id=<?php echo htmlspecialchars($produit['id']); ?>'>Voir le produit</a>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <p>Created with a lot of fun by Prasana, Romain and Eléonora</p>
    </footer>
</body>  
</html>
