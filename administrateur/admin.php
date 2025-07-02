<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin") {
    header("Location: login.php");
    exit;
}

require_once 'connexion.php'; // Assure-toi que ce fichier existe

// Récupération des statistiques
$totalProduits = $connexion->query("SELECT COUNT(*) FROM produits")->fetchColumn();
$totalUtilisateurs = $connexion->query("SELECT COUNT(*) FROM utilisateurs")->fetchColumn();
$totalCommandes = 0; // À ajouter plus tard si tu as une table commandes

// Ajout produit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $desc = htmlspecialchars($_POST['description']);
    $prix = floatval($_POST['prix']);

    $stmt = $connexion->prepare("INSERT INTO produits (nom, description, prix) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $desc, $prix]);
    header("Location: admin.php");
    exit;
}

// Suppression produit
if (isset($_GET['supprimer'])) {
    $id = intval($_GET['supprimer']);
    $connexion->prepare("DELETE FROM produits WHERE id = ?")->execute([$id]);
    header("Location: admin.php");
    exit;
}

// Récupération des produits
$produits = $connexion->query("SELECT * FROM produits")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-3">Bienvenue, Administrateur <?= htmlspecialchars($_SESSION["user"]["username"]) ?></h1>

    <div class="mb-4">
        <a class="btn btn-danger" href="logout.php">Déconnexion</a>
        <a class="btn btn-secondary" href="accueil.php">🏠 Accueil</a>
    </div>

    <h2>📊 Tableau de bord</h2>
    <div class="row text-center mb-4">
        <div class="col-md-4">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Produits</h5>
                    <p class="card-text fs-4"><?= $totalProduits ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Utilisateurs</h5>
                    <p class="card-text fs-4"><?= $totalUtilisateurs ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-warning">
                <div class="card-body">
                    <h5 class="card-title">Commandes</h5>
                    <p class="card-text fs-4"><?= $totalCommandes ?></p>
                </div>
            </div>
        </div>
    </div>

    <h3>➕ Ajouter un nouveau produit</h3>
    <form method="post" class="mb-5 border p-3 rounded">
        <input type="hidden" name="ajouter" value="1">
        <div class="mb-2">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-2">
            <label>Prix (FCFA)</label>
            <input type="number" name="prix" step="0.01" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>

    <h3>📦 Liste des produits</h3>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th><th>Nom</th><th>Description</th><th>Prix</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= htmlspecialchars($p['nom']) ?></td>
                    <td><?= htmlspecialchars($p['description']) ?></td>
                    <td><?= number_format($p['prix'], 2, ',', ' ') ?> FCFA</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="modifier_produit.php?id=<?= $p['id'] ?>">Modifier</a>
                        <a class="btn btn-danger btn-sm" href="admin.php?supprimer=<?= $p['id'] ?>" onclick="return confirm('Supprimer ce produit ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
