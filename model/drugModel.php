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
