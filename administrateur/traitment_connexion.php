<?php
session_start();
require_once "connexion.php"; // Connexion à ta base

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Récupérer l'utilisateur depuis la base
    $stmt = $connexion->prepare("SELECT * FROM utilisateurs WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["motdepasse"])) {
        // Authentification réussie
        $_SESSION["user"] = [
            "id" => $user["id"],
            "username" => $user["username"],
            "role" => $user["role"]
        ];

        // Rediriger selon le rôle
        if ($user["role"] === "admin") {
            header("Location: admin.php");
        } else {
            header("Location: accueil.php");
        }
        exit;
    } else {
        // Erreur d'authentification
        header("Location: login.php?error=1");
        exit;
    }
}
?>
