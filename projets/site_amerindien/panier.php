<?php
session_start();
include 'base_donnee.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $product_id = $_POST['product_id'];
        if (!isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] = 1;
        } else {
            $_SESSION['cart'][$product_id]++;
        }
    }

    if (isset($_POST['remove_from_cart'])) {
        $product_id = $_POST['product_id'];
        if (isset($_SESSION['cart'][$product_id])) {
            unset($_SESSION['cart'][$product_id]);
        }
    }

    if (isset($_POST['update_quantity'])) {
        $product_id = $_POST['product_id'];
        $quantity = intval($_POST['quantity']);
        if ($quantity > 0) {
            $_SESSION['cart'][$product_id] = $quantity;
        } else {
            unset($_SESSION['cart'][$product_id]);
        }
    }
}

$total = 0;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Les Tipis Tomahawks</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <nav class="nav-bar">
                <a class="logo" href="accueil.php"><img src="images/logo.png" alt="Logo"></a>
                <h1 class="nav-title">Les Tipis Tomahawks</h1>
                <a class="nav-cart" href="panier.php"><img src="images/panier.png" alt="Panier"></a>
            </nav>
        </header>
        <main>
            <section class="cart">
                <h2>Votre Panier</h2>
                <?php if (empty($_SESSION['cart'])): ?>
                    <p>Votre panier est vide</p>
                <?php else: ?>
                    <ul class="product-list">
                        <?php foreach ($_SESSION['cart'] as $product_id => $quantity): ?>
                            <?php $product = $produits[$product_id - 1]; ?>
                            <li class="product">
                                <h3><?php echo $product['nom']; ?></h3>
                                <img src="<?php echo $product['image']; ?>">
                                <p><?php echo $product['description']; ?></p>
                                <p>Prix unitaire: <?php echo $product['prix']; ?> €</p>
                                <p>Quantité: 
                                    <form method="post" action="" class="quantity-form">
                                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                        <input type="number" name="quantity" value="<?php echo $quantity; ?>" min="1">
                                        <button type="submit" name="update_quantity" class="button-style">Mettre à jour</button>
                                    </form>
                                </p>
                                <form method="post" action="">
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                    <button type="submit" name="remove_from_cart" class="button-style">Supprimer</button>
                                </form>
                            </li>
                            <?php $total += $product['prix'] * $quantity; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="total-container">
                        <p>Montant total: <?php echo $total; ?> €</p>
                        <button type="submit" class="button-style">Paiement</button>
                    </div>
                <?php endif; ?>
            </section>
        </main>

        <footer>
            <section></section>
            <p>Created with a lot of fun by Prasana, Romain and Eléonora</p>
            <section></section>
        </footer>
    </div>
</body>
</html>
