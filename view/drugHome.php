<?php
/**
 * CSUNVB - drugHome.php
 *
 * Modified by: Fardel Bastien
 * Initial modification made on: 06.02.2020 15:05
 * Current version: 1.0
 */

ob_start();
$title = "CSU-NVB - Stupéfiants";
?>
<div class="row m-2">
    <h1>Stupéfiants</h1>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
