<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function readDrugItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"), true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readDrugItem($id)
{
    $items = getDrugItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateDrugItems($items)
{
    file_put_contents("model/dataStorage/items.json", json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateDrugItem($item)
{
    $items = getDrugItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveDrugItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyDrugItem($id)
{
    $items = getDrugItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveDrugItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createDrugItem($item)
{
    $items = getDrugItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveDrugItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}


?>

<?php


function cloturer()
{
    if (isset($_POST['cloturer'])) { // si formulaire soumis

        $JsonFile = fopen("model/dataStorage/dataDrugs.json", "w");

        $data = array(
            "Site" => @$_POST['Site'],

            "Vehicule 1" => @$_POST['ambulance1'],
            "Vehicule 2" => @$_POST['ambulance2'],

            "Valeur de depart VHC1" => @$_POST['VHC1_StartValue1'],
            "Valeur de depart VHC2" => @$_POST['VHC2_StartValue1'],


            "ID Morphine1" => @$_POST['morphineValue1'],
            "Valeur de depart pharmacie" => @$_POST['pharmaValue1'],
            "Morphine utilisee VHC1" => @$_POST['VHC1_MorphineUsed1'],
            "Morphine utilisee VHC2" => @$_POST['VHC2_MorphineUsed1'],
            "Valeur de fin pharmacie" => @$_POST['pharma2Value1'],


            "ID Morphine2" => @$_POST['morphineValue2'],
            "Valeur de depart pharmacie_2" => @$_POST['pharmaValue2'],
            "Morphine utilisee VHC1_2" => @$_POST['VHC1_MorphineUsed2'],
            "Morphine utilisee VHC2_2" => @$_POST['VHC2_MorphineUsed2'],
            "Valeur de fin pharmacie_2" => @$_POST['pharma2Value2'],


            "ID Morphine3" => @$_POST['morphineValue3'],
            "Valeur de depart pharmacie_3" => @$_POST['pharmaValue3'],
            "Morphine utilisee VHC1_3" => @$_POST['VHC1_MorphineUsed3'],
            "Morphine utilisee VHC2_3" => @$_POST['VHC2_MorphineUsed3'],
            "Valeur de fin pharmacie_3" => @$_POST['pharma2Value3'],


            "ID Morphine4" => @$_POST['morphineValue4'],
            "Valeur de depart pharmacie_4" => @$_POST['pharmaValue4'],
            "Morphine utilisee VHC1_4" => @$_POST['VHC1_MorphineUsed4'],
            "Morphine utilisee VHC2_4" => @$_POST['VHC2_MorphineUsed4'],
            "Valeur de fin pharmacie_4" => @$_POST['pharma2Value4'],

        );

        $JsonContent = json_encode($data);
        fwrite($JsonFile, $JsonContent);


        /* echo pour tester si les valeurs rentrent bien dans le JSON
        var_dump($data);
        // echo $JsonContent;
         */

        fclose($JsonFile);

    }
}

?>
