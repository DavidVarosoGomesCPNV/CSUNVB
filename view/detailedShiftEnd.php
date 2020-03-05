<?php
/**
 * CSUNVB - shiftEndHome.php
 *
 * Modified by: Bourgue Arthur & Gacon Kevin
 * Initial modification made on: 06.02.2020 15:06
 * Current version: 1.0
 */

ob_start();
require_once 'model/shiftEndModel.php';
$title = "CSU-NVB - Remise de garde";
?>
<head>
    <link href="/css/shiftEnd.css" rel="stylesheet">
    <script src="/js/shiftEnd.js"></script>
</head>
<br>
<div>
    <h1>Remises de garde</h1>
</div>
<div>
    <div class="container">
        <?php $Remises = readShiftEndItems();
        var_dump($Remises);
        foreach ($Remises['Remise'] as $Ligne){
        ?>
        <div class="row">
            <div class="col-sm-12" style="background-color: #b3e7ff">
                <?php echo
                    '<hr>'
                    . '<h4>'
                    . $Ligne['info1']
                    . '</a> </h4>'
                    . 'Responsable du jour : ' . $Ligne['info4'] . '<br>'
                    . 'Responsable de nuit : ' . $Ligne['info5']
                    . '<br>'; ?>
                <?php } ?>
                <hr>
            </div>
        </div>

    </div>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
