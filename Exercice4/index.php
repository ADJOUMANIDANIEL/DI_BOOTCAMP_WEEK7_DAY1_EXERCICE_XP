<?php 
class CalculDates{
//// Méthode pour calculer la différence entre deux dates
    public function differenceDate(){
        $date1 = new DateTime("1981-11-03");
        $date2 = new DateTime("2013-09-04");
        $difference = $date1->diff($date2);
        //Affichage du résultat
        echo "Difference : " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days ";
    }
}
$diff = new CalculDates();

$diff->differenceDate();
?>