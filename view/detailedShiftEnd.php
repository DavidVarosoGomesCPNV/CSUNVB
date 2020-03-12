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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="background-color: #b3e7ff">
                <h2><?= date("d.m.Y", strtotime($shiftEnd['info1'])) ?></h2>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        Équipages du jour : <?= $shiftEnd['info2'] ?><br>
                        Équipier de nuit : <?= $shiftEnd['info3'] ?><br>
                        Responsable du jour : <?= $shiftEnd['info4'] ?><br>
                    </div>
                    <div class="col-sm-6">
                        Responsable de nuit : <?= $shiftEnd['info5'] ?><br>
                        Véhicule(s) de service jour : <?= $shiftEnd['info6'] ?><br>
                        Véhicule(s) de service de nuit : <?= $shiftEnd['info7'] ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <table style="width: 100%;background-color: #b3e7ff">
        <thead>
        <br>
        <tr>
            <th width="15%"></th>
            <th width="40%" style="text-align: center">Oui / Non</th>
            <th width="45%">Remarques</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #a1c9e0;padding: 5px" colspan="3">MATÉRIEL & TÉLÉCOM (JOUR & NUIT)</td>
        </tr>
        <tr>
            <td class="titleTable">● Radio</td>
            <td style="text-align: center"><?= $shiftEnd['matTelYesNo1'] ?></td>
            <td><?= $shiftEnd['matTelNote1'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● Détecteurs CO</td>
            <td style="text-align: center"><?= $shiftEnd['matTelYesNo2'] ?></td>
            <td><?= $shiftEnd['matTelNote2'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● Téléphones</td>
            <td style="text-align: center"><?= $shiftEnd['matTelYesNo3'] ?></td>
            <td><?= $shiftEnd['matTelNote3'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● GF info avisé</td>
            <td style="text-align: center"><?= $shiftEnd['matTelYesNo4'] ?></td>
            <td><?= $shiftEnd['matTelNote4'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● Annonces 144</td>
            <td style="text-align: center"><?= $shiftEnd['matTelYesNo5'] ?></td>
            <td><?= $shiftEnd['matTelNote5'] ?></td>
        </tr>


        <tr>
            <td style="background-color: #a1c9e0;padding: 5px" colspan="3">VÉHICULES & INTERVENTIONS (JOUR & NUIT)</td>
        </tr>


        <tr>
            <td class="titleTable">● Plein essence </td>
            <td style="text-align: center"><?= $shiftEnd['vehIntYesNo1'] ?></td>
            <td><?= $shiftEnd['vehIntNote1'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● Opérationnel</td>
            <td style="text-align: center"><?= $shiftEnd['vehIntYesNo2'] ?></td>
            <td><?= $shiftEnd['vehIntNote2'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● Rdv garage</td>
            <td style="text-align: center"><?= $shiftEnd['vehIntYesNo3'] ?></td>
            <td><?= $shiftEnd['vehIntNote3'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● AGt vhc avisé</td>
            <td style="text-align: center"><?= $shiftEnd['vehIntYesNo4'] ?></td>
            <td><?= $shiftEnd['vehIntNote4'] ?></td>
        </tr>
        <tr>
            <td class="titleTable">● 50chf présents</td>
            <td style="text-align: center"><?= $shiftEnd['vehIntYesNo5'] ?></td>
            <td><?= $shiftEnd['vehIntNote5'] ?></td>
        </tr><tr>
            <td class="titleTable">● Prob d’interventions hv</td>
            <td style="text-align: center"><?= $shiftEnd['vehIntYesNo6'] ?></td>
            <td><?= $shiftEnd['vehIntNote6'] ?></td>
        </tr>


        <tr>
            <td  style="background-color: #a1c9e0;padding: 5px" colspan="3">ÉCRANS DE COMMUNICATION & TRAFIC (JOUR & NUIT)</td>
        </tr>


        <tr>
            <td class="titleTable">● Info trafic consulté</td>
            <td style="text-align: center"><?= $shiftEnd['ecrTraYesNo1'] ?></td>
            <td><?= $shiftEnd['ecrTraNote1'] ?></td>
        </tr><tr>
            <td class="titleTable">● Report des infos trafic sur plan de secteur en centrale</td>
            <td style="text-align: center"><?= $shiftEnd['ecrTraYesNo2'] ?></td>
            <td><?= $shiftEnd['ecrTraNote2'] ?></td>
        </tr><tr>
            <td class="titleTable">● Accueil étudiant ou stagiaire4</td>
            <td style="text-align: center"><?= $shiftEnd['ecrTraYesNo3'] ?></td>
            <td><?= $shiftEnd['ecrTraNote3'] ?></td>
        </tr><tr>
            <td class="titleTable">● Lecture journal de bord</td>
            <td style="text-align: center"><?= $shiftEnd['ecrTraYesNo4'] ?></td>
            <td><?= $shiftEnd['ecrTraNote4'] ?></td>
        </tr><tr>
            <td class="titleTable">● Problème et responsable Gt avisé</td>
            <td style="text-align: center"><?= $shiftEnd['ecrTraYesNo5'] ?></td>
            <td><?= $shiftEnd['ecrTraNote5'] ?></td>
        </tr>


        <tr>
            <td  style="background-color: #a1c9e0;padding: 5px" colspan="3">CENTRALE & TÂCHES (NUIT)</td>
        </tr>



        <tr>
            <td class="titleTable">● Centrale propre</td>
            <td style="text-align: center"><?= $shiftEnd['cenTacYesNo1'] ?></td>
            <td><?= $shiftEnd['cenTacNote1'] ?></td>
        </tr><tr>
            <td class="titleTable">● Tâches du jour effectuées</td>
            <td style="text-align: center"><?= $shiftEnd['cenTacYesNo2'] ?></td>
            <td><?= $shiftEnd['cenTacNote2'] ?></td>
        </tr><tr>
            <td class="titleTable">● Dimanche Fiches stupéfiants et tableau tâches scannées</td>
            <td style="text-align: center"><?= $shiftEnd['cenTacYesNo3'] ?></td>
            <td><?= $shiftEnd['cenTacNote3'] ?></td>
        </tr>


    </tbody>
</table>
</div>
<br><br>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
