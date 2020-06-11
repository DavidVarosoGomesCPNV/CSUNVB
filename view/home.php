<?php
/**
 * CSUNVB - home.php
 *
 * Modified by: Fardel Bastien
 * Initial modification made on: 06.02.2020 15:00
 * Current version: 1.0
 */

ob_start();
$title = "CSU-NVB - Accueil";
?>
<div class="row m-2">
    <?php
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == "yes") {
            echo '<a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=admin">Administration</a>';
        }
    }
    ?>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center"
       href="?action=shiftendHome">Remise de garde</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center"
       href="?action=todolist">Tâches hebdomadaires</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=drugs">Stupéfiants</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
