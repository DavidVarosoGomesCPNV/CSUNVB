<?php
/**
 * CSUNVB - todoListModel.php
 *
 * Modified by: Fardel Bastien
 * Initial modification made on: 06.02.2020 15:38
 * Current version: 1.0
 */

/**
 * Retourne tous les items dans un tableau indexé de tableaux associatifs
 * Des points seront également retirés au groupe qui osera laisser une des fonctions de ce fichier telle quelle
 * sans l'adapter au niveau de son nom et de son code pour qu'elle dise plus précisément de quelles données elle traite
 */
function readTodoListItems()
{
    return json_decode(file_get_contents("model/dataStorage/items.json"),true);
}

/**
 * Retourne un item précis, identifié par son id
 * ...
 */
function readTodoListItem($id)
{
    $items = getTodoListItems();
    // TODO: coder la recherche de l'item demandé
    return $item;
}

/**
 * Sauve l'ensemble des items dans le fichier json
 * ...
 */
function updateTodoListItems($items)
{
    file_put_contents("model/dataStorage/items.json",json_encode($items));
}

/**
 * Modifie un item précis
 * Le paramètre $item est un item complet (donc un tableau associatif)
 * ...
 */
function updateTodoListItem($item)
{
    $items = getTodoListItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveTodoListItem($items);
}

/**
 * Détruit un item précis, identifié par son id
 * ...
 */
function destroyTodoListItem($id)
{
    $items = getTodoListItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveTodoListItem($items);
}

/**
 * Ajoute un nouvel item
 * Le paramètre $item est un item complet (donc un tableau associatif), sauf que la valeur de son id n'est pas valable
 * puisque le modèle ne l'a pas encore traité
 * ...
 */
function createTodoListItem($item)
{
    $items = getTodoListItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveTodoListItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}


?>
