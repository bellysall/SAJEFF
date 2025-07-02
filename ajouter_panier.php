<?php
session_start();

// Initialiser le panier s'il n'existe pas encore
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Récupérer les données envoyées par le formulaire
if (isset($_POST['product_id'], $_POST['product_name'], $_POST['product_price'])) {
    $product = [
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price']
    ];

    // Ajouter le produit au panier (éviter les doublons simples)
    $_SESSION['panier'][] = $product;

    // Rediriger vers le catalogue avec un message
    header("Location: panier.php?success=1");
    exit();
} else {
    // En cas d'erreur de formulaire
    header("Location: panier.php?error=1");
    exit();
}
