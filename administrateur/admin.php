<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Bienvenue, <?php echo $_SESSION['admin']; ?> 👋</h1>
        <p>Ceci est le tableau de bord administrateur.</p>
        <a href="logout.php" class="btn">Déconnexion</a>
    </div>
</body>
</html>