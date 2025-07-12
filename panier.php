<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user'])) {
    header('Location: panier.php');
    exit;
}

$userId = $_SESSION['user']['id'];

$sql = "SELECT p.nom, p.prix, pa.quantite
        FROM panier pa
        JOIN produits p ON p.id = pa.produit_id
        WHERE pa.user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$userId]);
$items = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
</head>
<body>
    <h2>Votre Panier</h2>
    <table border="1">
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
        <?php
        $total = 0;
        foreach ($items as $item):
            $sousTotal = $item['prix'] * $item['quantite'];
            $total += $sousTotal;
        ?>
        <tr>
            <td><?= htmlspecialchars($item['nom']) ?></td>
            <td><?= $item['prix'] ?> FCFA</td>
            <td><?= $item['quantite'] ?></td>
            <td><?= $sousTotal ?> FCFA</td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"><strong>Total :</strong></td>
            <td><strong><?= $total ?> FCFA</strong></td>
        </tr>
    </table>
</body>
</html>
