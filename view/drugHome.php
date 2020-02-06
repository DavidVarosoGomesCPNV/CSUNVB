<?php
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
