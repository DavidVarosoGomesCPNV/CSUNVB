<?php
/**
 * CSUNVB - shiftEndControler.php
 *
 * Modified by: Fardel Bastien
 * Initial modification made on: 06.02.2020 15:25
 * Current version: 1.0
 */

require_once 'model/shiftEndModel.php';
require_once 'index.php';

function shiftEndHomePage()
{
    if (checkLoggedIn() == true) {
        require_once 'view/shiftEndHome.php';
    } else {
        require_once 'view/login.php';
    }
}

/**
 * Fonction qui test le fichier json avec insertion d'une remise
 */
function addRemise()
{

    //lecture du json
    $Remises = readShiftEndItems();
    //affichage d'une donnée
    var_dump($Remises);
    //création d'une ligne de remise
    $ligne = array
    (
        'info1' => $_POST['info1'],
        'info2' => $_POST['info2'],
        'info3' => $_POST['info3'],
        'info4' => $_POST['info4'],
        'info5' => $_POST['info5'],
        'info6' => $_POST['info6'],
        'info7' => $_POST['info7'],

        'matTelYesNo1' => $_POST['matTelYesNo1'],
        'matTelNote1' => $_POST['matTelNote1'],
        'matTelYesNo2' => $_POST['matTelYesNo2'],
        'matTelNote2' => $_POST['matTelNote2'],
        'matTelYesNo3' => $_POST['matTelYesNo3'],
        'matTelNote3' => $_POST['matTelNote3'],
        'matTelYesNo4' => $_POST['matTelYesNo4'],
        'matTelNote4' => $_POST['matTelNote4'],
        'matTelYesNo5' => $_POST['matTelYesNo5'],
        'matTelNote5' => $_POST['matTelNote5'],

        'vehIntYesNo1' => $_POST['vehIntYesNo1'],
        'vehIntNote1' => $_POST['vehIntNote1'],
        'vehIntYesNo2' => $_POST['vehIntYesNo2'],
        'vehIntNote2' => $_POST['vehIntNote2'],
        'vehIntYesNo3' => $_POST['vehIntYesNo3'],
        'vehIntNote3' => $_POST['vehIntNote3'],
        'vehIntYesNo4' => $_POST['vehIntYesNo4'],
        'vehIntNote4' => $_POST['vehIntNote4'],
        'vehIntYesNo5' => $_POST['vehIntYesNo5'],
        'vehIntNote5' => $_POST['vehIntNote5'],
        'vehIntYesNo6' => $_POST['vehIntYesNo6'],
        'vehIntNote6' => $_POST['vehIntNote6'],

        'ecrTraYesNo1' => $_POST['ecrTraYesNo1'],
        'ecrTraNote1' => $_POST['ecrTraNote1'],
        'ecrTraYesNo2' => $_POST['ecrTraYesNo2'],
        'ecrTraNote2' => $_POST['ecrTraNote2'],
        'ecrTraYesNo3' => $_POST['ecrTraYesNo3'],
        'ecrTraNote3' => $_POST['ecrTraNote3'],
        'ecrTraYesNo4' => $_POST['ecrTraYesNo4'],
        'ecrTraNote4' => $_POST['ecrTraNote4'],
        'ecrTraYesNo5' => $_POST['ecrTraYesNo5'],
        'ecrTraNote5' => $_POST['ecrTraNote5'],

        'cenTacYesNo1' => $_POST['cenTacYesNo1'],
        'cenTacNote1' => $_POST['cenTacNote1'],
        'cenTacYesNo2' => $_POST['cenTacYesNo2'],
        'cenTacNote2' => $_POST['cenTacNote2'],
        'cenTacYesNo3' => $_POST['cenTacYesNo3'],
        'cenTacNote3' => $_POST['cenTacNote3'],
    );
    //écriture dsans le tableau mémoire
    array_push($Remises['Remise'], $ligne);
    var_dump($Remises);
    //écriture dans le json
    updateShiftEndItems($Remises);
}

?>
