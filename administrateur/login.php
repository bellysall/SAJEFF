<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Identifiants en dur (à remplacer par une base de données plus tard)
    if ($username === "admin" && $password === "admin123") {
        $_SESSION['admin'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Connexion Administrateur</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
            <input type="password" name="password" placeholder="Mot de passe" required><br>
            <button type="submit">Se connecter</button>
            <?php if ($error): ?><p class="error"><?php echo $error; ?></p><?php endif; ?>
        </form>
    </div>
</body>
</html>