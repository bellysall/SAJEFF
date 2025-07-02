<?php
require_once "connexion.php"; // Assure-toi que ce fichier existe

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Sécurisé
    $role = $_POST["role"];

    // Vérifie si l'utilisateur existe déjà
    $check = $connexion->prepare("SELECT * FROM utilisateurs WHERE username = ?");
    $check->execute([$username]);
    if ($check->rowCount() > 0) {
        $message = "<div class='alert alert-danger text-center'>Nom d'utilisateur déjà utilisé.</div>";
    } else {
        // Insertion
        $stmt = $connexion->prepare("INSERT INTO utilisateurs (username, motdepasse, role) VALUES (?, ?, ?)");
        $stmt->execute([$username, $password, $role]);
        $message = "<div class='alert alert-success text-center'>Compte créé avec succès.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <a href="accueil.php" class="btn btn-secondary mb-3">Accueil</a>

    <?php if (!empty($message)) echo $message; ?>

    <form method="post" class="border p-4 rounded shadow">
        <h2 class="mb-4">Créer un compte</h2>
        <input class="form-control mb-2" type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input class="form-control mb-2" type="password" name="password" placeholder="Mot de passe" required>
        <select class="form-control mb-3" name="role">
            <option value="admin">Admin</option>
            <option value="utilisateur">Utilisateur</option>
        </select>
        <button class="btn btn-primary" type="submit">Créer</button>
    </form>

</body>
</html>
