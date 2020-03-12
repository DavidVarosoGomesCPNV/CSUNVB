<?php
/**
 * Created By PhpStrom.
 * Title : CSUNVB - temp.php
 * User : David-Manuel.VAROSO
 * Date : 12.03.2020
 * Time : 14:04
 */
/*
function get_lundi_vendredi_from_week($week,$year,$format="d/m/Y") {

    $firstDayInYear=date("N",mktime(0,0,0,1,1,$year));
    if ($firstDayInYear<5)
        $shift=-($firstDayInYear-1)*86400;
    else
        $shift=(8-$firstDayInYear)*86400;
    if ($week>1) $weekInSeconds=($week-1)*604800; else $weekInSeconds=0;
    $timestamp=mktime(0,0,0,1,1,$year)+$weekInSeconds+$shift;
    $timestamp_vendredi=mktime(0,0,0,1,5,$year)+$weekInSeconds+$shift;

    return array("Lundi " . date($format,$timestamp),"Vendredi " . date($format,$timestamp_vendredi));

}

$debut_fin_semaine = get_lundi_vendredi_from_week(5, 2012);
echo $debut_fin_semaine[0] . " - " . $debut_fin_semaine [1];
//affichera Lundi 30/01/2012 - Vendredi 03/02/2012
*/

$w = date("W"); // Pour la 7 ème semaine à rechercher

// A voir pour l'année pour les numéros de semaines antérieures à la date
// courante
$y = date("Y");

for ($i = 1; $i <= 365; $i++) {
    $week = date("W", mktime(0, 0, 0, 1, $i, $y));
    if ($week == $w) {

        for ($d = 0; $d < 7; $d++) {
            setlocale(LC_TIME, "fr_FR", "French");
            echo strftime("%A %d %B %G", mktime(0, 0, 0, 1, $i + $d, 2020)) . "<br />";
        }
        break;
    }
}

