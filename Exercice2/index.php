<?php
    //Initialisation des differentes dates pour le calcul 
    $dat1 = strtotime("1981-11-03");
    $dat2 = strtotime("2013-09-04");
    $difference  = abs($dat2 - $dat1);
    $annee = floor($difference / (365*60*60*24));
       $mois = floor (($difference - $annee *  365*60*60*24) / (30*60*60*24));
       $jour = floor (($difference - $annee * 365*60*60*24 -$mois*30*60*60*24)/ (60*60*24));
       $heure =  floor(($difference - $annee * 365*60*60*24- $mois*30*60*60*24 - $jour*60*60*24)/ (60*60));
       printf("%d annee, %d mois, %d jour, %d heure", $annee, $mois, $jour, $heure);
?>