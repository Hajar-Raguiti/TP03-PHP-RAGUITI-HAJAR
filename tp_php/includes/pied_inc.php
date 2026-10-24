<?php
/*
    -Auteur : Hajar Raguiti 
    -Objectif :  traiter un formulaire HTML avec $_GET, $_POST, $_REQUEST
    -Date : 21-10-2026  &24-19-2026
 */
?>

    <footer>
        <p>&copy; <?php echo ETABLISSEMENT; ?></p>
        <?php echo date('d/m/Y')?>
    </footer>
</body>
</html>
<?php 
echo"<h2>Exercice 6.3 : Dates</h2>";
//Avec DateTime et diff()
$date_now = new DateTime();
$date_fin = new DateTime('15/12/2026') ;
$tmps_rest = $date_now->diff($date_fin) ;
echo "nombre restants avant la fin de semestre  : ".$tmps_rest."<br> ";
//Validez une date saisie
$jour =24 ;
$mois = 10 ;
$annee= 2026 ; 
if (checkdate($mois, $jour , $annee)) {
    echo"la date est valid";
}
else {
    echo"la date n'est pas valid";
}
?>