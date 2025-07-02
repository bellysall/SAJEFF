<?php
// Connexion à la base de données
require_once 'connexion.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);
    $email = htmlspecialchars($_POST['email']);

    // Validation des champs
    if (empty($username) || empty($password) || empty($confirm_password) || empty($email)) {
        $error_message = "Tous les champs doivent être remplis.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Les mots de passe ne correspondent pas.";
    } elseif (strlen($password) < 8) {
        $error_message = "Le mot de passe doit comporter au moins 8 caractères.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "L'adresse email est invalide.";
    } else {
        // Vérifier si le nom d'utilisateur ou l'email existe déjà
        $stmt = $connexion->prepare("SELECT * FROM utilisateurs WHERE username = :username OR email = :email");
        $stmt->execute(['username' => $username, 'email' => $email]);
        
        if ($stmt->rowCount() > 0) {
            $error_message = "Ce nom d'utilisateur ou email existe déjà.";
        } else {
            // Hash du mot de passe avant de l'enregistrer
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Générer un token unique de vérification
            $verification_token = bin2hex(random_bytes(16)); // Génère un token de 32 caractères

            // Insérer le nouvel utilisateur dans la base de données avec un statut de non confirmé
            $stmt = $connexion->prepare("INSERT INTO utilisateurs (username, password, email, verification_token, is_verified) VALUES (:username, :password, :email, :verification_token, 0)");
            $stmt->execute(['username' => $username, 'password' => $hashed_password, 'email' => $email, 'verification_token' => $verification_token]);

            // Envoi de l'email de confirmation
            $verification_link = "http://localhost/verification.php?token=$verification_token"; // Adapté pour ton serveur
            $to = $email;
            $subject = "Confirmation de votre inscription";
            $message = "Bonjour $username, \n\nVeuillez confirmer votre inscription en cliquant sur le lien suivant :\n\n$verification_link\n\nBienvenue sur NDAR NDIMBAL CONNECT !";
            $headers = "From: no-reply@ndarnimbal.com";
            
            mail($to, $subject, $message, $headers);

            // Redirection vers la page de connexion avec succès
            header("Location: index.php?success=1");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Créer un compte - NDAR NDIMBAL CONNECT</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #e91e63, #ff9800);
      animation: gradientBackground 8s ease infinite;
      background-size: 400% 400%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
    }

    @keyframes gradientBackground {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .welcome-container {
      background: white;
      color: #333;
      padding: 2rem;
      border-radius: 1rem;
      max-width: 500px;
      width: 100%;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .logo {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .logo img {
      height: 90px;
    }

    .btn-degrade, .btn-link-degrade {
      display: inline-block;
      width: 100%;
      padding: 10px;
      color: white !important;
      text-align: center;
      background: linear-gradient(45deg, #007bff, #00c6ff);
      border: none;
      border-radius: 5px;
      font-weight: bold;
      transition: transform 0.3s ease, background 0.3s ease;
      margin-top: 1rem;
    }

    .btn-degrade:hover, .btn-link-degrade:hover {
      background: linear-gradient(45deg, #0056b3, #0099cc);
      transform: scale(1.03);
    }

    .fade-out {
      opacity: 0;
      transition: opacity 1s ease;
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <div class="logo">
      <img src="images/logo.png" alt="Logo NDAR NDIMBAL CONNECT" />
    </div>

    <!-- Affichage d'erreur si une erreur survient -->
    <?php if (isset($error_message)): ?>
      <div class="alert alert-danger text-center mt-3" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> <?php echo $error_message; ?>
      </div>
    <?php endif; ?>

    <!-- Formulaire de création de compte -->
    <form method="post" action="creer_compte.php">
      <h4 class="text-center mb-3">Créer un compte</h4>
      <input class="form-control mb-2" type="text" name="username" placeholder="Nom d'utilisateur" required />
      <input class="form-control mb-2" type="password" name="password" placeholder="Mot de passe" required />
      <input class="form-control mb-3" type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required />
      <input class="form-control mb-3" type="email" name="email" placeholder="Email" required />
      <button class="btn-degrade" type="submit">
        <i class="bi bi-person-plus-fill"></i> Créer mon compte
      </button>
    </form>

    <p class="text-center mt-3">
      <a href="index.php" class="btn-link-degrade">
        <i class="bi bi-arrow-left-circle-fill"></i> Retour à la connexion
      </a>
    </p>
  </div>
</body>
</html>
