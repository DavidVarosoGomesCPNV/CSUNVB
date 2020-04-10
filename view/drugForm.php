<?php
/**
 * Created By PhpStrom.
 * Title : CSUNVB - drugForm.php
 * User : David-Manuel.VAROSO
 * Date : 24.02.2020
 * Time : 10:28
 */

ob_start();
$title = "CSU-NVB - Stupéfiants";

?>
<html lang="fr">
<head>
    <title><?= $title; ?></title>
</head>
<style>

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }
    table, th, td {
        border: 1px solid black;
        padding: 20px;
    }

    input {
        width: 80%;
    }

    td {
        width: 14%;
    }

    select {
        width: 90%;
    }

</style>
<body>
<ul>
    <li><a class="active" href="?action=home">Home</a></li>
    <li><a href="?action=drugs">Stup</a></li>
    <li><a href="?action=drugArchives">Archives</a></li>
</ul>

<h1>Stupéfiants - Semaine X - Form Page</h1>
<form action="/index.php?action=cloturerDay" method="POST">
    <table id="myTable">
        <tr>
            <th>
                <select name="Site" size="1">
                    <OPTION>La Valée-de-Joux
                    <OPTION>Payerne
                    <OPTION>Saint-Loup
                    <OPTION>Sainte-Croix
                    <OPTION>Yverdon
                </select>
            </th>
            <th> <button type="button" id="Bouton<"> < </button> </th>
            <th colspan="2"><input readonly name = "date1" value = "<?= date('Y-m-d'); ?>">
                <?php $date1 = date('Y-m-d'); // Date du jour
                // setlocale(LC_TIME, "fr_FR", "French");
                // echo strftime("%A, %d %B %G", strtotime($date1));
                ?> </th>
            <th> <button type="button" id="Bouton+"> > </button> </th>
        </tr>
        <tr>
            <td>---</td>
            <td>Pharmacie</td>
            <td>VHC 1
                <select name="ambulance1_morph" size="1">
                    <OPTION>35
                    <OPTION>57
                    <OPTION>76
                    <OPTION>77
                    <OPTION>75
                    <OPTION>32
                    <OPTION>57
                    <OPTION>58
                    <OPTION>33
                    <OPTION>31
                    <OPTION>36
                    <OPTION>33
                </select>
            </td>

            <td>VHC 2<select name="ambulance2_morph" size="1">
                    <OPTION>35
                    <OPTION>57
                    <OPTION>76
                    <OPTION>77
                    <OPTION>75
                    <OPTION>32
                    <OPTION>57
                    <OPTION>58
                    <OPTION>33
                    <OPTION>31
                    <OPTION>36
                    <OPTION>33
                </select>
            </td>
            <td>Pharmacie</td>
        </tr>

        <tr>
            <td id="morphineIndex">Morphine N°
                <button type="button" id="Bouton+" onclick="AddInputMorph();">+</button>
            </td>
            <td>----</td>
            <td><input name="VHC1_StartValue1" type="text"></td>
            <td><input name="VHC2_StartValue1" type="text"></td>
            <td>----</td>
        </tr>

        <tr>
            <td><input name="morphineValue2" type="number"></td>
            <td><input name="pharma_MValue2" type="number"></td>
            <td><input name="VHC1_MorphineUsed1" type="number"></td>
            <td><input name="VHC2_MorphineUsed2" type="number"></td>
            <td><input name="pharma2_MValue2" type="number"></td>
        </tr>

        <tr>
            <td><input name="morphineValue1" type="number"></td>
            <td><input name="pharma_MValue1" type="number"></td>
            <td><input name="VHC1_MorphineUsed1" type="number"></td>
            <td><input name="VHC2_MorphineUsed2" type="number"></td>
            <td><input name="pharma2_MValue1" type="number"></td>
        </tr>


        <!-- Fernyl -->

        <tr>
            <td>---</td>
            <td>Pharmacie</td>
            <td>VHC 1
                <select name="ambulance1_fernyl" size="1">
                    <OPTION>35
                    <OPTION>57
                    <OPTION>76
                    <OPTION>77
                    <OPTION>75
                    <OPTION>32
                    <OPTION>57
                    <OPTION>58
                    <OPTION>33
                    <OPTION>31
                    <OPTION>36
                    <OPTION>33
                </select>
            </td>
            <td>VHC 2<select name="ambulance2_fernyl" size="1">
                    <OPTION>35
                    <OPTION>57
                    <OPTION>76
                    <OPTION>77
                    <OPTION>75
                    <OPTION>32
                    <OPTION>57
                    <OPTION>58
                    <OPTION>33
                    <OPTION>31
                    <OPTION>36
                    <OPTION>33
                </select>
            </td>
            <td>Pharmacie</td>
        </tr>

        <tr>
            <td>Fernyl N°
                <button type="button" id="Bouton++" onclick="AddInputFernyl();">+</button>
            </td>
            <td>---</td>
            <td><input name="VHC1_StartValue2" type="text"></td>
            <td><input name="VHC2_StartValue2" type="text"></td>
            <td>---</td>
        </tr>

        <tr>
            <td><input name="fernylValue2" type="number"></td>
            <td><input name="pharma_FValue2" type="number"></td>
            <td><input name="VHC1_FernylUsed1" type="number"></td>
            <td><input name="VHC2_FernylUsed2" type="number"></td>
            <td><input name="pharma2_FValue2" type="number"></td>
        </tr>

        <tr>
            <td><input name="fernylValue1" type="number"></td>
            <td><input name="pharma_FValue1" type="number"></td>
            <td><input name="VHC1_FernylUsed1" type="number"></td>
            <td><input name="VHC2_FernylUsed2" type="number"></td>
            <td><input name="pharma2_FValue1" type="number"></td>
        </tr>

        <!-- TEMESTA -->

        <tr>
            <th>TEMESTA</th>
            <td>---</td>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>

        <!-- Visa -->

        <tr>
            <th>VISA</th>
            <td colspan="4"><input style="width: 80%;" type="text"></td>
        </tr>

    </table>
    <br>
    <input style="width: 250px;" type="submit" value="Cloturer" name="cloturer">

</form>

<script src="/js/drugsFormAdd.js"></script>
</body>

<?php


$content = ob_get_clean();
require "gabarit.php";

?>
