<?php
/**
 * Ver. 1.0
 * Auteurs: Valentin Zingg & Gwenael West
 * Date: Février 2020
 **/

ob_start();
$title = "CSU-NVB - Accueil";
?>
<div class="row m-2">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=admin">Administration</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=shiftend">Remise de garde</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=todolist">Tâches hebdomadaires</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=drugs">Stupéfiants</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
