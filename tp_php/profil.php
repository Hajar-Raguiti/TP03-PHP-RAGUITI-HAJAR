<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :gérer cookies, sessions, redirections (header) et dates (date, DateTime).
    -Dates : 23-10-2026

 */

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['login']); ?> !</h1>
    <p>Ceci est votre page de profil.</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>