<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :gérer cookies, sessions, redirections (header) et dates (date, DateTime).
    -Dates : 23-10-2026 &24-10-2026

 */

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
    $_SESSION['login']=$_SESSION['login'];
    $info_login = [
        'login' => $login ,
        'date' => date('d/m/Y H:i:s');
    ];
    setcookie("dernier_login", json_encode($info_login), time() + 86400, "/");
    header("Location: profil.php");
    exit;
}
$dernier_login = '';
$date_dernier_login = '';
if (isset($_COOKIE['dernier_login'])) {
    $cookie_data = json_decode($_COOKIE['dernier_login'], true );
    if ($cookie_data) {
        $dernier_login = $cookie_data['login'] ;
        $date_dernier_login = $cookie_data['date'] ;
    } 
}
/*
4. Questions : - - 
- Où est stockée une session ? Où est stocké un cookie ? 
rep :les cookies sont stockés côté client tandis que les sessions sont stockées côté
serveur.
- Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ?
rep : les information des cookie doivent etre envoiyé avant touts <html> tags , sinon il va declencer un erreur 

*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="login">Login :</label>
        <input type="text" name="login" required>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>