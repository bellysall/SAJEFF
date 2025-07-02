<?php
$host = 'localhost';              // Adresse du serveur MySQL
$dbname = 'sajef';      // Nom de ta base de données
$user = 'root';                  // Nom d'utilisateur MySQL (souvent root en local)
$pass = '';                      // Mot de passe (vide par défaut sous XAMPP)

try {
    // Connexion à la base avec PDO
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    
    // Active le mode erreur pour détecter les erreurs SQL
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
