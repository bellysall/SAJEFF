<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user'])) {
    header('Location: panier.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user']['id'];
    $produitId = $_POST['produit_id'];
    $quantite = $_POST['quantite'] ?? 1;

    $stmt = $pdo->prepare("SELECT * FROM panier WHERE user_id = ? AND produit_id = ?");
    $stmt->execute([$userId, $produitId]);

    if ($stmt->rowCount() > 0) {
        $pdo->prepare("UPDATE panier SET quantite = quantite + ? WHERE user_id = ? AND produit_id = ?")
            ->execute([$quantite, $userId, $produitId]);
    } else {
        $pdo->prepare("INSERT INTO panier (user_id, produit_id, quantite) VALUES (?, ?, ?)")
            ->execute([$userId, $produitId, $quantite]);
    }

    header('Location: panier.php');
    exit;
}
?>
