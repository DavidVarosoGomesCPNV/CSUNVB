<?php
/**
 * Auteur: Valentin Zingg
 * Date: Février 2020
 **/

function readTodoListItems()
{
    $data = file_get_contents("model/dataStorage/todos.json");
    $vraijson = json_decode($data,true);
    return $vraijson;
}


function searchTodoListItems($id)
{
    $items = readTodoListItems();
    // TODO: coder la recherche de l'item demandé
    return $items;
}

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
