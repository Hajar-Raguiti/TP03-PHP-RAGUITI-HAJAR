<?php 
/*
    -Auteur : Hajar Raguiti 
    -Objectif :  manipuler les types
    -Date : 17-10-2026
 */
echo"<h1>Partie 1 : Variables, constantes, types et chaînes</h1>";
echo 'Hello PHP <br>';

//c'est un commentaire 
# c'est un commentaire 
/*
c'est un commentaire 
c'est un commentaire 
c'est un commentaire 
 */

//Partie 1
###Exercice 1.1
echo"<h2>Exercice 1.1 : Noms de variables</h2>" ;
#Les variables valides sont : 
//$x : contien un lettre 
// $_x : commence par tiret bas 
// $Prix_HT :contient lettres et tiret bas 
// $état : contient des lettre , 'é' est accepté par php


#les Variables non valides sont :
// $2x : commence par chiffre
// $s-y : contient le tiret 
// $prix ht : contient l'espaces

$a=5 ; 
$A = 10 ; 
echo $a."<br>" ;
echo $A."<br>" ; 
// resultat : deux valeurs differant ; php est sensible à la cass .
echo "<br>";
###Exercice1.2
echo"<h2>Exercice 1.2 : Constantes</h2>" ;
require 'config.php';

echo "ETABLISSEMENT : ".ETABLISSEMENT."<br>";
echo "NOTE_MIN  : ".NOTE_MIN ."<br>";
echo "NOTE_MAX   : ".NOTE_MAX  ."<br>";
echo "SEUIL   : ".SEUIL  ."<br>";
if (defined('SEUIL')) {
    echo"Le seuil est definie .<br>";
}
else {
    echo"Le seuil n'est pas definie <br> ";
}

if (defined('INCONNUE')) {
    echo"'INCONNUE' est definie .<br>";
}
else {
    echo"'INCONNUE' n'est pas definie <br>";
}
/*
-php affiche un message d'erreur lorsque on affiche un constante non definie.
-'const' definit des constantes global avant l'execution, 'define' definit les constantes globalement au moment de l'execution
*/
echo "<br>";
###Exercice1.3  
echo"<h2>Exercice 1.3 : Calcul</h2>" ;

$prix_ht = 60;
$tva = 20;
$prix_TTC = $prix_ht + ($prix_ht* $tva/100);
echo "Le prix TTC du produit est de ".$prix_TTC." €.<br>";
echo "<br>";

###Exercice1.4  
echo"<h2>Exercice 1.4 : Types et conversions</h2>" ;

$test = 42   ;
$test = (string) $test ;
var_dump($test);
echo "<br>";
var_dump((bool) 0); //false , la chaine "0 " faux 
echo "<br>";
var_dump((bool) 0.0); // false
echo "<br>";
var_dump((bool) "0" ) ; //false
echo "<br>";
var_dump((bool) "" ) ;//false
echo "<br>";
var_dump((bool) "abc" ) ;//true ; chain non vide
echo "<br>";
var_dump((bool) [] ) ;// false 
echo "<br>";
var_dump((bool) null ) ;// false
echo "<br>";
var_dump((int) 3.9 ); //int 3
echo "<br>";
var_dump((int) "12abc" ) ; // int 12
echo "<br>";
var_dump((float) "1.5e3" ) ;// float 1500
echo "<br>";
var_dump((int) true ) ; //int 1
echo "<br>";

$dec = 255;
$hex = 0xFF;
$oct=0377;
$bin = 0b11111111;

echo"255 en décimale : ".$dec."<br>";
echo"255 en hexadécimal : ".$hex."<br>";
echo"255 en octal : ".$oct."<br>";
echo"255 en binaire : ".$bin."<br>";

echo "<br><br>";

###Exercice1.5 
echo"<h2>Exercice 1.5 : Chaînes de caractères</h2>" ;

$traitees = "égales à";
$ici = 2 ; 
echo "Ahmed a dit : J ai réussi <br>";
echo "Voulez-vous supprimer C:\*.*?<br>";
echo "Ceci n'affichera pas \n de nouvelle ligne<br>";
echo "Les variables ne seront pas $traitees $ici<br>";
echo "Les variables seront égales à 2<br>";

$msg = "*Bonjour les développeurs*";
$msg = trim($msg, "*");
$l = strlen($msg) ;
for ($i=0; $i < $l; $i++) { 
    echo $msg[$i]."<br>" ;
}







?>
