<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienvenue - NDAR NDIMBAL CONNECT</title>
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
      background: linear-gradient(45deg,rgb(109, 173, 242),rgb(6, 110, 139));
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

    @media (max-width: 576px) {
      .welcome-container {
        padding: 1.5rem;
      }
      .btn-degrade, .btn-link-degrade {
        font-size: 0.95rem;
        padding: 10px;
      }
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

    <!-- Message de succès (si succès) -->
    <?php if (isset($_GET['success'])): ?>
      <div class="alert alert-success text-center mt-3" role="alert">
        <i class="bi bi-check-circle-fill"></i> Connexion réussie. Redirection en cours...
      </div>
      <script>
        // Redirection vers accueil.php après 3 secondes
        setTimeout(() => {
          window.location.href = "accueil.php";
        }, 3000);
      </script>
    <?php endif; ?>

    <!-- Message d'erreur (si échec) -->
    <?php if (isset($_GET['erreur'])): ?>
      <div class="alert alert-danger text-center mt-3" role="alert">
        <i class="bi bi-exclamation-triangle-fill"></i> Nom d'utilisateur ou mot de passe incorrect.
      </div>
      <script>
        setTimeout(() => {
          const alertBox = document.querySelector('.alert');
          if (alertBox) {
            alertBox.classList.add('fade-out');
          }
        }, 4000);
      </script>
    <?php endif; ?>

    <!-- Formulaire de connexion -->
    <form method="post" action="accueil.php"><!--administrateur/traitment_connexion-->
      <h4 class="text-center mb-3">Plateforme des GIE de Saint-Louis</h4>
      <input class="form-control mb-2" type="text" name="username" placeholder="Nom d'utilisateur" required />
      <input class="form-control mb-3" type="password" name="password" placeholder="Mot de passe" required />
      <button class="btn-degrade" type="submit">
        <i class="bi bi-shield-lock-fill"></i> Se connecter
      </button>
    </form>

    <!-- Lien pour créer un compte -->
    <p class="text-center mt-3">
      Pas encore de compte ?
      <a href="creer_compte.php" class="btn-link-degrade">
        <i class="bi bi-person-plus-fill"></i> Créer un compte
      </a>
    </p>

    <!-- Lien pour entrer sans connexion -->
    <a href="accueil.php" class="btn-degrade text-white">
      <i class="bi bi-box-arrow-in-right"></i> Entrer sans connexion
    </a>
  </div>

  <script>
    // Cacher automatiquement les alertes après 4 secondes
    setTimeout(() => {
      const alertBox = document.querySelector('.alert');
      if (alertBox) {
        alertBox.classList.add('fade-out');
      }
    }, 4000);
  </script>
</body>
</html>
