<?php
/**
 * Created By PhpStrom.
 * Title : CSUNVB - drugForm.php
 * User : David-Manuel.VAROSO
 * Date : 24.02.2020
 * Time : 10:28
 */

function cloturer()
{
    if (isset($_POST['cloturer'])) { // si formulaire soumis

        $date = @$_POST['date1'];

        $JsonFile = fopen("model/dataStorage/dataDrugs-$date.json", "a");
        // $JsonEmpty = file_get_contents("model/dataStorage/dataDrugs-$date.json");

        if ($JsonFile == ""){
            $data = array([
                "Site" => @$_POST['Site'],
                "Date" => @$_POST['date1'],

                // Morphine
                "Vehicule_1_Morphine" => @$_POST['ambulance1_morph'],
                "Vehicule_2_Morphine" => @$_POST['ambulance2_morph'],

                "Valeur_de_depart VHC1__Morphine" => @$_POST['VHC1_StartValue1'],
                "Valeur_de_depart VHC2__Morphine" => @$_POST['VHC2_StartValue1'],

                // Fernyl
                "Vehicule_1_Fernyl" => @$_POST['ambulance1_fernyl'],
                "Vehicule_2_Fernyl" => @$_POST['ambulance2_fernyl'],

                "Valeur_de_depart VHC1__Fernyl" => @$_POST['VHC1_StartValue2'],
                "Valeur_de_depart VHC2__Fernyl" => @$_POST['VHC2_StartValue2']]);
        }else {
            $data = array(
                "Site" => @$_POST['Site'],
                "Date" => @$_POST['date1'],

                // Morphine
                "Vehicule_1_Morphine" => @$_POST['ambulance1_morph'],
                "Vehicule_2_Morphine" => @$_POST['ambulance2_morph'],

                "Valeur_de_depart VHC1__Morphine" => @$_POST['VHC1_StartValue1'],
                "Valeur_de_depart VHC2__Morphine" => @$_POST['VHC2_StartValue1'],

                // Fernyl
                "Vehicule_1_Fernyl" => @$_POST['ambulance1_fernyl'],
                "Vehicule_2_Fernyl" => @$_POST['ambulance2_fernyl'],

                "Valeur_de_depart VHC1__Fernyl" => @$_POST['VHC1_StartValue2'],
                "Valeur_de_depart VHC2__Fernyl" => @$_POST['VHC2_StartValue2']);

                // Tempsta
        }



        // Boucle pour les id / noms des input pour la morphine
        for ($i = 1; $i <= 10; $i++) {
            // Récuper la derniere valeur de morphineValue utilisé dans le code brut
            $Val = @$_POST['morphineValue' . $i];
            // Donc si le $Val est set
            if (isset($Val)) {
                // Il compte d'abord la valeur de $Val et la compare à > 0
                if (strlen($Val) > 0) {
                    // Si c'est true il crée donc les input avec les noms incrementées
                    $data ["ID_Morphine" . $i] = @$_POST['morphineValue' . $i];
                    $data ["Valeur_de_depart_pharmacie_Morphine" . $i] = @$_POST['pharma_MValue' . $i];
                    $data ["Morphine_utilisee_VHC1_" . $i] = @$_POST['VHC1_MorphineUsed' . $i];
                    $data ["Morphine_utilisee_VHC2_" . $i] = @$_POST['VHC2_MorphineUsed' . $i];
                    $data ["Valeur_de_fin_pharmacie__Morphine" . $i] = @$_POST['pharma2_MValue' . $i];
                }
            }
        }

        // Boucle pour les id / noms des input pour le fernyl
        for ($x = 1; $x <= 10; $x++) {
            // Récuper la derniere valeur de fernylValue utilisé dans le code brut
            $ValX = @$_POST['fernylValue' . $x];

            if (isset($ValX)) {

                if (strlen($ValX) > 0) {

                    $data ["ID_Fernyl" . $x] = @$_POST['fernylValue' . $x];
                    $data ["Valeur_de_depart_pharmacie_Fernyl" . $x] = @$_POST['pharma_FValue' . $x];
                    $data ["Fernyl_utilisee_VHC1_" . $x] = @$_POST['VHC1_FernylUsed' . $x];
                    $data ["Fernyl_utilisee_VHC2_" . $x] = @$_POST['VHC2_FernylUsed' . $x];
                    $data ["Valeur_de_fin_pharmacie_Fernyl" . $x] = @$_POST['pharma2_FValue' . $x];
                }
            }
        }

        $JsonContent = json_encode($data);
        fwrite($JsonFile, $JsonContent);

        fclose($JsonFile);

    }
}

?>
