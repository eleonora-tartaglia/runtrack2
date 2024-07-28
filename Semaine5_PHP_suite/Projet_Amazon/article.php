<?php

include 'base_donnee.php';
$product_id = $_GET['id'] ?? 1;
$product = $produits[$product_id - 1];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du Produit - Les Tipis Tomahawks</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>

<header>
    <nav class="nav-bar">
        <a class="logo" href="accueil.php"><img src="images/logo.png" alt="Logo"></a>
        <h1 class="nav-title">Les Tipis Tomahawks</h1>
        <a class="nav-cart" href="panier.php"><img src="images/panier.png" alt="Panier"></a>
    </nav>
</header>

<body>

    <main class="product-container">
        <section class="product-detail">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['nom']; ?>">
            <section></section>
            <p><?php echo $product['description']; ?></p>
        </section>

        <section class="product-detail-2">
            <h2><?php echo $product['nom']; ?></h2>
            <section></section>
            <p><?php echo $product['description']; ?></p>
            <p><?php echo $product['description_detail']; ?></p>
            <section></section>
            <p>Prix: <?php echo $product['prix']; ?> €</p>
            <section></section>
            <form method="post" action="panier.php">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <button type="submit" name="add_to_cart" class="button-style">Ajouter au panier</button>
            </form>
        </section>
    </main>

    <footer>
        <section></section>
        <p>Created with a lot of fun by Prasana, Romain and Eléonora</p>
        <section></section>
    </footer>

</body>

</html>