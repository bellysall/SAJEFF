<?php
require_once 'connexion.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Vérifier si le token existe
    $stmt = $connexion->prepare("SELECT * FROM utilisateurs WHERE verification_token = :token");
    $stmt->execute(['token' => $token]);
    $user = $stmt->fetch();

    if ($user) {
        // Mettre à jour le statut de l'utilisateur pour qu'il soit confirmé
        $stmt = $connexion->prepare("UPDATE utilisateurs SET is_verified = 1, verification_token = NULL WHERE verification_token = :token");
        $stmt->execute(['token' => $token]);

        echo "Votre compte a été confirmé. Vous pouvez maintenant vous connecter.";
    } else {
        echo "Token invalide ou expiré.";
    }
}
?>
