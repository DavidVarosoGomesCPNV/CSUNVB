<?php
ob_start();
$title = "CSU-NVB - Remise de garde";
?>
<head>
<link href="/css/shiftEnd.css" rel="stylesheet">
<script src="/js/shiftEnd.js"></script>
</head>
<br><div>
    <h1>Remises de garde</h1>
</div>
<div>
<div id="ShiftEndDivButton"><a class="btn btn-primary btn-small m-1" style="color: white" onclick="ShiftEndAdd()">+</a>Nouvelle remise</div>
    <div id="ShiftEndAdd" class="row banner" >
        <h5 style="text-align: center">NOUVELLE REMISE</h5>
        <hr>
        <form action="index.php?action=addRemise" method="post">
            <div id="first">
                <p  style="text-align: center">INFORMATIONS</p>
                <table style="width: 100%">
                <tr>
                    <td width="20%">
                        <p class="infoTitle">Date </p>
                    </td>
                    <td width="30%">
                        <input name="info1" class="info" type="date" style="width: 135px" value="12-07-2018" required>
                    </td>
                    <td width="20%">

                    </td>
                    <td width="30%">

                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="infoTitle">Équipages du jour </p>
                    </td>
                    <td>
                        <input name="info2" class="info" type="text" style="width: 135px" value="f" required>
                    </td>
                    <td>
                        <p class="infoTitle">Équipier nuit </p>
                    </td>
                    <td>
                        <input name="info3" class="info" type="text" style="width: 135px" value="f" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="infoTitle">Responsable de jour </p>
                    </td>
                    <td>
                        <input name="info4" class="info" type="text" style="width: 135px" value="f" required>
                    </td>
                    <td>
                        <p class="infoTitle">Responsable de nuit </p>
                    </td>
                    <td>
                        <input name="info5" class="info" type="text" style="width: 135px" value="f" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="infoTitle">Véhicule(s) de service jour </p>
                    </td>
                    <td>
                        <input name="info6" class="info" type="text" name="dateShiftend" style="width: 135px" value="f" required>
                    </td>
                    <td>
                        <p class="infoTitle">Véhicule(s) de service nuit </p>
                    </td>
                    <td>
                        <input name="info7" class="info" type="text" name="dateShiftend" style="width: 135px" value="f" required>
                    </td>
                </tr>
            </table>
            </div>

            <div id="tableMaterielTelecom">
                <p  style="text-align: center">MATÉRIEL & TÉLÉCOM (JOUR & NUIT)</p>
                <table style="width: 100%">
                    <thead>
                        <tr class="borderBot">
                            <th width="25%"></th>
                            <th width="10%"  class="borderLeft">OUI</th>
                            <th width="10%"  class="borderLeft">NON</th>
                            <th width="45%"  class="borderLeft">Remarques (APPAREIL MANQUANT, ÉTAT DE CHARGE, DÉFECTUOSITÉS)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="borderBot">
                            <td class="titleTable">Radio</td>
                            <td>
                                <input name="matTelYesNo1" type="radio" value="yes" checked required>
                            </td>
                            <td>
                                <input name="matTelYesNo1" type="radio" value="no" required>
                            </td>
                            <td>
                                <textarea name="matTelNote1" class="note"></textarea>
                            </td>
                        </tr>
                        <tr class="borderBot">
                            <td class="titleTable">Détecteurs CO</td>
                            <td>
                                <input name="matTelYesNo2" type="radio" value="yes" checked required>
                            </td>
                            <td>
                                <input name="matTelYesNo2" type="radio" value="no" required>
                            </td>
                            <td>
                                <textarea name="matTelNote2" class="note"></textarea>
                            </td>
                        </tr>
                        <tr class="borderBot">
                            <td class="titleTable">Téléphones</td>
                            <td>
                                <input name="matTelYesNo3" type="radio" value="yes" checked required>
                            </td>
                            <td>
                                <input name="matTelYesNo3" type="radio" value="no" required>
                            </td>
                            <td>
                                <textarea name="matTelNote3" class="note"></textarea>
                            </td>
                        </tr>
                        <tr class="borderBot">
                            <td class="titleTable">GF info avisé</td>
                            <td>
                                <input name="matTelYesNo4" type="radio" value="yes" checked required>
                            </td>
                            <td>
                                <input name="matTelYesNo4" type="radio" value="no" required>
                            </td>
                            <td>
                                <textarea name="matTelNote4" class="note"></textarea>
                            </td>
                        </tr>
                        <tr class="borderBot">
                            <td class="titleTable">Annonces 144</td>
                            <td>
                                <input name="matTelYesNo5" type="radio" value="yes" checked required>
                            </td>
                            <td>
                                <input name="matTelYesNo5" type="radio" value="no" required>
                            </td>
                            <td>
                                <textarea name="matTelNote5" class="note"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div  id="tableVehiculeIntervention">
                <p  style="text-align: center">VÉHICULES & INTERVENTIONS (JOUR & NUIT)</p>
                <table>
                    <thead>
                    <tr class="borderBot">
                        <th width="25%"></th>
                        <th width="10%"  class="borderLeft">OUI</th>
                        <th width="10%"  class="borderLeft">NON</th>
                        <th width="45%"  class="borderLeft">Remarques (APPAREIL MANQUANT, ÉTAT, DÉFECTUOSITÉS, RDV MÉCANIQUE, PNEUS)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="borderBot">
                        <td class="titleTable">Plein essence</td>
                        <td>
                            <input name="vehIntYesNo1" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="vehIntYesNo1" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="vehIntNote1" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Opérationnel</td>
                        <td>
                            <input name="vehIntYesNo2" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="vehIntYesNo2" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="vehIntNote2" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Rdv garage</td>
                        <td>
                            <input name="vehIntYesNo3" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="vehIntYesNo3" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="vehIntNote3" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Gt vhc avisé</td>
                        <td>
                            <input name="vehIntYesNo4" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="vehIntYesNo4" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="vehIntNote4" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">50chf présents</td>
                        <td>
                            <input name="vehIntYesNo5" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="vehIntYesNo5" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="vehIntNote5" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Problèmes d’interventions hors véhicules</td>
                        <td>
                            <input name="vehIntYesNo6" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="vehIntYesNo6" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="vehIntNote6" class="note"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="tableEcranDeCom">
                <p  style="text-align: center">ÉCRANS DE COMMUNICATION & TRAFIC (JOUR & NUIT)</p>
                <table>
                    <thead>
                    <tr class="borderBot">
                        <th width="25%"></th>
                        <th width="10%"  class="borderLeft">OUI</th>
                        <th width="10%"  class="borderLeft">NON</th>
                        <th width="45%"  class="borderLeft">Remarques (DÉFECTUOSITÉS MATÉRIEL, MANQUE PHARMACIE, ABSENCE ÉTUDIANT OU STAGIAIRE)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="borderBot">
                        <td class="titleTable">Info trafic consulté</td>
                        <td>
                            <input name="ecrTraYesNo1" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="ecrTraYesNo1" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="ecrTraNote1" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Report des infos trafic sur plan de secteur en centrale</td>
                        <td>
                            <input name="ecrTraYesNo2" type="radio" value="yes" checked  required>
                        </td>
                        <td>
                            <input name="ecrTraYesNo2" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="ecrTraNote2" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Accueil étudiant ou stagiaire</td>
                        <td>
                            <input name="ecrTraYesNo3" type="radio" value="yes" checked  required>
                        </td>
                        <td>
                            <input name="ecrTraYesNo3" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="ecrTraNote3" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Lecture journal de bord</td>
                        <td>
                            <input name="ecrTraYesNo4" type="radio" value="yes"checked required>
                        </td>
                        <td>
                            <input name="ecrTraYesNo4" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="ecrTraNote4" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Problème et  responsable Gt avisé</td>
                        <td>
                            <input name="ecrTraYesNo5" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="ecrTraYesNo5" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="ecrTraNote5" class="note"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div id="tableCentraleTache">
                <p  style="text-align: center">CENTRALE & TÂCHES (NUIT)</p>
                <table>
                    <thead>
                    <tr class="borderBot">
                        <th width="25%"></th>
                        <th width="10%"  class="borderLeft">OUI</th>
                        <th width="10%"  class="borderLeft">NON</th>
                        <th width="45%"  class="borderLeft">Remarques (VAISSELLE SALE, POUBELLES NON VIDÉES, TÂCHE À FAIRE OU REPORTÉE)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="borderBot">
                        <td class="titleTable">Centrale propre</td>
                        <td>
                            <input name="cenTacYesNo1" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="cenTacYesNo1" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="cenTacNote1" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Tâches du jour effectuées</td>
                        <td>
                            <input name="cenTacYesNo2" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="cenTacYesNo2" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="cenTacNote2" class="note"></textarea>
                        </td>
                    </tr>
                    <tr class="borderBot">
                        <td class="titleTable">Dimanche Fiches stupéfiants et tableau tâches scannées</td>
                        <td>
                            <input name="cenTacYesNo3" type="radio" value="yes" checked required>
                        </td>
                        <td>
                            <input name="cenTacYesNo3" type="radio" value="no" required>
                        </td>
                        <td>
                            <textarea name="cenTacNote3" class="note"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <br><div id="shiftEndAddBottom">
                <input type="button" class="btn colorButton" value="Annuler" onclick="ShiftEndAdd()">
                <input type="submit" class="btn colorButton" id="finish" value="Terminer"é>
                <input type="button" class="btn colorButton" value="<" onclick="PreviousAdd()"  id="prev" disabled>
                <input type="button" class="btn colorButton" value=">" onclick="NextAdd()" id="next">
                <span style="color: white"><span id="currentPage">1</span>/5</span>
            </div>
        </form>
    </div>
    <hr class="row banner" style="height: 2px">
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
