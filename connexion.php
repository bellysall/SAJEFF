<?php
// Démarrer la session pour vérifier si l'utilisateur est connecté
session_start();

// Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion
if (!isset($_SESSION['user'])) {
    header('Location: creer_compte.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord - NDAR NDIMBAL CONNECT</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center">Bienvenue, <?php echo $_SESSION['user']['username']; ?> !</h2>
    <p>Tu es maintenant connecté à ton tableau de bord.</p>
    <p>Ton rôle : <?php echo $_SESSION['user']['role']; ?></p>
    <a href="deconnexion.php" class="btn btn-danger">Se déconnecter</a>
  </div>
</body>
</html>
