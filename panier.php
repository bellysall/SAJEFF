<?php
session_start();

// Récupérer les produits du panier
$panier = $_SESSION['panier'] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier - NDAR NDIMBAL CONNECT</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">🛒 Mon Panier</h2>

        <?php if (empty($panier)) : ?>
            <div class="alert alert-info">Votre panier est vide.</div>
        <?php else : ?>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Produit</th>
                        <th>Prix (FCFA)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($panier as $item) : ?>
                        <tr>
                            <td><?= htmlspecialchars($item['name']) ?></td>
                            <td><?= number_format($item['price'], 0, ',', ' ') ?></td>
                        </tr>
                        <?php $total += $item['price']; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total</th>
                        <th><?= number_format($total, 0, ',', ' ') ?> FCFA</th>
                    </tr>
                </tfoot>
            </table>
            <a href="catalog.php" class="btn btn-primary">← Retour au catalogue</a>
        <?php endif; ?>
    </div>
</body>
</html>
