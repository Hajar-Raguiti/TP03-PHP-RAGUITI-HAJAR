<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :gérer cookies, sessions, redirections (header) et dates (date, DateTime).
    -Dates : 23-10-2026

 */

session_start();
#vide les variables de session 
session_unset();
#détruise la session
session_destroy();
#redirigez vers login.php.
header("Location: login.php");
exit;
?>