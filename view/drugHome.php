<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";

?>
<html lang="fr">
<head>
    <title><?= $title; ?></title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        padding: 20px;
    }


</style>
<h1>Stupéfiants - Semaine X</h1>
<form method="POST">
    <table>
        <tr>
            <th>...</th>
            <th colspan="4"><?php echo date("d.m") ?></th>
        </tr>
        <tr>
            <th>Morphine N°</th>
            <td>Pharmacie</td>
            <td>Ambulance 1</td>
            <td>Ambulance 2</td>
            <td>Pharmacie</td>
        </tr>
        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>
        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>
        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>
        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>

        <!-- Fernyl -->

        <tr>
            <th>Fernyl N°</th>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>

        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>

        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>

        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>

        <tr>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
            <td style="width: 14%;"><input style="width: 80%;" type="text"></td>
        </tr>

    </table>

</form>


<?php
$content = ob_get_clean();
require "gabarit.php";

?>
