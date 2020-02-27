<?php
/**
 * CSUNVB - adminHome.php
 *
 * Modified by: Fardel Bastien
 * Initial modification made on: 06.02.2020 15:05
 * Current version: 1.0
 */

ob_start();
$title = "CSU-NVB - Administration";
?>
<div class="row m-2">
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=crew">Secouristes</a>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=bases">Bases</a>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
