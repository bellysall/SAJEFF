<?php
$host = 'localhost';
$dbname = 'sajef';
$user = 'root';     // Par défaut avec XAMPP/WAMP
$password = '';     // Laisse vide si aucun mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
