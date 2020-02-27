<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";

?>
<html lang="fr">
<head>
    <title><?= $title; ?></title>
    <style>

        .rotate{
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }


        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 5px;
            width:30%;
        }

        .chiffre{
            width: 55%;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>

<h2>Stupéfiants - Semaine <?php /*$NoSemaine*/ ?></h2>


<div style="overflow-x:auto;">
    <table>
        <tr>
            <th>Morphine N°</th>
            <th>Pharma</th>
            <th><?php echo date("l d F Y")?></th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
        </tr>
        <tr>
            <td><label><input class="chiffre" type="number"></td>
            <td><label><input class="chiffre" type="number"></td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
        </tr>
        <tr>
            <td><label><input class="chiffre" type="number"></td>
            <td><label><input class="chiffre" type="number"></td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
            <td>94</td>
        </tr>
        <tr>
            <td><label><input class="chiffre" type="number"></td></td>
            <td><label><input class="chiffre" type="number"></td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
            <td>67</td>
        </tr>
        <tr>
            <th>Fentanyl N°</th>
        </tr>
    </table>
</div>

</body>
</html>
<?php
$content = ob_get_clean();
require "gabarit.php";

?>
