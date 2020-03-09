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

<h1>Stupéfiants - Semaine X</h1>
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
            <th colspan="4"><?php $date1 = date('Y-m-d'); // Date du jour
                setlocale(LC_TIME, "fr_FR", "French");
                echo strftime("%A, %d %B %G", strtotime($date1)); ?></th>
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
            <td>Morphine N°
                <button type="button" id="Bouton+" onclick="AddInputMorph();">+</button>
            </td>
            <td>----</td>
            <td><input name="VHC1_StartValue1" type="text"></td>
            <td><input name="VHC2_StartValue1" type="text"></td>
            <td>----</td>
        </tr>

        <tr>
            <td><input name="morphineValue2" type="text"></td>
            <td><input name="pharma_MValue2" type="text"></td>
            <td><input name="VHC1_MorphineUsed1" type="text"></td>
            <td><input name="VHC2_MorphineUsed2" type="text"></td>
            <td><input name="pharma2_MValue2" type="text"></td>
        </tr>

        <tr>
            <td><input name="morphineValue1" type="text"></td>
            <td><input name="pharma_MValue1" type="text"></td>
            <td><input name="VHC1_MorphineUsed1" type="text"></td>
            <td><input name="VHC2_MorphineUsed2" type="text"></td>
            <td><input name="pharma2_MValue1" type="text"></td>
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
                <button type="button" id="Bouton+" onclick="">+</button>
            </td>
            <td>---</td>
            <td><input name="VHC1_StartValue2" type="text"></td>
            <td><input name="VHC2_StartValue2" type="text"></td>
            <td>---</td>
        </tr>

        <tr>
            <td><input name="fernylValue2" type="text"></td>
            <td><input name="pharma_FValue2" type="text"></td>
            <td><input name="VHC1_FernylUsed1" type="text"></td>
            <td><input name="VHC2_FernylUsed2" type="text"></td>
            <td><input name="pharma2_FValue2" type="text"></td>
        </tr>

        <tr>
            <td><input name="fernylValue1" type="text"></td>
            <td><input name="pharma_FValue1" type="text"></td>
            <td><input name="VHC1_FernylUsed1" type="text"></td>
            <td><input name="VHC2_FernylUsed2" type="text"></td>
            <td><input name="pharma2_FValue1" type="text"></td>
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


<?php


$content = ob_get_clean();
require "gabarit.php";

?>
